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
 * @package     factor_capability
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['capability:cannotpassfactor'] = 'Doit utiliser un autre facteur dans MFA pour authentifier';
$string['pluginname'] = 'Capacité des utilisateurs';
$string['privacy:metadata'] = 'Le plugin de capacité utilisateur ne stocke aucune donnée personnelle.';
$string['settings:adminpasses'] = 'Les administrateurs du site peuvent passer ce facteur';
$string['settings:adminpasses_help'] = 'Par défaut, les administrateurs passent toutes les vérifications de capacité, y compris celle qui utilise \'factor/capability:cannotpassfactor\', which means they will fail this factor.
    If checked then all site admins will pass this factor if they do not have this capability from another role.
    If unchecked site admins will fail this factor.';
$string['summarycondition'] = 'n\'a PAS le facteur/capacité: ne peut paspassfactor capacité dans n\'importe quel rôle, y compris l\'administrateur du site.';
