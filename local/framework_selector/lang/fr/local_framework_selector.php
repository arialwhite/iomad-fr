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
 * @package   local_framework_selector
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @basedon   standard Moodle framework_selector
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Strings for component 'local_framework_selector', language 'en'
 */

$string['frameworkselectortoomany'] = 'framework_selector a obtenu plus d\'un framework sélectionné, même si multi-select est faux';
$string['cannotcallusgetselectedframework'] = 'Vous ne pouvez pas appeler framework_selector::get_selected_framework si multi-select est vrai';
$string['clear'] = 'Effacer';
$string['searchoptions'] = 'Options de recherche';
$string['frameworkselectorpreserveselected'] = 'Gardez les cadres sélectionnés, même s\'ils ne correspondent plus à la recherche';
$string['frameworkselectorautoselectunique'] = 'Si un seul cadre correspond à la recherche, sélectionnez-le automatiquement';
$string['frameworkselectorsearchanywhere'] = 'Correspond au texte de recherche n\'importe où dans le cadre\'s name';
$string['toomanyframeworksmatchsearch'] = 'Trop de cadres ({$a->count}) correspondent à \'{$a->search}\'';
$string['pleasesearchmore'] = 'S\'il vous plaît chercher plus';
$string['toomanyframeworkstoshow'] = 'Trop de cadres ({$a}) pour montrer';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['nomatchingframeworks'] = 'Aucun cadre ne correspond \'{$a}\'';
$string['none'] = 'Aucune';
$string['pluginname'] = 'Sélecteurs de cadres';
$string['previouslyselectedframeworks'] = 'Les cadres précédemment sélectionnés ne correspondent pas \'{$a}\'';
$string['privacy:metadata'] = 'L\'OIMAD Le plugin local framework sélecteur affiche uniquement les données stockées dans d\'autres emplacements.';
$string['search'] = 'Rechercher';
