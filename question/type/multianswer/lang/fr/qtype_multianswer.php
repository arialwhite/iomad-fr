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
 * Strings for component 'qtype_multianswer', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage multianswer
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['confirmquestionsaveasedited'] = 'Je confirme que je veux que la question soit sauvegardée telle que modifiée';
$string['confirmsave'] = 'Confirmer puis enregistrer {$a}';
$string['correctanswer'] = 'Réponse correcte';
$string['correctanswerandfeedback'] = 'Réponse correcte et rétroaction';
$string['corruptedquestion'] = 'Cette question est corrompue et contient des sous-questions qui ne sont pas présentes dans votre système.';
$string['decodeverifyquestiontext'] = 'Décoder et vérifier le texte de la question';
$string['invalidmultianswerquestion'] = 'Réponses intégrées non valides (Cloze) question ({$a}).';
$string['layout'] = 'Mise en page';
$string['layouthorizontal'] = 'Ligne horizontale de boutons radio';
$string['layoutmultiple_horizontal'] = 'Ligne horizontale des cases à cocher';
$string['layoutmultiple_vertical'] = 'Colonne verticale des cases à cocher';
$string['layoutselectinline'] = 'Menu déroulant en ligne dans le texte';
$string['layoutundefined'] = 'Mise en page non définie';
$string['layoutvertical'] = 'Colonne verticale de boutons radio';
$string['missingsubquestion'] = 'Cette sous-question est absente de votre système et ne peut pas être affichée.';
$string['multichoicex'] = 'Choix multiple {$a}';
$string['nooptionsforsubquestion'] = 'Impossible d\'obtenir les options pour la partie de question # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'La question Cloze(multianswer) «<strong>{$a}</strong>» ne contient aucune question';
$string['pleaseananswerallparts'] = 'Veuillez répondre à toutes les parties de la question.';
$string['pluginname'] = 'Réponses intégrées (Cloze)';
$string['pluginname_help'] = 'Les questions intégrées (Cloze) consistent en un passage de texte avec des questions telles que les choix multiples et les réponses courtes intégrées.';
$string['pluginname_link'] = 'question/type/multiréponse';
$string['pluginnameadding'] = 'Ajout d\'une question sur les réponses intégrées (Cloze)';
$string['pluginnameediting'] = 'Modifier une question sur les réponses intégrées (Cloze)';
$string['pluginnamesummary'] = 'Les questions de ce type sont très flexibles, mais ne peuvent être créées qu\'en entrant un texte contenant des codes spéciaux qui créent des choix multiples intégrés, des réponses courtes et des questions numériques.';
$string['privacy:metadata'] = 'Le plugin de type questions Embedded (Cloze) ne stocke aucune donnée personnelle.';
$string['qtypenotrecognized'] = 'Type de question {$a} non reconnu';
$string['questiondefinition'] = 'Définition des questions';
$string['questiondeleted'] = 'Question supprimée';
$string['questioninquiz'] = '

<ul>
  <li>add or delete questions, </li>
  <li>change the questions order in the text,</li>
  <li>change their question type (numerical, shortanswer, multiple choice). </li></ul>
';
$string['questionsadded'] = 'Question ajoutée';
$string['questionsless'] = '{$a} question(s) inférieure(s) à la question multiréponse enregistrée dans la base de données';
$string['questionsmissing'] = 'Le texte de la question doit comprendre au moins une réponse intégrée.';
$string['questionsmore'] = '{$a} question(s) plus que dans la question multiréponse stockée dans la base de données';
$string['questionnotfound'] = 'Impossible de trouver la question de la partie #{$a}';
$string['questionsaveasedited'] = 'La question sera sauvegardée telle que modifiée';
$string['questiontypechanged'] = 'Type de question modifié';
$string['questiontypechangedcomment'] = 'Au moins un type de question a été modifié.<br /> Avez-vous ajouté, supprimé ou déplacé une question?<br Regardez devant.';
$string['questionusedinquiz'] = 'Cette question est utilisée dans {$a->nb_of_quiz} quiz(s), tentative(s) totale(s) : {$a->nb_d_tempts}';
$string['regradeissuenumsubquestionschanged'] = 'Le nombre de sous-questions intégrées dans la question a changé.';
$string['storedqtype'] = 'Type de question stocké {$a}';
$string['subqresponse'] = 'Partie {$a->i}: {$a->réponse}';
$string['unknownquestiontypeofsubquestion'] = 'Type de question inconnu : {$a->type} de la partie de question # {$a->sub}';
$string['warningquestionmodified'] = '<b>ENVOI</b>';
$string['youshouldnot'] = '<b>OU NE DOIT PAS </b>';
