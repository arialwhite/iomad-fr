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
 * Strings for component 'question', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmorechoiceblanks'] = 'Couvertures pour {non} plus de choix';
$string['addcategory'] = 'Ajouter une catégorie';
$string['adminreport'] = 'Signalez les problèmes éventuels dans votre base de données de questions.';
$string['advancedsearchoptions'] = 'Options de recherche';
$string['alltries'] = 'Tous les essais';
$string['answers'] = 'Réponses';
$string['availableq'] = 'Disponible ?';
$string['badbase'] = 'Mauvaise base avant **: {$a}**';
$string['behaviour'] = 'Comportement';
$string['broken'] = 'Il s\'agit d\'un "lien cassé", il indique un fichier inexistant.';
$string['byandon'] = 'par <em>{$a->user}</em> sur <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Impossible de copier le fichier de sauvegarde';
$string['cannotcreate'] = 'Impossible de créer une nouvelle entrée dans la table question_tempts';
$string['cannotcreatepath'] = 'Impossible de créer le chemin : {$a}';
$string['cannotdeletebehaviourinuse'] = 'Vous ne pouvez pas supprimer le comportement \'{$a}\'. It is used by question attempts.';
$string['cannotdeletecate'] = 'Vous pouvez\'t delete that category it is the default category for this context.';
$string['cannotdeleteneededbehaviour'] = 'Impossible de supprimer le comportement de la question \'{$a}\'. There are other behaviours installed that rely on it.';
$string['cannotdeleteqtypeinuse'] = 'Vous ne pouvez pas supprimer le type de question \'{$a}\'. There are questions of this type in the question bank.';
$string['cannotdeleteqtypeneeded'] = 'Vous ne pouvez pas supprimer le type de question \'{$a}\'. There are other question types installed that rely on it.';
$string['cannotdeletetopcat'] = 'Les catégories supérieures ne peuvent pas être supprimées.';
$string['cannotedittopcat'] = 'Les catégories supérieures ne peuvent pas être modifiées.';
$string['cannotenable'] = 'Le type de question {$a} ne peut pas être créé directement.';
$string['cannotenablebehaviour'] = 'Le comportement des questions {$a} ne peut pas être utilisé directement. C\'est pour usage interne seulement.';
$string['cannotfindcate'] = 'Impossible de trouver l\'enregistrement de catégorie';
$string['cannotfindquestionfile'] = 'Impossible de trouver le fichier de questions dans zip';
$string['cannotgetdsfordependent'] = 'Impossible d\'obtenir l\'ensemble de données spécifié pour une question dépendante de l\'ensemble de données! (question : {$a->id}, ensemble de données : {$a->item})';
$string['cannotgetdsforquestion'] = 'Impossible d\'obtenir l\'ensemble de données spécifié pour une question calculée! (question : {$a})';
$string['cannothidequestion'] = 'Impossible de cacher la question';
$string['cannotimportformat'] = 'Désolé, l\'importation de ce format n\'est pas encore implémentée!';
$string['cannotinsertquestion'] = 'Impossible d\'insérer une nouvelle question !';
$string['cannotinsertquestioncatecontext'] = 'Impossible d\'insérer la nouvelle catégorie de questions {$a->cat} contexte illégal {$a->ctx}';
$string['cannotloadquestion'] = 'Impossible de charger la question';
$string['cannotmovequestion'] = 'Vous pouvez\'t use this script to move questions that have files associated with them from different areas.';
$string['cannotopenforwriting'] = 'Impossible d\'ouvrir pour écrire : {$a}';
$string['cannotpreview'] = 'Vous pouvez\'t preview these questions!';
$string['cannotread'] = 'Impossible de lire le fichier d\'importation (ou le fichier est vide)';
$string['cannotregradedifferentqtype'] = 'Impossible de se reclasser avec une question de type différent.';
$string['cannotretrieveqcat'] = 'Impossible de récupérer la catégorie de questions';
$string['cannotunhidequestion'] = 'La question a échoué.';
$string['cannotunzip'] = 'Impossible de décompresser le fichier.';
$string['cannotwriteto'] = 'Impossible d\'écrire les questions exportées vers {$a}';
$string['categories'] = 'Catégories';
$string['categorycurrent'] = 'Catégorie actuelle';
$string['categorycurrentuse'] = 'Utiliser cette catégorie';
$string['categorydoesnotexist'] = 'Cette catégorie n\'existe pas';
$string['categoryinfo'] = 'Catégorie info';
$string['categorymove'] = 'La catégorie \'{$a->name}\' contains {$a->count} questions (some of which may be hidden questions or random questions that are still in use in a quiz). Please choose another category to move them to.';
$string['categorymoveto'] = 'Enregistrer dans la catégorie';
$string['categorynamecantbeblank'] = 'Le nom de catégorie ne peut pas être vide.';
$string['categorynamewithcount'] = '{$a->nom} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->nom} [{$a->numéro d\'id}]';
$string['categorynamewithidnumberandcount'] = '{$a->nom} [{$a->idnumber}] ({$a->questioncount})';
$string['clickflag'] = 'Question du drapeau';
$string['clicktoflag'] = 'Marquer cette question pour référence future';
$string['clicktounflag'] = 'Supprimer le drapeau';
$string['clickunflag'] = 'Supprimer le drapeau';
$string['contexterror'] = 'Vous devriez...'t have got here if you\'re not moving a category to another context.';
$string['copy'] = 'Copier à partir de {$a} et modifier les liens.';
$string['created'] = 'Créé';
$string['createdby'] = 'Créé par';
$string['createdmodifiedheader'] = 'Création / dernière sauvegarde';
$string['createnewquestion'] = 'Créer une nouvelle question ...';
$string['cwrqpfs'] = 'Questions aléatoires à choisir parmi les sous-catégories.';
$string['cwrqpfsinfo'] = '<p>During the upgrade to Moodle 1.9 we will separate question categories into
different contexts. Some question categories and questions on your site will have to have their sharing
status changed. This is necessary in the rare case that one or more \'random\' questions in a quiz are set up to select from a mixture of
shared and unshared categories (as is the case on this site). This happens when a \'random\' question is set to select
from subcategories and one or more subcategories have a different sharing status to the parent category in which
the random question is created.</p>
<p>The following question categories, from which \'random\' questions in parent categories select questions from,
will have their sharing status changed to the same sharing status as the category with the \'random\' question in
on upgrading to Moodle 1.9. The following categories will have their sharing status changed. Questions which are
affected will continue to work in all existing quizzes until you remove them from these quizzes.</p>';
$string['cwrqpfsnoprob'] = 'Aucune catégorie de questions dans votre site sont affectées par le \'Random questions selecting questions from sub categories\' issue.';
$string['defaultfor'] = 'Par défaut pour {$a}';
$string['defaultinfofor'] = 'La catégorie par défaut pour les questions partagées dans le contexte \'{$a}\'.';
$string['defaultmarkmustbepositive'] = 'La marque par défaut doit être positive.';
$string['deletecoursecategorywithquestions'] = 'Il y a des questions dans la banque de questions associées à cette catégorie de cours. Si vous continuez, ils seront supprimés. Vous pouvez d\'abord les déplacer en utilisant l\'interface de la banque de questions.';
$string['deletequestioncheck'] = 'Ceci supprimera la question suivante et toutes ses versions:<br /><br />{$a}';
$string['deletequestionscheck'] = 'Ceci supprimera les questions suivantes et toutes leurs versions :<br /><br />{$a}';
$string['deleteselectedquestioncheck'] = 'Cela supprimera les versions sélectionnées de la question suivante :<br /><br />{$a}';
$string['deletequestiontitle'] = 'Supprimer la question ?';
$string['deletequestiontitle_plural'] = 'Supprimer les questions ?';
$string['deleteversiontitle'] = 'Supprimer la version sélectionnée?';
$string['deleteversiontitle_plural'] = 'Supprimer les versions sélectionnées?';
$string['deletingbehaviour'] = 'Supprimer le comportement de la question Autres'{$a}\'';
$string['deletingqtype'] = 'Supprimer le type de question \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Ne correspond à aucune réponse]';
$string['disabled'] = 'Handicapé';
$string['disterror'] = 'La distribution {$a} a causé des problèmes';
$string['donothing'] = 'Don\'t copy or move files or change links.';
$string['editcategories'] = 'Modifier les catégories';
$string['editcategories_help'] = 'Rather than keeping everything in one big list, questions may be arranged into categories and subcategories.

