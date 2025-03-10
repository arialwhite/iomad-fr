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
 * Strings for component 'tool_generator', language 'en'.
 *
 * @package    tool_dbtransfer
 * @copyright  2011 Petr Skoda {@link http://skodak.org/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['clidriverlist'] = 'Drivers de base de données disponibles pour la migration';
$string['cliheading'] = 'Migration des bases de données - assurez-vous que personne n\'accède au serveur pendant la migration!';
$string['climigrationnotice'] = 'Migration de base de données en cours, veuillez attendre que la migration complète et l\'administrateur du serveur met à jour la configuration et supprime le fichier $CFG->dataroot/climatenance.html.';
$string['convertinglogdisplay'] = 'Convertir les actions d\'affichage du journal';
$string['dbexport'] = 'Exportation de bases de données';
$string['dbtransfer'] = 'Migration des bases de données';
$string['enablemaintenance'] = 'Activer le mode maintenance';
$string['enablemaintenance_help'] = 'Cette option permet le mode Maintanance pendant et après la migration de base de données, elle empêche l\'accès de tous les utilisateurs jusqu\'à ce que la migration soit terminée. Veuillez noter que l\'administrateur doit supprimer manuellement le fichier $CFG->dataroot/climatenance.html après la mise à jour des paramètres config.php pour reprendre l\'opération normale.';
$string['exportdata'] = 'Données sur les exportations';
$string['notargetconectexception'] = 'Impossible de connecter la base de données cible, désolé.';
$string['options'] = 'Options';
$string['pluginname'] = 'Transfert de base de données';
$string['targetdatabase'] = 'Base de données cible';
$string['targetdatabasenotempty'] = 'La base de données cible ne doit contenir aucune table avec préfixe donné !';
$string['transferdata'] = 'Transfert de données';
$string['transferdbintro'] = 'Ce script transférera l\'ensemble du contenu de cette base de données vers un autre serveur de base de données. Il est souvent utilisé pour la migration de données vers différents types de base de données.';
$string['transferdbtoserver'] = 'Transférer cette base de données Moodle vers un autre serveur';
$string['transferringdbto'] = 'Transfert de cette base de données {$a->dbtype} vers la base de données {$a->dbtype} "{$a->dbname}" sur "{$a->dbhost}"';
$string['privacy:metadata'] = 'Le plugin de transfert de base de données ne stocke aucune donnée personnelle.';
