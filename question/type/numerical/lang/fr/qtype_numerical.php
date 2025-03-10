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
 * Strings for component 'qtype_numerical', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage numerical
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['acceptederror'] = 'Erreur acceptée';
$string['answererror'] = 'Erreur';
$string['addmoreanswerblanks'] = 'Blanks pour {non} plus de réponses';
$string['addmoreunitblanks'] = 'Blancs pour {non} plus d\'unités';
$string['answercolon'] = 'Réponse';
$string['answermustbenumberorstar'] = 'La réponse doit être un nombre, par exemple -1.234 ou 3e8, ou \'*\'.';
$string['answerno'] = 'Réponse {$a}';
$string['decfractionofquestiongrade'] = 'en fraction (0-1) de la cote de question';
$string['decfractionofresponsegrade'] = 'en fraction (0-1) du grade de réponse';
$string['decimalformat'] = 'décimales';
$string['editableunittext'] = 'l\'élément d\'entrée du texte';
$string['errornomultiplier'] = 'Vous devez spécifier un multiplicateur pour cette unité.';
$string['errorrepeatedunit'] = 'Vous ne pouvez pas avoir deux unités avec le même nom.';
$string['geometric'] = 'Géométrique';
$string['invalidnumber'] = 'Vous devez entrer un numéro valide.';
$string['invalidnumbernounit'] = 'Vous devez entrer un numéro valide. N\'incluez pas d\'unité dans votre réponse.';
$string['invalidnumericanswer'] = 'Une des réponses que vous avez saisies n\'était pas un numéro valide.';
$string['invalidnumerictolerance'] = 'Une des tolérances que vous avez saisies n\'était pas valide.';
$string['leftexample'] = 'à gauche, par exemple 1,00 $ ou 1,00 $';
$string['multiplier'] = 'Multiplicateur';
$string['noneditableunittext'] = 'Texte non modifiable de l\'unité no 1';
$string['nonvalidcharactersinnumber'] = 'caractères NON valides en nombre';
$string['notenoughanswers'] = 'Vous devez entrer au moins une réponse.';
$string['nounitdisplay'] = 'Pas de classement unitaire';
$string['numericalmultiplier'] = 'Multiplicateur';
$string['numericalmultiplier_help'] = 'The multiplier is the factor by which the correct numerical response will be multiplied.

The first unit (Unit 1) has a default multiplier of 1. Thus if the correct numerical response is 5500 and you set W as unit at Unit 1 which has 1 as default multiplier, the correct response is 5500 W.

If you add the unit kW with a multiplier of 0.001, this will add a correct response of 5.5 kW. This means that the answers 5500W or 5.5kW would be marked correct.

Note that the accepted error is also multiplied, so an allowed error of 100W would become an error of 0.1kW.';
$string['manynumerical'] = 'Les unités sont facultatives. Si une unité est entrée, elle sert à convertir la réponse en unité 1 avant le classement.';
$string['nominal'] = 'Nominal';
$string['onlynumerical'] = 'Les unités ne sont pas du tout utilisées. Seule la valeur numérique est notée.';
$string['oneunitshown'] = 'L\'unité 1 s\'affiche automatiquement à côté de la zone de réponse.';
$string['pleaseenterananswer'] = 'Saisissez une réponse.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Saisissez votre réponse sans utiliser le mille séparateur ({$a}).';
$string['pluginname'] = 'Numérotés';
$string['pluginname_help'] = 'Du point de vue des étudiants, une question numérique ressemble à une question à réponse courte. La différence est que les réponses numériques sont autorisées à avoir une erreur acceptée. Cela permet d\'évaluer une gamme fixe de réponses comme une seule réponse. Par exemple, si la réponse est 10 avec une erreur acceptée de 2, alors tout nombre entre 8 et 12 sera accepté comme correct.';
$string['pluginname_link'] = 'question/type/numérique';
$string['pluginnameadding'] = 'Ajouter une question numérique';
$string['pluginnameediting'] = 'Édition d\'une question numérique';
$string['pluginnamesummary'] = 'Permet une réponse numérique, peut-être avec des unités, qui est notée en comparant avec diverses réponses du modèle, éventuellement avec des tolérances.';
$string['privacy:metadata'] = 'Le plugin de type question numérique permet aux auteurs de questions de définir les options par défaut en tant que préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque essai incorrect lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:unitrole'] = 'Que l\'unité soit essentielle, facultative ou non.';
$string['privacy:preference:unitpenalty'] = 'Quelle fraction (0-1) de la note de réponse ou de la note de question devrait s\'appliquer?';
$string['privacy:preference:unitgradingtypes'] = 'La pénalité unitaire s\'applique en tant que fraction (0-1) de la cote de réponse ou de la cote de question.';
$string['privacy:preference:multichoicedisplay'] = 'Indique si les unités sont affichées comme élément d\'entrée de texte, sélection à choix multiples ou menu déroulant.';
$string['privacy:preference:unitsleft'] = 'Que l\'unité s\'affiche à gauche (par exemple $, £) ou à droite (par exemple kg, km, cm).';
$string['relative'] = 'Taux relatif';
$string['rightexample'] = 'à droite, par exemple 1,00cm ou 1,00km';
$string['selectunits'] = 'Sélectionner des unités';
$string['selectunit'] = 'Sélectionner une unité';
$string['studentunitanswer'] = 'Les unités sont entrées en utilisant';
$string['tolerancetype'] = 'Type de tolérance';
$string['unit'] = 'Unité';
$string['unitappliedpenalty'] = 'Ces marques comprennent une pénalité de {$a} pour mauvaise unité.';
$string['unitchoice'] = 'une sélection à choix multiples';
$string['unitedit'] = 'Éditer l\'unité';
$string['unitgraded'] = 'L\'unité doit être donnée et sera classée.';
$string['unithandling'] = 'Traitement des unités';
$string['unitincorrect'] = 'Vous n\'avez pas donné l\'unité correcte.';
$string['unitmandatory'] = 'Obligatoire';
$string['unitmandatory_help'] = '

* The response will be graded using the unit written.

* The unit penalty will be applied if the unit field is empty

';
$string['unitnotselected'] = 'Vous devez sélectionner une unité.';
$string['unitonerequired'] = 'Vous devez entrer au moins une unité';
$string['unitoptional'] = 'Unité optionnelle';
$string['unitoptional_help'] = '
* If the unit field is not empty, the response will be graded using this unit.

* If the unit is badly written or unknown, the response will be considered as non valid.
';
$string['unitpenalty'] = 'Peine unitaire';
$string['unitpenalty_help'] = 'The penalty is applied if

* the wrong unit name is entered into the unit input, or
* a unit is entered into the value input box';
$string['unitposition'] = 'Unités';
$string['units'] = 'Unités';
$string['unitselect'] = 'un menu déroulant';
$string['unitx'] = 'Unité {non}';
$string['xmustbenumeric'] = '{$a} doit être un nombre.';
$string['xmustnotbenumeric'] = '{$a} ne peut pas être un nombre.';
$string['youmustenteramultiplierhere'] = 'Vous devez entrer un multiplicateur ici.';
