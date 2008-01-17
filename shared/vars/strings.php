<?php

$txt_draw_help_content = array(
	"fr" => "<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>AIDE EN LIGNE DE DTC</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. Qu'est-ce que DTC</u></font><br><br>
DTC est un outil fait sp�cialement pour vous. Avec DTC, vous
pouvez prendre le contr�le de l'administration de votre domaine :
vous pouvez configurer vos sous-domaines, vos boites emails et vos
comptes ftp.<br><br>

Ce logiciel a �t� distribu� sous licence L<a
href=\"http://www.gnu.org/\">GPL</a>
(Gnu Public Licence), ce qui signifie que vous pouvez optenir
une copie des sources de l'interface et les utiliser, les modifier,
et faire ce que vous voulez avec aussi longtemps que vous fassiez
profiter des �ventuels ajouts, et que vous ne tiriez pas de profit
de cet outil. Nous (chez GPLHost) croyons en l'effort pour le
logiciel libre, et nous esp�rons que notre contribution va encourager
le developpement d'autres logiciels. Nous avons aussi consid�r� le fait
que nous n'utilisons que du logiciel libre pour notre service
d'h�bergement, il est donc moralement normal de redistribuer nos
efforts de d�veloppement � la communaut�.<br><br>

<font size=\"+1\"><u>2. Emails</u></font><br>
<u>2.1. A quoi ca sert ?</u><br><br>
Vous pouvez ajouter, supprimer, ou modifier des boites �lectroniques
avec cet outil.<br><br>

<u>2.2. Redirection et livraison en local</u><br><br>
Chaque boite email peut �tre redirig�e vers au moins une adresse email,
ce qui signifie que lorsqu'un message sera re�u, celui-ci sera retransmit
vers une ou deux adresse(s) de courrier �lectronique. La case a cocher
\"D�liver en local\" indique si oui on non les messages pour cette boite
seront �crit sur nos disques durs, pour que vous puissier ensuite
lire vos message sur nos server en utilisant un client mail. Ce
client se connectera ensuite sur nos serveurs pour lire le courrier.
N'oubliez pas de lire vos courriers souvent si vous avez du
traffic, puisque les boites sont inclus dans votre quota disque.<Br><br>

<u>2.3. Delai pour l'ajout / l'effacement de comptes</u><br><br>
Lorsque vous ajoutez, on effacez des boites mails, ne vous attendez
pas � voir cela fonctionner imm�diatement : nous devons valider
les changements dans le syst�me pour que vos changements soient
actifs. Nous devons dire a Qmail (notre serveur de messagerie) de
recharger sa liste d'utilisateurs.<br><br>
La plus part du temps, nous validons les changements a la fin
de chaque jour ouvrable, mais si vous avez d'une validation
imm�diate, veuillez cliquer <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\">ici</a>.<br><br>

<u><2.4 Pas de spam !</u><br><br>
Attention, si vous utilisez notre serveur de messagerie de mani�re
abusive (envois de spam, de carte postales, de liste de diffusion,
revente d'email gratuit, etc... (liste non exhaustive)), les
sanctions pourraient �tre imm�diates. Rappelez vous que nous
ne d�sirons pas que notre serveur de mail soit sur les listes
noires !!!<br><br>
Nous r�fl�chissons a l'ajout de fonction de mailling list avec
un demon sp�cialis� (sympa, marjodomo, etc...).<br><br>

<font size=\"+1\"><u>3. Sous-domaines</u></font><br>
<u>3.1. A quoi ca sert ?</u><br><br>
Cette partie de l'interface permet la configuration des
sous-domaines de votre site web, ce qui signifie que
vous pourrez cr�er des adresses de la forme :
<pre>
http://ce.que.vous.voulez.votre-nom-de-domaine.com
</pre>
<u>3.2. Qu'est-ce que le sous-domaine par d�faut ?</u><br><br>
Lorsque quelqu'un essaye de contacter votre site web avec
une URL sans sous-domaine, celui-ci sera r�dirig� vers
le sous-domaine que vous aurez configur� comme �tant
celui par d�faut. En d'autre termes, si vous
configurez :
<pre>
www
</pre>
comme le sous-domaine par d�faut, alors si quelqu'un tape :
<pre>
http://votre-nom-de-domaine.com
</pre>
dans son browser web, alors il sera redirig� vers :
<pre>
http://www.votre-nom-de-domaine.com
</pre>
En fait, l'URL est conserv�e, et aucune redirection
n'est r�ellement construite dans une page HTML,
plus simplement, un site web pointant vers les
r�pertoires de votre sous-domaine par d�faut �
�t� fabriqu�, donc il utilise les memes pages
html (ou php) et utilise les memes fichiers de
log.<br><br>

<u>3.3. Sous-domaines interdits</u><br><br>
Puisque nous avont d�j� configur� ces sous-domaines
pour d'autres services que le web, vous ne pouvez
pas utiliser ces sous-domaines pour des sites apache :
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>

<u>3.4. Effacement des sous-domaines</u><br><br>
C'est a vous d'effacer les fichiers utilis�s par les
sous-domaines que vous voulez effacer. Vous pouvez
effacer ces fichiers avec un clients FTP. Mais s'il
vous pla�t, faites TRES attention a ne pas effacer les
fichiers d'un sous-domaine que vous n'avez pas effac�
dans DTC. En effet, le serveur web Apache n'est pas
content lorsqu'un dossier n'existe pas tout en �tant
configur�, et cela posera des probl�mes a nos administrateurs.<br><br>

<u>3.5. Delai de l'ajout / l'effacement de sous-domaines</u><br><br>
Nous devons relancer apache (notre serveur web) et bind (notre serveur
de nom) pour que vos sous-domaines soit actifs. En d'autres termes,
nous devons valider vos changement.

La plus part du temps, nous validons les changements a la fin
de chaques jour ouvrable, mais si vous avez d'une validation
imm�diate, veuillez cliquer <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache and named now !\">ici</a>.<br><br>

<u>3.6. Statistiques de votre site</u><br><br>
Puisque votre trafic est en fichier de log, nous calculons le
trafic total pour les 12 derniers mois de statistics en utilisant
<a href=\"http://www.mrunix.net/webalizer/\">webalizer</a>.
Les statistiques sont calcul�s chaques jours a 4 heure du matin,
lorsqu'il y a le moins de trafic, et sont accessible dans le r�pertoire
\"stat\" de votre site.<br><br>

Si vous avez enregistr� :
<pre>
http://www.mydomain.com
</pre>
vos statistiques se trouverons dans :
<pre>
http://www.mydomain.com/stats/
</pre>

Attention ! Si vous faite vraiment beaucoup
de trafic, votre fichier de log poura �tre effac� et vos statisques remis
a z�ro. Nous ne garantissons rien pour ces statistiques, elle sont
simplement
pr�sente pour vous aider.<br><br>

<font size=\"+1\"><u>4. Comptes FTP</u></font><br>
<u>4.1. A quoi ca sert ?</u><br><br>
Pour avoir des pages qui fonctionne et qui marche, vous
devez les envoyer sur nos serveurs. Mais puisque vous
pouvez �tre plusieurs a travailler sur votre site, vous
pouvez avoir besoin de plusieurs comptes FTP. DTC est
l'outil pour administrer ces comptes et mots de passes.<br><br>

<u>4.2. Delai de l'ajout / l'effacement de comptes FTP</u><br><br>
Puisque nous utilisons ProFTP avec un module sp�cial pour utiliser
une base de donn�e, tous les changements sur vos comptes FTP seront
pris en comptes imm�diatement en temps r�el.<br><br>

<u>4.3. Limiter un utilisateur a un chemin sp�cifique</u><br><br>
Pour le moment, vous ne pouvez pas le faire (mais c'est pr�vu).
Par contre, nous pouvons le faire sur demande motiv�e, si vous
nous �crivez en cliquant <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">ici</a>, en pr�cisant le nom d'utilisateur le son
chemin.<br><br>

<u>4.4. Pas de piratage ou d'�change de fichier sur nos serveurs
!</u><br><br>
Si nous vous donnons un espace FTP sur nos serveurs, c'est pour y placer
un contenu WEB. Ce que veut dire que les fichiers binaires dont vous
n'avez pas les droits n'ont pas leurs place ici ! Attention aux abus,
nous pourrions fermer votre compte sans avertissement.<br><br>

<font size=\"+1\"><u>5. Pourquoi le FTP ou le POP est parfois lent
?</u></font><br><br>
Il y a plusieurs raisons a cela. La premi�re, c'est qu'il peut arriver
que de nombreux utilisateurs envois des fichiers en meme temps. La seconde,
c'est que nous utilison un system de login par base de donn�e (donc le login
est foc�ment plus lent, surtout avec plusieurs millier d'utilisateurs).
De plus, le partage de la bande passante sur internet (de mani�re plus
globale)
est rarement �quitable, et il se peut qu'un des utilisateurs utilise toute
la bande passante et qu'il ne vous reste plus rien. Enfin, nous
avons favoris� l'envois en http pour que vos pages soient affich�es plus
vite.<br><br><br>
</div>
<center>Pour l'�quipe de GPLHost,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>",

"en" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>ONLINE DTC
HELP</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. What is DTC</u></font><br><br>
DTC is a tool we made especialy for you. With it, you can take the
control of your domain administration : you can
manage all your subdomains, emails, and ftp accounts.<br><br>
All this tool had been release under the <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence),
which means that you can have a copy of this interface source
code, modify it and use it as you wish, as long as you redistribute
all thoses changes. We (at GPLHost) believe in the Free
Software effort, and we hope this participation will encourage
other developpements. We consider that because we use only
open-source software for our hosting service, it is normal
to redistribute our developpements.<br><br>

<font size=\"+1\"><u>2. Emails</u></font><br>
<u>2.1. What will it do ?</u><br><br>
You can add, delete or modify a mailbox with this tool.<br><br>

<u>2.2. Redirection and local delivery</u><br><br>
Each mailbox can be redirected to one or more email addresses. This
means that when a message is recieved, it is forwared to one
or two email adresse(s). The \"deliver locally\" checkbox
tells wether or not all message for this mailbox will be
written on our hard disk, so thenafter you will be able to
read your message using a mail client, connecting to
our server. Don't forget to checkup your mails often if
you have trafic, because the mailbox are included in the
quota<br><br>
<u>2.3. Delay when adding / deleting accounts</u><br><br>
When you add or delete a mail account, don't expect it to
work immediatly : you will have to wait until the next
cron job to start, so the mail, ssh or web server
reloads it's database.<br><br>
Most of the time, we validate all changes at the end of
each working days, but if you need an immediate validation,
click <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\">here</a>.<br><br>

<font size=\"+1\"><u>3. Subdomains</u></font><br>
<u>3.1. What will it do ?</u><br><br>
This part of the interface is for configurating your
somain's sites, which means that you will be able
to populate your web site with url of the form :
<pre>
http://anything.u.want.mydomain.com
</pre>
<u>3.2. What is the default subdomain ?</u><br><br>
Whe someone trys to contact your web site with an
URL without a subdomain, he is redirected to the
subdomain you said it was the default. In other
words, if you tell that:
<pre>
www
</pre>
is the default subdomain, someone that trys to
connect using an url starting with:
<pre>
http://mydomain.com
</pre>
will be redirected to:
<pre>
http://www.mydomain.com
</pre>
In fact, the URL is kept, and no URL redirection
in a HTML page has been created, but simply, a
website with that URL has been configurated to
the same location of the \"www\" subdomain, so
it accesses the same html (or php) files, and
shares the same log file.<br><br>

<u>3.3. Forbidden subdomains</u><br><br>
Because we have configurated those subdomains for
other services than web, you cannot use the following
subdomains for apache web sites :
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>

<u>3.4. Deleting subdomains</u><br><br>
It is up to you to delete the files used by your subdomain.
You can delete all the files using a standard ftp client.
But PLEASE take realy care not to delete a subdomain files
without deleting it using DTC. Indeed, the Apache web server
will complain if the directory does not exist but a web site
is configurated for it, and this will be anoying when restarting
apache.<br><br>

<u>3.5. Delay when adding / deleting subdomain</u><br><br>
We will have to restart our Apache web server in order
to have your changes taking effect. Most of the time, we validate all
changes at the end of
each working days, but if you need an immediate validation,
click <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache now !\">here</a>.<br><br>

<u>3.6. Trafic statistics for your subdomains</u><br><br>
Because all your trafic is loged, we calculate the overall
last 12 month statistics using <a href=\"http://www.mrunix.net/webalizer/\">
webalizer</a>. The statistics are calculated each days at
4 in the morning (this is when there is less trafic), and
can be reach under the \"/stats\" directory on each
subdomains. That means that if you have registerd :
<pre>
http://www.mydomain.com
</pre>
all statistics will be generated under :
<pre>
http://www.mydomain.com/stats/
</pre>

<font size=\"+1\"><u>4. FTP accounts</u></font><br>
<u>4.1. What will it do ?</u><br><br>
To have your page working and running, you have to upload
them. But because you may not be only one to work on your
web site, you may want to have more that one FTP account
for accessing your web site. DTC will be the tool for
managing thoses accounts and passwords.<br><br>

<u>4.2. Delay when adding / deleting FTP accounts</u><br><br>
Because we use ProFTP with a special module for handling accounts in
our MySql database, all changes to your FTP accounts take effect
in realtime.<br><br>

<u>4.3. Limiting user to specified path</u><br><br>
For the moment you cannont limit one user to access to only
a part of your web site. But we (the administrators) can
do it if you ask sending an <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">email</a>, telling what user
and what path you need.<br><br>


<u>4.4. No piracy or file exchange on our servers please !</u><br><br>
If we provide a user space on our ftp servers, this is
for you to upload HTML content. This means no binary
files you don't own the rights ! Take care if you abuse,
we could close your accounts without notification.<br><br>

<font size=\"+1\"><u>5. Why ftp or pop is slow, sometimes ?</u></font><br><br>
There are many reasons for that. The first one is because
we don't have unlimited bandwidth with for uploading, and sometimes,
+there are really a lot of people uploading. The ones that
+are closer to our servers usually use all the
+bandwidth, so one user has most of it, and some have
+none. There is nothing we can do about that...<br><br>
Another reason is because we have decided to limit the
bandwidth for pop, smtp, and ftp, so that web browsing
on our server is faster.<br><br><br>
</div>
<center>For the GPLHost team,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",

"hu" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>ONLINE DTC
S�G�</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. Mi is a DTC ?</u></font><br><br>
DTC egy eszk�z amit direkt neked k�sz�tett�nk. Seg�ts�g�vel kezedben tarthatod
a domain adminisztr�i�t : menedzselheted az �sszes aldomaint, levelez�seket, ftp
hozz�f�r�seket.<br><br>
Ez az eszk�z a <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence),
licencel�si form�t haszn�lja, ami azt jelenti, hogy lehet neked bel�le egy forr�sk�d p�ld�nyod
m�dos�thatod, haszn�lhatod tetsz�s szerint ameddig ezeket a v�ltoztat�sokat k�zz� teszed.
. Mi (a GPLHost-n�l) hissz�nk a Szabad Szoftverbe fektetett er�fesz�t�sbe �s rem�lj�k
hogy a mi k�zrem�k�d�s�nk inspir�l m�s fejleszt�ket is.
A mi elgondol�sunk az, hogy mivel mi kiz�r�lag szabad szoftvert haszn�lunk a webhosting szolg�ltat�sunk
�zemeltet�s�hez ez�rt �rtet�, hogy k�zz�tessz�k a fejleszt�seinket.<br><br>

<font size=\"+1\"><u>2. E-mail-ek</u></font><br>
<u>2.1. Mit fog nekem ez csin�lni ?</u><br><br>
Hozz�adhat, t�r�lhet, m�dos�that vele levelesl�d�kat.<br><br>

<u>2.2. �tir�ny�t�s �s helyi k�zbes�t�s</u><br><br>
Minden levelesl�d�t �tir�ny�that egy vagy t�bb c�mre, ami azt jelenti
hogyha egy �zenete �rkezik az tov�bb�t�dik egy vagy t�bb c�mre.
A \"helyileg k�zbes�t�s\" jel�l�n�gyzet meghat�rozza
,hogy az �sszes �zenet a mi szerver�nk merevlemez�n t�rol�dj�k e,
ahonnan majd egy levelez�kliens seg�ts�g�vel let�ltheti azokat.
Ne felejtse el let�lteni a leveleit, mert a levelesl�d�j�nak
is van t�rhely kv�t�ja.<br><br>
<u>2.3. K�sleltet�s hozz�f�r�sek hozz�ad�sa / t�rl�se k�zben</u><br><br>
Ha hozz�ad vagy t�r�l levelesl�d�kat, akkor ne v�rja hogy azok r�gt�n m�k�dnek is:
: el�sz�r �t kell vezetn�nk a rendszerben a v�ltoz�sokat, ahhoz hogy az �n hozz�f�r�s�ben
bek�vetkezett m�dos�t�sok �letbe l�pjenek : meg kell mondanunk a Qmail-nek (a levelez� szerver�nk)
hogy olvassa �jra a felhaszn�l�i adatb�zis�t.<br><br>
Legt�bbsz�r ezt munkanapokon a nap v�g�n tessz�k meg, de ha r�gt�n sz�ks�ge van az �rv�nyes�t�sre
, akkor kattintson <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email hozz�f�r�s
�rv�nyes�t�se\">ide</a>.<br><br>

<font size=\"+1\"><u>3. Aldomain-ek</u></font><br>
<u>3.1. Mit fog ez nekem csin�lni ?</u><br><br>
Ez a ter�lete a programnak arra szolg�l, hogy be�ll�tsa a domain-jeihez kapcsol�d�
oldalakat, ami azt jelenti hogy l�trehozhat oldalakat a k�vetkez� form�ban :
<pre>
http://barmi.amit.szeretne.domain.hu
</pre>
<u>3.2. Mi az alap�rtelmezett aldomain ?</u><br><br>
Ha valaki szeretne csatlakozni az �n weboldal�hoz egy olyan
URL-el, ahol nincs megadva az aldomain, akkor a k�r�s �t lesz ir�ny�tva arra az aldomain-re
amit �n alap�rtelmezettek itt megad. M�s sz�val
ha �n azt mondja, hogy a:
<pre>
www
</pre>
lesz az alap�rtelmezett aldomain, akkor ha valaki pr�b�lkozik csatlakozni az
�n weboldal�hoz ilyen form�ban:
<pre>
http://mydomain.com
</pre>
az �t lesz ir�ny�tva a:
<pre>
http://www.mydomain.com
</pre>c�mre.
Tulajdonk�ppen az URL maga nem v�ltozik �s nem lesz �tir�ny�t�s a html oldalban sem
csak egyszer�en ugyanazokat a html vagy php oldalakat fogja tudni el�rni
�s ugyanazokat a napl�f�jlokat haszn�lja majd.
<br><br>

<u>3.3. Tiltott aldomain-ek</u><br><br>
Mivel ezeket az aldomain-eket a web-t�l elt�r� szolg�ltat�sokra
haszn�ljuk, ez�rt a k�vetkez� aldomain neveket nem haszn�lhat�k apache weboldalk�nt:
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>

<u>3.4. Aldomain-ek t�rl�se</u><br><br>
�n�n m�lik, hogy t�rli e azokat a f�jlokat amiket az aldomain-je haszn�l.
Az �sszes f�jlt t�r�lheti egy egyszer� ftp kliensprogram seg�s�g�vel.
Azonban k�rem, hogy figyeljen arra, hogy ne t�r�lje an�lk�l az aldomain f�jljait
, hogy mag�t az aldomain-t t�r�ln� a DTC-n kereszt�l. M�sk�l�nben az Apache web szerver
panaszkodni fog arra, hogy a k�nyvt�r nem l�tezik a weboldal m�gis be van konfigur�lva
annak haszn�lat�ra �s ez el�g bosszant� lenne, amikor legk�zelebb �jraind�tjuk az
apache-ot.<br><br>

<u>3.5. K�sleltet�s aldomain-ek hozz�ad�sa / t�rl�se eset�n</u><br><br>
�jra kell ind�tanunk az Apache webszerver�nket ahhoz hogy bek�vetkezett m�dos�t�sok
�letbe l�pjenek.
Legt�bbsz�r ezt munkanapokon a nap v�g�n tessz�k meg, de ha r�gt�n sz�ks�ge van az �jraind�t�sra
, akkor kattintson <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]aldomain l�trehoz�s:
k�rem ind�ts�k �jra az apache-ot most ! \">ide</a>.<br><br>

