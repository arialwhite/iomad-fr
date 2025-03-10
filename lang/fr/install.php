<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'install', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['admindirerror'] = 'Le répertoire admin spécifié est incorrect';
$string['admindirname'] = 'Répertoire Admin';
$string['admindirsetting'] = 'A very few webhosts use /admin as a special URL for you to access a
    control panel or something.  Unfortunately this conflicts with the
    standard location for the Moodle admin pages.  You can fix this by
    renaming the admin directory in your installation, and putting that
    new name here.  For example: <br /> <br /><b>moodleadmin</b><br /> <br />
    This will fix admin links in Moodle.';
$string['admindirsettinghead'] = 'Réglage du répertoire admin ...';
$string['admindirsettingsub'] = 'A very few webhosts use /admin as a special URL for you to access a
    control panel or something.  Unfortunately this conflicts with the
    standard location for the Moodle admin pages.  You can fix this by
    renaming the admin directory in your installation, and putting that
    new name here.  For example: <br /> <br /><b>moodleadmin</b><br /> <br />
    This will fix admin links in Moodle.';
$string['availablelangs'] = 'Packs linguistiques disponibles';
$string['caution'] = 'Attention';
$string['cliadminemail'] = 'Nouvelle adresse email de l\'utilisateur admin';
$string['cliadminpassword'] = 'Nouveau mot de passe administrateur';
$string['cliadminusername'] = 'Nom d\'utilisateur du compte Admin';
$string['clialreadyconfigured'] = 'Le fichier de configuration config.php existe déjà. Veuillez utiliser admin/cli/install_database.php pour installer Moodle pour ce site.';
$string['clialreadyinstalled'] = 'Le fichier de configuration config.php existe déjà. Merci d\'utiliser admin/cli/install_database.php pour mettre à jour Moodle pour ce site.';
$string['cliinstallfinished'] = 'Installation effectuée avec succès.';
$string['cliinstallheader'] = 'Programme d\'installation de la ligne de commande Moodle {$a}';
$string['climustagreelicense'] = 'En mode non interactif, vous devez accepter la licence en spécifiant --agree-license option';
$string['cliskipdatabase'] = 'Installation de la base de données.';
$string['clisupportemail'] = 'Aide adresse email';
$string['clitablesexist'] = 'Les tables de base de données sont déjà présentes; l\'installation de CLI ne peut pas continuer.';
$string['compatibilitysettings'] = 'Vérification de vos paramètres PHP ...';
$string['compatibilitysettingshead'] = 'Vérification de vos paramètres PHP ...';
$string['compatibilitysettingssub'] = 'Votre serveur devrait passer tous ces tests pour faire fonctionner Moodle correctement';
$string['configfilenotwritten'] = 'Le script d\'installation n\'a pas pu créer automatiquement une configuration. fichier php contenant les paramètres choisis, probablement parce que le répertoire Moodle n\'est pas lisible. Vous pouvez copier manuellement le code suivant dans un fichier nommé config. php dans le répertoire racine de Moodle.';
$string['configfilewritten'] = 'Config. php a été créé avec succès';
$string['configurationcomplete'] = 'Configuration terminée';
$string['configurationcompletehead'] = 'Configuration terminée';
$string['configurationcompletesub'] = 'Moodle a tenté de sauvegarder votre configuration dans un fichier dans la racine de votre installation Moodle.';
$string['database'] = 'Base de données';
$string['databasehead'] = 'Paramètres de la base de données';
$string['databasehost'] = 'Hôte de base de données';
$string['databasename'] = 'Nom de la base de données';
$string['databasepass'] = 'Mot de passe de la base de données';
$string['databaseport'] = 'Port de la base de données';
$string['databasesocket'] = 'Prise Unix';
$string['databasetypehead'] = 'Choisir le pilote de base de données';
$string['databasetypesub'] = 'Moodle prend en charge plusieurs types de serveurs de base de données. Veuillez contacter l\'administrateur du serveur si vous ne savez pas quel type utiliser.';
$string['databaseuser'] = 'Utilisateur de la base de données';
$string['dataroot'] = 'Répertoire de données';
$string['datarooterror'] = 'Les'data directory\' you specified could not be found or created.  Either correct the path or create that directory manually.';
$string['datarootpermission'] = 'Autorisation des répertoires de données';
$string['datarootpublicerror'] = 'Les'data directory\' you specified is directly accessible via web, you must use different directory.';
$string['dbconnectionerror'] = 'Nous ne pouvions pas nous connecter à la base de données que vous avez spécifiée. Veuillez vérifier les paramètres de votre base de données.';
$string['dbcreationerror'] = 'Erreur de création de base de données. Impossible de créer le nom de la base de données avec les paramètres fournis';
$string['dbhost'] = 'Serveur hôte';
$string['dbpass'] = 'Mot de passe';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Tableaux préfixés';
$string['dbtype'] = 'Type';
$string['directorysettings'] = '<p>Please confirm the locations of this Moodle installation.</p>

