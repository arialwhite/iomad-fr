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
 * Strings for the marking guide advanced grading plugin
 *
 * @package    gradingform_guide
 * @copyright  2012 Dan Marsden <dan@danmarsden.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Ajouter un commentaire fréquemment utilisé';
$string['additionalcomments'] = 'Commentaires supplémentaires';
$string['additionalcommentsforcriterion'] = 'Commentaires supplémentaires pour le critère, {$a}';
$string['addcriterion'] = 'Ajouter le critère';
$string['alwaysshowdefinition'] = 'Afficher la définition du guide aux élèves';
$string['backtoediting'] = 'Retour à l\'édition';
$string['clicktocopy'] = 'Cliquez pour copier ce texte dans la rétroaction des critères';
$string['clicktoedit'] = 'Cliquez pour modifier';
$string['clicktoeditname'] = 'Cliquez pour modifier le nom du critère';
$string['comment'] = 'Commentaire';
$string['commentpickerforcriterion'] = 'Collecteur de commentaires fréquemment utilisé pour {$a} commentaires supplémentaires';
$string['comments'] = 'Commentaires fréquemment utilisés';
$string['commentsdelete'] = 'Supprimer le commentaire';
$string['commentsempty'] = 'Cliquez pour modifier le commentaire';
$string['commentsmovedown'] = 'Baissez-vous';
$string['commentsmoveup'] = 'En haut';
$string['confirmdeletecriterion'] = 'Voulez-vous vraiment supprimer cet élément?';
$string['confirmdeletelevel'] = 'Voulez-vous vraiment supprimer ce niveau ?';
$string['criterion'] = 'Nom du critère';
$string['criteriondelete'] = 'Supprimer le critère';
$string['criterionempty'] = 'Cliquez pour modifier le critère';
$string['criterionmovedown'] = 'Baissez-vous';
$string['criterionmoveup'] = 'En haut';
$string['criterionname'] = 'Nom du critère';
$string['criterionremark'] = 'Remarque sur le critère {$a}';
$string['definemarkingguide'] = 'Définir le guide de marquage';
$string['description'] = 'Désignation des marchandises';
$string['descriptionmarkers'] = 'Description des marqueurs';
$string['descriptionstudents'] = 'Description pour les étudiants';
$string['err_maxscoreisnegative'] = 'Le score max n\'est pas valide, les valeurs négatives ne sont pas autorisées';
$string['err_maxscorenotnumeric'] = 'La note maximale du critère doit être numérique';
$string['err_nocomment'] = 'Le commentaire ne peut pas être vide';
$string['err_nodescription'] = 'La description de l\'étudiant ne peut pas être vide';
$string['err_nodescriptionmarkers'] = 'La description du marqueur ne peut pas être vide';
$string['err_nomaxscore'] = 'Critère max score ne peut pas être vide';
$string['err_noshortname'] = 'Le nom du critère ne peut pas être vide';
$string['err_shortnametoolong'] = 'Le nom du critère doit être inférieur à 256 caractères';
$string['err_scoreinvalid'] = 'La note donnée à \'{$a->criterianame}\' is not valid, the max score is: {$a->maxscore}';
$string['err_scoreisnegative'] = 'La note donnée à \'{$a->criterianame}\' is not valid, negative values are not allowed';
$string['gradingof'] = '{$a} classement';
$string['guide'] = 'Guide de marquage';
$string['guidemappingexplained'] = 'WARNING: Your marking guide has a maximum grade of <b>{$a->maxscore} points</b> but the maximum grade set in your activity is {$a->modulegrade}  The maximum score set in your marking guide will be scaled to the maximum grade in the module.<br />
    Intermediate scores will be converted respectively and rounded to the nearest available grade.';
$string['guidenotcompleted'] = 'Veuillez fournir une note valide pour chaque critère';
$string['guideoptions'] = 'Options du guide de marquage';
$string['guidestatus'] = 'État actuel du guide de marquage';
$string['hidemarkerdesc'] = 'Masquer les descriptions des critères de marqueur';
$string['hidestudentdesc'] = 'Cacher les descriptions des critères de l\'étudiant';
$string['informationforcriterion'] = '{$a} informations';
$string['insertcomment'] = 'Insérer un commentaire fréquemment utilisé';
$string['maxscore'] = 'Score maximal';
$string['name'] = 'Nom';
$string['needregrademessage'] = 'La définition du guide de notation a été modifiée après l\'obtention du diplôme. L\'étudiant ne peut pas voir ce guide de notation avant de vérifier le guide de notation et de mettre à jour la note.';
$string['outof'] = 'Note sur {$a}';
$string['pluginname'] = 'Guide de marquage';
$string['previewmarkingguide'] = 'Guide de marquage préliminaire';
$string['privacy:metadata:criterionid'] = 'Un identifiant d\'un critère de marquage avancé.';
$string['privacy:metadata:fillingssummary'] = 'Stocke des informations sur un utilisateur\'s grade and feedback for the marking guide.';
$string['privacy:metadata:instanceid'] = 'Un identifiant d\'une catégorie utilisée par une activité.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Indique s\'il faut afficher les descriptions des critères de marqueur';
$string['privacy:metadata:preference:showstudentdesc'] = 'Indique s\'il faut montrer les descriptions des critères de l\'étudiant';
$string['privacy:metadata:remark'] = 'Remarques relatives à ce critère de grade.';
$string['privacy:metadata:score'] = 'Une note pour ce critère de grade.';
$string['regrademessage1'] = 'Vous êtes sur le point d\'enregistrer des modifications à un guide de marquage qui a déjà été utilisé pour le classement. Veuillez indiquer si les notes existantes doivent être revues. Si vous définissez cela, le guide de marquage sera caché aux élèves jusqu\'à ce que leur article soit reclassé.';
$string['regrademessage5'] = 'Vous êtes sur le point d\'enregistrer des modifications importantes à un guide de marquage qui a déjà été utilisé pour le classement. La valeur du manuel de notes sera inchangée, mais le guide de notation sera caché aux élèves jusqu\'à ce que leur article soit reclassé.';
$string['regradeoption0'] = 'Ne pas marquer pour la reclassification';
$string['regradeoption1'] = 'Marque pour la reclassification';
$string['remark_help'] = 'Entrez tout commentaire supplémentaire sur ce critère.';
$string['restoredfromdraft'] = 'REMARQUE: La dernière tentative de noter cette personne n\'a pas été correctement sauvegardée, de sorte que les notes d\'ébauche ont été rétablies. Si vous voulez annuler ces modifications, utilisez le \'Cancel\' button below.';
$string['save'] = 'Enregistrer';
$string['saveguide'] = 'Enregistrer le guide de marquage et le préparer';
$string['saveguidedraft'] = 'Enregistrer en tant que projet';
$string['score'] = 'score';
$string['scoreforcriterion'] = '{$a} score';
$string['score_help'] = 'Saisissez un score pour {$a->critère} entre 0 et {$a->maxscore}.';
$string['showmarkerdesc'] = 'Afficher les descriptions des critères de marqueur';
$string['showmarkspercriterionstudents'] = 'Afficher les notes par critère aux étudiants';
$string['showstudentdesc'] = 'Afficher les descriptions des critères de l\'étudiant';
