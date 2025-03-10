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
 * Strings for component 'debug', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['authpluginnotfound'] = 'plugin d\'authentification {$a} introuvable.';
$string['cannotbenull'] = '{$a} ne peut pas être nul !';
$string['cannotdowngrade'] = 'Impossible de déclasser {$a->plugin} de {$a->oldversion} à {$a->newversion}.';
$string['cannotfindadmin'] = 'Impossible de trouver un utilisateur admin !';
$string['cannotinitpage'] = 'Impossible d\'initialiser complètement la page : invalide {$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a} tables ne peuvent pas être configurées avec succès!';
$string['codingerror'] = 'Erreur de codage détectée, elle doit être corrigée par un programmeur : {$a}';
$string['configmoodle'] = 'Moodle n\'a pas encore été configuré. Vous devez d\'abord modifier config.php.';
$string['debuginfo'] = 'Déboguer l\'info';
$string['erroroccur'] = 'Une erreur s\'est produite pendant ce processus';
$string['invalidarraysize'] = 'Taille incorrecte des tableaux dans les paramètres de {$a}';
$string['invalideventdata'] = 'Données d\'événement incorrectes soumises : {$a}';
$string['invalidparameter'] = 'Valeur de paramètre non valide détectée';
$string['invalidresponse'] = 'Valeur de réponse non valide détectée';
$string['line'] = 'Ligne';
$string['missingconfigversion'] = 'La table Config ne contient pas la version. Vous ne pouvez pas continuer.';
$string['morethanonerecordinfetch'] = 'Trouvé plus d\'un disque dans fetch() !';
$string['mustbeoveride'] = 'La méthode Abstract {$a} doit être dépassée.';
$string['noadminrole'] = 'Aucun rôle d\'administrateur n\'a pu être trouvé';
$string['noblocks'] = 'Pas de blocs installés !';
$string['nocate'] = 'Pas de catégories !';
$string['nomodules'] = 'Aucun module trouvé!!';
$string['nopageclass'] = 'Importé {$a} mais n\'a trouvé aucune classe de page';
$string['noreports'] = 'Aucun rapport accessible';
$string['notables'] = 'Pas de tables !';
$string['outputbuffer'] = 'tampon de sortie';
$string['phpvaroff'] = 'La variable du serveur PHP \'{$a->name}\' should be Off - {$a->link}';
$string['phpvaron'] = 'La variable du serveur PHP \'{$a->name}\' is not turned On - {$a->link}';
$string['reactive_instances'] = 'Cas réactifs :';
$string['reactive_noinstances'] = 'Cette page n\'a aucune instance réactive.';
$string['reactive_pin'] = 'Pin';
$string['reactive_unpin'] = 'Débrancher';
$string['reactive_highlightoff'] = 'Mise en évidence';
$string['reactive_highlighton'] = 'Mettre en évidence';
$string['reactive_readmodeon'] = 'Mode de lecture ON';
$string['reactive_readmodeoff'] = 'Mode de lecture OFF';
$string['reactive_resetpanel'] = 'Panneau de réinitialisation';
$string['reactive_statedata'] = 'Données';
$string['reactive_saveingwarning'] = 'Avertissement : modifier l\'état peut entraîner des résultats inattendus.';
$string['sessionmissing'] = '{$a} objet manquant de la session';
$string['sqlrelyonobsoletetable'] = 'Ce SQL s\'appuie sur des tables obsolètes : {$a} ! Votre code doit être corrigé par un développeur.';
$string['stacktrace'] = 'Trace de la pile';
$string['withoutversion'] = 'Version principale. Le fichier php est manquant, non lisible ou cassé.';
$string['xmlizeunavailable'] = 'xmlize fonctions ne sont pas disponibles';

// Deprecated since Moodle 4.5.
$string['blocknotexist'] = '{$a} bloc fait\'t exist';
$string['modulenotexist'] = 'Le module {$a} fait\'t exist';
