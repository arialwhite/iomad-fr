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
 * English strings for tool_recyclebin.
 *
 * @package    tool_recyclebin
 * @copyright  2015 Skylar Kelty <S.Kelty@kent.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertdeleted'] = '\'{$a->name}\' has been deleted.';
$string['alertemptied'] = 'La poubelle a été vidée.';
$string['alertrestored'] = '\'{$a->name}\' has been restored.';
$string['autohide'] = 'Cacher automatiquement';
$string['autohide_desc'] = 'Cache automatiquement le lien de recyclage lorsque le bac est vide.';
$string['categorybinenable'] = 'Activer le bac de recyclage de catégorie';
$string['categorybinexpiry'] = 'Durée du cours';
$string['categorybinexpiry_desc'] = 'Combien de temps un cours supprimé devrait-il rester dans le bac de recyclage?';
$string['coursebinenable'] = 'Activer la corbeille de recyclage des cours';
$string['coursebinexpiry'] = 'Durée de vie des articles';
$string['coursebinexpiry_desc'] = 'Combien de temps un élément supprimé devrait-il rester dans le bac de recyclage?';
$string['datedeleted'] = 'Date de suppression';
$string['deleteall'] = 'Tout supprimer';
$string['deleteallconfirm'] = 'Voulez-vous vraiment supprimer tous les éléments de la corbeille?';
$string['deleteconfirm'] = 'Voulez-vous vraiment supprimer l\'élément sélectionné de la corbeille?';
$string['deleteexpirywarning'] = 'Le contenu sera définitivement supprimé après {$a}.';
$string['eventitemcreated'] = 'Item créé';
$string['eventitemcreated_desc'] = 'Élément créé avec ID {$a->objectid}.';
$string['eventitemdeleted'] = 'Point supprimé';
$string['eventitemdeleted_desc'] = 'Élément avec ID {$a->objectid} supprimé.';
$string['eventitemrestored'] = 'Article restauré';
$string['eventitemrestored_desc'] = 'Article avec ID {$a->objectid} restauré.';
$string['invalidcontext'] = 'Contexte non valide fourni.';
$string['noitemsinbin'] = 'Il n\'y a aucun objet dans la poubelle.';
$string['notenabled'] = 'Désolé, mais l\'administrateur a désactivé la poubelle.';
$string['pluginname'] = 'Corbeille';
$string['taskcleanupcategorybin'] = 'Catégorie de nettoyage poubelle de recyclage';
$string['taskcleanupcoursebin'] = 'Cours de nettoyage recyclage bac';
$string['recyclebin:deleteitems'] = 'Supprimer les éléments du bac de recyclage';
$string['recyclebin:restoreitems'] = 'Restaurer les articles des bacs de recyclage';
$string['recyclebin:viewitems'] = 'Afficher les éléments de la corbeille';
$string['privacy:metadata'] = 'Le plugin Recycle bin ne stocke aucune donnée personnelle.';
