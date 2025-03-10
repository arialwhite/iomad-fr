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
 * Strings for component 'qtype_multichoice', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage multichoice
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['answerhowmany'] = 'Une ou plusieurs réponses ?';
$string['answerhowmany_desc'] = 'Indique si la réponse par défaut doit être une seule réponse (c.-à-d. boutons radio) ou plusieurs réponses (c.-à-d. cases à cocher).';
$string['answernumbering'] = 'Nombre les choix ?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingABCD'] = 'A, B, C, ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingIIII'] = 'I, II, III, ...';
$string['answernumberingnone'] = 'Pas de numérotation';
$string['answernumbering_desc'] = 'Le style de numérotation par défaut.';
$string['answersingleno'] = 'Plusieurs réponses autorisées';
$string['answersingleyes'] = 'Une seule réponse';
$string['choiceno'] = 'Choix {$a}';
$string['choices'] = 'Choix disponibles';
$string['clearchoice'] = 'Effacer mon choix';
$string['clozeaid'] = 'Saisissez le mot manquant';
$string['correctansweris'] = 'La bonne réponse est : {$a}';
$string['correctanswersare'] = 'Les bonnes réponses sont : {$a}';
$string['correctfeedback'] = 'Pour toute réponse correcte';
$string['deletedchoice'] = 'Ce choix a été supprimé après le début de la tentative.';
$string['errgradesetanswerblank'] = 'Jeu de grades, mais la réponse est vide';
$string['errfractionsaddwrong'] = 'Les notes positives que vous avez choisies ne correspondent pas à 100%<br />Au lieu de cela, elles correspondent à {$a}%';
$string['errfractionsnomax'] = 'L\'un des choix devrait être 100%, de sorte qu\'il est possible d\'obtenir une note complète pour cette question.';
$string['feedback'] = 'Commentaires';
$string['fillouttwochoices'] = 'Vous devez remplir au moins deux choix. Les choix laissés en blanc ne seront pas utilisés.';
$string['fractionsaddwrong'] = 'Les notes positives que vous avez choisies ne s\'additionnent pas à 100%<br />Au lieu de cela, elles s\'additionnent à {$a}%<br /> Voulez-vous revenir et résoudre cette question ?';
$string['fractionsnomax'] = 'Un des choix devrait être 100%, de sorte qu\'il est possible d\'obtenir une note complète pour cette question.<br />Vous voulez revenir en arrière et résoudre cette question?';
$string['incorrectfeedback'] = 'Pour toute réponse incorrecte';
$string['notenoughanswers'] = 'Ce type de question nécessite au moins {$a} choix';
$string['overallcorrectfeedback'] = 'Rétroaction pour toute réponse correcte';
$string['overallfeedback'] = 'Commentaires généraux';
$string['overallincorrectfeedback'] = 'Rétroaction pour toute réponse incorrecte';
$string['overallpartiallycorrectfeedback'] = 'Rétroaction pour toute réponse partiellement correcte';
$string['partiallycorrectfeedback'] = 'Pour toute réponse partiellement correcte';
$string['pleaseselectananswer'] = 'Veuillez sélectionner une réponse.';
$string['pleaseselectatleastoneanswer'] = 'Veuillez sélectionner au moins une réponse.';
$string['pluginname'] = 'Choix multiple';
$string['pluginname_help'] = 'En réponse à une question (qui peut inclure une image), le répondant choisit parmi plusieurs réponses. Une question à choix multiples peut avoir une ou plusieurs réponses correctes.';
$string['pluginname_link'] = 'question/type/multichoix';
$string['pluginnameadding'] = 'Ajout d\'une question à choix multiples';
$string['pluginnameediting'] = 'Modifier une question à choix multiples';
$string['pluginnamesummary'] = 'Permet la sélection d\'une réponse unique ou multiple à partir d\'une liste prédéfinie.';
$string['privacy:metadata'] = 'Le plugin de type question à choix multiples permet aux auteurs de questions de définir les options par défaut en tant que préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque essai incorrect lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:single'] = 'Que la réponse soit simple avec des boutons radio ou multiple avec des cases à cocher.';
$string['privacy:preference:shuffleanswers'] = 'Indique si les réponses doivent être automatiquement modifiées.';
$string['privacy:preference:answernumbering'] = 'Quel style de numérotation devrait être utilisé (\'1, 2, 3, ...\', \'a, b, c, ...\' etc.).';
$string['privacy:preference:showstandardinstruction'] = 'Indique si les instructions standard sont affichées.';
$string['regradeissuenumchoiceschanged'] = 'Le nombre de choix dans la question a changé.';
$string['selectmulti'] = 'Sélectionnez un ou plusieurs :';
$string['selectone'] = 'Sélectionner un & #160;:';
$string['shuffleanswers'] = 'Ça change les choix ?';
$string['shuffleanswers_desc'] = 'Indique si les options doivent être modifiées au hasard pour chaque tentative par défaut.';
$string['shuffleanswers_help'] = 'Si c\'est possible, l\'ordre des réponses est modifié au hasard pour chaque tentative, à condition que le paramètre « Shuffler dans les questions » dans les paramètres d\'activité soit également activé.';
$string['singleanswer'] = 'Choisissez une réponse.';
$string['showstandardinstruction'] = 'Afficher les instructions standard';
$string['showstandardinstruction_desc'] = 'Indique s\'il faut afficher les instructions "Sélectionner un:" ou "Sélectionner un ou plusieurs:" avant de répondre à plusieurs choix.';
$string['showstandardinstruction_help'] = 'Indique s\'il faut afficher les instructions \'Select one:\' or \'Select one or more:\' before multiple choice answers. Alternatively, you can include instructions in the question text.';
$string['toomanyselected'] = 'Vous avez sélectionné trop d\'options.';
