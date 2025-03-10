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
 * Strings for core subsystem 'blog'
 *
 * @package    core_blog
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addnewentry'] = 'Ajouter une nouvelle entrée';
$string['addnewexternalblog'] = 'Enregistrer un blog externe';
$string['assocdescription'] = 'Si vous écrivez un cours et/ou des modules d\'activité, sélectionnez-les ici.';
$string['associated'] = 'Associé {$a}';
$string['associatewithcourse'] = 'Blog sur le cours {$a->nom du cours}';
$string['associatewithmodule'] = 'Blog sur {$a->modtype} : {$a->modname}';
$string['association'] = 'Association';
$string['associations'] = 'Associations';
$string['associationunviewable'] = 'Cette entrée ne peut pas être vue par d\'autres jusqu\'à ce qu\'un cours soit associé avec elle ou le \'Publish to\' field is changed';
$string['author'] = 'Auteur';
$string['autotags'] = 'Ajouter ces balises';
$string['autotags_help'] = 'Entrez une ou plusieurs balises locales (séparées par des virgules) que vous voulez ajouter automatiquement à chaque entrée de blog copiée depuis le blog externe dans votre blog local.';
$string['backupblogshelp'] = 'Si activé, les blogs seront inclus dans les sauvegardes automatisées SITE';
$string['blockexternalstitle'] = 'Blogs externes';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog sur ce {$a->type}';
$string['blogaboutthiscourse'] = 'Ajouter une entrée sur ce cours';
$string['blogaboutthismodule'] = 'Ajouter une entrée à ce sujet {$a}';
$string['blogadministration'] = 'Blog administration';
$string['blogattachment'] = 'Blog joint';
$string['blogdeleteconfirm'] = 'Supprimer l\'entrée du blog \'{$a}\'?';
$string['blogdisable'] = 'Blogging est désactivé!';
$string['blogentries'] = 'Entrées de blog';
$string['blogentriesabout'] = 'Entrées de blog sur {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Entrées de blog sur {$a->cours} par {$a->groupe}';
$string['blogentriesbygroupaboutmodule'] = 'Entrées de blog sur {$a->mod} par {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Entrées de blog sur {$a->cours} par {$a->utilisateur}';
$string['blogentriesbyuseraboutmodule'] = 'Entrées de blog sur ce {$a->mod} par {$a->user}';
$string['blogentrybyuser'] = 'Entrée du blog par {$a}';
$string['blogpreferences'] = 'Préférences du blog';
$string['blogs'] = 'Blogs';
$string['blogscourse'] = 'Blogs de cours';
$string['blogssite'] = 'Blogs du site';
$string['blogtags'] = 'Tags du blog';
$string['cannoteditentryorblog'] = 'Vous ne pouvez pas modifier cette entrée ou ce blog';
$string['cannotviewcourseblog'] = 'Vous n\'avez pas les autorisations requises pour voir des blogs dans ce cours';
$string['cannotviewcourseorgroupblog'] = 'Vous n\'avez pas les autorisations requises pour voir des blogs dans ce cours/groupe';
$string['cannotviewsiteblog'] = 'Vous n\'avez pas les autorisations requises pour voir tous les blogs du site';
$string['cannotviewuserblog'] = 'Vous n\'avez pas les autorisations requises pour lire les blogs de l\'utilisateur';
$string['configexternalblogcrontime'] = 'Combien de fois Moodle vérifie les blogs externes pour de nouvelles entrées.';
$string['configmaxexternalblogsperuser'] = 'Le nombre de blogs externes chaque utilisateur est autorisé à lier à leur blog Moodle.';
$string['configuseblogassociations'] = 'Permet l\'association des entrées de blog avec des cours et des modules de cours.';
$string['configuseexternalblogs'] = 'Permet aux utilisateurs de spécifier les flux de blog externes. Moodle vérifie régulièrement ces flux de blog et copie de nouvelles entrées sur le blog local de cet utilisateur.';
$string['courseblog'] = 'Blog du cours : {$a}';
$string['courseblogdisable'] = 'Les blogs de cours ne sont pas activés';
$string['courseblogs'] = 'Les utilisateurs ne peuvent voir que des blogs pour les personnes qui partagent un cours';
$string['deleteblogassociations'] = 'Associations de blogs';
$string['deleteblogassociations_help'] = 'Si coché, les entrées de blog ne seront plus associées à ce cours ou à toute activité ou ressource de cours. Les entrées de blog elles-mêmes ne seront pas supprimées.';
$string['deleteentry'] = 'Supprimer l\' entrée';
$string['deleteexternalblog'] = 'Désinscrire ce blog externe';
$string['deleteotagswarn'] = 'Voulez-vous vraiment supprimer ces balises de tous les messages de blog et de le supprimer du système?';
$string['description'] = 'Désignation des marchandises';
$string['description_help'] = 'Entrez une phrase ou deux résumant le contenu de votre blog externe. (Si aucune description n\'est fournie, la description enregistrée dans votre blog externe sera utilisée).';
$string['donothaveblog'] = 'Vous n\'avez pas votre propre blog, désolé.';
$string['editentry'] = 'Modifier une entrée de blog';
$string['editexternalblog'] = 'Modifier ce blog externe';
$string['emptybody'] = 'Le corps d\'entrée du blog ne peut pas être vide';
$string['emptyrssfeed'] = 'L\'URL saisie ne pointe pas vers un flux RSS valide';
$string['emptytitle'] = 'Blog entrée titre ne peut pas être vide';
$string['emptyurl'] = 'Vous devez spécifier une URL à un flux RSS valide';
$string['entrybody'] = 'Corps d\'entrée du blog';
$string['entrybodyonlydesc'] = 'Description de l\'entrée';
$string['entryerrornotyours'] = 'Cette entrée n\'est pas à vous.';
$string['entrysaved'] = 'Votre entrée a été enregistrée';
$string['entrytitle'] = 'Titre de l\'entrée';
$string['entrytitlewithlink'] = 'Titre d\'entrée avec lien';
$string['eventblogentriesviewed'] = 'Entrées de blog vues';
$string['eventblogassociationadded'] = 'Association Blog créée';
$string['eventblogassociationdeleted'] = 'Blog association supprimé';
$string['eventblogexternaladded'] = 'Blog externe enregistré';
$string['eventblogexternalremoved'] = 'Blog externe non enregistré';
$string['eventblogexternalupdated'] = 'Blog externe mis à jour';
$string['evententryadded'] = 'Entrée du blog ajouté';
$string['evententrydeleted'] = 'Entrée du blog supprimé';
$string['evententryupdated'] = 'Blog mis à jour';
$string['externalblogcrontime'] = 'Blog externe cron programme';
$string['externalblogdeleteconfirm'] = 'Désinscrire ce blog externe ?';
$string['externalblogdeleted'] = 'Blog externe non enregistré';
$string['externalblogs'] = 'Blogs externes';
$string['eventexternalblogsviewed'] = 'Blogs enregistrés externes consultés';
$string['feedisinvalid'] = 'Ce flux est invalide';
$string['feedisvalid'] = 'Ce flux est valide';
$string['filterblogsby'] = 'Filtrer les entrées par...';
$string['filtertags'] = 'Filtres';
$string['filtertags_help'] = 'Vous pouvez utiliser cette fonctionnalité pour filtrer les entrées que vous voulez utiliser. Si vous spécifiez des balises ici (séparées par des virgules), seules les entrées avec ces balises seront copiées depuis le blog externe.';
$string['groupblog'] = 'Blog de groupe : {$a}';
$string['groupblogdisable'] = 'Le blog de groupe n\'est pas activé';
$string['groupblogentries'] = 'Entrées de blog associées à {$a->coursename} par groupe {$a->groupname}';
$string['groupblogs'] = 'Les utilisateurs ne peuvent voir que des blogs pour les personnes qui partagent un groupe';
$string['incorrectblogfilter'] = 'Type de filtre de blog incorrect spécifié';
$string['intro'] = 'Ce flux RSS a été généré automatiquement par un ou plusieurs blogs.';
$string['invalidgroupid'] = 'ID de groupe non valide';
$string['invalidurl'] = 'Cette URL est inaccessible';
$string['linktooriginalentry'] = 'Entrée de blog originale';
$string['maxexternalblogsperuser'] = 'Nombre maximal de blogs externes par utilisateur';
$string['myprofileuserblogs'] = 'Voir toutes les entrées de blog';
$string['name'] = 'Nom';
$string['name_help'] = 'Entrez un nom descriptif pour votre blog externe. (Si aucun nom n\'est fourni, le titre de votre blog externe sera utilisé).';
$string['noentriesyet'] = 'Aucune entrée visible ici';
$string['noguestpost'] = 'L\'invité ne peut pas poster de blogs!';
$string['nopermissionstodeleteentry'] = 'Vous n\'avez pas les autorisations nécessaires pour supprimer cette entrée de blog';
$string['norighttodeletetag'] = 'Vous n\'avez aucun droit de supprimer cette balise - {$a}';
$string['nosuchentry'] = 'Pas d\'entrée sur ce blog';
$string['notallowedtoedit'] = 'Vous n\'êtes pas autorisé à modifier cette entrée';
$string['numberofentries'] = 'Entrées : {$a}';
$string['numberoftags'] = 'Nombre de balises à afficher';
$string['pagesize'] = 'Entrées de blog par page';
$string['permalink'] = 'Permalien';
$string['personalblogs'] = 'Les utilisateurs peuvent seulement voir leur propre blog';
$string['preferences'] = 'Préférences du blog';
$string['privacy:metadata:core_comments'] = 'Commentaires associés aux entrées de blog';
$string['privacy:metadata:core_files'] = 'Fichiers joints aux entrées de blog';
$string['privacy:metadata:core_tag'] = 'Tags associés aux entrées de blog';
$string['privacy:metadata:external'] = 'Un lien vers un flux RSS externe';
$string['privacy:metadata:external:userid'] = 'L\'ID de l\'utilisateur qui a ajouté l\'entrée de blog externe';
$string['privacy:metadata:external:name'] = 'Le nom de l\'aliment';
$string['privacy:metadata:external:description'] = 'Description de l\'aliment pour animaux';
$string['privacy:metadata:external:url'] = 'L\'URL du flux';
$string['privacy:metadata:external:filtertags'] = 'La liste des balises pour filtrer les entrées avec';
$string['privacy:metadata:external:timemodified'] = 'L\'époque de la dernière modification de l\'association';
$string['privacy:metadata:external:timefetched'] = 'La dernière fois que le flux a été récupéré';
$string['privacy:metadata:post'] = 'Les informations relatives aux entrées de blog';
$string['privacy:metadata:post:userid'] = 'L\'ID de l\'utilisateur qui a ajouté l\'entrée du blog';
$string['privacy:metadata:post:subject'] = 'Le titre d\'entrée du blog';
$string['privacy:metadata:post:summary'] = 'Le texte d\'entrée du blog';
$string['privacy:metadata:post:content'] = 'Le contenu d\'une entrée de blog externe';
$string['privacy:metadata:post:uniquehash'] = 'Un identifiant unique pour une entrée externe, généralement une URL';
$string['privacy:metadata:post:publishstate'] = 'Que l\'entrée soit visible ou non';
$string['privacy:metadata:post:created'] = 'La date à laquelle l\'entrée du blog a été créée';
$string['privacy:metadata:post:lastmodified'] = 'La date de la dernière modification de l\'entrée du blog';
$string['privacy:metadata:post:usermodified'] = 'L\'utilisateur qui a modifié la dernière entrée';
$string['privacy:path:blogassociations'] = 'Articles de blog associés';
$string['privacy:unknown'] = 'Inconnu';
$string['published'] = 'Publié';
$string['publishto'] = 'Publier à';
$string['publishto_help'] = 'There are 3 options:

