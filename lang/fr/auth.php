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
 * Strings for component 'auth', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actauthhdr'] = 'Greffons d\'authentification disponibles';
$string['alternatelogin'] = 'Si vous entrez une URL ici, elle sera utilisée comme page de connexion pour ce site. La page doit contenir un formulaire qui a la propriété action définie à <strong>\'{$a}\'</strong> and return fields <strong>username</strong> and <strong>password</strong>.<br />Be careful not to enter an incorrect URL as you may lock yourself out of this site.<br />Leave this setting blank to use the default login page.';
$string['alternateloginurl'] = 'URL de connexion alternative';
$string['auth_common_settings'] = 'Paramètres communs';
$string['auth_data_mapping'] = 'Cartographie des données';
$string['authenticationoptions'] = 'Options d\'authentification';
$string['auth_fieldlock'] = 'Valeur de verrouillage';
$string['auth_fieldlockfield'] = 'Valeur de verrouillage ({$a})';
$string['auth_fieldlock_expl'] = '<p>Valeur maximale & #160;: Si activé, les utilisateurs ne pourront pas modifier le champ. Utilisez cette option si vous maintenez ces données dans le système d\'authentification externe. </p>';
$string['auth_fieldlocks'] = 'Verrouiller les champs utilisateur';
$string['auth_fieldlocks_help'] = '<p> Vous pouvez verrouiller les champs de données utilisateur. Ceci est utile pour les sites où les données utilisateur sont maintenues manuellement par les administrateurs en éditant les enregistrements utilisateur ou en téléchargeant en utilisant le \'Upload users\' facility. If you are locking fields that are required by Moodle, make sure that you provide that data when creating user accounts or the accounts will be unusable.</p><p>Consider setting the lock mode to \'Unlocked if empty\' to avoid this problem.</p>';
$string['auth_fieldmapping'] = 'Cartographie des données ({$a})';
$string['auth_changepasswordhelp'] = 'Modifier l\'aide du mot de passe';
$string['auth_changepasswordhelp_expl'] = 'Afficher l\'aide de mot de passe perdu aux utilisateurs qui ont perdu leur mot de passe {$a}. Ceci sera affiché aussi bien que ou au lieu du <strong> Modifier le mot de passe URL</strong> ou le mot de passe interne Moodle.';
$string['auth_changepasswordurl'] = 'Modifier l\'URL du mot de passe';
$string['auth_changepasswordurl_expl'] = 'Spécifiez l\'URL pour envoyer les utilisateurs qui ont perdu leur mot de passe {$a}. Définir <strong> Utilisez la page de changement de mot de passe standard</strong> à <strong>Non</strong>.';
$string['auth_changingemailaddress'] = 'Vous avez demandé un changement d\'adresse courriel, de {$a->oldemail} à {$a->newemail}. Pour des raisons de sécurité, nous vous envoyons un message à votre nouvelle adresse pour confirmer qu\'il vous appartient. Votre adresse e-mail sera mise à jour dès que vous ouvrirez l\'URL qui vous est envoyée dans le message. Le lien de confirmation expirera dans 10 minutes.';
$string['authinstructions'] = 'Laissez ce vide pour les instructions de connexion par défaut à afficher sur la page de connexion. Si vous voulez fournir des instructions de connexion personnalisées, entrez-les ici.';
$string['auth_invalidnewemailkey'] = 'Erreur : si vous essayez de confirmer un changement d\'adresse e-mail, vous avez peut-être fait une erreur dans la copie de l\'URL que nous vous avons envoyée par courriel. Veuillez copier l\'adresse et réessayer.';
$string['auth_loginpasswordtoggle'] = 'Visibilité du mot de passe';
$string['auth_loginpasswordtoggle_desc'] = 'Ajouter une icône au champ mot de passe sur l\'écran de connexion qui permet aux utilisateurs d\'afficher ou de cacher leur mot de passe entré.';
$string['auth_loginrecaptcha'] = 'Activer reCAPTCHA pour la connexion';
$string['auth_loginrecaptcha_desc'] = 'Ajoutez un élément de confirmation visuelle/audio à la page de connexion. Cela réduit le risque de tentatives de connexion injustifiées. Voir <a cible="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a> pour plus de détails.';
$string['auth_multiplehosts'] = 'Plusieurs adresses OU hôtes peuvent être spécifiées (par exemple host1.com;host2.com;host3.com) ou (par exemple xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'La méthode d\'authentification {$a} n\'est pas configurée.';
$string['auth_outofnewemailupdateattempts'] = 'Vous avez épuisé les tentatives autorisées pour mettre à jour votre adresse e-mail. Votre demande de mise à jour a été annulée.';
$string['auth_passwordisexpired'] = 'Votre mot de passe a expiré. Veuillez le changer maintenant.';
$string['auth_passwordwillexpire'] = 'Votre mot de passe expirera dans {$a} jours. Voulez-vous changer votre mot de passe maintenant ?';
$string['auth_remove_delete'] = 'Supprimer complètement interne';
$string['auth_remove_keep'] = 'Garder à l\'intérieur';
$string['auth_remove_suspend'] = 'Suspendre interne';
$string['auth_remove_user'] = 'Précisez ce qu\'il faut faire avec le compte utilisateur interne lors de la synchronisation de masse lorsque l\'utilisateur a été retiré de la source externe. Seuls les utilisateurs suspendus sont automatiquement restaurés s\'ils réapparaissent dans la source externe.';
$string['auth_remove_user_key'] = 'Utilisateur ext supprimé';
$string['auth_sync_suspended']  = 'Si activé, l\'attribut suspendu sera utilisé pour mettre à jour le compte utilisateur local\'s suspension status.';
$string['auth_sync_suspended_key'] = 'Synchroniser le statut de suspension de l\'utilisateur local';
$string['auth_sync_script'] = 'Synchronisation du compte utilisateur';
$string['auth_updatelocal'] = 'Mettre à jour localement';
$string['auth_updatelocalfield'] = 'Mettre à jour localement ({$a})';
$string['auth_updatelocal_expl'] = '<p><b>Mise à jour locale:</b> Si activé, le champ sera mis à jour (à partir d\'auth externe) chaque fois que l\'utilisateur se connecte ou qu\'il y a une synchronisation utilisateur. Les champs mis à jour localement doivent être verrouillés.</p>';
$string['auth_updateremote'] = 'Mise à jour externe';
$string['auth_updateremotefield'] = 'Mise à jour externe ({$a})';
$string['auth_updateremote_expl'] = '<p><b>Mise à jour externe:</b> Si activé, l\'authentification externe sera mise à jour lorsque l\'enregistrement utilisateur sera mis à jour. Les champs doivent être déverrouillés pour permettre les modifications.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> Mise à jour des données LDAP externes exige que vous définissez lindn et lindpw à un utilisateur lind-user avec des privilèges d\'édition pour tous les enregistrements utilisateur. Il ne préserve pas actuellement les attributs multi-valeurs, et supprimera les valeurs supplémentaires à la mise à jour. </p>';
$string['auth_user_create'] = 'Activer la création des utilisateurs';
$string['auth_user_creation'] = 'De nouveaux utilisateurs (anonymes) peuvent créer des comptes d\'utilisateurs sur la source d\'authentification externe et être confirmés par courriel. Si vous activez ce , n\'oubliez pas de configurer également les options spécifiques au module pour la création de l\'utilisateur.';
$string['auth_usernameexists'] = 'Le nom d\'utilisateur sélectionné existe déjà. Veuillez en choisir un nouveau.';
$string['auth_usernotexist'] = 'Impossible de mettre à jour l\'utilisateur inexistant : {$a}';
$string['auto_add_remote_users'] = 'Ajout automatique des utilisateurs distants';
$string['cannotmapfield'] = 'Le champ "{$a->champname}" peut\'t be mapped because its short name "{$a->shortname}" is too long. To allow it to be mapped, you need to reduce the short name to {$a->charlimit} characters. <a href="{$a->lien}">Edit user profile fields</a>';
$string['createpassword'] = 'Générer le mot de passe et informer l\'utilisateur';
$string['createpasswordifneeded'] = 'Créer un mot de passe si nécessaire et envoyer par email';
$string['emailchangecancel'] = 'Annuler le changement d\'email';
$string['emailchangepending'] = 'Changement en cours. Ouvrez le lien qui vous est envoyé à {$a->preference_newemail}.';
$string['emailnowexists'] = 'L\'adresse e-mail que vous avez essayé d\'attribuer à votre profil a été attribuée à quelqu\'un d\'autre depuis votre demande initiale. Votre demande de changement d\'adresse e-mail est par la présente annulée, mais vous pouvez essayer à nouveau avec une autre adresse.';
$string['emailupdate'] = 'Mise à jour de l\'adresse électronique';
$string['emailupdatemessage'] = 'Hi {$a->firstname},

