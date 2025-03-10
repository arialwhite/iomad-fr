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
 * @package   local_report_license_usage
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Rapport d\'ensemble';
$string['privacy:metadata:local_report_user_lic_allocs:id'] = 'Indicatif local d\'attribution de licence utilisateur';
$string['privacy:metadata:local_report_user_lic_allocs:courseid'] = 'ID du cours';
$string['privacy:metadata:local_report_user_lic_allocs:action'] = 'Actions d\'allocation';
$string['privacy:metadata:local_report_user_lic_allocs:userid'] = 'ID utilisateur';
$string['privacy:metadata:local_report_user_lic_allocs:licenseid'] = 'Numéro de licence';
$string['privacy:metadata:local_report_user_lic_allocs:issuedate'] = 'Numéro de licence Unix timestamp';
$string['privacy:metadata:local_report_user_lic_allocs'] = 'Information de l\'utilisateur d\'attribution de licence de rapport local';
$string['hideexpiry'] = 'Mettre en évidence l\'expiration';
$string['report_completion_overview:view'] = 'Voir le rapport d\'achèvement du cours';
$string['showexpiry'] = 'Tout mettre en avant';
$string['showexpiryonly'] = 'Cours en surbrillance avec longueur valide seulement';
$string['showexpiryonly_help'] = 'Si cette option est cochée, les cours qui n\'ont pas de longueur valide ne seront pas affichés en couleur dans l\'aperçu graphique par défaut.';
$string['showfulldetail'] = 'Afficher le détail complet';
$string['showfulldetail_help'] = 'Si cette option est cochée, alors toutes les informations d\'achèvement sont affichées, sinon elle\'s just the completion and expiry dates.';
$string['warningduration'] = 'Limite d\'avertissement expirée';
$string['warningduration_help'] = 'C\'est la valeur du temps avant l\'expiration d\'un cours où le rapport affichera les couleurs d\'avertissement d\'expiration au lieu des couleurs OK.';
$string['coursesummary'] = 'Enroled: {$a->enrolled}
Started: {$a->timestarted}
Completed: {$a->timecompleted}
Expires: {$a->timeexpires}
Grade: {$a->finalscore}';
$string['coursesummary_extra_indate'] = 'Enrolled: {$a->enrolled}
Started: {$a->timestarted}
Completed: {$a->timecompleted}
Expires: {$a->timeexpires}
Grade: {$a->finalscore}
Last completed: {$a->lastcompleted}
Expires: {$a->timeexpired}';
$string['coursesummary_extra_outdate'] = 'Enrolled: {$a->enrolled}
Started: {$a->timestarted}
Completed: {$a->timecompleted}
Expires: {$a->timeexpires}
Grade: {$a->finalscore}
Last completed: {$a->lastcompleted}
Expired: {$a->timeexpired}';
$string['coursesummary_expired'] = 'Enrolled: {$a->enrolled}
Started: {$a->timestarted}
Expired: {$a->timeexpires}
Grade: {$a->finalscore}';
$string['coursesummary_noexpiry'] = 'Enrolled: {$a->enrolled}
Started: {$a->timestarted}
Completed: {$a->timecompleted}
Grade: {$a->finalscore}';
$string['coursesummary_nograde'] = 'Enroled: {$a->enrolled}
Started: {$a->timestarted}
Completed: {$a->timecompleted}
Expires: {$a->timeexpires}
Result: Passed';
$string['coursesummary_nograde_noexpiry'] = 'Enroled: {$a->enrolled}
Started: {$a->timestarted}
Completed: {$a->timecompleted}
Result: Passed';
$string['coursesummary_partial'] = 'Completed: {$a->timecompleted}
Expires: {$a->timeexpires}';
$string['coursesummary_partial_extra_indate'] = 'Completed: {$a->timecompleted}
Expires: {$a->timeexpires}
Last completed: {$a->lastcompleted}
Expires: {$a->timeexpired}';
$string['coursesummary_partial_extra_outdate'] = 'Completed: {$a->timecompleted}
Expires: {$a->timeexpires}
Last completed: {$a->lastcompleted}
Expired: {$a->timeexpired}';
$string['report_completion_overview_title'] = 'Rapport d \' ensemble sur l \' achèvement';
$string['notcompleted'] = 'En cours';
$string['notcompleted-expiring'] = 'En cours (Due)';
$string['notcompleted-indate'] = 'En cours (OK)';
$string['notcompleted-outdate'] = 'En cours (expiré)';
$string['notenrolled']  = 'Non inscrits';
$string['notenrolled-expiring']  = 'Non inscrit (Due)';
$string['notenrolled-indate']  = 'Non inscrits (OK)';
$string['notenrolled-outdate']  = 'Non inscrits (expirés)';
$string['indate'] = 'OK';
$string['expiring'] = 'Due';
$string['expired'] = 'Expiré';
$string['coursestatus'] = 'État {$a}';
$string['coursecompletion'] = '{$a} achèvement';
$string['courseexpiry'] = '{$a} expiration';
$string['bycourses'] = 'Vue par cours';
$string['byusers'] = 'Affichage par l\'utilisateur';
