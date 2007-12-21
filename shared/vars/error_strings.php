<?php
/**
 * @package DTC
 * @version $Id: error_strings.php,v 1.20 2007/06/15 17:23:49 seeb Exp $
 * 
 * --------------------------------------------------------
 * For all translators check in new array is new data - se 
 * In plan add swedish language to DTC 
 * --------------------------------------------------------
 * $Log: error_strings.php,v $
 * Revision 1.20  2007/06/15 17:23:49  seeb
 * Deleted info for me :)
 *
 * Revision 1.19  2007/05/31 14:02:12  thomas
 * Hop!
 *
 * Revision 1.18  2007/02/15 08:58:20  thomas
 * Some strings in NL and some internationalizations.
 *
 * Revision 1.17  2007/01/22 21:11:49  thomas
 * Added chinese strings.
 *
 * Revision 1.16  2007/01/18 06:19:28  thomas
 * Some engly corrections thanks to Andrew McGill <andrewm@intoweb.co.za>
 *
 * Revision 1.15  2006/07/31 05:44:25  thomas
 * Added some minor spanish translation patch. Thanks to jvaquero for this!
 *
 * Revision 1.14  2006/07/15 14:56:08  seeb
 * fixed polish
 *
 * Revision 1.13  2006/05/17 13:08:47  seeb
 * Adding to file cvs user log as comment
 * Please comment any change(s).
 * Tnx
 * /seeb
 *
 */

/**
 * TG: Added some code to check password format of new admins
 *
 */

$txt_err_dtc_login_format = array(
	"fr" => "Mauvais format du mot de passe du login administrateur: il doit jtre composi uniquement de lettre non capitales, de nombre ou du signe \"-\" et doit faire entre 4 et 16 caract�res.<br>\n",
	"en" => "Incorect admin login format: it should consist of only lowercase letters or numbers or the \"-\" sign, and should be between 4 and 16 chars long.<br>\n",
	"hu" => "TRANS Incorect admin login format: it should be made only with lowercase letters or numbers or the \"-\" sign and should be between 4 and 16 chars long.<br>\n",
	"it" => "TRANS Formato del login email errato: dovrebbe essere composto solo da lettere minuscole o numeri o dal simbolo \"-\" and should be between 4 and 16 chars long.<br>\n",
	"nl" => "Incorrect admin login formaat: Login dient alleen lowercase letters, nummers of het \"-\" teken te bevatten and moet tussen de 4 en 16 tekens lang zijn.<br>\n",
	"ru" => "TRANS Incorect admin login format: it should be made only with lowercase letters or numbers or the \"-\" sign and should be between 4 and 16 chars long.<br>\n",
	"de" => "TRANS Incorect admin login format: it should be made only with lowercase letters or numbers or the \"-\" sign and should be between 4 and 16 chars long.<br>\n",
	"zh" => "����Ĺ���Ա��½������Ӧ�ý���Сд��ĸ�������ֻ���\"-\"��ɣ����ҳ�����4��16���ַ�֮�䡣<br>\n",
	"pl" => "B��dny format loginu lub has�a: mo�esz u�y� ma�ych liter, cyfr lub znaku \"-\" (minus) i musi zawiera� mi�dzy 4 a 16 znak�w.<br>\n",
	"se" => "TRANS Incorect admin login format: it should be made only with lowercase letters or numbers or the \"-\" sign and should be between 4 and 16 chars long.<br>\n",
	"es" => "Formato del login del administrador incorrecto: S&oacute;lo deben usarse letras min&uacute;sculas o numeros o el signo &quot;-&quot; y debe tener entre 4 y 16 caracteres de longitud.<br>\n",
	"pt" => "TRANS Incorect admin login format: it should be made only with lowercase letters or numbers or the \"-\" sign and should be between 4 and 16 chars long.<br>\n");

/**
 * new localization for new account
 * @see dtc/client/new_account.php
 * 
 */



