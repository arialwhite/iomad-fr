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
 * Language strings for qtype_ddmarker.
 * @package   qtype_ddmarker
 * @copyright 2012 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmoreitems'] = 'Blancs pour {non} plus de marqueurs';
$string['alttext'] = 'Texte modifié';
$string['answer'] = 'Réponse';
$string['bgimage'] = 'Image de fond';
$string['coords'] = 'Coordonnées';
$string['correctansweris'] = 'La bonne réponse est : {$a}';
$string['draggableimage'] = 'Image traînable';
$string['draggableitem'] = 'Élément coulissant';
$string['draggableitemheader'] = 'Élément traînable {$a}';
$string['draggableitemtype'] = 'Type';
$string['draggableword'] = 'Texte dragable';
$string['dropbackground'] = 'Image de fond pour glisser des marqueurs sur';
$string['dropzone'] = 'Zone de chute {$a}';
$string['dropzoneheader'] = 'Zones de chute';
$string['dropzones'] = 'Zones de chute';
$string['dropzones_help'] = 'Drop zones may be defined by coordinates, or dragged into position in the preview above.

First selecting a shape (circle, rectangle or polygon) will add a new drop zone shape to the top left of the preview. It may be useful to minimise the Markers section so you can see the preview while editing the Drop zones.

Editing a shape starts with a click on the shape in the preview to show the editing handles. You can move the shape using the center handle, or adjust the shape\'s dimensions with the vertex handles.

For polygons only, holding the control button (command button on a Mac) while clicking on a vertex handle will add a new vertex to the polygon. Please keep a polygon shape as simple as possible, without crossing lines.

For information the three shapes use coordinates in this way:

* Circle: centre_x, centre_y; radius<br />for example: <code>80,100;50</code>
* Rectangle: top_left_x, top_left_y; width, height<br />for example: <code>20,60;80,40</code>
* Polygon: x1, y1; x2, y2; ...; xn, yn<br />for example: <code>20,60;100,60;20,100</code>

Selecting a Marker text will add that text to the shape in the preview.';
$string['formerror_dragrequired'] = 'Vous devez ajouter au moins un marqueur à cette question.';
$string['formerror_droprequired'] = 'Vous devez définir au moins une zone de chute pour cette question.';
$string['followingarewrong'] = 'Marqueurs placés dans la mauvaise zone : {$a}.';
$string['followingarewrongandhighlighted'] = 'Marqueurs mal placés : {$a}. Les marqueurs en évidence sont maintenant affichés avec les bons emplacements. Cliquez sur le marqueur pour mettre en évidence la zone autorisée.';
$string['formerror_nobgimage'] = 'Vous devez sélectionner une image à utiliser comme arrière-plan pour la zone de glisser-déposer.';
$string['formerror_noitemselected'] = 'Vous avez spécifié une zone de chute, mais pas choisi un marqueur qui doit être traîné vers la zone.';
$string['formerror_nosemicolons'] = 'Il n\'y a pas de point-virgule dans vos coordonnées. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Seules les étiquettes « {$a} » sont autorisées dans l\'étiquette pour un marqueur.';
$string['formerror_onlyusewholepositivenumbers'] = 'N\'utilisez que des nombres entiers positifs pour spécifier les coordonnées x, y et/ou la largeur et la hauteur des formes. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Pour une forme de polygone, vous devez spécifier au moins 3 points. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Vous avez entré les mêmes coordonnées deux fois. Chaque point doit être unique. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'La forme que vous avez définie sort des limites de l\'image de fond.';
$string['formerror_toomanysemicolons'] = 'Les coordonnées que vous avez spécifiées sont trop nombreuses. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'La largeur et la hauteur que vous avez spécifiées ne sont pas reconnaissables. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Les coordonnées x,y que vous avez spécifiées ne sont pas reconnaissables. Vos coordonnées pour un {$a->forme} doivent être exprimées comme - {$a->coordsstring}.';
$string['infinite'] = 'Infinite';
$string['marker'] = 'Marqueur';
$string['marker_n'] = 'Marqueur {non}';
$string['markers'] = 'Marqueurs';
$string['nolabel'] = 'Pas de texte d\'étiquette';
$string['noofdrags'] = 'Numéro';
$string['pleasedragatleastonemarker'] = 'Votre réponse n\'est pas complète; vous devez placer au moins un marqueur sur l\'image.';
$string['pluginname'] = 'Marqueurs de glisser-déposer';
$string['pluginname_help'] = 'Les marqueurs de glisser-déposer obligent le répondant à glisser les étiquettes de texte et à les déposer dans des zones de dépôt définies sur une image de fond.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Ajouter des marqueurs de glisser-déposer';
$string['pluginnameediting'] = 'Modifier les marqueurs de glisser-déposer';
$string['pluginnamesummary'] = 'Markers are dragged and dropped onto a background image.

Note: This question type is not accessible to users who are visually impaired.';
$string['previewareaheader'] = 'Aperçu';
$string['previewareamessage'] = 'Sélectionnez un fichier d\'image de fond, entrez des étiquettes de texte pour les marqueurs et définissez les zones de dépôt de l\'image de fond vers laquelle ils doivent être traînés.';
$string['privacy:metadata'] = 'Faites glisser et déposez les marqueurs de type question plugin permet aux auteurs de questions de définir les options par défaut comme préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque essai incorrect lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Indique si les réponses doivent être automatiquement modifiées.';
$string['refresh'] = 'Actualiser l\'aperçu';
$string['clearwrongparts'] = 'Replacer les marqueurs mal placés à la position de départ par défaut sous l\'image';
$string['shape'] = 'Forme';
$string['shape_circle'] = 'Cercle';
$string['shape_circle_lowercase'] = 'cercle';
$string['shape_circle_coords'] = 'x,y;r (où x,y sont les coordonnées du centre du cercle et r est le rayon)';
$string['shape_rectangle'] = 'Rectangle';
$string['shape_rectangle_lowercase'] = 'rectangle';
$string['shape_rectangle_coords'] = 'x,y;w,h (où x,y sont les coordonnées du coin supérieur gauche du rectangle et w et h sont la largeur et la hauteur du rectangle)';
$string['shape_polygon'] = 'Polygone';
$string['shape_polygon_lowercase'] = 'polygone';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (où x1, y1 sont les coordonnées du premier vertex, x2, y2 sont les coordonnées du second etc.) Il n\'est pas nécessaire de répéter les coordonnées du premier vertex pour fermer le polygone.)';
$string['showmisplaced'] = 'Mettre en évidence les zones de chute qui n\'ont pas fait tomber le bon marqueur sur elles';
$string['shuffleimages'] = 'Chaque fois que la question est tentée';
$string['stateincorrectlyplaced'] = 'Indiquer quels marqueurs sont mal placés';
$string['summariseplace'] = '(En milliers de dollars des États-Unis)';
$string['summariseplaceno'] = 'Zone de chute {$a}';
$string['ytop'] = 'Top';
