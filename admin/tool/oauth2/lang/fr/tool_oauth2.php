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
 * Strings for component 'tool_oauth2', language 'en'
 *
 * @package    tool_oauth2
 * @copyright  2017 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['acceptrisk'] = 'Je comprends que la désactivation de la vérification par courriel peut être un problème de sécurité.';
$string['acceptrisk_help'] = 'Désactiver la vérification par courriel peut potentiellement permettre à un utilisateur de s\'authentifier en tant qu\'autre utilisateur.';
$string['authconfirm'] = 'Cette action accordera un accès permanent à l\'API de Moodle pour le compte authentifié. Ceci est destiné à être utilisé comme un compte système pour la gestion des fichiers appartenant à Moodle.';
$string['authconnected'] = 'Le compte système est maintenant connecté pour un accès hors ligne';
$string['authnotconnected'] = 'Le compte système n\'était pas connecté pour l\'accès hors ligne';
$string['clever_service'] = 'Intelligent';
$string['configured'] = 'Configuration';
$string['configuredstatus'] = 'Configuration';
$string['connectsystemaccount'] = 'Connexion à un compte système';
$string['createfromtemplate'] = 'Créer un service OAuth 2 à partir d\'un modèle';
$string['createfromtemplatedesc'] = 'Choisissez l\'un des modèles de service OAuth 2 ci-dessous pour créer un service OAuth avec une configuration valide pour l\'un des types de service connus. Cela créera le service OAuth 2, avec tous les points de fin et les paramètres requis pour l\'authentification, bien que vous devrez toujours entrer l\'ID client et le secret pour le nouveau service avant qu\'il puisse être utilisé.';
$string['createnewendpoint'] = 'Créer un nouveau paramètre pour l\'émetteur « {$a} »';
$string['createnewservice'] = 'Créer un nouveau service & #160;:';
$string['createnewuserfieldmapping'] = 'Créer une nouvelle cartographie de champ utilisateur pour l\'émetteur « {$a} »';
$string['custom_service'] = 'Personnalisé';
$string['deleteconfirm'] = 'Voulez-vous vraiment supprimer l\'émetteur d\'identité « {$a} » ? Tous les plugins s\'appuyant sur cet émetteur cesseront de fonctionner.';
$string['deleteendpointconfirm'] = 'Voulez-vous vraiment supprimer le paramètre « {$a->endpoint} » pour l\'émetteur « {$a->émetteur} »? Tous les plugins s\'appuyant sur ce paramètre cesseront de fonctionner.';
$string['deleteuserfieldmappingconfirm'] = 'Voulez-vous vraiment supprimer la cartographie du champ utilisateur pour l\'émetteur « {$a} » ?';
$string['discovered_help'] = 'Découverte signifie que les paramètres d\'OAuth 2 peuvent être automatiquement déterminés à partir de l\'URL de base du service OAuth. Tous les services ne doivent pas être "découverts", mais s\'ils ne le sont pas, les paramètres et les informations de cartographie utilisateur devront être saisis manuellement.';
$string['discovered'] = 'Découverte réussie du service';
$string['discoverystatus'] = 'Découverte';
$string['editendpoint'] = 'Modifier le paramètre : {$a->endpoint} pour l\'émetteur {$a->émetteur}';
$string['editendpoints'] = 'Configurer les paramètres';
$string['editissuer'] = 'Éditer l\'émetteur d\'identité : {$a}';
$string['edituserfieldmapping'] = 'Modifier la cartographie du champ utilisateur pour l\'émetteur {$a}';
$string['edituserfieldmappings'] = 'Configurer les mappages de champs utilisateurs';
$string['endpointdeleted'] = 'Point d \' extrémité supprimé';
$string['endpointname_help'] = 'Clé utilisée pour rechercher ce paramètre. Doit se terminer par "_endpoint".';
$string['endpointname'] = 'Nom';
$string['endpointsforissuer'] = 'Points de fin pour l\'émetteur: {$a}';
$string['endpointurl_help'] = 'URL pour ce paramètre. Doit utiliser le protocole https://.';
$string['endpointurl'] = 'URL';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['issuersetup'] = 'Instructions détaillées sur la configuration des services OAuth 2 communs';
$string['issuersetuptype'] = 'Instructions détaillées sur la configuration du fournisseur {$a} OAuth 2';
$string['issueralloweddomains_help'] = 'Si défini, ce paramètre est une liste de domaines séparés par des virgules que les connexions seront limitées à l\'utilisation de ce fournisseur.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domaines';
$string['issueralloweddomains'] = 'Domaines de connexion';
$string['issuerbaseurl_help'] = 'URL de base utilisée pour accéder au service.';
$string['issuerbaseurl'] = 'URL de base de service';
$string['issuerclientid'] = 'ID client';
$string['issuerclientid_help'] = 'L\'identifiant client OAuth pour cet émetteur.';
$string['issuerclientsecret'] = 'Secret client';
$string['issuerclientsecret_help'] = 'Le secret client OAuth pour cet émetteur.';
$string['issuerdeleted'] = 'Émetteur d\'identité supprimé';
$string['issuerdisabled'] = 'Émetteur d\'identité désactivé';
$string['issuerenabled'] = 'Émetteur d\'identité activé';
$string['issuerimage_help'] = 'URL d\'image utilisée pour afficher un logo pour cet émetteur. Peut être affiché sur la page de connexion.';
$string['issuerimage'] = 'URL du logo';
$string['issuerloginpagename'] = 'Nom affiché sur la page de connexion';
$string['issuerloginpagename_help'] = 'Si spécifié, ce nom sera utilisé sur la page de connexion au lieu du nom du service.';
$string['issuerloginparams'] = 'Paramètres supplémentaires inclus dans une demande de connexion.';
$string['issuerloginparams_help'] = 'Certains systèmes nécessitent des paramètres supplémentaires pour une demande de connexion afin de lire l\'utilisateur\'s basic profile.';
$string['issuerloginparamsoffline'] = 'Paramètres supplémentaires inclus dans une demande de connexion pour un accès hors ligne.';
$string['issuerloginparamsoffline_help'] = 'Chaque Le système OAuth définit une manière différente de demander un accès hors ligne. Par exemple Google nécessite les paramètres supplémentaires: "access_type=offline&prompt=consent". Ces paramètres doivent être au format de la requête URL.';
$string['issuerloginscopes_help'] = 'Certains systèmes exigent des possibilités supplémentaires pour une demande de connexion afin de lire l\'utilisateur\'s basic profile. The standard scopes for an OpenID Connect compliant system are "openid profile email".';
$string['issuerloginscopesoffline_help'] = 'Chaque Le système OAuth définit une manière différente de demander un accès hors ligne. Par exemple Microsoft nécessite une portée supplémentaire "offline_access".';
$string['issuerloginscopesoffline'] = 'Portées incluses dans une demande de connexion pour un accès hors ligne.';
$string['issuerloginscopes'] = 'Portées incluses dans une demande de connexion.';
$string['issuername_help'] = 'Nom de l\'émetteur d\'identité. Peut être affiché sur la page de connexion.';
$string['issuername'] = 'Nom';
$string['issuershowonloginpage_help'] = 'Si le plugin d\'authentification OAuth 2 est activé, cet émetteur de connexion sera inscrit sur la page de connexion pour permettre aux utilisateurs de se connecter avec les comptes de cet émetteur.';
$string['issuershowonloginpage'] = 'Afficher sur la page de connexion';
$string['issuerrequireconfirmation_help'] = 'Exiger que tous les utilisateurs vérifient leur adresse email avant de pouvoir se connecter avec OAuth. Ceci s\'applique aux comptes nouvellement créés dans le cadre du processus de connexion, ou quand un compte Moodle existant est connecté à une connexion OAuth via des adresses email correspondantes.';
$string['issuerrequireconfirmation'] = 'Exiger une vérification par courriel';
$string['issuers'] = 'Émetteurs';
$string['issuersservicesallow'] = 'Autoriser les services';
$string['issuersservicesnotallow'] = 'Ne pas autoriser les services';
$string['issuerusein'] = 'Ce service sera utilisé';
$string['issuerusein_help'] = 'Les services OAuth 2 peuvent être utilisés pour les services internes, sur la page de connexion, ou les deux, si nécessaire.';
$string['issueruseineverywhere'] = 'Page de connexion et services internes';
$string['issueruseininternalonly'] = 'Services internes seulement';
$string['issueruseinloginonly'] = 'Page de connexion seulement';
$string['issuerusedforlogin'] = 'Connexion';
$string['issuerusedforinternal'] = 'Services internes';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Afficher sur la page de connexion comme';
$string['loginissuer'] = 'Permettre la connexion';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'Mouilles Montant net';
$string['nextcloud_service'] = 'Prochaincloud';
$string['notconfigured'] = 'Non configuré';
$string['notdiscovered'] = 'Découverte de services non réussie';
$string['notloginissuer'] = 'Ne pas autoriser la connexion';
$string['pluginname'] = 'Services OAuth 2';
$string['savechanges'] = 'Enregistrer les modifications';
$string['serviceshelp'] = 'Instructions de configuration du fournisseur de services.';
$string['systemaccountconnected_help'] = 'Les comptes système sont utilisés pour fournir des fonctionnalités avancées pour les plugins. Ils ne sont pas requis pour la fonctionnalité de connexion seulement, mais d\'autres plugins utilisant le service OAuth peuvent offrir un ensemble réduit de fonctionnalités si le compte système n\'a pas été connecté. Par exemple, les dépôts ne peuvent pas supporter les "liens contrôlés" sans un compte système pour effectuer des opérations de fichiers.';
$string['systemaccountconnected'] = 'Compte système connecté';
$string['systemaccountnotconnected'] = 'Compte système non connecté';
$string['systemauthstatus'] = 'Compte système connecté';
$string['usebasicauth'] = 'Authentifier les requêtes de jeton via les en-têtes HTTP';
$string['usebasicauth_help'] = 'Utilisez le schéma d\'authentification HTTP Basic lors de l\'envoi de l\'ID client et du mot de passe avec une requête de jeton de rafraîchissement. Recommandé par la norme OAuth 2, mais peut ne pas être disponible auprès de certains émetteurs.';
$string['userfieldexternalfield'] = 'Nom du champ externe';
$string['userfieldexternalfield_error'] = 'Ce champ ne peut pas contenir de HTML.';
$string['userfieldexternalfield_help'] = 'Nom du champ fourni par le système externe OAuth.';
$string['userfieldinternalfield_help'] = 'Nom du champ utilisateur Moodle qui doit être mapisé à partir du champ externe.';
$string['userfieldinternalfield'] = 'Nom du champ interne';
$string['userfieldmappingdeleted'] = 'Cartographie des champs de l\'utilisateur supprimée';
$string['userfieldmappingsforissuer'] = 'Cartographie des champs utilisateurs pour l\'émetteur : {$a}';
$string['privacy:metadata'] = 'Le plugin de services OAuth 2 ne stocke aucune donnée personnelle.';

// Deprecated since Moodle 4.3.
$string['imsobv2p1_service'] = 'Ouvrir les insignes';
