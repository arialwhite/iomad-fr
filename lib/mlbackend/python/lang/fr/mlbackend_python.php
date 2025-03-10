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
 * Strings for component 'mlbackend_python'
 *
 * @package   mlbackend_python
 * @copyright 2017 David Monllao {@link http://www.davidmonllao.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['errornoconfigdata'] = 'La configuration du serveur n\'est pas terminée.';
$string['errorserver'] = 'Erreur du serveur {$a}';
$string['host'] = 'Hébergement';
$string['hostdesc'] = 'Hébergement';
$string['packageinstalledshouldbe'] = 'Le paquet moodlemlbackend Python doit être mis à jour. La version requise est « {$a->required} » et la version installée est « {$a->installed} ».';
$string['packageinstalledtoohigh'] = 'Le paquet moodlemlbackend Python n\'est pas compatible avec cette version de Moodle. La version requise est « {$a->required} » ou plus longtemps qu\'elle est compatible avec l\'API. La version installée « {$a->installed} » est trop élevée.';
$string['pluginname'] = 'Python machine apprentissage moteur';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'Le plugin Python machine learning backend ne stocke aucune donnée personnelle.';
$string['pythonpackagenotinstalled'] = 'Le paquet moodlemlbackend Python n\'est pas installé ou il y a un problème avec lui. Veuillez exécuter « {$a} » depuis l\'interface de la ligne de commande pour plus d\'informations.';
$string['pythonpathnotdefined'] = 'Le chemin vers votre binaire exécutable Python n\'a pas été défini. Veuillez visiter « {$a} » pour le définir.';
$string['serversettingsinfo'] = 'Si \'Use a server\' is enabled, the server settings will be displayed.';
$string['username'] = 'Nom d\'utilisateur';
$string['usernamedesc'] = 'Chaîne de caractères utilisée comme nom d\'utilisateur pour communiquer entre le serveur Moodle et le serveur Python.';
$string['password'] = 'Mot de passe';
$string['passworddesc'] = 'Chaîne de caractères utilisée comme mot de passe pour communiquer entre le serveur Moodle et le serveur Python.';
$string['secure'] = 'Utiliser HTTPS';
$string['securedesc'] = 'Indique s\'il faut utiliser HTTP ou HTTPS.';
$string['useserver'] = 'Utiliser un serveur';
$string['useserverdesc'] = 'Le paquet Python d\'apprentissage automatique n\'est pas installé sur le serveur web mais sur un serveur différent.';
$string['tensorboardinfo'] = 'Lancez TensorBoard depuis la ligne de commande en tapant tensorboard --logdir=\'{$a}\' in your web server.';