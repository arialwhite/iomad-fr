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
 * Strings for component 'scorm', language 'en'
 *
 * @package   mod_scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['toc'] = 'TOC';
$string['navigation'] = 'Navigation';
$string['aicchacptimeout'] = 'AICC HACP timeout';
$string['aicchacptimeout_desc'] = 'Durée du temps en minutes qu\'une session HACP AICC externe peut rester ouverte';
$string['aicchacpkeepsessiondata'] = 'Données de la session de l\'AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Durée du temps en jours pour garder les données externes de la session AICC HACP (un réglage élevé remplira la table avec des données anciennes, mais peut être utile lors du débogage)';
$string['aiccuserid'] = 'AICC passe l\'identifiant numérique de l\'utilisateur';
$string['aiccuserid_desc'] = 'La norme AICC pour les noms d\'utilisateur est très restrictive par rapport à Moodle, et permet des caractères alphanumériques, tiret et souligne seulement. Les périodes, les espaces et le symbole @ ne sont pas autorisés. Si activé, les numéros d\'identification utilisateur sont transmis au paquet AICC au lieu des noms d\'utilisateur.';
$string['activation'] = 'Activation';
$string['activityloading'] = 'Vous serez automatiquement redirigé vers l\'activité dans';
$string['activityoverview'] = 'Vous avez des paquets SCORM qui ont besoin d\'attention';
$string['activitypleasewait'] = 'Chargement des activités, veuillez patienter ...';
$string['adminsettings'] = 'Paramètres d\'administration';
$string['advanced'] = 'Paramètres';
$string['aliasonly'] = 'Lors de la sélection d\'un fichier imsmanifest.xml dans un dépôt, vous devez utiliser un alias/shortcut pour ce fichier.';
$string['allowapidebug'] = 'Activer le débogage et le traçage de l\'API (mettre le masque de capture avec apidebugmask)';
$string['allowtypeexternal'] = 'Activer le type de paquet externe';
$string['allowtypeexternalaicc'] = 'Activer directement URL AICC';
$string['allowtypeexternalaicc_desc'] = 'Si activé cela permet une url directe à un simple paquet AICC';
$string['allowtypelocalsync'] = 'Activer le type de paquet téléchargé';
$string['allowtypeaicchacp'] = 'Activer externe AIPC HACP';
$string['allowtypeaicchacp_desc'] = 'Si activé cela permet la communication externe AICC HACP sans exiger de connexion utilisateur pour les demandes de poste du paquet AICC externe';
$string['apidebugmask'] = 'API debug capture masque - utiliser un simple regex sur &lt;username&gt;:&lt;activityname&gt; p.ex. admin:.* debug pour l\'utilisateur administrateur seulement';
$string['areacontent'] = 'Fichiers de contenu';
$string['areapackage'] = 'Fichier paquet';
$string['asset'] = 'Actifs';
$string['assetlaunched'] = 'Atout vu';
$string['attempt'] = 'Essai';
$string['attempts'] = 'Tentatives';
$string['attemptstatusall'] = 'Tableau de bord et page d\'entrée';
$string['attemptstatusmy'] = 'Tableau de bord seulement';
$string['attemptstatusentry'] = 'Page d\'entrée seulement';
$string['attemptsx'] = '{$a} tentatives';
$string['attemptsmanagement'] = 'Gestion des tentatives';
$string['attempt1'] = '1 tentative';
$string['attr_error'] = 'Mauvaise valeur pour l\'attribut ({$a->attr}) dans la balise {$a->tag}.';
$string['autocommit'] = 'Envoi automatique';
$string['autocommit_help'] = 'Si activé, les données SCORM sont automatiquement enregistrées dans la base de données. Utile pour les objets SCORM qui ne sauvegardent pas leurs données régulièrement.';
$string['autocommitdesc'] = 'Enregistrer automatiquement les données SCORM si le paquet SCORM ne les enregistre pas.';
$string['autocontinue'] = 'Continuer automatiquement';
$string['autocontinue_help'] = 'Si activé, les objets d\'apprentissage ultérieurs sont lancés automatiquement, sinon le bouton Continuer doit être utilisé.';
$string['autocontinuedesc'] = 'Si activé, les objets d\'apprentissage ultérieurs sont lancés automatiquement, sinon le bouton Continuer doit être utilisé.';
$string['averageattempt'] = 'Tentatives moyennes';
$string['badmanifest'] = 'Quelques erreurs manifestes : voir le journal des erreurs';
$string['badimsmanifestlocation'] = 'Un fichier imsmanifest.xml a été trouvé mais il n\'était pas dans la racine de votre fichier zip, s\'il vous plaît re-package votre SCORM';
$string['badarchive'] = 'Vous devez fournir un fichier zip valide';
$string['browse'] = 'Aperçu';
$string['browsed'] = 'Consulté';
$string['browsemode'] = 'Mode d\'aperçu';
$string['browserepository'] = 'Parcourir le dépôt';
$string['cachedef_elements'] = 'cache des éléments';
$string['calculatedweight'] = 'Poids calculé';
$string['calendarend'] = '{$a} ferme';
$string['calendarstart'] = '{$a} s\'ouvre';
$string['cannotaccess'] = 'Vous ne pouvez pas appeler ce script de cette façon';
$string['cannotfindsco'] = 'Impossible de trouver SCO';
$string['closebeforeopen'] = 'Vous avez spécifié une date de fermeture avant la date ouverte.';
$string['collapsetocwinsize'] = 'Réduire le TOC lorsque la taille de la fenêtre est inférieure';
$string['collapsetocwinsizedesc'] = 'Ce paramètre vous permet de spécifier la taille de la fenêtre en dessous de laquelle le TOC devrait s\'effondrer automatiquement.';
$string['compatibilitysettings'] = 'Paramètres de compatibilité';
$string['completed'] = 'Achevé';
$string['completiondetail:completionstatuspassed'] = 'Passer l\'activité';
$string['completiondetail:completionstatuscompleted'] = 'Achever l\'activité';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Compléter ou réussir l\'activité';
$string['completiondetail:completionscore'] = 'Recevez un score de {$a} ou plus';
$string['completiondetail:allscos'] = 'Faire toutes les parties de cette activité';
$string['completionscorerequired'] = 'Exiger un score minimum';
$string['completionscorerequireddesc'] = 'Une note minimale de {$a} est requise pour l\'achèvement';
$string['completionstatus_passed'] = 'Décédé';
$string['completionstatus_completed'] = 'Achevé';
$string['completionstatusallscos'] = 'Tous les OSC doivent retourner l\'état d\'achèvement';
$string['completionstatusallscos_help'] = 'Certains paquets SCORM contiennent plusieurs composants ou "scos" - lorsque cela est activé, tous les scos du paquet doivent retourner le fichier lear_status pertinent pour que cette activité soit marquée.';
$string['completionstatusrequired'] = 'Exiger un statut';
$string['completionstatusrequireddesc'] = 'L\'étudiant doit obtenir au moins un des statuts suivants : {$a}';
$string['completionstatusrequired_help'] = 'La vérification d\'un ou de plusieurs états exigera qu\'un utilisateur atteigne au moins un des états vérifiés afin d\'être marqué dans cette activité SCORM, ainsi que toute autre exigence d\'achèvement d\'activité.';
$string['confirmloosetracks'] = 'ATTENTION: Le paquet semble être modifié ou modifié. Si la structure du paquet est modifiée, certaines pistes utilisateurs peuvent être perdues pendant le processus de mise à jour.';
$string['contents'] = 'Sommaire';
$string['coursepacket'] = 'Paquet de cours';
$string['coursestruct'] = 'Structure du contenu';
$string['crontask'] = 'Traitement de fond pour SCORM';
$string['currentwindow'] = 'Fenêtre actuelle';
$string['datadir'] = 'Erreur du système de fichiers : Can\'t create course data directory';
$string['defaultdisplaysettings'] = 'Paramètres d\'affichage par défaut';
$string['defaultgradesettings'] = 'Paramètres de la note par défaut';
$string['defaultothersettings'] = 'Autres paramètres par défaut';
$string['deleteattemptcheck'] = 'Êtes-vous absolument sûr de vouloir supprimer complètement ces tentatives?';
$string['deleteallattempts'] = 'Toutes les tentatives SCORM';
$string['deleteselected'] = 'Supprimer les tentatives sélectionnées';
$string['deleteuserattemptcheck'] = 'Êtes-vous absolument sûr de vouloir supprimer complètement toutes vos tentatives?';
$string['details'] = 'Détails de la piste';
$string['directories'] = 'Afficher les liens du répertoire';
$string['disabled'] = 'Handicapé';
$string['display'] = 'Afficher le paquet';
$string['displayattemptstatus'] = 'Afficher l\'état de la tentative';
$string['displayattemptstatus_help'] = 'Cette préférence permet un résumé des tentatives des utilisateurs d\'afficher dans le bloc aperçu du cours dans le tableau de bord et/ou la page d\'entrée SCORM.';
$string['displayattemptstatusdesc'] = 'Indique si un résumé de l\'utilisateur\'s attempts is shown in the course overview block in Dashboard and/or the SCORM entry page.';
$string['displaycoursestructure'] = 'Afficher la structure du contenu sur la page d\'entrée';
$string['displaycoursestructure_help'] = 'Si cette option est activée, la table des matières est affichée sur la page des grandes lignes de SCORM.';
$string['displaycoursestructuredesc'] = 'Si cette option est activée, la table des matières est affichée sur la page des grandes lignes de SCORM.';
$string['displaydesc'] = 'Indique s\'il faut afficher le paquet SCORM dans une nouvelle fenêtre.';
$string['displaysettings'] = 'Affichage des paramètres';
$string['dnduploadscorm'] = 'Ajouter un paquet SCORM';
$string['domxml'] = 'DOMXML bibliothèque externe';
$string['element'] = 'Élément';
$string['enter'] = 'Entrez';
$string['entercourse'] = 'Entrez le cours';
$string['errorlogs'] = 'Registre des erreurs';
$string['eventattemptdeleted'] = 'Tentative supprimée';
$string['eventinteractionsviewed'] = 'Interactions vues';
$string['eventreportviewed'] = 'Rapport consulté';
$string['eventscolaunched'] = 'Sco lancé';
$string['eventscorerawsubmitted'] = 'SCORM présenté score brut';
$string['eventstatussubmitted'] = 'État de la MSC soumise';
$string['eventtracksviewed'] = 'Voies vues';
$string['eventuserreportviewed'] = 'Rapport utilisateur consulté';
$string['everyday'] = 'Tous les jours';
$string['everytime'] = 'Chaque fois qu\'il\'s used';
$string['exceededmaxattempts'] = 'Vous avez atteint le nombre maximum de tentatives.';
$string['exit'] = 'Cours de sortie';
$string['exitactivity'] = 'Activité de sortie';
$string['expired'] = 'Désolé, cette activité a fermé le {$a} et n\'est plus disponible';
$string['external'] = 'Mettre à jour le calendrier des paquets externes';
$string['failed'] = 'Échec';
$string['finishscorm'] = 'Si vous avez terminé d\'afficher cette ressource, {$a}';
$string['finishscormlinkname'] = 'cliquez ici pour revenir à la page du cours';
$string['firstaccess'] = 'Premier accès';
$string['firstattempt'] = 'Première tentative';
$string['floating'] = 'flottant';
$string['forcecompleted'] = 'Force terminée';
$string['forcecompleted_help'] = 'Si elle est activée, l\'état de la tentative actuelle est forcé de « terminer ». (Seulement applicable aux colis SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Cette préférence définit la valeur par défaut pour le réglage de la force terminée';
$string['forcenewattempts'] = 'Forcer une nouvelle tentative';
$string['forcenewattempts_help'] = 'There are 3 options:

