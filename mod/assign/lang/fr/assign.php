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
 * Strings for component 'assign', language 'en'
 *
 * @package   mod_assign
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activityattachments'] = 'Annexes aux activités d\'affectation';
$string['activitydate:submissionsdue'] = 'En attente :';
$string['activitydate:submissionsopen'] = 'Ouvre :';
$string['activitydate:submissionsopened'] = 'Ouverture :';
$string['activityeditor'] = 'Instructions d\'activité';
$string['activityeditor_help'] = 'Les actions que vous souhaitez que l\'étudiant réalise pour cette mission. Ceci est seulement affiché sur la page de soumission où un étudiant modifie et soumet son affectation.';
$string['activityoverview'] = 'Vous avez des missions qui ont besoin d\'attention';
$string['addattempt'] = 'Laisser une autre tentative';
$string['addnewattempt'] = 'Ajouter une nouvelle tentative';
$string['addnewattempt_help'] = 'Cela créera une nouvelle soumission vide pour vous de travailler sur.';
$string['addnewattemptfromprevious'] = 'Ajouter une nouvelle tentative basée sur la soumission précédente';
$string['addnewattemptfromprevious_help'] = 'Ceci copiera le contenu de votre soumission précédente à une nouvelle soumission sur laquelle vous pourrez travailler.';
$string['addnewgroupoverride'] = 'Ajouter un groupe de contrôle';
$string['addnewuseroverride'] = 'Ajout de la fonction de contrôle utilisateur';
$string['addsubmission'] = 'Ajouter la soumission';
$string['addsubmission_help'] = 'Vous n\'avez pas encore fait de soumission.';
$string['allocatedmarker'] = 'Marqueur attribué';
$string['allocatedmarker_help'] = 'Marqueur attribué à cette soumission.';
$string['allowsubmissions'] = 'Permettre à l\'utilisateur de continuer à soumettre des soumissions à cette affectation.';
$string['allowsubmissionsshort'] = 'Permettre des modifications de présentation';
$string['allowsubmissionsfromdate'] = 'Autoriser les soumissions de';
$string['allowsubmissionsfromdate_help'] = 'Si cela est possible, les étudiants ne pourront pas se présenter avant cette date. Si vous êtes handicapé, les étudiants pourront commencer à soumettre immédiatement.';
$string['alwaysshowdescription'] = 'Afficher toujours la description';
$string['alwaysshowdescription_help'] = 'Si elle est désactivée, la description de l\'affectation ci-dessus ne sera visible que par les étudiants à la date de l\'attribution des soumissions.';
$string['applytoteam'] = 'Appliquer les notes et les commentaires à tout le groupe';
$string['assign:addinstance'] = 'Ajouter une nouvelle affectation';
$string['assign:exportownsubmission'] = 'Présentation propre à l\'exportation';
$string['assign:editothersubmission'] = 'Modifier un autre élève\'s submission';
$string['assign:grade'] = 'Cours';
$string['assign:grantextension'] = 'Prolongation des subventions';
$string['assign:manageallocations'] = 'Gérer les marqueurs attribués aux présentations';
$string['assign:managegrades'] = 'Niveaux de révision et de publication';
$string['assign:manageoverrides'] = 'Gérer les dépassements d\'affectation';
$string['assign:receivegradernotifications'] = 'Recevoir les notifications de soumission des classificateurs';
$string['assign:releasegrades'] = 'Classes de sortie';
$string['assign:revealidentities'] = 'Révèle les identités des étudiants';
$string['assign:reviewgrades'] = 'Classement';
$string['assign:viewblinddetails'] = 'Afficher les identités des étudiants lorsque les soumissions anonymes sont activées';
$string['assign:viewgrades'] = 'Affichage des notes';
$string['assign:showhiddengrader'] = 'Voir l\'identité d\'un classificateur caché';
$string['assign:submit'] = 'Soumettre l\'affectation';
$string['assign:view'] = 'Afficher l\'affectation';
$string['assign:viewownsubmissionsummary'] = 'Voir le résumé de la soumission';
$string['assignfeedback'] = 'Greffon de rétroaction';
$string['assignfeedbackpluginname'] = 'Greffon de rétroaction';
$string['assignmentduedigesthtml'] = '<p>Hi {$a->firstname},</p>
<p>The following assignments are due on <strong>{$a->duedate}</strong>.</p>
{$a->digest}';
$string['assignmentduedigestitem'] = '<strong>{$a->assignmentname}</strong> in course {$a->coursename}<br/>
<strong>Due: {$a->duetime}</strong><br/>
<a href="[$a->url]" aria-label="Allez dans {$a->nom d'attribution}">Go to activity</a>';
$string['assignmentduedigestsubject'] = 'Vous avez des affectations en 7 jours';
$string['assignmentduesoonhtml'] = '<p>Hi {$a->firstname},</p>
<p>The assignment <strong>{$a->assignmentname}</strong> in course {$a->coursename} is due soon.</p>
<p><strong>Due: {$a->duedate}</strong></p>
<p><a href="[$a->url]">Go to activity</a></p>';
$string['assignmentoverduehtml'] = '<p>Hi {$a->firstname},</p>
<p><strong>{$a->assignmentname}</strong> in course {$a->coursename} was due on <strong>{$a->duedate}</strong>.</p>
<p>You might still be able to submit your assignment{$a->cutoffsnippet}, but your submission will be marked as late.</p>
<p><a href="[$a->url]">Go to activity</a></p>';
$string['assignmentoverduehtmlcutoffsnippet'] = '<strong>par {$a->cutoffdate}</strong>';
$string['assignmentduesoonsubject'] = 'Date d\'échéance : {$a->date d\'attribution}';
$string['assignmentoverduesubject'] = 'Excédent : {$a->nom d\'attribution}';
$string['assignmentisdue'] = 'L\'affectation est due';
$string['assignmentmail'] = '{$a->grader} has posted some feedback on your
assignment submission for \'{$a->assignment}\'

You can see it appended to your assignment submission:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} has posted some feedback on your
assignment submission for \'<i>{$a->assignment}</i>\'.</p>
<p>You can see it appended to your <a href="[$a->url]">assignment submission</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} has posted some feedback on your
assignment submission for \'{$a->assignment}\' You can see it appended to your submission';
$string['assignmentname'] = 'Nom de l\'attribution';
$string['assignmentplugins'] = 'Greffons d\'affectation';
$string['assignmentsperpage'] = 'Affectations par page';
$string['assignsubmission'] = 'Greffon de soumission';
$string['assignsubmissionpluginname'] = 'Greffon de soumission';
$string['assigntimeleft'] = 'Temps restant';
$string['attemptheading'] = 'Tentative {$a->numéro d\'attente} : {$a->résumé de la présentation}';
$string['attempthistory'] = 'Tentatives antérieures';
$string['attemptnumber'] = 'Numéro de tentative';
$string['attemptsettings'] = 'Paramètres des essais';
$string['attemptreopenmethod'] = 'Essais de subventions';
$string['attemptreopenmethod_automatic'] = 'Automatiquement';
$string['attemptreopenmethod_automatic_help'] = 'Après chaque tentative, la suivante est accordée automatiquement.';
$string['attemptreopenmethod_help'] = 'This setting controls how students are granted attempts for this assignment. For each attempt, the grade and feedback are saved, and can be viewed by the teacher and the student. The available options are:

