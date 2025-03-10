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
 * Strings for component 'tool_messageinbound', language 'en'
 *
 * @package    tool_messageinbound
 * @copyright  2014 Andrew Nicols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['classname'] = 'Nom de la classe';
$string['component'] = 'Composante';
$string['configmessageinboundhost'] = 'L\'adresse du serveur que Moodle devrait vérifier. Pour spécifier un port non par défaut, utilisez [serveur]:[port], par exemple mail.example.com:993. Si un port est\'t specified, the default port for the type of mail server will be used.';
$string['defaultexpiration'] = 'Période d\'expiration de l\'adresse par défaut';
$string['defaultexpiration_help'] = 'Lorsqu\'une adresse e-mail est générée par le gestionnaire, elle peut automatiquement expirer après un certain temps, de sorte qu\'elle ne peut plus être utilisée. Il est conseillé de fixer un délai d\'expiration.';
$string['description'] = 'Désignation des marchandises';
$string['domain'] = 'Domaine de messagerie';
$string['edit'] = 'Modifier';
$string['edithandler'] = 'Modifier les paramètres du gestionnaire {$a}';
$string['editinghandler'] = 'Modifier {$a}';
$string['enabled'] = 'Activé';
$string['fixedvalidateaddress'] = 'Valider l\'adresse de l\'expéditeur';
$string['fixedvalidateaddress_help'] = 'Vous ne pouvez pas modifier la validation d\'adresse de ce gestionnaire. Cela peut être parce que le gestionnaire nécessite un réglage spécifique.';
$string['fixedenabled_help'] = 'Vous ne pouvez pas changer l\'état de ce gestionnaire. Cela peut être parce que le gestionnaire est requis par d\'autres gestionnaires.';
$string['handlerdisabled'] = 'Le gestionnaire de courriels que vous avez essayé de contacter a été désactivé. Impossible de traiter le message en ce moment.';
$string['incomingmailconfiguration'] = 'Configuration du courrier entrant';
$string['incomingmailserversettings'] = 'Paramètres du serveur de messagerie entrant';
$string['incomingmailserversettings_desc'] = 'Moodle est capable de se connecter aux serveurs IMAP correctement configurés. Vous pouvez spécifier ici les paramètres utilisés pour vous connecter à votre serveur IMAP.';
$string['invalid_recipient_handler'] = 'If a valid message is received but the sender cannot be authenticated, the message is stored on the email server and the user is contacted using the email address in their user profile. The user is given the chance to reply to confirm the authenticity of the original message.

This handler processes those replies.

It is not possible to disable sender verification of this handler because the user may reply from an incorrect email address if their email client configuration is incorrect.';
$string['invalid_recipient_handler_name'] = 'Gestionnaire d\'expéditeur non valide';
$string['invalidrecipientdescription'] = 'Le message « {$a->subject} » n\'a pas pu être authentifié, car il a été envoyé à partir d\'une adresse email différente de celle de votre profil utilisateur. Pour que le message soit authentifié, vous devez répondre à ce message.';
$string['invalidrecipientdescriptionhtml'] = 'Le message « {$a->subject} » n\'a pas pu être authentifié, car il a été envoyé à partir d\'une adresse email différente de celle de votre profil utilisateur. Pour que le message soit authentifié, vous devez répondre à ce message.';
$string['invalidrecipientfinal'] = 'Le message « {$a->sujet} » n\'a pas pu être authentifié. Veuillez vérifier que vous envoyez votre message depuis la même adresse électronique que dans votre profil.';
$string['mailbox'] = 'Nom de la boîte aux lettres';
$string['mailboxconfiguration'] = 'Configuration de la boîte aux lettres';
$string['mailboxdescription'] = '[ boîte aux lettres]+sous-adresse@[domaine]';
$string['mailsettings'] = 'Paramètres du courriel';
$string['message_handlers'] = 'Gestionnaires de messages';
$string['messageprocessingerror'] = 'You recently sent an email "{$a->subject}" but unfortunately it could not be processed.

The details of the error are shown below.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>You recently sent an email "{$a->subject}" but unfortunately it could not be processed.</p>
<p>The details of the error are shown below.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Le courriel « {$a->sujet} » n\'a pas pu être traité. L\'erreur est la suivante : « {$a->message} ».';
$string['messageprocessingfailedunknown'] = 'Le courriel « {$a->sujet} » n\'a pas pu être traité. Contactez votre administrateur pour plus d\'informations.';
$string['messageprocessingsuccess'] = '{$a->plain}

