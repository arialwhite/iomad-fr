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
 * Strings for tool_usertours.
 *
 * @package   tool_usertours
 * @copyright 2016 Andrew Nicols <andrew@nicols.co.uk>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['above'] = 'Au-dessus';
$string['actions'] = 'Actions';
$string['appliesto'] = 'S\'applique';
$string['below'] = 'Ci-dessous';
$string['block'] = 'Bloc';
$string['block_named'] = 'Bloc nommé \'{$a}\'';
$string['cachedef_stepdata'] = 'Liste des étapes de la visite de l\'utilisateur';
$string['cachedef_tourdata'] = 'Liste des informations de visites d\'utilisateurs activées qui sont récupérées sur chaque page';
$string['description'] = 'Désignation des marchandises';
$string['description_help'] = 'The description of a tour may be added as plain text, enclosed in multilang tags (for use with the multi-language content filter) if required.

Alternatively, a language string ID may be entered in the format identifier,component (with no brackets or space after the comma).';
$string['displaystepnumbers'] = 'Afficher les numéros d\'étape';
$string['displaystepnumbers_help'] = 'Indique s\'il faut afficher un nombre d\'étapes par exemple 1/4, 2/4, etc. pour indiquer la longueur de la visite de l\'utilisateur.';
$string['showtourwhen'] = 'Afficher la visite';
$string['showtoureachtime'] = 'à chaque fois qu\'un filtre le correspond';
$string['showtouruntilcomplete'] = 'jusqu\'à sa fermeture';
$string['confirmstepremovalquestion'] = 'Êtes-vous sûr de vouloir supprimer cette étape?';
$string['confirmstepremovaltitle'] = 'Confirmer la suppression de l\'étape';
$string['confirmtourremovalquestion'] = 'Êtes-vous sûr de vouloir supprimer cette visite?';
$string['confirmtourremovaltitle'] = 'Confirmer l\'enlèvement de la tournée';
$string['content'] = 'Contenu';
$string['content_heading'] = 'Contenu';
$string['content_help'] = 'Le contenu décrivant l\'étape peut être ajouté sous forme de texte simple, enfermé dans des balises multilang (pour utilisation avec le filtre de contenu multilingue) si nécessaire.';
$string['content_type'] = 'Type de contenu';
$string['content_type_help'] = '* Manual - content is entered using a text editor
* Language string ID - in the format string identifier,component (with no space after the comma)';
$string['content_type_langstring'] = 'ID de la chaîne de langue';
$string['content_type_manual'] = 'Manuel';
$string['cssselector'] = 'Sélecteur CSS';
$string['defaultvalue'] = 'Par défaut ({$a})';
$string['delay'] = 'Retard avant de montrer l\'étape';
$string['done'] = 'Fait';
$string['duplicatetour'] = 'Visite en double';
$string['duplicatetour_name'] = '{$a} (copie)';
$string['editstep'] = 'Modifier "{$a}"';
$string['tourisenabled'] = 'Le tour est activé';
$string['enabled'] = 'Activé';
$string['endtourlabel'] = 'Bouton de tour de fin\'s label';
$string['endtourlabel_help'] = 'Vous pouvez éventuellement spécifier une étiquette personnalisée pour le bouton de visite finale. L\'étiquette par défaut est \'Got it\' for single-step and \'End tour\' for multiple-step tours.

