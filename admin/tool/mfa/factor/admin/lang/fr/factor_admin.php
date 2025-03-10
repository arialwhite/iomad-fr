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
 * @package     factor_admin
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['info'] = 'Ce facteur permet de NE PAS être administrateur de compter comme facteur. Son utilisation prévue est d\'assurer que les administrateurs exigent une sécurité plus stricte, donc les utilisateurs réguliers obtiennent le poids gratuitement, tandis que les administrateurs doivent utiliser d\'autres facteurs.';
$string['pluginname'] = 'Non-administrateur';
$string['privacy:metadata'] = 'Le plugin facteur non administrateur ne stocke aucune donnée personnelle.';
$string['settings:weight_help'] = 'Le poids est donné aux utilisateurs réguliers pour ce facteur, de sorte que les administrateurs doivent avoir plus de facteurs qu\'un utilisateur régulier à passer.';
$string['summarycondition'] = 'n\'est pas un administrateur';
