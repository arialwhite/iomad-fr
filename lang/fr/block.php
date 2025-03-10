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
 * Strings for component 'block', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addblock'] = 'Ajouter un bloc {$a}';
$string['anypagematchingtheabove'] = 'Toute page correspondant à ce qui précède';
$string['appearsinsubcontexts'] = 'Apparaît dans les sous-contextes';
$string['assignrolesinblock'] = 'Attribuer les rôles dans le bloc {$a}';
$string['blocksdrawertoggle'] = 'Cacher/afficher le tiroir du bloc';
$string['blocksettings'] = 'Paramètres de bloc';
$string['bracketfirst'] = '{$a} (première)';
$string['bracketlast'] = '{$a} (dernier)';
$string['configureblock'] = 'Configurer le bloc {$a}';
$string['contexts'] = 'Contextes des pages';
$string['contexts_help'] = 'Les contextes sont des types plus spécifiques de pages où ce bloc peut être affiché à l\'emplacement du bloc original. Vous aurez ici différentes options en fonction de l\'emplacement original du bloc et de votre emplacement actuel. Par exemple, vous pouvez limiter un bloc à n\'apparaître que sur les pages du forum dans un cours en ajoutant le bloc au cours (en le faisant apparaître sur toutes les sous-pages), puis en entrant dans un forum et en éditant à nouveau les paramètres du bloc pour limiter l\'affichage aux pages du forum.';
$string['createdat'] = 'Emplacement initial du bloc';
$string['createdat_help'] = 'L\'emplacement original où le bloc a été créé. Les paramètres de bloc peuvent le faire apparaître dans d\'autres emplacements (contextes) à l\'emplacement original. Par exemple, un bloc créé sur une page de cours pourrait être affiché dans les activités de ce cours. Un bloc créé sur le site peut être affiché dans tout le site.';
$string['defaultregion'] = 'Région par défaut';
$string['defaultregion_help'] = 'Les thèmes peuvent définir une ou plusieurs régions de blocs nommées où les blocs sont affichés. Ce paramètre définit lequel de ces blocs vous voulez que ce bloc apparaisse par défaut. La région peut être dépassée sur des pages spécifiques si nécessaire.';
$string['defaultweight'] = 'Poids par défaut';
$string['defaultweight_help'] = 'Le poids par défaut vous permet de choisir approximativement où vous voulez que le bloc apparaisse dans la région choisie, soit en haut ou en bas. L\'emplacement final est calculé à partir de tous les blocs de cette région (par exemple, un seul bloc peut être en haut). Cette valeur peut être dépassée sur des pages spécifiques si nécessaire.';
$string['deletecheck'] = 'Supprimer {$a} bloc?';
$string['deletecheck_modal'] = 'Supprimer le bloc ?';
$string['deleteblock'] = 'Supprimer {$a} bloc';
$string['deleteblockcheck'] = 'Cela supprimera le bloc {$a}.';
$string['deleteblockinprogress'] = 'Bloc {$a} suppression en cours...';
$string['deleteblockwarning'] = '<p>Vous êtes sur le point de supprimer un bloc qui apparaît ailleurs.</p><p> Emplacement original du bloc : {$a->emplacement}<br />Affichage sur les types de pages : {$a->type de page}</p><p> Voulez-vous vraiment continuer?</p>';
$string['hideblock'] = 'Cacher le bloc {$a}';
$string['hidepanel'] = 'Cacher le panneau';
$string['moveblock'] = 'Déplacer {$a} bloc';
$string['moveblockafter'] = 'Déplacer le bloc vers le bloc {$a} après';
$string['moveblockbefore'] = 'Déplacer le bloc vers le bloc avant {$a}';
$string['moveblockinregion'] = 'Déplacer le bloc dans la région {$a}';
$string['movingthisblockcancel'] = 'Déplacement de ce bloc ({$a})';
$string['myblocks'] = 'Mes blocs';
$string['onthispage'] = 'Sur cette page';
$string['pagetypes'] = 'Types de pages';
$string['pagetypewarning'] = 'Le type de page précédemment spécifié n\'est plus sélectionnable. Veuillez choisir le type de page le plus approprié ci-dessous.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Enregistre quand l\'utilisateur a accosté un bloc';
$string['privacy:metadata:userpref:hiddenblock'] = 'Enregistre quand l\'utilisateur s\'est effondré/caché un bloc';
$string['privacy:request:blockisdocked'] = 'Indique si le bloc a été amarré';
$string['privacy:request:blockishidden'] = 'Indique si le bloc a été caché ou s\'est effondré';
$string['region'] = 'Région';
$string['showblock'] = 'Afficher le bloc {$a}';
$string['showoncontextandsubs'] = 'Affichage sur \'{$a}\' and any pages within it';
$string['showoncontextonly'] = 'Affichage sur \'{$a}\' only';
$string['showonentiresite'] = 'Affichage sur tout le site';
$string['showonfrontpageandsubs'] = 'Affichez sur la maison du site et toutes les pages ajoutées à la maison du site.';
$string['showonfrontpageonly'] = 'Afficher uniquement sur le site accueil';
$string['site-*'] = 'Toute page de site de haut niveau';
$string['subpages'] = 'Sélectionner des pages';
$string['restrictpagetypes'] = 'Afficher les types de page';
$string['thisspecificpage'] = 'Cette page spécifique';
$string['visible'] = 'Visible';
$string['weight'] = 'Poids';
$string['wherethisblockappears'] = 'Où ce bloc apparaît';
