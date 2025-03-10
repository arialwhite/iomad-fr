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
 * Strings for component 'auth_email', language 'en'.
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_emaildescription'] = '<p>L\'auto-enregistrement par courriel permet à un utilisateur de créer son propre compte via un \'Create new account\' button on the login page. The user then receives an email containing a secure link to a page where they can confirm their account. Future logins just check the username and password against the stored values in the Moodle database.</p><p>Note: In addition to enabling the plugin, email-based self-registration must also be selected from the self registration drop-down menu on the \'Manage authentication\' page.</p>';
$string['auth_emailnoemail'] = 'J\'ai essayé de vous envoyer un mail mais j\'ai échoué !';
$string['auth_emailrecaptcha'] = 'Ajoute un élément de formulaire de confirmation visuelle/audio à la page d\'inscription pour les utilisateurs qui s\'enregistrent par courriel. Cela protège votre site contre les spammeurs et contribue à une cause valable. Voir https://www.google.com/recaptcha pour plus de détails.';
$string['auth_emailrecaptcha_key'] = 'Activer l\'élément reCAPTCHA';
$string['auth_emailsettings'] = 'Paramètres';
$string['pluginname'] = 'Auto-enregistrement par courriel';
$string['privacy:metadata'] = 'Le plugin d\'authentification d\'auto-enregistrement par courriel ne stocke aucune donnée personnelle.';