You have requested a change of your email address for your account on {$a->site}. To confirm this change, please go to the following web address:

{$a->url}
The confirmation link will expire in <b>10 minutes</b>.

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Adresse électronique de l\'utilisateur <em>{$a->fullname}</em> a été mis à jour avec succès vers <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmation de la mise à jour du courriel à {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Les mots de passe doivent avoir au maximum {$a} des caractères identiques consécutifs.';
$string['errorminpassworddigits'] = 'Les mots de passe doivent avoir au moins {$a} chiffre(s).';
$string['errorminpasswordlength'] = 'Les mots de passe doivent être au moins {$a} longs.';
$string['errorminpasswordlower'] = 'Les mots de passe doivent avoir au moins {$a} lettre(s) inférieure(s).';
$string['errorminpasswordnonalphanum'] = 'Le mot de passe doit avoir au moins {$a} caractères spéciaux tels que *, - ou #.';
$string['errorpasswordreused'] = 'Ce mot de passe a déjà été utilisé et n\'est pas autorisé à être réutilisé';
$string['errorminpasswordupper'] = 'Les mots de passe doivent comporter au moins {$a} lettres majuscules.';
$string['errorpasswordupdate'] = 'Erreur lors de la mise à jour du mot de passe, non modifié';
$string['eventuserloggedin'] = 'L\'utilisateur s\'est connecté';
$string['eventuserloggedinas'] = 'Utilisateur connecté en tant qu\'autre utilisateur';
$string['eventuserloginfailed'] = 'La connexion de l\'utilisateur a échoué';
$string['forcechangepassword'] = 'Forcer le mot de passe';
$string['forcechangepasswordfirst_help'] = 'Forcer les utilisateurs à changer de mot de passe sur leur premier login à Moodle.';
$string['forcechangepassword_help'] = 'Forcer les utilisateurs à changer de mot de passe sur leur prochaine connexion à Moodle.';
$string['forgottenpassword'] = 'Si vous entrez une URL ici, elle sera utilisée comme la page de récupération de mot de passe perdu pour ce site. Ceci est destiné aux sites où les mots de passe sont traités entièrement à l\'extérieur de Moodle. Laissez ce blanc pour utiliser la récupération de mot de passe par défaut.';
$string['forgottenpasswordurl'] = 'URL du mot de passe oublié';
$string['getrecaptchaapi'] = 'Pour utiliser reCAPTCHA, vous devez obtenir une clé API de <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Bouton de connexion invité';
$string['changepassword'] = 'Modifier l\'URL du mot de passe';
$string['changepasswordhelp'] = 'URL de la page de récupération de mot de passe perdu, qui sera envoyé aux utilisateurs dans un courriel. Notez que ce paramètre n\'aura aucun effet si une URL de mot de passe oubliée est définie dans les paramètres communs d\'authentification.';
$string['chooseauthmethod'] = 'Choisir une méthode d\'authentification';
$string['chooseauthmethod_help'] = 'Ce paramètre détermine la méthode d\'authentification utilisée lorsque l\'utilisateur se connecte. Seuls les plugins d\'authentification activés doivent être choisis, sinon l\'utilisateur ne pourra plus se connecter. Pour bloquer la connexion de l\'utilisateur, sélectionnez "Pas de connexion".';
$string['incorrectpleasetryagain'] = 'Erreur. Veuillez réessayer.';
$string['infilefield'] = 'Champ requis dans le fichier';
$string['informminpassworddigits'] = 'au moins {$a} chiffre(s)';
$string['informminpasswordlength'] = 'au moins {$a} caractères';
$string['informminpasswordlower'] = 'au moins {$a} lettres minuscules';
$string['informminpasswordnonalphanum'] = 'au moins {$a} caractères spéciaux tels que *, - ou #';
$string['informminpasswordreuselimit'] = 'Les mots de passe peuvent être réutilisés après les modifications {$a}';
$string['informminpasswordupper'] = 'au moins {$a} lettres majuscules';
$string['informpasswordpolicy'] = 'Le mot de passe doit avoir {$a}';
$string['instructions'] = 'Instructions';
$string['internal'] = 'Interne';
$string['limitconcurrentlogins'] = 'Limiter les connexions simultanées';
$string['limitconcurrentlogins_desc'] = 'Si activé, le nombre de connexions simultanées du navigateur pour chaque utilisateur est limité. La session la plus ancienne est terminée après avoir atteint la limite, veuillez noter que les utilisateurs peuvent perdre tout travail non enregistré. Ce paramètre n\'est pas compatible avec les plugins d\'authentification SSO.';
$string['locked'] = 'Verrouillé';
$string['authloginviaemail'] = 'Permettre la connexion par e-mail';
$string['authloginviaemail_desc'] = 'Permettre aux utilisateurs d\'utiliser à la fois le nom d\'utilisateur et l\'adresse e-mail (si unique) pour se connecter au site.';
$string['allowaccountssameemail'] = 'Autoriser les comptes avec le même courriel';
$string['allowaccountssameemail_desc'] = 'Si activé, plus d\'un compte utilisateur peut partager la même adresse e-mail. Cela peut entraîner des problèmes de sécurité ou de confidentialité, par exemple avec le courriel de confirmation de changement de mot de passe.';
$string['md5'] = 'Hache MD5';
$string['nopasswordchange'] = 'Le mot de passe ne peut pas être modifié';
$string['nopasswordchangeforced'] = 'Vous ne pouvez pas procéder sans changer votre mot de passe, mais il n\'y a pas de page disponible pour le modifier. Veuillez contacter votre administrateur Moodle.';
$string['noprofileedit'] = 'Le profil ne peut pas être modifié';
$string['ntlmsso_attempting'] = 'Tentative de connexion unique via NTLM...';
$string['ntlmsso_failed'] = 'La connexion automatique a échoué, essayez la page de connexion normale...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO est désactivé.';
$string['passwordhandling'] = 'Gestion du champ Mot de passe';
$string['plaintext'] = 'Texte simple';
$string['pluginnotenabled'] = 'Module d\'authentification \'{$a}\' is not enabled.';
$string['pluginnotinstalled'] = 'Module d\'authentification \'{$a}\' is not installed.';
$string['privacy:metadata:userpref:createpassword'] = 'Indique qu\'un mot de passe doit être généré pour l\'utilisateur';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indique si l\'utilisateur doit modifier son mot de passe lors de la connexion';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Le nombre de fois où l\'utilisateur a échoué à se connecter';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Le nombre de fois où l\'utilisateur a échoué à se connecter depuis sa dernière connexion réussie';
$string['privacy:metadata:userpref:loginfailedlast'] = 'La date à laquelle la dernière tentative de connexion échouée a été enregistrée';
$string['privacy:metadata:userpref:loginlockout'] = 'Indique si l\'utilisateur\'s account is locked due to failed login attempts, and the date when the account was locked';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indique qu\'un utilisateur\'s account should never be subject to lockouts';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Lorsque verrouillé, le secret que l\'utilisateur doit utiliser pour déverrouiller son compte';
$string['potentialidps'] = 'Connectez-vous en utilisant votre compte sur :';
$string['recaptcha'] = 'pour la réadaptation';
$string['recaptcha_help'] = 'The CAPTCHA is for preventing abuse from automated programs. Follow the instructions to verify you are a person. This could be a box to check, characters presented in an image you must enter or a set of images to select from.