Each category has a context which determines where the questions in the category can be used:

* Activity context - Questions only available in the activity module
* Course context - Questions available in all activity modules in the course
* Course category context - Questions available in all activity modules and courses in the course category
* System context - Questions available in all courses and activities on the site

Categories are also used for random questions, as questions are selected from a particular category.';
$string['editcategories_link'] = 'question/catégorie';
$string['editcategory'] = 'Modifier la catégorie';
$string['editingcategory'] = 'Modifier une catégorie';
$string['editingquestion'] = 'Modifier une question';
$string['editquestion'] = 'Modifier la question';
$string['editthiscategory'] = 'Modifier cette catégorie';
$string['emptyxml'] = 'Erreur inconnue - vide imsmanifest.xml';
$string['enabled'] = 'Activé';
$string['erroraccessingcontext'] = 'Impossible d\'accéder au contexte';
$string['errordeletingquestionsfromcategory'] = 'Erreur lors de la suppression des questions de la catégorie {$a}.';
$string['errorduringpost'] = 'Une erreur s\'est produite lors du post-traitement !';
$string['errorduringpre'] = 'Erreur lors du pré-traitement!';
$string['errorduringproc'] = 'Erreur lors du traitement!';
$string['errorduringregrade'] = 'Impossible de reclasser la question {$a->qid}, allant à l\'état {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Erreur : ne peut copier le fichier {$a}.';
$string['errorfilecannotbemoved'] = 'Erreur : ne peut pas déplacer le fichier {$a}.';
$string['errorfileschanged'] = 'Erreur : les fichiers liés aux questions ont changé depuis l\'affichage du formulaire.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'La question ({$a}) apparaît plusieurs fois avec des poids différents dans différentes positions de l\'essai. Le rapport statistique n \' appuie pas ce point et pourrait rendre les statistiques relatives à cette question peu fiables.';
$string['errormanualgradeoutofrange'] = 'La note {$a->grade} n\'est pas entre 0 et {$a->maxgrade} pour la question {$a->name}. Le score et le commentaire n\'ont pas été enregistrés.';
$string['errormovingquestions'] = 'Erreur lors du déplacement des questions avec les ids {$a}.';
$string['errorpostprocess'] = 'Une erreur s\'est produite lors du post-traitement !';
$string['errorpreprocess'] = 'Erreur lors du pré-traitement!';
$string['errorprocess'] = 'Erreur lors du traitement!';
$string['errorprocessingresponses'] = 'Une erreur s\'est produite lors du traitement de vos réponses ({$a}). Cliquez sur continuer pour revenir à la page sur laquelle vous étiez et essayez à nouveau.';
$string['errorsavingcomment'] = 'Erreur lors de l\'enregistrement de la question {$a->name} dans la base de données.';
$string['errorupdatingattempt'] = 'Erreur lors de la mise à jour {$a->id} dans la base de données.';
$string['eventqbankdisabled'] = 'Questions plugin banque désactivé';
$string['eventqbankenabled'] = 'Greffon de la banque de questions activé';
$string['eventquestioncategorycreated'] = 'Catégorie de questions créée';
$string['eventquestioncategorydeleted'] = 'Catégorie de questions supprimée';
$string['eventquestioncategorymoved'] = 'Catégorie de questions déplacée';
$string['eventquestioncategoryupdated'] = 'Catégorie de questions actualisées';
$string['eventquestioncategoryviewed'] = 'Catégorie de questions vue';
$string['eventquestioncreated'] = 'Question créée';
$string['eventquestiondeleted'] = 'Question supprimée';
$string['eventquestionmoved'] = 'Question posée';
$string['eventquestionviewed'] = 'Question vue';
$string['eventquestionsexported'] = 'Questions exportées';
$string['eventquestionsimported'] = 'Questions importées';
$string['eventquestionupdated'] = 'Question mise à jour';
$string['export'] = 'Exportation';
$string['exportasxml'] = 'Exporter sous Moodle XML';
$string['exportcategory'] = 'Catégorie d \' exportation';
$string['exportcategory_help'] = 'This setting determines the category from which the exported questions will be taken.

