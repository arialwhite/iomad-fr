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
 * Strings for component 'tool_xmldb', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package    tool_xmldb
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actual'] = 'Nombre effectif';
$string['addpersistent'] = 'Ajouter des champs persistants obligatoires';
$string['aftertable'] = 'Après tableau:';
$string['back'] = 'Précédent';
$string['backtomainview'] = 'Retour à la page principale';
$string['cannotuseidfield'] = 'Impossible d\'insérer le champ "id". C\'est une colonne autonumérique';
$string['completelogbelow'] = '(voir le journal complet de la recherche ci-dessous)';
$string['confirmdeletefield'] = 'Êtes-vous absolument sûr que vous voulez supprimer le champ:';
$string['confirmdeleteindex'] = 'Êtes-vous absolument sûr que vous voulez supprimer l\'index:';
$string['confirmdeletekey'] = 'Êtes-vous absolument sûr que vous voulez supprimer la clé:';
$string['confirmdeletetable'] = 'Êtes-vous absolument sûr que vous voulez supprimer la table:';
$string['confirmdeletexmlfile'] = 'Êtes-vous absolument sûr que vous voulez supprimer le fichier:';
$string['confirmcheckbigints'] = 'This functionality will search for <a href="https://tracker.moodle.org/browse/MDL-11038">potential wrong integer fields</a> in your Moodle server, generating (but not executing!) automatically the needed SQL statements to have all the integers in your DB properly defined.

Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).

It\'s highly recommended to be running the latest (+ version) available of your Moodle release before executing the search of wrong integers.

This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.';
$string['confirmcheckdefaults'] = 'This functionality will search for inconsistent default values in your Moodle server, generating (but not executing!) the needed SQL statements to have all the default values properly defined.

Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).

It\'s highly recommended to be running the latest (+ version) available of your Moodle release before executing the search of inconsistent default values.

This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.';
$string['confirmcheckforeignkeys'] = 'This functionality will search for potential violations of the foreign keys defined in the install.xml definitions. (Moodle does not currently generate actual foreign key constraints in the database, which is why invalid data may be present.)

It\'s highly recommended to be running the latest (+ version) available of your Moodle release before executing the search for potential violations of the foreign keys.

This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.';
$string['confirmcheckindexes'] = 'This functionality will search for potential missing indexes in your Moodle server, generating (but not executing!) automatically the needed SQL statements to keep everything updated.

Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).

It\'s highly recommended to be running the latest (+ version) available of your Moodle release before executing the search of missing indexes.

This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.';
$string['confirmcheckoraclesemantics'] = 'This functionality will search for <a href="https://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 columns using BYTE semantics</a> in your Moodle server, generating (but not executing!) automatically the needed SQL statements to have all the columns converted to use CHAR semantics instead (better for cross-db compatibility and increased contents max. length).

Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).

It\'s highly recommended to be running the latest (+ version) available of your Moodle release before executing the search of BYTE semantics.

