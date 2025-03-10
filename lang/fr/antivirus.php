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
 * Strings for component 'antivirus', language 'en'
 *
 * @package   core_antivirus
 * @copyright 2015 Ruslan Kabalin, Lancaster University.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actantivirushdr'] = 'Greffons antivirus disponibles';
$string['antiviruses'] = 'Greffons antivirus';
$string['antiviruscommonsettings'] = 'Paramètres antivirus courants';
$string['antivirussettings'] = 'Gérer les plugins antivirus';
$string['configantivirusplugins'] = 'Veuillez choisir les plugins antivirus que vous souhaitez utiliser et les organiser pour être appliqué.';
$string['datastream'] = 'Données';
$string['dataerrordesc'] = 'Une erreur de scanner de données s\'est produite.';
$string['dataerrorname'] = 'Erreur du scanner de données';
$string['datainfecteddesc'] = 'Des données infectées ont été détectées.';
$string['datainfectedname'] = 'Données infectées';
$string['emailadditionalinfo'] = 'Des détails supplémentaires sont retournés du moteur du virus:';
$string['emailauthor'] = 'Téléchargé par :';
$string['emailcontenthash'] = 'Hash du contenu:';
$string['emailcontenttype'] = 'Type de contenu & #160;:';
$string['emaildate'] = 'Date de téléchargement :';
$string['emailfilename'] = 'Nom du fichier & #160;:';
$string['emailfilesize'] = 'Taille du fichier & #160;:';
$string['emailgeoinfo'] = 'Géolocalisation :';
$string['emailinfectedfiledetected'] = 'Fichier infecté détecté';
$string['emailipaddress'] = 'Adresse IP:';
$string['emailreferer'] = 'Référentiel :';
$string['emailreport'] = 'Rapport:';
$string['emailscanner'] = 'Scanner :';
$string['emailscannererrordetected'] = 'Une erreur de scanner s\'est produite';
$string['emailsubject'] = '[$a] : Notification antivirus';
$string['enablequarantine_help'] = 'Si activé, les fichiers détectés comme virus seront placés dans un dossier de quarantaine ([dataroot]/{$a}) pour une inspection ultérieure. Le téléchargement dans Moodle échouera. Si vous avez un système de fichiers de détection de virus de niveau en place, le dossier de quarantaine devrait être exclu de la vérification antivirus pour éviter de détecter les fichiers mis en quarantaine.';
$string['enablequarantine'] = 'Activer la quarantaine';
$string['fileerrordesc'] = 'Une erreur de scanner de fichiers s\'est produite.';
$string['fileerrorname'] = 'Erreur du scanner de fichiers';
$string['fileinfecteddesc'] = 'Un fichier infecté a été détecté.';
$string['fileinfectedname'] = 'Fichier infecté';
$string['notifyemail_help'] = 'L\'adresse électronique pour les notifications de la détection d\'un virus. Si elle est laissée en blanc, tous les administrateurs du site recevront des notifications.';
$string['notifyemail'] = 'Message de notification d\'alerte antivirus';
$string['notifylevel_help'] = 'Les différents niveaux d\'information que vous souhaitez être informé de';
$string['notifylevel'] = 'Niveau de notification';
$string['notifylevelfound'] = 'Menaces détectées uniquement';
$string['notifylevelerror'] = 'Menaces détectées et erreurs du scanner';
$string['privacy:metadata'] = 'Le système Antivirus ne stocke aucune donnée personnelle.';
$string['quarantinedfiles'] = 'Fichiers d\'antivirus mis en quarantaine';
$string['quarantinedisabled'] = 'La quarantaine est désactivée. Le fichier n\'est pas stocké.';
$string['quarantinetime_desc'] = 'Les fichiers mis en quarantaine plus anciens que la période spécifiée seront supprimés.';
$string['quarantinetime'] = 'Durée maximale de quarantaine';
$string['threshold_desc'] = 'Jusqu\'où remonte la vérification par rapport aux résultats précédents pour les erreurs etc. comme indiqué dans {$a}.';
$string['threshold'] = 'Seuil de vérification de l\'état';
$string['taskcleanup'] = 'Nettoyer les dossiers mis en quarantaine.';
$string['unknown'] = 'Inconnu';
$string['virusfound'] = '{$a->item} a été scanné par un vérificateur de virus et trouvé pour être infecté!';

