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
 * Strings for component 'tool_task', language 'en'
 *
 * @package    tool_task
 * @copyright  2014 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['adhoc'] = 'ad hoc';
$string['adhoctaskid'] = 'ID de la tâche ad hoc: {$a}';
$string['adhoctaskrun'] = 'Lancement d\'un exercice de travail ad hoc';
$string['adhoctasks'] = 'Tâches ponctuelles';
$string['adhoctasksdue'] = 'Tâches ponctuelles attendues';
$string['adhoctasksfailed'] = 'Les tâches ponctuelles ont échoué';
$string['adhoctasksfuture'] = 'Tâches ad hoc futures';
$string['adhoctasksrunning'] = 'Tâches ponctuelles';
$string['asap'] = '<titre abrégé="Dès que possible"> AU-DELÀ</abbr>';
$string['adhocempty'] = 'La file de tâches ad hoc est vide';
$string['adhocqueuesize'] = 'La file de tâches ad hoc a {$a} tâches';
$string['adhocqueueold'] = 'La tâche la plus ancienne non traitée est {$a->age}, qui est plus que {$a->max}';
$string['backtoadhoctasks'] = 'Retour aux tâches ad hoc';
$string['backtoscheduledtasks'] = 'Retour aux tâches programmées';
$string['blocking'] = 'Blocage';
$string['cannotfindthepathtothecli'] = 'Impossible de trouver le chemin vers l\'exécutable PHP CLI si l\'exécution des tâches avorté. Définir le \'Path to PHP CLI\' setting in Site administration / Server / System paths.';
$string['checkadhocqueue'] = 'Tâches ponctuelles';
$string['checkcronrunning'] = 'Cron courant';
$string['checkmaxfaildelay'] = 'Tâches max retard d\'échec';
$string['classname'] = 'Nom de la classe';
$string['checklongrunningtasks'] = 'Tâches à long terme';
$string['checklongrunningtaskcount'] = 'Tâches à long terme : {$a}';
$string['clearfaildelay_confirm'] = 'Voulez-vous vraiment effacer le retard de la tâche \'{$a}\'? After clearing the delay, the task will run according to its normal schedule.';
$string['component'] = 'Composante';
$string['corecomponent'] = 'Noyau';
$string['crondisabled'] = 'Cron est handicapé. Aucune nouvelle tâche ne sera entreprise. Le système ne fonctionnera pas correctement jusqu\'à ce qu\'il soit à nouveau activé.';
$string['cronok'] = 'Cron court fréquemment';
$string['default'] = 'Par défaut';
$string['defaultx'] = 'Par défaut : {$a}';
$string['disabled'] = 'Handicapé';
$string['disabled_help'] = 'Les tâches programmées désactivées ne sont pas exécutées depuis cron, mais elles peuvent encore être exécutées manuellement via l\'outil CLI.';
$string['edittaskschedule'] = 'Modifier le calendrier des tâches & #160;: {$a}';
$string['enablerunnow'] = 'Autoriser \'Run now\' for scheduled tasks';
$string['enablerunnow_desc'] = 'Permet aux administrateurs d\'exécuter une seule tâche programmée immédiatement, plutôt que d\'attendre qu\'elle se déroule comme prévu. La fonctionnalité nécessite \'Path to PHP CLI\' (pathtophp) to be set in System paths. The task runs on the web server, so you may wish to disable this feature to avoid potential performance issues.';
$string['faildelay'] = 'Délai d\'échec';
$string['failed'] = 'Échec';
$string['fromcomponent'] = 'Du composant : {$a}';
$string['hostname'] = 'Nom de l\'hôte';
$string['lastcronstart'] = 'Temps depuis la dernière course de cron : {$a}';
$string['lastruntime'] = 'Dernier tirage';
$string['lastupdated'] = 'Dernière mise à jour {$a}.';
$string['nextruntime'] = 'Prochain tirage';
$string['noclassname'] = 'Nom de classe non spécifié';
$string['notasks'] = 'Aucune tâche à exécuter';
$string['payload'] = 'Charge utile';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin désactivé';
$string['pluginname'] = 'Configuration des tâches programmée';
$string['resettasktodefaults'] = 'Réinitialiser l\'agenda des tâches aux valeurs par défaut';
$string['resettasktodefaults_help'] = 'Cela supprimera toute modification locale et retournera le calendrier de cette tâche à ses paramètres d\'origine.';
$string['run_adhoctasks'] = 'Exécuter des tâches ponctuelles';
$string['runningalltasks'] = 'Exécution de toutes les tâches';
$string['runningfailedtasks'] = 'Exécution des tâches échouées';
$string['runningtasks'] = 'Tâches en cours';
$string['runnow'] = 'Courez maintenant';
$string['runagain'] = 'Courez encore';
$string['runadhoc_confirm'] = 'Les tâches s\'exécuteront sur le serveur Web et peuvent prendre un certain temps à accomplir.';
$string['runadhoc'] = 'Exécuter des tâches ponctuelles maintenant ?';
$string['runadhoctask'] = 'Exécuter \'{$a->task}\' task ID {$a->taskid}';
$string['runadhoctasks'] = 'Exécuter tous \'{$a}\' tasks';
$string['runadhoctasksfailed'] = 'L\'exécution a échoué \'{$a}\' tasks';
$string['runnow_confirm'] = 'Voulez-vous vraiment exécuter cette tâche \'{$a}\' now? The task will run on the web server and may take some time to complete.';
$string['runclassname'] = 'Exécutez tout';
$string['runclassnamefailedonly'] = 'Exécuter tous les échecs';
$string['runpattern'] = 'Lancer le modèle';
$string['scheduled'] = 'Prévu';
$string['scheduledtasks'] = 'Tâches prévues';
$string['scheduledtaskchangesdisabled'] = 'Les modifications de la liste des tâches programmées ont été évitées en configuration Moodle';
$string['slowtask'] = 'La tâche a duré plus longtemps que {$a}';
$string['showall'] = 'Afficher tout';
$string['showfailedonly'] = 'Afficher seulement échoué';
$string['showsummary'] = 'Afficher le résumé des tâches ad hoc';
$string['started'] = 'Commencé';
$string['taskage'] = 'Durée';
$string['taskdetails'] = 'Tâches fonctionnant pour plus de {$a->time} (max {$a->maxtime}): {$a->compte}';
$string['taskdisabled'] = 'Fonction désactivée';
$string['taskfailures'] = '{$a} tâche(s) défaillante';
$string['taskid'] = 'ID de la tâche';
$string['tasklogs'] = 'Registres des tâches';
$string['tasknofailures'] = 'Aucune tâche n\'a échoué';
$string['taskrunningtime'] = 'Tâche a exécuté pour {$a}';
$string['taskscheduleday'] = 'Day';
$string['taskscheduleday_help'] = 'Day of month field for task schedule. The field uses the same format as unix cron. Some examples are:

* <strong>*</strong> Every day
* <strong>*/2</strong> Every 2nd day
* <strong>1</strong> The first of every month
* <strong>1,15</strong> The first and fifteenth of every month';
$string['taskscheduledayofweek'] = 'Jour de la semaine';
$string['taskscheduledayofweek_help'] = 'Day of week field for task schedule. The field uses the same format as unix cron. Some examples are:

* <strong>*</strong> Every day
* <strong>0</strong> Every Sunday
* <strong>6</strong> Every Saturday
* <strong>1,5</strong> Every Monday and Friday';
$string['taskschedulehour'] = 'Heure';
$string['taskschedulehour_help'] = 'Hour field for task schedule. The field uses the same format as unix cron. Some examples are:

* <strong>*</strong> Every hour
* <strong>*/2</strong> Every 2 hours
* <strong>2-10</strong> Every hour from 2am until 10am (inclusive)
* <strong>2,6,9</strong> 2am, 6am and 9am';
$string['taskscheduleminute'] = 'Minute';
$string['taskscheduleminute_help'] = 'Minute field for task schedule. The field uses the same format as unix cron. Some examples are:

* <strong>*</strong> Every minute
* <strong>*/5</strong> Every 5 minutes
* <strong>2-10</strong> Every minute between 2 and 10 past the hour (inclusive)
* <strong>2,6,9</strong> 2, 6 and 9 minutes past the hour';
$string['taskschedulemonth'] = 'Mois';
$string['taskschedulemonth_help'] = 'Month field for task schedule. The field uses the same format as unix cron. Some examples are:

* <strong>*</strong> Every month
* <strong>*/2</strong> Every second month
* <strong>1</strong> Every January
* <strong>1,5</strong> Every January and May';
$string['privacy:metadata'] = 'Le plugin de configuration des tâches programmées ne stocke aucune donnée personnelle.';
$string['viewlogs'] = 'Afficher les journaux pour {$a}';