<u>3.6. L�togat�i statisztik�k az aldomain-ekhez</u><br><br>
Mivel az �sszes forgalmat napl�zzuk, ez�rt �sszes�tett 12 h�napos statisztik�t gener�lunk
a <a href=\"http://www.mrunix.net/webalizer/\">
webalizer program seg�ts�g�vel</a>. A statisztik�kat minden nap
4 �rakor k�sz�tj�k (ez az az id�pont, amikor a legkisebb a forgalom). A statisztik�k
el�rhet�k a \"/stats\" k�nyvt�r alatt az �sszes aldomain-re lebontva.
Ez azt jelenti, hogyha �n regisztr�lta a k�vetkez� domain-t :
<pre>
http://www.mydomain.com
</pre>
akkor az �sszes statisztika a :
<pre>
http://www.mydomain.com/stats/
</pre>
alatt lesz el�rhet�.
<font size=\"+1\"><u>4. FTP hozz�f�r�sek</u></font><br>
<u>4.1. Mit fog ez nekem csin�lni ?</u><br><br>
Ahhoz hogy az oldalai m�k�djenek �nnek fel kell �ket t�lteni a szerver�nkre.
De mivel lehet, hogy nem �n az egyetlen aki az �n weboldal�n dolgozik
,ez�rt sz�ks�ge lehet arra hogy t�bb  FTP hozz�f�r�se legyen az weboldal�hoz.
A DTC az az eszk�z amivel menedzselheti ezeket a hozz�f�r�seket �s jelszavakat.
<br><br>

<u>4.2. K�sleltet�s FTP hozz�f�r�s hozz�ad�sa / t�rl�se eset�n</u><br><br>
Mivel mi a ProFTP programot haszn�ljuk egy k�l�nleges modullal, ami lehet�v� teszi
a hozz�f�r�sek t�rol�s�t a MySql adatb�zisunkban, ez�rt az �sszes v�ltoztat�s
ami az FTP hozz�f�r�seket �rinti azonnal v�grehajt�dik.<br><br>

<u>4.3. Felhaszn�l�k korl�toz�sa egy el�r�si �thoz</u><br><br>
Jelenleg nem tudja korl�tozni a felhaszn�l�kat �gy, hogy a weboldal�nak
csak egy r�sz�hez f�rjenek hozz� . De mi (az adminisztr�torok) meg tudjuk ezt tenni
ha �n k�ri egy <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Felhaszn�l�
el�r�si �t korl�toza az FTP hozz�f�r�sben\">e-mail-ben</a>, amiben le�rja hogy melyik az �rintett
felhaszn�l� �s melyik az el�r�si �t amire sz�ks�ge van.<br><br>

