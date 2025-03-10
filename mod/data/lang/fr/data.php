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
 * Strings for component 'data', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   mod_data
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action'] = 'Décision';
$string['actionsmenu'] = 'Menu Actions';
$string['add'] = 'Ajouter une entrée';
$string['addcomment'] = 'Ajouter un commentaire';
$string['addtemplate'] = 'Ajouter le modèle d\'entrée';
$string['advancedsearch'] = 'Recherche avancée';
$string['allowcomments'] = 'Permettre des commentaires sur les entrées';
$string['alttext'] = 'Texte alternatif';
$string['approvalstatus'] = 'État d \' homologation';
$string['approve'] = 'Approuver';
$string['approved'] = 'Approuvé';
$string['areacontent'] = 'Champs';
$string['ascending'] = 'Augmentation';
$string['asearchtemplate'] = 'Modèle de recherche avancée';
$string['atmaxentry'] = 'Vous avez entré le nombre maximum d\'entrées permis!';
$string['authorfirstname'] = 'Prénom';
$string['authorlastname'] = 'Nom';
$string['autogenallforms'] = 'Générer tous les modèles par défaut';
$string['autolinkurl'] = 'Lien automatique avec l\'URL';
$string['availablefromdate'] = 'Disponible à partir de';
$string['availabletags'] = 'Étiquettes disponibles';
$string['availabletags_help'] = 'Tags are placeholders in the template, which will be replaced by data or other items, such as an edit icon, when entries are edited or viewed.

Fields have the format [[fieldname]]. All other tags have the format ##sometag##.

