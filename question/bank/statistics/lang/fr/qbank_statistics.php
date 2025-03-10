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
 * Strings for component qbank_statistics, language 'en'
 *
 * @package    qbank_statistics
 * @copyright  2021 Catalyst IT Australia Pty Ltd
 * @author     Nathan Nguyen <nathannguyen@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Statistiques des questions';
$string['privacy:metadata'] = 'Le plugin Questions statistiques ne stocke aucune donnée personnelle.';

// Columns.
$string['facility_index'] = 'Indice des installations';
$string['facility_index_help'] = 'L\'indice de facilité donne la note moyenne (en pourcentage) obtenue sur la question (toutes versions) dans tous les quiz où la question a été tentée. Une valeur plus élevée indique normalement une question plus facile.';
$string['discriminative_efficiency'] = 'Efficacité discriminatoire';
$string['discriminative_efficiency_help'] = 'L\'efficacité discriminatoire est une estimation statistique de la façon dont la question évalue les étudiants, avec une valeur plus élevée étant meilleure. Une valeur particulièrement faible peut indiquer un problème avec la question. Une question très difficile ou facile (avec un indice d\'installation proche de 0% ou 100%) peut également conduire à une faible valeur.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistique';
$string['discrimination_index'] = 'Il faut vérifier ?';
$string['discrimination_index_help'] = 'Une question est indiquée comme nécessitant une vérification fondée sur des statistiques de questions. Par exemple, si les élèves obtiennent un score faible sur la question mais un score élevé sur l\'ensemble du quiz, ou un score élevé sur la question, mais un score faible sur l\'ensemble du quiz, alors il peut y avoir un problème avec la question comme la mauvaise réponse étant définie comme correcte. Les statistiques ne sont cependant pas infaillibles; c\'est juste un indice que la question doit être vérifiée.';

// Text format.
$string['verylikely'] = 'Très probable';
$string['likely'] = 'Probablement';
$string['unlikely'] = 'Peu probable';
$string['na'] = 'N/A';
$string['emptyvalue'] = '-';
