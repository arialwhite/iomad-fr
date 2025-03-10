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
 * Strings for tool_analytics.
 *
 * @package tool_analytics
 * @copyright 2016 David Monllao {@link http://www.davidmonllao.com}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accuracy'] = 'Précision';
$string['actions'] = 'Actions';
$string['actionsexecutedbyusers'] = 'Actions exécutées par les utilisateurs';
$string['actionsexecutedbyusersfor'] = 'Actions exécutées par les utilisateurs pour le modèle « {$a} »';
$string['actionexecutedgroupedusefulness'] = 'Actions groupées';
$string['allpredictions'] = 'Toutes les prévisions';
$string['alltimesplittingmethods'] = 'Tous les intervalles d\'analyse';
$string['analysingsitedata'] = 'Analyse du site';
$string['analysis'] = 'Analyse';
$string['analyticmodels'] = 'Modèles analytiques';
$string['bettercli'] = 'L\'évaluation des modèles et la production de prévisions peuvent nécessiter un traitement intensif. Il est recommandé d\'exécuter ces actions depuis la ligne de commande.';
$string['cantguessstartdate'] = 'Peut\'t guess the start date';
$string['cantguessenddate'] = 'Peut\'t guess the end date';
$string['classdoesnotexist'] = 'La classe {$a} n\'existe pas';
$string['clearpredictions'] = 'Des prévisions claires';
$string['clearmodelpredictions'] = 'Voulez-vous vraiment effacer toutes les prédictions « {$a} » ?';
$string['clienablemodel'] = 'Vous pouvez activer le modèle en sélectionnant un intervalle d\'analyse par son ID. Notez que vous pouvez également l\'activer plus tard en utilisant l\'interface web (\'none\' to exit).';
$string['clievaluationandpredictions'] = 'Une tâche programmée imite à travers des modèles activés et obtient des prédictions. L\'évaluation des modèles via l\'interface web est désactivée. Vous pouvez permettre l\'exécution manuelle de ces processus via l\'interface web en désactivant <a href="{$a}">\'onlycli\'</a> analytics setting.';
$string['clievaluationandpredictionsnoadmin'] = 'Une tâche programmée imite à travers des modèles activés et obtient des prédictions. L\'évaluation des modèles via l\'interface web est désactivée. Il peut être activé par un administrateur du site.';
$string['component'] = 'Composante';
$string['componentcore'] = 'Noyau';
$string['componentselect'] = 'Sélectionner tous les modèles fournis par le composant \'{$a}\'';
$string['componentselectnone'] = 'Tout désélectionner';
$string['contexts'] = 'Contextes';
$string['contexts_help'] = 'Le modèle sera limité à cet ensemble de contextes. Aucune restriction de contexte ne sera appliquée si aucun contexte n\'est sélectionné.';
$string['createmodel'] = 'Créer un modèle';
$string['currenttimesplitting'] = 'Intervalle d\'analyse actuel';
$string['delete'] = 'Supprimer';
$string['deletemodelconfirmation'] = 'Voulez-vous vraiment supprimer "{$a}" ? Ces changements ne peuvent être repris.';
$string['disabled'] = 'Handicapé';
$string['editmodel'] = 'Modifier le modèle « {$a} »';
$string['edittrainedwarning'] = 'Ce modèle a déjà été formé. Notez que la modification de ses indicateurs ou de son intervalle d\'analyse supprimera ses prévisions antérieures et commencera à générer de nouvelles prévisions.';
$string['enabled'] = 'Activé';
$string['errorcantenablenotimesplitting'] = 'Vous devez sélectionner un intervalle d\'analyse avant d\'activer le modèle';
$string['errornoenabledandtrainedmodels'] = 'Il n\'existe pas de modèles autorisés et formés à prévoir.';
$string['errornoenabledmodels'] = 'Il n\'y a pas de modèles autorisés à s\'entraîner.';
$string['errornoexport'] = 'Seuls les modèles formés peuvent être exportés';
$string['errornostaticevaluated'] = 'Les modèles fondés sur des hypothèses ne peuvent pas être évalués. Ils sont toujours 100% corrects selon la façon dont ils ont été définis.';
$string['errornostaticlog'] = 'Les modèles fondés sur des hypothèses ne peuvent pas être évalués parce qu\'il n\'y a pas de registre de rendement.';
$string['erroronlycli'] = 'Exécution autorisée uniquement via la ligne de commande';
$string['errortrainingdataexport'] = 'Les données sur la formation modèle ne peuvent être exportées';
$string['evaluate'] = 'Évaluation';
$string['evaluatemodel'] = 'Évaluer le modèle';
$string['evaluationmode'] = 'Mode d\'évaluation';
$string['evaluationmode_help'] = 'There are two evaluation modes:

* Trained model -  Site data is used as testing data to evaluate the accuracy of the trained model.
* Configuration - Site data is split into training and testing data, to both train and test the accuracy of the model configuration.

Trained model is only available if a trained model has been imported into the site, and has not yet been re-trained using site data.';
$string['evaluationmodeinfo'] = 'Ce modèle a été importé dans le site. Vous pouvez soit évaluer les performances du modèle, soit évaluer les performances de la configuration du modèle à l\'aide des données du site.';
$string['evaluationmodetrainedmodel'] = 'Évaluer le modèle formé';
$string['evaluationmodecoltrainedmodel'] = 'Modèle formé';
$string['evaluationmodecolconfiguration'] = 'Configuration';
$string['evaluationmodeconfiguration'] = 'Évaluer la configuration du modèle';
$string['evaluationinbatches'] = 'Le contenu du site est calculé et stocké en lots. Le processus d\'évaluation peut être arrêté à tout moment. La prochaine fois qu\'il est lancé, il continuera à partir du moment où il a été arrêté.';
$string['executescheduledanalysis'] = 'Exécuter l\'analyse programmée';
$string['export'] = 'Exportation';
$string['exportincludeweights'] = 'Inclure les poids du modèle formé';
$string['exportmodel'] = 'Configuration d\'exportation';
$string['exporttrainingdata'] = 'Données sur la formation à l \' exportation';
$string['extrainfo'] = 'Informations';
$string['generalerror'] = 'Erreur d\'évaluation. Code de statut {$a}';
$string['goodmodel'] = 'C\'est un bon modèle d\'utilisation pour obtenir des prédictions. Permet de commencer à obtenir des prédictions.';
$string['importmodel'] = 'Modèle d\'importation';
$string['indicators'] = 'Indicateurs';
$string['indicators_help'] = 'Les indicateurs sont ce que vous pensez conduire à une prédiction précise de la cible.';
$string['indicators_link'] = 'Indicateurs';
$string['indicatorsnum'] = 'Nombre d\'indicateurs : {$a}';
$string['info'] = 'Informations';
$string['insightsreport'] = 'Rapport Perspectives';
$string['ignoreversionmismatches'] = 'Ignorer les erreurs de version';
$string['ignoreversionmismatchescheckbox'] = 'Ignorez les différences entre cette version du site et la version originale du site.';
$string['importedsuccessfully'] = 'Le modèle a été importé avec succès.';
$string['insights'] = 'Perspectives';
$string['invalidanalysables'] = 'Éléments non valides du site';
$string['invalidanalysablesinfo'] = 'Cette page énumère les éléments analysables qui peuvent\'t be used by this prediction model. The listed elements can\'t be used either to train the prediction model nor can the prediction model obtain predictions for them.';
$string['invalidanalysablestable'] = 'Tableau des éléments analysables du site non valides';
$string['invalidcurrenttimesplitting'] = 'L\'intervalle d\'analyse actuel est invalide pour la cible de ce modèle. Veuillez sélectionner un intervalle différent.';
$string['invalidindicatorsremoved'] = 'Un nouveau modèle a été ajouté. Indicateurs't work with the selected target have been automatically removed.';
$string['invalidtimesplitting'] = 'L\'intervalle d\'analyse sélectionné est invalide pour la cible sélectionnée.';
$string['invalidtimesplittinginmodels'] = 'L\'intervalle d\'analyse utilisé par certains modèles est invalide. Veuillez sélectionner un intervalle différent pour les modèles suivants : {$a}';
$string['invalidprediction'] = 'Invalide pour obtenir des prédictions';
$string['invalidtraining'] = 'Non valide pour former le modèle';
$string['loginfo'] = 'Enregistrer les informations supplémentaires';
$string['missingmoodleversion'] = 'Le fichier importé does\'t define a version number';
$string['modelid'] = 'Numéro de modèle';
$string['modelinvalidanalysables'] = 'Éléments analysables non valides pour le modèle "{$a}"';
$string['modelname'] = 'Nom du modèle';
$string['modelresults'] = '{$a} résultats';
$string['modeltimesplitting'] = 'Intervalle d\'analyse';
$string['newmodel'] = 'Nouveau modèle';
$string['nextpage'] = 'Page suivante';
$string['noactionsfound'] = 'Les utilisateurs n\'ont exécuté aucune action sur les informations générées.';
$string['nodatatoevaluate'] = 'Il n\'y a pas de données pour évaluer le modèle';
$string['nodatatopredict'] = 'Aucun nouvel élément pour obtenir des prédictions.';
$string['nodatatotrain'] = 'Aucune nouvelle donnée ne peut être utilisée pour la formation.';
$string['noinvalidanalysables'] = 'Ce site ne contient aucun élément analysable invalide.';
$string['notdefined'] = 'Pas encore défini';
$string['pluginname'] = 'Modèles analytiques';
$string['predictionresults'] = 'Résultats de la prévision';
$string['predictmodels'] = 'Modèles prévisionnels';
$string['predictorresultsin'] = 'Prédicteur connecté aux informations dans le répertoire {$a}';
$string['predictionprocessfinished'] = 'Processus de prévision terminé';
$string['previouspage'] = 'Page précédente';
$string['restoredefault'] = 'Restaurer les modèles par défaut';
$string['restoredefaultempty'] = 'Veuillez sélectionner les modèles à restaurer.';
$string['restoredefaultinfo'] = 'Ces modèles par défaut sont manquants ou ont changé depuis leur installation. Vous pouvez restaurer les modèles par défaut sélectionnés.';
$string['restoredefaultnone'] = 'Tous les modèles par défaut fournis par le noyau et les plugins installés ont été créés. Aucun nouveau modèle n\'a été trouvé; il n\'y a rien à restaurer.';
$string['restoredefaultsome'] = 'Récréé avec succès {$a->count} nouveau(s) modèle(s).';
$string['restoredefaultsubmit'] = 'Restaurer la sélection';
$string['samestartdate'] = 'La date de début actuelle est bonne';
$string['sameenddate'] = 'La date de fin actuelle est bonne';
$string['scheduledanalysisresults'] = 'Résultats utilisant l\'intervalle d\'analyse {$a->name}';
$string['scheduledanalysisresultscli'] = 'Résultats utilisant l\'intervalle d\'analyse {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Sélectionnez l\'intervalle d\'analyse que vous souhaitez utiliser pour évaluer la configuration du modèle.';
$string['target'] = 'Objectif';
$string['target_help'] = 'La cible est ce que le modèle va prédire.';
$string['target_link'] = 'Objectifs';
$string['timesplittingnotdefined'] = 'Aucun intervalle d\'analyse n\'est défini.';
$string['timesplittingnotdefined_help'] = 'Vous devez sélectionner un intervalle d\'analyse avant d\'activer le modèle.';
$string['trainandpredictmodel'] = 'Modèle de formation et calcul des prévisions';
$string['trainingprocessfinished'] = 'Processus de formation terminé';
$string['trainingresults'] = 'Résultats de la formation';
$string['trainmodels'] = 'Modèles de train';
$string['versionnotsame'] = 'Le fichier importé provenait d\'une version différente ({$a->importedversion}) de la version actuelle ({$a->version})';
$string['viewlog'] = 'Registre d\'évaluation';
$string['weeksenddateautomaticallyset'] = 'Date de fin automatiquement définie en fonction de la date de début et du nombre de sections';
$string['weeksenddatedefault'] = 'Date de fin calculée automatiquement à partir de la date de début du cours.';
$string['privacy:metadata'] = 'Le plugin Analytics Models ne stocke aucune donnée personnelle.';
