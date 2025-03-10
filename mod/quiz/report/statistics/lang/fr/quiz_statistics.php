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
 * Strings for component 'quiz_statistics', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   quiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actualresponse'] = 'Réponse réelle';
$string['allattempts'] = 'toutes les tentatives';
$string['allattemptsavg'] = 'Niveau moyen de toutes les tentatives';
$string['allattemptscount'] = 'Nombre total de tentatives complètes classées';
$string['analysisnameonly'] = '"{$a->nom}"';
$string['analysisno'] = '({$a->numéro}) "{$a->nom}"';
$string['analysisnovariant'] = '({$a->numéro}) Variante "{$a->nom}" {$a->variante}';
$string['analysisofresponses'] = 'Analyse des réponses';
$string['analysisofresponsesfor'] = 'Analyse des réponses pour {$a}';
$string['analysisvariant'] = 'Variante "{$a->name}" {$a->variante}';
$string['attempts'] = 'Tentatives';
$string['attemptsall'] = 'toutes les tentatives';
$string['attemptsfirst'] = 'première tentative';
$string['backtoquizreport'] = 'Retour à la page principale du rapport statistique.';
$string['calculatefrom'] = 'Calculer les statistiques à partir';
$string['calculatingallstats'] = 'Calcul des statistiques pour les quiz, les questions et l\'analyse des données de réponse';
$string['cic'] = 'Coefficient de cohérence interne (pour {$a})';
$string['completestatsfilename'] = 'Statistiques complètes';
$string['count'] = 'Nombre';
$string['counttryno'] = 'Comptez Essayez {$a}';
$string['coursename'] = 'Nom du cours';
$string['detailedanalysis'] = 'Analyse plus détaillée des réponses à cette question';
$string['detailedanalysisforvariant'] = 'Analyse plus détaillée des réponses à la variante {$a} de cette question';
$string['discrimination_index'] = 'Indice de discrimination';
$string['discriminative_efficiency'] = 'Efficacité discriminatoire';
$string['downloadeverything'] = 'Télécharger le rapport complet';
$string['duration'] = 'Ouvert pour';
$string['effective_weight'] = 'Poids effectif';
$string['errordeleting'] = 'Erreur lors de la suppression des anciens enregistrements {$a}.';
$string['errormedian'] = 'Erreur lors de la recherche de la médiane';
$string['errorpowerquestions'] = 'Erreur lors de la récupération des données pour calculer la variance des cotes de questions';
$string['errorpowers'] = 'Erreur lors de la récupération des données pour calculer la variance pour les notes de quiz';
$string['errorrandom'] = 'Erreur lors de l\'obtention des données du sous-élément';
$string['errorratio'] = 'Rapport d\'erreur (pour {$a})';
$string['errorstatisticsquestions'] = 'Erreur lors de la récupération des données pour calculer les statistiques des cotes de questions';
$string['facility'] = 'Indice des installations';
$string['firstattempts'] = 'première tentative';
$string['firstattemptsavg'] = 'Niveau moyen des premières tentatives';
$string['firstattemptscount'] = 'Nombre de premières tentatives complètes classées';
$string['frequency'] = 'Fréquence';
$string['getstatslockprogress'] = 'Attendre la tâche en cours. Veuillez patienter ou réessayer plus tard.';
$string['getstatslocktimeout'] = 'Temps de fermeture du calcul des statistiques';
$string['getstatslocktimeoutdesc'] = 'Combien de secondes pour attendre un verrou en essayant d\'effectuer un calcul statistique pour un quiz. Ce paramètre existe principalement pour les tests, ne le modifiez pas sauf si vous savez ce que vous faites.';
$string['highestattempts'] = 'tentative la plus élevée';
$string['highestattemptsavg'] = 'Niveau moyen des tentatives les plus élevées';
$string['intended_weight'] = 'Poids prévu';
$string['kurtosis'] = 'Kurtose de répartition des scores (pour {$a})';
$string['lastattempts'] = 'dernière tentative';
$string['lastattemptsavg'] = 'Niveau moyen des dernières tentatives';
$string['lastcalculated'] = 'La dernière fois qu\'on a calculé {$a->dernier calcul} il y a eu des tentatives {$a->count} depuis.';
$string['maximumfacility'] = 'Établissement maximal';
$string['median'] = 'Niveau médian (pour {$a})';
$string['medianfacility'] = 'Facilité médiane';
$string['minimumfacility'] = 'Établissement minimal';
$string['modelresponse'] = 'Réponse du modèle';
$string['nameforvariant'] = 'Variante {$a->variante} de {$a->nom}';
$string['negcovar'] = 'Covariance négative de la classe avec la classe de tentative totale';
$string['negcovar_help'] = 'Cette question's grade for this set of attempts on the quiz varies in an opposite way to the overall attempt grade. This means overall attempt grade tends to be below average when the grade for this question is above average and vice-versa.

