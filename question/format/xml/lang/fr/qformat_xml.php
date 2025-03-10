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
 * Strings for component 'qformat_xml', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qformat_xml
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['invalidxml'] = 'Fichier XML non valide - chaîne attendue (utiliser CDATA?)';
$string['pluginname'] = 'Format XML Moodle';
$string['pluginname_help'] = 'Il s\'agit d\'un format spécifique à Moodle pour les questions d\'importation et d\'exportation.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'Le plugin XML ne stocke aucune donnée personnelle.';
$string['truefalseimporterror'] = '<b>Avertissement</b>: La vraie / fausse question \'{$a->questiontext}\' could not be imported properly. It was not clear whether the correct answer is true or false. The question has been imported assuming that the answer is \'{$a->answer}\'. If this is not correct, you will need to edit the question.';
$string['unsupportedexport'] = 'Type de question {$a} n\'est pas supporté par l\'exportation XML';
$string['xmlimportnoname'] = 'Nom de question manquant dans le fichier XML';
$string['xmlimportnoquestion'] = 'Texte de question manquant dans le fichier XML';
$string['xmltypeunsupported'] = 'Type de question {$a} n\'est pas supporté par l\'importation XML';