* No - If a previous attempt is completed, passed or failed, the student will be provided with the option to enter in review mode or start a new attempt.
* When previous attempt completed, passed or failed - This relies on the SCORM package setting the status of \'completed\', \'passed\' or \'failed\'.
* Always - Each re-entry to the SCORM activity will generate a new attempt and the student will not be returned to the same point they reached in their previous attempt.';
$string['forceattemptalways'] = 'Toujours';
$string['forceattemptoncomplete'] = 'Lorsque la tentative précédente a été achevée, passée ou échouée';
$string['forcejavascript'] = 'Forcer les utilisateurs à activer JavaScript';
$string['forcejavascript_desc'] = 'Si activé (recommandé), cela empêche l\'accès aux objets SCORM lorsque JavaScript n\'est pas pris en charge ou activé dans un navigateur utilisateur. Si désactivé, l\'utilisateur peut afficher le SCORM mais la communication API échouera et aucune information de niveau ne sera enregistrée.';
$string['forcejavascriptmessage'] = 'JavaScript est nécessaire pour visualiser cet objet, veuillez activer JavaScript dans votre navigateur et réessayer.';
$string['found'] = 'Manifeste trouvé';
$string['frameheight'] = 'La hauteur du cadre de scène ou de la fenêtre.';
$string['framewidth'] = 'La largeur du cadre de scène ou de la fenêtre.';
$string['fromleft'] = 'De gauche';
$string['fromtop'] = 'En haut';
$string['fullscreen'] = 'Remplissez l\'écran entier';
$string['general'] = 'Données générales';
$string['gradeaverage'] = 'Niveau moyen';
$string['gradeforattempt'] = 'Grade pour tentative';
$string['gradehighest'] = 'Niveau supérieur';
$string['grademethod'] = 'Méthode de classement';
$string['grademethod_help'] = 'The grading method defines how the grade for a single attempt of the activity is determined.

