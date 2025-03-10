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
 * Strings for component 'tool_httpsreplace'
 *
 * @package    tool_httpsreplace
 * @copyright Copyright (c) 2016 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['complete'] = 'Achevé';
$string['count'] = 'Nombre d\'éléments de contenu intégrés';
$string['disclaimer'] = 'Je comprends les risques de cette opération';
$string['doclink'] = 'Outil de conversion HTTPS';
$string['doit'] = 'Effectuer la conversion';
$string['domain'] = 'Domaine problématique';
$string['domainexplain'] = 'When a site is moved from HTTP to HTTPS, all embeded HTTP content will stop working. This tool allows you to automatically convert HTTP content to HTTPS.

Before performing the conversion, content will be scanned to find any URLs which may not work after conversion. You may want to check each one has HTTPS available, or find alternative resources.';
$string['domainexplainhelp'] = 'Ces domaines se trouvent dans votre contenu, mais ne semblent pas prendre en charge le contenu HTTPS. Après le passage à HTTPS, le contenu de ces sites ne s\'affichera plus chez Moodle pour les utilisateurs avec des navigateurs modernes sécurisés. Il est possible que ces sites soient temporairement ou définitivement indisponibles et ne fonctionnent pas avec aucun des paramètres de sécurité. Procéder seulement après avoir examiné ces résultats et déterminé si ce contenu hébergé à l\'extérieur n\'est pas essentiel. Remarque: Ce contenu ne fonctionnerait plus en passant à HTTPS de toute façon.';
$string['httpwarning'] = 'Cette instance fonctionne toujours sous HTTP. Vous pouvez toujours exécuter cet outil et le contenu externe sera changé en HTTPS, mais le contenu interne restera sur HTTP. Vous devrez exécuter ce script à nouveau après avoir passé à HTTPS pour convertir du contenu interne.';
$string['notimplemented'] = 'Désolé, cette fonctionnalité n\'est pas implémentée dans votre pilote de base de données.';
$string['oktoprocede'] = 'Le scan ne trouve aucun problème avec votre contenu. Vous pouvez procéder à la mise à jour de tout contenu HTTP pour utiliser HTTPS.';
$string['pageheader'] = 'Mettre à jour les URL de contenu hébergées à l\'extérieur vers HTTPS';
$string['pluginname'] = 'Outil de conversion HTTPS';
$string['replacing'] = 'Remplacer le contenu HTTP par HTTPS...';
$string['searching'] = 'Recherche {$a}';
$string['takeabackupwarning'] = 'Avertissement : Après avoir lancé cet outil, les modifications ne peuvent pas être retournées. Il est recommandé qu\'une sauvegarde du site soit effectuée avant d\'aller de l\'avant, car il y a peu de risque que le contenu erroné soit remplacé.';
$string['toolintro'] = 'Si vous prévoyez de convertir votre site en HTTPS, vous pouvez utiliser l\'outil de conversion <a href="{$a}">HTTPS pour convertir votre contenu intégré en HTTPS.';
$string['privacy:metadata'] = 'Le plugin de conversion HTTPS ne stocke aucune donnée personnelle.';
