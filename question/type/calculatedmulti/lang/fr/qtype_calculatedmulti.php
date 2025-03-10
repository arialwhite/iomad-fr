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
 * Strings for component 'qtype_calculatedmulti', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage calculatedmulti
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['answeroptions'] = 'Choix';
$string['answeroptions_help'] = 'La formule de choix suggérée est ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Multichoix calculé';
$string['pluginname_help'] = 'Les questions à choix multiples calculées sont des questions à choix multiples qui, dans leur choix, peuvent être incluses dans les résultats de la formule numérique en utilisant des wildcards entre crochets qui sont substitués à des valeurs individuelles lorsque le quiz est pris. Par exemple, si la question "Quelle est la zone d\'un rectangle de longueur {l} et de largeur {w}?" l\'un des choix est {={l}*{w}} (où * indique la multiplication).';
$string['pluginname_link'] = 'question/type/calculémulti';
$string['pluginnameadding'] = 'Ajout d\'une question à choix multiples calculée';
$string['pluginnameediting'] = 'Modifier une question à choix multiples calculée';
$string['pluginnamesummary'] = 'Les questions à choix multiples calculées sont comme les questions à choix multiples qui peuvent inclure les résultats de la formule à partir de valeurs numériques choisies au hasard à partir d\'un ensemble lorsque le quiz est pris.';
$string['privacy:metadata'] = 'Le plugin de type question multichoix calculé ne stocke aucune donnée personnelle.';
