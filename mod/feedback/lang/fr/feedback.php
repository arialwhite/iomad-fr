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
 * Strings for component 'feedback', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package mod_feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['add_item'] = 'Ajouter une question';
$string['add_pagebreak'] = 'Ajouter une pause page';
$string['adjustment'] = 'Ajustement';
$string['after_submit'] = 'Après présentation';
$string['allowfullanonymous'] = 'Permettre l\'anonymat complet';
$string['analysis'] = 'Analyse';
$string['anonymous'] = 'Anonyme';
$string['anonymous_edit'] = 'Enregistrer les noms d\'utilisateur';
$string['anonymous_entries'] = 'Entrées anonymes ({$a})';
$string['anonymous_user'] = 'Utilisateur anonyme';
$string['answerquestions'] = 'Répondre aux questions';
$string['append_new_items'] = 'Ajouter de nouveaux éléments';
$string['autonumbering'] = 'Questions sur le numéro automatique';
$string['autonumbering_help'] = 'Active ou désactive les numéros automatisés pour chaque question';
$string['average'] = 'Moyenne';
$string['bold'] = 'Poêle';
$string['calendarend'] = '{$a} ferme';
$string['calendarstart'] = '{$a} s\'ouvre';
$string['cannotaccess'] = 'Vous pouvez seulement accéder à cette rétroaction à partir d\'un cours';
$string['cannotcreatepagebreak'] = 'Une pause page ne peut pas être ajoutée au début, et une seule pause page peut être ajoutée à la fin.';
$string['cannotsavetempl'] = 'L\'enregistrement des modèles n\'est pas autorisé';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha a't been set.';
$string['closebeforeopen'] = 'Vous avez spécifié une date de fin avant la date de début.';
$string['completed_feedbacks'] = 'Réponses soumises';
$string['complete_the_form'] = 'Répondre aux questions';
$string['completed'] = 'Achevé';
$string['completedon'] = 'Terminé le {$a}';
$string['completiondetail:submit'] = 'Soumettre les commentaires';
$string['completionsubmit'] = 'Soumettre les commentaires';
$string['configallowfullanonymous'] = 'Si défini à \'yes\', users can complete a feedback activity on the site home without being required to log in.';
$string['confirmdeleteentry'] = 'Voulez-vous vraiment supprimer cette entrée ?';
$string['confirmdeleteitem'] = 'Voulez-vous vraiment supprimer cet élément ?';
$string['confirmdeletetemplate'] = 'Voulez-vous vraiment supprimer ce modèle?';
$string['confirmusetemplate'] = 'Voulez-vous vraiment utiliser ce modèle ?';
$string['continue_the_form'] = 'Continuer à répondre aux questions';
$string['count_of_nums'] = 'Nombre de numéros';
$string['courseid'] = 'ID du cours';
$string['creating_templates'] = 'Enregistrer ces questions comme nouveau modèle';
$string['delete_entry'] = 'Supprimer l\' entrée';
$string['delete_item'] = 'Supprimer la question';
$string['delete_old_items'] = 'Supprimer les anciens éléments';
$string['delete_pagebreak'] = 'Supprimer la pause page';
$string['delete_template'] = 'Supprimer le modèle';
$string['delete_templates'] = 'Supprimer le modèle...';
$string['depending'] = 'Dépendances';
$string['depending_help'] = 'It is possible to show an item depending on the value of another item.<br />
<strong>Here is an example.</strong><br />
<ul>
<li>First, create an item on which another item will depend on.</li>
<li>Next, add a pagebreak.</li>
<li>Then add the items dependant on the value of the item created before. Choose the item from the list labelled "Dependence item" and write the required value in the textbox labelled "Dependence value".</li>
</ul>
<strong>The item structure should look like this.</strong>
<ol>
<li>Item Q: Do you have a car? A: yes/no</li>
<li>Pagebreak</li>
<li>Item Q: What colour is your car?<br />
(this item depends on item 1 with value = yes)</li>
<li>Item Q: Why don\'t you have a car?<br />
(this item depends on item 1 with value = no)</li>
<li> ... other items</li>
</ol>';
$string['dependitem'] = 'Élément de dépendance';
$string['dependvalue'] = 'Valeur de la dépendance';
$string['description'] = 'Désignation des marchandises';
$string['do_not_analyse_empty_submits'] = 'Omit vide soumet en analyse';
$string['dropdown'] = 'Choix multiple - réponse unique autorisée (menu déroulant)';
$string['dropdownlist'] = 'Choix multiple - réponse unique (menu déroulant)';
$string['dropdownrated'] = 'Menu déroulant (noté)';
$string['dropdown_values'] = 'Réponses';
$string['drop_feedback'] = 'Supprimer de ce cours';
$string['edit_item'] = 'Modifier la question';
$string['edit_items'] = 'Modifier les questions';
$string['email_notification'] = 'Permettre la notification des soumissions';
$string['email_notification_help'] = 'Si cela est possible, les enseignants recevront un avis de rétroaction.';
$string['emailteachermail'] = '{$a->username} a terminé l\'activité de rétroaction : \'{$a->feedback}\'