Only the tags that are in the "Available tags" list may be used for the current template.';
$string['availabletodate'] = 'Disponible à';
$string['availabletodatevalidation'] = 'La disponibilité à ce jour ne peut pas être avant la disponibilité à partir de la date.';
$string['bynameondate'] = 'par {$a->nom} - {$a->date}';
$string['calendarend'] = '{$a} ferme';
$string['calendarstart'] = '{$a} s\'ouvre';
$string['cancel'] = 'Annuler';
$string['cannotaccesspresentsother'] = 'Vous n\'êtes pas autorisé à accéder aux préréglages d\'autres utilisateurs';
$string['cannotadd'] = 'Impossible d\'ajouter des entrées!';
$string['cannotdeletepreset'] = 'Erreur lors de la suppression du préréglage';
$string['cannotoverwritepreset'] = 'Erreur d\'écrasement du préréglage';
$string['cannotunziptopreset'] = 'Impossible de décompresser le répertoire préréglé';
$string['cannotapplypreset'] = 'Erreur lors de l\'application du préréglage.';
$string['closebeforeopen'] = 'Vous avez spécifié une date de fin avant la date de début.';
$string['colonnes'] = 'columns';
$string['comment'] = 'Commentaire';
$string['commentdeleted'] = 'Commentaire supprimé';
$string['commentempty'] = 'Commentaire vide';
$string['comments'] = 'Commentaires';
$string['commentsaved'] = 'Commentaire enregistré';
$string['commentsn'] = '{$a} commentaires';
$string['commentsoff'] = 'La fonctionnalité Commentaires n\'est pas activée';
$string['completiondetail:entries'] = 'Faire des entrées : {$a}';
$string['completionentriescount'] = 'Ajouter des entrées';
$string['completionentriesdesc'] = 'Nombre minimum d\'entrées requis: {$a}';
$string['configenablerssfeeds'] = 'Ce commutateur permettra la possibilité de flux RSS pour toutes les bases de données. Vous devrez toujours activer les flux manuellement dans les paramètres de chaque base de données.';
$string['confirmdeletefield'] = 'Vous allez supprimer ce champ, êtes-vous sûr ?';
$string['confirmdeleterecord'] = 'Voulez-vous vraiment supprimer cette entrée ?';
$string['confirmdeleterecords'] = 'Voulez-vous vraiment supprimer ces entrées ?';
$string['createactivity'] = 'Créez vos propres champs pour collecter des données, ou utilisez un preset qui inclut déjà des champs.';
$string['createfields'] = 'Créer des champs pour collecter différents types de données.';
$string['createtemplates'] = 'Les modèles définissent l\'interface de votre activité. Une fois que vous créez des champs, les modèles seront créés automatiquement. Alternativement, vous pouvez utiliser un preset, qui comprend des champs et des modèles.';
$string['csstemplate'] = 'CSS personnalisé';
$string['csvfailed'] = 'Impossible de lire les données brutes du fichier CSV';
$string['csvfile'] = 'CSV ou ZIP contenant un fichier CSV';
$string['csvimport'] = 'Importation de fichier CSV';
$string['csvimport_help'] = 'Les entrées peuvent être importées via un fichier texte simple avec une liste de noms de champs comme première ligne, puis les données, avec un enregistrement par ligne.';
$string['csvwithselecteddelimiter'] = '<titre de l\'abbr"Comma Valeurs séparées">CSV</abbr>';
$string['data:addinstance'] = 'Ajouter une nouvelle base de données';
$string['data:approve'] = 'Approuver et annuler les entrées approuvées';
$string['data:comment'] = 'Écrire des commentaires';
$string['data:exportallentries'] = 'Exporter toutes les entrées de base de données';
$string['data:exportentry'] = 'Exporter une entrée de base de données';
$string['data:exportownentry'] = 'Entrée de la base de données propre à l\'exportation';
$string['data:exportuserinfo'] = 'Exporter les informations utilisateur';
$string['data:managecomments'] = 'Gérer les commentaires';
$string['data:manageentries'] = 'Gérer les entrées';
$string['data:managetemplates'] = 'Gérer les modèles';
$string['data:manageuserpresets'] = 'Gérer les préréglages';
$string['data:rate'] = 'Taux';
$string['data:readentry'] = 'Lire les entrées';
$string['data:viewalluserpresets'] = 'Afficher les préréglages de tous les utilisateurs';
$string['data:viewallratings'] = 'Voir toutes les notes brutes données par les individus';
$string['data:viewanyrating'] = 'Voir les évaluations totales que quiconque a reçues';
$string['data:viewentry'] = 'Afficher les entrées';
$string['data:viewrating'] = 'Voir la note totale reçue';
$string['data:writeentry'] = 'Écrire les entrées';
$string['data:view'] = 'Afficher l\'activité de la base de données';
$string['date'] = 'Date';
$string['dateentered'] = 'Date d\'entrée';
$string['datemodified'] = 'Dernière édition :';
$string['defaultfielddelimiter'] = '(par défaut est le caractère virgule)';
$string['defaultfieldenclosure'] = '(par défaut n\'est pas)';
$string['defaultsortfield'] = 'Champ de tri par défaut';
$string['delcheck'] = 'Cochez la case Supprimer en vrac';
$string['delete'] = 'Supprimer';
$string['deleteallentries'] = 'Toutes les entrées';
$string['deletecomment'] = 'Voulez-vous vraiment supprimer ce commentaire?';
$string['deleteconfirm'] = 'Supprimer le préréglage {$a}?';
$string['supprimé'] = 'deleted';
$string['deleteentry'] = 'Supprimer l\' entrée';
$string['deletefield'] = 'Supprimer le champ';
$string['deletenotenrolled'] = 'Inscriptions d\'utilisateurs non inscrits';
$string['deletewarning'] = 'Supprimer un preset le supprime de la liste des presets disponibles dans tous les cours.';
$string['descending'] = 'Décroissant';
$string['directorynotapreset'] = '{$a->répertoire} Pas un preset : fichiers manquants : {$a->missing_files}';
$string['disapprove'] = 'Annuler l\'approbation';
$string['download'] = 'Télécharger';
$string['edit'] = 'Modifier';
$string['editcomment'] = 'Modifier le commentaire';
$string['editentry'] = 'Modifier l\'entrée';
$string['editfield'] = 'Modifier le champ';
$string['editordisable'] = 'Désactiver l\'éditeur';
$string['editorenable'] = 'Activer l\'éditeur de code';
$string['editpreset'] = 'Modifier le préréglage';
$string['emptyadd'] = 'Le modèle Add est vide, générant un formulaire par défaut...';
$string['emptyaddform'] = 'Vous n\'avez pas rempli de champs !';
$string['enabletemplateeditorcheck'] = 'Voulez-vous vraiment activer l\'éditeur ? Cela peut entraîner une modification du contenu lorsque le modèle est sauvegardé.';
$string['eventfieldcreated'] = 'Champ créé';
$string['eventfielddeleted'] = 'Champ supprimé';
$string['eventfieldupdated'] = 'Champ mis à jour';
$string['eventrecordcreated'] = 'Enregistrement créé';
$string['eventrecorddeleted'] = 'Enregistrement supprimé';
$string['eventrecordupdated'] = 'Enregistrement mis à jour';
$string['eventtemplateupdated'] = 'Modèle mis à jour';
$string['eventtemplateviewed'] = 'Modèles consultés';
$string['fileencoding'] = 'Codage';
$string['emptypresetname'] = 'Nom ou fichier prédéfini ne peut pas être vide';
$string['entries'] = 'Entrées';
$string['entrieslefttoadd'] = 'Vous devez ajouter {$a->entriesleft} plus d\'entrées/entrées pour compléter cette activité.';
$string['entrieslefttoaddtoview'] = 'Vous devez ajouter {$a->entrieslefttoview} plus d\'entrées/entrées avant de pouvoir voir d\'autres participants\' entries.';
$string['entry'] = 'Entrée';
$string['entrysaved'] = 'Votre entrée a été enregistrée';
$string['errordatafilenotfound'] = 'Le dossier n\'a pas pu être importé. Les types de fichiers acceptés sont CSV ou ZIP contenant un fichier CSV dans le format utilisé pour exporter les entrées.';
$string['errormustbeteacher'] = 'Vous devez être un professeur pour utiliser cette page!';
$string['errorpresetexists'] = 'Un preset avec ce nom existe déjà.';
$string['errorpresetexistsbutnotoverwrite'] = 'Un preset avec ce nom existe déjà. Choisissez un autre nom.';
$string['errormustsupplyvalue'] = 'Vous devez fournir une valeur ici.';
$string['errorpresetnotfound'] = 'Préréglage avec le nom {$a} non trouvé.';
$string['example'] = 'Exemple de module de base de données';
$string['excel'] = 'Excel';
$string['export'] = 'Exportation';
$string['exportaszip'] = 'Exportation sous forme de zip';
$string['exportaszip_help'] = 'L\'exportation comme fonction zip vous permet d\'enregistrer les modèles et les champs comme un zip prédéfini pour le téléchargement. Le zip peut alors être importé à un autre cours.';
$string['exportedtozip'] = 'Exporté vers...';
$string['exportentries'] = 'Exportations';
$string['exportformat'] = 'Format d\'exportation';
$string['exportoptions'] = 'Options d\'exportation';
$string['exportownentries'] = 'Exportez vos propres entrées seulement ? ({$a->mine}/{$a->all})';
$string['exportpreset'] = 'Préréglage de l\'exportation';
$string['failedpresetdelete'] = 'Une erreur a été rencontrée en essayant de supprimer le préréglage.';
$string['fieldadded'] = 'Champ ajouté';
$string['fieldallowautolink'] = 'Autoriser le lien';
$string['fielddeleted'] = 'Champ supprimé';
$string['fielddelimiter'] = 'Séparateur de champ';
$string['fielddescription'] = 'Description du champ';
$string['fieldenclosure'] = 'Coffre-fort';
$string['fieldheight'] = 'Hauteur';
$string['fieldheightlistview'] = 'Hauteur (en pixels) en vue de la liste';
$string['fieldheightsingleview'] = 'Hauteur (en pixels) en vue unique';
$string['fieldmappings'] = 'Cartes de terrain';
$string['fieldmappings_help'] = 'This menu allows you to keep the data from the existing database. To preserve the data in a field, you must map it to a new field, where the data will appear. Any field can also be left blank, with no information copied into it. Any old field not mapped to a new one will be lost and all its data removed.
You can only map fields of the same type, so each drop-down menu will have different fields in it. Also, you must be careful not to try and map one old field to more than one new field.';
$string['fieldname'] = 'Nom du champ';
$string['fieldnametype'] = '{$a->nom} ({$a->type})';
$string['fieldnotmatched'] = 'Les champs suivants de votre fichier ne sont pas connus dans cette base de données : {$a}';
$string['fieldoptions'] = 'Options (une par ligne)';
$string['fields'] = 'Champs';
$string['fieldshelp'] = 'Créer des champs pour collecter différents types de données. Les champs définissent la structure des entrées dans votre base de données.';
$string['fieldsinformationtags'] = 'Informations sur le terrain';
$string['fieldsnavigation'] = 'Navigation tertiaire des champs';
$string['fieldtagdescription'] = '{$a} description';
$string['fieldtagname'] = 'Nom {$a}';
$string['fieldtagid'] = 'Numéro d\'identification';
$string['fieldupdated'] = 'Champ mis à jour';
$string['fieldwidth'] = 'Largeur';
$string['fieldwidthlistview'] = 'Largeur (en pixels) en vue de la liste';
$string['fieldwidthsingleview'] = 'Largeur (en pixels) en vue unique';
$string['file'] = 'Fichier';
$string['filesnotgenerated'] = 'Tous les fichiers n\'ont pas été générés : {$a}';
$string['filtername'] = 'Liaison automatique de la base de données';
$string['footer'] = 'Pied de page';
$string['forcelinkname'] = 'Nom forcé pour le lien';
$string['foundnorecords'] = 'Aucun document trouvé. <a href="{$a->reseturl}"> Tout effacer </a>';
$string['foundrecords'] = 'Trouvé {$a->num} sur {$a->max} enregistrements. <a href="{$a->reseturl}"> Tout effacer </a>';
$string['fromfile'] = 'Importer à partir du fichier zip';
$string['fromfile_help'] = 'L\'importation à partir de la fonction de fichier zip vous permet de parcourir et de télécharger un zip prédéfini de modèles et de champs.';
$string['generateerror'] = 'Pas tous les fichiers générés !';
$string['header'] = 'En-tête';
$string['headeraddtemplate'] = 'Définir l\'interface pour ajouter ou modifier des entrées.';
$string['headerasearchtemplate'] = 'Définir l\'interface pour la recherche avancée.';
$string['headercsstemplate'] = 'Ajouter un CSS personnalisé aux modèles.';
$string['headerjstemplate'] = 'Ajouter JavaScript personnalisé pour les modèles de la liste, de la liste simple ou de l\'ajout.';
$string['headerlisttemplate'] = 'Définir l\'apparence de la vue Liste.';
$string['headerrsstemplate'] = 'Définir l\'apparence des entrées dans les flux RSS.';
$string['headersingletemplate'] = 'Définir l\'apparence de la vue unique.';
$string['checkbox'] = 'Cases à cocher';
$string['id'] = 'Numéro d\'entrée';
$string['chooseexportfields'] = 'Choisissez les champs que vous souhaitez exporter';
$string['chooseexportformat'] = 'Choisissez le format que vous souhaitez exporter dans';
$string['chooseorupload'] = 'Choisir un fichier';
$string['choosepreset'] = 'Fichier prédéfini';
$string['expired'] = 'Désolé, cette activité a fermé le {$a} et n\'est plus disponible';
$string['importentries'] = 'Importations';
$string['importpreset'] = 'Importer le préréglage';
$string['importapreset'] = 'Importer un préréglage';
$string['importsuccess'] = 'Préréglage appliqué.';
$string['importpresetmissingcapability'] = 'Vous faites't have permission to import a preset.';
$string['includeapproval'] = 'Inclure le statut d\'approbation';
$string['includefiles'] = 'Inclure des fichiers dans l\'exportation';
$string['includetags'] = 'Inclure les balises';
$string['includetime'] = 'Inclure le temps ajouté/modifié';
$string['includeuserdetails'] = 'Inclure les détails de l\'utilisateur';
$string['indicator:cognitivedepth'] = 'Base de données cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité de base de données.';
$string['indicator:cognitivedepthdef'] = 'Base de données cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités de la base de données pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Voir, Soumettre)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Base de données sociale';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité de base de données.';
$string['indicator:socialbreadthdef'] = 'Base de données sociale';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités de la base de données au cours de cet intervalle d\'analyse (niveaux = aucune participation, participant seul)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['insufficiententries'] = 'plus d\'entrées nécessaires pour visualiser cette base de données';
$string['intro'] = 'Désignation des marchandises';
$string['invalidaccess'] = 'Cette page n\'a pas été consultée correctement';
$string['invalidfieldid'] = 'L\'identifiant du champ est incorrect';
$string['invalidfieldname'] = 'Veuillez choisir un autre nom pour ce champ';
$string['invalidfieldtype'] = 'Le type de champ est incorrect';
$string['invalidid'] = 'ID de données incorrectes';
$string['missingfieldtype'] = 'Type de champ pour {$a->name} non trouvé';
$string['missingfieldtypes'] = 'Les champs suivants n\'ont pas leurs types de champs correspondants installés et ne seront pas inclus dans le formulaire Ajouter une entrée. Vous devez vérifier le modèle d\'entrée Ajouter et supprimer tout nom de champ.';
$string['missingfieldtypeimport'] = 'Les champs suivants n\'ont pas été importés parce que leurs types de champs correspondants ne sont pas installés :';
$string['unknown'] = 'Champ inconnu';
$string['invalidpreset'] = '{$a} n\'est pas un préréglage.';
$string['invalidrecord'] = 'Enregistrement inexact';
$string['invalidurl'] = 'L\'URL que vous venez d\'entrer n\'est pas valide';
$string['importandapply'] = 'Importer préréglé et appliquer';
$string['importpreset_desc'] = 'The preset will be applied to this activity, creating fields and templates.
 It won\'t appear in the list of presets.';
