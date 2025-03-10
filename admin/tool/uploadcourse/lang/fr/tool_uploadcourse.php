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
 * Strings for component 'tool_uploadcourse'.
 *
 * @package    tool_uploadcourse
 * @copyright  2011 Piers Harding
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allowdeletes'] = 'Autorise les suppressions';
$string['allowdeletes_help'] = 'Que le champ de suppression soit accepté ou non.';
$string['allowrenames'] = 'Autoriser les renoms';
$string['allowrenames_help'] = 'Que le champ de renommer soit accepté ou non.';
$string['allowresets'] = 'Autorise la réinitialisation';
$string['allowresets_help'] = 'Que le champ de réinitialisation soit accepté ou non.';
$string['cachedef_helper'] = 'Aide en cache';
$string['cannotdeletecoursenotexist'] = 'Impossible de supprimer un cours qui n\'existe pas';
$string['cannotforcelang'] = 'Aucune autorisation pour forcer la langue pour ce cours';
$string['cannotgenerateshortnameupdatemode'] = 'Impossible de générer un nom abrégé lorsque les mises à jour sont autorisées';
$string['cannotreadbackupfile'] = 'Impossible de lire le fichier de sauvegarde';
$string['cannotrenamecoursenotexist'] = 'Impossible de renommer un cours qui n\'existe pas';
$string['cannotrenameidnumberconflict'] = 'Impossible de renommer le cours, le numéro d\'identification est en conflit avec un cours existant';
$string['cannotrenameshortnamealreadyinuse'] = 'Impossible de renommer le cours, le nom abrégé est déjà utilisé';
$string['cannotupdatefrontpage'] = 'Vous n\'êtes pas autorisé à changer le site.';
$string['canonlyrenameinupdatemode'] = 'Peut seulement renommer un cours lorsque la mise à jour est autorisée';
$string['canonlyresetcourseinupdatemode'] = 'Peut seulement réinitialiser un cours en mode mise à jour';
$string['couldnotresolvecatgorybyid'] = 'Impossible de résoudre la catégorie par ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Impossible de résoudre la catégorie par numéro d\'identification';
$string['couldnotresolvecatgorybypath'] = 'Impossible de résoudre la catégorie par chemin';
$string['coursecreated'] = 'Cours créé';
$string['coursedeleted'] = 'Cours supprimé';
$string['coursedeletionnotallowed'] = 'La suppression du cours n\'est pas autorisée';
$string['coursedoesnotexistandcreatenotallowed'] = 'Le cours n\'existe pas et la création de cours n\'est pas autorisée';
$string['courseexistsanduploadnotallowed'] = 'Le cours existe et la mise à jour n\'est pas autorisée';
$string['coursefile'] = 'Fichier';
$string['coursefile_help'] = 'Ce fichier doit être un fichier CSV.';
$string['courseidnumberincremented'] = 'Numéro d\'identification du cours incrémenté {$a->de} -> {$a->à}';
$string['courseprocess'] = 'Processus de cours';
$string['courserenamed'] = 'Cours renommé';
$string['courserenamingnotallowed'] = 'Le renommage des cours n\'est pas autorisé';
$string['coursereset'] = 'Remise à zéro du cours';
$string['courseresetnotallowed'] = 'Réinitialisation du cours maintenant autorisée';
$string['courserestored'] = 'Cours restauré';
$string['coursestotal'] = 'Total des cours : {$a}';
$string['coursescreated'] = 'Cours créés : {$a}';
$string['coursesupdated'] = 'Cours mis à jour : {$a}';
$string['coursesdeleted'] = 'Les cours ont été supprimés : {$a}';
$string['courseserrors'] = 'Erreurs de cours : {$a}';
$string['courseshortnameincremented'] = 'Nom abrégé du cours incrémenté {$a->de} -> [$a->à]';
$string['courseshortnamegenerated'] = 'Nom abrégé du cours généré : {$a}';
$string['coursetemplatename'] = 'Restaurer depuis ce cours après le téléchargement';
$string['coursetemplatename_help'] = 'Entrez un nom abrégé de cours existant à utiliser comme modèle pour la création de tous les cours.';
$string['coursetorestorefromdoesnotexist'] = 'Le cours à restaurer n\'existe pas';
$string['courseupdated'] = 'Cours actualisé';
$string['courseuploadnotallowed'] = 'Aucune autorisation de télécharger des cours dans la catégorie : {$a}';
$string['courseuploadupdatenotallowed'] = 'Un cours avec ce nom court existe mais vous faites\'t have permission to use the upload courses functionality to update it.';
$string['createall'] = 'Créez tout, incrémentez le nom abrégé si nécessaire';
$string['createnew'] = 'Créer de nouveaux cours seulement, sauter les cours existants';
$string['createorupdate'] = 'Créer de nouveaux cours ou mettre à jour les cours existants';
$string['csvdelimiter'] = 'Séparateur CSV';
$string['csvdelimiter_help'] = 'Le caractère séparant les séries de données dans chaque enregistrement.';
$string['csvfileerror'] = 'Il y a un problème avec le format du fichier CSV. Veuillez vérifier le nombre de rubriques et de colonnes correspondant, et que le séparateur et l\'encodage de fichier sont corrects. [$a]';
$string['csvline'] = 'Ligne';
$string['defaultvalues'] = 'Valeurs de cours par défaut';
$string['defaultvaluescustomfieldcategory'] = 'Valeurs par défaut pour \'{$a}\'';
$string['downloadcontentnotallowed'] = 'Configuration du téléchargement de contenu de cours non autorisé';
$string['encoding'] = 'Codage';
$string['encoding_help'] = 'Encodage du fichier CSV.';
$string['errorcannotcreateorupdateenrolment'] = 'Impossible de créer ou de mettre à jour la méthode d\'inscription \'{$a}\'';
$string['errorcannotdeleteenrolment'] = 'Impossible de supprimer la méthode d\'inscription \'{$a}\'';
$string['errorcannotdisableenrolment'] = 'Impossible de désactiver la méthode d\'inscription \'{$a}\'';
$string['errorwhilerestoringcourse'] = 'Erreur lors de la restauration du cours';
$string['errorwhiledeletingcourse'] = 'Erreur lors de la suppression du cours';
$string['errorunsupportedmethod'] = 'Méthode d\'inscription \'{$a}\' is not supported in csv upload';
$string['generatedshortnameinvalid'] = 'Le nom abrégé généré est invalide';
$string['generatedshortnamealreadyinuse'] = 'Le nom abrégé généré est déjà utilisé';
$string['id'] = 'ID';
$string['importoptions'] = 'Options d\'importation';
$string['idnumberalreadyinuse'] = 'Numéro d\'identification déjà utilisé par un cours';
$string['invalidbackupfile'] = 'Fichier de sauvegarde non valide';
$string['invalidcourseformat'] = 'Format de cours non valide';
$string['invalidcsvfile'] = 'Fichier CSV d\'entrée non valide';
$string['invaliddownloadcontent'] = 'Téléchargement non valide de la valeur du contenu du cours';
$string['invalidencoding'] = 'Encodage non valide';
$string['invalidmode'] = 'Mode non valide sélectionné';
$string['invalideupdatemode'] = 'Mode de mise à jour non valide sélectionné';
$string['invalidvisibilitymode'] = 'Mode visible non valide';
$string['invalidroles'] = 'Noms de rôles non valides : {$a}';
$string['invalidshortname'] = 'Nom abrégé non valide';
$string['invalidfullnametoolong'] = 'Le champ nom complet est limité aux caractères {$a}';
$string['invalidshortnametoolong'] = 'Le champ nom abrégé est limité à {$a} caractères';
$string['missingmandatoryfields'] = 'Valeur manquante pour les champs obligatoires: {$a}';
$string['missingshortnamenotemplate'] = 'Nom abrégé manquant et modèle de nom abrégé non défini';
$string['mode'] = 'Mode de chargement';
$string['mode_help'] = 'Cela vous permet de spécifier si des cours peuvent être créés et/ou mis à jour.';
$string['nochanges'] = 'Pas de changement';
$string['pluginname'] = 'Téléchargement du cours';
$string['preview'] = 'Aperçu';
$string['customfieldinvalid'] = 'Champ personnalisé \'{$a}\' is empty or contains invalid data';
$string['reset'] = 'Réinitialiser le cours après le téléchargement';
$string['reset_help'] = 'Indique s\'il faut réinitialiser le cours après la création/mise à jour.';
$string['result'] = 'Résultat';
$string['restoreafterimport'] = 'Restauration après importation';
$string['rowpreviewnum'] = 'Aperçu des lignes';
$string['rowpreviewnum_help'] = 'Nombre de lignes du fichier CSV qui seront prévisualisées sur la page suivante. Cette option permet de limiter la taille de la page suivante.';
$string['shortnametemplate'] = 'Modèle pour générer un nom abrégé';
$string['shortnametemplate_help'] = 'Le nom court du cours est affiché dans la navigation. Vous pouvez utiliser la syntaxe template ici (%f = fullname, %i = idnumber), ou saisir une valeur initiale incrémentée.';
$string['templatefile'] = 'Restaurer depuis ce fichier après le téléchargement';
$string['templatefile_help'] = 'Sélectionnez un fichier à utiliser comme modèle pour la création de tous les cours.';
$string['unknownimportmode'] = 'Mode d\'importation inconnu';
$string['updatemissing'] = 'Remplissez les éléments manquants des données CSV et des valeurs par défaut';
$string['updatemode'] = 'Mode de mise à jour';
$string['updatemode_help'] = 'Si vous permettez la mise à jour des cours, vous devez également dire à l\'outil avec quoi mettre à jour les cours.';
$string['updatemodedoessettonothing'] = 'Le mode Mise à jour ne permet aucune mise à jour';
$string['updateonly'] = 'Mettre à jour uniquement les cours existants';
$string['updatewithdataordefaults'] = 'Mettre à jour les données CSV et les valeurs par défaut';
$string['updatewithdataonly'] = 'Mise à jour avec les données CSV uniquement';
$string['uploadcourse:use'] = 'Utiliser l\'outil de cours de téléchargement';
$string['uploadcourses'] = 'Télécharger les cours';
$string['uploadcourses_help'] = 'Courses may be uploaded via text file. The format of the file should be as follows:

* Each line of the file contains one record
* Each record is a series of data separated by the selected separator
* The first record contains a list of fieldnames defining the format of the rest of the file
* Required fieldnames are shortname, fullname, and category';
$string['uploadcoursespreview'] = 'Télécharger l\'aperçu des cours';
$string['uploadcoursesresult'] = 'Télécharger les résultats des cours';
$string['privacy:metadata'] = 'Le plugin de téléchargement de cours ne stocke aucune donnée personnelle.';
