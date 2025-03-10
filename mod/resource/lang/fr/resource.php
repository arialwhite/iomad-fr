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
 * Strings for component 'resource', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    mod_resource
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['clicktodownload'] = 'Cliquez sur le lien {$a} pour télécharger le fichier.';
$string['clicktoopen2'] = 'Cliquez sur le lien {$a} pour afficher le fichier.';
$string['configdisplayoptions'] = 'Sélectionnez toutes les options qui devraient être disponibles, les paramètres existants ne sont pas modifiés. Maintenez la touche CTRL pour sélectionner plusieurs champs.';
$string['configframesize'] = 'Lorsqu\'une page Web ou un fichier téléchargé est affiché dans un cadre, cette valeur est la hauteur (en pixels) du cadre supérieur (qui contient la navigation).';
$string['configparametersettings'] = 'Cela définit la valeur par défaut du panneau Paramètres dans le formulaire lors de l\'ajout de nouvelles ressources. Après la première fois, cela devient une préférence individuelle de l\'utilisateur.';
$string['configpopup'] = 'Lorsque vous ajoutez une nouvelle ressource qui peut être affichée dans une fenêtre contextuelle, cette option doit-elle être activée par défaut ?';
$string['configpopupdirectories'] = 'Les fenêtres contextuelles devraient-elles afficher les liens de répertoire par défaut?';
$string['configpopupheight'] = 'Quelle hauteur devrait être la hauteur par défaut pour les nouvelles fenêtres popup?';
$string['configpopuplocation'] = 'Les fenêtres contextuelles devraient-elles afficher la barre d\'emplacement par défaut?';
$string['configpopupmenubar'] = 'Les fenêtres contextuelles devraient-elles afficher la barre de menu par défaut?';
$string['configpopupresizable'] = 'Les fenêtres popup devraient-elles être redimensionnables par défaut ?';
$string['configpopupscrollbars'] = 'Les fenêtres contextuelles doivent-elles être défilables par défaut?';
$string['configpopupstatus'] = 'Les fenêtres contextuelles devraient-elles afficher la barre d\'état par défaut?';
$string['configpopuptoolbar'] = 'Les fenêtres contextuelles devraient-elles afficher la barre d\'outils par défaut?';
$string['configpopupwidth'] = 'Quelle largeur devrait être la largeur par défaut pour les nouvelles fenêtres popup ?';
$string['contentheader'] = 'Contenu';
$string['displayoptions'] = 'Options d\'affichage disponibles';
$string['displayselect'] = 'Affichage';
$string['displayselect_help'] = 'This setting, together with the file type and whether the browser allows embedding, determines how the file is displayed. Options may include:

* Automatic - The best display option for the file type is selected automatically
* Embed - The file is displayed within the page below the navigation bar together with the file description and any blocks
* Force download - The user is prompted to download the file
* Open - Only the file is displayed in the browser window
* In pop-up - The file is displayed in a new browser window without menus or an address bar
* In frame - The file is displayed within a frame below the navigation bar and file description
* New window - The file is displayed in a new browser window with menus and an address bar';
$string['displayselect_link'] = 'mod/file/mod';
$string['displayselectexplain'] = 'Choisissez le type d\'affichage, malheureusement tous les types ne conviennent pas à tous les fichiers.';
$string['dnduploadresource'] = 'Créer une ressource de fichier';
$string['encryptedcode'] = 'Code chiffré';
$string['filenotfound'] = 'Dossier introuvable, désolé.';
$string['filterfiles'] = 'Utiliser des filtres sur le contenu du fichier';
$string['filterfilesexplain'] = 'Sélectionnez le type de filtrage de contenu de fichier, veuillez noter que cela peut causer des problèmes pour certaines applets Flash et Java. Assurez-vous que tous les fichiers texte sont en codage UTF-8.';
$string['filtername'] = 'Noms des ressources lien automatique';
$string['forcedownload'] = 'Télécharger la force';
$string['framesize'] = 'Hauteur du cadre';
$string['indicator:cognitivedepth'] = 'Dossier cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une ressource de fichier.';
$string['indicator:cognitivedepthdef'] = 'Dossier cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les ressources du Fichier pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Vue)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Dossier social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une ressource de fichier.';
$string['indicator:socialbreadthdef'] = 'Dossier social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les ressources du dossier au cours de cet intervalle d\'analyse (niveaux = aucune participation, participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['legacyfiles'] = 'Migration d\'un ancien fichier de cours';
$string['legacyfilesactive'] = 'Actif';
$string['legacyfilesdone'] = 'Terminé';
$string['modifieddate'] = 'Modifié {$a}';
$string['modulename'] = 'Fichier';
$string['modulename_help'] = 'The file module enables a teacher to provide a file as a course resource. Where possible, the file will be displayed within the course interface; otherwise students will be prompted to download it. The file may include supporting files, for example an HTML page may have embedded images.

