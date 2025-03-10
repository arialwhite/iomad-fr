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
 * Lang strings
 *
 * @package    report_security
 * @copyright  2008 petr Skoda
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['configuration'] = 'Configuration';
$string['description'] = 'Désignation des marchandises';
$string['details'] = 'Détails';
$string['check_configrw_details'] = '<p>It is recommended that the file permissions of <code>config.php</code> are changed after installation so that the file cannot be modified by the web server.
Please note that this measure does not improve security of the server significantly, though it may slow down or limit general exploits.</p>';
$string['check_configrw_name'] = 'Writable config.php';
$string['check_configrw_ok'] = 'Config. php ne peut pas être modifié par des scripts PHP.';
$string['check_configrw_warning'] = 'Les scripts PHP peuvent modifier config.php.';
$string['check_cookiesecure_details'] = '<p>Si la communication https est activée, il est recommandé de permettre l\'envoi de cookies sécurisés. Vous devriez avoir une redirection permanente de https à https et idéalement servir les en-têtes HSTS aussi.</p>';
$string['check_cookiesecure_error'] = 'Veuillez activer les cookies sécurisés';
$string['check_cookiesecure_http'] = 'Vous devez activer https pour utiliser des cookies sécurisés';
$string['check_cookiesecure_name'] = 'Cookies sécurisés';
$string['check_cookiesecure_ok'] = 'Cookies sécurisés activés.';
$string['check_defaultuserrole_details'] = '<p>All logged in users are given capabilities of the default user role. Please make sure no risky capabilities are allowed in this role.</p>
<p>The only supported legacy type for the default user role is <em>Authenticated user</em>. The course view capability must not be enabled.</p>
<p>Please check if the automatic data deletion request approval(tool_dataprivacy | automaticdatadeletionapproval) option is enabled. Users can request deletions that could delete large amounts of data.</p>';
$string['check_defaultuserrole_error'] = 'Le rôle utilisateur par défaut « {$a} » est mal défini !';
$string['check_defaultuserrole_name'] = 'Rôle par défaut pour tous les utilisateurs';
$string['check_defaultuserrole_notset'] = 'Le rôle par défaut n\'est pas défini.';
$string['check_defaultuserrole_ok'] = 'Le rôle par défaut pour toute définition d\'utilisateur est OK.';
$string['check_displayerrors_details'] = '<p>Annuler le paramètre PHP <code>display_errors</code> n\'est pas recommandé sur les sites de production car les messages d\'erreur peuvent révéler des informations sensibles sur votre serveur.</p>';
$string['check_displayerrors_error'] = 'Le paramètre PHP pour afficher les erreurs est activé. Il est recommandé que cela soit désactivé.';
$string['check_displayerrors_name'] = 'Affichage des erreurs PHP';
$string['check_displayerrors_ok'] = 'Affichage des erreurs PHP désactivées.';
$string['check_emailchangeconfirmation_details'] = '<p>It is recommended that an email confirmation step is required when users change their email address in their profile. If disabled, spammers may try to exploit the server to send spam.</p>
<p>Email field may be also locked from authentication plugins, this possibility is not considered here.</p>';
$string['check_emailchangeconfirmation_error'] = 'Les utilisateurs peuvent saisir n\'importe quelle adresse électronique.';
$string['check_emailchangeconfirmation_info'] = 'Les utilisateurs peuvent entrer des adresses e-mail de domaines autorisés seulement.';
$string['check_emailchangeconfirmation_name'] = 'Email de confirmation de changement';
$string['check_emailchangeconfirmation_ok'] = 'Confirmation du changement d\'adresse électronique dans le profil de l\'utilisateur.';
$string['check_embed_details'] = '<p>L\'intégration d\'objets illimités est très dangereuse - tout utilisateur enregistré peut lancer une attaque XSS contre d\'autres utilisateurs du serveur. Ce paramètre devrait être désactivé sur les serveurs de production.</p>';
$string['check_embed_error'] = 'Intégrer un objet illimité activé - c\'est très dangereux pour la majorité des serveurs.';
$string['check_embed_name'] = 'Autoriser EMBED et OBJET';
$string['check_embed_ok'] = 'L\'intégration d\'objets illimités n\'est pas autorisée.';
$string['check_frontpagerole_details'] = '<p>The default site home role is given to all authenticated users for site home activities. Please make sure no risky capabilities are allowed for this role.</p>
<p>It is recommended that a special role is created for this purpose and a legacy type role is not used.</p>';
$string['check_frontpagerole_error'] = 'Rôle d\'accueil du site mal défini « {$a} » détecté!';
$string['check_frontpagerole_name'] = 'Rôle du site';
$string['check_frontpagerole_notset'] = 'Le rôle du site n\'est pas défini.';
$string['check_frontpagerole_ok'] = 'La définition du rôle à la maison du site est acceptable.';
$string['check_crawlers_details'] = '<p>Le paramètre "Open to search engines" permet aux moteurs de recherche d\'entrer dans les cours avec accès invité. Il n\'y a aucun intérêt à activer ce paramètre si la connexion client n\'est pas autorisée.</p>';
$string['check_crawlers_error'] = 'L\'accès au moteur de recherche est autorisé, mais l\'accès aux invités est désactivé.';
$string['check_crawlers_info'] = 'Les moteurs de recherche peuvent entrer comme invités.';
$string['check_crawlers_name'] = 'Ouvrir aux moteurs de recherche';
$string['check_crawlers_ok'] = 'L\'accès au moteur de recherche n\'est pas activé.';

