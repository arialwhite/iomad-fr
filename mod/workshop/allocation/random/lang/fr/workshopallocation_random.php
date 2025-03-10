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
 * Strings for component 'workshopallocation_random', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    workshopallocation
 * @subpackage random
 * @copyright  2009 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addselfassessment'] = 'Ajouter des auto-évaluations';
$string['allocationaddeddetail'] = 'Nouvelle évaluation à faire : <strong>{$a->reviewername}</strong> est un évaluateur de <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Impossible de traiter l\'évaluation déjà notée : examinateur <strong>{$a->reviewername}</strong>, auteur de la soumission <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Évaluation réutilisée : <strong>{$a->reviewername}</strong> maintenu en tant qu\'examinateur de <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Paramètres d\'attribution';
$string['assessmentdeleteddetail'] = 'Évaluation proposée : <strong>{$a->reviewername}</strong> n\'est plus un examinateur de <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Les participants peuvent évaluer sans avoir soumis quoi que ce soit';
$string['confignumofreviews'] = 'Nombre par défaut de soumissions à attribuer au hasard';
$string['excludesamegroup'] = 'Empêcher les examens par des pairs du même groupe';
$string['noallocationtoadd'] = 'Aucune allocation à ajouter';
$string['nogroupusers'] = '<p>Avertissement : Si l\'atelier est en \'visible groups\' mode or \'separate groups\' mode, then users MUST be part of at least one group to have peer-assessments allocated to them by this tool. Non-grouped users can still be given new self-assessments or have existing assessments removed.</p>
<p>These users are currently not in a group: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Répartition des évaluations {$a}';
$string['numofrandomlyallocatedsubmissions'] = 'Affectation aléatoire des allocations {$a}';
$string['numofreviews'] = 'Nombre de revues';
$string['numofselfallocatedsubmissions'] = 'Auto-allocation {$a} soumission(s)';
$string['numperauthor'] = 'par demande';
$string['numperreviewer'] = 'par examinateur';
$string['pluginname'] = 'Répartition aléatoire';
$string['privacy:metadata'] = 'Le plugin d\'allocation aléatoire ne stocke aucune donnée personnelle. Les données personnelles réelles sur les personnes qui vont évaluer qui sont stockées par le module Atelier lui-même et qui constituent la base pour exporter les détails des évaluations.';
$string['randomallocationdone'] = 'Répartition aléatoire effectuée';
$string['resultnomorepeers'] = 'Plus de pairs disponibles';
$string['resultnomorepeersingroup'] = 'Plus de pairs dans ce groupe séparé';
$string['resultnotenoughpeers'] = 'Pas assez de pairs disponibles';
$string['resultnumperauthor'] = 'Essayer d\'attribuer {$a} avis par auteur';
$string['resultnumperreviewer'] = 'Essayer d\'attribuer {$a} revue(s) par évaluateur';
$string['removecurrentallocations'] = 'Supprimer les allocations actuelles';
$string['stats'] = 'Statistiques actuelles de répartition';