There are 4 grading methods:

* Learning objects - The number of completed/passed learning objects
* Highest grade - The highest score obtained in all passed learning objects
* Average grade - The mean of all the scores
* Sum grade - The sum of all the scores';
$string['grademethoddesc'] = 'La méthode de classement définit la façon dont la cote pour une tentative unique de l\'activité est déterminée.';
$string['gradereported'] = 'Grade rapporté';
$string['gradesettings'] = 'Paramètres de classement';
$string['gradescoes'] = 'Objets d\'apprentissage';
$string['gradesum'] = 'Montant';
$string['height'] = 'Hauteur';
$string['hidden'] = 'Caché';
$string['hidebrowse'] = 'Désactiver le mode d\'aperçu';
$string['hidebrowse_help'] = 'Le mode Aperçu permet à un étudiant de parcourir une activité avant de l\'essayer. Si le mode d\'aperçu est désactivé, le bouton d\'aperçu est caché.';
$string['hidebrowsedesc'] = 'Le mode Aperçu permet à un étudiant de parcourir une activité avant de l\'essayer.';
$string['hideexit'] = 'Masquer le lien de sortie';
$string['hidereview'] = 'Cacher le bouton de révision';
$string['hidetoc'] = 'Afficher la structure du contenu dans le lecteur';
$string['hidetoc_help'] = 'Comment la table des matières est affichée dans le lecteur SCORM';
$string['hidetocdesc'] = 'Ce paramètre spécifie comment la table des matières est affichée dans le lecteur SCORM.';
$string['highestattempt'] = 'Plus grande tentative';
$string['chooseapacket'] = 'Choisir ou mettre à jour un paquet';
$string['identifier'] = 'Identifiant des questions';
$string['incomplete'] = 'Incomplète';
$string['indicator:cognitivedepth'] = 'SCORM cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'élève dans une activité SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités du SCORM pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Voir, Soumettre, Voir les commentaires)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités du SCORM pendant cet intervalle d\'analyse (niveaux = aucune participation, participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';

