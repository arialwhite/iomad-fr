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
 * Strings for component 'atto_accessibilitychecker', language 'en'.
 *
 * @package    atto_accessibilitychecker
 * @copyright  2014 Damyon Wiese  <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['emptytext'] = 'Texte vide';
$string['entiredocument'] = 'Document complet';
$string['imagesmissingalt'] = 'Les images nécessitent un autre texte. Pour corriger cet avertissement, ajoutez un attribut alt à vos balises img. Un attribut alt vide peut être utilisé, mais seulement lorsque l\'image est purement décorative et ne contient aucune information.';
$string['needsmorecontrast'] = 'Les couleurs du premier plan et du texte de fond n\'ont pas assez de contraste. Pour corriger cet avertissement, changez la couleur de premier plan ou de fond du texte afin qu\'il soit plus facile à lire.';
$string['needsmoreheadings'] = 'Il y a beaucoup de texte sans rubriques. Les en-têtes permettront aux lecteurs d\'écran de naviguer facilement dans la page et rendront la page plus utilisable pour tout le monde.';
$string['nowarnings'] = 'Félicitations, aucun problème d\'accessibilité trouvé!';
$string['pluginname'] = 'Vérificateur d\'accessibilité';
$string['report'] = 'Rapport sur l\'accessibilité :';
$string['tablesmissingcaption'] = 'Les tableaux devraient être sous-titrés. Bien qu\'il ne soit pas nécessaire pour chaque table d\'avoir une légende, une légende est généralement très utile.';
$string['tablesmissingheaders'] = 'Les tableaux doivent utiliser des en-têtes de lignes et/ou de colonnes.';
$string['tableswithmergedcells'] = 'Les tableaux ne doivent pas contenir de cellules fusionnées. Malgré le balisage standard des tableaux depuis de nombreuses années, certains lecteurs d\'écran ne prennent toujours pas en charge les tableaux complexes. Dans la mesure du possible, essayez de « aplatir » la table et d\'éviter les cellules fusionnées.';
$string['privacy:metadata'] = 'Le plugin atto_accessibilitychecker ne stocke aucune donnée personnelle.';
