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
 * Strings for component 'search_solr'.
 *
 * @package   search_solr
 * @copyright Prateek Sachan {@link http://prateeksachan.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['connectionerror'] = 'Le serveur Solr spécifié n\'est pas disponible ou l\'index spécifié n\'existe pas';
$string['connectionsettings'] = 'Paramètres de connexion';
$string['errorcreatingschema'] = 'Erreur lors de la création du schéma Solr : {$a}';
$string['errorvalidatingschema'] = 'Erreur de validation Schéma Solr : le champ {$a->fieldname} n\'existe pas. S\'il vous plaît <a href="{$a->setupurl}"> suivre ce lien</a> pour configurer les champs requis.';
$string['errorsolr'] = 'Le moteur de recherche Solr a signalé une erreur : {$a}';
$string['extensionerror'] = 'L\'extension PHP Apache Solr n\'est pas installée. Veuillez vérifier la documentation.';
$string['fileindexing'] = 'Activer l\'indexation des fichiers';
$string['fileindexing_help'] = 'If your Solr install supports it, this feature allows Moodle to send files to be indexed.<br/>
You will need to reindex all site contents after enabling this option for all files to be added.';
$string['fileindexsettings'] = 'Paramètres d\'indexation des fichiers';
$string['maxindexfilekb'] = 'Taille maximale du fichier à indexer (kB)';
$string['maxindexfilekb_help'] = 'Les fichiers supérieurs à ce nombre de kilooctets ne seront pas inclus dans l\'indexation de la recherche. Si vous définissez à zéro, les fichiers de toute taille seront indexés.';
$string['minimumsolr4'] = 'Solr 4.0 est la version minimale requise pour Moodle';
$string['missingconfig'] = 'Votre serveur Apache Solr n\'est pas encore configuré dans Moodle.';
$string['multivaluedfield'] = 'Le champ « {$a} » retourne un tableau au lieu d\'un scalaire. Veuillez supprimer l\'index actuel, en créer un nouveau et lancer setup_schema.php avant d\'indexer les données dans Solr.';
$string['nodatafromserver'] = 'Pas de données du serveur';
$string['pluginname'] = 'Solaire';
$string['privacy:metadata'] = 'Ce plugin envoie des données externes à un moteur de recherche Solr lié. Il ne stocke pas les données localement.';
$string['privacy:metadata:data'] = 'Données personnelles transmises par le sous-système de recherche.';
$string['schemafieldautocreated'] = 'Le champ « {$a} » existe déjà dans le schéma Solr. Vous avez probablement oublié d\'exécuter ce script avant d\'indexer les données et les champs ont été automatiquement créés par Solr. S\'il vous plaît supprimer l\'index actuel, créez un nouveau et exécutez de nouveau setup_schema.php avant d\'indexer les données dans Solr.';
$string['schemasetupfromsolr5'] = 'Votre serveur Solr est inférieur à 5.0. Ce script ne peut définir votre schéma que si votre version Solr est de 5.0 ou plus. Vous devez définir manuellement les champs de votre schéma selon \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Recherche de requêtes';
$string['searchinfo_help'] = 'Le champ à rechercher peut être spécifié en préfixant la requête de recherche avec \'title:\', \'content:\', \'name:\', or \'intro:\'. For example, searching for \'title:news\' would return results with the word \'news\' in the title.

Boolean operators (\'AND\', \'OR\', \'NOT\') may be used to combine or exclude keywords.

Wildcard characters (\'*\' or \'?\' ) may be used to represent characters in the search query.';
$string['setupok'] = 'Le schéma est prêt à être utilisé.';
$string['solrauthpassword'] = 'Mot de passe d\'authentification HTTP';
$string['solrauthuser'] = 'Nom d\'utilisateur d\'authentification HTTP';
$string['solrindexname'] = 'Nom de l\'index';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Délai';
$string['solrhttpconnectiontimeout_desc'] = 'Le délai de connexion HTTP est le temps maximum en secondes permis pour l\'opération de transfert de données HTTP.';
$string['solrinfo'] = 'Solaire';
$string['solrnotselected'] = 'Solr n\'est pas le moteur de recherche configuré';
$string['solrserverhostname'] = 'Nom de l\'hôte';
$string['solrserverhostname_desc'] = 'Nom de domaine du serveur Solr.';
$string['solrsecuremode'] = 'Mode sécurisé';
$string['solrsetting'] = 'Paramètres du solr';
$string['solrsslcainfo'] = 'Nom des certificats SSL CA';
$string['solrsslcainfo_desc'] = 'Nom du dossier contenant un ou plusieurs certificats de l\'AC pour vérifier';
$string['solrsslcapath'] = 'Chemin des certificats SSL CA';
$string['solrsslcapath_desc'] = 'Chemin de répertoire contenant plusieurs certificats CA pour vérifier les pairs avec';
$string['solrsslcert'] = 'Certificat SSL';
$string['solrsslcert_desc'] = 'Nom du fichier vers un certificat privé formaté par PEM';
$string['solrsslkey'] = 'Clé SSL';
$string['solrsslkey_desc'] = 'Nom de fichier vers une clé privée formatée par PEM';
$string['solrsslkeypassword'] = 'Mot de passe clé SSL';
$string['solrsslkeypassword_desc'] = 'Mot de passe pour fichier de clé privée formaté PEM';
