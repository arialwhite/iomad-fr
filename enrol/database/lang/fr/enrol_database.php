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
 * Strings for component 'enrol_database', language 'en'.
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['database:config'] = 'Configurer les instances d\'inscription de la base de données';
$string['database:unenrol'] = 'Unenrol utilisateurs suspendus';
$string['dbencoding'] = 'Encodage de la base de données';
$string['dbhost'] = 'Hôte de base de données';
$string['dbhost_desc'] = 'Saisissez l\'adresse IP du serveur de base de données ou le nom de l\'hôte. Utilisez un nom DSN système si vous utilisez ODBC. Utilisez un DSN d\'AOP si vous utilisez un AOP.';
$string['dbname'] = 'Nom de la base de données';
$string['dbname_desc'] = 'Laisser vide si vous utilisez un nom DSN dans l\'hôte de la base de données.';
$string['dbpass'] = 'Mot de passe de la base de données';
$string['dbsetupsql'] = 'Commande de configuration de la base de données';
$string['dbsetupsql_desc'] = 'Commande SQL pour la configuration spéciale de la base de données, souvent utilisée pour configurer l\'encodage de communication - par exemple pour MySQL et PostgreSQL: <em>SET NOMS \'utf8\'</em>';
$string['dbsybasequoting'] = 'Utiliser les cotes sybase';
$string['dbsybasequoting_desc'] = 'Sybase style citation unique échappant - nécessaire pour Oracle, MS SQL et d\'autres bases de données. Ne pas utiliser pour MySQL!';
$string['dbtype'] = 'Pilote de base de données';
$string['dbtype_desc'] = 'Nom du pilote de base de données ADOdb, type du moteur de base de données externe.';
$string['dbuser'] = 'Utilisateur de la base de données';
$string['debugdb'] = 'Déboguer ADOdb';
$string['debugdb_desc'] = 'Déboguer la connexion ADOdb à la base de données externe - utiliser lors de l\'obtention de la page vide pendant la connexion. Ne convient pas aux sites de production!';
$string['defaultcategory'] = 'Catégorie de cours par défaut';
$string['defaultcategory_desc'] = 'Catégorie par défaut pour les cours créés automatiquement. Utilisé quand aucune nouvelle catégorie n\'est spécifiée ou non trouvée.';
$string['defaultrole'] = 'Rôle par défaut';
$string['defaultrole_desc'] = 'Le rôle qui sera assigné par défaut si aucun autre rôle n\'est spécifié dans la table externe.';
$string['ignorehiddencourses'] = 'Ignorer les cours cachés';
$string['ignorehiddencourses_desc'] = 'Si les utilisateurs activés ne seront pas inscrits à des cours qui sont fixés pour être indisponibles pour les étudiants.';
$string['localcategoryfield'] = 'Catégorie locale';
$string['localcoursefield'] = 'Domaine de cours local';
$string['localrolefield'] = 'Champ de rôle local';
$string['localuserfield'] = 'Champ utilisateur local';
$string['newcourseenddate'] = 'Nouveau champ de fin de cours';
$string['newcourseenddate_desc'] = 'Indiquez une date dans le format aaa-mm-jj ou l\'heure Unix, ou laissez en blanc la date de fin de cours à calculer à partir de la durée de cours configurée.';
$string['newcoursetable'] = 'Tableau des nouveaux cours à distance';
$string['newcoursetable_desc'] = 'Indiquez le nom de la table qui contient la liste des cours à créer automatiquement. Vide signifie qu\'aucun cours n\'est créé.';
$string['newcoursecategory'] = 'Nouvelle catégorie de cours';
$string['newcoursefullname'] = 'Nouveau champ nom complet du cours';
$string['newcourseidnumber'] = 'Nouveau champ de numéro d\'identification du cours';
$string['newcoursestartdate'] = 'Nouveau champ de date de début du cours';
$string['newcoursestartdate_desc'] = 'Indiquez une date dans le format yyyy-mm-dd ou l\'heure Unix, ou laissez la date de début du cours vide à la date actuelle.';
$string['newcourseshortname'] = 'Nouveau champ nom court du cours';
$string['pluginname'] = 'Base de données externe';
$string['pluginname_desc'] = 'Vous pouvez utiliser une base de données externe (de presque tout type) pour contrôler vos inscriptions. On suppose que votre base de données externe contient au moins un champ contenant un ID de cours et un champ contenant un ID utilisateur. Ceux-ci sont comparés aux champs que vous choisissez dans le cours local et les tables utilisateur.';
$string['remotecoursefield'] = 'Champ de cours à distance';
$string['remotecoursefield_desc'] = 'Le nom du champ dans la table distante que nous utilisons pour correspondre aux entrées dans la table de cours.';
$string['remoteenroltable'] = 'Tableau des inscriptions à distance';
$string['remoteenroltable_desc'] = 'Indiquez le nom de la table qui contient la liste des inscriptions des utilisateurs. Vide signifie pas de synchronisation d\'inscription des utilisateurs.';
$string['remoteotheruserfield'] = 'Champ Remote Autre Utilisateur';
$string['remoteotheruserfield_desc'] = 'Le nom du champ dans la table distante que nous utilisons pour indiquer les tâches « Autre utilisateur ».';
$string['remoterolefield'] = 'Champ à distance';
$string['remoterolefield_desc'] = 'Le nom du champ dans la table distante que nous utilisons pour correspondre aux entrées dans la table des rôles.';
$string['remoteuserfield'] = 'Champ utilisateur distant';
$string['settingsheaderdb'] = 'Connexion externe à la base de données';
$string['settingsheaderlocal'] = 'Cartographie locale des champs';
$string['settingsheaderremote'] = 'Synchronisation des inscriptions à distance';
$string['settingsheadernewcourses'] = 'Création de nouveaux cours';
$string['syncenrolmentstask'] = 'Synchroniser la tâche des inscriptions externes dans les bases de données';
$string['remoteuserfield_desc'] = 'Le nom du champ dans la table distante que nous utilisons pour correspondre aux entrées dans la table utilisateur.';
$string['templatecourse'] = 'Nouveau modèle de cours';
$string['templatecourse_desc'] = 'Optionnel : les cours créés automatiquement peuvent copier leurs paramètres à partir d\'un cours modèle. Saisissez ici le nom abrégé du cours modèle.';
$string['privacy:metadata'] = 'Le plugin externe d\'inscription à la base de données ne stocke aucune donnée personnelle.';
