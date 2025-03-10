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
 * Strings for component 'folder', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   mod_folder
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['bynameondate'] = 'par {$a->nom} - {$a->date}';
$string['contentheader'] = 'Contenu';
$string['dnduploadmakefolder'] = 'Décompresser les fichiers et créer un dossier';
$string['downloadfolder'] = 'Télécharger le dossier';
$string['eventallfilesdownloaded'] = 'Archive zip du dossier téléchargé';
$string['eventfolderupdated'] = 'Dossier mis à jour';
$string['folder:addinstance'] = 'Ajouter un nouveau dossier';
$string['folder:managefiles'] = 'Gérer les fichiers dans le module dossier';
$string['folder:view'] = 'Affichage du contenu du dossier';
$string['foldercontent'] = 'Fichiers et sous-dossiers';
$string['forcedownload'] = 'Forcer le téléchargement des fichiers';
$string['forcedownload_help'] = 'Indique si certains fichiers, comme les images ou les fichiers HTML, doivent être affichés dans le navigateur plutôt que téléchargés. Notez que pour des raisons de sécurité, le réglage ne doit être décroché que si tous les utilisateurs ayant la capacité de gérer des fichiers dans le dossier sont des utilisateurs de confiance.';
$string['indicator:cognitivedepth'] = 'Dossier cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une ressource de dossier.';
$string['indicator:cognitivedepthdef'] = 'Dossier cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les ressources du dossier pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Vue)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Dossier social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une ressource de dossier.';
$string['indicator:socialbreadthdef'] = 'Dossier social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les ressources du dossier pendant cet intervalle d\'analyse (Niveau = Pas de participation, Participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['modulename'] = 'Dossier';
$string['modulename_help'] = 'The folder module enables a teacher to display a number of related files inside a single folder, reducing scrolling on the course page. A zipped folder may be uploaded and unzipped for display, or an empty folder created and files uploaded into it.

A folder may be used

* For a series of files on one topic, for example a set of past examination papers in pdf format or a collection of image files for use in student projects
* To provide a shared uploading space for teachers on the course page (keeping the folder hidden so that only teachers can see it)';
$string['modulename_link'] = 'mod/dossier/vue';
$string['modulenameplural'] = 'Dossiers';
$string['newfoldercontent'] = 'Nouveau contenu du dossier';
$string['page-mod-folder-x'] = 'Toute page de module de dossier';
$string['page-mod-folder-view'] = 'Page principale du module Dossier';
$string['privacy:metadata'] = 'Le plugin ressource Dossier ne stocke aucune donnée personnelle.';
$string['pluginadministration'] = 'Administration du dossier';
$string['pluginname'] = 'Dossier';
$string['display'] = 'Afficher le contenu du dossier';
$string['display_help'] = 'Si vous choisissez d\'afficher le contenu du dossier sur une page de cours, il n\'y aura aucun lien vers une page séparée. La description ne sera affichée que si \'Display description on course page\' is ticked. Note that participants view actions cannot be logged in this case.';
$string['displaypage'] = 'Sur une page séparée';
$string['displayinline'] = 'En ligne sur une page de cours';
$string['noautocompletioninline'] = 'L\'achèvement automatique de la visualisation de l\'activité ne peut pas être sélectionné avec l\'option "Afficher en ligne"';
$string['search:activity'] = 'Dossier';
$string['showdownloadfolder'] = 'Afficher le bouton du dossier de téléchargement';
$string['showdownloadfolder_help'] = 'Si défini à \'yes\', a button will be displayed allowing the contents of the folder to be downloaded as a zip file.';
$string['showexpanded'] = 'Afficher les sous-dossiers élargis';
$string['showexpanded_help'] = 'Si défini à \'yes\', subfolders are shown expanded by default; otherwise they are shown collapsed.';
$string['maxsizetodownload'] = 'Taille maximale de téléchargement du dossier (MB)';
$string['maxsizetodownload_help'] = 'La taille maximale du dossier qui peut être téléchargé comme un fichier zip. Si la valeur est zéro, la taille du dossier est illimitée.';