<u>4.4. F�jcserel�sre ne haszn�lja �s illeg�lis tartalmat k�rem NE t�roljon az FTP szerver�n !</u><br><br>
Az hogy mi t�rhelyet biztos�tunk �nnek az ftp szerver�nk�n az az�rt van, hogy
fel tudja t�lteni a HTML oldalait. Ez azt jelenti, hogy nincs joga olyan
bin�ris f�jlokat t�rolni a szerveren, amik nem az �n tulajdon�t k�pezik.
Amennyiben erre utal� jelet �szlel�nk a hozz�f�r�s�t minden el�zetes
figyelmeztet�s n�lk�l megsz�ntethetj�k.<br><br>

<font size=\"+1\"><u>5. Mi�rt lass� az ftp vagy a pop hozz�f�r�s n�ha ?</u></font><br><br>
Ennek sok oka lehet. Az els� hogy nincs el�g felt�lt�si s�vsz�less�g�nk
�s t�nyleg nagyon sokan t�ltenek fel egyszerre.
A m�sik hogy valaki a szervereink \"k�zel�b�l\" t�lt fel �s elviszi az eg�sz s�vsz�less�get
teh�t egy felhaszn�l� haszn�lja az eg�szet m�sok pedig emiatt nem jutnak el�g
s�vsz�less�ghezt. Sajnos ez nem rajtunk m�lik �s nem tudunk ellene semmit tenni.<br><br>
A m�sik oka az lehet, hogy �gy d�nt�tt�nk, hogy limit�ljuk a pop, smtp, �s ftp
�ltal haszn�lhat� s�vsz�less�get �s �gy a  web b�ng�sz�s gyorsabb lesz a szerver�nk�n.
<br><br><br>
</div>
<center>For the GPLHost team,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |
|___________\    |    |__________/|____|     /|___________\___________\GPL |
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",

	"it" => "
<div align=\"center\" >
  <p>DTC &egrave; un'applicazione opensource su licenza GPL che ti permette di amministrare con semplicit&agrave; il tuo dominio: profili ftp, caselle di posta, sottodomini, reindirizzamenti, database, ecc. Qui di seguito trovi una guida passo passo per usare il tuo pannello.</p>
  </div>
<div align=\"justify\" >
<ul>
<li><a href=\" #posta\" >Caselle di posta</a></li>
<li><a href=\" #sottodomini\" >Sottodomini</a></li>
<li><a href=\" #statistiche\" >Statistiche sottodomini</a></li>
<li><a href=\" #dns\" >Preferenze DNS</a> </li>
<li><a href=\" #ftp\" >Profili FTP</a></li>
<li><a href=\" #database\" >Database</a></li>
<li><a href=\" #mailing\" >Mailing list</a> </li>
<li> <a href=\" #pacchetti\" >Installazione pacchetti</a></li>
</ul>  <h3><a name=\"posta\" id=\"posta\" ></a>1. Caselle di posta </h3>
  <p>
  Per creare una nuova casella di posta clicca sul nome del tuo dominio e quindi su Caselle di posta. Configura la tua casella come indicato nella seguente schermata:</p>
  <p><img src=\"http://itcs.areaserver.it/posta.png\" alt=\"Casella di posta\" width=\"844\" height=\"728\" > </p>
  <p>Tieni spuntata l'opzione &quot;Copia messaggi in locale&quot; per scaricare i messaggi sul tuo programma di posta. Configura il tuo programma di posta elettronica come di seguito:</p>
  <ol>
    <li>Nome utente &raquo;  tuaemail@tuodominio.xx </li>
    <li>Password &raquo; tuapassword </li>
    <li>Server di posta in entrata (POPMAIL o IMAP) &raquo;  mail.tuodominio.xx</li>
    <li>Server di posta in uscita (SMTP) &raquo;  mail.tuodominio.xx</li>
  </ol>
  <p>Nelle preferenze del tuo programma di posta spunta l'opzione &quot;Cancella copia messaggi sul server&quot; per non occupare lo spazio della casella.  Ricorda infine di controllare periodicamente  la posta per non occupare tutto lo spazio della casella. Le modifiche alle caselle email sono pressoch&eacute; immediate: se noti dei rallentamenti o problemi di connessione alla posta puoi <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\" >comunque segnalarcelo. </a></p>
  <p>&nbsp;</p>
  <h3><a name=\"sottodomini\" id=\"sottodomini\" ></a>2. Sottodomini</h3>
<p>
    Per creare un sottodominio del tipo <strong>http://nome.tuodominio.xx</strong> clicca alla voce sottodominio e 
  configura i parametri come indicato nella seguente schermata:</p>
  <p><img src=\"http://itcs.areaserver.it/sottodominio.png\" alt=\"Sottodomini\" width=\"796\" height=\"636\" > </p>
  <p><br>
    Per ogni dominio da te attivato esiste un sottodominio predefinito del tipo <strong>www</strong> per permettere agli utenti di collegarsi al tuo sito anche senza specificare l'indirizzo completo. Pertanto digitando <strong>http://tuodominio.it</strong> si verr&agrave; reindirizzati su <strong>http://www.tuodominio.xx</strong><br>
    Non &egrave; possibile attivare sottodomini con le estensioni <strong>ftp, smtp, pop</strong> perch&eacute; vengono usate dal server Apache per gestire la posta e la connessione ftp.</p>
  <p>    Per modificare un sottodominio clicca sul suo nome e apporta le modifiche necessarie.
  Da qui puoi anche cancellare il sottodominio: <strong>non rimuovere via ftp le cartelle del sottodominio senza prima averlo cancellato dal pannello di controllo. </strong></p>
  <p> Le modifiche ai sottodomini avvengono al riavvio del server Apache: se noti dei rallentamenti o ritardi  nell'attivazione dei sottodomini puoi <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain account 
validation\" >comunque segnalarcelo. </a></p>
  <p>&nbsp;</p>
  <h3><a name=\"statistiche\" id=\"statistiche\" ></a>3. Statistiche sottodomini </h3>
  <p>
    Tutto il traffico sul tuo dominio viene tracciato dal server attraverso  <a href=\"http://www.mrunix.net/webalizer/\" >
  webalizer</a>. Le statistiche dei vari sottodomini sono raggiungibili  cliccando su &quot;Statistiche&quot; o collegandosi alla cartella &quot;/stats&quot; dei tuoi sottodomini. Ad esempio se vuoi leggere le statistiche del dominio <strong>www.tuodominio.xx</strong> dovrai collegarti all'indirizzo <strong>http://www.tuodominio.xx/stats</strong></p>
  <p><img src=\"http://itcs.areaserver.it/statistiche.png\" alt=\"Statistiche\" width=\"844\" height=\"383\" /> </p>
  <p>&nbsp;</p>
  <h3><a name=\"dns\" id=\"dns\" ></a>4. Preferenze DNS </h3>
  <p>Se vuoi che il dominio sia ospitato su un altro server devi specificare gli indirizzi DNS primario e secondario del server (chiedi al tuo amministratore):</p>
  <p><img src=\"http://itcs.areaserver.it/dns.png\" alt=\"Indirizzi DNS\" width=\"844\" height=\"534\" /> </p>
  <p>&nbsp;</p>
  <h3><a name=\"ftp\" id=\"ftp\" ></a>5.  Profili FTP</h3>
  <p>Dal pannello puoi creare/modificare uno o pi&ugrave; profili ftp per caricare/prelevare file nei tuoi sottodomini:</p>
  <p><img src=\"http://itcs.areaserver.it/ftp.png\" alt=\"profili FTP\" width=\"844\" height=\"405\" /></p>
  <p>Configura il tuo programma FTP  come di seguito:</p>
  <ol>
    <li>Hostname/Server name  &raquo;  www.tuodominio.xx </li>
    <li>Username &raquo; tuonome@tuodominio.xx </li>
    <li>Password &raquo; tuapassword  </li>
    <li>Remote path  &raquo;  /tuodominio.xx/subdomains/www/    </li>
  </ol> 
  <p>&nbsp;</p>
  <h3><a name=\"database\" id=\"database\" ></a>6. Database  </h3>
      <p>Dal pannello puoi creare/modificare fino a 5 database:</p>
      <p><img src=\"http://itcs.areaserver.it/db.png\" alt=\"database\" width=\"844\" height=\"412\" /></p>
   
      <p>Dal pannello di controllo puoi accedere a <a href=\"https://itcs.areaserver.it/index.php?sousrub=phpmyadmin\" >phpMyAdmin</a> con il tuo nome utente e password per gestire in piena libert&agrave; i tuoi database (eseguire query, modificare tabelle, importare file sql, ecc.):</p>
      <p><img src=\"http://itcs.areaserver.it/phpMyAdmin.png\" alt=\"database\" width=\"646\" height=\"485\" /></p>
      <p>&nbsp;</p>
      <h3><a name=\"mailing\" id=\"mailing\" ></a>7. Mailing list </h3>
      <p>Dal pannello puoi creare/modificare fino a 10 mailing list (o liste di distribuzione):</p>
      <p><img src=\"http://itcs.areaserver.it/mailing-list.png\" alt=\"mailing-list\" width=\"844\" height=\"401\" /></p>
      <p><br />
        La mailing list pu&ograve; essere controllata via email o tramite il pannello di controllo.<br />
      Di seguito gli indirizzi ai quali puoi inviare una email per eseguire il rispettivo comando:</p>
      <p> tuamailing-help@www.tuodominio.xx -&gt; restituisce la lista dei comandi pi&ugrave; comuni<br />
        tuamailing-list@www.tuodominio.xx -&gt; restituisce la lista degli iscritti alla lista<br />
        tuamailing-get-N@www.tuodominio.xx -&gt; restituisce il messaggio N della lista<br />
        tuamailing-owner@www.tuodominio.xx -&gt; permette di inviare una email al proprietario della lista<br />
        tuamailing-unsubscribe@www.tuodominio.xx -&gt; elimina l'indirizzo email del mittente dalla lista<br />
        tuamailing-subscribe@www.tuodominio.xx -&gt; iscrive l'indirizzo email del mittente alla lista<br />
        tuamailing-subscribe-digest@www.tuodominio.xx -&gt; iscrive l'indirizzo email del mittente alla versione digest della lista<br />
        tuamailing-subscribe-nomail@www.tuodominio.xx -&gt; iscrive l'indirizzo email del mittente alla versione nomail della lista</p>
      <p>Per ulteriori informazioni visita il sito ufficiale di mlmmj all'indirizzo <a href=\"http://mlmmj.mmj.dk\" >http://mlmmj.mmj.dk</a></p>
      <p>&nbsp;</p>
      <h3><a name=\"pacchetti\" id=\"pacchetti\" ></a>8. Installazione pacchetti </h3>
      <p>Dal pannello puoi installare diverse applicazioni web: cms (content management system), newsletter, carrelli elettronici, forum di discussione, ecc.:</p>
      <p><img src=\"http://itcs.areaserver.it/pacchetti.png\" alt=\"pacchetti\" width=\"844\" height=\"782\" /></p>
      <p> La procedura di installazione &egrave; molto semplice:</p>
      <ol>
        <li>seleziona il database e la password per il pacchetto</li>
        <li>inserisci una email, login e password per l'amministratore          </li>
      </ol>
      <p><img src=\"http://itcs.areaserver.it/pacchetti2.png\" alt=\"pacchetti\" width=\"844\" height=\"663\" /></p>
      <p><br>
    <br>
  </p>
</div>
",
	"nl" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>ONLINE DTC
