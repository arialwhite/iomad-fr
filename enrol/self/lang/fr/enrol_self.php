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
 * Strings for component 'enrol_self', language 'en'.
 *
 * @package    enrol_self
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['canntenrol'] = 'L\'inscription est handicapée ou inactive';
$string['canntenrolearly'] = 'Vous ne pouvez pas encore vous inscrire ; l\'inscription commence sur {$a}.';
$string['canntenrollate'] = 'Vous ne pouvez plus vous inscrire puisque l\'inscription s\'est terminée sur {$a}.';
$string['cohortnonmemberinfo'] = 'Seuls les membres de la cohorte \'{$a}\' can self-enrol.';
$string['cohortonly'] = 'Seulement les membres de la cohorte';
$string['cohortonly_help'] = 'L\'auto-inscription peut être limitée aux membres d\'une cohorte donnée. Il est à noter que modifier ce cadre n\'a aucun effet sur les inscriptions existantes.';
$string['confirmbulkdeleteenrolment'] = 'Voulez-vous vraiment supprimer ces inscriptions ?';
$string['defaultrole'] = 'Attribution du rôle par défaut';
$string['defaultrole_desc'] = 'Choisir un rôle qui devrait être assigné aux utilisateurs lors de l\'auto-inscription';
$string['deleteselectedusers'] = 'Supprimer les inscriptions d\'utilisateurs sélectionnées';
$string['editselectedusers'] = 'Modifier les inscriptions des utilisateurs sélectionnés';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si activé, les utilisateurs peuvent s\'inscrire jusqu\'à cette date seulement.';
$string['enrolenddaterror'] = 'La date de fin d\'inscription ne peut être antérieure à la date de début';
$string['enrolme'] = 'Inscrivez-vous';
$string['enrolperiod'] = 'Durée des inscriptions';
$string['enrolperiod_desc'] = 'Durée par défaut de validité de l\'inscription. Si elle est fixée à zéro, la durée d\'inscription sera illimitée par défaut.';
$string['enrolperiod_help'] = 'Durée de validité de l\'inscription, à partir du moment où l\'utilisateur s\'inscrit. En cas de handicap, la durée de l\'inscription sera illimitée.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si activé, les utilisateurs peuvent s\'inscrire à partir de cette date seulement.';
$string['expiredaction'] = 'Action d\'expiration des inscriptions';
$string['expiredaction_help'] = 'Sélectionnez l\'action à effectuer lorsque l\'inscription des utilisateurs expire. Veuillez noter que certaines données et paramètres utilisateur sont effacés du cours pendant le non-inscription.';
$string['expiryinactivemessageenrolledbody'] = 'Hi {$a->user},

Your enrolment in the course {$a->course} expires on {$a->timeend} as you have not accessed it in the last {$a->inactivetime} days.

