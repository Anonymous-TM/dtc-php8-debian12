<?php

/********************************************************
 * This will generate the appropriate files for postfix *
 * Generate the following files:              ***********
 * $conf_generated_file_path/postfix_virtual_mailbox_domains
 * domain.com   virtual
 *
 * $conf_generated_file_path/postfix_virtual
 * postmaster@domain.com        postmaster
 *
 * $conf_generated_file_path/postfix_vmailbox
 * emailaddress@domain.com      dtc/domain/Mailboxs/<emailaddress>/Maildir/
 * *
 * $conf_generated_file_path/postfix_virtual_uid_mapping           
 * emailaddress@domain.com      65534         
 *
 * $conf_generated_file_path/postfix_relay_domains
 * domain.name
 * domain2.name
 *
 * $conf_generated_file_path/postfix_relay_recipients
 * emailaddress@domain.com      OK
 * emailaddress2@domain.com     OK
 *
 * $conf_generated_file_path/postfix_aliases
 * mailinglist:         "|/usr/bin/mlmmj-recieve"
 *
 * $conf_generated_file_path/recipient_lists/$domain
 * ($conf_postfix_recipient_lists_path/$domain)
 * email@$domain        OK
 *
 **********************************************/

// UWAGA: Ten kod wymaga dostępnych globalnych zmiennych konfiguracyjnych
// dla połączenia z bazą danych, np. $db_host, $db_user, $db_pass, $db_name.
// W oryginalnym kodzie nie było definicji połączenia,
// więc zakładamy, że są one ustawione globalnie lub dostępne w zasięgu.
// Dodano nawiązanie połączenia mysqli i jego zamknięcie.