$string['check_antivirus_details'] = 'Ce statut vérifie si une erreur récente a été détectée en fonction du seuil défini dans les principaux paramètres antivirus.';
$string['check_antivirus_error'] = 'Les erreurs {$a->errors} ont été détectées dans le dernier {$a->regard}';
$string['check_antivirus_info'] = 'Aucun scanner antivirus n\'est actuellement activé';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = 'Les scanners antivirus {$a->scanners} activés, aucun problème n\'a été détecté dans le dernier {$a->regard}';
$string['check_antivirus_logstore_not_supported'] = 'Impossible de vérifier l\'état des scanners antivirus en raison du type de log store choisi';

$string['check_dotfiles_info'] = 'Tous les dotfiles sauf /.well-known/* ne devraient pas être publics';
$string['check_dirindex_info'] = 'L\'index de répertoire ne doit pas être activé';
$string['check_guestrole_details'] = '<p>The guest role is used for guests, not logged in users and temporary guest course access. Please make sure no risky capabilities are allowed in this role.</p>
<p>The only supported legacy type for guest role is <em>Guest</em>.</p>';
$string['check_guestrole_error'] = 'Le rôle invité « {$a} » est mal défini !';
$string['check_guestrole_name'] = 'Rôle d\'invité';
$string['check_guestrole_notset'] = 'Le rôle des invités n\'est pas défini.';
$string['check_guestrole_ok'] = 'La définition du rôle des invités est acceptable.';
$string['check_nodemodules_details'] = '<p>Le répertoire <code>{$a->path}</code> contient des modules Node.js et leurs dépendances, généralement installés par l\'utilitaire NPM. Ces modules peuvent être nécessaires pour le développement local de Moodle, comme pour l\'utilisation du cadre grunt. Ils ne sont pas nécessaires pour exécuter un site Moodle en production et ils peuvent contenir un code potentiellement dangereux exposant votre site à des attaques à distance.</p> Il est fortement recommandé de supprimer le répertoire si le site est disponible via une URL publique, ou du moins d\'interdire l\'accès au Web dans votre configuration de serveur Web.</p>';
$string['check_nodemodules_info'] = 'Le répertoire node_modules ne doit pas être présent sur les sites publics.';
$string['check_nodemodules_name'] = 'Répertoire des modules Node.js';
$string['check_openprofiles_details'] = 'Les profils d\'utilisateur ouverts peuvent être abusés par les spammers. Il est recommandé que soit <code> Forcer les utilisateurs à se connecter pour les profils</code> ou <code>Force les utilisateurs à se connecter</code> sont activés.';
$string['check_openprofiles_error'] = 'N\'importe qui peut afficher des profils d\'utilisateur sans se connecter.';
$string['check_openprofiles_name'] = 'Ouvrir les profils utilisateurs';
$string['check_openprofiles_ok'] = 'Une connexion est nécessaire avant de consulter les profils des utilisateurs.';
$string['check_passwordpolicy_details'] = '<p>It is recommended that a password policy is set, since password guessing is very often the easiest way to gain unauthorised access.
Do not make the requirements too strict though, as this can result in users not being able to remember their passwords and either forgetting them or writing them down.</p>';
$string['check_passwordpolicy_error'] = 'Politique de mot de passe non définie.';
$string['check_passwordpolicy_name'] = 'Politique de mot de passe';
$string['check_passwordpolicy_ok'] = 'Politique de mot de passe activée.';
$string['check_preventexecpath_name'] = 'Voies exécutables';
$string['check_preventexecpath_ok'] = 'Les chemins exécutables settable seulement dans config.php.';
$string['check_preventexecpath_warning'] = 'Les chemins exécutables peuvent être configurés dans l\'interface graphique Admin.';
$string['check_preventexecpath_details'] = '<p>Autoriser les chemins exécutables à définir via l\'interface graphique Admin est un vecteur pour l\'escalade des privilèges. Ceci doit être forcé dans config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_publicpaths_name'] = 'Vérifiez tous les chemins publics / privés';
$string['check_publicpaths_ok'] = 'Tous les chemins internes ne sont pas accessibles au public';
$string['check_publicpaths_warning'] = 'Certaines voies internes sont accessibles au public';
$string['check_publicpaths_generic'] = 'Les fichiers {$a} ne devraient pas être publics';
$string['check_publicpaths_403'] = '(Revenu un 403, idéalement devrait être 404)';
$string['check_riskadmin_detailsok'] = '<p>Veuillez vérifier la liste suivante des administrateurs système :</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Please verify the following list of system administrators:</p>{$a->admins}
<p>It is recommended to assign administrator role in the system context only. The following users have (unsupported) admin role assignments in other contexts:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administrateurs';
$string['check_riskadmin_ok'] = 'Trouvé {$a} administrateur(s) du serveur.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) examen de l\'affectation des rôles</a>';
$string['check_riskadmin_warning'] = 'Les administrateurs de serveur {$a->admincount} et {$a->unsupcount} n\'ont pas été pris en charge.';
$string['check_riskbackup_detailsok'] = 'Aucun rôle n\'autorise explicitement la sauvegarde des données utilisateur. Cependant, notez que les administrateurs avec la capacité de « faire n\'importe quoi » sont encore susceptibles d\'être en mesure de le faire.';
$string['check_riskbackup_details_overriddenroles'] = '<p> Ces dépassements actifs donnent aux utilisateurs la possibilité d\'inclure des données utilisateur dans les sauvegardes. Veuillez vous assurer que cette autorisation est nécessaire.</p> [$a]';
$string['check_riskbackup_details_systemroles'] = '<p> Les rôles système suivants permettent actuellement aux utilisateurs d\'inclure des données utilisateur dans les sauvegardes. Veuillez vous assurer que cette autorisation est nécessaire.</p> [$a]';
$string['check_riskbackup_details_users'] = '<p>En raison des rôles ou des dépassements locaux ci-dessus, les comptes utilisateurs suivants ont actuellement la permission de faire des sauvegardes contenant des données privées de tous les utilisateurs inscrits dans leur cours. Assurez-vous qu\'ils sont (a) fiables et (b) protégés par des mots de passe forts :</p> [$a]';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} dans {$a->nomcontexte}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Sauvegarde des données utilisateur';
$string['check_riskbackup_ok'] = 'Aucun rôle n\'autorise explicitement la sauvegarde des données utilisateur';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) dans {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Les rôles {$a->rolecount} trouvés, {$a->overridecount} remplacent et {$a->usercount} les utilisateurs ayant la possibilité de sauvegarder des données utilisateur.';
$string['check_riskxss_details'] = '<p>RISK_XSS denotes all dangerous capabilities that only trusted users may use.</p>
<p>Please verify the following list of users and make sure that you trust them completely on this server:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Les utilisateurs de confiance de XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - a trouvé {$a} des utilisateurs qui doivent être fiables.';
$string['check_unsecuredataroot_details'] = '<p>The dataroot directory must not be accessible via web. The best way to make sure the directory is not accessible is to use a directory outside the public web directory.</p>
<p>If you move the directory, you need to update the <code>$CFG->dataroot</code> setting in <code>config.php</code> accordingly.</p>';
$string['check_unsecuredataroot_error'] = 'Votre répertoire dataroot <code>{$a}</code> est dans le mauvais endroit et est exposé au web!';
$string['check_unsecuredataroot_name'] = 'Base de données non sécurisée';
$string['check_unsecuredataroot_ok'] = 'Le répertoire Dataroot ne doit pas être accessible via le web.';
$string['check_unsecuredataroot_warning'] = 'Votre répertoire dataroot <code>{$a}</code> se trouve au mauvais endroit et pourrait être exposé au web.';
$string['check_upgradefile_info'] = 'Les fichiers de notes de mise à jour ne devraient pas être publics';
$string['check_vendordir_details'] = '<p>Le répertoire <code>{$a->path}</code> contient diverses bibliothèques tierces et leurs dépendances, habituellement installées par le compositeur PHP. Ces bibliothèques peuvent être nécessaires pour le développement local de Moodle, par exemple pour installer le framework PHPUnit. Ils ne sont pas nécessaires pour exécuter un site Moodle en production et ils peuvent contenir un code potentiellement dangereux exposant votre site à des attaques à distance.</p> Il est fortement recommandé de supprimer le répertoire si le site est disponible via une URL publique, ou du moins d\'interdire l\'accès au Web dans votre configuration de serveur Web.</p>';
$string['check_vendordir_info'] = 'L\'annuaire des fournisseurs ne devrait pas être présent sur les sites publics.';
$string['check_vendordir_name'] = 'Répertoire des fournisseurs';
$string['check_webcron_details'] = '<p>Running the cron from a web browser peut exposer des informations privilégiées aux utilisateurs anonymes. Il est recommandé d\'exécuter le cron uniquement depuis la ligne de commande ou de définir un mot de passe cron pour l\'accès à distance.</p>';
$string['check_webcron_warning'] = 'Les utilisateurs anonymes peuvent accéder à cron.';
$string['check_webcron_name'] = 'Cron Web';
$string['check_webcron_ok'] = 'Les utilisateurs anonymes ne peuvent pas accéder à cron.';
$string['eventreportviewed'] = 'Rapport de vérification de sécurité vu';
$string['issue'] = 'Numéro';
$string['pluginname'] = 'Contrôles de sécurité';
$string['security:view'] = 'Voir le rapport de sécurité';
$string['timewarning'] = 'Le traitement des données peut prendre beaucoup de temps, veuillez être patient...';
$string['privacy:metadata'] = 'Le plugin Aperçu de sécurité ne stocke aucune donnée personnelle.';