Alternatively, a language string ID may be entered in the format identifier,component (with no brackets or space after the comma).';
$string['event_tour_started'] = 'Début de la tournée';
$string['event_tour_reset'] = 'Remise à zéro de la tournée';
$string['event_tour_ended'] = 'Fin de la tournée';
$string['event_step_shown'] = 'Étape affichée';
$string['exporttour'] = 'Exportation';
$string['filter_accessdate'] = 'Date d\'accès';
$string['filter_accessdate_enabled'] = 'Activer le filtre de date d\'accès';
$string['filter_accessdate_enabled_help'] = 'Seulement montrer la visite aux nouveaux utilisateurs ou utilisateurs qui ont accédé au site récemment.';
$string['filter_category'] = 'Catégorie';
$string['filter_category_help'] = 'Afficher la visite sur une page associée à un cours dans la catégorie sélectionnée.';
$string['filter_course'] = 'Cours';
$string['filter_course_help'] = 'Afficher la visite sur une page associée au cours sélectionné.';
$string['filter_courseformat'] = 'Format du cours';
$string['filter_courseformat_help'] = 'Afficher la visite sur une page associée à un cours en utilisant le format de cours sélectionné.';
$string['filter_cssselector'] = 'Sélecteur CSS';
$string['filter_cssselector_help'] = 'Afficher seulement la visite lorsque le sélecteur CSS spécifié est trouvé sur la page.';
$string['filter_header'] = 'Filtres de visite';
$string['filter_help'] = 'Sélectionnez les conditions dans lesquelles la visite sera montrée. Tous les filtres doivent correspondre pour une visite à montrer à un utilisateur.';
$string['filter_date_account_creation'] = 'Date de création du compte utilisateur';
$string['filter_date_first_login'] = 'Utilisateur's first access date within';
$string['filter_date_last_login'] = 'Utilisateur's last access date within';
$string['filter_theme'] = 'Thème';
$string['filter_theme_help'] = 'Afficher la visite lorsque l\'utilisateur utilise l\'un des thèmes sélectionnés.';
$string['filter_role'] = 'Rôle';
$string['filter_role_help'] = 'Une visite peut être réservée aux utilisateurs ayant des rôles choisis dans le contexte où la visite est montrée. Par exemple, limiter une visite en tableau de bord aux utilisateurs ayant le rôle d\'étudiant gagné\'t work if users have the role of student in a course (as is generally the case). A Dashboard tour can only be restricted to users with a system role.';
$string['importtour'] = 'Importer le tour';
$string['invalid_lang_id'] = 'ID de chaîne de langue non valide';
$string['left'] = 'Gauche';
$string['modifyshippedtourwarning'] = 'C\'est une visite d\'utilisateur qui a expédié avec Moodle. Toute modification que vous apporterez peut être annulée lors de votre prochaine mise à jour du site.';
$string['moodle_language_identifier'] = 'ID de la chaîne de langue';
$string['movestepdown'] = 'Déplacer le pas vers le bas';
$string['movestepup'] = 'Déplacez-vous';
$string['movetourdown'] = 'Déplacer la visite vers le bas';
$string['movetourup'] = 'Déplacer la visite vers le haut';
$string['name'] = 'Nom';
$string['name_help'] = 'The name of a tour may be added as plain text, enclosed in multilang tags (for use with the multi-language content filter) if required.

Alternatively, a language string ID may be entered in the format identifier,component (with no brackets or space after the comma).';
$string['newstep'] = 'Créer une étape';
$string['newstep'] = 'Nouvelle étape';
$string['newtour'] = 'Créer une nouvelle tournée';
$string['next'] = 'Suivant';
$string['nextstep'] = 'Suivant';
$string['nextstep_sequence'] = 'Suivant ({$a->position}/{$a->total})';
$string['options_heading'] = 'Options';
$string['pathmatch'] = 'Appliquer à la correspondance URL';
$string['pathmatch_help'] = 'Tours will be displayed on any page whose URL matches this value.

You can use the % character as a wildcard to mean anything.
Some example values include:

* /my/% - to match the Dashboard
* /course/view.php?id=2 - to match a specific course
* /mod/forum/view.php% - to match the forum discussion list
* /user/profile.php% - to match the user profile page

If you wish to display a tour on the site home, you can use the value: "FRONTPAGE".';
$string['placement'] = 'Placement';
$string['pluginname'] = 'Visites des utilisateurs';
$string['resettouronpage'] = 'Réinitialiser la visite de l\'utilisateur sur cette page';
$string['right'] = 'Droite';
$string['select_block'] = 'Sélectionner un bloc';
$string['targettype_help'] = 'Each step is associated with a part of the page - the target. Target types are:

