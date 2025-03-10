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
//
// This file is part of BasicLTI4Moodle
//
// BasicLTI4Moodle is an IMS BasicLTI (Basic Learning Tools for Interoperability)
// consumer for Moodle 1.9 and Moodle 2.0. BasicLTI is a IMS Standard that allows web
// based learning tools to be easily integrated in LMS as native ones. The IMS BasicLTI
// specification is part of the IMS standard Common Cartridge 1.1 Sakai and other main LMS
// are already supporting or going to support BasicLTI. This project Implements the consumer
// for Moodle. Moodle is a Free Open source Learning Management System by Martin Dougiamas.
// BasicLTI4Moodle is a project iniciated and leaded by Ludo(Marc Alier) and Jordi Piguillem
// at the GESSI research group at UPC.
// SimpleLTI consumer for Moodle is an implementation of the early specification of LTI
// by Charles Severance (Dr Chuck) htp://dr-chuck.com , developed by Jordi Piguillem in a
// Google Summer of Code 2008 project co-mentored by Charles Severance and Marc Alier.
//
// BasicLTI4Moodle is copyright 2009 by Marc Alier Forment, Jordi Piguillem and Nikolas Galanis
// of the Universitat Politecnica de Catalunya http://www.upc.edu
// Contact info: Marc Alier Forment granludo @ gmail.com or marc.alier @ upc.edu.

