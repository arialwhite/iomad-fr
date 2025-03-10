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
 * Language File.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 */
defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Vous avez des sessions BigBlueButton à venir';
$string['credentials_warning'] = 'L\'utilisation des identifiants de serveur par défaut expirera bientôt (voir note ci-dessus pour obtenir de nouveaux identifiants).';
$string['bbbduetimeoverstartingtime'] = 'Le temps de fermeture doit être plus tard que le temps libre.';
$string['bbbdurationwarning'] = 'La durée maximale de cette session est de %durée% minutes.';
$string['bbbrecordwarning'] = 'Cette session peut être enregistrée.';
$string['bbbrecordallfromstartwarning'] = 'Cette session est enregistrée dès le début.';
$string['bigbluebuttonbn:addinstance'] = 'Ajouter une nouvelle chambre BigBlueButton';
$string['bigbluebuttonbn:join'] = 'Rejoignez une chambre BigBlueButton';
$string['bigbluebuttonbn:view'] = 'Vue Chambre BigBlueButton';
$string['bigbluebuttonbn:addinstancewithmeeting'] = 'Créer une instance de sessions en direct';
$string['bigbluebuttonbn:addinstancewithrecording'] = 'Créer une instance avec des enregistrements';
$string['bigbluebuttonbn:managerecordings'] = 'Gérer les enregistrements';
$string['bigbluebuttonbn:publishrecordings'] = 'Publier des enregistrements';
$string['bigbluebuttonbn:unpublishrecordings'] = 'Enregistrements non publiés';
$string['bigbluebuttonbn:protectrecordings'] = 'Protéger les enregistrements';
$string['bigbluebuttonbn:unprotectrecordings'] = 'Enregistrements non protégés';
$string['bigbluebuttonbn:deleterecordings'] = 'Supprimer les enregistrements';
$string['bigbluebuttonbn:importrecordings'] = 'Importer des enregistrements';
$string['bigbluebuttonbn:seepresentation'] = 'Voir toujours le fichier de présentation sur la page d\'activité';
$string['bigbluebuttonbn:viewallrecordingformats'] = 'Afficher tous les formats d\'enregistrement';
$string['bigbluebuttonbn'] = 'Grand Bouton Bleu';
$string['cannotperformaction'] = 'Impossible d\'exécuter l\'action {$a} sur cet enregistrement';
$string['indicator:cognitivedepth'] = 'BigBlueButton cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité BigBlueButton.';
$string['indicator:socialbreadth'] = 'BigBlueButton social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité BigBlueButton.';
$string['modulename'] = 'Grand Bouton Bleu';
$string['modulenameplural'] = 'Grand Bouton Bleu';
$string['modulename_help'] = 'BigBlueButton is an open-source web conferencing system designed for online learning, which supports real-time sharing of audio, video, chat, slides, screen sharing, a multi-user whiteboard, breakout rooms, polling and emojis.

Using BigBlueButton you can create a room for sessions such as live online classes, virtual office hours or group collaboration with remote students. The session can be recorded for later playback.';
$string['modulename_link'] = 'BigBlueButton/Vue';
$string['nosuchinstance'] = 'Aucune instance de ce type {$a->entity} avec ID {$a->id}';
$string['pluginadministration'] = 'Administration de BigBlueButton';
$string['pluginname'] = 'Grand Bouton Bleu';

$string['removedevents'] = 'Événements supprimés';
$string['removedtags'] = 'Balises supprimées';
$string['removedlogs'] = 'Supprimé les journaux personnalisés';
$string['removedrecordings'] = 'Enregistrements supprimés';
$string['resetevents'] = 'Supprimer les événements';
$string['resettags'] = 'Supprimer les balises';
$string['resetlogs'] = 'Supprimer les journaux personnalisés';
$string['resetrecordings'] = 'Supprimer les enregistrements';
$string['resetlogs_help'] = 'La suppression des journaux entraînera une perte de références aux enregistrements.';
$string['resetrecordings_help'] = 'Supprimer les enregistrements les rendra inaccessibles de n\'importe où. Cette action ne peut être annulée !';

$string['search:activity'] = 'BigBlueButton - informations d\'activité';
$string['search:tags'] = 'BigBlueButton - informations tags';
$string['settings'] = 'Paramètres BigBlueButton';

$string['settings_credential_warning_no_capability'] = 'Les identifiants du serveur BigBlueButton expireront bientôt. Veuillez contacter votre administrateur du site.';
$string['settings_credential_warning'] = 'Les identifiants du serveur BigBlueButton expireront bientôt. Voir le lien <a href="{$a->settingslink}"cible="blank"> Paramètres généraux de BigBlueButton (ouvre dans une nouvelle fenêtre)</a>.';

$string['privacy:metadata:bigbluebuttonbn'] = 'Configuration de la session BigBlueButton';
$string['privacy:metadata:bigbluebuttonbn:participants'] = 'Une liste de règles qui définissent le rôle des utilisateurs aura dans la session BigBlueButton. Un ID utilisateur peut être stocké comme permissions peuvent être accordées par rôle ou par utilisateur.';
$string['privacy:metadata:bigbluebuttonbn_logs'] = 'Stocke les événements déclenchés lors de l\'utilisation du plugin.';
$string['privacy:metadata:bigbluebuttonbn_logs:userid'] = 'L\'identifiant de l\'utilisateur qui a déclenché l\'événement.';
$string['privacy:metadata:bigbluebuttonbn_logs:timecreated'] = 'Le moment où le journal a été créé.';
$string['privacy:metadata:bigbluebuttonbn_logs:meetingid'] = 'L\'identifiant de session auquel l\'utilisateur avait accès.';
$string['privacy:metadata:bigbluebuttonbn_logs:log'] = 'Le type d\'événement déclenché par l\'utilisateur.';
$string['privacy:metadata:bigbluebuttonbn_logs:meta'] = 'Informations supplémentaires concernant la session ou l\'enregistrement.';
$string['privacy:metadata:bigbluebutton'] = 'Pour créer et rejoindre des sessions BigBlueButton, les données utilisateur doivent être échangées avec le serveur.';
$string['privacy:metadata:bigbluebutton:userid'] = 'L\'identifiant de l\'utilisateur accédant au serveur BigBlueButton.';
$string['privacy:metadata:bigbluebutton:fullname'] = 'Le nom complet de l\'utilisateur accédant au serveur BigBlueButton.';
$string['privacy:metadata:bigbluebuttonbn_recordings'] = 'Stocke des métadonnées sur les enregistrements.';
$string['privacy:metadata:bigbluebuttonbn_recordings:userid'] = 'L\'identifiant de l\'utilisateur qui a modifié un enregistrement pour la dernière fois.';

$string['completionattendance'] = 'Besoin d\'assistance (minutes)';
$string['completionattendance_desc'] = 'Entrez et restez dans la chambre pendant au moins {$a} minute(s).';
$string['completionattendance_event_desc'] = 'L\'étudiant est entré dans la salle et est resté dans la session pendant au moins {$a} minute(s)';
$string['completionattendancegroup'] = 'Besoin d\'assistance (minutes)';

