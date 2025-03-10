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
 * Language strings.
 *
 * @package     factor_grace
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['info'] = 'Permet la connexion sans autre facteur pour une période de temps spécifiée.';
$string['pluginname'] = 'Période de grâce';
$string['preferences'] = 'Préférences de l\'utilisateur';
$string['privacy:metadata'] = 'Le plugin Grace Period factor ne stocke aucune donnée personnelle';
$string['redirectsetup'] = 'Vous devez terminer la configuration pour l\'authentification multi-facteurs avant de pouvoir procéder.';
$string['revokeexpiredfactors'] = 'Facteurs du délai de grâce expiré';
$string['settings:customwarning'] = 'Contenu de la bannière d\'avertissement';
$string['settings:customwarning_help'] = 'Ajoutez du contenu ici pour remplacer la notification d\'avertissement de grâce par un contenu HTML personnalisé. Ajouter {timeremaining} dans le texte le remplacera par la durée de grâce actuelle pour l\'utilisateur, et {setuplink} remplacera par l\'URL de la page de configuration pour l\'utilisateur.';
$string['settings:forcesetup'] = 'Configuration du facteur de force';
$string['settings:forcesetup_help'] = 'Force un utilisateur à la page des préférences à configurer l\'authentification multi-facteurs lorsque le délai de grâce expire. Si non vérifié, les utilisateurs seront incapables d\'authentifier à l\'expiration du délai de grâce.';
$string['settings:graceperiod'] = 'Période de grâce';
$string['settings:graceperiod_help'] = 'Période pendant laquelle les utilisateurs peuvent accéder au site sans facteurs configurés et activés.';
$string['settings:ignorelist'] = 'Facteurs ignorés';
$string['settings:ignorelist_help'] = 'La période de grâce ne donnera pas de points s\'il y a d\'autres facteurs que les utilisateurs peuvent utiliser pour authentifier avec l\'authentification multi-facteurs. Tous les facteurs ici ne seront pas comptés par la période Grace pour décider de donner des points. Cela peut permettre à Grace de permettre l\'authentification si un autre facteur comme le courriel, a des problèmes de configuration ou de système.';
$string['setupfactors'] = 'Vous êtes actuellement dans le délai de grâce, et peut ne pas avoir suffisamment de facteurs mis en place pour vous connecter une fois que le délai de grâce expire. Allez à {$a->url} pour vérifier votre statut d\'authentification et configurer plus de facteurs d\'authentification. Votre délai de grâce expire dans {$a->time}.';
$string['summarycondition'] = 'est dans le délai de grâce';
