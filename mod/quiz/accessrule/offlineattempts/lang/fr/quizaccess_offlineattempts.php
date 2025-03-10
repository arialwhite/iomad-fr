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
 * Strings for the quizaccess_offlineattempts plugin.
 *
 * @package    quizaccess_offlineattempts
 * @copyright  2016 Juan Leyva
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permettre la tentative hors ligne avec l\'application mobile';
$string['allowofflineattempts_help'] = 'If enabled, a mobile app user can download the quiz and attempt it offline.

Note: It is not possible for a quiz to be attempted offline if it has a time limit, or requires a network address, or uses any question behaviour other than deferred feedback (with or without CBM), or uses sequential navigation.';
$string['confirmdatasaved'] = 'Je confirme que je n\'ai aucun travail non sauvé sur un appareil mobile.';
$string['mobileapp'] = 'Application mobile';
$string['offlineattemptserror'] = 'Il n\'est pas possible d\'essayer un quiz hors ligne s\'il a une limite de temps, ou nécessite une adresse réseau, ou utilise tout comportement de question autre que la rétroaction différée (avec ou sans CBM), ou utilise la navigation séquentielle.';
$string['offlinedatamessage'] = 'Vous avez travaillé sur cette tentative en utilisant un appareil mobile. Les données ont été enregistrées pour la dernière fois sur ce site {$a} il y a.';
$string['pleaseconfirm'] = 'Veuillez vérifier et confirmer que vous n\'avez aucun travail non sauvé.';
$string['pluginname'] = 'Règle d\'accès hors ligne';
$string['privacy:metadata'] = 'Le plugin hors ligne tente d\'accéder au quiz ne stocke aucune donnée personnelle.';