$string['jstemplate'] = 'Personnalisé JavaScript';
$string['latitude'] = 'Latitude';
$string['latlong'] = 'Coordonnées';
$string['latlongboth'] = 'La latitude et la longitude sont requises.';
$string['latlongdownloadallhint'] = 'Télécharger le lien pour toutes les entrées comme KML';
$string['latlongkmllabelling'] = 'Comment inscrire des éléments dans des fichiers KML (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Services de connexion à afficher';
$string['latlongotherfields'] = 'Autres domaines';
$string['list'] = 'Affichage de la liste';
$string['listview'] = 'Affichage de la liste';
$string['listtemplate'] = 'Modèle d\'affichage de la liste';
$string['longitude'] = 'Longitude';
$string['manageapproved'] = 'Permettre la révision des entrées approuvées';
$string['manageapproved_help'] = 'Permettre aux étudiants de modifier ou supprimer leurs entrées après leur approbation. Les entrées modifiées devront être réapprouvées.';
$string['managefields'] = 'Gérer les champs';
$string['mapexistingfield'] = 'Carte vers {$a}';
$string['mapnewfield'] = 'Créer un nouveau champ';
$string['mappingwarning'] = 'Tous les anciens champs non cartographiés vers un nouveau champ seront perdus et toutes les données dans ce champ seront supprimées.';
$string['mapping:fieldstocreate'] = 'Champs à créer : {$a}';
$string['mapping:fieldstodelete'] = 'Champs existants à supprimer : {$a}';
$string['mapping:warningmessagedeleteandcreate'] = 'Si les champs à supprimer sont du même type que les champs à créer, vous pouvez les cartographier dans les champs Map.';
$string['mapping:warningmessagedelete'] = 'Si les champs à supprimer sont du même type que les nouveaux champs dans le preset you\'re applying, you may be able to map them in Map fields.';
$string['mapping:mapfields'] = 'Champs de carte';
$string['mapping:applypresets'] = 'Appliquer le préréglage';
$string['mapping:dialogtitle:usepreset'] = 'Appliquer le préréglage {$a}?';
$string['maxentries'] = 'Nombre maximal d\'entrées';
$string['maxentries_help'] = 'Le nombre maximal d\'inscriptions qu\'un étudiant est autorisé à soumettre pour cette activité.';
$string['maxsize'] = 'Taille maximale';
$string['menu'] = 'Menu';
$string['menuchoose'] = 'Choisir...';
$string['missingdata'] = 'L\'ID de données ou l\'objet doit être fourni pour la classe de champ.';
$string['missingfield'] = 'Erreur de programmeur : Vous devez spécifier le champ et/ou les données lors de la définition de la classe de champ.';
$string['modulename'] = 'Base de données';
$string['modulename_help'] = 'Database enables participants to create, maintain, and search a collection of entries.

