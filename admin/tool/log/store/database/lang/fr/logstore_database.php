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
 * Log store lang strings.
 *
 * @package    logstore_database
 * @copyright  2013 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['buffersize'] = 'Taille du tampon';
$string['buffersize_help'] = 'Nombre d\'entrées de journaux insérées dans une base de données par lots, ce qui améliore les performances.';
$string['conectexception'] = 'Impossible de se connecter à la base de données.';
$string['create'] = 'Créer';
$string['databasesettings'] = 'Paramètres de la base de données';
$string['databasesettings_help'] = 'Détails de connexion pour la base de données du journal externe : {$a}';
$string['databasepersist'] = 'Connexions persistantes aux bases de données';
$string['databaseschema'] = 'Schéma de base de données';
$string['databasecollation'] = 'Collecte de données';
$string['databasehandlesoptions'] = 'Les options de gestion des bases de données';
$string['databasehandlesoptions_help'] = 'La base de données distante gère-t-elle ses propres options?';
$string['databasetable'] = 'Tableau de base de données';
$string['databasetable_help'] = 'Nom de la table où les journaux seront stockés. Cette table devrait avoir une structure identique à celle utilisée par logstore_standard (mdl_logstore_standard_log).';
$string['includeactions'] = 'Inclure les actions de ces types';
$string['includelevels'] = 'Inclure des actions avec ces niveaux d\'éducation';
$string['filters'] = 'Registres des filtres';
$string['filters_help'] = 'Activer les filtres qui excluent certaines actions d\'être enregistrées.';
$string['jsonformat'] = 'Format JSON';
$string['jsonformat_desc'] = 'Utiliser le format JSON standard au lieu des données sérielles PHP dans le \'other\' database field.';
$string['logguests'] = 'Loger les actions des invités';
$string['other'] = 'Autres';
$string['participating'] = 'Participant';
$string['pluginname'] = 'Registre externe des bases de données';
$string['pluginname_desc'] = 'Un plugin journal qui stocke les entrées de journal dans une table de base de données externe.';
$string['privacy:metadata:log'] = 'Une collection d\'événements passés';
$string['privacy:metadata:log:anonymous'] = 'Indique si l\'événement a été signalé comme anonyme';
$string['privacy:metadata:log:eventname'] = 'Le nom de l\'événement';
$string['privacy:metadata:log:ip'] = 'L\'adresse IP utilisée au moment de l\'événement';
$string['privacy:metadata:log:origin'] = 'L\'origine de l\'événement';
$string['privacy:metadata:log:other'] = 'Informations complémentaires sur l\'événement';
$string['privacy:metadata:log:realuserid'] = 'L\'ID de l\'utilisateur réel derrière l\'événement, quand masquer un utilisateur.';
$string['privacy:metadata:log:relateduserid'] = 'L\'ID d\'un utilisateur lié à cet événement';
$string['privacy:metadata:log:timecreated'] = 'Le moment où l\'événement s\'est produit';
$string['privacy:metadata:log:userid'] = 'L\'ID de l\'utilisateur qui a déclenché cet événement';
$string['read'] = 'Lire';
$string['tablenotfound'] = 'Tableau non trouvé';
$string['teaching'] = 'Enseignement';
$string['testsettings'] = 'Connexion d \' essai';
$string['testingsettings'] = 'Test des paramètres de la base de données...';
$string['update'] = 'Mise à jour';