Certain import formats, such as GIFT and Moodle XML, permit category and context data to be included in the export file, enabling them to (optionally) be recreated on import. If required, the appropriate checkboxes should be ticked.';
$string['exporterror'] = 'Les erreurs se produisent lors de l\'exportation!';
$string['exportfilename'] = 'questions';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Téléchargez cette question au format XML Moodle';
$string['exportquestions'] = 'Exporter les questions au dossier';
$string['exportquestions_help'] = 'Cette fonction permet d\'exporter une catégorie complète (et toute sous-catégorie) de questions à déposer. Veuillez noter que, selon le format de fichier sélectionné, certaines données de questions et certains types de questions peuvent ne pas être exportés.';
$string['exportquestions_link'] = 'question/exportation';
$string['filecantmovefrom'] = 'Les fichiers de questions ne peuvent pas être déplacés parce que vous n\'avez pas la permission de supprimer les fichiers de l\'endroit où vous essayez de déplacer les questions.';
$string['filecantmoveto'] = 'Les fichiers de questions ne peuvent pas être déplacés ou copiés car vous n\'avez pas la permission d\'ajouter des fichiers à l\'endroit où vous essayez de déplacer les questions.';
$string['fileformat'] = 'Format de fichier';
$string['filesareacourse'] = 'la zone des fichiers de cours';
$string['filesareasite'] = 'la zone des fichiers du site';
$string['filestomove'] = 'Déplacer / copier des fichiers vers {$a} ?';
$string['filterbytags'] = 'Filtrer par tags...';
$string['firsttry'] = 'Première tentative';
$string['flagged'] = 'Flaggué';
$string['flagthisquestion'] = 'Marquer cette question';
$string['formquestionnotinids'] = 'Formulaire contenu question qui n\'est pas en question';
$string['fractionsnomax'] = 'Une des réponses devrait avoir une note de 100 %, il est donc possible d\'obtenir toutes les notes pour cette question.';
$string['getcategoryfromfile'] = 'Get category from file';
$string['getcontextfromfile'] = 'Get context from file';
$string['changepublishstatuscat'] = '* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * La catégorie « {$a->name} »</a> dans le cours « {$a->namecourse} » sera modifiée de {$a->changement de} à {$a->changement de}.';
$string['chooseqtypetoadd'] = 'Choisissez un type de question à ajouter';
$string['editquestions'] = 'Modifier les questions';
$string['idnumber'] = 'Numéro d\'identification';
$string['idnumber_help'] = 'S\'il est utilisé, le numéro d\'identification doit être unique dans chaque catégorie de questions. Il fournit une autre façon d\'identifier une question qui est parfois utile, mais qui peut généralement être laissée en blanc.';
$string['ignorebroken'] = 'Ignorer les liens brisés';
$string['impossiblechar'] = 'Caractère impossible {$a} détecté comme caractère entre parenthèses';
$string['import'] = 'Importation';
$string['importcategory'] = 'Catégorie d\'importation';
$string['importcategory_help'] = 'This setting determines the category into which the imported questions will go.