* Manually - After each attempt, you can grant the next one through the Submissions page or the Grader page.
* Automatically - After each attempt, the next is granted automatically.
* Automatically until pass - After each attempt, the next will be granted automatically, until the student achieves the passing grade.';
$string['attemptreopenmethod_manual'] = 'Manuelle';
$string['attemptreopenmethod_manual_help'] = 'Après chaque tentative, vous pouvez accorder la prochaine à travers la page Soumissions ou la page Grader.';
$string['attemptreopenmethod_untilpass'] = 'Automatiquement jusqu\'au passage';
$string['attemptreopenmethod_untilpass_help'] = 'Après chaque tentative, la prochaine sera accordée automatiquement, jusqu\'à ce que l\'élève atteigne la note de passage.';
$string['availability'] = 'Disponibilité';
$string['back'] = 'Précédent';
$string['backtoassignment'] = 'Retour à l\'affectation';
$string['batchoperationaddattempt'] = 'Essai de subvention';
$string['batchoperationsdescription'] = 'Avec sélectionné...';
$string['batchoperationconfirmlock'] = 'Verrouiller toutes les soumissions sélectionnées ?';
$string['batchoperationconfirmgrantextension'] = 'Accorder une prolongation à toutes les présentations sélectionnées?';
$string['batchoperationconfirmunlock'] = 'Débloquer toutes les soumissions sélectionnées?';
$string['batchoperationconfirmremovesubmission'] = 'Supprimer les soumissions sélectionnées?';
$string['batchoperationconfirmreverttodraft'] = 'Refuser les soumissions sélectionnées pour rédiger?';
$string['batchoperationconfirmaddattempt'] = 'Permettre une autre tentative pour les soumissions sélectionnées?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Définir l\'état du flux de travail pour toutes les soumissions sélectionnées?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Établir la répartition des points pour toutes les soumissions sélectionnées?';
$string['batchoperationconfirmdownloadselected'] = 'Télécharger les soumissions sélectionnées?';
$string['batchoperationdownloadselected'] = 'Télécharger';
$string['batchoperationgrantextension'] = 'Élargir';
$string['batchoperationlock'] = 'Verrouillage';
$string['batchoperationremovesubmission'] = 'Supprimer';
$string['batchoperationunlock'] = 'Déverrouillage';
$string['batchoperationreverttodraft'] = 'Retour au projet';
$string['batchoperationsetmarkingallocation'] = 'Marqueur d\'allocate';
$string['batchoperationsetmarkingworkflowstate'] = 'Modifier l\'état du marquage';
$string['batchsetallocatedmarker'] = 'Définir le marqueur attribué pour {$a} utilisateur(s) sélectionné(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Définir l\'état du flux de travail pour {$a} utilisateur(s) sélectionné(s).';
$string['beginassignment'] = 'Commencer l\'affectation';
$string['blindmarking'] = 'Demandes anonymes';
$string['blindmarkingenabledwarning'] = 'Les soumissions anonymes sont activées pour cette activité. Les notes ne seront pas ajoutées au cahier tant que les identités des élèves ne seront pas révélées par le menu « Actions ».';
$string['blindmarking_help'] = 'Les soumissions anonymes cachent l\'identité des étudiants aux marqueurs. Les paramètres de soumission anonymes seront verrouillés une fois qu\'une soumission ou une note a été faite relativement à cette affectation.';
$string['cachedef_overrides'] = 'Informations de remplacement de l\'utilisateur et du groupe';
$string['calendardue'] = '{$a} est due';
$string['calendarextension'] = '{$a} est due (extension)';
$string['calendargradingdue'] = '{$a} doit être classé';
$string['caneditsubmission'] = 'Vous pouvez modifier votre soumission et la soumettre après l\'expiration du délai, mais elle sera marquée aussi tard.';
$string['changeuser'] = 'Changer d\' utilisateur';
$string['changefilters'] = 'Modifier les filtres';
$string['choosemarker'] = 'Choisir...';
$string['chooseoperation'] = 'Choisir l\'opération';
$string['clickexpandreviewpanel'] = 'Cliquez pour agrandir le panneau d\'examen';
$string['collapsegradepanel'] = 'Panneau d\'effondrement';
$string['collapsereviewpanel'] = 'Suppression du groupe d \' examen';
$string['comment'] = 'Commentaire';
$string['completiondetail:submit'] = 'Faire une soumission';
$string['completionsubmit'] = 'Faire une soumission';
$string['conversionexception'] = 'Impossible de convertir l\'affectation. L\'exception était : {$a}.';
$string['configshowrecentsubmissions'] = 'Tout le monde peut voir les notifications de présentations dans les rapports d\'activités récents.';
$string['confirmsubmission'] = 'Voulez-vous vraiment soumettre votre travail pour le classement? Vous ne serez pas en mesure de faire d\'autres changements.';
$string['confirmsubmissionheading'] = 'Confirmer la soumission';
$string['confirmbatchgradingoperation'] = 'Voulez-vous vraiment {$a->operation} pour les étudiants {$a->count}?';
$string['couldnotconvertgrade'] = 'Impossible de convertir la note d\'assignation pour l\'utilisateur {$a}.';
$string['couldnotconvertsubmission'] = 'Impossible de convertir la soumission d\'assignation pour l\'utilisateur {$a}.';
$string['couldnotcreatecoursemodule'] = 'Impossible de créer le module de cours.';
$string['couldnotcreatenewassignmentinstance'] = 'Impossible de créer une nouvelle instance d\'assignation.';
$string['couldnotfindassignmenttoupgrade'] = 'Impossible de trouver l\'ancienne instance d\'assignation à mettre à jour.';
$string['crontask'] = 'Traitement des antécédents pour le module d \' affectation';
$string['currentassigngrade'] = 'Classe actuelle';
$string['currentgrade'] = 'Niveau actuel';
$string['currentattempt'] = 'C\'est une tentative {$a}.';
$string['currentattemptof'] = 'Ceci est la tentative {$a->temptnumber} ( {$a->maxattempts} tentatives autorisées ).';
$string['cutoffdate'] = 'Date limite';
$string['cutoffdatecolon'] = 'Date limite: {$a}';
$string['cutoffdate_help'] = 'Si elles sont fixées, les soumissions ne seront pas acceptées après cette date sans prorogation. Si elles ne sont pas fixées, les soumissions seront toujours acceptées.';
$string['cutoffdatevalidation'] = 'La date limite ne peut être antérieure à la date limite.';
$string['cutoffdatefromdatevalidation'] = 'La date limite ne peut pas être antérieure à la date d\'autorisation.';
$string['defaultgradescale'] = 'Échelle de classement';
$string['defaultgradescale_help'] = 'L\'échelle de classement par défaut pour les nouvelles affectations. Seules des balances standard sont disponibles.';
$string['defaultgradetype'] = 'Type de grade';
$string['defaultgradetype_help'] = 'Type de grade par défaut pour les nouvelles affectations.';
$string['defaultlayout'] = 'Restaurer la mise en page par défaut';
$string['defaultsettings'] = 'Paramètres d\'assignation par défaut';
$string['defaultsettings_help'] = 'Ces paramètres définissent les valeurs par défaut pour toutes les nouvelles affectations.';
$string['defaultteam'] = 'Groupe par défaut';
$string['deleteallsubmissions'] = 'Toutes les communications';
$string['description'] = 'Désignation des marchandises';
$string['disabled'] = 'Handicapé';
$string['downloadall'] = 'Télécharger toutes les soumissions';
$string['download all submissions'] = 'Téléchargez toutes les soumissions dans un fichier zip.';
$string['downloadasfolders'] = 'Télécharger les soumissions dans les dossiers';
$string['downloadselectedsubmissions'] = 'Télécharger les soumissions sélectionnées';
$string['duedate'] = 'Date d\'échéance';
$string['duedatecolon'] = 'Date d\'échéance : {$a}';
$string['duedate_help'] = 'C\'est à ce moment que l\'affectation est due. Les soumissions seront toujours autorisées après cette date, mais toute affectation soumise après cette date sera marquée aussi tard. Fixez une date limite d\'attribution pour empêcher les soumissions après une certaine date.';
$string['duplicateoverride'] = 'Redéfinition du double';
$string['submissionempty'] = 'Rien n\'a été soumis';
$string['submissionmodified'] = 'Vous avez des données de soumission existantes. Veuillez quitter cette page et réessayer.';
$string['submissionmodifiedgroup'] = 'La soumission a été modifiée par quelqu\'un d\'autre. Veuillez quitter cette page et réessayer.';
$string['duedatereached'] = 'La date limite pour cette affectation est maintenant dépassée';
$string['duedateaftersubmissionvalidation'] = 'La date d\'échéance doit être postérieure à la date de présentation de l\'autorisation.';
$string['duedatevalidation'] = 'La date d\'échéance ne peut pas être antérieure à la date d\'autorisation.';
$string['editattemptfeedback'] = 'Modifier la note et la rétroaction pour le numéro de tentative {$a}.';
$string['editonline'] = 'Modifier en ligne';
$string['editingpreviousfeedbackwarning'] = 'Vous modifiez les commentaires pour une tentative précédente. Il s\'agit de la tentative {$a->temptnumber} de {$a->totaltempts}.';
$string['editoverride'] = 'Éditer le rebord';
$string['editsubmission'] = 'Modifier la soumission';
$string['editsubmissionother'] = 'Modifier la soumission pour {$a}';
$string['editsubmission_help'] = 'Vous pouvez toujours apporter des modifications à votre soumission.';
$string['editingstatus'] = 'Modifier le statut';
$string['enabled'] = 'Activé';
$string['enabletimelimit'] = 'Activer les affectations temporelles';
$string['enabletimelimit_help'] = 'Si activé, vous pouvez définir une limite de temps sur la page des paramètres d\'assignation.';
$string['eventallsubmissionsdownloaded'] = 'Toutes les soumissions sont téléchargées.';
$string['eventassessablesubmitted'] = 'Une communication a été soumise.';
$string['eventbatchsetmarkerallocationviewed'] = 'Attribution de marqueurs par lots vue';
$string['eventbatchsetworkflowstateviewed'] = 'État du flux de travail affiché.';
$string['eventextensiongranted'] = 'Une prolongation a été accordée.';
$string['eventfeedbackupdated'] = 'Réactions actualisées';
$string['eventfeedbackviewed'] = 'Commentaires consultés';
$string['eventgradingformviewed'] = 'Formulaire de classement vu';
$string['eventgradingtableviewed'] = 'Tableau de classement vu';
$string['eventidentitiesrevealed'] = 'Les identités ont été révélées.';
$string['eventmarkerupdated'] = 'Le marqueur attribué a été mis à jour.';
$string['eventoverridecreated'] = 'Suppression de l\'attribution créée';
$string['eventoverridedeleted'] = 'Suppression de l\'attribution';
$string['eventoverrideupdated'] = 'Mise à jour de la préséance d\'attribution';
$string['eventremovesubmissionformviewed'] = 'Supprimer la confirmation de soumission vue.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Reveal identités page de confirmation vue.';
$string['eventstatementaccepted'] = 'L\'utilisateur a accepté la déclaration de la soumission.';
$string['eventsubmissionconfirmationformviewed'] = 'Formulaire de confirmation de soumission consulté.';
$string['eventsubmissioncreated'] = 'Présentation créée.';
$string['eventsubmissionduplicated'] = 'L\'utilisateur a dupliqué sa soumission.';
$string['eventsubmissionformviewed'] = 'Formulaire de soumission consulté.';
$string['eventsubmissiongraded'] = 'La soumission a été classée.';
$string['eventsubmissionlocked'] = 'Les soumissions ont été verrouillées pour un utilisateur.';
$string['eventsubmissionremoved'] = 'Soumission retirée.';
$string['eventsubmissionstatusupdated'] = 'L\'état de la demande a été actualisé.';
$string['eventsubmissionstatusviewed'] = 'L\'état de la présentation a été examiné.';
$string['eventsubmissionunlocked'] = 'Les soumissions ont été débloquées pour un utilisateur.';
$string['eventsubmissionupdated'] = 'Présentation actualisée.';
$string['eventsubmissionviewed'] = 'Soumission vue.';
$string['eventworkflowstateupdated'] = 'L\'état du flux de travail a été mis à jour.';
$string['expandreviewpanel'] = 'Élargir le groupe d \' examen';
$string['extensionduedate'] = 'Prorogation';
$string['extensionduedatecurrent'] = 'Prorogation en cours';
$string['extensionduedatenone'] = 'Aucune';
$string['extensionduedaterange'] = 'Divers entre {$a->earliest} et {$a->last}';
$string['extensionduedatewithout'] = 'Utilisateurs sans extension actuelle : {$a}';
$string['extensionnotafterduedate'] = 'La date de prolongation doit être postérieure à la date d\'échéance.';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être postérieure à la date de présentation de l\'autorisation.';
$string['fixrescalednullgrades'] = 'Cette affectation contient des notes erronées. Vous pouvez <a href="{$a->link}">corriger automatiquement ces grades</a>. Cela peut affecter les totaux des cours.';
$string['fixrescalednullgradesconfirm'] = 'Voulez-vous vraiment corriger des notes erronées? Tous les grades touchés seront supprimés. Cela peut affecter les totaux des cours.';
$string['fixrescalednullgradesdone'] = 'Grades fixes.';
$string['gradeactions'] = 'Actions de grade';
$string['gradecanbechanged'] = 'Le grade peut être changé';
$string['gradeitem:submissions'] = 'Présentations';
$string['gradersubmissionupdatedtext'] = '{$a->username} has updated their assignment submission
for \'{$a->assignment}\' at {$a->timeupdated}

