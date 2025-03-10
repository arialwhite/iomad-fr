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
 * Lang strings
 *
 * @package   report_performance
 * @copyright 2013 Rajesh Taneja
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['check_backup'] = 'Sauvegarde automatisée';
$string['check_backup_comment_disable'] = 'Les performances peuvent être affectées pendant le processus de sauvegarde. Si activé, les sauvegardes doivent être programmées pour les heures creuses.';
$string['check_backup_comment_enable'] = 'Les performances peuvent être affectées pendant le processus de sauvegarde. Les sauvegardes devraient être programmées pour les heures creuses.';
$string['check_backup_details'] = 'Activer la sauvegarde automatisée créera automatiquement des archives de tous les cours sur le serveur au moment où vous avez spécifié. <p>Pendant ce processus, il consommera plus de ressources du serveur et pourrait affecter la performance.</p>';
$string['check_cachejs_comment_disable'] = 'Si activé, le chargement des pages est amélioré.';
$string['check_cachejs_comment_enable'] = 'Si désactivé, la page peut se charger lentement.';
$string['check_cachejs_details'] = 'Javascript cache et compression améliore considérablement les performances de chargement de la page. Il est fortement recommandé pour les sites de production.';
$string['check_dbschema_name'] = 'Vérification du schéma de base de données';
$string['check_dbschema_ok'] = 'Le schéma de base de données est correct.';
$string['check_dbschema_errors'] = 'Le schéma de base de données n\'est pas aligné.';
$string['check_debugmsg_comment_nodeveloper'] = 'Si la valeur est DEVELOPER, les performances peuvent être légèrement affectées.';
$string['check_debugmsg_comment_developer'] = 'Si la valeur est autre que DEVELOPER, les performances peuvent être légèrement améliorées.';
$string['check_debugmsg_details'] = 'Il y a rarement aucun avantage à aller au niveau du développeur, sauf si un développeur le demande. <p> Une fois que vous avez obtenu le message d\'erreur, et l\'avez copié et collé quelque part, il est HAUTEMENT RECOMMANDÉ de retourner Debug à zéro. Les messages de débogage peuvent donner des indices à un hacker quant à la configuration de votre site et peuvent affecter les performances.</p>';
$string['check_enablestats_comment_disable'] = 'Les résultats peuvent être affectés par le traitement des statistiques. Si activé, les paramètres statistiques doivent être définis avec prudence.';
$string['check_enablestats_comment_enable'] = 'Les résultats peuvent être affectés par le traitement des statistiques. Les paramètres statistiques doivent être définis avec prudence.';
$string['check_enablestats_details'] = 'Cela permettra de traiter les journaux en cronjob et de recueillir des statistiques. En fonction de la quantité de trafic sur votre site, cela peut prendre un certain temps.<p>Durant ce processus, il consommera plus de ressources du serveur et pourrait affecter les performances.</p>';
$string['check_themedesignermode_comment_enable'] = 'Si désactivé, les images et les feuilles de style sont mises en cache, ce qui entraîne d\'importantes améliorations des performances.';
$string['check_themedesignermode_comment_disable'] = 'Si activé, les images et les feuilles de style ne seront pas mises en cache, ce qui entraînera une dégradation importante des performances.';
$string['check_themedesignermode_details'] = 'C\'est souvent la cause des sites de Moodle lents. <p>En moyenne, il pourrait prendre au moins deux fois la quantité de processeur pour exécuter un site Moodle avec le mode concepteur de thème activé.</p>';
$string['comments'] = 'Commentaires';
$string['edit'] = 'Modifier';
$string['enabled'] = 'Activé';
$string['disabled'] = 'Handicapé';
$string['issue'] = 'Numéro';
$string['morehelp'] = 'plus d\'aide';
$string['performance:view'] = 'Voir le rapport d\'exécution';
$string['performancereportdesc'] = 'Ce rapport dresse la liste des problèmes qui peuvent affecter la performance du site {$a}';
$string['pluginname'] = 'Aperçu des résultats';
$string['value'] = 'Valeur';
$string['privacy:metadata'] = 'Le plugin Aperçu des performances ne stocke aucune donnée personnelle.';