Our equation for effective question weight cannot be calculated in this case. The calculations for effective question weight for other questions in this quiz are the effective question weight for these questions if the highlighted questions with a negative covariance are given a maximum grade of zero.

If you edit a quiz and give these question(s) with negative covariance a max grade of zero then the effective question weight of these questions will be zero and the real effective question weight of other questions will be as calculated now.';
$string['nogradedattempts'] = 'Aucune tentative n\'a été faite à ce quiz, ou toutes les tentatives ont des questions qui nécessitent un classement manuel.';
$string['nostudentsingroup'] = 'Il n\'y a pas encore d\'étudiants dans ce groupe.';
$string['nostats'] = 'Impossible de compléter le calcul des statistiques. Il peut y avoir un calcul à long terme en cours. Veuillez réessayer plus tard.';
$string['optiongrade'] = 'Crédit partiel';
$string['partofquestion'] = 'Partie de la question';
$string['pluginname'] = 'Statistiques';
$string['privacy:metadata'] = 'Bien que le plugin Quiz Statistics ait des tableaux de base de données, les données sont des données agrégées et ne décrivent pas un indidividuel unique.';
$string['position'] = 'Fonction';
$string['positions'] = 'Position(s)';
$string['questioninformation'] = 'Questions';
$string['questionname'] = 'Nom de la question';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'Statistiques des questions';
$string['questionstatsfilename'] = 'Statistiques des questions';
$string['questiontype'] = 'Type de question';
$string['quizinformation'] = 'Quiz';
$string['quizname'] = 'Nom du quiz';
$string['quizoverallstatistics'] = 'Quiz statistiques générales';
$string['quizstructureanalysis'] = 'Analyse de la structure du quiz';
$string['random_guess_score'] = 'Devinette aléatoire';
$string['rangeofvalues'] = 'Gamme de statistiques pour ces questions';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['recalculatenow'] = 'Recalculer maintenant';
$string['recalculatetask'] = 'Recalculer les statistiques des questions';
$string['reportsettings'] = 'Paramètres de calcul des statistiques';
$string['response'] = 'Réponse';
$string['slotstructureanalysis'] = 'Analyse structurelle pour le numéro de question {$a}';
$string['skewness'] = 'Ecart de répartition des points (pour {$a})';
$string['standarddeviation'] = 'Écart type (pour {$a})';
$string['standarddeviationq'] = 'Écart type';
$string['standarderror'] = 'Erreur type (pour {$a})';
$string['statistics'] = 'Statistiques';
$string['statisticsreport'] = 'Rapport statistique';
$string['statisticsreportgraph'] = 'Statistiques pour les positions à questions';
$string['statistics:view'] = 'Voir le rapport statistique';
$string['statsfor'] = 'Statistiques de quiz (pour {$a})';
$string['variant'] = 'Variante';
$string['viewanalysis'] = 'Afficher les détails';
$string['whichtries'] = 'Analyser les réponses pour';
