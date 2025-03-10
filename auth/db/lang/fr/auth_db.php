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
 * Strings for component 'auth_db', language 'en'.
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_dbcantconnect'] = 'Impossible de se connecter à la base de données d\'authentification spécifiée...';
$string['auth_dbdebugauthdb'] = 'Déboguer ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Déboguer la connexion ADOdb à la base de données externe - utiliser lors de l\'obtention de la page vide pendant la connexion. Ne convient pas aux sites de production.';
$string['auth_dbdeleteuser'] = 'Utilisateur supprimé {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Erreur lors de la suppression de l\'utilisateur {$a}';
$string['auth_dbdescription'] = 'Cette méthode utilise une table de base de données externe pour vérifier si un nom d\'utilisateur et un mot de passe sont valides. Si le compte est nouveau, les informations provenant d\'autres champs peuvent également être copiées dans Moodle.';
$string['auth_dbextencoding'] = 'Encodage externe db';
$string['auth_dbextencodinghelp'] = 'Encodage utilisé dans la base de données externe';
$string['auth_dbextrafields'] = 'Ces champs sont facultatifs. Vous pouvez choisir de pré-remplir certains champs utilisateurs de Moodle avec des informations provenant des champs <b>de base de données externes</b> que vous spécifiez ici. <p>Si vous laissez ces blancs, les valeurs par défaut seront utilisées.</p><p> Dans les deux cas, l\'utilisateur pourra modifier tous ces champs après leur connexion.</p>';
$string['auth_dbfieldpass'] = 'Nom du champ contenant les mots de passe';
$string['auth_dbfieldpass_key'] = 'Champ mot de passe';
$string['auth_dbfielduser'] = 'Nom du champ contenant les noms d\'utilisateur. Ce champ doit être un type de données varchar.';
$string['auth_dbfielduser_key'] = 'Nom d\'utilisateur';
$string['auth_dbhost'] = 'L\'ordinateur qui héberge le serveur de base de données. Utilisez une entrée DSN système si vous utilisez ODBC. Utilisez une entrée AOP DSN si vous utilisez AOP.';
$string['auth_dbhost_key'] = 'Hébergement';
$string['auth_dbchangepasswordurl_key'] = 'URL de changement de mot de passe';
$string['auth_dbinsertuser'] = 'Utilisateur inséré {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Erreur d\'insertion de l\'utilisateur {$a->nom d\'utilisateur} - l\'utilisateur avec ce nom d\'utilisateur a déjà été créé par \'{$a->auth}\' plugin.';
$string['auth_dbinsertusererror'] = 'Erreur d\'insertion de l\'utilisateur {$a}';
$string['auth_dbname'] = 'Nom de la base de données. Laisser vide si vous utilisez un DSN de l\'ODBC. Laisser vide si votre DSN PDO contient déjà le nom de la base de données.';
$string['auth_dbname_key'] = 'Nom DB';
$string['auth_dbpass'] = 'Mot de passe correspondant au nom d\'utilisateur ci-dessus';
$string['auth_dbpass_key'] = 'Mot de passe';
$string['auth_dbpasstype'] = '<p>Précisez le format que le champ de mot de passe utilise.</p> <p>Utilisation \'internal\' if you want the external database to manage usernames and email addresses, but Moodle to manage passwords. If you use \'internal\', you must provide a populated email address field in the external database, and you must enable the \auth_db\task\sync_users scheduled task. Moodle will send an email to new users with a temporary password.</p>';
$string['auth_dbpasstype_key'] = 'Format du mot de passe';
$string['auth_dbreviveduser'] = 'Utilisateur renouvelé {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Erreur de relance de l\'utilisateur {$a}';
$string['auth_dbsaltedcrypt'] = 'Crypte de hachage de cordes à sens unique';
$string['auth_dbsetupsql'] = 'Commande de configuration SQL';
$string['auth_dbsetupsqlhelp'] = 'Commande SQL pour la configuration spéciale de la base de données, souvent utilisée pour configurer l\'encodage de communication - par exemple pour MySQL et PostgreSQL: <em>SET NOMS \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Utilisateur suspendu {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Erreur de suspension de l\'utilisateur {$a}';
$string['auth_dbsybasequoting'] = 'Utiliser les cotes sybase';
$string['auth_dbsybasequotinghelp'] = 'Sybase style citation unique échappant - nécessaire pour Oracle, MS SQL et d\'autres bases de données. Ne pas utiliser pour MySQL!';
$string['auth_dbsyncuserstask'] = 'Synchroniser la tâche des utilisateurs';
$string['auth_dbtable'] = 'Nom du tableau dans la base de données';
$string['auth_dbtable_key'] = 'Tableau';
$string['auth_dbtype'] = 'Le type de base de données (voir la documentation <a href="http://adodb.org/dokuwiki/doku.php" cible="_blank"> ADOdb - Calque d\'abstraction de la base de données pour PHP</a> pour plus de détails).';
$string['auth_dbtype_key'] = 'Base de données';
$string['auth_dbupdateusers'] = 'Mettre à jour les utilisateurs';
$string['auth_dbupdateusers_description'] = 'En plus d\'insérer de nouveaux utilisateurs, mettez à jour les utilisateurs existants.';
$string['auth_dbupdatinguser'] = 'Mise à jour de l\'utilisateur {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Nom d\'utilisateur avec accès en lecture à la base de données';
$string['auth_dbuser_key'] = 'Utilisateur DB';
$string['auth_dbuserstoadd'] = 'Entrées utilisateur à ajouter : {$a}';
$string['auth_dbuserstoremove'] = 'Entrées utilisateur à supprimer : {$a}';
$string['auth_dbnoexttable'] = 'Tableau externe non spécifié.';
$string['auth_dbnouserfield'] = 'Champ utilisateur externe non spécifié.';
$string['auth_dbcannotconnect'] = 'Impossible de se connecter à une base de données externe.';
$string['auth_dbcannotreadtable'] = 'Impossible de lire la table externe.';
$string['auth_dbtableempty'] = 'La table externe est vide.';
$string['auth_dbcolumnlist'] = 'Le tableau externe contient les colonnes suivantes :<br />{$a}';
$string['auth_dbupdateerror'] = 'Erreur lors de la mise à jour de la base de données externe.';
$string['pluginname'] = 'Base de données externe';
$string['privacy:metadata'] = 'Le plugin d\'authentification de la base de données externe ne stocke aucune donnée personnelle.';
