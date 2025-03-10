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
 * Strings for component 'qbehaviour_adaptive', language 'en'.
 *
 * @package    qbehaviour
 * @subpackage adaptive
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['disregardedwithoutpenalty'] = 'La communication était invalide et n\'a pas été retenue sans pénalité.';
$string['gradingdetails'] = 'Marques pour cette soumission : [$a->raw}/{$a->max}.';
$string['gradingdetailswithadjustment'] = 'Marques pour cette soumission : [$a->raw}/{$a->max}. Compte tenu des essais antérieurs, cela donne <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailswithadjustmentpenalty'] = 'Marques pour cette soumission : [$a->raw}/{$a->max}. Compte tenu des essais antérieurs, cela donne <strong>{$a->cur}/{$a->max}</strong>. Cette soumission a entraîné une pénalité de {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Marques pour cette soumission : [$a->raw}/{$a->max}. Compte tenu des essais antérieurs, cela donne <strong>{$a->cur}/{$a->max}</strong>. Cette soumission a entraîné une pénalité de {$a->penalty}. Pénalité totale jusqu\'à présent : {$a->Pénalité totale}.';
$string['gradingdetailswithpenalty'] = 'Marques pour cette soumission : [$a->raw}/{$a->max}. Cette soumission a entraîné une pénalité de {$a->penalty}.';
$string['gradingdetailswithtotalpenalty'] = 'Marques pour cette soumission : [$a->raw}/{$a->max}. Cette soumission a entraîné une pénalité de {$a->penalty}. Pénalité totale jusqu\'à présent : {$a->Pénalité totale}.';
$string['notcomplete'] = 'Non complet';
$string['pluginname'] = 'Mode adaptatif';
$string['privacy:metadata'] = 'Le plugin de comportement de question en mode adaptatif ne stocke aucune donnée personnelle.';

// Old strings these are currently only used in the unit tests, to verify that the new
// strings give the same results as the old strings.
$string['gradingdetailsadjustment'] = 'Compte tenu des essais antérieurs, cela donne <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailspenalty'] = 'Cette soumission a entraîné une pénalité de {$a}.';
$string['gradingdetailspenaltytotal'] = 'Total des pénalités jusqu\'à présent : {$a}.';
