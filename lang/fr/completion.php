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
 * Strings for core_completion subsystem.
 *
 * @package     core_completion
 * @category    string
 * @copyright   &copy; 2008 The Open University
 * @author      Sam Marshall
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['achievinggrade'] = 'Niveau atteint';
$string['achievingpassinggrade'] = 'Niveau de réussite';
$string['activities'] = 'Activités';
$string['activitieslabel'] = 'Activités/ressources';
$string['activityaggregation'] = 'Condition requise';
$string['activityaggregation_all'] = 'TOUTES les activités sélectionnées à mener à bien';
$string['activityaggregation_any'] = 'TOUTES activités à mener à bien';
$string['activitiescompleted'] = 'Achèvement des activités';
$string['activitiescompletednote'] = 'Remarque : L\'achèvement de l\'activité doit être défini pour qu\'une activité apparaisse dans la liste ci-dessus.';
$string['activitycompletion'] = 'Conditions d\'achèvement';
$string['activitycompletionupdated'] = 'Modifications enregistrées';
$string['activitygradetopassnotset'] = 'Cette activité n\'a pas de note valide à passer. Il peut être défini dans la section Grade des paramètres d\'activité.';
$string['addconditions'] = 'Ajouter des conditions';
$string['affectedactivities'] = 'Les changements affecteront les <b>{$a}</b> suivants activités ou ressources:';
$string['aggregationmethod'] = 'Méthode d\'agrégation';
$string['all'] = 'All';
$string['allconditions'] = 'L\'activité est terminée lorsque les élèves font toutes les choses suivantes :';
$string['any'] = 'Any';
$string['approval'] = 'Approbation';
$string['areyousureoverridecompletion'] = 'Voulez-vous vraiment passer outre l\'état d\'achèvement actuel de cette activité pour cet utilisateur et marquer "{$a}"?';
$string['badautocompletion'] = 'Vous devez choisir au moins une condition.';
$string['badcompletiongradeitemnumber'] = 'Exiger un grade peut\'t be enabled for <b>{$a}</b> because grading by {$a} is not enabled.';
$string['bulkactivitycompletion'] = 'Achèvement de l\'activité d\'édition en vrac';
$string['bulkactivitydetail'] = 'Sélectionnez les activités que vous souhaitez modifier en bloc.';
$string['bulkcompletiontracking'] = 'Suivi de l\'achèvement';
$string['bulkcompletiontracking_help'] = '<strong>None:</strong> Do not indicate activity completion

<strong>Manual:</strong> Students can manually mark the activity as completed

