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
 * Strings for component 'rating', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['aggregatetype'] = 'Type agrégé';
$string['aggregateavg'] = 'Moyenne des cotes';
$string['aggregatecount'] = 'Nombre de notes';
$string['aggregatemax'] = 'Notation maximale';
$string['aggregatemin'] = 'Notation minimale';
$string['aggregatenone'] = 'Pas de notation';
$string['aggregatesum'] = 'Somme des cotes';
$string['aggregatetype_help'] = 'The aggregate type defines how ratings are combined to form the final grade in the gradebook.

* Average of ratings - The mean of all ratings
* Count of ratings - The number of rated items becomes the final grade. Note that the total cannot exceed the maximum grade for the activity.
* Maximum - The highest rating becomes the final grade
* Minimum - The smallest rating becomes the final grade
* Sum - All ratings are added together. Note that the total cannot exceed the maximum grade for the activity.

If "No ratings" is selected, then the activity will not appear in the gradebook.';
$string['allowratings'] = 'Permettre d\'évaluer les éléments?';
$string['allratingsforitem'] = 'Toutes les cotes reçues';
$string['capabilitychecknotavailable'] = 'Vérification des capacités non disponible jusqu\'à l\'enregistrement de l\'activité';
$string['couldnotdeleteratings'] = 'Désolé, cela ne peut pas être supprimé car les gens l\'ont déjà noté';
$string['norate'] = 'La cote des articles est interdite !';
$string['noratings'] = 'Pas de notations';
$string['noviewanyrate'] = 'Vous pouvez seulement regarder les résultats pour les éléments que vous avez faits';
$string['noviewrate'] = 'Vous n\'avez pas la capacité de voir les évaluations d\'éléments';
$string['rate'] = 'Taux';
$string['ratepermissiondenied'] = 'Vous n\'avez pas la permission d\'évaluer cet article';
$string['rating'] = 'Évaluation';
$string['ratinginvalid'] = 'La cote est invalide';
$string['ratingtime'] = 'Restreindre les cotes aux articles avec des dates dans cette gamme:';
$string['ratings'] = 'Évaluations';
$string['rolewarning'] = 'Rôles avec autorisation de noter';
$string['rolewarning_help'] = 'Les rôles avec la permission d\'évaluer sont les rôles avec la capacité moodle/rating:rate plus toutes les capacités d\'évaluation spécifiques à une activité. Vous pouvez donner plus de rôles permission de noter via la page Permissions.';
$string['scaleselectionrequired'] = 'Lors de la sélection d\'un type d\'agrégat de notation, vous devez également choisir d\'utiliser une échelle ou de définir un maximum de points.';
$string['privacy:metadata:rating'] = 'La cote de l\'utilisateur est stockée à côté d\'une cartographie de l\'élément qui a été noté.';
$string['privacy:metadata:rating:userid'] = 'L\'utilisateur qui a fait la notation.';
$string['privacy:metadata:rating:rating'] = 'La cote numérique saisie par l\'utilisateur.';
$string['privacy:metadata:rating:timecreated'] = 'Le moment où la notation a été faite pour la première fois.';
$string['privacy:metadata:rating:timemodified'] = 'La dernière mise à jour de la notation.';