It is available here:

    {$a->url}';
$string['gradersubmissionupdatedhtml'] = '{$a->username} has updated their assignment submission
for <i>\'{$a->assignment}\'  at {$a->timeupdated}</i><br /><br />
It is <a href="[$a->url]">available on the web site</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} a mis à jour sa soumission pour l\'attribution {$a->affectation}.';
$string['gradeuser'] = 'Niveau {$a}';
$string['grantextension'] = 'Prolongation des subventions';
$string['grantextensionforusers'] = 'Prolongation des bourses pour les étudiants {$a}';
$string['groupsubmissionsettings'] = 'Paramètres de soumission de groupe';
$string['errornosubmissions'] = 'Il n\'y a aucune soumission à télécharger';
$string['errorquickgradingvsadvancedgrading'] = 'Les grades n\'ont pas été sauvegardés parce que cette affectation utilise actuellement des grades avancés';
$string['errorrecordmodified'] = 'Les notes n\'ont pas été enregistrées parce que quelqu\'un a modifié un ou plusieurs enregistrements plus récemment que lorsque vous avez chargé la page.';
$string['feedback'] = 'Commentaires';
$string['feedbackavailabletext'] = '{$a->username} has posted some feedback on your
assignment submission for \'{$a->assignment}\'

You can see it appended to your assignment submission:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} has posted some feedback on your
assignment submission for \'<i>{$a->assignment}</i>\'<br /><br />
You can see it appended to your <a href="[$a->url]">assignment submission</a>.';
$string['feedbackavailablesmall'] = '{$a->nom d\'utilisateur} a donné des commentaires pour l\'attribution {$a->affectation}';
$string['feedbackavailableanontext'] = 'You have new feedback on your
assignment submission for \'{$a->assignment}\'

