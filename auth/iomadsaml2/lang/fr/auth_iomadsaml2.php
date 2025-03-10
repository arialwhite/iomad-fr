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
 * Anobody can login using saml2
 *
 * @package   auth_iomadsaml2
 * @copyright Brendan Heywood <brendan@catalyst-au.net>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['alterlogout'] = 'Autre URL de Déconnexion';
$string['alterlogout_help'] = 'L\'URL pour rediriger un utilisateur après l\'exécution de tous les mécanismes de déconnexion interne';
$string['anyauth'] = 'Autorisé tout type d\'autorisation';
$string['anyauth_help'] = 'Oui: Autoriser la connexion SAML pour tous les utilisateurs? Non: Seuls les utilisateurs qui ont iomadsaml2 comme type.';
$string['anyauthotherdisabled'] = 'Vous vous êtes connecté avec succès sous \'{$a->username}\' but your auth type of \'{$a->auth}\' is disabled.';
$string['attemptsignout'] = 'Tentative de signature de l\'IDP';
$string['attemptsignout_help'] = 'Cela tentera de communiquer avec l\'IdP pour envoyer une demande de dédicace';
$string['auth_iomadsaml2description'] = 'Authentifier avec un fournisseur d\'identité SAML2 (IdP)';
$string['auth_iomadsaml2blockredirectdescription'] = 'Rediriger ou afficher le message vers les connexions SAML2 en fonction des restrictions de groupe configurées';
$string['autocreate'] = 'Création automatique des utilisateurs';
$string['autocreate_help'] = 'Permettre la création d\'utilisateurs Moodle sur demande';
$string['autologin'] = 'Enregistrement automatique';
$string['autologin_help'] = 'Sur les pages qui permettent l\'accès aux invités sans connexion, connectez-vous automatiquement à Moodle avec un compte utilisateur réel s\'ils sont connectés à l\'IDP (en utilisant une authentification passive).';
$string['autologinbysession'] = 'Vérifiez une fois par session';
$string['autologinbycookie'] = 'Vérifier si le cookie spécifié existe ou change';
$string['autologincookie'] = 'Cookie de connexion automatique';
$string['autologincookie_help'] = 'Nom du cookie utilisé pour décider quand tenter de se connecter automatiquement (seulement si l\'option cookie est sélectionnée ci-dessus).';
$string['availableidps'] = 'Sélectionner disponible Idées';
$string['availableidps_help'] = 'If an IdP metadata xml contains multiple IdP entities, you will need to select which entities are availiable
for users to login with.';
$string['blockredirectheading'] = 'Actions de blocage de compte';
$string['attrsimple'] = 'Simplifier les attributs';
$string['attrsimple_help'] = 'Divers IdP\'s such as ADFS use long attribute keys such as urns or namespaced xml schema names. If set to Yes this will simplify these, eg map http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname to such \'givenname\'.';
$string['certificatedetails'] = 'Détails du certificat';
$string['certificatedetailshelp'] = '<h1>SAML2 produit automatiquement le contenu du certificat public</h1><p> Le chemin pour le certificat est ici:</p>';
$string['checkcertificateexpiry'] = 'Expiration du certificat SAML';
$string['checkcertificateexpired'] = 'Le certificat SAML a expiré depuis {$a}';
$string['checkcertificatewarn'] = 'Le certificat SAML expire dans {$a}';
$string['checkcertificateok'] = 'Le certificat SAML expire dans {$a}';
$string['certificate_help'] = 'Régénérer la clé privée et le certificat utilisés par ce SP.'{$a}\'>View SP certificate</a>';
$string['certificatelock_help'] = 'Le verrouillage des certificats les empêchera d\'être écrasés une fois générés.';
$string['certificatelock'] = 'Certificat de verrouillage';
$string['certificatelock_locked'] = 'Le certificat est verrouillé';
$string['certificatelock_lockedmessage'] = 'Les certificats sont actuellement verrouillés.';
$string['certificatelock_unlock'] = 'Déverrouillage des certificats';
$string['certificatelock_regenerate'] = 'Pas régénérer les certificats parce qu\'ils ont été verrouillés!';
$string['certificatelock_warning'] = 'Avertissement. Vous allez verrouiller les certificats, êtes-vous sûr de vouloir le faire ? <br> Les certificats ne sont pas verrouillés actuellement.';
$string['certificate'] = 'Certificat de régénération';
$string['commonname'] = 'Nom usuel';
$string['countryname'] = 'Pays';
$string['debug'] = 'Déboguement';
$string['debug_help'] = '<p> Cela ajoute un débogage supplémentaire au log moodle normal.'{$a}\'>View SSP config</a></p>';
$string['duallogin'] = 'Double connexion';
$string['duallogin_help'] = '
<p>If on, then users will see both manual and a SAML login button. If off they will always be taken directly to the IdP login page.</p>
<p>If passive, then the users that are already authenticated into the IDP will be automatically logged in, otherwise they will be sent to Moodle login page.</p>
<p>If off, then admins can still see the manual login page via /login/index.php?saml=off</p>
<p>If on, then external pages can deep link into moodle using saml eg /course/view.php?id=45&saml=on</p>
<p>If set to test IdP connection, the network will be checked for connectivity, and if functional, SAML login will be initiated.</p>';
$string['emailtaken'] = 'Peut\'t create a new account, because {$a} email address is already registered';
$string['emailtakenupdate'] = 'Votre email était't updated, because email address {$a} is already registered';
$string['errorinvalidautologin'] = 'Demande d\'enregistrement automatique non valide';
$string['errorparsingxml'] = 'Erreur d\'analyse XML : {$a}';
$string['exception'] = 'Exception SAML2: {$a}';
$string['expirydays'] = 'Expiration en jours';
$string['error'] = 'Erreur de connexion';
$string['fielddelimiter'] = 'Délimiteur de champ';
$string['fielddelimiter_help'] = 'Le délimiteur à utiliser lorsqu\'un champ reçoit un tableau de valeurs de l\'IDP.';
$string['flaggedresponsetypemessage'] = 'Afficher le message personnalisé';
$string['flaggedresponsetyperedirect'] = 'Rediriger vers l\'URL externe';
$string['flagredirecturl'] = 'Rediriger l\'URL';
$string['flagredirecturl_help'] = '
<p>The URL to redirect a user is not allowed to access Moodle based on configured group restrictions.</p>
<p>(Only utilised when \'Response type\' is \'Redirect to external URL\'.)</p>';
$string['flagmessage'] = 'Message de réponse';
$string['flagmessage_help'] = '
<p>The message to display when a user is not allowed to access Moodle based on configured group restrictions.</p>
<p>(Only displayed when \'Response response type\' is \'Display custom message\'.)</p>';
$string['flagmessage_default'] = 'Vous êtes connecté à votre fournisseur d\'identité, mais ce compte a un accès limité à Moodle, veuillez contacter votre administrateur pour plus de détails.';
$string['flagresponsetype'] = 'Type de réponse de blocage de compte';
$string['flagresponsetype_help'] = 'Si l\'accès est bloqué en fonction des restrictions de groupe configurées, comment Moodle devrait-il réagir ?';
$string['idpattr_help'] = 'Quel attribut IdP devrait être associé à un champ utilisateur Moodle ?';
$string['idpattr'] = 'IdP cartographique';
$string['idpmetadata_badurl'] = 'métadonnées non valides à {$a}';
$string['idpmetadata_help'] = 'Pour utiliser plusieurs IdP saisissez chaque url de métadonnées publiques sur une nouvelle ligne.<br/> Pour remplacer un nom, placez le texte avant l\'adresse http. p. ex. "Forded IdP Name http://ssp.local/simplesaml/saml2/idp/metadata.php"';
$string['idpmetadata'] = 'métadonnées IDP xml OU URL publique xml';
$string['idpmetadata_invalid'] = 'Le XML IdP est\'t valid';
$string['idpmetadata_noentityid'] = 'L\'IDP XML n\'a pas d\'identificateur d\'entité';
$string['idpmetadatarefresh_help'] = 'Exécuter une tâche planifiée pour mettre à jour les métadonnées IDP à partir de l\'URL des métadonnées IDP';
$string['idpmetadatarefresh'] = 'Actualisation des métadonnées de l\'IDP';
$string['idpnamedefault'] = 'Connexion via SAML2';
$string['idpnamedefault_varaible'] = 'Connexion via SAML2 ({$a})';
$string['idpname_help'] = 'par exemple myUNI - cela est détecté à partir des métadonnées et apparaîtra sur la page de connexion double (si activé)';
$string['idpname'] = 'Redéfinition de l\'étiquette de l\'IDP';
$string['localityname'] = 'Localité';
$string['logdirdefault'] = '/tmp/';
$string['logdir_help'] = 'Le répertoire du journal SSPHP va écrire, le fichier sera nommé simplesamlphp.log';
$string['logdir'] = 'Répertoire des journaux';
$string['logtofile'] = 'Activer la connexion au fichier';
$string['logtofile_help'] = 'Activer cela redirigera SSPHP log sortie vers un fichier dans le logdir';
$string['manageidpsheading'] = 'Gérer les fournisseurs d\'identité (IdP) disponibles';
$string['mdlattr_help'] = 'À quel champ utilisateur Moodle l\'attribut IdP doit-il être associé ?';
$string['mdlattr'] = 'Cartographie de Moodle';
$string['wantassertionssigned'] = 'Vous voulez des assertions signées';
$string['wantassertionssigned_help'] = 'Indique si les assertions reçues par le présent SP doivent être signées';
$string['assertionsconsumerservices'] = 'Assertions services aux consommateurs';
$string['assertionsconsumerservices_help'] = 'Liste des liaisons que le SP devrait soutenir';
$string['spentityid'] = 'Numéro d\'identification de l\'entité';
$string['spentityid_help'] = 'Surpasser l\'identifiant de l\'entité du fournisseur de services. Dans la plupart des cas, laissez vide et un bon par défaut sera utilisé à la place.';
$string['allowcreate'] = 'Permettre de créer';
$string['allowcreate_help'] = 'Permettre la création d\'utilisateurs d\'IDP sur demande';
$string['authncontext'] = 'AuthnContext';
$string['authncontext_help'] = 'Permet une augmentation des assertions. Laisser en blanc sauf si nécessaire';
$string['metadatafetchfailed'] = 'La recherche de métadonnées a échoué : {$a}';
$string['metadatafetchfailedstatus'] = 'La recherche de métadonnées a échoué : Code de statut {$a}';
$string['metadatafetchfailedunknown'] = 'La recherche de métadonnées a échoué : Erreur cURL inconnue';
$string['multiidp:label:displayname'] = 'Afficher le nom';
$string['multiidp:label:alias'] = 'Autres';
$string['multiidp:label:active'] = 'Actif';
$string['multiidp:label:defaultidp'] = 'Identification par défaut';
$string['multiidp:label:admin'] = 'Pour les utilisateurs d\'administration seulement';
$string['multiidp:label:admin_help'] = 'Tous les utilisateurs qui se connectent à l\'aide de cet IdP seront automatiquement un administrateur du site';
$string['multiidp:label:whitelist'] = 'Adresses IP réorientées';
$string['multiidp:label:whitelist_help'] = 'Si défini, il forcera les clients à ce format IdP. Format: xxx.xxx.xxx.xxx/bitmask. Séparer plusieurs sous-réseaux sur une nouvelle ligne.';
$string['multiidpinfo'] = '
<ul>
<li>An IdP can only be used if it is set as Active</li>
<li>When duallogin has been turned on all active IdPs will be displayed on the login page</li>
<li>When an IdP has been set as Default and duallogin is not turned on, this IdP will automatically be used unless ?multiidp=on or saml=off is passed on /login/index.php</li>
<li>An IdP can be given an Alias, when going to /login/index.php?idpalias={alias} the alias can be passed to directly use that IdP</li>
</ul>';
$string['multiidpbuttons'] = 'Boutons avec icônes';
$string['multiidpdisplay'] = 'Idées multiples Type d\'affichage P';
$string['multiidpdisplay_help'] = 'Si une métadonnées IDP xml contient plusieurs entités IDP, comment chaque IDP disponible sera-t-il affiché?';
$string['multiidpdropdown'] = 'Liste déroulante';
$string['nameidasattrib'] = 'Nom de l\'exposition ID comme attribut';
$string['nameidasattrib_help'] = 'La revendication NameID sera exposée au SSPHP en tant qu\'attribut nommé nameid';
$string['noattribute'] = 'Vous vous êtes connecté avec succès mais nous n\'avons pas trouvé votre \'{$a}\' attribute to associate you to an account in Moodle.';
$string['noidpfound'] = 'L\'IDP \'{$a}\' was not found as a configured IdP.';
$string['noredirectips'] = 'Restreindre noredirect par IP';
$string['noredirectips_help'] = 'Lorsque la double connexion est désactivée et que les IP sont définies, cela limitera l\'utilisation de ?saml=off et ?noredirect=1 pendant la connexion SAML aux utilisateurs avec des sous-réseaux IP correspondants.';
$string['nouser'] = 'Vous vous êtes connecté avec succès sous \'{$a}\' but do not have an account in Moodle.';
$string['nullprivatecert'] = 'La création du certificat privé a échoué.';
$string['nullpubliccert'] = 'La création du certificat public a échoué.';
$string['organizationalunitname'] = 'Unité organisationnelle';
$string['organizationname'] = 'Organisation';
$string['passivemode'] = 'Mode passif';
$string['plugindisabled'] = 'Le plugin d\'authentification SAML2 est désactivé';
$string['pluginname'] = 'SAML2';
$string['privatekeypass'] = 'Mot de passe de la clé de certificat privé';
$string['privatekeypass_help'] = 'Ceci est utilisé pour signer le certificat Moodle local, ce qui modifiera le certificat actuel.';
$string['regenerateheading'] = 'Régénérer la clé privée et le certificat';
$string['regenerate_submit'] = 'Régénérer';
$string['requestedattributes'] = 'Attributs demandés';
$string['requestedattributes_help'] = 'Certains ID\'s need the SP to declare which attributes will be requested or are required. Add each attribute on a new line and these will be present in the SP metadata under the <code>AttributeConsumingService</code> tag. If you want a field to be required put a space and then * after that line. {$a->example}';
$string['rememberidp'] = 'Se souvenir du service de connexion';
$string['required'] = 'Ce champ est requis';
$string['requireint'] = 'Ce champ est nécessaire et doit être un entier positif';
$string['showidplink'] = 'Afficher l\'identifiant Lien P';
$string['showidplink_help'] = 'Cela affichera le lien IdP lorsque le site est configuré.';
$string['source'] = 'Source : {$a}';
$string['spmetadata_help'] = '<a href=\'{$a}\'>View Service Provider Metadata</a> | <a href=\'{$a}?download=1\'>Download SP Metadata</a>
<p>You may need to give this to the IdP admin to whitelist you.</p>';
$string['spmetadatasign_help'] = 'Signez les métadonnées SP.';
$string['spmetadatasign'] = 'SP Signature des métadonnées';
$string['spmetadata'] = 'Métadonnées SP';
$string['tempdirdefault'] = '/tmp/simplesaml';
$string['tempdir_help'] = 'Un répertoire où SimpleSAMLphp peut enregistrer des fichiers temporaires';
$string['tempdir'] = 'Répertoire temporaire SimpleSAMLphp';
$string['sspversion'] = 'Version simpleSAMLphp';
$string['stateorprovincename'] = 'État ou province';
$string['status'] = 'État';
$string['suspendeduser'] = 'Vous vous êtes connecté avec succès sous \'{$a}\' but your account has been suspended in Moodle.';
$string['taskmetadatarefresh'] = 'Métadonnées rafraîchir la tâche';
$string['test_auth_button_login'] = 'Connexion IdP';
$string['test_auth_button_logout'] = 'Déconnexion de l\'IDP';
$string['test_auth_str'] = 'Test estAuthentifié et connexion';
$string['test_endpoint'] = 'URL du test de connexion';
$string['test_endpoint_desc'] = 'Saisissez une URL pour tester la connexion contre la redirection IdP depuis le navigateur client. Certains utilisateurs ou réseaux peuvent ne pas avoir de connectivité à l\'IDP en fonction des permissions de compte ou de réseau.';
$string['test_idp_conn'] = 'Essai de connexion IdP';
$string['test_noticetestrequirements'] = 'Pour utiliser ce test, le plugin doit être configuré, activé et le mode de débogage doit être activé dans les paramètres du plugin.';
$string['test_passive_str'] = 'Test avec isPassive';
$string['testdebuggingdisabled'] = 'Pour utiliser cette page de test, le débogage SAML doit être sur';
$string['tolower'] = 'Comparaison de cas';
$string['tolower:exact'] = 'Exactement';
$string['tolower:lowercase'] = 'Cas inférieur';
$string['tolower:caseandaccentinsensitive'] = 'Cas et accent insensible';
$string['tolower:caseinsensitive'] = 'Insensible au cas';
$string['tolower_help'] = '
<p>Exact: match is case sensitive (default).</p>
<p>Lower case: applies lower case to the IdP attribute before matching.</p>
<p>Case insensitive: ignore case when matching.</p>';
$string['wrongauth'] = 'Vous vous êtes connecté avec succès sous \'{$a}\' but are not authorized to access Moodle.';
$string['auth_data_mapping'] = 'Cartographie des données';
$string['auth_fieldlockfield'] = 'Valeur de verrouillage ({$a})';
$string['auth_fieldmapping'] = 'Cartographie des données ({$a})';
$string['auth_fieldlock_expl'] = '<p><b>Valeur maximale:</b> Si activé, empêchera les utilisateurs et les administrateurs de Moodle de modifier le champ directement. Utilisez cette option si vous maintenez ces données dans le système d\'authentification externe. </p>';
$string['auth_fieldlocks'] = 'Verrouiller les champs utilisateur';
$string['auth_updatelocalfield'] = 'Mettre à jour localement ({$a})';
$string['auth_updateremotefield'] = 'Mise à jour externe ({$a})';
$string['cannotmapfield'] = 'Cartographie des collisions détectées - deux champs cartes à la même note {$a}';
$string['locked'] = 'Verrouillé';
$string['unlocked'] = 'Débloqué';
$string['unlockedifempty'] = 'Débloqué si vide';
$string['update_never'] = 'Jamais';
$string['update_oncreate'] = 'Sur la création';
$string['update_onlogin'] = 'Sur chaque connexion';
$string['update_onupdate'] = 'Mise à jour';
$string['phone1'] = 'Téléphone';
$string['phone2'] = 'Téléphone mobile';
$string['nameidpolicy'] = 'Politique de l\'ID';
$string['nameidpolicy_help'] = '';
$string['grouprules'] = 'Règles de groupe';
$string['grouprules_help'] = '<p>A list of rules to be able to control access based on the group attribute value.</p>
<p>Each line should have one rule in format: {allow or deny} {groups attribute}={value}.</p>
<p>Higher in the list rule will be applied first.</p>
Example: <br/>
allow admins=yes<br>
deny admins=no<br>
allow examrole=proctor<br>
deny library=overdue<br>';
/*
 * Privacy provider (GDPR)
 */
$string["privacy:no_data_reason"] = "Le plugin d'authentification Saml2 ne stocke aucune donnée personnelle.";

/*
 * Signing Algorithm
 */
$string['sha1'] = 'Héritage SHA1 (Dangereux)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['signaturealgorithm'] = 'Signer l\'algorithme';
$string['signaturealgorithm_help'] = 'C\'est l\'algorithme qui sera utilisé pour signer les requêtes SAML. Avertissement : L\'algorithme SHA1 n\'est prévu que pour la compatibilité arrière, sauf si vous devez absolument l\'utiliser, il est recommandé de l\'éviter et d\'utiliser au moins SHA256.';
$string['selectloginservice'] = 'Sélectionnez un service de connexion';
$string['regenerateheader'] = 'Régénérer la clé privée et le certificat';
$string['regeneratewarning'] = 'Avertissement ! Générer un nouveau certificat écrasera le présent et vous devrez peut-être mettre à jour votre PDI';
$string['regeneratepath'] = 'Chemin du certificat : {$a}';
$string['regenerateheader'] = 'Régénérer la clé privée et le certificat';
$string['regeneratesuccess'] = 'Clé privée et certificat régénérés avec succès';
