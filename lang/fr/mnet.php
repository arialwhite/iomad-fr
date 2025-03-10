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
 * Strings for component 'mnet', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['aboutyourhost'] = 'À propos de votre serveur';
$string['accesslevel'] = 'Niveau d\'accès';
$string['addhost'] = 'Ajouter un hôte';
$string['addnewhost'] = 'Ajouter un nouvel hôte';
$string['addtoacl'] = 'Ajouter au contrôle d\'accès';
$string['allhosts'] = 'Tous les hôtes';
$string['allhosts_no_options'] = 'Aucune option n\'est disponible lors de la visualisation de plusieurs hôtes';
$string['allow'] = 'Permettre';
$string['allowaccess'] = 'Permettre l\'accès';
$string['applicationtype'] = 'Type de demande';
$string['authfail_nosessionexists'] = 'L\'autorisation a échoué: la session mnet n\'existe pas.';
$string['authfail_sessiontimedout'] = 'L\'autorisation a échoué: la session mnet a pris fin.';
$string['authfail_usermismatch'] = 'L\'autorisation a échoué: l\'utilisateur ne correspond pas.';
$string['authmnetdisabled'] = 'Le plugin d\'authentification MNet est <strong>disabled</strong>.';
$string['badcert'] = 'Ce n\'est pas un certificat valide.';
$string['certdetails'] = 'Détails du certificat';
$string['configmnet'] = 'MNet permet la communication de ce serveur avec d\'autres serveurs ou services.';
$string['couldnotgetcert'] = 'Aucun certificat trouvé à <br />{$a}. <br />L\'hôte peut être désactivé ou mal configuré.';
$string['couldnotmatchcert'] = 'Cela ne correspond pas au certificat actuellement publié par le serveur web.';
$string['cours'] = 'courses';
$string['courseson'] = 'cours sur';
$string['currentkey'] = 'Clé publique actuelle';
$string['current_transport'] = 'Transport actuel';
$string['databaseerror'] = 'Impossible d\'écrire les détails à la base de données.';
$string['deleteaserver'] = 'Suppression d\'un serveur';
$string['deletehost'] = 'Supprimer l\'hôte';
$string['deletedhostinfo'] = 'Cet hôte a été supprimé. Si vous voulez le supprimer, changez l\'état supprimé en \'No\'.';
$string['deletedhosts'] = 'Hôtes supprimés : {$a}';
$string['deletekeycheck'] = 'Êtes-vous absolument sûr de vouloir supprimer cette clé?';
$string['deleteoutoftime'] = 'Votre fenêtre de 60 secondes pour supprimer cette clé a expiré. Veuillez recommencer.';
$string['deleteuserrecord'] = 'SSO ACL: supprimer l\'enregistrement pour l\'utilisateur \'{$a->user}\' from {$a->host}.';
$string['deletewrongkeyvalue'] = 'Une erreur s\'est produite. Si vous n\'essayez pas de supprimer votre serveur\'s SSL key, it is possible you have been the subject of a malicious attack. No action has been taken.';
$string['deny'] = 'Refuser';
$string['denyaccess'] = 'Refuser l\'accès';
$string['description'] = 'Désignation des marchandises';
$string['duplicate_usernames'] = 'Nous n\'avons pas réussi à créer un index sur les colonnes "mnethostid" et "username" dans votre table utilisateur.<br />Cela peut se produire lorsque vous avez <a href="{$a}" cible="_blank"> des noms d\'utilisateur dupliqués dans votre table d\'utilisateur</a>.<br />Votre mise à jour devrait être terminée avec succès. Cliquez sur le lien ci-dessus, et les instructions pour corriger ce problème apparaîtront dans une nouvelle fenêtre. Vous pouvez y assister à la fin de la mise à niveau.<br />';
$string['enabled_for_all'] = '(Ce service a été activé pour tous les hôtes).';
$string['enterausername'] = 'Veuillez saisir un nom d\'utilisateur ou une liste de noms d\'utilisateur séparés par des virgules.';
$string['error7020'] = 'Cette erreur se produit normalement si le site distant a créé un enregistrement pour vous avec le mauvais wwwroot, par exemple, https://votresite.com au lieu de https://www.votresite.com. Veuillez contacter l\'administrateur du site distant avec votre wwwroot (comme spécifié dans config.php) et leur demander de mettre à jour l\'enregistrement de votre hôte.';
$string['error7022'] = 'Le message que vous avez envoyé au site distant a été correctement chiffré, mais non signé. Ceci est très inattendu; vous devriez probablement déposer un bug si cela se produit (en donnant autant d\'informations que possible sur les versions de l\'application en question, etc.).';
$string['error7023'] = 'Le site distant a essayé de déchiffrer votre message avec toutes les clés qu\'il a enregistrées pour votre site. Ils ont tous échoué. Vous pourriez être en mesure de résoudre ce problème en re-clé manuellement avec le site distant. Il est peu probable que cela se produise sauf si vous\'ve been out of communication with the remote site for a few months.';
$string['error7024'] = 'Vous envoyez un message non chiffré au site distant, mais le site distant ne fait pas\'t accept unencrypted communication from your site. This is very unexpected; you should probably file a bug if this occurs (giving as much information as possible about the application versions in question, etc).';
$string['error7026'] = 'La clé que votre message a été signé avec diffère de la clé que l\'hôte distant a dans le fichier pour votre serveur. De plus, l\'hôte distant a tenté de récupérer votre clé actuelle et n\'a pas réussi à le faire. S\'il vous plaît re-clé manuellement avec l\'hôte distant et essayer à nouveau.';
$string['error709'] = 'Le site distant n\'a pas obtenu une clé SSL de votre part.';
$string['eventaccesscontrolcreated'] = 'Contrôle d\'accès créé';
$string['eventaccesscontrolupdated'] = 'Contrôle d\'accès mis à jour';
$string['expired'] = 'Cette clé a expiré';
$string['expires'] = 'Valable jusqu\'à';
$string['expireyourkey'] = 'Supprimer cette clé';
$string['expireyourkeyexplain'] = 'Moodle tourne automatiquement vos clés tous les 28 jours (par défaut), mais vous avez l\'option de <em>manuellement</em> expirer cette clé à tout moment. Cela ne sera utile que si vous croyez que cette clé a été compromise. Un remplacement sera immédiatement généré automatiquement.<br />En supprimant cette clé, il sera impossible pour d\'autres applications de communiquer avec vous, jusqu\'à ce que vous contactiez manuellement chaque administrateur et lui donniez votre nouvelle clé.';
$string['exportfields'] = 'Champs à exporter';
$string['failedaclwrite'] = 'Impossible d\'écrire à la liste de contrôle d\'accès MNet pour l\'utilisateur \'{$a}\'.';
$string['findlogin'] = 'Rechercher une connexion';
$string['forbidden-function'] = 'Cette fonction n\'a pas été activée pour RPC.';
$string['forbidden-transport'] = 'La méthode de transport que vous essayez d\'utiliser n\'est pas autorisée.';
$string['forcesavechanges'] = 'Force sauvegarde des changements';
$string['helpnetworksettings'] = 'Configurer la communication MNet';
$string['hidelocal'] = 'Cacher les utilisateurs locaux';
$string['hideremote'] = 'Cacher les utilisateurs distants';
$string['hôte'] = 'host';
$string['hostcoursenotfound'] = 'Hôte ou cours non trouvé';
$string['hostdeleted'] = 'Hôte supprimé';
$string['hostexists'] = 'Un enregistrement existe déjà pour un hôte avec ce nom d\'hôte. (Il peut avoir été supprimé.) Modifier le dossier</a>';
$string['hostlist'] = 'Liste des hôtes en réseau';
$string['hostname'] = 'Nom d\'hôte';
$string['hostnamehelp'] = 'Le nom de domaine complet de l\'hôte distant, par exemple www.exemple.com';
$string['hostnotconfiguredforsso'] = 'Ce serveur n\'est pas configuré pour la connexion à distance.';
$string['hostsettings'] = 'Paramètres de l\' hôte';
$string['http_self_signed_help'] = 'Autoriser les connexions en utilisant un certificat SSL de bricolage autosigné sur l\'hôte distant.';
$string['https_self_signed_help'] = 'Autoriser les connexions en utilisant un bricolage SSL autosigné en PHP sur l\'hôte distant sur http.';
$string['https_verified_help'] = 'Autoriser les connexions en utilisant un certificat SSL vérifié sur l\'hôte distant.';
$string['http_verified_help'] = 'Autoriser les connexions en utilisant un certificat SSL vérifié en PHP sur l\'hôte distant, mais sur http (pas https).';
$string['id'] = 'ID';
$string['idhelp'] = 'Cette valeur est automatiquement attribuée et ne peut pas être modifiée';
$string['importfields'] = 'Champs à importer';
$string['inspect'] = 'Inspecter';
$string['installnosuchfunction'] = 'Erreur de codage ! Quelque chose essaie d\'installer une fonction mnet xmlrpc ({$a->method}) à partir d\'un fichier ({$a->file}) et il peut\'t be found!';
$string['installnosuchmethod'] = 'Erreur de codage ! Quelque chose essaie d\'installer une méthode mnet xmlrpc ({$a->method}) sur une classe ({$a->classe}) et il peut\'t be found!';
$string['installreflectionclasserror'] = 'Erreur de codage ! L\'introduction de MNet a échoué pour la méthode \'{$a->method}\' in class \'{$a->class}\'.  The original error message, in case it helps, is: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Erreur de codage ! L\'introspection de MNet a échoué pour la fonction \'{$a->method}\' in file \'{$a->file}\'.  The original error message, in case it helps, is: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Paramètre d\'accès non valide.';
$string['invalidactionparam'] = 'Paramètre d\'action non valide.';
$string['invalidhost'] = 'Vous devez fournir un identifiant d\'hôte valide';
$string['invalidpubkey'] = 'La clé n\'est pas une clé SSL valide. ({$a})';
$string['invalidurl'] = 'Paramètre URL non valide.';
$string['ipaddress'] = 'Adresse IP';
$string['is_in_range'] = 'L\'adresse IP <code>{$a}</code> représente un hôte de confiance valide.';
$string['ispublished'] = '{$a} a activé ce service pour vous.';
$string['issubscribed'] = '{$a} souscrit à ce service sur votre hôte.';
$string['keydeleted'] = 'Votre clé a été supprimée et remplacée avec succès.';
$string['keydeletedcancelled'] = 'Aucun changement n\'a été apporté à la clé.';
$string['keymismatch'] = 'La clé publique que vous tenez pour cet hôte est différente de la clé publique qu\'il publie actuellement. La clé actuellement publiée est:';
$string['last_connect_time'] = 'Dernière heure de connexion';
$string['last_connect_time_help'] = 'La dernière fois que vous avez connecté à cet hôte.';
$string['last_transport_help'] = 'Le transport que vous avez utilisé pour la dernière connexion à cet hôte.';
$string['leavedefault'] = 'Utilisez plutôt les paramètres par défaut';
$string['listservices'] = 'Liste des services';
$string['loginlinkmnetuser'] = '<br />Si vous êtes un utilisateur distant de MNet et pouvez <a href="{$a}">confirmer votre adresse e-mail ici</a>, vous pouvez être redirigé vers votre page de connexion.<br />';
$string['journaux'] = 'logs';
$string['managemnetpeers'] = 'Gérer les pairs';
$string['method'] = 'Méthode';
$string['methodhelp'] = 'Aide à la méthode pour {$a}';
$string['methodsavailableonhost'] = 'Méthodes disponibles sur {$a}';
$string['methodsavailableonhostinservice'] = 'Méthodes disponibles pour {$a->service} sur {$a->host}';
$string['methodsignature'] = 'Signature de la méthode pour {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Concaténer (jusqu\'à) 3 chaînes et retourner le résultat';
$string['mnetdisabled'] = 'MNet est <fort>handicapé</fort>.';
$string['mnetidprovider'] = 'Fournisseur d\'ID MNet';
$string['mnetidproviderdesc'] = 'Vous pouvez utiliser cette facilité pour récupérer un lien auquel vous pouvez vous connecter, si vous pouvez fournir la bonne adresse e-mail pour correspondre au nom d\'utilisateur avec lequel vous avez précédemment essayé de vous connecter.';
$string['mnetidprovidermsg'] = 'Vous devriez pouvoir vous connecter à votre fournisseur {$a}.';
$string['mnetidprovidernotfound'] = 'Désolé, mais aucune autre information n\'a pu être trouvée.';
$string['mnetpeers'] = 'Les pairs';
$string['mnetservices'] = 'Services';
$string['mnet_session_prohibited'] = 'Les utilisateurs de votre serveur d\'accueil ne sont actuellement pas autorisés à parcourir {$a}.';
$string['mnetsettings'] = 'Paramètres MNet';
$string['moodle_home_help'] = 'Le chemin vers la page d\'accueil de l\'application MNet sur l\'hôte distant, par exemple /moodle/.';
$string['name'] = 'Nom';
$string['net'] = 'Réseautage';
$string['networksettings'] = 'Paramètres du réseau';
$string['never'] = 'Jamais';
$string['noaclentries'] = 'Aucune entrée dans la liste de contrôle d\'accès SSO';
$string['noaddressforhost'] = 'Désolé, mais ce nom d\'hôte ({$a}) n\'a pas pu être résolu !';
$string['nocurl'] = 'La bibliothèque PHP cURL n\'est pas installée';
$string['nolocaluser'] = 'Aucun enregistrement local n\'existe pour un utilisateur distant, et il n\'a pas pu être créé, car cet hôte ne créera pas automatiquement des utilisateurs. Veuillez contacter votre administrateur!';
$string['nomodifyacl'] = 'Vous n\'êtes pas autorisé à modifier la liste de contrôle d\'accès MNet.';
$string['nonmatchingcert'] = 'Le sujet du certificat : <br /><em>{$a->sujet}</em><br />ne correspond pas à l\'hôte qu\'il vient de :<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Il y avait un problème à récupérer la clé publique.<br />Peut-être que l\'hôte n\'autorise pas MNet ou que la clé est invalide.';
$string['nosite'] = 'Impossible de trouver un cours au niveau du site';
$string['nosuchfile'] = 'Le fichier/fonction {$a} n\'existe pas.';
$string['nosuchfunction'] = 'Impossible de localiser la fonction, ou la fonction interdite pour RPC.';
$string['nosuchmodule'] = 'The function was incorrectly addressed and could not be located. Please use the
mod/modulename/lib/functionname format.';
$string['nosuchpublickey'] = 'Impossible d\'obtenir la clé publique pour la vérification de la signature.';
$string['nosuchservice'] = 'Le service RPC ne fonctionne pas sur cet hôte.';
$string['nosuchtransport'] = 'Il n\'y a pas de transport avec cette identification.';
$string['notBASE64'] = 'Cette chaîne n\'est pas au format encodé base64. Il ne peut pas être une clé valide.';
$string['notenoughidpinfo'] = 'Votre fournisseur d\'identité ne nous donne pas assez d\'informations pour créer ou mettre à jour votre compte localement. Désolé !';
$string['not_in_range'] = 'L\'adresse IP <code>{$a}</code> ne représente pas un hôte de confiance valide.';
$string['notinxmlrpcserver'] = 'Tentative d\'accès au client distant MNet, pas pendant l\'exécution du serveur XMLRPC';
$string['notmoodleapplication'] = 'ATTENTION: Il ne s\'agit pas d\'une application Moodle, donc certaines des méthodes d\'inspection peuvent ne pas fonctionner correctement.';
$string['notPEM'] = 'Cette clé n\'est pas au format PEM. Ça ne marchera pas.';
$string['notpermittedtojump'] = 'Vous n\'avez pas la permission de commencer une session distante depuis ce serveur Moodle.';
$string['notpermittedtojumpas'] = 'Vous pouvez\'t begin a remote session while you are logged in as another user.';
$string['notpermittedtoland'] = 'Vous n\'avez pas la permission de commencer une session à distance.';
$string['off'] = 'Off';
$string['on'] = 'On';
$string['options'] = 'Options';
$string['peerprofilefielddesc'] = 'Ici vous pouvez outrepasser les paramètres globaux pour quels champs de profil envoyer et importer lorsque de nouveaux utilisateurs sont créés';
$string['permittedtransports'] = 'Transports autorisés';
$string['phperror'] = 'Une erreur PHP interne a empêché que votre demande soit remplie.';
$string['position'] = 'Fonction';
$string['postrequired'] = 'La fonction de suppression nécessite une requête POST.';
$string['privacy:metadata'] = 'Le plugin MNet ne stocke aucune donnée personnelle.';
$string['profileexportfields'] = 'Champs à envoyer';
$string['profilefielddesc'] = 'Ici, vous pouvez configurer la liste des champs de profil qui sont envoyés et reçus sur MNet lorsque des comptes utilisateurs sont créés, ou mis à jour. Vous pouvez également passer outre cela pour chaque pair MNet individuellement. Notez que les champs suivants sont toujours envoyés et ne sont pas optionnels : {$a}';
$string['profilefields'] = 'Champs de profil';
$string['profileimportfields'] = 'Champs à importer';
$string['promiscuous'] = 'Promiscueur';
$string['publickey'] = 'Clé publique';
$string['publickey_help'] = 'La clé publique est automatiquement obtenue à partir du serveur distant.';
$string['publickeyrequired'] = 'Vous devez fournir une clé publique.';
$string['publish'] = 'Publier';
$string['reallydeleteserver'] = 'Voulez-vous vraiment supprimer le serveur ?';
$string['receivedwarnings'] = 'Les avertissements suivants ont été reçus :';
$string['recordnoexists'] = 'L\'enregistrement n\'existe pas.';
$string['reenableserver'] = 'Non - sélectionnez cette option pour réactiver ce serveur.';
$string['registerallhosts'] = 'Enregistrez tous les hôtes (mode promiscuous)';
$string['registerallhostsexplain'] = 'Vous pouvez choisir d\'enregistrer tous les hôtes qui essaient de vous connecter automatiquement. Cela signifie qu\'un enregistrement apparaîtra dans votre liste d\'hôtes pour tout site MNet qui se connecte à vous et demande votre clé publique.<br />Vous avez l\'option ci-dessous pour configurer les services pour \'All hosts\' and by enabling some services there, you are able to provide services to any remote server indiscriminately.';
$string['registerhostsoff'] = 'Enregistrer tous les hôtes est actuellement <b>off</b>';
$string['registerhostson'] = 'Enregistrer tous les hôtes est actuellement <b>on</b>';
$string['remotecourses'] = 'Cours à distance';
$string['remotehost'] = 'Hôte distant';
$string['remotehosts'] = 'Hôtes distants';
$string['remoteuser'] = 'Utilisateur distant {$a->remotetype}';
$string['remoteuserinfo'] = 'Profil récupéré de <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Le réseautage nécessite l\'extension OpenSSL';
$string['restore'] = 'Restauration';
$string['returnvalue'] = 'Valeur de retour';
$string['reviewhostdetails'] = 'Consultez les coordonnées de l\'hôte';
$string['reviewhostservices'] = 'Examiner les services d\'accueil';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP non chiffré';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (autosigné)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (autosigné)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (signé)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (signé)';
$string['selectaccesslevel'] = 'Veuillez sélectionner un niveau d\'accès dans la liste.';
$string['selectahost'] = 'Veuillez sélectionner un hôte distant.';
$string['service'] = 'Nom du service';
$string['serviceid'] = 'Numéro de service';
$string['servicesavailableonhost'] = 'Services disponibles sur {$a}';
$string['serviceswepublish'] = 'Services que nous publions à {$a}.';
$string['serviceswesubscribeto'] = 'Services sur {$a} auxquels nous souscrivons.';
$string['settings'] = 'Paramètres';
$string['showlocal'] = 'Afficher les utilisateurs locaux';
$string['showremote'] = 'Afficher les utilisateurs distants';
$string['ssl_acl_allow'] = '- Oui. Autoriser l\' utilisateur \'{$a->user}\' from \'{$a->host}\'';
$string['ssl_acl_deny'] = '- Oui. Refuser l\' utilisateur \'{$a->user}\' from \'{$a->host}\'';
$string['sslverification'] = 'Vérification SSL';
$string['sslverification_help'] = 'This option allows you to configure the level of security when connecting to a peer using HTTPS.