* Block - for displaying a step next to a specified block
* CSS selector - for accurately defining the target area using CSS
* Display in middle of page - for a step which does not need to be associated with a specific part of the page';
$string['selector_defaulttitle'] = 'Entrez un titre descriptif';
$string['selectordisplayname'] = 'Un sélecteur CSS correspondant \'{$a}\'';
$string['skip'] = 'Sauter';
$string['skip_tour'] = 'Sauter la visite';
$string['target'] = 'Objectif';
$string['target_heading'] = 'Objectif de l\'étape';
$string['target_block'] = 'Bloc';
$string['target_selector'] = 'Sélecteur';
$string['target_unattached'] = 'Afficher au milieu de la page';
$string['targettype'] = 'Type de cible';
$string['title'] = 'Titre';
$string['title_help'] = 'The title of a step may be added as plain text, enclosed in multilang tags (for use with the multi-language content filter) if required.

Alternatively, a language string ID may be entered in the format identifier,component (with no brackets or space after the comma).';
$string['tourconfig'] = 'Voir le fichier de configuration à importer';
$string['tourlist_explanation'] = 'Vous pouvez créer autant de visites que vous le souhaitez et les activer pour différentes parties de Moodle. Une seule visite peut être créée par page.';
$string['tours'] = 'Tours';
$string['pausetour'] = 'Pause';
$string['resumetour'] = 'Reprendre';
$string['endonesteptour'] = 'Compris.';
$string['endtour'] = 'Visite finale';
$string['orphan'] = 'Afficher si la cible n\'est pas trouvée';
$string['orphan_help'] = 'Afficher l\'étape si la cible n\'a pas pu être trouvée sur la page.';
$string['backdrop'] = 'Afficher avec fond';
$string['backdrop_help'] = 'You can use a backdrop to highlight the part of the page that you are pointing to.

Note: Backdrops are not compatible with some parts of the page such as the navigation bar.
';
$string['reflex'] = 'Continuer en cliquant sur';
$string['reflex_help'] = 'Passez à l\'étape suivante lorsque la cible est cliqué sur.';
$string['placement_help'] = 'A step may be placed above, below, left or right of the target. Above or below is recommended, as these adjust better for mobile display.

If the step does not fit on a particular page in the specified place, it will be automatically placed elsewhere.';
$string['delay_help'] = 'You can optionally choose to add a delay before the step is displayed.

This delay is in milliseconds.';
$string['selecttype'] = 'Sélectionner le type d\'étape';
$string['sharedtourslink'] = 'Dépôt de visites';
$string['usertours'] = 'Visites des utilisateurs';
$string['usertours:managetours'] = 'Créer, modifier et supprimer les visites des utilisateurs';
$string['target_selector_targetvalue'] = 'Sélecteurs CSS';
$string['target_selector_targetvalue_help'] = 'Un sélecteur CSS peut être utilisé pour cibler presque n\'importe quel élément de la page. Le sélecteur approprié peut être facilement trouvé en utilisant les outils de développement de votre navigateur Web.';
$string['viewtour_info'] = 'C\'est le \'{$a->tourname}\' tour. It applies to the path \'{$a->path}\'.';
$string['viewtour_edit'] = 'Vous pouvez <a href="{$a->editlink}">éditer les valeurs par défaut du tour</a> et <a href="{$a->resetlink}">obliger le tour à être affiché à nouveau à tous les utilisateurs.';
$string['tour_resetforall'] = 'L\'état de la tournée a été remis à zéro. Il sera à nouveau affiché à tous les utilisateurs.';

