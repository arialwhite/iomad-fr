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
 * Strings for component 'tool_dataprivacy'
 *
 * @package    tool_dataprivacy
 * @copyright  2018 onwards Jun Pataleta
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Confidentialité des données';
$string['pluginname_help'] = 'Greffon de confidentialité des données';
$string['activitiesandresources'] = 'Activités et ressources';
$string['addcategory'] = 'Ajouter une catégorie';
$string['addnewdefaults'] = 'Ajouter un nouveau module par défaut';
$string['addpurpose'] = 'Ajouter le but';
$string['approve'] = 'Approuver';
$string['approvedrequestsubmitted'] = 'Votre demande a été soumise et sera traitée sous peu.';
$string['approverequest'] = 'Approuver la demande';
$string['approverequestall'] = 'Approuver la demande (toutes les données)';
$string['approveselectedcourses'] = 'Approuver les cours sélectionnés';
$string['automaticdatadeletionapproval'] = 'Approbation de la demande de suppression automatique de données';
$string['automaticdatadeletionapproval_desc'] = 'Si activé, les demandes de suppression de données sont automatiquement approuvées.<br/>Notez que l\'approbation automatique ne s\'appliquera qu\'aux nouvelles demandes de suppression de données avec ce paramètre activé. Les demandes de suppression de données existantes en attente d\'approbation devront encore être approuvées manuellement par l\'agent de protection des renseignements personnels.';
$string['automaticdataexportapproval'] = 'Approbation automatique de la demande d\'exportation de données';
$string['automaticdataexportapproval_desc'] = 'Si activé, les demandes d\'exportation de données sont automatiquement approuvées.<br/> Notez que l\'approbation automatique ne s\'appliquera qu\'aux nouvelles demandes d\'exportation de données avec ce paramètre activé. Les demandes d\'exportation de données existantes en attente d\'approbation devront encore être approuvées manuellement par l\'agent de protection des renseignements personnels.';
$string['automaticdeletionrequests'] = 'Créer des requêtes de suppression automatique de données';
$string['automaticdeletionrequests_desc'] = 'Si activé, une demande de suppression de données sera automatiquement créée pour tout compte utilisateur supprimé manuellement.';
$string['bulkapproverequests'] = 'Approuver les demandes';
$string['bulkdenyrequests'] = 'Refuser les demandes';
$string['cachedef_purpose'] = 'Utilisation des données';
$string['cachedef_purpose_overrides'] = 'Objets de dépassement dans l\'outil de confidentialité des données';
$string['cachedef_contextlevel'] = 'Niveaux de contexte Objet et catégorie';
$string['cancelrequest'] = 'Annuler la demande';
$string['cancelrequestconfirmation'] = 'Voulez-vous annuler cette demande de données ?';
$string['cannotreset'] = 'Impossible de réinitialiser cette requête. Seules les demandes rejetées peuvent être réinitialisées.';
$string['categories'] = 'Catégories';
$string['category'] = 'Catégorie';
$string['category_help'] = 'Une catégorie du registre de données décrit un type de données. Une nouvelle catégorie peut être ajoutée, ou si l\'Héritage est sélectionné, la catégorie de données d\'un contexte supérieur est appliquée. Les contextes sont (de bas à haut): Blocs > Modules d\'activité > Cours > Catégories > Site.';
$string['categorycreated'] = 'Catégorie créée';
$string['categorydefault'] = 'Catégorie par défaut';
$string['categorydefault_help'] = 'La catégorie par défaut est la catégorie de données appliquée à toute nouvelle instance. Si Inherit est sélectionné, la catégorie de données d\'un contexte supérieur est appliquée. Les contextes sont (de bas à haut): Blocs > Modules d\'activité > Cours > Catégories > Utilisateur > Site.';
$string['categorieslist'] = 'Liste des catégories de données';
$string['categoryupdated'] = 'Catégorie mise à jour';
$string['close'] = 'Fermer';
$string['compliant'] = 'Conformité';
$string['confirmapproval'] = 'Voulez-vous vraiment approuver cette demande de données?';
$string['confirmbulkapproval'] = 'Voulez-vous vraiment approuver en bloc les demandes de données sélectionnées?';
$string['confirmcompletion'] = 'Voulez-vous vraiment marquer cette demande d\'utilisateur aussi complète?';
$string['confirmcontextdeletion'] = 'Voulez-vous vraiment confirmer la suppression des contextes sélectionnés ? Cela supprimera également toutes les données utilisateur pour leurs sous-contextes respectifs.';
$string['confirmdenial'] = 'Voulez-vous vraiment refuser cette demande de données?';
$string['confirmbulkdenial'] = 'Voulez-vous vraiment en vrac refuser les demandes de données sélectionnées?';
$string['confirmrequestresubmit'] = 'Voulez-vous vraiment annuler la requête {$a->type} courante pour {$a->nom d\'utilisateur} et la soumettre à nouveau?';
$string['contactdataprotectionofficer'] = 'Contactez l\'agent de protection de la vie privée';
$string['contactdataprotectionofficer_desc'] = 'Si activé, les utilisateurs pourront contacter l\'agent de confidentialité et faire une demande de données via un lien sur leur page de profil.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Utilisateur';
$string['contextlevelname40'] = 'Catégories de cours';
$string['contextlevelname50'] = 'Cours';
$string['contextlevelname70'] = 'Modules d\'activité';
$string['contextlevelname80'] = 'Blocs';
$string['contextpurposecategorysaved'] = 'Objet et catégorie sauvegardés.';
$string['contactdpoviaprivacypolicy'] = 'Veuillez communiquer avec l\'agent de protection des renseignements personnels tel que décrit dans la politique de protection des renseignements personnels.';
$string['createcategory'] = 'Créer une catégorie de données';
$string['createdeletedatarequest'] = 'Créer une requête de suppression de données';
$string['createnewdatarequest'] = 'Créer une nouvelle requête de données';
$string['createpurpose'] = 'Créer un objectif de données';
$string['creationauto'] = 'Automatiquement';
$string['creationmanual'] = 'Manuelle';
$string['datadeletion'] = 'Suppression des données';
$string['datadeletionpagehelp'] = 'Les données pour lesquelles la période de conservation a expiré sont énumérées ici. Veuillez examiner et confirmer la suppression des données, qui sera alors exécutée par la tâche programmée "Supprimer les contextes expirés".';
$string['dataprivacy:makedatarequestsforchildren'] = 'Demande de données pour mineurs';
$string['dataprivacy:managedatarequests'] = 'Gérer les demandes de données';
$string['dataprivacy:managedataregistry'] = 'Gérer le registre des données';
$string['dataprivacy:downloadownrequest'] = 'Télécharger vos propres données exportées';
$string['dataprivacy:downloadallrequests'] = 'Télécharger les données exportées pour tout le monde';
$string['dataprivacy:requestdeleteforotheruser'] = 'Demander la suppression des données pour le compte d\'un autre utilisateur';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Demander la suppression des données pour les mineurs';
$string['dataprivacy:requestdelete'] = 'Demander la suppression des données pour vous-même';
$string['dataregistry'] = 'Registre des données';
$string['dataregistryinfo'] = 'Le registre des données permet de définir des catégories (types de données) et des finalités (les raisons du traitement des données) pour tous les contenus du site - des utilisateurs aux cours jusqu\'aux activités et aux blocs. À chaque fin, une période de conservation peut être fixée. Lorsqu\'une période de conservation est expirée, les données sont indiquées et répertoriées en vue de leur suppression, en attendant la confirmation de l\'administration.';
$string['dataretentionexplanation'] = 'Ce résumé montre les catégories et les finalités par défaut pour la conservation des données utilisateur. Certaines zones peuvent avoir des catégories et des objectifs plus spécifiques que ceux énumérés ici.';
$string['dataretentionsummary'] = 'Résumé de la conservation des données';
$string['datarequestcreatedforuser'] = 'Demande de données créée pour {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Création automatique à partir d\'une tâche programmée (utilisateur préexistant supprimé).';
$string['datarequestemailsubject'] = 'Demande de données : {$a}';
$string['datarequestcreatedupondelete'] = 'Création automatique lors de la suppression de l\'utilisateur.';
$string['datarequests'] = 'Demandes de données';
$string['datecomment'] = '[{$a->date}]:' . PHP_EOL . ' {$a->comment}';
$string['daterequested'] = 'Date demandée';
$string['daterequesteddetail'] = 'Date demandée:';
$string['defaultsinfo'] = 'Les catégories et fins par défaut sont appliquées à toutes les instances nouvelles et existantes où une valeur n\'est pas définie.';
$string['defaultswarninginfo'] = 'Avertissement : modifier ces valeurs par défaut peut affecter la période de conservation des instances existantes.';
$string['deletecategory'] = 'Supprimer la catégorie';
$string['deletecategorytext'] = 'Voulez-vous vraiment supprimer la catégorie \'{$a}\'?';
$string['deletedefaults'] = 'Supprimer les valeurs par défaut : {$a}';
$string['deletedefaultsconfirmation'] = 'Voulez-vous vraiment supprimer la catégorie et le but par défaut pour les modules {$a} ?';
$string['deleteexpiredcontextstask'] = 'Supprimer les contextes expirés';
$string['deleteexpireddatarequeststask'] = 'Supprimer les fichiers de demande d\'exportation de données expirés';
$string['deleteexistingdeleteduserstask'] = 'Créer une demande de suppression de données pour les utilisateurs supprimés préexistants';
$string['deletemyaccount'] = 'Supprimer mon compte';
$string['deletepurpose'] = 'Supprimer le but';
$string['deletepurposetext'] = 'Voulez-vous vraiment supprimer le but \'{$a}\'?';
$string['defaultssaved'] = 'Par défaut enregistrés';
$string['deny'] = 'Refuser';
$string['denyrequest'] = 'Refuser la demande';
$string['deprecated'] = 'Déprécié';
$string['deprecatedexplanation'] = 'Ce plugin utilise une ancienne version de l\'une des interfaces de confidentialité et devrait être mis à jour.';
$string['download'] = 'Télécharger';
$string['downloadexpireduser'] = 'Le téléchargement a expiré. Soumettre une nouvelle demande si vous souhaitez exporter vos données personnelles.';
$string['dporolemapping'] = 'Cartographie des rôles des agents de protection de la vie privée';
$string['dporolemapping_desc'] = 'L\'agent de protection des renseignements personnels peut gérer les demandes de données. L\'outil de capacité/la confidentialité des données:les demandes gérées doivent être autorisées pour qu\'un rôle soit inscrit à titre d\'option de cartographie des rôles des agents de protection de la vie privée.';
$string['editcategories'] = 'Modifier les catégories';
$string['editcategory'] = 'Modifier la catégorie';
$string['editcategories'] = 'Modifier les catégories';
$string['editdefaults'] = 'Édition par défaut : {$a}';
$string['editmoduledefaults'] = 'Modifier les valeurs par défaut du module';
$string['editpurpose'] = 'Modifier le but';
$string['editpurposes'] = 'Modifier les fins';
$string['effectiveretentionperiodcourse'] = '{$a} (après la date de fin du cours)';
$string['effectiveretentionperioduser'] = '{$a} (depuis la dernière fois que l\'utilisateur a accédé au site)';
$string['emailsalutation'] = 'Cher {$a},';
$string['errorcannotrequestdeleteforself'] = 'Vous faites't have permission to create deletion request for yourself.';
$string['errorcannotrequestdeleteforother'] = 'Vous faites't have permission to create deletion request for this user.';
$string['errorcannotrequestexportforself'] = 'Vous faites't have permission to create export request for yourself.';
$string['errorcontactdpodisabled'] = 'L\'option de communiquer avec l\'agent de protection des renseignements personnels est désactivée.';
$string['errorinvalidrequestcomments'] = 'Le champ commentaires ne peut contenir que du texte clair.';
$string['errorinvalidrequestcreationmethod'] = 'Méthode de création de requête non valide!';
$string['errorinvalidrequeststatus'] = 'Statut de demande non valide !';
$string['errorinvalidrequesttype'] = 'Type de demande non valide !';
$string['errornocapabilitytorequestforothers'] = 'L\'utilisateur {$a->requestedby} fait\'t have the capability to make a data request on behalf of user {$a->userid}';
$string['errornoselectedcourse'] = 'Vous devez sélectionner au moins un cours';
$string['errornoexpiredcontexts'] = 'Il n\'y a pas de contextes expirés à traiter';
$string['errorcontexthasunexpiredchildren'] = 'Le contexte « {$a} » comporte toujours des sous-contextes qui n\'ont pas encore expiré. Aucun contexte n\'a été signalé pour suppression.';
$string['errorrequestalreadyexists'] = 'Vous avez déjà une demande en cours.';
$string['errorrequestnotfound'] = 'Demande non trouvée';
$string['errorrequestnotwaitingforapproval'] = 'La demande n\'est pas en attente d\'approbation. Soit il n\'est pas encore prêt, soit il a déjà été traité.';
$string['errorsendingmessagetodpo'] = 'Une erreur a été rencontrée en essayant d\'envoyer un message à {$a}.';
$string['exceptionnotificationsubject'] = 'Exception survenue pendant le traitement des données de confidentialité';
$string['exceptionnotificationbody'] = '<p>Exception occurred while calling <b>{$a->fullmethodname}</b>.<br>This means that plugin <b>{$a->component}</b> did not complete the processing of data. The following exception information may be passed on to the plugin developer:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['expiredretentionperiodtask'] = 'Période de rétention expirée';
$string['expiry'] = 'Expiration';
$string['expandplugin'] = 'Expand et effondrement plugin.';
$string['expandplugintype'] = 'Élargir et effondrer le type de plugin.';
$string['explanationtitle'] = 'Icônes utilisées sur cette page et ce qu\'ils signifient.';
$string['external'] = 'Complémentaire';
$string['externalexplanation'] = 'Un plugin supplémentaire est installé sur ce site.';
$string['filteroption'] = '{$a->catégorie}: {$a->nom}';
$string['filterexportdata'] = 'Approuver la demande (données de cours sélectionnés)';
$string['frontpagecourse'] = 'Cours d\'accueil du site';
$string['gdpr_art_6_1_a_description'] = 'La personne concernée a donné son consentement au traitement de ses données personnelles à une ou plusieurs fins spécifiques';
$string['gdpr_art_6_1_a_name'] = 'Consentement (RGPD art. 6.1 a))';
$string['gdpr_art_6_1_b_description'] = 'Le traitement est nécessaire pour l\'exécution d\'un contrat auquel la personne concernée est partie ou pour prendre des mesures à la demande de la personne concernée avant de conclure un contrat';
$string['gdpr_art_6_1_b_name'] = 'Contrat (RGPD art. 6.1 b))';
$string['gdpr_art_6_1_c_description'] = 'Le traitement est nécessaire au respect d\'une obligation légale à laquelle le contrôleur est soumis';
$string['gdpr_art_6_1_c_name'] = 'Obligation juridique (RGPD art 6.1 c))';
$string['gdpr_art_6_1_d_description'] = 'Le traitement est nécessaire pour protéger les intérêts vitaux de la personne concernée ou d\'une autre personne physique';
$string['gdpr_art_6_1_d_name'] = 'Intérêts vitaux (RGPD art. 6.1 d))';
$string['gdpr_art_6_1_e_description'] = 'Le traitement est nécessaire à l\'accomplissement d\'une tâche effectuée dans l\'intérêt public ou dans l\'exercice de l\'autorité officielle conférée au contrôleur';
$string['gdpr_art_6_1_e_name'] = 'Fonction publique (RGPD art. 6.1 e))';
$string['gdpr_art_6_1_f_description'] = 'Le traitement est nécessaire aux fins des intérêts légitimes poursuivis par le responsable du traitement ou par un tiers, sauf lorsque ces intérêts sont contredits par les intérêts ou les droits et libertés fondamentaux de la personne concernée qui exigent la protection des données à caractère personnel, en particulier lorsque la personne concernée est un enfant';
$string['gdpr_art_6_1_f_name'] = 'Intérêts légitimes (RGPD art. 6.1 f))';
$string['gdpr_art_9_2_a_description'] = 'La personne concernée a donné son consentement explicite au traitement de ces données à caractère personnel à une ou plusieurs fins spécifiées, sauf lorsque le droit de l\'Union ou du pays membre prévoit que l\'interdiction visée au paragraphe 1 du RGPD L\'article 9 ne peut être levée par la personne concernée';
$string['gdpr_art_9_2_a_name'] = 'Consentement explicite (RGPD art. 9.2 a))';
$string['gdpr_art_9_2_b_description'] = 'Le traitement est nécessaire aux fins de l\'exécution des obligations et de l\'exercice des droits spécifiques du responsable du traitement ou de la personne concernée dans le domaine du droit de l\'emploi, de la sécurité sociale et de la protection sociale dans la mesure où il est autorisé par le droit de l\'Union ou d\'un État membre ou par une convention collective en vertu du droit de l\'État membre prévoyant des garanties appropriées pour les droits fondamentaux et les intérêts de la personne concernée';
$string['gdpr_art_9_2_b_name'] = 'Loi sur l\'emploi et la sécurité sociale/protection (RGPD art. 9.2 b))';
$string['gdpr_art_9_2_c_description'] = 'Le traitement est nécessaire pour protéger les intérêts vitaux de la personne concernée ou d\'une autre personne physique lorsque la personne concernée est physiquement ou juridiquement incapable de donner son consentement';
$string['gdpr_art_9_2_c_name'] = 'Protection des intérêts vitaux (RGPD art. 9.2 c))';
$string['gdpr_art_9_2_d_description'] = 'Le traitement est effectué dans le cadre de ses activités légitimes avec des garanties appropriées par une fondation, une association ou tout autre organisme à but non lucratif ayant un but politique, philosophique, religieux ou syndical et à condition que le traitement concerne uniquement les membres ou les anciens membres de l\'organisme ou les personnes qui ont des contacts réguliers avec lui dans le cadre de ses objectifs et que les données à caractère personnel ne soient pas divulguées en dehors de cet organisme sans le consentement des personnes concernées';
$string['gdpr_art_9_2_d_name'] = 'Activités légitimes concernant les membres/contacts étroits d\'une fondation, d\'une association ou d\'un autre organisme sans but lucratif (RGPD art. 9.2 d))';
$string['gdpr_art_9_2_e_description'] = 'Le traitement concerne les données à caractère personnel qui sont manifestement rendues publiques par la personne concernée';
$string['gdpr_art_9_2_e_name'] = 'Données rendues publiques par la personne concernée (RGPD art. 9.2 e))';
$string['gdpr_art_9_2_f_description'] = 'Un traitement est nécessaire pour l \' établissement, l \' exercice ou la défense des litiges ou lorsque les tribunaux agissent en leur qualité de juges';
$string['gdpr_art_9_2_f_name'] = 'Réclamations et actions en justice (RGPD art. 9.2 f))';
$string['gdpr_art_9_2_g_description'] = 'Le traitement est nécessaire pour des raisons d\'intérêt public substantiel, sur la base du droit de l\'Union ou d\'un État membre qui est proportionné à l\'objectif poursuivi, respecte l\'essence du droit à la protection des données et prévoit des mesures appropriées et spécifiques pour sauvegarder les droits fondamentaux et les intérêts de la personne concernée';
$string['gdpr_art_9_2_g_name'] = 'Intérêt public substantiel (RGPD art. 9.2 g))';
$string['gdpr_art_9_2_h_description'] = 'Le traitement est nécessaire aux fins de la médecine préventive ou professionnelle, de l\'évaluation de la capacité de travail du salarié, du diagnostic médical, de la fourniture de soins ou de traitements médicaux ou sociaux ou de la gestion des systèmes et services de santé ou de soins sociaux sur la base du droit de l\'Union ou d\'un État membre ou en vertu d\'un contrat avec un professionnel de la santé et sous réserve des conditions et garanties visées au paragraphe 3 du RGPD Article 9';
$string['gdpr_art_9_2_h_name'] = 'À des fins médicales (RGPD art. 9.2 h))';
$string['gdpr_art_9_2_i_description'] = 'Le traitement est nécessaire pour des raisons d\'intérêt public dans le domaine de la santé publique, telles que la protection contre les menaces transfrontières graves pour la santé ou la garantie de normes élevées de qualité et de sécurité des soins de santé et des médicaments ou dispositifs médicaux, sur la base du droit de l\'Union ou d\'un État membre qui prévoit des mesures appropriées et spécifiques pour sauvegarder les droits et libertés de la personne concernée, en particulier le secret professionnel';
$string['gdpr_art_9_2_i_name'] = 'Santé publique (RGPD art. 9.2 i))';
$string['gdpr_art_9_2_j_description'] = 'Le traitement est nécessaire à des fins d\'archivage dans l\'intérêt public, à des fins de recherche scientifique ou historique ou à des fins statistiques, conformément à l\'article 89, paragraphe 1, sur la base du droit de l\'Union ou des États membres, qui sont proportionnées à l\'objectif poursuivi, respectent l\'essence du droit à la protection des données et prévoient des mesures appropriées et spécifiques pour sauvegarder les droits fondamentaux et les intérêts de la personne concernée';
$string['gdpr_art_9_2_j_name'] = 'Intérêt public, ou recherche scientifique/historique/statistique (RGPD art. 9.2 j))';
$string['hide'] = 'Tout tomber';
$string['httpwarning'] = 'Toute donnée téléchargée à partir de ce site ne peut pas être chiffrée. Veuillez contacter votre administrateur système et demander qu\'ils installent SSL sur ce site.';
$string['inherit'] = 'Héritage';
$string['lawfulbases'] = 'Bases légales';
$string['lawfulbases_help'] = 'Choisissez au moins une option qui servira de base légale pour le traitement des données personnelles. Pour plus de détails sur ces bases légales, voir <a href="https://gdpr-info.eu/art-6-gdpr/"cible="_blank"> RGPD Art. 6.1 </a>';
$string['markcomplete'] = 'Marquer comme complet';
$string['markedcomplete'] = 'Votre demande a été jugée complète par l\'agent de protection de la vie privée.';
$string['messageprovider:contactdataprotectionofficer'] = 'Demandes de données';
$string['messageprovider:datarequestprocessingresults'] = 'Résultats du traitement des demandes de données';
$string['messageprovider:notifyexceptions'] = 'Demandes de données exceptions notifications';
$string['message'] = 'Message';
$string['messagelabel'] = 'Message :';
$string['moduleinstancename'] = '{$a->nom de l\'instance} ({$a->nom du module})';
$string['mypersonaldatarequests'] = 'Mes demandes de données personnelles';
$string['nameandparent'] = '{$a->parent} / {$a->nom}';
$string['nameemail'] = '{$a->nom} ({$a->email})';
$string['nchildren'] = 'Enfants';
$string['newrequest'] = 'Nouvelle demande';
$string['nodatarequests'] = 'Il n\'y a pas de demande de données';
$string['nodatarequestsmatchingfilter'] = 'Aucune requête de données ne correspond au filtre donné';
$string['noactivitiestoload'] = 'Aucune activité';
$string['noassignedroles'] = 'Aucun rôle assigné dans ce contexte';
$string['noblockstoload'] = 'Pas de blocs';
$string['nocategories'] = 'Il n\'y a pas encore de catégories';
$string['nocoursestoload'] = 'Aucune activité';
$string['noexpiredcontexts'] = 'Ce niveau de contexte n\'a pas de données pour lesquelles la période de conservation a expiré.';
$string['nopersonaldatarequests'] = 'Vous faites't have any personal data requests';
$string['nopurposes'] = 'Il n\'y a pas encore de but';
$string['nosubjectaccessrequests'] = 'Il n\'y a pas de demandes de données sur lesquelles vous devez agir';
$string['nosystemdefaults'] = 'Le but et la catégorie du site n\'ont pas encore été définis.';
$string['notset'] = 'Non défini (utiliser la valeur par défaut)';
$string['notyetexpired'] = '{$a} (non encore expiré)';
$string['nocoursetofilter'] = 'L\'utilisateur est\'t enrolled in any courses to select';
$string['overrideinstances'] = 'Réinitialiser les instances avec des valeurs personnalisées';
$string['pluginregistry'] = 'Registre de confidentialité du plugin';
$string['pluginregistrytitle'] = 'Registre de respect de la confidentialité du plugin';
$string['privacy'] = 'Vie privée';
$string['privacyofficeronly'] = 'Seuls les utilisateurs auxquels on attribue un rôle d\'agent de protection de la vie privée ({$a}) ont accès à ce contenu.';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Les filtres actuellement appliqués à la page des demandes de données.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Le nombre de demandes de données que l\'utilisateur préfère voir sur une page';
$string['privacy:metadata:purpose'] = 'Informations tirées des données fournies pour ce site.';
$string['privacy:metadata:purpose:usermodified'] = 'L\'ID de l\'utilisateur qui a modifié le but';
$string['privacy:metadata:request'] = 'Informations sur les demandes de données personnelles (demandes d\'accès au sujet et de suppression) faites pour ce site.';
$string['privacy:metadata:request:comments'] = 'Tout commentaire de l\'utilisateur accompagnant la demande.';
$string['privacy:metadata:request:userid'] = 'L\'ID de l\'utilisateur auquel appartient la requête';
$string['privacy:metadata:request:requestedby'] = 'L\'ID de l\'utilisateur qui fait la demande, s\'il est fait au nom d\'un autre utilisateur.';
$string['privacy:metadata:request:dpocomment'] = 'Tout commentaire du site\'s privacy officer regarding the request.';
$string['privacy:metadata:request:timecreated'] = 'L\'horodatage indiquant quand la demande a été faite par l\'utilisateur.';
$string['privacyrequestexpiry'] = 'Expiration de la demande de données';
$string['privacyrequestexpiry_desc'] = 'Le temps que les demandes de données approuvées seront disponibles pour téléchargement avant l\'expiration. Si elle est fixée à zéro, il n\'y a pas de limite de temps.';
$string['protected'] = 'Protégé';
$string['protectedlabel'] = 'La conservation de ces données a un précédent juridique plus élevé que celui d\'un utilisateur.'s request to be forgotten. This data will only be deleted after the retention period has expired.';
$string['purpose'] = 'Objet';
$string['purpose_help'] = 'Le but décrit la raison du traitement des données. Un nouveau but peut être ajouté, ou si l\'Héritage est sélectionné, le but d\'un contexte supérieur est appliqué. Les contextes sont (de bas à haut): Blocs > Modules d\'activité > Cours > Catégories > Utilisateur > Site.';
$string['purposecreated'] = 'Objectif créé';
$string['purposedefault'] = 'Objet par défaut';
$string['purposedefault_help'] = 'Le but par défaut est le but qui est appliqué à toute nouvelle instance. Si Inherit est sélectionné, le but d\'un contexte supérieur est appliqué. Les contextes sont (de bas à haut): Blocs > Modules d\'activité > Cours > Catégories > Utilisateur > Site.';
$string['purposes'] = 'Objet';
$string['purposeslist'] = 'Liste des finalités des données';
$string['purposeupdated'] = 'Objectif actualisé';
$string['replyto'] = 'Réponse à';
$string['requestactions'] = 'Actions';
$string['requestapproved'] = 'La demande a été approuvée';
$string['requestby'] = 'Demande présentée par';
$string['requestbydetail'] = 'Demande présentée par:';
$string['requestcomments'] = 'Commentaires';
$string['requestcomments_help'] = 'Cette case vous permet d\'entrer tout autre détail concernant votre demande de données.';
$string['requestcreation'] = 'Création';
$string['requestdenied'] = 'La demande a été rejetée.';
$string['requestemailintro'] = 'Vous avez reçu une demande de données :';
$string['requestfor'] = 'Utilisateur';
$string['requestmarkedcomplete'] = 'La demande a été marquée comme étant complète';
$string['requestorigin'] = 'Site';
$string['requestsapproved'] = 'Les demandes ont été approuvées';
$string['requestsdenied'] = 'Les demandes ont été rejetées.';
$string['requeststatus'] = 'État';
$string['requestsubmitted'] = 'Votre demande a été soumise à l\'agent de protection des renseignements personnels';
$string['requesttype'] = 'Type';
$string['requesttypeuser'] = '{$a->typename} ({$a->utilisateur})';
$string['requesttype_help'] = 'Choisissez la raison de contacter l\'agent de protection de la vie privée. Soyez conscient que la suppression de toutes les données personnelles vous empêchera de vous connecter au site.';
$string['requesttypedelete'] = 'Supprimer toutes mes données personnelles';
$string['requesttypedeleteshort'] = 'Supprimer';
$string['requesttypeexport'] = 'Exporter toutes mes données personnelles';
$string['requesttypeexportallowfiltering'] = 'Exporter mes données personnelles';
$string['requesttypeexportshort'] = 'Exportation';
$string['requesttypeothers'] = 'Enquête générale';
$string['requesttypeothersshort'] = 'Message';
$string['requireallenddatesforuserdeletion'] = 'Considérer les cours sans date de fin comme actifs';
$string['requireallenddatesforuserdeletion_desc'] = 'When calculating user expiry, several factors are considered:

