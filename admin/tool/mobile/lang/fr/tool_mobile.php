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
 * Strings for component 'tool_mobile', language 'en'
 *
 * @package    tool_mobile
 * @copyright  2016 Juan Leyva
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['adodbdebugwarning'] = 'Le débogage ADOdb est activé. Il devrait être désactivé dans les paramètres externes d\'authentification de la base de données ou de plugin externe d\'inscription de la base de données.';
$string['androidappid'] = 'Application pour Android\'s unique identifier';
$string['androidappid_desc'] = 'Ce paramètre peut être laissé par défaut à moins que vous ayez une application Android personnalisée.';
$string['apppolicy'] = 'URL de la politique de l\'application';
$string['apppolicy_help'] = 'L\'URL d\'une politique pour les utilisateurs de l\'application qui est listée sur la page À propos de l\'application. Si le champ est laissé vide, l\'URL de la politique du site sera utilisée à la place.';
$string['apprequired'] = 'Cette fonctionnalité n\'est disponible qu\'avec l\'application mobile ou de bureau Moodle.';
$string['autologinkeygenerationlockout'] = 'La génération de clés de connexion automatique est bloquée. Vous devez attendre {$a} minutes entre les demandes.';
$string['autologinmintimebetweenreq'] = 'Temps minimum entre les demandes d\'enregistrement automatique';
$string['autologinmintimebetweenreq_desc'] = 'Le temps minimum entre les demandes de connexion automatique de l\'application mobile. Si les utilisateurs de l\'application sont fréquemment invités à saisir leurs identifiants lors de la visualisation du contenu intégré du site, alors définissez une valeur inférieure.';
$string['autologinnotallowedtoadmins'] = 'Auto-login n\'est pas autorisé pour les administrateurs de site.';
$string['autologout'] = 'Appliquer la suppression automatique pour vos utilisateurs';
$string['autologout_desc'] = 'Pour des raisons de sécurité, vous pouvez appliquer la déconnectation automatique pour vos utilisateurs quand ils quittent ou ferment l\'application, ou il va en arrière-plan. Les utilisateurs devront se connecter à nouveau lorsqu\'ils retourneront à l\'application.';
$string['autologoutcustom'] = 'Heure personnalisée après le départ ou la fermeture de l\'application';
$string['autologoutinmediate'] = 'Immédiatement après le départ ou la fermeture de l\'application';
$string['autologouttime'] = 'Chronomètre d\'enregistrement automatique';
$string['cachedef_plugininfo'] = 'Ceci stocke la liste des plugins avec des addons mobiles';
$string['cachedef_subscriptiondata'] = 'Ceci stocke les informations d\'abonnement de l\'application Moodle.';
$string['clickheretolaunchtheapp'] = 'Cliquez ici si l\'application ne s\'ouvre pas automatiquement.';
$string['configmobilecssurl'] = 'Un fichier CSS pour personnaliser votre interface d\'application mobile.';
$string['customlangstrings'] = 'Chaînes de langage personnalisées';
$string['customlangstrings_desc'] = 'Words and phrases displayed in the app can be customised here. Enter each custom language string on a new line with format: string identifier, custom language string and language code, separated by pipe characters. For example:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
For a complete list of string identifiers, see the documentation.';
$string['custommenuitems'] = 'Éléments de menu personnalisés';
$string['custommenuitems_desc'] = 'Des éléments supplémentaires peuvent être ajoutés à l\'application\'s main menu by specifying them here. Enter each custom menu item on a new line with format: item text, link URL, link-opening method and language code (optional, for displaying the item to users of the specified language only), separated by pipe characters.

Link-opening methods are: app (for linking to an activity supported by the app), inappbrowser (for opening a link in a browser without leaving the app), browser (for opening the link in the device default browser outside the app) and embedded (for displaying the link in an iframe in a new page in the app).

When items are missing a translation for a given language, they will use other languages as fallback unless "_only" is appended to the language code.

