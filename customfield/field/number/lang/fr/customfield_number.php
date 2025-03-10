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
 * Plugin language strings
 *
 * @package    customfield_number
 * @copyright  2024 Paul Holden <paulh@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['activitytypes'] = 'Types d\'activités';
$string['automaticallypopulated'] = 'Automatiquement peuplé';
$string['crontaskname'] = 'Population de champs personnalisés de nombre automatique';
$string['decimalplaces'] = 'Lieux décimaux';
$string['defaultvalueconfigerror'] = 'La valeur par défaut doit être comprise entre le minimum et le maximum';
$string['display'] = 'Affichage du modèle';
$string['display_help'] = 'How to display the value of the field. Use the following placeholders:

* **{value}** - display value in a general format (float with decimals configured in the field)
* **$ {value}** - price in dollars
* **{value} hrs** - duration in hours';
$string['displayvalueconfigerror'] = 'Titulaire d\'une place non valide';
$string['displaywhenzero'] = 'Afficher quand zéro';
$string['displaywhenzero_help'] = 'How to display the field value when the value is "0". For example, in case of a price you can display the word "Free" but in case of the duration you may want to leave it empty since it means that the duration was not estimated.

Leave empty if you do not want to display anything at all when the value is set to "0".';
$string['fieldtype'] = 'Type de champ';
$string['fieldtype_help'] = 'Sélectionnez le type de champ numérique à définir. Certaines options nécessitent une entrée manuelle dans la page paramètres du cours, tandis que d\'autres rempliront automatiquement des valeurs, comme le nombre d\'activités spécifiées dans un cours.';
$string['genericfield'] = 'Champ générique pour toute donnée numérique';
$string['headerdisplaysettings'] = 'Affichage du format';
$string['invalidprovider'] = 'Fournisseur incorrect';
$string['manualinput'] = 'Entrée manuelle';
$string['maximumvalue'] = 'Valeur maximale';
$string['maximumvalueerror'] = 'La valeur doit être inférieure ou égale à {$a}';
$string['minimumvalue'] = 'Valeur minimale';
$string['minimumvalueconfigerror'] = 'La valeur minimale doit être inférieure à la valeur maximale';
$string['minimumvalueerror'] = 'La valeur doit être supérieure ou égale à {$a}';
$string['missingrequired'] = 'ID de l\'instance manquant ou ID du champ manquant';
$string['nofactivities'] = 'Nombre d\'activités du cours';
$string['pluginname'] = 'Numéro';
$string['privacy:metadata'] = 'Le plugin de champ personnalisé de nombre ne stocke aucune donnée personnelle';
$string['specificsettings'] = 'Nombre de paramètres de champ';