This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.';
$string['confirmrevertchanges'] = 'Êtes-vous absolument sûr de vouloir revenir sur les modifications effectuées:';
$string['create'] = 'Créer';
$string['createtable'] = 'Créer une table & #160;:';
$string['defaultincorrect'] = 'Par défaut incorrect';
$string['delete'] = 'Supprimer';
$string['delete_field'] = 'Supprimer le champ';
$string['delete_index'] = 'Supprimer l\'index';
$string['delete_key'] = 'Supprimer la clé';
$string['delete_table'] = 'Supprimer le tableau';
$string['delete_xml_file'] = 'Supprimer le fichier XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Indice de documentation:';
$string['documentationintro'] = 'Cette documentation est générée automatiquement à partir de la définition de base de données XMLDB. Il est disponible uniquement en anglais.';
$string['down'] = 'Baisse';
$string['duplicate'] = 'Dupliquer';
$string['duplicatefieldname'] = 'Un autre champ avec ce nom existe';
$string['duplicatefieldsused'] = 'Champs en double utilisés';
$string['duplicatekeyname'] = 'Une autre clé avec ce nom existe';
$string['duplicatetablename'] = 'Une autre table avec ce nom existe';
$string['edit'] = 'Modifier';
$string['edit_field'] = 'Modifier le champ';
$string['edit_field_save'] = 'Enregistrer le champ';
$string['edit_index'] = 'Modifier l\'index';
$string['edit_index_save'] = 'Enregistrer l\'index';
$string['edit_key'] = 'Modifier la clé';
$string['edit_key_save'] = 'Enregistrer la clé';
$string['edit_table'] = 'Modifier le tableau';
$string['edit_table_save'] = 'Enregistrer le tableau';
$string['edit_xml_file'] = 'Modifier le fichier XML';
$string['enumvaluesincorrect'] = 'Valeurs incorrectes pour le champ enum';
$string['expected'] = 'Attendu';
$string['extensionrequired'] = 'Désolé - l\'extension PHP \'{$a}\' is required for this action. Please install the extension if you want to use this feature.';
$string['extraindexesfound'] = 'Index supplémentaires trouvés';
$string['field'] = 'Champ';
$string['fieldnameempty'] = 'Nom du champ vide';
$string['fields'] = 'Champs';
$string['fieldsnotintable'] = 'Champ does\'t exist in table';
$string['fieldsusedinindex'] = 'Ce champ est utilisé comme index';
$string['fieldsusedinkey'] = 'Ce champ est utilisé comme clé.';
$string['filemodifiedoutfromeditor'] = 'Avertissement : Fichier localement modifié en utilisant l\'éditeur XMLDB. L\'enregistrement écrasera les changements locaux.';
$string['filenotwriteable'] = 'Fichier non lisible';
$string['fkunknownfield'] = 'La clé étrangère {$a->keyname} sur la table {$a->tablename} pointe vers un champ inexistant {$a->reffield} dans la table référencée {$a->reftable}.';
$string['fkunknowntable'] = 'La clé étrangère {$a->keyname} sur la table {$a->tablename} pointe vers une table inexistante {$a->reftable}.';
$string['fkviolationdetails'] = 'La clé étrangère {$a->keyname} sur la table {$a->tablename} est violée par {$a->numviolations} des lignes {$a->numrows}.';
$string['floatincorrectdecimals'] = 'Nombre incorrect de décimales pour le champ flottant';
$string['floatincorrectlength'] = 'Longueur incorrecte pour le champ flottant';
$string['float2numbernote'] = 'Remarque : Bien que les champs "float" soient 100% supportés par XMLDB, il\'s recommended to migrate to "number" fields instead.';
$string['generate_all_documentation'] = 'Toute la documentation';
$string['generate_documentation'] = 'Documentation';
$string['gotolastused'] = 'Aller au dernier fichier utilisé';
$string['change'] = 'Changement';
$string['charincorrectlength'] = 'Longueur incorrecte pour le champ de char';
$string['checkbigints'] = 'Vérifier les entiers';
$string['check_bigints'] = 'Recherchez des nombres entiers DB incorrects';
$string['checkdefaults'] = 'Vérifier les valeurs par défaut';
$string['check_defaults'] = 'Rechercher des valeurs par défaut incohérentes';
$string['checkforeignkeys'] = 'Vérifier les clés étrangères';
$string['check_foreign_keys'] = 'Rechercher des violations de clés étrangères';
$string['checkindexes'] = 'Vérifier les index';
$string['check_indexes'] = 'Rechercher les index DB manquants';
$string['checkoraclesemantics'] = 'Vérifiez la sémantique';
$string['check_oracle_semantics'] = 'Recherchez une sémantique de longueur incorrecte';
$string['duplicateindexname'] = 'Dupliquer le nom d\'index';
$string['incorrectfieldname'] = 'Nom incorrect';
$string['index'] = 'Sommaire';
$string['indexes'] = 'Indices';
$string['indexnameempty'] = 'Le nom d\'index est vide';
$string['integerincorrectlength'] = 'Longueur incorrecte pour le champ entier';
$string['incorrectindexname'] = 'Nom d\'index incorrect';
$string['incorrectkeyname'] = 'Nom de la clé incorrecte';
$string['incorrecttablename'] = 'Nom incorrect de la table';
$string['key'] = 'Key';
$string['keynameempty'] = 'Le nom de la clé ne peut pas être vide';
$string['keys'] = 'Clés';
$string['listreservedwords'] = 'Liste des mots réservés<br />(utilisés pour garder <a href="https://docs.moodle.org/en/XMLDB_reserved_words" cible="_blank"> Mots réservés XMLDB</a> mis à jour)';
$string['load'] = 'Charger';
$string['main_view'] = 'Vue principale';
$string['masterprimaryuniqueordernomatch'] = 'Les champs de votre clé étrangère doivent être listés dans le même ordre qu\'ils sont listés dans le CLIENT UNIQUE de la table référencée.';
$string['missing'] = 'Manque';
$string['missingindexes'] = 'Index manquants trouvés';
$string['mustselectonefield'] = 'Vous devez sélectionner un champ pour voir les actions liées au champ!';
$string['mustselectoneindex'] = 'Vous devez sélectionner un index pour voir les actions liées à l\'index!';
$string['mustselectonekey'] = 'Vous devez sélectionner une clé pour voir les actions clés !';
$string['newfield'] = 'Nouveau champ';
$string['newindex'] = 'Nouvel indice';
$string['newkey'] = 'Nouvelle clé';
$string['newtable'] = 'Nouveau tableau';
$string['newtablefrommysql'] = 'Nouveau tableau de MySQL';
$string['new_table_from_mysql'] = 'Nouveau tableau de MySQL';
$string['nofieldsspecified'] = 'Aucun champ spécifié';
$string['nomasterprimaryuniquefound'] = 'La ou les colonnes que vos références de clés étrangères doivent être incluses dans un CLEY primaire ou unique dans le tableau référencé. Notez que la colonne étant dans un INDEX UNIQUE n\'est pas assez bonne.';
$string['nomissingorextraindexesfound'] = 'Aucun index manquant ou supplémentaire n\'a été trouvé, donc aucune autre action n\'est requise.';
$string['noreffieldsspecified'] = 'Pas de champs de référence spécifiés';
$string['noreftablespecified'] = 'Tableau de référence spécifié non trouvé';
$string['noviolatedforeignkeysfound'] = 'Aucune clé étrangère violée trouvée';
$string['nowrongdefaultsfound'] = 'Aucune valeur par défaut incohérente n\'a été trouvée, votre DB n\'a pas besoin d\'autres actions.';
$string['nowrongintsfound'] = 'Aucun entiers erronés n\'a été trouvé, votre DB fait\'t need further actions.';
$string['nowrongoraclesemanticsfound'] = 'Aucune colonne Oracle utilisant la sémantique BYTE n\'a été trouvée, votre DB does\'t need further actions.';
$string['numberincorrectdecimals'] = 'Nombre incorrect de décimales pour le champ nombre';
$string['numberincorrectlength'] = 'Longueur incorrecte pour le champ nombre';
$string['numberincorrectwholepart'] = 'Partie de nombre trop grande pour le champ de nombre';
$string['pendingchanges'] = 'Remarque : Vous avez effectué des modifications à ce fichier. Ils peuvent être sauvés à tout moment.';
$string['pendingchangescannotbesaved'] = 'Il y a des changements dans ce fichier, mais ils ne peuvent pas être enregistrés ! S\'il vous plaît vérifier que le répertoire et le "install.xml" à l\'intérieur ont des permissions d\'écriture pour le serveur Web.';
$string['pendingchangescannotbesavedreload'] = 'Il y a des changements dans ce fichier, mais ils ne peuvent pas être enregistrés ! S\'il vous plaît vérifier que le répertoire et le "install.xml" à l\'intérieur ont des permissions d\'écriture pour le serveur Web. Ensuite, rechargez cette page et vous devriez pouvoir enregistrer ces modifications.';
$string['persistentfieldsconfirm'] = 'Voulez-vous ajouter les champs suivants :';
$string['persistentfieldscomplete'] = 'Les champs suivants ont été ajoutés:';
$string['persistentfieldsexist'] = 'Les domaines suivants existent déjà :';
$string['pluginname'] = 'Éditeur XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Les clés primaires ne peuvent pas être nulles';
$string['reconcilefiles'] = 'Réconcilier les fichiers XMLDB';
$string['reconcile_files'] = 'Recherchez les fichiers XMLDB nécessitant une réconciliation';
$string['reconcile_files_intro'] = 'This functionality looks though the contents of all XMLDB files to verify that they match the results of generating them from the XMLDB editor.

