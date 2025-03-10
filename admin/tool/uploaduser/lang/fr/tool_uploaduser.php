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
 * Strings for component 'tool_uploaduser', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package    tool
 * @subpackage uploaduser
 * @copyright  2011 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allowdeletes'] = 'Autorise les suppressions';
$string['allowrenames'] = 'Autoriser les renoms';
$string['allowsuspends'] = 'Permettre la suspension et l\'activation des comptes';
$string['assignedsysrole'] = 'Rôle du système attribué {$a}';
$string['clidefault'] = 'Par défaut & #160;:';
$string['clierrorargument'] = 'Valeur de l\'argument --{$a->name} n\'est pas valide. Valeurs autorisées : {$a->valeurs}';
$string['clifile'] = 'Chemin vers le fichier CSV avec les données utilisateur. Requis.';
$string['clifilenotreadable'] = 'Le fichier {$a} n\'existe pas ou n\'est pas lisible';
$string['clihelp'] = 'Imprimez cette aide.';
$string['climissingargument'] = 'Un argument --{$a} est requis';
$string['clititle'] = 'Ligne de commande Télécharger l\'outil utilisateur.';
$string['clivalidationerror'] = 'Erreur de validation & #160;:';
$string['csvdelimiter'] = 'Séparateur CSV';
$string['defaultvalues'] = 'Valeurs par défaut';
$string['deleteerrors'] = 'Supprimer les erreurs';
$string['duplicateemail'] = 'Plusieurs utilisateurs avec email {$a} détecté';
$string['encoding'] = 'Codage';
$string['errormnetadd'] = 'Impossible d\'ajouter des utilisateurs distants';
$string['errorprefix'] = 'Erreur :';
$string['errors'] = 'Erreurs';
$string['examplecsv'] = 'Exemple de fichier texte';
$string['examplecsv_help'] = 'To use the example text file, download it then open it with a text or spreadsheet editor. Leave the first line unchanged, then edit the following lines (records) and add your user data, adding more lines as necessary. Save the file as CSV then upload it.

The example text file may also be used for testing, as you are able to preview user data and can choose to cancel the action before user accounts are created.';
$string['infoprefix'] = 'Informations:';
$string['invalidupdatetype'] = 'Cette option ne peut pas être sélectionnée avec le type de téléchargement choisi.';
$string['invaliduserdatavalues'] = 'Données incorrectes ({$a->valeurs}) trouvées pour l\'utilisateur {$a->nom d\'utilisateur}. Ces données ont été corrigées ou supprimées.';
$string['invalidtheme'] = 'Le thème « {$a} » n\'est pas installé et sera ignoré.';
$string['linex'] = 'Ligne {$a}';
$string['matchemail'] = 'Correspondance sur l\'adresse électronique';
$string['nochanges'] = 'Pas de changement';
$string['notheme'] = 'Aucun thème n\'est défini pour cet utilisateur.';
$string['pluginname'] = 'Téléchargement par l\'utilisateur';
$string['renameerrors'] = 'Erreurs de renommer';
$string['requiredtemplate'] = 'Requis. Vous pouvez utiliser la syntaxe template ici (%l = nom de famille, %f = nom de famille, %u = nom d\'utilisateur). Voir aide pour les détails et les exemples.';
$string['rowpreviewnum'] = 'Aperçu des lignes';
$string['unassignedsysrole'] = 'Rôle du système non attribué {$a}';
$string['userthemesnotallowed'] = 'Les thèmes utilisateurs ne sont pas activés, de sorte qu\'aucun inclus dans le fichier utilisateur de téléchargement sera ignoré.';
$string['uploadpicture_baduserfield'] = 'L\'attribut utilisateur spécifié n\'est pas valide. S\'il vous plaît, essayez encore.';
$string['uploadpicture_cannotmovezip'] = 'Impossible de déplacer le fichier zip vers un répertoire temporaire.';
$string['uploadpicture_cannotprocessdir'] = 'Impossible de traiter les fichiers décomposés.';
$string['uploadpicture_cannotsave'] = 'Impossible d\'enregistrer l\'image pour l\'utilisateur {$a}. Vérifiez le fichier d\'image original.';
$string['uploadpicture_cannotunzip'] = 'Impossible de décompresser le fichier images.';
$string['uploadpicture_invalidfilename'] = 'Le fichier image {$a} a des caractères invalides dans son nom. Sauter.';
$string['uploadpicture_overwrite'] = 'Suppression des images utilisateur existantes ?';
$string['uploadpicture_userfield'] = 'attribut utilisateur à utiliser pour correspondre à des images :';
$string['uploadpicture_usernotfound'] = 'Utilisateur avec un \'{$a->userfield}\' value of \'{$a->uservalue}\' does not exist. Skipping.';
$string['uploadpicture_userskipped'] = 'Sauter l\'utilisateur {$a} (il a déjà une image).';
$string['uploadpicture_userupdated'] = 'Image mise à jour pour l\'utilisateur {$a}.';
$string['uploadpictures'] = 'Télécharger des images utilisateur';
$string['uploadpictures_help'] = 'Les images de l\'utilisateur peuvent être téléchargées comme un fichier zip des fichiers image. Les fichiers d\'image doivent être nommés attribut utilisateur choisi. extension, par exemple user1234.jpg pour un utilisateur ayant un nom d\'utilisateur1234.';
$string['uploadusers'] = 'Télécharger les utilisateurs';
$string['uploadusers_help'] = 'Users may be uploaded (and optionally enrolled in courses) via text file. The format of the file should be as follows:

