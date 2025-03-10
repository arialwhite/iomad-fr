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
 * @package     tool_brickfield
 * @category    string
 * @copyright   2020 Brickfield Education Labs, https://www.brickfield.ie - Author: Karen Holland
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Boîte à outils pour l\'accessibilité';
$string['accessibility'] = 'Accessibilité';
$string['accessibilitydisabled'] = 'La trousse d\'accessibilité Brickfield n\'est pas activée sur ce site. Contactez votre administrateur de site pour activer.';
$string['accessibilityreport'] = 'Boîte à outils pour l\'accessibilité';
$string['analysistype'] = 'Activer les demandes d\'analyse';
$string['analysistypedisabled'] = 'L\'analyse du contenu est désactivée';
$string['analysistype_desc'] = 'Permettre de demander une analyse de l\'accessibilité du contenu';
$string['analysis:disabled'] = 'Handicapé';
$string['analysis:byrequest'] = 'Sur demande';
$string['brickfield'] = 'Boîte à outils Brickfield';
$string['brickfield:viewcoursetools'] = 'Voir les rapports par cours';
$string['brickfield:viewsystemtools'] = 'Voir les rapports pour tous les cours';
$string['accessibilitytool'] = 'Outil d\'accessibilité Brickfield';
$string['accessibilitytools'] = 'Outils d\'accessibilité Brickfield';
$string['allcourses'] = 'Tous les cours examinés ({$a})';
$string['allcoursescat'] = 'Tous les cours examinés pour la catégorie {$a->catname} ({$a->count})';
$string['batch'] = 'Limite du lot';
$string['bulkprocesscaches'] = 'Cache en vrac';
$string['bulkprocesscourses'] = 'Contrôle de l\'accessibilité des lots en vrac';
$string['cachepending'] = 'Les données sommaires sont en cours de compilation.';
$string['checkidvalidation'] = 'Tâche de vérifier les cas de vérification non valides';
$string['checkscompleted'] = 'Vérifications effectuées : {$a}';
$string['checktype'] = 'Groupe de contrôle';
$string['checktype:form'] = 'Formulaire';
$string['checktype:image'] = 'Image';
$string['checktype:layout'] = 'Mise en page';
$string['checktype:link'] = 'Lien';
$string['checktype:media'] = 'Médias';
$string['checktype:table'] = 'Tableau';
$string['checktype:text'] = 'Texte';
$string['cmpercent'] = 'Pourcentage des activités';
$string['cmpercenterrors'] = 'Pourcentage d \' erreurs';
$string['cmpercenttitle'] = 'Total % ventilation des activités par rapport aux erreurs';
$string['confirmationmessage'] = 'This course has been scheduled for analysis. Analysis will be completed at the earliest
by {$a}. Check back after then.';
$string['contactadmin'] = 'Veuillez contacter votre administrateur pour compléter l\'inscription.';
$string['contextid'] = 'Contexte';
$string['core_course'] = 'Cours';
$string['core_question'] = 'Questions bancaires';
$string['count'] = 'Nombre';
$string['coursecount'] = 'Nombre de cours';
$string['deletehistoricaldata'] = 'Supprimer les résultats des vérifications historiques';
$string['dependency'] = 'Selon';
$string['emptycategory'] = 'Aucun cours trouvé pour la catégorie {$a}';
$string['emptytagcourses'] = 'Aucun résultat trouvé pour les cours avec tags configurés';
$string['enableaccessibilitytools'] = 'Activer les outils d\'accessibilité';
$string['enableaccessibilitytools_desc'] = 'La trousse d\'accessibilité aide à cerner les problèmes d\'accessibilité dans les cours.';
$string['errorlink'] = 'Modifier l\'instance d\'erreur pour {$a}';
$string['errors'] = 'Erreurs : {$a}';
$string['eventanalysis_requested'] = 'Analyse de contenu demandée';
$string['eventanalysis_requesteddesc'] = 'Une analyse du contenu a été demandée pour le cours {$a}.';
$string['eventreport_viewed'] = 'Rapport d\'accessibilité consulté';
$string['eventreport_vieweddesc'] = 'Accessibility report was viewed for course id {$a->course},
category id {$a->category}, tab {$a->tab}.';
$string['eventreport_downloaded'] = 'Téléchargement du résumé de l\'accessibilité';
$string['eventreport_downloadeddesc'] = 'Le résumé de l\'accessibilité a été téléchargé pour le cours id {$a}.';
$string['failed'] = 'Échec';
$string['failedcount'] = 'Échec : {$a}';
$string['tools'] = 'Rapports';
$string['fullcachedone'] = 'Désactiver la mise en cache';
$string['hideshow'] = 'Masquer/afficher';
$string['innercontextid'] = 'Contexte intérieur';
$string['invalidaccessibilitytool'] = 'Sous-plugin d\'accessibilité non valide demandé.';
$string['invalidcategoryid'] = 'Catégorie non valide, veuillez vérifier votre entrée';
$string['invalidcourseid'] = 'Cours non valide, veuillez vérifier votre entrée';
$string['invalidlinkphrases'] = 'cliquez ici ici ici.Informations ici.Informations ici.En savoir plus.En savoir plus ici.Informations supplémentaires.';
$string['module'] = 'Module';
$string['modulename'] = 'Nom';
$string['newwindowphrases'] = 'nouvelle fenêtre';
$string['noerrorsfound'] = 'Aucune erreur d\'accessibilité commune n\'a été trouvée pour vos paramètres de recherche. Félicitations !';
$string['norecords'] = 'Aucun document pertinent n\'a été trouvé pour vos paramètres de recherche.';
$string['notregistered'] = 'Votre trousse d\'accessibilité doit être enregistrée.';
$string['notvalidated'] = 'Votre trousse d\'accessibilité est fonctionnelle tout en étant validée.';
$string['numinstances'] = 'Nombre d \' instances';
$string['pagedesc:checktype'] = '<p>Afin de résumer et d\'analyser les résultats des différentes vérifications effectuées, nous avons groupé ces vérifications en différents types de contenu. Par conséquent, tous les résultats de vérification d\'accessibilité liés à l\'image sont dans le groupe de type de contenu "Image", tous les résultats de vérification d\'accessibilité liés à la mise en page sont dans le groupe de type de contenu "Layout", et ainsi de suite.</p><p> Les activités sont incluses en tant qu\'activités, ressources ou domaines de contenu liés aux cours eux-mêmes.</p><p> La page du tableau de type de contenu affiche la ventilation des erreurs par groupe de type de contenu: Image, mise en page, lien, médias, table et texte.</p>';
$string['pagedesc:pertarget'] = '<p>Pour résumer et analyser les résultats de la vérification par activité, nous avons groupé ces résultats dans les différentes activités détectées.</p><p> Les activités sont incluses en tant qu\'activités, ressources ou autres domaines de contenu liés aux cours eux-mêmes. Chaque activité sans erreur détectée est comptée comme étant passée, chaque activité avec une ou plusieurs erreurs détectées est comptée comme ayant échoué. Le rapport des activités passées à l\'échec est ensuite affiché.</p><p> La page du tableau de répartition des activités affiche le rapport entre les cas passés et les cas échoués au total, par activité, comme l\'affectation, le cours, l\'étiquette, etc.</p>';
$string['pagedesctitle:checktype'] = 'Types de contenu expliqués';
$string['pagedesctitle:pertarget'] = 'Ventilation par activité expliquée';
$string['passed'] = 'Décédé';
$string['passedcount'] = 'Passé : {$a}';
$string['passrate'] = 'Taux de passage : {$a}%';
$string['perpage'] = 'Éléments à afficher par page';
$string['privacy:metadata'] = 'Le plugin de rapport de vérification d\'accessibilité ne stocke aucune donnée personnelle.';
$string['processanalysisrequests'] = 'Demandes d\'analyse de contenu';
$string['registernow'] = 'Veuillez vous inscrire maintenant.';
$string['registrationinfo'] = '<p> Ce processus d\'enregistrement vous permet d\'utiliser la version de démarrage de la trousse d\'accessibilité Brickfield pour votre site Moodle enregistré.</p><p> Cette utilisation est soumise à la <a href="{$a}" cible="_blank"> Brickfield Éducation Conditions générales de laboratoire (ouvre dans une nouvelle fenêtre)</a> et que vous acceptez, en utilisant ce produit.</p>';
$string['remaining'] = '({$a} erreurs restantes)';
$string['response:0'] = 'Cette URL fait\'t point anywhere';
$string['response:404'] = 'Cette page URL n\'a pas été trouvée';
$string['schedule:blocknotscheduled'] = '<p> Ce cours n\'a pas encore été prévu pour l\'analyse, afin de trouver des problèmes communs d\'accessibilité.</p>';
$string['schedule:notscheduled'] = '<p> Ce cours n\'a pas encore été prévu pour l\'analyse afin de trouver des questions communes d\'accessibilité.</p><p> En cliquant sur le bouton « Soumettre pour analyse », vous confirmez que vous voulez que tout votre contenu HTML de cours pertinent, comme les descriptions de sections de cours, les descriptions d\'activités, les questions, les pages et plus, soit programmé pour l\'analyse.</p><p> Cette analyse effectuera plusieurs vérifications communes de l\'accessibilité de votre cours HTML contenu, et ces résultats s\'afficheront ensuite sur ces pages de rapport de boîte à outils d\'accessibilité. L\'analyse sera traitée en arrière-plan, par tâches planifiées, de sorte que sa vitesse d\'achèvement dépendra du calendrier des tâches et des horaires d\'exécution des tâches.</p>';
$string['schedule:requestanalysis'] = 'Soumettre pour analyse';
$string['schedule:scheduled'] = 'Ce cours est prévu pour analyse.';
$string['schedule:sitenotscheduled'] = '<p>Le contenu global (indépendant du cours) n\'a pas encore été prévu pour l\'analyse afin de trouver des problèmes communs d\'accessibilité.</p><p> En cliquant sur le bouton « Soumettre pour l\'analyse », vous confirmez que vous voulez que tout votre contenu global pertinent (indépendant du cours) soit programmé pour l\'analyse.</p><p> Cette analyse permettra d\'effectuer de multiples vérifications communes de l\'accessibilité de ce contenu, et ces résultats s\'afficheront ensuite sur ces pages de rapports sur les outils d\'accessibilité. L\'analyse sera traitée en arrière-plan, par tâches planifiées, de sorte que sa vitesse d\'achèvement dépendra du calendrier des tâches et des horaires d\'exécution des tâches.</p>';
$string['schedule:sitescheduled'] = 'Le contenu global (indépendant du cours) doit être analysé.';
$string['settings'] = 'Paramètres de la trousse d\'accessibilité';
$string['taberrors'] = 'Vérifier les erreurs';
$string['targetavetitle'] = 'Erreurs moyennes par activité';
$string['targetpercentage'] = 'Pourcentage de cas passés/non par activité';
$string['targetratio'] = 'Taux de réussite';
$string['tblcheck'] = 'Vérification';
$string['tblcheckexample'] = 'Exemple';
$string['tblcheckfailed'] = 'Les vérifications ont échoué';
$string['tblchecksummary'] = 'Résumé';
$string['tblerrorcount'] = 'Erreurs';
$string['tbledit'] = 'Modifier';
$string['tblhtmlcode'] = 'Code HTML existant';
$string['tblinstance'] = 'Décision';
$string['tblline'] = 'Ligne';
$string['tbloverallpercentage'] = 'Erreurs globales %';
$string['tblpercentage'] = 'Pourcentage';
$string['tblpreview'] = 'Aperçu';
$string['tbltarget'] = 'Activité';
$string['tblupdateto'] = 'Mettre à jour';
$string['titleerrorscount'] = 'Détails d\'erreur : (montrant les premières erreurs {$a})';
$string['titleactivityresultsall'] = 'Résultats par activité: tous les cours examinés ({$a->count})';
$string['titleactivityresultspartial'] = 'Résultats par activité : cours {$a->name}';
$string['titleall'] = 'Détails d\'erreur : tous les cours examinés ({$a->count})';
$string['titlechecktyperesultsall'] = 'Résultats par type de contenu: tous les cours examinés ({$a->compte} cours)';
$string['titlechecktyperesultspartial'] = 'Résultats par type de contenu : cours {$a->name}';
$string['titleerrorsall'] = 'Détails d\'erreur : tous les cours examinés ({$a->count})';
$string['titleerrorspartial'] = 'Détails de l\'erreur : cours {$a->nom}';
$string['titlepartial'] = 'Détails de l\'erreur : cours {$a->nom}';
$string['titleprintableall'] = 'Cours {$a->nom}';
$string['titleprintablepartial'] = 'Cours {$a->nom}';
$string['toptargets'] = 'Les activités ont échoué';
$string['toperrors'] = 'Erreurs principales';
$string['totalactivities'] = 'Total des activités';
$string['totalactivitiescount'] = 'Total des activités : {$a}';
$string['totalareas'] = 'Total des zones';
$string['totalerrors'] = 'Erreurs totales';
$string['totalgrouperrors'] = 'Total des erreurs (somme) par type de contenu';
$string['updatesummarydata'] = 'Mise à jour des données sommaires du site';
$string['messageprovider:warningcheckid'] = 'Avertissement des check-ids invalides';
$string['warningcheckidbody'] = 'There is an issue with a Brickfield check
 which is active but not listed in the database. Please investigate.';