A list of files needing to be reconciled (regenerated) will be displayed and the XMLDB editor can be used to fix them.';
$string['reconcile_files_no'] = 'Tous les fichiers sont OK. Aucune réconciliation n\'est nécessaire.';
$string['reconcile_files_yes'] = 'Fichiers trouvés pour concilier & #160;:';
$string['reserved'] = 'Réservé';
$string['reservedwords'] = 'Mots réservés';
$string['revert'] = 'Répandre';
$string['revert_changes'] = 'Revenir aux modifications';
$string['save'] = 'Enregistrer';
$string['searchresults'] = 'Résultats de la recherche';
$string['selectaction'] = 'Sélectionnez action & #160;:';
$string['selectdb'] = 'Sélectionnez la base de données & #160;:';
$string['selectfieldkeyindex'] = 'Sélectionnez champ/clé/index:';
$string['selectonecommand'] = 'Veuillez sélectionner une action dans la liste pour afficher le code PHP';
$string['selectonefieldkeyindex'] = 'Veuillez sélectionner un champ/clé/index dans la liste pour afficher le code PHP';
$string['selecttable'] = 'Sélectionner le tableau & #160;:';
$string['table'] = 'Tableau';
$string['tablenameempty'] = 'Le nom de la table ne peut pas être vide';
$string['tables'] = 'Tableaux';
$string['unknownfield'] = 'Se réfère à un champ inconnu';
$string['unknowntable'] = 'Se réfère à un tableau inconnu';
$string['unload'] = 'Décharger';
$string['up'] = 'Up';
$string['view'] = 'Affichage';
$string['viewedited'] = 'Affichage édité';
$string['vieworiginal'] = 'Afficher l\'original';
$string['viewphpcode'] = 'Afficher le code PHP';
$string['view_reserved_words'] = 'Afficher les mots réservés';
$string['viewsqlcode'] = 'Afficher le code SQL';
$string['view_structure_php'] = 'Affichage de la structure PHP';
$string['view_structure_sql'] = 'Affichage de la structure SQL';
$string['view_table_php'] = 'Afficher le tableau PHP';
$string['view_table_sql'] = 'Affichage du tableau SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Clés étrangères violées';
$string['violatedforeignkeysfound'] = 'Clés étrangères violées trouvées';
$string['violations'] = 'Violations';
$string['wrong'] = 'Faux';
$string['wrongdefaults'] = 'Erreurs trouvées par défaut';
$string['wrongints'] = 'Mauvais nombre d\'entiers trouvés';
$string['wronglengthforenum'] = 'Longueur incorrecte pour le champ enum';
$string['wrongnumberofreffields'] = 'Mauvais nombre de champs de référence';
$string['wrongreservedwords'] = 'Utilisez actuellement des mots réservés<br />(notez que les noms de table sont\'t important if using $CFG->prefix)';
$string['wrongoraclesemantics'] = 'Mauvaise sémantique Oracle BYTE trouvée';
$string['yesextraindexesfound'] = 'Les index supplémentaires suivants ont été trouvés.';
$string['yesmissingindexesfound'] = '<p>Some missing indexes have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to create all of them. Remember to backup your data first!</p>
<p>After doing that, it\'s highly recommended to execute this utility again to check that no more missing indexes are found.</p>';
$string['yeswrongdefaultsfound'] = '<p>Some inconsistent defaults have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to fix them all. Remember to backup your data first!</p>
<p>After doing that, it\'s highly recommended to execute this utility again to check that no more inconsistent defaults are found.</p>';
$string['yeswrongintsfound'] = '<p>Some wrong integers have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to fix them. Remember to backup your data first!</p>
<p>After fixing them, it is highly recommended to execute this utility again to check that no more wrong integers are found.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Some Oracle columns using BYTE semantics have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to convert them all. Remember to backup your data first!</p>
<p>After doing that, it\'s highly recommended to execute this utility again to check that no more wrong semantics are found.</p>';
$string['privacy:metadata'] = 'Le plugin éditeur XMLDB ne stocke aucune donnée personnelle.';
