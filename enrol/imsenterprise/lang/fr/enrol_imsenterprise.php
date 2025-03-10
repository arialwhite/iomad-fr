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
 * Strings for component 'enrol_imsenterprise', language 'en'.
 *
 * @package    enrol_imsenterprise
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['aftersaving...'] = 'Une fois que vous avez enregistré vos paramètres, vous pouvez souhaiter';
$string['allowunenrol'] = 'Permettre aux données IMS de désinscrire les élèves et les enseignants';
$string['allowunenrol_desc'] = 'Si elle est activée, les inscriptions seront supprimées lorsque les données de l\'Enterprise le précisent.';
$string['basicsettings'] = 'Paramètres de base';
$string['categoryidnumber'] = 'Autoriser le numéro d\'identification de la catégorie';
$string['categoryidnumber_desc'] = 'Si activé, IMS Enterprise créera une catégorie avec un numéro d\'identification.';
$string['categoryseparator'] = 'Caractère séparateur de catégorie';
$string['categoryseparator_desc'] = 'Requis lorsque \'Allow category ID number\' is enabled. Character to separate the category name and ID number.';
$string['coursesettings'] = 'Options de données de cours';
$string['createnewcategories'] = 'Créer de nouvelles catégories de cours (cachés) si elles ne se trouvent pas dans Moodle';
$string['createnewcategories_desc'] = 'Si l\'élément &lt;org&gt;&lt;orgunit&gt; est présent dans un cours\'s incoming data, its content will be used to specify a category if the course is to be created from scratch. The plugin will NOT re-categorise existing courses.

If no category exists with the desired name, then a hidden category will be created.';
$string['createnewcourses'] = 'Créer de nouveaux cours (cachés) si pas trouvé dans Moodle';
$string['createnewcourses_desc'] = 'Si activé, le plugin d\'inscription IMS Enterprise peut créer de nouveaux cours pour tous ceux qu\'il trouve dans les données IMS mais pas dans Moodle\'s database. Any newly-created courses are initially hidden.';
$string['createnewusers'] = 'Créer des comptes utilisateurs pour les utilisateurs non encore enregistrés dans Moodle';
$string['createnewusers_desc'] = 'IMS Enterprise enrolment data typically describes a set of users. If enabled, accounts can be created for any users not found in the Moodle database.

Users are searched for first by their ID number, and then by their Moodle username. Passwords are not imported by the IMS Enterprise plugin. The use of an authentication plugin is recommended for authenticating users.';
$string['cronfrequency'] = 'Fréquence de traitement';
$string['deleteusers'] = 'Supprimer les comptes utilisateur lorsque spécifié dans les données IMS';
$string['deleteusers_desc'] = 'Si activé, les données d\'inscription d\'IMS Enterprise peuvent spécifier la suppression des comptes utilisateurs (si le drapeau «recstatus» est défini à 3, ce qui représente la suppression d\'un compte). Comme est standard dans Moodle, l\'enregistrement utilisateur est\'t actually deleted from Moodle\'s database, but a flag is set to mark the account as deleted.';
$string['doitnow'] = 'effectuer une importation IMS Enterprise dès maintenant';
$string['emptyattribute'] = 'Laissez-le vide.';
$string['filelockedmail'] = 'Le fichier texte que vous utilisez pour les inscriptions basées sur les fichiers IMS ({$a}) ne peut pas être supprimé par le processus cron. Cela signifie généralement que les permissions sont erronées. Veuillez corriger les permissions afin que Moodle puisse supprimer le fichier, sinon il pourrait être traité à plusieurs reprises.';
$string['filelockedmailsubject'] = 'Erreur importante : Fichier d\'inscription';
$string['fixcasepersonalnames'] = 'Changement de nom personnel en cas de titre';
$string['fixcaseusernames'] = 'Changer les noms d\'utilisateur en minuscules';
$string['imsenterprisecrontask'] = 'Traitement des dossiers d\'inscription';
$string['imsenterprise:config'] = 'Configurer IMS Instances d\'inscription des entreprises';
$string['imsrolesdescription'] = 'La spécification IMS Enterprise comprend 8 types de rôles distincts. Veuillez choisir comment vous voulez qu\'ils soient affectés dans Moodle, y compris si l\'un d\'eux doit être ignoré.';
$string['location'] = 'Emplacement du fichier';
$string['logtolocation'] = 'Emplacement de sortie du fichier journal (vide pour aucun enregistrement)';
$string['mailadmins'] = 'Prévenez l\'administrateur par e-mail';
$string['mailusers'] = 'Prévenez les utilisateurs par e-mail';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS Messages d \' inscription dans les entreprises';
$string['miscsettings'] = 'Divers';
$string['nestedcategories'] = 'Autoriser les catégories imbriquées';
$string['nestedcategories_desc'] = 'Si activé IMS Enterprise créera des catégories imbriquées';
$string['pluginname'] = 'IMS Fichier Entreprise';
$string['pluginname_desc'] = 'Cette méthode va à plusieurs reprises vérifier et traiter un fichier texte spécialement formaté dans l\'emplacement que vous spécifiez. Le fichier doit suivre les spécifications IMS Enterprise contenant des éléments XML de personne, de groupe et d\'adhésion.';
$string['processphoto'] = 'Ajouter les données photo de l\'utilisateur au profil';
$string['processphotowarning'] = 'Avertissement : Le traitement des images est susceptible d\'ajouter un fardeau important au serveur. Il est recommandé de ne pas activer cette option si un grand nombre d\'étudiants sont censés être traités.';
$string['restricttarget'] = 'Ne traiter que les données si la cible suivante est spécifiée';
$string['restricttarget_desc'] = 'Un fichier de données IMS Enterprise pourrait être destiné à plusieurs "cibles" - différents LMS, ou différents systèmes au sein d\'une école/université. C\'est...'s possible to specify in the Enterprise file that the data is intended for one or more named target systems, by naming them in <target> tags contained within the <properties> tag.

