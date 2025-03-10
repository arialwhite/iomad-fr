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
 * Defines names of plugin types and some strings used at the plugin managment
 *
 * @package    core
 * @subpackage plugin
 * @copyright  2011 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['availability'] = 'Disponibilité';
$string['cancelinstallall'] = 'Annuler les nouvelles installations ({$a})';
$string['cancelinstallone'] = 'Annuler cette installation';
$string['cancelinstallhead'] = 'Annulation de l\'installation des plugins';
$string['cancelinstallinfo'] = 'Les plugins suivants ne sont pas encore complètement installés, de sorte que leur installation peut être annulée. Pour ce faire, le dossier plugin doit être retiré du serveur maintenant. Assurez-vous que c\'est vraiment ce que vous voulez pour éviter la perte accidentelle de données (comme vos propres modifications de code).';
$string['cancelinstallinfodir'] = 'Dossier à supprimer : {$a}';
$string['cancelupgradeall'] = 'Annuler les mises à jour ({$a})';
$string['cancelupgradehead'] = 'Restaurer la version précédente des plugins';
$string['cancelupgradeone'] = 'Annuler cette mise à jour';
$string['checkforupdates'] = 'Vérifier les mises à jour disponibles';
$string['checkforupdateslast'] = 'Dernière vérification effectuée sur {$a}';
$string['detectedmisplacedplugin'] = 'Le module "{$a->component}" est installé dans un emplacement incorrect "{$a->current}", l\'emplacement attendu est "{$a->attendu}"';
$string['dependencyavailable'] = 'Disponible';
$string['dependencyfails'] = 'Fails';
$string['dependencyinstall'] = 'Installer';
$string['dependencyinstallhead'] = 'Installer les dépendances manquantes';
$string['dependencyinstallmissing'] = 'Installer les dépendances manquantes ({$a})';
$string['dependencymissing'] = 'Manque';
$string['dependencyunavailable'] = 'Indisponible';
$string['dependencyupload'] = 'Envoi';
$string['dependencyuploadmissing'] = 'Télécharger les fichiers ZIP';
$string['displayname'] = 'Nom du greffon';
$string['err_response_curl'] = 'Impossible de récupérer les données de mises à jour disponibles - erreur cURL inattendue.';
$string['err_response_format_version'] = 'Version inattendue du format de réponse. Veuillez essayer de vérifier à nouveau les mises à jour disponibles.';
$string['err_response_http_code'] = 'Impossible de récupérer les données de mises à jour disponibles - code de réponse HTTP inattendu.';
$string['filterall'] = 'Afficher tout';
$string['filtercontribonly'] = 'Afficher uniquement les plugins supplémentaires';
$string['filtermissingonly'] = 'Afficher absent du disque seulement';
$string['filternewpluginsonly'] = 'Afficher seulement les plugins à installer';
$string['filterupdatesonly'] = 'Afficher à jour seulement';
$string['incompatibleversion'] = 'Incompatible version Moodle: [$a]';
$string['isenabled'] = 'Activé ?';
$string['misdepinfoplugin'] = 'Informations sur le plugin';
$string['misdepinfoversion'] = 'Informations sur la version';
$string['misdepsavail'] = 'Dépendances manquantes disponibles';
$string['misdepsunavail'] = 'Dépendances manquantes non disponibles';
$string['misdepsunavaillist'] = 'Aucune version ne répond aux exigences de dépendance : {$a}.';
$string['misdepsunknownlist'] = 'Pas dans le répertoire Plugins : <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Aucun plugin de ce type n\'est installé';
$string['notes'] = 'Annexe';
$string['notdownloadable'] = 'Impossible de télécharger le paquet';
$string['notdownloadable_help'] = 'Le paquet ZIP avec la mise à jour ne peut pas être téléchargé automatiquement.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notsupported'] = 'Le plugin peut ne pas être compatible avec la version Moodle {$a}';
$string['notwritable'] = 'Fichiers de greffon non enregistrables';
$string['notwritable_help'] = 'Les fichiers de greffons ne sont pas enregistrables par le serveur web. Le processus de serveur web doit avoir un accès écrit au dossier du plugin et à tout son contenu. L\'accès au dossier racine du type de plugin donné peut également être requis.';
$string['otherplugin'] = '{$a->composante}';
$string['otherpluginversion'] = '{$a->composante} ({$a->version})';
$string['overviewall'] = 'Tous les plugins';
$string['overviewext'] = 'Greffons supplémentaires';
$string['overviewupdatable'] = 'Mises à jour disponibles';
$string['packagesdebug'] = 'Sortie de débogage activée';
$string['packagesdownloading'] = 'Téléchargement de {$a}';
$string['packagesextracting'] = 'Extraire {$a}';
$string['packagesvalidating'] = 'Valider {$a}';
$string['packagesvalidatingfailed'] = 'Installation interrompue en raison d\'un échec de validation';
$string['packagesvalidatingok'] = 'Validation réussie, l\'installation peut continuer';
$string['plugincheckall'] = 'Tous les plugins';
$string['plugincheckattention'] = 'Plugins nécessitant une attention particulière';
$string['pluginchecknone'] = 'Aucun plugin ne nécessite votre attention maintenant';
$string['pluginchecknotice'] = 'Cette page affiche les plugins qui peuvent nécessiter votre attention lors de la mise à jour, tels que les nouveaux plugins à installer, les plugins à mettre à jour, les plugins manquants, etc. Des plugins supplémentaires sont affichés s\'il y a une mise à jour disponible pour eux. Il est recommandé de vérifier s\'il y a des versions plus récentes de plugins disponibles et de mettre à jour leur code source avant de poursuivre cette mise à jour de Moodle.';
$string['plugindisable'] = 'Désactiver';
$string['plugindisabled'] = 'Handicapé';
$string['pluginenable'] = 'Activer';
$string['pluginenabled'] = 'Activé';
$string['release'] = 'Libération';
$string['requiredby'] = 'Requis par : {$a}';
$string['requires'] = 'Nécessite';
$string['rootdir'] = 'Répertoire';
$string['settings'] = 'Paramètres';
$string['source'] = 'Source';
$string['sourceext'] = 'Complémentaire';
$string['sourcestd'] = 'Norme';
$string['status'] = 'État';
$string['status_delete'] = 'À supprimer';
$string['status_downgrade'] = 'Version supérieure déjà installée !';
$string['status_missing'] = 'Disparu du disque !';
$string['status_new'] = 'À installer';
$string['status_nodb'] = 'Pas de base de données';
$string['status_upgrade'] = 'À améliorer';
$string['status_uptodate'] = 'Installé';
$string['supportedmoodleversions'] = 'Versions prises en charge par Moodle';
$string['supportedconversions'] = 'Conversions de documents prises en charge';
$string['systemname'] = 'Identificateur';
$string['type_aiplacement'] = 'Module de placement AI';
$string['type_aiplacement_plural'] = 'Greffons de placement AI';
$string['type_aiprovider'] = 'plugin fournisseur d\'IA';
$string['type_aiprovider_plural'] = 'Greffons fournisseurs d\'IA';
$string['type_antivirus'] = 'plugin antivirus';
$string['type_antivirus_plural'] = 'Greffons antivirus';
$string['type_auth'] = 'Méthode d\'authentification';
$string['type_auth_plural'] = 'Méthodes d\'authentification';
$string['type_availability'] = 'Restriction de disponibilité';
$string['type_availability_plural'] = 'Limites de disponibilité';
$string['type_block'] = 'Bloc';
$string['type_block_plural'] = 'Blocs';
$string['type_cachelock'] = 'Gestionnaire de verrouillage de cache';
$string['type_cachelock_plural'] = 'Poignées de verrouillage de cache';
$string['type_cachestore'] = 'Magasin de cache';
$string['type_cachestore_plural'] = 'Magasins de cache';
$string['type_calendartype'] = 'Type de calendrier';
$string['type_calendartype_plural'] = 'Types de calendrier';
$string['type_communication'] = 'Fournisseur de communication';
$string['type_communication_plural'] = 'Fournisseurs de communication';
$string['type_contenttype'] = 'Banque de contenu';
$string['type_contenttype_plural'] = 'Greffons de banque de contenu';
$string['type_contentbank'] = 'Banque de contenu';
$string['type_contentbank_plural'] = 'Greffons de banque de contenu';
$string['type_customfield'] = 'Champ personnalisé';
$string['type_customfield_plural'] = 'Champs personnalisés';
$string['type_coursereport'] = 'Rapport du cours';
$string['type_coursereport_plural'] = 'Rapports de cours';
$string['type_dataformat'] = 'Format des données';
$string['type_dataformat_plural'] = 'Formats de données';
$string['type_editor'] = 'Éditeur';
$string['type_editor_plural'] = 'Éditeurs';
$string['type_enrol'] = 'Méthode d\'inscription';
$string['type_enrol_plural'] = 'Méthodes d\'inscription';
$string['type_fileconverter'] = 'Convertisseur de documents';
$string['type_fileconvertermanage'] = 'Gérer les convertisseurs de documents';
$string['type_fileconverter_plural'] = 'Convertisseurs de documents';
$string['type_filter'] = 'Filtre de texte';
$string['type_filter_plural'] = 'Filtres de texte';
$string['type_format'] = 'Format du cours';
$string['type_format_plural'] = 'Formats de cours';
$string['type_gradeexport'] = 'Méthode d\'exportation par catégorie';
$string['type_gradeexport_plural'] = 'Méthodes d\'exportation par catégorie';
$string['type_gradeimport'] = 'Méthode d\'importation par catégorie';
$string['type_gradeimport_plural'] = 'Méthodes d\'importation par catégorie';
$string['type_gradereport'] = 'Rapport sur les manuels scolaires';
$string['type_gradereport_plural'] = 'Rapports sur les manuels scolaires';
$string['type_gradingform'] = 'Méthode de classement avancée';
$string['type_gradingform_plural'] = 'Méthodes de classement avancées';
$string['type_h5plib'] = 'Cadre H5P';
$string['type_h5plib_plural'] = 'Cadres H5P';
$string['type_mlbackend'] = 'Moteur d\'apprentissage automatique';
$string['type_mlbackend_plural'] = 'Moteurs d\'apprentissage automatique';
$string['type_local'] = 'Greffon local';
$string['type_local_plural'] = 'Greffons locaux';
$string['type_media'] = 'Lecteur multimédia';
$string['type_media_plural'] = 'Joueurs multimédias';
$string['type_message'] = 'Module de notification';
$string['type_message_plural'] = 'Greffons de notification';
$string['type_mnetservice'] = 'Service MNet';
$string['type_mnetservice_plural'] = 'Services MNet';
$string['type_mod'] = 'Module d\'activité';
$string['type_mod_plural'] = 'Modules d\'activité';
$string['type_paygwmanage'] = 'Gérer les passerelles de paiement';
$string['type_paygw'] = 'Portail de paiement';
$string['type_paygw_plural'] = 'Portails de paiement';
$string['type_plagiarism'] = 'Greffon plagiat';
$string['type_plagiarism_plural'] = 'Greffons plagiat';
$string['type_portfolio'] = 'Portefeuille';
$string['type_portfolio_plural'] = 'Portefeuilles';
$string['type_profilefield'] = 'Type de champ de profil';
$string['type_profilefield_plural'] = 'Types de champs de profils';
$string['type_qbehaviour'] = 'Questionnement';
$string['type_qbehaviour_plural'] = 'Questions sur les comportements';
$string['type_qformat'] = 'Format des questions import/export';
$string['type_qformat_plural'] = 'Questions sur les formats d\'importation/d\'exportation';
$string['type_qtype'] = 'Type de question';
$string['type_qtype_plural'] = 'Types de questions';
$string['type_report'] = 'Rapport du site';
$string['type_report_plural'] = 'Rapports';
$string['type_repository'] = 'Dépôt';
$string['type_repository_plural'] = 'Dépôts';
$string['type_search'] = 'Moteur de recherche';
$string['type_search_plural'] = 'Moteurs de recherche';
$string['type_smsgateway'] = 'passerelle SMS';
$string['type_smsgateway_plural'] = 'passerelles SMS';
$string['type_theme'] = 'Thème';
$string['type_theme_plural'] = 'Thèmes';
$string['type_tool'] = 'Outil d\'administration';
$string['type_tool_plural'] = 'Outils administratifs';
$string['type_webservice'] = 'Protocole de service Web';
$string['type_webservice_plural'] = 'Protocoles de services Web';
$string['type_qbank'] = 'Questions plugin banque';
$string['type_qbank_plural'] = 'Questions plugins bancaires';
$string['updateavailable'] = 'Une nouvelle version {$a} est disponible !';
$string['updateavailable_moreinfo'] = 'Plus d\'infos...';
$string['updateavailable_release'] = 'Sortie {$a}';
$string['updatepluginconfirm'] = 'Mise à jour du plugin confirmation';
$string['updatepluginconfirminfo'] = 'Vous allez installer une nouvelle version du plugin <strong>{$a->name}</strong>. Un paquet zip avec la version {$a->version} du plugin sera téléchargé de <a href="{$a->url}">{$a->url}</a> et extrait à votre installation Moodle afin qu\'il puisse mettre à niveau votre installation.';
$string['updatepluginconfirmexternal'] = 'Il semble que la version actuelle du plugin ait été obtenue via le système de gestion du code source ({$a}). Si vous installez cette mise à jour, vous ne serez plus en mesure d\'obtenir des mises à jour plugin du système de gestion de code source. S\'il vous plaît assurez-vous que vous voulez vraiment mettre à jour le plugin avant de continuer.';
$string['updatepluginconfirmwarning'] = 'Veuillez noter que Moodle ne fera pas automatiquement une sauvegarde de votre base de données avant la mise à niveau. Nous vous recommandons fortement de faire une sauvegarde complète dès maintenant, pour faire face au cas rare où le nouveau code a des bogues qui rendent votre site indisponible ou même corrompt votre base de données. Continuez à vos propres risques.';
$string['uninstall'] = 'Désinstaller';
$string['uninstallconfirm'] = 'Vous êtes sur le point de désinstaller le plugin <em>{$a->name}</em>. Cela supprimera complètement tout dans la base de données associée à ce plugin, y compris sa configuration, log records, fichiers utilisateurs gérés par le plugin, etc. Il n\'y a aucun moyen de revenir et Moodle lui-même ne crée aucune sauvegarde de récupération. Voulez-vous continuer ?';
$string['uninstalldelete'] = 'Toutes les données associées au plugin <em>{$a->name}</em> ont été supprimées de la base de données. Pour empêcher le plugin de se réinstaller, son dossier <em>{$a->rootdir}</em> doit être retiré manuellement de votre serveur maintenant. Moodle lui-même ne peut pas supprimer le dossier en raison de l\'écriture des permissions.';
$string['uninstalldeleteconfirm'] = 'Toutes les données associées au plugin <em>{$a->name}</em> ont été supprimées de la base de données. Pour empêcher le plugin de se réinstaller, son dossier <em>{$a->rootdir}</em> doit être retiré de votre serveur. Voulez-vous supprimer le dossier plugin maintenant ?';
$string['uninstalldeleteconfirmexternal'] = 'Il semble que la version actuelle du plugin ait été obtenue via le système de gestion du code source ({$a}). Si vous supprimez le dossier plugin, vous pouvez perdre d\'importantes modifications locales du code. Veuillez vous assurer que vous voulez définitivement supprimer le dossier plugin avant de continuer.';
$string['uninstallextraconfirmblock'] = 'Il y a {$a->instances} de ce bloc.';
$string['uninstallextraconfirmenrol'] = 'Il y a {$a->inscriptions} inscriptions des utilisateurs.';
$string['uninstallextraconfirmmod'] = 'Il y a des instances {$a->instances} de ce module dans les cours {$a->cours}.';
$string['uninstalling'] = 'Désinstaller {$a->name}';
$string['validationmsg_componentmatch'] = 'Nom complet du composant';
$string['validationmsg_componentmismatchname'] = 'Erreur de nom du greffon';
$string['validationmsg_componentmismatchname_help'] = 'Certains paquets ZIP, comme ceux générés par Github, peuvent contenir un nom de répertoire racine incorrect. Vous devez corriger le nom du répertoire racine pour correspondre au nom du plugin déclaré.';
$string['validationmsg_componentmismatchname_info'] = 'Le plugin déclare son nom \'{$a}\' but that does not match the name of the root directory.';
$string['validationmsg_componentmismatchtype'] = 'Erreur de type de greffon';
$string['validationmsg_componentmismatchtype_info'] = 'Type prévu \'{$a->expected}\' but the plugin declares its type is \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Fichier extrait non trouvé';
$string['validationmsg_filesnumber'] = 'Pas assez de fichiers trouvés dans le paquet';
$string['validationmsg_filestatus'] = 'Impossible d\'extraire tous les fichiers';
$string['validationmsg_filestatus_info'] = 'Tenter d\'extraire le fichier {$a->file} a entraîné une erreur \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Fichier de langue trouvé';
$string['validationmsg_maturity'] = 'Niveau d\'échéance déclaré';
$string['validationmsg_maturity_help'] = 'Le plugin peut déclarer son niveau de maturité. Si le responsable considère le plugin stable, le niveau de maturité déclaré lira MATURITÉ_ C\'est stable. Tous les autres niveaux de maturité (tels que l\'alpha ou le bêta) doivent être considérés comme instables et un avertissement est émis.';
$string['validationmsg_missingcomponent'] = 'Le plugin ne déclare pas son nom de composant';
$string['validationmsg_missingcomponent_help'] = 'Tous les plugins doivent fournir leur nom complet de composant via la déclaration `$plugin->component` dans la version. fichier php.';
$string['validationmsg_missingcomponent_link'] = 'Développement:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Inadéquation du nom du fichier en langue anglaise';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Le type de plugin donné manque le fichier anglais attendu {$a}.';
$string['validationmsg_missinglangenfile'] = 'Aucun fichier en anglais trouvé';
$string['validationmsg_missinglangenfolder'] = 'Dossier de langue anglaise manquant';
$string['validationmsg_missingversion'] = 'Plugin ne déclare pas sa version';
$string['validationmsg_missingversionphp'] = 'Version de fichier. php non trouvé';
$string['validationmsg_multiplelangenfiles'] = 'Plusieurs fichiers en anglais trouvés';
$string['validationmsg_onedir'] = 'Structure non valable du paquet ZIP.';
$string['validationmsg_onedir_help'] = 'Le paquet ZIP doit contenir un seul répertoire racine qui détient le code du plugin. Le nom de ce répertoire racine doit correspondre au nom du plugin.';
$string['validationmsg_pathwritable'] = 'Écrire la vérification d\'accès';
$string['validationmsg_pluginversion'] = 'Version du plugin';
$string['validationmsg_pluginversiontoolow'] = 'Une version supérieure de ce plugin est déjà installée';
$string['validationmsg_release'] = 'Libération du plugin';
$string['validationmsg_requiresmoodle'] = 'Version Moodle requise';
$string['validationmsg_rootdir'] = 'Nom du plugin à installer';
$string['validationmsg_rootdir_help'] = 'Le nom du répertoire racine dans le paquet ZIP forme le nom du plugin à installer. Si le nom n\'est pas correct, vous pouvez vouloir renommer le répertoire racine dans le ZIP avant d\'installer le plugin.';
$string['validationmsg_rootdirinvalid'] = 'Nom du plugin non valide';
$string['validationmsg_rootdirinvalid_help'] = 'Le nom du répertoire racine dans le paquet ZIP viole les exigences de syntaxe formelle. Certains paquets ZIP, comme ceux générés par Github, peuvent contenir un nom de répertoire racine incorrect. Vous devez corriger le nom du répertoire racine pour correspondre au nom du plugin.';
$string['validationmsg_targetexists'] = 'L\'emplacement de la cible existe déjà et sera supprimé';
$string['validationmsg_targetexists_help'] = 'Le répertoire plugin existe déjà et sera remplacé par le contenu du paquet plugin.';
$string['validationmsg_targetnotdir'] = 'Emplacement cible occupé par un fichier';
$string['validationmsg_unknowntype'] = 'Type de plugin inconnu';
$string['validationmsg_versionphpsyntax'] = 'Syntaxe non prise en charge détectée en version. fichier php';
$string['validationmsglevel_debug'] = 'Débogues';
$string['validationmsglevel_error'] = 'Erreur';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Avertissement';
$string['version'] = 'Version';
$string['versiondb'] = 'Version actuelle';
$string['versiondisk'] = 'Nouvelle version';

// Deprecated since Moodle 4.2.
$string['type_contentbank'] = 'Banque de contenu';
$string['type_contentbank_plural'] = 'Greffons de banque de contenu';