You can see it appended to your assignment submission:

    {$a->url}';
$string['feedbackavailableanonhtml'] = 'You have new feedback on your
assignment submission for \'<i>{$a->assignment}</i>\'<br /><br />
You can see it appended to your <a href="[$a->url]">assignment submission</a>.';
$string['feedbackavailableanonsmall'] = 'Nouvelle rétroaction pour l\'affectation {$a->affectation}';
$string['feedbackplugins'] = 'Greffons de rétroaction';
$string['feedbackpluginforgradebook'] = 'Plugin de rétroaction qui poussera les commentaires à la note';
$string['feedbackpluginforgradebook_help'] = 'Un seul plugin de retour d\'affectation peut pousser la rétroaction dans le manuel de classement.';
$string['feedbackplugin'] = 'Greffon de rétroaction';
$string['feedbacksettings'] = 'Paramètres de rétroaction';
$string['feedbacktypes'] = 'Types de commentaires';
$string['filesubmissions'] = 'Dossiers soumis';
$string['filter'] = 'Filtre';
$string['filterall'] = 'All';
$string['filterdraft'] = 'Projet';
$string['filtergrantedextension'] = 'Prorogation accordée';
$string['filternone'] = 'Pas de filtre';
$string['filternotsubmitted'] = 'Non présenté';
$string['filterrequiregrading'] = 'Nécessite un classement';
$string['filtersubmitted'] = 'Soumis';
$string['graded'] = 'Classé';
$string['gradedby'] = 'Classé par';
$string['gradedfollowupsubmit'] = 'Classé - soumis de nouveau';
$string['gradedon'] = 'Classé sur';
$string['gradebelowzero'] = 'Le grade doit être supérieur ou égal à zéro.';
$string['gradebreakdown'] = 'Répartition par catégorie';
$string['gradeabovemaximum'] = 'Le grade doit être inférieur ou égal à {$a}.';
$string['gradelocked'] = 'Cette note est verrouillée ou dépassée dans le manuel.';
$string['gradeoutof'] = 'Niveau hors {$a}';
$string['gradeoutofhelp'] = 'Classe';
$string['gradeoutofhelp_help'] = 'Entrez la note pour l\'étudiant\'s submission here. You may include decimals.';
$string['gradestudent'] = 'Étudiant : (id={$a->id}, nom complet={$a->nom complet}).';
$string['grading'] = 'Classement';
$string['gradingchangessaved'] = 'Les changements de grade ont été enregistrés';
$string['gradingduedate'] = 'Rappelle-moi de passer le grade';
$string['gradingduedate_help'] = 'La date prévue pour que la correction des présentations soit complétée. Cette date est utilisée pour prioriser les notifications de tableau de bord pour les enseignants.';
$string['gradingdueduedatevalidation'] = 'Rappelez-moi que la date d\'échéance ne peut être antérieure à la date d\'échéance.';
$string['gradingduefromdatevalidation'] = 'Rappelez-moi que la date limite ne peut être antérieure à la date de présentation des demandes de permis.';
$string['gradechangessaveddetail'] = 'Les changements au grade et la rétroaction ont été enregistrés';
$string['gradingmethodpreview'] = 'Critères de classement';
$string['gradingstatus'] = 'Statut de classement';
$string['gradingstudent'] = 'Élève diplômé';
$string['gradingsummary'] = 'Résumé du classement';
$string['groupoverrides'] = 'Dépassements de groupe';
$string['groupsnone'] = 'Aucun groupe auquel vous pouvez accéder.';
$string['hidegrader'] = 'Cacher l\'identité de l\'élève';
$string['hidegrader_help'] = 'Si activé, l\'identité de tout utilisateur qui classe une soumission d\'affectation n\'est pas affichée, de sorte que les étudiants peuvent\'t see who marked their work.

Note that this setting has no effect on the comments box on the grading page.';
$string['hideshow'] = 'Masquer/afficher';
$string['hiddenuser'] = 'Participant';
$string['inactiveoverridehelp'] = '* Cette surcharge est inactive parce que l\'utilisateur\'s access to the activity is restricted. This can be due to group or role assignments, other access restrictions, or the activity being hidden.';
$string['includesuspendedparticipants'] = 'Inclure les participants suspendus';
$string['indicator:cognitivedepth'] = 'Attribution cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité d\'affectation.';
$string['indicator:cognitivedepthdef'] = 'Attribution cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités d\'affectation pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Affichage, Soumettre, Voir la rétroaction, Commentaire sur la rétroaction, Réenvoyer après avoir regardé la rétroaction)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Affectation sociale';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité d\'affectation.';
$string['indicator:socialbreadthdef'] = 'Affectation sociale';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités d\'affectation au cours de cette période d\'analyse (niveaux = aucune participation, participant seul, participant avec d\'autres)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['instructionfiles'] = 'Fichiers d\'instructions';
$string['introattachments'] = 'Fichiers supplémentaires';
$string['introattachments_help'] = 'D\'autres fichiers pour l\'affectation, comme des modèles de réponse, peuvent être ajoutés.';
$string['invalidgradeforscale'] = 'Le grade fourni n\'était pas valable pour le barème actuel.';
$string['invalidfloatforgrade'] = 'La classe fournie ne pouvait pas être comprise : {$a}';
$string['invalidoverrideid'] = 'identificateur de priorité non valide';
$string['lastmodifiedsubmission'] = 'Dernière modification (présentation)';
$string['lastmodifiedgrade'] = 'Dernière modification (classe)';
$string['latesubmissions'] = 'Demandes tardives';
$string['latesubmissionsaccepted'] = 'Autorisé jusqu\'à {$a}';
$string['loading'] = 'Chargement...';
$string['locksubmissionforstudent'] = 'Prévenir toute autre soumission pour l\'étudiant : (id={$a->id}, nom complet={$a->nom complet}).';
$string['locksubmissions'] = 'Verrouiller les soumissions';
$string['manageassignfeedbackplugins'] = 'Gérer les plugins de rétroaction d\'affectation';
$string['manageassignsubmissionplugins'] = 'Gérer les plugins de soumission d\'affectation';
$string['marker'] = 'Marqueur';
$string['markerfilter'] = 'Filtre de marquage';
$string['markerfilternomarker'] = 'Pas de marqueur';
$string['markingallocation'] = 'Utiliser l\'attribution du marquage';
$string['markingallocation_help'] = 'S\'il est activé avec le marquage du flux de travail, des marqueurs peuvent être attribués à des étudiants particuliers.';
$string['markinganonymous'] = 'Autoriser la libération partielle des grades tout en marquant anonymement';
$string['markinganonymous_help'] = 'Si elle est activée en même temps que les soumissions anonymes et le processus de marquage, elle permet une libération partielle des notes tout en marquant anonymement.';
$string['markingstate'] = 'État de marquage';
$string['markingworkflow'] = 'Utiliser le marquage du flux de travail';
$string['markingworkflow_help'] = 'Si elle est activée, les notes passeront par une série d\'étapes avant d\'être remises aux étudiants. Cela permet de faire plusieurs tours de notation et permet à tous les élèves de se faire attribuer des notes en même temps.';
$string['markingworkflowstate'] = 'Marquage de l\'état du flux de travail';
$string['markingworkflowstate_help'] = 'Possible workflow states may include (depending on your permissions):

