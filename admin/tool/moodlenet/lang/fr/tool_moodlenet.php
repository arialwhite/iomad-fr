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
 * Strings for the tool_moodlenet component.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   2020 Jake Dallimore <jrhdallimore@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenablenotification'] = '<p>À partir de Moodle 4.0, l\'intégration <a href="https://moodle.net/">MoodleNet</a> est activée par défaut dans les fonctions avancées. Les utilisateurs ayant la capacité de créer et de gérer des activités peuvent naviguer sur MoodleNet via le sélectionneur d\'activités et importer des ressources MoodleNet dans leurs cours.</p><p> Si désiré, une instance MoodleNet alternative peut être spécifiée dans le lien <a href="{$a->settingslink}"> Paramètres d\'entrée de MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Moodle par défaut Le réglage net a changé.';
$string['addingaresource'] = 'Ajouter du contenu de Moodle Montant net';
$string['aria:enterprofile'] = "Entrez votre Mouilles ID du profil net";
$string['aria:footermessage'] = "Rechercher du contenu sur Moodle Montant net";
$string['browsecontentmoodlenet'] = "Ou recherchez du contenu sur MoodleNet";
$string['clearsearch'] = "Effacer la recherche";
$string['connectandbrowse'] = "Connectez-vous et naviguez :";
$string['defaultmoodlenet'] = 'Mouilles URL nette';
$string['defaultmoodlenet_desc'] = 'L\'URL de l\'instance MoodleNet disponible via le sélecteur d\'activité.';
$string['defaultmoodlenetname'] = "Mouilles Nom net de l'instance";
$string['defaultmoodlenetnamevalue'] = 'Mouilles Montant net';
$string['defaultmoodlenetname_desc'] = 'Le nom de l\'instance MoodleNet disponible via le sélecteur d\'activité.';
$string['enablemoodlenet'] = 'Activer Moodle Intégration nette (entrée)';
$string['enablemoodlenet_desc'] = 'Si activé, un utilisateur capable de créer et de gérer des activités peut naviguer sur MoodleNet via le sélectionneur d\'activités et importer des ressources MoodleNet dans son cours. De plus, un utilisateur ayant la capacité de restaurer des sauvegardes peut sélectionner un fichier de sauvegarde sur MoodleNet et le restaurer dans Moodle.';
$string['errorduringdownload'] = 'Une erreur s\'est produite lors du téléchargement du fichier : {$a}';
$string['forminfo'] = 'Votre Moodle Profil net L\'ID sera automatiquement enregistré dans votre profil sur ce site.';
$string['footermessage'] = "Ou recherchez du contenu sur";
$string['instancedescription'] = "Mouilles Net est une plateforme ouverte de médias sociaux pour les éducateurs, axée sur la gestion collaborative de collections de ressources ouvertes.";
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-exemple@moodle.net';
$string['inputhelp'] = 'Ou si vous avez déjà un compte MoodleNet, copiez l\'ID de votre profil MoodleNet et collez-le ici:';
$string['invalidmoodlenetprofile'] = '$userprofile n\'est pas correctement formaté';
$string['importconfirm'] = 'Vous êtes sur le point d\'importer le contenu « {$a->resourcename} ({$a->resourcetype}) » dans le cours « {$a->resourcename} ». Voulez-vous vraiment continuer ?';
$string['importconfirmnocourse'] = 'Vous allez importer le contenu « {$a->resourcename} ({$a->resourcetype}) » dans votre site. Voulez-vous vraiment continuer ?';
$string['importformatselectguidingtext'] = 'Dans quel format souhaitez-vous ajouter le contenu « {$a->name} ({$a->type}) » à votre cours?';
$string['importformatselectheader'] = 'Choisissez le format d\'affichage du contenu';
$string['missinginvalidpostdata'] = 'The resource information from MoodleNet is either missing, or is in an incorrect format.
If this happens repeatedly, please contact the site administrator.';
$string['mnetprofile'] = 'Mouilles Profil net';
$string['mnetprofiledesc'] = '<p> Entrez votre Moodle Détails du profil net ici pour être redirigé vers votre profil lors de la visite de MoodleNet.</p>';
$string['moodlenetsettings'] = 'Mouilles Paramètres entrants nets';
$string['moodlenetnotenabled'] = 'L\'intégration de MoodleNet doit être activée dans l\'administration du site / MoodleNet avant que les importations de ressources puissent être traitées.';
$string['notification'] = 'Vous allez importer le contenu « {$a->name} ({$a->type}) » dans votre site. Sélectionnez le cours dans lequel il devrait être ajouté, ou <a href="{$a->cancellink}">cancel</a>.';
$string['removedmnetprofilenotification'] = 'En raison de changements récents sur la plate-forme MoodleNet, tous les utilisateurs qui ont précédemment enregistré leur ID de profil MoodleNet sur le site devront entrer un ID de profil MoodleNet dans le nouveau format afin d\'authentifier sur la plate-forme MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Mouilles Changement de format d\'ID de profil net';
$string['searchcourses'] = "Cours de recherche";
$string['selectpagetitle'] = 'Sélectionner la page';
$string['pluginname'] = 'Mouilles Montant net';
$string['privacy:metadata'] = "L'outil MoodleNet facilite seulement la communication avec MoodleNet. Il ne stocke aucune donnée.";
$string['profilevalidationerror'] = 'Il y a eu un problème en essayant de valider votre ID de profil MoodleNet';
$string['profilevalidationfail'] = 'Veuillez saisir un Moodle valide ID du profil net';
$string['profilevalidationpass'] = 'Ça a l\'air bien !';
$string['saveandgo'] = "Enregistrer et partir";
$string['uploadlimitexceeded'] = 'La taille du fichier {$a->filesize} dépasse la limite de téléchargement de {$a->uploadlimit} octets.';
