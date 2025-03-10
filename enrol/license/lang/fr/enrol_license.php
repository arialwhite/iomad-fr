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
 * @package   enrol_license
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['canntenrol'] = 'L\'inscription est handicapée ou inactive';
$string['customwelcomemessage'] = 'Message de bienvenue personnalisé';
$string['defaultrole'] = 'Attribution du rôle par défaut';
$string['defaultrole_desc'] = 'Choisir le rôle qui devrait être assigné aux utilisateurs pendant l\'inscription à la licence';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddaterror'] = 'La date de fin d\'inscription ne peut être antérieure à la date de début';
$string['enrolme'] = 'Cliquez ici pour commencer ce cours';
$string['enrolperiod'] = 'Période d \' inscription';
$string['enrolperiod_desc'] = 'Durée par défaut de la période d\'inscription (en secondes).'; // TODO: fixme!
$string['enrolstartdate'] = 'Date de début';
$string['groupkey'] = 'Utiliser les clés d\'inscription de groupe';
$string['groupkey_desc'] = 'Utilisez les clés d\'inscription de groupe par défaut.';
$string['groupkey_help'] = 'In addition to restricting access to the course to only those who know the key, use of a group enrolment key means users are automatically added to the group when they enrol in the course.

To use a group enrolment key, an enrolment key must be specified in the course settings as well as the group enrolment key in the group settings.';
$string['licensecrontask'] = 'Enregistrez la licence tâche programmée';
$string['licensenolongervalid'] = 'Votre licence pour ce cours n\'est plus valide';
$string['licensenotyetvalid'] = 'Votre accès à ce cours sera disponible sur {$a}';
$string['license:unenrolself'] = 'L\'utilisateur peut se désinscrire';
$string['longtimenosee'] = 'Désenrol inactif après';
$string['longtimenosee_help'] = 'Si les utilisateurs ont\'t accessed a course for a long time, then they are automatically unenrolled. This parameter specifies that time limit.  This is sepearate to the enrolement time which is set by license itself.';
$string['maxenrolled'] = 'Nombre maximum d\'utilisateurs inscrits';
$string['maxenrolled_help'] = 'Spécifie le nombre maximum d\'utilisateurs qui peuvent concéder une licence. 0 signifie aucune limite.';
$string['maxenrolledreached'] = 'Le nombre maximal d\'utilisateurs autorisés à enregistrer une licence était déjà atteint.';
$string['nolicenseinformationfound'] = 'Votre compte n\'a pas de licence valide pour accéder à ce cours. Si vous avez besoin d\'accès, contactez votre gestionnaire d\'entreprise pour organiser une licence.';
$string['password'] = 'Clé d\'inscription';
$string['password_help'] = 'An enrolment key enables access to the course to be restricted to only those who know the key.

If the field is left blank, any user may enrol in the course.

If an enrolment key is specified, any user attempting to enrol in the course will be required to supply the key. Note that a user only needs to supply the enrolment key ONCE, when they enrol in the course.';
$string['passwordinvalid'] = 'Clé d\'inscription incorrecte, veuillez réessayer';
$string['passwordinvalidhint'] = 'That enrolment key was incorrect, please try again<br />
(Here\'s a hint - it starts with \'{$a}\')';
$string['pluginname'] = 'Inscription à la licence';
$string['pluginname_desc'] = 'Le plugin d\'inscription de licence permet aux utilisateurs d\'accéder aux cours après avoir reçu une licence pour eux. À l\'interne, l\'inscription se fait via le plugin d\'inscription manuel qui doit être activé dans le même cours.';
$string['privacy:metadata'] = 'Le plugin d\'inscription LICense affiche uniquement les données stockées dans d\'autres emplacements.';
$string['requirepassword'] = 'Exiger une clé d\'inscription';
$string['requirepassword_desc'] = 'Exiger une clé d\'inscription dans les nouveaux cours et empêcher la suppression de la clé d\'inscription des cours existants.';
$string['role'] = 'Attribuer un rôle';
$string['license:config'] = 'Configurer les instances d\'inscription de licence';
$string['license:manage'] = 'Gérer les utilisateurs inscrits';
$string['license:unenrol'] = 'Unenrol utilisateurs du cours';
$string['license:unenrollicense'] = 'Licence de désinscription depuis le cours';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue au cours';
$string['sendcoursewelcomemessage_help'] = 'Si activé, les utilisateurs reçoivent un message de bienvenue par courriel lorsqu\'ils s\'inscrivent à un cours.';
$string['showhint'] = 'Afficher un indice';
$string['showhint_desc'] = 'Afficher la première lettre de la clé d\'accès invité.';
$string['status'] = 'Autoriser les inscriptions aux licences';
$string['status_desc'] = 'Permettre aux utilisateurs de licence de s\'inscrire au cours par défaut.';
$string['status_help'] = 'Ce paramètre détermine si un utilisateur peut s\'inscrire (et non s\'inscrire s\'il a la permission appropriée) à partir du cours.';
$string['unenrollicenseconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} » ?';
$string['usepasswordpolicy'] = 'Utiliser la politique du mot de passe';
$string['usepasswordpolicy_desc'] = 'Utilisez la politique de mot de passe standard pour les clés d\'inscription.';
$string['welcometocourse'] = 'Bienvenue à {$a}';
$string['welcometocoursetext'] = 'Welcome to {$a->coursename}!

If you have not done so already, you should edit your profile page so that we can learn more about you:

  {$a->profileurl}';