$string['warningcheckidsubject'] = 'Brickfield Toolkit checkID avertissement';

// Check descriptions.
$string['checkdesc:alinksdontopennewwindow'] = 'Les liens ouvrant dans une nouvelle fenêtre devraient avertir les utilisateurs à l\'avance.';
$string['checkdesc:amustcontaintext'] = 'Un lien doit contenir du texte à percevoir.';
$string['checkdesc:areadontopennewwindow'] = 'Les zones, utilisées dans les cartes d\'images, qui s\'ouvrent dans une nouvelle fenêtre devraient avertir les utilisateurs à l\'avance.';
$string['checkdesc:areahasaltvalue'] = 'Les zones utilisées dans les cartes d\'images ne devraient pas manquer de texte alt (alternative), semblable aux images.';
$string['checkdesc:asuspiciouslinktext'] = 'Le texte du lien devrait être descriptif et fournir un contexte sur sa destination.';
$string['checkdesc:basefontisnotused'] = 'Les éléments de base (utilisés traditionnellement pour le formatage) ne sont pas accessibles et ne devraient pas être utilisés.';
$string['checkdesc:blinkisnotused'] = 'Les éléments Blink, qui clignotent sur et hors, ne sont pas accessibles et ne doivent pas être utilisés.';
$string['checkdesc:boldisnotused'] = 'Les éléments gras b) ne devraient pas être utilisés; les éléments "forts" devraient plutôt être utilisés.';
$string['checkdesc:contenttoolong'] = 'La longueur totale du contenu de la page ne doit pas dépasser 500 mots.';
$string['checkdesc:csstexthascontrast'] = 'Le contraste de couleur entre le texte et le fond est trop faible.';
$string['checkdesc:embedhasassociatednoembed'] = 'Les éléments intégrés (pour l\'intégration du multimédia) ne devraient pas manquer leurs éléments correspondants "noembed".';
$string['checkdesc:headerh3'] = 'En-têtes suivant les en-têtes H3 (l\'option grand en-tête de l\'éditeur) ne doivent pas briser la hiérarchie de l\'en-tête de page.';
$string['checkdesc:headershavetext'] = 'Un en-tête doit contenir du texte à percevoir.';
$string['checkdesc:iisnotused'] = 'Les éléments italiques i) ne devraient pas être utilisés; ils devraient plutôt être utilisés.';
$string['checkdesc:imgaltisdifferent'] = 'Le texte alt (alternative) ne doit pas être le nom du fichier image.';
$string['checkdesc:imgaltistoolong'] = 'Le texte alt (alternative) ne doit pas dépasser le maximum autorisé (125) caractères.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'Image alt (alternative) texte ne doit pas être vide, surtout lorsque l\'image a un lien allant ailleurs.';
$string['checkdesc:imgaltnotplaceholder'] = 'Le texte de l\'image alt (alternative) ne devrait pas être un simple texte d\'emplacement, comme "image".';
$string['checkdesc:imghasalt'] = 'Le texte de l\'image alt (alternative) ne doit pas manquer pour les éléments d\'image, à moins qu\'il ne soit purement décoratif et sans signification.';
$string['checkdesc:imgwithmaphasusemap'] = 'Les cartes d\'images, avec des zones cliquables, doivent correspondre aux éléments "usemap" et "map".';
$string['checkdesc:legendtextnotempty'] = 'Les éléments de légende, utilisés pour le sous-titrage des éléments du jeu de champs, doivent contenir du texte.';
$string['checkdesc:marqueeisnotused'] = 'Les éléments de marque (auto-scrolling) ne sont pas accessibles et ne devraient pas être utilisés.';
$string['checkdesc:noheadings'] = 'Aucun en-tête ne rend le contenu moins structuré et plus difficile à lire.';
$string['checkdesc:objectmusthaveembed'] = 'Les éléments d\'objet (pour l\'intégration des ressources externes) ne devraient pas manquer les éléments correspondants « intégrés ».';
$string['checkdesc:objectmusthavetitle'] = 'Les éléments d\'objet (pour intégrer des ressources externes) ne devraient pas manquer leurs descriptions correspondantes de «titre».';
$string['checkdesc:objectmusthavevalidtitle'] = 'Les éléments d\'objet (pour intégrer des ressources externes) devraient avoir des "titres" correspondants avec du texte.';
$string['checkdesc:strikeisnotused'] = 'Il ne faut pas utiliser d\'éléments de frappe (grèvement); il faut plutôt utiliser "del" (supprimé).';
$string['checkdesc:tabledatashouldhaveth'] = 'Idéalement, les tableaux ne devraient pas manquer d\'en-têtes.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Les résumés et les sous-titres des tableaux ne devraient pas être identiques.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Les tableaux ne devraient idéalement pas avoir de cellules fusionnées.';
$string['checkdesc:tablethshouldhavescope'] = 'Les champs de la ligne ou de la colonne de tableau (utilisés pour cartographier la ligne et la colonne de chaque cellule) doivent être déclarés.';