$string['completionengagementchats'] = 'Chats';
$string['completionengagementchats_desc'] = 'Participer à {$a} chat(s).';
$string['completionengagementchats_event_desc'] = 'A soulevé {$a} chat(s)';
$string['completionengagementtalks'] = 'Parle';
$string['completionengagementtalks_desc'] = 'Parler {$a} heure(s)';
$string['completionengagementtalks_event_desc'] = 'A soulevé {$a} conversation(s)';
$string['completionengagementraisehand'] = 'Besoin de main levée';
$string['completionengagementraisehand_desc'] = 'Levez la main {$a} time(s).';
$string['completionengagementraisehand_event_desc'] = 'A levé la main {$a} fois';
$string['completionengagementpollvotes'] = 'Élections';
$string['completionengagementpollvotes_desc'] = 'Voter dans les bureaux de vote {$a} heure(s).';
$string['completionengagementpollvotes_event_desc'] = 'A répondu {$a} vote(s)';
$string['completionengagementemojis'] = 'Émojis';
$string['completionengagementemojis_desc'] = 'Changez leur heure(s) emoji {$a}.';
$string['completionengagementemojis_event_desc'] = 'Change leur heure(s) emoji {$a}';

$string['completionengagement_desc'] = 'Participer aux activités de la réunion.';
$string['completionengagementgroup'] = 'Exiger une participation';

$string['completionupdatestate'] = 'État de mise à jour';
$string['completionvalidatestate'] = 'Valider l\'achèvement';
$string['completionvalidatestatetriggered'] = 'La validation a été déclenchée.';

$string['completionview_event_desc'] = 'A vu la chambre.';
$string['sendnotification'] = 'Envoyer une notification';

$string['minute'] = 'minute';
$string['minutes'] = 'minutes';


$string['config_guestaccess_enabled'] = 'Accès externe aux clients';
$string['config_guestaccess_enabled_description'] = 'Permettre aux utilisateurs sans compte sur votre site d\'accéder à la chambre.';

$string['config_general'] = 'Paramètres généraux';
$string['config_general_description'] = 'Pour configurer BigBlueButton, vous pouvez soit utiliser votre propre serveur BigBlueButton et vos identifiants, soit obtenir des identifiants via <a href="https://registration-portal.aveuglessidenetworks.com/"target="_blank"> Portail d\'inscription des réseaux blindside (ouvre dans une nouvelle fenêtre)</a>.';
$string['config_profile_picture_enabled'] = 'Afficher les images de profil';
$string['config_profile_picture_enabled_description'] = 'Les photos de profil des participants devraient-elles être montrées dans les séances de BigBlueButton?';
$string['config_server_url'] = 'URL du serveur BigBlueButton';
$string['config_server_url_description'] = 'L\'URL de votre serveur BigBlueButton.';
$string['config_shared_secret'] = 'BigBlueButton partage le secret';
$string['config_shared_secret_description'] = 'Le secret de sécurité de votre serveur BigBlueButton.';
$string['config_checksum_algorithm'] = 'Algorithme de contrôle du serveur BigBlueButton';
$string['config_checksum_algorithm_description'] = 'SHA1 est compatible avec les anciens serveurs. SHA256 et SHA512 sont plus sécurisés. SHA512 est conforme à FIPS 140-2.';

$string['config_recording'] = 'Enregistrement';
$string['config_recording_description'] = 'Ces paramètres sont spécifiques';
$string['config_recording_default'] = 'Enregistrement activé par défaut';
$string['config_recording_default_description'] = 'Si le réglage \'Session can be recorded\' be enabled by default when adding a new BigBlueButton room?';
$string['config_recording_editable'] = 'La session peut être enregistrée modifiable';
$string['config_recording_editable_description'] = 'Devrait \'Session can be recorded\' be editable in the BigBlueButton activity settings?';
$string['config_recording_protect_editable'] = 'L\'état des enregistrements protégés peut être modifié';
$string['config_recording_protect_editable_description'] = 'Si cochée, l\'interface comprend une option de protection/détection des enregistrements.';
$string['config_recording_all_from_start_default'] = 'Démarrer l\'enregistrement dès le début';
$string['config_recording_all_from_start_default_description'] = 'Si le réglage \'Start recording from the beginning\' be enabled by default when adding a new BigBlueButton room?';
$string['config_recording_all_from_start_editable'] = 'Démarrer l\'enregistrement depuis le début de l\'édition';
$string['config_recording_all_from_start_editable_description'] = 'Devrait \'Start recording from the beginning\' be editable in the BigBlueButton activity settings?';
$string['config_recording_hide_button_default'] = 'Cacher le bouton d\'enregistrement';
$string['config_recording_hide_button_default_description'] = 'Si coché le bouton pour enregistrer sera caché';
$string['config_recording_hide_button_editable'] = 'Cacher le bouton d\'enregistrement modifiable';
$string['config_recording_hide_button_editable_description'] = 'Devrait \'Hide recording button\' be editable in the BigBlueButton activity settings?';
$string['config_recording_refresh_period'] = 'Période de rafraîchissement (en secondes)';
$string['config_recording_refresh_period_description'] = 'Combien de fois faut-il demander au serveur BigBlueButton pour actualiser les informations distantes pour un enregistrement ?';
$string['config_recordings'] = 'Afficher les enregistrements';
$string['config_recordings_description'] = 'Ces paramètres sont spécifiques';
$string['config_recordings_general'] = 'Afficher les paramètres d\'enregistrement';
$string['config_recordings_general_description'] = 'Ces paramètres sont utilisés uniquement lors de l\'affichage des enregistrements';
$string['config_recordings_deleted_default'] = 'Inclure les enregistrements des activités supprimées activés par défaut';
$string['config_recordings_deleted_default_description'] = 'Si activé, la table d\'enregistrement comprendra des enregistrements de toute activité qui a depuis été supprimée.';
$string['config_recordings_deleted_editable'] = 'Inclure les enregistrements des activités supprimées fonctionnalité peut être édité';
$string['config_recordings_deleted_editable_description'] = 'Inclure les enregistrements des activités supprimées par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';
$string['config_recordings_imported_default'] = 'Afficher uniquement les liens importés activés par défaut';
$string['config_recordings_imported_default_description'] = 'Si activé, la table d\'enregistrement comprendra seulement les liens importés vers les enregistrements.';
$string['config_recordings_imported_editable'] = 'Afficher seulement la fonctionnalité de liens importés peut être modifiée';
$string['config_recordings_imported_editable_description'] = 'Afficher uniquement les liens importés par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';
$string['config_recordings_preview_default'] = 'L\'aperçu est activé par défaut';
$string['config_recordings_preview_default_description'] = 'Si activé, le tableau comprend un aperçu de la présentation.';
$string['config_recordings_preview_editable'] = 'Fonction de prévisualisation peut être modifié';
$string['config_recordings_preview_editable_description'] = 'La fonction Aperçu peut être modifiée lorsque l\'instance est ajoutée ou mise à jour.';
$string['config_recordings_asc_sort'] = 'Lister les enregistrements par ordre chronologique';
$string['config_recordings_asc_sort_description'] = 'Les enregistrements sont classés par date, ordre chronologique ou ordre chronologique inverse (le plus récent enregistrement en premier).';

$string['config_recording_safe_formats'] = 'Formats d\'enregistrement visibles par tout le monde';
$string['config_recording_safe_formats_description'] = 'Select the formats which are viewable by everyone.
All other formats are only viewable by teachers and other users with the mod/bigbluebuttonbn:viewallrecordingformats and
 mod/bigbluebuttonbn:managerecordings capabilities.';