<strong>With condition(s):</strong> Show activity as complete when conditions are met';
$string['checkall'] = 'Vérifier ou dévérifier toutes les activités et ressources';
$string['checkallsection'] = 'Vérifiez ou décochez toutes les activités et ressources dans la section suivante : {$a}';
$string['checkactivity'] = 'Case à cocher pour l\'activité / ressource: {$a}';
$string['completed'] = 'Achevé';
$string['completeactivity'] = 'Achever l\'activité';
$string['completedunlocked'] = 'Options d\'achèvement déverrouillées';
$string['completedunlockedtext'] = 'Lorsque vous enregistrez ce formulaire, les données d\'achèvement seront supprimées puis recalculées si possible. Pour éviter cela, vous pouvez naviguer loin sans enregistrer.';
$string['completedwarning'] = 'Options d\'achèvement verrouillées';
$string['completedwarningtext'] = 'Cette activité est marquée comme pour un ou plusieurs élèves. Si vous déverrouillez les paramètres pour effectuer une modification puis enregistrez le formulaire, les données d\'achèvement seront supprimées puis recalculées si possible. Achèvement manuel't be recalculated, so in this case the student will need to mark it as done again.';
$string['completion'] = 'Suivi de l\'achèvement';
$string['completion-alt-auto-enabled'] = 'Le système marque cet article complet selon les conditions: {$a}';
$string['completion-alt-auto-fail'] = 'Terminé : {$a} (n\'a pas obtenu la note de passage)';
$string['completion-alt-auto-n'] = 'Non complété : {$a}';
$string['completion-alt-auto-n-override'] = 'Non complété : {$a->modname} (par {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Terminé : {$a} (grade de réussite)';
$string['completion-alt-auto-y'] = 'Terminé : {$a}';
$string['completion-alt-auto-y-override'] = 'Terminé : {$a->modname} (par {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Les étudiants peuvent marquer manuellement cet élément complet: {$a}';
$string['completion-alt-manual-n'] = 'Non complété : {$a}. Sélectionnez pour marquer comme terminé.';
$string['completion-alt-manual-n-override'] = 'Non complété : {$a->modname} (par {$a->overrideuser}). Sélectionnez pour marquer comme complet.';
$string['completion-alt-manual-y'] = 'Terminé : {$a}. Sélectionnez pour marquer comme non complété.';
$string['completion-alt-manual-y-override'] = 'Terminé : {$a->modname} (par {$a->overrideuser}). Sélectionnez pour marquer comme non complet.';
$string['completion-fail'] = 'Achevé (n\'a pas atteint la note de passage)';
$string['completion-n'] = 'Non achevée';
$string['completion-n-override'] = 'Non rempli (établi par {$a})';
$string['completion-pass'] = 'Achevé (niveau de réussite)';
$string['completion-y'] = 'Achevé';
$string['completion-y-override'] = 'Terminé (établi par {$a})';
$string['completion_automatic'] = 'Ajouter des prescriptions';
$string['completion_help'] = 'Si elle est activée, l\'achèvement de l\'activité est suivi, manuellement ou automatiquement, selon certaines conditions. Des conditions multiples peuvent être définies si désiré. Si oui, l\'activité ne sera considérée comme complète que lorsque TOUTES les conditions sont remplies.';
$string['completion_link'] = 'Activité/achèvement';
$string['completion_manual'] = 'Les élèves doivent marquer manuellement l\'activité comme ils l\'ont fait';
$string['completion_none'] = 'Aucune';
$string['completionactivitydefault'] = 'Utiliser l\'activité par défaut';
$string['completionanygrade_desc'] = 'Toute classe';
$string['completiondisabled'] = 'Handicapés, non représentés dans les paramètres d\'activité';
$string['completionenabled'] = 'Activer, contrôler via les paramètres d\'achèvement et d\'activité';
$string['completionexpected'] = 'Définir le rappel dans la ligne de temps';
$string['completionexpected_help'] = 'Cela vous permet de définir un rappel pour que les étudiants travaillent sur cette activité. Il apparaîtra dans le bloc Timeline sur leur tableau de bord comme « {$a} nécessite une action ».';
$string['completionexpecteddesc'] = 'Achèvement prévu pour {$a}';
$string['completionexpectedfor'] = '{$a->nom de l\'instance} doit être rempli';
$string['completionicons'] = 'Cocher les cases';
$string['completionicons_help'] = 'A tick next to an activity name may be used to indicate when the activity is complete.

If a box with a dotted border is shown, a tick will appear automatically when you have completed the activity according to conditions set by the teacher.