If you do not wish to receive these notifications in the future, you can edit your personal messaging preferences by opening {$a->messagepreferencesurl} in your browser.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>If you do not wish to receive these notifications in the future, you can <a href="{$a->messagepreferencesurl}">edit your personal messaging preferences</a>.</p>';
$string['messageinbound'] = 'Message entrant';
$string['messageinboundenabled'] = 'Activer le traitement du courrier entrant';
$string['messageinboundenabled_desc'] = 'Le traitement du courrier entrant doit être activé pour que les messages soient envoyés avec les informations appropriées.';
$string['messageinboundgeneralconfiguration'] = 'Configuration générale';
$string['messageinboundgeneralconfiguration_desc'] = 'Le traitement des messages entrants vous permet de recevoir et de traiter les courriels au sein de Moodle. Cela a des applications telles que l\'envoi de réponses par e-mail aux messages de forum ou l\'ajout de fichiers à un utilisateur\'s private files.';
$string['messageinboundhost'] = 'Serveur de messagerie entrant';
$string['messageinboundhostoauth_help'] = 'Service OAuth 2 à utiliser pour accéder au serveur IMAP en utilisant l\'authentification XOAUTH2. Si le service fait\'t exist yet, you will need to create it.';
$string['messageinboundhostpass'] = 'Mot de passe';
$string['messageinboundhostpass_desc'] = 'C\'est le mot de passe que votre fournisseur de services aura fourni pour vous connecter à votre compte de messagerie.';
$string['messageinboundhostssl'] = 'Utiliser SSL';
$string['messageinboundhostssl_desc'] = 'Certains serveurs de messagerie supportent un niveau de sécurité supplémentaire en cryptant la communication entre Moodle et votre serveur. Nous recommandons d\'utiliser ce chiffrement SSL si votre serveur le supporte.';
$string['messageinboundhosttype'] = 'Type de serveur';
$string['messageinboundhostuser'] = 'Nom d\'utilisateur';
$string['messageinboundhostuser_desc'] = 'C\'est le nom d\'utilisateur que votre fournisseur de services aura fourni pour vous connecter à votre compte de messagerie.';
$string['messageinboundmailboxconfiguration_desc'] = 'Lorsque les messages sont envoyés, ils s\'inscrivent dans le format address+data@exemple.com. Pour générer des adresses fiables à partir de Moodle, veuillez spécifier l\'adresse que vous utiliseriez normalement avant le signe @ et le domaine après le signe @ séparément. Par exemple, le nom de boîte aux lettres dans l\'exemple serait "adresse", et le domaine de courrier électronique serait "exemple.com". Vous devriez utiliser un compte e-mail dédié à cette fin.';
$string['messageprovider:invalidrecipienthandler'] = 'Message pour confirmer qu\'un message entrant vient de vous';
$string['messageprovider:messageprocessingerror'] = 'Avertissement lorsqu\'un message entrant n\'a pas pu être traité';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmation qu\'un message a été traité avec succès';
$string['noencryption'] = 'Hors - Pas de chiffrement';
$string['noexpiry'] = 'Pas d\'expiration';
$string['oldmessagenotfound'] = 'Vous avez essayé d\'authentifier manuellement un message, mais le message n\'a pas pu être trouvé. Cela pourrait être parce qu\'il a déjà été traité, ou parce que le message a expiré.';
$string['oneday'] = 'Un jour';
$string['onehour'] = 'Une heure';
$string['oneweek'] = 'Une semaine';
$string['oneyear'] = 'Un an';
$string['pluginname'] = 'Configuration des messages entrants';
$string['privacy:metadata:coreuserkey'] = 'Utilisateur's keys to validate the email received';
$string['privacy:metadata:messagelist'] = 'Une liste d\'identificateurs de message ayant échoué à la validation et nécessitant une autorisation supplémentaire';
$string['privacy:metadata:messagelist:address'] = 'L\'adresse où le courriel a été envoyé';
$string['privacy:metadata:messagelist:messageid'] = 'L\'identifiant du message';
$string['privacy:metadata:messagelist:timecreated'] = 'Le temps où le disque a été fait';
$string['privacy:metadata:messagelist:userid'] = 'L\'identifiant de l\'utilisateur qui doit approuver le message';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Valider l\'adresse de l\'expéditeur';
$string['name'] = 'Nom';
$string['ssl'] = 'SSL (version de détection automatique SSL)';
$string['sslv2'] = 'SSLv2 (Force SSL Version 2)';
$string['sslv3'] = 'SSLv3 (Force SSL Version 3)';
$string['taskcleanup'] = 'Nettoyage des courriels entrants non vérifiés';
$string['taskpickup'] = 'Prise en charge de courriels entrants';
$string['tls'] = 'TLS (TLS; commencé par la négociation au niveau du protocole sur un canal non chiffré; moyen RECOMMANDÉ pour lancer une connexion sécurisée)';
$string['tlsv1'] = 'TLSv1 (connexion directe à la version 1.x du serveur TLS)';
$string['validateaddress'] = 'Valider l\'adresse email de l\'expéditeur';
$string['validateaddress_help'] = 'When a message is received from a user, Moodle attempts to validate the message by comparing the email address of the sender with the email address in their user profile.

If the sender does not match, then the user is sent a notification to confirm that they really did send the email.

If this setting is disabled, then the email address of the sender is not checked at all.';
