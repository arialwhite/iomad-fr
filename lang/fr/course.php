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
 * Strings for component 'course', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_course
 * @copyright 2018 Adrian Greeve <adriangreeve.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activitychoosercategory'] = 'Sélectionneur d\'activités';
$string['activitychooserrecommendations'] = 'Activités recommandées';
$string['activitychoosersettings'] = 'Paramètres du sélectionneur d\'activité';
$string['activitychooseractivefooter'] = 'Pied de page de choix d\'activité';
$string['activitychooseractivefooter_desc'] = 'Le sélecteur d\'activité peut prendre en charge les plugins qui ajoutent des éléments au pied de page.';
$string['activitychooserhidefooter'] = 'Pas de pied de pied';
$string['activitychoosertabmode'] = 'Onglets de sélection d\'activités';
$string['activitychoosertabmode_desc'] = "Le choix de l'activité liste les activités et les ressources pour un enseignant à ajouter à leur cours. Pour ajouter des éléments à l'onglet Recommandé, allez à <a href='../course/recommandations.php'>Activités recommandées</a>.";
$string['activitychoosertabmodeone'] = 'Starred, Tous, Activités, Ressources, Recommandé';
$string['activitychoosertabmodetwo'] = 'Avec la star, tous, Recommandation';
$string['activitychoosertabmodethree'] = 'Starred, Activités, Ressources, Recommandé';
$string['activitychoosertabmodefour'] = 'Étoilé, Recommandé, Tous, Activités, Ressources';
$string['activitychoosertabmodefive'] = 'Starred, Recommandé, Tous';
$string['activitychoosertabmodesix'] = 'Étoilé, Recommandé, Activités, Ressources';
$string['activitydate:closed'] = 'Fermé:';
$string['activitydate:closes'] = 'Ferme :';
$string['activitydate:opened'] = 'Ouverture :';
$string['activitydate:opens'] = 'Ouvre :';
$string['aria:coursecategory'] = 'Catégorie de cours';
$string['aria:courseshortname'] = 'Nom abrégé du cours';
$string['aria:coursename'] = 'Nom du cours';
$string['aria:defaulttab'] = 'Activités par défaut';
$string['aria:favourite'] = 'Le cours est étoilé';
$string['aria:favouritestab'] = 'Activités étoilées';
$string['aria:recommendedtab'] = 'Activités recommandées';
$string['aria:modulefavourite'] = 'Activité Star {$a}';
$string['browsecourseadminindex'] = 'Parcourez l\'administration du cours avec cet index.';
$string['browsesettingindex'] = 'Parcourir les paramètres avec cet index.';
$string['communicationroomlink'] = 'Dialogue avec les participants au cours';
$string['completion_automatic:done'] = 'Fait :';
$string['completion_automatic:failed'] = 'Échec :';
$string['completion_automatic:todo'] = 'Pour faire :';
$string['completion_manual:aria:done'] = '{$a} est marqué comme fait. Appuyez sur pour annuler.';
$string['completion_manual:aria:markdone'] = 'Marquer {$a} comme fait';
$string['completion_manual:done'] = 'Fait';
$string['completion_manual:markdone'] = 'Marquer comme fait';
$string['completion_setby:auto:done'] = 'Fait : {$a->condition} (par {$a->setby})';
$string['completion_setby:auto:todo'] = 'À faire : {$a->condition} (par {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} est marqué par {$a->setby} comme fait. Appuyez sur pour annuler.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} est marqué par {$a->setby} comme non fait. Appuyez sur pour marquer comme fait.';
$string['completionrequirements'] = 'Dépenses prévues pour {$a}';
$string['courseaccess'] = 'Accès au cours';
$string['coursealreadyfinished'] = 'Cours déjà terminé';
$string['coursecommunication_desc'] = 'Service de communication par défaut pour les nouveaux cours. Les cours existants n\'auront aucun fournisseur sélectionné par défaut.';
$string['coursecontentnotification'] = 'Envoyer une notification de modification de contenu';
$string['coursecontentnotifnew'] = '{$a->nom du cours} nouveau contenu';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> est nouveau dans le cours <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}"> Modifier vos préférences de notification</a></p>';
$string['coursecontentnotifupdate'] = '{$a->nom du cours} changement de contenu';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> a été modifié dans le cours <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}"> Modifier vos préférences de notification</a></p>';
$string['coursecontentnotification_help'] = 'Cochez la case pour aviser les participants de cette activité ou ressource nouvelle ou modifiée. Seuls les utilisateurs qui peuvent accéder à l\'activité ou à la ressource recevront la notification.';
$string['coursecount'] = 'Nombre de cours';
$string['coursenotyetstarted'] = 'Le cours n\'a pas encore commencé';
$string['coursenotyetfinished'] = 'Le cours n\'a pas encore fini';
$string['courseparticipants'] = 'Participants au cours';
$string['coursetoolong'] = 'Le cours est trop long';
$string['customfield_islocked'] = 'Verrouillé';
$string['customfield_islocked_help'] = 'Si le champ est verrouillé, seuls les utilisateurs ayant la capacité de modifier les champs personnalisés verrouillés (par des utilisateurs par défaut ayant uniquement le rôle par défaut du gestionnaire) pourront le modifier dans les paramètres de cours.';
$string['customfield_notvisible'] = 'Personne';
$string['customfield_visibility'] = 'Visible à';
$string['customfield_visibility_help'] = 'Ce paramètre détermine qui peut afficher le nom et la valeur du champ personnalisé dans la liste des cours ou dans le filtre de champ personnalisé disponible du tableau de bord.';
$string['customfield_visibletoall'] = 'Tout le monde';
$string['customfield_visibletoteachers'] = 'Enseignants';
$string['customfieldsettings'] = 'Paramètres des champs personnalisés des cours courants';
$string['defaultsettingscategory'] = 'Paramètres par défaut';
$string['downloadcourseconfirmation'] = 'Vous êtes sur le point de télécharger un fichier zip de contenu bien sûr (à l\'exclusion des éléments qui ne peuvent pas être téléchargés et des fichiers plus grands que {$a}).';
$string['downloadcoursecontent'] = 'Télécharger le contenu du cours';
$string['downloadcoursecontent_help'] = 'Ce paramètre détermine si le contenu du cours peut être téléchargé par les utilisateurs ayant la capacité de télécharger le contenu du cours (par les utilisateurs par défaut ayant le rôle d\'étudiant ou d\'enseignant).';
$string['downloadcontent'] = 'Inclure dans le téléchargement du contenu du cours';
$string['downloadcontent_help'] = 'Should this activity or resource be included in the zip file of course content available for download? File, Folder, Page and Label can be fully downloaded. For all other activities and resources, only the name and description are downloaded. This option requires download course content to be enabled in the course settings.