You can view it here:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} a complété l\'activité de rétroaction : <i>\'{$a->feedback}\'</i>.</p>
<p>It is <a href="[$a->url]">available on the site</a>.</p>';
$string['entries_saved'] = 'Vos réponses ont été sauvegardées. Je vous remercie.';
$string['export_questions'] = 'Questions relatives aux exportations';
$string['export_to_excel'] = 'Exporter vers Excel';
$string['eventresponsedeleted'] = 'Réponse supprimée';
$string['eventresponsesubmitted'] = 'Réponse présentée';
$string['feedbackcompleted'] = '{$a->nom d\'utilisateur} complété {$a->nom de feedback}';
$string['feedback:addinstance'] = 'Ajouter un nouveau feedback';
$string['feedbackclose'] = 'Permettre aux réponses';
$string['feedback:complete'] = 'Compléter une rétroaction';
$string['feedback:createprivatetemplate'] = 'Créer un modèle privé';
$string['feedback:createpublictemplate'] = 'Créer un modèle public';
$string['feedback:deletesubmissions'] = 'Supprimer les présentations terminées';
$string['feedback:deletetemplate'] = 'Supprimer le modèle';
$string['feedback:edititems'] = 'Modifier les éléments';
$string['feedback_is_not_for_anonymous'] = 'La rétroaction n\'est pas pour anonyme';
$string['feedback_is_not_open'] = 'La rétroaction n\'est pas ouverte';
$string['feedback:mapcourse'] = 'Cartographier les cours sur les retours mondiaux';
$string['feedbackopen'] = 'Laisser les réponses de';
$string['feedback:receivemail'] = 'Recevoir une notification par courriel';
$string['feedback:view'] = 'Affichage d\'un commentaire';
$string['feedback:viewanalysepage'] = 'Consulter la page d\'analyse après soumettre';
$string['feedback:viewreports'] = 'Afficher les rapports';
$string['feedbackupdated'] = 'Rétroaction actualisée.';
$string['file'] = 'Fichier';
$string['filter_by_course'] = 'Filtrer par cours';
$string['handling_error'] = 'Erreur lors de la gestion de l\'action du module de rétroaction';
$string['hide_no_select_option'] = 'Cacher l\'option "Non sélectionné"';
$string['horizontal'] = 'Horizontale';
$string['check'] = 'Choix multiple - réponses multiples';
$string['checkbox'] = 'Choix multiple - réponses multiples autorisées (cocher les cases)';
$string['check_values'] = 'Réponses possibles';
$string['choosefile'] = 'Choisissez un fichier';
$string['chosen_feedback_response'] = 'Réponse de rétroaction choisie';
$string['downloadresponseas'] = 'Télécharger toutes les réponses comme:';
$string['importfromthisfile'] = 'Importer à partir de ce fichier';
$string['import_questions'] = 'Questions relatives à l\'importation';
$string['import_successfully'] = 'Importer avec succès';
$string['includeuserinrecipientslist'] = 'Inclure {$a} dans la liste des destinataires';
$string['indicator:cognitivedepth'] = 'Rétroaction cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'élève dans une activité de rétroaction.';
$string['indicator:cognitivedepthdef'] = 'Rétroaction cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités de rétroaction pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Voir, Soumettre)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Rétroaction sociale';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité de rétroaction.';
$string['indicator:socialbreadthdef'] = 'Rétroaction sociale';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités de rétroaction au cours de cet intervalle d\'analyse (niveaux = aucune participation, participant seul, participant avec d\'autres)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['info'] = 'Informations';
$string['infotype'] = 'Type de renseignements';
$string['insufficient_responses_for_this_group'] = 'Les réponses sont insuffisantes pour ce groupe.';
$string['insufficient_responses'] = 'Réponses insuffisantes';
$string['insufficient_responses_help'] = 'Pour que la rétroaction soit anonyme, il doit y avoir au moins 2 réponses.';
$string['item_label'] = 'Étiquette';
$string['item_name'] = 'Question';
$string['label'] = 'Espace texte et médias';
$string['labelcontents'] = 'Sommaire';
$string['mapcourseinfo'] = 'Il s\'agit d\'une rétroaction à l\'échelle du site qui est disponible pour tous les cours utilisant le bloc de rétroaction. Vous pouvez toutefois limiter les cours auxquels il apparaîtra en les mappant. Faites une recherche dans le cours et mapez-le à ce feedback.';
$string['mapcoursenone'] = 'Pas de plan. Commentaires disponibles pour tous les cours';
$string['mapcourse'] = 'Carte des réactions aux cours';
$string['mapcourse_help'] = 'By default, feedback forms created on your homepage are available site-wide
and will appear in all courses using the feedback block. You can force the feedback form to appear by making it a sticky block or limit the courses in which a feedback form will appear by mapping it to specific courses.';
$string['mapcourses'] = 'Carte des réactions aux cours';
$string['mappedcourses'] = 'Cours cartographiés';
$string['mappingchanged'] = 'La cartographie des cours a été modifiée';
$string['minimal'] = 'Minimum';
$string['maximal'] = 'Maximum';
$string['messageprovider:message'] = 'Rappel de rétroaction';
$string['messageprovider:submission'] = 'Avis de rétroaction';
$string['mode'] = 'Mode';
$string['modulename'] = 'Commentaires';
$string['modulename_help'] = 'The feedback activity enables a teacher to create a custom survey for collecting feedback from participants using a variety of question types including multiple choice, yes/no or text input.

