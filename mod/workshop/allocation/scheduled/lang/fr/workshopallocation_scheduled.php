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
 * Strings for the Workshop's scheduled allocator
 *
 * @package     workshopallocation_scheduled
 * @subpackage  mod_workshop
 * @copyright   2012 David Mudrak <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Traitement des données de base pour la répartition prévue';
$string['currentstatus'] = 'Situation actuelle';
$string['currentstatusexecution'] = 'État';
$string['currentstatusexecution1'] = 'Exécuté sur {$a->datetime}';
$string['currentstatusexecution2'] = 'Pour être exécuté à nouveau sur {$a->datetime}';
$string['currentstatusexecution3'] = 'À exécuter le {$a->datetime}';
$string['currentstatusexecution4'] = 'En attente d \' exécution';
$string['currentstatusreset'] = 'Réinitialiser';
$string['currentstatusresetinfo'] = 'Cochez la case et enregistrez le formulaire pour réinitialiser le résultat d\'exécution';
$string['currentstatusreset_help'] = 'Enregistrer le formulaire à l\'aide de cette case cochée permettra de réinitialiser l\'état actuel. Toutes les informations sur l\'exécution précédente seront supprimées afin que l\'allocation puisse être exécutée à nouveau (si activé ci-dessus).';
$string['currentstatusresult'] = 'Résultat de l\'exécution récente';
$string['currentstatusnext'] = 'Prochaine exécution';
$string['currentstatusnext_help'] = 'Dans certains cas, l\'allocation est programmée pour être exécutée de nouveau automatiquement même si elle a déjà été exécutée. Cela peut se produire si la date limite de soumission a été prolongée, par exemple.';
$string['enablescheduled'] = 'Activer l\'allocation programmée';
$string['enablescheduledinfo'] = 'Attribuer automatiquement les soumissions à la fin de la phase de soumission';
$string['scheduledallocationsettings'] = 'Paramètres de répartition programmés';
$string['scheduledallocationsettings_help'] = 'Si elle est activée, la méthode d\'attribution prévue attribuera automatiquement les soumissions pour l\'évaluation à la fin de la phase de soumission. La fin de la phase peut être définie dans le cadre de l\'atelier \'Submissions deadline\'.

Internally, the random allocation method is executed with the parameters pre-defined in this form. It means that the scheduled allocation works as if the teacher executed the random allocation themselves at the end of the submission phase using the allocation settings below.

Note that the scheduled allocation is *not* executed if you manually switch the workshop into the assessment phase before the submissions deadline. You have to allocate submissions yourself in that case. The scheduled allocation method is particularly useful when used together with the automatic phase switching feature.';
$string['pluginname'] = 'Répartition prévue';
$string['privacy:metadata'] = 'Le plugin d\'allocation programmée ne stocke aucune donnée personnelle. Les données personnelles réelles sur les personnes qui vont évaluer qui sont stockées par le module Atelier lui-même et qui constituent la base pour exporter les détails des évaluations.';
$string['randomallocationsettings'] = 'Paramètres d\'attribution';
$string['randomallocationsettings_help'] = 'Les paramètres de la méthode d\'attribution aléatoire sont définis ici. Ils seront utilisés par le plugin d\'allocation aléatoire pour l\'attribution réelle des soumissions.';
$string['resultdisabled'] = 'Attribution prévue désactivée';
$string['resultenabled'] = 'Attribution prévue activée';
$string['resultexecuted'] = 'Succès';
$string['resultfailed'] = 'Impossible d\'attribuer automatiquement les soumissions';
$string['resultfailedconfig'] = 'Mauvaise configuration de l\'allocation prévue';
$string['resultfaileddeadline'] = 'L\'atelier n\'a pas défini la date limite de soumission des demandes';
$string['resultfailedphase'] = 'Atelier non en phase de soumission';
$string['resultvoid'] = 'Aucune communication n \' a été attribuée';
$string['resultvoiddeadline'] = 'Pas encore après la date limite de soumission';
$string['resultvoidexecuted'] = 'L\'allocation a déjà été exécutée';
$string['setup'] = 'Mettre en place l\'allocation prévue';