HELP</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. Wat is DTC</u></font><br><br>
DTC is een programma dat we speciaal voor eindgebruikers
zoals jij hebben gemaakt. Met dit programma neem je het beheer
van je domein in eigen handen. Je kan eigen subdomeinen aanmaken en
eigen e-mail- en ftp accounts instellen.<BR><BR>
Dit programma is uitgegeven onder de <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence),
wat in zoverre betekend dat je een kopie van de vrijgegeven broncode
mag bezitten, wijzigen en gebruiken zoals je het zelf wilt. Zolang je
het maar verder distribueert met alle veranderingen er in.
Wij (bij GPLHost) geloven in de Vrije Software en we hopen
dat deze participatie in de vrije software anderen aanspoort met dit 
product verder te gaan of ook een stuk vrije software op de markt
te brengen. Wij geloven hier in omdat we zelf alleen maar gebruik maken
van open-source software voor onze diensten en wij het heel normaal vinden
om onze vorderingen met anderen te delen. <BR><BR>
<font size=\"+1\"><u>2. E-mails</u></font><br>
<u>2.1. Wat kun je met dit onderdeel?</u><br><br>
Je kan e-mail accounts aanmaken, wijzigen en verwijderen met dit programma.<br><br>
<u>2.2. Doorverwijzingen en lokaal afleveren.</u><br><br>
Elk e-mail account kan je doorverwijzen naar 1 of meer e-mail adressen.
Dit houd in dat zodra er een bericht voor dit account binnenkomt het gelijk
word doorgestuurd naar de 1 of meer ingevoerde e-mail adressen.
Het vinkje \"lokaal afleveren\" vertelt het systeem of de binnengekomen e-mail
wel of niet lokaal op de harde schijf moet worden gezet. Dit is noodzakelijk om
je e-mail later met een e-mail programma op te kunnen halen of om je e-mail via
de webmail te bekijken. <i> Als je dit doet, moet je niet vergeten periodiek
even te controleren of je mail hebt en dit te verwijderen. Je e-mail account heeft
namelijk een quota waar je niet overheen mag gaan. Dit quota is gebasseerd op
harde schijfruimte.</i><br><br>
<u>2.3. Vertraging tijdens het aanmaken of verwijderen van emailaccounts.</u><br><br>
Wanneer je een e-mail account aanmaakt of verwijdert dat wordt de verandering
niet direct doorgevoerd. Dit kan ook niet omdat we bij elke verandering het 
programma Qmail (onze mailserver) moeten herstarten om de veranderingen op te nemen.
Daarom word de server bijna altijd aan het eind van elke werkdag even herladen.
Indien het echt noodzakelijk is dat de accountverandering DIRECT word doorgevoerd dan 
kun je even een e-mail sturen naar de beheerder door <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account
validation\">hier</a> te klikken.<br><br>
<font size=\"+1\"><u>3. Subdomeinen</u></font><br>
<u>3.1. Wat kun je met dit onderdeel?</u><br><br>
Dit is een onderdeel van uw website configuratie.
Dit betekent dat uw zelf kan instellen hoe uw domein word
benadert, zoals bijv. :
<pre>
http://Alles.wat.u.wilt.mijndomein.nl
</pre>
<u>3.2. Wat is het standaard subdomein?</u><br><br>
Wanner iemand contact probeert te maken naar een domein
waarvan geen subdomein bekend is, dan zal deze automatisch
naar het subdomein gaan waarvan u hebt gezegd dat dit het
standaard domein moet worden. Dus als u bijvoorbeeld 
instelt dat:
<pre>
www
</pre>
het standaard subdomein is, dan zal iemand die contact probeert
te maken met:
<pre>
http://mijndomein.nl
</pre>
automatisch worden doorverwezen naar:
<pre>
http://www.mijndomein.nl
</pre>.
Het gaat zelfs zover dat de persoon die
<pre>
http://mijndomein.nl
</pre>
niet eens te zien krijgt dat deze pagina op een
andere website staat. De website is zo geconfigureerd
dat deze dezelfde lokatie deelt als het subdomein zo dat
dezelfde html bestanden worden gedeelt en ook de logbestanden.<br><br>
<u>3.3. \"Verboden\" subdomeinen</u><br><br>
Er is een aantal subdomeinen die u niet mag gebruiken.
Dit is so ingesteld om te voorkomen dat u bijvoorbeeld uw web en
mail verkeer door elkaar haalt. Daarom kunt u de volgende subdomeinen niet
aanmaken als website:
<ul>
<li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>
<u>3.4. Verwijderen van subdomeinen</u><br><br>
Bij het verwijderen van subdomeinen geldt hetzelfde als het
aanmaken van subdomeinen. Pas zodra de webserver herladen is
dan is het subdomein echt verwijderd. Verder laten we het aan
jou over om alle gegevens van het subdomein echt van de 
harde schijf te verwijderen. Dit kan je doen met een standaard 
FTP programma. Vergeet niet dat je EERST het subdomein met het 
DTC programma moet wissen en pas daarna de bestanden met het FTP programma.
Verwijder je alleen de gegevens op de harde schijf en niet in het
DTC programma dan zal de webserver bij de volgende herstart
niet goed starten. Hiermee benadeel je je andere subdomeinen omdat
deze dan niet meer zichtbaar zijn. Tevens zullen de andere mensen
op deze server er niet echt vrolijk van worden. 
WEES DUS VOORZICHTIG!<br><br>
<u>3.5. Vertraging bij het aanmaken en verwijderen van subdomeinen</u><br><br>
Bij het aanmaken en het verwijderen van subdomeinen zal u enige vertraging
ondervinden. Dit komt omdat alle wijzigingen bekrachtigd moeten worden
door een herstart van de webserver. We proberen dit elke werkdag aan
het einde van de dag te doen. Door dit eens per dag te doen ondervind 
niet iedereen last van een webserver die telkens moet herstarten.
Mocht het echt noodzakelijk zijn om de webserver per direct 
te herstarten dan kun je een e-mail sturen naar
<a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache now !\">de beheerder</a>.<br><br>
<u>3.6. Statistieken voor jouw websites en subdomeinen</u><br><br>
Omdat al het verkeer naar jouw websites en subdomeinen zijn vastgelegd
in logbestanden is het voor ons mogelijk om statistieken te genereren
over de afgelopen 12 maanden. Het programma wat we hiervoor gebruiken
is <a href=\"http://www.mrunix.net/webalizer/\">webalizer</a>.
De statistieken worden op dit moment elk uur berekend en dan kan je
inzien onder de \"/stats/\" directory op elk subdomein.
Een klein voorbeeld:
Als je het domein:
<pre>
http://www.mijndomein.nl
</pre>
hebt, dan kan je de statistieken vinden onder:
<pre>
http://www.mijndomein.nl/stats/
</pre>
<font size=\"+1\"><u>4. FTP accounts</u></font><br>
<u>4.1. Wat kun je met dit onderdeel?</u><br><br>
Om een website zichtbaar te maken voor iedereen die hem
bezoekt moet je webpagina's op de server zetten. Dit kan met
FTP. Omdat je misschien niet de enige bent die gegevens op de
website mag zetten, hebben we het mogelijk gemaakt voor je om meerdere
FTP accounts aan te maken. DTC is het programma waarmee jij
de FTP accounts kan aanmaken en verwijderen. Je kan zelf de
namen en wachtwoorden bepalen.<br><br>
<u>4.2. Vertraging bij aanmaken / verwijderen FTP accounts?</u><br><br>
Omdat we gebruik maken van een speciale module van het ProFTP pakket, worden alle
wijzigingen direct doorgevoerd. Er zijn geen handelingen van de beheerders
noodzakelijk.<br><br>
<u>4.3. Gebruikers limiteren in hun mogelijkheden</u><br><br>
Op dit moment kunnen we FTP gebruikers niet limiteren binnen
hun domeingebeid. Op het moment dat je iemand FTP toegang geeft
kan deze dus zowel bij de website als de websites van de subdomeinen en 
ook bij de e-mailgegevens.
Indien het ECHT NOODZAKELIJK is dat iemand zich alleen binnen
een bepaald gedeelte van het webdomein zich mag bewegen, dan kun je 
een e-mail sturen naar <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">de beheerders</a>. Vergeet
er niet bij te vermelden om welke FTP gebruiker het gaat en bij welk
domein de gebruiker mag.
<u>4.4. Op deze servers word GEEN piraterij en illegale bestandsuitwisseling toegestaan!</u><br><br>
Als wij u toegang bieden tot ruimte op onze ftp servers, dan is dit alleen voor 
het uploaden van bestanden die noodzakelijk zijn voor uw website. Dit betekent dat u geen bestanden mag uploaden
waar u de rechten niet van bezit! <B>PAS DUS OP!!</B> Als je misbruik maakt
van deze situatie dan word je account onmiddelijk en zonder melding vooraf verwijderd.<BR><BR>
<font size=\"+1\"><u>5. Waarom kunnen FTP en POP toegangen soms langzaam zijn?</u></font><br><br>
Daarvoor kunnen we meerdere redenen aanwijzen. De bandbreedte die niet
al te hoog is word verdeeld over het aantal gebruikers dat er op dat
moment gebruik van maakt. Dus zodra jij en bijvoorbeeld 20 andere gebruikers
te gelijk mail aan het ophalen zijn of bestanden aan het uitwisselen voor
de website, dan kan dat dus vertraging opleveren.
<BR><BR>
Daarnaast is een limiet gesteld aan de bandbreedte voor mail en ftp. Hierdoor krijgen
de bezoekers van de websites meer bandbreedte tot hun beschikking en krijgen ze 
uw webpagina's sneller geserveerd. 
<br><br><br>
</div>
<center>Voor het GPLHost team,</center><br>
<div align=\"right\"><i><a href=\"mailto:NOSPAMthomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",
	"ru" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>������-������
