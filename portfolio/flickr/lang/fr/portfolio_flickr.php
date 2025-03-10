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
 * Strings for component 'portfolio_flickr', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   portfolio_flickr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['apikey'] = 'Clé API';
$string['contenttype'] = 'Types de contenu';
$string['err_noapikey'] = 'Aucune clé API';
$string['err_noapikey_help'] = 'Il n\'y a pas de clé API configurée pour ce plugin. Vous pouvez en obtenir un sur la page des services Flickr.';
$string['hidefrompublicsearches'] = 'Cacher ces images des recherches publiques ?';
$string['isfamily'] = 'Visible à la famille';
$string['isfriend'] = 'Visible aux amis';
$string['ispublic'] = 'Public (tout le monde peut les voir)';
$string['moderate'] = 'Modéré';
$string['noauthtoken'] = 'Impossible de récupérer un jeton d\'authentification pour utilisation dans cette session';
$string['other'] = 'Art, illustration, CGI ou autres images non photographiques';
$string['photo'] = 'Photos';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Ce plugin envoie des données externes à un compte Flickr lié. Il ne stocke pas les données localement.';
$string['privacy:metadata:data'] = 'Données personnelles transmises par le sous-système portefeuille.';
$string['restricted'] = 'Restricté';
$string['safe'] = 'Sécurité';
$string['safetylevel'] = 'Niveau de sécurité';
$string['screenshot'] = 'Captures d\'écran';
$string['set'] = 'Set';
$string['setupinfo'] = 'Instructions de configuration';
$string['setupinfodetails'] = 'Pour obtenir la clé API et la chaîne secrète, connectez-vous à Flickr et <a href="{$a->applyurl}">Appliquer pour une nouvelle clé</a>. Une fois que la nouvelle clé et le secret sont générés pour vous, suivez la \'Edit auth flow for this app\' link at the page. Select \'App Type\' to \'Web Application\'. Into the \'Callback URL\' field, put the value: <br /><code>{$a->callbackurl}</code><br />Optionally, you can also provide your Moodle site description and logo. These values can be set later at <a href="[$a->keysurl]">the page</a> listing your Flickr applications.';
$string['sharedsecret'] = 'Chaîne secrète';
$string['title'] = 'Titre';
$string['uploadfailed'] = 'Impossible de télécharger des images sur flickr.com : {$a}';
