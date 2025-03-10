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
 * Language strings for the gap-select question type.
 *
 * @package    qtype_gapselect
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmorechoiceblanks'] = 'Couvertures pour {non} plus de choix';
$string['answer'] = 'Réponse';
$string['blanknumber'] = 'Couverture {$a}';
$string['choices'] = 'Choix';
$string['choicex'] = 'Choix [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menu déroulant';
$string['combinedcontrolnamegapselectplural'] = 'menus déroulants';
$string['correctansweris'] = 'La bonne réponse est : {$a}';
$string['errorblankchoice'] = 'Veuillez vérifier les choix : Le choix {$a} est vide.';
$string['errormissingchoice'] = 'Veuillez vérifier le texte de la question: {$a} n\'a pas été trouvé dans les choix! Seuls les numéros avec les réponses de choix spécifiées sont autorisés à être utilisés comme porte-places.';
$string['errornoslots'] = 'Le texte de la question doit contenir des placeholders comme [[1]] pour montrer où vont les mots manquants.';
$string['errorquestiontextblank'] = 'Vous devez entrer un texte de question.';
$string['group'] = 'Groupe';
$string['pleaseputananswerineachbox'] = 'Veuillez mettre une réponse dans chaque case.';
$string['pluginname'] = 'Sélectionner les mots manquants';
$string['pluginname_help'] = 'Pour sélectionner les questions manquantes, le répondant doit sélectionner les réponses correctes dans les menus déroulants. [[1]], [[2]], [[3]], ... sont utilisés comme support dans le texte de la question, avec les bonnes réponses spécifiées comme réponses de choix 1, 2, 3, ... respectivement. Des réponses supplémentaires peuvent être ajoutées pour rendre la question plus difficile. Les réponses choisies peuvent être regroupées pour limiter les réponses disponibles dans chaque menu déroulant.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Ajout d\'une question sur certains mots manquants';
$string['pluginnameediting'] = 'Modifier une question de mots manquants';
$string['pluginnamesummary'] = 'Les mots manquants dans le texte de la question sont remplis en utilisant des menus déroulants.';
$string['privacy:metadata'] = 'Sélectionnez les mots manquants type question plugin permet aux auteurs de questions de définir les options par défaut comme préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque essai incorrect lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Indique si les réponses doivent être automatiquement modifiées.';
$string['regradeissuenumchoiceschanged'] = 'Le nombre de choix dans le groupe {$a} a changé.';
$string['regradeissuenumgroupsschanged'] = 'Le nombre de groupes de choix a changé.';
$string['shuffle'] = 'Choux';
$string['tagsnotallowed'] = '{$a->tag} n\'est pas autorisé. (Seul {$a->allowed} est autorisé.)';
$string['tagsnotallowedatall'] = '{$a->tag} n\'est pas autorisé. (Aucun HTML n\'est autorisé ici.)';
