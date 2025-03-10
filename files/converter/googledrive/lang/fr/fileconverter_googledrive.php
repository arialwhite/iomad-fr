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
 * Strings for plugin 'fileconverter_googledrive'
 *
 * @package   fileconverter_googledrive
 * @copyright 2017 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Google Drive';
$string['disabled'] = 'Handicapé';
$string['issuer'] = 'Service OAuth 2';
$string['issuer_help'] = 'Le service OAuth 2 utilisé pour accéder à Google Drive.';
$string['privacy:metadata:fileconverter_googledrive:externalpurpose'] = 'Ces informations sont envoyées à l\'API Google Drive pour que le fichier soit converti en format alternatif. Le fichier est temporairement conservé sur Google Drive et est supprimé après la conversion est faite.';
$string['privacy:metadata:fileconverter_googledrive:filecontent'] = 'Le contenu du fichier.';
$string['privacy:metadata:fileconverter_googledrive:filemimetype'] = 'Le type MIME du fichier.';
$string['privacy:metadata:fileconverter_googledrive:params'] = 'Les paramètres de requête sont passés à l\'API Google Drive.';
$string['test_converter'] = 'Tester ce convertisseur fonctionne correctement.';
$string['test_conversion'] = 'Conversion du document d \' essai';
$string['test_conversionready'] = 'Ce convertisseur de document est configuré correctement.';
$string['test_conversionnotready'] = 'Ce convertisseur de document n\'est pas configuré correctement.';
$string['test_issuerinvalid'] = 'Le service OAuth dans les paramètres du convertisseur de documents est défini à une valeur non valide.';
$string['test_issuernotenabled'] = 'Le service OAuth défini dans les paramètres du convertisseur de documents n\'est pas activé.';
$string['test_issuernotconnected'] = 'Le service OAuth défini dans les paramètres du convertisseur de documents n\'a pas de compte système connecté.';
$string['test_issuernotset'] = 'Le service OAuth doit être défini dans les paramètres du convertisseur de documents.';