The structure of the entries is defined using different types of fields, such as short text, dropdown list, text area, URL, image, or file.

As a teacher, you can comment and rate entries. You can also allow students to rate and comment on entries (peer evaluation). Ratings can be aggregated to form a final grade, which is recorded in the gradebook.

If the Database auto-linking filter is enabled, any entries in a database will be automatically linked where the words or phrases appear within the course.

You can use Database to:

* Create a collaborative collection of links, books, book reviews, journal references, etc.
* Display student-created photos, posters, websites or poems for peer comment and review.';
$string['modulename_link'] = 'mod/données/vue';
$string['modulenameplural'] = 'Bases de données';
$string['more'] = 'Plus';
$string['moreurl'] = 'URL supplémentaire';
$string['movezipfailed'] = 'Peut\'t move zip';
$string['multientry'] = 'Entrée répétée';
$string['multimenu'] = 'Menu (multi-sélectionner)';
$string['multipletags'] = 'Plusieurs étiquettes trouvées ! Modèle non enregistré';
$string['newentry'] = 'Nouvelle entrée';
$string['newfield'] = 'Créer un champ';
$string['newfield_help'] = 'A field allows the input of data. Each entry in a database activity can have multiple fields of multiple types such as a date field, which allows participants to select a day, month and year from a drop-down menu, a picture field, which allows participants to upload an image file, or a checkbox field, which allows participants to select one or more options.

