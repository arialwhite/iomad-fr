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
 * Strings for component 'qtype_shortanswer', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage shortanswer
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmoreanswerblanks'] = 'Couvertures pour {non} Autres réponses';
$string['answer'] = 'Réponse : {$a}';
$string['answermustbegiven'] = 'Vous devez saisir une réponse s\'il y a une note ou une rétroaction.';
$string['answerno'] = 'Réponse {$a}';
$string['caseno'] = 'Non, l\'affaire est sans importance.';
$string['casesensitive'] = 'Sensibilité des cas';
$string['caseyes'] = 'Oui, le cas doit correspondre';
$string['correctansweris'] = 'La bonne réponse est : {$a}';
$string['correctanswers'] = 'Réponses correctes';
$string['filloutoneanswer'] = 'Vous devez fournir au moins une réponse possible. Les réponses laissées en blanc ne seront pas utilisées. Autres'*\' can be used as a wildcard to match any characters. The first matching answer will be used to determine the score and feedback.';
$string['notenoughanswers'] = 'Ce type de question nécessite au moins {$a} réponses';
$string['pleaseenterananswer'] = 'Saisissez une réponse.';
$string['pluginname'] = 'Réponse courte';
$string['pluginname_help'] = 'En réponse à une question (qui peut comprendre une image), le répondant tape un mot ou une courte phrase. Il peut y avoir plusieurs réponses correctes possibles, chacune avec une note différente. Si l\'option « Sensible à l\'affaire » est sélectionnée, vous pouvez avoir différents scores pour « Word » ou « Word ».';
$string['pluginname_link'] = 'question/type/réponse';
$string['pluginnameadding'] = 'Ajout d\'une courte question de réponse';
$string['pluginnameediting'] = 'Modifier une question de réponse courte';
$string['pluginnamesummary'] = 'Permet une réponse d\'un ou de quelques mots qui est noté en comparant avec diverses réponses du modèle, qui peuvent contenir des caractères génériques.';
$string['privacy:metadata'] = 'Le plugin de type de réponse courte permet aux auteurs de questions de définir les options par défaut en tant que préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque essai incorrect lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:usecase'] = 'Si les réponses doivent être sensibles au cas par cas.';