* Yourself (draft) - Only you and the administrators can see this entry
* Anyone on this site - Anyone who is registered on this site can read this entry
* Anyone in the world - Anyone, including guests, could read this entry';
$string['publishtocourse'] = 'Les utilisateurs partagent un cours avec vous';
$string['publishtocourseassoc'] = 'Membres du cours associé';
$string['publishtocourseassocparam'] = 'Membres de {$a}';
$string['publishtodraft'] = 'Projet';
$string['publishtogroup'] = 'Les utilisateurs partagent un groupe avec vous';
$string['publishtogroupassoc'] = 'Membres de votre groupe dans le cours associé';
$string['publishtogroupassocparam'] = 'Membres de votre groupe dans {$a}';
$string['publishtonoone'] = 'Toi-même (ébauche)';
$string['publishtosite'] = 'N\'importe qui sur ce site';
$string['publishtoworld'] = 'Quiconque dans le monde';
$string['readfirst'] = 'Lisez ceci en premier';
$string['relatedblogentries'] = 'Entrées de blogs connexes';
$string['retrievedfrom'] = 'Extrait';
$string['rssfeed'] = 'Blog Flux RSS';
$string['searchterm'] = 'Recherche : {$a}';
$string['settingsupdatederror'] = 'Une erreur s\'est produite, le paramètre de préférence du blog n\'a pas pu être mis à jour';
$string['siteblogheading'] = 'Site blog';
$string['siteblogdisable'] = 'Le blog du site n\'est pas activé';
$string['siteblogs'] = 'Tous les utilisateurs du site peuvent voir toutes les entrées de blog';
$string['tagdatelastused'] = 'Date tag a été utilisé pour la dernière fois';
$string['tagparam'] = 'Étiquette : {$a}';
$string['tags'] = 'Étiquettes';
$string['tagsort'] = 'Trier l\'affichage de la balise par';
$string['tagtext'] = 'Texte de l\'étiquette';
$string['timefetched'] = 'Heure de la dernière synchronisation';
$string['timewithin'] = 'Afficher les balises utilisées en ces nombreux jours';
$string['updateentrywithid'] = 'Mise à jour de l\'entrée';
$string['url'] = 'URL du flux RSS';
$string['url_help'] = 'Saisissez l\'URL de flux RSS pour votre blog externe.';
$string['useblogassociations'] = 'Activer les associations de blogs';
$string['useexternalblogs'] = 'Activer les blogs externes';
$string['userblog'] = 'Blog utilisateur : {$a}';
$string['userblogentries'] = 'Entrées de blog par {$a}';
$string['valid'] = 'Valide';
$string['viewallblogentries'] = 'Toutes les entrées à ce sujet {$a}';
$string['viewallmodentries'] = 'Voir toutes les entrées à propos de ce {$a->type}';
$string['viewallmyentries'] = 'Voir toutes mes entrées';
$string['viewentriesbyuseraboutcourse'] = 'Voir les entrées à propos de ce cours par {$a}';
$string['viewblogentries'] = 'Entrées à propos de ce {$a->type}';
$string['viewblogsfor'] = 'Afficher toutes les entrées pour...';
$string['viewcourseblogs'] = 'Voir toutes les entrées pour ce cours';
$string['viewgroupblogs'] = 'Afficher les entrées pour le groupe...';
$string['viewgroupentries'] = 'Entrées de groupe';
$string['viewmodblogs'] = 'Afficher les entrées du module...';
$string['viewmodentries'] = 'Entrées de modules';
$string['viewmyentries'] = 'Mes entrées';
$string['viewmyentriesaboutmodule'] = 'Voir mes entrées sur ce {$a}';
$string['viewmyentriesaboutcourse'] = 'Afficher mes entrées sur ce cours';
$string['viewsiteentries'] = 'Afficher toutes les entrées';
$string['viewuserentries'] = 'Voir toutes les entrées par {$a}';
$string['worldblogs'] = 'Le monde peut lire les entrées définies pour être accessibles au monde';
$string['wrongexternalid'] = 'Mauvaise identification de blog externe';
$string['page-blog-edit'] = 'Pages d\'édition de blog';
$string['page-blog-index'] = 'Pages de liste de blog';
$string['page-blog-x'] = 'Toutes les pages du blog';
