<?php
	/**
	* @package DTC
	* @todo translate to any others language
	* @version  $Id: dtc_config_strings.php,v 1.37 2006/05/08 08:47:53 seeb Exp $
	* New arrays for translate menage_products
	* @see /dtc/admin/dtcrm/product_manager.php
	**/
	// added by seeb 8th may 2006 
$txt_cfg_daemon = array (
  "fr" => "TRANS ",
  "en" => "Daemon",
  "hu" => "TRANS ",
  "it" => "TRANS ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Demony ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );

$txt_cfg_skin_chooser= array (
  "fr" => "TRANS",
  "en" => "DTC Skin chooser",
  "hu" => "TRANS ",
  "it" => "TRANS ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Wyb�r sk�rek DTC",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );

// added 7th may 2006 by seeb

$txt_product_name = array (
  "fr" => "Nom ",
  "en" => "Name ",
  "hu" => "TRANS ",
  "it" => "Nome ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Nazwa ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );

  $txt_product_price = array (
  "fr" => "Prix ",
  "en" => "Price ",
  "hu" => "TRANS ",
  "it" => "Prezzo ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Cena w ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );
$txt_product_traffic = array (
  "fr" => "Trafic ",
  "en" => "Traffic ",
  "hu" => "TRANS ",
  "it" => "Traffico ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Transfer ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );
$txt_product_disk= array (
  "fr" => "Disque ",
  "en" => "Disk ",
  "hu" => "TRANS ",
  "it" => "Disco ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Pojemno�� ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );

$txt_product_action = array (
  "fr" => "Action ",
  "en" => "Action ",
  "hu" => "TRANS ",
  "it" => "Azione ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Operacja: ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );
$txt_product_adddomain= array (
  "fr" => "Ajout de domaine ",
  "en" => "Add domain ",
  "hu" => "TRANS ",
  "it" => "Aggiungi dominio ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Dodaj domen�",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );
$txt_product_period = array (
  "fr" => "Periode ",
  "en" => "Period ",
  "hu" => "TRANS ",
  "it" => "Periodo ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Wa�no�� ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );         


$txt_product_mail = array (
  "fr" => "Mail ",
  "en" => "Mail ",
  "hu" => "TRANS ",
  "it" => "Mail ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "Skrzynki ",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );	

// end of new arrays (added by seeb)
$txt_user_menu_email = array (
  "fr" => "Mon e-mail",
  "en" => "My e-mail",
  "hu" => "TRANS ",
  "it" => "Mia e-mail ",
  "nl" => "TRANS ",
  "ru" => "TRANS ",
  "de" => "TRANS ",
  "zh" => "TRANS ",
  "pl" => "M�j e-mail",
  "es" => "TRANS ",
  "pt" => "TRANS "
  );

$txt_cfg_allowed_dns_transfer_list = array(
	"fr" => "Listez ici les IPs des serveurs DNS abilit� a faire des zone transfer s�par� par des &quot;|&quot; (pipe)<br>
	        (laissez vide si vous n'avez pas de serveur DNS de backup) :",
        "en" => "List here DNS server IPs allowed to do zone transfers separated by &quot;|&quot; (pipe)<br>
	        (leave blank if you don't have backup DNS server):",
        "hu" => "TRANS List here DNS server IPs allowed to do zone transfers &quot;|&quot;-al elv�lasztva
	        <br>(hagyja �resen, ha nincs tartal�k DNS szervere)",
        "it" => "Lista qui gli indirizzi IP dei servers DNS abilitati 
a fare zone transfers separati da &quot;|&quot; (pipe)<br> (lasciare 
vuoto se non si hanno server DNS di backup):",
        "nl" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "ru" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "de" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "zh" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "pl" => "Lista serwer�w DNS (adresy IP), dopuszczone do transferu stref odzielone przez &quot;|&quot; (pipe)<br>
	        (Pozostaw puste jesli nie masz zapasowych serwer�w DNS):",
        "es" => "Escribe los servidores MX de respaldo separados por &quot;|&quot; (pipeline)<br>
                (leave blank if you don't have backup MX server):",
		"pt" => "Lista de IPs dos servidores de DNS com permiss�es para transferir zonas, separados  por  &quot;|&quot; (pipe)<br>
		(deixe em branco se n�o tem nenhum servidor de DNS secund�rio) :"
	);

$txt_backup_mx_servers = array(
        "fr" => "Listez ici vos serveur MX de backup s�par� par des &quot;|&quot; (pipe)<br>
	        (laissez vide si vous n'avez pas de serveur MX de backup) :",
        "en" => "List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
        	(leave blank if you don't have backup MX server):",
        "hu" => "Sorolja fel a tartal�k mx szervereit &quot;|&quot;-al elv�lasztva
        	<br>(hagyja �resen, ha nincs tartal�k mx szervere)",
        "it" => "Lista qui i tuoi servers MX di backup separati da 
&quot;|&quot; (pipe)<br>(lasciare vuoto se non si hanno server MX 
di backup):",
        "nl" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "ru" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "de" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "zh" => "TRANS List here your backup MX servers separated by &quot;|&quot; (pipe)<br>
                (leave blank if you don't have backup MX server):",
        "pl" => "Lista serwer�w MX odzielona przez  &quot;|&quot; (pipe/rurka)<br>
                (Pozostaw puste je�li nie masz zapasowych MX'ow-serwer�w poczty):",
        "es" => "Escribe los servidores MX de respaldo separados por &quot;|&quot; (pipeline)<br>
                (leave blank if you don't have backup MX server):",
		"pt" => "Lista dos servidores de backup de e-mail (MX) separados por &quot;|&quot; (pipe)<br>
				(deixe em branco se n�o tem nenhum servidor de backup de e-mail) :"
		);

$txt_cfg_use_des_or_blowfish = array(
"fr" => "Type d'encryption utilis� pour se connecter au serveur Tucows :",
"en" => "Type of encryption for connecting to Tucows server:",
"hu" => "A titkos�t�s t�pusa, ha a Tucows szerverhez kapcsol�dunk:",
"it" => "Tipo di encryption usata per connettersi al server Tucows:",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Klucz blowfish do serwera Tucows:",
"es" => "Tipo de encriptaci�n para conectar al servidor Tucows ",
"pt" => "Tipo de cifra utilizado para se ligar ao servidor Tucows "
);


$txt_cfg_registry_api_title = array(
"fr" => "Configuration de l'API d'enregistrement de nom de domaine",
"en" => "Domain name registry API configuraiton",
"hu" => "Domain n�v regisztr�ci�s API be�ll�t�sa",
"it" => "Configurazione delle API di registrazione dei nomi a dominio",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Konfiguracja API do rejestracji domen",
"es" => "Configuraci�n del API para el registro de nombres",
"pt" => "Nome do dominio do API para o registro de nomes"
);

$txt_cfg_use_test_or_live = array (
"fr" => "Utiliser le serveur LIVE (et non le test) :",
"en" => "Use the LIVE server (and not the test one) :",
"hu" => "Az �les szervert haszn�lja (nem a tesztet) : ",
"it" => "Usa il LIVE server (e non il test):",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "U�ywaj rzeczywistego serwera (nie testuj niczego)",
"es" => "Usar el servidor LIVE (no el de pruebas)",
"pt" => "Usar o Servidor Live (n�o o de testes)"
);

$txt_cfg_tucows_username = array(
"fr" => "Votre nom d'utilisateur SRS :",
"en" => "Your SRS username:",
"hu" => "Az SRS felhaszn�l�neve:",
"it" => "Tuo username SRS: ",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Tw�j login SRS",
"es" => "Tu nombre SRS",
"pt" => "O seu utilizador SRS :"
);

$txt_cfg_tucows_test_server_key = array(
"fr" => "Votre clef d'acc�s pour le serveur de test :",
"en" => "Your key to access the test server:",
"hu" => "A teszt szerver hozz�f�r�si kulcsa: ",
"it" => "Tua chiave di accesso al test server: ",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Klucz do serwera testowego",
"es" => "Clave de acceso al servidor de pruebas",
"pt" => "Palavra chave para aceder ao servidor de testes :"
);

$txt_cfg_tucows_live_server_key = array(
"fr" => "Votre clef d'acc�s pour le serveur LIVE :",
"en" => "Your key to access the LIVE server:",
"hu" => "Az �les szerver hozz�f�r�si kulcsa: ",
"it" => "Tua chiave di accesso al server LIVE: ",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Klucz dost�powy do serwera LIVE",
"es" => "Clave de acceso al servidor LIVE",
"pt" => "Palavra chave para aceder ao servidor LIVE :"
);

$txt_cfg_registryapi_menu_entry = array(
"fr" => "Enregistrement de domaine",
"en" => "Domain name registration",
"hu" => "Domain n�v regisztr�ci�",
"it" => "Registrazione nome a dominio",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Rejestracja domeny",
"es" => "Registro de dominio",
"pt" => "Registo de dominio"
);

$txt_cfg_backup_and_mx_menu_entry = array(
"fr" => "Serveurs MX et NS de secours",
"en" => "MX and NS backup servers",
"hu" => "MX �s NS tartal�k szerverek",
"it" => "Servers MX e NS di backup",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Serwery zapsowe poczty i DNS",
"es" => "Servidores de respaldo MX y NS",
"pt" => "Servidores de backup MX e NS"
);

$txt_cfg_ip_and_network = array(
"fr" => "Addresses IP et r�seaux",
"en" => "IP addresses and network",
"hu" => "IP c�mek �s h�l�zat",
"it" => "Indirizzi IP e network",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "Adres IP i sieci ",
"es" => "Direcci�n IP y red",
"pt" => "Endere�o de IP e rede"
);

$txt_cfg_general_menu_entry = array(
"fr" => "G�n�rale",
"en" => "General",
"hu" => "�ltal�nos",
"it" => "Generale",
"nl" => "TRANS ",
"ru" => "TRANS ",
"de" => "TRANS ",
"zh" => "TRANS ",
"pl" => "G��wne ",
"es" => "General",
"pt" => "Geral"
);


$txt_cfg_paypal_use_sandbox = array(
	"fr" => "Utiliser le serveur de test sandbox :",
	"en" => "Use the sandbox test server:",
	"hu" => "A k�vezkez� \"sandbox\" test szervert haszn�lja:",
	"it" => "Utilizza il sandbox test server:",
	"nl" => "TRANS Use the sandbox test server:",
	"ru" => "TRANS Use the sandbox test server:",
	"de" => "TRANS Use the sandbox test server:",
	"zh" => "TRANS Use the sandbox test server:",
	"pl" => "Uzyj sandbox'a do testowania:",
	"es" => "Usar el servidor de pruebas sandbox:",
	"pt" => "Utilizar o servidor de testes \"sandbox\" :"
	);


$txt_cfg_paypal_sandbox_email = array(
"fr" => "Email du compte de test PayPal (sandbox) :",
"en" => "PayPal test account email (sandbox):",
	"hu" => "PayPal teszt hozz�f�r�s email c�me (sandbox):",
	"it" => "Email dell'account di test PayPal (sandbox):",
	"nl" => "TRANS PayPal test account email (sandbox):",
	"ru" => "TRANS PayPal test account email (sandbox):",
	"de" => "TRANS PayPal test account email (sandbox):",
	"zh" => "TRANS PayPal test account email (sandbox):",
	"pl" => "Konto testowe Paypal (sandbox):",
	"es" => "Cuenta de correo de pruebas de paypal (sandbox):",
	"pt" => "E-mail da conta de teste Paypal (sandbox) :"
	);


$txt_cfg_allow_following_servers_to_list = array(
	"fr" => "Autoriser les servers suivant a lister les domaines pour les backuper : ",
	"en" => "Allow those servers to list this server domain names for doing backup:��",
	"hu" => "A k�vetkez� szerverek backup c�lj�b�l hozz�f�rhetnek az ezen a szerveren l�tez� domain nevekhez:",
	"it" => "Autorizza i seguenti servers i nomi a dominio di questo server per effettuare backup: ",
	"nl" => "TRANS Allow the following servers to list this server domain names for doing backup: ",
	"ru" => "TRANS Allow the following servers to list this server domain names for doing backup: ",
	"de" => "Folgende Server autorisieren, den Server Domain Name bei Backups einzuschliessen: ",
	"zh" => "�������з��������Ӻ�����������",
	"pl" => "Pozw�l temu serwerowi na wykonanie backup-u domen: ",
	"es" => "Autorizar a los siguientes servidores a a��dir este servidor de dominios para realizar copias de seguridad: ",
	"pt" => "Autorizar estes servidores a aceder ao servidor de nomes para realizar c�pias de seguran�a"
	);

$txt_cfg_make_request_to_server_for_update = array(
	"fr" => "Pr�venir les serveurs suivant quand un domaine est ajout� ou supprimer : ",
	"en" => "Tell the following servers when a domain is added or removed : ",
	"hu" => "�rtes�tse a k�vetkez� szervereket, ha egy domain hozz�ad�sra vagy t�rl�sre ker�l : ",
	"it" => "Informa i seguenti servers quando un dominio viene aggiunto o rimosso : ",
	"nl" => "TRANS Tell the following servers when a domain is added or removed : ",
	"ru" => "TRANS Tell the following servers when a domain is added or removed : ",
	"de" => "Folgende Server informieren, wenn eine Domaine hinzugef�gt oder gel�scht wird: ",
	"zh" => "��������ӻ�ɾ��ʱ֪ͨ���з�������",
	"pl" => "Powiadamiaj serwery o dodaniu b�dz usuni�cu domeny : ",
	"es" => "Avisar a los siguientes servidores cuando un dominio es a�adido o eliminado : ",
	"pt" => "Emitir um aviso aos seguintes servidores quando um dominio � eliminado : "
	);

$txt_cfg_make_request_to_server_mx_update = array(
	"fr" => "Pr�venir les serveurs suivant quand un email est ajout� ou supprimer : ",
	"en" => "Tell the following servers when an email is added or removed : ",
	"hu" => "�rtes�tse a k�vetkez� szervereket, ha egy email hozz�ad�sra vagy t�rl�sre ker�l : ",
	"it" => "Informa i seguenti servers quando un email viene aggiunto o rimosso : ",
	"nl" => "TRANS Tell the following servers when a email is added or removed : ",
	"ru" => "TRANS Tell the following servers when a email is added or removed : ",
	"de" => "Folgende Server informieren, wenn eine email hinzugef�gt oder gel�scht wird: ",
	"zh" => "告诉以下服务器电子邮件增加或被去除",
	"pl" => "Zawiadom nastepuj�ce serwery o skasowaniu b�dz usuni�ciu poczty: ",
	"es" => "Avisar a los siguientes servidores cuando un email es a�adido o eliminado : ",
	"pt" => "Emitir um aviso aos seguintes servidores quando uma conta de e-mai e adicionada ou removida : "
	);

$txt_cfg_act_as_backup_mail_server = array(
	"fr" => "Ce server sera serveur de backup mail pour les serveurs suivants : ",
	"en" => "Act as backup mail server for the following servers: ",
    "hu" => "Tartal�k mail szerverk�nt viselkedjen a k�vetkez� szervereknek : ",
	"it" => "Usa come backup mail server per i seguenti servers: ",
	"nl" => "TRANS Act as backup mail server for the following servers: ",
	"ru" => "TRANS Act as backup mail server for the following servers: ",
	"de" => "Als Backup Mail Server f�r folgende Server verwenden: ",
	"zh" => "�����з�������Ϊ�����ʼ�������: ",
	"pl" => "Aktywuj kopie poczty na nastepuj�ce serwery: ",
	"es" => "Actuar como servidor de correo de respaldo para los siguientes servidores: ",
	"pt" => "Actuar como um servidor de backup de e-mail para os seguintes servidores : " 
	);

$txt_cfg_act_as_backup_dns_server = array(
	"fr" => "Ce server sera serveur de backup DNS pour les serveurs suivants : ",
	"en" => "Act as backup DNS server for the following servers: ",
	"hu" => "Tartal�k DNS szerverk�nt viselkedjen a k�vetkez� szervereknek: ",
	"it" => "Usa come backup DNS server per i seguenti servers: ",
	"nl" => "TRANS Act as backup DNS server for the following servers: ",
	"ru" => "TRANS Act as backup DNS server for the following servers: ",
	"de" => "Als Backup DNS Server f�r folgende Server verwenden: ",
	"zh" => "�����з�������Ϊ����DNS������: ",
	"pl" => "Aktywuj kopie serwerow  DNS na nastepuj�ce serwerys: ",
	"es" => "Actuar como servidor de DNS de respaldo para los siguientes servidores: ",
	"pt" => "Actuar como um servidor de backup de DNS para os seguintes servidores : "
	);

$txt_cfg_use_paypal = array(
	"fr" => "Utiliser paypal : ",
	"en" => "Use paypal: ",
	"hu" => "A paypal-t haszn�lja: ",
	"it" => "Usa paypal: ",
	"nl" => "TRANS Use paypal: ",
	"ru" => "TRANS Use paypal: ",
	"de" => "Paypal verwenden: ",
	"zh" => "ʹ�� paypal: ",
	"pl" => "U�yj karty p�atniczej : ",
	"es" => "Utilizar Paypal: ",
	"pt" => "Utilizar Paypal : "
	);

$txt_cfg_paypal_autovalid = array(
	"fr" => "Valider les nouveaux compte si pay� : ",
	"en" => "Validate new account if payed: ",
	"hu" => "Akkor aktiv�lja az �j hozz�f�r�st, ha az ki van fizetve: ",
	"it" => "Autorizza il nuovo account se ha pagato: ",
	"nl" => "TRANS Validate new account if payed: ",
	"ru" => "TRANS Validate new account if payed: ",
	"de" => "Neue Konten validieren, wenn Zahlung erfolgt: ",
	"zh" => "����Ѹ������ʻ���Ч: ",
	"pl" => "Sprawdzanie konta p�atno�ci : ",
	"es" => "Validar nueva cuenta si ha sido pagada: ",
	"pt" => "Validar novas contas quando estas estejam pagas : "
	);

$txt_cfg_paytitle = array(
	"fr" => "Configuration du paiement s�curis�",
	"en" => "Secure payment configuration",
	"hu" => "A biztons�gos fizet�s be�ll�t�sai",
	"it" => "Configurazione del pagamento sicuro: ",
	"nl" => "TRANS Secure paiment configuration: ",
	"ru" => "TRANS Secure paiment configuration: ",
	"de" => "Secure payment Konfiguration: ",
	"zh" => "��ȫ��������: ",
	"pl" => "Konfiguracja p�atno�ci elektroniczych",
	"es" => "Configuraci�n del pago seguro: ",
	"pt" => "Configura��o de pagamento seguro"
	);

$txt_cfg_paypal_email = array(
	"fr" => "Email du compte business PayPal : ",
	"en" => "PayPal business account email: ",
	"hu" => "A PayPal �zleti hozz�f�r�s e-mail c�me: ",
	"it" => "Email dell'account business PayPal: ",
	"nl" => "TRANS PayPal business account email: ",
	"ru" => "TRANS PayPal business account email: ",
	"de" => "E-mail Paypal Gesch�ftskonto: ",
	"zh" => "PayPal �����ʻ��ļ�: ",
	"pl" => "Biznesowe konto p�atno�ci e-mail : ",
	"es" => "Email de la cuenta de negocio de Paypal: ",
	"pt" => "Conta de e-mail Paypal respons�vel pelos pagamentos : "
	);

$txt_cfg_paypal_ratefee = array(
	"fr" => "Pourcentage commissionaire PayPal : ",
	"en" => "PayPal fee rate: ",
	"hu" => "PayPal k�lts�g r�ta: ",
	"it" => "Percentuale commissione PayPal: ",
	"nl" => "TRANS PayPal fee rate: ",
	"ru" => "TRANS PayPal fee rate: ",
	"de" => "PayPal Kommissionen: ",
	"zh" => "PayPal �����ã�: ",
	"pl" => "Procent prowizji PayPal : ",
	"es" => "Porcentaje de comisi�n de Paypal: ",
	"pt" => "Percentagem da comiss�o do Paypal : "
	);

$txt_cfg_paypal_flatfee = array(
	"fr" => "Commission fixe PayPal : ",
	"en" => "PayPal flat rate: ",
	"hu" => "PayPal alap r�ta: ",
	"it" => "Commissione fissa PayPal: ",
	"nl" => "TRANS PayPal flat rate: ",
	"ru" => "TRANS PayPal flat rate: ",
	"de" => "PayPal Festpreis: ",
	"zh" => "PayPal �ܷ��ã�: ",
	"pl" => "Wska�nik liniowy PayPal : ",
	"es" => "Comisi�n fija de Paypal: ",
	"pt" => "Taxa fixa do Paypal : "
	);

$txt_cfg_new_chroot_path_path = array(
	"fr" => "Chemin du disque cgi-wrapper (chroot pour SBOX) : ",
	"en" => "Path of the cgi-wrapper disk (chroot for SBOX): ",
	"hu" => "A cgi-wrapper lemez el�r�si �tja (chroot az SBOX-nak): ",
	"it" => "Path del disco cgi-wrapper (chroot for SBOX): ",
	"nl" => "TRANS Path of the cgi-wrapper disk (chroot for SBOX): ",
	"ru" => "TRANS Path of the cgi-wrapper disk (chroot for SBOX): ",
	"de" => "Path f�r CGI-Wrapper Laufwerk (Chroot f�r SBOX): ",
	"zh" => "·�� (chroot for SBOX): ",
	"pl" => "�cie�ka do katalogu CGI-Wrapper (chroot SBOX) : ",
	"es" => "Ruta del cgi-wrapper (chroot para SBOX): ",
	"pt" => "Caminho do disco cgi-wrapper (chroot para SBOX) : "
	);

$txt_cfg_main_software_config =array(
	"fr" => "Configuration principale de DTC",
	"en" => "Main software configuration",
	"hu" => "F� szoftver konfigur�ci�",
	"it" => "Configurazione principale di DTC",
	"nl" => "Belangrijke software  configuratie",
	"ru" => "������������ ����������� �������",
	"de" => "Allgemeine Konfiguration",
	"zh" => "��Ҫ����DTC",
	"pl" => "Adresy IP i sieci",
	"es" => "Configuraci�n principal",
	"pt" => "Configura��o principal"
	);

$txt_cfg_general =array(
	"fr" => "General",
	"en" => "General",
	"hu" => "�ltal�nos",
	"it" => "Generale",
	"nl" => "Algemeen",
	"ru" => "��������",
	"de" => "Allgemein",
	"zh" => "��Ҫ",
	"pl" => "G��wne",
	"es" => "General",
	"pt" => "Geral"
	);

$txt_cfg_demo_version =array(
	"fr" => "Version de demo :",
	"en" => "Demo version:",
	"hu" => "Demo verzi�:",
    "it" => "Versione demo:",
	"nl" => "Demo versie",
	"ru" => "����-������",
	"de" => "Demo Version",
	"zh" => "���ð汾",
	"pl" => "Wersja DEMO : ",
	"es" => "Versi�n de Demostraci�n",
	"pt" => "Vers�o de demonstra��o :"
	);

$txt_cfg_session_expir_time = array(
	"fr" => "Expiration des sessions utilisateur (mn):",
	"en" => "User session expire time (mn):",
	"hu" => "A felhaszn�l�i munkamenet lej�rati ideje (perc):",
	"it" => "Tempo scadenza della sessione utente (mn):",
	"nl" => "TRANS User session expire time (mn):",
	"ru" => "TRANS User session expire time (mn):",
	"de" => "Expire Time f�r User Sitzung (min):",
	"zh" => "��ʱ���������ӣ�",
	"pl" => "Czas sesji (min) :",
	"es" => "Caducidad de la sesi�n de usuario (min):",
	"pt" => "Dura��o para a expira��o da sess�o (min):"
	);

$txt_cfg_use_multiple_ip =array(
	"fr" => "Utiliser plusieurs adresses IP :",
	"en" => "Use multiple IP:",
	"hu" => "T�bbsz�r�s IP c�met haszn�l:",
        "it" => "Usa IP multipli:",
	"nl" => "!TRANSLATE Use multiple IP",
	"ru" => "������������ ��������� IP",	
	"de" => "Mehrere IP Adressen verwenden:",
	"zh" => "ʹ�ö���IP:",
	"pl" => "U�yj adresu IP w trybie multi :",
	"es" => "Usar multiples IPs",
	"pt" => "Utilizar v�rios IPs"
	);

$txt_cfg_use_cname_for_subdomains =array(
	"fr" => "Employez CNAME au lieu du disque de A pour des subdomains:",
	"en" => "Use CNAME instead of A record for subdomains:",
	"hu" => "TRANS - Use CNAME instead of A record for subdomains:",
        "it" => "Usa CNAME anzich� l'annotazione di A per i 
subdomains:",
	"nl" => "Gebruik CNAME in plaats van A- verslag voor subdomains",
	"ru" => "Используйте CNAME вместо показателя A для суб-domenov",	
	"de" => "Verwenden Sie CNAME anstelle von der A Aufzeichnung für subdomains:",
	"zh" => "使用CNAME 代替 A 纪录为次级领域:",
	"pl" => "U�yj CNAME rekordu A domeny dla dodawanych subdomen:",
	"es" => "Utilice CNAME en vez del expediente de A para los secundario-dominios:",
	"pt" => "Utilizar registos CNAME em vez de registos A para subdominios:"
	);

$txt_cfg_use_nated_vhost = array(
	"fr" => "Generer toutes les vhost apache sur l'ip du reseau local (NAT)",
	"en" => "Generate all apache vhosts on local network ip (NAT)",
	"hu" => "Az �sszes apache vhosts f�jl gener�l�sa helyi h�l�zati ip-vel(NAT)",
	"it" => "Genera tutti i vhosts apache nell'ip network locale (NAT)",
	"nl" => "TRANS Generate all apache vhosts on local network ip (NAT)",
	"ru" => "TRANS Generate all apache vhosts on local network ip (NAT)",
	"de" => "Alle Apache Vhosts mit IP des lokales Netzwerkes generieren (NAT)",
	"zh" => "�ھ�����ַд������apache vhosts (NAT)",
	"pl" => "U�ycie adres�w lokalnych za NAT-em :",
	"es" => "Generar todos los vhosts de apache en una ip de red local (NAT)",
	"pt" => "Gerar todos os vhosts no Apache usando um IP de rede local (NAT)"
	);

$txt_cfg_nated_vhost_ip = array(
	"fr" => "Addrese ip dans le reseau local des vhost utilisant le NAT",
	"en" => "Local network area ip adress of the vhost using NAT",
	"hu" => "A NAT-ot haszn�l� vhost helyi h�l�zati ip c�me",
	"it" => "Indirizzi IP area di rete locale del vhost usando NAT",
	"nl" => "TRANS Local network area ip adress of the vhost using NAT",
	"ru" => "TRANS Local network area ip adress of the vhost using NAT",
	"de" => "IP Adresse von Vhost mit NAT im lokalen Netzwerk",
	"zh" => "vhost����ʹ�õľ�����ַNAT",
	"pl" => "Adres lokalny dla vhost za NAT-em :",
	"es" => "Direcci�n ip de red local del vhost que usa NAT",
	"pt" => "Endere�o IP de rede local para vhost que usam NAT"
	);

$txt_cfg_use_javascript = array(
	"fr" => "Utiliser le javascript :",
	"en" => "Use javascript:",
	"hu" => "Javascriptet haszn�l:",
	"it" => "Usa javascript:",
	"nl" => "TRANS Use javascript:",
	"ru" => "TRANS Use javascript:",
	"de" => "JavaScript verwenden:",
	"zh" => "ʹ��javascript:",
	"pl" => "U�yj JavaScript'u :",
	"es" => "Usar javascript:",
	"pt" => "Usar JavaScript  :"
	);

$txt_cfg_use_ssl = array(
	"fr" => "Utiliser le SSL :",
	"en" => "Use SSL:",
	"hu" => "SSL-t haszn�l:",
	"it" => "Usa SSL:",
	"nl" => "TRANS Use SSL",
	"ru" => "TRANS Use SSL",
	"de" => "SSl verwenden",
	"zh" => "ʹ��SSL:",
	"pl" => "U�yj SSL :",
	"es" => "Usar SSL:",
	"pt" => "Usar SSL ;"
	);

$txt_cfg_hide_password = array(
	"fr" => "Cacher les mots de passe dans DTC:",
	"en" => "Hide passwords within DTC:",
	"hu" => "A DTC-n bel�l elrejti a jelszavakat:",
	"it" => "Parole d'accesso del pellame all'interno di DTC:",
	"nl" => "De wachtwoorden van de huid binnen DTC:",
	"ru" => "TRANS Hide passwords within DTC:",
	"de" => "Passw�rter im DTC verstecken:",
	"zh" => "��DTC�������룺",
	"pl" => "Ukryj has�a z DTC :",
	"es" => "Ocultar contrase�as dentro de DTC:",
	"pt" => "Ofuscar as palavras chave no DTC:"
	);

$txt_cfg_use_domain_based_ftp_logins = array(
	"fr" => "Utiliser des logins ftp @domain.com :",
	"en" => "Use @domain.com ftp logins:",
	"hu" => "A @domain.com form�t haszn�lja az ftp hozz�f�r�sekn�l:",
	"it" => "Usa logins ftp @domain.com:",
	"nl" => "TRANS Use @domain.com ftp logins:",
	"ru" => "TRANS Use @domain.com ftp logins:",
	"de" => "@domain.com ftp Login verwenden:",
	"zh" => "ʹ��@domain.com ftp����",
	"pl" => "U�yj loginu ftp @domena.com :",
	"es" => "Usar @dominio.com para acceso a ftp:",
	"pt" => "Usar utilizadores com @dominio.com para acesso ao ftp"
	);

$txt_cfg_select_type_of_skin = array(
	"fr" => "Selectionner le type d'abillage :",
	"en" => "Select the type of skin:",
	"hu" => "V�lasszon t�m�t:",
	"it" => "Scegli il tipo di tema:",
	"nl" => "TRANS Select the type of skin:",
	"ru" => "TRANS Select the type of skin:",
	"de" => "Skin w�hlen:",
	"zh" => "ѡ��Ƥ�����ͣ�",
	"pl" => "Wybierz sk�rk� :",
	"es" => "Selecciona el tipo de skin:",
	"pt" => "Selecionar o tipo de estilo :"
	);

$txt_cfg_full_hostname = array(
	"fr" => "Hostname de l'administrateur DTC :",
	"en" => "Full hostname of DTC admin panel:",
	"hu" => "A DTC admin panel teljes gazdaneve:",
	"it" => "Hostname completo del pannello admin di DTC:",
	"nl" => "Volledige Hostnaam van de DTC admin panel:",
	"ru" => "������ ��� ����� � ���������������� ������� DTC",
	"de" => "Hostname des DTC Administrators",
	"zh" => "DTC����������վȫ��",
	"pl" => "Nazwa hosta do obs�ugi DTC :",
	"es" => "Nombre completo del hostname del panel de adminitraci�n de DTC:",
	"pt" => "Nome da m�quina (hostname) para administra��o do DTC :" 
	);

$txt_cfg_main_site_ip =array(
	"fr" => "IP principale du serveur :",
	"en" => "Main ip address of the server:",
	"hu" => "A szerver f� ip c�me:",
	"it" => "Indirizzo IP principale del server:",
	"nl" => "Primaire ip-adres van de server",
	"ru" => "�������� ����� �����",
	"de" => "Haupt IP Adresse:",
	"zh" => "��Ҫip��ַ�ķ�����",
	"pl" => "Adres IP serwera :",
	"es" => "IP principal del sitio:",
	"pt" => "IP principal do servidor :"
	);

$txt_cfg_site_addrs =array(
	"fr" => "Adresses IP de votre machine (s�par� par des \"|\") :",
	"en" => "Host IP addresses (separated by \"|\"):",
	"hu" => "Gazda IP c�mek (\"|\" elv�lasztva):",
	"it" => "Indirizzi IP dell'host (separati da \"|\"):",
	"nl" => "TRANS��Host IP addresses (separated by \"|\"):",
	"ru" => "IP ������ ����� (����������� \"|\"):",
	"de" => "IP Adressen des PC (getrennt durch \"|\"):",
	"zh" => "���е�IP��ַ�ķ�����(�� \"|\"����):",
	"pl" => "Adresy IP host�w (przedzielone \"|\") :",
	"es" => "Direcciones IP del Host (separado por \"|\"):",
	"pt" => "Lista de endere�os IP do servidor (separados por \"|\") :"
	);

$txt_cfg_name_zonefileconf_title =array(
	"fr" => "Zonefiles named",
	"en" => "Named zonefiles",
	"hu" => "Named z�naf�jlok",
	"it" => "Zonefiles Named",
	"nl" => "Named zone-files",
	"ru" => "������������ ��� ���",
	"de" => "Bind Zonendatei",
	"zh" => "Named zonefiles����",
	"pl" => "Konfiguracja stref binda",
	"es" => "Zonas de Named",
	"pt" => "Ficheiros de zonas"  
	);

$txt_cfg_main_mx_addr =array(
	"fr" => "Adresse de votre serveur MX principal:",
	"en" => "Address of your main MX server :",
	"hu" => "A f� MX szerver c�me :",
	"it" => "Indirizzo del tuo MX server primario :",
	"nl" => "Hostname van je primaire MX record",
	"ru" => "����� ������ ��������� MX-�������",
	"de" => "Adresse des MX Hauptservers:",
	"zh" => "������ҪMX�������ĵ�ַ",
	"pl" => "Nazwa serwera Primary MX :",
	"es" => "Direcci�n ip de tu servidor MX principal :",
	"pt" => "Endere�o do servidor de MX principal:"
	);

$txt_cfg_mail_addr_webmaster =array(
	"fr" => "Adresse email du webmaster :",
	"en" => "Email address of your webmaster:",
	"hu" => "A webmester email c�me:",
	"it" => "Indirizzo Email of tuo webmaster:",
	"nl" => "Email adres van de webmaster",
	"ru" => "�������� ����� ������ ����������:",
	"de" => "E-Mailadresse des Webmasters",
	"zh" => "�������ܵĵ��������ַ",
	"pl" => "Adres e-mail webmastera :",
	"es" => "Direcci�n de Correo del webmaster:",
	"pt" => "Endere�o de correio do Webmaster :"
	);

$txt_cfg_primary_dns_server_addr =array(
	"fr" => "Adresse du serveur DNS primaire :",
	"en" => "Primary dns server addr:",
	"hu" => "Az els�dleges dns szerver c�me:",
	"it" => "Indirizzo server DNS primario:",
	"nl" => "Het primaire DNS serveradres:",
	"ru" => "��������� ����� ��� :",
	"de" => "Adresse des prim�ren DNS Servers:",
	"zh" => "��һ��������������ַ",
	"pl" => "Nazwa serwera Primary DNS :",
	"es" => "Direcci�n del servidor Primario de dns:",
	"pt" => "Endere�o do Servidor de DNS prim�rio :"
	);

$txt_cfg_secondary_dns_server_addr =array(
	"fr" => "Adresse du serveur DNS secondaire :",
	"en" => "Secondary dns server addr:",
	"hu" => "A m�sodlagos dns szerver c�me:",
	"it" => "Indirizzo server DNS secondario:",
	"nl" => "Secundaire DNS serveradres:",
	"ru" => "��������� ����� ��� :",
	"de" => "Adresse des sekund�ren DNS Servers:",
	"zh" => "�ڶ���������������ַ",
	"pl" => "Nazwa serwera Secondary DNS :",
	"es" => "Direcci�n del servidor Secundario de dns:",
	"pt" => "Nome do servidor de DNS secund�rio :"
	);

$txt_cfg_slave_dns_ip =array(
	"fr" => "Adresse IP du serveur DNS esclave :",
	"en" => "Slave DNS server ip address:",
	"hu" => "A szolga DNS szerver ip c�me:",
	"it" => "Indirizzo IP server DNS slave:",
	"nl" => "Tertiaire dns server ip adres:",
	"ru" => "����� ������������ ���-�������:",
	"de" => "IP Adresse des Slave DNS Servers:",
	"zh" => "����������������ַ",
	"pl" => "Adres IP serwera Secondary DNS :",
	"es" => "Direcci�n ip del servidor esclavo de DNS:",
	"pt" => "Endere�o IP do servidor de DNS secund�rio"
	);

$txt_cfg_payconf_title = array (
	"fr" => "Portail de paiment",
	"en" => "Pay gateway",
	"hu" => "Fizet�si �tj�r�",
	"it" => "Gateway per pagamento",
	"nl" => "TRANS: Pay gateway",
	"ru" => "TRANS: Pay gateway",
	"de" => "Zahlungsgateway",
	"zh" => "���ʽ",
	"pl" => "System p�atno�ci",
	"es" => "Pasarela de pago",
	"pt" => "Gateway de pagamento"
	);

$txt_cfg_path_conf_title =array(
	"fr" => "Chemins",
	"en" => "Paths",
	"hu" => "El�r�si utak",
	"it" => "Paths",
	"nl" => "Paden",
	"ru" => "���������������� ����",
	"de" => "Dateipfad",
	"zh" => "·������",
	"pl" => "�cie�ki",
	"es" => "Directorios",
	"pt" => "Localiza��es"
	);

$txt_cfg_mainpath_conf_title =array(
	"fr" => "Chemins principaux",
	"en" => "Main paths",
	"hu" => "F� el�r�si utak",
	"it" => "Paths principale",
	"nl" => "Belangrijke directorypaden ",
	"ru" => "�������� ����",
	"de" => "Hauptpfad",
	"zh" => "��Ҫ·��",
	"pl" => "Inne �cie�ki",
	"es" => "Directorio Principal",
	"pt" => "Localiza��es principais"
	);

$txt_cfg_dtc_shared_folder =array(
	"fr" => "Chemin du dossier \"shared\" de DTC :",
	"en" => "Filepath of your DTC \"shared\" directory:",
	"hu" => "F�jl el�r�si �t a DTC \"shared\" k�nyvt�r�hoz:",
	"it" => "Filepath della tua directory DTC \"condivisa\":",
	"nl" => "bestandenpad naar jouw DTC \"shared\" directory:",
	"ru" => "�������� ���� � ����� DTC \"�����\" ����������:",
	"de" => "Pfad des Ordners\"shared\" DTC:",
	"zh" => "����DTC��·��\"shared\"Ŀ¼:",
	"pl" => "�cie�ka do katalogu DTC \"shared\" :",
	"es" => "Directorio de ficheros \"shared\" de DTC:",
	"pt" => "Localiza��o do direct�rio \"shared\" do DTC :"
	);

$txt_cfg_new_account_defaultpath =array(
	"fr" => "Chemin par defaut pour les nouveaux comptes :",
	"en" => "Your default new account directory:",
	"hu" => "Az alap�rtelmezett �j hozz�f�r�s k�nyvt�ra:",
	"it" => "Directory nuovo account di default:",
	"nl" => "Hoofdpad waaronder je nieuwe accounts worden aangemaakt:",
	"ru" => "���������� ����� ������� ������ �� ���������:",
	"de" => "Standardpfad f�r neue Accounts:",
	"zh" => "����Ԥ�����ʻ�Ŀ¼",
	"pl" => "Domy�lna �cie�ka do katalogu hostingu :",
	"es" => "Directorio por defecto de tu nueva cuenta:",
	"pt" => "Localiza��o pre-definida para novas contas :" 
	);

$txt_cfg_generated_file_path =array(
	"fr" => "Chemin ou DTC va �tre restreint pour g�n�rer ses fichiers
de configuration pour les daemons.
Chacun des chemin ci-apr�s (qmail, apache et named) seront concat�n�s �
celui-ci :",
	"en" => "Path where will DTC will be restricted for generating it's
configuration files for daemons.
Each of the following (qmail, apache and named) path will be concatened to
this:",
	"hu" => "Az el�r�si �t ahol a DTC a d�monok konfigur�ci�s f�jljait elk�sz�theti.
A (qmail, apache �s named) az el�r�si �tja hozz� lesz f�zve a k�vetkez�h�z:",
	"it" => "Path dove DTC verr� protetto per generare i suoi
file di configurazione per i demoni.
Ognuna delle seguenti path (qmail, apache and named) sar� concatenata a questa:",
	"nl" => "Paden waarin DTC binnen word opgesloten voor het opslaan
van z'n configuratie bestanden voor de daemons.",
	"ru" => "���� ��� DTC �������� ������������ ��� ����������������
����� ��� �������. ������ �� ��������� (qmail, apache and named) ����� ����� ���������� �
����:",
	"de" => "Eingeschr�nkter Pfad zur Speicherung aller Daemon Konfigurationsdateien durch DTC",
	"zh" => "����DTC��д�����ļ�(qmail, apache and named)",
	"pl" => "�cie�ka do katalogu z plikami konfiguracyjnymi hostingu :",
	"es" => "Directorio donde DTC podr� generar los ficheros de
configuraci�n para los demonios.
Cada uno de los directorios (qmail, apache y named) ser�n enlazados a
este:",
    "pt" => "Direct�rio onde DTC dever� gerar os ficheiros de configura��o para os servi�os.
Em cada um dos seguintes (qmail, apache e named) o caminho ser� concatenado para :"	
);
    

$txt_cfg_apache_file_names =array(
	"fr" => "Nom des fichier pour Apache",
	"en" => "Apache file names",
	"hu" => "Apache f�jlnevek",
	"it" => "Nomi dei file per Apache",
	"nl" => "Apache bestandsnamen",
	"ru" => "����� ������ Apache",
	"de" => "Apache Dateinamen",
	"zh" => "Apache�ļ�����",
	"pl" => "Nazwy plik�w Apache-a :",
	"es" => "Configuraci�n de Apache",
	"pt" => "Configura��o do Apache"
	);

$txt_cfg_vhost_file_path =array(
	"fr" => "Fichier de configuration des Virtual-Host :",
	"en" => "Virtual host config-file:",
	"hu" => "Virtual host konfig f�jl:",
	"it" => "File di configurazione del Virtual host:",
	"nl" => "Virtual hosting config-file:",
	"ru" => "������������ ������������ �����:",
	"de" => "Virtual Host Konfigurationsdatei:",
	"zh" => "Vhost�����ļ�",
	"pl" => "Nazwa pliku konfiguracyjnego vhost :",
	"es" => "Fichero de configuraci�n de los Virtual host:",
	"pt" => "Ficheiro de configura��o dos \"Virtual Hosts\" ",
	);

$txt_cfg_phplib_path = array(
	"fr" => "Librairies PHP open_basedir (s�par�s par des \":\", initialis� � l'installation de dtc) :",
	"en" => "Php libraries open_basedir (separated by \":\", reset on each dtc install):",
	"hu" => "TRANS LPhp k�nyvt�rak open_basedir (\":\" elv�lasztva, reset on each dtc install):",
	"it" => "TRANS LLibrerie PHP open_basedir (separate da \":\", reset on each dtc install):",
	"nl" => "TRANS LPhp libraries open_basedir (gescheiden met een \":\", reset on each dtc install):",
	"ru" => "TRANS LPhp ���������� open_basedir (����������� \":\", reset on each dtc install):",
	"de" => "TRANS LPHP Bibliotheken open_basedir (getrennt durch \":\", reset on each dtc install):",
	"zh" => "TRANS LPhp���ļ��� open_basedir (��\":\"����, reset on each dtc install):",
	"pl" => "Biblioteki PHP open_basedir (oddzielone \":\", zresetuj pozosta�e podczas instalacji dtc) :",
	"es" => "TRANS LLibrerias de Php open_basedir (separadas por \":\", reset on each dtc install):",
	"pt" => "TRANS Librarias PHP open_basedir (separadas por \":\", reset on each dtc install) :"
	);

$txt_cfg_phplib2_path =array(
	"fr" => "Librairies PHP additionnelles open_basedir (conserv� a la r�installation):",
	"en" => "Php open_basedir additional libraries path (keeped uppon reinstallation):",
	"hu" => "Tov�bbi php k�nyvt�rak el�r�si �tja open_basedir (keeped uppon reinstallation):",
	"it" => "Path librerie addizionali PHP open_basedir (keeped uppon reinstallation):",
	"nl" => "Additionele php library paden open_basedir (keeped uppon reinstallation):",
	"ru" => "���� � �������������� ����������� PHP open_basedir (keeped uppon reinstallation):",
	"de" => "Zus�tzliche PHP Bibliotheken open_basedir (keeped uppon reinstallation):",
	"zh" => "Php�ĸ����ļ���·�� open_basedir (keeped uppon reinstallation):",
	"pl" => "Dodatkowe biblioteki PHP w open_basedir (zachowaj przed reinstalacja) :",
	"es" => "Librerias adicionales de Phpopen_basedir  (keeped uppon reinstallation):",
	"pt" => "Librarias adicionais de PHP open_basedir (keeped uppon reinstallation):"
	);

$txt_cfg_named_filenames_title =array(
	"fr" => "Chemins de named",
	"en" => "Named file names",
	"hu" => "Named f�jlnevek",
	"it" => "Nomi file Named",
	"nl" => "Named bestandsnamen",
	"ru" => "����� ������ ���",
	"de" => "Bind Konfigutationsdateien",
	"zh" => "Named�ļ�����",
	"pl" => "Nazwy plik�w Bind DNS",
	"es" => "Configuraci�n de Named",
	"pt" => "Configura��o do Named (DNS)"
	);

$txt_cfg_named_main_file =array(
	"fr" => "Fichier principale :",
	"en" => "Named main file:",
	"hu" => "Named f� f�jl:",
	"it" => "File principale Named:",
	"nl" => "named hoofdbestand",
	"ru" => "����������� ���� ���:",
	"de" => "Bind Masterdatei:",
	"zh" => "Named��Ҫ�ļ�:",
	"pl" => "Nazwa pliku konfiguracyjnego : ",
	"es" => "Fichero principal:",
	"pt" => "Ficheiro principal :"
	);

$txt_cfg_named_slave_file =array(
	"fr" => "Fichier zone esclaves :",
	"en" => "Named slave file:",
	"hu" => "Named m�sodlagos f�jl:",
	"it" => "File slave Named:",
	"nl" => "Names slave bestanden",
	"ru" => "����������� ���� ���:",
	"de" => "Bind Slavedatei:",
	"zh" => "Named���÷������ļ�:",
	"pl" => "Nazwa pliku konfiguracyjnego slave : ",
	"es" => "Fichero de zonas esclavas:",
	"pt" => "Ficheiro das zonas secund�rias :"
	);

$txt_cfg_named_main_zonefile =array(
	"fr" => "Dossier zonefiles principale :",
	"en" => "Named main zonefiles folder:",
	"hu" => "Named f� z�naf�jlok mapp�ja:",
	"it" => "Directory principale zonefiles Named:",
	"nl" => "Names zonefiles directory:",
	"ru" => "����� ������ ����������� ��� ��� ������� ���:",
	"de" => "Bind Masterzonen Verzeichnis",
	"zh" => "Named��Ҫzonefiles�ļ���:",
	"pl" => "Nazwa katalogu g��wnego stref : ",
	"es" => "Directorio principal de los zonefiles:",
	"pt" => "Direct�rio das zonas principais :"
	);

$txt_cfg_named_cache_slave_zonefile =array(
	"fr" => "Dossier zonefile esclave :",
	"en" => "Folder named slave (cache) zonefiles:",
	"hu" => "Mappa a named m�sodlagos (cache) z�naf�jloknak:",
	"it" => "Directory slave (cache) zonefiles Named:",
	"nl" => "Directory van de named slave zonebestanden:",
	"ru" => "����� ��� ����������� ������ ���:",
	"de" => "Bind Slavezonen Verzeichnis",
	"zh" => "Named����(����)zonefiles�ļ���:",
	"pl" => "Nazwa katalogu slave (cache) stref : ",
	"es" => "Directorio zonefile esclavo (cache):",
	"pt" => "Direct�rio das zonas secund�rias :"
	);

$txt_cfg_backup_webalizer_title =array(
	"fr" => "Chemin de backups et Webalizer",
	"en" => "Backups and Webalizer file names",
	"hu" => "Ment�sek �s Webalizer f�jlnevek",
	"it" => "Nomi file Backups e Webalizer",
	"nl" => "Backup en Webalizer bestandsnamen",
	"ru" => "��������� � ������������� ����� ������",
	"de" => "Sicherungs und Webalizer Dateinamen",
	"zh" => "���ú�Webalizer�ļ�����",
	"pl" => "Nazwa katalogu, plik�w  do Backup-u i Webalizera",
	"es" => "Nombre de ficheros de los Backups y Webalizer",
	"pt" => "Nomes para ficheiros de backup e webalizer"
	);

$txt_cfg_backup_script_filename =array(
	"fr" => "Nom du script de backup :",
	"en" => "Backup bash-script file:",
	"hu" => "Ment�s bash-script f�jl:",
	"it" => "File bash-script Backup:",
	"nl" => "Backup sh-script file:",
	"ru" => "������ ���������� ����������� (Bash):",
	"de" => "Sicherungs-Script:",
	"zh" => "���ú�bash�����ļ�����:",
	"pl" => "Nazwa skryptu Backup-u :",
	"es" => "Nombre del fichero de Backup:",
	"pt" => "Nome do ficheiro de backup :"
	);

$txt_cfg_backup_destination_folder =array(
	"fr" => "Dossier de destination du backup :",
	"en" => "Backup destination directory:",
	"hu" => "Ment�s c�lk�nyvt�r:",
	"it" => "Directory destinazione Backup:",
	"nl" => "Standaard backupdirectory:",
	"ru" => "���������� �������� ��������� �����:",
	"de" => "Backupzielverzeichnis",
	"zh" => "����Ŀ�ĵ�Ŀ¼:",
	"pl" => "Katalog docelowy Backup-u :",
	"es" => "Directorio de destino del Backup:",
	"pt" => "Direct�rio de destino do backup :"
	);

$txt_cfg_webalizer_script_filename =array(
	"fr" => "Nom du script Webalizer :",
	"en" => "Webalizer bash-script name:",
  	"hu" => "Webalizer bash-script n�v:",
	"it" => "Nome bash-script Webalizer:",
	"nl" => "Webalizer sh-script:",
	"ru" => "�������(Bash) Webalizer",
	"de" => "Webalizer bash-script:",
	"zh" => "Webalizer bash��������:",
	"pl" => "Nazwa skryptu Webalizera :",
	"es" => "Nombre del script de Webalizer:",
	"pt" => "Nome do script Webalizer :"
	);

?>