$txt_err_payment_not_valid=array(
	"fr" => "NON VALIDE",
	"en" => "NOT VALIDATED",
	"hu" => "NOT VALIDATED",
	"it" => "NOT VALIDATED",
	"nl" => "NIET GEVALIDEERD",
	"ru" => "NOT VALIDATED",
	"de" => "NICHT BEST�TIGT",
	"zh" => "��Ч��",
	"pl" => "P�ATNO�� NIESPRAWDZONA",
	"se" => "TRANS SVENSKA",
	"es" => "NO VALIDADO",
	"pt" => "NOT VALIDATED"
);
$txt_err_payment_finish_approved=array(
	"fr" => "TRANSACTION FINIE ET APPROUVEE",
	"en" => "TRANSACTION FINISHED AND APPROVED",
	"hu" => "TRANSACTION FINISHED AND APPROVED",
	"it" => "TRANSACTION FINISHED AND APPROVED",
	"nl" => "TRANSACTIE AFGEROND EN GOEDGEKEURD",
	"ru" => "TRANSACTION FINISHED AND APPROVED",
	"de" => "TRANSAKTION ABGESCHLOSSEN UND BEST�TIGT",
	"zh" => "�����ѳɹ����",
	"pl" => "TRANZAKCJA ZAKO�CZONA I ZAAKCEPTOWANA",
	"se" => "TRANS SVENSKA",
	"es" => "TRANSACCION FINALIZADA Y APROBADA",
	"pt" => "TRANSACTION FINISHED AND APPROVED"
);
$txt_err_payment_cancel=array(
	"fr" => "PAYMENT ABANDONNE",
	"en" => "PAYMENT CANCELLED",
	"hu" => "PAYMENT CANCELLED",
	"it" => "PAYMENT CANCELLED",
	"nl" => "BETALING GEANNULEERD",
	"ru" => "PAYMENT CANCELLED",
	"de" => "ZAHLUNG ABGEBROCHEN",
	"zh" => "���ȡ��",
	"pl" => "P�ATNO�� ANULOWANA",
	"se" => "TRANS SVENSKA",
	"es" => "PAGO CANCELADO",
	"pt" => "PAYMENT CANCELLED"
);

$txt_err_payment_failed=array(
	"fr" => "ECHEC DU PAYMENT",
	"en" => "PAYMENT FAILED",
	"hu" => "PAYMENT FAILED",
	"it" => "PAYMENT FAILED",
	"nl" => "BETALING GEFAALD",
	"ru" => "PAYMENT FAILED",
	"de" => "ZAHLUNG FEHLGESCHLAGEN",
	"zh" => "����ʧ��",
	"pl" => "P�ATNO�� NIEUDANA",
	"se" => "TRANS SVENSKA",
	"es" => "PAGO FALLIDO",
	"pt" => "PAYMENT FAILED"
);

if(isset($extapi_pay_id)){
$txt_err_register_cant_reselect_trans=array(
	"fr" => "Impossible de res�lectionner la transaction num�ro $extapi_pay_id: echec de l'enregistrement!",
	"en" => "Cannot reselect transaction for id $extapi_pay_id: registration failed!",
	"hu" => "Cannot reselect transaction for id $extapi_pay_id: registration failed!",
	"it" => "Cannot reselect transaction for id $extapi_pay_id: registration failed!",
	"nl" => "Kan transactie voor id $extapi_pay_id niet opnieuw selecteren: registratie gefaalt!",
	"ru" => "Cannot reselect transaction for id $extapi_pay_id: registration failed!",
	"de" => "Konnte die Transaktion mit der Id $extapi_pay_id nicht erneut ausw�hlen: Registrierung fehlgeschlagen!",
	"zh" => "���׺� $extapi_pay_id: ��������ѡ���ף�ע��ʧ�ܣ�",
	"pl" => "Nie mog� ponownie wybra� transakcji dla ID $extapi_pay_id: Rejestracja nieudana!",
	"se" => "TRANS SVENSKA",
	"es" => "Imposible reseleccionar la transacci&oacute;n n&uacute;mero $extapi_pay_id: registro fallido!",
	"pt" => "Cannot reselect transaction for id $extapi_pay_id: registration failed!"
);
}