$string['config_importrecordings'] = 'Importer des enregistrements';
$string['config_importrecordings_description'] = 'Ces paramètres sont spécifiques.';
$string['config_importrecordings_enabled'] = 'Enregistrements d\'importation activés';
$string['config_importrecordings_enabled_description'] = 'Lorsque cela et la fonction d\'enregistrement sont activés, il est possible d\'importer des enregistrements de différents cours dans une activité.';
$string['config_importrecordings_from_deleted_enabled'] = 'Importer des enregistrements d\'activités supprimées activés';
$string['config_importrecordings_from_deleted_enabled_description'] = 'Lorsque cela et la fonction d\'enregistrement d\'importation sont activés, il est possible d\'importer des enregistrements d\'activités qui ne sont plus dans le cours.';

$string['config_waitformoderator'] = 'Attendez le modérateur';
$string['config_waitformoderator_description'] = 'Ces paramètres sont spécifiques';
$string['config_waitformoderator_default'] = 'Attendez le modérateur activé par défaut';
$string['config_waitformoderator_default_description'] = 'Si le réglage \'Wait for moderator\' be enabled by default when adding a new BigBlueButton room?';
$string['config_waitformoderator_editable'] = 'Attendez que le modérateur soit modifiable';
$string['config_waitformoderator_editable_description'] = 'Devrait \'Wait for moderator\' be editable in the BigBlueButton activity settings?';
$string['config_waitformoderator_ping_interval'] = 'Attendez le modérateur (secondes)';
$string['config_waitformoderator_ping_interval_description'] = 'À quelle fréquence le serveur doit-il être pingé pour vérifier si le modérateur est entré dans la pièce ?';
$string['config_waitformoderator_cache_ttl'] = 'Attendez le cache modérateur TTL (secondes)';
$string['config_waitformoderator_cache_ttl_description'] = 'Pour supporter une lourde charge de clients, ce plugin utilise un cache. Ce paramètre définit l\'heure à laquelle le cache sera conservé avant que la prochaine requête ne soit envoyée au serveur BigBlueButton.';

$string['config_voicebridge'] = 'Pont vocal';
$string['config_voicebridge_description'] = 'Ces paramètres activent ou désactivent les options dans l\'interface utilisateur et définissent également les valeurs par défaut pour ces options.';
$string['config_voicebridge_editable'] = 'La passerelle vocale de la conférence peut être modifiée';
$string['config_voicebridge_editable_description'] = 'Un numéro de passerelle vocale de conférence peut être attribué de façon permanente à une pièce. Lorsqu\'il est attribué, le numéro ne peut être utilisé pour aucune autre pièce.';

$string['config_preuploadpresentation'] = 'Dossier de présentation';
$string['config_preuploadpresentation_description'] = 'Ces paramètres activent ou désactivent les options dans l\'interface utilisateur et définissent également les valeurs par défaut pour ces options. La fonctionnalité ne fonctionne que si le serveur Moodle est accessible à BigBlueButton.';
$string['config_preuploadpresentation_editable'] = 'Dossier de présentation sur la page d\'activité';
$string['config_preuploadpresentation_editable_description'] = 'Option dans les paramètres d\'activité pour télécharger le fichier de présentation pour afficher sur la page d\'activité.';

$string['config_presentation_default'] = 'Fichier de présentation par défaut';
$string['config_presentation_default_description'] = 'Un dossier peut être fourni dans toutes les chambres.';

$string['config_showpresentation_default'] = 'Afficher le fichier de présentation sur la page d\'activité';
$string['config_showpresentation_default_description'] = 'Les étudiants devraient-ils avoir accès au dossier de présentation avant la séance? Ce réglage n\'a aucun effet sur les utilisateurs ayant la capacité \'Always see presentation file on activity page\' .';
$string['config_showpresentation_editable'] = '\'Show presentation file on activity page\' option';
$string['config_showpresentation_editable_description'] = 'Option dans les paramètres d\'activité pour les enseignants de choisir de montrer le fichier de présentation aux étudiants.';

$string['config_participant'] = 'Participants';
$string['config_participant_description'] = 'Ces paramètres définissent le rôle par défaut des participants.';
$string['config_participant_moderator_default'] = 'Animateur';
$string['config_participant_moderator_default_description'] = 'Cette règle est utilisée par défaut lorsqu\'une nouvelle pièce est ajoutée.';

$string['config_poll_interval'] = 'Intervalle de scrutin (en secondes) pour rafraîchir la salle\'s status';
$string['config_poll_interval_description'] = 'L\'intervalle de sondage doit être d\'au moins 2 secondes. Si nécessaire, vous pouvez réduire la charge sur le serveur distant en augmentant l\'intervalle.';

$string['config_userlimit'] = 'Limite de l\'utilisateur';
$string['config_userlimit_description'] = 'Ces paramètres activent ou désactivent les options dans l\'interface utilisateur et définissent également les valeurs par défaut pour ces options.';
$string['config_userlimit_default'] = 'Limite utilisateur activée par défaut';
$string['config_userlimit_default_description'] = 'Le nombre d\'utilisateurs autorisés dans une session par défaut lorsqu\'une nouvelle salle est ajoutée. Régler à 0 pour permettre un nombre illimité d\'utilisateurs.';
$string['config_userlimit_editable'] = 'La fonction limite utilisateur peut être modifiée';
$string['config_userlimit_editable_description'] = 'La valeur limite par défaut peut être modifiée lorsque la salle ou la conférence est ajoutée ou mise à jour.';

$string['config_scheduled'] = 'Séances prévues au calendrier';
$string['config_scheduled_description'] = 'Ces paramètres définissent le comportement par défaut pour les sessions programmées.';
$string['config_scheduled_pre_opening'] = 'Accessible avant l\'ouverture';
$string['config_scheduled_pre_opening_description'] = 'L\'heure en minutes où la salle est ouverte avant l\'heure d\'ouverture prévue.';

$string['config_extended_capabilities'] = 'Capacités étendues';
$string['config_extended_capabilities_description'] = 'Configuration pour des fonctionnalités étendues lorsque le serveur BigBlueButton les offre.';
$string['config_uidelegation_enabled'] = 'La délégation de l\'assurance-chômage est activée';
$string['config_uidelegation_enabled_description'] = 'Ces paramètres permettent ou désactivent la délégation de l\'interface utilisateur vers le serveur BigBlueButton.';
$string['config_recordingready_enabled'] = 'Envoyer la notification d\'enregistrement disponible';
$string['config_recordingready_enabled_description'] = 'Si activé, une notification sera envoyée lorsqu\'un lien d\'enregistrement est disponible. Cette fonctionnalité nécessite que le script post_publish_recording_ready_callback soit activé sur le serveur BigBlueButton.';
$string['config_meetingevents_enabled'] = 'Inscription des sessions en direct';
$string['config_meetingevents_enabled_description'] = 'Si activé, les sessions en direct seront traitées après la fin de la session. Cette fonctionnalité est requise pour l\'achèvement de l\'activité et ne fonctionnera que si le serveur BigBlueButton est capable de traiter les scripts post_events.';

$string['config_warning_curl_not_installed'] = 'Cette fonctionnalité nécessite l\'extension CURL pour php installé et activé. Les paramètres ne seront accessibles que si cette condition est remplie.';
$string['config_warning_bigbluebuttonbn_cfg_deprecated'] = 'BigBlueButton utilise la configuration. php avec une variable globale qui a été obsolète. Veuillez convertir le fichier car il ne sera pas pris en charge dans les versions futures.';