$string['interactions'] = 'Interactions';
$string['largetrackupgrade'] = 'Cette prochaine étape de mise à niveau peut prendre un certain temps, votre site a {$a} SCORM trace records qui doivent être migrés vers la nouvelle structure de table, s\'il vous plaît être patient car une barre de progression n\'est pas en mesure d\'être affichée.';
$string['masteryoverride'] = 'Le score de maîtrise remplace le statut';
$string['masteryoverride_help'] = 'Si activé et qu\'une note de maîtrise est fournie, lorsque LMSFinish est appelé et qu\'une note brute a été établie, l\'état sera recalculé à l\'aide de la note brute et de la note de maîtrise et tout état fourni par le SCORM (y compris « incomplet ») sera dépassé.';
$string['masteryoverridedesc'] = 'Cette préférence définit la valeur par défaut pour le réglage de la touche mastery';
$string['myattempts'] = 'Mes tentatives';
$string['myaiccsessions'] = 'Mes sessions AICC';
$string['repositorynotsupported'] = 'Ce dépôt ne supporte pas le lien direct vers un fichier imsmanifest.xml.';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'C\'est l\'identificateur défini par votre paquet SCORM pour cette question, la spécification SCORM does\'t allow the full question text to be provided.';
$string['trackcorrectcount'] = 'Nombre exact';
$string['trackcorrectcount_help'] = 'Nombre de résultats corrects pour la question';
$string['trackpattern'] = 'Modèle';
$string['trackpattern_help'] = 'C\'est la réponse correcte à cette question, elle ne montre pas la réponse des apprenants.';
$string['tracklatency'] = 'Latence';
$string['tracklatency_help'] = 'Le temps écoulé entre le moment où la question a été mise à la disposition de l\'apprenant pour une réponse et le moment de la première réponse.';
$string['trackresponse'] = 'Réponse';
$string['trackresponse_help'] = 'C\'est la réponse de l\'apprenant à cette question';
$string['trackresult'] = 'Résultat';
$string['trackresult_help'] = 'Indique si l\'apprenant a entré une réponse correcte.';
$string['trackscoremin'] = 'Score minimal';
$string['trackscoremin_help'] = 'Valeur minimale pouvant être attribuée pour la note brute';
$string['trackscoremax'] = 'Score maximal';
$string['trackscoremax_help'] = 'Valeur maximale pouvant être attribuée pour le score brut';
$string['trackscoreraw'] = 'Score brut';
$string['trackscoreraw_help'] = 'Nombre qui reflète la performance de l\'apprenant par rapport à la plage délimitée par les valeurs de min et max';
$string['tracksuspenddata'] = 'Suspendre les données';
$string['tracksuspenddata_help'] = 'Fournit de l\'espace pour stocker et récupérer les données entre les sessions de l\'apprenant';
$string['tracktime'] = 'Heure';
$string['tracktime_help'] = 'Heure à laquelle la tentative a été lancée';
$string['tracktype'] = 'Type';
$string['tracktype_help'] = 'Type de question, par exemple « choix » ou « réponse abrégée ».';
$string['trackweight'] = 'Poids';
$string['trackweight_help'] = 'Poids attribué à la question lors du calcul de la note.';
$string['invalidactivity'] = 'L\'activité de SCORM est incorrecte';
$string['invalidmanifestname'] = 'Seuls les fichiers immanifest.xml ou .zip peuvent être sélectionnés';
$string['invalidstatus'] = 'Invalidité';
$string['invalidurl'] = 'URL non valide spécifiée';
$string['invalidurlhttpcheck'] = 'URL non valide spécifiée. Message de débogage :<pre>{$a->cmsg}</pre>';
$string['invalidhacpsession'] = 'Session HACP non valide';
$string['invalidmanifestresource'] = 'ATTENTION: Les ressources suivantes ont été référencées dans votre manifeste, mais ont pu\'t be found:';
$string['last'] = 'Dernière consultation';
$string['lastaccess'] = 'Dernier accès';
$string['lastattempt'] = 'Dernière tentative achevée';
$string['lastattemptlock'] = 'Verrouillage après la dernière tentative';
$string['lastattemptlock_help'] = 'Si activé, un étudiant est empêché de lancer le lecteur SCORM après avoir utilisé toutes ses tentatives.';
$string['lastattemptlockdesc'] = 'Si activé, un étudiant est empêché de lancer le lecteur SCORM après avoir utilisé toutes ses tentatives.';
$string['location'] = 'Afficher la barre d\'emplacement';
$string['max'] = 'Score max';
$string['maximumattempts'] = 'Nombre de tentatives';
$string['maximumattempts_help'] = 'Ce réglage permet de limiter le nombre de tentatives. Elle ne s\'applique qu\'aux colis SCORM 1.2 et AICC.';
$string['maximumattemptsdesc'] = 'Cette préférence définit les tentatives maximales par défaut pour une activité';
$string['maximumgradedesc'] = 'Cette préférence fixe la note maximale par défaut pour une activité';
$string['menubar'] = 'Afficher la barre de menu';
$string['min'] = 'Score minimal';
$string['minimumscoregreater'] = 'La note minimale doit être supérieure à 0.';
$string['missing_attribute'] = 'attribut manquant {$a->attr} dans l\'étiquette {$a->tag}';
$string['missingparam'] = 'Un paramètre requis est manquant ou faux';
$string['missing_tag'] = 'Étiquette manquante {$a->tag}';
$string['mode'] = 'Mode';
$string['modulename'] = 'Paquet SCORM';
$string['modulename_help'] = 'A SCORM package is a collection of files which are packaged according to an agreed standard for learning objects. The SCORM activity module enables SCORM or AICC packages to be uploaded as a zip file and added to a course.

