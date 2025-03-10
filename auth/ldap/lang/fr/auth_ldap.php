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
 * Strings for component 'auth_ldap', language 'en'.
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_ldap_ad_create_req'] = 'Impossible de créer le nouveau compte dans Active Directory. Assurez-vous de répondre à toutes les exigences pour que cela fonctionne (connection LDAPS, lier l\'utilisateur avec des droits adéquats, etc.)';
$string['auth_ldap_attrcreators'] = 'Liste des groupes ou contextes dont les membres sont autorisés à créer des attributs. Séparer plusieurs groupes avec \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Créateurs d\'attributs';
$string['auth_ldap_auth_user_create_key'] = 'Créer des utilisateurs externes';
$string['auth_ldap_bind_dn'] = 'Si vous voulez utiliser bill-user pour rechercher des utilisateurs, spécifiez-le ici. Quelque chose comme \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Nom distingué';
$string['auth_ldap_bind_pw'] = 'Mot de passe pour bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Mot de passe';
$string['auth_ldap_bind_settings'] = 'Paramètres de bind';
$string['auth_ldap_contexts'] = 'Liste des contextes où se trouvent les utilisateurs. Séparer différents contextes avec \';\'. For example: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contextes';
$string['auth_ldap_create_context'] = 'Si vous activez la création d\'un utilisateur avec confirmation par courriel, indiquez le contexte dans lequel les utilisateurs sont créés. Ce contexte devrait être différent des autres utilisateurs pour prévenir les problèmes de sécurité. Vous faites\'t need to add this context to ldap_context-variable, Moodle will search for users from this context automatically.<br /><b>Note!</b> You have to modify the method user_create() in file auth/ldap/auth.php to make user creation work';
$string['auth_ldap_create_context_key'] = 'Contexte pour les nouveaux utilisateurs';
$string['auth_ldap_create_error'] = 'Erreur lors de la création d\'un utilisateur dans LDAP.';
$string['auth_ldapdescription'] = 'Cette méthode fournit une authentification contre un serveur LDAP externe. Si le nom d\'utilisateur et le mot de passe donnés sont valides, Moodle crée une nouvelle entrée utilisateur dans sa base de données. Ce plugin peut lire les attributs utilisateur de LDAP et préremplir les champs recherchés dans Moodle. Pour les logins suivants, seul le nom d\'utilisateur et le mot de passe sont vérifiés.';
$string['auth_ldap_expiration_desc'] = 'Sélectionner \'{$a->no}\' to disable expired password checking or \'{$a->ldapserver}\' to read the password expiry time directly from the LDAP server.';
$string['auth_ldap_expiration_key'] = 'Expiration';
$string['auth_ldap_expiration_warning_desc'] = 'Nombre de jours avant l\'avertissement d\'expiration du mot de passe.';
$string['auth_ldap_expiration_warning_key'] = 'Avertissement d\'expiration';
$string['auth_ldap_expireattr_desc'] = 'Facultatif: Surpasse l\'attribut LDAP qui stocke le temps d\'expiration du mot de passe.';
$string['auth_ldap_expireattr_key'] = 'attribut d\'expiration';
$string['auth_ldapextrafields'] = 'Ces champs sont facultatifs. Vous pouvez choisir de pré-remplir certains champs utilisateurs Moodle avec des informations des champs <b>LDAP</b> que vous spécifiez ici. <p>Si vous laissez ces champs vides, alors rien ne sera transféré de LDAP et Moodle par défaut sera utilisé à la place.</p><p> Dans les deux cas, l\'utilisateur pourra modifier tous ces champs après leur connexion.</p>';
$string['auth_ldap_graceattr_desc'] = 'Facultatif: Au-delà de l\'attribut de connexion de grâce';
$string['auth_ldap_gracelogin_key'] = 'attribut de connexion Grace';
$string['auth_ldap_gracelogins_desc'] = 'Activer le support de connexion LDAP grace. Après l\'expiration du mot de passe, l\'utilisateur peut se connecter jusqu\'à ce que le compte de connexion soit 0. Activer ce paramètre affiche le message de connexion de grâce si le mot de passe a expiré.';
$string['auth_ldap_gracelogins_key'] = 'Connexions Grace';
$string['auth_ldap_groupecreators'] = 'Liste des groupes ou contextes dont les membres sont autorisés à créer des groupes. Séparer plusieurs groupes avec \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Créateurs de groupes';
$string['auth_ldap_host_url'] = 'Spécifiez l\'hôte LDAP en forme d\'URL comme \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'. Separate multiple servers with \';\' to get failover support.';
$string['auth_ldap_host_url_key'] = 'URL de l\'hôte';
$string['auth_ldap_changepasswordurl_key'] = 'URL de changement de mot de passe';
$string['auth_ldap_ldap_encoding'] = 'Encodage utilisé par le serveur LDAP, probablement utf-8. Si LDAP v2 est sélectionné, Active Directory utilise son encodage configuré, comme cp1252 ou cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Encodage LDAP';
$string['auth_ldap_login_settings'] = 'Paramètres de connexion';
$string['auth_ldap_memberattribute'] = 'Facultatif: Surpasse l\'attribut de membre utilisateur, quand les utilisateurs appartiennent à un groupe. Habituellement \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Dépasse la gestion des valeurs des attributs des membres';
$string['auth_ldap_memberattribute_isdn_key'] = 'L\'attribut membre utilise dn';
$string['auth_ldap_memberattribute_key'] = 'attribut membre';
$string['auth_ldap_noconnect'] = 'LDAP-module ne peut pas se connecter au serveur : {$a}';
$string['auth_ldap_noconnect_all'] = 'Le module LDAP ne peut se connecter à aucun serveur : {$a}';
$string['auth_ldap_noextension'] = 'Le module PHP LDAP ne semble pas être présent. Assurez-vous qu\'il est installé et activé si vous voulez utiliser ce plugin d\'authentification.';
$string['auth_ldap_no_mbstring'] = 'Vous avez besoin de l\'extension mbstring pour créer des utilisateurs dans Active Directory.';
$string['auth_ldapnotinstalled'] = 'Impossible d\'utiliser l\'authentification LDAP. Le module PHP LDAP n\'est pas installé.';
$string['auth_ldap_objectclass'] = 'Facultatif: Objet de dépassement Classe utilisée pour nommer/rechercher des utilisateurs sur ldap_user_type. Habituellement, vous faites\'t need to change this.';
$string['auth_ldap_objectclass_key'] = 'Classe d\'objet';
$string['auth_ldap_opt_deref'] = 'Détermine comment les alias sont traités pendant la recherche. Sélectionnez une des valeurs suivantes : "Non" (LDAP_DEREF_NEVER) ou "Oui" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Alias de référence';
$string['auth_ldap_passtype'] = 'Spécifiez le format des mots de passe nouveaux ou modifiés dans le serveur LDAP.';
$string['auth_ldap_passtype_key'] = 'Format du mot de passe';
$string['auth_ldap_passwdexpire_settings'] = 'Paramètres d\'expiration du mot de passe LDAP';
$string['auth_ldap_preventpassindb'] = 'Sélectionnez oui pour empêcher le stockage des mots de passe dans Moodle\'s DB.';
$string['auth_ldap_preventpassindb_key'] = 'Prévenir la mise en cache des mots de passe';
$string['auth_ldap_rolecontext'] = 'Contexte {$a->nom local}';
$string['auth_ldap_rolecontext_help'] = 'Contexte LDAP utilisé pour sélectionner <i>{$a->nomlocal}</i> mapping. Séparer plusieurs groupes avec \';\'. Usually something like "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Rechercher les utilisateurs des sous-contextes.';
$string['auth_ldap_search_sub_key'] = 'Sous-contextes de recherche';
$string['auth_ldap_server_settings'] = 'Paramètres du serveur LDAP';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() ne supporte pas le type d\'utilisateur sélectionné: {$a}';
$string['auth_ldap_update_userinfo'] = 'Mettre à jour les informations utilisateur (prénom, nom, adresse...) de LDAP à Moodle. Spécifiez les paramètres de « mappage de données » que vous avez besoin.';
$string['auth_ldap_user_attribute'] = 'Facultatif: Surpasse l\'attribut utilisé pour les utilisateurs de nom/recherche. Habituellement \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'attribut utilisateur';
$string['auth_ldap_suspended_attribute'] = 'Facultatif: Une fois fourni, cet attribut sera utilisé pour activer/suspendre le compte utilisateur créé localement.';
$string['auth_ldap_suspended_attribute_key'] = 'attribut suspendu';
$string['auth_ldap_user_exists'] = 'Le nom d\'utilisateur LDAP existe déjà.';
$string['auth_ldap_user_settings'] = 'Paramètres de recherche de l\'utilisateur';
$string['auth_ldap_user_type'] = 'Sélectionnez comment les utilisateurs sont stockés dans LDAP. Ce paramètre spécifie également comment fonctionne l\'expiration de la connexion, les connexions grace et la création d\'utilisateur.';
$string['auth_ldap_user_type_key'] = 'Type d\'utilisateur';
$string['auth_ldap_usertypeundefined'] = 'config.user_type non défini ou la fonction ldap_expirationtime2unix ne supporte pas le type sélectionné!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type non défini ou la fonction ldap_unixi2expirationtime ne supporte pas le type sélectionné!';
$string['auth_ldap_version'] = 'La version du protocole LDAP que votre serveur utilise.';
$string['auth_ldap_version_key'] = 'Version';
$string['auth_ntlmsso'] = 'NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2 NT2';
$string['auth_ntlmsso_enabled'] = 'Définit à oui pour tenter Single Sign On avec le domaine NTLM. Notez que cela nécessite une configuration supplémentaire sur le serveur pour fonctionner. Pour plus de détails, voir la documentation <a href="https://docs.moodle.org/en/NTLM_authentification">authentification NTLM</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Activer';
$string['auth_ntlmsso_ie_fastpath'] = 'Set pour activer le chemin rapide NTLM SSO (permet de contourner certaines étapes si le client\'s browser is MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Une voie rapide ?';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Oui, tous les autres navigateurs utilisent un formulaire de connexion standard';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Oui, essayez NTLM autres navigateurs';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Tentative NTLM avec tous les navigateurs';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Impossible d\'extraire le nom d\'utilisateur de l\'en-tête REMOTE_USER. Le format configuré est-il correct?';
$string['auth_ntlmsso_missing_username'] = 'Vous devez spécifier au moins %username% dans le format distant du nom d\'utilisateur';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Format du nom d\'utilisateur distant';
$string['auth_ntlmsso_remoteuserformat'] = 'Si vous avez choisi \'NTLM\' in \'Authentication type\', you can specify the remote username format here. If you leave this empty, the default DOMAIN\\username format will be used. You can use the optional <b>%domain%</b> placeholder to specify where the domain name appears, and the mandatory <b>%username%</b> placeholder to specify where the username appears. <br /><br />Some widely used formats are <tt>%domain%\\%username%</tt> (MS Windows default), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> and just <tt>%username%</tt> (if there is no domain part).';
$string['auth_ntlmsso_subnet'] = 'S\'il est défini, il ne tentera que SSO avec les clients dans ce sous-net. Format: xxx.xxx.xxx/bitmask. Séparer plusieurs sous-réseaux avec \',\' (comma).';
$string['auth_ntlmsso_subnet_key'] = 'Sous-net';
$string['auth_ntlmsso_type_key'] = 'Type d\'authentification';
$string['auth_ntlmsso_type'] = 'La méthode d\'authentification configurée dans le serveur web pour authentifier les utilisateurs (en cas de doute, choisissez NTLM)';
$string['cannotmaprole'] = 'Le rôle « {$a->rolename} » ne peut pas être mapifié parce que son nom abrégé « {$a->shortname} » est trop long et/ou contient des tirets. Pour qu\'il puisse être cartographié, le nom abrégé doit être réduit à un maximum de caractères {$a->charlimit} et de tout trait d\'union enlevé. <a href="{$a->lien}"> Modifier le rôle</a>';
$string['connectingldap'] = "Connexion au serveur LDAP...\n";
$string['connectingldapsuccess'] = "La connexion à votre serveur LDAP a été réussie";
$string['creatingtemptable'] = "Création d'une table temporaire";
$string['didntfindexpiretime'] = 'mot de passe_expire() a fait\'t find expiration time.';
$string['didntgetusersfromldap'] = "N'a obtenu aucun utilisateur de LDAP -- erreur? -- sortie";
$string['gotcountrecordsfromldap'] = "J'ai des enregistrements de LDAP\n";
$string['invalidusererrors'] = "Avertissement : Création interrompue de comptes utilisateurs. Pour l'année";
$string['invaliduserexception'] = "\nError: Impossible de créer un nouveau compte utilisateur. Détails et raison:\n{\$a}\nSkipping this user.\n\n";
$string['ldapnotconfigured'] = 'L\'url hôte LDAP n\'est actuellement pas configuré';
$string['morethanoneuser'] = 'Plus d\'un enregistrement utilisateur trouvé dans LDAP. En utilisant seulement le premier.';
$string['needbcmath'] = 'Vous avez besoin de l\'extension BCMath pour utiliser la vérification de mot de passe expirée avec Active Directory.';
$string['needmbstring'] = 'Vous avez besoin de l\'extension mbstring pour modifier les mots de passe dans Active Directory';
$string['nodnforusername'] = 'Erreur dans user_update_password(). Pas de DN pour : {$a->nom d\'utilisateur}';
$string['noemail'] = 'J\'ai essayé de vous envoyer un mail mais j\'ai échoué !';
$string['notcalledfromserver'] = 'Ne devrait pas être appelé depuis le serveur web!';
$string['noupdatestobedone'] = "Aucune mise à jour à faire\n";
$string['nouserentriestoremove'] = "Aucune entrée utilisateur à supprimer\n";
$string['nouserentriestorevive'] = "Aucune entrée utilisateur à relancer\n";
$string['nouserstobeadded'] = 'Aucune entrée utilisateur à ajouter';
$string['ntlmsso_attempting'] = 'Tentative de connexion unique via NTLM...';
$string['ntlmsso_failed'] = 'La connexion automatique a échoué, essayez la page de connexion normale...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO est désactivé.';
$string['ntlmsso_unknowntype'] = 'Type ntlmsso inconnu !';
$string['pagedresultsnotsupp'] = 'Les résultats des pages LDAP ne sont pas pris en charge (ni votre version PHP n\'a pas de support, vous avez configuré Moodle pour utiliser la version 2 du protocole LDAP ou Moodle ne peut pas contacter votre serveur LDAP pour voir si le support des pages est disponible).';
$string['pagesize'] = 'Assurez-vous que cette valeur est plus petite que la limite de taille du résultat de votre serveur LDAP (le nombre maximum d\'entrées qui peuvent être retournées en une seule requête)';
$string['pagesize_key'] = 'Taille des pages';
$string['pluginname'] = 'Serveur LDAP';
$string['pluginnotenabled'] = 'Plugin non activé !';
$string['renamingnotallowed'] = 'Renommer l\'utilisateur non autorisé dans LDAP';
$string['rootdseerror'] = 'Erreur lors de la requête racine DSE pour Active Directory';
$string['syncroles'] = 'Synchroniser les rôles du système à partir de LDAP';
$string['synctask'] = 'Fonction de synchronisation des utilisateurs LDAP';
$string['sync_updateuserchunk'] = 'Définissez cette valeur au nombre d\'utilisateurs que vous voulez mettre à jour par transaction. Le réglage à 0 mettra à jour tous les utilisateurs dans une seule transaction.';
$string['sync_updateuserchunk_key'] = 'Synchroniser la taille du groupe d\'utilisateurs';
$string['systemrolemapping'] = 'Cartographie des rôles du système';
$string['start_tls'] = 'Utilisez le service LDAP régulier (port 389) avec chiffrement TLS';
$string['start_tls_key'] = 'Utiliser TLS';
$string['updateremfail'] = 'Erreur lors de la mise à jour de l\'enregistrement LDAP. Code d\'erreur : {$a->errno}; Chaîne d\'erreur : {$a->errstring}<br/>Key ({$a->key}) - vieille valeur moodle : \'{$a->ouvalue}\' new value: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Impossible de mettre à jour LDAP avec le champ ambigu {$a->key}; vieille valeur moodle: \'{$a->ouvalue}\', new value: \'{$a->nuvalue}\'';
$string['updatepasserror'] = 'Erreur dans user_update_password(). Code d\'erreur : {$a->errno}; Chaîne d\'erreur : {$a->errstring}';
$string['updatepasserrorexpire'] = 'Erreur dans user_update_password() lors de la lecture de l\'expiration du mot de passe. Code d\'erreur : {$a->errno}; Chaîne d\'erreur : {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Erreur dans user_update_password() lors de la modification de l\'heure d\'expiration et/ou des connexions de grâce. Code d\'erreur : {$a->errno}; Chaîne d\'erreur : {$a->errstring}';
$string['updateusernotfound'] = 'Impossible de trouver l\'utilisateur lors de la mise à jour externe. Détails: base de recherche: \'{$a->userdn}\'; search filter: \'(objectClass=*)\'; search attributes: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() ne supporte pas le type d\'utilisateur sélectionné: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() ne supporte pas le type d\'utilisateur sélectionné: {$a}';
$string['userentriestoadd'] = "Entrées utilisateur à ajouter : {\$a}\n";
$string['userentriestoremove'] = "Entrées utilisateur à supprimer : {\$a}\n";
$string['userentriestorevive'] = "Entrées utilisateur à relancer : {\$a}\n";
$string['userentriestoupdate'] = "Entrées utilisateur à mettre à jour : {\$a}\n";
$string['usernotfound'] = 'Utilisateur non trouvé dans LDAP';
$string['useracctctrlerror'] = 'Erreur d\'obtention de userAccountControl pour {$a}';

$string['diag_genericerror'] = 'Erreur LDAP {$a->code} en lisant {$a->subject} : {$a->message}.';
$string['diag_toooldversion'] = 'Il est très peu probable qu\'un serveur LDAP moderne utilise le protocole LDAPv2. Les mauvais paramètres peuvent corrompre les valeurs dans les champs utilisateurs. Vérifiez auprès de votre administrateur LDAP.';
$string['diag_emptycontext'] = 'Contexte vide trouvé.';
$string['diag_contextnotfound'] = 'Contexte {$a} does\'t exist or can\'t be read by bind DN.';
$string['diag_rolegroupnotfound'] = 'Groupe {$a->group} pour le rôle {$a->nom local} does\'t exist or can\'t be read by bind DN.';
$string['privacy:metadata'] = 'Le plugin d\'authentification du serveur LDAP ne stocke aucune donnée personnelle.';
