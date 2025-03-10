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
 * @package   block_iomad_microlearning
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actions'] = 'Actions';
$string['active'] = 'Actif';
$string['active_help'] = 'Si le thread n\'est pas actif, il n\'y aura aucun message envoyé aux utilisateurs et il ne sera pas visible sur leur tableau de bord';
$string['blocktitle'] = 'Fils de microapprentissage';
$string['bulkassigngroups'] = 'Attribuer les groupes de fils par CSV';
$string['clonethread'] = 'Fils de clone';
$string['clonethreadcheckfull'] = 'Voulez-vous vraiment cloner thread {$a} et toutes les pépites associées à un nouveau thread ? Ceci ne copie pas sur les utilisateurs actuellement assignés.';
$string['copy'] = '(copie)';
$string['cmid'] = 'ID du module de cours';
$string['cmid_help'] = 'Numéro du module de cours dans ce champ pour la section de cours unique. Vous devez définir cette valeur ou la valeur d\'ID de section.';
$string['cmidalreadyinuse'] = 'Module de cours ID est déjà utilisé';
$string['company_threads_for'] = 'Filets de microapprentissage pour l\'entreprise {$a}';
$string['company_users_for'] = 'Utilisateurs pour le fil de microapprentissage {$a}';
$string['creategroup'] = 'Créer un nouveau groupe';
$string['crontask'] = 'Microapprentissage de l\'IOMAD';
$string['defaultdue'] = 'Attendu après';
$string['defaultdue_help'] = 'C\'est le moment après lequel la pépite programmée devient due. Il peut être écrasé en modifiant le planning du thread.';
$string['deletegroup'] = 'Supprimer le groupe {$a}';
$string['deletegroupcheckfull'] = 'Voulez-vous supprimer le groupe {$a} ? Cela supprimera également tous les utilisateurs associés à ce groupe.';
$string['deletenugget'] = 'Supprimer la pépite';
$string['deletenuggetcheckfull'] = 'Voulez-vous vraiment supprimer nugget {$a}';
$string['deletethread'] = 'Supprimer le fil';
$string['deletethreadcheckfull'] = 'Voulez-vous vraiment supprimer complètement le thread {$a} et tous les nuggets et utilisateurs associés';
$string['duedate'] = 'Date d\'échéance';
$string['duedatebeforescheduledate'] = 'La date d\'échéance est antérieure à la date prévue';
$string['editgroup'] = 'Modifier le groupe';
$string['editnugget'] = 'Éditer la pépite';
$string['editthread'] = 'Modifier le thread';
$string['erroredgroups'] = 'Attributions de groupe incorrectes';
$string['group'] = 'Groupe de discussion';
$string['group_help'] = 'C\'est le groupe au sein du fil de microapprentissage auquel l\'utilisateur sera affecté.';
$string['groupcreatedok'] = 'Groupe a été créé avec succès';
$string['groupdeletedok'] = 'Groupe a été supprimé avec succès';
$string['groupupdatedok'] = 'Le groupe a été mis à jour avec succès';
$string['halt_until_fulfilled'] = 'Halte les messages jusqu\'à leur achèvement';
$string['halt_until_fulfilled_help'] = 'Réglez ceci à true si vous souhaitez arrêter d\'envoyer des messages jusqu\'à ce que la pépite précédente soit terminée.';
$string['importgroupsfromfile'] = 'Importer les attributions des groupes d\'utilisateurs de thread';
$string['importthread'] = 'Importer le fil';
$string['importthreadcheckfull'] = 'Voulez-vous vraiment importer le thread {$a} et toutes les pépites associées à un nouveau thread dans cette entreprise? Ceci ne copie pas sur les utilisateurs actuellement assignés.';
$string['importusergroups'] = 'Importer les groupes d\'utilisateurs de thread';
$string['incorrecturl'] = 'URL spécifiée n\'est pas dans ce site';
$string['interval'] = 'Intervalle de libération';
$string['interval_help'] = 'C\'est l\'intervalle par défaut entre les dates d\'horaire pour chaque pépites';
$string['ibnalidthreadid'] = 'Le fil que vous recherchez n\'existe pas.';
$string['iomad_microlearning:addinstance'] = 'Ajouter un bloc de microapprentissage';
$string['iomad_microlearning:assign_threads'] = 'Attribuer un utilisateur à un fil de microapprentissage';
$string['iomad_microlearning:importgroupfromcsv'] = 'Attribuer des groupes de threads aux utilisateurs via CSV';
$string['iomad_microlearning:manage_groups'] = 'Gérer les groupes de thread';
$string['iomad_microlearning:edit_nuggets'] = 'Modifier les pépites de microapprentissage';
$string['iomad_microlearning:edit_threads'] = 'Modifier les fils de microapprentissage';
$string['iomad_microlearning:import_threads'] = 'Importer des fils micorlearning';
$string['iomad_microlearning:myaddinstance'] = 'Ajouter un bloc de microapprentissage à mon tableau de bord';
$string['iomad_microlearning:thread_clone'] = 'Clone un fil de microapprentissage';
$string['iomad_microlearning:thread_delete'] = 'Supprimer un fil de microlearnng';
$string['iomad_microlearning:thread_view'] = 'Voir les fils de microapprentissage';
$string['iomad_microlearning:view'] = 'Voir le microapprentissage de l\'IOMAD';
$string['learninggroups'] = 'Gérer les groupes de thread';
$string['learningnuggets'] = 'Gérer les pépites';
$string['learningschedules'] = 'Gérer les horaires';
$string['learningusers'] = 'Gérer les utilisateurs de thread';
$string['message_preset'] = 'Envoyer un message après';
$string['message_preset_help'] = 'Entrez un délai en utilisant les unités fournies après quoi pour envoyer le message.';
$string['message_time'] = 'Envoyer l\'heure du message';
$string['message_time_help'] = 'Entrez une heure à laquelle le message sera envoyé.';
$string['microlearning'] = 'Microapprentissage';
$string['microlearninglinkexpires'] = 'Nombre de jours après l\'expiration du lien de messagerie';
$string['microlearninglinkexpires_help'] = 'C\'est le nombre de jours après lesquels le lien de microapprentissage envoyé à l\'utilisateur expirera et l\'utilisateur devra se connecter en utilisant le processus normal';
$string['missingname'] = 'Le nom de la pépite est manquant';
$string['missingsectionorcmid'] = 'Veuillez saisir une section de cours ou un ID de module de cours';
$string['namehelp'] = 'nom du groupe';
$string['namehelp_help'] = 'C\'est le nom de groupe utilisé dans le fil de microapprentissage. Les noms sont uniques dans les threads mais peuvent être réutilisés sur plusieurs threads';
$string['nameinuse'] = 'Nom déjà utilisé';
$string['nolearningthreads'] = 'Il n\'y a pas de fil de microapprentissage';
$string['nonuggets'] = 'Il n\'y a pas de pépites créées pour ce thread';
$string['nugget'] = 'Micro-apprentissage';
$string['nuggetcreated'] = 'Nugget de microapprentissage créé';
$string['nuggetcreatedok'] = 'Nugget créé OK';
$string['nuggetcupdatedok'] = 'Nugget mis à jour OK';
$string['nuggetdeleted'] = 'Nugget de microapprentissage supprimé';
$string['nuggetmoved'] = 'Ordre de la pépite de microapprentissage déplacé';
$string['nuggetname'] = 'Nom du pépin';
$string['nuggetname_help'] = 'Choisissez un nom unique pour la pépite d\'apprentissage';
$string['nuggetorder'] = 'Ordre';
$string['nuggets'] = 'Micro-apprentissage';
$string['nuggetupdated'] = 'Nugget de microapprentissage mis à jour';
$string['pluginname'] = 'Filets de microapprentissage de l\'IOMAD';
$string['privacy:metadata'] = 'L\'IOMAD Le bloc de microapprentissage ne présente que les données stockées dans d\'autres endroits.';
$string['privacy:metadata:microlearning_thread_user'] = 'Informations sur les données des utilisateurs du fil de microapprentissage. Aucune donnée à caractère personnel n\'est conservée.';
$string['privacy:metadata:microlearning_thread_user:id'] = 'Microlearning thread record id';
$string['privacy:metadata:microlearning_thread_user:userid'] = 'Microlearning thread userid';
$string['privacy:metadata:microlearning_thread_user:threadid'] = 'Fil de microapprentissage id';
$string['privacy:metadata:microlearning_thread_user:nuggetid'] = 'Microapprentissage thread nugget id';
$string['privacy:metadata:microlearning_thread_user:groupid'] = 'Microlearning thread groupe id';
$string['privacy:metadata:microlearning_thread_user:schedule_date'] = 'Fil de microapprentissage date prévue';
$string['privacy:metadata:microlearning_thread_user:due_date'] = 'Fil de microapprentissage date d\'échéance';
$string['privacy:metadata:microlearning_thread_user:reminder1_date'] = 'Fil de microapprentissage première date de rappel';
$string['privacy:metadata:microlearning_thread_user:reminder2_date'] = 'Fil de microapprentissage deuxième date de rappel';
$string['privacy:metadata:microlearning_thread_user:messagetime'] = 'Microlearning thread temps pour envoyer des messages après';
$string['privacy:metadata:microlearning_thread_user:message_delivered'] = 'Message de fil de microapprentissage fourni';
$string['privacy:metadata:microlearning_thread_user:reminder1_delivered'] = 'Fil de microapprentissage premier rappel fourni indicateur';
$string['privacy:metadata:microlearning_thread_user:reminder2_delivered'] = 'Fil de microapprentissage deuxième rappel fourni indicateur';
$string['privacy:metadata:microlearning_thread_user:timecompleted'] = 'Microlearning thread pépite temps terminé';
$string['privacy:metadata:microlearning_thread_user:accesskey'] = 'Microlearning thread e-mail access clé';
$string['privacy:metadata:microlearning_thread_user:timecreated'] = 'Temps de fil de microapprentissage créé';
$string['reminder1'] = 'Premier rappel';
$string['reminder1_help'] = 'Délai après lequel le premier rappel sera envoyé si la pépite n\'est pas marquée complète.';
$string['reminder2'] = 'Deuxième rappel';
$string['reminder2_help'] = 'Délai après lequel le deuxième rappel sera envoyé si la pépite n\'est pas marquée complète.';
$string['reminderdatebeforescheduledate'] = 'La date de rappel est antérieure à la date prévue';
$string['reminderdatesoutoforder'] = 'Les dates de rappel sont hors service';
$string['resetschedule'] = 'Réinitialiser le calendrier';
$string['resetschedulecheckfull'] = 'Voulez-vous réinitialiser complètement l\'horaire pour {$a} ?';
$string['scheduledate'] = 'Date prévue';
$string['scheduleoutoforder'] = 'Les dates de l\'horaire sont hors de commande';
$string['scheduletype'] = 'Type de calendrier';
$string['scheduletype_help'] = 'Cela contrôle la date de début que l\'utilisateur assigné obtiendra. La norme signifie qu\'ils sont ajoutés selon le calendrier défini. Commencer aujourd\'hui signifie qu\'ils seront programmés pour commencer le fil aujourd\'hui. Commencer sur le prochain programmé démarrera l\'utilisateur à la prochaine date prévue définie par le thread actuel.';
$string['sectionid'] = 'Numéro du cours';
$string['sectionid_help'] = 'Saisissez le numéro d\'identification de la section de cours dans ce champ pour la section de cours unique. Vous devez définir cette valeur ou la valeur CMID.';
$string['sectionidalreadyinuse'] = 'L\'identifiant de section est déjà utilisé';
$string['selectthread'] = 'Sélectionner le fil de microapprentissage';
$string['send_message'] = 'Envoyer un message';
$string['send_message_help'] = 'Définissez à true si vous voulez que des emails soient envoyés aux utilisateurs pour que des pépites soient programmées ou des rappels à compléter.';
$string['send_reminder'] = 'Envoyer un rappel';
$string['send_reminder_help'] = 'Définissez ceci à true si vous souhaitez envoyer des courriels de rappel aux utilisateurs assignés.';
$string['standard'] = 'Norme';
$string['startdate'] = 'Date de début';
$string['startdate_help'] = 'La date à laquelle le fil de microapprentissage sera programmé à partir de';
$string['startnextscheduled'] = 'Début du jour suivant';
$string['starttoday'] = 'Commencer aujourd\'hui';
$string['threadcreated'] = 'Fil de microapprentissage créé';
$string['threadcreatedok'] = 'Fil créé OK';
$string['threaddeleted'] = 'Fil de microapprentissage supprimé';
$string['threadname'] = 'Nom du fil';
$string['threadname_help'] = 'Le nom du fil de microapprentissage';
$string['threads'] = 'Fils de microapprentissage';
$string['threadschedule'] = 'Calendrier des travaux';
$string['threadscheduleresetok'] = 'Programme de réinitialisation OK';
$string['threadscheduleupdatedok'] = 'Calendrier des fils mis à jour OK';
$string['threadscheduleupdated'] = 'Mise à jour du calendrier des fils de microapprentissage';
$string['threadupdated'] = 'Mise à jour du fil de microapprentissage';
$string['threadupdatedok'] = 'Fil mis à jour OK';
$string['timecreated'] = 'Temps créé';
$string['updown'] = 'En haut/en bas';
$string['uploadgroupresult'] = 'Télécharger le résultat des groupes';
$string['userassigned'] = 'Utilisateur assigné';
$string['userunassigned'] = 'Utilisateur non assigné';
$string['url'] = 'URL';
$string['url_help'] = 'Spécifiez plutôt une URL du site';
$string['microllinkexpires'] = 'Microlearning email link expire';
$string['microllinkexpires_help'] = 'C\'est la durée après laquelle le lien envoyé par e-mail ne connectera pas automatiquement l\'utilisateur.';