function mail_account_generate_postfix(){
        global $pro_mysql_domain_table;
        global $pro_mysql_admin_table;
        global $pro_mysql_subdomain_table; // Użyta w oryginalnym kodzie, choć nie widać jej w wygenerowanym fragmencie
        global $pro_mysql_pop_table; // Użyta w oryginalnym kodzie

        global $console; // Zakładamy, że $console jest gdzieś zdefiniowane

        global $conf_generated_file_path;
        global $conf_addr_mail_server;
        global $conf_dtcadmin_path; // Użyta w oryginalnym kodzie

        global $conf_unix_type; // Użyta w oryginalnym kodzie

        global $conf_nobody_user_id; // Użyta w oryginalnym kodzie, ale zakomentowana w logice UID
        global $conf_dtc_system_uid; // Nieużyta w wygenerowanym fragmencie
        global $conf_dtc_system_username; // Użyta w oryginalnym kodzie

        global $conf_use_cyrus; // Użyta w oryginalnym kodzie
        global $conf_use_sieve; // Użyta w oryginalnym kodzie
        global $conf_use_mail_alias_group; // Użyta w oryginalnym kodzie

        global $conf_support_ticket_email; // Użyta w oryginalnym kodzie
        global $conf_support_ticket_fw_email; // Użyta w oryginalnym kodzie
        global $conf_support_ticket_domain; // Użyta w oryginalnym kodzie
        global $conf_main_domain; // Nieużyta w wygenerowanym fragmencie

        global $adm_realpass; // Użyta w oryginalnym kodzie
        global $adm_pass; // Użyta w oryginalnym kodzie
        global $adm_random_pass; // Użyta w oryginalnym kodzie

        // Przykładowe zmienne konfiguracyjne dla bazy danych (zapewnij ich definicję gdzie indziej)
        global $db_host, $db_user, $db_pass, $db_name;

        // Nawiązywanie połączenia z bazą danych przy użyciu mysqli
        // Upewnij się, że zmienne $db_host, $db_user, $db_pass, $db_name są ustawione przed wywołaniem tej funkcji
        $mysqli_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        // Sprawdzanie poprawności połączenia
        if ($mysqli_conn->connect_error) {
            die("Błąd połączenia z bazą danych: " . $mysqli_conn->connect_error);
        }


        // prepend the configured path here
        $conf_postfix_virtual_mailbox_domains_path = $conf_generated_file_path . "/postfix_virtual_mailbox_domains";
        $conf_local_domains_path = $conf_generated_file_path . "/local_domains";
        $conf_postfix_virtual_path = $conf_generated_file_path . "/postfix_virtual";
        $conf_postfix_aliases_path = $conf_generated_file_path . "/postfix_aliases";
        $conf_postfix_vmailbox_path = $conf_generated_file_path . "/postfix_vmailbox";
        $conf_postfix_virtual_uid_mapping_path = $conf_generated_file_path . "/postfix_virtual_uid_mapping";

        $conf_postfix_relay_domains_path = $conf_generated_file_path . "/postfix_relay_domains";
        $conf_postfix_relay_recipients_path = $conf_generated_file_path . "/postfix_relay_recipients";
        $conf_postfix_recipient_lists_path = $conf_generated_file_path . "/recipientlists";

        $conf_postfix_transport_path = $conf_generated_file_path . "/postfix_transport";

        // now for our variables to write out the db info to
        $domains_file = "";
        $local_domains_file = "";
        $domains_postmasters_file = "";
        $aliases_file = "";
        $vmailboxes_file = "";
        $uid_mappings_file = "";
        $relay_domains_file = "";
        $relay_recipients_file = "";
        $transport_file = "";
        //store ALL of the domains we know about
        //if we manage to get better information later, don't worry about the entry on this one
        $relay_recipients_all_domains = "";

        $data = ""; // init var for use later on

//      #CL: Don create sasldb password when using cyrus. 
//      if($conf_use_cyrus != "yes")
//      {
//              genSasl2PasswdDBStart();
//      }
        // go through each admin login and find the domains associated 
        // Zmiana: mysql_query na $mysqli_conn->query
        $query = "SELECT * FROM $pro_mysql_admin_table where disabled='no' or disabled='always-no' or disabled='' ORDER BY adm_login;"; // seeb_new administratorzy
        $result = $mysqli_conn->query ($query);

        // Zmiana: Sprawdzenie błędu po query i die z mysqli_error
        if ($result === false) {
            die("Cannot execute query : \"$query\" - " . $mysqli_conn->error);
        }

        // Zmiana: mysql_num_rows na $result->num_rows
        $num_rows = $result->num_rows;

        if($num_rows < 1){
                // Zmiana: Użycie exit zamiast die, co jest często lepsze w funkcjach
                exit("No account to generate");
        }

        // Zmiana: mysql_fetch_array na $result->fetch_assoc()
        // Loopowanie przez wyniki za pomocą while i fetch_assoc
        while($row = $result->fetch_assoc()){
                $user_admin_name = $row["adm_login"];
                $user_admin_pass = $row["adm_pass"];
                $adm_realpass = $row["adm_pass"];
                $adm_pass = $row["adm_pass"];
                $adm_random_pass = $row["adm_pass"];

                // Zakładamy, że fetchAdmin() jest kompatybilne z PHP 8 i nie używa mysql_*
                $admin = fetchAdmin($user_admin_name,$user_admin_pass);
                if(($error = $admin["err"]) != 0){
                        die("Error fetching admin : $error");
                }

                //Path of user's mailing lists
                // Zakładamy, że getAdminPath() jest kompatybilne z PHP 8
                $admin_path = getAdminPath($user_admin_name);

                $info = $admin["info"];
                $nbr_domain = 0;
                if (isset($admin["data"]))
                {
                        $data = $admin["data"];
                        // Zmiana: sizeof na count (są aliasami, ale count jest preferowane)
                        $nbr_domain = count($data);
                }

                for($j=0;$j<$nbr_domain;$j++){
                        $domain = $data[$j];
                        $domain_full_name = $domain["name"];

                        //$console .= "Processing $domain_full_name ...\n";
                        //if we are primary mx, add to domains
                        //else add to relay
                        $primary_mx=0;
                        if ($domain["primary_mx"] == "" || $domain["primary_mx"] == "default")
                        {
                                $primary_mx=1;
                                $domains_file .= "$domain_full_name virtual\n";
                                $local_domains_file .="$domain_full_name\n";
                        } else {
                                if ( $domain["primary_mx"] == $conf_addr_mail_server) {
                                        $relay_domains_file .= "$domain_full_name\n";
                                        $relay_recipients_all_domains .= "$domain_full_name\n";
                                        if ($domain["mail_relay_host"] != ""){
                                                $transport_file .= "$domain_full_name   smtp:[".$domain["mail_relay_host"]."]\n";
                                        }
                                }
                        }

                        $store_catch_all = "";
                        //$store_catch_all_md = ""; // Usunięto zakomentowaną definicję zmiennej
                        $catch_all_id = $domain["catchall_email"];
                        $abuse_address = 0;
                        $postmaster_address = 0;
                        // This should handle domain parking without a lot of code! :)
                        if($domain["domain_parking"] != "no-parking"){
                                // Zmiana: sizeof na count
                                for($b=0;$b<count($data);$b++){
                                        if($data[$b]["name"] == $domain["domain_parking"]){
                                                if(isset($data[$b]["emails"])){
                                                        $domain["emails"] = $data[$b]["emails"];
                                                }else{
                                                        unset($domain["emails"]);
                                                }
                                        }
                                }
                        }
//Mail Group Aliases Start
                        if ( $conf_use_mail_alias_group == "yes" )
                        {
                                if ( $primary_mx && $domain["domain_parking"] != "no-parking" )
                                {
                                        // @domain1 -> @domain2
                                        $domains_postmasters_file.= "# Mail Alias Groups for ".$domain["name"]."\n";
                                        $domains_postmasters_file.= "@".$domain["name"]." @".$domain["domain_parking"]."\n";
                                        $domains_postmasters_file.= "#\n";
                                }
                                elseif ( $primary_mx && isset($domain["aliases"]) )
                                {
                                        $aliases = $domain["aliases"];
                                        // Zmiana: sizeof na count
                                        $nbr_boites = count($aliases);
                                        // go through each of these emails and build the vmailbox file
                                        //also create our sasldb2 if we have a saslpasswd2 exe
                                        for($k=0;$k<$nbr_boites;$k++){
                                                $alias = $aliases[$k];
                                                $id = $alias["id"];
                                                $domain_parent = $alias["domain_parent"];
                                                $ainc = $alias["autoinc"];
                                                // Użycie explode zamiast preg_split z prostym separatorem \n
                                                $mailbox_cleanup2 = explode("\n", str_replace("\r\n", "\n", $alias["delivery_group"]));
                                                $deliver_mailbox = '';
                                                if ( $k==0 ) $domains_postmasters_file.= "# Mail Alias Groups for : ".$domain_parent."\n";
                                                // if we have a $id equal to abuse
                                                if ($id == "abuse"){
                                                        $abuse_address++;
                                                }
                                                if ($id == "postmaster"){
                                                        $postmaster_address++;
                                                }
                                                for($x=0;$x<count($mailbox_cleanup2);$x++)
                                                {
                                                        if ( $x<count($mailbox_cleanup2)-1 )
                                                                $deliver_mailbox.=trim($mailbox_cleanup2[$x]).",";
                                                        else
                                                                $deliver_mailbox.=trim($mailbox_cleanup2[$x]);
                                                }
                                                $domains_postmasters_file.=$id."@".$domain_parent." ".$deliver_mailbox."\n";
                                                if ( $k==$nbr_boites-1 ) $domains_postmasters_file.= "#\n";
                                        }
                                }
                        }
//Mail Group Aliases End
                        if(isset($domain["emails"]) && $primary_mx && $domain["domain_parking"] == "no-parking" ){
                                $emails = $domain["emails"];
                                // Zmiana: sizeof na count
                                $nbr_boites = count($emails);
                                // go through each of these emails and build the vmailbox file
                                //also create our sasldb2 if we have a saslpasswd2 exe
                                for($k=0;$k<$nbr_boites;$k++){
                                        $email = $emails[$k];
                                        $id = $email["id"];
                                        $uid = $email["uid"];
                                        // if our uid is 65534, make sure it's the correct uid as per the OS (99 for redhat)
/* if ($uid == 65534){
                                                $uid = $conf_nobody_user_id;
                                        }*/
                                        $localdeliver = $email["localdeliver"];
                                        $redirect1 = $email["redirect1"];
                                        $redirect2 = $email["redirect2"];
                                        $_id = strtr($id,".",":");
                                        $home = $email["home"];
                                        $passwdtemp = $email["passwd"];
                                        // crypt() jest nadal dostępne, ale password_hash() jest zalecane do przechowywania haseł.
                                        // Zakładamy, że dtc_makesalt() jest kompatybilne z PHP 8.
                                        $passwd = crypt($passwdtemp, dtc_makesalt());
                                        $spam_mailbox = $email["spam_mailbox"];
                                        $spam_mailbox_enable = $email["spam_mailbox_enable"];
                                        $vacation_flag = $email["vacation_flag"];
                                        // stripslashes() jest nadal dostępne
                                        $vacation_text = stripslashes($email["vacation_text"]);

                                        if ( $k==0 ) $domains_postmasters_file.= "# Mailboxes for : ".$domain_full_name."\n";
                                        $spam_stuff_done = 0;
                                        $homedir_created = 0;
                                        // Zmiana: Sprawdzenie is_dir() powinno być przed strlen($home)
                                        if (!isset($home) || $home==""){
                                                // Użycie error_log() zamiast $console dla lepszego logowania błędów w skryptach serwerowych
                                                error_log("Missing home variable for $id");
                                        }
                                        // Dodano sprawdzenie strlen($home) > 0 PRZED is_dir() i tworzeniem katalogu
                                        if(strlen($home) > 0 && !is_dir($home) && ($conf_use_cyrus != "yes") && $id != "cyrus" && $id != "cyradm"){
                                                $PATH = getenv('PATH');
                                                putenv("PATH=/usr/lib/courier-imap/bin:$PATH");
                                                // Sprawdzenie wyniku system()
                                                if (system("/bin/mkdir -p $home && maildirmake $home") === false) {
                                                     error_log("Failed to create maildir for $id at $home");
                                                }
                                                putenv("PATH=$PATH");
                                                $homedir_created = 1;
                                        }

                                        // if we have a $id equal to abuse
                                        if ($id == "abuse"){
                                                $abuse_address++;
                                        }
                                        if ($id == "postmaster"){
                                                $postmaster_address++;
                                        }
                                        // Previously: only generate sasl logins for local accounts
                                        // In fact, there is no reason to do so. We might want to create a mail account ONLY for sending
                                        // some mail, and not receiving.
//                                      #CL: Not needed for cyrus
//                                      if($conf_use_cyrus != "yes")
//                                      {
//                                              // Zakładamy, że genSasl2PasswdDBEntry() jest kompatybilne z PHP 8
//                                              genSasl2PasswdDBEntry($domain_full_name,$id,$passwdtemp,$conf_addr_mail_server);
//                                      }

                                        // setup a postfix mapping for local delivery or vacation flags
                                        if ($localdeliver == "yes" || $localdeliver == "true" || $vacation_flag == "yes"){
                                                // setup the catch_all for locally delivered email addresses
                                                // Usunięto zakomentowaną linię z store_catch_all_md
                                                if ($id == $catch_all_id){
                                                        $store_catch_all .= "@$domain_full_name $id@$domain_full_name\n";
                                                }
                                                $vmailboxes_file .= "$id@$domain_full_name $home/Maildir/\n";
                                                $uid_mappings_file .= "$id@$domain_full_name $uid\n";
                                                // Dodano sprawdzenie isset($catch_all_id) && $catch_all_id != ""
                                                if (isset($catch_all_id) && $catch_all_id != ""){
                                                        //just so we can deliver to our vmailboxs if we have set a catch-all (otherwise postfix gets confused, and delivers all mail to the catch all)
                                                        $domains_postmasters_file .= "$id@$domain_full_name $id@$domain_full_name\n";
                                                }
                                        }

                                        // Uproszczone warunki isset($redirect1) && $redirect1 != "" na pusty string, co jest równoważne w tym kontekście
                                        if($redirect1 != ""){
                                                unset($extra_redirects);
                                                if ($localdeliver == "yes" || $localdeliver == "true" || $vacation_flag == "yes"){
                                                        // need to generate .mailfilter file with "cc" and also local delivery
                                                        // Uproszczone warunki isset($redirect2) || $redirect2 == ""
                                                        if($conf_use_cyrus != "yes" && $redirect2 == "" ){
                                                                if($conf_use_sieve == "yes"){
                                                                        // Zakładamy, że genDotSieveFile() jest kompatybilne z PHP 8
                                                                        genDotSieveFile($home,$id,$domain_full_name,$spam_mailbox_enable,$spam_mailbox,$localdeliver,$vacation_flag,$vacation_text,$redirect1);
                                                                }else{
                                                                        // Zakładamy, że genDotMailfilterFile() jest kompatybilne z PHP 8
                                                                        genDotMailfilterFile($home,$id,$domain_full_name,$spam_mailbox_enable,$spam_mailbox,$localdeliver,$vacation_flag,$vacation_text,$redirect1);
                                                                }
                                                        }
                                                        $spam_stuff_done = 1;
                                                } else {
                                                        $extra_redirects = " $redirect1 ";
                                                }
                                                // Uproszczone warunki $redirect2 != "" && isset($redirect2)
                                                if ($redirect2 != ""){
                                                        if ($localdeliver == "yes" || $localdeliver == "true" || $vacation_flag == "yes"){
                                                                //need to generate .mailfilter file with "cc" and also local delivery
                                                                if($conf_use_cyrus != "yes"){
                                                                        if($conf_use_sieve == "yes"){
                                                                                // Zakładamy, że genDotSieveFile() jest kompatybilne z PHP 8
                                                                                genDotSieveFile($home,$id,$domain_full_name,$spam_mailbox_enable,$spam_mailbox,$localdeliver,$vacation_flag,$vacation_text,$redirect1,$redirect2);
                                                                        }else{
                                                                                // Zakładamy, że genDotMailfilterFile() jest kompatybilne z PHP 8
                                                                                genDotMailfilterFile($home,$id,$domain_full_name,$spam_mailbox_enable,$spam_mailbox,$localdeliver,$vacation_flag,$vacation_text,$redirect1,$redirect2);
                                                                        }
                                                                }
                                                                $spam_stuff_done = 1;
                                                        } else if (isset($extra_redirects)) {
                                                                $extra_redirects .= " , $redirect2";
                                                        }
                                                }
                                                // Uproszczone warunki isset($extra_redirects)
                                                if ($store_catch_all == "" && ($id == "*" || $id == $catch_all_id)){
                                                        if(isset($extra_redirects)){
                                                                $store_catch_all .= "@$domain_full_name        $extra_redirects\n";
                                                        }
                                                } else if (isset($extra_redirects)) {
                                                        $domains_postmasters_file .= "$id@$domain_full_name     $extra_redirects\n";
                                                }
                                                unset($extra_redirects);
                                        }
                                        //if we haven't added the spam mailbox yet, do it here
                                        if ($spam_stuff_done == 0){
                                                if($conf_use_cyrus != "yes"){
                                                        if($conf_use_sieve == "yes"){
                                                            // Zakładamy, że genDotSieveFile() jest kompatybilne z PHP 8
                                                                        genDotSieveFile($home,$id,$domain_full_name,$spam_mailbox_enable,$spam_mailbox,$localdeliver,$vacation_flag,$vacation_text,$redirect1,$redirect2);
                                                                } else {
                                                            // Zakładamy, że genDotMailfilterFile() jest kompatybilne z PHP 8
                                                                        genDotMailfilterFile($home,$id,$domain_full_name,$spam_mailbox_enable,$spam_mailbox,$localdeliver,$vacation_flag,$vacation_text,$redirect1,$redirect2);
                                                        }
                                                }
                                        }
                                        // Zmiana: Sprawdzenie wyniku system()
                                        if(is_dir($home) && $homedir_created == 1 && $id != "cyrus" && $id != "cyradm"){
                                                if (system("chown -R $conf_dtc_system_username $home") === false) {
                                                    error_log("Failed to chown maildir for $id at $home");
                                                }
                                        }
                                        // Zmiana: sizeof na count
                                        if ( $k==count($emails)-1 ) $domains_postmasters_file.= "#\n";
                                }
                        }
                        //add support for creation of mailing lists
                        if(isset($domain["mailinglists"]) && $primary_mx){
                                $lists = $domain["mailinglists"];
                                // Zmiana: sizeof na count
                                $nbr_boites = count($lists);
                                // go through each of these lists and add to virtual maps and normal aliases
                                for($k=0;$k<$nbr_boites;$k++){
                                        $list = $lists[$k];
                                        $list_id = $list["id"];
                                        $list_name = $list["name"];
                                        if ($list_name == "abuse"){
                                                $abuse_address++;
                                        }
                                        else if ($list_name == "postmaster"){
                                                $postmaster_address++;
                                        }
                                        $list_owner = $list["owner"];
                                        $list_domain = $list["domain"];

                                        $list_path = "$admin_path/$list_domain/lists";
                                        $name = $list_domain . "_" . $list_name;
                                        // Zmiana: Usunięto ereg na preg_match, który jest kompatybilny z PHP 8
                                        // (ereg zostało usunięte w PHP 7.0)
                                        // Zmiana: Sprawdzenie wyniku preg_match (zwraca 0, 1 lub false)
                                        if (preg_match("/@/", $list_owner) === 0){
                                                $owner = $list_owner . "@" . $list_domain;
                                        } else {
                                                $owner = $list_owner;
                                        }
                                        // str_replace jest nadal kompatybilne
                                        $modified_name = str_replace("-","_",$name);
                                        $domains_postmasters_file .= $list_name . "@" . $list_domain . " " . $modified_name . "\n";
                                        $aliases_file .= $modified_name.': "|/usr/bin/mlmmj-recieve -L '.$list_path.'/'.$name.'/"' . "\n";
                                }
                        }
                        // if an abuse@ email hasn't been set, set one here to go to postmaster
                        if ($abuse_address == 0 && $primary_mx){
                                $domains_postmasters_file .= "abuse@$domain_full_name postmaster\n";
                        }
                        if ($postmaster_address == 0 && $primary_mx){
                                $domains_postmasters_file .= "postmaster@$domain_full_name postmaster\n";
                        }

                        //always store catch all last... :)
                        if(isset($store_catch_all) && $store_catch_all != ""){
                                $domains_postmasters_file .= $store_catch_all;
                        }
                        //now store the Maildir version
                        // Usunięto zakomentowany blok store_catch_all_md
                        // if(isset($store_catch_all_md) && $store_catch_all_md != ""){
                        //        $vmailboxes_file .= $store_catch_all_md;
                        // }

                }
        }

        // Zwolnienie pamięci zajmowanej przez wyniki zapytania admin
        $result->free();


        //check to see if the domain is in our local recipients first before adding to allowed relay domains
        // Zakładamy, że get_remote_mail_domains() jest kompatybilne z PHP 8
        $relay_domains_file_temp_list = explode("\n", get_remote_mail_domains());
        foreach($relay_domains_file_temp_list as $domain){
                if (isset($domain) && strlen($domain) > 0){
                        // Zmiana: Sprawdzenie wyniku preg_match
                        if (!preg_match("/^$domain\s/", $domains_file))
                        {
                                $relay_domains_file .= "$domain\n";
                        }
                }
        }

        $relay_recipients_list = explode("\n", $relay_domains_file);

        foreach($relay_recipients_list as $domain){
                // Zmiana: mysql_query na $mysqli_conn->query
                $qqq = "SELECT fullemail FROM $pro_mysql_pop_table WHERE mbox_host='".$mysqli_conn->real_escape_string($domain)."';"; // seeb_new relaydomain
                $qqr = $mysqli_conn->query($qqq);

                // Zmiana: Sprawdzenie błędu po query i die z mysqli_error
                if ($qqr === false) {
                    die("Cannot query $qqq line: ".__LINE__." file ".__FILE__." sql said:" .$mysqli_conn->error);
                }

                // Zmiana: mysql_num_rows na $qqr->num_rows
                $qqn = $qqr->num_rows;
                // Zmiana: mysql_fetch_array na $qqr->fetch_assoc()
                for($i=0;$i<$qqn;$i++){
                        $a = $qqr->fetch_assoc();
                        // Sprawdzenie, czy fetch_assoc zwróciło tablicę
                        if ($a) {
                           $relay_recipients_file .= $a["fullemail"]." OK\n";
                        }
                }
                // Zwolnienie pamięci zajmowanej przez wyniki zapytania pop
                $qqr->free();
        }

        // Zakładamy, że get_remote_mail_recipients() jest kompatybilne z PHP 8
        $relay_recipients_list = explode("\n", get_remote_mail_recipients());

        foreach($relay_recipients_list as $email){
                if (isset($email) && strlen($email) > 0){
                        // echo "Stage 1 - adding $email";
                        $relay_recipients_file .= $email . " OK\n";
                }
        }

        // if we haven't added the following domains to the $relay_recipients_file, then we need to add a wildcard, bad, but necessary for domains we don't have email lists for
        $relay_recipients_all_domains_list  = explode("\n", $relay_recipients_all_domains);
        foreach($relay_recipients_all_domains_list as $domain){
                // if the $domain isn't set here, keep going
                if (!(isset($domain) && strlen($domain) >0)){
                        continue;
                }
                //$console .= "$domain is being backed up\n";
                //try and read a file here, and see if we have a list already created
                if (is_file("$conf_postfix_recipient_lists_path/$domain")){
                        //$console .= "File found with domain info - $conf_postfix_recipient_lists_path/$domain\n";
                        //check to see if we have already got this domain...
                        //if we do, then it means that we have a rogue $domain file, and it should be deleted! :)

                        // Zmiana: Sprawdzenie wyniku preg_match
                        if (preg_match("/\@$domain\s+OK/", $relay_recipients_file)){
                                // unlink jest nadal kompatybilne
                                if (!unlink("$conf_postfix_recipient_lists_path/$domain")) {
                                    error_log("Failed to unlink rogue recipient list file: $conf_postfix_recipient_lists_path/$domain");
                                }
                        } else {
                                // echo "Reading $domain from recip file...";
                                // fopen/fread/filesize/fclose są nadal kompatybilne, ale wymagają lepszej obsługi błędów w produkcji
                                $filepath = "$conf_postfix_recipient_lists_path/$domain";
                                if (is_readable($filepath) && filesize($filepath) > 0) {
                                    $fp = fopen($filepath, "r");
                                    if ($fp) {
                                        $contents = fread($fp, filesize($filepath));
                                        fclose($fp);
                                        //now we have found some domain email list, append it here
                                        $relay_recipients_file .= $contents;
                                        // echo "Stage 2 - adding $contents";
                                    } else {
                                        error_log("Failed to open recipient list file for reading: $filepath");
                                    }
                                } else if (filesize($filepath) == 0) {
                                     error_log("Recipient list file is empty: $filepath");
                                } else {
                                     error_log("Recipient list file not readable: $filepath");
                                }
                        }
                }
                //finally check to see if we haven't got any entries for this domain
                // Zmiana: Sprawdzenie wyniku preg_match
                if (!preg_match("/\@$domain\s+OK/", $relay_recipients_file)){
                        //$console .= "Faking domain entry for $domain...\n";
                        $relay_recipients_file .= "@$domain OK\n";
                        // echo "Stage 3 - adding $domain OK";
                        //write this to a file, so admin/users can edit later
                        // file_exists, mkdir, fopen, fwrite, fclose są nadal kompatybilne, wymagają lepszej obsługi błędów
                        if (!file_exists("$conf_postfix_recipient_lists_path")){
                                //make a directory here if it doesn't exist yet
                                // Dodano sprawdzenie wyniku mkdir
                                if (!mkdir("$conf_postfix_recipient_lists_path", 0755, true)) { // true dla rekurencyjnego tworzenia katalogów
                                     error_log("Failed to create recipient lists directory: $conf_postfix_recipient_lists_path");
                                }
                        }
                        $filepath = "$conf_postfix_recipient_lists_path/$domain";
                        $fp = fopen($filepath, "w");
                        if ($fp) {
                            fwrite($fp, "@$domain OK\n");
                            fclose($fp);
                        } else {
                            error_log("Failed to open recipient list file for writing: $filepath");
                        }
                }
        }

        // Add the support@ email
        $aliases_file .= "dtc_support_ticket_messages: \"| ".$conf_dtcadmin_path."/support-receive.php\"\n";
        $domains_postmasters_file .= $conf_support_ticket_email."@".$conf_support_ticket_domain." dtc_support_ticket_messages\n";

        // Add the supportforward@ email
        $aliases_file .= "dtc_support_forward_ticket_messages: \"| reformime -e -s 1.2 | ".$conf_dtcadmin_path."/support-receive.php\"\n";
        $domains_postmasters_file .= $conf_support_ticket_fw_email."@".$conf_support_ticket_domain." dtc_support_ticket_messages\n";

        //write out our config files
        // fopen/fwrite/fclose są nadal kompatybilne, wymagają lepszej obsługi błędów
        $filepath = "$conf_postfix_virtual_mailbox_domains_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $domains_file);
            fclose($fp);
        } else {
            error_log("Failed to open file for writing: $filepath");
        }

        $filepath = "$conf_local_domains_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $local_domains_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }


        $filepath = "$conf_postfix_virtual_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $domains_postmasters_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }

        $filepath = "$conf_postfix_aliases_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $aliases_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }

        $filepath = "$conf_postfix_vmailbox_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $vmailboxes_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }

        $filepath = "$conf_postfix_virtual_uid_mapping_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $uid_mappings_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }


        $filepath = "$conf_postfix_relay_domains_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $relay_domains_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }


        $filepath = "$conf_postfix_relay_recipients_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $relay_recipients_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }


        $filepath = "$conf_postfix_transport_path";
        $fp = fopen ( $filepath, "w");
        if ($fp) {
            fwrite($fp, $transport_file);
            fclose($fp);
        } else {
             error_log("Failed to open file for writing: $filepath");
        }


        //now that we have our base files, go and rebuild the db's
        if($conf_unix_type == "bsd"){
                $POSTMAP_BIN = "/usr/local/sbin/postmap -r";
                $POSTALIAS_BIN = "/usr/local/sbin/postalias -r";
        }else{
                $POSTMAP_BIN = "/usr/sbin/postmap -r";
                $POSTALIAS_BIN = "/usr/sbin/postalias -r";
        }

        // system() jest nadal kompatybilne, ale dodano podstawową obsługę błędów
        if (system("$POSTMAP_BIN $conf_postfix_virtual_mailbox_domains_path") === false) {
            error_log("Failed to run postmap for postfix_virtual_mailbox_domains");
        }
        if (system("$POSTMAP_BIN $conf_postfix_virtual_path") === false) {
            error_log("Failed to run postmap for postfix_virtual");
        }
        if (system("$POSTALIAS_BIN $conf_postfix_aliases_path") === false) {
             error_log("Failed to run postalias for postfix_aliases");
        }
        if (system("$POSTMAP_BIN $conf_postfix_vmailbox_path") === false) {
             error_log("Failed to run postmap for postfix_vmailbox");
        }
        if (system("$POSTMAP_BIN $conf_postfix_virtual_uid_mapping_path") === false) {
             error_log("Failed to run postmap for postfix_virtual_uid_mapping");
        }
        if (system("$POSTMAP_BIN $conf_postfix_relay_recipients_path") === false) {
             error_log("Failed to run postmap for postfix_relay_recipients");
        }
        if (system("$POSTMAP_BIN $conf_postfix_transport_path") === false) {
             error_log("Failed to run postmap for postfix_transport");
        }

//      genSaslFinishConfigAndRights(); // Zakomentowane w oryginale, pozostawione
        // system() jest nadal kompatybilne, dodano podstawową obsługę błędów
        if (system("chown  ".$conf_dtc_system_username.":postfix ".$conf_generated_file_path."/postfix_*") === false) {
             error_log("Failed to chown generated postfix files");
        }
        //in case our relay_domains file hasn't been created correctly, we should touch it
        // touch jest nadal kompatybilne, dodano podstawową obsługę błędów
        if (!touch($conf_postfix_relay_domains_path)) {
             error_log("Failed to touch relay_domains file: $conf_postfix_relay_domains_path");
        }

        // Zamykanie połączenia z bazą danych na końcu funkcji
        $mysqli_conn->close();
}

?>