$string['config_muteonstart'] = 'Mute au début';
$string['config_muteonstart_description'] = 'Ces paramètres activent ou désactivent les options dans l\'interface utilisateur et définissent également les valeurs par défaut pour ces options.';
$string['config_muteonstart_default'] = 'Mute au démarrage activé par défaut';
$string['config_muteonstart_default_description'] = 'Si activé, la session sera mutée au début.';
$string['config_muteonstart_editable'] = 'Mute au démarrage peut être modifié';
$string['config_muteonstart_editable_description'] = 'Mute au début par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';
$string['config_welcome_default'] = 'Message de bienvenue par défaut';
$string['config_welcome_default_description'] = 'Le message de bienvenue s\'affiche lorsque les participants entrent dans la salle. Si le champ est laissé vide, la chaîne de langage \'mod_form_field_welcome_default\' is used.';
$string['config_welcome_editable'] = 'Le message de bienvenue par défaut est modifiable par les enseignants';
$string['config_welcome_editable_description'] = 'Le message de bienvenue peut être modifié lorsque l\'instance est ajoutée ou mise à jour';
$string['config_default_messages'] = 'Messages par défaut';
$string['config_default_messages_description'] = 'Définir les messages par défaut pour les activités';

$string['config_locksettings'] = 'Configuration pour les paramètres de verrouillage';
$string['config_locksettings_description'] = 'Ces paramètres activent ou désactivent les options dans l\'interface utilisateur pour verrouiller les paramètres, et définissent également les valeurs par défaut pour ces options.';

$string['config_disablecam_default'] = 'Désactiver la webcam activée par défaut';
$string['config_disablecam_default_description'] = 'Si activé, les webcams seront désactivées.';
$string['config_disablecam_editable'] = 'Désactiver la webcam peut être modifié';
$string['config_disablecam_editable_description'] = 'Désactiver la webcam par défaut peut être édité lorsque l\'instance est ajoutée ou mise à jour.';

$string['config_disablemic_default'] = 'Désactiver le micro activé par défaut';
$string['config_disablemic_default_description'] = 'Si activé, les microphones seront désactivés.';
$string['config_disablemic_editable'] = 'Désactiver le micro peut être modifié';
$string['config_disablemic_editable_description'] = 'Désactiver le micro par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';

$string['config_disableprivatechat_default'] = 'Désactiver le chat privé activé par défaut';
$string['config_disableprivatechat_default_description'] = 'Si activé, le chat privé sera désactivé.';
$string['config_disableprivatechat_editable'] = 'Désactiver le chat privé peut être modifié';
$string['config_disableprivatechat_editable_description'] = 'Désactiver le chat privé par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';

$string['config_disablepublicchat_default'] = 'Désactiver le chat public activé par défaut';
$string['config_disablepublicchat_default_description'] = 'Si activé, le chat public sera désactivé.';
$string['config_disablepublicchat_editable'] = 'Désactiver le chat public peut être édité';
$string['config_disablepublicchat_editable_description'] = 'Désactiver le chat public par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';

$string['config_disablenote_default'] = 'Désactiver les notes partagées activées par défaut';
$string['config_disablenote_default_description'] = 'Si activé, les notes partagées seront désactivées.';
$string['config_disablenote_editable'] = 'Désactiver les notes partagées peut être modifié';
$string['config_disablenote_editable_description'] = 'Désactiver les notes partagées par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';

$string['config_hideuserlist_default'] = 'Masquer la liste des utilisateurs activée par défaut';
$string['config_hideuserlist_default_description'] = 'Si activé, la liste des utilisateurs de la session sera cachée.';
$string['config_hideuserlist_editable'] = 'Masquer la liste des utilisateurs peut être modifié';
$string['config_hideuserlist_editable_description'] = 'Cacher la liste des utilisateurs par défaut peut être modifié lorsque l\'instance est ajoutée ou mise à jour.';

$string['config_experimental_features'] = 'Caractéristiques expérimentales';
$string['config_experimental_features_description'] = 'Configuration pour les fonctions expérimentales.';

$string['general_error_unable_connect'] = 'Unable to connect. Please check the url of the BigBlueButton server AND check to see if the BigBlueButton server is running.
Details : {$a}';
$string['general_error_no_answer'] = 'Réponse vide. Vérifiez l\'url du serveur BigBlueButton ET vérifiez si le serveur BigBlueButton fonctionne.';
$string['general_error_not_allowed_to_create_instances'] = 'L\'utilisateur n\'est pas autorisé à créer un type d\'instance.';
$string['general_error_not_found'] = 'Impossible de trouver l\'activité BigBlueButton avec ID {$a}.';
$string['general_error_cannot_create_meeting'] = 'Impossible de créer une session.';
$string['general_error_cannot_get_recordings'] = 'Il n\'y a pas d\'enregistrement.';
$string['guestaccess_add'] = 'Ajouter des invités';
$string['guestaccess_add_no_id'] = 'Aucun ID d\'instance BigBlueButton fourni.';
$string['guestaccess_emails'] = 'E-mails clients';
$string['guestaccess_emails_help'] = 'Une liste d\'adresses email, séparées par des virgules.';
$string['guestaccess_emails_invalidemail'] = 'Courriel non valide: {$a}';
$string['guestaccess_username'] = 'Nom d\'utilisateur invité';
$string['guestaccess_meeting_link'] = 'Lien de réunion';
$string['guestaccess_meeting_password'] = 'Mot de passe de la réunion';
$string['guestaccess_password'] = 'Mot de passe';
$string['guestaccess_meeting_not_started'] = 'La réunion n\'a pas encore commencé. Revenez plus tard.';
$string['guestaccess_meeting_invalid_password'] = 'Mot de passe incorrect.';
$string['guestaccess_activitynotfound'] = 'Activité introuvable.';
$string['guestaccess_feature_disabled'] = 'Accès aux clients handicapés.';
$string['guestaccess_title']  = 'Ajouter des invités à cette réunion';
$string['guestaccess_copy_link'] = 'Copier le lien';
$string['guestaccess_copy_password'] = 'Copier le mot de passe';
$string['guestaccess_invite_success'] = 'Une invitation sera envoyée à {$a->emails}.';
$string['guestaccess_invite_failure'] = 'Erreur {$a->erreurs} lors de l\'invitation {$a->emails}.';
$string['guestaccess_join_meeting'] = 'Rejoindre la réunion';
$string['guest_invitation_subject'] = 'Invitation : session {$a->nom} dans {$a->nom_de_course}';
$string['guest_invitation_small_message'] = 'Hi,

You are invited to a BigBlueButton session {$a->name} in the course {$a->course_fullname}.

Link: {$a->guestjoinurl}
Password: {$a->guestpassword}

If you need help, please contact {$a->sender}.';
$string['guest_invitation_full_message'] = 'Hi,
<p>You are invited to a BigBlueButton session <strong>{$a->name}</strong> in the course {$a->course_fullname}.</p>
<p>Link: {$a->guestjoinurl}<br/>
<p>Password: {$a->guestpassword}</p>
<p>If you need help, please contact {$a->sender}.</p>';

