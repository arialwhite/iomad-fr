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
 * Strings for component 'auth_mnet', language 'en'.
 *
 * @package   auth_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_mnet_auto_add_remote_users'] = 'Une fois défini à Oui, un enregistrement utilisateur local est créé automatiquement lorsqu\'un utilisateur distant se connecte pour la première fois.';
$string['auth_mnetdescription'] = 'Les utilisateurs sont authentifiés selon le web de confiance défini dans les paramètres de votre réseau Moodle.';
$string['auth_mnet_roamin'] = 'Ces hôtes's users can roam in to your site';
$string['auth_mnet_roamout'] = 'Vos utilisateurs peuvent se déplacer vers ces hôtes';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Le délai en secondes pour l\'authentification sur le transport XMLRPC.';
$string['auto_add_remote_users'] = 'Ajout automatique des utilisateurs distants';
$string['crontask'] = 'Traitement de fond pour l\'authentification MNET';
$string['rpc_negotiation_timeout'] = 'Délai de négociation du RPC';
$string['sso_idp_description'] = 'Publier ce service pour permettre à vos utilisateurs d\'aller sur le site {$a} sans avoir à se connecter à nouveau. <ul><li><em>Dependency</em>: Vous devez également <strong>s\'abonner</strong> au service de l\'OSP (fournisseur de services) sur {$a}.</li></ul><br />Abonnez-vous à ce service pour permettre aux utilisateurs authentifiés de {$a} d\'accéder à votre site sans avoir à vous connecter à nouveau. Vous devez aussi <strong>publier</strong> le service d\'OSS (fournisseur de services) à {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (fournisseur d\'identité)';
$string['sso_mnet_login_refused'] = 'Le nom d\'utilisateur {$a->user} n\'est pas autorisé à se connecter à {$a->host}.';
$string['sso_sp_description'] = 'Publier ce service pour permettre aux utilisateurs authentifiés de {$a} d\'accéder à votre site sans avoir à se reconnecter. <ul><li><em>Dependency</em>: Vous devez également <strong>s\'abonner</strong> au service de l\'OSP (fournisseur d\'identité) sur {$a}.</li></ul><br />Abonnez-vous à ce service pour permettre à vos utilisateurs d\'aller sur le site {$a} sans avoir à vous y connecter. <ul><li><em>Dependency</em>: Vous devez aussi <strong>publier</strong> le service d\'OSS (fournisseur d\'identité) à {$a}.</li></ul><br />';
$string['sso_sp_name'] = 'SSO (fournisseur de services)';
$string['pluginname'] = 'Authentification MNet';
$string['privacy:metadata:external:mahara'] = 'Ce plugin peut envoyer des données externes à une application Mahara liée.';
$string['privacy:metadata:external:moodle'] = 'Ce plugin peut envoyer des données externes à une application Moodle liée.';
$string['privacy:metadata:mnet_external:address'] = 'L\'adresse de l\'utilisateur.';
$string['privacy:metadata:mnet_external:alternatename'] = 'Un nom alternatif pour l\'utilisateur.';
$string['privacy:metadata:mnet_external:autosubscribe'] = 'Une préférence pour l\'utilisateur devrait être automatiquement souscrit aux forums dans lesquels l\'utilisateur poste.';
$string['privacy:metadata:mnet_external:calendartype'] = 'Une préférence de l\'utilisateur pour le type de calendrier à utiliser.';
$string['privacy:metadata:mnet_external:city'] = 'La ville de l\'utilisateur.';
$string['privacy:metadata:mnet_external:country'] = 'Le pays dans lequel l\'utilisateur est.';
$string['privacy:metadata:mnet_external:currentlogin'] = 'La connexion actuelle pour cet utilisateur.';
$string['privacy:metadata:mnet_external:department'] = 'Le service dans lequel cet utilisateur peut être trouvé.';
$string['privacy:metadata:mnet_external:description'] = 'Informations générales sur cet utilisateur.';
$string['privacy:metadata:mnet_external:email'] = 'Une adresse e-mail pour contacter.';
$string['privacy:metadata:mnet_external:emailstop'] = 'Une préférence pour arrêter d\'envoyer un courriel à l\'utilisateur.';
$string['privacy:metadata:mnet_external:firstaccess'] = 'Le moment où cet utilisateur a accédé au site.';
$string['privacy:metadata:mnet_external:firstname'] = 'Le prénom de l\'utilisateur.';
$string['privacy:metadata:mnet_external:firstnamephonetic'] = 'Les détails phonétiques sur l\'utilisateur\'s first name.';
$string['privacy:metadata:mnet_external:id'] = 'L\'ID de l\'utilisateur';
$string['privacy:metadata:mnet_external:idnumber'] = 'Un numéro d\'identification donné par l\'établissement';
$string['privacy:metadata:mnet_external:imagealt'] = 'Texte alternatif pour l\'utilisateur's image.';
$string['privacy:metadata:mnet_external:institution'] = 'L\'institution dont cet utilisateur est membre.';
$string['privacy:metadata:mnet_external:lang'] = 'Une préférence de l\'utilisateur pour la langue affichée.';
$string['privacy:metadata:mnet_external:lastaccess'] = 'La dernière fois que l\'utilisateur a accédé au site.';
$string['privacy:metadata:mnet_external:lastlogin'] = 'La dernière connexion de cet utilisateur.';
$string['privacy:metadata:mnet_external:lastname'] = 'Nom de famille de l\'utilisateur.';
$string['privacy:metadata:mnet_external:lastnamephonetic'] = 'Les détails phonétiques de l\'utilisateur\'s last name.';
$string['privacy:metadata:mnet_external:maildigest'] = 'Un réglage pour le digest mail pour cet utilisateur.';
$string['privacy:metadata:mnet_external:maildisplay'] = 'Une préférence pour l\'utilisateur d\'afficher son adresse e-mail à d\'autres utilisateurs.';
$string['privacy:metadata:mnet_external:middlename'] = 'Le deuxième nom de l\'utilisateur';
$string['privacy:metadata:mnet_external:phone1'] = 'Un numéro de téléphone pour l\'utilisateur.';
$string['privacy:metadata:mnet_external:phone2'] = 'Un numéro de téléphone supplémentaire pour l\'utilisateur.';
$string['privacy:metadata:mnet_external:picture'] = 'Les détails de l\'image associés à cet utilisateur.';
$string['privacy:metadata:mnet_external:policyagreed'] = 'Un drapeau pour déterminer si l\'utilisateur a accepté la politique du site.';
$string['privacy:metadata:mnet_external:suspended'] = 'Un drapeau à afficher si l\'utilisateur a été suspendu sur ce système.';
$string['privacy:metadata:mnet_external:timezone'] = 'Le fuseau horaire de l\'utilisateur';
$string['privacy:metadata:mnet_external:trackforums'] = 'Une préférence pour les forums et leur suivi.';
$string['privacy:metadata:mnet_external:trustbitmask'] = 'Le masque de confiance';
$string['privacy:metadata:mnet_external:username'] = 'Le nom d\'utilisateur de cet utilisateur.';
$string['privacy:metadata:mnet_log'] = 'Détails des actions distantes effectuées par un utilisateur local connecté dans un système distant.';
$string['privacy:metadata:mnet_log:action'] = 'Action menée par l\'utilisateur.';
$string['privacy:metadata:mnet_log:cmid'] = 'ID du module de cours.';
$string['privacy:metadata:mnet_log:course'] = 'ID du cours du système à distance où l\'action s\'est produite.';
$string['privacy:metadata:mnet_log:coursename'] = 'Cours système à distance nom complet où l\'action s\'est produite.';
$string['privacy:metadata:mnet_log:hostid'] = 'Système distant MNet ID.';
$string['privacy:metadata:mnet_log:info'] = 'Informations complémentaires sur l\'action.';
$string['privacy:metadata:mnet_log:ip'] = 'L\'adresse IP utilisée au moment de l\'action s\'est produite.';
$string['privacy:metadata:mnet_log:module'] = 'Module système à distance où l\'action s\'est produite.';
$string['privacy:metadata:mnet_log:remoteid'] = 'ID distant de l\'utilisateur qui a effectué l\'action dans le système distant.';
$string['privacy:metadata:mnet_log:time'] = 'Quand l\'action a eu lieu.';
$string['privacy:metadata:mnet_log:url'] = 'URL du système distant où l\'action s\'est produite.';
$string['privacy:metadata:mnet_log:userid'] = 'ID local de l\'utilisateur qui a effectué l\'action dans le système distant.';
$string['privacy:metadata:mnet_session'] = 'Les détails de chaque session utilisateur MNet dans un système distant. Les données sont stockées temporairement.';
$string['privacy:metadata:mnet_session:expires'] = 'Heure à laquelle la session expire.';
$string['privacy:metadata:mnet_session:mnethostid'] = 'Système distant MNet ID.';
$string['privacy:metadata:mnet_session:token'] = 'Identifiant de session unique';
$string['privacy:metadata:mnet_session:useragent'] = 'Agent utilisateur utilisé pour accéder au système distant';
$string['privacy:metadata:mnet_session:userid'] = 'ID de l\'utilisateur qui saute au système distant.';
$string['privacy:metadata:mnet_session:username'] = 'Nom d\'utilisateur du système à distance.';
$string['unknownhost'] = 'Hôte inconnu';