// Boost - administrator tour.
$string['tour1_title_welcome'] = 'Bienvenue';
$string['tour1_content_welcome'] = 'Bienvenue sur le thème Boost. Si vous\'ve upgraded from an earlier version, you might find some things look a bit different with this theme.';
$string['tour1_title_navigation'] = 'Navigation';
$string['tour1_content_navigation'] = 'La navigation principale est maintenant à travers ce tiroir de nav. La mise à jour du contenu selon l\'endroit où vous êtes sur le site. Utilisez le bouton en haut pour le cacher ou le montrer.';
$string['tour1_title_customisation'] = 'Personnalisation';
$string['tour1_content_customisation'] = 'Pour personnaliser l\'apparence de votre site et de la maison du site, utilisez le menu Paramètres dans le coin de cet en-tête. Essayez d\'allumer le montage maintenant.';
$string['tour1_title_blockregion'] = 'Région du bloc';
$string['tour1_content_blockregion'] = 'Il y a encore une région de blocs ici. Nous vous recommandons de supprimer complètement les blocs Navigation et Administration, car toutes les fonctionnalités sont ailleurs dans le thème Boost.';
$string['tour1_title_addingblocks'] = 'Ajout de blocs';
$string['tour1_content_addingblocks'] = 'En fait, pensez soigneusement à inclure tous les blocs sur vos pages. Les blocs ne sont pas affichés dans l\'application Moodle, donc en règle générale il\'s much better to make sure your site works well without any blocks.';
$string['tour1_title_end'] = 'Fin de la tournée';
$string['tour1_content_end'] = 'C\'est la fin de votre visite utilisateur. Il a gagné\'t show again unless you reset it using the link in the footer. As an admin you can also create your own tours like this!';

// Boost - course view tour.
$string['tour2_title_welcome'] = 'Bienvenue';
$string['tour2_content_welcome'] = 'Bienvenue sur le thème Boost. Si votre site a été mis à jour depuis une version antérieure, vous pourriez trouver les choses un peu différentes ici sur la page du cours.';
$string['tour2_title_customisation'] = 'Personnalisation';
$string['tour2_content_customisation'] = 'Pour modifier les paramètres de cours, utilisez le menu Paramètres dans le coin de cet en-tête. Vous trouverez également un menu de paramètres sur la page d\'accueil de chaque activité. Essayez d\'allumer le montage maintenant.';
$string['tour2_title_navigation'] = 'Navigation';
$string['tour2_content_navigation'] = 'La navigation passe maintenant par ce tiroir. Utilisez le bouton en haut pour le cacher ou le montrer. Vous verrez qu\'il y a des liens pour les sections de votre cours.';
$string['tour2_title_opendrawer'] = 'Ouvrir le tiroir du nav';
$string['tour2_content_opendrawer'] = 'Essayez d\'ouvrir le tiroir.';
$string['tour2_title_participants'] = 'Participants au cours';
$string['tour2_content_participants'] = 'Voir les participants ici. C\'est aussi là que vous allez ajouter ou supprimer des étudiants.';
$string['tour2_title_addblock'] = 'Ajouter un bloc';
$string['tour2_content_addblock'] = 'Si vous allumez l\'édition, vous pouvez ajouter des blocs à partir du tiroir de la nav. Cependant, pensez soigneusement à inclure tous les blocs sur vos pages. Les blocs ne sont pas affichés dans l\'application Moodle, donc pour la meilleure expérience utilisateur, il est préférable de s\'assurer que votre cours fonctionne bien sans blocs.';
$string['tour2_title_addingblocks'] = 'Ajout de blocs';
$string['tour2_content_addingblocks'] = 'Vous pouvez ajouter des blocs à cette page en utilisant ce bouton. Cependant, pensez soigneusement à inclure tous les blocs sur vos pages. Les blocs ne sont pas affichés dans l\'application Moodle, donc pour la meilleure expérience utilisateur, il est préférable de s\'assurer que votre cours fonctionne bien sans blocs.';
$string['tour2_title_end'] = 'Fin de la tournée';
$string['tour2_content_end'] = 'C\'est la fin de votre visite utilisateur. Il a gagné\'t show again unless you reset it using the link in the footer. The site admin can also create further tours for this site if required.';
$string['privacy:metadata:preference:requested'] = 'Le temps qu\'un utilisateur a demandé manuellement une visite de l\'utilisateur.';
$string['privacy:metadata:preference:completed'] = 'Le moment où un utilisateur a effectué une dernière visite d\'utilisateur.';
$string['privacy:request:preference:requested'] = 'Vous avez demandé la dernière visite de l\'utilisateur « {$a->name} » sur {$a->time}';
$string['privacy:request:preference:completed'] = 'Vous avez marqué pour la dernière fois la visite de l\'utilisateur « {$a->name} » comme terminée sur {$a->time}';