If a box with a solid border is shown, you can click it to tick the box when you think you have completed the activity. (Clicking it again removes the tick if you change your mind.)';
$string['completionmenuitem'] = 'Achèvement';
$string['completionnotenabled'] = 'L\'achèvement n\'est pas activé';
$string['completionnotenabledforcourse'] = 'L\'achèvement n\'est pas possible pour ce cours';
$string['completionnotenabledforsite'] = 'L\'achèvement n\'est pas activé pour ce site';
$string['completionondate'] = 'Date';
$string['completionondatevalue'] = 'Date à laquelle le cours sera marqué comme terminé';
$string['completionduration'] = 'Inscriptions';
$string['completionsettingslocked'] = 'Paramètres d\'achèvement verrouillés';
$string['completionpassgrade'] = 'Exiger une note de passage';
$string['completionpassgrade_desc'] = 'Niveau de réussite';
$string['completionusegrade'] = 'Niveau requis';
$string['completionusegrade_desc'] = 'Recevoir une note';
$string['completionupdated'] = 'Achèvement à jour de l\'activité <b>{$a}</b>';
$string['completionview_desc'] = 'Afficher l\'activité';
$string['configenablecompletion'] = 'Si cela est possible, les conditions d\'achèvement des cours et des activités peuvent être fixées. Il est recommandé de définir les conditions d\'achèvement des activités de façon à ce que des données significatives soient affichées pour les utilisateurs dans leur aperçu des cours sur le tableau de bord.';
$string['confirmselfcompletion'] = 'Confirmer l\'auto-achèvement';
$string['courseaggregation'] = 'Condition requise';
$string['courseaggregation_all'] = 'TOUS les cours sélectionnés à compléter';
$string['courseaggregation_any'] = 'TOUS les cours à compléter';
$string['coursealreadycompleted'] = 'Vous avez déjà terminé ce cours';
$string['coursecomplete'] = 'Cours terminé';
$string['coursecompleted'] = 'Cours terminé';
$string['coursecompletedmessage'] = '<p>Félicitations!</p><p> Vous avez suivi le cours <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Achèvement du cours';
$string['coursecompletioncondition'] = 'État: {$a}';
$string['coursecompletionnavigation'] = 'Fin du cours navigation tertiaire';
$string['coursecompletionsettings'] = 'Paramètres d\'achèvement du cours';
$string['coursegrade'] = 'Cours';
$string['coursesavailable'] = 'Cours disponibles';
$string['coursesavailableexplaination'] = 'Remarque : Les conditions d\'achèvement du cours doivent être définies pour qu\'un cours apparaisse dans la liste ci-dessus.';
$string['criteria'] = 'Critères';
$string['criteriagroup'] = 'Groupe de critères';
$string['criteriarequiredall'] = 'Tous les critères ci-dessous sont requis';
$string['criteriarequiredany'] = 'Tous les critères ci-dessous sont requis';
$string['criteriasummary'] = '{$a->type} : {$a->résumé}';
$string['csvdownload'] = 'Télécharger au format tableur (UTF-8 .csv)';
$string['datepassed'] = 'Date d \' adoption';
$string['days'] = 'Jours';
$string['daysoftotal'] = '{$a->jours} de {$a->total}';
$string['daystakingcourse'] = 'Temps de formation';
$string['daysuntilcompletion'] = 'Délai jusqu \' à l \' achèvement';
$string['defaultactivitycompletionsite'] = 'Ce sont les conditions d\'achèvement par défaut des activités dans tous les cours.';
$string['defaultactivitycompletioncourse'] = 'Ce sont les conditions d\'achèvement par défaut des activités de ce cours.';
$string['defaultcompletion'] = 'Achèvement de l\'activité par défaut';
$string['defaultcompletionupdated'] = 'Modifications enregistrées';
$string['deletecompletiondata'] = 'Données d\'achèvement';
$string['dependencies'] = 'Dépendances';
$string['dependenciescompleted'] = 'Achèvement d \' autres cours';
$string['detail_desc:receivegrade'] = 'Recevoir une note';
$string['detail_desc:receivepassgrade'] = 'Recevez une note de passage';
$string['detail_desc:view'] = 'Affichage';
$string['done'] = 'Fait';
$string['hiddenrules'] = 'Certains paramètres spécifiques à <b>{$a}</b> ont été cachés. Pour voir les autres activités';
$string['editconditions'] = 'Modifier les conditions';
$string['enablecompletion'] = 'Activer le suivi de l\'achèvement';
$string['enablecompletion_help'] = 'Si activé, vous pouvez fixer les conditions d\'achèvement de l\'activité ou du cours.';
$string['enrolmentduration'] = 'Durée des inscriptions';
$string['enrolmentdurationlength'] = 'L\'utilisateur doit rester inscrit pour';
$string['emptyconditionsinfo'] = 'Aucune condition d\'achèvement n\'est fixée pour cette activité.';
$string['emptyconditionswarning'] = 'Vous devez ajouter au moins une condition d\'achèvement.';
$string['err_noactivities'] = 'L\'information d\'achèvement n\'est pas activée pour aucune activité, donc aucune ne peut être affichée. Vous pouvez activer les informations d\'achèvement en éditant les paramètres d\'une activité.';
$string['err_nocourses'] = 'L\'achèvement du cours n\'est pas activé pour d\'autres cours, donc aucun ne peut être affiché. Vous pouvez activer l\'achèvement du cours dans les paramètres du cours.';
$string['err_nograde'] = 'Une note de passage n\'a pas été établie pour ce cours. Pour activer ce type de critères, vous devez créer une note de passage pour ce cours.';
$string['err_noroles'] = 'Il n\'y a aucun rôle avec la capacité moodle/course:markcomplete dans ce cours.';
$string['err_nousers'] = 'Il n\'y a pas d\'étudiants dans ce cours ou ce groupe pour qui les informations sur l\'achèvement sont affichées. (L\'information complète est affichée uniquement pour les utilisateurs ayant la capacité \'Be shown on completion reports\'. The capability is allowed for the default role of student only, so if there are no students, you will see this message.)';
$string['err_settingslocked'] = 'Un ou plusieurs étudiants ont déjà rempli un critère afin que les réglages aient été verrouillés. Le déverrouillage des paramètres supprimera les données d\'achèvement de l\'utilisateur et pourrait causer de la confusion.';
$string['err_system'] = 'Une erreur interne s\'est produite dans le système d\'achèvement. (Les administrateurs système peuvent permettre de déboger les informations pour en savoir plus.)';
$string['eventcoursecompleted'] = 'Cours terminé';
$string['eventcoursecompletionupdated'] = 'Mise à jour du cours';
$string['eventcoursemodulecompletionupdated'] = 'Achèvement des activités du cours mis à jour';
$string['eventdefaultcompletionupdated'] = 'Par défaut pour l\'achèvement de l\'activité de cours mis à jour';
$string['excelcsvdownload'] = 'Télécharger en format compatible Excel (.csv)';
$string['failed'] = 'Échec';
$string['fraction'] = 'Fraction';
$string['graderequired'] = 'Niveau requis';
$string['gradexrequired'] = '{$a} requis';
$string['incompatibleplugin'] = 'Cette activité ne supporte pas les paramètres d\'achèvement par défaut. Les conditions d\'achèvement doivent être définies manuellement pour chaque utilisation.';
$string['inprogress'] = 'En cours';
$string['manual'] = 'Manuel';
$string['manualcompletionby'] = 'Achèvement manuel par d \' autres';
$string['manualcompletionbynote'] = 'Note : La capacité moodle/course:markcomplete doit être permise pour qu\'un rôle apparaisse dans la liste.';
$string['manualselfcompletion'] = 'Auto-achèvement manuel';
$string['manualselfcompletionnote'] = 'Remarque : Le bloc d\'auto-achèvement doit être ajouté au cours si l\'auto-achèvement manuel est activé.';
$string['markcomplete'] = 'Marque terminée';
$string['markedcompleteby'] = 'Marqué complété par {$a}';
$string['markingyourselfcomplete'] = 'Marquage complet';
$string['modifybulkactions'] = 'Modifier les actions que vous souhaitez modifier en bloc';
$string['moredetails'] = 'Plus de détails';
$string['nocriteriaset'] = 'Pas de critères d\'achèvement pour ce cours';
$string['nogradeitem'] = 'Exiger un grade peut\'t be enabled for <b>{$a}</b> because the activity is not graded.';
$string['notcompleted'] = 'Non achevée';
$string['notenroled'] = 'Vous n\'êtes pas inscrit à ce cours';
$string['nottracked'] = 'Vous n\'êtes actuellement pas suivi par l\'achèvement de ce cours';
$string['notyetstarted'] = 'Pas encore commencé';
$string['overallaggregation'] = 'Achèvement des travaux';
$string['overallaggregation_all'] = 'Le cours est terminé lorsque TOUTES les conditions sont remplies';
$string['overallaggregation_any'] = 'Le cours est terminé lorsque l\'une des conditions est remplie';
$string['pending'] = 'En attente';
$string['periodpostenrolment'] = 'Période d \' inscription';
$string['privacy:metadata:completionstate'] = 'Si l\'activité est terminée';
$string['privacy:metadata:course'] = 'Un identifiant de cours';
$string['privacy:metadata:coursecompletedsummary'] = 'Stocke des informations sur les utilisateurs qui ont rempli les critères dans un cours';
$string['privacy:metadata:coursemoduleid'] = 'L\'identification de l\'activité';
$string['privacy:metadata:coursemodulesummary'] = 'Stocke les données d\'achèvement de l\'activité pour un utilisateur';
$string['privacy:metadata:coursesummary'] = 'Stocke les données de fin de cours pour un utilisateur.';
$string['privacy:metadata:gradefinal'] = 'Niveau final obtenu pour la fin du cours';
$string['privacy:metadata:overrideby'] = 'L\'identifiant utilisateur de la personne qui a dépassé l\'achèvement de l\'activité';
$string['privacy:metadata:reaggregate'] = 'Si la fin du cours a été réagrégée.';
$string['privacy:metadata:timecompleted'] = 'Le moment où le cours a été terminé.';
$string['privacy:metadata:timeenrolled'] = 'Le moment où l\'utilisateur a été inscrit au cours';
$string['privacy:metadata:timemodified'] = 'Le moment où l\'achèvement de l\'activité a été modifié';
$string['privacy:metadata:timestarted'] = 'Le début du cours.';
$string['privacy:metadata:timecreated'] = 'Le moment où l\'activité a été terminée a été créé';
$string['privacy:metadata:viewed'] = 'Si l\'activité a été vue';
$string['privacy:metadata:userid'] = 'L\'identifiant de l\'utilisateur avec les données de fin de cours et d\'activité';
$string['privacy:metadata:unenroled'] = 'Si l\'utilisateur a été non inscrit du cours';
$string['progress'] = 'Progrès des élèves';
$string['progress-title'] = '{$a->user}, {$a->activité} : {$a->état} {$a->date}';
$string['progresstotal'] = 'Progrès : {$a->complète} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconnaissance des acquis';
$string['remainingenroledfortime'] = 'Rester inscrit pour une période déterminée';
$string['remainingenroleduntildate'] = 'Rester inscrit jusqu\'à une date spécifiée';
$string['reportpage'] = 'Affichage des utilisateurs {$a->de} à {$a->à} de {$a->total}.';
$string['requiredcriteria'] = 'Critères requis';
$string['resetactivities'] = 'Effacer toutes les activités et ressources vérifiées';
$string['restoringcompletiondata'] = 'Écrire les données d\'achèvement';
$string['roleaggregation'] = 'Condition requise';
$string['roleaggregation_all'] = 'TOUS les rôles sélectionnés à marquer lorsque la condition est remplie';
$string['roleaggregation_any'] = 'Tout rôle choisi à marquer lorsque la condition est remplie';
$string['roleidnotfound'] = 'ID du rôle {$a} non trouvé';
$string['saved'] = 'Enregistrer';
$string['seedetails'] = 'Voir détails';
$string['select'] = 'Sélectionner';
$string['self'] = 'Moi-même';
$string['selfcompletion'] = 'Auto-achèvement';
$string['showcompletionconditions'] = 'Afficher les conditions d\'achèvement des activités';
$string['showcompletionconditions_help'] = 'Afficher les conditions d\'achèvement des activités sur la page du cours.';
$string['showinguser'] = 'Affichage de l\'utilisateur';
$string['studentsmust'] = 'Les étudiants doivent';
$string['timecompleted'] = 'Temps écoulé';
$string['todo'] = 'À faire';
$string['unenrolingfromcourse'] = 'Désinscription du cours';
$string['unenrolment'] = 'Non-inscription';
$string['unit'] = 'Unité';
$string['unlockcompletion'] = 'Déverrouiller les paramètres d\'achèvement';
$string['unlockcompletiondelete'] = 'Débloquer les paramètres d\'achèvement et supprimer les données d\'achèvement de l\'utilisateur';
$string['updateactivities'] = 'Mise à jour de l\'état d\'achèvement des activités vérifiées';
$string['usealternateselector'] = 'Utiliser le sélecteur de cours alternatif';
$string['usernotenroled'] = 'L\'utilisateur n\'est pas inscrit à ce cours';
$string['viewcoursereport'] = 'Voir le rapport de cours';
$string['viewingactivity'] = 'Affichage du {$a}';
$string['withconditions'] = 'Avec conditions';
$string['writingcompletiondata'] = 'Écrire les données d\'achèvement';
$string['xdays'] = '{$a} jours';
$string['youmust'] = 'Vous devez';

// Deprecated since Moodle 4.3.
$string['editcoursecompletionsettings'] = 'Modifier les paramètres d\'achèvement du cours';
$string['completiondefault'] = 'Suivi de l\'achèvement par défaut';
$string['configcompletiondefault'] = 'Le paramètre par défaut pour le suivi d\'achèvement lors de la création de nouvelles activités.';
$string['completionview'] = 'Nécessite une vue';
$string['activitygradenotrequired'] = 'Classe non requise';
$string['completionpassgrade_help'] = 'Si elle est activée, l\'activité est considérée comme terminée lorsqu\'un élève obtient une note de passage.';
$string['completionusegrade_help'] = 'Si elle est activée, l\'activité est considérée comme terminée lorsqu\'un élève reçoit une note. Si une note de passage pour l\'activité est définie, les icônes de passage et d\'échec sont affichées dans le rapport d\'achèvement de l\'activité.';