* Not marked - the marker has not yet started
* In marking - the marker has started but not yet finished
* Marking completed - the marker has finished but might need to go back for checking/corrections
* In review - the marking is now with the teacher in charge for quality checking
* Ready for release - the teacher in charge is satisfied with the marking but may wait before giving students access to the marking
* Released - the student can access the grades/feedback';
$string['markingworkflowstateinmarking'] = 'En marquage';
$string['markingworkflowstateinreview'] = 'Examen';
$string['markingworkflowstatenotmarked'] = 'Non marquée';
$string['markingworkflowstatereadyforreview'] = 'Marquage terminé';
$string['markingworkflowstatereadyforrelease'] = 'Prêt à être libéré';
$string['markingworkflowstatereleased'] = 'Libéré';
$string['maxattempts'] = 'Tentatives autorisées';
$string['maxattempts_help'] = 'Le nombre maximal de tentatives de soumission qui peuvent être faites par un étudiant. Une fois ce nombre atteint, la demande ne peut plus être rouverte.';
$string['maxgrade'] = 'Niveau maximal';
$string['maxgrade'] = 'Classe maximale';
$string['maxperpage'] = 'Attributions maximales par page';
$string['maxperpage_help'] = 'Le nombre maximal d\'affectations qu\'un classificateur peut afficher sur la page de classement de l\'affectation. Ce cadre est utile pour prévenir les temps d\'attente pour les cours avec un grand nombre de participants.';
$string['messageprovider:assign_due_digest'] = 'Affectations dues en 7 jours';
$string['messageprovider:assign_due_soon'] = 'Affectation devant être notifiée prochainement';
$string['messageprovider:assign_overdue'] = 'Notification en retard';
$string['messageprovider:assign_notification'] = 'Notifications d\'attribution';
$string['modulename'] = 'Attribution';
$string['modulename_help'] = 'The assignment activity module enables a teacher to communicate tasks, collect work and provide grades and feedback.

Students can submit any digital content (files), such as word-processed documents, spreadsheets, images, or audio and video clips. Alternatively, or in addition, the assignment may require students to type text directly into the text editor. An assignment can also be used to remind students of \'real-world\' assignments they need to complete offline, such as art work, and thus not require any digital content. Students can submit work individually or as a member of a group.

When reviewing assignments, teachers can leave feedback comments and upload files, such as marked-up student submissions, documents with comments or spoken audio feedback. Assignments can be graded using a numerical or custom scale or an advanced grading method such as a rubric. Final grades are recorded in the gradebook.';
$string['modulename_link'] = 'mod/affectation/vue';
$string['modulenameplural'] = 'Attributions';
$string['moreusers'] = 'Plus...';
$string['multipleteams'] = 'Membre de plusieurs groupes';
$string['multipleteams_desc'] = 'L\'affectation nécessite la soumission en groupe. Vous êtes membre de plus d\'un groupe. Pour pouvoir vous soumettre, vous devez être membre d\'un seul groupe. Veuillez contacter votre professeur pour modifier votre adhésion au groupe.';
$string['multipleteamsgrader'] = 'Membre de plus d\'un groupe, si incapable de présenter des observations.';
$string['nextuser'] = "Suivant";
$string['newsubmissions'] = 'Affectations soumises';
$string['noattempt'] = 'Aucune tentative';
$string['noclose'] = 'Pas de date de clôture';
$string['nofilters'] = 'Pas de filtres';
$string['nofiles'] = 'Pas de fichiers.';
$string['nograde'] = 'Pas de grade.';
$string['nomoresubmissionsaccepted'] = 'Seulement autorisé pour les participants ayant obtenu une prolongation';
$string['none'] = 'Aucune';
$string['noonlinesubmissions'] = 'Cette affectation ne vous oblige pas à soumettre quoi que ce soit en ligne';
$string['noopen'] = 'Pas de date ouverte';
$string['nooverridedata'] = 'Vous devez outrepasser au moins un des paramètres d\'affectation.';
$string['nogroupoverrides'] = 'Il n\'y a actuellement aucune dérogation de groupe.';
$string['nouseroverrides'] = 'Il n\'y a actuellement aucune emprise utilisateur.';
$string['nosavebutnext'] = 'Suivant';
$string['nosubmission'] = 'Rien n\'a été soumis pour cette affectation';
$string['nosubmissionyet'] = 'Aucune communication n \' a encore été faite.';
$string['noteam'] = 'Pas membre d\'un groupe';
$string['noteam_desc'] = 'Cette tâche exige une soumission en groupe. Vous n\'êtes membre d\'aucun groupe, donc vous ne pouvez pas créer de soumission. Veuillez contacter votre professeur pour être ajouté à un groupe.';
$string['noteamgrader'] = 'Pas membre d\'un groupe, si incapable de présenter des observations.';
$string['notgraded'] = 'Non classé';
$string['notgradedyet'] = 'Pas encore classé';
$string['notifications'] = 'Notifications';
$string['notifystudents'] = 'Informer les élèves';
$string['nousersselected'] = 'Aucun utilisateur sélectionné';
$string['nousers'] = 'Aucun utilisateur';
$string['numberofdraftsubmissions'] = 'Projets';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmittedassignments'] = 'Soumis';
$string['numberofsubmissionsneedgrading'] = 'Classement des besoins';
$string['numberofsubmissionsneedgradinglabel'] = 'Classement des besoins : {$a}';
$string['numberofteams'] = 'Groupes';
$string['offline'] = 'Aucune soumission en ligne requise';
$string['open'] = 'Ouvrir';
$string['opensubmissionexists'] = 'La soumission d\'affectation ouverte existe déjà.';
$string['outof'] = '{$a->current} sur {$a->total}';
$string['overdue'] = 'L\'affectation est en retard par : {$a}';
$string['override'] = 'Dépassement';
$string['overridedeletegroupsure'] = 'Voulez-vous vraiment supprimer la priorité pour le groupe {$a} ?';
$string['overridedeleteusersure'] = 'Voulez-vous vraiment supprimer la préséance pour l\'utilisateur {$a} ?';
$string['overridegroup'] = 'Groupe de dépassement';
$string['overridegroupeventname'] = '{$a->attribuer} - {$a->groupe}';
$string['overrides'] = 'Dépassements';
$string['overrideuser'] = 'Surpasser l\'utilisateur';
$string['overrideusereventname'] = 'Dépassement';
$string['outlinegrade'] = 'Niveau: {$a}';
$string['page-mod-assign-x'] = 'Toute page de module d\'affectation';
$string['page-mod-assign-view'] = 'Module d\'affectation principal et page de soumission';
$string['paramtimeremaining'] = '{$a} restant';
$string['participant'] = 'Participant';
$string['pluginadministration'] = 'Administration de l\'affectation';
$string['pluginname'] = 'Attribution';
$string['preventsubmissionnotingroup'] = 'Exiger un groupe pour présenter une demande';
$string['preventsubmissionnotingroup_help'] = 'Si elle est activée, les utilisateurs qui ne sont pas membres d\'un groupe seront incapables de faire des soumissions.';
$string['preventsubmissions'] = 'Empêcher l\'utilisateur de soumettre d\'autres soumissions à cette affectation.';
$string['preventsubmissionsshort'] = 'Prévenir les changements dans la présentation';
$string['previous'] = 'Précédent';
$string['previoususer'] = 'Utilisateur précédent';
$string['privacy:attemptpath'] = 'essai {$a}';
$string['privacy:blindmarkingidentifier'] = 'L\'identificateur utilisé pour les présentations anonymes';
$string['privacy:gradepath'] = 'Niveau';
$string['privacy:metadata:assigndownloadasfolders'] = 'Une préférence de l\'utilisateur pour le téléchargement de plusieurs présentations de fichiers dans des dossiers';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Données de rétroaction pour l\'affectation.';
$string['privacy:metadata:assignfilter'] = 'Options de filtrage telles que \'Submitted\', \'Not submitted\', \'Requires grading\', and \'Granted extension\'';
$string['privacy:metadata:assigngrades'] = 'Stocke les grades d\'utilisateur pour l\'affectation';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtrer le résumé d\'attribution par le marqueur attribué.';
$string['privacy:metadata:assignmentid'] = 'Numéro d\'attribution';
$string['privacy:metadata:assignmessageexplanation'] = 'Les messages sont envoyés aux étudiants via le système de messagerie.';
$string['privacy:metadata:assignoverrides'] = 'Les magasins remplacent les informations pour la mission';
$string['privacy:metadata:assignperpage'] = 'Nombre d\'affectations par page.';
$string['privacy:metadata:assignquickgrading'] = 'Une préférence pour le classement rapide ou non.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Conserve les informations de soumission de l\'utilisateur';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Données de soumission pour la mission.';
$string['privacy:metadata:assignuserflags'] = 'Stocke les métadonnées de l\'utilisateur telles que les dates d\'extension';
$string['privacy:metadata:assignusermapping'] = 'La cartographie pour les soumissions anonymes';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtrer par les différentes étapes du workflow.';
$string['privacy:metadata:grade'] = 'La note numérique pour cette soumission d\'affectation. Peut être déterminé par des échelles/formes de graduation avancées, etc mais sera toujours converti en un nombre de points flottants.';
$string['privacy:metadata:grader'] = 'L\'identité de l\'utilisateur du classement de la personne.';
$string['privacy:metadata:groupid'] = 'ID de groupe dont l\'utilisateur est membre.';
$string['privacy:metadata:latest'] = 'Simplifie grandement les questions voulant connaître des informations sur seulement la dernière tentative.';
$string['privacy:metadata:mailed'] = 'Cet utilisateur a été posté ?';
$string['privacy:metadata:timecreated'] = 'Temps créé';
$string['privacy:metadata:timestarted'] = 'Heure de début';
$string['privacy:metadata:userid'] = 'ID de l\'utilisateur';
$string['privacy:studentpath'] = 'des étudiants';
$string['quickgrading'] = 'Classement rapide';
$string['quickgradingresult'] = 'Classement rapide';
$string['quickgradingchangessaved'] = 'Les changements de grade ont été enregistrés';
$string['quickgrading_help'] = 'Le classement rapide vous permet d\'attribuer des notes (et des résultats) directement dans le tableau des soumissions. Le classement rapide n\'est pas compatible avec le classement avancé et n\'est pas recommandé lorsqu\'il y a plusieurs marqueurs.';
$string['relativedatessubmissiontimeleft'] = 'Calculé pour chaque élève';
$string['removeallgroupoverrides'] = 'Tous les groupes';
$string['removealluseroverrides'] = 'Tous les dépassements d\'utilisateur';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Réouvrir jusqu\'à ce que l\'option de réussite soit incompatible avec les soumissions anonymes, car les notes ne sont pas remises au cahier d\'études jusqu\'à ce que l\'identité de l\'étudiant soit révélée.';
$string['requiresubmissionstatement'] = 'Exiger que les étudiants acceptent la déclaration de soumission';
$string['requiresubmissionstatement_help'] = 'Exiger que les étudiants acceptent la déclaration de soumission pour toutes les présentations à cette affectation.';
$string['requireallteammemberssubmit'] = 'Exiger que tous les membres du groupe soumettent';
$string['requireallteammemberssubmit_help'] = 'Ce réglage doit être utilisé avec le \'Require students to click the submit button\' in Submission settings.