// 3.6 Dashboard tour.
$string['tour3_title_dashboard'] = 'Votre tableau de bord';
$string['tour3_content_dashboard'] = 'Votre nouveau tableau de bord a de nombreuses fonctionnalités pour vous aider à accéder facilement aux informations les plus importantes pour vous.';
$string['tour3_title_timeline'] = 'Bloc chronologique';
$string['tour3_content_timeline'] = 'The Timeline block shows your important upcoming events.

You can choose to show activities in the next week, month, or further into the future.

You can also show items which are overdue.';
$string['tour3_title_recentcourses'] = 'Cours récemment accessibles';
$string['tour3_content_recentcourses'] = 'Le bloc des cours récemment accessibles montre les cours que vous avez visités pour la dernière fois, vous permettant de sauter directement en arrière.';
$string['tour3_title_overview'] = 'Aperçu du cours';
$string['tour3_content_overview'] = 'The Course overview block shows all of the courses that you are enrolled in.

You can choose to show courses currently in progress, or in the past or the future, or courses which you have starred.';
$string['tour3_title_starring'] = 'Cours d\'étoiles et de cachettes';
$string['tour3_content_starring'] = 'You can choose to star a course to make it stand out, or hide a course which is no longer important to you.

These actions only affect your view.

You can also choose to display the courses in a list, or with summary information, or the default \'card\' view.';
$string['tour3_title_displayoptions'] = 'Afficher les options';
$string['tour3_content_displayoptions'] = 'Courses may be sorted by course name, course short name or last access date.

You can also choose to display the courses in a list, with summary information, or the default \'card\' view.';

// 3.6 Messaging tour.
$string['tour4_title_messaging'] = 'Nouvelle interface de messagerie';
$string['tour4_content_messaging'] = 'Les nouvelles fonctionnalités de messagerie incluent la messagerie de groupe dans un cours et un meilleur contrôle sur qui peut vous envoyer des messages.';
$string['tour4_title_icon'] = 'Messagerie';
$string['tour4_content_icon'] = 'You can access your messages from any page using this icon.

If you have any unread messages, the number of unread messages will show here too.

Click on the icon to open the messaging drawer and continue the tour.';
$string['tour4_title_groupconvo'] = 'Messages de groupe';
$string['tour4_content_groupconvo'] = 'Si vous êtes membre d\'un groupe avec la messagerie de groupe activée, vous\'ll see group conversations here.

Course group conversations allow you to interact with the others in your group in a private and convenient location.';
$string['tour4_title_starred'] = 'Étoilé';
$string['tour4_content_starred'] = 'Vous pouvez choisir de regarder des conversations particulières pour les rendre plus faciles à trouver.';
$string['tour4_title_settings'] = 'Paramètres de messagerie';
$string['tour4_content_settings'] = 'Vous pouvez accéder à vos paramètres de messagerie via l\'icône cog. Un nouveau paramètre de confidentialité vous permet de restreindre qui peut vous envoyer des messages.';

