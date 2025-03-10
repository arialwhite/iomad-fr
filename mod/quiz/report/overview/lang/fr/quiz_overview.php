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
 * Strings for component 'quiz_overview', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   quiz_overview
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allattempts'] = 'Afficher toutes les tentatives';
$string['allattemptscontributetograde'] = 'Toutes les tentatives contribuent à la note finale pour l\'utilisateur.';
$string['allstudents'] = 'Afficher tous {$a}';
$string['attemptsonly'] = 'Afficher {$a} avec des tentatives seulement';
$string['attemptsprepage'] = 'Tentatives indiquées par page';
$string['deleteselected'] = 'Supprimer les tentatives sélectionnées';
$string['done'] = 'Fait';
$string['err_failedtodeleteregrades'] = 'Échec de la suppression des classes de tentative calculées';
$string['err_failedtorecalculateattemptgrades'] = 'Impossible de recalculer les niveaux de tentative';
$string['highlightinggraded'] = 'La tentative de l\'utilisateur qui contribue à la note finale est soulignée.';
$string['needed'] = 'Besoins';
$string['noattemptsonly'] = 'Afficher / télécharger {$a} sans aucune tentative seulement';
$string['noattemptstoregrade'] = 'Aucune tentative de reclassement n\'est nécessaire';
$string['nogradepermission'] = 'Vous faites\'t have permission to grade this quiz.';
$string['onlyoneattemptallowed'] = 'Une seule tentative par utilisateur autorisée sur ce quiz.';
$string['optallattempts'] = 'toutes les tentatives';
$string['optallstudents'] = 'tous {$a} qui ont ou n\'ont pas essayé le quiz';
$string['optattemptsonly'] = '{$a} qui ont essayé le quiz';
$string['optnoattemptsonly'] = '{$a} qui n\'ont pas tenté le quiz';
$string['optonlyregradedattempts'] = 'qui ont été reclassés / sont marqués comme nécessitant une reclassification';
$string['overview'] = 'Classes';
$string['overviewdownload'] = 'Aperçu téléchargement';
$string['overviewfilename'] = 'grades';
$string['overviewreport'] = 'Rapport de notes';
$string['overviewreportgraph'] = 'Nombre total d\'élèves ayant atteint les niveaux de scolarité';
$string['overviewreportgraphgroup'] = 'Nombre d\'étudiants dans le groupe \'{$a}\' achieving grade ranges';
$string['pagesize'] = 'Taille des pages';
$string['pluginname'] = 'Classes';
$string['preferencespage'] = 'Préférences pour cette page';
$string['preferencessave'] = 'Afficher le rapport';
$string['preferencesuser'] = 'Vos préférences pour ce rapport';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Indique s\'il faut montrer des points pour chaque emplacement de question.';
$string['privacy:preference:slotmarks:yes'] = 'Les marques sont affichées à côté de la case à questions.';
$string['privacy:preference:slotmarks:no'] = 'Les marques ne sont pas affichées à côté de la case à questions.';
$string['regrade'] = 'Reclassement';
$string['regrade_allattempts'] = 'Toutes tentatives';
$string['regrade_allquestions'] = 'Toutes les questions';
$string['regrade_attempts'] = 'Des tentatives de revalorisation...';
$string['regrade_commitregrade'] = 'S\'engager à reclasser';
$string['regrade_dryrun'] = 'Cours à sec';
$string['regrade_help'] = 'La revalorisation recalcule le classement automatisé des tentatives en utilisant la version actuelle de chaque question si possible. Un essai à sec vous permet de prévisualiser les changements de grade sans affecter les tentatives.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'La dernière série sèche d\'une reclassification a révélé que la reclassification changerait les notes pour {$a->questions} questions dans {$a->tempts} tentatives.';
$string['regrade_regradenow'] = 'Reclassement maintenant';
$string['regrade_selectedattempts'] = 'Essais sélectionnés';
$string['regrade_selectedquestions'] = 'Questions sélectionnées';
$string['regradecomplete'] = 'Reclassement achevé';
$string['regradedsuccessfullyxofy'] = 'Reclassement terminé ({$a->done}/{$a->compte})';
$string['regradeheader'] = 'Reclassement';
$string['regradingattemptissue'] = 'Fente {$a->slot}: {$a->raison}';
$string['regradingattemptxofy'] = 'Essai de revalorisation ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Les questions suivantes n\'ont pas pu être reclassées dans la tentative {$a->attempnum} par {$a->name} (id {$a->attempid})';
$string['regradingattemptxofywithdetails'] = 'Tentative de reclassement ({$a->done}/{$a->count}) - Tentative {$a->attempnum} par {$a->name} (id {$a->attempid})';
$string['show'] = 'Afficher / télécharger';
$string['showattempts'] = 'Seulement afficher / télécharger des tentatives';
$string['showdetailedmarks'] = 'Marques pour chaque question';
$string['showinggraded'] = 'Ne montrer que la tentative notée pour chaque utilisateur.';
$string['showinggradedandungraded'] = 'Affichage des tentatives notées et non notées pour chaque utilisateur. La seule tentative pour chaque utilisateur qui est noté est mise en évidence. La méthode de classement pour ce quiz est {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' in group \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' in this group';

// Deprecated since Moodle 4.4.
$string['regradeall'] = 'Tout reclasser';
$string['regradealldry'] = 'Exécuter à sec une revalorisation complète';
$string['regradealldrydo'] = 'Essais de reclassification marqués comme nécessitant une reclassification ({$a})';
$string['regradealldrydogroup'] = 'Essais de regradation ({$a->countregradeneed}) marqués comme nécessitant une regradation dans le groupe \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Exécuter à sec une regradation complète pour le groupe \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Reclassement complet pour le groupe \'{$a->groupname}\'';
$string['regradeselected'] = 'Reclasser les tentatives sélectionnées';
