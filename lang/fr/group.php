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
 * Strings for component 'group', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @copyright 2006 The Open University
 * @author    J.White AT open.ac.uk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addedby'] = 'Ajouté par {$a}';
$string['addgroup'] = 'Ajouter un utilisateur dans le groupe';
$string['addgroupstogrouping'] = 'Ajouter un groupe au groupe';
$string['addgroupstogroupings'] = 'Ajouter ou supprimer des groupes';
$string['adduserstogroup'] = 'Ajouter/supprimer des utilisateurs';
$string['allocateby'] = 'Attribuer des membres';
$string['anygrouping'] = '[Tout groupe]';
$string['autocreategroups'] = 'Création automatique de groupes';
$string['backtogroupings'] = 'Retour aux groupes';
$string['backtogroups'] = 'Retour aux groupes';
$string['badnamingscheme'] = 'Doit contenir exactement un \'@\' or one \'#\'  character';
$string['byfirstname'] = 'Alphabétiquement par prénom, nom de famille';
$string['byidnumber'] = 'Alphabétiquement par numéro d\'identification';
$string['bylastname'] = 'Alphabétiquement par nom de famille, prénom';
$string['createautomaticgrouping'] = 'Créer un groupement automatique';
$string['creategroup'] = 'Créer un groupe';
$string['creategrouping'] = 'Créer un groupe';
$string['creategroupinselectedgrouping'] = 'Créer un groupe dans le regroupement';
$string['createingrouping'] = 'Groupement de groupes créés automatiquement';
$string['createorphangroup'] = 'Créer un groupe orphelin';
$string['csvdelimiter'] = 'Séparateur CSV';
$string['databaseupgradegroups'] = 'La version des groupes est maintenant {$a}';
$string['defaultgrouping'] = 'Groupe par défaut';
$string['defaultgroupingname'] = 'Groupement';
$string['defaultgroupname'] = 'Groupe';
$string['deleteallgroupings'] = 'Tous les groupes';
$string['deleteallgroups'] = 'Tous les groupes';
$string['deletegroupconfirm'] = 'Voulez-vous vraiment supprimer le groupe \'{$a}\'?';
$string['deletegrouping'] = 'Supprimer le groupe';
$string['deletegroupingconfirm'] = 'Voulez-vous vraiment supprimer le groupe \'{$a}\'? (Groups in the grouping are not deleted.)';
$string['deletegroupsconfirm'] = 'Voulez-vous vraiment supprimer les groupes suivants?';
$string['deleteselectedgroup'] = 'Supprimer';
$string['disablemessagingaction'] = 'Désactiver la messagerie';
$string['editgroupingsettings'] = 'Modifier les paramètres de regroupement';
$string['editgroupsettings'] = 'Modifier les paramètres du groupe';
$string['editusersgroupsa'] = 'Modifier les groupes pour "{$a}"';
$string['enablemessaging'] = 'Messagerie de groupe';
$string['enablemessagingaction'] = 'Activer la messagerie';
$string['enablemessaging_help'] = 'Si activé, les membres du groupe peuvent envoyer des messages aux autres membres de leur groupe via le tiroir de messagerie.';
$string['encoding'] = 'Codage';
$string['enrolmentkey'] = 'Clé d\'inscription';
$string['enrolmentkey_help'] = 'An enrolment key enables access to the course to be restricted to only those who know the key. If a group enrolment key is specified, then not only will entering that key let the user into the course, but it will also automatically make them a member of this group.

