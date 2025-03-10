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
 * Strings for component 'tool_componentlibrary', language 'en'
 *
 * @package    tool_componentlibrary
 * @copyright  2021 Bas Brands <bas@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['copied'] = 'Copié !';
$string['copy'] = 'Copier';
$string['copytoclipboard'] = 'Copier dans le presse-papiers';
$string['installer'] = '<h3>Component library setup</h3>
    <p>Before you can see the content of the component library you will need to have shell access to your Moodle installation and be able to write to folder /admin/tool/componentlibrary and have npm installed on your Moodle server.</p>
    <p>If you meet these requirements you can navigate to your Moodle root folder and run:</p>
    <pre>$ npm install</pre>
    <pre>$ npm install grunt</pre>
    <p>This will fetch all the required packages for building the component library docs.</p>
    <p>Once they are installed you can run:</p>
    <pre>$ grunt componentlibrary</pre>
    <p>For more info see the README.md file in this plugin.</p>';
$string['pluginname'] = 'Bibliothèque des composants de l\'interface utilisateur';
$string['privacy:metadata'] = 'Le plugin Component Library ne stocke aucune donnée personnelle.';
$string['runjsdoc'] = 'La documentation JavaScript est générée séparément dans la bibliothèque des composants. Pour le générer s\'il vous plaît lancer `grunt jsdoc`';
$string['showboth'] = 'Afficher avec les deux';
$string['showdefault'] = 'Afficher par défaut';
$string['showhelp'] = 'Afficher avec l\'aide';
$string['showmixed'] = 'Afficher mixte';
$string['showrequired'] = 'Afficher avec les exigences';
$string['toggleviewinfo'] = 'Basculer la vue de cette instance de formulaire';
