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
 * Language file for plugin gradingform_rubric
 *
 * @package    gradingform_rubric
 * @copyright  2011 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Ajouter le critère';
$string['additionalfeedback'] = 'Commentaires supplémentaires';
$string['alwaysshowdefinition'] = 'Permettre aux utilisateurs de prévisualiser la rubrique (autrement elle ne sera affichée qu\'après le classement)';
$string['backtoediting'] = 'Retour à l\'édition';
$string['confirmdeletecriterion'] = 'Voulez-vous vraiment supprimer ce critère?';
$string['confirmdeletelevel'] = 'Voulez-vous vraiment supprimer ce niveau ?';
$string['criterion'] = 'Critère {$a}';
$string['criterionaddlevel'] = 'Ajouter le niveau';
$string['criteriondelete'] = 'Supprimer le critère';
$string['criterionduplicate'] = 'Critère du double';
$string['criterionempty'] = 'Cliquez pour modifier le critère';
$string['criterionmovedown'] = 'Baissez-vous';
$string['criterionmoveup'] = 'En haut';
$string['criterionremark'] = 'Remarque pour le critère {$a->description} : {$a->remark}';
$string['definerubric'] = 'Définir la rubrique';
$string['description'] = 'Désignation des marchandises';
$string['enableremarks'] = 'Permettre au classificateur d\'ajouter des remarques de texte pour chaque critère';
$string['err_mintwolevels'] = 'Chaque critère doit avoir au moins deux niveaux';
$string['err_nocriteria'] = 'Rubrique doit contenir au moins un critère';
$string['err_nodefinition'] = 'La définition de niveau ne peut pas être vide';
$string['err_nodescription'] = 'La description du critère ne peut pas être vide';
$string['err_novariations'] = 'Les niveaux de critère ne peuvent pas tous valoir le même nombre de points';
$string['err_scoreformat'] = 'Nombre de points pour chaque niveau doit être un nombre valide';
$string['err_totalscore'] = 'Le nombre maximal de points possible lorsqu\'il est classé par la rubrique doit être supérieur à zéro.';
$string['gradingof'] = '{$a} classement';
$string['level'] = 'Niveau {$a->définition}, {$a->score} points.';
$string['leveldelete'] = 'Supprimer le niveau {$a}';
$string['leveldefinition'] = 'Définition du niveau {$a}';
$string['levelempty'] = 'Cliquez pour modifier le niveau';
$string['levelsgroup'] = 'Groupe des niveaux';
$string['lockzeropoints'] = 'Calculer la note minimale de la note minimale réalisable pour la rubrique';
$string['lockzeropoints_help'] = 'Ce réglage ne s\'applique que si la somme du nombre minimal de points pour chaque critère est supérieure à 0. Si cochée, la note minimale de l\'activité sera la note minimale réalisable pour la rubrique. Si l\'activité n\'est pas traitée, la note minimale possible pour la rubrique sera cartographiée à la note minimale disponible pour l\'activité (qui est de 0 sauf si une échelle est utilisée).';
$string['name'] = 'Nom';
$string['needregrademessage'] = 'La définition de la rubrique a été modifiée après l\'obtention du diplôme. L\'étudiant ne peut pas voir cette rubrique avant de vérifier la rubrique et de mettre à jour la note.';
$string['notset'] = 'Non défini';
$string['pluginname'] = 'Rubrique';
$string['pointsvalue'] = '{$a} points';
$string['previewrubric'] = 'Aperçu de la rubrique';
$string['privacy:metadata:criterionid'] = 'Un identifiant pour un critère spécifique en cours de notation.';
$string['privacy:metadata:fillingssummary'] = 'Stocke des informations sur l\'utilisateur\'s grade created by the rubric.';
$string['privacy:metadata:instanceid'] = 'Un identifiant relatif à une note dans une activité.';
$string['privacy:metadata:levelid'] = 'Le niveau obtenu dans la rubrique.';
$string['privacy:metadata:remark'] = 'Remarques relatives au critère de la rubrique à évaluer.';
$string['regrademessage1'] = 'Vous êtes sur le point d\'enregistrer des modifications à une rubrique qui a déjà été utilisée pour le classement. Veuillez indiquer si les notes existantes doivent être revues. Si vous définissez cela, la rubrique sera cachée aux étudiants jusqu\'à ce que leur article soit reclassé.';
$string['regrademessage5'] = 'Vous êtes sur le point d\'enregistrer des changements importants à une rubrique qui a déjà été utilisée pour le classement. La valeur du livre de notes sera inchangée, mais la rubrique sera cachée aux élèves jusqu\'à ce que leur article soit reclassé.';
$string['regradeoption0'] = 'Ne pas marquer pour la reclassification';
$string['regradeoption1'] = 'Marque pour la reclassification';
$string['restoredfromdraft'] = 'REMARQUE: La dernière tentative de noter cette personne n\'a pas été correctement sauvegardée, de sorte que les notes d\'ébauche ont été rétablies. Si vous voulez annuler ces modifications, utilisez le \'Cancel\' button below.';
$string['rubric'] = 'Rubrique';
$string['rubricmapping'] = 'Règles relatives à la cartographie des notes par grade';
$string['rubricmappingexplained'] = 'The minimum possible score for this rubric is <b>{$a->minscore} points</b>. It will be converted to the minimum grade available for the activity (which is 0 unless a scale is used). The maximum score of <b>{$a->maxscore} points</b> will be converted to the maximum grade. Intermediate scores will be converted respectively.

If a scale is used for grading, the score will be rounded and converted to the scale elements as if they were consecutive integers.

This grade calculation may be changed by editing the form and ticking the box \'Calculate grade having a minimum score of the minimum achievable grade for the rubric\'.';
$string['rubricnotcompleted'] = 'Veuillez choisir quelque chose pour chaque critère';
$string['rubricoptions'] = 'Options de base';
$string['rubricstatus'] = 'Statut actuel de la rubrique';
$string['save'] = 'Enregistrer';
$string['saverubric'] = 'Enregistrer la rubrique et la préparer';
$string['saverubricdraft'] = 'Enregistrer en tant que projet';
$string['scoreinputforlevel'] = 'Note pour le niveau {$a}';
$string['scorepostfix'] = '{$a} points';
$string['showdescriptionstudent'] = 'Afficher la description de la rubrique à ceux qui sont classés';
$string['showdescriptionteacher'] = 'Afficher la description de la rubrique pendant l\'évaluation';
$string['showremarksstudent'] = 'Afficher les remarques à ceux qui sont notés';
$string['showscorestudent'] = 'Afficher les points pour chaque niveau à ceux qui sont notés';
$string['showscoreteacher'] = 'Points d\'affichage pour chaque niveau pendant l\'évaluation';
$string['sortlevelsasc'] = 'Trier l\'ordre des niveaux :';
$string['sortlevelsasc0'] = 'Décroissant par le nombre de points';
$string['sortlevelsasc1'] = 'Augmentation du nombre de points';
$string['zerolevelsabsent'] = 'Warning: The minimum possible score for this rubric is not 0; this can result in unexpected grades for the activity. To avoid this, each criterion should have a level with 0 points.<br>
This warning may be ignored if a scale is used for grading, and the minimum levels in the rubric correspond to the minimum value of the scale.';
