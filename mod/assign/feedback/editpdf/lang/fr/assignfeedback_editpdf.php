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
 * Strings for component 'assignfeedback_editpdf', language 'en'
 *
 * @package   assignfeedback_editpdf
 * @copyright 2012 Davo Smith
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Ajouter à la liste rapide';
$string['annotationcolour'] = 'Couleur de l\'annotation';
$string['black'] = 'Noir';
$string['blue'] = 'Bleu';
$string['cannotopenpdf'] = 'Impossible d\'ouvrir le PDF. Le fichier peut être corrompu, ou dans un format non pris en charge.';
$string['clear'] = 'Effacer';
$string['colourpicker'] = 'Cueillette de couleurs';
$string['commentcolour'] = 'Couleur des commentaires';
$string['comment'] = 'Commentaires';
$string['commentindex'] = 'Index des commentaires';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['command'] = 'Commande :';
$string['commentcontextmenu'] = 'Menu contextuel des commentaires';
$string['couldnotsavepage'] = 'Impossible d\'enregistrer la page {$a}';
$string['currentstamp'] = 'Timbre';
$string['default'] = 'Activé par défaut';
$string['default_help'] = 'Si elle est définie, cette méthode de rétroaction sera activée par défaut pour toutes les nouvelles affectations.';
$string['deleteannotation'] = 'Supprimer l\'annotation';
$string['deletecomment'] = 'Supprimer le commentaire';
$string['deletefeedback'] = 'Supprimer les retours PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Télécharger les commentaires PDF';
$string['drag'] = 'Faites glisser';
$string['errorgenerateimage'] = 'Erreur de génération d\'image avec ghostscript, debugging info: {$a}';
$string['errorpdfpage'] = 'Il y a eu une erreur en générant cette page.';
$string['editpdf'] = 'Annoter le PDF';
$string['editpdf_help'] = 'Annoter les soumissions des étudiants directement dans le navigateur et produire un PDF téléchargeable édité.';
$string['enabled'] = 'Annoter le PDF';
$string['enabled_help'] = 'Si elle est activée, l\'enseignant pourra créer des fichiers PDF annotés lors de la correction des soumissions d\'affectation. Cela permet à l\'enseignant d\'ajouter des commentaires, des dessins et des timbres directement sur le dessus de l\'élève\'s work. The annotating is done in the browser and no extra software is required.';
$string['expcolcomments'] = 'Élargir/supprimer tous les commentaires';
$string['filter'] = 'Filtrer les commentaires...';
$string['generatefeedback'] = 'Générer la rétroaction PDF';
$string['gotopage'] = 'Aller à la page';
$string['green'] = 'Vert';
$string['gsimage'] = 'Image de test Ghostscript';
$string['pathtogserror'] = 'Le chemin configuré vers ghostscript n\'est pas correctement défini : {$a}';
$string['pathtogspathdesc'] = 'Veuillez noter que l\'annotation PDF exige que le chemin vers ghostscript soit défini dans {$a}.';
$string['highlight'] = 'Mettre en évidence';
$string['jsrequired'] = 'JavaScript est requis pour annoter un PDF. Veuillez activer JavaScript dans votre navigateur pour utiliser cette fonctionnalité.';
$string['launcheditor'] = 'Lancer l\'éditeur PDF...';
$string['line'] = 'Ligne';
$string['loadingeditor'] = 'Chargement de l\'éditeur PDF';
$string['navigatenext'] = 'Page suivante (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Page précédente (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['oval'] = 'Ovale';
$string['output'] = 'Produit :';
$string['pagenumber'] = 'Page {$a}';
$string['pagexofy'] = 'Page {$a->page} de {$a->total}';
$string['pen'] = 'Pen';
$string['partialwarning'] = 'Certains des fichiers de cette soumission ne peuvent être consultés que par téléchargement direct.';
$string['pluginname'] = 'Annoter le PDF';
$string['privacy:metadata:colourpurpose'] = 'Couleur du commentaire ou de l\'annotation';
$string['privacy:metadata:conversionpurpose'] = 'Les fichiers sont convertis en PDF pour permettre des annotations.';
$string['privacy:metadata:filepurpose'] = 'Conserve un PDF annoté avec rétroaction pour l\'utilisateur.';
$string['privacy:metadata:rawtextpurpose'] = 'Stocke du texte brut pour les données rapides.';
$string['privacy:metadata:tablepurpose'] = 'Le professeur de magasins a spécifié des commentaires sur la liste rapide';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur';
$string['privacy:path'] = 'PDF Commentaires';
$string['generatingpdf'] = 'Générer le PDF...';
$string['rectangle'] = 'Rectangle';
$string['red'] = 'Red';
$string['result'] = 'Résultat :';
$string['searchcomments'] = 'Recherche de commentaires';
$string['select'] = 'Sélectionner';
$string['stamppicker'] = 'Récupérateur de timbres';
$string['stampsdesc'] = 'Les timbres doivent être des fichiers image (taille recommandée: 40x40). Ces images peuvent être utilisées avec l\'outil tampon pour annoter le PDF.';
$string['stamps'] = 'Timbres';
$string['stamp'] = 'Timbre';
$string['test_doesnotexist'] = 'Le chemin ghostscript pointe vers un fichier inexistant';
$string['test_empty'] = 'Le chemin ghostscript est vide - veuillez saisir le chemin correct';
$string['testgs'] = 'Tester le chemin du ghostscript';
$string['test_isdir'] = 'Le chemin ghostscript pointe vers un dossier, veuillez inclure le programme ghostscript dans le chemin que vous spécifiez';
$string['test_notestfile'] = 'Le test PDF est manquant';
$string['test_notexecutable'] = 'Le ghostscript pointe vers un fichier qui n\'est pas exécutable';
$string['test_ok'] = 'Le chemin ghostscript semble être OK - s\'il vous plaît vérifier que vous pouvez voir le message dans l\'image ci-dessous';
$string['test_doesnotexist'] = 'Le chemin ghostscript pointe vers un fichier inexistant';
$string['test_empty'] = 'Le chemin ghostscript est vide - veuillez saisir le chemin correct';
$string['toolbarbutton'] = '{$a->outil} {$a-> raccourci}';
$string['tool'] = 'Outil';
$string['viewfeedbackonline'] = 'Voir le PDF annoté...';
$string['white'] = 'Blanc';
$string['yellow'] = 'Jaune';
$string['draftchangessaved'] = 'Ébauche des annotations enregistrées';
$string['preparesubmissionsforannotation'] = 'Préparer les soumissions pour l\'annotation';
$string['rotateleft'] = 'Rotation à 90 degrés vers la gauche';
$string['rotateright'] = 'Rotation de 90 degrés vers la droite';