Certain import formats, such as GIFT and Moodle XML, may include category and context data in the import file. To make use of this data, rather than the selected category, the appropriate checkboxes should be ticked. If categories specified in the import file do not exist, they will be created.';
$string['importerror'] = 'Une erreur s\'est produite lors du traitement des importations';
$string['importerrorquestion'] = 'Erreur lors de l\'importation de la question';
$string['importingquestions'] = 'Importation de questions {$a} dans le fichier';
$string['importparseerror'] = 'Erreur(s) trouvée(s) l\'analyse du fichier d\'importation. Aucune question n\'a été importée. Pour importer les bonnes questions essayez de nouveau de définir \'Stop on error\' to \'No\'';
$string['importquestions'] = 'Importer les questions à partir du fichier';
$string['importquestions_help'] = 'Cette fonction permet d\'importer des questions dans divers formats via un fichier texte. Notez que le fichier doit utiliser l\'encodage UTF-8.';
$string['importquestions_link'] = 'question/importation';
$string['importwrongfileencoding'] = 'Le fichier que vous avez sélectionné n\'utilise pas l\'encodage de caractères UTF-8. Les fichiers {$a} doivent utiliser UTF-8.';
$string['importwrongfiletype'] = 'Le type de fichier que vous avez sélectionné ({$a->type réel}) ne correspond pas au type attendu par ce format d\'importation ({$a->type prévu}).';
$string['invalidarg'] = 'Aucun argument valable fourni ou mauvaise configuration du serveur';
$string['invalidcategoryidforparent'] = 'Indicatif de catégorie invalide pour le parent!';
$string['invalidcategoryidtomove'] = 'Indicatif de catégorie invalide à déplacer!';
$string['invalidconfirm'] = 'La chaîne de confirmation était incorrecte';
$string['invalidcontextinhasanyquestions'] = 'Contexte non valide passé à question_context_has_any_questions.';
$string['invalidgrade'] = 'Les grades ({$a}) ne correspondent pas aux options de grade - question ignorée.';
$string['invalidgradequestion'] = 'Les grades ({$a->grades}) ne correspondent pas aux options de grade - question \'{$a->question}\' skipped.';
$string['invalidpenalty'] = 'Peine non valide';
$string['invalidwizardpage'] = 'Une page d\'assistant incorrecte ou pas spécifiée !';
$string['lastmodifiedby'] = 'Dernière modification par';
$string['lasttry'] = 'Dernier essai';
$string['linkedfiledoesntexist'] = 'Le fichier lié {$a} does\'t exist';
$string['makechildof'] = 'Faire enfant de \'{$a}\'';
$string['maketoplevelitem'] = 'Passer au niveau supérieur';
$string['manualgradeinvalidformat'] = 'Ce n\'est pas un nombre valide.';
$string['matchgrades'] = 'Qualités correspondantes';
$string['matchgradeserror'] = 'Erreur si la note n\'est pas listée';
$string['matchgradesnearest'] = 'Classe la plus proche si elle n\'est pas indiquée';
$string['matchgrades_help'] = 'Imported grades must match one of the fixed list of valid grades - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (also negative values). If not, there are two options:

*  Error if grade not listed - If a question contains any grades not found in the list an error is displayed and that question will not be imported
* Nearest grade if not listed - If a grade is found that does not match a value in the list, the grade is changed to the closest matching value in the list ';
$string['missingcourseorcmid'] = 'Besoin de fournir des cours ou cmid pour imprimer_question.';
$string['missingcourseorcmidtolink'] = 'Besoin de fournir des cours ou cmid pour obtenir_question_edit_link.';
$string['missingimportantcode'] = 'Ce type de question manque le code important : {$a}.';
$string['missingoption'] = 'La question de la fermeture {$a} manque ses options';
$string['modified'] = 'Dernier enregistrement';
$string['move'] = 'Déplacer de {$a} et modifier les liens.';
$string['movecategory'] = 'Catégorie de déplacement';
$string['movedquestionsandcategories'] = 'Questions déplacées et catégories de questions de {$a->oldplace} à {$a->newplace}.';
$string['movelinksonly'] = 'Il suffit de changer où les liens point à, ne pas déplacer ou copier des fichiers.';
$string['moveq'] = 'Déplacer les questions';
$string['moveqtoanothercontext'] = 'Déplacer la question dans un autre contexte.';
$string['moveto'] = 'Déplacer vers';
$string['movingcategory'] = 'Catégorie de déplacement';
$string['movingcategoryandfiles'] = 'Voulez-vous vraiment déplacer la catégorie {$a->name} et toutes les catégories d\'enfants vers le contexte pour « {$a->contextto} »?<br /> Nous avons détecté des fichiers {$a->urlcount} liés à partir de questions dans {$a->fromarename}, souhaitez-vous les copier ou les déplacer vers {$a->arename}?';
$string['movingcategorynofiles'] = 'Voulez-vous vraiment déplacer la catégorie « {$a->name} » et toutes les catégories d\'enfants dans le contexte de « {$a->contextto} »?';
$string['movingquestions'] = 'Déplacement des questions et des fichiers';
$string['movingquestionsandfiles'] = 'Voulez-vous vraiment déplacer les questions {$a->questions} vers le contexte pour <strong>"{$a->tocontext}"</strong>?<br /> Nous avons détecté des fichiers <strong>{$a->urlcount} liés à partir de ces questions dans {$a->fromarename}, souhaitez-vous les copier ou les déplacer dans {$a->toarename}?';
$string['movingquestionsnofiles'] = 'Voulez-vous vraiment déplacer les questions {$a->questions} vers le contexte pour <strong>"{$a->tocontext}"</strong>?<br /> Il n\'y a <strong>aucun fichier</strong> lié à partir de ces questions dans {$a->fromarename}.';
$string['needtochoosecat'] = 'Vous devez choisir une catégorie pour déplacer cette question ou appuyez sur \'cancel\'.';
$string['nocate'] = 'Pas de cette catégorie {$a}!';
$string['nopermissionadd'] = 'Vous faites't have permission to add questions here.';
$string['nopermissionedit'] = 'Vous faites't have permission to edit questions from here.';
$string['noprobs'] = 'Aucun problème dans votre base de données de questions.';
$string['noquestions'] = 'Aucune question ne pouvait être exportée. Assurez-vous que vous avez sélectionné une catégorie à exporter qui contient des questions.';
$string['noquestionsinfile'] = 'Il n\'y a aucune question dans le fichier d\'importation';
$string['notagfiltersapplied'] = 'Pas de filtres à étiquettes appliqués';
$string['notenoughanswers'] = 'Ce type de question nécessite au moins {$a} réponses';
$string['notenoughdatatoeditaquestion'] = 'Ni l\'identifiant de question, ni l\'identifiant de catégorie et le type de question n\'ont été spécifiés.';
$string['notenoughdatatomovequestions'] = 'Vous devez fournir les identifiants de questions que vous voulez déplacer.';
$string['novirtualquestiontype'] = 'Pas de type de question virtuelle pour le type de question {$a}';
$string['numqas'] = 'Non. tentatives de questions';
$string['numquestions'] = 'Questions';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} caché brouillon de +{$a->numdrad})';
$string['page-question-x'] = 'Toute page de questions';
$string['page-question-edit'] = 'Page d\'édition des questions';
$string['page-question-category'] = 'Page de la catégorie des questions';
$string['page-question-import'] = 'Page d\'importation des questions';
$string['page-question-export'] = 'Question export page';
$string['parentcategory'] = 'Catégorie de parents';
$string['parentcategory_help'] = 'La catégorie mère est celle dans laquelle la nouvelle catégorie sera placée. «Top» signifie que cette catégorie ne fait partie d\'aucune autre catégorie. Les contextes de catégorie sont indiqués en caractères gras. Il doit y avoir au moins une catégorie dans chaque contexte.';
$string['parentcategory_link'] = 'question/catégorie';
$string['parenthesisinproperclose'] = 'La parenthèse avant ** n\'est pas correctement fermée dans {$a}* *';
$string['parenthesisinproperstart'] = 'La parenthèse avant ** n\'est pas correctement démarrée dans {$a}* *';
$string['parsingquestions'] = 'Analyser les questions du fichier d\'importation.';
$string['penaltyfactor'] = 'Facteur de pénalité';
$string['penaltyfactor_help'] = 'This setting determines what fraction of the achieved score is subtracted for each wrong response. It is only applicable if the quiz is run in adaptive mode.

