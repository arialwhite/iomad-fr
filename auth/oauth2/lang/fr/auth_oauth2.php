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
 * Strings for component 'auth_oauth2', language 'en'.
 *
 * @package   auth_oauth2
 * @copyright 2017 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accountexists'] = 'Un utilisateur existe déjà sur ce site avec ce nom d\'utilisateur. Si c\'est votre compte, connectez-vous en entrant votre nom d\'utilisateur et votre mot de passe et ajoutez-le en tant que connexion liée via votre page de préférences.';
$string['auth_oauth2description'] = 'Authentification basée sur les normes OAuth 2';
$string['auth_oauth2settings'] = 'Paramètres d\'authentification OAuth 2.';
$string['confirmaccountemail'] = 'Hi {$a->firstname},

A new account has been requested at \'{$a->sitename}\'
using your email address.

To confirm your new account, please go to this web address:

{$a->link}

In most mail programs, this should appear as a blue link
which you can just click on.  If that doesn\'t work,
then cut and paste the address into the address
line at the top of your web browser window.

If you need help, please contact the site administrator,
{$a->admin}

If you did not do this, someone else could be trying to compromise your account.
Please contact the site administrator immediately.';
$string['confirmaccountemailsubject'] = '{$a} : confirmation de compte';
$string['confirmationinvalid'] = 'Le lien de confirmation est soit invalide, soit expiré. Veuillez recommencer le processus de connexion pour générer un nouveau courriel de confirmation.';
$string['confirmationpending'] = 'Ce compte est en attente de confirmation par courriel.';
$string['confirmlinkedloginemail'] = 'Hi {$a->firstname},

A request has been made to link the {$a->issuername} login
{$a->linkedemail} to your account at \'{$a->sitename}\'
using your email address.

To confirm this request and link these logins, please go to this web address:

{$a->link}

In most mail programs, this should appear as a blue link
which you can just click on.  If that doesn\'t work,
then cut and paste the address into the address
line at the top of your web browser window.

If you need help, please contact the site administrator,
{$a->admin}

If you did not do this, someone else could be trying to compromise your account.
Please contact the site administrator immediately.';
$string['confirmlinkedloginemailsubject'] = '{$a} : confirmation de connexion liée';
$string['createaccountswarning'] = 'Ce plugin d\'authentification permet aux utilisateurs de créer des comptes sur votre site. Vous pouvez activer le paramètre "authpreventaccountcreation" si vous utilisez ce plugin.';
$string['createnewlinkedlogin'] = 'Lien avec un nouveau compte ({$a})';
$string['emailconfirmlink'] = 'Relier vos comptes';
$string['emailconfirmlinksent'] = '<p>An existing account was found with this email address but it is not linked yet.</p>
   <p>The accounts must be linked before you can log in.</p>
   <p>An email should have been sent to your address at <b>{$a}</b>.</p>
   <p>It contains easy instructions to link your accounts.</p>
   <p>If you have any difficulty, contact the site administrator.</p>';
$string['emailpasswordchangeinfo'] = 'Hi {$a->firstname},

Someone (probably you) has requested a new password for your account on \'{$a->sitename}\'.

However your password cannot be reset because you are using your account on another site to log in.

Please log in as before, using the link on the login page.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Modifier les informations de mot de passe';
$string['info'] = 'Compte extérieur';
$string['issuer'] = 'Service OAuth 2';
$string['issuernologin'] = 'Cet émetteur ne peut pas être utilisé pour se connecter';
$string['key'] = 'Key';
$string['linkedlogins'] = 'Connexions liées';
$string['linkedloginshelp'] = 'Aide avec les connexions liées';
$string['loggedin'] = 'Utilisateur authentifié avec succès avec le fournisseur.';
$string['loginerror_userincomplete'] = 'Les informations utilisateur retournées ne contenaient pas de nom d\'utilisateur et d\'adresse e-mail. Le service OAuth 2 peut être configuré incorrectement.';
$string['loginerror_nouserinfo'] = 'Aucune information utilisateur n\'a été retournée. Le service OAuth 2 peut être configuré incorrectement.';
$string['loginerror_invaliddomain'] = 'L\'adresse e-mail n\'est pas autorisée sur ce site.';
$string['loginerror_authenticationfailed'] = 'Le processus d\'authentification a échoué.';
$string['loginerror_cannotcreateaccounts'] = 'Un compte avec votre adresse e-mail n\'a pas été trouvé.';
$string['noconfiguredidps'] = 'Il n\'y a pas de fournisseurs OAuth2.';
$string['noissuersavailable'] = 'Aucun des services OAuth 2 configurés ne vous permet de lier des comptes de connexion.';
$string['notloggedindebug'] = 'La tentative de connexion a échoué. Raison : {$a}';
$string['notwhileloggedinas'] = 'Les connexions liées ne peuvent pas être gérées pendant la connexion en tant qu\'autre utilisateur.';
$string['oauth2:managelinkedlogins'] = 'Gérer ses propres comptes de connexion liés';
$string['notenabled'] = 'Désolé, le plugin d\'authentification OAuth 2 n\'est pas activé';
$string['plugindescription'] = 'Ce plugin d\'authentification affiche une liste des fournisseurs d\'identité configurés sur la page de connexion. Choisir un fournisseur d\'identité permet aux utilisateurs de se connecter avec leurs identifiants d\'un fournisseur OAuth 2.';
$string['pluginname'] = 'Auth 2';
$string['alreadylinked'] = 'Ce compte externe est déjà lié à un compte sur ce site';
$string['privacy:metadata:auth_oauth2'] = 'Authentification OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Ce plugin est connecté au sous-système d\'authentification.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'La confirmation.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'L\'horodatage lorsque le jeton de confirmation expire.';
$string['privacy:metadata:auth_oauth2:email'] = 'L\'e-mail externe qui map à ce compte.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'L\'ID de l\'émetteur OAuth 2 pour cette connexion OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Comptes OAuth 2 liés à un utilisateur\'s Moodle account.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'L\'horodatage lorsque le compte utilisateur était lié à la connexion OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'L\'horodatage quand ce disque a été modifié.';
$string['privacy:metadata:auth_oauth2:userid'] = 'L\'ID du compte utilisateur auquel la connexion OAuth 2 est liée.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'L\'ID de l\'utilisateur qui a modifié ce compte.';
$string['privacy:metadata:auth_oauth2:username'] = 'Le nom d\'utilisateur externe qui correspond à ce compte.';
$string['testidplogin'] = 'Tester la connexion avec :';
$string['userinfo'] = 'Données utilisateur du fournisseur:';
$string['value'] = 'Valeur';