// Registration process.
$string['activate'] = 'Activer';
$string['activated'] = 'Le plugin est activé et prêt à être utilisé.';
$string['activationform'] = 'Enregistrement Brickfield';
$string['activationheader'] = 'Activation de Brickfield';
$string['activationinfo'] = '<p> Pour utiliser ce plugin, vous devez fournir des clés valides pour ce site dans ce formulaire.</p><p> S\'il vous plaît <a href="{$a}" data-action="send_info" cible="_blank">enregistrer au portail Brickfield (ouvre dans une nouvelle fenêtre)</a> pour recevoir ces clés si vous ne les avez pas déjà. </p><p>Une fois activée, vos clés seront validées par des tâches cron programmées.</p>';
$string['contenttypeerrors'] = 'Résultats totaux des tests de contenu d\'activité par cours et par type de contenu.';
$string['contentyperesults'] = 'Total passé/échec pour les zones de contenu par cours.';
$string['country'] = 'Pays';
$string['country_help'] = 'Pays du site';
$string['hashcorrect'] = 'Le code saisi est correct.';
$string['hashincorrect'] = 'Le code saisi est incorrect.';
$string['inactive'] = 'Le plugin est inactif et ne peut pas être utilisé. Veuillez saisir les clés d\'enregistrement valides et appuyez sur "Activer".';
$string['installed'] = 'Plugin installé';
$string['installedcli'] = 'Plugin installé via la ligne de commande';
$string['installeddescription'] = 'Le plugin a été installé, rediriger vers le formulaire d\'activation.';
$string['language'] = 'Langue';
$string['language_help'] = 'Langue du site';
$string['mobileservice'] = 'Services mobiles activés ({$a})';
$string['moreinfo'] = 'Informations supplémentaires';
$string['numcourses'] = 'Nombre de cours';
$string['numfactivities'] = 'Nombre d\'activités ({$a})';
$string['numfiles'] = 'Nombre de fichiers ({$a})';
$string['numusers'] = 'Nombre d\'utilisateurs ({$a})';
$string['percheckerrors'] = 'Nombre de tests spécifiques et d\'erreurs par contrôle par cours.';
$string['registration'] = 'Formulaire d\'inscription';
$string['release'] = 'Sortie de moodle ({$a})';
$string['secretkey'] = 'Clé API';
$string['secretkey_help'] = 'Ce code est reçu par courriel après l\'inscription.';
$string['sendfollowinginfo'] = '<p> Les informations suivantes seront envoyées périodiquement pour contribuer uniquement aux statistiques globales. Il ne sera rendu public sur aucune liste centrale.</p> [$a]';
$string['sitehash'] = 'Clé secrète';
$string['sitehash_help'] = 'Ce code est reçu par courriel après l\'inscription.';
$string['usersmobileregistered'] = 'Nombre d\'utilisateurs ayant des appareils mobiles enregistrés ({$a})';
$string['validationerror'] = 'La validation de la clé d\'enregistrement a échoué. Vérifiez que l\'URL et les clés du site sont correctes.';