The penalty factor should be a number between 0 and 1. A penalty factor of 1 means that the student has to get the answer right in his first response to get any credit for it at all. A penalty factor of 0 means the student can try as often as he likes and still get the full marks.';
$string['permissionedit'] = 'Modifier cette question';
$string['permissionmove'] = 'Déplacer cette question';
$string['permissionsaveasnew'] = 'Enregistrer ceci comme une nouvelle question';
$string['permissionto'] = 'Vous avez la permission de :';
$string['published'] = 'partagé';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Question "{$a->name}" ({$a->qtype})</a> est dans cette catégorie de questions mais est également utilisé dans <a href="{$a->qurl}">quiz "{$a->quizname}"</a> dans un autre cours "{$a->coursename}".';
$string['questionbank'] = 'Banque de questions';
$string['questionbanknavigation'] = 'Questions de navigation tertiaire';
$string['questioncategories'] = 'Catégories de questions';
$string['questioncategory'] = 'Catégorie de questions';
$string['questioncatsfor'] = 'Catégories de questions pour \'{$a}\'';
$string['questiondoesnotexist'] = 'Cette question n\'existe pas';
$string['questionname'] = 'Nom de la question';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionno'] = 'Question {$a}';
$string['questionsaveerror'] = 'Des erreurs se produisent lors de l\'enregistrement de la question - ({$a})';
$string['questionsinuse'] = '* Dénote des questions qui peuvent\'t be deleted because they are in use. Instead, they will be hidden in the question bank unless you set \'Show hidden questions\' to \'Yes\'.';
$string['questionsmovedto'] = 'Les questions toujours en usage sont passées à « {$a} » dans la catégorie des cours parent.';
$string['questionsrescuedfrom'] = 'Questions enregistrées depuis le contexte {$a}.';
$string['questionsrescuedfrominfo'] = 'Ces questions (dont certaines peuvent être cachées) ont été sauvegardées lorsque le contexte {$a} a été supprimé parce qu\'elles sont encore utilisées par certains quiz ou d\'autres activités.';
$string['questiontags'] = 'Balises des questions';
$string['questiontype'] = 'Type de question';
$string['questionuse'] = 'Utiliser la question dans cette activité';
$string['questionvariant'] = 'Variante des questions';
$string['reviewresponse'] = 'Réexamen de la réponse';
$string['save'] = 'Enregistrer';
$string['savechangesandcontinueediting'] = 'Enregistrer les modifications et continuer l\'édition';
$string['saveflags'] = 'Enregistrer l\'état des drapeaux';
$string['selectacategory'] = 'Sélectionnez une catégorie & #160;:';
$string['selectaqtypefordescription'] = 'Sélectionnez un type de question pour voir sa description.';
$string['selectcategoryabove'] = 'Sélectionnez une catégorie ci-dessus';
$string['selectquestionsforbulk'] = 'Sélectionnez les questions pour les actions en vrac';
$string['shareincontext'] = 'Partager dans le contexte pour {$a}';
$string['stoponerror'] = 'Arrêter l\'erreur';
$string['stoponerror_help'] = 'Ce paramètre permet de déterminer si le processus d\'importation s\'arrête lorsqu\'une erreur est détectée, si aucune question n\'est importée ou si des questions contenant des erreurs sont ignorées et des questions valides sont importées.';
$string['tofilecategory'] = 'Catégorie d\'écriture au fichier';
$string['tofilecontext'] = 'Écrire le contexte dans le fichier';
$string['topfor'] = 'Haut pour {$a}';
$string['uninstallbehaviour'] = 'Désinstallez ce comportement de question.';
$string['uninstallqtype'] = 'Désinstallez ce type de question.';
$string['unknown'] = 'Inconnu';
$string['unknownquestiontype'] = 'Type de question inconnu : {$a}.';
$string['unknowntolerance'] = 'Type de tolérance inconnu {$a}';
$string['unpublished'] = 'non partagés';
$string['upgradeproblemcategoryloop'] = 'Problème détecté lors de la mise à niveau des catégories de questions. Il y a une boucle dans l\'arbre de catégorie. Les ids de catégorie touchés sont {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Impossible de mettre à jour la catégorie de questions {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Problème détecté lors de la mise à niveau des catégories de questions. La catégorie {$a->id} fait référence au parent {$a->parent}, qui n\'existe pas. Le parent a changé pour résoudre le problème.';
$string['wrongprefix'] = 'Préfixe de nom mal formaté {$a}';
$string['youmustselectaqtype'] = 'Vous devez sélectionner un type de question.';
$string['yourfileshoulddownload'] = 'Votre fichier d\'exportation devrait commencer à télécharger sous peu. Sinon, veuillez cliquer ici </a>.';

