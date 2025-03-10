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
 * Strings for the advanced grading methods subsystem
 *
 * @package    core_grading
 * @subpackage grading
 * @copyright  2011 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' is selected as the active grading method for the \'{$a->area}\' area';
$string['activemethodinfonone'] = 'Il n\'y a pas de méthode de classement avancée sélectionnée pour le \'{$a->area}\' area. Simple direct grading will be used.';
$string['changeactivemethod'] = 'Modifier la méthode de classement actif en';
$string['clicktoclose'] = 'Cliquez pour fermer';
$string['exc_gradingformelement'] = 'Incapable de classer instantanément l\'élément de forme';
$string['formnotavailable'] = 'Une méthode de classement avancée a été choisie, mais le formulaire de classement doit encore être défini.';
$string['gradingformunavailable'] = 'Veuillez noter que le formulaire de classement avancé n\'est pas prêt pour le moment. La méthode de classement simple sera utilisée jusqu\'à ce que le formulaire ait un statut valide.';
$string['gradingmanagement'] = 'Classement avancé';
$string['gradingmanagementtitle'] = 'Classement avancé : {$a->composante} ({$a->zone})';
$string['gradingmethod'] = 'Méthode de classement';
$string['gradingmethod_help'] = 'Choose the advanced grading method that should be used for calculating grades in the given context.

To disable advanced grading and switch back to the default grading mechanism, choose \'Simple direct grading\'.';
$string['gradingmethodnone'] = 'Classement direct simple';
$string['gradingmethods'] = 'Méthodes de classement';
$string['manageactionclone'] = 'Créer un nouveau formulaire de classement à partir d\'un modèle';
$string['manageactiondelete'] = 'Supprimer le formulaire actuellement défini';
$string['manageactiondeleteconfirm'] = 'Vous allez supprimer le formulaire de classement \'{$a->formname}\' and all the associated information from \'{$a->component} ({$a->area})\'. Please make sure you understand the following consequences:

* There is no way to undo this operation.
* You can switch to another grading method including the \'Simple direct grading\' without deleting this form.
* All the information about how the grading forms are filled will be lost.
* The calculated result grades stored in the gradebook will not be affected. However the explanation of how they were calculated will not be available.
* This operation does not affect eventual copies of this form in other activities.';
$string['manageactiondeletedone'] = 'Le formulaire a été supprimé avec succès';
$string['manageactionedit'] = 'Modifier la définition actuelle du formulaire';
$string['manageactionnew'] = 'Définir la nouvelle forme de classement à partir de zéro';
$string['manageactionshare'] = 'Publier le formulaire comme nouveau modèle';
$string['manageactionshareconfirm'] = 'Vous allez enregistrer une copie du formulaire de classement \'{$a}\' as a new public template. Other users at your site will be able to create new grading forms in their activities from that template.';
$string['manageactionsharedone'] = 'Le formulaire a été sauvegardé avec succès comme modèle';
$string['noitemid'] = 'C\'est impossible. L\'article classé n\'existe pas.';
$string['nosharedformfound'] = 'Aucun modèle trouvé';
$string['privacy:metadata:gradingformpluginsummary'] = 'Données pour la méthode de classement.';
$string['privacy:metadata:grading_definitions'] = 'Informations de base sur un formulaire de classement avancé défini dans une zone graduable.';
$string['privacy:metadata:grading_definitions:areaid'] = 'Identification de la zone où le formulaire de classement avancé est défini.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'L\'ID de définition du classement d\'où il a été copié.';
$string['privacy:metadata:grading_definitions:description'] = 'La description de la méthode de classement avancée.';
$string['privacy:metadata:grading_definitions:method'] = 'La méthode de classement qui est responsable de la définition.';
$string['privacy:metadata:grading_definitions:name'] = 'Le nom de la définition de classement avancée.';
$string['privacy:metadata:grading_definitions:options'] = 'Certains paramètres de cette définition de classement.';
$string['privacy:metadata:grading_definitions:status'] = 'L\'état de cette définition de classement avancée.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Le moment où la définition de classement a été copiée.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Le moment où la définition de classement a été créée.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Le moment où la définition de classement a été modifiée pour la dernière fois.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'L\'ID de l\'utilisateur qui a créé la définition de classement.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'L\'ID de l\'utilisateur qui a modifié la dernière définition de classement.';
$string['privacy:metadata:grading_instances'] = 'Relevé de cotisation pour un poste graduable évalué par un évaluateur.';
$string['privacy:metadata:grading_instances:feedback'] = 'La rétroaction donnée par l\'utilisateur.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Le format texte de la rétroaction donnée par l\'utilisateur.';
$string['privacy:metadata:grading_instances:raterid'] = 'L\'ID de l\'utilisateur qui a noté l\'instance de classement.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'La note pour l\'instance de classement.';
$string['privacy:metadata:grading_instances:status'] = 'Le statut de cette instance de classement.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Le moment où la dernière instance de classement a été modifiée.';
$string['searchtemplate'] = 'Recherche de formulaires de classement';
$string['searchtemplate_help'] = 'You can search for a grading form and use it as a template for the new grading form here. Simply type words that should appear somewhere in the form name, its description or the form body itself. To search for a phrase, wrap the whole query in double quotes.

By default, only the grading forms that have been saved as shared templates are included in the search results. You can also include all your own grading forms in the search results. This way, you can simply re-use your grading forms without sharing them. Only forms marked as \'Ready for use\' can be re-used this way.';
$string['searchownforms'] = 'inclure mes propres formulaires';
$string['statusdraft'] = 'Projet';
$string['statusready'] = 'Prêt à l\'emploi';
$string['templatedelete'] = 'Supprimer';
$string['templatedeleteconfirm'] = 'Vous allez supprimer le modèle partagé \'{$a}\'. Deleting a template does not affect existing forms that were created from it.';
$string['templateedit'] = 'Modifier';
$string['templatepick'] = 'Utiliser ce modèle';
$string['templatepickconfirm'] = 'Voulez-vous utiliser le formulaire de classement \'{$a->formname}\' as a template for the new grading form in \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Utiliser ce formulaire comme modèle';
$string['templatetypeown'] = 'Forme propre';
$string['templatetypeshared'] = 'Modèle partagé';
$string['templatesource'] = 'Emplacement : {$a->composante} ({$a->zone})';
$string['error:notinrange'] = 'Catégorie non valable \'{$a->grade}\' provided. Grades must be between 0 and {$a->maxgrade}.';
$string['error:gradingunavailable'] = 'La méthode de classement avancée n\'est pas correctement définie. Veuillez vérifier toutes les options de classement du forum dans les paramètres du forum.';
