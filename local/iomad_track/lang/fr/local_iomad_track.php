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
 * @package   local_iomad_signup
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Suivi de l \' achèvement des travaux de l \' IOMAD';
$string['privacy:metadata'] = 'Les\'Local IOMAD completion tracking\' plugin only shows data stored in other locations.';
$string['privacy:metadata:local_iomad_track:id'] = 'Identification locale de la piste IOMAD';
$string['privacy:metadata:local_iomad_track:courseid'] = 'ID du cours';
$string['privacy:metadata:local_iomad_track:coursename'] = 'Nom du cours.';
$string['privacy:metadata:local_iomad_track:userid'] = 'ID utilisateur';
$string['privacy:metadata:local_iomad_track:companyid'] = 'ID de la société utilisateur';
$string['privacy:metadata:local_iomad_track:timecompleted'] = 'Durée du cours';
$string['privacy:metadata:local_iomad_track:timeenrolled'] = 'Durée du cours';
$string['privacy:metadata:local_iomad_track:timestarted'] = 'Durée du cours';
$string['privacy:metadata:local_iomad_track:finalscore'] = 'Note finale du cours';
$string['privacy:metadata:local_iomad_track:licenseid'] = 'Numéro d\'identification';
$string['privacy:metadata:local_iomad_track:licensename'] = 'Nom de la licence';
$string['privacy:metadata:local_iomad_track:licenseallocated'] = 'Unix timestamp de la licence de temps a été attribué';
$string['privacy:metadata:local_iomad_track:modifiedtime'] = 'Enregistrer l\'heure modifiée';
$string['privacy:metadata:local_iomad_track'] = 'L\'IOMAD local suit les informations utilisateur';
$string['privacy:metadata:local_iomad_track_certs:id'] = 'Identification du certificat local IOMAD';
$string['privacy:metadata:local_iomad_track_certs:trackid'] = 'Identification de la piste du certificat';
$string['privacy:metadata:local_iomad_track_certs:filename'] = 'Nom du fichier du certificat';
$string['privacy:metadata:local_iomad_track_certs'] = 'Informations locales sur le certificat de piste iomad';
$string['fixtracklicensetask'] = 'IOMAD piste fixer les détails de suivi de licence tâche ad-hoc';
$string['iomad_track:importfrommoodle'] = 'Importer les informations d\'achèvement des tables Moodle';
$string['importcompletionsfrommoodle'] = 'Importer les informations d\'achèvement stockées à partir des tables Moodle';
$string['importcompletionsfrommoodlefull'] = 'Il s\'agira d\'importer toutes les informations relatives à l\'achèvement de Moodle dans les tableaux de l\'IOMAD.';
$string['importcompletionsfrommoodlefullwitherrors'] = 'Cela va exécuter une tâche ad hoc pour importer SOME de l\'information d\'achèvement de Moodle aux tableaux de rapport de l\'IOMAD. Tous les cours n\'ont pas été complétés ou les critères établis et leurs informations seront manquées. Si vous voulez savoir quels cours ils sont, utilisez le lien de vérification sur la page précédente.';
$string['importmoodlecompletioninformation'] = 'Tâche ad-hoc d\'importer les informations d\'achèvement à partir des tables Moodle';
$string['fixenrolleddatetask'] = 'Tâche ad-hoc de mettre à jour les informations d\'achèvement stockées pour utiliser l\'inscription \'timecreated\' timestamp where this is not already set.';
$string['fixcourseclearedtask'] = 'Tâche ad-hoc pour mettre à jour le \'coursecleared\' field in the stored completion records';
$string['fixtracklicensetask'] = 'tâche ad-hoc pour corriger les informations de licence enregistrées';
$string['importcompletionrecords'] = 'Importer les dossiers d\'achèvement';
$string['uploadcompletionresult'] = 'Télécharger le résultat du fichier d\'achèvement';
$string['completionimportfromfile'] = 'Importation complète à partir du fichier';
$string['importcompletionsfromfile'] = 'Importer les informations de fin de fichier';
$string['courseswithoutcompletionenabledcouunt'] = 'Nombre de cours non complétés = {$a}';
$string['courseswithoutcompletioncriteriacouunt'] ='Nombre de cours n \' ayant pas de critères d \' achèvement = {$a}';
$string['checkcoursestatusmoodle'] = 'Vérifiez les paramètres de cours pour l\'importation';
