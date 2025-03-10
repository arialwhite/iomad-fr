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
 * LTI enrolment plugin version information
 *
 * @package enrol_lti
 * @copyright 2016 Mark Nelson <markn@moodle.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addcontent'] = 'Ajouter du contenu';
$string['adddeployment:name'] = 'Nom du déploiement';
$string['adddeployment:deploymentid'] = 'ID de déploiement';
$string['adddeployment:deploymentid_help'] = 'Chaque déploiement de l\'outil (ce site) dans une plateforme se verra attribuer un ID de déploiement unique à l\'enregistrement. L\'ID de déploiement doit être enregistré avec l\'outil (ce site) avant que le lancement de l\'outil concerné ne soit autorisé.';
$string['adddeployment:invaliddeploymentiderror'] = 'Identification de déploiement non valide. L\'ID de déploiement existe déjà pour l\'enregistrement de cette application.';
$string['addtocourse'] = 'Ajouter au cours';
$string['addtogradebook'] = 'Ajouter au cahier des notes';
$string['allowframeembedding'] = 'Remarque : Il est recommandé que le paramètre d\'administration du site \'Allow frame embedding\' is enabled, so that tools are displayed within a frame rather than in a new window.';
$string['authltimustbeenabled'] = 'Remarque: Ce plugin nécessite que le plugin d\'authentification LTI soit également activé.';
$string['cookiesarerequired'] = 'Les cookies sont bloqués par votre navigateur';
$string['cookiesarerequiredinfo'] = 'Cet outil peut\'t be launched because your browser seems to be blocking third-party cookies.
<br><br>
To use this tool, try changing your browser cookie settings or using a different browser.';
$string['copiedtoclipboard'] = '{$a} copié dans le presse-papiers';
$string['copytoclipboard'] = 'Copier dans le presse-papiers';
$string['couldnotestablishproxy'] = 'Impossible d\'établir un mandataire auprès du consommateur.';
$string['customproperties'] = 'Propriétés personnalisées';
$string['deeplinkingurl'] = 'URL de liaison profonde';
$string['deletedactivity'] = 'Activité supprimée';
$string['deletedactivityalt'] = 'L\'activité partagée par cette instance a été supprimée';
$string['deletedactivitydescription'] = 'L\'activité partagée par cette instance a été supprimée. Vous pouvez sélectionner une autre activité à partager en éditant l\'instance ou, si ce n\'est plus nécessaire, vous pouvez simplement supprimer l\'instance. Supprimer l\'instance supprimera toutes les inscriptions d\'utilisateurs associées.';
$string['deploymentadd'] = 'Ajouter un déploiement';
$string['deploymentaddnotice'] = 'Déploiement ajouté';
$string['deploymentdelete'] = 'Supprimer le déploiement';
$string['deploymentdeleteconfirm'] = 'Avertissement : La suppression d\'un déploiement entraînera une perte d\'accès pour tous les utilisateurs suivant les liens de ressources liés au déploiement de cet outil dans la plateforme. Les services de synchronisation des membres et des grades seront également supprimés pour ces ressources. Voulez-vous vraiment supprimer l\'ID de déploiement \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Déploiement supprimé';
$string['deploymentid'] = 'ID de déploiement';
$string['deployments'] = 'Déploiements';
$string['deploymentsinfo'] = 'Un ID de déploiement est généré par la plateforme lorsque l\'outil est disponible dans un contexte. Cela peut se produire au moment de l\'inscription, ou plus tard, lorsque l\'outil est mis à la disposition d\'un cours ou d\'une catégorie spécifique. L\'ID de déploiement doit être entré ici avant que le lancement de l\'outil ne soit autorisé.';
$string['details'] = 'Détails';
$string['editplatformdetails'] = 'Modifier les détails de la plateforme';
$string['endpointltiversionnotice'] = 'Les paramètres d\'outil ci-dessous sont pour la configuration manuelle LTI 1.3 seulement. Pour les versions antérieures (1.1/2.0), des détails pour les consommateurs peuvent être trouvés sur le \'Published as LTI tools\' page, accessible via course navigation.';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si activé, les utilisateurs peuvent accéder jusqu\'à cette date seulement.';
$string['enrolenddateerror'] = 'La date de fin d\'inscription ne peut être antérieure à la date de début';
$string['enrolisdisabled'] = 'Les'Publish as LTI tool\' plugin is disabled.';
$string['enrolltiversionincorrect'] = 'La ressource n\'est pas configurée pour être utilisée par rapport à l\'historique LTI (versions 1.1/2.0). Veuillez contacter l\'administrateur de cet outil.';
$string['enrolperiod'] = 'Durée des inscriptions';
$string['enrolperiod_help'] = 'Durée de validité de l\'inscription, à partir du moment où l\'utilisateur s\'inscrit du système distant. En cas de handicap, la durée de l\'inscription sera illimitée.';
$string['enrolmentfinished'] = 'Inscription terminée.';
$string['enrolmentnotstarted'] = 'L\'inscription n\'a pas commencé.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si activé, les utilisateurs peuvent accéder à partir de cette date seulement.';
$string['existingregistrationerror'] = 'Un enregistrement existe déjà pour cet émetteur et cet ID client.';
$string['frameembeddingnotenabled'] = 'Pour accéder à l\'outil, veuillez suivre le lien ci-dessous.';
$string['failedrequest'] = 'La demande a échoué. Raison: {$a->raison}';
$string['gradesync'] = 'Synchronisation des classes';
$string['gradesync_help'] = 'Indique si les notes de l\'outil sont envoyées au système distant (consommateur LTI).';
$string['incorrecttoken'] = 'Le jeton était incorrect. Veuillez vérifier l\'URL et réessayer, ou contacter l\'administrateur de cet outil.';
$string['invalidexpiredregistrationurl'] = 'URL d\'enregistrement non valide ou expirée. Veuillez vérifier l\'URL et réessayer.';
$string['invalidrequest'] = 'Demande non valable';
$string['invalidtoolconsumer'] = 'Consommateur d\'outils non valide.';
$string['jwksurl'] = 'URL JWKS';
$string['loginurl'] = 'Lancer l\'URL de connexion';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = "Il y avait un problème pour récupérer la configuration OpenID de la plate-forme. Le résultat n'était pas valide pour JSON. Cela peut aussi être causé par la configuration des hôtes bloqués. Assurez-vous que votre site est configuré pour se connecter au domaine de la plate-forme et essayez à nouveau en utilisant une nouvelle URL d'enregistrement.";
$string['ltiadvlauncherror:missingid'] = 'Données de lancement non valides. Le champ de réclamation personnalisé \'id\' is required to launch an activity or resource over LTI Advantage.';
$string['ltiadvlauncherror:invalidid'] = 'Données de lancement non valides. La ressource \'{$a}\' is unavailable or does not exist.';
$string['ltiadvlauncherror:invalidregistration'] = 'Données de lancement ou configuration d\'outil non valides. Un enregistrement de plateforme n\'a pas pu être trouvé (émetteur : {$a->platform}, ID client : {$a->clientid}).';
$string['ltiadvlauncherror:invaliddeployment'] = 'Données de lancement ou configuration d\'outil non valides. Le déploiement n\'a pas pu être trouvé (ID de déploiement : {$a}).';
$string['ltilegacy'] = 'LTI historique (1,1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Les outils LTI hérités (1.1/2.0) sont dépréciés. Le contenu devrait maintenant être partagé en utilisant LTI Advantage.';
$string['lti13'] = 'Avantage LTI';
$string['lti13launchdetails'] = 'Détails du lancement';
$string['lti13launchdetails_help'] = 'L\'URL de lancement et les propriétés personnalisées ne sont requises que lors de la configuration manuelle d\'un lien ressource dans la plate-forme. Dans la mesure du possible, les enseignants devraient favoriser le processus de sélection du contenu (reliure profonde) pour la création de liens de ressources.';
$string['ltiversion'] = 'Version LTI';
$string['ltiversion_help'] = 'The version of LTI which will be used to access the published content.

