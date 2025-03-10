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
 * Strings for component 'ltiservice_gradebookservices', language 'en'
 *
 * @package    ltiservice_gradebookservices
 * @copyright  2017 Cengage Learning http://www.cengage.com
 * @author     Dirk Singels, Diego del Blanco, Claude Vervoort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['alwaysgs'] = 'Utilisez ce service pour la synchronisation des grades et la gestion des colonnes';
$string['grade_synchronization'] = 'IMS LTI Affectation et services de classe';
$string['grade_synchronization_help'] = 'Whether to use the IMS LTI Assignment and Grade Services to synchronise grades instead of the Basic Outcomes service.

* **Do not use this service** -  Basic Outcomes features and configuration will be used
* **Use this service for grade sync only** - The service will populate the grades in an already existing gradebook column, but it will not be able to create new columns
* **Use this service for grade sync and column management** -  The service will be able to create and update gradebook columns and manage the grades.';
$string['ltiservice_gradebookservices'] = 'IMS LTI Affectation et services de classe';
$string['modulename'] = 'Classes LTI';
$string['nevergs'] = 'N\'utilisez pas ce service';
$string['partialgs'] = 'Utilisez ce service pour la synchronisation des grades seulement';
$string['pluginname'] = 'LTI Affectation et grades';
$string['privacy:metadata:externalpurpose'] = 'Ces renseignements sont envoyés à un fournisseur externe de l\'ITL.';
$string['privacy:metadata:feedback'] = 'La rétroaction reçue par l\'utilisateur pour cette activité de l\'ITL.';
$string['privacy:metadata:grade'] = 'La note que l\'utilisateur a reçue à Moodle pour cette activité LTI.';
$string['privacy:metadata:maxgrade'] = 'La note maximale qui peut être atteinte pour cette activité LTI.';
$string['privacy:metadata:timemodified'] = 'La dernière mise à jour du grade';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur utilisant le consommateur LTI.';
$string['taskcleanup'] = 'Nettoyage des tables d\'affectation et des classes de l\'ITL';
