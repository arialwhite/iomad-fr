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
 * Strings for component 'tool_langimport', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package    tool
 * @subpackage langimport
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['downloadnotavailable'] = 'Impossible de se connecter au serveur de téléchargement. Il n\'est pas possible d\'installer ou de mettre à jour automatiquement les paquets de langues. Veuillez télécharger les fichiers ZIP appropriés à partir de <a href="{$a->src}">{$a->src}</a> et les décompresser manuellement dans votre répertoire de données <code>{$a->dest}</code>';
$string['install'] = 'Installer les paquets de langues sélectionnés';
$string['installfailed'] = 'L\'installation des paquets linguistiques a échoué !';
$string['installfinished'] = 'Installation des packs linguistiques terminée.';
$string['installpending'] = 'Les paquets de langues suivants seront bientôt installés : {$a}.';
$string['installscheduled'] = 'Packs linguistiques prévus pour l\'installation.';
$string['installedlangs'] = 'Les paquets de langues installés';
$string['langimport'] = 'Utilitaire d\'importation de langue';
$string['langimportdisabled'] = 'La fonctionnalité d\'importation de langue a été désactivée. Vous devez mettre à jour vos paquets de langue manuellement au niveau du système de fichiers. N\'oubliez pas de purger les caches de cordes après cela.';
$string['langpackinstalled'] = 'Dossier linguistique \'{$a}\' was successfully installed';
$string['langpackinstalledevent'] = 'Dossier linguistique installé';
$string['langpackremoved'] = 'Dossier linguistique \'{$a}\' was uninstalled';
$string['langpacknotremoved'] = 'Une erreur s\'est produite; language pack \'{$a}\' is not completely uninstalled. Please check file permissions.';
$string['langpackremovedevent'] = 'Language pack désinstallé';
$string['langpackupdateskipped'] = 'Mise à jour de \'{$a}\' language pack skipped';
$string['langpackuptodate'] = 'Dossier linguistique \'{$a}\' is up-to-date';
$string['langpackupdated'] = 'Dossier linguistique \'{$a}\' was successfully updated';
$string['langpackupdatedevent'] = 'Dossier linguistique mis à jour';
$string['langunsupported'] = '<p>Votre serveur ne semble pas prendre pleinement en charge les langues suivantes:</p><ul>{$a->missinglocales}</ul><p> Au lieu de cela, la locale globale ({$a->globallocale}) sera utilisée pour formater certaines chaînes comme les dates ou les numéros.</p>';
$string['langupdatecomplete'] = 'Mise à jour du paquet linguistique terminée';
$string['missingcfglangotherroot'] = 'Valeur de configuration manquante $CFG->langotherroot';
$string['missinglangparent'] = 'Langue parent manquante <em>{$a->parent}</em> de <em>{$a->lang}</em>.';
$string['noenglishuninstalltitle'] = 'Impossible de désinstaller';
$string['noenglishuninstall'] = 'Le pack anglais ne peut pas être désinstallé.';
$string['nolangupdateneeded'] = 'Tous vos paquets de langues sont à jour, aucune mise à jour n\'est nécessaire';
$string['pluginname'] = 'Packs linguistiques';
$string['purgestringcaches'] = 'Purger les caches de chaînes';
$string['search'] = 'Rechercher les paquets de langues disponibles';
$string['selectlangs'] = 'Sélectionnez les langues à désinstaller';
$string['uninstall'] = 'Désinstaller le(s) paquet(s) de langues sélectionné(s)';
$string['uninstallconfirm'] = 'Vous êtes sur le point de désinstaller complètement ces paquets de langues : <strong>{$a}</strong>. Tu es sûr ?';
$string['updatelangs'] = 'Mettre à jour tous les paquets de langues installés';
$string['updatelangsnote'] = 'Mettre à jour tous les paquets de langues installés en cliquant sur le bouton peut prendre beaucoup de temps et conduire à des timeouts. Il est recommandé de faire usage de la tâche programmée \'{$a->taskname}\' (which runs by default every day).';
$string['privacy:metadata'] = 'Le plugin Language packs ne stocke aucune donnée personnelle.';
