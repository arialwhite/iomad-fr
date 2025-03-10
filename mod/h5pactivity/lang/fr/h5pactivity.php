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
 * Plugin strings are defined here.
 *
 * @package     mod_h5pactivity
 * @category    string
 * @copyright   2020 Ferran Recio <ferran@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all_attempts'] = 'Toutes les tentatives de l\'utilisateur';
$string['answer_checked'] = 'Réponse vérifiée';
$string['answer_correct'] = 'Votre réponse est correcte';
$string['answer_fail'] = 'Réponse incorrecte';
$string['answer_incorrect'] = 'Votre réponse est incorrecte';
$string['answer_pass'] = 'Réponse correcte';
$string['answer_unchecked'] = 'Réponse non vérifiée';
$string['answer_unknown'] = 'Réponse inconnue';
$string['answer_text'] = 'Réponse';
$string['answer_noanswer'] = 'Aucune';
$string['areapackage'] = 'Fichier paquet';
$string['attempt'] = 'Essai';
$string['attempt_average'] = 'Tentatives moyennes notées';
$string['attempt_answer'] = 'Tentative de réponse';
$string['attempt_completion_no'] = 'Cette tentative n\'est pas marquée comme terminée';
$string['attempt_completion_yes'] = 'Cette tentative est terminée';
$string['attempt_first'] = 'Première tentative';
$string['attempt_highest'] = 'Essai du score le plus élevé';
$string['attempt_last'] = 'Dernière tentative';
$string['attempt_none'] = 'Aucune tentative n\'est utilisée pour le classement';
$string['attempt_number'] = 'Essai #{$a}';
$string['attempt_success_fail'] = 'Échec';
$string['attempt_success_pass'] = 'Passer';
$string['attempt_success_unknown'] = 'Non communiqué';
$string['attempts'] = 'Tentatives';
$string['attempts_report_header_label'] = 'Essais ({$a})';
$string['attempts_report'] = 'Tentatives';
$string['attempts_none'] = 'Cet utilisateur n\'a aucune tentative d\'affichage.';
$string['choice'] = 'Choix';
$string['completion'] = 'Achèvement';
$string['contentbank'] = 'Plus d\'informations sur la banque de contenu';
$string['contentbank_help'] = 'Dans la banque de contenu, vous pouvez créer et stocker du contenu en utilisant plusieurs outils de création, dont un créateur H5P intégré.';
$string['correct_answer'] = 'Réponse correcte';
$string['deleteallattempts'] = 'Toutes les tentatives H5P';
$string['displayexport'] = 'Permettre le téléchargement';
$string['displayembed'] = 'Bouton intégré';
$string['displaycopyright'] = 'Bouton de droit d\'auteur';
$string['dnduploadh5pactivity'] = 'Ajouter une activité H5P';
$string['duration'] = 'Durée';
$string['enablesavestate'] = 'Enregistrer l\' état';
$string['enablesavestate_help'] = 'Enregistrer automatiquement l\' utilisateur\'s current state. The user can return later and resume where they left off.';
$string['enabletracking'] = 'Activer le suivi des tentatives';
$string['false'] = 'Faux';
$string['grade_grademethod'] = 'Méthode de classement';
$string['grade_grademethod_help'] = 'When using point grading, the following methods are available for calculating the final grade:

* Highest grade of all attempts
* Average (mean) grade of all attempts
* First attempt (all other attempts are ignored)
* Last attempt (all other attempts are ignored)
* Don\'t use attempts for grading (disable grading calculation)';
$string['grade_manual'] = 'Don\'t calculate a grade';
$string['grade_highest_attempt'] = 'Niveau supérieur';
$string['grade_average_attempt'] = 'Niveau moyen';
$string['grade_last_attempt'] = 'Dernière tentative';
$string['grade_first_attempt'] = 'Première tentative';
$string['gradenoun_h5p'] = 'Niveau: {$a}';
$string['h5pactivity:addinstance'] = 'Ajouter un nouveau H5P';
$string['h5pactivity:reviewattempts'] = 'Examen des tentatives de H5P';
$string['h5pactivity:submit'] = 'Soumettre les tentatives H5P';
$string['h5pactivity:view'] = 'Affichage H5P';
$string['h5pactivityfieldset'] = 'Paramètres H5P';
$string['h5pactivityname'] = 'H5P';
$string['h5pactivitysettings'] = 'Paramètres';
$string['h5pattempts'] = 'Options de tentative';
$string['h5pdisplay'] = 'Options H5P';
$string['maxscore'] = 'Score max';
$string['modulename'] = 'H5P';
$string['modulename_help'] = 'H5P is an abbreviation for HTML5 Package - interactive content such as presentations, videos and other multimedia, questions, quizzes, games and more. The H5P activity enables H5P to be uploaded and added to a course.

