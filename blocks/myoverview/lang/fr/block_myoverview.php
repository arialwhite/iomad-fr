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
 * Lang strings for the My overview block.
 *
 * @package    block_myoverview
 * @copyright  Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allincludinghidden'] = 'Tous (y compris retirés de la vue)';
$string['all'] = 'All';
$string['addtofavourites'] = 'Étoile ce cours';
$string['aria:addtofavourites'] = 'Étoile pour';
$string['aria:allcoursesincludinghidden'] = 'Afficher tous les cours';
$string['aria:allcourses'] = 'Afficher tous les cours sauf les cours retirés de la vue';
$string['aria:card'] = 'Basculer vers la vue carte';
$string['aria:controls'] = 'Contrôles d\'aperçu des cours';
$string['aria:courseactions'] = 'Actions en cours';
$string['aria:coursesummary'] = 'Texte résumé du cours :';
$string['aria:courseprogress'] = 'Progrès réalisés :';
$string['aria:customfield'] = 'Afficher les cours {$a}';
$string['aria:displaydropdown'] = 'Afficher le menu déroulant';
$string['aria:favourites'] = 'Afficher seulement les cours étoilés';
$string['aria:future'] = 'Afficher les futurs cours';
$string['aria:groupingdropdown'] = 'Menu déroulant de regroupement';
$string['aria:inprogress'] = 'Montrer les cours en cours';
$string['aria:list'] = 'Basculer dans la vue liste';
$string['aria:past'] = 'Afficher les cours passés';
$string['aria:removefromfavourites'] = 'Supprimer l\'étoile pour';
$string['aria:summary'] = 'Passez à la vue sommaire';
$string['aria:sortingdropdown'] = 'Tri du menu déroulant';
$string['availablegroupings'] = 'Filtres disponibles';
$string['availablegroupings_desc'] = 'Filtres de cours disponibles pour la sélection par les utilisateurs. Si aucun n\'est sélectionné, tous les cours seront affichés.';
$string['card'] = 'Carte';
$string['cards'] = 'Cartes';
$string['courseprogress'] = 'Progrès réalisés :';
$string['completepercent'] = '% terminé';
$string['createcourse'] = 'Créer un cours';
$string['customfield'] = 'Champ personnalisé';
$string['customfiltergrouping'] = 'Champ à utiliser';
$string['customfiltergrouping_nofields'] = 'Cette option nécessite qu\'un champ personnalisé de cours soit configuré et visible pour tous.';
$string['displaycategories'] = 'Afficher les catégories';
$string['displaycategories_help'] = 'Afficher la catégorie de cours sur les éléments de cours du tableau de bord, y compris les cartes, les éléments de liste et les éléments de résumé.';
$string['favourites'] = 'Étoilé';
$string['future'] = 'Futur';
$string['inprogress'] = 'En cours';
$string['lastaccessed'] = 'Dernier accès';
$string['layouts'] = 'Présentations disponibles';
$string['layouts_help'] = 'Mises en page des cours disponibles pour la sélection par les utilisateurs. Si aucun n\'est sélectionné, la mise en page de la carte sera utilisée.';
$string['list'] = 'Liste';
$string['myoverview:myaddinstance'] = 'Ajouter un nouveau bloc d\'aperçu du cours au tableau de bord';
$string['nocustomvalue'] = 'Pas de {$a}';
$string['past'] = 'Passé';
$string['pluginname'] = 'Aperçu du cours';
$string['privacy:metadata:overviewsortpreference'] = 'La préférence de tri de bloc de vue du cours.';
$string['privacy:metadata:overviewviewpreference'] = 'La vue d\'ensemble du cours bloque la préférence.';
$string['privacy:metadata:overviewgroupingpreference'] = 'L\'aperçu du cours bloque la préférence de regroupement.';
$string['privacy:metadata:overviewpagingpreference'] = 'La vue d\'ensemble du cours bloque la préférence pour le téléappel.';
$string['removefromfavourites'] = 'Déjouez ce cours';
$string['searchcourses'] = "Cours de recherche";
$string['shortname'] = 'Nom abrégé';
$string['summary'] = 'Résumé';
$string['title'] = 'Nom du cours';
$string['aria:hidecourse'] = 'Supprimer {$a} de la vue';
$string['aria:showcourse'] = 'Restaurer {$a} pour afficher';
$string['aria:hiddencourses'] = 'Afficher les cours supprimés de la vue';
$string['hidden'] = 'Cours supprimés de la vue';
$string['hidecourse'] = 'Supprimer de la vue';
$string['hiddencourses'] = 'Supprimé de la vue';
$string['show'] = 'Restaurer pour afficher';
$string['sortbytitle'] = 'Trier par nom de cours';
$string['sortbylastaccessed'] = 'Tri par la dernière consultation';
$string['sortbyshortname'] = 'Tri par nom abrégé';
$string['privacy:request:preference:set'] = 'La valeur du paramètre \'{$a->name}\' was \'{$a->value}\'';
$string['viewquickstart'] = 'Afficher le guide de démarrage rapide';
$string['zero_default_title'] = 'Vous...\'re not enrolled in any courses.';
$string['zero_default_intro'] = 'Une fois que vous\'re enrolled in a course, it will appear here.';
$string['zero_nocourses_intro'] = 'Besoin d\'aide pour commencer? Consultez la cible <a href="{$a->dochref}" title="{$a->doctitle}" Moodle documentation</a>.';
$string['zero_nocourses_title'] = 'Créez votre premier cours';
$string['zero_request_title'] = 'Demandez votre premier cours';
$string['zero_request_intro'] = 'Besoin d\'aide pour commencer? Consultez la cible <a href="{$a->dochref}" title="{$a->doctitle}" Moodle documentation</a> ou faites vos premiers pas avec notre <a href="{$a->quickhref}" title="{$a->quicktitle}" cible="{$a->quicktarget}"> Guide de démarrage rapide</a>.';