In general you don\'t need to worry about this. Leave the setting blank and Moodle will always process the data file, no matter whether a target is specified or not. Otherwise, fill in the exact name that will be output inside the <target> tag.';
$string['settingfullname'] = 'IMS description tag pour le nom complet du cours';
$string['settingfullnamedescription'] = 'Le nom complet est un champ de cours obligatoire, vous devez donc définir la balise de description sélectionnée dans votre fichier IMS Enterprise';
$string['settingshortname'] = 'IMS description tag pour le nom court du cours';
$string['settingshortnamedescription'] = 'Le nom court est un champ de cours obligatoire, vous devez donc définir la balise de description sélectionnée dans votre fichier IMS Enterprise';
$string['settingsummary'] = 'Étiquette de description IMS pour le résumé du cours';
$string['settingsummarydescription'] = 'Est un champ optionnel, sélectionnez \'Leave it empty\' if you dont\'t want to specify a course summary';
$string['sourcedidfallback'] = 'Utiliser le \'sourcedid\' for a user\'s userid if the \'userid\' field is not found';
$string['sourcedidfallback_desc'] = 'In IMS data, the <sourcedid> field represents the persistent ID code for a person as used in the source system. The <userid> field is a separate field which should contain the ID code used by the user when logging in. In many cases these two codes may be the same - but not always.

Some student information systems fail to output the <userid> field. If this is the case, you should enable this setting to allow for using the <sourcedid> as the Moodle user ID. Otherwise, leave this setting disabled.';
$string['truncatecoursecodes'] = 'Codes de cours à cette longueur';
$string['truncatecoursecodes_desc'] = 'Dans certaines situations, vous pouvez avoir des codes de cours que vous souhaitez tronquer à une longueur spécifiée avant de traiter. Si oui, entrez le nombre de caractères dans cette case. Sinon, laissez la case vide et aucune troncation ne se produira.';
$string['updatecourses'] = 'Mettre à jour le cours';
$string['updatecourses_desc'] = 'Si activé, le plugin d\'inscription IMS Enterprise peut mettre à jour les noms complets et courts du cours (si le drapeau "recstatus" est défini à 2, ce qui représente une mise à jour).';
$string['updateusers'] = 'Mettre à jour les comptes utilisateur lorsque spécifié dans les données IMS';
$string['updateusers_desc'] = 'Si activé, les données d\'inscription d\'IMS Enterprise peuvent spécifier des modifications aux comptes utilisateurs (si le drapeau "recstatus" est défini à 2, ce qui représente une mise à jour).';
$string['usecapitafix'] = 'Cochez cette case si vous utilisez Capita (comme leur format XML est légèrement différent)';
$string['usecapitafix_desc'] = 'Le système de données étudiants produit par Capita a été trouvé pour avoir une légère erreur dans sa sortie XML. Si vous utilisez Capita, vous devez activer ce paramètre - sinon laissez-le non-tiché.';
$string['usersettings'] = 'Options de données utilisateur';
$string['zeroisnotruncation'] = '0 indique aucune troncation';
$string['roles'] = 'Rôles';
$string['ignore'] = 'Ignorer';
$string['importimsfile'] = 'Importer IMS Fichier Entreprise';
$string['privacy:metadata'] = 'Le plugin d\'inscription de fichier IMS Enterprise ne stocke aucune donnée personnelle.';
$string['unenrolaction'] = 'Action non engagée';
$string['unenrolaction_desc'] = 'Mesures à prendre lorsqu\'un utilisateur n\'est pas inscrit d\'un cours (ne s\'applique que lorsque le paramètre de non inscription ci-dessus est activé).';
$string['disableenrolonly'] = 'Suspendre l\'inscription seulement';
$string['disableenrolmentandremoveallroles'] = 'Suspendre l\'inscription et supprimer les rôles';
$string['noaction'] = 'Pas d\'action';
$string['removeenrolmentandallroles'] = 'Supprimer les inscriptions et les rôles';
