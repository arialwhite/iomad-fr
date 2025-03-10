<?php

// This file is part of the IOMAD Certificate module for Moodle - http://moodle.org/
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
 * @package   mod_iomadcertificate
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @basedon   mod_certificate by Mark Nelson <markn@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addlinklabel'] = 'Ajouter une autre option d\'activité liée';
$string['addlinktitle'] = 'Cliquez pour ajouter une autre option d\'activité liée';
$string['areaintro'] = 'Présentation du certificat';
$string['awarded'] = 'Décerné';
$string['awardedto'] = 'Récompensés';
$string['back'] = 'Précédent';
$string['border'] = 'Frontière';
$string['borderblack'] = 'Noir';
$string['borderblue'] = 'Bleu';
$string['borderbrown'] = 'Marron';
$string['bordercolor'] = 'Frontières';
$string['bordercolor_help'] = 'Puisque les images peuvent augmenter considérablement la taille du fichier PDF, vous pouvez choisir d\'imprimer une bordure de lignes au lieu d\'utiliser une bordure d\'image (s\'assurer que \'Border Image\' option is set to No). The \'Border Lines\' option will print a border of three lines of varying widths in the chosen colour.';
$string['bordergreen'] = 'Vert';
$string['borderlines'] = 'Lignes';
$string['borderstyle'] = 'Image à la frontière';
$string['borderstyle_help'] = 'Les\'Border Image\' option allows you to choose a border image from the certificate/pix/borders folder. Select the border image that you want around the certificate edges or select \'no border\'.';
$string['iomadcertificate'] = 'Vérification du code du certificat:';
$string['iomadcertificate:addinstance'] = 'Ajouter une instance de certificat';
$string['iomadcertificate:manage'] = 'Gérer une instance de certificat';
$string['iomadcertificate:printteacher'] = 'Être inscrit en tant qu\'enseignant sur le certificat si le format de l\'enseignant d\'impression est sur';
$string['iomadcertificate:student'] = 'Récupérer un certificat';
$string['iomadcertificate:view'] = 'Voir un certificat';
$string['iomadcertificate:viewother'] = 'Voir un autre certificat d\'utilisateur';
$string['iomadcertificatename'] = 'Nom du certificat';
$string['iomadcertificatereport'] = 'Rapport sur les certificats';
$string['iomadcertificatesfor'] = 'Certificats pour';
$string['iomadcertificatetype'] = 'Type de certificat';
$string['iomadcertificatetype_help'] = 'This is where you determine the layout of the certificate. The certificate type folder includes four default certificates:
A4 Embedded prints on A4 size paper with embedded font.
A4 Non-Embedded prints on A4 size paper without embedded fonts.
Letter Embedded prints on letter size paper with embedded font.
Letter Non-Embedded prints on letter size paper without embedded fonts.

The non-embedded types use the Helvetica and Times fonts. If you feel your users will not have these fonts on their computer, or if your language uses characters or symbols that are not accommodated by the Helvetica and Times fonts, then choose an embedded type. The embedded types use the Dejavusans and Dejavuserif fonts. This will make the PDF files rather large; it is not recommended to use an embedded type unless that\'s your only option.