Each field must have a unique field name. The field description is optional.';
$string['noaccess'] = 'Vous n\'avez pas accès à cette page';
$string['nodefinedfields'] = 'Nouveau preset n\'a pas de champs définis!';
$string['nofieldcontent'] = 'Contenu du champ non trouvé';
$string['nofieldindatabase'] = 'Il n\'y a pas de champs définis pour cette base de données.';
$string['nofields'] = 'Pas encore de champs';
$string['nolisttemplate'] = 'Le modèle de vue de liste n\'est pas encore défini';
$string['nomatch'] = 'Aucune entrée correspondante trouvée!';
$string['nomaximum'] = 'Pas de maximum';
$string['nopreviewavailable'] = 'Aucun aperçu disponible pour {$a}';
$string['norecords'] = 'Pas encore d\'entrées';
$string['notapproved'] = 'En attente d \' approbation';
$string['notapprovederror'] = 'L\'entrée n\'est pas encore approuvée.';
$string['notinjectivemap'] = 'Pas une carte injectable';
$string['notemplates'] = 'Pas encore de modèles';
$string['notopenyet'] = 'Désolé, cette activité n\'est pas disponible avant {$a}';
$string['number'] = 'Numéro';
$string['numberrssarticles'] = 'Entrées dans le flux RSS';
$string['numnotapproved'] = 'En attente';
$string['numrecords'] = '{$a} entrées';
$string['ods'] = '<titre abbr="OpenDocument Spreadsheet">ODS</abbr>&nbsp;(OpenOffice)';
$string['openafterclose'] = 'Vous avez spécifié une date ouverte après la date de clôture';
$string['optionaldescription'] = 'Description courte (facultative)';
$string['optionalfilename'] = 'Nom du fichier (facultatif)';
$string['other'] = 'Autres';
$string['otherfields'] = 'Tous les autres champs';
$string['overwrite'] = 'Suppression';
$string['overrwritedesc'] = 'Remplacer le préréglage existant par ce nom et écraser son contenu';
$string['overwritesettings'] = 'Remplacer les paramètres actuels tels que les commentaires, les cotes, etc.';
$string['page-mod-data-x'] = 'Toute page du module d\'activité de base de données';
$string['pagesize'] = 'Entrées par page';
$string['participants'] = 'Participants';
$string['picture'] = 'Image';
$string['pluginadministration'] = 'Administration des activités de la base de données';
$string['pluginname'] = 'Base de données';
$string['portfolionotfile'] = 'Exporter vers un portefeuille plutôt qu\'un fichier (csv et bond2a seulement)';
$string['presetdeleted'] = 'Préréglage supprimé.';
$string['presetinfo'] = 'L\'enregistrement sous forme de préréglage publiera ce modèle. D\'autres utilisateurs peuvent l\'utiliser dans leurs bases de données.';
$string['presetnotselected'] = 'Aucun préréglage n\'a été sélectionné.';
$string['presets'] = 'Préréglage';
$string['presetshelp'] = 'Choisissez un préréglage à utiliser comme point de départ.';
$string['preview'] = 'Aperçu de {$a}';
$string['previewaction'] = 'Aperçu';
$string['privacy:metadata:commentpurpose'] = 'Commentaires sur les enregistrements de bases de données';
$string['privacy:metadata:data_content'] = 'Le contenu d\'un champ';
$string['privacy:metadata:data_content:fieldid'] = 'ID de définition du champ';
$string['privacy:metadata:data_content:content'] = 'Contenu';
$string['privacy:metadata:data_content:content1'] = 'Contenu supplémentaire 1';
$string['privacy:metadata:data_content:content2'] = 'Contenu supplémentaire 2';
$string['privacy:metadata:data_content:content3'] = 'Contenu supplémentaire 3';
$string['privacy:metadata:data_content:content4'] = 'Contenu supplémentaire 4';
$string['privacy:metadata:data_records'] = 'Enregistrements dans l\'activité de la base de données';
$string['privacy:metadata:data_records:userid'] = 'Utilisateur qui a créé l\'enregistrement';
$string['privacy:metadata:data_records:groupid'] = 'Groupe';
$string['privacy:metadata:data_records:timecreated'] = 'Heure de création de l\'enregistrement';
$string['privacy:metadata:data_records:timemodified'] = 'Heure où record a été modifié pour la dernière fois';
$string['privacy:metadata:data_records:approved'] = 'État d \' homologation';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Champs pour le module d\'activité de la base de données';
$string['privacy:metadata:filepurpose'] = 'Dossier joint à l\'enregistrement de la base de données';
$string['privacy:metadata:tagpurpose'] = 'Étiquettes sur les enregistrements de bases de données';
$string['privacy:metadata:ratingpurpose'] = 'Évaluations des enregistrements de bases de données';
$string['radiobutton'] = 'Boutons radio';
$string['recordapproved'] = 'Entrée approuvée';
$string['recorddeleted'] = 'Entrée supprimée';
$string['recorddisapproved'] = 'Entrée non approuvée';
$string['recordsnotsaved'] = 'Aucune entrée n\'a été enregistrée. Veuillez vérifier le format du fichier téléchargé.';
$string['recordssaved'] = 'entrées enregistrées';
$string['removealldatatags'] = 'Toutes les balises de base de données';
$string['requireapproval'] = 'Approbation requise';
$string['requireapproval_help'] = 'Un enseignant doit approuver les inscriptions avant qu\'elles ne soient visibles pour tout le monde.';
$string['required'] = 'Requis';
$string['requiredentries'] = 'Inscriptions requises pour l\'achèvement (anciennes)';
$string['requiredentries_help'] = "If set, a message is displayed stating the number of entries required for completion. Note that this setting is not connected to activity completion.

