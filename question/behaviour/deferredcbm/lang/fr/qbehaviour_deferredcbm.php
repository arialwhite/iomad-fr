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
 * Strings for component 'qbehaviour_deferredcbm', language 'en'.
 *
 * @package    qbehaviour
 * @subpackage deferredcbm
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accuracy'] = 'Précision';
$string['accuracyandbonus'] = 'Précision + Bonus';
$string['assumingcertainty'] = 'Vous n\'avez pas choisi de certitude. En supposant : {$a}.';
$string['averagecbmmark'] = 'Marque CBM moyenne';
$string['basemark'] = 'Marque de base {$a}';
$string['breakdownbycertainty'] = 'Ventilation par certitude';
$string['cbmbonus'] = 'Prime de la MCC';
$string['cbmmark'] = 'Marque CBM {$a}';
$string['cbmgradeexplanation'] = 'Pour la GAC, la note ci-dessus est indiquée par rapport au maximum pour tous les corrects à C=1.';
$string['cbmgrades'] = 'Classes CBM';
$string['cbmgrades_help'] = 'With Certainty Based Marking (CBM) getting every question correct with C=1 (low certainty) gives a grade of 100%. Grades may be as high as 300% if every question is correct with C=3 (high certainty). Misconceptions (confident wrong responses) lower grades much more than wrong responses that are acknowledged to be uncertain. This may even lead to negative overall grades.

**Accuracy** is the % correct ignoring certainty but weighted for the maximum mark of each question. Successfully distinguishing more and less reliable responses gives a better grade than selecting the same certainty for each question. This is reflected in the **CBM Bonus**. **Accuracy** + **CBM Bonus** is a better measure of knowledge than **Accuracy**. Misconceptions can lead to a negative bonus, a warning to look carefully at what is and is not known.';
$string['cbmgrades_link'] = 'qcomportement/retardcbm/certitude';
$string['certainty'] = 'Certitude';
$string['certainty_help'] = 'Certainty-based marking requires you to indicate how reliable you think your answer is. The available levels are:

Certainty level     | C=1 (Unsure) | C=2 (Mid) | C=3 (Quite sure)
------------------- | ------------ | --------- | ----------------
Mark if correct     |   1          |    2      |      3
Mark if wrong       |   0          |   -2      |     -6
Probability correct |  <67%        | 67-80%    |    >80%

Best marks are gained by acknowledging uncertainty. For example, if you think there is more than a 1 in 3 chance of being wrong, you should enter C=1 and avoid the risk of a negative mark.
';
$string['certainty_link'] = 'qcomportement/défautcbm/certitude';
$string['certainty-1'] = 'Pas d\'idée';
$string['certainty1'] = 'C=1 (incertitude : < 67 %)';
$string['certainty2'] = 'C=2 (Moyenne : >67 %)';
$string['certainty3'] = 'C=3 (Sûre : >80%)';
$string['certaintyshort-1'] = 'Pas d\'idée';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Aucune idée';
$string['foransweredquestions'] = 'Résultats pour les questions {$a} répondues';
$string['forentirequiz'] = 'Résultats de l\'ensemble du questionnaire (questions {$a})';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Réponses : {$a->réponses}. Précision : {$a->fraction}. (intervalle optimal {$a->idealrangelow} à {$a->idealrangehigh}). Vous étiez {$a->jugement} en utilisant ce niveau de certitude.';
$string['howcertainareyou'] = 'Certitude{$a->help}: {$a->choix}';
$string['noquestions'] = 'Pas de réponse';
$string['overconfident'] = 'Sur-confident';
$string['pluginname'] = 'Rétroaction différée avec la GAC';
$string['privacy:metadata'] = 'Le feedback différé avec CBM question comportement plugin ne stocke pas de données personnelles.';
$string['slightlyoverconfident'] = 'un peu trop confiant';
$string['slightlyunderconfident'] = 'un peu sous-confidentiel';
$string['underconfident'] = 'Sous-confident';
$string['weightx'] = 'Poids {$a}';
