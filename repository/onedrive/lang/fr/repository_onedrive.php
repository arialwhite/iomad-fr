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
 * Language file definitions for onedrive repository
 *
 * @package    repository_onedrive
 * @copyright  2012 Lancaster University Network Services Ltd
 * @author     Dan Poltawski <dan.poltawski@luns.net.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['access'] = 'Accès';
$string['both'] = 'Interne et externe';
$string['cachedef_folder'] = 'IDs de fichiers OneDrive pour les dossiers dans le compte système';
$string['configplugin'] = 'Configurer un Module d\'entraînement';
$string['defaultreturntype'] = 'Type de retour par défaut';
$string['external'] = 'Externe (seulement les liens stockés dans Moodle)';
$string['fileoptions'] = 'Les types et par défaut des fichiers retournés sont configurables ici. Notez que tous les fichiers liés externement seront mis à jour de sorte que le propriétaire soit le compte système Moodle.';
$string['internal'] = 'Interne (fichiers stockés dans Moodle)';
$string['issuer_help'] = 'Sélectionnez le service OAuth 2 configuré pour parler à l\'API OneDrive. Si le service n\'existe pas encore, vous devrez le créer.';
$string['issuer'] = 'Service OAuth 2';
$string['mysitenotfound'] = 'Vous ne vous êtes jamais connecté à OneDrive. Vous devez vous connecter à OneDrive au moins une fois avant de pouvoir l\'utiliser avec Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration"> Configuration des services OAuth 2</a>';
$string['owner'] = 'Propriété de : {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['removetempaccesstask'] = 'Supprimer l\'accès temporaire à l\'écriture des liens contrôlés';
$string['searchfor'] = 'Rechercher {$a}';
$string['servicenotenabled'] = 'Accès non configuré.';
$string['onedrive:view'] = 'Affichage du dépôt OneDrive';
$string['supportedreturntypes'] = 'Fichiers pris en charge';
$string['privacy:metadata:repository_onedrive'] = 'Le dépôt Microsoft OneDrive stocke des subventions d\'accès temporaire et transmet les données utilisateur de Moodle au système distant.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'La requête de recherche de texte de dépôt Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Le Microsoft OneDrive avec un ID de subvention d\'accès temporaire.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'L\'ID d\'autorisation d\'accès temporaire de Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'La date/heure de création de la subvention d\'accès temporaire de Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'La date/heure de modification de la subvention d\'accès temporaire de Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'L\'ID de l\'utilisateur modifiant la subvention d\'accès temporaire de Microsoft OneDrive.';

// Deprecated since Moodle 4.5.
$string['confirmimportskydrive'] = 'Voulez-vous vraiment importer tous les fichiers du dépôt Microsoft SkyDrive vers le dépôt Microsoft OneDrive ? Le dépôt Microsoft OneDrive doit être configuré et travailler pour les fichiers importés pour continuer à fonctionner comme avant. Avertissement : Cette action ne peut être annulée !';
$string['importskydrivefiles'] = 'Importer les fichiers du dépôt Microsoft SkyDrive';
$string['skydrivefilesexist'] = 'Le dépôt Microsoft SkyDrive est activé mais il a été déprécié. Assurez-vous de migrer les fichiers de SkyDrive vers le dépôt OneDrive dès que possible. Dans Moodle 4.4 il ne sera plus possible.';
$string['skydrivefilesimported'] = 'Tous les fichiers ont été importés du dépôt Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Certains fichiers ne pouvaient pas être importés du dépôt Microsoft SkyDrive.';