DTC</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. ��� ����� DTC</u></font><br><br>
DTC ��� ������� ������� �� �������� ��� ���. � ��� �� ������ ��������������
����������������� ������ ������ : �� ������ ����������������
���� ���������, ����� � ���-��������.<br><br>
��� ��� ������� ������������ ��� ��������� <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence),
������� ������������� ��� �� ������ ������ ����� ��������� ����,
�������������� ��
��� ��� ������ � �������������� � ����� �����������. �� ( GPLHost)
�������� � 
������� ��������� �� � �� �������� �� ��������� �� ������� ������
�������������
�� ������ ��� ������ ��� ���������� ������ �� � �������� ����� � �����
�����������
������� � ������� ������ ���������� �������������� ��� ��� ������
������������.<br><br>
<font size=\"+1\"><u>2. �����</u></font><br>
<u>2.1. ��� ��� ������ ?</u><br><br>
� ������� ���� ������� �� ������ ���������, �������� ��� ������� ��������
�����.<br><br>
<u>2.2. �������������� � ��������� ��������</u><br><br>
����� � ������� ����� ����� ���� ������������� �� ���� ��� ����� ������
�������, �.�.
��� ��������� ��������� - ��� ������������ �� ���� ��� ��� ������.
\"�������� ��������\"- �������� ��� �� ��� ��������� ��� ����� �����
����� ���� �������� �� ��� ������� ����, ������� �� ������ ������ ���������
��������� ��������� �������, �������������� � ����� ��������.
�� ��������� ��������� ���� �����, ���� ������ � ��� ���-���� ����,
������ ��� �� �������� ����� ���������� ����������� :)<br><br>
<u>2.3. �������� ����� ����������� / ��������� ��������</u><br><br>
����� �� ���������� ��� �������� �������� ����, �� ��������� �� �����
�����������
������ : ���������� ������� ��������� � �������, � ������� ����� ���� �����
��������� �������� 
� ����: ���������� ����������� �� Qmail (������ ��������� �������)
����� �� ������������ ���� �������������.
<br><br>
� �������� ������� �� ��������� ��� ��������� � ����� ������ ������� ����,
�� ���� �� ���������� � ����������� ��������, ������� <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\">here</a>.<br><br>
<font size=\"+1\"><u>3. ���������</u></font><br>
<u>3.1. ��� ��� ����� ?</u><br><br>
��� ����� ���������� ��� ������������ ������ ������, ��� ��������
��� �� ������ ��������� ������ ���� ������ ����� :
<pre>
http://anything.u.want.mydomain.com
</pre>
<u>3.2. ��� ����� �������� �� ��������� ?</u><br><br>
����� ��������� ����� ����������� � ����� ������ ��� 
URL ��� ���������, �� ���������������� �� ��������- ������� �� ��������
�� ���������, ������� ������� ��� �������� ��� :
<pre>
www
</pre>
��� �������� �� ���������, ������� ��, ��� �������� ����������� �� ������:
<pre>
http://mydomain.com
</pre>
����� ���������������� ��:
<pre>
http://www.mydomain.com
</pre>
����������- ����� �����������, ��� ��������������� �� ��������� ��������, 
������ ������� � ������� ������ ��������������� � ������ ������ \"www\"
���������, ���
������� � ������������ html (��� php) ������, � ������ ������� � ���������
���-������.<br><br>
<u>3.3. ����������� ���������</u><br><br>
������ ��� �� ��������������� ��� ��������� ��� ������ �������� ��� web, 
�� �� ������ �������������� ��������� ��������� ��� ��������� apache ������
:
<ul><li>ftp
</li>
<li>pop</li>
<li>smtp</li>
</ul>
<u>3.4. �������� ����������</u><br><br>
��� ������ ��� �� ��������� ��� �����, ������������ ����� ����������.
�� ������ ������� ��� �����, ��������� ������������ ���-�������.
�� ���������� ������ ��������� ��� ��������, � �������� ������ � ������ ��
�������������
� DTC. � ������ ������ Apache � �����������, ������� �� ����������, ��
����������������
��� ���-����, ���� ���������, ������ �������� � ���� ���, ������ ��
��������.<br><br>
<u>3.5. �������� ����� ����������� / ��������� ���������</u><br><br>
��� ���������� ����� ����� ������������� ���-������ � �������, �����������,
����� 
��������� �������� � ����. 
�� ��������, �� ��������� ��� ��������� � ����� ������� �������� ���, ��
���� ��� ���������
����������� ��������, ������� <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache now !\">�����</a>.<br><br>
<u>3.6. ���������� ������� ��� ����� ����������</u><br><br>
��� ��� ���� ��� ������ �����������, �� ������� ���������� ��������� <a
href=\"http://www.mrunix.net/webalizer/\">
webalizer</a>. ���������� ��������� ������ ���� � 4 ���� (�.�. ����� ������
������ ���������), � ����� ����
����������� � ���������� \"/stats\" ������� ���������. �.�. ���� ��
������������� :
<pre>
http://www.mydomain.com
</pre>
��� ���������� ���������� � :
<pre>
http://www.mydomain.com/stats/
</pre>
<font size=\"+1\"><u>4. ��� ��������</u></font><br>
<u>4.1. What will it do ?</u><br><br>
����� ���� ��������� ��������, ���������� ������� ��������� ���� �����.
��� ��� �� �� ������ ������ �������� �� ����� �����, ��� ����� �������������
������ ��� ���� ���-������� ��� ������ �� ����� �����. 
DTC ��� ������� ��� ����������������� ���� ������������� � �������.<br><br>
<u>4.2. �������� ����� ����������� / ��������� ��� ��������</u><br><br>
��� ��� �� ���������� ProFTP �� ����������� ������� ��� �������� ������� � 
����� MySQL ����, ��� ��������� ����� ������� ����������� � ��������
�������.<br><br>
<u>4.3. ����������� ������������ ������������� ����</u><br><br>
� ������ ������ �� �� ������ ���������� ������������� ������������ 
������ � ����� ������ �����. �� �� (��������������) ����� ������� ���, 
���� �� �������� ��� <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">������</a>, ���������� ������ ������������ � ���
���� 
���������� :)<br><br>
<u>4.4. ��� ��������� ��� ��������� ������ �� ����� �������� !</u><br><br>
���� �� ������������� ����� �� ����� ���-��������, ��� 
������ ��� �������� HTML ����������. ��� ������- ����� �� ����� �������
������ �����
���������� ���������� ��������, �� ����� ������� ��� ������� ���
��������������.<br><br>
<font size=\"+1\"><u>5. ������ ftp ��� pop ������ �������� ��� ��������
?</u></font><br><br>
������ ����� ������. �� ������ �� ����� ����������� ���������� �����������, 
��� ������� ���������� ������������� ������������� � �������.
������������ ����������� �������� ����� ������ �����.
������ ������ ��������..<br><br>
������ ������ �� ����� ���������� ������.<br><br><br>
</div>
<center>��� GPLHost team,</center><br>
<div align=\"right\"><i><a href=\"mailto:NOSPAMthomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>",
	"de" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>DTC ONLINE-HILFE</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. Was ist DTC?</u></font><br><br>
DTC ist eine Software, die wir speziell f�r Sie entwickelt haben. Mit dieser
Software k�nnen Sie Ihre Domains administrieren: Sie k�nnen all Ihre
Subdomains, E-Mail- und FTP-Konten verwalten.<br><br>
Dieses Tool wurde unter der <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence) freigegeben,
das hei�t, Sie k�nnen eine Kopie des Quellcodes erhalten, modifizieren
und verwenden, solange Sie etwaige �nderungen wieder anderen bereitstellen.
Wir (bei GPLHost) glauben an die freie Softwareentwicklung und glauben,
damit ein gutes Beispiel f�r andere Softwareentwicklungen zu sein.
Wir wollten Sie nur darauf hinweisen, dass wir einzig und allein
Open-Source Software f�r unsere Hosting-Services verwenden und
etwaige Weiterentwicklungen nat�rlich anderen wieder zug�nglich
machen.<br><br>
<font size=\"+1\"><u>2. E-Mails</u></font><br>
<u>2.1. Was kann ich damit tun?</u><br><br>
Sie k�nnen mit dieser Software E-Mail-Konten hinzuf�gen, l�schen oder
�ndern.<br><br>
<u>2.2. Umleitung und lokale Zustellung</u><br><br>
Jedes E-Mail-Konto kann auf eine oder mehrer E-Mail-Adressen umgeleitet
werden. Das heisst, wenn eine Nachricht empfangen wird, wird Sie
automatisch an eine oder zwei E-Mail-Adresse(n) weitergeleitet.
Die Auswahl \"lokale Zustellung\" bestimmt, ob alle Nachrichten
f�r dieses E-Mail-Konto auf dem Server gespeichert werden sollen,
so dass sie dann die Nachrichten mit einem E-Mail-Programm von diesem
Server abrufen k�nnen. Bitte pr�fen Sie Ihre E-Mails regelm��ig, 
denn die E-Mail-Konten verbrauchen ebenfalls Ihren Webspace.<br><br>
<u>2.3. Verz�gerung, wenn Sie Konten hinzuf�gen oder l�schen</u><br><br>
Wenn Sie ein E-Mail-Konto hinzuf�gen oder l�schen, bedenken
Sie bitte, dass diese �nderung nicht sofort sichtbar ist, denn
wir m�ssen die �nderungen automatisiert �berpr�fen, bevor sie aktiv werden k�nnen.
Nach sp�testens 10 Minuten sind Ihre �nderungen aktiv.<br><br>
<font size=\"+1\"><u>3. Subdomains</u></font><br>
<u>3.1. Was kann ich damit tun?</u><br><br>
Dieser Teil der Kundenoberfl�che wird benutzt, um Ihre Domains zu konfigurieren. 
Das hei�t, Sie k�nnen Ihre Websites in der Form
<pre>
http://alles.was.sie.wollen.meinedomain.de
</pre>
anlegen.<br><br>
<u>3.2. Was ist die Standard-Subdomain?</u><br><br>
Versucht jemand, Ihre Seite mit einer URL ohne Subdomain
aufzurufen, so wird er automatisch zu der Subdomain
umgeleitet, die Sie als Standard eingestellt haben.
Mit anderen Worten: Wenn Sie schreiben:
<pre>
www
</pre>
sei die Standard-Subdomain und jemand verbindet sich zu einer
URL in der Form: 
<pre>
http://meinedomain.de
</pre>,
wird dieser jemand automatisch zu:
<pre>
http://www.meinedomain.de
</pre>
weitergeleitet.
<u>3.3. Reservierte Subdomains</u><br><br>
Folgende Subdomains haben wir f�r andere Zwecke als
f�r das Web konfiguriert. Diese k�nnen daher nicht
als Sub-Domains f�r Webseiten benutzt werden:
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
<li>mail</li>
</ul><br><br>
<u>3.4. L�schen von Sub-Dom�nen</u><br><br>
Wenn Sie eine Sub-Dom�ne l�schen, m�ssen Sie alle Dateien,
die diese Sub-Dom�ne ben�tigt l�schen.
Sie k�nnen diese mit einem Standard FTP-Client l�schen.
Aber VORSICHT: L�schen Sie keine Sub-Dom�nen Dateien ohne
diese vorher mittels DTC zu entfernen.
Der Apache-Web Server wird sich sonst �ber ein fehlendes
Verzeichnis beschweren, da die Web-Site noch immer konfiguriert
ist.<br><br>
<u>3.5. Verz�gerung beim Hinzuf�gen/L�schen von Sub-Dom�nen</u><br><br>
Der Apache Web-Server muss neu gestartet werden, damit Ihre �nderungen
aktiv werden. Meistens wird die �nderung am Ende des Tages durchgef�hrt.
Nach sp�testens 10 Minuten sind Ihre �nderungen aktiv.<br><br>
<u>3.6. Traffic-Statistik f�r Ihre Subdomains</u><br><br>
Wir berechnen eine Gesamt�bersicht Ihres Datenverkehrs �ber die letzten
12 Monate mittels: <a href=\"http://www.mrunix.net/webalizer/\">
Webalizer</a>. Diese Statistiken werden jeden Tag um 4 Uhr fr�h
(wenn normalerweise wenig Datenverkehr stattfindet) erstellt und k�nnen
unter dem Verzeichnis \"/stats\" eimer jeden Subdomain abgerufen
werden.<br>
Das hei�t, wenn Sie folgendes Domain registriert haben:
<pre>
http://www.meinedomain.de
</pre>
sind die Statistiken unter:
<pre>
http://www.meinedomain.de/stats/
</pre>
zu finden.<br><br>
<font size=\"+1\"><u>4. FTP-Konten</u></font><br>
<u>4.1. Was kann ich damit tun?</u><br><br>
Damit Ihre Webseiten aufgerufen werden k�nnen, werden Sie die Seiten mit FTP hochladen m�ssen.
Sie k�nnen auch mehr als nur ein FTP-Konto f�r Ihre Website
anlegen. Mit DTC k�nnen Sie diese Konten und Passw�rter verwalten.<br><br>
<u>4.2. Verz�gerung beim Hinzuf�gen/L�schen von FTP-Konten</u><br><br>
Ihre �nderungen an FTP-Konten werden in Echtzeit durchgef�hrt.<br><br>
<u>4.3. Benutzer auf ein Verzeichnis beschr�nken</u><br><br>
Sie k�nnen beim Anlegen eines FTP-Kontos einen Pfad ausw�hlen, auf den 
die Zugriffe des FTP-Benutzers beschr�nkt werden.<br><br>
<u>4.4. Keine Piraterie oder Dateien-Austausch auf unseren Servern, bitte!</u><br><br>
Der Benutzer-Bereich auf unseren FTP-Servern sollte dazu genutzt werden, damit
Sie ihren HTML Inhalt hochladen k�nnen.
Das heisst, bitte keine bin�ren Dateien, f�r die Sie nicht die Rechte besitzen!
Bei Missbrauch wird Ihr Konto sofort und ohne vorherige Mitteilung geschlossen!<br><br>
</div>
<center>F�r das GPLHost Team,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",

	"zh" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b> DTC ���߰����ĵ�</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1.ʲô��DTC</u></font><br><br>
