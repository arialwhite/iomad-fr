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
 * Language strings' definition for Nextcloud repository.
 *
 * @package    repository_nextcloud
 * @copyright  2017 Project seminar (Learnweb, University of Münster)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// General.
$string['pluginname'] = 'Prochaincloud';
$string['configplugin'] = 'Configuration du dépôt Nextcloud';
$string['nextcloud'] = 'Prochaincloud';
$string['nextcloud:view'] = 'Afficher le prochain nuage';
$string['pluginname_help'] = 'Dépôt Nextcloud';

// Settings.
$string['issuervalidation_without'] = 'Vous n\'avez pas encore sélectionné un serveur Nextcloud comme émetteur OAuth 2.';
$string['issuervalidation_valid'] = 'Actuellement, l\'émetteur {$a} est actif.';
$string['issuervalidation_invalid'] = 'Actuellement, l\'émetteur {$a} est actif, mais il ne met pas en œuvre tous les paramètres nécessaires. Le dépôt ne fonctionnera pas.';
$string['right_issuers'] = 'Les émetteurs suivants implémentent les paramètres requis : <br> {$a}';
$string['no_right_issuers'] = 'Aucun des émetteurs actuels n\'applique tous les paramètres requis. Veuillez inscrire un émetteur approprié.';
$string['chooseissuer'] = 'Émetteur';
$string['chooseissuer_help'] = 'Pour ajouter un nouvel émetteur, allez dans Administration du site / Serveur / Services OAuth 2.';
$string['foldername'] = 'Nom du dossier créé dans les utilisateurs de Nextcloud\' private space that holds all access-controlled links.';
$string['foldername_help'] = 'To ensure that users find files shared with them, shares are saved into a specific folder.

This setting determines the name of the folder. It is recommended to choose a name associated with your Moodle instance.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration"> Configuration des services OAuth 2</a>';
$string['privacy:metadata'] = 'Le plugin dépôt Nextcloud ne stocke aucune donnée personnelle ni ne transmet les données utilisateur au système distant.';
$string['internal'] = 'Interne (fichiers stockés dans Moodle)';
$string['external'] = 'Externe (seulement les liens stockés dans Moodle)';
$string['both'] = 'Interne et externe';
$string['supportedreturntypes'] = 'Fichiers pris en charge';
$string['defaultreturntype'] = 'Type de retour par défaut';
$string['fileoptions'] = 'Les types et par défaut des fichiers retournés sont configurables ici. Notez que tous les fichiers liés externement seront mis à jour de sorte que le propriétaire soit le compte système Moodle.';

// Exceptions.
$string['configuration_exception'] = 'Une erreur dans la configuration du client OAuth 2 s\'est produite : {$a}';
$string['request_exception'] = 'Une requête à {$a->instance} a échoué. {$a->message d\'erreur}';
$string['requestnotexecuted'] = 'La demande n\'a pas pu être exécutée. Si cela se produit à plusieurs reprises, veuillez contacter l\'administrateur du site.';
$string['notauthorized'] = 'Vous n\'êtes pas autorisé à exécuter cette requête. Veuillez vous assurer que vous êtes authentifié avec le compte correct.';
$string['contactadminwith'] = 'La mesure demandée n\'a pas pu être exécutée. Si cela se produit à plusieurs reprises, veuillez communiquer avec l\'administrateur du site avec les renseignements supplémentaires suivants :<br>"<i>{$a}</i>".';
$string['cannotconnect'] = 'L\'utilisateur ne pouvait pas être authentifié. Veuillez vous connecter puis télécharger le fichier.';
$string['filenotaccessed'] = 'Le dossier demandé n\'a pas pu être consulté. Veuillez vérifier si vous avez choisi un fichier valide et si vous êtes authentifié avec le bon compte.';
$string['couldnotmove'] = 'Le fichier demandé ne peut pas être déplacé dans le dossier {$a}.';
$string['invalidresponse'] = 'Réponse du serveur non valide.';
$string['noclientconnection'] = 'Les clients d\'OAuth ne pouvaient pas être connectés.';
$string['pathnotcreated'] = 'Le chemin du dossier {$a} n\'a pas pu être créé dans le compte système.';
$string['endpointnotdefined'] = 'Point {$a} non défini.';

// Warnings.
$string['externalpubliclinkwarning'] = 'Avertissement : Ce dossier deviendra public.';