Note: Group enrolment keys must be enabled in the self enrolment settings and an enrolment key for the course must also be specified.';
$string['enrolmentkeyalreadyinuse'] = 'Cette clé d\'inscription est déjà utilisée pour un autre groupe.';
$string['erroraddremoveuser'] = 'Erreur d\'ajout/retrait de l\'utilisateur {$a} dans le groupe';
$string['erroreditgroup'] = 'Erreur lors de la création/mise à jour du groupe {$a}';
$string['erroreditgrouping'] = 'Erreur lors de la création/mise à jour du groupe {$a}';
$string['erroraddtogroup'] = 'Valeur non valide pour addtogroup. Il devrait être 0 pour aucun mode de groupe ou 1 pour un nouveau groupe à créer.';
$string['erroraddtogroupgroupname'] = 'Vous ne pouvez pas spécifier le nom de groupe lorsque addtogroup est défini.';
$string['errorinvalidgroup'] = 'Erreur, groupe invalide {$a}';
$string['errorremovenotpermitted'] = 'Vous n\'avez pas la permission de supprimer automatiquement un membre du groupe {$a}';
$string['errorselectone'] = 'Veuillez sélectionner un seul groupe avant de choisir cette option';
$string['errorselectsome'] = 'Veuillez sélectionner un ou plusieurs groupes avant de choisir cette option';
$string['evenallocation'] = 'Remarque : Pour que l\'attribution des groupes soit uniforme, le nombre réel de membres par groupe diffère du nombre que vous avez spécifié.';
$string['eventgroupcreated'] = 'Groupe créé';
$string['eventgroupdeleted'] = 'Groupe supprimé';
$string['eventgroupmemberadded'] = 'Membre du groupe ajouté';
$string['eventgroupmemberremoved'] = 'Membre du groupe retiré';
$string['eventgroupupdated'] = 'Groupe actualisé';
$string['eventgroupingcreated'] = 'Groupement créé';
$string['eventgroupingdeleted'] = 'Groupe supprimé';
$string['eventgroupinggroupassigned'] = 'Groupe affecté au regroupement';
$string['eventgroupinggroupunassigned'] = 'Groupe non affecté du groupement';
$string['eventgroupingupdated'] = 'Groupe actualisé';
$string['existingmembers'] = 'Membres existants : {$a}';
$string['exportgroupsgroupings'] = 'Télécharger les groupes';
$string['filtergroups'] = 'Filtrer les groupes par :';
$string['group'] = 'Groupe';
$string['groupaddedsuccesfully'] = 'Groupe {$a} ajouté avec succès';
$string['groupaddedtogroupingsuccesfully'] = 'Groupe {$a->nom du groupe} ajouté au groupe {$a->nom du groupe} avec succès';
$string['groupby'] = 'Création automatique basée sur';
$string['groupdescription'] = 'Description du groupe';
$string['groupinfo'] = 'Informations sur le groupe sélectionné';
$string['groupinfomembers'] = 'Informations sur les membres sélectionnés';
$string['groupinfopeople'] = 'Informations sur les personnes sélectionnées';
$string['grouping'] = 'Groupement';
$string['groupingaddedsuccesfully'] = 'Le regroupement {$a} a été ajouté avec succès';
$string['grouping_help'] = 'Un regroupement est une collection de groupes dans un cours. Si un groupe est sélectionné, les étudiants affectés à des groupes au sein du groupe pourront travailler ensemble.';
$string['groupingsection'] = 'Grouper l\'accès';
$string['groupingsection_help'] = 'Un regroupement est une collection de groupes dans un cours. Si un groupe est sélectionné ici, seuls les étudiants affectés à des groupes de ce groupe auront accès à la section.';
$string['groupingdescription'] = 'Description du groupe';
$string['groupingname'] = 'Nom de groupe';
$string['groupingnameexists'] = 'Le nom du groupe \'{$a}\' already exists in this course, please choose another one.';
$string['groupings'] = 'Groupes';
$string['groupingsonly'] = 'Groupes seulement';
$string['groupmember'] = 'Membre du groupe';
$string['groupmemberdesc'] = 'Rôle standard pour un membre d\'un groupe.';
$string['groupmembers'] = 'Membres du groupe';
$string['groupmemberssee'] = 'Voir les membres du groupe';
$string['groupmembersselected'] = 'Membres du groupe sélectionné';
$string['groupmode'] = 'Mode groupe';
$string['groupmode_groupsseparate_help'] = 'Les élèves sont divisés en groupes et ne peuvent voir que leur groupe\'s work.';
$string['groupmode_groupsvisible_help'] = 'Les élèves sont divisés en groupes, mais peuvent voir le travail d\'autres groupes.';
$string['groupmode_help'] = '* No groups
* Separate groups: Students are divided into groups and can only see their group\'s work.
* Visible groups: Students are divided into groups, but can see the work of other groups.