DTC ��һ������Ϊ���ر�������һ�����ߡ�ͨ���������������ɹ�������վ�㣺
�����Թ������Ķ��������������ʼ���ftp�ʻ��ȵȡ�<br><br>
��������Ѿ���<a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence)�Ϸ�����
�����ζ�����Կ������׳����Դ�ļ��������������޸ĺ�ʹ�ã�Ҳ���Է������޸Ĺ��İ汾��

   ����(GPLHost)������Ϊ��Դ�������һ�㹱�ף�ͬʱ����Ҳϣ�����ǵľٶ��ܹ���������Ŀ�����Ա������������Ǿ��ã���Ϊ���ǽ���ʹ�ÿ�Դ������ṩ����������������Ӧ�ð����ǵĿ����ɹ����������<br><br>

<font size=\"+1\"><u>2. Emails</u></font><br>
<u>2.1.������ʲô��</u><br><br>
ʹ��������ߣ������Ժܷ������ӡ�ɾ�����޸�һ�������ʼ��˻���<br><br>


<u>2.2.�ʼ�ת���뱾��Ͷ��</u><br><br>
ÿһ���������䶼�ܹ�ת����һ�����߶���������䣬�����ζ�ŵ�һ���ʼ�Ͷ�ݵ�������������ʱ�����ᱻת����һ�����߶���������䡣\"Ͷ�ݵ���������\"ѡ������ϵͳ��������յ�
�������ʼ��Ƿ�д�뱾�ش��̣�����������ͨ���ʼ��ͻ��˵�½�����ǵ��ʼ��������Ķ������ʼ�����������ʼ��Ƚ϶�Ļ�����Ҫ���˾���������ʼ�����Ϊ��������ʹ�õĴ洢�ռ��ǰ���������ӵ�е��ܿռ��еġ�<br><br>

<u>2.3.��ӻ�ɾ��һ���ʼ��˻�ʱ����ʱ</u><br><br>
������ӻ���ɾ��һ���ʼ��˻���ʱ���벻Ҫ�������ܹ�������Ч�����Ǳ������Qmail(��������ʹ�õ������ʼ�ϵͳ)���¼����û����ݿ⣬��ʱ�������ĸ��Ĳ��ܹ���Ч��<br><br>
��������£����ǻ���ÿ�������ս�����ʱ��Ż������еĸ�����Ч���������Ҫ������Ч�Ļ�������<a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\">����</a>��<br><br>

<font size=\"+1\"><u>3.������</u></font><br>
<u>3.1.������ʲô��</u><br><br>
���ⲿ��ҳ���У���������������������Ϣ���������Ϳ��������������URL��ʽ��ʵ����վ�����ݣ�
<pre>
http://anything.u.want.mydomain.com
</pre>

<u>3.2.Ĭ�ϵ���������ʲô��</u><br><br>
������ʹ�ò�����������URL����������վ��ʱ��ҳ��ͻ���ת���������õ�Ĭ�ϵ������������仰˵����������ã�
<pre>
www
</pre>
��ΪĬ�ϵ���������������ʹ�������URL����������վ��ʱ��
<pre>
http://mydomain.com
</pre>
ҳ��ͻ���ת����
<pre>
http://www.mydomain.com
</pre>
��ʵ�ϣ����URL�Ǳ����������ģ���û����HTML�ļ���������ת��ʵ���Ϻܼ򵥣����URL��վ�㱻����Ϊ��\"www\"������ָ��ͬ�������ݣ����ԣ�����ָ����ͬ����html(����php)�ļ������ң����ǹ���һ����־�ļ���<br><br>

<u>3.3.��ֹʹ�õ�������</u><br><br>
��Ϊ�����ѽ��������������ø������������������ܰ���������������һ��Apacheվ�㣺
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>

<u>3.4.ɾ��������</u><br><br>
����Ҫ�Լ�ɾ������������ʹ�õ��ļ���������ʹ�ñ�׼��FTP�ͻ�����ɾ����Щ�ļ���������ǧ��С�Ĳ�Ҫ����ɾ��������ʹ�õ��ļ�������DTC���������ɾ���������������ʵ�ϣ����һ��������ļ��Ѿ������ڣ�����Apache�������������ļ�����Ȼ�������������õĻ���Apache��������Ȼ������������ġ����ң�������Apache��������ʱ��ᱨ��<br><br>


<u>3.5.��ӻ�ɾ��һ������ʱ����ʱ</u><br><br>
������Ҫ������Apache����������ʹ�������ĸ�����Ч��һ������£���ÿ�������յ����ʱ�����ǻ�������Apache���������������Ҫʹ�������ĸĶ�������Ч�Ļ�������<a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache now !\">����</a>.<br><br>

<u>3.6.�������������ͳ��</u><br><br>
�����е����������м�¼�ģ�����ʹ��<a href=\"http://www.mrunix.net/webalizer/\">
webalizer</a>ͳ�Ƴ��������е������ڹ�ȥ12�����е�������ͳ�ƻ���ÿ���賿4ʱ��ʼ����(����һ���з�����������͵�ʱ��),������ͨ��ÿ�������\"/stats\"Ŀ¼���鿴ͳ�ƽ���������˵�������ע���ˣ�
<pre>
http://www.mydomain.com
</pre>
���е�ͳ�ƽ�����ᱻ���������Ŀ¼��
<pre>
http://www.mydomain.com/stats/
</pre>

<font size=\"+1\"><u>4.FTP�˺�</u></font><br>
<u>4.1.������ʲô��</u><br><br>
Ϊ��������ҳ���ܹ������ʵ�����������Ҫ�ϴ����ǡ����������ǲ�Ψһʹ������վ����ˣ�������Ҳ��ͻ���Ҫ���FTP�˺š�ʹ��DTC������壬���Ϳ������ɹ������˺ź����롣<br><br>


<u>4.2.��ӻ�ɾ��һ��FTP�˺�ʱ����ʱ</u><br><br>
��Ϊ��������ProFTP������һ�������ģʽ�£��������е��˺���Ϣ��������MYSQL���ݿ��С�����FTP�˺��������κθ��Ķ��ܹ�ʵʱ��Ч��<br><br>

<u>4.3.���û��޶���ָ����Ŀ¼��</u><br><br>
Ŀǰ�������ܽ��û��޶���ָ����Ŀ¼�С������ȷʵ��Ҫ��ô�����뷢��<a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">�ʼ�</a>�����ǣ����������û�����·�����ɡ�<br><br>

<u>4.4.�벻Ҫ�����ǵķ������Ͻ��е�����Ϊ����ģ���ļ�����</u><br><br>
�����Ǹ����ṩFTP�ռ��ʱ�������ʱΪ�˷������ϴ�HTML�ļ�����ע�⣬�����Υ���涨�Ļ������ǿ����ڲ���ǰ֪ͨ������¹ر������˺š�<br><br>

<font size=\"+1\"><u>5.Ϊʲô��ʱ��FTP����POP�������</u></font><br><br>
���кܶ�ԭ�����������ǲ�û��̫����ϴ������ʱ��ͬʱ���кܶ��û��ϴ��ļ�����������ȽϽ�(�������)�����ڶ���ʱ���ռ�ݱȽ϶�Ĵ����������һЩ�˾�ֻ�бȽ��ٵĴ������ʹ�á��������������������Ҳ����Ϊ��...<br><br>
����һ��ԭ���ǣ�����������pop��smtp��ftp�ȷ���Ĵ���������Ƿ������ϵ�web�����ٶ��ܸ���һЩ��<br><br><br>
</div>
<center>����GPLHost�Ŷ�</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",

	"pl" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>POMOC ONLINE DTC
</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. Co to jest DTC</u></font><br><br>
DTC jest zestawem narz�dzi do administrowania domenami, kontami e-mail i ftp dla system�w z rodziny UNIX.<br><br>
Narz�dzia te s� oparte na licencji <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence). Nale�y do wolnego oprogramowania (jako  GPLHost), i mo�e by� rozwijane i u�ywane przez innych deweloper�w.<br>
Nie mo�e jednak wchodzi� w sk�ad pakiet�w komercyjnych ( p�atnych ).<br><br>

<font size=\"+1\"><u>2. Poczta elektroniczna</u></font><br>
<u>2.1. Co mo�na zrobi� ?</u><br><br>
Mo�na dodawa�, modyfikowa� lub usuwa� konta e-mail w ramach obs�ugiwanych domen.<br><br>
<u>2.2. Przekierowanie i dostarczanie lokalne</u><br><br>
Ka�da wiadomo�� e-mail mo�e zosta� dostarczona lub przekierowana do jednego lub dw�ch kont lokalnych.  Znacznik \"dostarczanie lokalne\" powoduje utworzenie skrzynki pocztowej lokalnie na twardym dysku 
i zapis w niej poczty elektronicznej. Konto takie podlega kwotowaniu limitu przydzia�u dysku dla U�ytkownika.<br><br>
<u>2.3. Dodawanie i usuwanie kont</u><br><br>
Ka�da czynno��  dodania, usuni�cia lub modyfikacji konta jest wykonywana natychmiast, ale skutek jest widoczny dopiero po prze�adowaniu serwera pocztowego i jego baz danych. Mo�e up�yn�� kilka minut zanim serwer dokona odpowiednich zmian.<br><br>
Je�eli po up�ywie 30 minut zmiany nie b�d� widoczne kliknij <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC] Awaria konta e-mail\"> tutaj</a>.<br><br>

<font size=\"+1\"><u>3. Subdomeny</u></font><br>
<u>3.1. Co mo�na zrobi� ?</u><br><br>
Ta cz�� interfejsu odpowiada za konfiguracj� twoich subdomen.
Mo�esz doda� swoj� subdomen� w stylu:
<pre>
http://mojasubdomena.mojadomena.com
</pre>
<u>3.2. Kt�ra subdomena jest domy�ln� ?</u><br><br>
Podczas zak�adania domeny automatycznie jest zak�adana subdomena \"www\", ka�de wywo�anie adresu URL bez subdomeny b�dzie przekierowane na domy�ln� subdomen�, np. wywo�anie :
<pre>
http://mojadomena.com
</pre>
zostanie przekierowane na:
<pre>
http://www.mojadomena.com
</pre>
<br>
W ustawieniach subdomen mo�esz za�o�y� subdomen� o innej nazwie i ustawi� j� jako domy�ln�.
<br><br>
<u>3.3. Zakazane nazwy subdomen</u><br><br>
W zwi�zku z tym, �e system wykorzystuje kilka subdomen dla innych us�ug zakazane s� nast�puj�ce nazwy subdomen:
<ul>
<li>pop</li>
<li>smtp</li>
<li>ftp</li>
</ul>
<u>3.4. Usuwanie subdomen</u><br><br>
Je�li chcesz usun�� subdomen� najpierw klientem ftp �ci�gnij skrypty html lub php z subdomeny. Nie usuwaj ich tylko skopiuj !!! 
Nast�pnie poprzez panel DTC usu� subdomen�. W tym kroku r�wnie� zostan� automatycznie usuni�te skrypty subdomeny.
Je�eli usuniesz wcze�niej skrypty kientem ftp to serwer www b�dzie zg�asza� b��d i generowa� kody b��d�w.<br><br>
<u>3.5. Zw�oka po dodaniu / usuni�ciu subdomeny</u><br><br>
Serwer www prze�adowuje si� co 10 minut wi�c zmiany po tym czasie b�d� dopiero widoczne.
Je�li zmiany nie b�d� widoczne po d�u�szym czasie prosz� kliknij <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]B��d dzia�ania serwera www\">tutaj</a>.<br><br>