If enabled, all group members must click the submit button for the group submission to be considered as submitted. If disabled, any group member can click the submit button.';
$string['recordid'] = 'Identificateur';
$string['removesubmission'] = 'Supprimer la soumission';
$string['removesubmissionforstudent'] = 'Supprimer la soumission pour l\'étudiant : (id={$a->id}, nom complet={$a->nom complet}).';
$string['removesubmissionconfirm'] = 'Voulez-vous vraiment supprimer votre soumission?';
$string['removesubmissionconfirmforstudent'] = 'Voulez-vous vraiment supprimer la soumission pour {$a}?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Voulez-vous vraiment supprimer la soumission pour {$a}? Veuillez noter que cela ne réinitialisera pas l\'étudiant\'s time limit. You can give more time by adding a time limit user override.';
$string['removesubmissionconfirmwithtimelimit'] = 'Voulez-vous vraiment supprimer votre soumission? Veuillez noter que cela ne réinitialisera pas votre limite de temps.';
$string['revealidentities'] = 'Révèle les identités des étudiants';
$string['revealidentitiesconfirm'] = 'Voulez-vous vraiment révéler l\'identité des étudiants pour cette mission? Cette opération ne peut être annulée. Une fois que l\'identité de l\'étudiant aura été révélée, les notes seront remises au cahier des notes.';
$string['reverttodefaults'] = 'Revenir aux valeurs par défaut d\'assignation';
$string['reverttodraftforgroup'] = 'Retourner à la version provisoire pour le groupe {$a}.';
$string['reverttodraftforstudent'] = 'Remettre la soumission à l\'ébauche pour l\'étudiant : (id={$a->id}, nom complet={$a->nom complet}).';
$string['reverttodraft'] = 'Retourner la présentation au projet de statut';
$string['reverttodraftshort'] = 'Retourner au projet';
$string['reviewed'] = 'Révision';
$string['save'] = 'Enregistrer';
$string['saveandcontinue'] = 'Enregistrer et continuer';
$string['savechanges'] = 'Enregistrer les modifications';
$string['savegradingresult'] = 'Classe';
$string['savenext'] = 'Enregistrer et afficher suivant';
$string['savingchanges'] = 'Enregistrer les changements...';
$string['saveoverrideandstay'] = 'Enregistrer et entrer une autre redéfinition';
$string['scale'] = 'Échelle';
$string['search:activity'] = 'Attribution - information sur l\'activité';
$string['sendstudentnotificationsdefault'] = 'Par défaut pour \'Notify student\'';
$string['sendstudentnotificationsdefault_help'] = 'Lors du classement de chaque élève, devrait \'Notify student\' be ticked by default?';
$string['sendstudentnotifications'] = 'Prévenez l\'élève';
$string['sendstudentnotifications_help'] = 'Cochez cette case pour envoyer une notification concernant le grade ou la rétroaction mis à jour. Si l\'affectation utilise un processus de marquage, ou si les grades sont cachés dans le rapport de nivellement, alors la notification ne sera pas envoyée avant que la note soit publiée.';
$string['sendnotifications'] = 'Aviser les classificateurs des soumissions';
$string['sendnotifications_help'] = 'Si cela est possible, les élèves (habituellement les enseignants) reçoivent un message chaque fois qu\'un élève soumet une affectation, tôt, à temps et tard. Les méthodes de message sont configurables.';
$string['selectlink'] = 'Sélectionner...';
$string['selectuser'] = 'Sélectionner {$a}';
$string['sendlatenotifications'] = 'Aviser les classificateurs des soumissions tardives';
$string['sendlatenotifications_help'] = 'Si cela est possible, les élèves (habituellement les enseignants) reçoivent un message chaque fois qu\'un élève présente une affectation en retard. Les méthodes de message sont configurables.';
$string['sendnotificationduedatesoon'] = 'Informer l\'utilisateur de la date d\'échéance d\'une affectation imminente';
$string['sendnotificationoverdue'] = 'Aviser l\'utilisateur d\'une affectation en retard';
$string['sendnotificationduedigest'] = 'Aviser l\'utilisateur des affectations dues dans 7 jours';
$string['sendsubmissionreceipts'] = 'Envoyer un reçu de soumission aux étudiants';
$string['sendsubmissionreceipts_help'] = 'Ce commutateur permet aux étudiants de recevoir des reçus de soumission. Les étudiants recevront une notification chaque fois qu\'ils présenteront une affectation avec succès.';
$string['setmarkingallocation'] = 'Définir le marqueur attribué';
$string['setmarkingworkflowstate'] = 'Définir l\'état du flux de travail';
$string['selectedusers'] = 'Utilisateurs sélectionnés';
$string['setmarkingworkflowstateforlog'] = 'Définir l\'état du flux de travail : (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['setmarkerallocationforlog'] = 'Définir l\'attribution du marquage : (id={$a->id}, fullname={$a->fullname}, marqueur={$a->marker}).';
$string['settings'] = 'Paramètres d\'attribution';
$string['showrecentsubmissions'] = 'Afficher les soumissions récentes';
$string['status'] = 'État';
$string['studentnotificationworkflowstateerror'] = 'Marquer l\'état du workflow doit être \'Released\' to notify students.';
$string['submissionactions'] = 'Mesures de soumission';
$string['submissionattachments'] = 'Afficher uniquement les fichiers pendant la soumission';
$string['submissionattachments_help'] = 'Cochez la case pour afficher uniquement les fichiers sur la page de soumission. Autrement, les fichiers seront affichés sur les pages d\'attribution et de soumission.';
$string['confirmstart'] = 'Vous avez {$a} pour accomplir cette mission. Lorsque vous commencez, le minuteur commencera à compter vers le bas et peut\'t be paused.';
$string['submissioncopiedtext'] = 'You have made a copy of your previous
assignment submission for \'{$a->assignment}\'

