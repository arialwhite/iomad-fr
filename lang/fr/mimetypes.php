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
 * Strings for component 'mimetypes', language 'en', branch 'MOODLE_20_STABLE'
 *
 * Strings are used to display human-readable name of mimetype. Some mimetypes share the same
 * string. The following attributes are passed in the parameter when processing the string:
 *   $a->ext - filename extension in lower case
 *   $a->EXT - filename extension, capitalized
 *   $a->Ext - filename extension with first capital letter
 *   $a->mimetype - file mimetype
 *   $a->mimetype1 - first chunk of mimetype (before /)
 *   $a->mimetype2 - second chunk of mimetype (after /)
 *   $a->Mimetype, $a->MIMETYPE, $a->Mimetype1, $a->Mimetype2, $a->MIMETYPE1, $a->MIMETYPE2
 *      - the same with capitalized first/all letters
 *
 * @see       get_mimetypes_array()
 * @see       get_mimetype_description()
 * @package   core
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['application/dash_xml'] = 'Streaming dynamique adaptatif sur HTTP (MPEG-DASH)';
$string['application/epub_zip'] = 'Livre électronique EPUB';
$string['application/json'] = 'Texte de {$a->MIMETYPE2}';
$string['application/msword'] = 'Document Word';
$string['application/pdf'] = 'Document PDF';
$string['application/vnd.moodle.backup'] = 'Sauvegarde de Moodle';
$string['application/vnd.ms-excel'] = 'Feuille de calcul Excel';
$string['application/vnd.ms-excel.sheet.macroEnabled.12'] = 'Manuel de travail Excel 2007';
$string['application/vnd.ms-powerpoint'] = 'Présentation du pouvoir';
$string['application/vnd.oasis.opendocument.spreadsheet'] = 'Ouvrir le document Feuille de calcul';
$string['application/vnd.oasis.opendocument.spreadsheet-template'] = 'Ouvrir le document Modèle de feuille de calcul';
$string['application/vnd.oasis.opendocument.text'] = 'Ouvrir le document Document textuel';
$string['application/vnd.oasis.opendocument.text-template'] = 'Ouvrir le document Modèle de texte';
$string['application/vnd.oasis.opendocument.text-web'] = 'Ouvrir le document Modèle de page Web';
$string['application/vnd.openxmlformats-officedocument.presentationml.presentation'] = 'Présentation Powerpoint 2007';
$string['application/vnd.openxmlformats-officedocument.presentationml.slideshow'] = 'Diaporama Powerpoint 2007';
$string['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'] = 'Feuille de calcul Excel 2007';
$string['application/vnd.openxmlformats-officedocument.spreadsheetml.template'] = 'Modèle Excel 2007';
$string['application/vnd.openxmlformats-officedocument.wordprocessingml.document'] = 'Document Word 2007';
$string['application/x-iwork-keynote-sffkey'] = 'Présentation de la note d \' orientation iWork';
$string['application/x-iwork-numbers-sffnumbers'] = 'Feuille de calcul iWork Numbers';
$string['application/x-iwork-pages-sffpages'] = 'Document des pages de travail i';
$string['application/x-javascript'] = 'Source JavaScript';
$string['application/x-mpegURL'] = 'Diffusion en direct HTTP (HLS)';
$string['application/x-mspublisher'] = 'Document d\'édition';
$string['application/x-shockwave-flash'] = 'Animation Flash';
$string['application/xhtml_xml'] = 'Document XHTML';
$string['archive'] = 'Archive ({$a->EXT})';
$string['audio'] = 'Fichier audio ({$a->EXT})';
$string['default'] = '{$a->mimetype}';
$string['document/unknown'] = 'Fichier';
$string['group:archive'] = 'Archiver les fichiers';
$string['group:audio'] = 'Fichiers audio';
$string['group:document'] = 'Fichiers de documents';
$string['group:html_audio'] = 'Fichiers audio nativement pris en charge par les navigateurs';
$string['group:html_track'] = 'Fichiers de pistes HTML';
$string['group:html_video'] = 'Fichiers vidéo nativement pris en charge par les navigateurs';
$string['group:image'] = 'Fichiers image';
$string['group:media_source'] = 'Diffusion des médias';
$string['group:optimised_image'] = 'Fichiers d\'image à optimiser, tels que les badges';
$string['group:presentation'] = 'Fichiers de présentation';
$string['group:sourcecode'] = 'Code source';
$string['group:spreadsheet'] = 'Fichiers de feuille de calcul';
$string['group:video'] = 'Fichiers vidéo';
$string['group:web_audio'] = 'Fichiers audio utilisés sur le web';
$string['group:web_file'] = 'Fichiers Web';
$string['group:web_image'] = 'Fichiers d\'images utilisés sur le web';
$string['group:web_video'] = 'Fichiers vidéo utilisés sur le web';
$string['image'] = 'Image ({$a->MIMETYPE2})';
$string['image/vnd.microsoft.icon'] = 'Icône Windows';
$string['text/css'] = 'Feuille de style en cascade';
$string['text/csv'] = 'Valeurs séparées par des virgules';
$string['text/html'] = 'Document HTML';
$string['text/plain'] = 'Fichier texte';
$string['text/rtf'] = 'Document RTF';
$string['text/vtt'] = 'Piste de texte vidéo Web';
$string['video'] = 'Fichier vidéo ({$a->EXT})';
