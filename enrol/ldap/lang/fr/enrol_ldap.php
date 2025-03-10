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
 * Strings for component 'enrol_ldap', language 'en'.
 *
 * @package    enrol_ldap
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @copyright  2010 Iñaki Arenaza <iarenaza@eps.mondragon.edu>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole']  = "Attribuer le rôle '{\$a->role_shortname}' à l'utilisateur '{\$a->user_username}' dans le cours '{\$a->course_shortname}' (id {\$a->course_id})";
$string['assignrolefailed'] = "Impossible d'attribuer le rôle '{\$a->role_shortname}' à l'utilisateur '{\$a->user_username}' dans le cours '{\$a->course_shortname}' (id {\$a->course_id})\n";
$string['autocreate'] = '<p>Les cours peuvent être créés automatiquement s\'il y a des inscriptions à un cours qui fait\'t yet exist in Moodle</p><p>If you are using automatic course creation, it is recommended that you remove the following capabilities: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname and moodle/course:changesummary, from the relevant roles to prevent modifications of the four course fields specified above (ID number, shortname, fullname and summary).</p>';
$string['autocreate_key'] = 'Créer automatiquement';
$string['autocreation_settings'] = 'Paramètres de création automatique de cours';
$string['autoupdate_settings'] = 'Paramètres de mise à jour automatique du cours';
$string['autoupdate_settings_desc'] = '<p>Choisissez les champs à mettre à jour lorsque \'Synchronise LDAP enrolments\' scheduled task is running.</p><p>When at least one field is selected an update will occur.</p>';
$string['bind_dn'] = 'Si vous voulez utiliser un utilisateur de liaison pour rechercher des utilisateurs, spécifiez-le ici. Un peu comme \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Nom distinctif de l\'utilisateur du bind';
$string['bind_pw'] = 'Mot de passe pour l\'utilisateur lié';
$string['bind_pw_key'] = 'Mot de passe';
$string['bind_settings'] = 'Paramètres de bind';
$string['cannotcreatecourse'] = 'Impossible de créer le cours : manque des données requises de l\'enregistrement LDAP !';
$string['cannotupdatecourse'] = "Impossible de mettre à jour le cours: manque de données requises de l'enregistrement LDAP! Numéro du cours: '{\$a->numéro du cours} '";
$string['cannotupdatecourse_duplicateshortname'] = "Impossible de mettre à jour le cours : Dupliquer le nom abrégé. Sauter le cours avec l'idnumber '{\$a->idnumber}'...";
$string['courseupdated'] = "Le cours avec le numéro d'id '{\$a->idnumber}' a été mis à jour avec succès.";
$string['courseupdateskipped'] = "Le cours avec l'idnumber '{\$a->idnumber}' ne nécessite pas de mise à jour. Sauter...";
$string['category'] = 'La catégorie des cours auto-créés';
$string['category_key'] = 'Catégorie';
$string['contexts'] = 'Contextes LDAP';
$string['couldnotfinduser'] = "Impossible de trouver l'utilisateur '{\$a}', sauter\n";
$string['coursenotexistskip'] = "Le cours '{\$a}' n'existe pas et la création automatique désactivée, sauter\ n";
$string['course_fullname'] = 'Optionnel : attribut LDAP pour obtenir le nom complet';
$string['course_fullname_key'] = 'Nom complet';
$string['course_fullname_updateonsync'] = 'Mettre à jour le nom complet pendant le script de synchronisation';
$string['course_fullname_updateonsync_key'] = 'Mettre à jour le nom complet';
$string['course_idnumber'] = 'attribut LDAP pour obtenir le numéro d\'ID du cours. Habituellement \'cn\' or \'uid\'.';
$string['course_idnumber_key'] = 'Numéro d\'identification';
$string['course_search_sub'] = 'Affiliations de groupes de recherche à partir de sous-contextes';
$string['course_search_sub_key'] = 'Sous-contextes de recherche';
$string['course_settings'] = 'Paramètres d \' inscription';
$string['course_shortname'] = 'Optionnel : attribut LDAP pour obtenir le nom abrégé';
$string['course_shortname_key'] = 'Nom abrégé';
$string['course_shortname_updateonsync'] = 'Mettre à jour le nom court pendant le script de synchronisation';
$string['course_shortname_updateonsync_key'] = 'Mettre à jour le nom abrégé';
$string['course_summary'] = 'Optionnel : attribut LDAP pour obtenir le résumé';
$string['course_summary_key'] = 'Résumé';
$string['course_summary_updateonsync'] = 'Mise à jour du résumé pendant le script de synchronisation';
$string['course_summary_updateonsync_key'] = 'Résumé de la mise à jour';
$string['createcourseextid'] = 'CRÉER Utilisateur inscrit à un cours non existant \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Utilisateur inscrit à un cours non existant \'{$a->courseextid}\'';
$string['creatingcourse'] =  'Création du cours \'{$a}\'...';
$string['duplicateshortname'] = "La création du cours a échoué. Dupliquer le nom abrégé. Sauter le cours avec l'idnumber '{\$a->idnumber}'...";
$string['editlock'] = 'Valeur de verrouillage';
$string['emptyenrolment'] = "Inscription vide pour le rôle '{\$a->role_shortname}' dans le cours '{\$a->course_shortname}'\n";
$string['enrolname'] = 'LDAP';
$string['enroluser'] =  "Inscription de l'utilisateur '{\$a->user_username}' au cours '{\$a->course_shortname}' (id {\$a->course_id})";
$string['enroluserenable'] =  "Inscription activée pour l'utilisateur '{\$a->user_username}' dans le cours '{\$a->course_shortname}' (id {\$a->course_id})";
$string['explodegroupusertypenotsupported'] = "ldap_explode_group() ne supporte pas le type d'utilisateur sélectionné : {\$a}\n";
$string['extcourseidinvalid'] = 'L\'identifiant externe est invalide !';
$string['extremovedsuspend'] =  "Inscription désactivée pour l'utilisateur '{\$a->user_username}' dans le cours '{\$a->course_shortname}' (id {\$a->course_id})";
$string['extremovedsuspendnoroles'] =  "L'inscription désactivée et les rôles supprimés pour l'utilisateur '{\$a->user_username}' dans le cours '{\$a->course_shortname}' (id {\$a->course_id})";
$string['extremovedunenrol'] =  "Désinscrire l'utilisateur '{\$a->user_username}' du cours '{\$a->course_shortname}' (id {\$a->course_id})";
$string['failed'] = "Échec!";
$string['general_options'] = 'Options générales';
$string['group_memberofattribute'] = 'Nom de l\'attribut qui spécifie à quels groupes un utilisateur ou un groupe donné appartient (par exemple, membreOf, membre de groupe, etc.)';
$string['group_memberofattribute_key'] = '\'Member of\' attribute';
$string['host_url'] = 'Spécifiez l\'hôte LDAP en forme d\'URL comme \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'URL de l\'hôte';
$string['idnumber_attribute'] = 'Si l\'adhésion de groupe contient des noms distingués, spécifiez le même attribut que vous avez utilisé pour l\'utilisateur \'ID Number\' mapping in the LDAP authentication settings.';
$string['idnumber_attribute_key'] = 'attribut numéro d\'identification';
$string['ldap_encoding'] = 'Spécifiez l\'encodage utilisé par le serveur LDAP. Plus probablement utf-8, MS AD v2 utilise l\'encodage par défaut de la plate-forme comme cp1252, cp1250, etc.';
$string['ldap_encoding_key'] = 'Encodage LDAP';
$string['ldap:manage'] = 'Gérer les instances d\'inscription LDAP';
$string['memberattribute'] = 'attribut membre LDAP';
$string['memberattribute_isdn'] = 'Si la composition du groupe contient des noms distingués, vous devez les préciser ici. Si oui, vous devez également configurer les paramètres restants dans cette section.';
$string['memberattribute_isdn_key'] = 'L\'attribut membre utilise dn';
$string['nested_groups'] = 'Voulez-vous utiliser des groupes imbriqués (groupes de groupes) pour l\'inscription?';
$string['nested_groups_key'] = 'Groupes nichés';
$string['nested_groups_settings'] = 'Paramètres des groupes imbriqués';
$string['nosuchrole'] = "Pas de tel rôle: '{\$a}\n";
$string['objectclass'] = 'objet Cours utilisés pour la recherche de cours. Habituellement \'group\' or \'posixGroup\'';
$string['objectclass_key'] = 'Classe d\'objet';
$string['ok'] = "Ça va !";
$string['opt_deref'] = 'Si la composition du groupe contient des noms distingués, indiquez comment les alias sont traités lors d\'une recherche. Sélectionnez l\'une des valeurs suivantes : \'No\' (LDAP_DEREF_NEVER) or \'Yes\' (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Alias de référence';
$string['phpldap_noextension'] = 'Le module PHP LDAP ne semble pas être présent. Assurez-vous qu\'il est installé et activé si vous voulez utiliser ce plugin d\'inscription.';
$string['pluginname'] = 'Nombre d\'inscriptions au PADL';
$string['pluginname_desc'] = '<p>Vous pouvez utiliser un serveur LDAP pour contrôler vos inscriptions. On suppose que votre arbre LDAP contient des groupes qui correspondent aux cours, et que chacun de ces groupes/cours aura des entrées d\'adhésion pour les élèves.</p><p> On suppose que les cours sont définis comme des groupes dans le PADL, chaque groupe ayant plusieurs champs d\'adhésion (<em>member</em> ou <em>memberUid</em>) qui contiennent une identification unique de l\'utilisateur.</p><p> Pour utiliser l\'inscription LDAP, vos utilisateurs <strong>doivent</strong> avoir un champ idnumber valide. Les groupes LDAP doivent avoir ce numéro d\'identification dans les champs membres pour qu\'un utilisateur soit inscrit au cours. Cela fonctionnera généralement bien si vous utilisez déjà l\'authentification LDAP.</p><p> Les inscriptions seront mises à jour lorsque l\'utilisateur se connectera. Vous pouvez également lancer un script pour garder les inscriptions dans le synchro. Regardez dans <em>enrol/ldap/cli/sync.php</em>.</p><p> Ce plugin peut également être configuré pour créer automatiquement de nouveaux cours lorsque de nouveaux groupes apparaissent dans LDAP.</p>';
$string['pluginnotenabled'] = 'Plugin non activé !';
$string['role_mapping'] = '<p> Pour chaque rôle, vous devez spécifier tous les contextes LDAP où se trouvent les groupes qui représentent les cours. Séparer différents contextes avec un point-virgule (;).</p><p> Vous devez également spécifier l\'attribut que votre serveur LDAP utilise pour tenir les membres d\'un groupe. C\'est habituellement \'member\' or \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'attribut membre LDAP pour {$a}';
$string['role_mapping_context'] = 'Contextes LDAP pour {$a}';
$string['role_mapping_key'] = 'Cartographier les rôles de LDAP';
$string['roles'] = 'Cartographie des rôles';
$string['server_settings'] = 'Paramètres du serveur LDAP';
$string['syncenrolmentstask'] = 'Synchroniser la tâche d\'inscription au PADL';
$string['synccourserole'] = "== Synchronisation du cours '{\$a->idnumber}' pour le rôle '{\$a->role_shortname}'\n";
$string['template'] = 'Optionnel : les cours créés automatiquement peuvent copier leurs paramètres à partir d\'un cours modèle';
$string['template_key'] = 'Modèle';
$string['unassignrole']  = "Désigner le rôle '{\$a->role_shortname}' à l'utilisateur '{\$a->user_username}' depuis le cours '{\$a->course_shortname}' (id {\$a->course_id})\n";
$string['unassignroleid']  = "Désigner l'identifiant de rôle '{\$a->role_id}' à l'identifiant d'utilisateur '{\$a->user_id}'\n";
$string['unassignrolefailed'] = "Impossible de désattribuer le rôle '{\$a->role_shortname}' à l'utilisateur '{\$a->user_username}' depuis le cours '{\$a->course_shortname}' (id {\$a->course_id})\n";
$string['updatelocal'] = 'Mettre à jour les données locales';
$string['user_attribute'] = 'Si l\'adhésion au groupe contient des noms distingués, spécifiez l\'attribut utilisé pour nommer/rechercher des utilisateurs. Si vous utilisez l\'authentification LDAP, cette valeur doit correspondre à l\'attribut spécifié dans le \'ID Number\' mapping in the LDAP authentication plugin.';
$string['user_attribute_key'] = 'attribut numéro d\'identification';
$string['user_contexts'] = 'Si la composition du groupe contient des noms distingués, indiquez la liste des contextes où se trouvent les utilisateurs. Séparer différents contextes avec un semi-colon (;). Par exemple: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Contextes';
$string['user_search_sub'] = 'Si l\'appartenance au groupe contient des noms distingués, indiquez si la recherche d\'utilisateurs se fait aussi dans des sous-contextes.';
$string['user_search_sub_key'] = 'Sous-contextes de recherche';
$string['user_settings'] = 'Paramètres de recherche de l\'utilisateur';
$string['user_type'] = 'Si l\'adhésion au groupe contient des noms distingués, indiquez comment les utilisateurs sont stockés dans LDAP';
$string['user_type_key'] = 'Type d\'utilisateur';
$string['version'] = 'La version du protocole LDAP de votre serveur utilise';
$string['version_key'] = 'Version';
$string['privacy:metadata'] = 'Le plugin d\'inscription LDAP ne stocke aucune donnée personnelle.';
