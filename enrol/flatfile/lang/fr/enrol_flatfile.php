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
 * Strings for component 'enrol_flatfile', language 'en'.
 *
 * @package    enrol_flatfile
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['encoding'] = 'Encodage de fichier';
$string['expiredaction'] = 'Action d\'expiration des inscriptions';
$string['expiredaction_help'] = 'Sélectionnez l\'action à effectuer lorsque l\'inscription des utilisateurs expire. Veuillez noter que certaines données et paramètres utilisateur sont effacés du cours pendant le non-inscription.';
$string['filelockedmail'] = 'Le fichier texte que vous utilisez pour les inscriptions basées sur des fichiers ({$a}) ne peut pas être supprimé par le processus cron. Cela signifie généralement que les permissions sont erronées. Veuillez corriger les permissions afin que Moodle puisse supprimer le fichier, sinon il pourrait être traité à plusieurs reprises.';
$string['filelockedmailsubject'] = 'Erreur importante : Fichier d\'inscription';
$string['flatfile:manage'] = 'Gérer manuellement les inscriptions des utilisateurs';
$string['flatfile:unenrol'] = 'Désinscrire les utilisateurs du cours manuellement';
$string['flatfileenrolments'] = 'Nombre de dossiers d\'inscription (CSV)';
$string['flatfilesync'] = 'Synchronisation d\'inscription de fichiers plats';
$string['location'] = 'Emplacement du fichier';
$string['location_desc'] = 'Indiquez le chemin complet vers le fichier d\'inscription. Le fichier est automatiquement supprimé après traitement.';
$string['notifyadmin'] = 'Avertissez l\'administrateur';
$string['notifyenrolled'] = 'Aviser les utilisateurs inscrits';
$string['notifyenroller'] = 'Aviser l\'utilisateur responsable des inscriptions';
$string['messageprovider:flatfile_enrolment'] = 'Messages d\'inscription de fichiers plats';
$string['mapping'] = 'Cartographie des rôles des fichiers plats';
$string['pluginname'] = 'Dossier plat (CSV)';
$string['pluginname_desc'] = 'This method will repeatedly check for and process a specially-formatted text file in the location that you specify.
The file is a comma separated file assumed to have four or six fields per line:

    operation, role, user idnumber, course idnumber [, starttime [, endtime]]

where:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber in the user table NB not id
* course idnumber - idnumber in the course table NB not id
* starttime - start time (in seconds since epoch) - optional
* endtime - end time (in seconds since epoch) - optional

It could look something like this:
<pre class="boîte d'information">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Le plugin d\'inscription Flat file (CSV) peut stocker des données personnelles relatives aux futures inscriptions dans la table s\'inscrire_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'L\'action d\'inscription prévue à la date donnée';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Le cours ID auquel se rapporte l\'inscription';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'L\'identification du rôle à attribuer ou à attribuer';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Le moment où l\'inscription commence';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Le moment où l\'inscription prend fin';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Le moment où l\'inscription est modifiée';
$string['privacy:metadata:enrol_flatfile:userid'] = 'L\'ID de l\'utilisateur auquel se rapporte la tâche';