LTI Advantage allows content to be published to pre-registered platforms without the need to make changes on the platform whenever new content is published. The security contract is between the platform and the tool.

Legacy versions (1.1 and 2.0), require that a new tool registration is created on the consumer for each piece of newly published content because each piece of published content has its own security contract with the consumer site and must be set up on a case by case basis.';
$string['managedeployments'] = 'Gérer les déploiements';
$string['maxenrolled'] = 'Nombre maximum d\'utilisateurs inscrits';
$string['maxenrolled_help'] = 'Le nombre maximum d\'utilisateurs distants qui peuvent accéder à l\'outil. Si elle est fixée à zéro, le nombre d\'utilisateurs inscrits est illimité.';
$string['maxenrolledreached'] = 'Le nombre maximum d\'utilisateurs distants autorisés à accéder à l\'outil a été atteint.';
$string['membersync'] = 'Synchronisation utilisateur';
$string['membersync_help'] = 'Whether a scheduled task synchronises enrolled users in the remote system with enrolments in this course, creating an account for each remote user as necessary, and enrolling or unenrolling them as required.

If set to no, at the moment when a remote user accesses the tool, an account will be created for them and they will be automatically enrolled.';
$string['membersyncmode'] = 'Mode de synchronisation utilisateur';
$string['membersyncmode_help'] = 'Indique si les utilisateurs distants doivent être inscrits ou non à ce cours.';
$string['membersyncmodeenrolandunenrol'] = 'Inscription de nouveaux utilisateurs manquants et non inscrits';
$string['membersyncmodeenrolnew'] = 'Inscription de nouveaux utilisateurs';
$string['membersyncmodeunenrolmissing'] = 'Désinscrire les utilisateurs manquants';
$string['moodle'] = 'Mouilles';
$string['nodeployments'] = 'Aucun déploiement d\'outil trouvé';
$string['nopublishedcontent'] = 'Aucune ressource ou activité n\'est encore publiée';
$string['notoolsprovided'] = 'Aucun outil fourni';
$string['noregisteredplatforms'] = 'Pas de plateformes enregistrées';
$string['launchdetails'] = 'Détails du lancement';
$string['launchdetails_help'] = 'Une URL de cartouche (également appelée URL de configuration) plus un secret ou une URL de lancement sont nécessaires pour configurer l\'outil.';
$string['launchurl'] = 'Lancer l\'URL';
$string['lti:config'] = 'Configuration \'Publish as LTI tool\' instances';
$string['lti:unenrol'] = 'Unenrol utilisateurs du cours';
$string['opensslconfiginvalid'] = 'LTI 1.3 exige qu\'un openssl.cnf valide soit configuré et disponible sur votre serveur web. Veuillez contacter l\'administrateur du site pour configurer et activer openssl pour ce site.';
$string['opentool'] = 'Outil ouvert';
$string['publishedcontent'] = 'Contenu publié';
$string['publishedcontent_help'] = 'Une ressource ou une activité publiée peut être utilisée sur les plateformes enregistrées via le flux de sélection de contenu (deep linking). De plus, un lien ressource peut être créé manuellement dans la plate-forme en utilisant l\'URL de lancement et les propriétés personnalisées fournies.';
$string['platformdetails'] = 'Détails de la plateforme';
$string['platformdetailsinfo'] = 'Once the tool has been set up in the platform, details from the platform must be recorded here to complete the registration.
<ul>
<li>For dynamic registrations, this information will have been set automatically and no further changes are required.</li>
<li>For manual registrations, this information must be manually copied from the platform.</li>
</ul>';
$string['pluginname'] = 'Publier comme outil LTI';
$string['pluginname_desc'] = 'Les'Publish as LTI tool\' plugin, together with the LTI authentication plugin, allows remote users to access selected courses and activities. In other words, Moodle functions as an LTI tool provider.';
$string['privacy:metadata:enrol_lti_users'] = 'La liste des utilisateurs inscrits via un fournisseur LTI';
$string['privacy:metadata:enrol_lti_users:userid'] = 'L\'ID de l\'utilisateur';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La dernière note de l\'utilisateur a été enregistrée';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Le moment où l\'utilisateur a accédé au cours pour la dernière fois';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Le moment où l\'utilisateur a été inscrit';
$string['provisioningmodestudentlaunch'] = 'Étudiant premier mode de fourniture de lancement';
$string['provisioningmodeteacherlaunch'] = 'Mode de mise à disposition du premier lancement de l\'enseignant';
$string['provisioningmode'] = 'Mode de fourniture';
$string['provisioningmode_help'] = 'This setting determines how accounts are handled on first launch. Several modes are supported:
<ul>
<li>New accounts only (automatic). Accounts will be automatically created for users launching from the platform. This is the default for student launches.</li>
<li>Existing and new accounts (prompt). The user will be given a choice of what to do. They can decide to link an existing account, or have a new account created for them. This is the most flexible option and the default for teacher launches.</li>
<li>Existing accounts only (prompt). The user will be asked to link an existing account and cannot access the tool resources without doing so.</li>
</ul>';
$string['registerplatform:accesstokenurl'] = 'Accès à l\'URL token';
$string['registerplatform:accesstokenurl_help'] = 'L\'URL à laquelle les requêtes d\'accès seront envoyées par l\'outil. Sera fourni par la plateforme.';
$string['registerplatform:authrequesturl'] = 'URL de la requête d\'authentification';
$string['registerplatform:authrequesturl_help'] = 'L\'URL vers laquelle les requêtes d\'authentification OpenID Connect seront envoyées par l\'outil. Sera fourni par la plateforme.';
$string['registerplatform:clientid'] = 'ID client';
$string['registerplatform:clientid_help'] = 'Une chaîne utilisée pour identifier l\'enregistrement de l\'outil sur la plateforme. Sera fourni par la plateforme.';
$string['registerplatform:duplicateregistrationerror'] = 'Numéro de client non valide. Cet ID client est déjà enregistré pour l\'ID de la plateforme fourni.';
$string['registerplatform:jwksurl'] = 'URL du jeu de clés public';
$string['registerplatform:jwksurl_help'] = 'Le jeu de clés public ou URL JWKS, utilisé pour obtenir la plate-forme\'s public key. Will be provided by the platform.';
$string['registerplatform:name'] = 'Nom de la plateforme';
$string['registerplatform:name_help'] = 'Un court nom décrivant la plateforme. Cela peut être changé à tout moment.';
$string['registerplatform:platformid'] = 'ID de la plate-forme (émetteur)';
$string['registerplatform:platformid_help'] = 'L\'URL identifiant la plate-forme d\'apprentissage tierce partie. Sera fourni par la plateforme.';
$string['registerplatform:invalidurlerror'] = 'URL non valide. Avez-vous inclus http:// ou https://?';
$string['registeredplatforms'] = 'Plates-formes enregistrées';
$string['registeredplatformsltiversionnotice'] = 'Les plateformes énumérées ci-dessous sont enregistrées pour la communication LTI 1.3. Pour les versions antérieures, l\'enregistrement des consommateurs n\'est pas requis.';
$string['registerplatformadd'] = 'Enregistrer une plateforme';
$string['registerplatformaddnotice'] = 'Inscription à la plateforme ajoutée';
$string['registerplatformdelete'] = 'Supprimer l\'enregistrement de la plateforme';
$string['registerplatformdeleteconfirm'] = 'Voulez-vous vraiment supprimer l\'enregistrement pour la plateforme \'{$a}\'? This will also remove all tool deployments stored against this registration.';
$string['registerplatformdeletenotice'] = 'Enregistrement de plate-forme supprimé';
$string['registerplatformedit'] = 'Modifier l\'enregistrement';
$string['registerplatformeditnotice'] = 'Mise à jour de l \' enregistrement de la plate-forme';
$string['registration'] = 'Enregistrement des outils publiés';
$string['registrationdeeplinklabel'] = 'Ajouter du contenu à partir de {$a}';
$string['registrationresourcelinklabel'] = 'Lancer le contenu de {$a}';
$string['registrationdynamic'] = 'Enregistrement dynamique';
$string['registrationmanual'] = 'Enregistrement manuel';
$string['registrationstatus'] = 'État';
$string['registrationstatusactive'] = 'Actif';
$string['registrationstatuspending'] = 'En attente';
$string['registrationurl'] = 'URL d\'enregistrement';
$string['registrationurlinfomessage'] = 'Si la plateforme prend en charge l\'enregistrement dynamique, utilisez l\'URL d\'enregistrement ci-dessous. Pour plus d\'informations sur l\'enregistrement dynamique, voir la documentation <a href="{$a}">Publier comme outil LTI</a>.';
$string['registrationurl_help'] = 'Si une URL d\'enregistrement (également appelée URL proxy) est utilisée, l\'outil est automatiquement configuré.';
$string['remotesystem'] = 'Système à distance';
$string['requirecompletion'] = 'Exiger l\'achèvement du cours ou de l\'activité avant la synchronisation des grades';
$string['returnurlnotset'] = 'L\'URL de retour n\'était pas définie.';
$string['roleinstructor'] = 'Rôle de l\'enseignant';
$string['roleinstructor_help'] = 'Le rôle assigné dans l\'outil au professeur distant.';
$string['rolelearner'] = 'Rôle des étudiants';
$string['rolelearner_help'] = 'Le rôle assigné dans l\'outil à l\'étudiant à distance.';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Une chaîne de caractères qui est partagée avec le système distant (consommateur LTI) pour donner accès à l\'outil.';
$string['sharedexternaltools'] = 'Publié en tant qu\'outils LTI';
$string['successfulregistration'] = 'Enregistrement réussi';
$string['tasksyncgrades'] = 'Publier comme synchronisation de la qualité de l\'outil LTI';
$string['tasksyncmembers'] = 'Publier en tant que synchronisation des utilisateurs de l\'outil LTI';
$string['tooldetails'] = 'Détails de l\'outil';
$string['toolsprovided'] = 'Outils publiés';
$string['toolsprovided_help'] = 'Un outil peut être partagé avec un autre site en fournissant des détails de lancement ou une URL d\'enregistrement.';
$string['tooltobeprovided'] = 'Outil à publier';
$string['toolurl'] = 'URL de l\'outil';
$string['userdefaultvalues'] = 'Valeurs par défaut de l\'utilisateur';
$string['viewplatformdetails'] = 'Afficher les détails de la plateforme';
$string['viewtoolendpoints'] = 'Afficher les paramètres de l\'outil';
$string['cartridgeurl'] = 'URL de la cartouche';
