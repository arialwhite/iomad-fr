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
 * The library file for the file cache store.
 *
 * This file is part of the file cache store, it contains the API for interacting with an instance of the store.
 * This is used as a default cache store within the Cache API. It should never be deleted.
 *
 * @package    cachestore_file
 * @category   cache
 * @copyright  2012 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Répertoire de purge asynchrone';
$string['asyncpurge_help'] = 'Si activé, le nouveau répertoire est créé avec la révision du cache et l\'ancien répertoire sera supprimé asynchronement via une tâche programmée.';
$string['autocreate'] = 'Création automatique du répertoire';
$string['autocreate_help'] = 'Si activé, le répertoire spécifié dans le chemin sera automatiquement créé s\'il n\'existe pas déjà.';
$string['lockwait'] = 'Délai maximal d\'attente';
$string['lockwait_help'] = 'Le temps maximum en secondes pour attendre un verrouillage exclusif avant de lire ou d\'écrire une clé cache. Ceci n\'est utilisé que pour les définitions de cache qui ont lu ou écrit le verrouillage requis.';
$string['path'] = 'Voie de cache';
$string['path_help'] = 'Le répertoire qui devrait être utilisé pour stocker des fichiers pour ce cache store. Si elle est laissée en blanc (par défaut), un répertoire sera automatiquement créé dans le répertoire moodledata. Ceci peut être utilisé pour pointer un magasin de fichiers vers un répertoire sur un lecteur plus performant (comme un en mémoire).';
$string['pluginname'] = 'cache de fichiers';
$string['privacy:metadata'] = 'Le plugin cachestore de fichiers stocke brièvement les données dans le cadre de sa fonctionnalité de cache, mais ces données sont régulièrement effacées.';
$string['prescan'] = 'Répertoire Prescan';
$string['prescan_help'] = 'Si activé, le répertoire est scanné lors de la première utilisation du cache et les requêtes de fichiers sont d\'abord vérifiées par rapport aux données de l\'analyse. Cela peut vous aider si vous avez un système de fichiers lent et trouvez que les opérations de fichiers vous causent un goulot de bouteille.';
$string['singledirectory'] = 'Un seul répertoire';
$string['singledirectory_help'] = 'If enabled files (cached items) will be stored in a single directory rather than being broken up into multiple directories.

Enabling this will speed up file interactions but comes at the cost of increased risk of hitting file system limitations.

It is advisable to only turn this on if the following is true:

* If you know the number of items in the cache is going to be small enough that it won\'t cause issues on the file system you are running with.
* The data being cached is not expensive to generate. If it is then sticking with the default may still be the better option as it reduces the chance of issues.';
$string['task_asyncpurge'] = 'Suppression asynchrone des anciens répertoires de révision du cache';

/**
 * This is is like the file store, but designed for siutations where:
 *   - many more things are likely to be stored in the cache, so CRC hashing is
 *     too likely to give collisions, and storing everything in a completely flat
 *     directory structure is inadvisable.
 *   - the things we are caching are more expensive to calculate, so the extra
 *     time to computer a better hash is a worthwhile trade-off.
 */