New type folders can be added to the certificate/type folder. The name of the folder and any new language strings for the new type must be added to the certificate language file.';
$string['certify'] = 'Ceci pour certifier que';
$string['code'] = 'Code';
$string['completiondate'] = 'Fin du cours';
$string['course'] = 'For';
$string['coursegrade'] = 'Cours';
$string['coursename'] = 'Cours';
$string['coursetimereq'] = 'Minutes nécessaires en cours';
$string['coursetimereq_help'] = 'Entrez ici le temps minimum, en minutes, qu\'un étudiant doit être connecté au cours avant de pouvoir recevoir le certificat.';
$string['credithours'] = 'Heures de crédit';
$string['customtext'] = 'Texte personnalisé';
$string['customtext_help'] = 'Si vous voulez que le certificat imprime différents noms pour l\'enseignant pour ceux qui sont assignés le rôle de l\'enseignant, ne sélectionnez pas l\'imprimeur ou toute image signature à l\'exception de l\'image en ligne. Entrez les noms d\'enseignant dans cette zone de texte comme vous voulez qu\'ils apparaissent. Par défaut, ce texte est placé dans la partie inférieure gauche du certificat. Les tags HTML suivants sont disponibles : &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (la largeur et la largeur (ou la hauteur) sont obligatoires), &lt;a&gt; (le cheveu est obligatoire), &lt;font&gt; (les attributs possibles sont : couleur, (code couleur hex), visage, (arial, heures, messagerie, helvetica, symbole)).';
$string['datefmt'] = 'Date';
$string['datefmt_help'] = 'Choisissez un format de date pour imprimer la date sur le certificat. Ou choisissez la dernière option pour imprimer la date dans le format de l\'utilisateur\'s chosen language.';
$string['datehelp'] = 'Date';
$string['deletissuediomadcertificates'] = 'Supprimer les certificats délivrés';
$string['delivery'] = 'Livraison';
$string['delivery_help'] = 'Choose here how you would like your students to get their certificate.
Open in Browser: Opens the certificate in a new browser window.
Force Download: Opens the browser file download window.
Email Certificate: Choosing this option sends the certificate to the student as an email attachment.
After a user receives their certificate, if they click on the certificate link from the course homepage, they will see the date they received their certificate and will be able to review their received certificate.';
$string['designoptions'] = 'Options de conception';
$string['download'] = 'Télécharger la force';
$string['emailiomadcertificate'] = 'Courriel';
$string['emailothers'] = 'Courriel Autres';
$string['emailothers_help'] = 'Entrez ici les adresses e-mail, séparées par une virgule, de ceux qui devraient être alertés par un email chaque fois que les étudiants reçoivent un certificat.';
$string['emailstudenttext'] = 'Vous trouverez ci-joint votre certificat pour {$a->cours}.';
$string['emailteachers'] = 'Courriel Enseignants';
$string['emailteachers_help'] = 'Si activé, les enseignants sont alertés par un courriel chaque fois que les étudiants reçoivent un certificat.';
$string['emailteachermail'] = '
{$a->student} has received their certificate: \'{$a->certificate}\'
for {$a->course}.

You can review the certificate here:

    {$a->url}';
$string['emailteachermailhtml'] = '
{$a->student} has received their certificate: \'<i>{$a->certificate}</i>\'
for {$a->course}.

You can review the certificate here:

    <a href="[$a->url]">Certificate Report</a>';
$string['entercode'] = 'Entrez le code du certificat pour vérifier :';
$string['fontsans'] = 'Famille de polices Sans-serif';
$string['fontsans_desc'] = 'Famille de polices Sans-serif pour les certificats avec polices intégrées';
$string['fontserif'] = 'Famille de polices Serif';
$string['fontserif_desc'] = 'Famille de polices Serif pour les certificats avec polices intégrées';
$string['getiomadcertificate'] = 'Obtenez votre certificat';
$string['grade'] = 'Classe';
$string['gradedate'] = 'Année';
$string['gradefmt'] = 'Format de classe';
$string['gradefmt_help'] = 'There are three available formats if you choose to print a grade on the certificate:

Percentage Grade: Prints the grade as a percentage.
Points Grade: Prints the point value of the grade.
Letter Grade: Prints the percentage grade as a letter.';
$string['gradeletter'] = 'Classe lettre';
$string['gradepercent'] = 'Pourcentage';
$string['gradepoints'] = 'Niveaux';
$string['imagetype'] = 'Type d\'image';
$string['incompletemessage'] = 'Pour télécharger votre certificat, vous devez d\'abord effectuer toutes les activités requises. Veuillez retourner au cours pour terminer votre cours.';
$string['intro'] = 'Présentation';
$string['issueoptions'] = 'Options';
$string['issued'] = 'Émis';
$string['issueddate'] = 'Date de délivrance';
$string['landscape'] = 'Paysage';
$string['lastviewed'] = 'Vous avez reçu ce certificat pour la dernière fois :';
$string['letter'] = 'Lettre';
$string['lockingoptions'] = 'Options de verrouillage';
$string['modulename'] = 'Certificat OIMAD';
$string['modulename_help'] = 'Ce module permet la génération dynamique de certificats basés sur des conditions prédéfinies définies par l\'enseignant.';
$string['modulename_link'] = 'Modèle de certificat';
$string['modulenameplural'] = 'Certificats de l\'OIMAD';
$string['myiomadcertificates'] = 'Mes certificats';
$string['noiomadcertificates'] = 'Il n\'y a pas de certificat';
$string['noiomadcertificatesissued'] = 'Aucun certificat n\'a été délivré';
$string['noiomadcertificatesreceived'] = 'n\'a reçu aucun certificat de cours.';
$string['nofileselected'] = 'Doit choisir un fichier à télécharger!';
$string['nogrades'] = 'Aucune note disponible';
$string['notapplicable'] = 'N/A';
$string['notfound'] = 'Le numéro de certificat n\'a pas pu être validé.';
$string['notissued'] = 'Non publié';
$string['notissuedyet'] = 'Non encore publié';
$string['notreceived'] = 'Vous n\'avez pas reçu ce certificat';
$string['openbrowser'] = 'Ouvrir dans une nouvelle fenêtre';
$string['opendownload'] = 'Cliquez sur le bouton ci-dessous pour enregistrer votre certificat sur votre ordinateur.';
$string['openemail'] = 'Cliquez sur le bouton ci-dessous, et votre certificat vous sera envoyé en pièce jointe.';
$string['openwindow'] = 'Cliquez sur le bouton ci-dessous pour ouvrir votre certificat dans une nouvelle fenêtre de navigateur.';
$string['or'] = 'Or';
$string['orientation'] = 'Orientation';
$string['orientation_help'] = 'Choisissez si vous voulez que votre orientation de certificat soit portrait ou paysage.';
$string['pluginadministration'] = 'OIMAD Administration du certificat';
$string['pluginname'] = 'Certificat OIMAD';
$string['portrait'] = 'Portrait';
$string['printdate'] = 'Date d\'impression';
$string['printdate_help'] = 'C\'est la date qui sera imprimée sur le certificat si une date d\'impression est sélectionnée. Si la date d\'achèvement du cours est choisie mais que l\'étudiant n\'a pas terminé le cours, la date de réception du certificat sera imprimée. Vous pouvez également choisir d\'imprimer la date en fonction du moment où une activité a été notée. Si un certificat est délivré avant que cette activité ne soit classée, la date de réception sera imprimée.';
$string['printerfriendly'] = 'Page imprimable';
$string['printhours'] = 'Imprimer les heures de crédit';
$string['printhours_help'] = 'Inscrivez ici le nombre d\'heures de crédit à imprimer sur le certificat.';
$string['printgrade'] = 'Classe d\'impression';
$string['printgrade_help'] = 'Vous pouvez choisir n\'importe quel cours de grade disponible dans le manuel de grade pour imprimer l\'utilisateur\'s grade received for that item on the certificate. The grade items are listed in the order in which they appear in the gradebook. Choose the format of the grade below.';
$string['printnumber'] = 'Imprimer le code';
$string['printnumber_help'] = 'Un code unique à 10 chiffres de lettres et de chiffres aléatoires peut être imprimé sur le certificat. Ce numéro peut ensuite être vérifié en le comparant au numéro de code affiché dans le rapport des certificats.';
$string['printoutcome'] = 'Imprimer le résultat';
$string['printoutcome_help'] = 'Vous pouvez choisir n\'importe quel résultat de cours pour imprimer le nom du résultat et de l\'utilisateur\'s received outcome on the certificate. An example might be \'Assignment Outcome: Proficient\'.';
$string['printseal'] = 'Sceller ou Logo Image';
$string['printseal_help'] = 'Cette option vous permet de sélectionner un sceau ou un logo à imprimer sur le certificat à partir du dossier certificat/pix/seals. Par défaut, cette image est placée dans le coin inférieur droit du certificat.';
$string['printsignature'] = 'Image de signature';
$string['printsignature_help'] = 'Cette option vous permet d\'imprimer une image de signature à partir du dossier certificat/pixel/signatures. Vous pouvez imprimer une représentation graphique d\'une signature ou imprimer une ligne pour une signature écrite. Par défaut, cette image est placée dans la partie inférieure gauche du certificat.';
$string['printteacher'] = 'Imprimer Nom(s) de l\'enseignant';
$string['printteacher_help'] = 'Pour imprimer le nom de l\'enseignant sur le certificat, fixer le rôle de l\'enseignant au niveau du module. Faites cela si, par exemple, vous avez plus d\'un enseignant pour le cours ou plus d\'un certificat dans le cours et vous voulez imprimer différents noms de professeur sur chaque certificat. Cliquez pour modifier le certificat, puis cliquez sur \'Locally assigned roles\' tab. Then assign the role of teacher (editing teacher) to the certificate (they do not HAVE to be a teacher in the course - you can assign that role to anyone). Those names will be printed on the certificate for teacher.';
$string['printwmark'] = 'Image filigrane';
$string['printwmark_help'] =  'Une image filigrane peut être placée en arrière-plan du certificat. Cela pourrait être un logo, un sceau, une crête, une formulation, ou tout ce que vous voulez utiliser comme arrière-plan graphique.';
$string['receivedcerts'] = 'Certificats reçus';
$string['receiveddate'] = 'Date de réception';
$string['removecert'] = 'Certificats délivrés supprimés';
$string['report'] = 'Rapport annuel';
$string['reportcert'] = 'Certificats de déclaration';
$string['reportcert_help'] = 'Si vous choisissez oui ici, alors ce certificat\'s date received, code number, and the course name will be shown on the user certificate reports. If you choose to print a grade on this certificate, then that grade will also be shown on the certificate report.';
$string['requiredtimenotmet'] = 'Vous devez passer au moins un minimum de {$a->temps requis} minutes dans le cours avant d\'accéder à ce certificat';
$string['requiredtimenotvalid'] = 'Le temps requis doit être un nombre valide supérieur à 0';
$string['reviewiomadcertificate'] = 'Vérifiez votre certificat';
$string['savecert'] = 'Enregistrer les certificats';
$string['savecert_help'] = 'Si vous choisissez cette option, alors une copie de chaque utilisateur\'s certificate PDF file will be saved in the moodledata directory. A link to each user\'s saved certificate will be displayed in the certificate report.';
$string['seal'] = 'Sceau';
$string['sigline'] = 'ligne';
$string['signature'] = 'Signature';
$string['statement'] = 'a terminé le cours';
$string['summaryofattempts'] = 'Résumé des certificats précédemment reçus';
$string['textoptions'] = 'Options textuelles';
$string['title'] = 'CERTIFICAT DE RÉALISATION';
$string['to'] = 'Récompensés';
$string['typeA4_embedded'] = 'A4 Intégré';
$string['typeA4_non_embedded'] = 'A4 Non- Intégrés';
$string['typeletter_embedded'] = 'Lettre intégrée';
$string['typeletter_non_embedded'] = 'Lettre non accompagnée';
$string['unsupportedfiletype'] = 'Fichier doit être un fichier jpeg ou png';
$string['uploadimage'] = 'Télécharger l\'image';
$string['uploadimagedesc'] = 'Ce bouton vous mènera à un nouvel écran où vous pourrez télécharger des images';
$string['userdateformat'] = 'Utilisateur\'s Language Date Format';
$string['validate'] = 'Vérifier';
$string['verifyiomadcertificate'] = 'Vérifier le certificat';
$string['viewiomadcertificateviews'] = 'Afficher {$a} les certificats délivrés';
$string['viewed'] = 'Vous avez reçu ce certificat sur:';
$string['viewtranscript'] = 'Afficher les certificats';
$string['watermark'] = 'Filigrane';
$string['companycertify'] = 'Ce certificat d\'achèvement reconnaît que';
$string['companydetails'] = 'a terminé avec succès le programme de formation en ligne intitulé';
$string['companyscore'] = 'avec un score global de {$a}';
$string['companydate'] = 'sur {$a}';
$string['companydatecap'] = 'Sur {$a}';

