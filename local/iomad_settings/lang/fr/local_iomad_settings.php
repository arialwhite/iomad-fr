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
 * @package   local_iomad_settings
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'IOMAD Paramètres';
$string['privacy:metadata'] = 'Le plugin de paramètres locaux IOMAD affiche uniquement les données stockées dans d\'autres emplacements.';
$string['customtext2'] = 'Texte personnalisé 2';
$string['customtext3'] = 'Texte personnalisé 3';
$string['dateformat'] = 'Format de date';
$string['emaildelay'] = 'Délai du courriel';
$string['emaildelay_help'] = 'Tout email IOMAD aura cette valeur (en secondes) ajoutée au temps d\'envoi par défaut. Cela permet un retard par défaut dans l\'envoi, comme pour les messages forum, de tout e-mail IOMAD. Les horaires seront toujours touchés par la tâche cron local_mail, mais ce délai sera une valeur minimale.';
$string['iomad_autoenrol_managers'] = 'S\'inscrire comme non-étudiants';
$string['iomad_autoenrol_managers_help'] = 'Si cela n\'est pas pris, alors les comptes de gestionnaire ne seront pas inscrits comme les rôles d\'enseignant de l\'entreprise sur les cours d\'inscription manuelle.';
$string['iomad_autoreallocate_licenses'] = 'Réallocation automatique de licence';
$string['iomad_autoreallocate_licenses_help'] = 'Si cela est coché, alors quand un utilisateur\'s licensed course entry is deleted within the user report, the system will automatically try to re-allocate another from the company license pool.';
$string['iomadcertificate_logo'] = 'Logo par défaut pour le certificat d\'entreprise IOMAD';
$string['iomadcertificate_signature'] = 'Signature par défaut du certificat d\'entreprise IOMAD';
$string['iomadcertificate_border'] = 'Frontière par défaut pour le certificat d\'entreprise IOMAD';
$string['iomadcertificate_watermark'] = 'Filigrane par défaut pour le certificat de la société IOMAD';
$string['iomadcertificate_logodesc'] = 'C\'est l\'image de logo par défaut utilisée pour le type de certificat IOMAD Company. Vous pouvez le surcharger dans les pages d\'édition de l\'entreprise. L\'image téléchargée doit avoir une hauteur de 80 pixels et un fond transparent.';
$string['iomadcertificate_signaturedesc'] = 'C\'est l\'image de signature par défaut utilisée pour le type de certificat IOMAD Company. Vous pouvez le surcharger dans les pages d\'édition de l\'entreprise. L\'image téléchargée doit être de 31 pixels x 150 pixels et avoir un fond transparent.';
$string['iomadcertificate_borderdesc'] = 'C\'est l\'image par défaut utilisée pour le type de certificat IOMAD Company. Vous pouvez le surcharger dans les pages d\'édition de l\'entreprise. L\'image téléchargée doit être de 800 pixels x 604 pixels.';
$string['iomadcertificate_watermarkdesc'] = 'C\'est l\'image filigrane par défaut utilisée pour le type de certificat IOMAD Company. Vous pouvez le surcharger dans les pages d\'édition de l\'entreprise. L\'image téléchargée ne doit pas dépasser 800 pixels x 604 pixels.';
$string['iomad_allow_username'] = 'Peut spécifier le nom d\'utilisateur';
$string['iomad_allow_username_help'] = 'Le choix de ce champ permettra de présenter le nom d\'utilisateur lors de la création de comptes. Cela remplacera l\'adresse email d\'utilisation comme paramètre de nom d\'utilisateur.';
$string['iomad_downloaddetails'] = 'Télécharger les détails de l\'activité dans le rapport d\'achèvement du cours.';
$string['iomad_downloaddetails_help'] = 'Le choix de cette option permettra de télécharger tous les détails des critères de fin de cours pour l\'utilisateur ainsi que leur statut. Sans cette sélection, seul leur statut sera inclus.';
$string['iomad_hidevalidcourses'] = 'Afficher uniquement les résultats de cours actuels dans les rapports par défaut';
$string['iomad_hidevalidcourses_help'] = 'Cela modifie l\'affichage des rapports d\'achèvement de sorte qu\'il n\'affiche que les résultats de cours actuels (ceux qui n\'ont pas encore expiré ou n\'ont pas d\'expiration) par défaut.';
$string['iomad_max_list_classrooms'] = 'Nombre maximal de salles de classe';
$string['iomad_max_list_classrooms_help'] = 'Cela définit le nombre maximum de salles de classe affichées sur une page';
$string['iomad_max_list_companies'] = 'Nombre maximal de sociétés cotées';
$string['iomad_max_list_companies_help'] = 'Ceci définit le nombre maximal d\'entreprises affichées sur une page';
$string['iomad_max_list_competencies'] = 'Compétences maximales énumérées';
$string['iomad_max_list_competencies_help'] = 'Cela définit le nombre maximal de compétences affichées sur une page';
$string['iomad_max_list_courses'] = 'Cours maximum';
$string['iomad_max_list_courses_help'] = 'Cela définit le nombre maximum de cours affichés sur une page';
$string['iomad_max_list_email_templates'] = 'Modèles maximums d\'email listés';
$string['iomad_max_list_email_templates_help'] = 'Cela définit le nombre maximal de modèles de courriel affichés sur une page';
$string['iomad_max_list_frameworks'] = 'Cadres maximums';
$string['iomad_max_list_frameworks_help'] = 'Ceci définit le nombre maximum de cadres affichés sur une page';
$string['iomad_max_list_licenses'] = 'Licences maximales énumérées';
$string['iomad_max_list_licenses_help'] = 'Cela définit le nombre maximal de licences affichées sur une page';
$string['iomad_max_list_templates'] = 'Modèles maximum de plan d\'apprentissage';
$string['iomad_max_list_templates_help'] = 'Cela définit le nombre maximum de modèles de plan d\'apprentissage affichés sur une page';
$string['iomad_max_list_users'] = 'Nombre maximal d\'utilisateurs';
$string['iomad_max_list_users_help'] = 'Ceci définit le nombre maximum d\'utilisateurs affichés sur une page';
$string['iomad_max_select_courses'] = 'Maximum des cours listés dans le sélecteur';
$string['iomad_max_select_courses_help'] = 'Cela définit le nombre maximum de cours affichés dans un sélecteur de recherche de formulaire avant \'too many courses\' is shown';
$string['iomad_max_select_frameworks'] = 'Cadres maximum listés dans le sélecteur';
$string['iomad_max_select_frameworks_help'] = 'Ceci définit le nombre maximum de cadres affichés dans un sélecteur de recherche de formulaire avant \'too many frameworks\' is shown';
$string['iomad_max_select_templates'] = 'Modèles maximum de plan d\'apprentissage dans le sélecteur';
$string['iomad_max_select_templates_help'] = 'Cela définit le nombre maximum de modèles de plan d\'apprentissage affichés dans un sélecteur de recherche de formulaire avant \'too many templates\' is shown';
$string['iomad_max_select_users'] = 'Nombre maximum d\'utilisateurs listés dans le sélecteur';
$string['iomad_max_select_users_help'] = 'Cela définit le nombre maximum d\'utilisateurs affichés dans un sélecteur de recherche de formulaire avant \'too many users\' is shown';
$string['iomad_report_fields'] = 'Autres champs du profil de rapport';
$string['iomad_report_fields_help'] = 'Il s\'agit d\'une liste de champs de profil séparés par une virgule. Si vous voulez utiliser un champ de profil optionnel, vous devez utiliser profile_field_<shortname> où <shortname> est le nom abrégé défini pour le champ de profil. L\'ordre donné est l\'ordre dans lequel ils sont affichés.';
$string['iomad_report_grade_places'] = 'Nombre de décimales dans les rapports';
$string['iomad_report_grade_places_help'] = 'Cela définit le nombre de décimales qui seront affichées dans les rapports IOMAD chaque fois qu\'un utilisateur\'s grade is listed';
$string['iomad_settings:addinstance'] = 'Ajouter un nouveau bloc de paramètres IOMAD';
$string['iomad_showcharts'] = 'Afficher les diagrammes de fin de cours par défaut';
$string['iomad_showcharts_help'] = 'Si coché, les graphiques seront affichés en premier avec une option à afficher comme texte à la place';
$string['iomad_show_company_structure'] = 'Afficher la hiérarchie d\'entreprise dans le sélecteur';
$string['iomad_show_company_structure_help'] = 'Si elle est cochée, les sociétés pour enfants apparaîtront dans le sélecteur de la société mère. Cela peut causer des problèmes de performance pour les grands sites.';
$string['iomad_sync_department'] = 'Synchroniser le département d\'entreprise avec le profil';
$string['iomad_sync_department_help'] = 'Le choix de ceci conservera l\'utilisateur\'s profile field for department in sync with the name of the company department that the user is allocated to (Set from company department), or will assign the user to a company department which matches (Set to company department). If the user is in multiple departments, then this will show \'Multiple\' instead.';
$string['iomad_sync_institution'] = 'Synchroniser le nom de l\'entreprise avec le profil';
$string['iomad_sync_institution_help'] = 'Sélectionner ceci gardera l\'utilisateur\'s institution profile field in sync with either the shortname or name of the company that the user is allocated to. If the user is in multiple companies, then this will show \'Multiple\' instead.';
$string['iomad_use_email_as_username'] = 'Utiliser l\'adresse électronique comme nom d\'utilisateur';
$string['iomad_use_email_as_username_help'] = 'Sélectionner ceci va changer la façon dont un utilisateur\'s username is automatically created for a new user account in IOMAD so that it simply uses their email address';
$string['iomad_useicons'] = 'Utiliser des icônes dans le tableau de bord de l\'IOMAD';
$string['iomad_useicons_help'] = 'Sélectionner ceci modifie les icônes du tableau de bord pour utiliser des images au lieu de caractères impressionnants de police.';
$string['iomad_showcompanydropdown'] = 'Afficher le commutateur d\'entreprise dans navbar';
$string['iomad_showcompanydropdown_help'] = 'Le choix de cette option affiche le commutateur déroulant de l\'entreprise dans la barre de navigation lorsque l\'utilisateur peut accéder à plusieurs entreprises. Les utilisateurs auront besoin d\'un autre moyen d\'accéder au commutateur de l\'entreprise est celui-ci est désactivé et ils n\'ont pas accès au tableau de bord de l\'IOMAD dans leur entreprise actuelle.';
$string['reset_annually'] = 'Chaque année';
$string['reset_daily'] = 'Tous les jours';
$string['reset_never'] = 'Jamais';
$string['reset_sequence'] = 'Réinitialiser le numéro de séquence';
$string['serialnumberformat'] = 'Format du numéro de série';
$string['serialnumberformat_help'] = '<p>The Custom Text fields and the Serial Number Format can have the following variables:</p><ul>
                                        <li>{EC} = Establishment Code</li>
                                        <li>{CC} = Course ID Number</li>
                                        <li>{CD:DDMMYY} = Date (with format)</li>
                                        <li>{SEQNO:n} = Sequence Number (with padding n)</li>
                                        <li>{SN} = Certificate Serial Number (blank if used in Serial Number Format field))</li>
                                        </ul>';

// SAMPLE Certificate.
$string['sampletitle'] = 'Certificat de formation';
$string['samplecertify'] = 'Ceci pour certifier que';
$string['samplestatement'] = 'a terminé un cours en ligne sur';
$string['sampledate'] = 'on';
$string['samplecoursegrade'] = 'avec le résultat de';
$string['typesample'] = 'Échantillon';
$string['samplecode'] = 'Numéro de certificat :';
$string['samplesigned'] = 'Signé :';
$string['sampleonbehalfof'] = 'Au nom de la société';
