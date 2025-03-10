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
 * @package availability_grade
 * @copyright 2014 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['cachedef_items'] = 'Éléments de grade mis en cache pour évaluer la disponibilité conditionnelle';
$string['cachedef_scores'] = 'Qualités des utilisateurs mises en cache pour évaluer la disponibilité conditionnelle';
$string['description'] = 'Exiger que les élèves atteignent une note spécifiée.';
$string['error_backwardrange'] = 'Lors de la détermination d\'une fourchette, le minimum doit être inférieur au maximum.';
$string['error_invalidnumber'] = 'Les fourchettes doivent être spécifiées avec des pourcentages valides.';
$string['error_selectgradeid'] = 'Vous devez sélectionner un élément de grade pour l\'état de grade.';
$string['label_min'] = 'Pourcentage minimal (inclus)';
$string['label_max'] = 'Pourcentage maximal (exclusif)';
$string['option_min'] = 'doit être &#x2265;';
$string['option_max'] = 'doit être <';
$string['pluginname'] = 'Restriction par grade';
$string['requires_any'] = 'Vous avez une note dans <strong>{$a}</strong>';
$string['requires_max'] = 'Vous obtenez moins qu\'un certain score dans <strong>{$a}</strong>';
$string['requires_min'] = 'Vous obtenez plus qu\'un certain score dans <strong>{$a}</strong>';
$string['requires_notany'] = 'Vous n\'avez pas de note dans <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Vous n\'obtenez pas certains scores dans <strong>{$a}</strong>';
$string['requires_range'] = 'Vous obtenez un score dans une certaine plage dans <strong>{$a}</strong>';
$string['missing'] = '(activité manquante)';
$string['title'] = 'Classe';
$string['privacy:metadata'] = 'Le plugin Restriction by grades ne stocke aucune donnée personnelle.';
