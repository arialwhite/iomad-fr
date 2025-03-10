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
 * Strings for component 'enrol_manual', language 'en'.
 *
 * @package    enrol_manual
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['advanced'] = 'Avancé';
$string['alterstatus'] = 'Statut différent';
$string['altertimeend'] = 'Alter heure de fin';
$string['altertimestart'] = 'Alter l\'heure de début';
$string['assignrole'] = 'Attribuer un rôle';
$string['assignroles'] = 'Attribuer des rôles';
$string['browseusers'] = 'Parcourir les utilisateurs';
$string['browsecohorts'] = 'Parcourir les cohortes';
$string['confirmbulkdeleteenrolment'] = 'Voulez-vous vraiment supprimer ces inscriptions ?';
$string['defaultstart'] = 'Début de l\'inscription par défaut';
$string['defaultperiod'] = 'Durée par défaut de l \' inscription';
$string['defaultperiod_desc'] = 'Durée par défaut de validité de l\'inscription. Si elle est fixée à zéro, la durée d\'inscription sera illimitée par défaut.';
$string['defaultperiod_help'] = 'Durée par défaut de validité de l\'inscription, à partir du moment où l\'utilisateur est inscrit. Si elle est désactivée, la durée d\'inscription sera illimitée par défaut.';
$string['deleteselectedusers'] = 'Supprimer les inscriptions d\'utilisateurs sélectionnées';
$string['editselectedusers'] = 'Modifier les inscriptions des utilisateurs sélectionnés';
$string['enrolledincourserole'] = '"{$a->cours}" comme "{$a->role}"';
$string['enrolusers'] = 'Enrôler les utilisateurs';
$string['enroluserscohorts'] = 'Nombre d\'utilisateurs et de cohortes sélectionnés';
$string['expiredaction'] = 'Action d\'expiration des inscriptions';
$string['expiredaction_help'] = 'Sélectionnez l\'action à effectuer lorsque l\'inscription des utilisateurs expire. Veuillez noter que certaines données et paramètres utilisateur sont effacés du cours pendant le non-inscription.';
$string['expirymessageenrollersubject'] = 'Avis d\'expiration de l\'inscription';
$string['expirymessageenrollerbody'] = 'Inscription au cours \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

{$a->users}

To extend their enrolment, go to {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Avis d\'expiration de l\'inscription';
$string['expirymessageenrolledbody'] = 'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';
$string['managemanualenrolements'] = 'Gérer les inscriptions manuelles';
$string['manual:config'] = 'Configurer les instances d\'inscription manuelle';
$string['manual:enrol'] = 'Enrôler les utilisateurs';
$string['manual:manage'] = 'Gérer les inscriptions des utilisateurs';
$string['manual:unenrol'] = 'Unenrol utilisateurs du cours';
$string['manual:unenrolself'] = 'Se désinscrire du cours';
$string['messageprovider:expiry_notification'] = 'Avis d\'expiration de l\'inscription manuelle';
$string['now'] = 'Now';
$string['pluginname'] = 'Inscriptions manuelles';
$string['pluginname_desc'] = 'Le plugin d\'inscriptions manuelles permet aux utilisateurs d\'être inscrits manuellement via un lien dans les paramètres d\'administration du cours, par un utilisateur avec les autorisations appropriées comme un enseignant. Le plugin devrait normalement être activé, car certains autres plugins d\'inscription, comme l\'auto-inscription, l\'exigent.';
$string['selection'] = 'Sélection';
$string['selectusers'] = 'Sélectionner les utilisateurs';
$string['selectcohorts'] = 'Sélection de cohortes';
$string['sendexpirynotificationstask'] = "L'inscription manuelle envoie les notifications d'expiration tâche";
$string['status'] = 'Activer les inscriptions manuelles';
$string['status_desc'] = 'Permettre l\'accès aux cours des utilisateurs inscrits en interne. Cela devrait être possible dans la plupart des cas.';
$string['status_help'] = 'Ce paramètre détermine si les utilisateurs peuvent être inscrits manuellement, via un lien dans les paramètres d\'administration du cours, par un utilisateur avec les permissions appropriées comme un enseignant.';
$string['statusenabled'] = 'Activé';
$string['statusdisabled'] = 'Handicapé';
$string['syncenrolmentstask'] = 'Synchroniser la tâche d\'inscription manuelle';
$string['unenrol'] = 'Désinscrire l\'utilisateur';
$string['unenrolselectedusers'] = 'Désinscrire les utilisateurs sélectionnés';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} » ?';
$string['unenroluser'] = 'Voulez-vous vraiment désinscrire "{$a->user}" du cours "{$a->cours}?';
$string['unenrolusers'] = 'Désinscription des utilisateurs';
$string['wscannotenrol'] = 'L\'instance de greffon ne peut pas inscrire manuellement un utilisateur dans le cours id = {$a->courseid}';
$string['wsnoinstance'] = 'L\'instance du plugin d\'inscription manuelle does\'t exist or is disabled for the course (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Vous faites't have the permission to assign this role ({$a->roleid}) to this user ({$a->userid}) in this course ({$a->courseid}).';
$string['manualpluginnotinstalled'] = 'Le plugin "Manual" n\'a pas encore été installé';
$string['privacy:metadata'] = 'Le plugin Inscriptions manuelles ne stocke aucune donnée personnelle.';
