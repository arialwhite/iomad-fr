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
 * Strings for component 'qtype_calculated', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage calculated
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['additem'] = 'Ajouter un élément';
$string['addmoreanswerblanks'] = 'Ajouter une autre réponse en blanc.';
$string['addsets'] = 'Ajouter un ou plusieurs ensembles';
$string['answerformula'] = 'Réponse {$a} formule';
$string['answerdisplay'] = 'Affichage des réponses';
$string['answerhdr'] = 'Réponse';
$string['answerstoleranceparam'] = 'Paramètres de tolérance des réponses';
$string['answerwithtolerance'] = '{$a->réponse} (±{$a->tolérance} {$a->tolérancetype})';
$string['anyvalue'] = 'Toute valeur';
$string['atleastoneanswer'] = 'Vous devez fournir au moins une réponse.';
$string['atleastonerealdataset'] = 'Il devrait y avoir au moins un ensemble de données réel dans le texte en question';
$string['atleastonewildcard'] = 'Il devrait y avoir au moins une carte wild dans la formule de réponse ou le texte de question';
$string['calcdistribution'] = 'Distribution';
$string['calclength'] = 'Lieux décimaux';
$string['calcmax'] = 'Maximum';
$string['calcmin'] = 'Minimum';
$string['choosedatasetproperties'] = 'Choisissez les propriétés de l\'ensemble de données wildcards';
$string['choosedatasetproperties_help'] = 'Un ensemble de données est un ensemble de valeurs inséré à la place d\'une carte joker. Vous pouvez créer un ensemble de données privé pour une question spécifique, ou un ensemble de données partagées qui peut être utilisé pour d\'autres questions calculées dans la catégorie.';
$string['correctanswerformula'] = 'Formule de réponse correcte';
$string['correctanswershows'] = 'La réponse correcte apparaît';
$string['correctanswershowsformat'] = 'Présentation';
$string['correctfeedback'] = 'Pour toute réponse correcte';
$string['dataitemdefined'] = 'avec {$a} des valeurs numériques déjà définies sont disponibles';
$string['datasetrole'] = 'Les cartes wild <strong>{x..}</strong> seront remplacées par une valeur numérique de leur ensemble de données';
$string['decimals'] = 'avec {$a}';
$string['deleteitem'] = 'Supprimer l\' élément';
$string['deletelastitem'] = 'Supprimer le dernier élément';
$string['distributionoption'] = 'Sélectionnez l\'option de distribution';
$string['editdatasets'] = 'Modifier les ensembles de données wildcards';
$string['editdatasets_help'] = 'Les valeurs de Wildcard peuvent être créées en entrant un nombre dans chaque champ de la carte sauvage, puis en cliquant sur le bouton Ajouter. Pour générer automatiquement 10 valeurs ou plus, sélectionnez le nombre de valeurs requis avant de cliquer sur le bouton Ajouter. Une distribution uniforme signifie que toute valeur entre les limites est également susceptible d\'être générée; une distribution loguniforme signifie que les valeurs vers la limite inférieure sont plus probables.';
$string['editdatasets_link'] = 'question/type/calculé';
$string['existingcategory1'] = 'utilisera un ensemble de données partagé déjà existant';
$string['existingcategory2'] = 'un fichier d\'un ensemble de fichiers déjà existant qui sont également utilisés par d\'autres questions dans cette catégorie';
$string['existingcategory3'] = 'un lien d\'un ensemble de liens déjà existant qui sont également utilisés par d\'autres questions de cette catégorie';
$string['forceregeneration'] = 'régénération de force';
$string['forceregenerationall'] = 'forceregénération de toutes les cartes sauvages';
$string['forceregenerationshared'] = 'forceregénération de seuls wildcards non partagés';
$string['functiontakesatleasttwo'] = 'La fonction {$a} doit avoir au moins deux arguments';
$string['functiontakesnoargs'] = 'La fonction {$a} ne prend aucun argument';
$string['functiontakesonearg'] = 'La fonction {$a} doit avoir exactement un argument';
$string['functiontakesoneortwoargs'] = 'La fonction {$a} doit avoir un ou deux arguments';
$string['functiontakestwoargs'] = 'La fonction {$a} doit avoir exactement deux arguments';
$string['generatevalue'] = 'Générer une nouvelle valeur entre';
$string['getnextnow'] = 'Obtenir un nouveau \'Item to Add\' now';
$string['hexanotallowed'] = 'Ensemble de données <strong>{$a->name}</strong> La valeur de format hexadécimale {$a->value} n\'est pas autorisée';
$string['illegalformulasyntax'] = 'Syntaxe de formule illégale commençant par \'{$a}\'';
$string['incorrectfeedback'] = 'Pour toute réponse incorrecte';
$string['Point(s)'] = 'item(s)';
$string['itemno'] = 'Poste {$a}';
$string['itemscount'] = 'Éléments <br />Conte';
$string['itemtoadd'] = 'Élément à ajouter';
$string['keptcategory1'] = 'utilisera le même ensemble de données partagé qu\'avant';
$string['keptcategory2'] = 'un fichier de la même catégorie réutilisable ensemble de fichiers qu\'avant';
$string['keptcategory3'] = 'un lien de la même catégorie réutilisable ensemble de liens qu\'avant';
$string['keptlocal1'] = 'utilisera le même ensemble de données privées qu\'avant';
$string['keptlocal2'] = 'un fichier de la même question privé ensemble de fichiers qu\'avant';
$string['keptlocal3'] = 'un lien de la même question privée ensemble de liens qu\'avant';
$string['lastitem(s)'] = 'derniers éléments';
$string['lengthoption'] = 'Sélectionnez l\'option longueur';
$string['loguniform'] = 'Loguniformes';
$string['loguniformbit'] = 'chiffres, d\'une distribution loguniforme';
$string['makecopynextpage'] = 'Page suivante (nouvelle question)';
$string['mandatoryhdr'] = 'Cartes sauvages obligatoires présentes dans les réponses';
$string['max'] = 'Max';
$string['min'] = 'Min';
$string['minmax'] = 'Gamme de valeurs';
$string['missingformula'] = 'Formule manquante';
$string['missingname'] = 'Nom de la question manquante';
$string['missingquestiontext'] = 'Texte manquant de la question';
$string['mustenteraformulaorstar'] = 'Vous devez entrer une formule ou \'*\'.';
$string['newcategory1'] = 'utilisera un nouvel ensemble de données partagé';
$string['newcategory2'] = 'un fichier d\'un nouvel ensemble de fichiers qui peut également être utilisé par d\'autres questions de cette catégorie';
$string['newcategory3'] = 'un lien à partir d\'un nouvel ensemble de liens pouvant également être utilisé par d\'autres questions de cette catégorie';
$string['newlocal1'] = 'utilisera un nouvel ensemble de données privé';
$string['newlocal2'] = 'un fichier d\'un nouvel ensemble de fichiers qui ne sera utilisé que par cette question';
$string['newlocal3'] = 'un lien d\'un nouvel ensemble de liens qui ne sera utilisé que par cette question';
$string['nextitemtoadd'] = 'Suivant\'Item to Add\'';
$string['nextpage'] = 'Page suivante';
$string['nocoherencequestionsdatyasetcategory'] = 'Pour l\'identifiant de question {$a->qid}, l\'identifiant de catégorie {$a->qcat} n\'est pas identique à la carte wild partagée {$a->name} identificateur de catégorie {$a->sharedcat}. Modifier la question.';
$string['nocommaallowed'] = 'Le , ne peut pas être utilisé, utiliser . comme en 0.013 ou 1.3e-2';
$string['nodataset'] = 'rien - ce n\'est pas une carte sauvage';
$string['nosharedwildcard'] = 'Aucune carte joker partagée dans cette catégorie';
$string['notvalidnumber'] = 'La valeur de la carte Wild n\'est pas un nombre valide';
$string['oneanswertrueansweroutsidelimits'] = 'Au moins une réponse correcte en dehors des limites de valeur vraie.<br />Modifier les paramètres de tolérance des réponses disponibles en tant que paramètres avancés';
$string['param'] = 'Param {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Pour toute réponse partiellement correcte';
$string['pluginname'] = 'Calculé';
$string['pluginname_help'] = 'Les questions calculées permettent de créer des questions numériques individuelles à l\'aide de wildcards entre crochets qui sont substitués à des valeurs individuelles lors du quiz. Par exemple, la question "Quelle est la zone d\'un rectangle de longueur {l} et de largeur {w}?" aurait la bonne formule de réponse "{l}*{w}" (où * indique la multiplication).';
$string['pluginname_link'] = 'question/type/calculé';
$string['pluginnameadding'] = 'Ajout d\'une question calculée';
$string['pluginnameediting'] = 'Modifier une question calculée';
$string['pluginnamesummary'] = 'Les questions calculées sont comme des questions numériques, mais avec les nombres utilisés au hasard à partir d\'un jeu lorsque le quiz est pris.';
$string['privacy:metadata'] = 'Le plugin de type question calculé ne stocke aucune donnée personnelle.';
$string['possiblehdr'] = 'Cartes wild possibles présentes uniquement dans le texte de la question';
$string['questiondatasets'] = 'Ensembles de données de questions';
$string['questiondatasets_help'] = 'Ensembles de données des cartes wild qui seront utilisés dans chaque question';
$string['questionstoredname'] = 'Question nom enregistré';
$string['replacewithrandom'] = 'Remplacer par une valeur aléatoire';
$string['reuseifpossible'] = 'réutilisation de la valeur précédente si disponible';
$string['sharedwildcard'] = 'Carte wild partagée {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Carte sauvage partagée';
$string['sharedwildcards'] = 'Cartes wild partagées';
$string['significantfigures'] = 'avec {$a}';
$string['significantfiguresformat'] = 'chiffres significatifs';
$string['synchronize'] = 'Synchroniser les données des ensembles de données partagés avec d\'autres questions dans un quiz';
$string['synchronizeno'] = 'Ne pas synchroniser';
$string['synchronizeyes'] = 'Synchroniser';
$string['synchronizeyesdisplay'] = 'Synchroniser et afficher le nom des ensembles de données partagés comme préfixe du nom de la question';
$string['tolerance'] = 'Tolérance ±';
$string['tolerancetype'] = 'Type';
$string['trueanswerinsidelimits'] = 'Réponse correcte : {$a->correct} dans les limites de la valeur réelle {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ERROR Réponse correcte : {$a->correct} hors des limites de la valeur réelle {$a->true}</span>';
$string['uniform'] = 'Uniforme';
$string['uniformbit'] = 'décimales, d\'une distribution uniforme';
$string['updatecategory'] = 'Mettre à jour la catégorie';
$string['updatedatasetparam'] = 'Mettre à jour les paramètres des ensembles de données';
$string['updatetolerancesparam'] = 'Mettre à jour les paramètres de tolérance des réponses';
$string['usedinquestion'] = 'Utilisé pour les questions';
$string['youmustaddatleastoneitem'] = 'Vous devez ajouter au moins un élément de l\'ensemble de données avant de pouvoir enregistrer cette question.';
$string['youmustaddatleastonevalue'] = 'Vous devez ajouter au moins un ensemble de valeurs wild card(s) avant de pouvoir enregistrer cette question.';
$string['newsetwildcardvalues'] = 'nouveaux ensembles de valeurs wild card(s)';
$string['setno'] = 'Définir {$a}';
$string['setwildcardvalues'] = 'ensemble(s) de valeurs wild card(s)';
$string['showitems'] = 'Affichage';
$string['updatewildcardvalues'] = 'Mettre à jour les valeurs wild card(s)';
$string['unsupportedformulafunction'] = 'La fonction {$a} n\'est pas prise en charge';
$string['useadvance'] = 'Utilisez le bouton avance pour voir les erreurs';
$string['wildcard'] = 'Carte sauvage {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Paramètres des cartes Wild utilisés pour générer les valeurs';
$string['wildcardrole'] = 'Les cartes wild <strong>{x..}</strong> seront remplacées par une valeur numérique à partir des valeurs générées';
$string['wildcards'] = 'Cartes sauvages {a}...{z}';
$string['wildcardvalues'] = 'Valeurs de la ou des cartes';
$string['wildcardvaluesgenerated'] = 'Valeurs générées par la ou les cartes';
$string['zerosignificantfiguresnotallowed'] = 'La bonne réponse ne peut pas avoir zéro chiffre significatif!';