* the user\'s last login time is compared against the retention period for users; and
* whether the user is actively enrolled in any courses.

When checking the active enrolment in a course, if the course has no end date then this setting is used to determine whether that course is considered active or not.

If the course has no end date, and this setting is enabled, then the user cannot be deleted.';
$string['requiresattention'] = 'Il faut être attentif.';
$string['requiresattentionexplanation'] = 'Ce plugin n\'implémente pas l\'API de confidentialité de Moodle. Si ce plugin stocke des données personnelles, il ne pourra pas être exporté ou supprimé via Moodle\'s privacy system.';
$string['resubmitrequestasnew'] = 'Envoyer de nouveau en tant que nouvelle requête';
$string['resubmitrequest'] = 'Envoyer à nouveau une requête {$a->type} pour {$a->nom d\'utilisateur}';
$string['resubmittedrequest'] = 'La demande existante {$a->type} pour {$a->nom d\'utilisateur} a été annulée et soumise à nouveau';
$string['resultdeleted'] = 'Vous avez récemment demandé que votre compte et vos données personnelles soient supprimés. Ce processus a été terminé et vous ne pourrez plus vous connecter.';
$string['resultdownloadready'] = 'Votre copie de vos données personnelles à partir de {$a} que vous avez récemment demandé est maintenant disponible en téléchargement à partir du lien suivant.';
$string['reviewdata'] = 'Révision des données';
$string['retentionperiod'] = 'Période de conservation';
$string['retentionperiod_help'] = 'La période de conservation précise la durée de conservation des données. Lorsque la période de conservation est expirée, les données sont indiquées et répertoriées pour suppression, en attente de confirmation par l\'administration.';
$string['retentionperiodnotdefined'] = 'Aucune période de rétention n\'a été définie';
$string['retentionperiodzero'] = 'Pas de période de rétention';
$string['roleoverrides'] = 'Dépassement des rôles';
$string['selectbulkaction'] = 'Veuillez sélectionner une action en vrac.';
$string['selectdatarequests'] = 'Veuillez sélectionner les demandes de données.';
$string['selectuserdatarequest'] = 'Sélectionner {$a->nom d\'utilisateur}\'s {$a->requesttype} data request.';
$string['send'] = 'Envoyer';
$string['sensitivedatareasons'] = 'Raisons sensibles du traitement des données personnelles';
$string['sensitivedatareasons_help'] = 'Choisissez une ou plusieurs raisons applicables qui dispensent l\'interdiction de traiter des données personnelles sensibles liées à cette fin. Pour plus d\'informations, voir <a href="https://gdpr-info.eu/art-9-gdpr/" cible="_blank"> RGPD Art. 9.2</a>';
$string['setdefaults'] = 'Définir les valeurs par défaut';
$string['showdataretentionsummary'] = 'Afficher le résumé de la conservation des données';
$string['showdataretentionsummary_desc'] = 'Si activé, un lien vers le résumé de conservation des données est affiché dans le pied de page et dans les utilisateurs\' profiles.';
$string['statusapproved'] = 'Approuvé';
$string['statusawaitingapproval'] = 'En attente d \' approbation';
$string['statuscancelled'] = 'Annulé';
$string['statuscomplete'] = 'Terminé';
$string['statusready'] = 'Téléchargement prêt';
$string['statusdeleted'] = 'Supprimé';
$string['statusdetail'] = 'État :';
$string['statusexpired'] = 'Expiré';
$string['statusprocessing'] = 'Traitement';
$string['statuspending'] = 'En attente';
$string['statusrejected'] = 'Rejeté';
$string['subjectscope'] = 'Objet';
$string['subjectscope_help'] = 'La portée du sujet énumère les rôles qui peuvent être assignés dans ce contexte.';
$string['summary'] = 'Résumé de la configuration du registre';
$string['systemconfignotsetwarning'] = 'Un but et une catégorie de sites n\'ont pas été définis. Lorsque ces données ne sont pas définies, toutes les données seront supprimées lors du traitement des demandes de suppression.';
$string['selectcourses'] = 'Sélectionnez les cours à exporter';
$string['statuspreprocessing'] = 'Prétraitement';
$string['user'] = 'Utilisateur';
$string['userlistnoncompliant'] = 'Fournisseur de liste d\'utilisateurs manquant';
$string['userlistexplanation'] = 'Ce plugin a le fournisseur de base, mais devrait également mettre en œuvre le fournisseur de liste d\'utilisateurs pour le plein soutien de la fonctionnalité de confidentialité.';
$string['allowfiltering'] = 'Permettre le filtrage des exportations par cours';
$string['allowfiltering_desc'] = 'If enabled, the privacy officer can choose to export user data from selected courses instead of all courses. When this feature is enabled,
 export requests will start from \'Pending\' and can only be approved after a background task has completed.';
