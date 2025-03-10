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
 * Strings for custom file types.
 *
 * @package tool_filetypes
 * @copyright 2014 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addfiletypes'] = 'Ajouter un nouveau type de fichier';
$string['corestring'] = 'Chaîne de langage alternative';
$string['corestring_help'] = 'Ce paramètre peut être utilisé pour sélectionner une chaîne de langage différente à partir des mimetypes du noyau. fichier langue php. En général, il devrait être laissé en blanc. Pour les types personnalisés, utilisez le champ description.';
$string['defaulticon'] = 'Icône par défaut pour le type MIME';
$string['defaulticon_help'] = 'S\'il y a plusieurs extensions de fichiers avec le même type MIME, sélectionnez cette option pour une des extensions afin que son icône soit utilisée lors de la détermination d\'une icône du type MIME.';
$string['delete_confirmation'] = 'Voulez-vous absolument supprimer <strong>.{$a}</strong>?';
$string['deletea'] = 'Supprimer {$a}';
$string['deletefiletypes'] = 'Supprimer un type de fichier';
$string['description'] = 'Description personnalisée';
$string['description_help'] = 'Description simple du type de fichier, p.ex. \'Kindle ebook\'. If your site supports multiple languages and uses the multi-language filter, you can enter multi-language tags in this field to supply a description in different languages.';
$string['descriptiontype'] = 'Type de désignation';
$string['descriptiontype_help'] = 'There are three possible ways to specify a description.

* Default behaviour uses the MIME type. If there is a language string in mimetypes.php corresponding to that MIME type, it will be used; otherwise the MIME type itself will be displayed to users.
* You can specify a custom description on this form.
* You can specify the name of a languge string in mimetypes.php to use instead of the MIME type.';
$string['descriptiontype_default'] = 'Par défaut (type MIME ou chaîne de langage correspondante si disponible)';
$string['descriptiontype_custom'] = 'Description personnalisée spécifiée dans ce formulaire';
$string['descriptiontype_lang'] = 'Chaîne de langage alternatif (à partir de mimetypes.php)';
$string['displaydescription'] = 'Désignation des marchandises';
$string['editfiletypes'] = 'Modifier un type de fichier existant';
$string['emptylist'] = 'Il n\'y a pas de types de fichiers définis.';
$string['error_addentry'] = 'L\'extension de type de fichier, la description, le type MIME et l\'icône ne doivent pas contenir de caractères de flux de ligne et de point-virgule.';
$string['error_defaulticon'] = 'Une autre extension de fichier avec le même type MIME est déjà marquée comme icône par défaut.';
$string['error_extension'] = 'L\'extension de type de fichier <strong>{$a}</strong> existe déjà ou n\'est pas valide. Les extensions de fichiers doivent être uniques et ne doivent pas contenir de caractères spéciaux.';
$string['error_notfound'] = 'Le type de fichier avec l\'extension {$a} ne peut pas être trouvé.';
$string['extension'] = 'Prolongation';
$string['extension_help'] = 'Extension de nom de fichier sans le point, par exemple \'mobi\'';
$string['groups'] = 'Groupes';
$string['groups_help'] = 'Liste facultative des groupes de type de fichier auxquels ce type appartient. Ce sont des catégories génériques telles que \'document\' and \'image\'.';
$string['icon'] = 'Icône de fichier';
$string['icon_help'] = 'Icon filename.

The list of icons is taken from the /pix/f directory inside your Moodle installation. You can add custom icons to this folder if required.';
$string['mimetype'] = 'Type MIME';
$string['mimetype_help'] = 'Type MIME associé à ce type de fichier, par exemple \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Types de fichiers';
$string['revert'] = 'Restaurer {$a} aux valeurs par défaut de Moodle';
$string['revert_confirmation'] = 'Voulez-vous vraiment restaurer <strong>.{$a}</strong> aux valeurs par défaut de Moodle, en rejetant vos modifications?';
$string['revertfiletype'] = 'Restaurer un type de fichier';
$string['source'] = 'Type';
$string['source_custom'] = 'Personnalisé';
$string['source_deleted'] = 'Supprimé';
$string['source_modified'] = 'Modifié';
$string['source_standard'] = 'Norme';
$string['privacy:metadata'] = 'Le plugin Types de fichiers ne stocke aucune donnée personnelle.';