Content is usually displayed over several pages, with navigation between the pages. There are various options for displaying content in a pop-up window, with a table of contents, with navigation buttons etc. SCORM activities generally include questions, with grades being recorded in the gradebook.

SCORM activities may be used

* For presenting multimedia content and animations
* As an assessment tool';
$string['modulename_link'] = 'mod/scorm/vue';
$string['modulenameplural'] = 'Paquets SCORM';
$string['nav'] = 'Afficher la navigation';
$string['nav_help'] = 'This setting specifies whether to show or hide the navigation buttons and their position.

There are 3 options:

* No - Navigation buttons are not shown
* Under content - Navigation buttons are shown below the SCORM package content
* Floating - Navigation buttons are shown floating, with the position from the top and from the left determined by the package.';
$string['navdesc'] = 'Ce paramètre spécifie s\'il faut afficher ou masquer les boutons de navigation et leur position.';
$string['navpositionleft'] = 'Position des boutons de navigation de gauche en pixels.';
$string['navpositiontop'] = 'Position des boutons de navigation du haut en pixels.';
$string['networkdropped'] = 'The SCORM player has determined that your Internet connection is unreliable or has been interrupted. If you continue in this SCORM activity, your progress may not be saved.<br />
You should exit the activity now, and return when you have a dependable Internet connection.';
$string['newattempt'] = 'Lancer une nouvelle tentative';
$string['next'] = 'Continuer';
$string['noactivity'] = 'Rien à signaler';
$string['noattemptsallowed'] = 'Nombre de tentatives autorisées';
$string['noattemptsmade'] = 'Nombre de tentatives que vous avez faites';
$string['no_attributes'] = 'Tag {$a->tag} doit avoir des attributs';
$string['no_children'] = 'Tag {$a->tag} doit avoir des enfants';
$string['nolimit'] = 'Essais illimités';
$string['nomanifest'] = 'Package de fichiers incorrect - structure imsmanifest.xml manquante ou AICC';
$string['noprerequisites'] = 'Désolé, mais vous n\'t have the required prerequisites to access this activity.';
$string['noreports'] = 'Aucun rapport à afficher';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Votre navigateur ne supporte pas JavaScript ou il a le support JavaScript désactivé. Ce paquet SCORM ne peut pas lire ou enregistrer correctement les données.';
$string['notattempted'] = 'Pas tenté';
$string['not_corr_type'] = 'Saisissez l\'inadéquation pour l\'étiquette {$a->tag}';
$string['notopenyet'] = 'Désolé, cette activité n\'est pas disponible avant {$a}';
$string['objectives'] = 'Objectifs';
$string['openafterclose'] = 'Vous avez spécifié une date ouverte après la date de clôture';
$string['optallstudents'] = 'tous les utilisateurs';
$string['optattemptsonly'] = 'utilisateurs avec des tentatives seulement';
$string['optnoattemptsonly'] = 'utilisateurs sans aucune tentative seulement';
$string['options'] = 'Options (préventées par certains navigateurs)';
$string['optionsadv'] = 'Options (avancées)';
$string['optionsadv_desc'] = 'Si cochée, la largeur et la hauteur seront listées comme paramètres avancés.';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisations';
$string['othersettings'] = 'Paramètres supplémentaires';
$string['page-mod-scorm-x'] = 'Toute page de module SCORM';
$string['pagesize'] = 'Taille des pages';
$string['package'] = 'Fichier paquet';
$string['package_help'] = 'Le fichier paquet est un fichier zip (ou pif) contenant des fichiers de définition de cours SCORM/AICC.';
$string['packagedir'] = 'Erreur du système de fichiers : Can\'t create package directory';
$string['packagefile'] = 'Aucun fichier de paquet spécifié';
$string['packagehdr'] = 'Paquet';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Ce paramètre permet de spécifier une URL pour le paquet SCORM, plutôt que de choisir un fichier via le sélectionneur de fichiers.';
$string['passed'] = 'Décédé';
$string['php5'] = 'PHP 5 (bibliothèque native de DOMXML)';
$string['pluginadministration'] = 'Administration du paquet SCORM';
$string['pluginname'] = 'Paquet SCORM';
$string['popup'] = 'Nouvelle fenêtre';
$string['popuplaunched'] = 'Ce paquet SCORM a été lancé dans une fenêtre contextuelle, Si vous avez terminé la consultation de cette ressource, cliquez ici pour revenir à la page du cours';
$string['popupmenu'] = 'Dans un menu déroulant';
$string['popupopen'] = 'Ouvrir le paquet dans une nouvelle fenêtre';
$string['popupsblocked'] = 'Il semble que les fenêtres popup soient bloquées, ce qui empêche ce paquet SCORM de jouer. Veuillez vérifier les paramètres de votre navigateur avant d\'essayer à nouveau.';
$string['position_error'] = 'La balise {$a->tag} peut\'t be child of {$a->parent} tag';
$string['preferencesuser'] = 'Préférences pour ce rapport';
$string['preferencespage'] = 'Préférences pour cette page';
$string['prev'] = 'Précédent';
$string['privacy:metadata:aicc:data'] = 'Données personnelles transmises par le sous-système AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Ce plugin envoie des données à l\'extérieur en utilisant l\'AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'L\'état de la leçon à suivre';
$string['privacy:metadata:aicc_session:scormmode'] = 'Le mode de l\'élément à suivre';
$string['privacy:metadata:aicc_session:scormstatus'] = 'État de l\'élément à suivre';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Le temps de session à suivre';
$string['privacy:metadata:aicc_session:timecreated'] = 'Le moment où l\'élément suivi a été créé';
$string['privacy:metadata:attempt'] = 'Le numéro de tentative';
$string['privacy:metadata:scoes_track:element'] = 'Le nom de l\'élément à suivre';
$string['privacy:metadata:scoes_track:value'] = 'La valeur de l\'élément donné';
$string['privacy:metadata:scorm_aicc_session'] = 'Informations sur la session de l\'AICC HACP';
$string['privacy:metadata:scorm_attempt'] = 'Les tentatives SCORM faites par un utilisateur';
$string['privacy:metadata:timemodified'] = 'Le moment où l\'élément suivi a été modifié pour la dernière fois';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur qui a accédé à l\'activité SCORM';
$string['protectpackagedownloads'] = 'Protéger les téléchargements de paquets';
$string['protectpackagedownloads_desc'] = 'Si activé, les paquets SCORM ne peuvent être téléchargés que si l\'utilisateur dispose de la capacité de gestion du cours. Si désactivé, les paquets SCORM peuvent toujours être téléchargés (par mobile ou par d\'autres moyens).';
$string['raw'] = 'Score brut';
$string['regular'] = 'Manifeste régulier';
$string['report'] = 'Rapport annuel';
$string['reports'] = 'Rapports';
$string['reportcountallattempts'] = '{$a->nbattempts} tentatives pour les utilisateurs {$a->nbusers}, à partir des résultats {$a->nbresults}';
$string['reportcountattempts'] = 'Résultats {$a->nbresults} (utilisateurs {$a->nbusers})';
$string['response'] = 'Réponse';
$string['result'] = 'Résultat';
$string['results'] = 'Résultats';
$string['review'] = 'Révision';
$string['reviewmode'] = 'Mode de révision';
$string['rightanswer'] = 'Bonne réponse';
$string['scormstandard'] = 'Mode standard SCORM';
$string['scormstandarddesc'] = 'Lorsque désactivé, Moodle permet aux paquets SCORM 1.2 de stocker plus que la spécification ne le permet, et utilise les paramètres de format de nom complet de Moodle lors du passage du nom d\'utilisateur au paquet SCORM.';
$string['scoes'] = 'Objets d\'apprentissage';
$string['score'] = 'Score';
$string['scorm:addinstance'] = 'Ajouter un nouveau paquet SCORM';
$string['scormclose'] = 'Disponible à';
$string['scormcourse'] = 'Cours';
$string['scorm:deleteresponses'] = 'Supprimer les tentatives SCORM';
$string['scormloggingoff'] = 'L\'enregistrement de l\'API est désactivé';
$string['scormloggingon'] = 'L\'enregistrement de l\'API est activé';
$string['scormopen'] = 'Disponible à partir de';
$string['scormresponsedeleted'] = 'Effacer les tentatives de l\'utilisateur';
$string['scorm:deleteownresponses'] = 'Supprimer ses propres tentatives';
$string['scorm:savetrack'] = 'Enregistrer les pistes';
$string['scorm:skipview'] = 'Aperçu';
$string['scormtype'] = 'Type';
$string['scormtype_help'] = 'This setting determines how the package is included in the course. There are up to 4 options:

