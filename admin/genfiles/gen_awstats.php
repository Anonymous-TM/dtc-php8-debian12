<?php

function awstat_script_generate(){
	global $pro_mysql_domain_table;
	global $pro_mysql_admin_table;
	global $pro_mysql_subdomain_table;

	global $conf_generated_file_path;
	global $conf_awstats_stats_script_path;

	global $console; // Zakładamy, że $console jest gdzieś zdefiniowane

    // Przykładowe zmienne konfiguracyjne dla bazy danych (zapewnij ich definicję gdzie indziej)
    // Są potrzebne dla połączenia mysqli
    global $db_host, $db_user, $db_pass, $db_name;

    // Nawiązywanie połączenia z bazą danych przy użyciu mysqli
    // Upewnij się, że zmienne $db_host, $db_user, $db_pass, $db_name są ustawione przed wywołaniem tej funkcji
    $mysqli_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Sprawdzanie poprawności połączenia
    if ($mysqli_conn->connect_error) {
        // Użycie error_log zamiast die w przypadku błędu połączenia, co jest lepsze w skryptach działających w tle
        error_log("Błąd połączenia z bazą danych: " . $mysqli_conn->connect_error);
        return false; // Zwracamy false w przypadku błędu
    }

    // Usunięto mysql_select_db("dtc");
    // Zakłada się, że $db_name = "dtc" jest ustawione w zmiennych globalnych

	if ( $conf_awstats_stats_script_path === null || $conf_awstats_stats_script_path === "") // Użycie ścisłego porównania
	{
		$conf_awstats_stats_script_path = "awstats_gen.sh";
	}

	$num_generated_vhosts=0;

	// Initialy delete last week backup
	$stat_script = "#!/bin/bash
#
# This is \"Domain Technologies Control\"'s awstats stat script
# to be installed in crontab. Do not edit : use web interface
# to generate it !!! :)

# Now create all awstats stats
";

	// Select all domains
	// Zmiana: mysql_query na $mysqli_conn->query
	$query = "SELECT * FROM $pro_mysql_domain_table WHERE 1 ORDER BY name;";
	$result = $mysqli_conn->query ($query);

	// Zmiana: Sprawdzenie błędu po query i logowanie
	if ($result === false) {
		error_log("Cannot execute query : \"$query\" - " . $mysqli_conn->error);
        $mysqli_conn->close(); // Zamykamy połączenie przed zakończeniem
		return false; // Zwracamy false w przypadku błędu
	}

	// Zmiana: mysql_num_rows na $result->num_rows
	$num_rows = $result->num_rows;

	if($num_rows < 1){
		error_log("No account to generate for awstats"); // Użycie error_log
        $result->free(); // Zwolnienie pamięci
        $mysqli_conn->close(); // Zamykamy połączenie
		return true; // Nie ma błędów, po prostu brak kont do wygenerowania
	}

    // Zmiana: Pętla for z mysql_fetch_array na pętlę while z $result->fetch_assoc()
    // fetch_assoc() zwraca tablicę asocjacyjną lub null gdy nie ma więcej wierszy
	while($row = $result->fetch_assoc()){
		$web_name = $row["name"];
		$web_owner = $row["owner"];
		$web_default_subdomain = $row["default_subdomain"];
        // Użycie ścisłego porównania z 0
		if (strlen($web_owner) === 0)
		{
			continue;
		}
		// Get the owner informations
		// Zmiana: mysql_query na $mysqli_conn->query
		$query2 = "SELECT * FROM $pro_mysql_admin_table WHERE adm_login='".$mysqli_conn->real_escape_string($web_owner)."';"; // Dodano zabezpieczenie SQL Injection
		$result2 = $mysqli_conn->query ($query2);

        // Zmiana: Sprawdzenie błędu po query i logowanie
		if (!$result2) { // query() zwraca false w przypadku błędu
            error_log("Failed to execute query: \"$query2\" - " . $mysqli_conn->error);
			continue; // Kontynuujemy przetwarzanie kolejnych domen
		}

		// Zmiana: mysql_num_rows na $result2->num_rows
		$num_rows2 = $result2->num_rows;

        // Sprawdzenie czy znaleziono dokładnie 1 wiersz
		if($num_rows2 !== 1){ // Użycie ścisłego porównania
			error_log("Expected 1 user with login $web_owner, but found $num_rows2"); // Użycie error_log
            $result2->free(); // Zwolnienie pamięci
			continue; // Kontynuujemy przetwarzanie kolejnych domen
		}

		// Zmiana: mysql_fetch_array na $result2->fetch_assoc()
		$webadmin = $result2->fetch_assoc();
        // Sprawdzenie czy fetch_assoc zwróciło tablicę
        if ($webadmin === null) {
             error_log("Failed to fetch admin row for login $web_owner");
             $result2->free(); // Zwolnienie pamięci
             continue; // Kontynuujemy przetwarzanie kolejnych domen
        }

		$web_path = $webadmin["path"];

        $result2->free(); // Zwolnienie pamięci po pobraniu danych admina

		// Grab all subdomains
		// Zmiana: mysql_query na $mysqli_conn->query
		$query2 = "SELECT * FROM $pro_mysql_subdomain_table WHERE domain_name='".$mysqli_conn->real_escape_string($web_name)."' AND webalizer_generate='yes' ORDER BY subdomain_name;"; // Dodano zabezpieczenie SQL Injection
		$result2 = $mysqli_conn->query ($query2);

        // Zmiana: Sprawdzenie błędu po query i die na error_log
		if ($result2 === false) {
            error_log("Cannot execute query \"$query2\" - " . $mysqli_conn->error);
            // W tym miejscu można by zdecydować, czy przerwać całkowicie, czy tylko pominąć tę domenę.
            // Zmieniono z die na log i pominięcie domeny.
            continue;
		}

		// Zmiana: mysql_num_rows na $result2->num_rows
		$num_rows2 = $result2->num_rows;

        // Zmieniono $console na error_log dla logowania postępu
		error_log("AWStats: Found $num_rows2 subdomains for $web_name to generate...");

        // Zmiana: Pętla for z mysql_fetch_array na pętlę while z $result2->fetch_assoc()
		while($subdomain = $result2->fetch_assoc()){
			$web_subname = $subdomain["subdomain_name"];
            // strtr jest kompatybilne
			$db_webname=strtr($web_name,'.','_');
			$db_subname=strtr($web_subname,'.','_');
			$db_select_name = $db_webname."#".$db_subname."#xfer";

            // Zmieniono $console na error_log
			error_log("AWStats: Generating for $web_subname.$web_name (DB ref: $db_select_name)...");

			// Variable to use : $web_name $web_owner $web_subname
            // Kod generowanego skryptu shellowego jest kompatybilny z PHP 8
			$stat_script .= "
AWSTATS_LOG_FILE=$web_path/$web_name/subdomains/$web_subname/logs/access.log
if [ -f \$AWSTATS_LOG_FILE ]; then
	AWSTATS_FULL_DOMAIN=$web_subname.$web_name
	AWSTATS_DIR_DATA=$web_path/$web_name/subdomains/$web_subname/awstats
	export AWSTATS_LOG_FILE AWSTATS_FULL_DOMAIN AWSTATS_DIR_DATA
	if [ -f /usr/share/doc/awstats/examples/awstats_buildstaticpages.pl ]; then 
		nice 15 /usr/share/doc/awstats/examples/awstats_buildstaticpages.pl -config=dtc -update -awstatsprog=/usr/lib/cgi-bin/awstats.pl -dir=\$AWSTATS_DIR_DATA
		# Użyto `grep ^nobody:`, aby szukać na początku wiersza
		nobodygroup=`cat /etc/group | cut -f 1 -d: | grep ^nobody:`
		# if we can't find the nobody group, try nogroup
		if [ -z \"\$nobodygroup\" ]; then # Uproszczono składnię testu stringa w bashu
			nobodygroup=`cat /etc/group | cut -f 1 -d: | grep ^nogroup:`
		fi
		# if we can't find nogroup, then set to 65534
		if [ -z \"\$nobodygroup\" ]; then # Uproszczono składnię testu stringa w bashu
			nobodygroup=65534
		fi

		chown nobody:\$nobodygroup \$AWSTATS_DIR_DATA
        # Dodano sprawdzenie czy katalog docelowy dla symlinka istnieje
        if [ -d \"$web_path/$web_name/subdomains/$web_subname/html\" ]; then
		    ln -s \$AWSTATS_DIR_DATA $web_path/$web_name/subdomains/$web_subname/html/awstats
        fi
	fi
fi
";
		}
		$num_generated_vhosts += $num_rows2;
        $result2->free(); // Zwolnienie pamięci po pobraniu danych subdomen
	}

    $result->free(); // Zwolnienie pamięci po pobraniu danych domen

	// Ecriture du fichier
    // fopen/fwrite/fclose są nadal kompatybilne, dodano podstawową obsługę błędów
	$filepath = "$conf_generated_file_path/awstats_gen.sh";
    $filep = fopen($filepath, "w+");
	if( $filep === false ){ // Użycie ścisłego porównania
		error_log("Cannot open file for writing: $filepath"); // Użycie error_log
        $mysqli_conn->close(); // Zamykamy połączenie
		return false; // Zwracamy false w przypadku błędu
	}
	fwrite($filep,$stat_script);
	fclose($filep);

    // chmod jest kompatybilne, dodano podstawową obsługę błędów
    if (!chmod($filepath, 0750)) {
        error_log("Failed to chmod file: $filepath");
        // Można by tu zdecydować, czy zwrócić błąd, czy tylko zalogować
    }

    // Zmieniono $console na error_log
	error_log("Generated statistic script files for $num_generated_vhosts vhosts!");

    // Zamykanie połączenia z bazą danych na końcu funkcji
    $mysqli_conn->close();

	return true; // Sukces
}

?>
