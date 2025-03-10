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
 * Ordering question type language srings
 *
 * @package    qtype_ordering
 * @copyright  2013 Gordon Bateson (gordon.bateson@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['absoluteposition'] = 'Position absolue';
$string['addmultipleanswers'] = 'Ajouter {$a} d\'autres éléments';
$string['addsingleanswer'] = 'Ajouter un autre élément';
$string['allornothing'] = 'Tout ou rien';
$string['answer'] = 'Texte de l\'article';

$string['correctitemsnumber'] = 'Corriger les éléments : {$a}';
$string['correctorder'] = 'La bonne commande pour ces éléments est la suivante :';

$string['defaultanswerformat'] = 'Format de réponse par défaut';
$string['defaultquestionname'] = 'Faites glisser les éléments suivants dans la bonne commande.';

$string['draggableitemno'] = 'Élément traînable {non}';
$string['draggableitems'] = 'Éléments dragables';
$string['duplicatesnotallowed'] = 'La duplication des éléments dragables n\'est pas autorisée. La chaîne « {$a->text} » est déjà utilisée dans {$a->item}.';
$string['editingordering'] = 'Édition de la question de commande';

$string['gradedetails'] = 'Détails de la catégorie';
$string['gradingtype'] = 'Type de classement';
$string['gradingtype_help'] = '**All or nothing**
&nbsp; If all items are in the correct position, then full marks are awarded. Otherwise, the score is zero.

**Absolute position**
&nbsp; An item is considered correct if it is in the same position as in the correct answer. The highest possible score for the question is **the same as** the number of items displayed to the student.

**Relative to correct position**
&nbsp; An item is considered correct if it is in the same position as in the correct answer. Correct items receive a score equal to the number of items displayed minus one. Incorrect items receive a score equal to the number of items displayed minus one and minus the distance of the item from its correct position. Thus, if ***n*** items are displayed to the student, the number of marks available for each item is ***(n - 1)***, and the highest mark available for the question is ***n x (n - 1)***, which is the same as ***(n² - n)***.

**Relative to the next item (excluding last)**
&nbsp; An item is considered correct if it is followed by the same item as it is in the correct answer. The item in the last position is not checked. Thus, the highest possible score for the question is **one less than** the number of items displayed to the student.

**Relative to the next item (including last)**
&nbsp; An item is considered correct if it is followed by the same item as it is in the correct answer. This includes the last item which must have no item following it. Thus, the highest possible score for the question is **the same as** the number of items displayed to the student.

**Relative to both the previous and next items**
&nbsp; An item is considered correct if both the previous and next items are the same as they are in the correct answer. The first item should have no previous item, and the last item should have no next item. Thus, there are two possible points for each item, and the highest possible score for the question is **twice** the number of items displayed to the student.

**Relative to ALL previous and next items**
&nbsp; An item is considered correct if it is preceded by all the same items as it is in the correct answer, and it is followed by all the same items as it is in the correct answer. The order of the previous items does not matter, and nor does the order of the following items. Thus, if ***n*** items are displayed to the student, the number of marks available for each item is ***(n - 1)***, and the highest mark available for the question is ***n x (n - 1)***, which is the same as ***(n² - n)***.

**Longest ordered subset**
&nbsp; The grade is the number of items in the longest ordered subset of items. The highest possible grade is the same as the number of items displayed. A subset must have at least two items. Subsets do not need to start at the first item (but they can) and they do not need to be contiguous (but they can be). Where there are multiple subsets of equal length, items in the subset that is found first, when searching from left to right, will be displayed as correct. Other items will be marked as incorrect.

**Longest contiguous subset**
&nbsp; The grade is the number of items in the longest contiguous subset of items. The highest possible grade is the same as the number of items displayed. A subset must have at least two items. Subsets do not need to start at the first item (but they can) and they MUST BE CONTIGUOUS. Where there are multiple subsets of equal length, items in the subset that is found first, when searching from left to right, will be displayed as correct. Other items will be marked as incorrect.';

$string['highlightresponse'] = 'Mettre en évidence la réponse correcte ou incorrecte';
$string['horizontal'] = 'Horizontale';

$string['incorrectitemsnumber'] = 'Éléments incorrects : {$a}';
$string['layouttype'] = 'Présentation des points';
$string['layouttype_help'] = 'Choisissez d\'afficher les éléments verticalement ou horizontalement.';
$string['longestcontiguoussubset'] = 'Sous-ensemble contigu le plus long';
$string['longestorderedsubset'] = 'Sous-ensemble le plus long commandé';
$string['moved'] = '{$a->item} déplacé. Nouveau poste : {$a->position} de {$a->total}.';
$string['moveleft'] = 'Déplacer à gauche';
$string['moveright'] = 'Déplacer à droite';
$string['noresponsedetails'] = 'Désolé, aucun détail de la réponse à cette question n\'est disponible.';
$string['noscore'] = 'Pas de score';
$string['notenoughanswers'] = 'Les questions de commande doivent avoir plus de {$a} réponses.';
$string['notenoughsubsetitems'] = 'Un sous-ensemble doit avoir au moins {$a} des éléments.';

$string['numberingstyle'] = 'Nombre les choix ?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A, B, C, ...';
$string['numberingstyleIIII'] = 'I, II, III, ...';
$string['numberingstyle_desc'] = 'Le style de numérotation par défaut.';
$string['numberingstyle_help'] = 'Choisissez le style de numérotation des éléments dragables dans cette question.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Pas de numérotation';

$string['partialitemsnumber'] = 'Éléments partiellement corrects : {$a}';
$string['pluginname'] = 'Commande';
$string['pluginname_help'] = 'Plusieurs éléments sont affichés dans un ordre jumble. Les objets peuvent être entraînés dans un ordre significatif.';
$string['pluginname_link'] = 'question/type/commande';
$string['pluginnameadding'] = 'Ajout d\'une question de commande';
$string['pluginnameediting'] = 'Modifier une question de commande';
$string['pluginnamesummary'] = 'Mettez les objets jumlés dans un ordre significatif.';
$string['positionx'] = 'Position {$a}';
$string['privacy:preference:gradingtype'] = 'Le type de classement.';
$string['privacy:preference:layouttype'] = 'La présentation des éléments.';
$string['privacy:preference:numberingstyle'] = 'Le style de numérotation des choix.';
$string['privacy:preference:selectcount'] = 'La sélection compte.';
$string['privacy:preference:selecttype'] = 'Le type de sélection de l\'article.';
$string['privacy:preference:showgrading'] = 'Indique s\'il faut afficher les détails de classement.';

$string['regradeissuenumitemschanged'] = 'Le nombre d\'éléments dragables a changé.';
$string['relativeallpreviousandnext'] = 'Par rapport à TOUS les points précédents et suivants';
$string['relativenextexcludelast'] = 'Par rapport au point suivant (hors dernier)';
$string['relativenextincludelast'] = 'Par rapport au point suivant (y compris le dernier)';
$string['relativeonepreviousandnext'] = 'Par rapport aux points précédents et suivants';
$string['relativetocorrect'] = 'Par rapport à la position correcte';
$string['removeeditor'] = 'Supprimer l\'éditeur HTML';
$string['removeitem'] = 'Supprimer l\'élément draggable';

$string['scoredetails'] = 'Voici les scores pour chaque élément de cette réponse :';
$string['selectall'] = 'Sélectionner tous les éléments';
$string['selectcontiguous'] = 'Sélectionnez un sous-ensemble contigu d\'éléments';
$string['selectcount'] = 'Taille du sous-ensemble';
$string['selectcount_help'] = 'Le nombre d\'éléments qui seront affichés lorsque la question apparaîtra dans un quiz.';
$string['selectrandom'] = 'Sélectionnez un sous-ensemble aléatoire d\'éléments';
$string['selecttype'] = 'Type de sélection';
$string['selecttype_help'] = 'Choisissez s\'il faut afficher tous les éléments ou un sous-ensemble des éléments.';
$string['showgrading'] = 'Détails de classement';
$string['showgrading_help'] = 'Choisissez de montrer ou de cacher les détails du calcul de la note lorsqu\'un étudiant examine une réponse à cette question de commande.';

$string['vertical'] = 'Vertical';
