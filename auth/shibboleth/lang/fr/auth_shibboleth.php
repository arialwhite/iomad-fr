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
 * Strings for component 'auth_shibboleth', language 'en'.
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_shib_auth_method'] = 'Nom de la méthode d\'authentification';
$string['auth_shib_auth_method_description'] = 'Donnez un nom à la méthode d\'authentification Shibboleth qui est familière à vos utilisateurs. Cela pourrait être le nom de votre fédération Shibboleth, par exemple <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou similaire.';
$string['auth_shib_auth_logo'] = 'Logo de la méthode d\'authentification';
$string['auth_shib_auth_logo_description'] = 'Fournissez un logo pour la méthode d\'authentification Shibboleth qui est familière à vos utilisateurs. Il pourrait s\'agir du logo de votre fédération Shibboleth, par exemple <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou similaire.';
$string['auth_shib_contact_administrator'] = 'Si vous n\'êtes pas associé aux organisations données et que vous avez besoin d\'accéder à un cours sur ce serveur, veuillez contacter le <a href="mailto:{$a}"> Administrateur de Moodle</a>.';
$string['auth_shibbolethdescription'] = 'En utilisant cette méthode, les utilisateurs sont créés et authentifiés en utilisant Shibboleth. Pour les détails de configuration, voir le <a href="{$a}">Shibboleth README</a>.';
$string['auth_shibboleth_errormsg'] = 'Veuillez sélectionner l\'organisation dont vous êtes membre!';
$string['auth_shibboleth_login'] = 'Connexion Shibboleth';
$string['auth_shibboleth_login_long'] = 'Connectez-vous à Moodle via Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Connexion manuelle';
$string['auth_shibboleth_select_member'] = 'I\'m a member of ...';
$string['auth_shibboleth_select_organization'] = 'Pour l\'authentification via Shibboleth, veuillez sélectionner votre organisation dans le menu déroulant :';
$string['auth_shib_convert_data'] = 'API de modification de données';
$string['auth_shib_convert_data_description'] = 'Vous pouvez utiliser cette API pour modifier les données fournies par Shibboleth. Lire le <a href="{$a}">README</a> pour d\'autres instructions.';
$string['auth_shib_convert_data_warning'] = 'Le fichier n\'existe pas ou n\'est pas lisible par le processus de serveur web!';
$string['auth_shib_convert_data_filepath_warning'] = 'Vous ne pouvez pas utiliser un fichier situé dans le répertoire de données du site actuel ((CFG->dataroot) comme API de modification de données.';
$string['auth_shib_changepasswordurl'] = 'URL de changement de mot de passe';
$string['auth_shib_idp_list'] = 'Fournisseurs d\'identité';
$string['auth_shib_idp_list_description'] = 'Fournir une liste de l\'entité fournisseur d\'identité IDs pour laisser l\'utilisateur choisir sur la page de connexion.<br />Sur chaque ligne, il doit y avoir un tuple séparé par des virgules pour entityID de l\'IDP (voir le fichier de métadonnées de Shibboleth) et le nom de l\'IDP comme il sera affiché dans la liste déroulante.<br />En tant que troisième paramètre optionnel, vous pouvez ajouter l\'emplacement d\'un initiateur de session de Shibboleth qui sera utilisé au cas où votre installation de Moodle ferait partie d\'une configuration multi-fédération.';
$string['auth_shib_instructions'] = 'Utilisez la connexion <a href="{$a}">Shibboleth pour obtenir un accès via Shibboleth, si votre institution le soutient. Sinon, utilisez le formulaire de connexion normal affiché ici.';
$string['auth_shib_instructions_help'] = 'Ici, vous devez fournir des instructions personnalisées à vos utilisateurs pour expliquer Shibboleth. Il sera affiché sur la page de connexion dans la section des instructions. Les instructions doivent inclure un lien vers «<b>{$a}</b> » que les utilisateurs doivent cliquer lorsqu\'ils veulent se connecter.';
$string['auth_shib_instructions_key'] = 'Instructions de connexion';
$string['auth_shib_integrated_wayf'] = 'Service WAYF Moodle';
$string['auth_shib_integrated_wayf_description'] = 'Si vous activez cela, Moodle utilisera son propre service WAYF au lieu de celui configuré pour Shibboleth. Moodle affichera une liste déroulante sur cette autre page de connexion où l\'utilisateur doit sélectionner son fournisseur d\'identité.';
$string['auth_shib_logout_return_url'] = 'URL de retour alternative de loggout';
$string['auth_shib_logout_return_url_description'] = 'Fournir l\'URL vers laquelle les utilisateurs de Shibboleth doivent être redirigés après la déconnectation.<br />Si le vide est laissé, les utilisateurs seront redirigés vers l\'emplacement où moodle redirigera les utilisateurs vers';
$string['auth_shib_logout_url'] = 'Shibboleth Service Provider déconnecter URL du gestionnaire';
$string['auth_shib_logout_url_description'] = 'Fournissez l\'URL au gestionnaire de débrayage du fournisseur de services Shibboleth. Ceci est typiquement <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Si vous souhaitez utiliser le service WAYF intégré, vous devez fournir une liste séparée par coma des ID d\'entité du fournisseur d\'identité, leurs noms et éventuellement un initiateur de session.';
$string['auth_shib_only'] = 'Shibboleth seulement';
$string['auth_shib_only_description'] = 'Vérifiez cette option si une authentification Shibboleth doit être exécutée';
$string['auth_shib_username_description'] = 'Nom de la variable d\'environnement du serveur web Shibboleth qui doit être utilisée comme nom d\'utilisateur Moodle';
$string['shib_invalid_account_error'] = 'Vous semblez être Shibboleth authentifié mais Moodle n\'a pas de compte valide pour votre nom d\'utilisateur. Votre compte peut ne pas exister ou avoir été suspendu.';
$string['shib_no_attributes_error'] = 'Vous semblez être Shibboleth authentifié mais Moodle a fait\'t receive any user attributes. Please check that your Identity Provider releases the necessary attributes ({$a}) to the Service Provider Moodle is running on or inform the webmaster of this server.';
$string['shib_not_all_attributes_error'] = 'Moodle a besoin de certains attributs Shibboleth qui ne sont pas présents dans votre cas. Les attributs sont : {$a}<br />Veuillez contacter le webmaster de ce serveur ou votre fournisseur d\'identité.';
$string['shib_not_set_up_error'] = 'L\'authentification shibboleth ne fait pas\'t seem to be set up correctly because no Shibboleth environment variables are present for this page. Please consult the <a href="{$a}">README</a> for further instructions on how to set up Shibboleth authentication or contact the webmaster of this Moodle installation.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Le plugin d\'authentification Shibboleth ne stocke aucune donnée personnelle.';