<u>3.6. Statystyki twoich subdomen</u><br><br>
Statystyki s� generowane w cyklu 12 miesi�cznym za pomoc� <a href=\"http://www.mrunix.net/webalizer/\">Webalizera</a>. Generowanie nast�puje codziennie o godz. 4.00 rano ( je�li wyst�pi� transfer ) w katalogu \"/stats\" dla ka�dej subdomeny, o ile w ustawieniach danej subdomeny w��czyli�my t� us�ug�. Np.dla wywo�ania URL :
<pre>
http://www.twojhosting.com
</pre>
statystyki dost�pne s� w :
<pre>
http://www.twojhosting.com/stats/
</pre>
<font size=\"+1\"><u>4. Konta FTP</u></font><br>
<u>4.1. Co mo�na zrobi� ?</u><br><br>
Je�li us�uga dzia�a, mo�esz dokonywa� uploadu zawarto�ci swoich subdomen.
Panel DTC umo�liwia Ci zak�adanie kont FTP, nadawanie login�w i hase� oraz ustawienie katalogu podstawowego dla konta w ramach swojej domeny.<br>
UWAGA !! Transfery FTP s� logowane i o tyle zmiejszaj� Ci limit miesi�czny transfer�w.<br><br>

<u>4.2. Zw�oka po dodaniu / usuni�ciu konta FTP</u><br><br>
Zw�oka w dzia�aniu serwera FTP nie wyst�puje, dzia�a on w trybie rzeczywistym.<br><br>
Ewentualny b��d dzia�ania serwera zg�o� klikaj�c <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]B��d dzia�ania FTP\">tutaj</a>, i opisz problem.<br><br>

<u>4.3. Nie umieszczaj pirackich kopii plik�w !!!</u><br><br>
Taki proceder skutkuje natychmiastowym zablokowaniem ca�ego konta www, ftp i e-mail bez uprzedzenia.
Obligatoryjnie, z mocy prawa natychmiast i automatycznie zostaj� powiadomione odpowiednie s�u�by.
Nie przys�uguj� Ci prawa z tytu�u reklamacji.<br><br>

<font size=\"+1\"><u>5. Dlaczego czasami us�ugi dzia�aj� wolniej ?</u></font><br><br>
Spowodowane jest to du�ym obci��eniem ��cza. Taka sytuacja wyst�puje przy cz�stym uploadzie plik�w.
Spowodowane mo�e by� r�wnie� og�lnym przeci��eniem sieci. Dlatego pami�taj, r�wnie� w twoim interesie le�y nie zamieszczanie plik�w do uploadu w swoim serwisie.
Pomy�l nad zwi�kszeniem limitu transferu miesi�cznego.
Po wykorzystaniu limitu transferu us�ugi napewno b�d� wolniejsze.

<br><br>
To na tyle ...<br><br>
</div>
<center>Zesp� GPLHost team,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i><i>J�zyk polski i internacjonalizacja<a href=\"mailto:seeb[ at ] twojhosting [ dot ] com\">Sebastian Pachla</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>",
"se" => "TRANS SVENSKA
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>ONLINE DTC
HELP</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. What is DTC</u></font><br><br>
DTC is a tool we made especialy for you. With it, you can take the
control of your domain administration : you can
manage all your subdomains, emails, and ftp accounts.<br><br>
All this tool had been release under the <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence),
which means that you can have a copy of this interface source
code, modify it and use it as you wish, as long as you redistribute
all thoses changes. We (at GPLHost) believe in the Free
Software effort, and we hope this participation will encourage
other developpements. We consider that because we use only
open-source software for our hosting service, it is normal
to redistribute our developpements.<br><br>

<font size=\"+1\"><u>2. Emails</u></font><br>
<u>2.1. What will it do ?</u><br><br>
You can add, delete or modify a mailbox with this tool.<br><br>

<u>2.2. Redirection and local delivery</u><br><br>
Each mailbox can be redirected to one or more email addresse, which
means that when a message is recieved, it is forwared to one
or tow email adresse(s). The \"deliver localy\" checkbox
tells wether or not all message for this mailbox will be
written on our hard disk, so thenafter you will be able to
read your message using a mail client, connecting to
our server. Don't forget to checkup your mails often if
you have trafic, because the mailbox are included in the
quota<br><br>
<u>2.3. Delay when adding / deleting accounts</u><br><br>
When you add or delete a mail account, don't expect it to
work immediatly : we will have to validate the changes in
the system in order to have your new accounts changes to
take effect : we have to tell Qmail (our mail server) to
reload it's user database.<br><br>
Most of the time, we validate all changes at the end of
each working days, but if you need an immediate validation,
click <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\">here</a>.<br><br>

<font size=\"+1\"><u>3. Subdomains</u></font><br>
<u>3.1. What will it do ?</u><br><br>
This part of the interface is for configurating your
somain's sites, which means that you will be able
to populate your web site with url of the form :
<pre>
http://anything.u.want.mydomain.com
</pre>
<u>3.2. What is the default subdomain ?</u><br><br>
Whe someone trys to contact your web site with an
URL without a subdomain, he is redirected to the
subdomain you said it was the default. In other
words, if you tell that:
<pre>
www
</pre>
is the default subdomain, someone that trys to
connect using an url starting with:
<pre>
http://mydomain.com
</pre>
will be redirected to:
<pre>
http://www.mydomain.com
</pre>
In fact, the URL is kept, and no URL redirection
in a HTML page has been created, but simply, a
website with that URL has been configurated to
the same location of the \"www\" subdomain, so
it accesses the same html (or php) files, and
shares the same log file.<br><br>

<u>3.3. Forbidden subdomains</u><br><br>
Because we have configurated those subdomains for
other services than web, you cannot use the following
subdomains for apache web sites :
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>

<u>3.4. Deleting subdomains</u><br><br>
It is up to you to delete the files used by your subdomain.
You can delete all the files using a standard ftp client.
But PLEASE take realy care not to delete a subdomain files
without deleting it using DTC. Indeed, the Apache web server
will complain if the directory does not exist but a web site
is configurated for it, and this will be anoying when restarting
apache.<br><br>

<u>3.5. Delay when adding / deleting subdomain</u><br><br>
We will have to restart our Apache web server in order
to have your changes taking effect. Most of the time, we validate all
changes at the end of
each working days, but if you need an immediate validation,
click <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache now !\">here</a>.<br><br>

<u>3.6. Trafic statistics for your subdomains</u><br><br>
Because all your trafic is loged, we calculate the overall
last 12 month statistics using <a href=\"http://www.mrunix.net/webalizer/\">
webalizer</a>. The statistics are calculated each days at
4 in the morning (this is when there is less trafic), and
can be reach under the \"/stats\" directory on each
subdomains. That means that if you have registerd :
<pre>
http://www.mydomain.com
</pre>
all statistics will be generated under :
<pre>
http://www.mydomain.com/stats/
</pre>

<font size=\"+1\"><u>4. FTP accounts</u></font><br>
<u>4.1. What will it do ?</u><br><br>
To have your page working and running, you have to upload
them. But because you may not be only one to work on your
web site, you may want to have more that one FTP account
for accessing your web site. DTC will be the tool for
managing thoses accounts and passwords.<br><br>

<u>4.2. Delay when adding / deleting FTP accounts</u><br><br>
Because we use ProFTP with a special module for handling accounts in
our MySql database, all changes to your FTP accounts take effect
in realtime.<br><br>

<u>4.3. Limiting user to specified path</u><br><br>
For the moment you cannont limit one user to access to only
a part of your web site. But we (the administrators) can
do it if you ask sending an <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">email</a>, telling what user
and what path you need.<br><br>


<u>4.4. No piracy or file exchange on our servers please !</u><br><br>
If we provide a user space on our ftp servers, this is
for you to upload HTML content. This means no binary
files you don't own the rights ! Take care if you abuse,
we could close your accounts without notification.<br><br>

<font size=\"+1\"><u>5. Why ftp or pop is slow, sometimes ?</u></font><br><br>
There are many reasons for that. The first one is because
we don't have many band with for uploading, and sometimes,
there are realy a lot of people uploading. The one that
are closer to our servers take most of the time all that
band width, so one user has most of it, and some have
not. There is nothing we can do about that...<br><br>
Another reason is because we have decided to limit the
band width for pop, smtp, and ftp, so that web browsing
on our server is faster.<br><br><br>
</div>
<center>For the GPLHost team,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",
	"es" => "
<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>ONLINE DTC
HELP</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. Qu&eacute; es DTC</u></font><br><br>
DTC es una herramienta hecha especialmente para usted.  
Con ella, usted puede tomar el control en la administraci&oacute;n de sus dominios: 
usted puede manejar todos sus subdominios, cuentas de correo y cuentas ftp.<br><br>
Toda esta herramienta ha sido creada bajo la licencia GPL <a
href=\"http://www.gnu.org/\">GPL</a> (licencia p�blica de Gnu),  
significa que usted puede tener una c�pia del c�digo fuente del interfaz, modificarlo
 y utilizarlo como usted desee, siempre que usted redistribuya todos los cambios que haga. 
Nosotros creemos en el esfuerzo del software libre, y esperamos que esta participaci&oacute;n 
anime a otros desarrolladores.  Consideramos que porque utilizamos solamente software libre 
para nuestro servicio de alojamiento, es normal redistribuir nuestros desarrollos.
<br><br>

<font size=\"+1\"><u>2. Correos</u></font><br>
<u>2.1. � Que puedo hacer ?</u><br><br>
Puedes a&ntilde;adir, borrar o modificar tus cuentas de correo electr&oacute;nico con 
esta herramienta.<br><br>

<u>2.2. Redirecci&oacute;n y envio de correo local</u><br><br>
Cada cuenta de correo se puede redirigir a una o m�s cuentas 
de correo electr�nico, esto significa que cuando un mensaje es 
recibido, es enviado a una o dos direcciones de correo. 
El &quot;envio local&quot; indica si 
todos los mensajes para esta cuenta de correo ser�n guardados 
en nuestro disco duro, asi usted podra leer su mensaje usando 
un cliente de correo, conectando con nuestro servidor.  
No olvide comprobar sus correos a menudo si usted tiene 
tr&aacute;fico, porque este se incluye en la quota de disco.<br><br>
<u>2.3. Retraso al a&ntilde;adir o borrar cuentas de correo</u><br><br>
Cuando se a&ntilde;ade o borra una cuenta de correo, no espere que
funcione inmediatamente : Nosotros tendremos que validar los
cambios en el sistema para que tengan efecto en estas cuentas de correo:
 Tenemos que indicarle a Qmail (El servidor de correo)
Que reinicie su base de datos de usuarios.<br><br>
La mayoria de las veces, los cambios son realizados al final
del dia de trabajo, pero si necesita una validaci&oacute;n inmediata,
pulsa <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]email account 
validation\">aqu&iacute;</a>.<br><br>

<font size=\"+1\"><u>3. Subdominios</u></font><br>
<u>3.1. � Qu� puedo hacer ?</u><br><br>
Esta parte del interfaz es para configurar sus dominios, 
esto significa que podr&aacute; poblar su sitio con url's de la forma:
<pre>
http://algo.que.quiera.midominio.com
</pre>
<u>3.2. � Qu&eacute; es el dominio por defecto ?</u><br><br>
Si alguien intenta entrar a un subdominio que no existe,
ser&aacute; redirigido al subdominio que se indica por defecto.
En otras
palabras, si tu llamas a:
<pre>
www
</pre>
para ser el dominio por defecto, si alguien intenta
conectarse usando una url comenzando por:
<pre>
http://midominio.com
</pre>
sera redirigido a
<pre>
http://www.midominio.com
</pre>
En realidad, se mantiene el URL, y no 
se ha creado ninguna redirecci&oacute;n del URL a 
una p&aacute;gina HTML, simplemente, una p&aacute;gina con este 
URL ha sido configurada a la misma localizaci&oacute;n del 
subdominio &quot;www&quot;, por lo que se accede a los mismos 
ficheros html (o php), y comparte el mismo fichero de 
log.<br><br>

<u>3.3. Subdominios prohibidos</u><br><br>
Porque tenemos configurados esos subdominios 
para otros servicios, usted no puede utilizar los 
subdominios siguientes para los sitios web de apache:
<ul><li>ftp
</li>
<li>pop</li>
<li>smtp</li>
</ul>