The group mode set at course level is the default mode for all activities. If the group mode is forced at course level, it can\'t be changed in an activity.';
$string['groupmodeforce'] = 'Mode groupe de force';
$string['groupmodeforce_help'] = 'Le mode groupe est appliqué pour toutes les activités et peut\'t be changed in an activity.';
$string['groupmy'] = 'Mon groupe';
$string['groupname'] = 'Nom du groupe';
$string['groupnameexists'] = 'Le nom du groupe \'{$a}\' already exists in this course, please choose another one.';
$string['groupnotamember'] = 'Désolé, vous n\'êtes pas membre de ce groupe.';
$string['groups'] = 'Groupes';
$string['groupscount'] = 'Groupes';
$string['groupsettingsheader'] = 'Groupes';
$string['groupsgroupings'] = 'Groupes';
$string['groupsinselectedgrouping'] = 'Groupes dans:';
$string['groupsnone'] = 'Pas de groupe';
$string['groupsonly'] = 'Groupes seulement';
$string['groupspreview'] = 'Aperçu des groupes';
$string['groupsseparate'] = 'Groupes séparés';
$string['groupsvisible'] = 'Groupes visibles';
$string['grouptemplate'] = 'Groupe @';
$string['importgroups'] = 'Groupes d\'importation';
$string['importgroups_help'] = 'Groups may be imported via text file. The format of the file should be as follows:

* Each line of the file contains one record
* Each record is a series of data separated by the selected separator
* The first record contains a list of fieldnames defining the format of the rest of the file
* Required fieldname is groupname
* Optional fieldnames are groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['importgroups_link'] = 'Groupe/importation';
$string['includeonlyactiveenrol'] = 'Inclure uniquement les inscriptions actives';
$string['includeonlyactiveenrol_help'] = 'Si activé, les utilisateurs suspendus ne seront pas inclus dans les groupes.';
$string['javascriptrequired'] = 'Cette page nécessite que JavaScript soit activé.';
$string['members'] = 'Membres par groupe';
$string['membersofselectedgroup'] = 'Membres:';
$string['namingscheme'] = 'Régime de désignation';
$string['namingscheme_help'] = 'The at symbol (@) may be used to create groups with names containing letters. For example Group @ will generate groups named Group A, Group B, Group C, ...

