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
 * Language file.
 *
 * @package    core_files
 * @copyright  2018 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Hash du contenu';
$string['eventfileaddedtodraftarea'] = 'Fichier ajouté à la zone d\'ébauche';
$string['eventfiledeletedfromdraftarea'] = 'Fichier supprimé de la zone de projet';
$string['redactor'] = 'Redaction du fichier';
$string['redactor:exifremover'] = 'Supprimeur EXIF';
$string['redactor:exifremover:emptyremovetags'] = 'Supprimer les étiquettes ne peut pas être vide!';
$string['redactor:exifremover:enabled'] = 'Activer le séparateur EXIF';
$string['redactor:exifremover:enabled_desc'] = 'By default, EXIF Remover only supports JPG files using PHP GD, or ExifTool if it is configured.
This degrades the quality of the image and removes the orientation tag.

To enhance the performance of EXIF Remover, please configure the ExifTool settings below.

More information about installing ExifTool can be found at {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Réaction échouée : a échoué à traiter le fichier avec ExifTool !';
$string['redactor:exifremover:failedprocessgd'] = 'Réaction échouée : a échoué à traiter le fichier avec PHP gd !';
$string['redactor:exifremover:heading'] = 'Outil Exif';
$string['redactor:exifremover:mimetype'] = 'Types MIME pris en charge';
$string['redactor:exifremover:mimetype_desc'] = 'Pour ajouter de nouveaux types MIME, assurez-vous qu\'ils\'re included in the <a href="./outil/filetypes/index.php">File Types</a>.';
$string['redactor:exifremover:removetags'] = 'Les étiquettes EXIF qui seront supprimées.';
$string['redactor:exifremover:removetags_desc'] = 'Les étiquettes EXIF qui doivent être supprimées.';
$string['redactor:exifremover:tag:all'] = 'All';
$string['redactor:exifremover:tag:gps'] = 'GPS seulement';
$string['redactor:exifremover:tooldoesnotexist'] = 'Réaction échouée : ExifTool n\'existe pas !';
$string['redactor:exifremover:toolpath'] = 'Chemin vers ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'To use the ExifTool, please provide the path to the ExifTool executable.
Typically, on Unix/Linux systems, the path is /usr/bin/exiftool.';
$string['privacy:metadata:file_conversions'] = 'Un enregistrement des conversions de fichiers effectuées par un utilisateur.';
$string['privacy:metadata:file_conversion:usermodified'] = 'L\'utilisateur qui a commencé la conversion du fichier.';
$string['privacy:metadata:files'] = 'Un enregistrement des fichiers téléchargés ou partagés par les utilisateurs';
$string['privacy:metadata:files:author'] = 'L\'auteur du fichier\'s content';
$string['privacy:metadata:files:contenthash'] = 'Un hash du fichier\'s content';
$string['privacy:metadata:files:filename'] = 'Le nom du fichier dans sa zone de fichier';
$string['privacy:metadata:files:filepath'] = 'Le chemin vers le fichier dans sa zone de fichier';
$string['privacy:metadata:files:filesize'] = 'La taille du fichier';
$string['privacy:metadata:files:license'] = 'La licence du fichier\'s content';
$string['privacy:metadata:files:mimetype'] = 'Le type MIME du fichier';
$string['privacy:metadata:files:source'] = 'La source du fichier';
$string['privacy:metadata:files:timecreated'] = 'Le moment où le fichier a été créé';
$string['privacy:metadata:files:timemodified'] = 'Le moment où le fichier a été modifié pour la dernière fois';
$string['privacy:metadata:files:userid'] = 'L\'utilisateur qui a créé le fichier';
$string['privacy:metadata:core_userkey'] = 'Un jeton privé est généré et stocké. Ce jeton peut être utilisé pour accéder aux fichiers Moodle sans vous obliger à vous connecter.';