// 3.11 Activity information tour.
$string['tour_activityinfo_activity_student_title'] = 'Nouveau: Informations sur les activités';
$string['tour_activityinfo_activity_student_content'] = 'Les dates de l\'activité plus ce qu\'il faut faire pour terminer l\'activité sont indiquées sur la page de l\'activité.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nouveau: Informations sur les activités';
$string['tour_activityinfo_activity_teacher_content'] = 'Activity dates and completion conditions are now displayed for students on each activity page (and optionally on the course page).

For activities requiring students to manually mark an activity as completed, a \'Mark as done\' button is shown on the activity page.';
$string['tour_activityinfo_course_student_title'] = 'Nouveau: Informations sur les activités';
$string['tour_activityinfo_course_student_content'] = 'Les dates d\'activité et/ou les mesures à prendre pour compléter l\'activité sont affichées sur la page du cours.';
$string['tour_activityinfo_course_teacher_title'] = 'Nouveau: Informations sur les activités';
$string['tour_activityinfo_course_teacher_content'] = 'Nouveaux paramètres de cours \'Show completion conditions\' and \'Show activity dates\' enable you to choose whether activity completion conditions (if set) and/or dates are displayed for students on the course page.';

// 4.0 New navigation tour.
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@<br> Écrivez des nouvelles importantes ici.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Quelque chose à dire à tout le monde ?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@<br> Ajouter un nouveau contenu ou modifier le contenu existant.';
$string['tour_navigation_course_edit_teacher_title'] = 'Activer le mode d\'édition';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_étudiants::tool_usertours@@<br> Parcourez les activités et suivez vos progrès.';
$string['tour_navigation_course_index_student_title'] = 'Trouvez votre chemin';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@<br> Faites glisser et déposez des activités pour réorganiser le contenu du cours.';
$string['tour_navigation_course_index_teacher_title'] = 'Indice des cours';
$string['tour_navigation_course_student_tour_des'] = 'Où parcourir les activités dans un cours';
$string['tour_navigation_course_student_tour_name'] = 'Indice des cours';
$string['tour_navigation_course_teacher_tour_des'] = 'Modifier le mode, glisser-déposer des activités et afficher des annonces dans un cours';
$string['tour_navigation_course_teacher_tour_name'] = 'Révision des cours';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br> Ce panneau latéral peut contenir plus de fonctionnalités.';
$string['tour_navigation_dashboard_title'] = 'Élargir pour explorer';
$string['tour_navigation_dashboard_tour_des'] = 'Où des blocs peuvent être trouvés';
$string['tour_navigation_dashboard_tour_name'] = 'Tiroir à blocs';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourse::tool_usertours@@<br> Ajouter, copier, supprimer et masquer les cours de ce menu.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Je comprends.';
$string['tour_navigation_mycourses_title'] = 'Cours et catégories';
$string['tour_navigation_mycourses_tour_des'] = 'Options de gestion des cours sur la page Mes cours';
$string['tour_navigation_mycourses_tour_name'] = 'Gestion des cours';

// 4.2 New gradebook tour.
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div> Triez les colonnes et choisissez celles à afficher. En mode Édition, utilisez ce raccourci pour accéder aux tâches fréquentes liées à la visualisation et à l\'édition des éléments de grade.';
$string['tour_gradebook_action_title'] = 'Liens rapides vers les actions';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initiales::tool_usertours@@</div> Filtrer les élèves par les initiales de leur prénom ou nom de famille.';
$string['tour_gradebook_filter_title'] = 'Filtrer par nom';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div> Utilisez la boîte de recherche pour trouver rapidement des étudiants spécifiques.';
$string['tour_gradebook_search_title'] = 'Trouvez facilement les étudiants';
$string['tour_gradebook_tour_description'] = 'Fonctions de recherche et de navigation dans le rapport Gradebook classer';
$string['tour_gradebook_tour_name'] = 'Rapport sur l\'évaluation des grades';
$string['tour_final_step_title'] = 'Fin de la tournée';
$string['tour_final_step_content'] = 'C\'est la fin de votre visite utilisateur. Il a gagné\'t show again unless you reset it using the link in the footer.';
