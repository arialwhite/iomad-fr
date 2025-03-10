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
 * Strings for component 'auth_cas', language 'en'.
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_cas_auth_name'] = 'Nom de la méthode d\'authentification';
$string['auth_cas_auth_name_description'] = 'Donnez un nom à la méthode d\'authentification CAS qui est familière à vos utilisateurs.';
$string['auth_cas_auth_logo'] = 'Logo de la méthode d\'authentification';
$string['auth_cas_auth_logo_description'] = 'Fournir un logo pour la méthode d\'authentification CAS qui est familière à vos utilisateurs.';
$string['auth_cas_auth_user_create'] = 'Créer des utilisateurs externes';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_baseuri'] = 'URI du serveur (rien si aucune baseUri)<br />Par exemple, si le serveur CAS répond à host.domaine.fr/CAS/ alors<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = 'Vous ne pouvez pas procéder sans changer votre mot de passe, mais il n\'y a pas de page disponible pour le modifier. Veuillez contacter votre administrateur Moodle.';
$string['auth_cas_cantconnect'] = 'La partie LDAP du module CAS ne peut pas se connecter au serveur : {$a}';
$string['auth_cas_casversion'] = 'Version du protocole CAS';
$string['auth_cas_certificate_check'] = 'Sélectionner \'yes\' if you want to validate the server certificate';
$string['auth_cas_certificate_path_empty'] = 'Si vous activez la validation du serveur, vous devez spécifier un chemin de certificat';
$string['auth_cas_certificate_check_key'] = 'Validation du serveur';
$string['auth_cas_certificate_path'] = 'Chemin du fichier chaîne CA (format PEM) pour valider le certificat serveur';
$string['auth_cas_certificate_path_key'] = 'Chemin du certificat';
$string['auth_cas_create_user'] = 'Activez cela si vous voulez insérer des utilisateurs authentifiés CAS dans la base de données Moodle. Sinon, seuls les utilisateurs qui existent déjà dans la base de données Moodle peuvent se connecter.';
$string['auth_cas_create_user_key'] = 'Créer un utilisateur';
$string['auth_cas_curl_ssl_version'] = 'La version SSL (2 ou 3) à utiliser. Par défaut PHP va essayer de déterminer lui-même, bien que dans certains cas cela doit être réglé manuellement.';
$string['auth_cas_curl_ssl_version_default'] = 'Par défaut';
$string['auth_cas_curl_ssl_version_key'] = 'cURL Version SSL';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_casdescription'] = 'Cette méthode utilise un serveur CAS (Service central d\'authentification) pour authentifier les utilisateurs dans un environnement de connexion unique (OSS). Vous pouvez également utiliser une simple authentification LDAP. Si le nom d\'utilisateur et le mot de passe donnés sont valides selon CAS, Moodle crée une nouvelle entrée utilisateur dans sa base de données, en prenant les attributs utilisateur de LDAP si nécessaire. Sur les connexions suivantes, seul le nom d\'utilisateur et le mot de passe sont vérifiés.';
$string['auth_cas_enabled'] = 'Activez cela si vous voulez utiliser l\'authentification CAS.';
$string['auth_cas_hostname'] = 'Nom d\'hôte du serveur CAS <br />eg: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Nom d\'hôte';
$string['auth_cas_changepasswordurl'] = 'URL de changement de mot de passe';
$string['auth_cas_invalidcaslogin'] = 'Désolé, votre connexion a échoué - vous ne pouvez pas être autorisé';
$string['auth_cas_language'] = 'Sélectionnez la langue pour les pages d\'authentification';
$string['auth_cas_language_key'] = 'Langue';
$string['auth_cas_logincas'] = 'Accès sécurisé à la connexion';
$string['auth_cas_logout_return_url_key'] = 'URL de retour alternative de loggout';
$string['auth_cas_logout_return_url'] = 'Indiquer l\'URL vers laquelle les utilisateurs du CAS doivent être redirigés après la déconnectation.<br />Si le vide est laissé, les utilisateurs seront redirigés vers l\'emplacement où moodle redirigera les utilisateurs vers';
$string['auth_cas_logoutcas'] = 'Sélectionner \'yes\' if you want to logout from CAS when you disconnect from Moodle';
$string['auth_cas_logoutcas_key'] = 'Option de déconnexion CAS';
$string['auth_cas_multiauth'] = 'Sélectionner \'yes\' if you want to have multi-authentication (CAS + other authentication)';
$string['auth_cas_multiauth_key'] = 'Multi-authentification';
$string['auth_casnotinstalled'] = 'Impossible d\'utiliser l\'authentification CAS. Le module PHP LDAP n\'est pas installé.';
$string['auth_cas_port'] = 'Port du serveur CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Sélectionner \'yes\' if you use CAS in proxy-mode';
$string['auth_cas_proxycas_key'] = 'Mode mandataire';
$string['auth_cas_server_settings'] = 'Configuration du serveur CAS';
$string['auth_cas_text'] = 'Connexion sécurisée';
$string['auth_cas_use_cas'] = 'Utiliser CAS';
$string['auth_cas_version'] = 'Version du protocole CAS à utiliser';
$string['CASform'] = 'Choix d\'authentification';
$string['noldapserver'] = 'Aucun serveur LDAP configuré pour CAS! Synchronisation désactivée.';
$string['pluginname'] = 'Serveur CAS (SSO)';
$string['synctask'] = 'Fonction de synchronisation des utilisateurs CAS';
$string['privacy:metadata'] = 'Le plugin d\'authentification du serveur CAS (SSO) ne stocke aucune donnée personnelle.';