$string['index_confirm_end'] = 'Voulez-vous terminer la séance ?';
$string['index_disabled'] = 'handicapés';
$string['index_enabled'] = 'activé';
$string['index_ending'] = 'Fin de la session ... Veuillez patienter';
$string['index_error_checksum'] = 'Une erreur de somme de contrôle s\'est produite. Veuillez vérifier que vous avez saisi le bon secret.';
$string['index_error_forciblyended'] = 'Impossible de rejoindre la session car elle a été terminée manuellement.';
$string['index_error_unable_display'] = 'Impossible d\'afficher les sessions. Vérifiez l\'url du serveur BigBlueButton ET vérifiez si le serveur BigBlueButton fonctionne.';
$string['index_heading_actions'] = 'Actions';
$string['index_heading_group'] = 'Groupe';
$string['index_heading_moderator'] = 'Animateurs';
$string['index_heading_name'] = 'Salle';
$string['index_heading_recording'] = 'Enregistrement';
$string['index_heading_users'] = 'Utilisateur';
$string['index_heading_viewer'] = 'Affichages';
$string['index_heading'] = 'Chambres BigBlueButton';
$string['instanceprofilewithoutrecordings'] = 'Ce profil d\'instance ne peut pas afficher les enregistrements';
$string['managebbbextplugins'] = 'Gérer les plugins d\'extension BigBlueButton';
$string['mod_form_block_general'] = 'Généralités';
$string['mod_form_block_guestaccess'] = 'Accès aux clients';
$string['mod_form_block_room'] = 'Paramètres de la chambre';
$string['mod_form_block_recordings'] = 'Vue d\'enregistrement';
$string['mod_form_block_presentation'] = 'Présentation';
$string['mod_form_block_presentation_default'] = 'Contenu par défaut de présentation';
$string['mod_form_block_participants'] = 'Rôle assigné pendant la session en direct';
$string['mod_form_block_schedule'] = 'Horaire des séances';
$string['mod_form_block_record'] = 'Paramètres d\'enregistrement';
$string['mod_form_field_openingtime'] = 'Ouvrir';
$string['mod_form_field_closingtime'] = 'Fermer';
$string['mod_form_field_intro'] = 'Désignation des marchandises';
$string['mod_form_field_intro_help'] = 'Une brève description de la pièce.';
$string['mod_form_field_duration_help'] = 'Fixer la durée d\'une réunion déterminera le temps maximum pour une réunion de rester en vie avant la fin de l\'enregistrement';
$string['mod_form_field_duration'] = 'Durée';
$string['mod_form_field_guestallowed'] = 'Permettre l\'accès aux invités';
$string['mod_form_field_mustapproveuser'] = 'Les participants doivent être admis par un modérateur';
$string['mod_form_field_userlimit'] = 'Limite de l\'utilisateur';
$string['mod_form_field_userlimit_help'] = 'Le nombre maximum d\'utilisateurs autorisés dans une session. Régler à 0 pour permettre un nombre illimité d\'utilisateurs.';
$string['mod_form_field_name'] = 'Nom de la chambre';
$string['mod_form_field_room_name'] = 'Nom de la chambre';
$string['mod_form_field_conference_name'] = 'Nom de la séance';
$string['mod_form_field_record'] = 'La session peut être enregistrée.';
$string['mod_form_field_voicebridge'] = 'Pont vocal [###]';
$string['mod_form_field_voicebridge_help'] = 'Un numéro entre 1 et 9999 que les participants entrent pour rejoindre la session vocale lors de l\'utilisation de la ligne commutée. Si la valeur est 0, le numéro du pont vocal statique sera ignoré et un nombre aléatoire sera généré par BigBlueButton. Un numéro 7 préfixe les quatre chiffres tapés.';
$string['mod_form_field_voicebridge_format_error'] = 'Erreur de format. Vous devriez entrer un nombre entre 1 et 9999.';
$string['mod_form_field_voicebridge_notunique_error'] = 'Pas une valeur unique. Ce numéro est utilisé par une autre pièce.';
$string['mod_form_field_wait'] = 'Attendez le modérateur';
$string['mod_form_field_wait_help'] = 'Les participants doivent-ils attendre un modérateur avant de pouvoir entrer dans la salle?';
$string['mod_form_field_welcome'] = 'Message de bienvenue';
$string['mod_form_field_welcome_help'] = 'Le message de bienvenue s\'affiche lorsque les participants entrent dans la salle. Si le champ est laissé vide, un message par défaut dans l\'administration du site s\'affiche.';
$string['mod_form_field_welcome_default'] = 'Bienvenue à %%CONFNAME%%%.';
$string['mod_form_field_participant_add'] = 'Ajouter le cessionnaire';
$string['mod_form_field_participant_list'] = 'Assigné';
$string['mod_form_field_participant_list_type_all'] = 'Tous les utilisateurs inscrits';
$string['mod_form_field_participant_list_type_role'] = 'Rôle';
$string['mod_form_field_participant_list_type_user'] = 'Utilisateur';
$string['mod_form_field_participant_list_type_owner'] = 'Propriétaire';
$string['mod_form_field_participant_list_text_as'] = 'se joint à la session comme';
$string['mod_form_field_participant_list_action_add'] = 'Add';
$string['mod_form_field_participant_list_action_remove'] = 'Supprimer';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Animateur';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Affichage';
$string['mod_form_field_showpresentation'] = 'Afficher le fichier de présentation sur la page d\'activité';
$string['mod_form_field_instanceprofiles'] = 'Type d\'instance';
$string['mod_form_field_instanceprofiles_help'] = 'Si une session doit être enregistrée, sélectionnez \'Room with recordings\', otherwise \'Room only\'. After a session is recorded, if there are to be no more sessions, select \'Recordings only\'.';
$string['mod_form_field_muteonstart'] = 'Mute au début';
$string['mod_form_field_recordings_html'] = 'Afficher le tableau en HTML simple';
$string['mod_form_field_recordings_deleted'] = 'Inclure les enregistrements des activités supprimées';
$string['mod_form_field_recordings_imported'] = 'Afficher uniquement les liens importés';
$string['mod_form_field_recordings_preview'] = 'Afficher l\'aperçu de l\'enregistrement';
$string['mod_form_field_recordallfromstart'] = 'Enregistrer tout depuis le début';
$string['mod_form_field_recordhidebutton'] = 'Cacher le bouton d\'enregistrement';
$string['mod_form_field_nosettings'] = 'Aucun paramètre ne peut être modifié';
$string['mod_form_field_disablecam'] = 'Désactiver les webcams';
$string['mod_form_field_disablemic'] = 'Désactiver les microphones';
$string['mod_form_field_disableprivatechat'] = 'Désactiver le chat privé';
$string['mod_form_field_disablepublicchat'] = 'Désactiver le chat public';
$string['mod_form_field_disablenote'] = 'Désactiver les notes partagées';
$string['mod_form_field_hideuserlist'] = 'Masquer la liste des utilisateurs';
$string['mod_form_locksettings'] = 'Paramètres de verrouillage';
$string['report_join_info']  = 'Réunion(s)';
$string['report_play_recording_info']  = '{$a} enregistrement(s) joué(s)';
$string['report_room_view']  = 'vue';
$string['progress_createbigbluebuttonbn'] = 'Création de l\'activité BigBlueButton ({$a})';
$string['starts_at'] = 'Début';
$string['started_at'] = 'Commencé';
$string['ends_at'] = 'Fin';
$string['calendarstarts'] = '{$a} est prévu pour';
$string['recordings_from_deleted_activities'] = 'Enregistrements des activités supprimées';
$string['view_error_no_group_student'] = 'Vous n\'avez pas été ajouté à un groupe. Veuillez contacter votre professeur.';
$string['view_error_no_group_teacher'] = 'Il n\'y a pas de groupes. Vous devez créer des groupes.';
$string['view_error_no_group'] = 'Il n\'y a pas de groupes. Vous devez créer des groupes avant d\'essayer de rejoindre la session.';
$string['view_error_unable_join_student'] = 'Impossible de se connecter au serveur BigBlueButton.';
$string['view_error_unable_join_teacher'] = 'Impossible de se connecter au serveur BigBlueButton. Veuillez contacter un administrateur.';
$string['view_error_unable_join'] = 'Impossible d\'entrer dans la chambre. Veuillez vérifier l\'URL du serveur BigBlueButton ET vérifier si le serveur BigBlueButton fonctionne.';
$string['view_error_bigbluebutton'] = 'BigBlueButton a répondu par des erreurs. [$a]';
$string['view_error_create'] = 'Le serveur BigBlueButton a répondu par un message d\'erreur. La salle n\'a pas pu être créée.';
$string['view_error_max_concurrent'] = 'Le nombre de séances simultanées autorisées a été atteint.';
$string['view_error_userlimit_reached'] = 'La limite du nombre d\'utilisateurs autorisés dans une session a été atteinte.';
$string['view_error_url_missing_parameters'] = 'Il y a des paramètres manquants dans cette URL';
$string['view_error_import_no_courses'] = 'Il n\'y a pas de cours pour rechercher des enregistrements.';
$string['view_error_import_no_recordings'] = 'Il n\'y a pas d\'enregistrement dans ce cours pour importer.';
$string['view_error_invalid_session'] = 'La session est terminée. Retournez à la page d\'activité.';
$string['view_groups_selection_join'] = 'Rejoignez';
$string['view_groups_selection'] = 'Sélectionnez le groupe que vous souhaitez rejoindre et validez l\'action';
$string['view_login_moderator'] = 'Ouvrir une session comme modérateur ...';
$string['view_login_viewer'] = 'Logging dans comme spectateur ...';
$string['view_noguests'] = 'La chambre BigBlueButton n\'est pas ouverte aux invités.';
$string['view_nojoin'] = 'Vous n\'avez pas de rôle à jouer dans cette session.';
$string['view_recording_list_actionbar_edit'] = 'Modifier';
$string['view_recording_list_actionbar_delete'] = 'Supprimer';
$string['view_recording_list_actionbar_import'] = 'Importation';
$string['view_recording_list_actionbar_hide'] = 'Masquer';
$string['view_recording_list_actionbar_show'] = 'Afficher';
$string['view_recording_list_actionbar_publish'] = 'Publier';
$string['view_recording_list_actionbar_unpublish'] = 'Sans publication';
$string['view_recording_list_actionbar_protect'] = 'Fais-le privé.';
$string['view_recording_list_actionbar_unprotect'] = 'La rendre publique';
$string['view_recording_list_action_publish'] = 'Édition';
$string['view_recording_list_action_unpublish'] = 'Sans publication';
$string['view_recording_list_action_process'] = 'Traitement';
$string['view_recording_list_action_delete'] = 'Suppression';
$string['view_recording_list_action_protect'] = 'Protection';
$string['view_recording_list_action_unprotect'] = 'Sans protection';
$string['view_recording_list_action_update'] = 'Mise à jour';
$string['view_recording_list_action_edit'] = 'Mise à jour';
$string['view_recording_list_action_play'] = 'Jouer';
$string['view_recording_list_actionbar'] = 'Barre d\'outils';
$string['view_recording_list_activity'] = 'Activité';
$string['view_recording_list_course'] = 'Cours';
$string['view_recording_list_date'] = 'Date';
$string['view_recording_list_description'] = 'Désignation des marchandises';
$string['view_recording_list_duration'] = 'Durée';
$string['view_recording_list_recording'] = 'Enregistrement';
$string['view_recording_button_import'] = 'Importer des liens d\'enregistrement';
$string['view_recording_button_return'] = 'Retourne';
$string['view_recording_format_notes'] = 'Annexe';
$string['view_recording_format_podcast'] = 'Podcast';
$string['view_recording_format_presentation'] = 'Présentation';
$string['view_recording_format_screenshare'] = 'Partage d\'écran';
$string['view_recording_format_statistics'] = 'Statistiques';
$string['view_recording_format_video'] = 'Vidéo';
$string['view_recording_format_errror_unreachable'] = 'L\'URL de ce format d\'enregistrement est inaccessible.';
$string['view_section_title_presentation'] = 'Dossier de présentation';
$string['view_section_title_recordings'] = 'Enregistrements';
$string['view_message_norecordings'] = 'Aucun enregistrement n\'est disponible.';
$string['view_message_finished'] = 'Cette activité est terminée.';
$string['view_message_notavailableyet'] = 'Cette session n\'est pas encore disponible.';
$string['view_recording_select_course'] = 'Sélectionnez un cours d\'abord dans le menu déroulant';


