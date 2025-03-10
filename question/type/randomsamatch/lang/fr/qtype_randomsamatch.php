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
 * Strings for component 'qtype_randomsamatch', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage randomsamatch
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['insufficientoptions'] = 'Des options de sélection insuffisantes sont disponibles pour cette question, donc il n\'est pas disponible dans ce quiz. Veuillez en informer votre professeur.';
$string['nosaincategory'] = 'Il n\'y a pas de réponses courtes dans la catégorie que vous avez choisie \'{$a->catname}\'. Choose a different category, make some questions in this category.';
$string['notenoughsaincategory'] = 'Il y a/sont seulement {$a->nosaquestions} des questions de réponses courtes dans la catégorie que vous avez choisie \'{$a->catname}\'. Choose a different category, make some more questions in this category or reduce the amount of questions you\'ve selected.';
$string['pluginname'] = 'Correspondance aléatoire des réponses courtes';
$string['pluginname_help'] = 'Du point de vue des étudiants, cela ressemble à une question correspondante. La différence est que la liste des noms ou des énoncés (questions) pour l\'appariement est tirée au hasard des brèves questions de réponse dans la catégorie actuelle. Il devrait y avoir suffisamment de questions de réponses courtes non utilisées dans la catégorie, sinon un message d\'erreur sera affiché.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'Ajout d\'une question de correspondance de réponses courtes au hasard';
$string['pluginnameediting'] = 'Édition d\'une question de correspondance de réponses courtes au hasard';
$string['pluginnamesummary'] = 'Comme une question de correspondance, mais créé au hasard à partir des questions de réponse courte dans une catégorie particulière.';
$string['privacy:metadata'] = 'Le plugin de type question correspondant à une réponse courte aléatoire ne stocke aucune donnée personnelle.';
$string['randomsamatchnumber'] = 'Nombre de questions à sélectionner';
$string['randomsamatch'] = 'Correspondance aléatoire des réponses courtes';
$string['randomsamatchintro'] = 'Pour chacune des questions suivantes, sélectionnez la réponse correspondante dans le menu.';
$string['subcats'] = 'Inclure les sous-catégories';
$string['subcats_help'] = 'Si coché, les questions seront choisies parmi les sous-catégories aussi.';