$txt_err_register_cant_reselect_user=array(
	"fr" => "Impossible de res�lectionner l'utilisateur: echec de l'enregistrement!",
	"en" => "Cannot reselect user: registration failed!",
	"hu" => "Cannot reselect user: registration failed!",
	"it" => "Cannot reselect user: registration failed!",
	"nl" => "Kan gebruiker niet opnieuw selecteren: registratie gefaald!",
	"ru" => "Cannot reselect user: registration failed!",
	"de" => "Konnte Benutzer nicht erneut ausw�hlen: Registrierung fehlgeschlagen!",
	"zh" => "��������ѡ��ӵ����ע��ʧ�ܣ�",
	"pl" => "Nie mog� ponownie wybra� u�ytkownika: Rejestracja nieudana!",
	"se" => "TRANS SVENSKA",
	"es" => "Imposible reseleccionar usuario: registro fallido!",
	"pt" => "Cannot reselect user: registration failed!"
);
$txt_err_register_cant_reselect_product=array(
	"fr" => "Impossible de res�lectionner le produit: �chec de l'enregistrement!",
	"en" => "Cannot reselect product: registration failed!",
	"hu" => "Cannot reselect product: registration failed!",
	"it" => "Cannot reselect product: registration failed!",
	"nl" => "Kan product niet opnieuw selecteren: registratie gefaald!",
	"ru" => "Cannot reselect product: registration failed!",
	"de" => "Konnte Produkt nicht erneut ausw�hlen: Registrierung fehlgeschlagen!",
	"zh" => "��������ѡ���Ʒ��ע��ʧ�ܣ�",
	"pl" => "Nie mog� ponownie wybra� produktu: Rejestracja nieudana!",
	"se" => "TRANS SVENSKA",
	"es" => "Imposible reseleccionar producto: registro fallido!",
	"pt" => "Cannot reselect product: registration failed!"
);

$txt_err_register_succ=array (
	"fr" => "Enregistrement r�ussit!",
	"en" => "Registration successful!",
	"hu" => "Registration successful!",
	"it" => "Registration successful!",
	"nl" => "Registratie succesvol!",
	"ru" => "Registration successful!",
	"de" => "Registrierung erfolgreich!",
	"zh" => "ע��ɹ���",
	"pl" => "Rejestracja przebieg�a pomy�nie",
	"se" => "TRANS SVENSKA",
	"es" => "Registro correcto!",
	"pt" => "Registration successful!"
);
/** end new arrays **/
$txt_err_email_format = array(
  "fr" => "Mauvais format du login mail: il doit �tre compos� uniquement de lettre non capitales, de nombre ou du signe \"-\".<br>\n",
  "en" => "Incorect mail login format: it should consist of only lowercase letters, numbers, or the \"-\" sign.<br>\n",
  "hu" => "TRANS Incorect mail login format: it should be made only with lowercase letters or numbers or the \"-\" sign.<br>\n",
  "it" => "Formato del login email errato: dovrebbe essere composto solo da lettere minuscole o numeri o dal simbolo \"-\".<br>\n",
  "nl" => "Incorect mail login formaat: login dient alleen lowercase letters, nummers of het \"-\" teken te bevatten.<br>\n",
  "ru" => "TRANS Incorect mail login format: it should be made only with lowercase letters or numbers or the \"-\" sign.<br>\n",
  "de" => "Ung�ltiges Format des E-Mail-Logins: Es sollte nur aus Kleinbuchstaben, Ziffern und dem Bindestrich \"-\" bestehen.<br>\n",
  "zh" => "����������½������Ӧ�ý���Сд��ĸ�������ֻ���\"-\"��ɡ�<br>\n",
  "pl" => "B��dny format maila lub loginu: mo�esz u�y� ma�ych liter, cyfr lub znaku \"-\" (minus).<br>\n",
  "se" => "TRANS SVENSKA",
  "es" => "Formato de mail login incorrecto: S&oacute;lo deben usarse letras min&uacute;sculas o numeros o el signo &quot;-&quot;.<br>\n",
  "pt" => "TRANS Incorect mail login format: it should be made only with lowercase letters or numbers or the \"-\" sign.<br>\n");