If you are not sure what the images are, you can try getting another CAPTCHA or an audio CAPTCHA.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Questions de sécurité';
$string['selfregistration'] = 'Auto-enregistrement';
$string['selfregistration_help'] = 'Si un plugin d\'authentification, comme l\'auto-enregistrement par courriel, est sélectionné, il permet aux utilisateurs potentiels de s\'enregistrer et de créer des comptes. Cela entraîne la possibilité de spammers créant des comptes afin d\'utiliser des messages de forum, des entrées de blog, etc. pour le spam. Pour éviter ce risque, l\'auto-inscription doit être désactivée ou limitée par le paramètre <em>.';
$string['settingmigrationmismatch'] = 'Valeurs incorrectes détectées lors de la correction des noms de configuration du plugin ! Le plugin d\'authentification \'{$a->plugin}\' had the setting \'{$a->setting}\' configured to \'{$a->legacy}\' under the legacy name and to \'{$a->current}\' under the current name. The latter value has been set as the valid one but you should check and confirm that it is expected.';
$string['sha1'] = 'Hachage SHA-1';
$string['showguestlogin'] = 'Vous pouvez cacher ou afficher le bouton de connexion invité sur la page de connexion.';
$string['showloginform'] = 'Afficher le formulaire de connexion manuel';
$string['showloginform_desc'] = 'Si tous les utilisateurs sur le site utilisent une méthode d\'authentification comme OAuth 2 qui ne\'t require them to enter a username and password, you can hide the manual login form. Note that users with manual accounts will not be able to log in.

