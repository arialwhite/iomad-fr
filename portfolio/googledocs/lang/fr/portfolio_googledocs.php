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
 * Strings for component 'portfolio_googledocs', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['clientid'] = 'ID client';
$string['noauthtoken'] = 'Un jeton d\'authentification n\'a pas été reçu de Google. Veuillez vous assurer que vous autorisez Moodle à accéder à votre compte Google';
$string['nooauthcredentials'] = 'Titres de créance requis.';
$string['nooauthcredentials_help'] = 'Pour utiliser le plugin de portefeuille Google Drive, vous devez configurer les identifiants OAuth dans les paramètres de portefeuille.';
$string['nosessiontoken'] = 'Un jeton de session n\'existe pas empêchant l\'exportation à google.';
$string['oauthinfo'] = '<p> Pour utiliser ce plugin, vous devez enregistrer votre site avec Google, comme décrit dans la documentation <a href="{$a->docsurl}"> Configuration de Google OAuth 2.0</a>.</p><p> Dans le cadre du processus d\'enregistrement, vous devrez entrer l\'URL suivante comme \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Once registered, you will be provided with a client ID and secret which can be used to configure all Google Drive plugins.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Ce plugin envoie des données externes à un compte Google lié. Il ne stocke pas les données localement.';
$string['privacy:metadata:data'] = 'Données personnelles transmises par le sous-système portefeuille.';
$string['sendfailed'] = 'Le fichier {$a} a échoué à transférer google';
$string['secret'] = 'Secret';