* Each line of the file contains one record
* Each record is a series of data separated by the selected separator
* The first record contains a list of fieldnames defining the format of the rest of the file
* Required fieldnames are username, password, firstname, lastname, email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Télécharger l\'aperçu des utilisateurs';
$string['uploadusersresult'] = 'Télécharger les résultats des utilisateurs';
$string['uploaduser:uploaduserpictures'] = 'Télécharger des images utilisateur';
$string['useraccountupdated'] = 'Utilisateur mis à jour';
$string['useraccountuptodate'] = 'Mise à jour de l\'utilisateur';
$string['userdeleted'] = 'Utilisateur supprimé';
$string['userrenamed'] = 'Utilisateur renommé';
$string['userscreated'] = 'Utilisateurs créés';
$string['usersdeleted'] = 'Utilisateurs supprimés';
$string['usersrenamed'] = 'Utilisateurs renommés';
$string['usersskipped'] = 'Utilisateurs décrochés';
$string['usersupdated'] = 'Utilisateurs mis à jour';
$string['usersweakpassword'] = 'Utilisateurs ayant un mot de passe faible';
$string['uubulk'] = 'Sélectionnez pour les actions utilisateur en vrac';
$string['uubulkall'] = 'Tous les utilisateurs';
$string['uubulknew'] = 'Nouveaux utilisateurs';
$string['uubulkupdated'] = 'Utilisateurs actualisés';
$string['uucsvline'] = 'Ligne CSV';
$string['uulegacy1role'] = '(Étudiant original) typeN=1';
$string['uulegacy2role'] = '(Professeur original) typeN=2';
$string['uulegacy3role'] = '(Professeur original non-rédacteur) typeN=3';
$string['uunoemailduplicates'] = 'Prévenir les duplications d\'adresses électroniques';
$string['uuoptype'] = 'Type de chargement';
$string['uuoptype_addinc'] = 'Ajouter tout, ajouter le numéro aux noms d\'utilisateur si nécessaire';
$string['uuoptype_addnew'] = 'Ajouter un nouvel utilisateur seulement, sauter les utilisateurs existants';
$string['uuoptype_addupdate'] = 'Ajouter de nouveaux utilisateurs et mettre à jour les utilisateurs existants';
$string['uuoptype_update'] = 'Mettre à jour uniquement les utilisateurs existants';
$string['uupasswordcron'] = 'Générés en cron';
$string['uupasswordnew'] = 'Nouveau mot de passe utilisateur';
$string['uupasswordold'] = 'Mot de passe utilisateur existant';
$string['uustandardusernames'] = 'Normaliser les noms d\'utilisateur';
$string['uuupdateall'] = 'Override avec le fichier et les valeurs par défaut';
$string['uuupdatefromfile'] = 'Surpasser avec le fichier';
$string['uuupdatemissing'] = 'Remplir le manquant du fichier et des valeurs par défaut';
$string['uuupdatetype'] = 'Détails de l\'utilisateur';
$string['uuusernametemplate'] = 'Modèle de nom d\'utilisateur';
$string['privacy:metadata'] = 'Le plugin de téléchargement de l\'utilisateur ne stocke aucune donnée personnelle.';
$string['warningprefix'] = 'Avertissement :';

// Deprecated since Moodle 4.4.
$string['invaliduserdata'] = 'Données non valides détectées pour l\'utilisateur {$a} et il a été automatiquement nettoyé.';
