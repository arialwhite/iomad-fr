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
 * Strings for component 'url', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    mod_url
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allowvariables'] = 'Autoriser les variables URL';
$string['allowvariables_desc'] = 'Permettre l\'ajout de variables aux URLs. Les variables vous permettent de transmettre des informations internes, telles que l\'utilisateur\'s name, as part of the URL. Be aware of potential privacy risks when using this feature.';
$string['clicktoopen'] = 'Cliquez sur {$a} pour ouvrir la ressource.';
$string['configdisplayoptions'] = 'Sélectionnez toutes les options qui devraient être disponibles, les paramètres existants ne sont pas modifiés. Maintenez la touche CTRL pour sélectionner plusieurs champs.';
$string['configframesize'] = 'Lorsqu\'une page Web ou un fichier téléchargé est affiché dans un cadre, cette valeur est la hauteur (en pixels) du cadre supérieur (qui contient la navigation).';
$string['configrolesinparams'] = 'Les noms de rôles personnalisés (à partir des paramètres du cours) devraient-ils être disponibles en tant que variables pour les paramètres d\'URL?';
$string['configsecretphrase'] = 'Cette phrase secrète est utilisée pour produire une valeur de code chiffrée qui peut être envoyée à certains serveurs comme paramètre. Le code chiffré est produit par une valeur md5 de l\'adresse IP utilisateur actuelle concaténée avec votre phrase secrète. ie code = md5(IP.secretphrase). Veuillez noter que ce n\'est pas fiable car l\'adresse IP peut changer et est souvent partagée par différents ordinateurs.';
$string['contentheader'] = 'Contenu';
$string['createurl'] = 'Créer une URL';
$string['displayoptions'] = 'Options d\'affichage disponibles';
$string['displayselect'] = 'Affichage';
$string['displayselect_help'] = 'This setting, together with the URL file type and whether the browser allows embedding, determines how the URL is displayed. Options may include:

* Automatic - The best display option for the URL is selected automatically
* Embed - The URL is displayed within the page below the navigation bar together with the URL description and any blocks
* Open - Only the URL is displayed in the browser window
* In pop-up - The URL is displayed in a new browser window without menus or an address bar
* In frame - The URL is displayed within a frame below the navigation bar and URL description
* New window - The URL is displayed in a new browser window with menus and an address bar';
$string['displayselectexplain'] = 'Choisissez le type d\'affichage, malheureusement tous les types ne conviennent pas à toutes les URL.';
$string['externalurl'] = 'URL externe';
$string['framesize'] = 'Hauteur du cadre';
$string['invalidstoredurl'] = 'Impossible d\'afficher cette ressource, l\'URL est invalide.';
$string['chooseavariable'] = 'Choisissez une variable...';
$string['indicator:cognitivedepth'] = 'URL cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une ressource URL.';
$string['indicator:cognitivedepthdef'] = 'URL cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les ressources URL pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Vue)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'URL sociale';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une ressource URL.';
$string['indicator:socialbreadthdef'] = 'URL sociale';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les ressources de l\'URL pendant cet intervalle d\'analyse (Niveau = Pas de participation, Participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['invalidurl'] = 'L\'URL saisie est invalide';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'The URL module enables a teacher to provide a web link as a course resource. Anything that is freely available online, such as documents or images, can be linked to; the URL doesn’t have to be the home page of a website. The URL of a particular web page may be copied and pasted or a teacher can use the file picker and choose a link from a repository such as Flickr, YouTube or Wikimedia (depending upon which repositories are enabled for the site).

There are a number of display options for the URL, such as embedded or opening in a new window and advanced options for passing information, such as a student\'s name, to the URL if required.

Note that URLs can also be added to any other resource or activity type through the text editor.';
$string['modulename_link'] = 'mod/url/vue';
$string['modulenameplural'] = 'URLs';
$string['name'] = 'Nom';
$string['name_help'] = 'This will serve as the link text for the URL.

Enter a meaningful text that concisely describes the URL\'s purpose.

Avoid using the word "link". This will help screen reader users as screen readers announce links (e.g. "Moodle.org, link") so there\'s no need to include the word "link" in the name field.';
$string['page-mod-url-x'] = 'Toute page de module URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variables URL';
$string['parametersheader_help'] = 'Cette section vous permet de passer des informations internes dans le cadre de l\'URL. Ceci est utile si l\'URL est une page Web interactive qui prend des paramètres, et vous voulez passer quelque chose comme le nom de l\'utilisateur actuel, par exemple. Saisissez le nom de l\'URL\'s parameter in the text box then select the corresponding site variable.';
$string['pluginadministration'] = 'Administration du module URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Hauteur pop-up (en pixels)';
$string['popupheightexplain'] = 'Spécifie la hauteur par défaut des fenêtres popup.';
$string['popupwidth'] = 'Largeur pop-up (en pixels)';
$string['popupwidthexplain'] = 'Spécifie la largeur par défaut des fenêtres popup.';
$string['printintro'] = 'Afficher la description de l\'URL';
$string['printintroexplain'] = 'Afficher la description URL sous le contenu? Certains types d\'affichage peuvent ne pas afficher la description même si elle est activée.';
$string['privacy:metadata'] = 'Le plugin ressource URL ne stocke aucune donnée personnelle.';
$string['rolesinparams'] = 'Noms de rôles comme variables URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL du serveur';
$string['url:addinstance'] = 'Ajouter une nouvelle ressource URL';
$string['url:view'] = 'Afficher l\'URL';
