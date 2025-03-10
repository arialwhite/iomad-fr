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
 * @package    mnetservice
 * @subpackage enrolment
 * @copyright  2010 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Cours disponibles sur {$a}';
$string['availablecoursesonnone'] = 'host distant <a href="{$a->hosturl}">{$a->hostname}</a> ne propose aucun cours pour nos utilisateurs.';
$string['clientname'] = 'Client inscrit à distance';
$string['clientname_help'] = 'Cet outil vous permet d\'inscrire et de désinscrire vos utilisateurs locaux sur des hôtes distants qui vous permettent de le faire via le \'MNet remote enrolments\' plugin.';
$string['editenrolments'] = 'Modifier les inscriptions';
$string['hostappname'] = 'Demande';
$string['hostname'] = 'Nom de l\'hôte';
$string['hosturl'] = 'URL de l\'hôte distant';
$string['nopublishers'] = 'Pas de pairs à distance disponibles.';
$string['noroamingusers'] = 'Les utilisateurs ont besoin de la capacité \'{$a}\' in the system context to be enrolled to remote courses, however there are currently no users with this capability. Click the continue button to assign the required capability to one or more roles on your site.';
$string['otherenrolledusers'] = 'Autres utilisateurs inscrits';
$string['pluginname'] = 'Service d \' inscription à distance';
$string['refetch'] = 'Retransmettre l\'état à jour des hôtes distants';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Service d \' inscription à distance';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Le moment où l\'inscription a été modifiée';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Le type d\'inscription sur le serveur distant utilisé pour inscrire l\'utilisateur à son cours';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'L\'ID de l\'hôte MNet distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'L\'ID du cours sur le serveur distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'Le nom du rôle sur le serveur distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Le service d\'inscription à distance stocke de l\'information sur l\'inscription des utilisateurs locaux à des cours sur les hôtes éloignés.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'L\'ID de l\'utilisateur local sur ce serveur';