$string['action'] = 'Décision';
$string['addanotherhint'] = 'Ajouter un autre indice';
$string['answer'] = 'Réponse';
$string['answersaved'] = 'Réponse enregistrée';
$string['answerx'] = 'Réponse {$a}';
$string['attemptfinished'] = 'Tentative terminée';
$string['attemptfinishedsubmitting'] = 'Tentative terminée : {$a}';
$string['behaviourbeingused'] = 'Comportement utilisé: {$a}';
$string['cannotloadquestion'] = 'Impossible de charger la question';
$string['cannotpreview'] = 'Vous pouvez\'t preview these questions!';
$string['category'] = 'Catégorie';
$string['changeoptions'] = 'Modifier les options';
$string['attemptoptions'] = 'Options de tentative';
$string['displayoptions'] = 'Afficher les options';
$string['check'] = 'Vérification';
$string['clearwrongparts'] = 'Effacer les réponses incorrectes';
$string['closepreview'] = 'Fermer l\'aperçu';
$string['combinedfeedback'] = 'Réaction combinée';
$string['commented'] = 'Commentaire : {$a}';
$string['comment'] = 'Commentaire';
$string['commentormark'] = 'Faire un commentaire ou une marque de remplacement';
$string['comments'] = 'Commentaires';
$string['commentx'] = 'Commentaire : {$a}';
$string['complete'] = 'Terminé';
$string['contexterror'] = 'Vous devriez...'t have got here if you\'re not moving a category to another context.';
$string['correct'] = 'Corrigé';
$string['correctfeedback'] = 'Pour toute réponse correcte';
$string['correctfeedbackdefault'] = 'Votre réponse est correcte.';
$string['decimalplacesingrades'] = 'Places décimales dans les grades';
$string['defaultmark'] = 'Marque par défaut';
$string['errorsavingflags'] = 'Erreur lors de la sauvegarde de l\'état du drapeau.';
$string['feedback'] = 'Commentaires';
$string['fieldinquestion'] = 'Nom de domaine {$a->identificateur de question}';
$string['fieldinquestionpre'] = '{$a->identificateur de question} Nom de domaine';
$string['fillincorrect'] = 'Remplissez les réponses correctes';
$string['generalfeedback'] = 'Commentaires généraux';
$string['generalfeedback_help'] = 'General feedback is shown to the student after they have completed the question. Unlike specific feedback, which depends on the question type and what response the student gave, the same general feedback text is shown to all students.

You can use the general feedback to give students a fully worked answer and perhaps a link to more information they can use if they did not understand the questions.';
$string['hintn'] = 'Conseil {non}';
$string['hintnoptions'] = 'Conseil {non} options';
$string['hinttext'] = 'Texte en ligne';
$string['howquestionsbehave'] = 'Comment les questions se comportent';
$string['howquestionsbehave_help'] = 'Les étudiants peuvent interagir avec les questions du quiz de différentes façons. Par exemple, vous pouvez souhaiter que les élèves répondent à chaque question et qu\'ils soumettent ensuite l\'ensemble du questionnaire avant que quelque chose ne soit noté ou qu\'ils reçoivent des commentaires. Ce serait \'Deferred feedback\' mode.

Alternatively, you may wish for students to submit each question as they go along to get immediate feedback, and if they do not get it right immediately, have another try for fewer marks. That would be \'Interactive with multiple tries\' mode.

Those are probably the two most commonly used modes of behaviour. ';
$string['howquestionsbehave_link'] = 'question/comportement';
$string['importfromcoursefiles'] = '... ou choisissez un fichier de cours à importer.';
$string['importfromupload'] = 'Sélectionnez un fichier à télécharger ...';
$string['includesubcategories'] = 'Afficher aussi les questions des sous-catégories';
$string['incorrect'] = 'Erreur';
$string['incorrectfeedback'] = 'Pour toute réponse incorrecte';
$string['incorrectfeedbackdefault'] = 'Votre réponse est incorrecte.';
$string['information'] = 'Informations';
$string['invalidanswer'] = 'Réponse incomplète';
$string['makecopy'] = 'Copier';
$string['manualgradeoutofrange'] = 'Cette note est en dehors de la plage valide.';
$string['manuallygraded'] = 'Classé manuellement {$a->mark} avec commentaire: {$a->comment}';
$string['mark'] = 'Marquer';
$string['markedoutof'] = 'Marqué hors de';
$string['markedoutofmax'] = 'Marqué sur {$a}';
$string['markoutofmax'] = 'Marquer {$a->mark} sur {$a->max}';
$string['marks'] = 'Marques';
$string['noconditionspecified'] = 'Veuillez préciser une condition';
$string['noresponse'] = '[Sans réponse]';
$string['notanswered'] = 'Non répondu';
$string['notgraded'] = 'Non classé';
$string['notshown'] = 'Non montré';
$string['notyetanswered'] = 'Pas encore répondu';
$string['notchanged'] = 'Pas changé depuis la dernière tentative';
$string['notyourpreview'] = 'Cet aperçu ne vous appartient pas';
$string['options'] = 'Options';
$string['parent'] = 'Parent';
$string['partiallycorrect'] = 'Partiellement correct';
$string['partiallycorrectfeedback'] = 'Pour toute réponse partiellement correcte';
$string['partiallycorrectfeedbackdefault'] = 'Votre réponse est en partie correcte.';
$string['penaltyforeachincorrecttry'] = 'Pénalité pour chaque essai incorrect';
$string['penaltyforeachincorrecttry_help'] = 'Lorsque les questions sont exécutées en utilisant le \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour, so that the student will have several tries to get the question right, then this option controls how much they are penalised for each incorrect try.

