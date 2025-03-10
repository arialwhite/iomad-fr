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
 * Strings for tool_behat
 *
 * @package    tool_behat
 * @copyright  2012 David Monllaó
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['aim'] = 'Cet outil d\'administration aide les développeurs et les auteurs de tests à créer des fichiers .feature décrivant Moodle\'s functionalities and run them automatically. Step definitions available for use in .feature files are listed below.';
$string['allavailablesteps'] = 'Toutes les définitions des étapes disponibles';
$string['errorbehatcommand'] = 'Erreur lors de la commande behat CLI. Essayez d\'exécuter manuellement « {$a} --help » à partir de CLI pour en savoir plus sur le problème.';
$string['errorcomposer'] = 'Les dépendances des compositeurs ne sont pas installées.';
$string['errordataroot'] = '$CFG->behat_dataroot n\'est pas défini ou n\'est pas valide.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix et $CFG->behat_wwwroot doivent être configurés en configuration. php.';
$string['erroruniqueconfig'] = 'Les valeurs $CFG->behat_dataroot, $CFG->behat_prefix et $CFG->behat_wwwroot doivent être différentes des valeurs $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot et $CFG->phpunit_prefix.<br/> Ou, si $CFG->behat_prefix est le même, $CFG->behat_dbname ou $CFG->behat_dbhost doit être différent de $CFG->phpunit_dbname et $CFG->phpunit_dbhost et de $CFG->dbname et $CFG->dbhost.';
$string['fieldvalueargument'] = 'Arguments de valeur du champ';
$string['fieldvalueargument_help'] = 'Cet argument doit être complété par une valeur de champ. Il existe de nombreux types de champs, notamment des champs simples comme les cases à cocher, les sélections ou les zones de texte, ou des champs complexes comme les sélecteurs de dates. Voir la documentation dev <a href="https://moodledev.io/general/development/tools/behat" cible="_blank">Acceptance_test</a> pour plus de détails sur les valeurs de champ attendues.';
$string['giveninfo'] = 'Vu. Processus de mise en place de l\'environnement';
$string['infoheading'] = 'Informations';
$string['installinfo'] = 'Lire {$a} pour l\'installation et l\'exécution des tests info';
$string['newstepsinfo'] = 'Lisez {$a} pour savoir comment ajouter de nouvelles définitions d\'étapes';
$string['newtestsinfo'] = 'Lire {$a} pour plus d\'informations sur la façon d\'écrire de nouveaux tests';
$string['nostepsdefinitions'] = 'Il y a\'t any step definitions matching this filter';
$string['pluginname'] = 'Essais d\'acceptation';
$string['stepsdefinitionscomponent'] = 'Domaine';
$string['stepsdefinitionscontains'] = 'Contient';
$string['stepsdefinitionsfilters'] = 'Définitions des étapes';
$string['stepsdefinitionstype'] = 'Type';
$string['theninfo'] = 'Ensuite. Vérifications pour s\'assurer que les résultats sont attendus';
$string['unknownexceptioninfo'] = 'Il y avait un problème avec Selenium ou votre navigateur. Veuillez vous assurer d\'utiliser la dernière version de Sélénium. Erreur :';
$string['viewsteps'] = 'Filtre';
$string['warndirrootconfigfound'] = 'Un fichier de configuration a été trouvé à {$a}. Ce fichier n\'est pas mis à jour automatiquement et peut devenir obsolète. Nous vous recommandons de supprimer ce fichier.';
$string['wheninfo'] = 'Quand. Action qui provoque un événement';
$string['wrongbehatsetup'] = 'Something is wrong with the behat setup and so step definitions cannot be listed: <b>{$a->errormsg}</b><br/><br/>Please check:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot are set in config.php with different values from $CFG->dataroot, $CFG->prefix and $CFG->wwwroot.</li>
<li>You ran "{$a->behatinit}" from your Moodle root directory.</li>
<li>Dependencies are installed in vendor/ and {$a->behatcommand} file has execution permissions.</li></ul>';
$string['privacy:metadata'] = 'Le plugin de test Acceptation ne stocke aucune donnée personnelle.';
