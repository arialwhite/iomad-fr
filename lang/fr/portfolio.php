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
 * Strings for component 'portfolio', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_portfolio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activeexport'] = 'Résoudre l\'exportation active';
$string['activeportfolios'] = 'Portefeuilles disponibles';
$string['addalltoportfolio'] = 'Exporter tous vers le portefeuille';
$string['addnewportfolio'] = 'Ajouter un nouveau portefeuille';
$string['addtoportfolio'] = 'Exportation vers le portefeuille';
$string['alreadyalt'] = 'Déjà exporté - cliquez ici pour résoudre ce transfert';
$string['alreadyexporting'] = 'Vous avez déjà une exportation active de portefeuille dans cette session. Avant de continuer, vous devez compléter cette exportation, ou l\'annuler. Voulez-vous continuer ? (Non ne l\'annulera)';
$string['availableformats'] = 'Formats d\'exportation disponibles';
$string['callbackclassinvalid'] = 'La classe de rappel spécifiée était invalide ou ne faisait pas partie de la hiérarchie portfolio_caller';
$string['callercouldnotpackage'] = 'Impossible d\'emballer vos données pour l\'exportation : l\'erreur originale était {$a}';
$string['cannotsetvisible'] = 'Impossible de définir cela à visible - le plugin a été complètement désactivé en raison d\'une mauvaise configuration';
$string['commonportfoliosettings'] = 'Paramètres communs du portefeuille';
$string['commonsettingsdesc'] = '<p>Si un transfert est considéré comme prenant un \'Moderate\' or \'High\' amount of time changes whether the user is able to wait for the transfer to complete or not.</p><p>Sizes up to the \'Moderate\' threshold just happen immediately without the user being asked, and \'Moderate\' and \'High\' transfers mean they are offered the option but warned it might take some time.</p><p>Additionally, some portfolio plugins might ignore this option completely and force all transfers to be queued.</p>';
$string['configexport'] = 'Configurer les données exportées';
$string['configplugin'] = 'Configurer le plugin portefeuille';
$string['configure'] = 'Configuration';
$string['confirmcancel'] = 'Voulez-vous vraiment annuler cette exportation?';
$string['confirmexport'] = 'Veuillez confirmer cette exportation';
$string['confirmsummary'] = 'Résumé de votre exportation';
$string['continuetoportfolio'] = 'Continuez jusqu\'à votre portefeuille';
$string['deleteportfolio'] = 'Supprimer l\'instance de portefeuille';
$string['destination'] = 'Destination';
$string['disabled'] = 'Désolé, mais les exportations de portefeuille ne sont pas activées sur ce site';
$string['disabledinstance'] = 'Handicapé';
$string['displayarea'] = 'Zone d\'exportation';
$string['displayexpiry'] = 'Délai de transfert';
$string['displayinfo'] = 'Informations sur l\'exportation';
$string['dontwait'] = 'Don\'t wait';
$string['enabled'] = 'Activer les portefeuilles';
$string['enableddesc'] = 'Si activé, les utilisateurs peuvent exporter du contenu, comme des messages de forum et des soumissions d\'affectation, vers des portefeuilles externes ou des pages HTML.';
$string['err_uniquename'] = 'Le nom de portefeuille doit être unique (par plugin)';
$string['exportalreadyfinished'] = 'Exportation de portefeuille terminée!';
$string['exportalreadyfinisheddesc'] = 'Exportation de portefeuille terminée!';
$string['exportcomplete'] = 'Exportation de portefeuille terminée!';
$string['exportedpreviously'] = 'Exportations antérieures';
$string['exportexceptionnoexporter'] = 'Un portfolio_export_exception a été lancé avec une session active mais aucun objet exportateur';
$string['exportexpired'] = 'Exportations de portefeuille expirées';
$string['exportexpireddesc'] = 'Vous avez essayé de répéter l\'exportation de certaines informations, ou de commencer une exportation vide. Pour le faire correctement, vous devriez retourner à l\'emplacement original et recommencer. Cela arrive parfois si vous utilisez le bouton arrière après qu\'une exportation a terminé, ou en marquant un url invalide.';
$string['exporting'] = 'Exportation vers le portefeuille';
$string['exportingcontentfrom'] = 'Exporter du contenu de {$a}';
$string['exportingcontentto'] = 'Exporter du contenu vers {$a}';
$string['exportqueued'] = 'Les exportations de portefeuille ont été mises en attente pour le transfert';
$string['exportqueuedforced'] = 'Les exportations de portefeuille ont été mises en attente avec succès pour le transfert (le système distant a imposé des transferts en attente)';
$string['failedtopackage'] = 'Impossible de trouver des fichiers dans le paquetage';
$string['failedtosendpackage'] = 'Impossible d\'envoyer vos données au système de portefeuille sélectionné : l\'erreur originale était {$a}';
$string['filedenied'] = 'Accès refusé à ce fichier';
$string['filenotfound'] = 'Fichier introuvable';
$string['fileoutputnotsupported'] = 'Réécrire la sortie du fichier n\'est pas pris en charge pour ce format';
$string['format_document'] = 'Numéro';
$string['format_file'] = 'Fichier';
$string['format_image'] = 'Image';
$string['format_leap2a'] = 'Format du portfolio Leap2A';
$string['format_mbkp'] = 'Format de sauvegarde Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Présentation';
$string['format_richhtml'] = 'HTML avec pièces jointes';
$string['format_spreadsheet'] = 'Feuille de calcul';
$string['format_text'] = 'Texte simple';
$string['format_video'] = 'Vidéo';
$string['highdbsizethreshold'] = 'Haute taille de transfert';
$string['highdbsizethresholddesc'] = 'Nombre de dossiers db sur lesquels on considérera qu\'il faut beaucoup de temps pour transférer';
$string['highfilesizethreshold'] = 'Fichiers de transfert élevé';
$string['highfilesizethresholddesc'] = 'Les dossiers dépassant ce seuil seront considérés comme prenant beaucoup de temps pour le transfert';
$string['insanebody'] = 'Hi! You are receiving this message as an administrator of {$a->sitename}.

