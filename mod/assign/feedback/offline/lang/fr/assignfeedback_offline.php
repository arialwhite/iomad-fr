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
 * Strings for component 'feedback_offline', language 'en'
 *
 * @package   assignfeedback_offline
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['confirmimport'] = 'Confirmer l\'importation de grades';
$string['default'] = 'Activé par défaut';
$string['default_help'] = 'Si défini, le classement hors ligne avec les feuilles de travail sera activé par défaut pour toutes les nouvelles affectations.';
$string['downloadgrades'] = 'Télécharger la fiche de classement';
$string['enabled'] = 'Feuille de calcul du classement hors ligne';
$string['enabled_help'] = 'Si elle est activée, l\'enseignant pourra télécharger et télécharger une feuille de travail avec les notes des élèves lors de la notation des tâches.';
$string['feedbackupdate'] = 'Définir le champ « {$a->field} » pour « {$a->étudiant} » à « {$a->text} »';
$string['graderecentlymodified'] = 'Le grade a été modifié dans Moodle plus récemment que dans la feuille de travail de classement pour {$a}';
$string['gradelockedingradebook'] = 'La note a été verrouillée dans le classebook pour {$a}';
$string['gradeupdate'] = 'Définir la note pour {$a->étudiant} à {$a->grade}';
$string['ignoremodified'] = 'Permettre la mise à jour des dossiers qui ont été modifiés plus récemment dans Moodle que dans la feuille de calcul.';
$string['ignoremodified_help'] = 'Lorsque la feuille de calcul du classement est téléchargée de Moodle, elle contient la dernière date modifiée pour chacune des catégories. Si l\'une des catégories est mise à jour dans Moodle après le téléchargement de cette feuille de travail, par défaut, Moodle refusera d\'écraser cette information mise à jour lors de l\'importation des catégories. En sélectionnant cette option, Moodle désactivera cette vérification de sécurité et il peut être possible que plusieurs marqueurs s\'écrasent.';
$string['importgrades'] = 'Confirmer les changements dans la feuille de travail de classement';
$string['invalidgradeimport'] = 'Moodle ne pouvait pas lire la feuille de travail téléchargée. Assurez-vous qu\'il est enregistré dans le format de valeur séparé virgule (.csv) et essayez à nouveau.';
$string['gradesfile'] = 'Feuille de calcul du classement (format csv)';
$string['gradesfile_help'] = 'Feuille de travail pour le classement des grades modifiés. Ce fichier doit être un fichier CSV avec encodage UTF-8 qui a été téléchargé de l\'affectation, avec des colonnes pour la note d\'étudiant et l\'identificateur.';
$string['privacy:nullproviderreason'] = 'Ce plugin n\'a pas de base de données pour stocker les informations utilisateur. Il utilise uniquement les API dans mod_assign pour aider à afficher l\'interface de classement.';
$string['nochanges'] = 'Aucune note modifiée dans la feuille de travail téléchargée';
$string['offlinegradingworksheet'] = 'Classes';
$string['pluginname'] = 'Feuille de calcul du classement hors ligne';
$string['processgrades'] = 'Classes d\'importation';
$string['skiprecord'] = 'Sauter l\'enregistrement';
$string['updaterecord'] = 'Mettre à jour l\'enregistrement';
$string['uploadgrades'] = 'Feuille de travail sur le classement du chargement';
$string['updatedgrades'] = 'Mise à jour <strong>{$a->gradeupdatescount}</strong> grades et <strong>{$a->feedbackupdatescount}</strong> instances de rétroaction.';