The setting has no effect on mobile app content download for offline usage.';
$string['enabledownloadcoursecontent'] = 'Activer le contenu du cours de téléchargement';
$string['errorendbeforestart'] = 'La date de fin ({$a}) est avant la date de début du cours.';
$string['favourite'] = 'Cours étoilé';
$string['filterbothactive'] = 'Premier ({$a->first}) Dernier ({$a->dernier})';
$string['filterbyname'] = 'Filtrer par nom';
$string['filterfirstactive'] = 'Première ({$a->premier})';
$string['filterlastactive'] = 'Dernier ({$a->dernier})';
$string['gradetopassnotset'] = 'Ce cours n\'a pas de note à passer. Il peut être défini dans l\'élément de la note du cours (configuration du manuel).';
$string['hideendedcoursestask'] = 'Cacher les cours à la date de fin';
$string['informationformodule'] = 'Informations sur l\'activité {$a}';
$string['module'] = 'Activité';
$string['namewithlink'] = 'Nom de la catégorie avec lien';
$string['nocourseactivity'] = 'Pas assez d\'activité entre le début et la fin du cours';
$string['nocourseendtime'] = 'Le cours n\'a pas de temps de fin';
$string['nocoursesections'] = 'Pas de cours';
$string['nocoursestudents'] = 'Pas d\'étudiants';
$string['noaccesssincestartinfomessage'] = 'Hi {$a->userfirstname},
<p>A number of students in {$a->coursename} have never accessed the course.</p>';
$string['norecentaccessesinfomessage'] = 'Hi {$a->userfirstname},
<p>A number of students in {$a->coursename} have not accessed the course recently.</p>';
$string['noteachinginfomessage'] = 'Hi {$a->userfirstname},
<p>Courses with start dates in the next week have been identified as having no teacher or student enrolments.</p>';
$string['participants:perpage'] = 'Nombre de participants par page';
$string['participants:perpage_help'] = 'Le nombre d\'utilisateurs indiqué par page sur la page des participants dans chaque cours.';
$string['participantsnavigation'] = 'La navigation tertiaire des participants.';
$string['pdfexportfont'] = 'Police PDF';
$string['pdfexportfont_help'] = 'La police à utiliser pour les fichiers PDF générés, comme les soumissions d\'affectation.';
$string['privacy:perpage'] = 'Le nombre de cours à afficher par page.';
$string['privacy:completionpath'] = 'Achèvement du cours';
$string['privacy:favouritespath'] = 'Informations sur le cours';
$string['privacy:metadata:activityfavouritessummary'] = 'Le système de cours contient des informations sur les éléments du choix d\'activité qui ont été mis en vedette par l\'utilisateur.';
$string['privacy:metadata:completionsummary'] = 'Le cours contient des informations sur l\'utilisateur.';
$string['privacy:metadata:favouritessummary'] = 'Le cours contient des informations sur le cours que l\'utilisateur joue.';
$string['recommend'] = 'Recommander';
$string['recommendcheckbox'] = 'Activité recommandée : {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->dadiffstr} après le début du cours';
$string['relativedatessubmissionduedatebefore'] = '{$a->dadiffstr} avant le début du cours';
$string['searchactivitiesbyname'] = 'Rechercher les activités par nom';
$string['searchresults'] = 'Résultat de la recherche: {$a}';
$string['sectionlink'] = 'Permalien';
$string['showstartedcoursestask'] = 'Afficher les cours à la date de début';
$string['submitsearch'] = 'Soumettre la recherche';
$string['studentsatriskincourse'] = 'Étudiants à risque dans le cours {$a}';
$string['studentsatriskinfomessage'] = 'Hi {$a->userfirstname},
<p>Students in the {$a->coursename} course have been identified as being at risk.</p>';
$string['target:coursecompletion'] = 'Étudiants à risque de ne pas satisfaire aux conditions d\'achèvement du cours';
$string['target:coursecompletion_help'] = 'Cette cible décrit si l\'étudiant est considéré comme risquant de ne pas satisfaire aux conditions d\'achèvement du cours.';
$string['target:coursecompetencies'] = 'Étudiants à risque de ne pas atteindre les compétences assignées à un cours';
$string['target:coursecompetencies_help'] = 'Cette cible décrit si un étudiant risque de ne pas atteindre les compétences attribuées à un cours. Cet objectif considère que toutes les compétences attribuées au cours doivent être atteintes à la fin du cours.';
$string['target:coursedropout'] = 'Élèves à risque d\'abandon';
$string['target:coursedropout_help'] = 'Cette cible décrit si l\'étudiant est considéré comme risquant d\'abandonner ses études.';
$string['target:coursegradetopass'] = 'Étudiants à risque de ne pas avoir atteint la note minimale pour réussir le cours';
$string['target:coursegradetopass_help'] = 'Cette cible décrit si l\'étudiant risque de ne pas atteindre la note minimale pour réussir le cours.';
$string['target:noaccesssincecoursestart'] = 'Les étudiants qui n\'ont pas encore accédé au cours';
$string['target:noaccesssincecoursestart_help'] = 'Cette cible décrit les étudiants qui n\'ont jamais accédé à un cours auquel ils sont inscrits.';
$string['target:noaccesssincecoursestartinfo'] = 'Les étudiants suivants sont inscrits dans un cours qui a commencé, mais ils n\'ont jamais accédé au cours.';
$string['target:norecentaccesses'] = 'Les étudiants qui n\'ont pas accédé au cours récemment';
$string['target:norecentaccesses_help'] = 'Cette cible identifie les étudiants qui n\'ont pas accédé à un cours auquel ils sont inscrits dans l\'intervalle d\'analyse défini (par défaut le mois dernier).';
$string['target:norecentaccessesinfo'] = 'Les étudiants suivants n\'ont pas accédé à un cours auquel ils sont inscrits dans l\'intervalle d\'analyse défini (par défaut le mois passé).';
$string['target:noteachingactivity'] = 'Cours à risque de ne pas commencer';
$string['target:noteachingactivity_help'] = 'Cette cible décrit si les cours qui commenceront dans la semaine à venir auront une activité d\'enseignement.';
$string['target:noteachingactivityinfo'] = 'Les cours suivants, qui doivent commencer dans les prochains jours, risquent de ne pas commencer parce qu\'ils ne le font pas.\'t have teachers or students enrolled.';
$string['targetlabelstudentcompletionno'] = 'Étudiant susceptible de remplir les conditions d\'achèvement du cours';
$string['targetlabelstudentcompletionyes'] = 'Étudiant à risque de ne pas satisfaire aux conditions d\'achèvement du cours';
$string['targetlabelstudentcompetenciesno'] = 'Étudiant susceptible d\'atteindre les compétences attribuées à un cours';
$string['targetlabelstudentcompetenciesyes'] = 'Étudiant à risque de ne pas atteindre les compétences assignées à un cours';
$string['targetlabelstudentdropoutyes'] = 'Étudiant à risque d\'abandon';
$string['targetlabelstudentdropoutno'] = 'Pas en danger';
$string['targetlabelstudentgradetopassno'] = 'Étudiant qui est susceptible d\'atteindre la note minimale pour réussir le cours.';
$string['targetlabelstudentgradetopassyes'] = 'Étudiant à risque de ne pas avoir atteint la note minimale pour réussir le cours.';
$string['targetlabelteachingyes'] = 'Utilisateurs ayant des capacités pédagogiques ayant accès au cours';
$string['targetlabelteachingno'] = 'Cours à risque de ne pas commencer';
$string['totalactivities'] = 'Activités : {$a}';
$string['gotosection'] = 'Aller à la section {$a}';

// Deprecated since Moodle 4.3.
$string['aria:courseimage'] = 'Image du cours';

// Deprecated since Moodle 4.5.
$string['daystakingcourse'] = 'Jours de cours';
