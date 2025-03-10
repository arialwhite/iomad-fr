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
 * @package     factor_webauthn
 * @author      Alex Morris <alex.morris@catalyst.net.nz>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:manage'] = 'Gérer la clé de sécurité';
$string['action:revoke'] = 'Supprimer la clé de sécurité';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Hybride';
$string['authenticator:internal'] = 'Interne';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nom de la clé de sécurité';
$string['error'] = 'Échec de l\'authentification';
$string['error:alreadyregistered'] = 'Ce secret clé de sécurité a déjà été enregistré.';
$string['info'] = 'Utilisez une clé de sécurité physique ou un scanner d\'empreintes digitales.';
$string['logindesc'] = 'Cliquez sur continuer à utiliser votre clé de sécurité.';
$string['loginoption'] = 'Utiliser la clé de sécurité';
$string['loginskip'] = 'Je fais\'t have my security key';
$string['loginsubmit'] = 'Continuer';
$string['logintitle'] = 'Vérifier\'s you by security key';
$string['pluginname'] = 'Clé de sécurité';
$string['privacy:metadata'] = 'Le plugin de la clé de sécurité ne stocke aucune donnée personnelle.';
$string['register'] = 'Enregistrer la clé de sécurité';
$string['replacefactor'] = 'Remplacer la clé de sécurité';
$string['replacefactorconfirmation'] = 'Remplacer \'{$a}\' security key?';
$string['revokefactorconfirmation'] = 'Supprimer \'{$a}\' security key?';
$string['settings:authenticatortypes'] = 'Types d\'authentificateur';
$string['settings:authenticatortypes_help'] = 'Bascule certains types d\'authentificateurs';
$string['settings:userverification'] = 'Vérification de l\'utilisateur';
$string['settings:userverification_help'] = 'Il sert à s\'assurer que la personne authentifiante est en fait qui ils disent qu\'ils sont. La vérification de l\'utilisateur peut prendre différentes formes, telles que mot de passe, NIP, empreintes digitales, etc.';
$string['setupfactor'] = 'Configuration de la clé de sécurité';
$string['setupfactorbutton'] = 'Mise en place';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Enregistrez une clé de sécurité.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Donnez un nom à votre clé.';
$string['setupfactor:intro'] = 'Une clé de sécurité est un dispositif physique que vous pouvez utiliser pour vous authentifier. Les clés de sécurité peuvent être des jetons USB, des appareils Bluetooth ou des scanners d\'empreintes digitales intégrés sur votre téléphone ou votre ordinateur.';
$string['setupfactor:securitykeyinfo'] = 'Cela vous aide à identifier la clé de sécurité que vous utilisez.';
$string['summarycondition'] = 'utilisant un authentificateur supporté par WebAuthn';
$string['managefactor'] = 'Gérer la clé de sécurité';
$string['managefactorbutton'] = 'Gérer';
$string['manageinfo'] = 'Vous utilisez \'{$a}\' to authenticate.';
$string['userverification:discouraged'] = 'La vérification de l\'utilisateur ne devrait pas être utilisée, par exemple pour minimiser l\'interaction de l\'utilisateur';
$string['userverification:preferred'] = 'La vérification de l\'utilisateur est préférée, l\'authentification ne échouera pas si la vérification de l\'utilisateur est manquante';
$string['userverification:required'] = 'Une vérification de l\'utilisateur est nécessaire (par exemple par pin). L\'authentification échoue si la clé n\'a pas de vérification utilisateur';