// Tool section.
$string['activityresults:pluginname'] = 'Rapport sur l\'outil d\'accessibilité pour la ventilation des activités';
$string['activityresults:toolname'] = 'Résumé de la ventilation des activités';
$string['activityresults:toolshortname'] = 'Ventilation par activité';
$string['advanced:pluginname'] = 'Rapport sur l\'outil d\'accessibilité avancé';
$string['advanced:toolname'] = 'Résumé avancé';
$string['advanced:toolshortname'] = 'Avancé';
$string['checktyperesults:pluginname'] = 'Rapport sur l\'accessibilité des types de contenu';
$string['checktyperesults:toolname'] = 'Sommaire des types de contenu';
$string['checktyperesults:toolshortname'] = 'Types de contenu';
$string['errors:pluginname'] = 'Outil d\'accessibilité de la liste des erreurs';
$string['errors:toolname'] = 'Résumé de la liste des erreurs';
$string['errors:toolshortname'] = 'Liste des erreurs';
$string['printable:pluginname'] = 'Rapport sommaire sur l\'outil d\'accessibilité';
$string['printable:toolname'] = 'Rapport de synthèse';
$string['printable:toolshortname'] = 'Rapport de synthèse';
$string['printable:downloadpdf'] = 'Télécharger le PDF';
$string['printable:printreport'] = 'Rapport imprimable';
$string['error:nocoursespecified'] = 'Le rapport de synthèse exige un ID de cours valide. Veuillez accéder à la trousse d\'accessibilité à partir d\'un cours.';
$string['pdf:filename'] = 'Brickfield_Sommaryreport_CourseID-{$a}';

