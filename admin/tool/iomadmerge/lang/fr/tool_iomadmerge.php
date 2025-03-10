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
 * Define default English language strings for report
 *
 * @author Forrest Gaston
 * @author Juan Pablo Torres Herrera
 * @author Shane Elliott, Pukunui Technology
 * @author Jordi Pujol-Ahulló, SREd, Universitat Rovira i Virgili
 * @author John Hoopes <hoopes@wisc.edu>, University of Wisconsin - Madison
 * @package tool_iomadmerge
 * @link http://moodle.org/mod/forum/discuss.php?d=103425
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['choose_users'] = 'Choisir les utilisateurs à fusionner';
$string['clear_selection'] = 'Effacer la sélection actuelle des utilisateurs';
$string['cligathering:description'] = "Introduire des paires d'id de l'utilisateur pour fusionner la première dans la seconde. Le premier id utilisateur (fromid) « perdra » toutes ses données pour être « migré »\ninto le second (toid). Le « toid » de l'utilisateur comprendra des données provenant des deux utilisateurs.";
$string['cligathering:fromid'] = 'id utilisateur source (fromid):';
$string['cligathering:stopping'] = 'Pour arrêter la fusion, Ctrl+C ou tapez -1 sur les champs de dérid ou de toid.';
$string['cligathering:toid'] = 'id utilisateur cible (toïde):';
$string['dbko_no_transactions'] = '<fort> Fusion a échoué!</strong> <br/>Votre moteur de base de données ne supporte pas les transactions. Par conséquent, votre base de données <strong> a été mise à jour</strong>. Votre statut de base de données peut être incohérent. <br/>Mais, jetez un oeil au journal de fusion et, s\'il vous plaît, informez-vous de l\'erreur aux développeurs de plugins. Vous obtiendrez une solution en peu de temps. Après la mise à jour du plugin à sa dernière version, qui comprendra la solution à ce problème, répéter l\'action de fusion pour le compléter avec succès.';
$string['dbko_transactions'] = '<fort> Fusion a échoué!</strong> <br/>Votre moteur de base de données supporte les transactions. Par conséquent, toute la transaction actuelle a été reportée et <strong> aucune modification n\'a été apportée à votre base de données</strong>.';
$string['dbok'] = 'Fusionner avec succès';
$string['deleted'] = 'L\'utilisateur avec ID {$a} a été supprimé';
$string['error_return'] = 'Retour au formulaire de recherche';
$string['errorsameuser'] = 'Essayer de fusionner le même utilisateur';
$string['errortransactionsonly'] = 'Erreur : les transactions sont nécessaires, mais votre type de base de données {$a} ne les supporte pas. Si nécessaire, vous pouvez autoriser la fusion d\'utilisateurs sans transactions. Veuillez consulter les paramètres du plugin pour les configurer en conséquence.';
$string['eventusermergedfailure'] = 'Fusion échouée';
$string['eventusermergedsuccess'] = 'Fusionner le succès';
$string['excluded_exceptions'] = 'Exclure les exceptions';
$string['excluded_exceptions_desc'] = 'L\'expérience acquise dans ce domaine suggère que tous ces tableaux de base de données soient exclus de la fusion. Voir README pour plus de détails. <br> Par conséquent, pour appliquer le comportement du plugin par défaut, vous devez choisir \'{$a}\' to exclude all those tables from the merging process (recommended).<br> If you prefer, you can exclude any of those tables and include them in the merging process (not recommended).';
$string['exportlogs'] = 'Exportation de grumes en tant que CSV';
$string['finishtime'] = 'Terminé la fusion à {$a}';
$string['form_description'] = '<p> Vous pouvez rechercher des utilisateurs ici si vous faites\'t know the user\'s username/id number. Otherwise you may expand the form to enter that information directly.  Please see help on fields for more information</p>';
$string['form_header'] = 'Trouver les utilisateurs à fusionner';
$string['header'] = 'Fusionner deux utilisateurs en un seul compte';
$string['header_help'] ='<p>Étant donné qu\'un utilisateur doit être supprimé et qu\'un utilisateur doit le conserver, cela fusionnera les données de l\'utilisateur associées à l\'ancien utilisateur en ce dernier utilisateur. Notez que les deux utilisateurs doivent déjà exister et qu\'aucun compte ne sera effectivement supprimé. Ce processus est laissé à l\'administrateur pour faire manuellement.</p><p><strong> Faites cela seulement si vous savez ce que vous faites car il n\'est pas réversible!</strong></p>';
$string['dans'] = 'into';
$string['invalid_option'] = 'Option de formulaire non valide';
$string['invaliduser'] = 'Utilisateur non valide';
$string['logid'] = 'Pour plus de référence, ces résultats sont enregistrés dans le log id {$a}.';
$string['logko'] = 'Une erreur s\'est produite :';
$string['loglist'] = 'Tous ces enregistrements fusionnent des actions effectuées, montrant s\'ils allaient bien :';
$string['logok'] = 'Voici les requêtes qui ont été envoyées au DB :';
$string['mergedbyuseridonlog'] = 'Fusionné par';
$string['iomadmerge'] = 'Fusionner les comptes utilisateurs';
$string['iomadmergeadvanced'] = '<fort> Entrée directe de l\'utilisateur</strong>';
$string['iomadmergeadvanced_help'] = 'Vous pouvez saisir les champs ci-dessous si vous savez exactement quels utilisateurs vous voulez fusionner.<br /><br /> Cliquez sur le bouton "Rechercher" pour vérifier/confirmer que les entrées entrées sont en fait des utilisateurs.';
$string['iomadmerge_confirm'] = 'Après confirmation, le processus de fusion commencera. <br/><strong> Ce ne sera pas réversible !</strong> Voulez-vous vraiment continuer ?';
$string['iomadmerge:iomadmerge'] = 'Fusionner les comptes utilisateurs';
$string['iomadmerge:view'] = 'Fusionner les comptes utilisateurs';
$string['merging'] = 'Fusionné';
$string['newuser'] = 'Utilisateur à conserver';
$string['newuserid'] = 'Numéro d\'utilisateur à conserver';
$string['newuseridonlog'] = 'Utilisateur gardé';
$string['nologs'] = 'Il n\'y a pas encore de logs de fusion. Tant mieux pour toi !';
$string['nomergedby'] = 'Non enregistré';
$string['no_saveselection'] = 'Vous n\'avez pas sélectionné d\'utilisateur ancien ou nouveau.';
$string['olduser'] = 'L\'utilisateur à supprimer';
$string['olduserid'] = 'ID utilisateur à supprimer';
$string['olduseridonlog'] = 'Utilisateur supprimé';
$string['pluginname'] = 'OIMAD Fusionner les comptes utilisateurs';
$string['privacy:metadata'] = 'L\'OIMAD Fusionner le plugin Compte utilisateur ne stocke aucune donnée personnelle.';
$string['qa_action_delete_fromid'] = 'Garder les tentatives du nouvel utilisateur';
$string['qa_action_delete_toid'] = 'Garder les tentatives de l\'ancien utilisateur';
$string['qa_action_remain'] = 'Ne rien faire : ne fusionnent ni ne suppriment';
$string['qa_action_remain_log'] = 'Les données utilisateur du tableau <strong>{$a}</strong> ne sont pas mises à jour.';
$string['qa_action_renumber'] = 'Fusionner les tentatives des deux utilisateurs et renuméroter';
$string['qa_chosen_action'] = 'Option active pour les tentatives de quiz : {$a}.';
$string['qa_grades'] = 'Grades recalculées pour les quiz : {$a}.';
$string['quizattemptsaction'] = 'Comment résoudre les tentatives de quiz';
$string['quizattemptsaction_desc'] = 'Lors de la fusion des tentatives de quiz, il peut y avoir trois cas : <ol><li> Seul l\'ancien utilisateur a des tentatives de quiz. Tous les temps apparaîtront comme s\'ils avaient été faits par le nouvel utilisateur.</li><li> Seul le nouvel utilisateur a des tentatives de quiz. Tout est correct et rien n\'est fait.</li><li> Les deux utilisateurs ont des tentatives pour le même quiz. <strong>Vous devez choisir quoi faire dans ce cas de conflit.</strong>. Vous devez choisir l\'une des actions suivantes : <ul> <li><strong>{$a->renuméro}</strong>. Les tentatives de l\'ancien utilisateur sont fusionnées avec celles du nouvel utilisateur et renumérotées au moment de leur lancement.</li><li><strong>{$a->delete_fromid}</strong>. Les tentatives de l\'ancien utilisateur sont supprimées. Les tentatives du nouvel utilisateur sont conservées, car cette option les considère comme les plus importantes.</li><li><strong>{$a->delete_toid}</strong>. Les tentatives du nouvel utilisateur sont supprimées. Les tentatives de l\'ancien utilisateur sont conservées, car cette option les considère comme les plus importantes.</li><li><strong>{$a->remain}</strong> (par défaut). Les tentatives ne sont ni fusionnées ni supprimées, restant liées à l\'utilisateur qui les a faites. Il s\'agit de l\'action la plus sécurisée, mais la fusion des utilisateurs de l\'utilisateur A à l\'utilisateur B ou B à l\'utilisateur A peut produire des notes de quiz différentes.</li></ul> </li></ol>';
$string['results'] = 'Fusion des résultats et du journal';
$string['review_users'] = 'Confirmer la fusion des utilisateurs';
$string['saveselection_submit'] = 'Enregistrer la sélection';
$string['searchuser'] = 'Rechercher l\'utilisateur';
$string['searchuser_help'] = 'Saisissez un nom d\'utilisateur, un prénom/dernier nom, une adresse électronique ou un identifiant utilisateur pour rechercher des utilisateurs potentiels. Vous pouvez également spécifier si vous voulez seulement effectuer une recherche dans un champ particulier.';
$string['starttime'] = 'Début de la fusion à {$a}';
$string['suspenduser_setting'] = 'Suspendre l\'ancien utilisateur';
$string['suspenduser_setting_desc'] = 'Si activé, il suspend automatiquement l\'ancien utilisateur lors d\'une fusion réussie, empêchant l\'utilisateur de se connecter à Moodle (recommandé). Si désactivé, l\'ancien utilisateur reste actif. Dans les deux cas, l\'ancien utilisateur n\'aura pas ses données connexes.';
$string['tableko'] = 'Tableau {$a} : mise à jour NON OK!';
$string['tableok'] = 'Tableau {$a} : mise à jour OK';
$string['tableskipped'] = 'Pour des raisons de journalisation ou de sécurité, nous sautons <strong>{$a}</strong>. <br />Pour supprimer ces entrées, supprimez l\'ancien utilisateur une fois ce script exécuté avec succès.';
$string['timetaken'] = 'Fusion a pris {$a} secondes';
$string['transactions_not_supported'] = 'Pour votre information, votre base de données <strong>ne supporte pas les transactions</strong>.';
$string['transactions_setting'] = 'Seules les transactions autorisées';
$string['transactions_setting'] = 'Seules les transactions autorisées';
$string['transactions_setting_desc'] = 'Si activé, les utilisateurs de fusion ne fonctionneront pas du tout sur les bases de données qui NE prennent PAS en charge les transactions (recommandé). Il est nécessaire de vous assurer que votre base de données demeure cohérente en cas de fusion d\'erreurs. <br />Si désactivé, vous exécuterez toujours des actions de fusion. En cas d\'erreurs, le journal de fusion vous montrera le problème. Signaler aux supporters du plugin vous donnera une solution en bref. <br />Plus haut que tout, les tables de base Moodle et certains plugins tiers sont déjà considérés par ce plugin. Si vous n\'avez pas de plugins tiers dans votre installation Moodle, vous pouvez être silencieux en exécutant ce plugin en activant ou en désactivant cette option.';
$string['transactions_setting_desc'] = 'Si activé, les utilisateurs de fusion ne fonctionneront pas du tout sur les bases de données qui NE prennent PAS en charge les transactions (recommandé). Il est nécessaire de vous assurer que votre base de données demeure cohérente en cas de fusion d\'erreurs. <br />Si désactivé, vous exécuterez toujours des actions de fusion. En cas d\'erreurs, le journal de fusion vous montrera le problème. Signaler aux supporters du plugin vous donnera une solution en bref.<br />Plus haut que tout, les tables Moodle de base et certains plugins tiers sont déjà considérés par ce plugin. Si vous n\'avez pas de plugins tiers dans votre installation Moodle, vous pouvez être silencieux en exécutant ce plugin en activant ou en désactivant cette option.';
$string['transactions_supported'] = 'Pour votre information, votre base de données <strong>supporte les transactions</strong>.';
$string['uniquekeynewidtomaintain'] = 'Garder un nouvel utilisateur\'s data';
$string['uniquekeynewidtomaintain_desc'] = 'En cas de conflit, comme lorsque la colonne liée user.id est une clé unique, ce plugin gardera les données du nouvel utilisateur (par défaut). Cela signifie également que les données de l\'ancien utilisateur sont supprimées pour garder la consistance. Sinon, si vous décochez cette option, les données de l\'ancien utilisateur seront conservées.';
$string['usermergingheader'] = '&laquo;{$a->nom d\'utilisateur}&raquo; (identifiant d\'utilisateur = {$a->id})';
$string['userreviewtable_legend'] = '<b>Revoir les utilisateurs pour fusionner</b>';
$string['userselecttable_legend'] = '<b>Sélectionner les utilisateurs pour fusionner</b>';
$string['viewlog'] = 'Voir les journaux de fusion';
$string['wronglogid'] = 'Le journal que vous demandez n\'existe pas.';