The penalty is a proportion of the total question grade, so if the question is worth three marks, and the penalty is 0.3333333, then the student will score 3 if they get the question right first time, 2 if they get it right second try, and 1 of they get it right on the third try.

For some multi-part questions this scoring logic is applied separately to each part of the question. The details depend on the question type and can be complicated, but the principle is to give students credit for the knowledge they have demonstrated as fairly as possible.';
$string['previewquestion'] = 'Prévisualiser la question: {$a}';
$string['privacy:metadata:database:question'] = 'Les détails sur une question spécifique.';
$string['privacy:metadata:database:question:createdby'] = 'La personne qui a créé la question.';
$string['privacy:metadata:database:question:generalfeedback'] = 'La rétroaction générale pour cette question.';
$string['privacy:metadata:database:question:modifiedby'] = 'La personne qui a mis à jour la dernière question.';
$string['privacy:metadata:database:question:name'] = 'Le nom de la question.';
$string['privacy:metadata:database:question:questiontext'] = 'Le texte de la question.';
$string['privacy:metadata:database:question:timecreated'] = 'La date et l\'heure de la création de cette question.';
$string['privacy:metadata:database:question:timemodified'] = 'Date et heure de mise à jour de cette question.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Les étapes de la tentative de questions peuvent avoir des données supplémentaires spécifiques à cette étape. Les données sont stockées dans la table step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Nom de l\'élément de données.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'La valeur du poste de données.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Chaque question a un certain nombre d\'étapes pour indiquer les différentes phases du début à la fin jusqu\'au marquage. Cette table conserve les informations pour chacune de ces étapes.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'La note qui a été attribuée à cette tentative de question a été évaluée à une valeur sur 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'L\'état de cette question tente une étape à la fin de la transition.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'La date et l\'heure du début de la transition.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'L\'utilisateur qui a effectué la transition étape.';
$string['privacy:metadata:database:question_attempts'] = 'L\'information sur une tentative à une question précise.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Une indication que l\'utilisateur a signalé cette question dans la tentative.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Résumé de la réponse à la question.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Le moment où la tentative de questions a été mise à jour.';
$string['privacy:metadata:database:question_bank_entries'] = 'Les détails d\'une entrée spécifique de banque de questions.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'La personne qui possède la banque de questions.';
$string['privacy:metadata:link:qbehaviour'] = 'Le sous-système Question utilise le type de plugin Question Comportement.';
$string['privacy:metadata:link:qformat'] = 'Le sous-système Question utilise le type de plugin Format des questions pour importer et exporter des questions dans différents formats.';
$string['privacy:metadata:link:qtype'] = 'Le sous-système Question interagit avec le type de plugin Question Type qui contient les différents types de questions.';
$string['questionbehaviouradminsetting'] = 'Questionner les paramètres du comportement';
$string['questionbehavioursdisabled'] = 'Questionner les comportements à désactiver';
$string['questionbehavioursdisabledexplained'] = 'Saisissez une liste de comportements séparés par des virgules que vous ne voulez pas afficher dans le menu déroulant.';
$string['questionbehavioursorder'] = 'Ordre des comportements';
$string['questionbehavioursorderexplained'] = 'Saisissez une liste de comportements séparés par des virgules dans l\'ordre où vous voulez qu\'ils apparaissent dans le menu déroulant.';
$string['questiondefaultssave'] = 'Enregistrer les options de questions en tant que préférence utilisateur par défaut';
$string['questiondefaultssave_desc'] = 'Indique si des options de questionnement telles que \'Default mark\', \'One or multiple answers?\' etc. should be saved as user preferences when the edit question form is submitted, for use as defaults the next time the user accesses the form.';
$string['questionediting'] = 'Révision des questions';
$string['questionediting_desc'] = 'Ces paramètres s\'appliquent à la modification des formulaires de questions.';
$string['questionidmismatch'] = 'Identificateurs des questions';
$string['questionformtagheader'] = 'Balises {$a}';
$string['questionname'] = 'Nom de la question';
$string['questionnamecopy'] = '{$a} (copie)';
$string['questionpreviewdefaults'] = 'Par défaut de l\'aperçu des questions';
$string['questionpreviewdefaults_desc'] = 'Ces valeurs par défaut sont utilisées lorsqu\'un utilisateur prévisualise une question dans la banque de questions. Une fois qu\'un utilisateur a prévisualiser une question, ses préférences personnelles sont stockées en tant que préférences de l\'utilisateur.';
$string['questions'] = 'Questions';
$string['questionx'] = 'Question {$a}';
$string['questiontext'] = 'Texte de la question';
$string['requiresgrading'] = 'Nécessite un classement';
$string['responsehistory'] = 'Historique des réponses';
$string['restart'] = 'Recommencer';
$string['restartwiththeseoptions'] = 'Enregistrer les options d\'aperçu et recommencer';
$string['restoremultipletopcats'] = 'Le fichier de sauvegarde contient plusieurs catégories de questions de haut niveau pour le contexte {$a}.';
$string['rightanswer'] = 'Bonne réponse';
$string['rightanswer_help'] = 'Un résumé automatiquement généré de la réponse correcte. Cela peut être limité, de sorte que vous pouvez envisager d\'expliquer la bonne solution dans la rétroaction générale pour la question, et de désactiver cette option.';
$string['saved'] = 'Sauvé : {$a}';
$string['settingsformultipletries'] = 'Essais multiples';
$string['showhidden'] = 'Afficher les questions cachées';
$string['shortversioninfo'] = 'v{$a->version} (de {$a->latestversion})';
$string['shortversioninfolatest'] = 'v{$a->version} (dernier)';
$string['showmarkandmax'] = 'Afficher la marque et max';
$string['showmaxmarkonly'] = 'Afficher la marque maximale seulement';
$string['showquestiontext'] = 'Afficher le texte de la question dans la liste de questions?';
$string['showquestiontext_full'] = 'Oui, avec des images, des médias, etc.';
$string['showquestiontext_off'] = 'No';
$string['showquestiontext_plain'] = 'Oui, texte seulement';
$string['shown'] = 'Montré';
$string['shownumpartscorrect'] = 'Afficher le nombre de réponses correctes';
$string['shownumpartscorrectwhenfinished'] = 'Afficher le nombre de réponses correctes une fois la question terminée';
$string['specificfeedback'] = 'Commentaires spécifiques';
$string['specificfeedback_help'] = 'La rétroaction dépend de la réponse donnée par l\'élève.';
$string['started'] = 'Commencé';
$string['state'] = 'État';
$string['step'] = 'Étape';
$string['steps'] = 'Étapes';
$string['submissionoutofsequence'] = 'Accès hors séquence. Veuillez ne pas cliquer sur le bouton arrière lorsque vous travaillez sur les questions.';
$string['submissionoutofsequencefriendlymessage'] = "Vous avez entré des données en dehors de la séquence normale. Cela peut se produire si vous utilisez les boutons Back ou Forward de votre navigateur; s'il vous plaît ne pas utiliser ces pendant le test. Il peut également arriver si vous cliquez sur quelque chose pendant qu'une page est en chargement. Cliquez sur <strong>Continuer</strong> pour reprendre.";
$string['submit'] = 'Soumettre';
$string['submitandfinish'] = 'Soumettre et terminer';
$string['submitted'] = 'Soumettre : {$a}';
$string['tagarea_question'] = 'Questions';
$string['technicalinfo'] = 'Informations techniques';
$string['technicalinfo_help'] = 'Ces informations techniques ne sont probablement utiles que pour les développeurs travaillant sur de nouveaux types de questions. Il peut également être utile pour essayer de diagnostiquer des problèmes avec des questions.';
$string['technicalinfominfraction'] = 'Fraction minimale : {$a}';
$string['technicalinfomaxfraction'] = 'Fraction maximale : {$a}';
$string['technicalinfoquestionsummary'] = 'Résumé des questions : {$a}';
$string['technicalinforesponsesummary'] = 'Résumé de la réponse : {$a}';
$string['technicalinforightsummary'] = 'Résumé de la bonne réponse : {$a}';
$string['technicalinfostate'] = 'État des questions : {$a}';
$string['technicalinfovariant'] = 'Variante de la question : {$a}';
$string['unknownbehaviour'] = 'Comportement inconnu: {$a}';
$string['unknownorunhandledtype'] = 'Type de question inconnu ou non traité : {$a}';
$string['unknownquestion'] = 'Question inconnue : {$a}.';
$string['unknownquestioncatregory'] = 'Catégorie de questions inconnues : {$a}.';
$string['unknownquestiontype'] = 'Type de question inconnu : {$a}.';
$string['unusedcategorydeleted'] = 'Cette catégorie a été supprimée parce que, après avoir supprimé le cours, ses questions étaient't used any more.';
$string['updatedisplayoptions'] = 'Mettre à jour les options d\'affichage';
$string['whethercorrect'] = 'Indique si la réponse est correcte';
$string['whethercorrect_help'] = 'Ceci couvre à la fois la description textuelle \'Correct\', \'Partially correct\' or \'Incorrect\', and any coloured highlighting that conveys the same information.';
$string['whichtries'] = 'Qui essaie';
$string['withselected'] = 'Avec sélection';
$string['xoutofmax'] = '{$a->mark} sur {$a->max}';
$string['yougotnright'] = 'Vous avez correctement sélectionné {$a->num}.';
$string['qbanknotfound'] = 'Les'{$a}\' question bank plugin doesn\'t exist or is not recognised.';
$string['noquestionbanks'] = 'Pas question plugin de banque trouvé.';
$string['questionloaderror'] = 'Impossible de charger les options de questions.';
$string['version_selection'] = 'Version {$a->version}';
$string['versioninfo'] = 'Version {$a->version} (de {$a->latestversion})';
$string['versioninfolatest'] = 'Version {$a->version} (dernière)';
$string['question_version'] = 'Version des questions';