If you hide the manual login form then can\'t log in, you can display it again using the command line php admin/cli/cfg.php --name=showloginform --set=1';
$string['stdchangepassword'] = 'Utilisez la page standard pour changer de mot de passe';
$string['stdchangepassword_expl'] = 'Si le système d\'authentification externe permet des changements de mot de passe via Moodle, passez à Oui. Ce paramètre remplace \'Change Password URL\'.';
$string['stdchangepassword_explldap'] = 'REMARQUE : Il est recommandé d\'utiliser LDAP sur un tunnel chiffré SSL (ldaps://) si le serveur LDAP est distant.';
$string['suspended'] = 'Compte suspendu';
$string['suspended_help'] = 'Les comptes utilisateur suspendus ne peuvent pas se connecter ou utiliser les services web, et tous les messages sortants sont rejetés.';
$string['testsettings'] = 'Paramètres d\'essai';
$string['testsettingsheading'] = 'Tester les paramètres d\'authentification - {$a}';
$string['unlocked'] = 'Débloqué';
$string['unlockedifempty'] = 'Débloqué si vide';
$string['update_never'] = 'Jamais';
$string['update_oncreate'] = 'Sur la création';
$string['update_onlogin'] = 'Sur chaque connexion';
$string['update_onupdate'] = 'Mise à jour';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() ne supporte pas le type d\'utilisateur sélectionné: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() ne supporte pas le type d\'utilisateur sélectionné (..yet)';
$string['username'] = 'Nom d\'utilisateur';
$string['username_help'] = 'Veuillez noter que certains plugins d\'authentification ne vous permettront pas de changer le nom d\'utilisateur.';
