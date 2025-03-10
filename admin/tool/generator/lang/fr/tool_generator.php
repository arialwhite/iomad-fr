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
 * Language strings.
 *
 * @package tool_generator
 * @copyright 2013 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['bigfile'] = 'Grand fichier {$a}';
$string['courseexplanation'] = 'This tool creates standard test courses that include many
sections, activities, and files.

This is intended to provide a standardised measure for checking the reliability
and performance of various system components (such as backup and restore).

This test is important because there have been many cases previously where,
faced with real-life use cases (e.g. a course with 1,000 activities), the system
does not work.

Courses created using this feature can occupy a large amount of database and
filesystem space (tens of gigabytes). You will need to delete the courses
(and wait for various cleanup runs) to release this space again.

**Do not use this feature on a live system**. Use only on a developer server.
(To avoid accidental use, this feature is disabled unless you have also selected
DEVELOPER debugging level.)';

$string['coursesize_0'] = 'XS (~10Ko; créer en ~1 seconde)';
$string['coursesize_1'] = 'S (~10 Mo; créer en ~30 secondes)';
$string['coursesize_2'] = 'M (~100 Mo; créer en environ 2 minutes)';
$string['coursesize_3'] = 'L (~1 Go; créer en ~30 minutes)';
$string['coursesize_4'] = 'XL (~10 Go; créer en environ 2 heures)';
$string['coursesize_5'] = 'XXL (~20 Go; créer en ~4 heures)';
$string['additionalmodules'] = 'Activités supplémentaires';
$string['additionalmodules_help'] = 'Sélectionnez d\'autres activités qui implémentent la fonction course_backend_generator_create_activity à inclure dans le cours de test.';
$string['coursewithoutusers'] = 'Le cours sélectionné n\'a pas d\'utilisateurs';
$string['createcourse'] = 'Créer un cours';
$string['createtestplan'] = 'Créer un plan de test';
$string['creating'] = 'Création de cours';
$string['done'] = 'fait ({$a}s)';
$string['downloadtestplan'] = 'Télécharger le plan de test';
$string['downloadusersfile'] = 'Télécharger le fichier utilisateur';
$string['error_nocourses'] = 'Il n\'y a pas de cours pour générer le plan de test';
$string['error_noforumdiscussions'] = 'Le cours sélectionné ne contient pas de discussions de forum';
$string['error_noforuminstances'] = 'Le cours sélectionné ne contient pas d\'instances de module de forum';
$string['error_noforumreplies'] = 'Le cours sélectionné ne contient pas de réponses au forum';
$string['error_nonexistingcourse'] = 'Le cours spécifié n\'existe pas';
$string['error_nopageinstances'] = 'Le cours sélectionné ne contient pas d\'instances de module page';
$string['error_notdebugging'] = 'Non disponible sur ce serveur parce que le débogage n\'est pas réglé sur DEVELOPER';
$string['error_nouserspassword'] = 'Vous devez définir $CFG->tool_generator_users_password dans config.php pour générer le plan de test';
$string['execute'] = 'Exécuter';
$string['execute_cleanup'] = 'Scénarios de nettoyage';
$string['execute_scenarios'] = 'Scénarios d\'essai';
$string['fullname'] = 'Cours d\'essai : {$a->size}';
$string['maketestcourse'] = 'Faire le parcours d\'essai';
$string['maketestplan'] = 'Faire plan d\'essai JMeter';
$string['notenoughusers'] = 'Le cours sélectionné n\'a pas assez d\'utilisateurs';
$string['pluginname'] = 'Générateur de données de développement';
$string['progress_checkaccounts'] = 'Vérification des comptes utilisateurs ({$a})';
$string['progress_coursecompleted'] = 'Cours terminé ({$a}s)';
$string['progress_createassignments'] = 'Création d\'affectations ({$a})';
$string['progress_createbigfiles'] = 'Création de grands fichiers ({$a})';
$string['progress_createcourse'] = 'Création du cours {$a}';
$string['progress_createforum'] = 'Création de forums ({$a} messages)';
$string['progress_createpages'] = 'Création de pages ({$a})';
$string['progress_createsmallfiles'] = 'Création de petits fichiers ({$a})';
$string['progress_createusers'] = 'Création de comptes utilisateurs ({$a})';
$string['progress_enrol'] = 'Inscription des utilisateurs au cours ({$a})';
$string['progress_sitecompleted'] = 'Site complété ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 cours, créés en ~30 secondes)';
$string['sitesize_1'] = 'S (~50 Mo; 8 cours, créés en ~2 minutes)';
$string['sitesize_2'] = 'M (~200 Mo; 73 cours, créés en ~10 minutes)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 courses, created in ~1\'5 hours)';
$string['sitesize_4'] = 'XL (~10 Go; 1065 cours, créés en ~5 heures)';
$string['sitesize_5'] = 'XXL (~20 Go; 4177 cours, créés en ~10 heures)';
$string['size'] = 'Taille du cours';
$string['smallfiles'] = 'Petits fichiers';
$string['step_example'] = 'Exemple d\'étape :';
$string['targetcourse'] = 'Cours cible d\'essai';
$string['testscenario'] = 'Créer des scénarios de test';
$string['testscenario_description'] = 'Créer des scénarios de test utilise une syntaxe limitée de fichiers de fonctionnalités pour créer tous les éléments nécessaires pour exécuter un test manuel.';
$string['testscenario_filedesc'] = 'Les fichiers de fonctionnalités de téléchargement ne peuvent contenir que des scénarios comportant des étapes core_data_generator ou certaines étapes spécifiques qui ne nécessitent pas de sélénium. Tous les scénarios seront exécutés à la fois sauf ceux avec la balise @cleanup.';
$string['testscenario_filedesc_cleanup'] = 'Scenarios with @cleanup tag will be executed only if the "Execute" setting
is set to "Cleanup". To execute the cleanup via CLI, you can use the --cleanup option.';
$string['testscenario_filedesc_list'] = 'Voici la liste des étapes qui peuvent être utilisées dans le fichier de fonctionnalités du scénario de test:';
$string['testscenario_errorparsing'] = 'Erreur d\'analyse du fichier de la fonctionnalité : {$a}';
$string['testscenario_file'] = 'Fichier fonctionnalité';
$string['testscenario_invalidfile'] = 'Le format de fichier n\'est pas valide ou contient des étapes non valides.';
$string['testscenario_invalidstep'] = 'Étape inconnue. Créer des scénarios de test n\'accepte que les étapes du générateur.';
$string['testscenario_outline'] = 'Les plans des scénarios ne sont pas pris en charge.';
$string['testscenario_nosteps'] = 'Il n\'y a aucune étape à exécuter dans le fichier.';
$string['testscenario_notready'] = 'Les bibliothèques Compositeur et Behat ne sont pas encore installées.<br><br>Exécutez cette commande pour activer cet outil : <strong>php admin/tool/generator/cli/runtestscenario.php</strong>';
$string['testscenario_scenarionosteps'] = 'Ce scénario ne comporte aucune étape.';
$string['testscenario_steps'] = 'Étapes d\'essai du scénario:';
$string['testplanexplanation'] = 'This tool creates a JMeter test plan file along with the user credentials file.

