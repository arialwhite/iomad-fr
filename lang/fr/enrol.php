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
 * Strings for component 'core_enrol', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    core_enrol
 * @subpackage enrol
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actenrolshhdr'] = 'Greffons d\'inscription disponibles';
$string['addinstance'] = 'Ajouter la méthode';
$string['addinstanceanother'] = 'Ajouter la méthode et créer une autre';
$string['ajaxoneuserfound'] = '1 utilisateur trouvé';
$string['ajaxxusersfound'] = 'utilisateurs trouvés';
$string['ajaxxmoreusersfound'] = 'Plus d\'utilisateurs {$a} trouvés';
$string['ajaxnext25'] = 'Le prochain 25...';
$string['assignnotpermitted'] = 'Vous n\'avez pas la permission ou ne pouvez pas attribuer de rôles dans ce cours.';
$string['bulkuseroperation'] = 'Utilisation en vrac';
$string['configenrolplugins'] = 'Veuillez sélectionner tous les plugins requis et organiser ensuite dans l\'ordre approprié.';
$string['custominstancename'] = 'Nom personnalisé de l\'instance';
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
$string['customwelcomemessageplaceholder'] = 'Bonjour {$a-> prénom}, vous êtes inscrit au cours {$a->nom du cours}.';
$string['defaultenrol'] = 'Ajouter une instance aux nouveaux cours';
$string['defaultenrol_desc'] = 'Il est possible d\'ajouter ce plugin à tous les nouveaux cours par défaut.';
$string['deleteinstanceconfirm'] = 'Vous êtes sur le point de supprimer la méthode d\'inscription « {$a->name} ». Tous les utilisateurs {$a->users} actuellement inscrits à l\'aide de cette méthode seront non inscrits et toutes les données relatives aux cours telles que les utilisateurs\' grades, group membership or forum subscriptions will be deleted.

