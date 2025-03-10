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
 * Language strings.
 *
 * @package     factor_totp
 * @subpackage  tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:manage'] = 'Gérer l\'authentification du mot de passe unique (TOTP) dans le temps';
$string['action:revoke'] = 'Supprimez l\'authentificateur de mot de passe unique (TOTP) basé sur le temps';
$string['devicename'] = 'Étiquette du périphérique';
$string['devicename_help'] = 'C\'est l\'appareil sur lequel vous avez installé une application d\'authentification. Vous pouvez configurer plusieurs appareils afin que cette étiquette aide à suivre ceux qui sont utilisés. Vous devriez configurer chaque appareil avec son propre code unique afin qu\'il puisse être révoqué séparément.';
$string['devicenameexample'] = 'Par exemple "Travailler iPhone 11"';
$string['error:alreadyregistered'] = 'Ce secret de mot de passe unique (TOTP) basé sur le temps a déjà été enregistré.';
$string['error:codealreadyused'] = 'Ce code a déjà été utilisé pour s\'authentifier. Veuillez attendre qu\'un nouveau code soit généré et réessayer.';
$string['error:futurecode'] = 'This code is invalid. Please verify the time on your authenticator device is correct and try again.
    Current system time is {$a}.';
$string['error:oldcode'] = 'This code is too old. Please verify the time on your authenticator device is correct and try again.
    Current system time is {$a}.';
$string['error:wrongverification'] = 'Code de vérification incorrect.';
$string['factorsetup'] = 'Configuration de l\'application';
$string['info'] = 'Générer un code de vérification à l\'aide d\'une application d\'authentification.';
$string['logindesc'] = 'Utilisez l\'application authentificateur de votre appareil mobile pour générer un code.';
$string['loginoption'] = 'Utiliser l\'application Authentificateur';
$string['loginskip'] = 'Je fais\'t have my device';
$string['loginsubmit'] = 'Continuer';
$string['logintitle'] = 'Vérifier\'s you by mobile app';
$string['managefactor'] = 'Gérer l\'application authentificateur';
$string['managefactorbutton'] = 'Gérer';
$string['manageinfo'] = 'Vous utilisez \'{$a}\' to authenticate.';
$string['pluginname'] = 'App Authentificateur';
$string['privacy:metadata'] = 'Le plugin Authenticator App factor ne stocke aucune donnée personnelle.';
$string['replacefactor'] = 'Remplacer l\'application authentificateur';
$string['replacefactorconfirmation'] = 'Remplacer \'{$a}\' authenticator app?';
$string['revokefactorconfirmation'] = 'Supprimer \'{$a}\' authenticator app?';
$string['settings:totplink'] = 'Afficher le lien de configuration de l\'application mobile';
$string['settings:totplink_help'] = 'Si activé, l\'utilisateur verra une 3ème option de configuration avec un lien direct otpauth://';
$string['settings:window'] = 'Fenêtre de vérification TOTP';
$string['settings:window_help'] = 'The window of TOTP acts as time drift and specifies how long each code is valid for.
    The period, which is the time between newly generated codes, is 30 seconds.
    If the window is 15 (the default) and the current timestamp is 147682209, the OTP tested are within 147682194 (147682209 - 15), 147682209 and 147682224 (147682209 + 15).
    The window shall be lower than 30. Therefore, this test includes the previous OTP but not the next one.
    You can set this to a higher value (up to 29) as a workaround if your user\'s device clocks are often slightly wrong.';
$string['setupfactor'] = 'Configurer l\'application authentificateur';
$string['setupfactorbutton'] = 'Mise en place';
$string['setupfactor:account'] = 'Compte :';
$string['setupfactor:devicename'] = 'Nom du périphérique';
$string['setupfactor:devicenameinfo'] = 'Cela vous aide à identifier quel appareil reçoit le code de vérification.';
$string['setupfactor:enter'] = 'Saisissez les détails manuellement';
$string['setupfactor:instructionsdevicename'] = '1. Donnez un nom à votre appareil.';
$string['setupfactor:instructionsscan'] = '2. Scannez le code QR avec votre app authentificateur.';
$string['setupfactor:instructionsverification'] = '3. Entrez le code de vérification.';
$string['setupfactor:intro'] = 'Pour configurer cette méthode, vous devez avoir un appareil avec une application authentificateur. Si vous faites\'t have an app, you can download one. For example, <a href="https://2fas.com/" target="_blanc">2FAS Auth</a>, <a href="https://freeotp.github.io/" target="_blanc">FreeOTP</a>, Google Authenticator, Microsoft Authenticator or Twilio Authy.';
$string['setupfactor:key'] = 'Clé secrète :';
$string['setupfactor:link'] = 'Ou entrez les détails manuellement.';
$string['setupfactor:link_help'] = 'Si vous êtes sur un appareil mobile et avez déjà une application d\'authentification installée ce lien peut fonctionner. Notez que l\'utilisation de TOTP sur le même périphérique que vous vous connectez peut affaiblir les avantages de MFA.';
$string['setupfactor:linklabel'] = 'Ouvrez l\'application déjà installée sur ce périphérique';
$string['setupfactor:mode'] = 'Mode :';
$string['setupfactor:mode:timebased'] = 'Temps imparti';
$string['setupfactor:scanwithapp'] = 'Scannez le code QR avec votre application d\'authentification choisie.';
$string['setupfactor:verificationcode'] = 'Code de vérification';
$string['summarycondition'] = 'utilisant une application TOTP';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = 'Entrez votre code de vérification à 6 chiffres';
$string['verificationcode_help'] = 'Ouvrez votre app authentificateur comme Google Authentificateur et recherchez le code à 6 chiffres qui correspond à ce site et nom d\'utilisateur';

// Deprecated since Moodle 4.4.
$string['setupfactor:scanfail'] = 'Peut\'t scan?';
$string['setupfactor:scan'] = 'Scanner le code QR';