You can see the status of your assignment submission:

    {$a->url}';
$string['submissioncopiedhtml'] = '<p>You have made a copy of your previous
assignment submission for \'<i>{$a->assignment}</i>\'.</p>
<p>You can see the status of your <a href="[$a->url]">assignment submission</a>.</p>';
$string['submissioncopiedsmall'] = 'Vous avez copié votre soumission d\'affectation précédente pour {$a->affectation}';
$string['submissiondrafts'] = 'Exiger des étudiants de cliquer sur le bouton soumettre';
$string['submissiondrafts_help'] = 'Si activé, les étudiants devront cliquer sur un bouton de soumission pour déclarer leur soumission finale. Cela permet aux étudiants de conserver une version préliminaire de la soumission sur le système. Si ce paramètre est changé de « Non » à « Oui » après que les étudiants ont déjà soumis, ces soumissions seront considérées comme définitives.';
$string['submissioneditable'] = 'L\'étudiant peut modifier cette soumission';
$string['submissionlog'] = 'Étudiant : {$a->nom complet}, État : {$a->status}';
$string['submissionnotcopiedinvalidstatus'] = 'La présentation n\'a pas été copiée parce qu\'elle a été révisée depuis sa réouverture.';
$string['submissionnoteditable'] = 'L\'étudiant ne peut pas modifier cette soumission';
$string['submissionnotopen'] = 'Cette affectation n\'est pas ouverte pour les soumissions';
$string['submissionnotready'] = 'Cette affectation n\'est pas prête à soumettre :';
$string['privacy:submissionpath'] = 'présentation';
$string['submissionplugins'] = 'Greffons de soumission';
$string['submissionreceipts'] = 'Envoi des reçus';
$string['submissionreceiptothertext'] = 'Your assignment submission for
\'{$a->assignment}\' has been submitted.

You can see the status of your assignment submission:

    {$a->url}';
$string['submissionreceiptotherhtml'] = 'Your assignment submission for
\'<i>{$a->assignment}</i>\' has been submitted.<br /><br />
You can see the status of your <a href="[$a->url]">assignment submission</a>.';
$string['submissionreceiptothersmall'] = 'Votre soumission d\'affectation pour {$a->affectation} a été soumise.';
$string['submissionreceipttext'] = 'You have submitted an
assignment submission for \'{$a->assignment}\'

You can see the status of your assignment submission:

    {$a->url}';