// Advanced page.
$string['bannercontentone'] = 'L\'Enterprise Accessibility Toolkit possède un ensemble complet de fonctionnalités pour aider votre organisation à améliorer l\'accessibilité de vos cours. <a href="{$a}">Contactez Brickfield Education Labs</a> pour réserver une démo gratuite des fonctionnalités avancées.';
$string['bannercontenttwo'] = 'Construisez une plateforme d\'enseignement et d\'apprentissage efficace et inclusive en trouvant du contenu qui ne répond pas aux directives, en corrigeant les problèmes et en protégeant votre contenu de cours Moodle avec des fichiers accessibles, un éditeur et des fonctionnalités améliorées.';
$string['bannerheadingone'] = 'Mise à niveau de la trousse d\'outils sur l\'accessibilité des entreprises';
$string['contactus'] = 'Contactez-nous';
$string['buttonone'] = 'Obtenez une démo gratuite';
$string['contentone'] = 'Évaluer automatiquement le contenu de votre cours et évaluer les questions d\'accessibilité.';
$string['contenttwo'] = 'Mise à jour en vrac texte flou ou manquant pour les liens Web, descriptions d\'images et sous-titres vidéo.';
$string['contentthree'] = 'Fournissez à vos élèves du contenu dans des formats accessibles, y compris audio, ePub et braille électronique.';
$string['contentfour'] = 'Déterminer quelles activités ont le plus de problèmes d\'accessibilité pour prioriser les efforts.';
$string['contentfive'] = 'Correction automatique des balises HTML obsolètes.';
$string['contentsix'] = 'Fournir aux enseignants des conseils juste à temps pour créer un meilleur contenu.';
$string['footerheading'] = 'Rubrique';
$string['headingone'] = 'Évaluer le contenu';
$string['headingtwo'] = 'Réparation';
$string['headingthree'] = 'Formats de fichiers accessibles';
$string['headingfour'] = 'Activités ciblées';
$string['headingfive'] = 'Corrections HTML';
$string['headingsix'] = 'Appui aux résultats';
$string['icon:analytics-custom'] = 'Icône analytique';
$string['icon:tools-custom'] = 'icône des outils';
$string['icon:file-edit-custom'] = 'Éditer l\'icône du fichier';
$string['icon:search-plus-custom'] = 'icône de recherche';
$string['icon:wand-magic-custom'] = 'Icône de baguette magique';
$string['icon:hands-helping-custom'] = 'Aide à l\'icône des mains';
