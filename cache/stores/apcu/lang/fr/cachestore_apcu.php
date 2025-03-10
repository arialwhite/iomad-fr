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
 * APCu cache store language strings.
 *
 * @package    cachestore_apcu
 * @copyright  2012 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['clusternotice'] = 'Please be aware that APCu is only a suitable choice for single node sites or caches that can be stored locally.
For more information, see the <a href="{$a}">APC user cache documentation</a>.';
$string['notice'] = 'Avis';
$string['pluginname'] = 'cache utilisateur APC (APCu)';
$string['prefix'] = 'Préfixe';
$string['prefix_help'] = 'Le préfixe ci-dessus est utilisé pour toutes les clés stockées dans cette instance de stockage APC. Par défaut, le préfixe de la base de données est utilisé.';
$string['prefixinvalid'] = 'Le préfixe que vous avez sélectionné est invalide. Vous ne pouvez utiliser a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Le préfixe que vous avez sélectionné n\'est pas unique. Veuillez choisir un préfixe unique.';
$string['privacy:metadata'] = 'Le plugin cache utilisateur APC (APCu) stocke brièvement les données dans le cadre de sa fonctionnalité de cache, mais ces données sont régulièrement effacées et ne sont pas envoyées de manière externe.';
$string['testperformance'] = 'Efficacité des essais';
$string['testperformance_desc'] = 'Si elle est activée, les performances d\'APCu seront incluses lors de la consultation de la page Performance d\'essai. Il n\'est pas recommandé de le faire sur un site de production.';