The hash symbol (#) may be used to create groups with names containing numbers. For example Group # will generate groups named Group 1, Group 2, Group 3, ...';
$string['newgrouping'] = 'Nouveau groupement';
$string['newpicture'] = 'Nouvelle image';
$string['newpicture_help'] = 'Sélectionnez une image au format JPG ou PNG. L\'image sera recadrée en carré et redimensionnée en 100x100 pixels.';
$string['noallocation'] = 'Pas de répartition';
$string['nogrouping'] = 'Pas de regroupement';
$string['nogroup'] = 'Pas de groupe';
$string['nogrouping'] = 'Pas de regroupement';
$string['nogroups'] = 'Il n\'y a pas encore de groupes dans ce cours';
$string['nogroupsassigned'] = 'Aucun groupe assigné';
$string['nopermissionforcreation'] = 'Peut\'t create group "{$a}" as you don\'t have the required permissions';
$string['nosmallgroups'] = 'Prévenir le dernier petit groupe';
$string['notingroup'] = 'Ignorer les utilisateurs en groupes';
$string['notingrouping'] = 'Pas dans un groupe';
$string['notingrouplist'] = 'Pas dans un groupe';
$string['nousersinrole'] = 'Il n\'y a pas d\'utilisateurs appropriés dans le rôle sélectionné';
$string['number'] = 'Nombre de membres';
$string['numgroups'] = 'Nombre de groupes';
$string['nummembers'] = 'Membres par groupe';
$string['manageactions'] = 'Gérer';
$string['messagingdisabled'] = 'Messages désactivés avec succès dans {$a} groupe(s)';
$string['messagingenabled'] = 'Messagerie activée avec succès dans {$a} groupe(s)';
$string['mygroups'] = 'Mes groupes';
$string['othergroups'] = 'Autres groupes';
$string['overview'] = 'Aperçu général';
$string['participation'] = 'Afficher le groupe dans le menu déroulant pour les activités en mode groupe';
$string['participation_help'] = 'Les membres du groupe devraient-ils être en mesure de sélectionner ce groupe pour des activités en mode groupe distinct ou visible? (Seulement applicable si l\'appartenance au groupe est visible ou seulement visible pour les membres.)';
$string['participationshort'] = 'Participation';
$string['potentialmembers'] = 'Membres potentiels : {$a}';
$string['potentialmembs'] = 'Membres potentiels';
$string['printerfriendly'] = 'Affichage facile à imprimer';
$string['privacy:metadata:core_message'] = 'Les conversations de groupe';
$string['privacy:metadata:groups'] = 'Un compte rendu des membres du groupe.';
$string['privacy:metadata:groups:groupid'] = 'L\'identité du groupe.';
$string['privacy:metadata:groups:timeadded'] = 'L\'horodatage indiquant quand l\'utilisateur a été ajouté au groupe.';
$string['privacy:metadata:groups:userid'] = 'L\'ID de l\'utilisateur qui est associé au groupe.';
$string['random'] = 'Par hasard';
$string['removegroupfromselectedgrouping'] = 'Supprimer le groupe du regroupement';
$string['removefromgroup'] = 'Supprimer l\'utilisateur du groupe {$a}';
$string['removefromgroupconfirm'] = 'Voulez-vous vraiment supprimer l\'utilisateur "{$a->user}" du groupe "{$a->group}"?';
$string['removegroupingsmembers'] = 'Tous les groupes';
$string['removegroupsmembers'] = 'Tous les membres du groupe';
$string['removeselectedusers'] = 'Supprimer les utilisateurs sélectionnés';
$string['selectfromgroup'] = 'Sélectionnez les membres du groupe';
$string['selectfromgrouping'] = 'Sélectionnez les membres du groupe';
$string['selectfromrole'] = 'Sélectionnez les membres ayant un rôle';
$string['showgroupsingrouping'] = 'Afficher les groupes en groupe';
$string['showmembersforgroup'] = 'Afficher les membres du groupe';
$string['toomanygroups'] = 'Nombre insuffisant d\'utilisateurs pour remplir ce nombre de groupes - il n\'y a que {$a} utilisateurs dans le rôle sélectionné.';
$string['usercount'] = 'Nombre d \' utilisateurs';
$string['usercounttotal'] = 'Nombre d\'utilisateurs ({$a})';
$string['usergroupmembership'] = 'Utilisateur sélectionné\'s membership:';
$string['visibility'] = 'Visibilité des membres du groupe';
$string['visibility_help'] = '* Visible - all course participants can view who is in the group
* Only visible to members - course participants not in the group can’t view the group or its members
* Only see own membership - a user can see they are in the group but can’t view other group members
* Hidden - only teachers can view the group and its members

Users with the view hidden groups capability can always view group membership.

Note that you can\'t change this setting if the group has members.';
$string['visibilityshort'] = 'Visibilité';
$string['visibilityall'] = 'Visible';
$string['visibilitymembers'] = 'Uniquement visible pour les membres';
$string['visibilityown'] = 'Ne voir qu\'une seule adhésion';
$string['visibilitynone'] = 'Caché';
$string['memberofgroup'] = 'Membre du groupe : {$a}';
$string['withselected'] = 'Avec sélection';
