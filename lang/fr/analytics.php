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
 * Strings for core_analytics.
 *
 * @package core_analytics
 * @copyright 2016 David Monllao {@link http://www.davidmonllao.com}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['analysablenotused'] = 'Analysable {$a->analysableid} non utilisé: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'L\'analyse {$a->analysableid} n\'est pas valide pour cette cible : {$a->result}';
$string['analysisinprogress'] = 'En cours d\'analyse par une exécution précédente';
$string['analytics'] = 'Analyse';
$string['analyticsdisabled'] = 'L\'analyse est désactivée. Vous pouvez l\'activer dans "Administration du site > Fonctions avancées".';
$string['analyticslogstore'] = 'Log store utilisé pour l\'analyse';
$string['analyticslogstore_help'] = 'Le log store qui sera utilisé par l\'API analytique pour lire les utilisateurs\' activity.';
$string['analyticssettings'] = 'Paramètres analytiques';
$string['analyticssiteinfo'] = 'Informations sur le site';
$string['calclifetime'] = 'Gardez les calculs analytiques pour';
$string['configlcalclifetime'] = 'Cela spécifie la durée pendant laquelle vous voulez conserver les données de calcul - cela ne supprimera pas les prédictions, mais supprime les données utilisées pour générer les prédictions. L\'utilisation de l\'option par défaut ici est préférable car elle maintient votre utilisation du disque sous contrôle, mais si vous utilisez des tables de calcul à d\'autres fins, vous pouvez vouloir augmenter cette valeur.';
$string['defaulttimesplittingmethods'] = 'Intervalles d\'analyse par défaut pour le modèle\'s evaluation';
$string['defaulttimesplittingmethods_help'] = 'L\'intervalle d\'analyse définit le moment où le système calculera les prévisions et la partie des journaux d\'activité qui seront considérés pour ces prévisions. Le processus d\'évaluation du modèle passera par ces intervalles d\'analyse à moins qu\'un intervalle d\'analyse spécifique ne soit spécifié.';
$string['defaultpredictionsprocessor'] = 'Processeur de prédictions par défaut';
$string['defaultpredictoroption'] = 'Processeur par défaut ({$a})';
$string['disabledmodel'] = 'Modèle désactivé';
$string['erroralreadypredict'] = 'Le fichier {$a} a déjà été utilisé pour générer des prévisions.';
$string['errorcannotreaddataset'] = 'Le fichier Dataset {$a} ne peut pas être lu.';
$string['errorcannotusetimesplitting'] = 'L\'intervalle d\'analyse fourni peut\'t be used on this model.';
$string['errorcannotwritedataset'] = 'Le fichier Dataset {$a} ne peut pas être écrit.';
$string['errorexportmodelresult'] = 'Le modèle d\'apprentissage automatique ne peut pas être exporté.';
$string['errorimport'] = 'Erreur dans l\'importation du fichier JSON fourni.';
$string['errorimportmissingcomponents'] = 'Le modèle fourni exige l\'installation des plugins suivants : {$a}. Notez que les versions ne doivent pas nécessairement correspondre aux versions installées sur votre site. Installer la même version ou une version plus récente du plugin devrait être correct dans la plupart des cas.';
$string['errorimportversionmismatches'] = 'La version des composants suivants diffère de la version installée sur ce site : {$a}. Vous pouvez utiliser l\'option \'Ignore version mismatches\' to ignore these differences.';
$string['errorimportmissingclasses'] = 'Les composants analytiques suivants ne sont pas disponibles sur ce site : {$a->missingclasses}.';
$string['errorinvalidindicator'] = 'Indicateur {$a} non valide';
$string['errorinvalidcontexts'] = 'Certains des contextes sélectionnés ne peuvent pas être utilisés dans cette cible.';
$string['errorinvalidtarget'] = 'Cible {$a} non valide';
$string['errorinvalidtimesplitting'] = 'Intervalle d\'analyse non valide; veuillez vous assurer d\'ajouter le nom de classe entièrement qualifié.';
$string['errornocontextrestrictions'] = 'La cible sélectionnée ne supporte pas les restrictions de contexte';
$string['errornoexportconfig'] = 'Il y avait un problème à exporter la configuration du modèle.';
$string['errornoexportconfigrequirements'] = 'Seuls les modèles non statiques avec un intervalle d\'analyse peuvent être exportés.';
$string['errornoindicators'] = 'Ce modèle ne comporte aucun indicateur.';
$string['errornopredictresults'] = 'Aucun résultat n\'est retourné du processeur de prédictions. Vérifiez le contenu du répertoire de sortie pour plus d\'informations.';
$string['errornotimesplittings'] = 'Ce modèle n\'a pas d\'intervalle d\'analyse.';
$string['errornoroles'] = 'Les rôles des élèves ou des enseignants n\'ont pas été définis. Définissez-les dans la page Paramètres analytiques.';
$string['errornotarget'] = 'Ce modèle n\'a aucune cible.';
$string['errorpredictioncontextnotavailable'] = 'Ce contexte de prédiction n\'est plus disponible.';
$string['errorpredictionformat'] = 'Mauvaise présentation des calculs de prédiction';
$string['errorpredictionnotfound'] = 'Prédiction non trouvée';
$string['errorpredictionsprocessor'] = 'Erreur du processeur de prédictions : {$a}';
$string['errorpredictwrongformat'] = 'Le retour du processeur de prédictions ne peut pas être décodé : "{$a}"';
$string['errorprocessornotready'] = 'Le processeur de prédictions sélectionné n\'est pas prêt : {$a}';
$string['errorsamplenotavailable'] = 'L\'échantillon prévu n\'est plus disponible.';
$string['errorunexistingtimesplitting'] = 'L\'intervalle d\'analyse sélectionné n\'est pas disponible.';
$string['errorunexistingmodel'] = 'Modèle non existant {$a}';
$string['errorunknownaction'] = 'Action inconnue';
$string['eventpredictionactionstarted'] = 'Début du processus de prévision';
$string['eventinsightsviewed'] = 'Perspectives vues';
$string['fixedack'] = 'Accepter';
$string['incorrectlyflagged'] = 'Signalisé incorrectement';
$string['insightmessagesubject'] = 'Nouveau aperçu pour "{$a}"';
$string['insightinfomessagehtml'] = 'Le système a généré un aperçu pour vous.';
$string['insightinfomessageplain'] = 'Le système a généré un aperçu pour vous : {$a}';
$string['insightinfomessageaction'] = '{$a->text} : {$a->url}';
$string['invalidtimesplitting'] = 'Modèle avec ID {$a} nécessite un intervalle d\'analyse avant qu\'il puisse être utilisé pour la formation.';
$string['invalidanalysablefortimesplitting'] = 'Il ne peut pas être analysé en utilisant l\'intervalle d\'analyse {$a}.';
$string['levelinstitution'] = 'Niveau d\'éducation';
$string['levelinstitutionisced0'] = 'Éducation de la petite enfance (inférieure au primaire)';
$string['levelinstitutionisced1'] = 'Enseignement primaire';
$string['levelinstitutionisced2'] = 'Enseignement secondaire inférieur';
$string['levelinstitutionisced3'] = 'Enseignement secondaire supérieur';
$string['levelinstitutionisced4'] = 'Études postsecondaires non tertiaires (peut comprendre la formation des entreprises ou des communautés/ONG)';
$string['levelinstitutionisced5'] = 'Enseignement supérieur de courte durée (peut inclure la formation des entreprises ou des communautés/ONG)';
$string['levelinstitutionisced6'] = 'Licence ou niveau équivalent';
$string['levelinstitutionisced7'] = 'Maîtrise ou niveau équivalent';
$string['levelinstitutionisced8'] = 'Niveau doctoral ou équivalent';
$string['nocourses'] = 'Pas de cours à analyser';
$string['modeinstruction'] = 'Modes d\'enseignement';
$string['modeinstructionfacetoface'] = 'Face à face';
$string['modeinstructionblendedhybrid'] = 'Mélange ou hybride';
$string['modeinstructionfullyonline'] = 'Entièrement en ligne';
$string['modeloutputdir'] = 'Répertoire des sorties de modèles';
$string['modeloutputdirwithdefaultinfo'] = 'Répertoire où les processeurs de prédiction stockent toutes les informations d\'évaluation. Utile pour le débogage et la recherche. Si vide, {$a} sera utilisé par défaut.';
$string['modeltimelimit'] = 'Délai d\'analyse par modèle';
$string['modeltimelimitinfo'] = 'Ce réglage limite le temps que chaque modèle passe à analyser le contenu du site.';
$string['neutral'] = 'Neutre';
$string['neverdelete'] = 'Ne jamais supprimer les calculs';
$string['noevaluationbasedassumptions'] = 'Les modèles fondés sur des hypothèses ne peuvent pas être évalués.';
$string['nodata'] = 'Aucune donnée à analyser';
$string['noinsightsmodel'] = 'Ce modèle ne génère pas de perspectives';
$string['noinsights'] = 'Aucune information communiquée';
$string['nonewdata'] = 'Aucune nouvelle donnée disponible. Le modèle sera analysé après la prochaine période d\'analyse.';
$string['nonewranges'] = 'Aucune nouvelle prédiction. Le modèle sera analysé après la prochaine période d\'analyse.';
$string['nopredictionsyet'] = 'Pas encore de prévisions';
$string['noranges'] = 'Pas encore de prévisions';
$string['notapplicable'] = 'Sans objet';
$string['notrainingbasedassumptions'] = 'Les modèles fondés sur des hypothèses n\'ont pas besoin de formation.';
$string['notuseful'] = 'Pas utile';
$string['novaliddata'] = 'Aucune donnée valable disponible';
$string['novalidsamples'] = 'Aucun échantillon valide disponible';
$string['onlycli'] = 'L\'analytique traite l\'exécution par ligne de commande seulement';
$string['onlycliinfo'] = 'Des processus analytiques tels que l\'évaluation de modèles, la formation d\'algorithmes d\'apprentissage automatique ou l\'obtention de prédictions peuvent prendre du temps. Ils fonctionnent comme des tâches cron ou peuvent être forcés via la ligne de commande. Si les processus d\'analyse sont désactivés, ils peuvent être exécutés manuellement via l\'interface Web.';
$string['percentonline'] = 'Pourcentage en ligne';
$string['percentonline_help'] = 'Si votre organisation propose des cours mixtes ou hybrides, quel pourcentage de travail étudiant est effectué en ligne à Moodle? Saisissez un nombre entre 0 et 100.';
$string['predictionsprocessor'] = 'Processeur de prédictions';
$string['predictionsprocessor_help'] = 'Un processeur de prédictions est le moteur d\'apprentissage automatique qui traite les ensembles de données générés par le calcul des modèles\' indicators and targets. Each model can use a different processor. The one specified here will be the default.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Calcul des indicateurs';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Heure de début du calcul';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Heure de fin du calcul';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Contexte';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Tableau d\'origine de l\'échantillon';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'L\'identifiant de l\'échantillon';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'La classe de calculateur indicateur';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'La valeur calculée';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Quand la prédiction a été faite';
$string['privacy:metadata:analytics:predictions'] = 'Prévisions';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Le modèle ID';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Contexte';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'L\'identifiant de l\'échantillon';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Indice de l\'intervalle d\'analyse';
$string['privacy:metadata:analytics:predictions:prediction'] = 'La prédiction';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Le score de prédiction';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Calcul des indicateurs';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quand la prédiction a été faite';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Début des calculs';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Calculs fin du temps';
$string['privacy:metadata:analytics:predictionactions'] = 'Mesures de prévision';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'L\'ID de prédiction';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'L\'utilisateur qui a fait l\'action';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Nom de l\'action';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Lorsque l\'action de prédiction a été effectuée';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Modèles analytiques';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'L\'utilisateur qui a modifié le modèle';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Le journal utilisé pour les modèles analytiques';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'L\'utilisateur qui a modifié le journal';
$string['processingsitecontents'] = 'Contenu du site de traitement';
$string['successfullyanalysed'] = 'Analyse réussie';
$string['timesplittingmethod'] = 'Intervalle d\'analyse';
$string['timesplittingmethod_help'] = 'L\'intervalle d\'analyse définit le moment où le système calculera les prévisions et la partie des journaux d\'activité qui seront considérés pour ces prévisions. Par exemple, la durée du cours peut être divisée en parties, avec une prédiction générée à la fin de chaque partie.';
$string['timesplittingmethod_link'] = 'Méthodes de partage des temps';
$string['typeinstitution'] = 'Type d\'établissement';
$string['typeinstitutionacademic'] = 'Études';
$string['typeinstitutiontraining'] = 'Formation des entreprises';
$string['typeinstitutionngo'] = 'Organisation non gouvernementale (ONG)';
$string['useful'] = 'Utile';
$string['viewdetails'] = 'Afficher les détails';
$string['viewinsight'] = 'Aperçu';
$string['viewinsightdetails'] = 'Afficher les détails';
$string['viewprediction'] = 'Afficher les détails de la prédiction';
$string['washelpful'] = 'C\'était utile ?';
