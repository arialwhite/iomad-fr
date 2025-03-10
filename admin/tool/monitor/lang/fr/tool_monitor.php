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
 * Lang strings.
 *
 * This files lists lang strings related to tool_monitor.
 *
 * @package    tool_monitor
 * @copyright  2014 onwards Ankit Agarwal <ankit.agrr@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addrule'] = 'Ajouter une nouvelle règle';
$string['allevents'] = 'Tous les événements';
$string['allmodules'] = 'Toutes les instances';
$string['area'] = 'Domaine';
$string['areatomonitor'] = 'Zone à surveiller';
$string['cachedef_eventsubscriptions'] = 'Ceci stocke la liste des abonnements événementiels pour les cours individuels';
$string['contactadmin'] = 'Contactez votre administrateur pour l\'activer.';
$string['core'] = 'Noyau';
$string['coresubsystem'] = 'Sous-système ({$a})';
$string['currentsubscriptions'] = 'Vos abonnements actuels';
$string['defaultmessagetemplate'] = 'Nom de la règle : {rulename}<br />Description : {description}<br />Nom de l\'événement : {eventname}';
$string['deleterule'] = 'Supprimer la règle';
$string['deletesubscription'] = 'Supprimer l\'abonnement';
$string['description'] = 'Exposé succinct:';
$string['disablefieldswarning'] = 'Certains champs ne peuvent pas être modifiés car cette règle a déjà des abonnements.';
$string['duplicaterule'] = 'Règle du double';
$string['editrule'] = 'Règle d\'édition';
$string['enablehelp'] = 'Activer/désactiver la surveillance des événements';
$string['enablehelp_help'] = 'La surveillance des événements doit être activée avant de pouvoir créer et s\'abonner aux règles. Notez que la surveillance de l\'événement peut affecter la performance de votre site.';
$string['event'] = 'Événement';
$string['eventnotfound'] = 'Événement non trouvé';
$string['eventrulecreated'] = 'Règle créée';
$string['eventruledeleted'] = 'Règle supprimée';
$string['eventruleupdated'] = 'Règle mise à jour';
$string['eventsubcreated'] = 'Abonnement créé';
$string['eventsubcriteriamet'] = 'Critères d\'abonnement satisfaits';
$string['eventsubdeleted'] = 'Abonnement supprimé';
$string['errorincorrectevent'] = 'Veuillez sélectionner un événement lié au plugin sélectionné';
$string['freqdesc'] = '{$a->freq} temps(s) dans {$a->mins} minute(s)';
$string['frequency'] = 'Seuil de notification';
$string['frequency_help'] = 'Le nombre d\'événements dans un délai déterminé requis pour l\'envoi d\'un message de notification.';
$string['inminutes'] = 'en minutes';
$string['invalidmodule'] = 'Module non valide';
$string['manageruleslink'] = 'Vous pouvez gérer les règles à partir de la page {$a}.';
$string['managesubscriptionslink'] = 'Vous pouvez vous abonner aux règles de la page {$a}.';
$string['manage'] = 'Gérer';
$string['managesubscriptions'] = 'Surveillance des événements';
$string['managerules'] = 'Règles de surveillance des événements';
$string['messageprovider:notification'] = 'Notification des abonnements aux règles';
$string['messagetemplate'] = 'Message de notification';
$string['messagetemplate_help'] = 'A notification message is sent to subscribers once the notification threshold has been reached. It can include any or all of the following placeholders:

* Link to the location of the event {link}
* Link to the area monitored {modulelink}
* Name of the course module {modulename}
* Rule name {rulename}
* Description {description}
* Event {eventname}
* Full name of the course {coursefullname}
* Short name of the course {courseshortname}';
$string['messagetemplate_link'] = 'Administration/outil/moniteur/gestion';
$string['moduleinstance'] = 'Décision';
$string['monitorenabled'] = 'La surveillance des événements est actuellement activée.';
$string['monitordisabled'] = 'La surveillance des événements est actuellement désactivée.';
$string['monitor:managerules'] = 'Gérer les règles de surveillance des événements';
$string['monitor:managetool'] = 'Activer/désactiver la surveillance des événements';
$string['monitor:subscribe'] = 'S\'abonner aux règles du moniteur d\'événements';
$string['norules'] = 'Il n\'y a pas de règles de surveillance des événements.';
$string['pluginname'] = 'Moniteur d\'événements';
$string['privacy:createdrules'] = 'Règles du moniteur d\'événements que j\'ai créées';
$string['privacy:metadata:description'] = 'Description de la règle';
$string['privacy:metadata:eventname'] = 'Nom complet de l\'événement';
$string['privacy:metadata:frequency'] = 'Fréquence des notifications';
$string['privacy:metadata:historysummary'] = 'Stocke l\'historique des notifications de message envoyées';
$string['privacy:metadata:inactivedate'] = 'Période, en jours, après laquelle un abonnement inactif sera complètement supprimé';
$string['privacy:metadata:lastnotificationsent'] = 'Quand une notification a été envoyée pour la dernière fois pour cet abonnement.';
$string['privacy:metadata:messagesummary'] = 'Les notifications sont envoyées au système de messages.';
$string['privacy:metadata:name'] = 'Nom de la règle';
$string['privacy:metadata:plugin'] = 'Nom Frankenstlye du plugin';
$string['privacy:metadata:rulessummary'] = 'Ce magasin surveille les règles.';
$string['privacy:metadata:subscriptionssummary'] = 'Stocks abonnements utilisateurs à diverses règles';
$string['privacy:metadata:template'] = 'Modèle de message';
$string['privacy:metadata:timecreatedrule'] = 'Quand cette règle a été créée';
$string['privacy:metadata:timecreatedsub'] = 'Lorsque cet abonnement a été créé';
$string['privacy:metadata:timemodifiedrule'] = 'Lorsque cette règle a été modifiée pour la dernière fois';
$string['privacy:metadata:timesent'] = 'Quand le message a été envoyé';
$string['privacy:metadata:timewindow'] = 'Fenêtre de temps en secondes';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur qui a créé la règle.';
$string['privacy:metadata:useridhistory'] = 'L\'identité de l\'utilisateur auquel cette notification a été envoyée';
$string['privacy:metadata:useridsub'] = 'L\'identité de l\'abonné.';
$string['privacy:subscriptions'] = 'Mes abonnements de moniteur d\'événements';
$string['processevents'] = 'Événements liés au processus';
$string['rulename'] = 'Nom de la règle';
$string['ruleareyousure'] = 'Voulez-vous vraiment supprimer la règle « {$a} » ?';
$string['ruleareyousureextra'] = 'Il y a {$a} abonnement(s) à cette règle qui sera également supprimé.';
$string['rulecopysuccess'] = 'Règle dupliquée avec succès';
$string['ruledeletesuccess'] = 'Règle supprimée avec succès';
$string['rulehelp'] = 'Détails des règles';
$string['rulehelp_help'] = 'Cette règle écoute quand l\'événement \'{$a->eventname}\' in \'{$a->eventcomponent}\' has been triggered {$a->frequency} time(s) in {$a->minutes} minute(s).';
$string['rulenopermission'] = 'Vous n\'avez pas la permission de vous abonner à aucun événement.';
$string['rulenopermissions'] = 'Vous n\'avez pas la permission de "{$a} une règle"';
$string['rulescansubscribe'] = 'Règles auxquelles vous pouvez souscrire';
$string['selectacourse'] = 'Sélectionnez un cours';
$string['selectcourse'] = 'Visitez ce rapport au niveau des cours pour obtenir une liste de modules possibles';
$string['subareyousure'] = 'Voulez-vous vraiment supprimer l\'abonnement à la règle « {$a} » ?';
$string['subcreatesuccess'] = 'Abonnement créé avec succès';
$string['subdeletesuccess'] = 'L\'abonnement a été supprimé avec succès';
$string['subhelp'] = 'Détails de l\'abonnement';
$string['subhelp_help'] = 'Cet abonnement écoute quand l\'événement \'{$a->eventname}\' has been triggered in \'{$a->moduleinstance}\' {$a->frequency} time(s) in {$a->minutes} minute(s).';
$string['subscribeto'] = 'Abonnez-vous à la règle « {$a} »';
$string['taskcleanevents'] = 'Événements du moniteur d\'événements de nettoyage';
$string['taskchecksubscriptions'] = 'Activer/désactiver les abonnements aux règles invalides';
$string['unsubscribe'] = 'Désabonnement';
