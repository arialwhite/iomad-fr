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
 * Language strings.
 *
 * @package    tool_lpmigrate
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Cours autorisés';
$string['allowedcourses_help'] = 'Sélectionnez les cours à migrer vers le nouveau cadre. Si aucun cours n\'est spécifié, tous les cours seront migrés.';
$string['continuetoframeworks'] = 'Continuer à appliquer les cadres';
$string['coursecompetencymigrations'] = 'Migrations des compétences';
$string['coursemodulecompetencymigrations'] = 'Migrations des activités de cours et des compétences en ressources';
$string['coursesfound'] = 'Cours trouvés';
$string['coursemodulesfound'] = 'Activités de cours ou ressources trouvées';
$string['coursestartdate'] = 'Date de début des cours';
$string['coursestartdate_help'] = 'Si activé, les cours avec une date de début avant la date spécifiée ne seront pas migrés.';
$string['disallowedcourses'] = 'Cours refusés';
$string['disallowedcourses_help'] = 'Sélectionnez les cours qui ne doivent PAS être migrés vers le nouveau cadre.';
$string['errorcannotmigratetosameframework'] = 'Impossible de migrer depuis et vers le même cadre.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Impossible d\'établir une correspondance entre les compétences dans ce cadre.';
$string['errors'] = 'Erreurs';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Erreur lors de la migration de la compétence du cours : {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Erreur lors de la migration de l\'activité ou de la compétence ressource : {$a}';
$string['excludethese'] = 'Exclure';
$string['explanation'] = 'This tool can be used to update a competency framework to a newer version. It searches for competencies in courses and activities using the older framework, and updates the links to point to the new framework.

It is not recommended to edit the old set of competencies directly, as this would change all of the competencies that have already been awarded in users\' learning plans.

Typically you would import the new version of a framework, hide the old framework, then use this tool to migrate new courses to the new framework.';
$string['findingcoursecompetencies'] = 'Trouver des compétences';
$string['findingmodulecompetencies'] = 'Trouver des compétences en matière d\'activités et de ressources';
$string['frameworks'] = 'Cadres';
$string['limittothese'] = 'Limiter à ces';
$string['lpmigrate:frameworksmigrate'] = 'Migrer les cadres';
$string['migrateframeworks'] = 'Migrer les cadres';
$string['migratefrom'] = 'Migrate de';
$string['migratefrom_help'] = 'Sélectionnez l\'ancien cadre actuellement utilisé.';
$string['migratemore'] = 'Migrer plus';
$string['migrateto'] = 'Migrer en';
$string['migrateto_help'] = 'Sélectionnez la version la plus récente du cadre. Il est seulement possible de sélectionner un cadre qui n\'est pas caché.';
$string['migratingcourses'] = 'Cours de migration';
$string['missingmappings'] = 'Cartes manquantes';
$string['performmigration'] = 'Effectuer la migration';
$string['pluginname'] = 'Outil de migration des compétences';
$string['results'] = 'Résultats';
$string['startdatefrom'] = 'Date de début';
$string['unmappedin'] = 'Sans objet dans {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'La compétence du cours ne peut être supprimée.';
$string['warningcouldnotremovemodulecompetency'] = 'L\'activité ou la compétence en ressources ne pouvait être supprimée.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'La compétence du cours de destination existe déjà.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'L\'activité de destination ou la compétence en ressources existent déjà.';
$string['warnings'] = 'Avertissements';
$string['privacy:metadata'] = 'Le plugin de migration des compétences ne stocke aucune donnée personnelle.';
