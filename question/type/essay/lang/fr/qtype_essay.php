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
 * Strings for component 'qtype_essay', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage essay
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['acceptedfiletypes'] = 'Types de fichiers acceptés';
$string['acceptedfiletypes_help'] = 'Les types de fichiers acceptés peuvent être restreints en entrant une liste d\'extensions de fichiers. Si le champ est laissé vide, tous les types de fichiers sont autorisés.';
$string['allowattachments'] = 'Permettre les pièces jointes';
$string['answerfiles'] = 'Fichiers de réponse';
$string['answertext'] = 'Réponse';
$string['attachedfiles'] = 'Pièces jointes : {$a}';
$string['attachmentsoptional'] = 'Les pièces jointes sont facultatives';
$string['attachmentsrequired'] = 'Exiger des pièces jointes';
$string['attachmentsrequired_help'] = 'Cette option spécifie le nombre minimal de pièces jointes requis pour qu\'une réponse soit considérée comme graduable.';
$string['err_maxminmismatch'] = 'La limite maximale de mots doit être supérieure à la limite minimale de mots';
$string['err_maxwordlimit'] = 'La limite maximale des mots est activée mais n\'est pas définie';
$string['err_maxwordlimitnegative'] = 'La limite maximale de mots ne peut être un nombre négatif';
$string['err_minwordlimit'] = 'La limite minimale de mots est activée mais n\'est pas définie';
$string['err_minwordlimitnegative'] = 'La limite minimale de mots ne peut être un nombre négatif';
$string['formateditor'] = 'Éditeur HTML';
$string['formateditorfilepicker'] = 'Éditeur HTML avec sélectionneur de fichiers';
$string['formatmonospaced'] = 'Texte simple, police monospaced';
$string['formatnoinline'] = 'Pas de texte en ligne';
$string['formatplain'] = 'Texte simple';
$string['graderinfo'] = 'Renseignements pour les élèves du grade';
$string['graderinfoheader'] = 'Informations sur le classement';
$string['maxbytes'] = 'Taille maximale du fichier';
$string['maxwordlimit'] = 'Limite maximale de mots';
$string['maxwordlimit_help'] = 'Si la réponse exige que les étudiants entrent dans le texte, c\'est le nombre maximum de mots que chaque étudiant sera autorisé à soumettre.';
$string['maxwordlimitboundary'] = 'La limite de mots pour cette question est {$a->limit} mots et vous essayez de soumettre {$a->count} mots. Veuillez raccourcir votre réponse et réessayer.';
$string['minwordlimit'] = 'Limite minimale de mots';
$string['minwordlimit_help'] = 'Si la réponse exige que les étudiants entrent dans le texte, c\'est le nombre minimum de mots que chaque étudiant sera autorisé à soumettre.';
$string['minwordlimitboundary'] = 'Cette question nécessite une réponse d\'au moins {$a->limit} mots et vous essayez de soumettre {$a->count} mots. Veuillez élargir votre réponse et réessayer.';
$string['mustattach'] = 'Lorsque « Aucun texte en ligne » est sélectionné, ou que les réponses sont facultatives, vous devez autoriser au moins une pièce jointe.';
$string['mustrequire'] = 'Lorsque « Aucun texte en ligne » est sélectionné, ou que les réponses sont facultatives, vous devez exiger au moins une pièce jointe.';
$string['mustrequirefewer'] = 'Vous ne pouvez pas exiger plus de pièces jointes que vous le permettez.';
$string['nlines'] = 'Lignes {$a}';
$string['nonexistentfiletypes'] = 'Les types de fichiers suivants n\'ont pas été reconnus : {$a}';
$string['pluginname'] = 'Essai';
$string['pluginname_help'] = 'En réponse à une question, le répondant peut télécharger un ou plusieurs fichiers et/ou entrer du texte en ligne. Un modèle de réponse peut être fourni. Les réponses doivent être classées manuellement.';
$string['pluginname_link'] = 'question/type/essai';
$string['pluginnameadding'] = 'Ajouter une question Essai';
$string['pluginnameediting'] = 'Modifier une question d\'essai';
$string['pluginnamesummary'] = 'Permet une réponse d\'un téléchargement de fichier et/ou de texte en ligne. Cela doit ensuite être noté manuellement.';
$string['privacy:metadata'] = 'Le plugin Essai de type question permet aux auteurs de questions de définir les options par défaut en tant que préférences de l\'utilisateur.';
$string['privacy:preference:defaultmark'] = 'La marque par défaut définie pour une question donnée.';
$string['privacy:preference:responseformat'] = 'Quel est le format de réponse (éditeur HTML, texte simple, etc.)?';
$string['privacy:preference:responserequired'] = 'Si l\'étudiant est tenu d\'entrer le texte ou l\'entrée du texte est facultative.';
$string['privacy:preference:responsefieldlines'] = 'Nombre de lignes indiquant la taille de la boîte d\'entrée (zone textuelle).';
$string['privacy:preference:attachments'] = 'Nombre de pièces jointes autorisées.';
$string['privacy:preference:attachmentsrequired'] = 'Nombre de pièces jointes requises.';
$string['privacy:preference:maxbytes'] = 'Taille maximale du fichier.';
$string['responsefieldlines'] = 'Taille de la boîte d\'entrée';
$string['responseformat'] = 'Format de réponse';
$string['responseoptions'] = 'Options de réponse';
$string['responserequired'] = 'Exiger un texte';
$string['responsenotrequired'] = 'L\'entrée du texte est facultative';
$string['responseisrequired'] = 'Exiger que l\'étudiant entre le texte';
$string['responsetemplate'] = 'Modèle de réponse';
$string['responsetemplateheader'] = 'Modèle de réponse';
$string['responsetemplate_help'] = 'Tout texte entré ici sera affiché dans la boîte de réponse quand une nouvelle tentative à la question commencera.';
$string['wordcount'] = 'Nombre de mots : {$a}';
$string['wordcounttoofew'] = 'Nombre de mots : {$a->count}, moins que les mots requis {$a->limite}.';
$string['wordcounttoomuch'] = 'Nombre de mots : {$a->count}, plus que la limite de {$a->limite} mots.';
