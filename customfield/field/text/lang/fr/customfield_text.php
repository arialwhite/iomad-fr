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
 * Customfield text plugin
 *
 * @package   customfield_text
 * @copyright 2018 Toni Barbera <toni@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'Taille du formulaire';
$string['errorconfigdisplaysize'] = 'La taille du formulaire doit être comprise entre 1 et 200 caractères.';
$string['errorconfiglinkplaceholder'] = 'Le lien doit contenir un placeholder $$.';
$string['errorconfiglinksyntax'] = 'Le lien doit être une URL valide commençant par http:// ou https://.';
$string['errorconfigmaxlen'] = 'Le nombre maximal de caractères admis doit être compris entre 1 et 1333.';
$string['errormaxlength'] = 'Le nombre maximal de caractères autorisé dans ce champ est {$a}.';
$string['islink'] = 'Champ de liaison';
$string['islink_help'] = 'Pour transformer le texte en un lien, saisissez une URL contenant $$ en tant que placeholder, où $$ sera remplacé par le texte. Par exemple, pour transformer un ID Twitter en lien, entrez https://twitter.com/$$.';
$string['ispassword'] = 'Champ mot de passe';
$string['linktarget'] = 'Lien avec la cible';
$string['maxlength'] = 'Nombre maximal de caractères';
$string['newwindow'] = 'Nouvelle fenêtre';
$string['none'] = 'Aucune';
$string['pluginname'] = 'Texte abrégé';
$string['privacy:metadata'] = 'Le plugin de type de champ de texte abrégé fait\'t store any personal data; it uses tables defined in core.';
$string['sameframe'] = 'Même cadre';
$string['samewindow'] = 'Même fenêtre';
$string['specificsettings'] = 'Paramètres du champ texte court';
