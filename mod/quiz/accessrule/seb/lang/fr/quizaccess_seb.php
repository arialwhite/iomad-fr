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
 * Strings for the quizaccess_seb plugin.
 *
 * @package    quizaccess_seb
 * @author     Luca Bösch <luca.boesch@bfh.ch>
 * @author     Andrew Madden <andrewmadden@catalyst-au.net>
 * @author     Dmitrii Metelkin <dmitriim@catalyst-au.net>
 * @copyright  2019 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Ajouter un nouveau modèle';
$string['allowedbrowserkeysdistinct'] = 'Les clés doivent toutes être différentes.';
$string['allowedbrowserkeyssyntax'] = 'Une clé devrait être une chaîne de 64 caractères.';
$string['cachedef_config'] = 'cache de configuration SEB';
$string['cachedef_configkey'] = 'SEB config key cache';
$string['cachedef_quizsettings'] = 'Cache des paramètres du jeu SEB';
$string['cantdelete'] = 'Le modèle peut\'t be deleted as it has been used for one or more quizzes.';
$string['cantedit'] = 'Le modèle peut\'t be edited as it has been used for one or more quizzes.';
$string['checkingaccess'] = 'Vérifier l\'accès au navigateur Safe Exam...';
$string['clientrequiresseb'] = 'Ce quiz a été configuré pour utiliser le navigateur Safe Exam avec la configuration du client.';
$string['confirmtemplateremovalquestion'] = 'Voulez-vous vraiment supprimer ce modèle ?';
$string['confirmtemplateremovaltitle'] = 'Confirmer la suppression du modèle ?';
$string['conflictingsettings'] = 'Vous faites't have permission to update existing Safe Exam Browser settings.';
$string['content'] = 'Modèle';
$string['description'] = 'Désignation des marchandises';
$string['disabledsettings'] = 'Paramètres désactivés.';
$string['disabledsettings_help'] = 'Les paramètres du quiz de l\'examen sécurisé peuvent\'t be changed if the quiz has been attempted. To change a setting, all quiz attempts must first be deleted.';
$string['downloadsebconfig'] = 'Télécharger le fichier de configuration SEB';
$string['duplicatetemplate'] = 'Un modèle avec le même nom existe déjà.';
$string['edittemplate'] = 'Modifier le modèle';
$string['enabled'] = 'Activé';
$string['error:ws:nokeyprovided'] = 'Au moins une clé Safe Exam Browser doit être fournie.';
$string['error:ws:quiznotexists'] = 'Quiz n\'a pas trouvé d\'identifiant correspondant au module de cours : {$a}';
$string['event:accessprevented'] = "L'accès au quiz a été empêché";
$string['event:templatecreated'] = 'Modèle SEB a été créé';
$string['event:templatedeleted'] = 'Modèle SEB a été supprimé';
$string['event:templatedisabled'] = 'Modèle SEB désactivé';
$string['event:templateenabled'] = 'Le modèle SEB a été activé';
$string['event:templateupdated'] = 'Modèle SEB mis à jour';
$string['exitsebbutton'] = 'Sortie du navigateur Safe Exam';
$string['filemanager_sebconfigfile'] = 'Télécharger le fichier de configuration du navigateur Safe Exam';
$string['filemanager_sebconfigfile_help'] = 'Veuillez télécharger votre propre fichier de configuration Safe Exam Browser pour ce quiz.';
$string['filenotpresent'] = 'Veuillez télécharger un fichier de configuration SEB.';
$string['fileparsefailed'] = 'Le fichier téléchargé ne peut pas être enregistré en tant que fichier de configuration SEB.';
$string['httplinkbutton'] = 'Télécharger la configuration';
$string['invalid_browser_key'] = "Clé de navigateur SEB non valide";
$string['invalid_config_key'] = "Clé de configuration SEB non valide";
$string['invalidkeys'] = 'Les clés du navigateur Safe Exam n\'ont pas pu être validées. Vérifiez que vous\'re using Safe Exam Browser with the correct configuration file.';
$string['invalidtemplate'] = "Modèle de configuration SEB non valide";
$string['manage_templates'] = 'Modèles de navigateur d\'examen sécurisé';
$string['managetemplates'] = 'Gérer les modèles';
$string['missingrequiredsettings'] = 'Les paramètres de configuration manquent certaines valeurs requises.';
$string['name'] = 'Nom';
$string['newtemplate'] = 'Nouveau modèle';
$string['noconfigfilefound'] = 'Aucun fichier de configuration SEB téléchargé n\'a pu être trouvé pour le quiz avec cmid: {$a}';
$string['noconfigfound'] = 'Aucune configuration SEB n\'a pu être trouvée pour un quiz avec cmid: {$a}';
$string['not_seb'] = 'Aucun navigateur Safe Exam n\'est utilisé.';
$string['notemplate'] = 'Pas de modèle';
$string['passwordnotset'] = 'Les paramètres actuels exigent des quiz utilisant le navigateur Safe Exam pour avoir un jeu de mots de passe.';
$string['pluginname'] = 'Règles d\'accès au navigateur Safe Exam';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Paramètres Safe Exam Browser pour un quiz. Cela inclut l\'ID du dernier utilisateur pour créer ou modifier les paramètres.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID du quiz pour lequel les paramètres existent.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Une fois que les paramètres ont été créés.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Une fois que les paramètres ont été modifiés pour la dernière fois.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID de l\'utilisateur qui a créé ou modifié les derniers paramètres.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Paramètres du modèle de navigateur d\'examen sécurisé. Cela inclut l\'ID du dernier utilisateur pour créer ou modifier le modèle.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Une fois que le modèle a été créé.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Une fois le modèle modifié pour la dernière fois.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID de l\'utilisateur qui a créé ou modifié le modèle en dernier.';
$string['quizsettings'] = 'Paramètres de quiz';
$string['restoredfrom'] = '{$a->name} (restauré par cmid {$a->cmid})';
$string['seb'] = 'Navigateur d\'examen sécurisé';
$string['seb:bypassseb'] = 'Allégez l\'exigence de consulter le quiz dans le navigateur Safe Exam.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Modifier SEB réglage du quiz: Sélectionner le fichier de configuration SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Modifier SEB réglage du quiz: Activer le filtrage des URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Modifier la configuration du questionnaire SEB : Clés d\'examen du navigateur autorisées';
$string['seb:manage_seb_allowreloadinexam'] = 'Modifier SEB réglage du quiz: Autoriser le rechargement';
$string['seb:manage_seb_allowspellchecking'] = 'Modifier SEB réglage du quiz: Activer la vérification orthographique';
$string['seb:manage_seb_allowuserquitseb'] = 'Modifier SEB réglage du quiz: Autoriser l\'abandon';
$string['seb:manage_seb_configuremanually'] = 'Modifier SEB réglage du quiz: Sélectionnez la configuration manuelle';
$string['seb:manage_seb_enableaudiocontrol'] = 'Modifier SEB réglage du quiz: Activer le contrôle audio';
$string['seb:manage_seb_expressionsallowed'] = 'Modifier SEB réglage du quiz: Expressions simples autorisées';
$string['seb:manage_seb_expressionsblocked'] = 'Modifier SEB réglage du quiz: Expressions simples bloquées';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modifier SEB réglage du quiz: Contenu intégré du filtre';
$string['seb:manage_seb_linkquitseb'] = 'Modifier SEB réglage du quiz: Quitter le lien';
$string['seb:manage_seb_muteonstartup'] = 'Modifier SEB réglage du quiz: Mute au démarrage';
$string['seb:manage_seb_quitpassword'] = 'Modifier SEB réglage du quiz: Quitter le mot de passe';
$string['seb:manage_seb_regexallowed'] = 'Modifier SEB réglage du quiz: Expressions Regex autorisées';
$string['seb:manage_seb_regexblocked'] = 'Modifier SEB réglage du quiz: Expressions Regex bloquées';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Modifier SEB réglage du quiz: Nécessite un navigateur d\'examen sécurisé';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modifier SEB réglage du quiz: Afficher la disposition du clavier';
$string['seb:manage_seb_showreloadbutton'] = 'Modifier SEB réglage du quiz: Afficher le bouton recharger';
$string['seb:manage_seb_showsebtaskbar'] = 'Modifier SEB réglage du quiz: Afficher la barre des tâches';
$string['seb:manage_seb_showtime'] = 'Modifier SEB réglage du quiz: Afficher l\'heure';
$string['seb:manage_seb_showwificontrol'] = 'Modifier SEB réglage du quiz: Afficher le contrôle Wi-Fi';
$string['seb:manage_seb_showsebdownloadlink'] = 'Modifier SEB réglage du quiz: Afficher le lien de téléchargement';
$string['seb:manage_seb_templateid'] = 'Modifier SEB réglage du quiz: Sélectionner le modèle SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Modifier SEB réglage du quiz: Confirmer l\'abandon';
$string['seb:manage_seb_usesebclientconfig'] = 'Modifier la configuration du questionnaire SEB : Utiliser la configuration du client SEB';
$string['seb:managetemplates'] = 'Gérer les modèles de configuration SEB';
$string['seb_activateurlfiltering'] = 'Activer le filtrage des URL';
$string['seb_activateurlfiltering_help'] = 'Si activé, les URL seront filtrées lors du chargement des pages web. Le jeu de filtres doit être défini ci-dessous.';
$string['seb_allowedbrowserexamkeys'] = 'Clés d\'examen du navigateur autorisées';
$string['seb_allowedbrowserexamkeys_help'] = 'Dans ce champ, vous pouvez saisir les clés d\'examen de navigateur autorisées pour les versions de Safe Exam Browser qui sont autorisées à accéder à ce quiz. Si aucune clé n\'est entrée, alors les clés d\'examen du navigateur ne sont pas cochées.';
$string['seb_allowreloadinexam'] = 'Activer le rechargement dans l\'examen';
$string['seb_allowreloadinexam_help'] = 'Si activé, le rechargement de page est autorisé (recharger le bouton dans la barre de tâches SEB, la barre d\'outils du navigateur, le menu de curseur latéral iOS, le raccourci clavier F5/cmd+R). Notez que la mise en cache hors ligne peut se rompre si un utilisateur tente de recharger une page sans connexion Internet.';
$string['seb_allowspellchecking'] = 'Activer la vérification orthographique';
$string['seb_allowspellchecking_help'] = 'Si activé, la vérification orthographique dans le navigateur SEB est autorisée.';
$string['seb_allowuserquitseb'] = 'Activer l\'abandon du SEB';
$string['seb_allowuserquitseb_help'] = 'Si activé, les utilisateurs peuvent quitter SEB avec le bouton "Quitter" dans la barre des tâches SEB ou en appuyant sur les touches Ctrl-Q ou en cliquant sur la fenêtre principale du navigateur.';
$string['seb_enableaudiocontrol'] = 'Activer les commandes audio';
$string['seb_enableaudiocontrol_help'] = 'Si activé, l\'icône de contrôle audio est affichée dans la barre des tâches SEB.';
$string['seb_expressionsallowed'] = 'Expressions autorisées';
$string['seb_expressionsallowed_help'] = 'Un champ texte qui contient les expressions de filtrage autorisées pour les URL autorisées. Utilisation de la carte joker \'\*\' is possible. Examples for expressions: \'example.com\' or \'example.com/stuff/\*\'. \'example.com\' matches \'example.com\', \'www.example.com\' and \'www.mail.example.com\'. \'example.com/stuff/\*\' matches all requests to any subdomain of \'example.com\' that have \'stuff\' as the first segment of the path.';
$string['seb_expressionsblocked'] = 'Expressions bloquées';
$string['seb_expressionsblocked_help'] = 'Un champ texte qui contient les expressions de filtrage des URL bloquées. Utilisation de la carte joker \'\*\' is possible. Examples for expressions: \'example.com\' or \'example.com/stuff/\*\'. \'example.com\' matches \'example.com\', \'www.example.com\' and \'www.mail.example.com\'. \'example.com/stuff/\*\' matches all requests to any subdomain of \'example.com\' that have \'stuff\' as the first segment of the path.';
$string['seb_filterembeddedcontent'] = 'Filtre aussi contenu intégré';
$string['seb_filterembeddedcontent_help'] = 'Si activé, les ressources intégrées seront également filtrées à l\'aide du jeu de filtres.';
$string['seb_help'] = 'Configurer le quiz pour utiliser le navigateur Safe Exam.';
$string['seb_linkquitseb'] = 'Afficher le bouton de sortie Safe Exam Browser, configuré avec ce lien de sortie';
$string['seb_linkquitseb_help'] = 'Dans ce champ, vous pouvez entrer le lien pour quitter SEB. Il est utilisé sur un bouton "Exit Safe Exam Browser" sur la page qui apparaît après l\'examen est soumis. Lorsque vous cliquez sur le bouton ou le lien placé où vous voulez le mettre, il est possible de quitter SEB sans avoir à saisir un mot de passe. Pour un site HTTPS, le lien d\'abandon doit commencer par https://. Si aucun lien n\'est entré, le bouton « Exit Safe Exam Browser » n\'apparaît pas et il n\'y a pas de lien défini pour quitter SEB.';
$string['seb_managetemplates'] = 'Gérer les modèles de navigateur d\'examen sécurisé';
$string['seb_muteonstartup'] = 'Mute au démarrage';
$string['seb_muteonstartup_help'] = 'Si activé, l\'audio est initialement muté lors du démarrage de SEB.';
$string['seb_quitpassword'] = 'Quitter le mot de passe';
$string['seb_quitpassword_help'] = 'Ce mot de passe est demandé lorsque les utilisateurs essaient de quitter SEB avec le bouton "Quitter", Ctrl-Q ou le bouton de fermeture dans la fenêtre du navigateur principal. Si aucun mot de passe d\'abandon n\'est défini, alors SEB vous invite à quitter SEB ?';
$string['seb_regexallowed'] = 'Regex autorisé';
$string['seb_regexallowed_help'] = 'Un champ texte qui contient les expressions de filtrage des URL autorisées dans un format d\'expression régulière (Regex).';
$string['seb_regexblocked'] = 'Regex bloqué';
$string['seb_regexblocked_help'] = 'Un champ texte qui contient les expressions de filtrage des URL bloquées dans un format d\'expression régulière (Regex).';
$string['seb_requiresafeexambrowser'] = 'Exiger l\'utilisation du navigateur Safe Exam';
$string['seb_requiresafeexambrowser_help'] = 'If enabled, students can only attempt the quiz using the Safe Exam Browser.
The available options are:

* No
<br/>Safe Exam Browser is not required to attempt the quiz.
* Yes – Use an existing template
<br/>A template for the configuration of Safe Exam Browser can be used. Templates are managed in the site administration. Your manual settings overwrite the settings in the template.
* Yes – Configure manually
<br/>No template for the configuration of Safe Exam Browser will be used. You can configure Safe Exam Browser manually.
* Yes – Upload my own config
<br/>You can upload your own Safe Exam Browser configuration file. All manual settings and the use of templates will be disabled.
* Yes – Use SEB client config
<br/>No configurations of Safe Exam Browser are on the Moodle side. The quiz can be attempted with any configuration of Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Afficher la disposition du clavier';
$string['seb_showkeyboardlayout_help'] = 'Si activé, la mise en page du clavier est affichée dans la barre de tâches SEB. Il vous permet de passer à d\'autres configurations de clavier, qui ont été activés dans le système d\'exploitation.';
$string['seb_showreloadbutton'] = 'Afficher le bouton recharger';
$string['seb_showreloadbutton_help'] = 'Si activé, un bouton de recharge est affiché dans la barre des tâches SEB, permettant de recharger la page Web actuelle.';
$string['seb_showsebtaskbar'] = 'Afficher la barre des tâches SEB';
$string['seb_showsebtaskbar_help'] = 'Si activé, une barre de tâches apparaît en bas de la fenêtre du navigateur SEB. La barre des tâches est nécessaire pour afficher des éléments tels que la commande Wi-Fi, le bouton de recharge, l\'heure et la disposition du clavier.';
$string['seb_showtime'] = 'Afficher l\'heure';
$string['seb_showtime_help'] = 'Si activé, l\'heure actuelle est affichée dans la barre des tâches SEB.';
$string['seb_showwificontrol'] = 'Afficher le contrôle Wi-Fi';
$string['seb_showwificontrol_help'] = 'Si activé, un bouton de commande Wi-Fi apparaît dans la barre des tâches SEB. Ce bouton permet aux utilisateurs de se reconnecter aux réseaux Wi-Fi qui ont déjà été connectés.';
$string['seb_showsebdownloadlink'] = 'Afficher le bouton de téléchargement Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Si activé, un bouton pour le téléchargement de Safe Exam Browser sera affiché sur la page de démarrage du quiz.';
$string['seb_templateid'] = 'Modèle de configuration du navigateur Safe Exam';
$string['seb_templateid_help'] = 'Les paramètres du modèle de configuration sélectionné seront utilisés pour la configuration du navigateur Safe Exam lors de l\'essai du quiz. Vous pouvez écraser les paramètres du modèle avec vos paramètres manuels.';
$string['seb_use_client'] = 'Oui – Utiliser la configuration du client SEB';
$string['seb_use_manually'] = 'Oui – Configurer manuellement';
$string['seb_use_template'] = 'Oui – Utiliser un modèle existant';
$string['seb_use_upload'] = 'Oui – Télécharger ma propre configuration';
$string['seb_userconfirmquit'] = 'Demander à l\'utilisateur de confirmer sa démission';
$string['seb_userconfirmquit_help'] = 'Si activé, les utilisateurs doivent confirmer l\'abandon du SEB lorsqu\'un lien d\'abandon est détecté.';
$string['sebdownloadbutton'] = 'Télécharger le navigateur Safe Exam';
$string['sebkeysvalidationfailed'] = 'Erreur de validation des clés SEB';
$string['seblinkbutton'] = 'Lancer le navigateur Safe Exam';
$string['sebrequired'] = "Ce quiz a été configuré de sorte que les étudiants peuvent seulement essayer en utilisant le navigateur Safe Exam.";
$string['setting:autoreconfigureseb'] = 'Configurer automatiquement SEB';
$string['setting:autoreconfigureseb_desc'] = 'Si activé, les utilisateurs qui naviguent vers le quiz en utilisant le navigateur Safe Exam seront automatiquement obligés de reconfigurer leur navigateur Safe Exam.';
$string['setting:displayblocksbeforestart'] = 'Afficher les blocs avant de commencer le quiz';
$string['setting:displayblocksbeforestart_desc'] = 'Si activé, les blocs seront affichés avant qu\'un utilisateur ne tente le quiz.';
$string['setting:displayblockswhenfinished'] = 'Afficher les blocs après la fin du quiz';
$string['setting:displayblockswhenfinished_desc'] = 'Si activé, les blocs seront affichés après qu\'un utilisateur a terminé sa tentative de quiz.';
$string['setting:downloadlink'] = 'Lien de téléchargement du navigateur Safe Exam';
$string['setting:downloadlink_desc'] = 'URL pour télécharger l\'application Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Mot de passe requis';
$string['setting:quizpasswordrequired_desc'] = 'Si activé, tous les quiz qui nécessitent le navigateur Safe Exam doivent avoir un jeu de mots de passe.';
$string['setting:showhttplink'] = 'Afficher http:// lien';
$string['setting:showseblink'] = 'Afficher seb:// lien';
$string['setting:showseblinks'] = 'Afficher les liens de configuration du navigateur Safe Exam';
$string['setting:showseblinks_desc'] = 'Indique s\'il faut afficher des liens pour qu\'un utilisateur accède au fichier de configuration Safe Exam Browser lorsque l\'accès au quiz est empêché. Notez que les liens seb:// peuvent ne pas fonctionner dans chaque navigateur.';
$string['setting:supportedversions'] = 'Veuillez noter que les versions minimales suivantes du client Safe Exam Browser sont nécessaires pour utiliser la fonction clé de configuration: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Comme il y a au moins une tentative de quiz, les paramètres du navigateur Safe Exam ne peuvent plus être mis à jour.';
$string['unknown_reason'] = "Raison inconnue";
$string['used'] = 'En usage';