Are you sure you want to continue?';
$string['deleteinstanceconfirmself'] = 'Voulez-vous vraiment supprimer l\'instance "{$a->name}" qui vous donne accès à ce cours? Il est possible que vous ne puissiez pas accéder à ce cours si vous continuez.';
$string['deleteinstancenousersconfirm'] = 'Vous êtes sur le point de supprimer la méthode d\'inscription « {$a->name} ». Voulez-vous vraiment continuer ?';
$string['disableinstanceconfirmself'] = 'Voulez-vous vraiment désactiver l\'instance « {$a->name} » qui vous donne accès à ce cours? Il est possible que vous ne puissiez pas accéder à ce cours si vous continuez.';
$string['durationdays'] = '{$a} jours';
$string['editenrolment'] = 'Modifier l\'inscription';
$string['edituserenrolment'] = 'Modifier {$a}\'s enrolment';
$string['enrol'] = 'Inscription';
$string['enrolcandidates'] = 'Utilisateurs non inscrits';
$string['enrolcandidatesmatching'] = 'Correspondance avec les utilisateurs non inscrits';
$string['enrolcohort'] = 'Cohorte d\'inscription';
$string['enrolcohortusers'] = 'Enrôler les utilisateurs';
$string['enroldetails'] = 'Renseignements sur les inscriptions';
$string['eventenrolinstancecreated'] = 'Instance d\'inscription créée';
$string['eventenrolinstancedeleted'] = 'Instance d\'inscription supprimée';
$string['eventenrolinstanceupdated'] = 'Instance d\'inscription mise à jour';
$string['enrollednewusers'] = 'Inscription réussie {$a} nouveaux utilisateurs';
$string['enrolledusers'] = 'Utilisateurs inscrits';
$string['enrolledusersmatching'] = 'Correspondance des utilisateurs inscrits';
$string['enrolme'] = 'S\'inscrire à ce cours';
$string['enrolment'] = 'Inscriptions';
$string['enrolmentinstances'] = 'Méthodes d\'inscription';
$string['enrolmentnew'] = 'Nouvelle inscription dans {$a}';
$string['enrolmentnewuser'] = '{$a->user} s\'est inscrit au cours "{$a->cours}"';
$string['enrolmentmethod'] = 'Méthode d\'inscription';
$string['enrolments'] = 'Inscriptions';
$string['enrolmentoptions'] = 'Options d\'inscription';
$string['enrolmentupdatedforuser'] = 'L\'inscription pour l\'utilisateur « {$a->fullname} » a été mise à jour';
$string['enrolnotpermitted'] = 'Vous n\'avez pas la permission ou ne pouvez pas vous inscrire à ce cours';
$string['enrolperiod'] = 'Durée des inscriptions';
$string['enrolusage'] = 'Cas / inscriptions';
$string['enrolusers'] = 'Enrôler les utilisateurs';
$string['enrolxusers'] = 'Enregistrez les utilisateurs {$a}';
$string['enroltimecreated'] = 'Inscriptions créées';
$string['enroltimeend'] = 'Fin des inscriptions';
$string['enroltimeendinvalid'] = 'La date de fin d\'inscription doit être postérieure à la date de début de l\'inscription';
$string['enroltimestart'] = 'Début de l\'inscription';
$string['errajaxfailedenrol'] = 'Impossible d\'inscrire l\'utilisateur';
$string['errajaxsearch'] = 'Erreur lors de la recherche des utilisateurs';
$string['erroreditenrolment'] = 'Une erreur s\'est produite en essayant de modifier une inscription des utilisateurs';
$string['errorenrolcohort'] = 'Erreur lors de la création d\'une instance d\'inscription synchronisée dans ce cours.';
$string['errorenrolcohortusers'] = 'Erreur d\'inscription des membres de la cohorte à ce cours.';
$string['errorthresholdlow'] = 'Le seuil de notification doit être d\'au moins 1 jour.';
$string['errorwithbulkoperation'] = 'Il y a eu une erreur lors du traitement de votre changement d\'inscription en bloc.';
$string['eventuserenrolmentcreated'] = 'Utilisateur inscrit au cours';
$string['eventuserenrolmentdeleted'] = 'Utilisateur non inscrit du cours';
$string['eventuserenrolmentupdated'] = 'Mise à jour des inscriptions des utilisateurs';
$string['expirynotify'] = 'Aviser avant l\'expiration de l\'inscription';
$string['expirynotify_help'] = 'Ce paramètre détermine si les messages d\'avis d\'expiration d\'inscription sont envoyés.';
$string['expirynotifyall'] = 'Enregistreur et utilisateur inscrit';
$string['expirynotifyenroller'] = 'Inscription seulement';
$string['expirynotifyhour'] = 'Heure d\'envoi des notifications d\'expiration de l\'inscription';
$string['expirythreshold'] = 'Seuil de notification';
$string['expirythreshold_help'] = 'Combien de temps avant l\'expiration de l\'inscription les utilisateurs doivent-ils être informés?';
$string['finishenrollingusers'] = 'Terminer l\'inscription des utilisateurs';
$string['foundxcohorts'] = 'cohortes trouvées {$a}';
$string['instanceadded'] = 'Méthode ajoutée';
$string['instanceeditselfwarning'] = 'Avertissement :';
$string['instanceeditselfwarningtext'] = 'Vous êtes inscrit à ce cours par cette méthode d\'inscription, les changements peuvent affecter votre accès à ce cours.';
$string['invalidenrolinstance'] = 'Nombre d \' inscriptions non valides';
$string['invalidenrolduration'] = 'Durée d \' inscription non valable';
$string['invalidrole'] = 'Rôle non valide';
$string['invalidrequest'] = 'Demande non valable';
$string['manageenrols'] = 'Gérer les plugins d\'inscription';
$string['manageinstance'] = 'Gérer';
$string['method'] = 'Méthode';
$string['migratetomanual'] = 'Migrer vers les inscriptions manuelles';
$string['nochange'] = 'Pas de changement';
$string['noexistingparticipants'] = 'Pas de participants existants';
$string['nogroup'] = 'Pas de groupe';
$string['noguestaccess'] = 'Les clients ne peuvent pas accéder à ce cours. Veuillez vous connecter.';
$string['none'] = 'Aucune';
$string['notenrollable'] = 'Vous ne pouvez pas vous inscrire à ce cours.';
$string['notenrolledusers'] = 'Autres utilisateurs';
$string['otheruserdesc'] = 'Les utilisateurs suivants ne sont pas inscrits à ce cours, mais ont des rôles, hérités ou assignés en son sein.';
$string['participationactive'] = 'Actif';
$string['participationnotcurrent'] = 'Pas à jour';
$string['participationstatus'] = 'État';
$string['participationsuspended'] = 'Suspendu';
$string['periodend'] = 'jusqu\'à {$a}';
$string['periodnone'] = 'inscrits {$a}';
$string['periodstart'] = 'à partir de {$a}';
$string['periodstartend'] = 'de {$a->start} jusqu\'à {$a->end}';
$string['plugindisabled'] = '{$a} le plugin d\'inscription est désactivé';
$string['recovergrades'] = 'Récupérer utilisateur\'s old grades if possible';
$string['rolefromthiscourse'] = '[$a->role] (Assigné dans ce cours)';
$string['rolefrommetacourse'] = '{$a->role} (Hérité du cours parent)';
$string['rolefromcategory'] = '{$a->role} (Hérité de la catégorie de cours)';
$string['rolefromsystem'] = '[$a->role] (Assigné au niveau du site)';
$string['sendfromcoursecontact'] = 'Depuis le contact du cours';
$string['sendfromkeyholder'] = 'Du porte-clés';
$string['sendfromnoreply'] = 'De l\'adresse sans réponse';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue au cours';
$string['sendcoursewelcomemessage_help'] = 'Lors de l\'inscription d\'un utilisateur ou d\'une cohorte au cours, un courriel de bienvenue peut leur être envoyé. S\'il est envoyé par le contact du cours (par défaut le professeur), et que plus d\'un utilisateur a ce rôle, le courriel est envoyé par le premier utilisateur à se voir attribuer le rôle.';
$string['startdatetoday'] = 'Aujourd\'hui';
$string['synced'] = 'Synchronisé';
$string['testsettings'] = 'Paramètres d\'essai';
$string['testsettingsheading'] = 'Tester les paramètres d\'inscription - {$a}';
$string['timeended'] = 'Temps écoulé';
$string['timeenrolled'] = 'Temps inscrit';
$string['timereaggregated'] = 'Temps réagrégé';
$string['timestarted'] = 'Heure de début';
$string['totalenrolledusers'] = '{$a} utilisateurs inscrits';
$string['totalunenrolledusers'] = '{$a} utilisateurs non inscrits';
$string['totalotherusers'] = '{$a} autres utilisateurs';
$string['unassignnotpermitted'] = 'Vous n\'avez pas la permission de délimiter des rôles dans ce cours';
$string['unenrol'] = 'Non inscrit';
$string['unenrolleduser'] = 'L\'utilisateur "{$a->fullname}" n\'a pas été inscrit du cours';
$string['unenrolconfirm'] = 'Voulez-vous vraiment désinscrire « {$a->user} » (précédemment inscrit via « {$a->enrolinstancename} ») de « {$a->cours} »?';
$string['unenrolme'] = 'Me désinscrire de ce cours';
$string['unenrolnotpermitted'] = 'Vous n\'avez pas la permission de désinscrire cet utilisateur du cours.';
$string['unenrolroleusers'] = 'Désinscription des utilisateurs';
$string['uninstallmigrating'] = 'Migration des inscriptions « {$a} »';
$string['unknowajaxaction'] = 'Mesure inconnue demandée';
$string['unlimitedduration'] = 'Illimité';
$string['userremovedfromselectiona'] = 'L\'utilisateur « {$a} » a été retiré de la sélection.';
$string['usersearch'] = 'Rechercher';
$string['withselectedusers'] = 'Avec les utilisateurs sélectionnés';
$string['extremovedaction'] = 'Actions extérieures de non-inscription';
$string['extremovedaction_help'] = 'Sélectionnez les mesures à prendre lorsque l\'inscription des utilisateurs disparaît de la source externe d\'inscription. Veuillez noter que certaines données et paramètres utilisateur sont effacés du cours pendant le non-inscription.';
$string['extremovedsuspend'] = 'Désinscription aux cours';
$string['extremovedsuspendnoroles'] = 'Désactiver l\'inscription aux cours et supprimer les rôles';
$string['extremovedkeep'] = 'Tenir l\'utilisateur inscrit';
$string['extremovedunenrol'] = 'Désinscrire l\'utilisateur du cours';
$string['privacy:metadata:user_enrolments'] = 'Inscriptions';
$string['privacy:metadata:user_enrolments:enrolid'] = 'L\'exemple du plugin d\'inscription';
$string['privacy:metadata:user_enrolments:modifierid'] = 'L\'ID de l\'utilisateur qui a modifié la dernière inscription de l\'utilisateur';
$string['privacy:metadata:user_enrolments:status'] = 'Le statut de l\'utilisateur inscrit dans un cours';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Le noyau d\'inscription plugin stocke les utilisateurs inscrits.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Le moment où l\'inscription des utilisateurs a été créée';
$string['privacy:metadata:user_enrolments:timeend'] = 'Le moment où l\'inscription de l\'utilisateur prend fin';
$string['privacy:metadata:user_enrolments:timestart'] = 'Le moment où l\'inscription commence';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Le moment où l\'inscription des utilisateurs a été modifiée';
$string['privacy:metadata:user_enrolments:userid'] = 'L\'ID de l\'utilisateur';
$string['youenrolledincourse'] = 'Vous êtes inscrit au cours.';
$string['youunenrolledfromcourse'] = 'Vous n\'êtes pas inscrit du cours "{$a}".';
