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
 * Strings for component 'search', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['advancedsearch'] = 'Recherche avancée';
$string['all'] = 'All';
$string['allareas'] = 'Toutes les zones';
$string['allcourses'] = 'Tous les cours';
$string['allusers'] = 'Tous les utilisateurs';
$string['author'] = 'Auteur';
$string['authorname'] = 'Nom de l\'auteur';
$string['back'] = 'Précédent';
$string['beadmin'] = 'Vous devez être un utilisateur administrateur pour utiliser cette page.';
$string['commenton'] = 'Commentaire sur';
$string['content:courserole'] = '{$a->role} dans {$a->cours}';
$string['confirm_delete'] = 'Voulez-vous vraiment supprimer l\'index pour {$a} ? Jusqu\'à ce que la zone de recherche soit indexée, les utilisateurs n\'obtiendront pas de résultats de recherche de cette zone.';
$string['confirm_indexall'] = 'Voulez-vous vraiment mettre à jour le contenu indexé maintenant? Si une grande quantité de contenu doit être indexée, cela peut prendre beaucoup de temps. Pour les serveurs en direct, vous devriez normalement laisser l\'indexation à la \'Global search indexing\' scheduled task.';
$string['confirm_reindexall'] = 'Voulez-vous vraiment réindexer tout le contenu du site maintenant? Si votre site contient une grande quantité de contenu, cela prendra beaucoup de temps, et les utilisateurs peuvent ne pas obtenir de résultats de recherche complets jusqu\'à ce qu\'il complète.';
$string['confirm_deleteall'] = 'Voulez-vous vraiment supprimer tous les contenus indexés maintenant? Jusqu\'à ce que le site soit réindexé, les utilisateurs n\'obtiendront pas de résultats de recherche.';
$string['core-all'] = 'All';
$string['core-course-content'] = 'Contenu du cours';
$string['core-courses'] = 'Cours';
$string['core-users'] = 'Utilisateur';
$string['core-other'] = 'Autres';
$string['createanindex'] = 'créer un index';
$string['createdon'] = 'Créé le';
$string['database'] = 'Base de données';
$string['databasestate'] = 'État de la base de données d\'indexation';
$string['datadirectory'] = 'Répertoire de données';
$string['deleteindex'] = 'Supprimer l\'index {$a}';
$string['deletionsinindex'] = 'Suppressions dans l\'indice';
$string['docmodifiedon'] = 'Dernière modification le {$a}';
$string['doctype'] = 'Doctype';
$string['doctypenotsupported'] = 'Le type de doc spécifié n\'est pas encore pris en charge';
$string['Documents'] = 'documents';
$string['documentsfor'] = 'Documents pour';
$string['documentsindatabase'] = 'Documents dans la base de données';
$string['documentsinindex'] = 'Documents en index';
$string['duration'] = 'Durée';
$string['emptydatabaseerror'] = 'La table de base de données n\'est pas présente ou ne contient pas d\'index.';
$string['enginenotfound'] = 'Moteur {$a} introuvable.';
$string['enginenotinstalled'] = 'Le moteur {$a} n\'est pas installé.';
$string['enginenotselected'] = 'Vous n\'avez sélectionné aucun moteur de recherche.';
$string['engineserverstatus'] = 'Le moteur de recherche n\'est pas disponible. Veuillez contacter votre administrateur.';
$string['enteryoursearchquery'] = 'Saisissez votre recherche';
$string['error_indexing'] = 'Une erreur est survenue lors de l\'indexation';
$string['errors'] = 'Erreurs';
$string['errorareanotavailable'] = '{$a} zone de recherche n\'est pas disponible.';
$string['everywhere'] = 'Partout où vous pouvez accéder';
$string['filesinindexdirectory'] = 'Fichiers dans le répertoire index';
$string['filterheader'] = 'Filtre';
$string['fromtime'] = 'Modifié après';
$string['globalsearch'] = 'Recherche mondiale';
$string['globalsearchdisabled'] = 'La recherche globale n\'est pas activée.';
$string['gradualreindex'] = 'Indice progressif {$a}';
$string['gradualreindex_confirm'] = 'Voulez-vous vraiment réindexer {$a} ? Cela peut prendre un certain temps, bien que les données existantes resteront disponibles pendant le réindex.';
$string['gradualreindex_queued'] = 'Une nouvelle indexation a été demandée pour les contextes {$a->name} ({$a->count}). Cette indexation sera effectuée par la tâche programmée « Indexation de la recherche globale ».';
$string['checkdb'] = 'Vérifier la base de données';
$string['checkdbadvice'] = 'Vérifiez votre base de données pour tout problème.';
$string['checkdir'] = 'Vérification';
$string['checkdiradvice'] = 'S\'assurer que le répertoire de données existe et est enregistrable.';
$string['incourse'] = 'en cours {$a}';
$string['index'] = 'Sommaire';
$string['indexwhendisabledfullnotice'] = 'L\'indexation est actuellement interdite lorsque la recherche est désactivée. Pour activer cette option, veuillez consulter le paramètre <a href="{$a->url}">searchindexwhoendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'L\'indexation n\'est pas disponible.';
$string['invalidindexerror'] = 'Le répertoire d\'index contient soit un index invalide, soit rien du tout.';
$string['ittook'] = 'Il a fallu';
$string['matchingfile'] = 'Correspond à partir du fichier <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Correspond à partir de fichiers & #160;:';
$string['mycoursesonly'] = 'Mes cours seulement';
$string['next'] = 'Suivant';
$string['noindexmessage'] = 'Administrateur : Il ne semble pas y avoir d\'index de recherche. S\'il vous plaît.';
$string['noresults'] = 'Aucun résultat';
$string['notitle'] = 'Sans titre';
$string['normalsearch'] = 'Recherche normale';
$string['openedon'] = 'ouvert le';
$string['optimize'] = 'Optimiser';
$string['order'] = 'Ordre des résultats';
$string['order_location'] = 'Résultats prioritaires liés à {$a}';
$string['order_relevance'] = 'Résultats les plus pertinents d\'abord';
$string['priority'] = 'Priorité';
$string['priority_reindexing'] = 'Réindexation';
$string['priority_normal'] = 'Normal';
$string['privacy:metadata'] = 'Le sous-système de recherche ne stocke aucune donnée personnelle.';
$string['progress'] = 'Progrès accomplis';
$string['queryerror'] = 'La requête que vous avez fournie ne peut pas être analysée par le moteur de recherche : {$a}';
$string['queueheading'] = 'Autres files d\'attente d\'indexation ( {$a} items)';
$string['resultsreturnedfor'] = 'résultats retournés pour';
$string['runindexer'] = 'Exécuter l\'indexeur (réel)';
$string['runindexertest'] = 'Essai de l\'indexeur';
$string['schemanotupdated'] = 'Le schéma de recherche est obsolète.';
$string['schemaversionunknown'] = 'Le moteur de recherche ne connaît pas la version actuelle du schéma.';
$string['score'] = 'Score';
$string['search'] = 'Rechercher';
$string['search:message_received'] = 'Messages reçus';
$string['search:message_sent'] = 'Messages - envoyés';
$string['search:mycourse'] = 'Mes cours';
$string['search:course'] = 'Cours';
$string['search:course_teacher'] = 'Professeur';
$string['search:section'] = 'Cours';
$string['search:user'] = 'Utilisateur';
$string['searcharea'] = 'Zone de recherche';
$string['searchareacategories'] = 'Catégories de zones de recherche';
$string['searching'] = 'Recherche dans ...';
$string['searchnotpermitted'] = 'Vous n\'êtes pas autorisé à faire une recherche';
$string['searchsetupdescription'] = 'Les étapes suivantes vous aident à configurer la recherche globale de Moodle.';
$string['searchwithin'] = 'Recherche dans';
$string['secondes'] = 'seconds';
$string['solutions'] = 'Solutions';
$string['statistics'] = 'Statistiques';
$string['step'] = 'Étape';
$string['thesewordshelpimproverank'] = 'Ces mots aident à améliorer le rang';
$string['thesewordsmustappear'] = 'Ces mots doivent apparaître';
$string['thesewordsmustnotappear'] = 'Ces mots ne doivent pas apparaître';
$string['title'] = 'Titre';
$string['tofetchtheseresults'] = 'pour obtenir ces résultats';
$string['topresults'] = 'Principaux résultats';
$string['totalsize'] = 'Taille totale';
$string['totime'] = 'Modifié avant';
$string['type'] = 'Type';
$string['uncompleteindexingerror'] = 'L\'indexation n\'a pas été effectuée avec succès, veuillez le redémarrer.';
$string['versiontoolow'] = 'Désolé, la recherche globale nécessite PHP 5.0.0 ou ultérieure';
$string['viewresultincontext'] = 'Voir ce résultat dans son contexte';
$string['whichmodulestosearch?'] = 'Quels modules rechercher ?';
$string['wordsintitle'] = 'Mots dans le titre';
$string['search:customfield'] = 'Cours sur mesure';