$string['viewrequest'] = 'Afficher la demande';
$string['visible'] = 'Élargir tout';
$string['unexpiredrolewithretention'] = '{$a->rétention} (Non expiré)';
$string['expiredrolewithretention'] = '{$a->retention} (expiré)';
$string['defaultexpired'] = 'Données pour tous les utilisateurs';
$string['defaultexpiredexcept'] = 'Data for all users, except those who hold any of the following roles:<br>
{$a->unexpired}';
$string['defaultunexpiredwithexceptions'] = 'Only data for users who hold any of the following roles:<br>
{$a->expired}
Unless they also hold any of the following roles:<br>
{$a->unexpired}';
$string['defaultunexpired'] = 'Only data for users holding any of the following roles:<br>
{$a->expired}';
$string['tobedeleted'] = 'Données à supprimer';
$string['addroleoverride'] = 'Ajouter une fonction de remplacement';
$string['roleoverride'] = 'Dépassement du rôle';
$string['role'] = 'Rôle';
$string['role_help'] = 'Le rôle auquel le dépassement devrait s\'appliquer.';
$string['duplicaterole'] = 'Rôle déjà spécifié';
$string['purposeoverview'] = 'Un objectif décrit la politique d\'utilisation et de conservation des données stockées. La base de stockage et de conservation de ces données est également décrite dans le but visé.';
$string['roleoverrideoverview'] = 'La politique de rétention par défaut peut être dépassée pour des rôles d\'utilisateur spécifiques, vous permettant de spécifier une politique de rétention plus longue ou plus courte. Un utilisateur n\'est expiré que lorsque tous ses rôles ont expiré.';
