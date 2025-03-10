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
 * Admin tool presets plugin to load some settings.
 *
 * @package          tool_admin_presets
 * @copyright        2021 Pimenko <support@pimenko.com><pimenko.com>
 * @author           Jordan Kesraoui | Sylvain Revenu | Pimenko based on David Monllaó <david.monllao@urv.cat> code
 * @license          http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actionexport'] = 'Créer un préréglage';
$string['actionexportbutton'] = 'Créer un préréglage';
$string['actionimport'] = 'Importer le préréglage';
$string['actualvalue'] = 'Valeur réelle';
$string['applyaction'] = 'Vérifier les paramètres et appliquer';
$string['applypresetdescription'] = 'Si vous changez d\'avis après l\'application de ce préréglage, vous pouvez annuler les modifications de réglage via \'Show version history\' in the preset actions menu.';
$string['author'] = 'Auteur';
$string['basedescription'] = 'Les préréglages vous permettent de passer facilement entre différentes configurations d\'administration du site. Après avoir sélectionné un préréglage, vous pouvez activer d\'autres fonctionnalités à tout moment.';
$string['created'] = 'Créé';
$string['currentvalue'] = 'Valeur actuelle';
$string['deletepreset'] = 'Voulez-vous vraiment supprimer l\'administrateur du site preset {$a}?';
$string['deletepreviouslyapplied'] = 'Voulez-vous vraiment supprimer l\'administrateur du site preset {$a}?<br><br> Ce préréglage a déjà été appliqué. Supprimer un préréglage le supprime complètement de votre site. Vous ne serez pas en mesure de retourner vos paramètres à comment ils étaient avant d\'appliquer ce preset.';
$string['deletepresettitle'] = 'Supprimer {$a} préréglé?';
$string['deleteshow'] = 'Supprimer le préréglage de l\'administration du site';
$string['editadminpresetname'] = 'Modifier le nom de préréglage de l\'administration';
$string['eventpresetdeleted'] = 'Préréglage supprimé';
$string['eventpresetdownloaded'] = 'Préréglage téléchargé';
$string['eventpresetexported'] = 'Préréglage créé';
$string['eventpresetimported'] = 'Préréglage importé';
$string['eventpresetloaded'] = 'Préréglage appliqué';
$string['eventpresetpreviewed'] = 'Préréglage prévu';
$string['eventpresetreverted'] = 'Préréglage restauré';
$string['eventpresetslisted'] = 'Les presets ont été listés';
$string['exportdescription'] = 'Enregistrer tous les paramètres d\'administration de votre site actuel comme un préréglage pour partager ou réutiliser.';
$string['exportshow'] = 'Créer le préréglage d\'administration du site';
$string['falseaction'] = 'Action non soutenue dans cette version.';
$string['falsemode'] = 'Mode non pris en charge dans cette version.';
$string['import'] = 'Importation';
$string['imported'] = 'Importé';
$string['importdescription'] = 'Importer les paramètres d\'administration du site comme préréglage pour appliquer sur votre site.';
$string['importexecute'] = 'Importer site admin preset';
$string['importshow'] = 'Importer site admin preset';
$string['includesensiblesettings'] = 'Inclure les paramètres avec les mots de passe';
$string['includesensiblesettings_help'] = 'Les paramètres avec des mots de passe contiennent des informations sensibles spécifiques à votre site. N\'incluez ces paramètres que si vous créez un préréglage à réutiliser sur votre site.';
$string['loaddescription'] = 'Passez en revue les changements de réglage avant d\'appliquer ce préréglage.';
$string['loadexecute'] = 'Préréglage d\'administration du site appliqué';
$string['loadpreview'] = 'Prévisualiser le préréglage de l\'administration du site';
$string['loadselected'] = 'Appliquer';
$string['loadshow'] = 'Appliquer le préréglage d\'administration du site';
$string['newvalue'] = 'Nouvelle valeur';
$string['nopresets'] = 'Vous faites't have any site admin preset.';
$string['nosettingswillbeapplied'] = 'Ces paramètres sont les mêmes que les paramètres actuels; il n\'y a aucune modification à appliquer.';
$string['nothingloaded'] = 'Aucun changement de réglage n\'a été effectué car les paramètres du préréglage sont les mêmes que sur votre site.';
$string['novalidsettings'] = 'Pas de paramètres valides';
$string['novalidsettingsselected'] = 'Aucun paramètre valide sélectionné';
$string['oldvalue'] = 'Ancienne valeur';
$string['pluginname'] = 'Préréglages d\'administration du site';
$string['presetapplicationslisttable'] = 'Tableau d\'applications prédéfinies par l\'administrateur du site';
$string['presetslisttable'] = 'Tableau des préréglages d\'administration du site';
$string['presetmoodlerelease'] = 'Sortie de moodle';
$string['presetname'] = 'Nom prédéfini';
$string['privacy:metadata'] = 'L\'outil de préréglage d\'administration du site ne stocke aucune donnée personnelle.';
$string['renamepreset'] = 'Nom (facultatif)';
$string['rollback'] = 'Restaurer cette version';
$string['rollbackdescription'] = 'Utiliser le \'Restore this version\' link to revert to the settings just before the preset was applied.';
$string['rollbackexecute'] = 'Version restaurée à partir de l\'administrateur du site preset {$a}';
$string['rollbackfailures'] = 'Les paramètres suivants ne peuvent pas être retournés, car la valeur a été modifiée après l\'application du préréglage.';
$string['rollbackresults'] = 'Réglages restaurés avec succès';
$string['rollbackshow'] = '{$a} historique des versions prédéfinies';
$string['selectfile'] = 'Sélectionner un fichier';
$string['settingname'] = 'Définition du nom';
$string['settingsapplied'] = 'Définir les changements';
$string['settingsappliednotification'] = 'Review the following setting changes which have been applied.
<br/>If you change your mind, you can undo the setting changes via \'Show version history\' in the preset actions menu.';
$string['settingsnotapplicable'] = 'Paramètres non applicables à cette version Moodle';
$string['settingsnotapplied'] = 'Paramètres non modifiés';
$string['settingstobeapplied'] = 'Définir les changements';
$string['showhistory'] = 'Afficher l\'historique de la version';
$string['site'] = 'Site';
$string['timeapplied'] = 'Date';
$string['wrongfile'] = 'Mauvais fichier';