Any question attempts are marked automatically, and the grade is recorded in the gradebook.';
$string['modulename_link'] = 'mod/h5pactivité/vue';
$string['modulenameplural'] = 'H5P';
$string['myattempts'] = 'Mes tentatives';
$string['newsubmissions'] = 'H5P présenté';
$string['no_compatible_track'] = 'This interaction ({$a}) does not provide tracking information or the tracking
        provided is not compatible with the current activity version.';
$string['noparticipants'] = 'Aucun participant à afficher';
$string['opencontentbank'] = '<a href="{$a}" cible="blank"> Accédez au fichier H5P dans la banque de contenu</a> (ouvre dans une nouvelle fenêtre).';
$string['outcome'] = 'Résultat';
$string['package'] = 'Fichier paquet';
$string['package_help'] = 'Le fichier package est un fichier h5p contenant du contenu interactif H5P.';
$string['page-mod-h5pactivity-x'] = 'Toute page de module H5P';
$string['pluginadministration'] = 'Administration de H5P';
$string['pluginname'] = 'H5P';
$string['previewmode'] = 'Vous êtes en mode aperçu.';
$string['privacy:metadata:attempt'] = 'Le numéro de tentative';
$string['privacy:metadata:rawscore'] = 'La note obtenue';
$string['privacy:metadata:timecreated'] = 'Le moment où l\'élément suivi a été créé';
$string['privacy:metadata:timemodified'] = 'Le dernier élément a été suivi';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur qui a accédé à l\'activité H5P';
$string['privacy:metadata:xapisummary'] = 'L\'activité H5P contient des informations relatives à l\'état de contenu xAPI stocké par l\'utilisateur.';
$string['privacy:metadata:xapi_track'] = 'Informations sur le suivi des tentatives';
$string['privacy:metadata:xapi_track_results'] = 'Informations sur le suivi des résultats des tentatives';
$string['report_viewed'] = 'Rapport consulté';
$string['result_compound'] = 'Score partiel combiné';
$string['result_fill-in'] = 'Texte rempli';
$string['result_fill-in_gap'] = 'Écart #{$a}';
$string['result_matching'] = 'Choix correspondant';
$string['result_other'] = 'Type d\'interaction inconnu';
$string['result_sequencing_choice'] = 'Fonctions';
$string['result_sequencing_answer'] = 'Valeur de position';
$string['result_sequencing_position'] = '* {$a}';
$string['review_mode'] = 'Essais de révision';
$string['review_my_attempts'] = 'Voir mes tentatives';
$string['review_user_attempts'] = 'Affichage ({$a})';
$string['review_none'] = 'Les participants ne peuvent pas revoir leurs propres tentatives';
$string['review_on_completion'] = 'Les participants peuvent revoir leurs propres tentatives';
$string['savestatefreq'] = 'Enregistrer la fréquence d\'état';
$string['savestatefreq_help'] = 'Combien de fois (en secondes) l\'utilisateur\'s current state is saved.';
$string['score'] = 'Score';
$string['score_out_of'] = '{$a->rawscore} sur {$a->maxscore}';
$string['search:activity'] = 'H5P - informations sur les activités';
$string['startdate'] = 'Date de début';
$string['statement_received'] = 'xAPI communiqué reçu';
$string['totalscore'] = 'Score total';
$string['trackingdisabled'] = 'Le suivi des tentatives n\'est pas autorisé pour cette activité.';
$string['trackingdisabled_enable'] = 'Le suivi des tentatives n\'est pas autorisé pour cette activité. Vous pouvez l\'activer dans <a href="{$a}">Paramètres</a>.';
$string['tracking_messages'] = 'Certains H5P fournissent des données de suivi des tentatives de déclaration avancée, comme le nombre de tentatives, de réponses et de notes. Remarque: certains H5P don\'t provide attempt tracking data. In such cases, the following settings will have no effect.';
$string['true'] = 'Vrai';
$string['usecontentbank'] = 'Utilisez la banque de contenu <a href="{$a}" cible="_blank">(ouvre dans une nouvelle fenêtre)</a> pour gérer vos fichiers H5P';
$string['view'] = 'Affichage';
$string['viewattempts'] = 'Affichage des tentatives ({$a})';
$string['view_report'] = 'Voir le rapport';

// Deprecated since Moodle 4.4.
$string['grade_h5p'] = 'Niveau: {$a}';
