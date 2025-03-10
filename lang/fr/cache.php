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
 * Cache language strings
 *
 * This file is part of Moodle's cache API, affectionately called MUC.
 * It contains the components that are requried in order to use caching.
 *
 * @package    core_cache
 * @category   cache
 * @copyright  2012 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actions'] = 'Actions';
$string['addinstance'] = 'Ajouter une instance';
$string['addnewlockinstance'] = 'Ajouter une nouvelle instance de verrouillage';
$string['addlocksuccess'] = 'Ajout réussi d\'une nouvelle instance de verrouillage.';
$string['addstore'] = 'Ajouter {$a} stockage';
$string['addstoresuccess'] = 'Ajout réussi d\'un nouveau magasin {$a}.';
$string['area'] = 'Domaine';
$string['caching'] = 'Cache';
$string['cacheadmin'] = 'Administration de cache';
$string['cacheconfig'] = 'Configuration';
$string['cachedef_ai_policy'] = 'Acceptation de la politique d\'IA de l\'utilisateur.';
$string['cachedef_ai_ratelimit'] = 'Limite du taux d\'appel des fournisseurs d\'IA';
$string['cachedef_calculablesinfo'] = 'Analytique calculables info';
$string['cachedef_calendar_subscriptions'] = 'Abonnements au calendrier';
$string['cachedef_calendar_categories'] = 'Catégories de cours de calendrier auxquelles un utilisateur peut accéder';
$string['cachedef_capabilities'] = 'Liste des capacités du système';
$string['cachedef_config'] = 'Paramètres de configuration';
$string['cachedef_contentbank_allowed_categories'] = 'Catégories de cours de contenu pour l\'utilisateur actuel';
$string['cachedef_contentbank_allowed_courses'] = 'Cours de banque de contenu autorisés pour l\'utilisateur actuel';
$string['cachedef_contentbank_enabled_extensions'] = 'Extensions autorisées et ses plugins supporteurs dans la banque de contenu';
$string['cachedef_contentbank_context_extensions'] = 'Extensions autorisées et ses plugins supporteurs dans un contexte de banque de contenu';
$string['cachedef_courseactionsinstances'] = 'Actions de cours chargées';
$string['cachedef_coursecat'] = 'Listes des catégories de cours pour un utilisateur particulier';
$string['cachedef_coursecatrecords'] = 'Dossiers des catégories de cours';
$string['cachedef_coursesectionspreferences'] = 'Préférences de la section de cours';
$string['cachedef_coursecattree'] = 'Arbre des catégories de cours';
$string['cachedef_coursecompletion'] = 'État d\'achèvement du cours';
$string['cachedef_coursecontacts'] = 'Liste des contacts de cours';
$string['cachedef_coursehiddengroups'] = 'Nombre de groupes sur un cours à visibilité réduite';
$string['cachedef_coursemodinfo'] = 'Information accumulée sur les modules et les sections pour chaque cours';
$string['cachedef_courseeditorstate'] = 'Session état clés cache pour détecter les changements de cours dans la façade';
$string['cachedef_course_image'] = 'Images du cours';
$string['cachedef_course_user_dates'] = 'Les dates d\'utilisation des cours en mode dates relatives';
$string['cachedef_completion'] = 'État d\'achèvement des activités';
$string['cachedef_databasemeta'] = 'Métadonnées de la base de données';
$string['cachedef_eventinvalidation'] = 'Invalidation de l\'événement';
$string['cachedef_externalbadges'] = 'Badges externes pour un utilisateur particulier';
$string['cachedef_fontawesomeiconmapping'] = 'Mapping des icônes pour la police géniale';
$string['cachedef_file_imageinfo'] = 'Informations sur l\'image du fichier, par exemple dimensions';
$string['cachedef_routes'] = 'Données de parcours';
$string['cachedef_suspended_userids'] = 'Liste des utilisateurs suspendus par cours';
$string['cachedef_groupdata'] = 'Informations sur le groupe';
$string['cachedef_h5p_content_type_translations'] = 'Traductions de bibliothèques de type contenu H5P';
$string['cachedef_h5p_libraries'] = 'Bibliothèques H5P';
$string['cachedef_h5p_library_files'] = 'Fichiers de bibliothèque H5P';
$string['cachedef_hookcallbacks'] = 'Callbacks crochet';
$string['cachedef_htmlpurifier'] = 'Purificateur HTML - contenu nettoyé';
$string['cachedef_langmenu'] = 'Liste des langues disponibles';
$string['cachedef_license'] = 'Liste des licences';
$string['cachedef_message_time_last_message_between_users'] = 'Temps créé pour le message le plus récent dans une conversation';
$string['cachedef_modelfirstanalyses'] = 'Première analyse par modèle et analysable';
$string['cachedef_moodlenet_usercanshare'] = 'Les utilisateurs peuvent partager des ressources avec MoodleNet';
$string['cachedef_locking'] = 'Verrouillage';
$string['cachedef_message_processors_enabled'] = "État des processeurs de messages activé";
$string['cachedef_contextwithinsights'] = 'Contexte et perspectives';
$string['cachedef_navigation_cache'] = 'Cache de navigation';
$string['cachedef_navigation_expandcourse'] = 'Cours de navigation extensibles';
$string['cachedef_observers'] = 'Observateurs des manifestations';
$string['cachedef_plugin_functions'] = 'Callbacks disponibles';
$string['cachedef_plugin_manager'] = 'Gestionnaire d\'info du plugin';
$string['cachedef_presignup'] = 'Données de préinscription pour un utilisateur non enregistré particulier';
$string['cachedef_portfolio_add_button_portfolio_instances'] = 'Instances de portefeuille pour la classe portfolio_add_bouton';
$string['cachedef_postprocessedcss'] = 'Après traitement CSS';
$string['cachedef_tagindexbuilder'] = 'Résultats de la recherche pour les articles étiquetés';
$string['cachedef_questiondata'] = 'Définitions des questions';
$string['cachedef_recommendation_favourite_course_content_items'] = 'Recommandation bien sûr';
$string['cachedef_reportbuilder_allowed_reports'] = 'Les utilisateurs ont autorisé les rapports selon le public';
$string['cachedef_repositories'] = 'Fichiers de dépôts';
$string['cachedef_roledefs'] = 'Définition des rôles';
$string['cachedef_grade_categories'] = 'Demandes de catégorie';
$string['cachedef_grade_letters'] = 'Requêtes relatives aux lettres de classement';
$string['cachedef_string'] = 'cache de la chaîne de langue';
$string['cachedef_tags'] = 'Mots clés collections et zones';
$string['cachedef_temp_tables'] = 'cache des tables temporaires';
$string['cachedef_theme_usedincontext'] = 'Un thème a été utilisé en contexte pour remplacer le thème par défaut';
$string['cachedef_userselections'] = 'Données utilisées pour persister les sélections d\'utilisateurs dans Moodle';
$string['cachedef_user_favourite_course_content_items'] = 'Utilisateur's starred items';
$string['cachedef_user_group_groupings'] = 'Utilisateur's groupings and groups per course';
$string['cachedef_user_course_content_items'] = 'Utilisateur's content items (activities, resources and their subtypes) per course';
$string['cachedef_yuimodules'] = 'Oui Définitions des modules';
$string['cachedef_gradesetting'] = 'Établissement des classes';
$string['cachelock_file_default'] = 'Verrouillage du fichier par défaut';
$string['cachestores'] = 'Magasins de cache';
$string['cacheusage'] = 'Utilisation du cache';
$string['canuselocalstore'] = 'Peut utiliser le magasin local';
$string['component'] = 'Composante';
$string['confirmlockdeletion'] = 'Confirmer la suppression du verrou';
$string['confirmstoredeletion'] = 'Confirmer la suppression du stockage';
$string['defaultmappings'] = 'Stocks utilisés en l\'absence de cartographie';
$string['defaultmappings_help'] = 'Ce sont les magasins par défaut qui seront utilisés si vous don\'t map one or more stores to the cache definition.';
$string['defaultstoreactions'] = 'Les magasins par défaut ne peuvent pas être modifiés';
$string['default_application'] = 'Stockage de l\'application par défaut';
$string['default_request'] = 'Stockage des requêtes par défaut';
$string['default_session'] = 'Stockage de session par défaut';
$string['definition'] = 'Définition';
$string['definitionsummaries'] = 'Définitions connues du cache';
$string['delete'] = 'Supprimer';
$string['deletelock'] = 'Supprimer le verrou';
$string['deletelockconfirmation'] = 'Voulez-vous vraiment supprimer le verrou {$a} ?';
$string['deletelockhasuses'] = 'Vous ne pouvez pas supprimer cette instance de verrouillage car elle est utilisée par un ou plusieurs magasins.';
$string['deletelocksuccess'] = 'Supprimé avec succès le verrou.';
$string['deletestore'] = 'Supprimer le stockage';
$string['deletestoreconfirmation'] = 'Voulez-vous vraiment supprimer le magasin « {$a} » ?';
$string['deletestorehasmappings'] = 'Vous ne pouvez pas supprimer ce magasin parce qu\'il a des mappings. S\'il vous plaît supprimer toutes les correspondances avant de supprimer le magasin';
$string['deletestoresuccess'] = 'Supprimé avec succès le cache store';
$string['editmappings'] = 'Modifier les mappages';
$string['editsharing'] = 'Modifier le partage';
$string['editstore'] = 'Éditer le magasin';
$string['editstoresuccess'] = 'Réussir à éditer le cache.';
$string['editdefinitionmapping'] = 'Modifier le mappage de définition';
$string['editdefinitionmappings'] = '{$a} cartes de stockage de définition';
$string['editdefinitionsharing'] = 'Modifier le partage de définition pour {$a}';
$string['ex_configcannotsave'] = 'Impossible de sauvegarder la configuration du cache dans le fichier.';
$string['ex_nodefaultlock'] = 'Impossible de trouver une instance de verrouillage par défaut.';
$string['ex_unabletolock'] = 'Impossible d\'acquérir une serrure pour le cache.';
$string['ex_unmetstorerequirements'] = 'Vous ne pouvez pas utiliser ce magasin à l\'heure actuelle. Veuillez consulter la documentation pour déterminer ses exigences.';
$string['gethit'] = 'Allez-y.';
$string['getmiss'] = 'Mlle';
$string['inadequatestoreformapping'] = 'Ce magasin fait\'t meet the requirements for all known definitions. Definitions for which this store is inadequate will be given the original default store instead of the selected store.';
$string['invalidlock'] = 'Verrouillage non valide';
$string['invalidplugin'] = 'Greffon non valide';
$string['invalidstore'] = 'Stockage de cache non valide fourni';
$string['localstorenotification'] = 'Ce cache peut être cartographié en toute sécurité vers un magasin qui est local à chaque serveur web';
$string['lockdefault'] = 'Par défaut';
$string['locking'] = 'Verrouillage';
$string['locking_help'] = 'Le verrouillage est un mécanisme qui limite l\'accès aux données mises en cache à un processus à la fois pour éviter que les données ne soient écrasées. La méthode de verrouillage détermine comment le verrou est acquis et vérifié.';
$string['lockname'] = 'Nom';
$string['locknamedesc'] = 'Le nom doit être unique et ne peut être composé que des caractères : a-zA-Z_';
$string['locknamenotunique'] = 'Le nom que vous avez sélectionné n\'est pas unique. Veuillez sélectionner un nom unique.';
$string['locksummary'] = 'Résumé des instances de verrouillage du cache.';
$string['locktype'] = 'Type';
$string['lockuses'] = 'Utilisations';
$string['mappings'] = 'Stockage des cartes';
$string['mappingdefault'] = '(par défaut)';
$string['mappingprimary'] = 'Magasin primaire';
$string['mappingfinal'] = 'Magasin final';
$string['mode'] = 'Mode';
$string['modes'] = 'Modes';
$string['mode_1'] = 'Demande';
$string['mode_2'] = 'Séance';
$string['mode_4'] = 'Demande';
$string['nativelocking'] = 'Ce plugin gère son propre verrouillage.';
$string['none'] = 'Aucune';
$string['plugin'] = 'Greffon';
$string['pluginsummaries'] = 'Stockages de cache installés';
$string['privacy:metadata:cachestore'] = 'Le sous-système Cache stocke temporairement des données pour le compte d\'autres parties de Moodle. Ces données ne sont pas facilement identifiables et sont très courtes. Il sert de cache de données stockées ailleurs dans Moodle, et devrait donc déjà être manipulé par ces composants Moodle.';
$string['purge'] = 'Purge';
$string['purgeagain'] = 'Purge encore';
$string['purgexdefinitionsuccess'] = 'Réussir à purifier le cache « {$a->name} » ({$a->component}/{$a->area}).';
$string['purgexstoresuccess'] = 'Réussir à purifier le magasin « {$a->store} ».';
$string['requestcount'] = 'Tester avec les requêtes {$a}';
$string['rescandefinitions'] = 'Définition de rescan';
$string['result'] = 'Résultat';
$string['set'] = 'Set';
$string['sharedstorenotification'] = 'Ce cache doit être cartographié dans un magasin qui est partagé avec tous les serveurs web';
$string['sharing'] = 'Partage';
$string['sharing_all'] = 'Tout le monde.';
$string['sharing_input'] = 'Clé personnalisée (entrée ci-dessous)';
$string['sharing_help'] = 'Cela vous permet de déterminer comment les données cache peuvent être partagées si vous avez une configuration cluster, ou si vous avez plusieurs sites tous configurés avec le même magasin et souhaitez partager les données. C\'est un réglage avancé s\'il vous plaît assurez-vous de comprendre son but avant de le changer.';
$string['sharing_siteid'] = 'Sites avec le même identifiant de site.';
$string['sharing_version'] = 'Sites utilisant la même version.';
$string['sharingrequired'] = 'Vous devez sélectionner au moins une option de partage.';
$string['sharingselected_all'] = 'Tout le monde';
$string['sharingselected_input'] = 'Clé personnalisée';
$string['sharingselected_siteid'] = 'Identifiant du site';
$string['sharingselected_version'] = 'Version';
$string['storeconfiguration'] = 'Configuration du stockage';
$string['storename'] = 'Nom du magasin';
$string['storename_help'] = 'Cela définit le nom du magasin. Il est utilisé pour identifier le magasin dans le système et ne peut se composer que de a-z A-Z 0-9 -_ et d\'espaces. Elle doit également être unique. Si vous essayez d\'utiliser un nom qui a déjà été utilisé, vous recevrez une erreur.';
$string['storenamealreadyused'] = 'Vous devez choisir un nom unique pour ce magasin.';
$string['storenameinvalid'] = 'Nom du magasin non valide. Vous ne pouvez utiliser a-z A-Z 0-9 -_ et espaces.';
$string['storeperformance'] = 'Cache store reporting performance - {$a} requêtes uniques par opération.';
$string['storeready'] = 'Prêt';
$string['storenotready'] = 'Stock non prêt';
$string['storerequiresattention'] = 'Il faut être attentif.';
$string['storerequiresattention_help'] = 'Cette instance de stockage n\'est pas prête à être utilisée, mais a des mappings. Régler ce problème améliorera les performances de votre système. Vérifiez que le moteur de stockage est prêt à être utilisé et que toutes les exigences PHP sont satisfaites.';
$string['storeresults_application'] = 'Conservez les demandes lorsqu\'elles sont utilisées comme cache d\'application.';
$string['storeresults_request'] = 'Conservez les demandes lorsqu\'elles sont utilisées comme cache de requête.';
$string['storeresults_session'] = 'Enregistrer les demandes lorsqu\'elles sont utilisées comme cache de session.';
$string['stores'] = 'Magasins';
$string['store_default_application'] = 'Stockage de fichiers par défaut pour les caches d\'application';
$string['store_default_request'] = 'Stockage statique par défaut pour les caches de requête';
$string['store_default_session'] = 'Stock de session par défaut pour les caches de session';
$string['storesummaries'] = 'Instances de stockage configurées';
$string['supports'] = 'Appui';
$string['supports_multipleidentifiers'] = 'plusieurs identifiants';
$string['supports_dataguarantee'] = 'garantie de données';
$string['supports_nativettl'] = 'ttl';
$string['supports_nativelocking'] = 'verrouillage';
$string['supports_keyawareness'] = 'sensibilisation';
$string['supports_searchable'] = 'Recherche par clé';
$string['tested'] = 'Testés';
$string['testperformance'] = 'Efficacité des essais';
$string['updatedefinitionmapping'] = 'Modifier le mappage de définition';
$string['updatedefinitionsharing'] = 'Modifier le partage de la définition';
$string['unsupportedmode'] = 'Mode non pris en charge';
$string['untestable'] = 'Incontestable';
$string['usage_items'] = 'Éléments';
$string['usage_mean'] = 'Taille moyenne des articles';
$string['usage_samples'] = 'Éléments échantillonnés par cache';
$string['usage_sd'] = '- C\'est pas vrai.';
$string['usage_total'] = 'Montant estimatif';
$string['usage_totalmargin'] = 'Marge d\'erreur (95 %)';
$string['usage_realtotal'] = 'Utilisation réelle (si elle est connue)';
$string['userinputsharingkey'] = 'Clé personnalisée pour le partage';
$string['userinputsharingkey_help'] = 'Entrez votre propre clé privée ici. Lorsque vous configurez d\'autres magasins sur d\'autres sites, vous souhaitez partager des données avec vous assurez-vous de définir la même clé exactement là.';
