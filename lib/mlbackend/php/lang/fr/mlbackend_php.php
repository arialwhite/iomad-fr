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
 * Strings for component 'mlbackend_php'
 *
 * @package   mlbackend_php
 * @copyright 2017 David Monllao {@link http://www.davidmonllao.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['datasetsizelimited'] = 'Seule une partie de l\'ensemble de données a été évaluée en raison de sa taille. Définir $CFG->mlbackend_php_no_memory_limit si vous êtes certain que votre système peut faire face à un ensemble de données {$a}.';
$string['errorcantloadmodel'] = 'Le fichier modèle {$a} n\'existe pas. Le modèle devrait être formé avant de l\'utiliser pour prédire.';
$string['errorlowscore'] = 'La précision des prévisions du modèle évalué n\'est pas très élevée, de sorte que certaines prédictions peuvent ne pas être exactes. Score du modèle = {$a->score}, score minimum = {$a->minscore}';
$string['errornotenoughdata'] = 'Il n\'y a pas suffisamment de données pour évaluer ce modèle en utilisant l\'intervalle d\'analyse fourni.';
$string['errornotenoughdatadev'] = 'Les résultats de l\'évaluation variaient trop. Il est recommandé de recueillir davantage de données pour s\'assurer que le modèle est valide. Résultats de l\'évaluation écart-type = {$a->déviation}, écart-type maximum recommandé = {$a->déviation acceptée}';
$string['errorphp7required'] = 'Le moteur d\'apprentissage de la machine PHP nécessite PHP 7';
$string['pluginname'] = 'moteur d\'apprentissage de machine PHP';
$string['privacy:metadata'] = 'Le plugin PHP machine learning backend ne stocke aucune donnée personnelle.';