For example:
<pre>
App help|https://someurl.xyz/help|inappbrowser
My grades|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
You will only see this in English|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Mode sombre';
$string['disabledfeatures'] = 'Caractéristiques handicapées';
$string['disabledfeatures_desc'] = 'Sélectionnez ici les fonctionnalités que vous voulez désactiver dans l\'application Mobile pour votre site. Veuillez noter que certaines fonctionnalités énumérées ici pourraient déjà être désactivées via d\'autres paramètres du site. Vous devrez vous déconnecter et vous connecter à nouveau dans l\'application pour voir les modifications.';
$string['displayerrorswarning'] = 'Affichage des messages de débogage (debugdisplay) est activé. Il devrait être désactivé.';
$string['downloadcourse'] = 'Télécharger le cours';
$string['downloadcourses'] = 'Télécharger les cours';
$string['enablesmartappbanners'] = 'Activer les bannières d\'application';
$string['enablesmartappbanners_desc'] = 'Si activé, une bannière promotionnant l\'application mobile sera affichée lors de l\'accès au site à l\'aide d\'un navigateur mobile.';
$string['filetypeexclusionlist'] = 'Liste d\'exclusion de type de fichier';
$string['filetypeexclusionlist_desc'] = 'Sélectionnez tous les types de fichiers qui ne doivent pas être utilisés sur un appareil mobile. De tels fichiers seront listés dans le cours, puis si un utilisateur tente de les ouvrir, un avertissement sera affiché indiquant que le type de fichier n\'est pas destiné à être utilisé sur un appareil mobile. L\'utilisateur peut alors annuler ou ignorer l\'avertissement et ouvrir le fichier de toute façon.';
$string['filetypeexclusionlistplaceholder'] = 'Liste d\'exclusion de type de fichier mobile';
$string['forcedurlscheme'] = 'Si vous voulez autoriser l\'ouverture d\'une application personnalisée uniquement via une fenêtre de navigateur, alors spécifiez son schéma d\'URL ici. Si vous voulez autoriser seulement l\'application officielle, définissez la valeur par défaut. Laissez le champ vide si vous voulez autoriser une application.';
$string['forcedurlscheme_key'] = 'Schéma URL';
$string['forcelogout'] = 'Déconnecter la force';
$string['forcelogout_desc'] = 'Si activé, les utilisateurs seront toujours complètement déconnectés même lors du changement de comptes. Ils doivent alors entrer de nouveau leur mot de passe la prochaine fois qu\'ils souhaitent accéder au site.';
$string['h5poffline'] = 'Afficher le contenu H5P hors ligne';
$string['httpsrequired'] = 'HTTPS requis';
$string['insecurealgorithmwarning'] = 'Il semble que le certificat HTTPS utilise un algorithme non sécurisé pour la signature (SHA-1). Veuillez essayer de mettre à jour le certificat.';
$string['invalidcertificatechainwarning'] = 'Il semble que la chaîne de certificats soit invalide. Ce certificat peut fonctionner pour un navigateur, mais pas pour une application mobile.';
$string['invalidcertificateexpiredatewarning'] = 'Il semble que le certificat HTTPS pour le site ait expiré.';
$string['invalidcertificatestartdatewarning'] = 'Il semble que le certificat HTTPS pour le site n\'est pas encore valide (avec une date de début dans le futur).';
$string['invalidprivatetoken'] = 'Jeton privé invalide. Le jeton ne doit pas être vide ou passé via le paramètre GET.';
$string['invaliduserquotawarning'] = 'Le quota d\'utilisateur (userquota) est fixé à un nombre non valide. Il doit être défini à un nombre valide (une valeur entière) dans les paramètres de sécurité du site.';
$string['iosappid'] = 'Appli iOS\'s unique identifier';
$string['iosappid_desc'] = 'Ce paramètre peut être laissé par défaut sauf si vous avez une application iOS personnalisée.';
$string['launchviasiteinbrowser'] = 'Lancer via le site dans le navigateur système';
$string['loginintheapp'] = 'Via l\'application';
$string['logininthebrowser'] = 'Via une fenêtre de navigateur (pour les plugins SSO)';
$string['loginintheembeddedbrowser'] = 'Via un navigateur intégré (pour les plugins SSO)';
$string['logoutconfirmation'] = 'Voulez-vous vraiment vous déconnecter de l\'application mobile sur vos appareils mobiles ? En vous déconnectant, vous devrez alors entrer de nouveau votre nom d\'utilisateur et votre mot de passe dans l\'application mobile sur tous les appareils où vous avez installé l\'application.';
$string['mainmenu'] = 'Menu principal';
$string['managefiletypes'] = 'Gérer les types de fichiers';
$string['minimumversion'] = 'Si une version de l\'application est spécifiée (3.8.0 ou plus), tout utilisateur utilisant une version ancienne de l\'application sera invité à mettre à jour son application avant d\'être autorisé à accéder au site.';
$string['minimumversion_key'] = 'Version minimale de l\'application requise';
$string['mobileapp'] = 'Application mobile';
$string['mobileappenabled'] = 'Ce site a un accès à l\'application mobile activé.<br /><a href="{$a}"> Téléchargez l\'application mobile</a>.';
$string['mobileappearance'] = 'Aspect mobile';
$string['mobileappsubscription'] = 'Abonnement à l\'application Moodle';
$string['mobileauthentication'] = 'Authentification mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Caractéristiques mobiles';
$string['mobilenotificationsdisabledwarning'] = 'Les notifications mobiles ne sont pas activées. Ils doivent être activés dans les paramètres de notification.';
$string['mobilesettings'] = 'Paramètres mobiles';
$string['moodleappsportalfeatureswarning'] = 'Veuillez noter que certaines fonctionnalités peuvent être limitées en fonction de votre abonnement à l\'application Moodle. Pour plus de détails, visitez le <a href="{$a}" cible="_blank"> Moodle Apps Portal</a>.';
$string['notifications'] = 'Notifications';
$string['notificationsactivedevices'] = 'Dispositifs actifs';
$string['notificationsignorednotifications'] = 'Notifications non envoyées';
$string['notificationslimitreached'] = 'La limite mensuelle des appareils actifs a été dépassée. Les notifications pour certains utilisateurs ne seront pas envoyées. Il est recommandé de mettre à jour votre plan d\'application dans <a href="{$a}" cible="_blank"> Moodle Apps Portal</a>.';
$string['notificationsmissingwarning'] = 'Les statistiques de notification de l\'application Moodle n\'ont pas pu être récupérées. C\'est probablement parce que les notifications mobiles ne sont pas encore activées sur le site. Vous pouvez les activer dans l\'administration du site / Messagerie / Mobile.';
$string['notificationsnewdevices'] = 'Nouveaux appareils';
$string['notificationsseemore'] = 'Note : Les statistiques d\'utilisation de l\'application Moodle ne sont pas calculées en temps réel. Pour accéder à des statistiques plus détaillées, y compris les données des mois précédents, veuillez vous connecter à <a href="{$a}" cible="_blank"> Moodle Apps Portal</a>.';
$string['notificationssentnotifications'] = 'Notifications envoyées';
$string['notificationscurrentactivedevices'] = 'Appareils recevant des notifications ce mois-ci';
$string['oauth2identityproviders'] = 'OAuth 2 fournisseurs d\'identité';
$string['offlineuse'] = 'Utilisation hors ligne';
$string['pluginname'] = 'Outils d\'application Moodle';
$string['pluginnotenabledorconfigured'] = 'Plugin non activé ou configuré.';
$string['qrcodedisabled'] = 'Accès via le code QR désactivé';
$string['qrcodeformobileappaccess'] = 'Code QR pour l\'accès aux applications mobiles';
$string['qrcodeformobileapploginabout'] = 'Scannez le code QR avec votre application mobile et vous serez automatiquement connecté. Le code QR expire dans {$a}.';
$string['qrcodeformobileappurlabout'] = 'Scannez le code QR avec votre application mobile pour remplir l\'URL du site dans votre application.';
$string['qrsiteadminsnotallowed'] = 'Pour des raisons de sécurité, la connexion via le code QR n\'est pas autorisée pour les administrateurs du site ou si vous êtes connecté comme un autre utilisateur.';
$string['qrcodetype'] = 'Accès au code QR';
$string['qrcodetype_desc'] = 'Un code QR peut être fourni aux utilisateurs de l\'application mobile pour scanner. Ceci peut être utilisé pour remplir l\'URL du site, ou où le site est sécurisé en utilisant HTTPS, pour enregistrer automatiquement l\'utilisateur sans avoir à entrer son nom d\'utilisateur et son mot de passe.';
$string['qrcodetypeurl'] = 'Code QR avec URL du site';
$string['qrcodetypelogin'] = 'Code QR avec connexion automatique';
$string['qrkeyttl'] = 'Durée de la clé d\'authentification QR';
$string['qrkeyttl_desc'] = 'La durée de validité d\'un code QR pour la connexion automatique.';
$string['qrsameipcheck'] = 'authentification QR même contrôle IP';
$string['qrsameipcheck_desc'] = 'Indique si les utilisateurs doivent utiliser le même réseau pour générer et scanner un code QR pour se connecter. Ne le désactiver que si les utilisateurs signalent des problèmes avec la connexion QR.';
$string['readingthisemailgettheapp'] = 'Vous lisez ça dans un email ? "A href" {$a}"> Téléchargez l\'application mobile et recevez des notifications sur votre appareil mobile</a>.';
$string['remoteaddons'] = 'Ajouts à distance';
$string['scanqrcode'] = 'Scanner le code QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Il semble que le certificat HTTPS soit autosigné ou non. L\'application mobile ne fonctionnera que sur des sites de confiance. Veuillez utiliser n\'importe quel vérificateur SSL en ligne pour diagnostiquer le problème. S\'il indique que votre certificat est correct, vous pouvez ignorer cet avertissement.';
$string['setuplink'] = 'Page de téléchargement de l\'application';
$string['setuplink_desc'] = 'URL de page avec des options pour télécharger l\'application mobile depuis l\'App Store et Google Play. Le lien de page de téléchargement de l\'application est affiché dans le pied de page et dans un utilisateur\'s profile. Leave blank to not display a link.';
$string['smartappbanners'] = 'Annonceurs d\'applications';
$string['subscription'] = 'Abonnement';
$string['subscriptioncreated'] = 'Date de début';
$string['subscriptionerrorrequest'] = 'Il y a eu une erreur inattendue lorsque vous essayez de récupérer vos informations d\'abonnement de l\'application Moodle.';
$string['subscriptionexpiration'] = 'Date d\'expiration';
$string['subscriptionfeaturenotapplied'] = 'Cette fonctionnalité est configurée sur votre site, mais elle n\'est pas incluse dans votre plan d\'application Moodle. Ainsi, le réglage n\'aura aucun effet.';
$string['subscriptionfeatures'] = 'Fonctions d\'abonnement';
$string['subscriptionlimitsurpassed'] = 'Limite d\'abonnement dépassée';
$string['subscriptionregister'] = 'Pour plus de détails sur les différents plans d\'application, et pour accéder aux statistiques d\'utilisation de l\'application Moodle, veuillez consulter le <a href="{$a}" cible="_blank"> Moodle Apps Portal</a>.';
$string['subscriptionsseemore'] = 'Remarque : Les informations affichées ne sont pas mises à jour en temps réel. Vous devrez peut-être vous déconnecter et vous connecter à nouveau pour voir les mises à jour. Pour plus d\'informations sur la mise à jour de votre plan d\'application, veuillez vous connecter à <a href="{$a}" cible="_blank"> Moodle Apps Portal</a>.';
$string['typeoflogin'] = 'Type de connexion';
$string['typeoflogin_desc'] = 'Si le site utilise une méthode d\'authentification SSO, alors sélectionnez via une fenêtre de navigateur ou via un navigateur intégré. Un navigateur intégré fournit une meilleure expérience utilisateur, bien qu\'il ne\'t work with all SSO plugins.';
$string['getmoodleonyourmobile'] = 'Obtenez l\'application mobile';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La date de la dernière demande de clé de connexion automatique. Entre chaque demande 6 minutes sont nécessaires.';
$string['privacy:metadata:core_userkey'] = 'Utilisateur\'s keys used to create auto-login key for the current user.';
$string['responsivemainmenuitems'] = 'Éléments de menu sensibles';
$string['switchaccount'] = 'Changer de compte';
$string['viewqrcode'] = 'Afficher le code QR';