For entries required for activity completion, the new Activity completion setting 'Require entries' should be used. To remove this setting completely, set to none, then save changes.
Please use the Entries required fields in the Activity completion section instead.";
$string['requiredentrieswarning'] = 'Ce paramètre a été remplacé par un paramètre d\'achèvement de l\'activité « Exiger des entrées »';
$string['requiredentriestoview'] = 'Inscriptions requises avant la consultation';
$string['requiredentriestoview_help'] = 'The number of entries a student is required to add before they can view entries from other students.

This is not compatible with the database auto-linking filter.';
$string['requiredfield'] = 'Champ requis';
$string['resetalltemplates'] = 'Réinitialiser tous les modèles';
$string['resetalltemplatesconfirmtitle'] = 'Réinitialiser tous les modèles ?';
$string['resetalltemplatesconfirm'] = 'Vous...'re about to remove all templates for your current preset. If you want to restore the templates later, you need to choose the preset again in the \'Presets\' tab.';
$string['resetsettings'] = 'Réinitialiser les filtres';
$string['resettemplate'] = 'Réinitialiser le modèle actuel';
$string['resettemplateconfirmtitle'] = 'Réinitialiser le modèle ?';
$string['resettemplateconfirm'] = 'Cela supprimera définitivement le {$a} pour votre preset actuel.';
$string['resizingimages'] = 'Redimensionner les vignettes...';
$string['lignes'] = 'rows';
$string['rssglobaldisabled'] = 'Handicapé. Voir les variables de configuration du site.';
$string['rsstemplate'] = 'Modèle RSS';
$string['rsstitletemplate'] = 'Modèle de titre RSS';
$string['rsstype'] = 'Flux RSS pour cette activité';
$string['save'] = 'Enregistrer';
$string['saveandadd'] = 'Enregistrer et ajouter un autre';
$string['saveandview'] = 'Enregistrer et afficher';
$string['saveaspreset'] = 'Publier le preset sur ce site';
$string['saveaspreset_help'] = 'La fonction de sauvegarde sous préréglage publie les modèles et les champs sous forme de préréglage que d\'autres sur le site peuvent ensuite utiliser. (Vous pouvez le supprimer de la liste des presets à tout moment.)';
$string['savedataaspreset'] = 'Enregistrer tous les champs et modèles et publier comme préréglé sur ce site';
$string['saveaspresetmissingcapability'] = 'L\'utilisateur n\'a pas la permission d\'enregistrer la base de données sous forme de préréglage.';
$string['savesettings'] = 'Enregistrer les paramètres';
$string['savesuccess'] = 'Préréglage enregistré. <a href="{$a->url}"> Aperçu prédéfini</a>';
$string['search'] = 'Rechercher';
$string['search:activity'] = 'Base de données - informations sur les activités';
$string['search:entry'] = 'Base de données - entrées';
$string['searchresults'] = 'Entrées contenant "{$a}"';
$string['selectedrequired'] = 'Tout sélectionné requis';
$string['selectexportoptions'] = 'Sélectionnez les options d\'exportation';
$string['selectfields'] = 'Sélectionner les champs';
$string['selectfordeletion'] = 'Sélectionnez l\'entrée à supprimer';
$string['showall'] = 'Afficher toutes les entrées';
$string['showmore'] = 'Afficher plus';
$string['single'] = 'Affichage unique';
$string['singleview'] = 'Vue unique';
$string['singletemplate'] = 'Modèle de vue unique';
$string['startbuilding'] = 'Commencez à construire votre activité';
$string['subplugintype_datafield'] = 'Type de champ de la base de données';
$string['subplugintype_datafield_plural'] = 'Types de champs de base de données';
$string['subplugintype_datapreset'] = 'Préréglage';
$string['subplugintype_datapreset_plural'] = 'Préréglage';
$string['tagarea_data_records'] = 'Enregistrements de données';
$string['tags'] = 'Étiquettes';
$string['teachersandstudents'] = '{$a->enseignants} et {$a->étudiants}';
$string['templates'] = 'Modèles';
$string['templatereset'] = 'Réinitialisation du modèle';
$string['templateresetall'] = 'Tous les modèles réinitialisent';
$string['templatesnavigation'] = 'Modèles de navigation tertiaire';
$string['templatesaved'] = 'Modèle enregistré';
$string['text'] = 'Texte';
$string['textarea'] = 'Zone de texte';
$string['timeadded'] = 'Temps ajouté';
$string['timemodified'] = 'Heure modifiée';
$string['type'] = 'Type de champ';
$string['undefinedprocessactionmethod'] = 'Aucune méthode d\'action définie dans Data_Preset pour gérer l\'action « {$a} ».';
$string['unsupportedfields'] = 'Champs non pris en charge';
$string['unsupportedfieldslist'] = 'Les champs suivants ne peuvent pas être exportés:';
$string['updatefield'] = 'Mettre à jour un champ existant';
$string['uploadfile'] = 'Télécharger le fichier';
$string['uploadrecords'] = 'Importations';
$string['uploadrecords_help'] = 'Import entries that you have exported from another database, either via CSV or a ZIP containing a CSV file (if files are included in the export).

