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
 * Strings for Language customisation admin tool
 *
 * @package    tool
 * @subpackage customlang
 * @copyright  2010 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Enregistrer les chaînes dans le paquet langue';
$string['checkout'] = 'Ouvrir le paquet de langues pour l\'édition';
$string['checkoutdone'] = 'Dossier linguistique chargé';
$string['checkoutinprogress'] = 'Chargement du paquet linguistique';
$string['cliexportfileexists'] = 'Fichier pour {$a->lang} existe déjà, sauter. Si vous voulez écraser ajouter l\'option --override=true.';
$string['cliexportheading'] = 'Commencer à exporter des fichiers lang.';
$string['cliexportnofilefoundforlang'] = 'Aucun fichier trouvé pour exporter. Passer l\'exportation pour cette langue.';
$string['cliexportfilenotfoundforcomponent'] = 'Fichier {$a->filepath} non trouvé pour la langue {$a->lang}. Sauter ce fichier.';
$string['cliexportstartexport'] = 'Langue d\'exportation {$a}';
$string['cliexportzipdone'] = 'Zip créé : {$a}';
$string['cliexportzipfail'] = 'Impossible de créer zip {$a}';
$string['clifiles'] = 'Fichiers à importer dans {$a}';
$string['cliimporting'] = 'Importer la chaîne de fichiers (mode {$a})';
$string['clinolog'] = 'Rien à importer dans {$a}';
$string['climissinglang'] = 'Langue manquante';
$string['climissingfiles'] = 'Manque de fichiers valides';
$string['climissingmode'] = 'Mode manquant ou invalide (valable est tout, nouveau ou mis à jour)';
$string['climissingsource'] = 'Fichier ou dossier manquant';
$string['confirmcheckin'] = 'Vous êtes sur le point d\'enregistrer des modifications à votre paquet de langues locales. Cela va exporter les chaînes personnalisées du traducteur dans votre répertoire de données du site et votre site va commencer à utiliser les chaînes modifiées. Appuyez sur \'Continue\' to proceed with saving.';
$string['customlang:edit'] = 'Modifier la traduction locale';
$string['customlang:export'] = 'Exporter la traduction locale';
$string['customlang:view'] = 'Voir traduction locale';
$string['export'] = 'Exporter des chaînes personnalisées';
$string['exportfilter'] = 'Sélectionnez un ou plusieurs composants à exporter';
$string['editlangpack'] = 'Éditer le paquet linguistique';
$string['filter'] = 'Filtre des chaînes';
$string['filtercomponent'] = 'Afficher les chaînes de ces composants';
$string['filtercustomized'] = 'Personnalisé uniquement';
$string['filtermodified'] = 'Modifié dans cette session seulement';
$string['filteronlyhelps'] = 'Aide seulement';
$string['filtershowstrings'] = 'Afficher les chaînes';
$string['filterstringid'] = 'identificateur de chaîne';
$string['filtersubstring'] = 'Seules les chaînes contenant';
$string['headingcomponent'] = 'Composante';
$string['headinglocal'] = 'Personnalisation locale';
$string['headingstandard'] = 'Texte standard';
$string['headingstringid'] = 'Chaîne';
$string['import'] = 'Importer des chaînes personnalisées';
$string['import_mode'] = 'Mode d\'importation';
$string['import_new'] = 'Créer uniquement des chaînes sans personnalisation locale';
$string['import_update'] = 'Mettre à jour uniquement les chaînes avec personnalisation locale';
$string['import_all'] = 'Créer ou mettre à jour toutes les chaînes à partir du ou des composants';
$string['importfile'] = 'Importer le fichier';
$string['langpack'] = 'Composante(s) linguistique(s)';
$string['markinguptodate'] = 'Marquage de la personnalisation comme étant à jour';
$string['markinguptodate_help'] = 'La traduction personnalisée peut devenir obsolète si l\'original en anglais ou la traduction principale a changé depuis que la chaîne a été personnalisée sur votre site. Consultez la traduction personnalisée. Si vous le trouvez à jour, cliquez sur la case à cocher. Modifier autrement.';
$string['markuptodate'] = 'marquer comme étant à jour';
$string['modifiedno'] = 'Il n\'y a pas de chaînes modifiées à enregistrer.';
$string['modifiednum'] = 'Il y a {$a} des chaînes modifiées. Voulez-vous enregistrer ces modifications dans votre pack de langue locale ?';
$string['nolocallang'] = 'Aucune chaîne locale trouvée.';
$string['notice_ignorenew'] = 'Ignorer la chaîne {$a->component}/{$a->stringid} parce qu\'il n\'est pas personnalisé.';
$string['notice_ignoreupdate'] = 'Ignorer la chaîne {$a->component}/{$a->stringid} car elle est déjà définie.';
$string['notice_inexitentstring'] = 'Chaîne {$a->component}/{$a->stringid} non trouvée.';
$string['notice_missingcomponent'] = 'Composant manquant {$a->composante}.';
$string['notice_success'] = 'Chaîne {$a->component}/{$a->stringid} mis à jour avec succès.';
$string['nostringsfound'] = 'Aucune chaîne trouvée, veuillez modifier les paramètres du filtre';
$string['placeholder'] = 'Titulaires';
$string['placeholder_help'] = 'Placeholders are special statements like `{$a}` or `{$a->something}` within the string. They are replaced with a value when the string is actually printed.

It is important to copy them exactly as they are in the original string. Do not translate them nor change their left-to-right orientation.';
$string['placeholderwarning'] = 'string contient un détenteur de place';
$string['pluginname'] = 'Personnalisation des langues';
$string['savecheckin'] = 'Enregistrer les modifications dans le paquet linguistique';
$string['savecontinue'] = 'Appliquer les modifications et poursuivre l\'édition';
$string['privacy:metadata'] = 'Le plugin personnalisation Langue ne stocke aucune donnée personnelle.';

// Deprecated since Moodle 4.2.
$string['exportzipfilename'] = 'Customlang-export-{$a->lang}.zip';