Some portfolio plugin instances have been automatically disabled due to misconfigurations. This means that users can not currently export content to these portfolios.

The list of portfolio plugin instances that have been disabled is:

{$a->textlist}

This should be corrected as soon as possible, by visiting {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Hi! You are receiving this message as an administrator of {$a->sitename}.</p>
<p>Some portfolio plugin instances have been automatically disabled due to misconfigurations. This means that users can not currently export content to these portfolios.</p>
<p>The list of portfolio plugin instances that have been disabled is:</p>
{$a->htmllist}
<p>This should be corrected as soon as possible, by visiting <a href="[$a->fixurl]">the portfolio configuration pages</a></p>';
$string['insanebodysmall'] = 'Bonjour ! Vous recevez ce message en tant qu\'administrateur de {$a->sitename}. Certaines instances de plugins de portefeuille ont été automatiquement désactivées en raison d\'erreurs de configuration. Cela signifie que les utilisateurs ne peuvent actuellement pas exporter du contenu vers ces portefeuilles. Ceci doit être corrigé dès que possible, en visitant {$a->fixurl}.';
$string['insanesubject'] = 'Certaines instances de portefeuille désactivées automatiquement';
$string['instancedeleted'] = 'Portfolio supprimé avec succès';
$string['instanceismisconfigured'] = 'L\'instance de portefeuille est mal configurée, saute. L\'erreur était : {$a}';
$string['instancenotdelete'] = 'Impossible de supprimer le portefeuille';
$string['instancenotsaved'] = 'Impossible d\'économiser le portefeuille';
$string['instancesaved'] = 'Portefeuille sauvegardé avec succès';
$string['intro'] = 'Content which you have created, such as assignment submissions, forum posts and blog entries, can be exported to a portfolio or downloaded.<br>
Any portfolio that you do not wish to use may be hidden so that it is not listed as an option to export content to.';
$string['invalidaddformat'] = 'Format d\'ajout non valide passé à portfolio_add_bouton. ({$a}) Doit être un de PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Impossible de trouver cette propriété ({$a}) de portfolio_bouton';
$string['invalidconfigproperty'] = 'Impossible de trouver cette propriété de config ({$a->property} de {$a->class})';
$string['invalidexportproperty'] = 'Impossible de trouver cette propriété de config export ({$a->propriété} de {$a->classe})';
$string['invalidfileareaargs'] = 'arguments de zone de fichier non valides passés à set_file_and_format_data - doit contenir contextid, component, filearea et itemid';
$string['invalidformat'] = 'Quelque chose exporte un format invalide, {$a}';
$string['invalidinstance'] = 'Impossible de trouver cette instance de portefeuille';
$string['invalidpreparepackagefile'] = 'Appel non valide pour préparer_package_file - un seul fichier ou plusieurs fichiers doivent être définis';
$string['invalidproperty'] = 'Impossible de trouver cette propriété ({$a->propriété} de {$a->classe})';
$string['invalidsha1file'] = 'Appel non valide pour get_sha1_file - un seul ou plusieurs fichiers doivent être définis';
$string['invalidtempid'] = 'Indicatif d\'exportation non valide. Peut-être qu\'il a expiré.';
$string['invaliduserproperty'] = 'Impossible de trouver la propriété config de l\'utilisateur ({$a->property} de {$a->class})';
$string['leap2a_emptyselection'] = 'Valeur requise non sélectionnée';
$string['leap2a_entryalreadyexists'] = 'Vous avez essayé d\'ajouter une entrée Leap2A avec un id ({$a}) qui existe déjà dans ce flux';
$string['leap2a_feedtitle'] = 'Leap2A exportation de Moodle pour {$a}';
$string['leap2a_filecontent'] = 'Essaie de définir le contenu d\'une entrée Leap2A dans un fichier, plutôt que d\'utiliser la sous-classe de fichier';
$string['leap2a_invalidentryfield'] = 'Vous avez essayé de définir un champ d\'entrée qui a fait\'t exist ({$a}) or you can\'t set directly';
$string['leap2a_invalidentryid'] = 'Vous avez essayé d\'accéder à une entrée par un identifiant qui a fait\'t exist ({$a})';
$string['leap2a_missingfield'] = 'Champ d\'entrée Leap2A obligatoire {$a} manquant';
$string['leap2a_nonexistantlink'] = 'Une entrée Leap2A ({$a->from}) a essayé de relier une entrée non existante ({$a->to}) avec rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Suppression du type original d\'une entrée ({$a}) à la sélection dans make_selection';
$string['leap2a_selflink'] = 'Une entrée Leap2A ({$a->id}) a essayé de se relier avec rel {$a->rel}';
$string['logs'] = 'Transfert des journaux';
$string['logsummary'] = 'Transferts précédents réussis';
$string['manageportfolios'] = 'Gérer les portefeuilles';
$string['manageyourportfolios'] = 'Gérer vos portefeuilles';
$string['mimecheckfail'] = 'Le plugin de portefeuille {$a->plugin} fait\'t support that mimetype {$a->mimetype}';
$string['missingcallbackarg'] = 'arguments de rappel manquants {$a->arg} pour la classe {$a->class}';
$string['moderatedbsizethreshold'] = 'Dbsize de transfert modéré';
$string['moderatedbsizethresholddesc'] = 'Nombre de dossiers db sur lesquels on considérera qu\'il faut un temps modéré pour transférer';
$string['moderatefilesizethreshold'] = 'Fichier de transfert modéré';
$string['moderatefilesizethresholddesc'] = 'Les dossiers dépassant ce seuil seront considérés comme prenant un temps modéré pour le transfert';
$string['multipleinstancesdisallowed'] = 'Essayer de créer une autre instance d\'un plugin qui a refusé plusieurs instances ({$a})';
$string['mustsetcallbackoptions'] = 'Vous devez définir les options de callback soit dans le constructeur portfolio_add_bouton, soit en utilisant la méthode set_callback_options';
$string['noavailableplugins'] = 'Désolé, mais il n\'y a pas de portefeuilles disponibles pour que vous exportiez vers';
$string['nocallbackclass'] = 'Impossible de trouver la classe de rappel à utiliser ({$a})';
$string['nocallbackcomponent'] = 'Impossible de trouver le composant spécifié {$a}.';
$string['nocallbackfile'] = 'Quelque chose dans le module vous\'re trying to export from is broken - couldn\'t find a required portfolio file';
$string['noclassbeforeformats'] = 'Vous devez définir la classe callback avant d\'appeler set_formats dans portfolio_bouton';
$string['nocommonformats'] = 'Aucun format commun entre un plugin de portefeuille disponible et l\'emplacement de l\'appel {$a->location} (appel pris en charge {$a->formats})';
$string['noinstanceyet'] = 'Non encore sélectionné';
$string['nologs'] = 'Il n\'y a pas de journaux à afficher !';
$string['nomultipleexports'] = 'Désolé, mais la destination du portfolio ({$a->plugin}) ne fonctionne pas.'t support multiple exports at the same time. Please <a href="{$a->lien}">finish the current one first</a> and try again';
$string['nonprimative'] = 'Une valeur non primitive a été passée comme argument de callback à portfolio_add_bouton. Refuser de continuer. La clé était {$a->key} et la valeur était {$a->value}';
$string['nopermissions'] = 'Désolé, mais vous n\'avez pas les permissions nécessaires pour exporter des fichiers de cette zone';
$string['notexportable'] = 'Désolé, mais le type de contenu que vous essayez d\'exporter n\'est pas exportable.';
$string['notimplemented'] = 'Désolé, mais vous essayez d\'exporter du contenu dans un format qui n\'est pas encore implémenté ({$a})';
$string['notyetselected'] = 'Non encore sélectionné';
$string['notyours'] = 'Vous essayez de reprendre une exportation de portefeuille qui fait\'t belong to you!';
$string['nouploaddirectory'] = 'Impossible de créer un répertoire temporaire pour regrouper vos données';
$string['off'] = 'Activé mais caché';
$string['on'] = 'Active et visible';
$string['plugin'] = 'Greffon portefeuille';
$string['plugincouldnotpackage'] = 'Impossible d\'emballer vos données pour l\'exportation : l\'erreur originale était {$a}';
$string['pluginismisconfigured'] = 'Portfolio plugin est mal configuré, sauter. L\'erreur était : {$a}';
$string['portfolio'] = 'Portefeuille';
$string['portfolios'] = 'Portefeuilles';
$string['privacy:metadata'] = 'Le sous-système portefeuille agit comme un canal, passant les demandes des plugins aux différents plugins portefeuille.';
$string['privacy:metadata:name'] = 'Nom de préférence';
$string['privacy:metadata:instance'] = 'Identifiant de portefeuille';
$string['privacy:metadata:instancesummary'] = 'Stocke des données sur les instances de portefeuille et les préférences.';
$string['privacy:metadata:portfolio_log'] = 'Registre des transferts de portefeuille (utilisé pour vérifier ultérieurement les duplications)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Nom de la classe utilisée pour créer le transfert';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Nom du composant responsable de l\'exportation';
$string['privacy:metadata:portfolio_log:time'] = 'Temps de transfert (dans le cas d\'un transfert en file d\'attente c\'est le temps de transfert réel, pas quand l\'utilisateur a commencé)';
$string['privacy:metadata:portfolio_log:userid'] = 'ID de l\'utilisateur qui a exporté du contenu';
$string['privacy:metadata:portfolio_tempdata'] = 'Stocke des données temporaires pour les exportations de portefeuille.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Données sur les exportations';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Temps que ce record expire';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Exemple de plugin de portefeuille utilisé';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Utilisateur effectuant l\'exportation';
$string['privacy:metadata:value'] = 'Valeur de la préférence';
$string['privacy:metadata:userid'] = 'ID utilisateur';
$string['privacy:path'] = 'Cas de portefeuille';
$string['queuesummary'] = 'Transferts en attente';
$string['returntowhereyouwere'] = 'Retour à l\'endroit où vous étiez';
$string['save'] = 'Enregistrer';
$string['selectedformat'] = 'Format d\'exportation sélectionné';
$string['selectedwait'] = 'Sélectionné pour attendre ?';
$string['selectplugin'] = 'Sélectionner une destination';
$string['showhide'] = 'Afficher / masquer';
$string['singleinstancenomultiallowed'] = 'Une seule instance de plugin de portefeuille est disponible, il ne fait pas\'t support multiple exports per session, and there\'s already an active export in the session using this plugin!';
$string['somepluginsdisabled'] = 'Certains plugins de portefeuille entiers ont été désactivés parce qu\'ils sont soit mal configurés ou comptent sur autre chose qui est:';
$string['sure'] = 'Voulez-vous vraiment supprimer \'{$a}\'? This cannot be undone.';
$string['thirdpartyexception'] = 'Une exception de tiers a été lancée lors de l\'exportation de portefeuille ({$a}). Pris et refoulés, mais cela devrait vraiment être corrigé';
$string['transfertime'] = 'Temps de transfert';
$string['unknownplugin'] = 'Inconnu (peut avoir depuis été supprimé par un administrateur)';
$string['wait'] = 'Attendez.';
$string['wanttowait_high'] = 'Il n\'est pas recommandé que vous attendiez que ce transfert soit terminé, mais vous pouvez si vous\'re sure and know what you\'re doing';
$string['wanttowait_moderate'] = 'Voulez-vous attendre ce transfert ? Ça pourrait prendre quelques minutes.';