$string['view_message_session_started_at'] = 'Session commencée à';
$string['view_message_session_running_for'] = 'Cette session est en cours pour';
$string['view_message_hour'] = 'heure';
$string['view_message_hours'] = 'heures';
$string['view_message_minute'] = 'minute';
$string['view_message_minutes'] = 'minutes';
$string['view_message_moderator'] = 'Animateur';
$string['view_message_moderators'] = 'Animateurs';
$string['view_message_viewer'] = 'Affichage';
$string['view_message_viewers'] = 'Affichages';
$string['view_message_user'] = 'Utilisateur';
$string['view_message_users'] = 'Utilisateur';
$string['view_message_has_joined'] = 'a rejoint';
$string['view_message_have_joined'] = 'ont rejoint';
$string['view_message_session_no_users'] = 'Cette session ne compte aucun utilisateur';
$string['view_message_session_has_user'] = 'Il y a';
$string['view_message_session_has_users'] = 'Il y a';
$string['view_message_session_for'] = 'de la session';
$string['view_message_times'] = 'heures';
$string['view_message_and'] = 'and';

$string['view_message_room_closed'] = 'Cette chambre est fermée.';
$string['view_message_room_ready'] = 'Cette pièce est prête.';
$string['view_message_room_open'] = 'Cette pièce est ouverte.';
$string['view_message_conference_room_ready'] = 'Cette pièce est prête. Vous pouvez rejoindre la session maintenant.';
$string['view_message_conference_not_started'] = 'La session n\'a pas encore commencé.';
$string['view_message_conference_wait_for_moderator'] = 'Attendre qu\'un modérateur se joigne.';
$string['view_message_conference_in_progress'] = 'La session est en cours.';
$string['view_message_conference_has_ended'] = 'La session est terminée.';
$string['view_message_conference_user_limit_reached'] = 'La limite du nombre d\'utilisateurs autorisés dans une session a été atteinte.';
$string['view_message_tab_close'] = 'Cet onglet / fenêtre doit être fermé manuellement';
$string['view_message_recordings_disabled'] = 'Les enregistrements sont désactivés sur le serveur. Activités BigBlueButton de type \'Recordings only\' cannot be used.';
$string['view_message_cron_disabled'] = 'La liste des enregistrements peut ne pas être à jour. Veuillez contacter l\'administrateur du site avec les informations suivantes : {$a}';
$string['view_message_importrecordings_disabled'] = 'Importer les liens d\'enregistrement est désactivé sur le serveur.';

