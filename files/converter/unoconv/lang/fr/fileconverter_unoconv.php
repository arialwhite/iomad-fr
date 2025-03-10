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
 * Strings for plugin 'fileconverter_unoconv'
 *
 * @package   fileconverter_unoconv
 * @copyright 2017 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Chemin vers le convertisseur de document unoconv';
$string['pathtounoconv_help'] = 'Chemin vers le convertisseur de document unoconv. Il s\'agit d\'un exécutable capable de convertir entre formats de documents pris en charge par LibreOffice. Ceci est facultatif, mais si spécifié, Moodle l\'utilisera pour convertir automatiquement entre les formats de documents. Ceci est utilisé pour prendre en charge une plus large gamme de fichiers d\'entrée pour l\'attribution annoter la fonctionnalité PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Le plugin Convertisseur de document Unoconv ne stocke aucune donnée personnelle.';
$string['test_unoconv'] = 'Tester le chemin unoconv';
$string['test_unoconvdoesnotexist'] = 'Le chemin unoconv ne pointe pas vers le programme unoconv. Veuillez consulter les paramètres de votre chemin.';
$string['test_unoconvdownload'] = 'Télécharger le fichier de test pdf converti.';
$string['test_unoconvempty'] = 'Le chemin unoconv n\'est pas défini. Veuillez consulter les paramètres de votre chemin.';
$string['test_unoconvisdir'] = 'Le chemin unoconv pointe vers un dossier, veuillez inclure le programme unoconv dans le chemin que vous spécifiez';
$string['test_unoconvnotestfile'] = 'Le document d\'essai à convertir en PDF est manquant.';
$string['test_unoconvnotexecutable'] = 'Le chemin unoconv pointe vers un fichier qui n\'est pas exécutable';
$string['test_unoconvok'] = 'Le chemin unoconv semble être correctement configuré.';
$string['test_unoconvversionnotsupported'] = 'La version de unoconv que vous avez installée n\'est pas prise en charge.';
