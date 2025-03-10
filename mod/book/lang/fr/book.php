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
 * Book module language strings
 *
 * @package    mod_book
 * @copyright  2004-2012 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['modulename'] = 'Livre';
$string['modulename_help'] = 'The book module enables a teacher to create a multi-page resource in a book-like format, with chapters and subchapters. Books can contain media files as well as text and are useful for displaying lengthy passages of information which can be broken down into sections.

A book may be used

* To display reading material for individual modules of study
* As a staff departmental handbook
* As a showcase portfolio of student work';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Livres';
$string['pluginname'] = 'Livre';
$string['pluginadministration'] = 'Administration du livre';

$string['toc'] = 'Table des matières';
$string['chapterandsubchaptersdeleted'] = 'Le chapitre « {$a->title} » et ses sous-chapitres {$a->sous-chapitres} ont été supprimés.';
$string['chapterdeleted'] = 'Le chapitre « {$a->title} » a été supprimé.';
$string['customtitles'] = 'Titres personnalisés';
$string['customtitles_help'] = 'Normally the chapter title is displayed in the table of contents (TOC) AND as a heading above the content.

If the custom titles checkbox is ticked, the chapter title is NOT displayed as a heading above the content. A different title (perhaps longer than the chapter title) may be entered as part of the content.';
$string['chapters'] = 'Chapitres';
$string['chaptertitle'] = 'Titre du chapitre';
$string['content'] = 'Contenu';
$string['deletechapter'] = 'Supprimer le chapitre « {$a} »';
$string['editingchapter'] = 'Édition du chapitre';
$string['eventchaptercreated'] = 'Chapitre créé';
$string['eventchapterdeleted'] = 'Chapitre supprimé';
$string['eventchapterupdated'] = 'Chapitre mis à jour';
$string['eventchapterviewed'] = 'Chapitre considéré';
$string['editchapter'] = 'Modifier le chapitre « {$a} »';
$string['hidechapter'] = 'Masquer le chapitre « {$a} »';
$string['indicator:cognitivedepth'] = 'Livre cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une ressource de livre.';
$string['indicator:cognitivedepthdef'] = 'Livre cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités du Livre pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Vue)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Livre social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une ressource de livre.';
$string['indicator:socialbreadthdef'] = 'Livre social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités du Livre pendant cet intervalle d\'analyse (Nivaux = Pas de participation, Participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['movechapterup'] = 'Déplacer le chapitre « {$a} »';
$string['movechapterdown'] = 'Déplacer le chapitre vers le bas "{$a}"';
$string['privacy:metadata'] = 'Le module d\'activité du livre ne stocke aucune donnée personnelle.';
$string['search:activity'] = 'Livre - information sur les ressources';
$string['search:chapter'] = 'Chapitres du livre';
$string['showchapter'] = 'Afficher le chapitre « {$a} »';
$string['subchapter'] = 'Sous-chapitre';
$string['navoptions'] = 'Options disponibles pour les liens de navigation';
$string['navoptions_desc'] = 'Options pour afficher la navigation sur les pages de livre';
$string['navstyle'] = 'Mode de navigation';
$string['navstyle_help'] = '* Images - Icons are used for navigation
* Text - Chapter titles are used for navigation';
$string['nocontent'] = 'Aucun contenu n\'a encore été ajouté à ce livre.';
$string['numbering'] = 'Formatage des chapitres';
$string['numbering_help'] = '* None - Chapter and subchapter titles have no formatting
* Numbers - Chapters and subchapter titles are numbered 1, 1.1, 1.2, 2, ...
* Bullets - Subchapters are indented and displayed with bullets in the table of contents
* Indented - Subchapters are indented in the table of contents';
$string['numbering0'] = 'Aucune';
$string['numbering1'] = 'Nombres';
$string['numbering2'] = 'Bullets';
$string['numbering3'] = 'Dénomination';
$string['numberingoptions'] = 'Options disponibles pour le formatage des chapitres';
$string['numberingoptions_desc'] = 'Options pour afficher les chapitres et sous-chapitres dans la table des matières';
$string['addafter'] = 'Ajouter un nouveau chapitre';
$string['addafterchapter'] = 'Ajouter un nouveau chapitre après « {$a->title} »';
$string['previouschapter'] = 'Chapitre précédent';
$string['confchapterdelete'] = 'Voulez-vous vraiment supprimer ce chapitre?';
$string['confchapterdeleteall'] = 'Voulez-vous vraiment supprimer ce chapitre et tous ses sous-chapitres ?';
$string['top'] = 'top';
$string['navprev'] = 'Précédent';
$string['navprevtitle'] = 'Précédent : {$a}';
$string['navnext'] = 'Suivant';
$string['navnexttitle'] = 'Suivant : {$a}';
$string['navexit'] = 'Livre de sortie';
$string['book:addinstance'] = 'Ajouter un nouveau livre';
$string['book:read'] = 'Voir le livre';
$string['book:edit'] = 'Modifier les chapitres des livres';
$string['book:viewhiddenchapters'] = 'Afficher les chapitres cachés';
$string['errorchapter'] = 'Erreur dans la lecture du chapitre du livre.';

$string['page-mod-book-x'] = 'Toute page de module de livre';
$string['subchapternotice'] = '(Uniquement disponible une fois le premier chapitre créé)';
$string['subplugintype_booktool'] = 'Outil de livre';
$string['subplugintype_booktool_plural'] = 'Outils de livre';

$string['removeallbooktags'] = 'Toutes les étiquettes de livres';
$string['tagarea_book_chapters'] = 'Chapitres du livre';

// Deprecated since Moodle 4.4.
$string['navimages'] = 'Images';
$string['navtext'] = 'Texte';
$string['navtoc'] = 'TOC Seulement';

// Deprecated since Moodle 4.5.
$string['tagsdeleted'] = 'Les balises du livre ont été supprimées';