$string['view_groups_selection_warning'] = 'Il y a une chambre pour chaque groupe et vous avez accès à plus d\'un. Assurez-vous de sélectionner le bon.';
$string['view_groups_nogroups_warning'] = 'La salle a été configurée pour utiliser des groupes, mais le cours n\'a pas de groupes définis.';
$string['view_groups_notenrolled_warning'] = 'La salle a été configurée pour utiliser des groupes, mais vous n\'êtes pas membre d\'un groupe.';
$string['view_conference_action_join'] = 'Rejoindre la session';
$string['view_conference_action_end'] = 'Fin de la session';

$string['view_recording'] = 'enregistrement';
$string['view_recording_link'] = 'lien importé';
$string['view_recording_link_warning'] = 'C\'est un lien pointant vers un enregistrement qui a été créé dans un cours ou une activité différent.';
$string['view_recording_delete_confirmation'] = 'Voulez-vous vraiment supprimer {$a} ?';
$string['view_recording_delete_confirmation_warning_s'] = 'Cet enregistrement a {$a} lien associé qui a été importé dans un cours ou une activité différente. Si l\'enregistrement est supprimé, ce lien sera également supprimé.';
$string['view_recording_delete_confirmation_warning_p'] = 'Cet enregistrement a {$a} des liens associés qui ont été importés dans différents cours ou activités. Si l\'enregistrement est supprimé, ces liens seront également supprimés.';
$string['view_recording_publish_confirmation'] = 'Voulez-vous vraiment publier ce {$a}?';
$string['view_recording_publish_confirmation_warning_s'] = 'Cet enregistrement a {$a} lien associé qui a été importé dans un cours ou une activité différente. Si l\'enregistrement est publié, ce lien sera également publié.';
$string['view_recording_publish_confirmation_warning_p'] = 'Cet enregistrement a {$a} des liens associés qui ont été importés dans différents cours ou activités. Si l\'enregistrement est publié, ces liens seront également publiés.';
$string['view_recording_publish_link_deleted'] = 'Ce lien ne peut pas être republié car l\'enregistrement original n\'existe pas sur le serveur BigBlueButton. Le lien doit être supprimé.';
$string['view_recording_publish_link_not_published'] = 'Ce lien ne peut pas être republié parce que l\'enregistrement original est inédit.';
$string['view_recording_unpublish_confirmation'] = 'Êtes-vous sûr de publier ce {$a}?';
$string['view_recording_unpublish_confirmation_warning_s'] = 'Cet enregistrement a {$a} lien associé qui a été importé dans un cours ou une activité différente. Si l\'enregistrement est inédit, ce lien sera également inédit.';
$string['view_recording_unpublish_confirmation_warning_p'] = 'Cet enregistrement a {$a} des liens associés qui ont été importés dans différents cours ou activités. Si l\'enregistrement est inédit, ces liens seront également inédits.';
$string['view_recording_protect_confirmation'] = 'Voulez-vous vraiment protéger ce {$a}?';
$string['view_recording_protect_confirmation_warning_s'] = 'Cet enregistrement a {$a} lien associé qui a été importé dans un cours ou une activité différente. Si l\'enregistrement est protégé, il affectera également les liens importés.';
$string['view_recording_protect_confirmation_warning_p'] = 'Cet enregistrement a {$a} des liens associés qui ont été importés dans différents cours ou activités. Si l\'enregistrement est protégé, il affectera également les liens importés.';
$string['view_recording_unprotect_confirmation'] = 'Voulez-vous vraiment déprotéger ce {$a}?';
$string['view_recording_unprotect_confirmation_warning_s'] = 'Cet enregistrement a {$a} lien associé qui a été importé dans un cours ou une activité différente. Si l\'enregistrement n\'est pas protégé, il affectera également les liens importés.';
$string['view_recording_unprotect_confirmation_warning_p'] = 'Cet enregistrement a {$a} des liens associés qui ont été importés dans différents cours ou activités. Si l\'enregistrement n\'est pas protégé, il affectera également les liens importés.';
$string['view_recording_import_confirmation'] = 'Voulez-vous vraiment importer cet enregistrement ?';
$string['view_recording_unprotect_link_deleted'] = 'Ce lien ne peut pas être non protégé car l\'enregistrement original n\'existe pas sur le serveur BigBlueButton. Le lien doit être supprimé.';
$string['view_recording_unprotect_link_not_unprotected'] = 'Ce lien ne peut pas être non protégé car l\'enregistrement original est protégé.';
$string['view_recording_actionbar'] = 'Barre d\'outils';
$string['view_recording_activity'] = 'Activité';
$string['view_recording_course'] = 'Cours';
$string['view_recording_date'] = 'Date';
$string['view_recording_description'] = 'Désignation des marchandises';
$string['view_recording_description_editlabel'] = 'Modifier la description';
$string['view_recording_description_edithint'] = 'Une description peut être ajoutée pour aider à identifier l\'enregistrement.';
$string['view_recording_length'] = 'Longueur';
$string['view_recording_meeting'] = 'Réunion';
$string['view_recording_duration'] = 'Durée';
$string['view_recording_recording'] = 'Enregistrement';
$string['view_recording_duration_min'] = 'min';
$string['view_recording_name'] = 'Nom';
$string['view_recording_name_editlabel'] = 'Modifier le nom';
$string['view_recording_name_edithint'] = 'Un nom peut être ajouté pour aider à identifier l\'enregistrement.';
$string['view_recording_tags'] = 'Étiquettes';
$string['view_recording_playback'] = 'Lecture';
$string['view_recording_preview'] = 'Aperçu';
$string['view_recording_preview_help'] = 'Survolez une image pour la visualiser en pleine taille';
$string['view_recording_modal_button'] = 'Appliquer';
$string['view_recording_modal_title'] = 'Définir des valeurs pour l\'enregistrement';
$string['view_recording_yui_first'] = 'Première';
$string['view_recording_yui_prev'] = 'Précédent';
$string['view_recording_yui_next'] = 'Suivant';
$string['view_recording_yui_last'] = 'Dernier';
$string['view_recording_yui_page'] = 'Page';
$string['view_recording_yui_go'] = 'Go';
$string['view_recording_yui_rows'] = 'Lignes';
$string['view_recording_yui_show_all'] = 'Afficher tout';

$string['event_activity_created'] = 'Activité créée';
$string['event_activity_deleted'] = 'Activité supprimée';
$string['event_activity_updated'] = 'Activité actualisée';
$string['event_meeting_created'] = 'Réunion créée';
$string['event_meeting_ended'] = 'Réunion terminée de force';
$string['event_meeting_joined'] = 'Réunion';
$string['event_meeting_left'] = 'Réunion à gauche';
$string['event_recording_viewed'] = 'Enregistrement consulté';
$string['event_recording_edited'] = 'Enregistrement édité';
$string['event_recording_deleted'] = 'Enregistrement supprimé';
$string['event_recording_imported'] = 'Enregistrement des importations';
$string['event_recording_published'] = 'Enregistrement publié';
$string['event_recording_unpublished'] = 'Enregistrement non publié';
$string['event_recording_protected'] = 'Enregistrement protégé';
$string['event_recording_unprotected'] = 'Enregistrement non protégé';
$string['event_live_session'] = 'Activité en direct';
$string['event_unknown'] = 'Événements inconnus';