$string['submissionreceipthtml'] = '<p>Vous avez soumis une soumission d\'affectation pour \'<i>{$a->assignment}</i>\'.</p>
<p>You can see the status of your <a href="[$a->url]">assignment submission</a>.</p>';
$string['submissionreceiptsmall'] = 'Vous avez soumis votre soumission pour {$a->affectation}';
$string['submissionslocked'] = 'Cette affectation n\'accepte pas les soumissions';
$string['submissionslockedshort'] = 'Changements de présentation non autorisés';
$string['submissionsclosed'] = 'Fin des communications';
$string['submissionsettings'] = 'Paramètres de soumission';
$string['submissionstatement'] = 'Déclaration de soumission';
$string['submissionstatementdefault'] = 'Cette soumission est mon propre travail, sauf lorsque j\'ai reconnu l\'utilisation des œuvres d\'autres personnes.';
$string['submissionstatement_help'] = 'Déclaration que chaque étudiant doit accepter pour soumettre son travail.';
$string['submissionstatementrequired'] = 'Vous devez accepter cette déclaration avant de pouvoir la soumettre.';
$string['submissionstatementteamsubmission'] = 'Déclaration de soumission de groupe';
$string['submissionstatementteamsubmissiondefault'] = 'Cette soumission est le travail de mon groupe, sauf lorsque nous avons reconnu l\'utilisation des œuvres d\'autres personnes.';
$string['submissionstatementteamsubmission_help'] = 'Déclaration que chaque étudiant doit accepter pour soumettre le travail de son groupe.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Déclaration de soumission de groupe où tous les membres du groupe soumettent';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Cette soumission est mon propre travail en tant que membre de groupe, sauf lorsque j\'ai reconnu l\'utilisation des oeuvres d\'autres personnes.';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Déclaration que chaque étudiant doit accepter pour soumettre son travail en tant que membre du groupe.';
$string['submissionstatementacceptedlog'] = 'Déclaration acceptée par l\'utilisateur {$a}';
$string['submissionstatus_draft'] = 'Projet (non présenté)';
$string['submissionstatusheading'] = 'État de la soumission';
$string['submissionstatus_marked'] = 'Classé';
$string['submissionstatus_new'] = 'Pas de soumission';
$string['submissionstatus_reopened'] = 'Réouverture';
$string['submissionstatus_'] = 'Pas de soumission';
$string['submissionstatus'] = 'État de la soumission';
$string['submissionstatus_submitted'] = 'Présenté pour classement';
$string['submissionsummary'] = '{$a->status}. Dernière modification le {$a->timemodified}';
$string['submissionteam'] = 'Groupe';
$string['submissiontypes'] = 'Types de soumission';
$string['submission'] = 'Présentation';
$string['submitaction'] = 'Soumettre';
$string['submitforgrading'] = 'Soumettre pour classement';
$string['submitassignment_help'] = 'Une fois cette affectation soumise, vous ne pourrez plus apporter de changements.';
$string['submitassignment'] = 'Soumettre l\'affectation';
$string['submittedearly'] = 'L\'affectation a été soumise {$a} tôt';
$string['submittedlate'] = 'L \' affectation a été soumise tardivement {$a}';
$string['submittedovertime'] = 'La cession a été soumise {$a} au cours du délai';
$string['submittedundertime'] = 'La cession a été soumise {$a} dans le délai imparti';
$string['submittedlateshort'] = '{$a} retard';
$string['submitted'] = 'Soumis';
$string['subpagetitle'] = '{$a->nom du contexte} - Sous-page';
$string['subplugintype_assignsubmission'] = 'Greffon de soumission';
$string['subplugintype_assignsubmission_plural'] = 'Greffons de soumission';
$string['subplugintype_assignfeedback'] = 'Greffon de rétroaction';
$string['subplugintype_assignfeedback_plural'] = 'Greffons de rétroaction';
$string['teamname'] = 'Équipe : {$a}';
$string['teamsubmission'] = 'Les étudiants se soumettent en groupes';
$string['teamsubmission_help'] = 'Si activé, les étudiants seront divisés en groupes selon l\'ensemble par défaut de groupes ou un regroupement personnalisé. Une soumission de groupe sera partagée entre les membres du groupe et tous les membres du groupe se verront mutuellement.' changes to the submission.';
$string['teamsubmissiongroupingid'] = 'Groupes d\'étudiants';
$string['teamsubmissiongroupingid_help'] = 'C\'est le groupe que l\'affectation utilisera pour trouver des groupes pour les groupes d\'étudiants. Si elle n\'est pas définie, l\'ensemble par défaut des groupes sera utilisé.';
$string['textinstructions'] = 'Instructions d\'affectation';
$string['timelimit'] = 'Délai';
$string['timelimit_help'] = 'Si activé, le délai est indiqué sur la page d\'assignation et un chronomètre de compte à rebours est affiché pendant l\'assignation.';
$string['timelimitnotenabled'] = 'Le délai n\'est pas activé pour l\'affectation.';
$string['timelimitpassed'] = 'Le délai est expiré';
$string['timemodified'] = 'Dernière modification';
$string['timeremaining'] = 'Temps restant';
$string['timeremainingcolon'] = 'Temps restant : {$a}';
$string['togglezoom'] = 'Zoom dans/hors de la région';
$string['ungroupedusers'] = 'Le réglage \'Require group to make submission\' is enabled and some users are either not a member of any group, or are a member of more than one group, so are unable to make submissions.';
$string['ungroupedusersoptional'] = 'Le réglage \'Students submit in groups\' is enabled and some users are either not a member of any group, or are a member of more than one group. Please be aware that these students will submit as members of the \'Default group\'.';
$string['unlocksubmissionforstudent'] = 'Permettre les soumissions pour l\'étudiant : (id={$a->id}, nom complet={$a->nom complet}).';
$string['unlocksubmissions'] = 'Débloquer les soumissions';
$string['unlimitedattempts'] = 'Illimité';
$string['unlimitedattemptsallowed'] = 'Des tentatives illimitées sont autorisées.';
$string['unlimitedpages'] = 'Illimité';
$string['unsavedchanges'] = 'Changements non enregistrés';
$string['unsavedchangesquestion'] = 'Il y a des changements non enregistrés aux notes ou aux commentaires. Voulez-vous enregistrer les changements et continuer?';
$string['updatetable'] = 'Enregistrer et mettre à jour le tableau';
$string['upgradenotimplemented'] = 'Mise à jour non implémentée dans le plugin ({$a->type} {$a->sous-type})';
$string['userextensiondate'] = 'Prorogation accordée jusqu\'à: {$a}';
$string['userassignmentdefaults'] = 'Par défaut d\'attribution de l\'utilisateur';
$string['useridlistnotcached'] = 'Les changements de grade n\'ont PAS été enregistrés, car il n\'a pas été possible de déterminer pour quelle soumission ils étaient.';
$string['useroverrides'] = 'Surpassement de l\'utilisateur';
$string['usersubmissioncannotberemoved'] = 'La soumission de {$a} ne peut pas être supprimée.';
$string['usersnone'] = 'Aucun étudiant n\'a accès à cette mission.';
$string['userswhoneedtosubmit'] = 'Utilisateurs qui doivent soumettre : {$a}';
$string['usergrade'] = 'Niveau utilisateur';
$string['validmarkingworkflowstates'] = 'État du flux de travail de marquage valide';
$string['viewadifferentattempt'] = 'Voir une autre tentative';
$string['viewbatchsetmarkingworkflowstate'] = 'Affichage de la page d\'état du flux de travail.';
$string['viewbatchmarkingallocation'] = 'Voir la page d\'attribution du marquage par lots.';
$string['viewfeedback'] = 'Voir les commentaires';
$string['viewfeedbackforuser'] = 'Voir les commentaires pour l\'utilisateur : {$a}';
$string['viewfullgradingpage'] = 'Ouvrir la page complète de classement pour fournir des commentaires';
$string['viewgradebook'] = 'Afficher le carnet de notes';
$string['viewgradingformforstudent'] = 'Voir la page de classement pour l\'étudiant : (id={$a->id}, nom complet={$a->nom complet}).';
$string['viewgrading'] = 'Voir toutes les soumissions';
$string['viewownsubmissionform'] = 'Visualisez votre propre page d\'affectation.';
$string['viewownsubmissionstatus'] = 'Voir la page d\'état de la soumission.';
$string['viewsubmissionforuser'] = 'Voir la soumission pour l\'utilisateur : {$a}';
$string['viewsubmission'] = 'Afficher la soumission';
$string['viewfull'] = 'Affichage complet';
$string['viewsummary'] = 'Afficher le résumé';
$string['viewsubmissiongradingtable'] = 'Voir le tableau de classement des présentations.';
$string['viewrevealidentitiesconfirm'] = 'Afficher la page de confirmation des identités des étudiants.';
$string['workflowfilter'] = 'Filtre de flux de travail';
$string['xofy'] = '{$a->x} de {$a->y}';

// Deprecated since Moodle 4.5.
$string['attemptreopenmethod_none'] = 'Jamais';
$string['choosegradingaction'] = 'Actions de classement';
$string['downloadasfolders_help'] = 'Les soumissions d\'affectation peuvent être téléchargées dans des dossiers. Chaque soumission est ensuite placée dans un dossier séparé, la structure du dossier étant conservée pour tous les sous-dossiers, et les fichiers ne sont pas renommés.';
$string['editaction'] = 'Actions...';
$string['gradingoptions'] = 'Options';
$string['groupoverridesdeleted'] = 'Suppressions de groupes';
$string['saveallquickgradingchanges'] = 'Enregistrer tous les changements de classement rapide';
$string['updategrade'] = 'Mettre à jour la note';
$string['useroverridesdeleted'] = 'L\'utilisateur remplace supprimé';
$string['viewgrader'] = 'Affichage Gradeur';