To keep your enrolment active, log in and access <a href="[$a->url]">{$a->course}</a> before {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'Votre inscription expire : {$a->cours}';
$string['expirymessageenrollersubject'] = 'Notification d\'expiration de l\'auto-inscription';
$string['expirymessageenrollerbody'] = 'Auto-inscription au cours \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

{$a->users}

To extend their enrolment, go to {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Notification d\'expiration de l\'auto-inscription';
$string['expirymessageenrolledbody'] = 'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';
$string['expirynotifyall'] = 'Enseignant et utilisateur inscrit';
$string['expirynotifyenroller'] = 'Enseignant seulement';
$string['groupkey'] = 'Utiliser les clés d\'inscription de groupe';
$string['groupkey_desc'] = 'Utilisez les clés d\'inscription de groupe par défaut.';
$string['groupkey_help'] = 'In addition to restricting access to the course to only those who know the key, use of group enrolment keys means users are automatically added to groups when they enrol in the course.

Note: An enrolment key for the course must be specified in the self enrolment settings as well as group enrolment keys in the group settings.';
$string['keyholder'] = 'Vous auriez dû recevoir cette clé d\'inscription :';
$string['longtimenosee'] = 'Désenrol inactif après';
$string['longtimenosee_help'] = 'Si les utilisateurs ont't accessed a course for a long time, then they are automatically unenrolled. This parameter specifies that time limit.';
$string['maxenrolled'] = 'Nombre maximum d\'utilisateurs inscrits';
$string['maxenrolled_help'] = 'Spécifie le nombre maximum d\'utilisateurs qui peuvent s\'inscrire. 0 signifie aucune limite.';
$string['maxenrolledreached'] = 'Le nombre maximal d\'utilisateurs autorisés à s\'inscrire a déjà été atteint.';
$string['messageprovider:expiry_notification'] = 'Notifications d\'expiration de l\'auto-inscription';
$string['newenrols'] = 'Autoriser de nouvelles inscriptions';
$string['newenrols_desc'] = 'Autoriser les utilisateurs à s\'inscrire à de nouveaux cours par défaut.';
$string['newenrols_help'] = 'Ce paramètre détermine si un utilisateur peut s\'inscrire à ce cours.';
$string['nopassword'] = 'Aucune clé d\'inscription requise.';
$string['password'] = 'Clé d\'inscription';
$string['password_help'] = 'An enrolment key enables access to the course to be restricted to only those who know the key.

If the field is left blank, any user may enrol in the course.

If an enrolment key is specified, any user attempting to enrol in the course will be required to supply the key. Note that a user only needs to supply the enrolment key ONCE, when they enrol in the course.';
$string['passwordinvalid'] = 'Clé d\'inscription incorrecte, veuillez réessayer';
$string['passwordinvalidhint'] = 'That enrolment key was incorrect, please try again<br />
(Here\'s a hint - it starts with \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Cette clé d\'inscription est déjà utilisée comme clé d\'inscription de groupe.';
$string['pluginname'] = 'Scolarisation autonome';
$string['pluginname_desc'] = 'Le plugin auto-inscription permet aux utilisateurs de choisir les cours auxquels ils veulent participer. Les cours peuvent être protégés par une clé d\'inscription. À l\'interne, l\'inscription se fait via le plugin d\'inscription manuel qui doit être activé dans le même cours.';
$string['requirepassword'] = 'Exiger une clé d\'inscription';
$string['requirepassword_desc'] = 'Exiger une clé d\'inscription dans les nouveaux cours et empêcher la suppression de la clé d\'inscription des cours existants.';
$string['role'] = 'Rôle assigné par défaut';
$string['self:config'] = 'Configurer les instances d\'auto-inscription';
$string['self:enrolself'] = 'S\'inscrire en cours';
$string['self:holdkey'] = 'Apparaît comme le détenteur de la clé d\'auto-inscription';
$string['self:manage'] = 'Gérer les utilisateurs inscrits';
$string['self:unenrol'] = 'Unenrol utilisateurs du cours';
$string['self:unenrolself'] = 'Se désinscrire du cours';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue au cours';
$string['sendcoursewelcomemessage_help'] = 'Lorsqu\'un utilisateur s\'inscrit au cours, il peut recevoir un courriel de bienvenue. S\'il est envoyé par le contact du cours (par défaut le professeur), et que plus d\'un utilisateur a ce rôle, le courriel est envoyé par le premier utilisateur à se voir attribuer le rôle.';
$string['sendexpirynotificationstask'] = "L'auto-inscription envoie les notifications d'expiration tâche";
$string['showhint'] = 'Afficher un indice';
$string['showhint_desc'] = 'Afficher la première lettre de la clé d\'accès invité.';
$string['status'] = 'Garder actif les auto-inscriptions actuelles';
$string['status_desc'] = 'Permettre l\'auto-inscription dans les nouveaux cours.';
$string['status_help'] = 'S\'il est indiqué Non, les participants actuels qui se sont inscrits au cours n\'auront plus accès au cours.';
$string['syncenrolmentstask'] = 'Synchroniser la tâche d\'auto-inscription';
$string['unenrol'] = 'Désinscrire l\'utilisateur';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} » ?';
$string['unenroluser'] = 'Voulez-vous vraiment désinscrire "{$a->user}" du cours "{$a->cours}?';
$string['unenrolusers'] = 'Désinscription des utilisateurs';
$string['usepasswordpolicy'] = 'Utiliser la politique du mot de passe';
$string['usepasswordpolicy_desc'] = 'Utilisez la politique de mot de passe standard pour les clés d\'inscription.';
$string['privacy:metadata'] = 'Le plugin d\'inscription autonome ne stocke aucune donnée personnelle.';

// Deprecated since Moodle 4.4.
$string['customwelcomemessage'] = 'Message de bienvenue personnalisé';
$string['customwelcomemessage_help'] = 'Accepted formats: Plain text or Moodle-auto format. HTML tags and multi-lang tags are also accepted, as well as the following placeholders:
<ul>
<li>Course name {$a->coursename}</li>
<li>Link to user\'s profile page {$a->profileurl}</li>
<li>User email {$a->email}</li>
<li>User fullname {$a->fullname}</li>
<li>User first name {$a->firstname}</li>
<li>User last name {$a->lastname}</li>
<li>User course role {$a->courserole}</li>
</ul>';
$string['welcometocourse'] = 'Bienvenue à {$a}';
$string['welcometocoursetext'] = 'Welcome to {$a->coursename}!

If you have not done so already, you should edit your profile page so that we can learn more about you:

  {$a->profileurl}';