* Uploaded package - Enables a SCORM package to be chosen via the file picker
* External SCORM manifest - Enables an imsmanifest.xml URL to be specified. Note: If the URL has a different domain name than your site, then "Downloaded package" is a better option, since otherwise grades are not saved.
* Downloaded package - Enables a package URL to be specified. The package will be unzipped and saved locally, and updated when the external SCORM package is updated.
* External AICC URL - this URL is the launch URL for a single AICC Activity.  A psuedo package will be constructed around this.';
$string['scorm:viewreport'] = 'Afficher les rapports';
$string['scorm:viewscores'] = 'Affichage des scores';
$string['scrollbars'] = 'Laissez défiler la fenêtre';
$string['search:activity'] = 'Paquet SCORM - information sur les activités';
$string['selectall'] = 'Tout sélectionner';
$string['selectnone'] = 'Tout désélectionner';
$string['show'] = 'Afficher';
$string['sided'] = 'Sur le côté';
$string['skipview'] = 'Student skip content structure page';
$string['skipview_help'] = 'Ce paramètre spécifie si la page de structure de contenu doit jamais être ignorée (non affichée). Si le paquet ne contient qu\'un seul objet d\'apprentissage, la page de structure du contenu peut toujours être ignorée.';
$string['skipviewdesc'] = 'Cette préférence définit la valeur par défaut pour quand sauter la structure du contenu pour une page';
$string['slashargs'] = 'ATTENTION : les arguments slash sont désactivés sur ce site et les objets peuvent ne pas fonctionner comme prévu !';
$string['stagesize'] = 'Taille du stade';
$string['stagesize_help'] = 'Ces deux paramètres spécifient la largeur et la hauteur du cadre/fenêtre pour les objets apprenants.';
$string['started'] = 'Commencé';
$string['status'] = 'État';
$string['statusbar'] = 'Afficher la barre d\'état';
$string['student_response'] = 'Réponse';
$string['subplugintype_scormreport'] = 'Rapport annuel';
$string['subplugintype_scormreport_plural'] = 'Rapports';
$string['suspended'] = 'Suspendu';
$string['syntax'] = 'Erreur de syntaxe';
$string['tag_error'] = 'Tag inconnu ({$a->tag}) avec ce contenu : {$a->value}';
$string['time'] = 'Heure';
$string['title'] = 'Titre';
$string['toolbar'] = 'Afficher la barre d\'outils';
$string['too_many_attributes'] = 'Tag {$a->tag} a trop d\'attributs';
$string['too_many_children'] = 'Tag {$a->tag} a trop d\'enfants';
$string['totaltime'] = 'Heure';
$string['trackingloose'] = 'ATTENTION: Les données de suivi de ce paquet seront perdues!';
$string['type'] = 'Type';
$string['typeaiccurl'] = 'URL de l\'AICC externe';
$string['typeexternal'] = 'Manifeste externe SCORM';
$string['typelocal'] = 'Paquet téléchargé';
$string['typelocalsync'] = 'Paquet téléchargé';
$string['undercontent'] = 'Sous contenu';
$string['unziperror'] = 'Une erreur se produit lors du dézipage du paquet';
$string['updatefreq'] = 'Fréquence de mise à jour automatique';
$string['updatefreq_error'] = 'La fréquence de mise à jour automatique ne peut être définie que lorsque le fichier de paquet est hébergé externement';
$string['updatefreq_help'] = 'Cela permet de télécharger et de mettre à jour automatiquement le paquet externe';
$string['updatefreqdesc'] = 'Cette préférence définit la fréquence de mise à jour automatique par défaut d\'une activité';
$string['validateascorm'] = 'Valider un paquet';
$string['validation'] = 'Résultat de validation';
$string['validationtype'] = 'Cette préférence définit la bibliothèque DOMXML utilisée pour valider le Manifeste SCORM. Si vous faites\'t know leave the selected choice.';
$string['value'] = 'Valeur';
$string['versionwarning'] = 'La version du manifeste est plus ancienne que 1,3, avertissement à la balise {$a->tag}';
$string['viewallreports'] = 'Voir les rapports pour les tentatives {$a}';
$string['viewalluserreports'] = 'Afficher les rapports pour les utilisateurs {$a}';
$string['whatgrade'] = 'Tentatives de classement';
$string['whatgrade_help'] = 'Si plusieurs tentatives sont autorisées, ce paramètre indique si la plus élevée, moyenne (moyenne), première ou dernière tentative terminée est enregistrée dans le classeur. La dernière option de tentative terminée ne comprend pas les tentatives avec un \'failed\' status.

Notes on handling of multiple attempts:

* The option to start a new attempt is provided by a checkbox above the Enter button on the content structure page, so be sure you\'re providing access to that page if you want to allow more than one attempt.
* Some SCORM packages are intelligent about new attempts, many are not. What this means is that if the learner re-enters an existing attempt, if the SCORM content does not have internal logic to avoid overwriting previous attempts they can be overwritten, even though the attempt was \'completed\' or \'passed\'.
* The settings "Force completed", "Force new attempt" and "Lock after final attempt" also provide further management of multiple attempts.';
$string['whatgradedesc'] = 'Si la plus élevée, moyenne (moyenne), première ou dernière tentative achevée est enregistrée dans le cahier de notes si plusieurs tentatives sont autorisées.';
$string['width'] = 'Largeur';
$string['window'] = 'Fenêtre';
$string['youmustselectastatus'] = 'Vous devez sélectionner un statut à exiger';

// Deprecated since Moodle 4.3.
$string['completionscorerequired_help'] = 'Pour permettre ce réglage, un utilisateur devra avoir au moins la note minimale inscrite pour être marquée complète dans cette activité SCORM, ainsi que toute autre exigence d\'achèvement d\'activité.';