$txt_err_mailbox_does_not_exists_in_db = array(
  "fr" => "Cette boite au lettre n'existe pas dans la base de donn�e !<br>\n",
  "en" => "Mailbox does not exists in database!<br>\n",
  "hu" => "TRANS Mailbox does no exists in database!<br>\n",
  "it" => "La Mailbox non esiste nel database!<br>\n",
  "nl" => "Mailbox bestaat niet in database!<br>\n",
  "ru" => "TRANS Mailbox does no exists in database!<br>\n",
  "de" => "Mailbox nicht gefunden!<br>\n",
  "zh" => "�����ַ�����ڣ�<br>\n",
  "pl" => "Nie ma takiej skrzynki!<br>\n",
  "se" => "TRANS SVENSKA",
  "es" => "Mailbox inexistente en la base de datos!<br>\n",
  "pt" => "TRANS Mailbox does no exists in database!<br>\n");

$txt_err_email_exists_as_mailinglist = array(
  "fr" => "Cette boite existe d�j� dans la base en tant que liste de publipostage !<br>\n",
  "en" => "Mailbox allready exist in the database as a mailing list!<br>\n",
  "hu" => "TRANS Mailbox allready exist in database as a mailing list!<br>\n",
  "it" => "La Mailbox esiste gi� nel database come mailing list!<br>\n",
  "nl" => "Mailbox bestaat al in database als mailing list!<br>\n",
  "ru" => "TRANS Mailbox allready exist in database as a mailing list!<br>\n",
  "de" => "Mailbox wird bereits als Mailingliste benutzt!<br>\n",
  "zh" => "�����ַ�Ѿ�����Ϊ�ʼ��б�������ݿ��У�<br>\n",
  "pl" => "Taka skrzynka ju� istnieje na liscie mailingowej!<br>\n",
  "se" => "TRANS SVENSKA",
  "es" => "Mailbox existente en la base de datos como Lista de Correo!<br>\n",
  "pt" => "TRANS Mailbox allready exist in database as a mailing list!<br>\n");

$txt_err_password_format = array(
  "fr" => "Les mots de passes doivent �tre fait uniquement de caract�res, de chiffres (a-zA-Z0-9) et doivent faire entre 6 et 16 caract�res.<br>\n",
  "en" => "Password consist of only letters and numbers (a-zA-Z0-9) and should be between 6 and 16 chars long.<br>\n",
  "hu" => "TRANS Password are made only with standards chars and numbers (a-zA-Z0-9) and should be between 6 and 16 chars long.<br>\n",
  "it" => "La password � costituita solo da caratteri standard e numeri (a-zA-Z0-9) e dovrebbe essere di lunghezza compresa fra i 6 e i 16 caratteri.<br>\n",
  "nl" => "Password dient alleen letters en nummers te bevatten ( a-zA-Z0-9) en moet tussen de 6 en 16 tekens lang zijn.<br>\n",
  "ru" => "TRANS Password are made only with standards chars and numbers (a-zA-Z0-9) and should be between 6 and 16 chars long.<br>\n",
  "de" => "Passw�rter d�rfen nur aus Buchstaben und Ziffern (a-z, A-Z, 0-9) bestehen und 6 bis 16 Zeichen lang sein.<br>\n",
  "zh" => "����Ӧ�ý�����ĸ���������(a-zA-Z0-9)�����ҳ�����6��16���ַ�֮�䡣<br>\n",
  "pl" => "Has�o jest tworzone ze standardowego zestawu znak�w (a-zA-Z0-9) i jego d�ugo�� mo�e si� zawiera� mi�dzy 6 a 16 znak�w.<br>\n",
  "se" => "TRANS SVENSKA",
  "es" => "La contrase&ntilde;a debe estar formada con caracteres estandar y numeros (a-zA-Z0-9) y tener entre 6 y 16 caracteres de longitud.<br>\n",
  "pt" => "TRANS Password are made only with standards chars and numbers (a-zA-Z0-9) and should be between 6 and 16 chars long.<br>\n");

$txt_clear_array=array(
	"fr" => "TRANS ",
	"en" => "TRANS ",
	"hu" => "TRANS ",
	"it" => "TRANS ",
	"nl" => "TRANS ",
	"ru" => "TRANS ",
	"de" => "TRANS ",
	"zh" => "TRANS ",
	"se" => "TRANS SVENSKA",
	"pl" => "TRANS ",
	"es" => "TRANS ",
	"pt" => "TRANS "
);
?>
