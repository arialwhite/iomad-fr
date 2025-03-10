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
 * @package     factor_token
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['event:token_created'] = 'Jeton MFA créé.';
$string['form:trust'] = 'Faites confiance à cet appareil pour {$a}.';
$string['pluginname'] = 'Faites confiance à cet appareil';
$string['privacy:metadata'] = 'Le plugin de ce facteur de périphérique ne stocke aucune donnée personnelle.';
$string['settings:expireovernight'] = 'Expire la confiance du jour au lendemain';
$string['settings:expireovernight_help'] = 'Cela force les jetons à expirer du jour au lendemain, empêchant les interruptions de midi pour les utilisateurs. Au lieu de cela, on leur demandera d\'authentifier plusieurs facteurs au début d\'un jour après l\'expiration.';
$string['settings:expiry'] = 'Durée de la confiance';
$string['settings:expiry_help'] = 'La durée d\'un appareil est fiable avant d\'exiger une nouvelle authentification multi-facteurs.';
$string['summarycondition'] = 'l\'utilisateur a déjà fait confiance à cet appareil';
$string['tokenstoredindevice'] = 'L\'utilisateur avec ID {$a->userid} a un jeton d\'authentification multi-facteurs stocké sur son appareil. <br> Informations : {$a->string}.';
