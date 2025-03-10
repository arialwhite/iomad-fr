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
 * Strings for component 'message_airnotifier', language 'en'
 *
 * @package    message_airnotifier
 * @copyright  2012 Jerome Mouneyrac
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['airnotifieraccesskey'] = 'Clé d\'accès du notifiant d\'air';
$string['airnotifierappname'] = 'Nom de l\'application de notification aérienne';
$string['airnotifierfielderror'] = 'Veuillez supprimer les espaces vides ou les caractères inutiles du champ suivant : {$a}';
$string['airnotifiermobileappname'] = 'Nom de l\'application mobile';
$string['airnotifierport'] = 'Port du notifiant d\'air';
$string['airnotifierurl'] = 'URL du notifiant d\'air';
$string['checkconfiguration'] = 'Configuration de la notification de poussée de vérification et d\'essai';
$string['configairnotifierurl'] = 'L\'URL du serveur à connecter pour envoyer des notifications push.';
$string['configairnotifierport'] = 'Le port à utiliser lors de la connexion au serveur airnotifier.';
$string['configairnotifieraccesskey'] = 'La clé d\'accès pour se connecter au serveur Airnotifier. Vous pouvez obtenir une clé d\'accès en cliquant sur le lien « Demander une clé d\'accès » ci-dessous (site enregistré seulement) ou en créant un compte sur <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['configairnotifierappname'] = 'L\'identificateur du nom de l\'application dans Airnotifier.';
$string['configairnotifiermobileappname'] = 'L\'identificateur unique de l\'application mobile (habituellement quelque chose comme com.moodle.moodlemobile).';
$string['configured'] = 'Configuration';
$string['deletecheckdevicename'] = 'Supprimer votre appareil : {$a->nom}';
$string['deletedevice'] = 'Supprimer l\'appareil. Notez qu\'une application peut réenregistrer l\'appareil. Si l\'appareil continue à réapparaître, désactivez-le.';
$string['devicetoken'] = 'Jeton du périphérique';
$string['donotsendnotification'] = 'Ne pas envoyer de notifications du tout';
$string['enableprocessor'] = 'Activer les notifications mobiles';
$string['encryptnotifications'] = 'crypter les notifications';
$string['encryptnotifications_help'] = 'Activer le chiffrement de bout en bout des notifications d\'application. Certaines données peuvent être supprimées des notifications si elles ne peuvent pas être chiffrées.';
$string['encryptprocessing'] = 'Pour les appareils ne supportant pas le chiffrement';
$string['encryptprocessing_desc'] = 'Les notifications chiffrées nécessitent au moins Android 8 ou iOS 13, et l\'application Moodle 4.2 ou ultérieure.';
$string['errorretrievingkey'] = 'Une erreur s\'est produite lors de la récupération de la clé d\'accès. Votre site doit être enregistré pour utiliser ce service. Si votre site est déjà enregistré, essayez de mettre à jour votre inscription. Vous pouvez également obtenir une clé d\'accès en créant un compte sur <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['keyretrievedsuccessfully'] = 'La clé d\'accès a été récupérée avec succès. Pour accéder aux statistiques d\'utilisation de l\'application Moodle, veuillez créer un compte sur <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['messageprovidersempty'] = 'Aucune notification mobile n\'est activée dans les préférences de notification par défaut.';
$string['messageproviderslow'] = 'Seules quelques notifications mobiles sont activées dans les préférences de notification par défaut.';
$string['moodleappsportallimitswarning'] = 'Veuillez noter que le nombre d\'appareils utilisateurs autorisés à recevoir des notifications dépend de votre abonnement à l\'application Moodle. Pour plus de détails, visitez le <a href="{$a}" cible="_blank"> Moodle Apps Portal</a>.';
$string['nodevices'] = 'Pas d\'appareil enregistré. Les appareils apparaîtront automatiquement après avoir installé l\'application Moodle et ajouté ce site.';
$string['noemailevernotset'] = '$CFG->aucun courriel jamais désactivé';
$string['noemaileverset'] = '$CFG->noemailever est activé dans config.php. Vous devez définir ce paramètre à faux ou le supprimer.';
$string['nopermissiontomanagedevices'] = 'Vous faites't have permission to manage devices.';
$string['notconfigured'] = 'Le serveur Airnotifier n\'a pas été configuré de sorte que les notifications push ne peuvent pas être envoyées.';
$string['notificationsserverconfiguration'] = 'Configuration du serveur de notification (Airnotifier)';
$string['pluginname'] = 'Mobile';
$string['privacy:appiddescription'] = 'Il s\'agit d\'un identifiant de l\'application utilisée.';
$string['privacy:enableddescription'] = 'Si ce dispositif est activé pour l\'airnotificateur.';
$string['privacy:metadata:enabled'] = 'Indique si le dispositif airnotificateur est activé.';
$string['privacy:metadata:date'] = 'La date à laquelle le message a été envoyé.';
$string['privacy:metadata:externalpurpose'] = 'Cette information est envoyée à un site externe pour être finalement livrée à l\'appareil mobile de l\'utilisateur.';
$string['privacy:metadata:fullmessage'] = 'Le message complet.';
$string['privacy:metadata:notification'] = 'Si ce message est une notification.';
$string['privacy:metadata:smallmessage'] = 'Une section du message.';
$string['privacy:metadata:subject'] = 'L\'objet du message.';
$string['privacy:metadata:tableexplanation'] = 'Les informations du dispositif de notification sont stockées ici.';
$string['privacy:metadata:userdeviceid'] = 'L\'ID qui relie à l\'utilisateur\'s mobile device';
$string['privacy:metadata:userfromfullname'] = 'Le nom complet de l\'utilisateur qui a envoyé le message.';
$string['privacy:metadata:userfromid'] = 'L\'identifiant utilisateur de l\'auteur du message.';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur qui a envoyé le message.';
$string['privacy:metadata:username'] = 'Le nom d\'utilisateur.';
$string['privacy:metadata:usersubsystem'] = 'Ce plugin est connecté au sous-système utilisateur.';
$string['privacy:subcontext'] = 'Messages';
$string['sitemustberegistered'] = 'Pour utiliser l\'instance publique Airnotifier, votre site doit être enregistré. Vous pouvez également obtenir une clé d\'accès en créant un compte sur <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['showhide'] = 'Activer/désactiver l\'appareil.';
$string['requestaccesskey'] = 'Demander la clé d\'accès';
$string['sendnotificationnotenc'] = 'Envoyer des notifications sans chiffrement';
$string['sendtest'] = 'Envoyer une notification de poussée de test à mes appareils';
$string['sendtestconfirmation'] = 'Une notification de poussée de test sera envoyée aux appareils que vous utilisez pour vous connecter à ce site. Assurez-vous que vos appareils sont connectés à Internet et que l\'application mobile n\'est pas ouverte (puisque les notifications push ne sont affichées qu\'en arrière-plan).';
$string['serverconnectivityerror'] = 'Ce site ne peut pas se connecter au serveur de notifications {$a}';
$string['unknowndevice'] = 'Appareil inconnu';
$string['userdevices'] = 'Dispositifs utilisateurs';
$string['airnotifier:managedevice'] = 'Gérer les périphériques';
$string['view_notification'] = 'Appuyez sur pour visualiser';