This test plan is designed to work along with {$a}, which makes easier to run the test plan in a specific Moodle environment, gathers information about the runs and compares the results, so you will need to download it and use it\'s test_runner.sh script or follow the installation and usage instructions.

You need to set a password for the course users in config.php (e.g. $CFG->tool_generator_users_password = \'moodle\';). There is no default value for this password to prevent unintended usages of the tool. You need to use the update passwords option in case your course users have other passwords or they were generated by tool_generator but without setting a $CFG->tool_generator_users_password value.

It is part of tool_generator so it works well with the courses generated by the courses and the site generators, it can
also be used with any course that contains, at least:

* Enough enrolled users (depends on the test plan size you select) with the password reset to \'moodle\'
* A page module instance
* A forum module instance with at least one discussion and one reply

You might want to consider your servers capacity when running large test plans as the amount to load generated by JMeter
can be specially big. The ramp up period has been adjusted according to the number of threads (users) to reduce this kind
of issues but the load is still huge.

**Do not run the test plan on a live system**. This feature only creates the files to feed JMeter so is not dangerous by
itself, but you should **NEVER** run this test plan in a production site.

';
$string['testplansize_0'] = 'Utilisateurs XS ({$a->users}, boucles {$a->loops} et période de rampage {$a->rampup})';
$string['testplansize_1'] = 'S ({$a->users} utilisateurs, {$a->loops} boucles et {$a->rampup} période de ramp)';
$string['testplansize_2'] = 'M ({$a->utilisateurs} utilisateurs, {$a-> boucles} boucles et {$a->rampup} période de ramp)';
$string['testplansize_3'] = 'L ({$a->users} utilisateurs, {$a->loops} boucles et {$a->rampup} période de ramp)';
$string['testplansize_4'] = 'Les utilisateurs XL ({$a->users}, {$a->loops} boucles et {$a->rampup} période de ramp)';
$string['testplansize_5'] = 'Utilisateurs XXL ({$a->users}, boucles {$a->loops} et période de rampage {$a->rampup}';
$string['updateuserspassword'] = 'Mettre à jour le mot de passe des utilisateurs du cours';
$string['updateuserspassword_help'] = 'JMeter doit se connecter en tant qu\'utilisateurs du cours, vous pouvez définir le mot de passe utilisateur en utilisant $CFG->tool_generator_users_password dans config.php; ce paramètre met à jour le cours user\'s password according to $CFG->tool_generator_users_password. It can be useful in case you are using a course not generated by tool_generator or $CFG->tool_generator_users_password was not set when you created the test courses.';
$string['privacy:metadata'] = 'Le plugin générateur de données de développement ne stocke aucune donnée personnelle.';

// Deprecated since Moodle 4.5.
$string['progress_createaccounts'] = 'Création de comptes utilisateurs ({$a->à partir de} - {$a->à})';
