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
 * @package     factor_iprange
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allowedipsempty'] = 'Personne ne passera ce facteur actuellement ! Vous pouvez ajouter votre propre adresse IP (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'Votre IP (<i>{$a->ip}</i>) est dans la liste et vous passerez ce facteur.';
$string['allowedipshasntmyip'] = 'Votre IP (<i>{$a->ip}</i>) n\'est pas dans la liste et vous ne passerez pas ce facteur.';
$string['pluginname'] = 'Plage IP';
$string['privacy:metadata'] = 'Le plugin facteur de plage IP ne stocke aucune donnée personnelle.';
$string['settings:safeips'] = 'Plages IP sécurisées';
$string['settings:safeips_help'] = 'Saisissez une liste d\'adresses IP ou de sous-réseaux à compter comme un passage en facteur. Si personne vide ne passera ce facteur. {$a->info} {$a->syntaxe}';
$string['summarycondition'] = 'est sur un réseau sécurisé';