* None: no level of security
* Verify host only: validates the domain of the SSL certificate
* Verify host and peer (recommended): validates the domain and issuer of the SSL certificate';
$string['ssoaccesscontrol'] = 'Contrôle d\'accès SSO';
$string['ssoacldescr'] = 'Utilisez cette page pour accorder ou refuser l\'accès à des utilisateurs spécifiques des hôtes MNet distants. Ceci est fonctionnel lorsque vous offrez des services SSO aux utilisateurs distants. Pour contrôler vos utilisateurs <em>local</em>\' ability to roam to other MNet hosts, use the roles system to grant them the <em>mnetlogintoremote</em> capability.';
$string['ssoaclneeds'] = 'Pour que cette fonctionnalité fonctionne, vous devez avoir Réseautage activé, plus le plugin d\'authentification MNet activé.';
$string['strict'] = 'Strict';
$string['subscribe'] = 'Abonnez-vous';
$string['system'] = 'Système';
$string['testclient'] = 'Client test MNet';
$string['testtrustedhosts'] = 'Tester une adresse';
$string['testtrustedhostsexplain'] = 'Saisissez une adresse IP pour voir si c\'est un hôte de confiance.';
$string['theypublish'] = 'Ils publient';
$string['theysubscribe'] = 'Ils souscrivent';
$string['transport_help'] = 'Ces options sont réciproques, donc vous ne pouvez forcer un hôte distant à utiliser un certificat SSL signé que si votre serveur a également un certificat SSL signé.';
$string['trustedhosts'] = 'Hôtes XML-RPC';
$string['trustedhostsexplain'] = '<p>The trusted hosts mechanism allows specific machines to execute calls via XML-RPC to any part of the Moodle API. This is available for scripts to control Moodle behaviour and can be a very dangerous option to enable. If in doubt, keep it off.</p>
<p><strong>This is not needed for any standard MNet feature!</strong> Turn it on only if you know what you are doing.</p>
<p>To enable it, enter a list of IP addresses or networks,
one on each line. Some examples:</p>
Your local host:<br />127.0.0.1<br />Your local host (with a network block):<br />127.0.0.1/32<br />Only the host with IP address 192.168.0.7:<br />192.168.0.7/32<br />Any host with an IP address between 192.168.0.1 and 192.168.0.255:<br />192.168.0.0/24<br />Any host whatsoever:<br />192.168.0.0/0<br />Obviously the last example is <strong>not</strong> a recommended configuration.';
$string['turnitoff'] = 'Éteins ça.';
$string['turniton'] = 'Allumez-le.';
$string['type'] = 'Type';
$string['unknown'] = 'Inconnu';
$string['unknownerror'] = 'Une erreur inconnue s\'est produite pendant la négociation.';
$string['usercannotchangepassword'] = 'Vous ne pouvez pas modifier votre mot de passe ici car vous êtes un utilisateur distant.';
$string['userchangepasswordlink'] = '<br /> Vous pouvez modifier votre mot de passe à l\'adresse <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> fournisseur.';
$string['usernotfullysetup'] = 'Votre compte utilisateur est incomplet. Vous devez retourner à votre fournisseur </a> et vous assurer que votre profil est rempli. Vous pourriez avoir besoin de vous déconnecter et de revenir pour que cela prenne effet.';
$string['usersareonline'] = 'Avertissement : les utilisateurs {$a} de ce serveur sont actuellement connectés à votre site.';
$string['validated_by'] = 'Il est validé par le réseau : <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Vérifier l\'hôte et les pairs';
$string['verifyhostonly'] = 'Vérifier uniquement l\'hôte';
$string['verifysignature-error'] = 'La vérification de la signature a échoué. Une erreur s\'est produite.';
$string['verifysignature-invalid'] = 'La vérification de la signature a échoué. Il semble que cette charge n\'ait pas été signée par vous.';
$string['version'] = 'Version';
$string['warning'] = 'Avertissement';
$string['wrong-ip'] = 'Votre adresse IP ne correspond pas à l\'adresse que nous avons enregistrée.';
$string['xmlrpc-missing'] = 'Vous devez avoir XML-RPC installé dans votre construction PHP pour pouvoir utiliser cette fonctionnalité.';
$string['yourhost'] = 'Votre hôte';
$string['yourpeers'] = 'Vos pairs';