<p><b>Web address:</b>
Specify the full web address where Moodle will be accessed.
If your web site is accessible via multiple URLs then choose the
most natural one that your students would use.  Do not include
a trailing slash.</p>

<p><b>Moodle directory:</b>
Specify the full directory path to this installation
Make sure the upper/lower case is correct.</p>

<p><b>Data directory:</b>
You need a place where Moodle can save uploaded files.  This
directory should be readable AND WRITEABLE by the web server user
(usually \'nobody\' or \'apache\'), but it must not be accessible
directly via the web. The installer will try to create it if doesn\'t exist.</p>';
$string['directorysettingshead'] = 'Veuillez confirmer l\'emplacement de cette installation Moodle';
$string['directorysettingssub'] = '<b>Web address:</b>
Specify the full web address where Moodle will be accessed.
If your web site is accessible via multiple URLs then choose the
most natural one that your students would use.  Do not include
a trailing slash.
<br />
<br />
<b>Moodle directory:</b>
Specify the full directory path to this installation
Make sure the upper/lower case is correct.
<br />
<br />
<b>Data directory:</b>
You need a place where Moodle can save uploaded files.  This
directory must be readable AND WRITEABLE by the web server user
(usually \'nobody\' or \'apache\'), but it must not be accessible
directly via the web. The installer will try to create it if doesn\'t exist.';
$string['dirroot'] = 'Répertoire Moodle';
$string['dirrooterror'] = 'Les'Moodle directory\' setting seems to be incorrect - we can\'t find a Moodle installation there. The value below has been reset.';
$string['download'] = 'Télécharger';
$string['downloadlanguagebutton'] = 'Téléchargez le pack linguistique &quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'Télécharger le paquet de langues';
$string['downloadlanguagenotneeded'] = 'Vous pouvez poursuivre le processus d\'installation en utilisant le paquet de langues par défaut « {$a} ».';
$string['downloadlanguagesub'] = 'Vous avez maintenant la possibilité de télécharger un paquet linguistique et de poursuivre le processus d\'installation dans cette langue.<br /><br />Si vous ne pouvez pas télécharger le paquet linguistique, le processus d\'installation se poursuivra en anglais. (Une fois le processus d\'installation terminé, vous aurez la possibilité de télécharger et d\'installer des paquets de langues supplémentaires.)';
$string['doyouagree'] = 'Vous êtes d\'accord ? (oui/non):';
$string['environmenthead'] = 'Vérifier votre environnement ...';
$string['environmentsub'] = 'Nous vérifions si les différents composants de votre système répondent aux exigences du système';
$string['environmentsub2'] = 'Each Moodle release has some minimum PHP version requirement and a number of mandatory PHP extensions.
Full environment check is done before each install and upgrade. Please contact server administrator if you do not know how to install new version or enable PHP extensions.';
$string['errorsinenvironment'] = 'La vérification de l\'environnement a échoué !';
$string['fail'] = 'Échec';
$string['fileuploads'] = 'Téléchargement de fichiers';
$string['fileuploadserror'] = 'Cela devrait être le cas';
$string['fileuploadshelp'] = '<p>File uploading seems to be disabled on your server.</p>

<p>Moodle can still be installed, but without this ability, you will not be able
   to upload course files or new user profile images.</p>

<p>To enable file uploading you (or your system administrator) will need to
   edit the main php.ini file on your system and change the setting for
   <b>file_uploads</b> to \'1\'.</p>';
$string['chooselanguage'] = 'Choisir une langue';
$string['chooselanguagehead'] = 'Choisir une langue';
$string['chooselanguagesub'] = 'Veuillez choisir une langue pour l\'installation. Cette langue sera également utilisée comme langue par défaut pour le site, bien qu\'elle puisse être modifiée plus tard.';
$string['inputdatadirectory'] = 'Répertoire des données & #160;:';
$string['inputwebadress'] = 'Adresse Web :';
$string['inputwebdirectory'] = 'Répertoire Moodle & #160;:';
$string['installation'] = 'Installation';
$string['invaliddbprefix'] = 'Préfixe non valide. Le préfixe ne peut se composer que de lettres minuscules et de soulignement.';
$string['langdownloaderror'] = 'Malheureusement, la langue « {$a} » n\'a pas pu être téléchargée. Le processus d\'installation se poursuivra en anglais.';
$string['langdownloadok'] = 'La langue « {$a} » a été installée avec succès. Le processus d\'installation se poursuivra dans cette langue.';
$string['memorylimit'] = 'Limite de mémoire';
$string['memorylimiterror'] = 'La limite de mémoire PHP est définie assez bas ... vous pourriez rencontrer des problèmes plus tard.';
$string['memorylimithelp'] = '<p>The PHP memory limit for your server is currently set to {$a}.</p>

<p>This may cause Moodle to have memory problems later on, especially
   if you have a lot of modules enabled and/or a lot of users.</p>

<p>We recommend that you configure PHP with a higher limit if possible, like 40M.
   There are several ways of doing this that you can try:</p>
<ol>
<li>If you are able to, recompile PHP with <i>--enable-memory-limit</i>.
    This will allow Moodle to set the memory limit itself.</li>
<li>If you have access to your php.ini file, you can change the <b>memory_limit</b>
    setting in there to something like 40M.  If you don\'t have access you might
    be able to ask your administrator to do this for you.</li>
<li>On some PHP servers you can create a .htaccess file in the Moodle directory
    containing this line:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
    <p>However, on some servers this will prevent <b>all</b> PHP pages from working
    (you will see errors when you look at pages) so you\'ll have to remove the .htaccess file.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP n\'a pas été correctement configuré avec l\'extension MySQLi pour communiquer avec MySQL. Veuillez vérifier votre fichier php.ini ou recompiler PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (natif/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>The database is where most of the Moodle settings and data are stored and must be configured here.</p>
<p>The database name, username, and password are required fields; table prefix is optional.</p>
<p>The database name may contain only alphanumeric characters, dollar ($) and underscore (_).</p>
<p>If the database currently does not exist, and the user you specify has permission, Moodle will attempt to create a new database with the correct permissions and settings.</p>
<p>This driver is not compatible with legacy MyISAM engine.</p>';
$string['nativemariadb'] = 'MariaDB (natif/mariadeb)';
$string['nativemariadbhelp'] = '<p>The database is where most of the Moodle settings and data are stored and must be configured here.</p>
<p>The database name, username, and password are required fields; table prefix is optional.</p>
<p>The database name may contain only alphanumeric characters, dollar ($) and underscore (_).</p>
<p>If the database currently does not exist, and the user you specify has permission, Moodle will attempt to create a new database with the correct permissions and settings.</p>
<p>This driver is not compatible with legacy MyISAM engine.</p>';
$string['nativemysqli'] = 'Amélioration de MySQL (natif/mysqli)';
$string['nativemysqlihelp'] = '<p>The database is where most of the Moodle settings and data are stored and must be configured here.</p>
<p>The database name, username, and password are required fields; table prefix is optional.</p>
<p>The database name may contain only alphanumeric characters, dollar ($) and underscore (_).</p>
<p>If the database currently does not exist, and the user you specify has permission, Moodle will attempt to create a new database with the correct permissions and settings.</p>';
$string['nativeoci'] = 'Oracle (natif/soci)';
$string['nativeocihelp'] = 'Now you need to configure the database where most Moodle data will be stored.
This database must already have been created and a username and password created to access it. Table prefix is mandatory.';
$string['nativepgsql'] = 'PostgreSQL (natif/pgsql)';
$string['nativepgsqlhelp'] = '<p>The database is where most of the Moodle settings and data are stored and must be configured here.</p>
<p>The database name, username, password and table prefix are required fields.</p>
<p>The database must already exist and the user must have access to both read, and write to it.</p>';
$string['nativesqlsrv'] = 'SQL*Serveur Microsoft (natif/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Now you need to configure the database where most Moodle data will be stored.
This database must already have been created and a username and password created to access it. Table prefix is mandatory.';
$string['nativesqlsrvnodriver'] = 'Les pilotes Microsoft pour SQL Server pour PHP ne sont pas installés ou ne sont pas configurés correctement.';
$string['ociextensionisnotpresentinphp'] = 'PHP n\'a pas été correctement configuré avec l\'extension OCI8 afin qu\'il puisse communiquer avec Oracle. Veuillez vérifier votre fichier php.ini ou recompiler PHP.';
$string['pass'] = 'Passer';
$string['paths'] = 'Voies';
$string['pathserrcreatedataroot'] = 'Le répertoire de données ({$a->dataroot}) ne peut pas être créé par l\'installateur.';
$string['pathshead'] = 'Confirmer les chemins';
$string['pathsrodataroot'] = 'Le répertoire Dataroot n\'est pas enregistrable.';
$string['pathsroparentdataroot'] = 'Le répertoire parent ({$a->parent}) n\'est pas lisible. Le répertoire de données ({$a->dataroot}) ne peut pas être créé par l\'installateur.';
$string['pathssubadmindir'] = 'A very few webhosts use /admin as a special URL for you to access a
control panel or something.  Unfortunately this conflicts with the standard location for the Moodle admin pages.  You can fix this by
renaming the admin directory in your installation, and putting that  new name here.  For example: <em>moodleadmin</em>. This will fix admin links in Moodle.';
$string['pathssubdataroot'] = '<p>A directory where Moodle will store all file content uploaded by users.</p>
<p>This directory should be both readable and writeable by the web server user (usually \'www-data\', \'nobody\', or \'apache\').</p>
<p>It must not be directly accessible over the web.</p>
<p>If the directory does not currently exist, the installation process will attempt to create it.</p>';
$string['pathssubdirroot'] = '<p> Le chemin complet vers le répertoire contenant le code Moodle.</p>';
$string['pathssubwwwroot'] = '<p>The full address where Moodle will be accessed i.e. the address that users will enter into the address bar of their browser to access Moodle.</p>
<p>It is not possible to access Moodle using multiple addresses. If your site is accessible via multiple addresses then choose the easiest one and set up a permanent redirect for each of the other addresses.</p>
<p>If your site is accessible both from the Internet, and from an internal network (sometimes called an Intranet), then use the public address here.</p>
<p>If the current address is not correct, please change the URL in your browser\'s address bar and restart the installation.</p>';
$string['pathsunsecuredataroot'] = 'L\'emplacement de Dataroot n\'est pas sécurisé';
$string['pathswrongadmindir'] = 'Le répertoire Admin n\'existe pas';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP n\'a pas été correctement configuré avec l\'extension PGSQL afin qu\'il puisse communiquer avec PostgreSQL. Veuillez vérifier votre fichier php.ini ou recompiler PHP.';
$string['phpextension'] = '{$a} Extension PHP';
$string['phpversion'] = 'Version PHP';
$string['phpversionhelp'] = '<p>Moodle requires a PHP version of at least 5.6.5 or 7.1 (7.0.x has some engine limitations).</p>
<p>You are currently running version {$a}.</p>
<p>You must upgrade PHP or move to a host with a newer version of PHP.</p>';
$string['releasenoteslink'] = 'Pour plus d\'informations sur cette version de Moodle, veuillez consulter les notes de sortie à {$a}';
$string['safemode'] = 'Mode sûr';
$string['safemodeerror'] = 'Moodle peut avoir des problèmes avec le mode sûr';
$string['safemodehelp'] = '<p>Moodle may have a variety of problems with safe mode on, not least is that
   it probably won\'t be allowed to create new files.</p>

<p>Safe mode is usually only enabled by paranoid public web hosts, so you may have
   to just find a new web hosting company for your Moodle site.</p>

<p>You can try continuing the install if you like, but expect a few problems later on.</p>';
$string['sessionautostart'] = 'Démarrer automatiquement la session';
$string['sessionautostarterror'] = 'Ça devrait être fini.';
$string['sessionautostarthelp'] = '<p>Moodle requires session support and will not function without it.</p>

<p>Sessions can be enabled in the php.ini file ... look for the session.auto_start parameter.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP n\'a pas été correctement configuré avec l\'extension SQLite. Veuillez vérifier votre fichier php.ini ou recompiler PHP.';
$string['upgradingqtypeplugin'] = 'Mise à niveau du plugin question/type';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'You are seeing this page because you have successfully installed and
    launched the <strong>{$a->packname} {$a->packversion}</strong> package in your computer. Congratulations!';
$string['welcomep30'] = 'This release of the <strong>{$a->installername}</strong> includes the applications
    to create an environment in which <strong>Moodle</strong> will operate, namely:';
$string['welcomep40'] = 'Le paquet comprend également <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'L\'utilisation de toutes les demandes de ce paquet est régie par leurs licences respectives. Le paquet complet <strong>{$a->installername}</strong> est <a href="https://www.opensource.org/docs/definition_plain.html">open source</a> et est distribué sous la licence <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'The following pages will lead you through some easy to follow steps to
    configure and set up <strong>Moodle</strong> on your computer. You may accept the default
    settings or, optionally, amend them to suit your own needs.';
$string['welcomep70'] = 'Cliquez sur le bouton « Suivant » ci-dessous pour continuer avec la configuration de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adresse Web';
$string['wwwrooterror'] = 'Les'Web Address\' does not appear to be valid - this Moodle installation doesn\'t appear to be there. The value below has been reset.';
