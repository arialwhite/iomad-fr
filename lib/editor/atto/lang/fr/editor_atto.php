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
 * Strings for component 'editor_atto', language 'en'.
 *
 * @package    editor_atto
 * @copyright  2013 Damyon Wiese  <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['autosavefailed'] = 'Impossible de se connecter au serveur. Si vous soumettez cette page maintenant, vos modifications peuvent être perdues.';
$string['autosavefrequency'] = 'Fréquence d\'enregistrement automatique';
$string['autosavefrequency_desc'] = 'C\'est le nombre de secondes entre les tentatives d\'enregistrement automatique. Atto enregistrera automatiquement le texte dans l\'éditeur en fonction de ce paramètre, de sorte que le texte puisse être automatiquement restauré lorsque le même utilisateur retourne au même formulaire.';
$string['autosavesucceeded'] = 'Projet sauvé.';
$string['errorcannotparseline'] = 'La ligne \'{$a}\' is not in the correct format.';
$string['errorgroupisusedtwice'] = 'Le groupe \'{$a}\' is defined twice; group names must be unique.';
$string['errornopluginsorgroupsfound'] = 'Aucun plugin ou groupe trouvé; veuillez ajouter quelques groupes et plugins.';
$string['errorpluginnotfound'] = 'Le plugin \'{$a}\' cannot be used; it does not appear to be installed.';
$string['errorpluginisusedtwice'] = 'Le plugin \'{$a}\' is used twice; plugins can only be defined once.';
$string['errortextrecovery'] = 'Malheureusement, la version préliminaire n\'a pas pu être rétablie.';
$string['pluginname'] = 'Atto éditeur HTML';
$string['richtexteditor'] = 'Éditeur de texte riche';
$string['subplugintype_atto'] = 'Greffon Atto';
$string['subplugintype_atto_plural'] = 'Greffons Atto';
$string['settings'] = 'Paramètres de la barre d\'outils Atto';
$string['taskautosavecleanup'] = 'Supprimer les ébauches d\'enregistrement automatique expirées';
$string['textrecovered'] = 'Une version préliminaire de ce texte a été automatiquement restaurée.';
$string['toolbarconfig'] = 'Configuration de la barre d\' outils';
$string['toolbarconfig_desc'] = 'La liste des plugins et leur ordre peuvent être configurés ici. La configuration se compose de groupes (un par ligne) suivis de la liste ordonnée de plugins pour ce groupe. Le groupe est séparé des plugins avec un signe égal et les plugins sont séparés par des virgules. Les noms de groupe doivent être uniques et indiquer ce que les boutons ont en commun. Les noms de boutons et de groupes ne doivent pas être répétés et ne peuvent contenir que des caractères alphanumériques.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['plugin_title_shortcut'] = '{$a->titre} [{$a-> Raccourci}]';
$string['recover'] = 'Récupérer';
$string['infostatus'] = 'Informations';
$string['warningstatus'] = 'Avertissement';
$string['autosaves'] = 'L\'éditeur enregistre automatiquement les informations';
$string['privacy:metadata:database:atto_autosave'] = 'Projets d\'éditeur de texte enregistrés automatiquement.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'L\'ID de l\'utilisateur dont les données ont été enregistrées.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Le texte qui a été enregistré.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Le moment où ce contenu a été modifié.';