Note that students need to have the appropriate software on their computers in order to open the file.

A file may be used

* To share presentations given in class
* To include a mini website as a course resource
* To provide draft files of software programs so students can edit and submit them for assessment';
$string['modulename_link'] = 'mod/resource/vue';
$string['modulenameplural'] = 'Fichiers';
$string['notmigrated'] = 'Ce type de ressource ({$a}) n\'a pas encore été migré, désolé.';
$string['optionsheader'] = 'Afficher les options';
$string['page-mod-resource-x'] = 'Toute page de module de fichier';
$string['pluginadministration'] = 'Administration du module de fichiers';
$string['pluginname'] = 'Fichier';
$string['popupheight'] = 'Hauteur pop-up (en pixels)';
$string['popupheightexplain'] = 'Spécifie la hauteur par défaut des fenêtres popup.';
$string['popupresource'] = 'Cette ressource doit apparaître dans une fenêtre contextuelle.';
$string['popupresourcelink'] = 'Si c\'est le cas\'t, click here: {$a}';
$string['popupwidth'] = 'Largeur pop-up (en pixels)';
$string['popupwidthexplain'] = 'Spécifie la largeur par défaut des fenêtres popup.';
$string['printintro'] = 'Afficher la description des ressources';
$string['printintroexplain'] = 'Afficher la description des ressources sous le contenu? Certains types d\'affichage peuvent ne pas afficher la description même si elle est activée.';
$string['privacy:metadata'] = 'Le plugin ressource de fichier ne stocke aucune donnée personnelle.';
$string['resource:addinstance'] = 'Ajouter une nouvelle ressource';
$string['resourcecontent'] = 'Fichiers et sous-dossiers';
$string['resourcedetails_sizetype'] = '{$a->size} · {$a->type}';
$string['resourcedetails_sizedate'] = '{$a->size} · {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} · {$a->date}';
$string['resourcedetails_sizetypedate'] = '{$a->size} · {$a->type} · {$a->date}';
$string['resource:exportresource'] = 'Exportations';
$string['resource:view'] = 'Afficher la ressource';
$string['search:activity'] = 'Fichier';
$string['selectmainfile'] = 'Veuillez sélectionner le fichier principal en cliquant sur l\'icône à côté du nom du fichier.';
$string['showdate'] = 'Afficher la date de téléchargement/modifiée';
$string['showdate_desc'] = 'Afficher la date de téléchargement/modifiée sur la page du cours?';
$string['showdate_help'] = 'Displays the upload/modified date beside links to the file.

If there are multiple files in this resource, the start file upload/modified date is displayed.';
$string['showsize'] = 'Afficher la taille';
$string['showsize_help'] = 'Affiche la taille du fichier, comme \'3.1 MB\', beside links to the file.

If there are multiple files in this resource, the total size of all files is displayed.';
$string['showsize_desc'] = 'Afficher la taille du fichier sur la page du cours?';
$string['showtype'] = 'Afficher le type';
$string['showtype_desc'] = 'Afficher le type de fichier (par exemple \'Word document\') on course page?';
$string['showtype_help'] = 'Affiche le type du fichier, tel que \'Word document\', beside links to the file.

If there are multiple files in this resource, the start file type is displayed.

If the file type is not known to the system, it will not display.';
$string['uploadeddate'] = 'Téléchargé {$a}';
