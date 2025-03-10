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
 * Strings for component 'enrol_meta', language 'en'.
 *
 * @package    enrol_meta
 * @copyright  2010 onwards Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addgroup'] = 'Ajouter au groupe';
$string['coursesort'] = 'Ordre de la liste des cours';
$string['coursesort_help'] = 'Lorsque l\'on relie le cours source au cours cible, comment commander les cours source?';
$string['creategroup'] = 'Créer un nouveau groupe';
$string['defaultgroupnametext'] = 'Cours {$a->name}';
$string['enrolmetasynctask'] = 'Méta tâche de synchronisation des inscriptions';
$string['linkedcourse'] = 'Cours de liaison';
$string['meta:config'] = 'Configurer les instances d\'inscription méta';
$string['meta:selectaslinked'] = 'Sélectionnez le cours comme méta lié';
$string['meta:unenrol'] = 'Unenrol utilisateurs suspendus';
$string['nosyncroleids'] = 'Rôles non synchronisés';
$string['nosyncroleids_desc'] = 'Sélectionnez les rôles qui ne devraient pas être synchronisés entre le cours source et le cours cible.';
$string['pluginname'] = 'Lien méta du cours';
$string['pluginname_desc'] = 'Le méta-lien du cours synchronise les inscriptions et les rôles du cours source au cours cible.';
$string['syncall'] = 'Synchroniser tous les utilisateurs inscrits';
$string['samemetacourse'] = 'Vous pouvez\'t add a meta link to the same course.';
$string['syncall_desc'] = 'Si activé, tous les utilisateurs inscrits sont synchronisés depuis le cours source même s\'ils n\'y ont aucun rôle. Autrement, seuls les utilisateurs qui ont au moins un rôle sont inscrits au cours cible.';
$string['privacy:metadata:core_group'] = 'Le plugin d\'inscription meta link du cours peut créer un nouveau groupe ou utiliser un groupe existant pour ajouter des participants du cours source.';
$string['unknownmetacourse'] = 'Nom abrégé du cours méta inconnu';
$string['wscannotcreategroup'] = 'Aucune autorisation pour créer un groupe dans le cours lié id = {$a}.';
$string['wsinvalidcourse'] = 'ID du cours = {$a} does\'t exist or you don\'t have permission to add a course meta link.';
$string['wsinvalidmetacourse'] = 'Meta cours ID = {$a} does\'t exist or you don\'t have permission to add an enrolment instance.';
$string['wsnoinstancesspecified'] = 'Aucune instance spécifiée';