/**
 * This file contains en_utf8 translation of the Basic LTI module
 *
 * @package mod_lti
 * @copyright  2009 Marc Alier, Jordi Piguillem, Nikolas Galanis
 *  marc.alier@upc.edu
 * @copyright  2009 Universitat Politecnica de Catalunya http://www.upc.edu
 * @author     Marc Alier
 * @author     Jordi Piguillem
 * @author     Nikolas Galanis
 * @author     Chris Scribner
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['accept'] = 'Accepter';
$string['accepted'] = 'Acceptée';
$string['accept_grades'] = 'Accepter les notes de l\'outil';
$string['accept_grades_admin'] = 'Accepter les notes de l\'outil';
$string['accept_grades_admin_help'] = 'Specify whether the tool provider can add, update, read, and delete grades associated with instances of this tool.

Some tool providers support reporting grades back to Moodle based on actions taken within the tool, creating a more integrated
experience.';
$string['accept_grades_help'] = 'Specify whether the tool provider can add, update, read, and delete grades associated only with this external tool instance.

Some tool providers support reporting grades back to Moodle based on actions taken within the tool, creating a more integrated experience.

Note that this setting may be overridden in the tool configuration.';
$string['accept_grades_from_tool'] = 'Permettre à {$a} d\'ajouter des grades dans le classeur';
$string['action'] = 'Décision';
$string['activate'] = 'Activer';
$string['activatetoadddescription'] = 'Vous devrez activer cet outil avant de pouvoir ajouter une description.';
$string['active'] = 'Actif';
$string['activity'] = 'Activité';
$string['add_ltiadv'] = 'Ajouter LTI Avantages';
$string['add_ltilegacy'] = 'Ajouter Legacy LTI';
$string['addnewapp'] = 'Activer une application externe';
$string['addserver'] = 'Ajouter un nouveau serveur de confiance';
$string['addtool'] = 'Ajouter un outil';
$string['addtype'] = 'Ajouter un outil préconfiguré';
$string['allow'] = 'Permettre';
$string['allowsetting'] = 'Permettre à l\'outil de stocker 8K de paramètres dans Moodle';
$string['always'] = 'Toujours';
$string['automatic'] = 'Automatique, basé sur l\'URL de l\'outil';
$string['autoaddtype'] = 'Ajouter un outil';
$string['baseurl'] = 'Nom d\'enregistrement URL/outil de base';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'LTI Chaîne de base OAuth';
$string['basiclti_endpoint'] = 'Find de lancement LTI';
$string['basiclti_in_new_window'] = 'Votre activité s\'ouvre dans une nouvelle fenêtre';
$string['basiclti_in_new_window_open'] = 'Ouvrir dans une nouvelle fenêtre';
$string['basiclti_parameters'] = 'Paramètres de lancement LTI';
$string['basicltiactivities'] = 'Activités de l\'ITL';
$string['basicltifieldset'] = 'Ensemble de champs d\'exemple personnalisé';
$string['basicltiintro'] = 'Description de l\'activité';
$string['basicltiname'] = 'Nom de l\'activité';
$string['basicltisettings'] = 'Paramètres d\'interopérabilité des outils d\'apprentissage de base';
$string['cachedef_keyset'] = 'Cache les informations des outils';
$string['cancel'] = 'Annuler';
$string['cancelled'] = 'Annulé';
$string['capabilities'] = 'Capacités';
$string['capabilitiesrequired'] = 'Cet outil nécessite l\'accès aux données suivantes afin d\'activer:';
$string['capabilities_help'] = 'Sélectionnez les capacités que vous souhaitez offrir au fournisseur d\'outils. Plus d\'une capacité peut être sélectionnée.';
$string['cleanaccesstokens'] = 'Suppression des outils externes des jetons d\'accès expirés';
$string['click_to_continue'] = '<a href="{$a->link}"cible="top"> Cliquez pour continuer</a>';
$string['clientidadmin'] = 'ID client';
$string['clientidadmin_help'] = 'L\'ID client est une valeur unique utilisée pour identifier un outil. Il est créé automatiquement pour chaque outil qui utilise le profil de sécurité JWT introduit dans LTI 1.3 et devrait faire partie des détails transmis au fournisseur d\'outils afin qu\'ils puissent configurer la connexion à leur fin.';
$string['comment'] = 'Commentaire';
$string['configpassword'] = 'Mot de passe distant par défaut';
$string['configpreferheight'] = 'Hauteur préférée par défaut';
$string['configpreferwidget'] = 'Définir le widget comme lancement par défaut';
$string['configpreferwidth'] = 'Largeur préférée par défaut';
$string['configresourceurl'] = 'URL de la ressource par défaut';
$string['configtoolurl'] = 'URL de l\'outil distant par défaut';
$string['configtypes'] = 'Activer les applications LTI';
$string['configured'] = 'Configuration';
$string['confirmtoolactivation'] = 'Voulez-vous vraiment activer cet outil ?';
$string['contentitem_deeplinking'] = 'Prise en charge des liens profonds (Message relatif au contenu)';
$string['contentitem_deeplinking_help'] = 'Si coché, l\'option \'Select content\' will be available when adding an external tool.';
$string['contentitem_multiple_description'] = 'Les éléments suivants seront ajoutés à votre cours:';
$string['contentitem_multiple_graded'] = 'Activité notée (grade maximale : {$a})';
$string['contentselected'] = 'Contenu sélectionné';
$string['courseactivitiesorresources'] = 'Activités ou ressources du cours';
$string['courseexternaltooladd'] = 'Ajouter un nouvel outil externe LTI';
$string['courseexternaltooladdsuccess'] = '{$a} ajouté.';
$string['courseexternaltooledit'] = 'Modifier {$a}';
$string['courseexternaltooleditsuccess'] = 'Changements enregistrés.';
$string['courseexternaltooliconalt'] = 'Icône pour {$a}';
$string['courseexternaltools'] = 'LTI Outils externes';
$string['courseexternaltoolsinfo'] = 'LTI Les outils externes sont des applications complémentaires que vous pouvez intégrer à votre cours, comme le contenu interactif ou les évaluations. Vos étudiants peuvent y accéder et les utiliser sans quitter votre cours.';
$string['courseexternaltoolsnoeditpermissions'] = 'Vous faites\'t have permission to edit this tool';
$string['courseexternaltoolsnoviewpermissions'] = 'Voir les outils externes du cours';
$string['courseid'] = 'Numéro d\'identification du cours';
$string['courseinformation'] = 'Informations sur le cours';
$string['courselink'] = 'Aller à la course';
$string['coursemisconf'] = 'Le cours est mal configuré';
$string['coursetooldeleted'] = '{$a} supprimé';
$string['createdon'] = 'Créé le';
$string['curllibrarymissing'] = 'Extension PHP cURL requise pour l\'outil externe.';
$string['custom'] = 'Paramètres personnalisés';
$string['custom_help'] = 'Custom parameters are settings used by the tool provider. For example, a custom parameter may be used to display
a specific resource from the provider.  Each parameter should be entered on a separate line using a format of "name=value"; for example, "chapter=3".

It is safe to leave this field unchanged unless directed by the tool provider.';
$string['custominstr'] = 'Paramètres personnalisés';
$string['debuglaunch'] = 'Option de débogage';
$string['debuglaunchoff'] = 'Lancement normal';
$string['debuglaunchon'] = 'Lancement de débogage';
$string['default'] = 'Par défaut';
$string['default_launch_container'] = 'Conteneur de lancement par défaut';
$string['default_launch_container_help'] = 'The launch container affects the display of the tool when launched from the course. Some launch containers provide more screen
real estate to the tool, and others provide a more integrated feel with the Moodle environment.

* **Default** - Use the launch container specified by the tool configuration.
* **Embed** - The tool is displayed within the existing Moodle window, in a manner similar to most other Activity types.
* **Embed, without blocks** - The tool is displayed within the existing Moodle window, with just the navigation controls
        at the top of the page.
* **New window** - The tool opens in a new window, occupying all the available space.
        Depending on the browser, it will open in a new tab or a popup window.
        It is possible that browsers will prevent the new window from opening.';
$string['delegate'] = 'Délégué à l\'enseignant';
$string['delegate_tool'] = 'Comme spécifié dans la définition de lien profond ou Délégué à l\'enseignant';
$string['delete'] = 'Supprimer';
$string['delete_confirmation'] = 'Voulez-vous vraiment supprimer cet outil préconfiguré ?';
$string['deletecoursetool'] = 'Supprimer {$a}';
$string['deletecoursetoolconfirm'] = 'Cela supprimera {$a} des outils LTI disponibles dans votre cours.';
$string['deletecoursetoolwithusageconfirm'] = '{$a} est actuellement utilisé dans au moins une activité dans votre cours. Si vous supprimez cet outil, les activités qui l\'utilisent ne fonctionneront plus.<br><br>Êtes-vous sûr de vouloir supprimer {$a}?';
$string['display_description'] = 'Afficher la description de l\'activité lorsque les élèves accèdent à l\'outil';
$string['display_description_help'] = 'Le contenu de cet outil est affiché dans une page du cours. Ce paramètre détermine si la description d\'activité est affichée dans cette page.';
$string['display_name'] = 'Afficher le nom de l\'activité lorsque les étudiants accèdent à l\'outil';
$string['display_name_help'] = 'Le contenu de cet outil est affiché dans une page du cours. Ce paramètre détermine si le nom de l\'activité est affiché dans cette page.';
$string['donot'] = 'Ne pas envoyer';
$string['donotaccept'] = 'Ne pas accepter';
$string['donotallow'] = 'Ne pas autoriser';
$string['dynreg_update_text'] = 'Il existe des outils liés à l\'enregistrement\'s domain. Do you want to update an already installed
external tool or create a new external tool?';
$string['dynreg_update_warn_dupdomain'] = 'Il n\'est pas recommandé d\'avoir plusieurs outils externes sous le même domaine.';
$string['dynreg_update_name'] = 'Nom de l\'outil';
$string['dynreg_update_url'] = 'URL de base';
$string['dynreg_update_version'] = 'Version LTI';
$string['dynreg_update_notools'] = 'Aucun outil en contexte.';
$string['dynreg_update_btn_update'] = 'Mise à jour';
$string['dynreg_update_btn_new'] = 'S\'inscrire comme nouvel outil externe';
$string['duplicateregurl'] = 'Cette URL d\'enregistrement est déjà utilisée';
$string['editdescription'] = 'Cliquez ici pour donner une description à cet outil';
$string['editmanualinstancedeprecationwarning'] = 'Configuration manuelle Les activités d\'outils externes ne sont plus soutenues. Don\'t worry, this activity will still work as it is, but you can\'t make changes to the tool configuration here anymore.
<br><br>
To make any changes to the tool, or to create new activities with it, the tool needs to be added to your course in Course > More > LTI External tools. Then, you will be able to create new activities, selecting the tool directly in the Activity chooser.
<br><br>
You can read more about adding LTI External tools in the documentation <a href="{$a}" target="_blanc">External tool</a>.';
$string['embed'] = 'Intégré';
$string['embed_no_blocks'] = 'Embed, sans blocs';
$string['enableemailnotification'] = 'Envoyer des courriels de notification';
$string['enableemailnotification_help'] = 'Si cela est possible, les étudiants recevront une notification par courriel lorsque leurs présentations d\'outils seront notées.';
$string['enterkeyandsecret'] = 'Entrez votre clé de consommation et secret partagé';
$string['enterkeyandsecret_help'] = 'Si vous avez reçu une clé de consommation et/ou un secret partagé, entrez-les ici';
$string['entitycourseexternaltools'] = 'LTI Outils externes';
$string['errorbadurl'] = 'URL n\'est pas une URL ou une cartouche d\'outil valide.';
$string['errorincorrectconsumerkey'] = 'La clé du consommateur est incorrecte.';
$string['errorinvaliddata'] = 'Données non valides : {$a}';
$string['errorinvalidmediatype'] = 'Type de média non valide : {$a}';
$string['errorinvalidresponseformat'] = 'Format de réponse du contenu non valide.';
$string['errormisconfig'] = 'Outil mal configuré. Demandez à votre administrateur Moodle de corriger la configuration de l\'outil.';
$string['errortooltypenotfound'] = 'Type d\'outil LTI introuvable.';
$string['existing_window'] = 'Fenêtre existante';
$string['extensions'] = 'Services de vulgarisation LTI';
$string['external_tool_type'] = 'Outil préconfiguré';
$string['external_tool_type_help'] = '* **Automatic, based on tool URL** - The best tool configuration is selected automatically. If the tool URL is not recognised, the tool configuration details may need to be entered manually.
* **A specific preconfigured tool** - The tool configuration for the specified tool will be used when communicating with the external tool provider. If the tool URL does not appear to belong to the tool provider, a warning will be shown. It is not always necessary to enter a tool URL.
* **Custom configuration** - A consumer key and shared secret may need to be entered manually. The consumer key and shared secret may be obtained from the tool provider. However, not all tools require a consumer key and shared secret, in which case the fields may be left blank.

### Preconfigured tool editing

Three icons are available after the preconfigured tool drop-down menu:

* **Add** - Create a course level tool configuration. All External tool instances in this course may use the tool configuration.
* **Edit** - Select a course level tool from the drop-down menu, then click this icon. The details of the tool configuration may be edited.
* **Delete** - Remove the selected course level tool.';
$string['external_tool_types'] = 'Outils préconfigurés';
$string['failedtoconnect'] = 'Moodle n\'a pas pu communiquer avec le système « {$a} »';
$string['failedtocreatetooltype'] = 'Impossible de créer un nouvel outil. Veuillez vérifier l\'URL et réessayer.';
$string['failedtodeletetoolproxy'] = 'Impossible de supprimer l\'enregistrement des outils. Vous devrez peut-être visiter "Gérer les enregistrements d\'outils externes" et le supprimer manuellement.';
$string['filter_basiclti_configlink'] = 'Configurez vos sites préférés et leurs mots de passe';
$string['filter_basiclti_password'] = 'Le mot de passe est obligatoire';
$string['filterconfig'] = 'Administration de LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utiliser une configuration existante pour l\'instance mal configurée';
$string['fixnew'] = 'Nouvelle configuration';
$string['fixnewconf'] = 'Définir une nouvelle configuration pour l\'instance mal configurée';
$string['fixold'] = 'Utiliser';
$string['force_ssl'] = 'Forcer SSL';
$string['force_ssl_help'] = 'Selecting this option forces all launches to this tool provider to use SSL.

In addition, all web service requests from the tool provider will use SSL.

If using this option, confirm that this Moodle site and the tool provider support SSL.';
$string['generaltool'] = 'Outil général';
$string['grading'] = 'Acheminement des classes';
$string['icon_url'] = 'URL de l\'icône';
$string['icon_url_help'] = 'The icon URL allows the icon that shows up in the course listing for this activity to be modified. Instead of using the default
LTI icon, an icon which conveys the type of activity may be specified.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'étudiant dans une activité de LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitive';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités de l\'ITL pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Voir, Soumettre, Voir les commentaires)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité de LTI.';
$string['indicator:socialbreadthdef'] = 'LTI social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités de l\'ITL pendant cette période d\'analyse (Nivaux = aucune participation, Participant seul, Participant avec d\'autres)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['initiatelogin'] = 'Lancer l\'URL de connexion';
$string['initiatelogin_help'] = 'L\'URL de l\'outil auquel les demandes de connexion doivent être envoyées. Cette URL est requise avant qu\'un message puisse être envoyé avec succès à l\'outil.';
$string['invalidid'] = 'LTI ID était incorrect';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Type de clé publique';
$string['keytype_help'] = 'La méthode d\'authentification utilisée pour valider l\'outil.';
$string['keytype_keyset'] = 'URL du jeu de clés';
$string['keytype_rsa'] = 'Clé RSA';
$string['launch_in_moodle'] = 'Outil de lancement dans Moodle';
$string['launch_in_popup'] = 'Outil de lancement dans un pop-up';
$string['launch_url'] = 'URL de l\'outil';
$string['launch_url_help'] = 'The tool URL indicates the web address of the External Tool, and may contain additional information, such as the resource to show.
If you are unsure what to enter for the tool URL, please check with the tool provider for more information.

You can enter a cartridge URL if you have one, and the rest of the form details will fill automatically.

If you have selected a preconfigured tool, you may not need to enter a tool URL. If the tool link is used to just launch
into the tool provider\'s system, and not go to a specific resource, this will likely be the case.';
$string['launchinpopup'] = 'Conteneur de lancement';
$string['launchinpopup_help'] = 'The launch container affects the display of the tool when launched from the course. Some launch containers provide more screen
real estate to the tool, and others provide a more integrated feel with the Moodle environment.

* **Default** - Use the launch container specified by the tool configuration.
* **Embed** - The tool is displayed within the existing Moodle window, in a manner similar to most other Activity types.
* **Embed, without blocks** - The tool is displayed within the existing Moodle window, with just the navigation controls
        at the top of the page.
* **New window** - The tool opens in a new window, occupying all the available space.
        Depending on the browser, it will open in a new tab or a popup window.
        It is possible that browsers will prevent the new window from opening.';
$string['launchoptions'] = 'Options de lancement';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Ajouter des configurations d\'outils spécifiques aux cours';
$string['lti:addmanualinstanceprohibitederror'] = 'La création manuelle d\'outils sans définition d\'outil de cours n\'est plus prise en charge. Veuillez d\'abord créer un outil de cours, puis l\'utiliser pour créer des instances d\'activité.';
$string['lti:addinstance'] = 'Ajouter un nouvel outil externe';
$string['lti:addpreconfiguredinstance'] = 'Ajouter un outil préconfiguré';
$string['lti:grade'] = 'Affichage des notes retournées par l\'outil externe';
$string['lti:manage'] = 'Soyez un instructeur lorsque l\'outil est lancé';
$string['lti:admin'] = 'Soyez administrateur lorsque l\'outil est lancé';
$string['lti:requesttooladd'] = 'Demander un outil est configuré à l\'échelle du site';
$string['lti:view'] = 'Lancer des activités d\'outils externes';
$string['ltisettings'] = 'Paramètres LTI';
$string['lti_administration'] = 'Éditer l\'outil préconfiguré';
$string['lti_errormsg'] = 'L\'outil a retourné le message d\'erreur suivant : « {$a} »';
$string['lti_launch_error'] = 'Une erreur s\'est produite lors du lancement de l\'outil externe:';
$string['lti_launch_error_tool_request'] = '<p>
To submit a request for an administrator to complete the tool configuration, click <a href="[$a->admin_request_url]" target="_en haut">here</a>.
</p>';
$string['lti_launch_error_unsigned_help'] = '<p>This error may be a result of a missing consumer key and shared secret for the tool provider.</p>
<p>If you have a consumer key and shared secret, you may enter it when editing the external tool instance (make sure advanced options are visible).</p>
<p>Alternatively, you may <a href="{$a->course_tool_editor}">create a course level tool provider configuration</a>.</p>';
$string['lti_tool_request_added'] = 'Demande de configuration de l\'outil soumise avec succès. Vous devrez peut-être contacter un administrateur pour compléter la configuration de l\'outil.';
$string['lti_tool_request_existing'] = 'Une configuration d\'outil pour le domaine d\'outil a déjà été soumise.';
$string['ltiunknownserviceapicall'] = 'LTI service inconnu API appel.';
$string['ltiversion'] = 'Version LTI';
$string['ltiversion_help'] = 'La version de LTI utilisée pour signer des messages et des demandes de service : LTI 1.0/1.1 et LTI 2.0 utilisent le profil de sécurité OAuth 1.0A; LTI 1.3.0 utilise des JWT.';
$string['main_admin'] = 'Aide générale';
$string['main_admin_help'] = 'Des outils externes permettent aux utilisateurs de Moodle d\'interagir avec les ressources d\'apprentissage hébergées à distance. Grâce à un protocole de lancement spécial, l\'outil distant a accès à des informations générales sur l\'utilisateur de lancement. Par exemple, le nom de l\'institution, l\'ID du cours, l\'ID de l\'utilisateur et d\'autres informations telles que l\'utilisateur\'s name or email address.

Tools listed on this page are separated into three categories:

* **Active** - These tool providers have been approved and configured by an administrator. They can be used from within any course on this site. If a consumer key and shared secret are entered, a trust relationship is established between this site and the remote tool, providing a secure communication channel.
* **Pending** - These tool providers came in through a package import, but have not been configured by an administrator. Teachers may still use tools from these providers if they have a consumer key and shared secret, or if none is required.
* **Rejected** - These tools providers are flagged as ones which an administrator has no intention of making available on the site. Teachers may still use tools from these providers if they have a consumer key and shared secret, or if none is required.';
$string['manage_external_tools'] = 'Gérer les outils';
$string['manage_tools'] = 'Gérer les outils préconfigurés';
$string['manage_tool_proxies'] = 'Gérer les enregistrements d\'outils externes';
$string['manuallyaddtype'] = 'Vous pouvez aussi <a href="{$a}">configurer un outil manuellement</a>.';
$string['miscellaneous'] = 'Divers';
$string['misconfiguredtools'] = 'Des instances d\'outils mal configurées ont été détectées';
$string['missingparameterserror'] = 'La page est mal configurée : "{$a}"';
$string['module_class_type'] = 'Type de module Moodle';
$string['modulename'] = 'Outil externe';
$string['modulename_help'] = 'The external tool activity module enables students to interact with learning resources and activities on other web sites. For example, an external tool could provide access to a new activity type or learning materials from a publisher.

To create an external tool activity, a tool provider which supports LTI (Learning Tools Interoperability) is required. A teacher can create an external tool activity or make use of a tool configured by the site administrator.

External tool activities differ from URL resources in a few ways:

* External tools are context aware i.e. they have access to information about the user who launched the tool, such as institution, course and name
* External tools support reading, updating, and deleting grades associated with the activity instance
* External tool configurations create a trust relationship between your site and the tool provider, allowing secure communication between them';
$string['modulename_link'] = 'mod/lti/vue';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Outils externes';
$string['modulenamepluralformatted'] = 'Outils externes';
$string['name'] = 'Nom';
$string['never'] = 'Jamais';
$string['new_window'] = 'Nouvelle fenêtre';
$string['no_lti_configured'] = 'Il n\'y a aucun outil externe actif configuré.';
$string['no_lti_pending'] = 'Il n\'y a pas d\'outils externes en attente.';
$string['no_lti_rejected'] = 'Il n\'y a pas d\'outils externes rejetés.';
$string['no_lti_tools'] = 'Il n\'y a aucun outil externe configuré.';
$string['no_tp_accepted'] = 'Il n\'y a pas d\'enregistrement externe accepté.';
$string['no_tp_cancelled'] = 'Il n\'y a pas d\'enregistrement externe annulé.';
$string['no_tp_configured'] = 'Il n\'y a pas d\'enregistrement d\'outils externes non enregistrés configurés.';
$string['no_tp_pending'] = 'Il n\'y a pas d\'enregistrement externe en instance.';
$string['no_tp_rejected'] = 'Il n\'y a pas d\'enregistrement externe rejeté.';
$string['noattempts'] = 'Aucune tentative n\'a été faite sur cette instance d\'outil';
$string['nocourseexternaltoolsnotice'] = 'Il n\'y a pas de LTI Des outils externes.';
$string['noltis'] = 'Il n\'y a pas d\'instances d\'outils externes';
$string['noprofileservice'] = 'Profil service non trouvé';
$string['noservers'] = 'Aucun serveur trouvé';
$string['notypes'] = 'Il n\'y a actuellement aucun outil LTI installé dans Moodle. Cliquez sur le lien Installer ci-dessus pour en ajouter.';
$string['noviewusers'] = 'Aucun utilisateur n\'a été trouvé avec les permissions d\'utiliser cet outil';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['optionalsettings'] = 'Paramètres optionnels';
$string['organization'] = 'Renseignements sur l\'organisation';
$string['organizationdescr'] = 'Description de l\'organisation';
$string['organizationid_default'] = 'ID de l\'organisation par défaut';
$string['siteid'] = 'ID du site';
$string['sitehost'] = 'Nom de l\'hôte';
$string['organizationid_default_help'] = 'La valeur par défaut à utiliser pour l\'ID Organisation. ID du site identifie cette installation de Moodle.';
$string['organizationidguid'] = 'Organisation ID';
$string['organizationidguid_help'] = 'A unique identifier for this Moodle instance passed to the tool as the Platform Instance GUID.

If this field is left blank, the default value will be used.';
$string['organizationurl'] = 'URL de l\'organisation';
$string['organizationurl_help'] = 'The base URL of this Moodle instance.

If this field is left blank, a default value will be used based on the site configuration.';
$string['pagesize'] = 'Présentations indiquées par page';
$string['parameter'] = 'Paramètres de l\'outil';
$string['parameter_help'] = 'Les paramètres de l\'outil sont des paramètres qui doivent être passés par le fournisseur d\'outil dans le proxy de l\'outil accepté.';
$string['password'] = 'Secret partagé';
$string['password_admin'] = 'Secret partagé';
$string['password_admin_help'] = 'The shared secret can be thought of as a password used to authenticate access to the tool. It should be provided
along with the consumer key from the tool provider.

Tools which do not require secure communication from Moodle and do not provide additional services (such as grade reporting)
may not require a shared secret.';
$string['password_help'] = 'For pre-configured tools, it is not necessary to enter a shared secret here, as the shared secret will be
provided as part of the configuration process.

This field should be entered if creating a link to a tool provider which is not already configured.
If the tool provider is to be used more than once in this course, adding a course tool configuration is a good idea.

The shared secret can be thought of as a password used to authenticate access to the tool. It should be provided
along with the consumer key from the tool provider.

Tools which do not require secure communication from Moodle and do not provide additional services (such as grade reporting)
may not require a shared secret.';
$string['pending'] = 'En attente';
$string['pluginadministration'] = 'Administration des outils externes';
$string['pluginname'] = 'Outil externe';
$string['preferheight'] = 'Hauteur préférée';
$string['preferwidget'] = 'Préférez le lancement du widget';
$string['preferwidth'] = 'Largeur préférée';
$string['press_to_submit'] = 'Pressez pour lancer cette activité';
$string['privacy'] = 'Vie privée';
$string['privacy:metadata:courseid'] = 'L\'ID du cours l\'utilisateur accède au LTI Consumer depuis';
$string['privacy:metadata:courseidnumber'] = 'Le numéro d\'identification du cours auquel l\'utilisateur accède depuis';
$string['privacy:metadata:coursefullname'] = 'Le nom complet du cours que l\'utilisateur accède au LTI Consumer';
$string['privacy:metadata:courseshortname'] = 'Le nom abrégé du cours auquel l\'utilisateur accède depuis';
$string['privacy:metadata:createdby'] = 'L\'utilisateur qui a créé l\'enregistrement';
$string['privacy:metadata:email'] = 'L\'adresse électronique de l\'utilisateur accédant au LTI Consumer';
$string['privacy:metadata:externalpurpose'] = 'Le consommateur de l\'ITL fournit des renseignements aux utilisateurs et leur contexte au fournisseur d\'outils de l\'ITL.';
$string['privacy:metadata:firstname'] = 'Le prénom de l\'utilisateur accédant au LTI Consumer';
$string['privacy:metadata:fullname'] = 'Le nom complet de l\'utilisateur accédant au LTI Consumer';
$string['privacy:metadata:lastname'] = 'Nom de famille de l\'utilisateur accédant au LTI Consumer';
$string['privacy:metadata:lti_submission'] = 'Présentation de l\'ITL';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'L\'horodatage indiquant le moment où la demande a été présentée';
$string['privacy:metadata:lti_submission:dateupdated'] = 'L\'horodatage indiquant quand la présentation a été modifiée';
$string['privacy:metadata:lti_submission:gradepercent'] = 'La note pour l\'utilisateur en pourcentage';
$string['privacy:metadata:lti_submission:originalgrade'] = 'La qualité originale pour l\'utilisateur';
$string['privacy:metadata:lti_submission:userid'] = 'L\'ID de l\'utilisateur qui a soumis pour l\'activité LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxies LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nom du mandataire LTI';
$string['privacy:metadata:lti_types'] = 'Types LTI';
$string['privacy:metadata:lti_types:name'] = 'Nom de type LTI';
$string['privacy:metadata:role'] = 'Le rôle de l\'utilisateur dans l\'accès au LTI Consumer';
$string['privacy:metadata:timecreated'] = 'Le moment où le disque a été créé';
$string['privacy:metadata:timemodified'] = 'Le moment où le dossier a été modifié';
$string['privacy:metadata:userid'] = 'L\'ID de l\'utilisateur accédant au LTI Consumer';
$string['privacy:metadata:useridnumber'] = 'Le numéro d\'identification de l\'utilisateur qui accède au LTI Consumer';
$string['privacy:metadata:username'] = 'Nom d\'utilisateur de l\'utilisateur accédant au LTI Consumer';
$string['publickey'] = 'Clé publique';
$string['publickeyset'] = 'Clavier public';
$string['publickeyset_help'] = 'Clavier public d\'où ce site va récupérer l\'outil\'s public key to allow signatures of incoming messages and service requests to be verified.';
$string['publickey_help'] = 'La clé publique (en format PEM) fournie par l\'outil pour permettre la vérification des signatures des messages entrants et des demandes de service.';
$string['quickgrade'] = 'Permettre un classement rapide';
$string['quickgrade_help'] = 'Si activé, plusieurs outils peuvent être classés sur une seule page. Ajouter des notes et des commentaires puis cliquez sur le bouton "Enregistrer tous mes commentaires" pour enregistrer tous les changements pour cette page.';
$string['redirect'] = 'Vous serez redirigé dans quelques secondes. Sinon, appuyez sur le bouton.';
$string['redirectionuris'] = 'Rédirection URI(s)';
$string['redirectionuris_help'] = 'Une liste des URI (une par ligne) que l\'outil utilise lors de la présentation des demandes d\'autorisation. Au moins un doit être enregistré avant qu\'un message puisse être envoyé avec succès à l\'outil.';
$string['register'] = 'Registre';
$string['register_warning'] = 'La page d\'inscription semble prendre du temps à ouvrir. S\'il n\'apparaît pas, vérifiez que vous avez entré l\'URL correcte dans les paramètres de configuration. Si Moodle utilise https, assurez-vous que l\'outil que vous configurez supporte https et que vous utilisez https dans l\'URL.';
$string['registertype'] = 'Configurer un nouvel enregistrement externe';
$string['registration_options'] = 'Options d\'inscription';
$string['registrationname'] = 'Nom du fournisseur de l\'outil';
$string['registrationname_help'] = 'Entrez le nom du fournisseur d\'outils enregistré.';
$string['registrationurl'] = 'URL d\'enregistrement';
$string['registrationurl_help'] = 'L\'URL d\'enregistrement devrait être disponible auprès du fournisseur d\'outils en tant que lieu où les demandes d\'enregistrement devraient être envoyées.';
$string['reject'] = 'Rejet';
$string['rejected'] = 'Rejeté';
$string['resource'] = 'Ressources';
$string['resourcekey'] = 'Clé du consommateur';
$string['resourcekey_admin'] = 'Clé du consommateur';
$string['resourcekey_admin_help'] = 'The consumer key can be thought of as a username used to authenticate access to the tool.
It can be used by the tool provider to uniquely identify the Moodle site from which users launch into the tool.

The consumer key must be provided by the tool provider. The method of obtaining a consumer key varies between
tool providers. It may be an automated process, or it may require a dialogue with the tool provider.

Tools which do not require secure communication from Moodle and do not provide additional services (such as grade reporting)
may not require a resource key.';
$string['resourcekey_help'] = 'For pre-configured tools, it is not necessary to enter a resource key here, as the consumer key will be
provided as part of the configuration process.

This field should be entered if creating a link to a tool provider which is not already configured.
If the tool provider is to be used more than once in this course, adding a course tool configuration is a good idea.

The consumer key can be thought of as a username used to authenticate access to the tool.
It can be used by the tool provider to uniquely identify the Moodle site from which users launch into the tool.

The consumer key must be provided by the tool provider. The method of obtaining a consumer key varies between
tool providers. It may be an automated process, or it may require a dialogue with the tool provider.

Tools which do not require secure communication from Moodle and do not provide additional services (such as grade reporting)
may not require a resource key.';
$string['resourceurl'] = 'URL de la ressource';
$string['restricttocategory'] = 'Limite à la catégorie';
$string['restricttocategory_help'] = 'Pour limiter l\'utilisation de cet outil aux cours dans une catégorie, sélectionnez la ou les catégories dans la liste.';
$string['return_to_course'] = 'Cliquez sur <a href="{$a->link}"cible="top">ici</a> pour revenir au cours.';
$string['saveallfeedback'] = 'Enregistrer tous mes commentaires';
$string['search:activity'] = 'Outil externe - information sur les activités';
$string['secure_icon_url'] = 'URL de l\'icône sécurisée';
$string['secure_icon_url_help'] = 'Similaire à l\'URL de l\'icône, mais utilisé lorsque le site est accessible en toute sécurité via SSL. Ce champ vise à empêcher le navigateur d\'afficher un avertissement concernant une image non sécurisée.';
$string['secure_launch_url'] = 'URL de l\'outil sécurisé';
$string['secure_launch_url_help'] = 'Similar to the tool URL, but used instead of the tool URL if high security is required. Moodle will use the secure tool URL instead of the tool URL if the Moodle site is accessed through SSL, or if the tool configuration is set to always launch through SSL.

The tool URL may also be set to an https address to force launching through SSL, and this field may be left blank.';
$string['selectcontent'] = 'Sélectionner le contenu';
$string['send'] = 'Envoyer';
$string['services'] = 'Services';
$string['services_help'] = 'Sélectionnez les services que vous souhaitez offrir au fournisseur d\'outils. Plus d\'un service peut être sélectionné.';
$string['setupoptions'] = 'Options de configuration';
$string['share_email'] = 'Partager le lanceur\'s email with the tool';
$string['share_email_admin'] = 'Partager le lanceur\'s email with tool';
$string['share_email_admin_help'] = 'Specify whether the e-mail address of the user launching the tool will be shared with the tool provider.
The tool provider may need launcher\'s e-mail addresses to distinguish users with the same name in the UI, or send e-mails
to users based on actions within the tool.';
$string['share_email_help'] = 'Specify whether the e-mail address of the user launching the tool will be shared with the tool provider.

The tool provider may need launcher\'s email addresses to distinguish users with the same name, or send emails to users based on actions within the tool.

Note that this setting may be overridden in the tool configuration.';
$string['share_name'] = 'Partager le lanceur\'s name with the tool';
$string['share_name_admin'] = 'Partager le lanceur\'s name with tool';
$string['share_name_admin_help'] = 'Specify whether the full name of the user launching the tool should be shared with the tool provider.
The tool provider may need launchers\' names to show meaningful information within the tool.';
$string['share_name_help'] = 'Specify whether the full name of the user launching the tool should be shared with the tool provider.

The tool provider may need launchers\' names to show meaningful information within the tool.

Note that this setting may be overridden in the tool configuration.';
$string['share_roster'] = 'Permettre à l\'outil d\'accéder à ce cours\'s roster';
$string['share_roster_admin'] = 'Outil peut accéder au fichier de cours';
$string['share_roster_admin_help'] = 'Préciser si l\'outil peut accéder à la liste des utilisateurs inscrits aux cours à partir desquels cet outil est lancé.';
$string['share_roster_help'] = 'Specify whether the tool can access the list of users enrolled in this course.

Note that this setting may be overridden in the tool configuration.';
$string['show_in_course_activity_chooser'] = 'Afficher dans le sélecteur d\'activité et comme un outil préconfiguré';
$string['showinactivitychooser'] = 'Afficher dans le choix d\'activité';
$string['dontshowinactivitychooser'] = 'Don\'t show in activity chooser';
$string['show_in_course_lti1'] = 'Utilisation de la configuration de l\'outil';
$string['show_in_course_lti1_help'] = 'Cet outil peut être affiché dans le choix d\'activité pour un enseignant à choisir pour ajouter à un cours. Sinon, il peut être affiché dans le menu déroulant de l\'outil préconfiguré lors de l\'ajout d\'un outil externe à un cours. Une autre option est que la configuration de l\'outil ne soit utilisée que si l\'URL exacte de l\'outil est saisie lors de l\'ajout d\'un outil externe à un cours.';
$string['show_in_course_lti2'] = 'Utilisation de la configuration de l\'outil';
$string['show_in_course_lti2_help'] = 'Cet outil peut être affiché dans le sélecteur d\'activité pour qu\'un enseignant puisse choisir d\'ajouter à un cours ou dans le menu déroulant de l\'outil préconfiguré lors de l\'ajout d\'un outil externe à un cours.';
$string['show_in_course_no'] = 'Ne pas afficher; n\'utiliser que lorsqu\'une URL de l\'outil correspondant est saisie';
$string['show_in_course_preconfigured'] = 'Afficher comme outil préconfiguré lors de l\'ajout d\'un outil externe';
$string['size'] = 'Paramètres de taille';
$string['opensslconfiginvalid'] = 'LTI 1.3 exige qu\'un openssl.cnf valide soit configuré et disponible sur votre serveur web. Veuillez contacter l\'administrateur du site pour configurer et activer openssl pour ce site.';
$string['submission'] = 'Présentation';
$string['submissions'] = 'Présentations';
$string['submissionsfor'] = 'Présentations pour {$a}';
$string['successfullycreatedtooltype'] = 'Un nouvel outil créé avec succès!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Configuration de l\'outil récupérée avec succès à partir du contenu sélectionné.';
$string['subplugintype_ltiresource'] = 'Ressources de service LTI';
$string['subplugintype_ltiresource_plural'] = 'Ressources des services de l\'ITL';
$string['subplugintype_ltiservice'] = 'Service LTI';
$string['subplugintype_ltiservice_plural'] = 'Services LTI';
$string['subplugintype_ltisource'] = 'Source LTI';
$string['subplugintype_ltisource_plural'] = 'Sources LTI';
$string['toggle_debug_data'] = 'Basculer les données de débogage';
$string['tool_settings'] = 'Paramètres des outils';
$string['tooldescription'] = 'Description de l\'outil';
$string['tooldescription_help'] = 'The description of the tool that will be displayed to teachers in the activity list.

This should describe what the tool is for and what it does and any additional information the teacher may need to know.';
$string['tooldetailsaccesstokenurl'] = 'Accès à l\'URL token';
$string['tooldetailsauthrequesturl'] = 'URL de la requête d\'authentification';
$string['tooldetailsclientid'] = 'ID client';
$string['tooldetailsdeploymentid'] = 'ID de déploiement';
$string['tooldetailsmailtosubject'] = 'Configuration de l\'outil LTI';
$string['tooldetailsmodalemail'] = 'Courriel';
$string['tooldetailsmodallink'] = 'Afficher les détails de configuration';
$string['tooldetailsmodaltitle'] = 'Détails de configuration de l\'outil';
$string['tooldetailsplatformid'] = 'ID de la plate-forme';
$string['tooldetailspublickeyseturl'] = 'URL du jeu de clés public';
$string['toolisbeingused'] = 'Cet outil est utilisé {$a} fois';
$string['toolisnotbeingused'] = 'Cet outil n\'a pas encore été utilisé';
$string['toolproxy'] = 'Enregistrements d\'outils externes';
$string['toolproxy_help'] = 'External tool registrations allow Moodle site administrators to configure external tools from a tool proxy obtained from a tool provider supporting LTI 2.0. A registration URL provided by the tool provider is all that is required to initiate the process. The capabilities and services offered to the tool provider are selected when configuring a new registration.

Tool registrations listed on this page are separated into four categories:

* **Configured** - These tool registrations have been set up but the registration process has not yet been started.
* **Pending** - The registration process for these tool registrations has been started but has not completed. Open and save the settings to move it
back to the \'Configured\' category.
* **Accepted** - These tool registrations have been approved; the resources specified in the tool proxy will appear on the preconfigured tools page
with an initial status of \'Pending\'.
* **Rejected** - These tool registrations are ones which were rejected during the registration process. Open and save the settings to move it
back to the \'Configured\' category so the registration process can be restarted.';
$string['toolproxyregistration'] = 'Enregistrement externe des outils';
$string['toolregistration'] = 'Enregistrement externe des outils';
$string['toolsetup'] = 'Configuration de l\'outil externe';
$string['tooltypenotfounderror'] = "L'outil LTI utilisé dans cette activité a été supprimé. Si vous avez besoin d'aide, contactez votre enseignant ou administrateur du site.";
$string['tooltypes'] = 'Outils';
$string['toolurl'] = 'URL de l\'outil';
$string['toolurlplaceholder'] = 'URL de l\'outil...';
$string['toolurl_help'] = 'The tool URL is used to match tool URLs to the correct tool configuration. Prefixing the URL with http(s) is optional.

Additionally, the base URL is used as the tool URL if a tool URL is not specified in the external tool instance.

For example, a base URL of *tool.com* would match the following:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

A base URL of *www.tool.com/quizzes* would match the following:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

A base URL of *quiz.tool.com* would match the following:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

If two different tool configurations are for the same domain, the most specific match will be used.

You can also insert a cartridge URL if you have one and the details for the tool will be automatically filled.';
$string['toolurl_contentitemselectionrequest'] = 'URL de sélection du contenu';
$string['toolurl_contentitemselectionrequest_help'] = 'L\'URL de sélection de contenu sera utilisée pour lancer la page de sélection de contenu du fournisseur d\'outils. Si elle est vide, l\'URL de l\'outil sera utilisée';
$string['typename'] = 'Nom de l\'outil';
$string['typename_help'] = 'Le nom de l\'outil est utilisé pour identifier le fournisseur de l\'outil dans Moodle. Le nom entré sera visible pour les enseignants lors de l\'ajout d\'outils externes dans les cours.';
$string['types'] = 'Types';
$string['unabletocreatetooltype'] = 'Impossible de créer l\'outil';
$string['unabletofindtooltype'] = 'Impossible de trouver l\'outil pour {$a->id}';
$string['unknownstate'] = 'État inconnu';
$string['update'] = 'Mise à jour';
$string['usage'] = 'Nombre d \' utilisations';
$string['useraccountinformation'] = 'Informations sur le compte utilisateur';
$string['userpersonalinformation'] = 'Informations personnelles de l\'utilisateur';
$string['validurl'] = 'Une URL valide doit commencer par http(s)://';
$string['viewsubmissions'] = 'Afficher les soumissions et l\'écran de classement';

// Deprecated since Moodle 4.3.
$string['lti:addmanualinstance'] = 'Ajouter un outil configuré manuellement';
$string['edittype'] = 'Éditer l\'outil préconfiguré';
$string['deletetype'] = 'Supprimer l\'outil préconfiguré';
$string['cannot_delete'] = 'Vous ne pouvez pas supprimer cette configuration d\'outil.';
$string['cannot_edit'] = 'Vous ne pouvez pas modifier cette configuration d\'outil.';
$string['global_tool_types'] = 'Outils préconfigurés';
$string['course_tool_types'] = 'Outils de cours';
$string['using_tool_cartridge'] = 'Utilisation de la cartouche d\'outil';
$string['using_tool_configuration'] = 'Utilisation de la configuration de l\'outil :';
$string['domain_mismatch'] = 'URL de l\'outil\'s domain does not match tool configuration.';
$string['custom_config'] = 'Utilisation de la configuration personnalisée de l\'outil.';
$string['tool_config_not_found'] = 'Configuration de l\'outil non trouvée pour cette URL.';
$string['tooltypeadded'] = 'Outil préconfiguré ajouté';
$string['tooltypedeleted'] = 'Outil préconfiguré supprimé';
$string['tooltypenotdeleted'] = 'Impossible de supprimer l\'outil préconfiguré';
$string['tooltypeupdated'] = 'Outil préconfiguré mis à jour';
$string['forced_help'] = 'Ce réglage a été forcé dans une configuration d\'outil de niveau de cours ou de site. Vous ne pouvez pas le modifier de cette interface.';

// Deprecated since Moodle 4.5.
$string['selectcontentvalidationerror'] = 'Vous devez sélectionner le contenu de cette activité.';
