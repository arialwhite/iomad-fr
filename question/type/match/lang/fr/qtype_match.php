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
 * Strings for component 'qtype_match', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_match
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['answer'] = 'Réponse {$a}';
$string['availablechoices'] = 'Choix disponibles';
$string['blanksforxmorequestions'] = 'Blancs pour {non} autres questions';
$string['correctansweris'] = 'La bonne réponse est : {$a}';
$string['deletedchoice'] = '[Supprimé le choix]';
$string['deletedsubquestion'] = 'Cette partie de la question a été supprimée après le début de la tentative.';
$string['filloutthreeqsandtwoas'] = 'Vous devez fournir au moins deux questions et trois réponses. Vous pouvez fournir des réponses erronées supplémentaires en donnant une réponse avec une question vide. Les entrées où la question et la réponse sont vides seront ignorées.';
$string['nomatchinganswer'] = 'Vous devez spécifier une réponse correspondant à la question \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Vous devez préciser une réponse à cette question.';
$string['notenoughqsandas'] = 'Vous devez fournir au moins {$a->q} questions et {$a->a} réponses.';
$string['notenoughquestions'] = 'Vous devez fournir au moins {$a} des paires de questions et réponses.';
$string['pleaseananswerallparts'] = 'Veuillez répondre à toutes les parties de la question.';
$string['pluginname'] = 'Comparaison';
$string['pluginname_help'] = 'Les questions correspondantes obligent le répondant à faire correspondre correctement une liste de noms ou d\'énoncés (questions) à une autre liste de noms ou d\'énoncés (réponses).';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Ajouter une question correspondante';
$string['pluginnameediting'] = 'Modifier une question correspondante';
$string['pluginnamesummary'] = 'La réponse à chacune des sous-questions doit être sélectionnée dans une liste de possibilités.';
$string['privacy:metadata'] = 'Le plugin correspondant au type de question permet aux auteurs de questions de définir des options par défaut en tant que préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque essai incorrect lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Indique si les réponses doivent être automatiquement modifiées.';
$string['regradeissuenumchoiceschanged'] = 'Le nombre de choix a changé.';
$string['regradeissuenumstemschanged'] = 'Le nombre de sous-questions a changé.';
$string['shuffle'] = 'Choux';
$string['shuffle_help'] = 'Si elle est activée, l\'ordre des questions est modifié de façon aléatoire pour chaque tentative, à condition que "Shuffler dans les questions" dans les paramètres d\'activité soit également activé. Dans une question correspondante, seules les questions sont affectées par ce paramètre. Les choix de réponse seront toujours serrés.';