<u>3.4. Eliminaci&oacute;n de subdominios</u><br><br>
Esto es para suprimir los archivos usados por su subdominio. 
Usted puede suprimir todos los archivos usando un cliente est&aacute;ndar 
de ftp. Pero POR FAVOR tenga cuidado de no suprimir archivos de 
un subdominio sin eliminarlo usando DTC.  De hecho, el servidor web 
de Apache se quejar&aacute; si no existe el directorio pero esta configurado 
para &eacute;l.<br><br>

<u>3.5. Retraso al a&ntilde;adir / eliminar un subdominio</u><br><br>
Tendremos que reiniciar nuestro servidor web Apache para que 
nuestros cambios tengan efecto.  La mayor�a de las veces, 
todos los cambios se validan al final de cada dia laboral, 
pero si se necesita una validacion inmediata,
pulse <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]subdomain creation
: please restart apache now !\">aqu&iacute;</a>.<br><br>

<u>3.6. Estad&iacute;sticas de tr&aacute;fico de tus subdominios</u><br><br>
Dado que todo el tr&aacute;fico es registrado, se calcula la media 
total de los ultimos doce meses usando 
<a href=\"http://www.mrunix.net/webalizer/\">
webalizer</a>. Las estadisticas son calculadas cada dia
a las 4 de la ma&ntilde;ana (este es el momento en que hay menor tr&aacute;fico), y 
puede ser visto en el directorio &quot;/stats&quot; de cada subdominio. 
Esto quiere decir que si has registrado :
<pre>
http://www.midominio.com
</pre>
todas las estadisticas seran generadas en :
<pre>
http://www.midominio.com/stats/
</pre>

<font size=\"+1\"><u>4. Cuentas FTP</u></font><br>
<u>4.1. � Que puedo hacer ?</u><br><br>
Para tener su pagina funcionando y andando, usted tiene 
que subir sus ficheros.  Pero como no tiene porque ser  
solamente uno el que va trabajar en su pagina web, usted puede 
querer tener m�s de una cuenta ftp para tener acceso a su p�gina 
web. DTC ser&aacute; la herramienta para manejar cuentas y sus 
contrase&ntilde;as.<br><br>

<u>4.2. Retraso al a&ntilde;adir / eliminar una cuenta FTP</u><br><br>
Dado que usamos ProFTP con un m&oacute;dulo especial para crear las cuentas
en nuestra base de datos MySQL, todos los cambios realizados en
nuestras cuentas de FTP tomar&aacute;n efecto en tiempo real.<br><br>

<u>4.3. Limitando un usuario a un directorio espec&iacute;fico</u><br><br>
Por ahora no es posible que un usuario cree un acceso limitado 
solo a una parte de su pagina web. Pero nosotros (los administradores)
podemos hacer esto, si lo consultas mandando un <a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Ask for a
user path change in FTP\">email</a>, especificando que usuario y 
que directorio necesitas.<br><br>

<u>4.4. Ninguna pirater&iacute;a o intercambio de archivos en nuestros servidores 
� por favor !</u><br><br>
Si proporcionamos un espacio de usuario en nuestros servidores
ftp, es para subir ficheros HTML. Esto quiere decir 
que no uses dicho servidor para alojar ficheros binarios
de los que no tengas permisos. Ten en cuenta que si abusas,
cerraremos tus cuentas sin previo aviso.<br><br>

<font size=\"+1\"><u>5. �Por que ftp o pop es lento a veces
?</u></font><br><br>
Hay varias razones para esto. La primera es por no tener
suficiente ancho de banda para subidas, y a veces hay demasiada 
gente subiendo. Quien est&eacute; mas cercano a nuestros servidores 
la mayor�a del tiempo usar&aacute; todo el ancho de banda, as� que un usuario 
tiene la mayoria, y otros no. No hay nada que podamos hacer con esto...<br><br>
Otro motivo es porque se ha decidido limitar el ancho de 
banda para pop, smtp, y ftp, para que la navegaci&oacute;n por las 
paginas web de nuestro servidor sea mas r&aacute;pida.<br><br><br>
</div>
<center>El equipo GPLHost,</center><br>
<div align=\"right\"><i><a href=\"mailto:NOSPAMthomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
",
"pt" => "<font face=\"Arial, Verdana\">
<center><font size=\"+2\"><u><b>Ajuda DTC ON-Line
</b></u></font></center><br><br>
<div align=\"justify\">
<font size=\"+1\"><u>1. O que � DTC</u></font><br><br>
O DTC � um utilit�rio que foi feito a pensar em si, com este voce pode 
controlar o seu dominio : Poder� gerir todos todas os seus subdominios,
e-mails e contas FTP.<br><br>
Tudo isto foi realizado segundo a licen�a <a
href=\"http://www.gnu.org/\">GPL</a> (Gnu Public Licence), o que quer dizer
que poder� obter o codigo fonte deste interface, podera modifica-lo e usa-lo  
Nos (GPLHost) acreditamos no software open source e esperamos que esta participa��o 
incorage outros programadores. Considera-mos j� que n�s usamos apenas software open
source para o servi�o de alojamento � normal que fa�amos a distribui��o do nosso 
desenvolvimento .<br><br>
<font size=\"+1\"><u>2. E-mails</u></font><br>
<u>2.1. O que pder� fazer?</u><br><br>
Voce poder� adiconar, elimnar e modificar a sua conta de e-mail
com este utilit�rio.<br><br>
<u>2.2. Redirecionamento e entrega local</u><br><br>
Cada conta de e-mail pode ser redirecionada para outro endere�o de e-mail,
o que quer dizer que quando uma mensagem � recebida, � redirecionada para 
outro ou outros endere�os de e-mail. O parametro \"entrega Local\" faz com que 
todos os e-mails sejam escritos no disco rigido, poder� aceder a estas com um 
cliente de e-mail ligando se ao servidor. N�o se esque�a de verificar os seus e-mails
ja que o tamanho destes s�o incluidos na quota de disco da sua conta.<br><br>
<u>2.3. Atraso quando adicionar / eliminar contas </u><br><br>
Quando adicionar ou apagar uma conta n�o espere que as altera��es surjam de imediato:
Todas as ac��es ser�o validadas no sistema, depois disto teremos de dizer ao Qmail 
para reiniciar a base de dados dos utilizadores.<br><br>  
A maior parte das vezes, s�o validadas todas as  altera��es no fim de cada dia de trabalho,
caso necessite de uma valida��o imediata clique  <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]Conta
de e-mail \">aqui</a>.<br><br>
<font size=\"+1\"><u>3. Subdominios</u></font><br>
<u>3.1. O que pder� fazer?</u><br><br>
Esta parte do interface permite a configura��o dos seus subdominios.
<pre>
http://qualquercoisa.dominio.pt
</pre>
<u>3.2. O que � o subdominio pre definido ?</u><br><br>
Se alguem tentar aceder a um site sem o sudominio ser� redirecionado para 
o subdominio predefenido em outras palavras se disser que 
<pre>
www
</pre>
� o sudominio predefinido 
<pre>
http://mydomain.com
</pre>
ser� redirecionado para
<pre>
http://www.mydomain.com
</pre>
Na realidade o URL � guardado e nenhuma pagina HTML � criada simplesmente 
esta configurado para apontar para o mesmo local do subdominio\"www\" e assim est� 
a aceder ao mesmo ficheiro que acederia usando o \"www\", tamb�m � partilhad o 
ficheiro de log.<br><br>
<u>3.3. Subdominios Proibidos</u><br><br>
Porque alguns subdominios s�o usados noutros servi�os, 
n�o s�o permitidos usar os seguintes subdominios :
<ul><li>ftp</li>
<li>pop</li>
<li>smtp</li>
</ul>
<u>3.4. Apagar subdominios</u><br><br> 
Voc� poder� apagar qualquer ficheiro ou todos usando um cliente de ftp.
Por favor tome cuidado para n�o apagar nenhum subdominio sem apagar primeiro no DTC.
O servidor Apache ir� reportar um erro ao iniciar.<br><br>
<u>3.5. Atrasos em apagar / adiconar subdominios</u><br><br>
Quando adicionar ou apagar um subdominio n�o espere que as altera��es surjam de imediato:
Todas as ac��es ser�o validadas no sistema, depois disto teremos de dizer ao Apache 
para reiniciar com as altera��es.<br><br>  
A maior parte das vezes, s�o validadas todas as altera��es no fim de cada dia de trabalho,
caso necessite de uma valida��o imediata clique  <a href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]sub 
dominio adicionado !\">aqui</a>.<br><br>
<u>3.6. Estatisticas de trafego</u><br><br>
Porque todo o trafego � registado � calculado e registado o trafego dos 12 Meses 
passados usando o <a href=\"http://www.mrunix.net/webalizer/\">
webalizer</a>. As estat�sticass�o s�o calculadas em horas de menor trafego, poder� 
aceder a estas atrav�s do directorio \" /stats\" em cada subdominio.
Exemplo : 
<pre>
http://www.meudominio.com
</pre>
todas as estatist�cas ser�o acessiveis em 
<pre>
http://www.meudominio.com/stats/
</pre>
<font size=\"+1\"><u>4. Contas FTP</u></font><br>
<u>4.1. O que pder� fazer?</u><br><br>
Para gerir ficheiros da sua pagina � necess�rio realizar a tranferencia dos ficheiros
atrav�s de FTP. O DTC permite gerir varios utilizadores para acederem a partes diferentes do seu site.
.<br><br>
<u>4.2.  Atrasos em apagar / adicionar contas de FTP </u><br><br>
Porque usamos o ProFTPD com um modulo especial todas as altera��es s�o feitas em tempo real.<br><br>
<u>4.3. Limitando um utilizador a uma pasta</u><br><br>
No momento n�o � possivel limitar um utilizador a uma pasta no DTC, caso 
necessite poder� enviar um e-mail ao administrador para realizar a tarefa clicando 
<a
href=\"mailto:$conf_webmaster_email_addr?subject=[DTC]FTP limite\">aqui</a>, Indicando o utilizador e a pasta.<br><br>
<u>4.4. Politica de ficheiros !</u><br><br>
O espa�o desponibilizado no servidor serve para conteudo Html, isto quer dizer que n�o � permitido
conteudo de binarios que n�o tenha os direitos, n�o � permitido qualquer tipo de ficheiros de pirataria, ou  ilegais.
Tenha cuidado porque caso seja detectado algum abuso, a sua conta ser� fechada sem qualquer tipo de aviso.<br><br>
<font size=\"+1\"><u>5. As vezes o FTP  est� lento ?</u></font><br><br>
Existem inumeras raz�es a mais provavel � que os nossos servidores n�o tenham
largura de banda suficiente  para o upload e outras vezes existem inumeras pessoas a 
realizar upload. Podendo no entanto ser outra raz�o alheia que n�s n�o podemos controlar. 
Algumas vezes a largura de banda � limitada para este servi�o para permitir navegar nas 
paginas mais rapidamente <br><br><br>
</div>
<center>A equipa GPLHost,</center><br>
<div align=\"right\"><i><a href=\"mailto:thomas[ at ] gplhost [ dot ] com\">Thomas GOIRAND</a></i></div><br>
<pre>   _____       _____________   (c) 2oo3.2oo4     _____  s!   ____  ___|    .___
 _( ___/______(____     /  |______|    |________(    /______(  _/__\___    ___/
|   \___   \_    |/    /   |\    \_    ___   \_    ___   \________   \|    |   
|    |/     /    _____/    |/     /    |/     /    |/     /    |/     /    |   
|___________\    |    |__________/|____|     /|___________\___________\GPL |   
Opensource driven| hosting worldwide  /_____/ 			|HOST.  </pre>
</font>
"
);
?>