Feedback responses may be anonymous if desired, and results may be shown to all participants or restricted to teachers only. Any feedback activities on the site home may also be completed by non-logged-in users.

Feedback activities may be used

* For course evaluations, helping improve the content for later participants
* To enable participants to sign up for course modules, events etc.
* For guest surveys of course choices, school policies etc.
* For anti-bullying surveys in which students can report incidents anonymously';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Commentaires';
$string['move_item'] = 'Déplacer cette question';
$string['multichoice'] = 'Choix multiple';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Choix multiple (évalué)';
$string['multichoicetype'] = 'Type à choix multiple';
$string['multichoice_values'] = 'Valeurs à choix multiple';
$string['multiplesubmit'] = 'Permettre plusieurs présentations';
$string['multiplesubmit_help'] = 'If set to Yes:

* For anonymous surveys: participants can submit unlimited responses, and all responses will be recorded.
* For non-anonymous surveys: participants can submit unlimited responses, but only their latest response will be recorded.';
$string['name'] = 'Nom';
$string['name_required'] = 'Nom requis';
$string['nameandlabelformat'] = '({$a->label}) {$a->nom}';
$string['next_page'] = 'Page suivante';
$string['no_handler'] = 'Aucun gestionnaire d\'action n\'existe pour';
$string['no_itemlabel'] = 'Pas d\'étiquette';
$string['no_itemname'] = 'Aucun nom d\'article';
$string['no_items_available_yet'] = 'Aucune question n\'a encore été posée.';
$string['non_anonymous'] = 'Utilisateur's name will be logged and shown with answers';
$string['non_anonymous_entries'] = 'Entrées non anonymes ({$a})';
$string['non_respondents_students'] = 'Étudiants non-répondants ({$a})';
$string['not_completed_yet'] = 'Non encore achevée';
$string['not_started'] = 'Pas commencé';
$string['no_templates_available_yet'] = 'Pas encore de modèles disponibles';
$string['not_selected'] = 'Non sélectionné';
$string['numberoutofrange'] = 'Nombre hors de portée';
$string['numeric'] = 'Réponse numérique';
$string['numeric_range_from'] = 'Gamme de';
$string['numeric_range_to'] = 'Jusqu\'à';
$string['of'] = 'of';
$string['oldvaluespreserved'] = 'Toutes les questions anciennes et les valeurs attribuées seront conservées';
$string['oldvalueswillbedeleted'] = 'Les questions actuelles et toutes les réponses seront supprimées.';
$string['only_one_captcha_allowed'] = 'Un seul captcha est autorisé dans un feedback';
$string['openafterclose'] = 'Vous avez spécifié une date ouverte après la date de clôture';
$string['overview'] = 'Aperçu général';
$string['page'] = 'Page';
$string['page-mod-feedback-x'] = 'Toute page du module de rétroaction';
$string['page_after_submit'] = 'Message d\'achèvement';
$string['pagebreak'] = 'Pause des pages';
$string['pluginadministration'] = 'Administration de la rétroaction';
$string['pluginname'] = 'Commentaires';
$string['position'] = 'Fonction';
$string['previous_page'] = 'Page précédente';
$string['previewquestions'] = 'Aperçu des questions';
$string['privacy:metadata:completed'] = 'Un compte rendu des commentaires reçus';
$string['privacy:metadata:completed:anonymousresponse'] = 'Indique si la soumission doit être utilisée anonymement.';
$string['privacy:metadata:completed:timemodified'] = 'Le moment où la présentation a été modifiée pour la dernière fois.';
$string['privacy:metadata:completed:userid'] = 'L\'identification de l\'utilisateur qui a complété l\'activité de rétroaction.';
$string['privacy:metadata:completedtmp'] = 'Un compte rendu des mémoires en cours.';
$string['privacy:metadata:value'] = 'Un compte rendu de la réponse à une question.';
$string['privacy:metadata:value:value'] = 'La réponse choisie.';
$string['privacy:metadata:valuetmp'] = 'Un compte rendu de la réponse à une question dans une présentation en cours.';
$string['public'] = 'Public';
$string['question'] = 'Question';
$string['questionandsubmission'] = 'Paramètres des questions et des présentations';
$string['questions'] = 'Questions';
$string['questionslimited'] = 'Afficher seulement {$a} les premières questions, afficher les réponses individuelles ou télécharger les données du tableau pour afficher tout.';
$string['radio'] = 'Choix multiple - réponse unique';
$string['radio_values'] = 'Réponses';
$string['ready_feedbacks'] = 'Commentaires prêts';
$string['required'] = 'Requis';
$string['resetting_data'] = 'Réponses';
$string['resetting_delete'] = 'Supprimer les réponses';
$string['resetting_feedbacks'] = 'Réinitialisation des commentaires';
$string['response_nr'] = 'Numéro de réponse';
$string['responses'] = 'Réponses';
$string['responsetime'] = 'Temps de réponse';
$string['save_as_new_item'] = 'Enregistrer comme nouvelle question';
$string['save_as_new_template'] = 'Enregistrer comme nouveau modèle';
$string['save_entries'] = 'Soumettre vos réponses';
$string['save_item'] = 'Enregistrer la question';
$string['saving_failed'] = 'La sauvegarde a échoué';
$string['search:activity'] = 'Rétroaction - information sur les activités';
$string['search_course'] = 'Cours de recherche';
$string['searchcourses'] = 'Cours de recherche';
$string['searchcourses_help'] = 'Recherchez le code ou le nom du cours que vous souhaitez associer à cette rétroaction.';
$string['selected_dump'] = 'Les indices sélectionnés de la variable $SESSION sont sous-évalués ci-dessous :';
$string['send'] = 'Envoyer';
$string['send_message'] = 'Envoyer une notification';
$string['show_all'] = 'Afficher tout';
$string['show_analysepage_after_submit'] = 'Afficher la page d\'analyse';
$string['show_entries'] = 'Afficher les réponses';
$string['show_entry'] = 'Afficher la réponse';
$string['show_nonrespondents'] = 'Afficher les non-répondants';
$string['site_after_submit'] = 'Site après soumission';
$string['sort_by_course'] = 'Trier par cours';
$string['started'] = 'Commencé';
$string['startedon'] = 'Démarré le {$a}';
$string['subject'] = 'Sujet';
$string['switch_item_to_not_required'] = 'Défini comme non requis';
$string['switch_item_to_required'] = 'Réglé selon les besoins';
$string['template'] = 'Modèle';
$string['templates'] = 'Modèles';
$string['template_deleted'] = 'Modèle supprimé';
$string['template_saved'] = 'Modèle enregistré';
$string['textarea'] = 'Réponse texte plus longue';
$string['textarea_height'] = 'Nombre de lignes';
$string['textarea_width'] = 'Largeur';
$string['textfield'] = 'Réponse en bref';
$string['textfield_maxlength'] = 'Caractères maximum acceptés';
$string['textfield_size'] = 'Largeur des champs de texte';
$string['there_are_no_settings_for_recaptcha'] = 'Il n\'y a pas de paramètres pour captcha';
$string['this_feedback_is_already_submitted'] = 'Vous...'ve already completed this activity.';
$string['typemissing'] = 'Valeur manquante "type"';
$string['update_item'] = 'Enregistrer les modifications à la question';
$string['url_for_continue'] = 'Lien vers l\'activité suivante';
$string['url_for_continue_help'] = 'Après avoir soumis les commentaires, un bouton continue est affiché, qui lie à la page du cours. Alternativement, il peut lier à l\'activité suivante si l\'URL de l\'activité est entrée ici.';
$string['use_one_line_for_each_value'] = 'Utilisez une ligne pour chaque réponse!';
$string['use_this_template'] = 'Utiliser ce modèle';
$string['using_templates'] = 'Utiliser un modèle';
$string['vertical'] = 'Vertical';
$string['whatfor'] = 'Qu\'est-ce que tu veux faire ?';
