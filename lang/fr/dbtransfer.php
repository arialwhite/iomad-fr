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
 * Strings for component 'dbtransfer', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @subpackage dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['copyingtable'] = 'Copier la table {$a}';
$string['copyingtables'] = 'Copie du contenu de la table';
$string['creatingtargettables'] = 'Création des tableaux dans la base de données cible';
$string['dbexport'] = 'Exportation de bases de données';
$string['dbtransfer'] = 'Transfert de base de données';
$string['differenttableexception'] = 'La structure du tableau {$a} ne correspond pas.';
$string['done'] = 'Fait';
$string['exportschemaexception'] = 'La structure actuelle de la base de données ne correspond pas à tous les fichiers install.xml. <br /> {$a}';
$string['checkingsourcetables'] = 'Vérification de la structure du tableau source';
$string['importschemaexception'] = 'La structure actuelle de la base de données ne correspond pas à tous les fichiers install.xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'La version actuelle {$a->currentver} ne correspond pas à la version exportée {$a->schemaver}.';
$string['malformedxmlexception'] = 'XML altéré trouvé, ne peut pas continuer.';
$string['tablex'] = 'Tableau {$a} :';
$string['unknowntableexception'] = 'Table inconnue {$a} trouvée dans le fichier d\'exportation.';