$string['instance_type_default'] = 'Salle avec enregistrements';
$string['instance_type_room_only'] = 'Salle seulement';
$string['instance_type_recording_only'] = 'Enregistrements seulement';

$string['messageprovider:instance_updated'] = 'Mise à jour de la session BigBlueButton';
$string['messageprovider:recording_ready'] = 'Enregistrement BigBlueButton disponible';
$string['new_bigblubuttonbn_activities'] = 'Activité BigBlueButton';
$string['notification_instance_created_intro'] = 'Le lien <a href="{$a->}">{$a->name}</a> La chambre BigBlueButton a été créée.';
$string['notification_instance_created_small'] = 'Une nouvelle salle BigBlueButton nommée {$a->name} a été créée.';
$string['notification_instance_created_subject'] = 'Une nouvelle chambre BigBlueButton a été créée';
$string['notification_instance_description'] = 'Désignation des marchandises';
$string['notification_instance_end_date'] = 'Date de fin';
$string['notification_instance_name'] = 'Titre';
$string['notification_instance_start_date'] = 'Date de début';
$string['notification_instance_updated_intro'] = 'Le lien <a href="{$a->}">{$a->name}</a> La chambre BigBlueButton a été mise à jour.';
$string['notification_instance_updated_small'] = 'La session {$a->name} BigBlueButton a été mise à jour';
$string['notification_instance_updated_subject'] = 'Votre chambre BigBlueButton a été mise à jour';
$string['notification_recording_ready_small'] = 'Un enregistrement est disponible pour la salle BigBlueButton {$a->name}.';
$string['notification_recording_ready_html'] = 'Un enregistrement est maintenant disponible pour la session dans la salle BigBlueButton <a href="{$a->link}">{$a->name}</a>.';
$string['notification_recording_ready_plain'] = 'Un enregistrement est maintenant disponible pour la session dans la salle BigBlueButton {$a->name}. Allez dans {$a->link} pour accéder au lien d\'enregistrement.';
$string['notification_recording_ready_subject'] = 'Enregistrement disponible';

$string['view_error_meeting_not_running'] = 'Quelque chose s\'est mal passé; la session ne fonctionne pas.';
$string['view_error_current_state_not_found'] = 'L\'état actuel n\'a pas été trouvé. L\'enregistrement peut avoir été supprimé ou le serveur BigBlueButton n\'est pas compatible avec l\'action effectuée.';
$string['view_error_action_not_completed'] = 'Aucune mesure n \' a pu être prise';

$string['view_room'] = 'Salle de vue';
$string['index_error_noinstances'] = 'Il n\'y a aucun exemple de chambres BigBlueButton';
$string['index_error_bbtn'] = 'BigBlueButton ID {$a} est incorrect';

$string['end_session_confirm_title'] = 'Vraiment terminer la séance ?';
$string['end_session_confirm'] = 'Voulez-vous vraiment terminer la session ?';
$string['end_session_notification'] = 'La session est terminée.';
$string['cachedef_currentfetch'] = 'Données pour lister tout enregistrement récupéré récemment.';
$string['cachedef_serverinfo'] = 'Informations sur le serveur distant';
$string['cachedef_recordings'] = 'Enregistrement des métadonnées';
$string['cachedef_validatedurls'] = 'Cache des vérifications d\'URL validées';
$string['cachedef_subplugins'] = 'Cache utilisé par les routines de sous-plugin pour accélérer au besoin le processus de découverte du plugin.';
$string['taskname:check_pending_recordings'] = 'Récupération des enregistrements en attente';
$string['taskname:check_dismissed_recordings'] = 'Vérifiez les enregistrements que haven\'t been found yet';
$string['userlimitreached'] = 'Le nombre d\'utilisateurs autorisés dans une session a été atteint.';
$string['waitformoderator'] = 'Attendre qu\'un modérateur se joigne.';

$string['recordingurlnotfound'] = 'L\'URL d\'enregistrement est invalide.';

$string['subplugintype_bbbext'] = 'Extension de l\'activité BigBlueButton';
$string['subplugintype_bbbext_plural'] = 'Extensions d\'activité BigBlueButton';

// Deprecated since Moodle 4.3.
$string['completionview'] = 'Nécessite une vue';
$string['completionview_desc'] = 'Vue sur la chambre';
$string['completionattendancegroup_help'] = 'La participation à la réunion pendant (n) le procès-verbal est nécessaire.';
$string['completionengagementgroup_help'] = 'La participation active à la session doit être achevée.';
// Deprecated since Moodle 4.4.
$string['acceptdpa'] = 'Je comprends et accepte l\'accord de traitement des données';
$string['bigbluebuttondisablednotification_subject'] = 'Module d\'activité BigBlueButton désactivé.';
$string['bigbluebuttondisablednotification'] = 'Le module d\'activité BigBlueButton a été désactivé et toute activité de cours BigBlueButton existante n\'est actuellement pas accessible. Avant de renouveler ce plugin, veuillez vous assurer d\'avoir lu et accepté l\'accord de traitement de données <a href="{$a}" cible="_blank"> avec Blindside Networks Inc.';
$string['enablingbigbluebutton'] = 'Activer l\'activité BigBlueButton';
$string['enablingbigbluebuttondpainfo'] = 'Afin de respecter vos obligations en matière de protection des données, avant d\'activer ce plugin, vous devrez peut-être vous assurer que vous avez lu et accepté le <a href="{$a}" cible="_blank"> Entente sur le traitement des données des réseaux blindside</a>. Veuillez consulter vos propres professionnels de la vie privée pour obtenir des conseils.';
$string['dpainfonotsigned'] = 'Avant d\'activer ce plugin, vous devez confirmer que vous avez lu et accepté l\'accord de traitement de données <a href="{$a}">Blindside Networks</a>.';
$string['config_dpa_note'] = 'Remarque: Pour respecter vos obligations en matière de protection des données, avant d\'utiliser un fournisseur de services pour ce plugin, vous devez vous assurer que vous avez lu et accepté le fournisseur de services\'s data processing agreement. For the default free BigBlueButton service, this is the <a href="{$a}" target="_blanc">Blindside Networks data processing agreement</a>. Please consult with your own privacy professionals for advice.';
$string['view_warning_default_server'] = 'This site is using a <a href="https://bigbluebutton.org/free-bigbluebutton-service-for-moodle/" target="_blanc">free BigBlueButton service for Moodle (opens in new window)</a> provided by Blindside Networks with restrictions as follows:
<ol>
<li>The maximum length for each session is 60 minutes</li>
<li>The maximum number of concurrent users per session is 25</li>
<li>Recordings expire after seven (7) days and are not downloadable</li>
<li>Student webcams are only visible to the moderator.</li>
</ol>';
// Deprecated since Moodle 4.5.
$string['view_mobile_message_reload_page_creation_time_meeting'] = 'Vous avez dépassé 45 secondes sur cette page. Veuillez rafraîchir la page pour rejoindre la session.';
$string['view_mobile_message_groups_not_supported'] = 'Cette instance est activée pour travailler avec des groupes mais l\'application mobile ne fonctionne pas\'t yet support it. Please use the web version.';