Alternatively, to create a CSV file for importing, add one entry to the database and then export it. Edit the CSV file and add more entries.';
$string['uploadrecords_link'] = 'mod/données/importation';
$string['url'] = 'URL';
$string['usedate'] = 'Inclure dans la recherche.';
$string['usepredefinedset'] = 'Utiliser un ensemble prédéfini';
$string['usepreset'] = 'Utiliser ce préréglage';
$string['usestandard'] = 'Utiliser un préréglage';
$string['usestandard_help'] = 'Pour utiliser un préréglage disponible sur l\'ensemble du site, sélectionnez-le dans la liste. (Si vous avez ajouté un préréglage à la liste en utilisant la fonction de sauvegarde comme préréglage, alors vous avez la possibilité de le supprimer.)';
$string['viewfromdate'] = 'Lire seulement';
$string['viewnavigation'] = 'Navigation tertiaire en mode vue';
$string['viewtemplates'] = 'Affichage des modèles';
$string['viewtodate'] = 'Lire seulement';
$string['viewtodatevalidation'] = 'La lecture seulement à ce jour ne peut pas être avant la lecture seulement à partir de la date.';
$string['wrongdataid'] = 'Mauvaise identification de données fournie';

// Deprecated since Moodle 4.2.
$string['fieldids'] = 'Identification des champs';

// Deprecated since Moodle 4.3.
$string['completionentries'] = 'Exiger des entrées';

// Deprecated since Moodle 4.4.

// Deprecated since Moodle 4.5.
$string['tagsdeleted'] = 'Les balises de la base de données ont été supprimées';
