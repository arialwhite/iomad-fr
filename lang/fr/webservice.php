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
 * Strings for component 'webservice', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accessexception'] = 'Exception relative au contrôle d \' accès';
$string['actwebserviceshhdr'] = 'Protocoles de service Web actifs';
$string['addaservice'] = 'Ajouter un service';
$string['addcapabilitytousers'] = 'Vérifier la capacité des utilisateurs';
$string['addcapabilitytousersdescription'] = 'Les utilisateurs devraient avoir deux capacités - webservice:createtoken et une capacité correspondant aux protocoles utilisés, par exemple webservice/rest:use, webservice/soap:use. Pour y parvenir, créer un rôle de services Web avec les capacités appropriées permises et l\'attribuer à l\'utilisateur de services Web comme un rôle de système.';
$string['addexternalservice'] = 'Ajouter un service externe';
$string['addfunction'] = 'Ajouter une fonction';
$string['addfunctionhelp'] = 'Sélectionnez la fonction à ajouter au service.';
$string['addfunctions'] = 'Ajouter des fonctions';
$string['addfunctionsdescription'] = 'Sélectionnez les fonctions requises pour le nouveau service créé.';
$string['addrequiredcapability'] = 'Attribuer la capacité requise';
$string['addservice'] = 'Ajouter un nouveau service : {$a->name} (id : {$a->id})';
$string['addservicefunction'] = 'Ajouter des fonctions au service « {$a} »';
$string['allusers'] = 'Tous les utilisateurs';
$string['apiexplorer'] = 'Explorateur d\'API';
$string['apiexplorernotavalaible'] = 'API Explorer pas encore disponible.';
$string['arguments'] = 'Arguments';
$string['authmethod'] = 'Méthode d\'authentification';
$string['callablefromajax'] = 'Appelable depuis AJAX';
$string['cannotcreatetoken'] = 'Aucune autorisation de créer un jeton de service web pour le service {$a}.';
$string['configwebserviceplugins'] = 'Pour des raisons de sécurité, seuls les protocoles utilisés devraient être activés.';
$string['context'] = 'Contexte';
$string['createservicedescription'] = 'Un service est un ensemble de fonctions de service Web. Vous autoriserez l\'utilisateur à accéder à un nouveau service. Sur la page <strong>Ajouter le service</strong> vérifier \'Enable\' and \'Authorised users\' options. Select \'No required capability\'.';
$string['createserviceforusersdescription'] = 'Un service est un ensemble de fonctions de service Web. Vous autoriserez les utilisateurs à accéder à un nouveau service. Sur la page <strong>Ajouter le service</strong> vérifier \'Enable\' and uncheck \'Authorised users\' options. Select \'No required capability\'.';
$string['createtoken'] = 'Créer un jeton';
$string['createtokenforuser'] = 'Créer un jeton pour un utilisateur';
$string['createtokenforuserdescription'] = 'Créez un jeton pour l\'utilisateur des services Web.';
$string['createuser'] = 'Créer un utilisateur spécifique';
$string['createuserdescription'] = 'Un utilisateur de services Web est nécessaire pour représenter le système contrôlant Moodle.';
$string['criteriaerror'] = 'Il manque la permission de chercher sur un critère.';
$string['default'] = 'Par défaut vers "{$a}"';
$string['deleteaservice'] = 'Supprimer le service';
$string['deleteservice'] = 'Supprimer le service : {$a->name} (id : {$a->id})';
$string['deleteserviceconfirm'] = 'Supprimer un service supprimera également les jetons liés à ce service. Voulez-vous vraiment supprimer le service externe "{$a}"?';
$string['deletetoken'] = 'Supprimer le jeton';
$string['deletetokenconfirm'] = 'Voulez-vous vraiment supprimer ce jeton de service Web pour <strong>{$a->user}</strong> sur le service <strong>{$a->service}</strong>?';
$string['deprecated'] = 'Déprécié';
$string['disabledwarning'] = 'Tous les protocoles de service web sont désactivés. Le paramètre "Activer les services web" se trouve dans les fonctionnalités avancées.';
$string['doc'] = 'Documentation';
$string['docaccessrefused'] = 'Vous n\'êtes pas autorisé à voir la documentation pour ce jeton';
$string['downloadfiles'] = 'Peut télécharger des fichiers';
$string['downloadfiles_help'] = 'Si activé, tout utilisateur peut télécharger des fichiers avec ses clés de sécurité. Bien sûr, ils sont limités aux fichiers qu\'ils sont autorisés à télécharger dans le site.';
$string['editaservice'] = 'Éditer le service';
$string['editexternalservice'] = 'Éditer le service externe';
$string['editservice'] = 'Modifier le service : {$a->name} (id : {$a->id})';
$string['enabled'] = 'Activé';
$string['enabledocumentation'] = 'Activer la documentation du développeur';
$string['enabledocumentationdescription'] = 'La documentation détaillée des services Web est disponible pour les protocoles activés.';
$string['enableprotocols'] = 'Activer les protocoles';
$string['enableprotocolsdescription'] = 'Au moins un protocole devrait être activé. Pour des raisons de sécurité, seuls les protocoles à utiliser doivent être activés.';
$string['enablews'] = 'Activer les services Web';
$string['enablewsdescription'] = 'Les services Web doivent être activés dans les fonctions avancées.';
$string['entertoken'] = 'Saisissez une clé/un jeton de sécurité :';
$string['error'] = 'Erreur : {$a}';
$string['errorcatcontextnotvalid'] = 'Vous ne pouvez pas exécuter des fonctions dans le contexte de catégorie (catégorie id:{$a->catid}). Le message d\'erreur de contexte était : {$a->message}';
$string['errorcodes'] = 'Message d\'erreur';
$string['errorcoursecontextnotvalid'] = 'Vous ne pouvez pas exécuter des fonctions dans le contexte du cours (course id:{$a->courseid}). Le message d\'erreur de contexte était : {$a->message}';
$string['errorinvalidparam'] = 'Le paramètre « {$a} » est invalide.';
$string['errornotemptydefaultparamarray'] = 'Le paramètre de description de service Web nommé \'{$a}\' is an single or multiple structure. The default can only be empty array. Check web service description.';
$string['erroroptionalparamarray'] = 'Le paramètre de description de service Web nommé \'{$a}\' is a single or multiple structure. It cannot be set as VALUE_OPTIONAL. Check the web service description.';
$string['eventwebservicefunctioncalled'] = 'Fonction de service Web appelée';
$string['eventwebserviceloginfailed'] = 'La connexion au service Web a échoué';
$string['eventwebserviceservicecreated'] = 'Service Web créé';
$string['eventwebserviceservicedeleted'] = 'Service Web supprimé';
$string['eventwebserviceserviceupdated'] = 'Mise à jour du service Web';
$string['eventwebserviceserviceuseradded'] = 'Utilisateur du service Web ajouté';
$string['eventwebserviceserviceuserremoved'] = 'utilisateur de service Web supprimé';
$string['eventwebservicetokencreated'] = 'Jeton de service Web créé';
$string['eventwebservicetokensent'] = 'Jeton de service Web envoyé';
$string['execute'] = 'Exécuter';
$string['executewarnign'] = 'ATTENTION: Si vous appuyez sur exécuter votre base de données sera modifiée et les modifications ne peuvent pas être retournées automatiquement!';
$string['externalservice'] = 'Service extérieur';
$string['externalservicefunctions'] = 'Fonctions de service extérieur';
$string['externalservices'] = 'Services extérieurs';
$string['externalserviceusers'] = 'Utilisateurs de services externes';
$string['failedtolog'] = 'Échec de l\'enregistrement';
$string['filenameexist'] = 'Le nom du fichier existe déjà : {$a}';
$string['forbiddenwsuser'] = 'Impossible de créer un jeton pour un utilisateur non confirmé, supprimé, suspendu ou invité.';
$string['function'] = 'Fonction';
$string['functions'] = 'Fonctions';
$string['generalstructure'] = 'Structure générale';
$string['checkusercapability'] = 'Vérifier la capacité de l\'utilisateur';
$string['checkusercapabilitydescription'] = 'L\'utilisateur devrait avoir les capacités appropriées selon les protocoles utilisés, par exemple webservice/rest:use, webservice/sap:use. Pour ce faire, créer un rôle de services Web avec des capacités de protocole autorisées et l\'attribuer à l\'utilisateur de services Web comme un rôle de système.';
$string['information'] = 'Informations';
$string['installserviceshortnameerror'] = 'Erreur de codage : le nom abrégé du service « {$a} » ne peut contenir que des caractères alphanumériques (lettres et nombres), le soulignement (_), le trait d\'union (-) ou l\'arrêt complet (.)';
$string['installexistingserviceshortnameerror'] = 'Un service web avec le nom abrégé « {$a} » existe déjà. Impossible d\'installer/mise à jour un service web différent avec ce nom abrégé.';
$string['invalidextparam'] = 'paramètre externe api non valide : {$a}';
$string['invalidextresponse'] = 'Réponse externe non valide : {$a}';
$string['invalidiptoken'] = 'Jeton non valide - votre IP n\'est pas pris en charge';
$string['invalidtimedtoken'] = 'Jeton non valide - jeton expiré';
$string['invalidtoken'] = 'Jeton non valide - jeton non trouvé';
$string['iprestriction'] = 'Limitation de la propriété intellectuelle';
$string['iprestriction_help'] = 'L\'utilisateur devra appeler le service web à partir des IP listés (séparés par des virgules).';
$string['key'] = 'Key';
$string['keyshelp'] = 'Les clés sont utilisées pour accéder à votre compte Moodle à partir d\'applications externes.';
$string['loginrequired'] = 'Restricté aux utilisateurs connectés';
$string['manageprotocols'] = 'Gérer les protocoles';
$string['managetokens'] = 'Gérer les jetons';
$string['missingcaps'] = 'Capacités manquantes';
$string['missingcaps_help'] = 'Liste des capacités déclarées par le service que l\'utilisateur n\'a pas. Certaines fonctionnalités de service peuvent ne pas être disponibles sans ces capacités.';
$string['missingpassword'] = 'Mot de passe manquant';
$string['missingrequiredcapability'] = 'La capacité {$a} est requise.';
$string['missingusername'] = 'Nom d\'utilisateur manquant';
$string['nameexists'] = 'Ce nom est déjà utilisé par un autre service';
$string['nocapabilitytouseparameter'] = 'L\'utilisateur n\'a pas la capacité requise pour utiliser le paramètre {$a}';
$string['nofunctions'] = 'Ce service n\'a aucune fonction.';
$string['norequiredcapability'] = 'Aucune capacité requise';
$string['notoken'] = 'La liste des jetons est vide.';
$string['onesystemcontrolling'] = 'Permettre à un système externe de contrôler Moodle';
$string['onesystemcontrollingdescription'] = 'Les étapes suivantes vous aident à configurer les services web Moodle pour permettre à un système externe d\'interagir avec Moodle. Cela inclut la mise en place d\'une méthode d\'authentification par jeton (clé de sécurité).';
$string['onlyseecreatedtokens'] = 'Vous ne pouvez voir que les jetons que vous avez créés.';
$string['operation'] = 'Fonctionnement';
$string['optional'] = 'Facultatif';
$string['passwordisexpired'] = 'Le mot de passe est expiré.';
$string['phpparam'] = 'XML-RPC (structure du PHP)';
$string['phpresponse'] = 'XML-RPC (structure du PHP)';
$string['postrestparam'] = 'Code PHP pour REST (demande POST)';
$string['potusers'] = 'Usagers non autorisés';
$string['potusersmatching'] = 'Utilisateurs non autorisés';
$string['print'] = 'Tout imprimer';
$string['privacy:metadata'] = 'Le service Web API ne stocke aucune donnée';
$string['protocol'] = 'Protocole';
$string['removefunction'] = 'Supprimer';
$string['removefunctionconfirm'] = 'Voulez-vous vraiment supprimer la fonction « {$a->fonction} » du service « {$a->service} »?';
$string['requireauthentication'] = 'Cette méthode nécessite une authentification avec la permission xxx.';
$string['required'] = 'Requis';
$string['requiredcapability'] = 'Capacité requise';
$string['requiredcapability_help'] = 'Si elle est définie, seuls les utilisateurs ayant la capacité requise peuvent accéder au service.';
$string['requiredcaps'] = 'Capacités requises';
$string['resettokencomplete'] = 'Le jeton sélectionné a été réinitialisé';
$string['resettokenconfirm'] = 'Voulez-vous vraiment réinitialiser cette clé de service Web pour <strong>{$a->user}</strong> sur le service <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Voulez-vous vraiment réinitialiser cette clé ? Tout lien enregistré contenant l\'ancienne clé ne fonctionnera plus.';
$string['response'] = 'Réponse';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (paramètres POST)';
$string['restrictedusers'] = 'Utilisateurs autorisés uniquement';
$string['restrictedusers_help'] = 'Ce paramètre détermine si tous les utilisateurs avec la permission de créer un jeton de services Web peuvent générer un jeton pour ce service via leur page de clés de sécurité ou si seuls les utilisateurs autorisés peuvent le faire.';
$string['restoredaccountresetpassword'] = 'Le compte restauré doit réinitialiser le mot de passe avant d\'obtenir un jeton.';
$string['securitykey'] = 'Clé de sécurité (marque)';
$string['securitykeys'] = 'Clés de sécurité';
$string['selectauthorisedusers'] = 'Sélectionner les utilisateurs autorisés';
$string['selectedcapability'] = 'Sélectionné';
$string['selectedcapabilitydoesntexit'] = 'La capacité requise actuellement ({$a}) ne fonctionne pas.'t exist any more. Please change it and save the changes.';
$string['selectservice'] = 'Sélectionnez un service';
$string['selectspecificuser'] = 'Sélectionnez un utilisateur spécifique';
$string['selectspecificuserdescription'] = 'Ajouter l\'utilisateur des services Web en tant qu\'utilisateur autorisé.';
$string['service'] = 'Services';
$string['servicehelpexplanation'] = 'Un service est un ensemble de fonctions. Un service peut être consulté par tous les utilisateurs ou juste des utilisateurs spécifiés.';
$string['servicename'] = 'Nom du service';
$string['servicenotavailable'] = 'Le service Web n\'est pas disponible. (Il fait\'t exist or might be disabled.)';
$string['servicerequireslogin'] = 'Le service Web n\'est pas disponible. (La session a été déconnectée ou a expiré.)';
$string['servicesbuiltin'] = 'Services intégrés';
$string['servicescustom'] = 'Services personnalisés';
$string['serviceusers'] = 'Utilisateurs autorisés';
$string['serviceusersettings'] = 'Paramètres de l\' utilisateur';
$string['serviceusersmatching'] = 'Comparaison des utilisateurs autorisés';
$string['serviceuserssettings'] = 'Modifier les paramètres pour les utilisateurs autorisés';
$string['shortnametaken'] = 'Le nom abrégé est déjà utilisé pour un autre service ({$a})';
$string['simpleauthlog'] = 'Connexion simple à l\'authentification';
$string['step'] = 'Étape';
$string['supplyinfo'] = 'Plus de détails';
$string['testauserwithtestclientdescription'] = 'Simuler l\'accès externe au service en utilisant le client de test de service Web. Avant de le faire, connectez-vous en tant qu\'utilisateur avec la capacité moodle/webservice:createtoken et obtenir la clé de sécurité (token) via l\'utilisateur\'s preferences page. You will use this token in the test client. In the test client, also choose an enabled protocol with the token authentication. <strong>WARNING: The functions that you test WILL BE EXECUTED for this user, so be careful what you choose to test!</strong>';
$string['testclient'] = 'Client de test de service Web';
$string['testclientdescription'] = '* Le client du test de service Web <strong>exécute</strong> les fonctions de <strong>REAL</strong>. Ne testez pas les fonctions que vous faites\'t know. <br/>* All existing web service functions are not yet implemented into the test client. <br/>* In order to check that a user cannot access some functions, you can test some functions that you didn\'t allow.<br/>* To see clearer error messages set the debugging to <strong>{$a->mode}</strong> into {$a->atag}.';
$string['testwithtestclient'] = 'Essai du service';
$string['testwithtestclientdescription'] = 'Simuler l\'accès externe au service en utilisant le client de test de service Web. Utilisez un protocole activé avec authentification symbolique. <strong>WARNING: Les fonctions que vous testez SERA EXECUTE, alors soyez prudent ce que vous choisissez de tester!</strong>';
$string['token'] = 'Jeton';
$string['tokenauthlog'] = 'Authentification symbolique';
$string['tokencopied'] = 'Texte copié dans le presse-papiers.';
$string['tokencreatedbyadmin'] = 'Ne peut être réinitialisé que par administrateur (*)';
$string['tokencreator'] = 'Créateur';
$string['tokenfilter'] = 'Filtre de jetons';
$string['tokenfiltersubmit'] = 'Afficher seulement les jetons correspondants';
$string['tokenfilterreset'] = 'Afficher tous les jetons';
$string['tokenname'] = 'Nom';
$string['tokennamehint'] = 'Si vous faites\'t enter a name then a random name will be used.';
$string['tokennameprefix'] = 'Service Web - {$a}';
$string['tokennewmessage'] = 'Bien reçu. Il a gagné\'t be shown again once you leave this page.';
$string['unknownoptionkey'] = 'Clé d\'option inconnue ({$a})';
$string['unnamedstringparam'] = 'Un paramètre chaîne n\'est pas nommé.';
$string['updateusersettings'] = 'Mise à jour';
$string['uploadfiles'] = 'Peut télécharger des fichiers';
$string['uploadfiles_help'] = 'Si activé, n\'importe quel utilisateur peut télécharger des fichiers avec leurs clés de sécurité dans leur propre zone de fichiers privés ou une zone de fichier provisoire. Les quotas de fichiers utilisateurs s\'appliquent.';
$string['userasclients'] = 'Les utilisateurs en tant que clients avec jeton';
$string['userasclientsdescription'] = 'Les étapes suivantes vous aident à configurer le service web Moodle pour les utilisateurs en tant que clients. Ces étapes aident également à configurer la méthode d\'authentification du jeton recommandé (clés de sécurité). Dans ce cas d\'utilisation, l\'utilisateur générera son jeton à partir de la page des clés de sécurité via sa page de préférences.';
$string['usermissingcaps'] = 'Capacités manquantes : {$a}';
$string['usernameorid'] = 'Nom d\'utilisateur / identificateur d\'utilisateur';
$string['usernameorid_help'] = 'Saisissez un nom d\'utilisateur ou un identifiant utilisateur.';
$string['usernotallowed'] = 'L\'utilisateur n\'est pas autorisé pour ce service. D\'abord vous devez autoriser cet utilisateur sur le {$a}\'s allowed users administration page.';
$string['userservices'] = 'Services aux utilisateurs : {$a}';
$string['usersettingssaved'] = 'Paramètres utilisateur enregistrés';
$string['validuntil'] = 'Valable jusqu\'à';
$string['validuntil_empty'] = 'Ce jeton n\'a pas de date d\'expiration.';
$string['validuntil_help'] = 'Si défini, le service sera désactivé après cette date pour cet utilisateur.';
$string['webservice'] = 'Service Web';
$string['webservices'] = 'Services Web';
$string['webservicesoverview'] = 'Aperçu général';
$string['webservicetokens'] = 'Jetons de service Web';
$string['wrongusernamepassword'] = 'Identifiant ou mot de passe incorrect';
$string['wsaccessuserdeleted'] = 'Accès au service Web refusé pour le nom d\'utilisateur supprimé: {$a}';
$string['wsaccessuserexpired'] = 'Accès au service web refusé pour le nom d\'utilisateur expiré : {$a}';
$string['wsaccessusernologin'] = 'Accès au service Web refusé pour nom d\'utilisateur d\'authentification nologin : {$a}';
$string['wsaccessusersuspended'] = 'Accès au service web refusé pour le nom d\'utilisateur suspendu : {$a}';
$string['wsaccessuserunconfirmed'] = 'Accès au service Web refusé pour un nom d\'utilisateur non confirmé : {$a}';
$string['wsclientdoc'] = 'Moodle Web service documentation client';
$string['wsdocapi'] = 'Documentation API';
$string['wsdocumentation'] = 'Documentation sur les services Web';
$string['wsdocumentationdisable'] = 'La documentation du service Web est désactivée.';
$string['wsdocumentationintro'] = 'Pour créer un client, nous vous conseillons de lire le {$a->doclink}';
$string['wsdocumentationlogin'] = 'ou entrez votre nom d\'utilisateur et votre mot de passe:';
$string['wspassword'] = 'Mot de passe du service Web';
$string['wsusername'] = 'Nom d\'utilisateur du service Web';

// Deprecated since Moodle 4.2.
$string['missingversionfile'] = 'Erreur de codage : version. Le fichier php manque pour le composant {$a}';
$string['cannotgetcoursecontents'] = 'Impossible d\'obtenir le contenu du cours';
