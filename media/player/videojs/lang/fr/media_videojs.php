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
 * Strings for plugin 'media_videojs'
 *
 * @package   media_videojs
 * @copyright 2016 Marina Glancy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Classe CSS pour audio';
$string['audioextensions'] = 'Extensions de fichiers audio';
$string['configaudiocssclass'] = 'Une classe CSS qui sera ajoutée à l\'élément &lt;audio&gt;.';
$string['configaudioextensions'] = 'Une liste séparée par des virgules des extensions de fichiers audio prises en charge. Vidéo JS va essayer d\'utiliser le navigateur\'s native video player when available or native VideoJS functionality.';
$string['configlimitsize'] = 'Si activé, et la largeur et la hauteur ne sont pas spécifiées, la vidéo s\'affichera avec la largeur et la hauteur par défaut. Sinon, il s\'étendra jusqu\'à la largeur maximale possible.';
$string['configvideocssclass'] = 'Une classe CSS qui sera ajoutée à l\'élément &lt;video&gt;. Par exemple, la classe CSS "vjs-big-play-centered" placera le bouton de lecture au milieu. Pour plus de détails, y compris comment définir une peau personnalisée, voir docs.videojs.com.';
$string['configvideoextensions'] = 'Une liste séparée par virgule des extensions de fichiers vidéo prises en charge. Vidéo JS va essayer d\'utiliser le navigateur\'s native video player when available.';
$string['configyoutube'] = 'Utilisez VideoJS pour lire des vidéos YouTube. Notez que les playlists YouTube ne sont pas encore prises en charge par VideoJS.';
$string['limitsize'] = 'Taille limite';
$string['pluginname'] = 'Lecteur vidéoJS';
$string['pluginname_help'] = 'Un wrapper JavaScript pour les fichiers vidéo lus par le navigateur\'s native video player. (Format support depends on the browser.)';
$string['privacy:metadata'] = 'Le plugin multimédia VideoJS ne stocke aucune donnée personnelle.';
$string['videoextensions'] = 'Extensions de fichiers vidéo';
$string['videocssclass'] = 'Classe CSS pour vidéo';
$string['youtube'] = 'Vidéos YouTube';
