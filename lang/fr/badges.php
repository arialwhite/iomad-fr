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
 * Language file for 'badges' component
 *
 * @package    core_badges
 * @subpackage badges
 * @copyright  2012 onwards Totara Learning Solutions Ltd {@link http://www.totaralms.com/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Yuliya Bozhko <yuliya.bozhko@totaralms.com>
 */

$string['actions'] = 'Actions';
$string['activate'] = 'Activer l\'accès';
$string['activatesuccess'] = 'Accès au badge \'{$a}\' enabled.';
$string['addalignment'] = 'Ajouter des compétences ou des normes externes';
$string['addbadge'] = 'Ajouter des badges';
$string['addbadge_help'] = 'Sélectionnez tous les badges qui doivent être ajoutés à cette exigence de badge. Maintenez la touche CTRL pour sélectionner plusieurs éléments.';
$string['addcompetency'] = 'Ajouter une compétence';
$string['addcompetency_help'] = 'Sélectionnez toutes les compétences qui devraient être ajoutées à cette exigence de badge. Maintenez la touche CTRL pour sélectionner plusieurs éléments.';
$string['addbadgecriteria'] = 'Ajouter des critères de badge';
$string['addcriteria'] = 'Ajouter des critères';
$string['addcriteriatext'] = 'Pour commencer à ajouter des critères, veuillez sélectionner une des options dans le menu déroulant.';
$string['addcohort'] = 'Ajouter une cohorte';
$string['addcohort_help'] = 'Sélectionnez toutes les cohortes qui devraient être ajoutées à cette exigence de badge. Maintenez la touche CTRL pour sélectionner plusieurs éléments.';
$string['addcourse'] = 'Ajouter des cours';
$string['addcourse_help'] = 'Sélectionnez tous les cours qui devraient être ajoutés à cette exigence de badge. Maintenez la touche CTRL pour sélectionner plusieurs éléments.';
$string['addrelated'] = 'Ajouter un badge connexe';
$string['addtobackpack'] = 'Ajouter au sac à dos';
$string['addedtobackpack'] = 'Insigne ajouté au sac à dos';
$string['adminonly'] = 'Cette page est réservée aux administrateurs de site seulement.';
$string['after'] = 'après la date de délivrance.';
$string['aggregationmethod'] = 'Méthode d\'agrégation';
$string['alignment'] = 'Alignement';
$string['all'] = 'All';
$string['allmethod'] = 'Toutes les conditions sélectionnées sont remplies';
$string['allmethodactivity'] = 'Toutes les activités sélectionnées sont terminées';
$string['allmethodbadges'] = 'Tous les badges sélectionnés ont été obtenus';
$string['allmethodcohort'] = 'Participation à toutes les cohortes sélectionnées';
$string['allmethodcompetencies'] = 'Toutes les compétences sélectionnées ont été accomplies';
$string['allmethodcourseset'] = 'Tous les cours sélectionnés sont terminés';
$string['allmethodmanual'] = 'Tous les rôles sélectionnés attribuent l\'insigne';
$string['allmethodprofile'] = 'Tous les champs de profil sélectionnés ont été complétés';
$string['allowcoursebadges'] = 'Activer les badges de cours';
$string['allowcoursebadges_desc'] = 'Permettre la création et l\'attribution de badges dans le contexte du cours.';
$string['allowexternalbackpack'] = 'Connexion externe à sac à dos';
$string['allowexternalbackpack_desc'] = 'Si activé, les utilisateurs peuvent se connecter à un sac à dos externe et partager leurs badges à partir de ce site. Les utilisateurs peuvent également choisir d\'afficher toutes les collections publiques de badges de leur sac à dos externe sur leur page de profil sur ce site. Il est recommandé de laisser cette option désactivée si votre site n\'est pas accessible depuis Internet.';
$string['any'] = 'Any';
$string['anymethod'] = 'Toutes les conditions sélectionnées sont remplies';
$string['anymethodactivity'] = 'Toutes les activités sélectionnées sont terminées';
$string['anymethodbadges'] = 'Tous les badges sélectionnés ont été obtenus';
$string['anymethodcohort'] = 'Adhésion à l\'une des cohortes sélectionnées';
$string['anymethodcompetencies'] = 'Toutes les compétences sélectionnées ont été accomplies';
$string['anymethodcourseset'] = 'Tous les cours sélectionnés sont terminés';
$string['anymethodmanual'] = 'L\'un des rôles sélectionnés décerne le badge';
$string['anymethodprofile'] = 'Tous les champs de profil sélectionnés ont été complétés';
$string['apiversion'] = 'Version API prise en charge';
$string['archivebadge'] = 'Voulez-vous supprimer badge \'{$a}\', but keep existing issued badges?';
$string['archiveconfirm'] = 'Supprimer et conserver les badges existants';
$string['archivehelp'] = '<p>This option means that the badge will be marked as "retired" and will no longer appear in the list of badges. Users will no longer be able to earn this badge, however existing badge recipients will still be able to display this badge on their profile page and push it to their external backpacks.</p>
<p>If you would like your users to retain access to the earned badges it is important to select this option instead of fully deleting badges.</p>';
$string['attachment'] = 'Joindre le badge au message';
$string['attachment_help'] = 'Si activé, un badge délivré sera attaché au destinataire\'s email for download. (Attachments must be enabled in Site administration / Server / Email / Outgoing mail configuration to use this option.)';
$string['award'] = 'Insigne';
$string['awardedto'] = 'Délivré à {$a}';
$string['awardedtoyou'] = 'Émis';
$string['awardoncron'] = 'Un grand nombre d\'utilisateurs reçoivent le badge \'{$a->badgename}\'. It may take some time for all users to receive it.';
$string['awards'] = 'Bénéficiaires';
$string['backpackavailability'] = 'Vérification externe du badge';
$string['backpackconnectionok'] = 'Connexion Backpack établie avec succès';
$string['backpackconnectionnottested'] = 'La connexion ne peut pas être testée pour ce sac à dos car seuls les sacs à dos Open Badges v2.0 le supportent.';
$string['backpackavailability_help'] = 'For badge recipients to be able to prove they earned their badges from you, an external backpack service should be able to access your site and verify badges issued from it. Your site does not currently appear to be accessible, which means that badges you have already issued or will issue in the future cannot be verified.

**Why am I seeing this message?**

It may be that your firewall prevents access from users outside your network, your site is password protected, or you are running the site on a computer that is not available from the Internet (such as a local development machine).

**Is this a problem?**

You should fix this issue on any production site where you are planning to issue badges, otherwise the recipients will not be able to prove they earned their badges from you. If your site is not yet live you can create and issue test badges, as long as the site is accessible before you go live.

**What if I can\'t make my whole site publicly accessible?**

The only URL required for verification is [your-site-url]/badges/assertion.php so if you are able to modify your firewall to allow external access to that file, badge verification will still work.';
$string['backpackbadgessummary'] = 'Vous avez {$a->totalbadges} badge(s) affiché(s) de {$a->totalcollections} collection(s).';
$string['backpackbadgessettings'] = 'Modifier les paramètres du sac à dos';
$string['backpackcannotsendverification'] = 'Impossible d\'envoyer un email de vérification';
$string['backpackconnected'] = 'Le sac à dos est connecté';
$string['backpackconnection'] = 'Connectez-vous à un sac à dos';
$string['backpackconnection_help'] = 'Magasinez et partagez vos badges depuis ce site et affichez les badges publics depuis d\'autres sites Web sur votre profil d\'utilisateur.';
$string['backpackconnection_connected'] = 'Votre sac à dos';
$string['backpackconnectioncancelattempt'] = 'Connectez-vous en utilisant une adresse email différente';
$string['backpackconnectionconnect'] = 'Connectez-vous au sac à dos';
$string['backpackconnectionresendemail'] = 'Envoyer un courriel de vérification';
$string['backpackconnectionunexpectedresult'] = 'Il y avait un problème de connexion avec votre sac à dos. Votre fournisseur de sacs à dos envoie ce message: \'{$a}\'.';
$string['backpackconnectionunexpectedmessage'] = 'Le sac à dos a retourné l\'erreur : « {$a} ».';
$string['backpackdetails'] = 'Paramètres du sac à dos';
$string['backpackdisconnected'] = 'Le sac est déconnecté';
$string['backpackemail_required'] = 'Adresse électronique\'t be blank';
$string['backpackemailverificationpending'] = 'Vérification en cours';
$string['backpackemailverifyemailbody'] = 'Hi {$a->userfirstname},

You\'re almost done connecting to your badges backpack on \'{$a->sitename}\'.

To finish connecting to your backpack, verify your email address through the following button:

{$a->buttonlink}

If the button doesn\'t work, you can copy and paste the following URL into your browser:
{$a->link}


If you didn\'t try to connect to your badges backpack, you can safely ignore this email.

For any extra help, please contact your site support,

{$a->admin}';
$string['backpackemailverifyemailsubject'] = '{$a}: Vérification des emails de sac à dos Badges';
$string['backpackemailverifypending'] = 'Nous avons envoyé un courriel à <strong>{$a}</strong>. Cliquez sur le lien de vérification dans l\'email pour activer votre connexion sac à dos.';
$string['backpackemailverifysuccess'] = 'Vous...\'re now connected to your backpack.';
$string['backpackemailverifytokenmismatch'] = 'Le jeton dans le lien que vous avez cliqué ne correspond pas au jeton stocké. Assurez-vous de cliquer sur le lien dans le dernier courriel que vous avez reçu.';
$string['backpackexporterror'] = 'Peut\'t export the badge to backpack';
$string['backpackexporterrorwithinfo'] = 'Peut\'t export the badge "{$a->badgename}" to backpack. Error: {$a->error}';
$string['backpackimport'] = 'Paramètres d\'importation des insignes';
$string['backpackimport_help'] = 'After the backpack connection is successfully established, badges from your backpack can be displayed on your badges page and your profile page.

In this area, you can select collections of badges from your backpack that you would like to display in your profile.';
$string['backpacksettings'] = 'Paramètres du sac à dos';
$string['backpackapiurl'] = 'URL de l\'API du sac à dos';
$string['backpackweburl'] = 'URL du sac à dos';
$string['backpackprovider'] = 'Fournisseur de sac à dos';
$string['badges'] = 'Insignes';
$string['badgedetails'] = 'Détails du insigne';
$string['badgeimage'] = 'Image';
$string['badgeimage_help'] = 'L\'image doit avoir au moins 300 x 300 pixels. Il sera affiché en 300 x 300 pixels sur la page du badge et 100 x 100 pixels sur l\'utilisateur\'s profile page.';
$string['badgeissued'] = 'Insigne délivré';
$string['badgeprivacysetting'] = 'Paramètres de confidentialité des insignes';
$string['badgeprivacysetting_help'] = 'Badges you earn can be displayed on your account profile page. This setting allows you to automatically set the visibility of the newly earned badges.

You can still control individual badge privacy settings on your badges page.';
$string['badgeprivacysetting_str'] = 'Afficher automatiquement les badges Je gagne sur ma page de profil';
$string['badgesalt'] = 'Sel pour hachage du receveur\'s email address';
$string['badgesalt_desc'] = 'Using a hash allows backpack services to confirm the badge earner without having to expose their email address. This setting should only use numbers and letters.

Note: For recipient verification purposes, please avoid changing this setting once you start issuing badges.';
$string['badgesdisabled'] = 'Les insignes ne sont pas activés sur ce site.';
$string['badgesearned'] = 'Nombre de badges gagnés : {$a}';
$string['badgesettings'] = 'Paramètres des insignes';
$string['badgestatus_0'] = 'Non disponible';
$string['badgestatus_1'] = 'Disponible';
$string['badgestatus_2'] = 'Non disponible (critères verrouillés)';
$string['badgestatus_3'] = 'Disponible (critères verrouillés)';
$string['badgestatus_4'] = 'Archivé';
$string['badgestoearn'] = 'Nombre de badges disponibles : {$a}';
$string['badgesview'] = 'Insignes de cours';
$string['badgetags'] = 'Balises d\'insigne';
$string['badgeurl'] = 'Lien de badge émis';
$string['bawards'] = 'Bénéficiaires';
$string['bcriteria'] = 'Critères';
$string['bdetails'] = 'Modifier les détails';
$string['bendorsement'] = 'Approbation';
$string['bmessage'] = 'Message';
$string['boverview'] = 'Aperçu général';
$string['brelated'] = 'Insignes connexes ({$a})';
$string['balignment'] = 'Alignements ({$a})';
$string['bydate'] = 'complet par';
$string['imagecaption'] = 'Légende de l\'image';
$string['imagecaption_help'] = 'Si spécifié, une légende d\'image est affichée sur la page du badge.';
$string['claim'] = 'Réclamation';
$string['claimcomment'] = 'Commentaire favorable';
$string['claimid'] = 'URL de la revendication';
$string['clearsettings'] = 'Effacer les paramètres';
$string['completionnotenabled'] = 'L\'achèvement du cours n\'est pas autorisé pour ce cours, il ne peut donc pas être inclus dans les critères de badge. L\'achèvement du cours peut être activé dans les paramètres du cours.';
$string['completioninfo'] = 'Ce badge a été délivré pour compléter :';
$string['configenablebadges'] = 'Si activé, cette fonctionnalité vous permet de créer des badges et de les attribuer aux utilisateurs du site.';
$string['configuremessage'] = 'Message d\'insigne';
$string['connect'] = 'Connexion';
$string['connected'] = 'Connecté';
$string['connecting'] = 'Connexion...';
$string['contact'] = 'Adresse de l\'émetteur';
$string['contact_help'] = 'Une adresse e-mail associée à l\'émetteur du badge.';
$string['copy'] = 'Copier';
$string['copyof'] = 'Copie de {$a}';
$string['course'] = 'Cours : {$a}';
$string['coursebadgesdisabled'] = 'Les badges de cours ne sont pas activés sur ce site.';
$string['coursecompletion'] = 'Les utilisateurs doivent suivre ce cours.';
$string['coursebadges'] = 'Insignes';
$string['coursebadgetitle'] = 'Insigne du cours';
$string['create'] = 'Nouveau badge';
$string['createbutton'] = 'Créer un badge';
$string['creatorbody'] = '<p>{$a->user} a rempli toutes les exigences relatives aux badges et a reçu le badge. Affichage de l\'insigne émis à {$a->link} </p>';
$string['creatorsubject'] = '\'{$a}\' has been awarded!';
$string['criteriasummary'] = 'Résumé des critères';
$string['criteriacreated'] = 'Critères d\'insigne créés avec succès';
$string['criteriadeleted'] = 'Critères d\'insigne supprimés avec succès';
$string['criteriaupdated'] = 'Critères d\'insigne mis à jour avec succès';
$string['criteria_descr'] = 'Les utilisateurs reçoivent ce badge lorsqu\'ils remplissent les conditions suivantes :';
$string['criteria_descr_bydate'] = 'par <em>{$a}</em>';
$string['criteria_descr_grade'] = 'avec une note minimale de <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Compléter <strong>{$a}</strong> de:';
$string['criteria_descr_short1'] = 'Compléter <strong>{$a}</strong> de:';
$string['criteria_descr_short2'] = 'Prix décerné par <strong>{$a}</strong> de :';
$string['criteria_descr_short4'] = 'Terminer le cours';
$string['criteria_descr_short5'] = 'Compléter <strong>{$a}</strong> de:';
$string['criteria_descr_short6'] = 'Compléter <strong>{$a}</strong> de:';
$string['criteria_descr_short7'] = 'Compléter <strong>{$a}</strong> de:';
$string['criteria_descr_short8'] = 'Membre de la cohorte <strong>{$a}</strong> de:';
$string['criteria_descr_short9'] = 'Compléter <strong>{$a}</strong> de:';
$string['criteria_descr_single_short1'] = 'Terminé :';
$string['criteria_descr_single_short2'] = 'Délivré par :';
$string['criteria_descr_single_short4'] = 'Terminer le cours';
$string['criteria_descr_single_short5'] = 'Terminé :';
$string['criteria_descr_single_short6'] = 'Terminé :';
$string['criteria_descr_single_short7'] = 'Terminé :';
$string['criteria_descr_single_short8'] = 'Membres';
$string['criteria_descr_single_short9'] = 'Terminé :';
$string['criteria_descr_single_1'] = 'Les activités suivantes doivent être menées à bien:';
$string['criteria_descr_single_2'] = 'Ce badge doit être attribué par un utilisateur ayant le rôle suivant:';
$string['criteria_descr_single_4'] = 'Les utilisateurs doivent suivre le cours';
$string['criteria_descr_single_5'] = 'Le cours suivant doit être complété:';
$string['criteria_descr_single_6'] = 'Le champ de profil d\'utilisateur suivant doit être rempli:';
$string['criteria_descr_single_7'] = 'Le badge suivant doit être gagné :';
$string['criteria_descr_single_8'] = 'L\'adhésion à la cohorte suivante est requise :';
$string['criteria_descr_single_9'] = 'Les compétences suivantes doivent être remplies :';
$string['criteria_descr_0'] = 'Compléter <strong>{$a}</strong> des exigences énumérées.';
$string['criteria_descr_1'] = 'Les activités suivantes sont terminées :';
$string['criteria_descr_2'] = 'Ce badge doit être attribué par les utilisateurs avec <strong>{$a}</strong> des rôles suivants:';
$string['criteria_descr_4'] = 'Les utilisateurs doivent suivre le cours';
$string['criteria_descr_5'] = 'Les cours suivants doivent être suivis :';
$string['criteria_descr_6'] = '<strong>{$a}</strong> des champs de profil d\'utilisateur suivants doivent être remplis:';
$string['criteria_descr_7'] = '<strong>{$a}</strong> des insignes suivants doivent être gagnés :';
$string['criteria_descr_8'] = 'L\'adhésion à <strong>{$a}</strong> des cohortes suivantes est requise :';
$string['criteria_descr_9'] = 'Les compétences suivantes doivent être remplies :';
$string['criteria_0'] = 'Ce badge est décerné quand...';
$string['criteria_1'] = 'Achèvement des activités';
$string['criteria_1_help'] = 'Permet l\'attribution d\'un badge aux utilisateurs en fonction de l\'achèvement d\'un ensemble d\'activités dans le cadre d\'un cours.';
$string['criteria_2'] = 'Édition manuelle par rôle';
$string['criteria_2_help'] = 'Permet qu\'un badge soit attribué manuellement par des utilisateurs qui ont un rôle particulier dans le site ou le cours.';
$string['criteria_3'] = 'Participation sociale';
$string['criteria_3_help'] = 'Social';
$string['criteria_4'] = 'Achèvement du cours';
$string['criteria_4_help'] = 'Permet d\'accorder un badge aux utilisateurs qui ont terminé le cours. Ce critère peut comporter des paramètres supplémentaires tels que le niveau minimum et la date d\'achèvement du cours.';
$string['criteria_5'] = 'Achèvement d\'un ensemble de cours';
$string['criteria_5_help'] = 'Permet d\'attribuer un badge aux utilisateurs qui ont suivi un ensemble de cours. Chaque cours peut avoir des paramètres supplémentaires tels que le niveau minimum et la date d\'achèvement du cours.';
$string['criteria_6'] = 'Achèvement du profil';
$string['criteria_6_help'] = 'Permet d\'attribuer un badge aux utilisateurs pour avoir rempli certains champs de leur profil. Vous pouvez sélectionner à partir des champs de profil par défaut et personnalisés qui sont disponibles pour les utilisateurs.';
$string['criteria_7'] = 'Insignes décernés';
$string['criteria_7_help'] = 'Permet d\'attribuer un badge aux utilisateurs en fonction d\'autres badges qu\'ils ont gagnés.';
$string['criteria_8'] = 'Membres de la cohorte';
$string['criteria_8_help'] = 'Permet d\'attribuer un badge aux utilisateurs en fonction de l\'appartenance à une cohorte.';
$string['criteria_9'] = 'Compétences';
$string['criteria_9_help'] = 'Permet d\'attribuer un badge aux utilisateurs en fonction des compétences qu\'ils ont accomplies.';
$string['criterror'] = 'Paramètres actuels';
$string['criterror_help'] = 'Ce jeu de champs montre tous les paramètres qui ont été initialement ajoutés à cette exigence de badge mais ne sont plus disponibles. Il est recommandé de décocher ces paramètres pour s\'assurer que les utilisateurs peuvent gagner ce badge à l\'avenir.';
$string['currentimage'] = 'Image actuelle';
$string['currentstatus'] = 'Situation actuelle :';
$string['dateawarded'] = 'Date de publication';
$string['dateearned'] = 'Date : {$a}';
$string['day'] = 'Jour(s)';
$string['deactivate'] = 'Désactiver l\'accès';
$string['deactivatesuccess'] = 'Accès au badge \'{$a}\' disabled.';
$string['defaultissuercontact'] = 'Adresse électronique de l\'émetteur d\'insigne';
$string['defaultissuercontact_desc'] = 'Une adresse e-mail associée à l\'émetteur du badge. Pour un sac à dos Open Badges v2.0, il est utilisé pour l\'authentification lors de l\'édition des badges dans un sac à dos.';
$string['defaultissuerpassword'] = 'Mot de passe de l\'émetteur d\'insigne';
$string['defaultissuerpassword_help'] = 'Un compte est requis sur le site du sac à dos avec l\'adresse e-mail spécifiée dans le réglage de l\'adresse e-mail de l\'émetteur de badge dans l\'administration du site / Badges / Badges. Le mot de passe du compte doit être entré ici.';
$string['defaultissuername'] = 'Nom de l\'émetteur';
$string['defaultissuername_desc'] = 'Nom de l\'agent ou de l\'autorité émetteur.';
$string['delbadge'] = 'Voulez-vous supprimer badge \'{$a}\' and remove all existing issued badges?';
$string['delexternalbackpack'] = 'Supprimer le sac à dos du site';
$string['delexternalbackpackconfirm'] = 'Supprimer le sac à dos \'{$a}\'?';
$string['delconfirm'] = 'Supprimer et supprimer les badges existants';
$string['deletehelp'] = '<p>Fully deleting a badge means that all its information and criteria records will be permanently removed. Users who have earned this badge will no longer be able to access it and display it on their profile pages.</p>
<p>Note: Users who have earned this badge and have already pushed it to their external backpack, will still have this badge in their external backpack. However, they will not be able to access criteria and evidence pages linking back to this web site.</p>';
$string['delcritconfirm'] = 'Voulez-vous vraiment supprimer ce critère?';
$string['delparamconfirm'] = 'Voulez-vous vraiment supprimer ce paramètre ?';
$string['description'] = 'Désignation des marchandises';
$string['disconnect'] = 'Déconnecter';
$string['donotaward'] = 'Actuellement, ce badge n\'est pas actif, donc il ne peut pas être attribué aux utilisateurs. Si vous souhaitez décerner ce badge, veuillez fixer son statut à actif.';
$string['enablebadges'] = 'Activer les badges';
$string['endorsement'] = 'Approbation';
$string['error:backpackdatainvalid'] = 'Le retour des données du sac à dos était invalide.';
$string['error:backpackemailnotfound'] = 'Le courriel \'{$a}\' is not associated with a backpack. You need to <a href="http://backpack.openbadges.org">create a backpack</a> for that account or sign in with another email address.';
$string['error:badgeawardnotfound'] = 'Impossible de vérifier ce badge. Ce badge peut avoir été révoqué.';
$string['error:badgenotfound'] = 'Insigne introuvable';
$string['error:cannotawardbadge'] = 'Impossible de décerner un badge à un utilisateur.';
$string['error:cannotrevokebadge'] = 'Impossible de révoquer le badge d\'un utilisateur.';
$string['error:cannotdeletecriterion'] = 'Ce critère ne peut être supprimé.';
$string['error:connectionunknownreason'] = 'La connexion a échoué mais aucune raison n\'a été donnée.';
$string['error:clone'] = 'Je ne peux pas cloner le badge.';
$string['error:externalbadgedoesntexist'] = 'Insigne introuvable';
$string['error:guestuseraccess'] = 'Vous utilisez actuellement l\'accès invité. Pour voir les badges vous devez vous connecter avec votre compte utilisateur.';
$string['error:invalidcriteriatype'] = 'Type de critères non valides.';
$string['error:invalidexpiredate'] = 'La date d\'expiration doit être à l\'avenir.';
$string['error:invalidexpireperiod'] = 'La période d\'expiration ne peut être négative ou égale 0.';
$string['error:invalidparambadge'] = 'L\'insigne n\'existe pas.';
$string['error:noactivities'] = 'Il n\'y a pas d\'activités avec des critères d\'achèvement permis dans ce cours.';
$string['error:nobadges'] = 'Il n\'y a actuellement aucun badge avec accès autorisé pour être ajouté comme critère. Un badge site ne peut avoir d\'autres badges site que comme critères. Un badge de cours peut avoir d\'autres badges de cours ou des badges d\'emplacement comme critères.';
$string['error:invalidparamcohort'] = 'La cohorte n\'existe pas.';
$string['error:noactivities'] = 'Il n\'y a pas d\'activités avec des critères d\'achèvement permis dans ce cours.';
$string['error:nocohorts'] = 'Pas de cohorte';
$string['error:nocourses'] = 'L\'achèvement du cours n\'est pas activé pour aucun des cours de ce site, donc aucun ne peut être affiché. L\'achèvement du cours peut être activé dans les paramètres du cours.';
$string['error:nogroupssummary'] = '<p> Il n\'y a pas de collections publiques de badges disponibles dans votre sac à dos. </p>';
$string['error:nogroupslink'] = '<p>Seules les collections publiques sont affichées. <a href="{$a}" cible="_blank" rel="nofollow"> Visitez votre sac à dos</a> pour créer des collections publiques.</p>';
$string['error:nopermissiontoview'] = 'Vous n\'avez aucune autorisation pour voir les récipiendaires de badges';
$string['error:nosuchbadge'] = 'Insigne avec id {$a} n\'existe pas.';
$string['error:nosuchcohort'] = 'Avertissement : Cette cohorte n\'est plus disponible.';
$string['error:nosuchcourse'] = 'Avertissement : Ce cours n\'est plus disponible.';
$string['error:nosuchfield'] = 'Avertissement : Ce champ de profil d\'utilisateur n\'est plus disponible.';
$string['error:nosuchmod'] = 'Avertissement : Cette activité n\'est plus disponible.';
$string['error:nosuchrole'] = 'Avertissement : Ce rôle n\'est plus disponible.';
$string['error:nosuchuser'] = 'L\'utilisateur avec cette adresse e-mail n\'a pas de compte avec le fournisseur de sac à dos actuel.';
$string['error:notifycoursedate'] = 'Les insignes associés à l\'achèvement des cours et des activités ne seront pas émis avant la date de début du cours ({$a}).';
$string['error:parameter'] = 'Avertissement : Au moins un paramètre doit être sélectionné pour assurer la bonne émission du flux de travail.';
$string['error:requesttimeout'] = 'La demande de connexion a été reportée avant qu\'elle puisse être complétée.';
$string['error:requesterror'] = 'La requête de connexion a échoué (code d\'erreur {$a}).';
$string['error:relatedbadgedoesntexist'] = 'Il n\'y a pas de badge public avec cet identifiant';
$string['error:save'] = 'Je ne peux pas sauver le badge.';
$string['error:userdeleted'] = '{$a->utilisateur} (Cet utilisateur n\'existe plus dans {$a->site})';
$string['eventbadgearchived'] = 'Insigne archivé';
$string['eventbadgeawarded'] = 'Insigne attribué';
$string['eventbadgecreated'] = 'Insigne créé';
$string['eventbadgecriteriacreated'] = 'Critères d\'insigne créés';
$string['eventbadgecriteriadeleted'] = 'Critères d\'insigne supprimés';
$string['eventbadgecriteriaupdated'] = 'Mise à jour des critères d\'insigne';
$string['eventbadgedeleted'] = 'Insigne supprimé';
$string['eventbadgedisabled'] = 'Insigne désactivé';
$string['eventbadgeduplicated'] = 'Insigne reproduit';
$string['eventbadgeenabled'] = 'Insigne activé';
$string['eventbadgelistingviewed'] = 'Insigne vu';
$string['eventbadgerevoked'] = 'Insigne révoqué';
$string['eventbadgeupdated'] = 'Insigne mis à jour';
$string['eventbadgeviewed'] = 'Insigne vu';
$string['existingrecipients'] = 'Bénéficiaires actuels';
$string['expired'] = 'Expiré';
$string['expiredate'] = 'Ce badge expire le {$a}.';
$string['expireddate'] = 'Ce badge a expiré sur {$a}.';
$string['expiredin'] = 'Expiré {$a}';
$string['expiresin'] = 'Expire {$a}';
$string['expireperiod'] = 'Ce badge expire {$a} jour(s) après sa délivrance.';
$string['expireperiodh'] = 'Ce badge expire {$a} heure(s) après sa délivrance.';
$string['expireperiodm'] = 'Ce badge expire {$a} minute(s) après sa délivrance.';
$string['expireperiods'] = 'Ce badge expire {$a} seconde(s) après avoir été émis.';
$string['expirydate'] = 'Date d\'expiration';
$string['expirydate_help'] = 'En option, les badges peuvent expirer à une date précise, ou la date peut être calculée en fonction de la date à laquelle le badge a été délivré à un utilisateur.';
$string['existsinbackpack'] = 'Insigne existe déjà dans le sac à dos';
$string['externalconnectto'] = 'Pour afficher les badges externes, vous devez <a href="{$a}">se connecter à un sac à dos</a>.';
$string['externalbackpack_required'] = 'Le fournisseur de sac à dos peut\'t be blank';
$string['externalbadges'] = 'Mes badges d\'autres sites Web';
$string['externalbadgesp'] = 'Insignes d\'autres sites Web :';
$string['externalbadges_help'] = 'Cette zone affiche des badges de votre sac à dos externe.';
$string['fixed'] = 'Date fixe';
$string['hidden'] = 'Caché';
$string['hiddenbadge'] = 'Malheureusement, le propriétaire du badge n\'a pas rendu cette information disponible.';
$string['hostedurl'] = 'URL externe';
$string['hostedurldescription'] = 'URL externe où le badge est hébergé';
$string['imageauthoremail'] = 'Auteur de l\'image\'s email';
$string['imageauthoremail_help'] = 'Si spécifié, l\'adresse électronique de l\'auteur de l\'image du badge est affichée sur la page du badge.';
$string['imageauthorname'] = 'Auteur de l\'image\'s name';
$string['imageauthorname_help'] = 'Si spécifié, le nom de l\'auteur de l\'image du badge est affiché sur la page du badge.';
$string['imageauthorurl'] = 'Auteur de l\'image\'s URL';
$string['imageauthorurl_help'] = 'Si spécifié, un lien vers l\'image de badge auteur\'s website is displayed on the badge page. The URL should have a prefix http:// or https://.';
$string['invalidurl'] = 'URL non valide';
$string['issuancedetails'] = 'Durée de l\'insigne';
$string['issuedbadge'] = 'Informations sur le badge émis';
$string['issuedby'] = 'Émis par {$a}';
$string['issuedon'] = 'Émis {$a}';
$string['issuerdetails'] = 'Détails de l\'émetteur';
$string['issueremail'] = 'Courriel';
$string['issueremail_help'] = 'Une adresse e-mail de contact de l\'organisation qui émet l\'endossement.';
$string['issuername'] = 'Nom de l\'émetteur';
$string['issuername_help'] = 'Nom de l\'agent ou de l\'autorité émetteur.';
$string['issuername_endorsement'] = 'Nom de l\'endoreur';
$string['issuername_endorsement_help'] = 'Le nom du promoteur.';
$string['issuerurl'] = 'URL de l\'émetteur';
$string['issuerurl_help'] = 'Le site Web de l\'organisation qui émet l\'approbation. L\'URL devrait avoir un préfixe http:// ou https://.';
$string['language'] = 'Langue';
$string['language_help'] = 'La langue utilisée sur la page du badge.';
$string['listbackpacks'] = 'Liste des sacs à dos';
$string['localconnectto'] = 'Pour partager ces badges en dehors de ce site Web, vous devez <a href="{$a}">connecter à un sac à dos</a>.';
$string['localbadges'] = 'Mes badges du site Web {$a}';
$string['localbadgesh'] = 'Mes badges de ce site web';
$string['localbadgesh_help'] = 'All badges earned within this web site by completing courses, course activities, and other requirements.

You can manage your badges here by making them public or private for your profile page.

You can download all of your badges or each badge separately and save them on your computer. Downloaded badges can be added to your external backpack service.';
$string['localbadgesp'] = 'Insignes de {$a}:';
$string['loginbackpacktitle'] = '<fort> Connectez-vous à votre sac à dos</strong>';
$string['makeprivate'] = 'Faire privée';
$string['makepublic'] = 'Rendre public';
$string['managebadges'] = 'Gérer les badges';
$string['managebackpacks'] = 'Gérer les sacs à dos';
$string['message'] = 'Corps du message';
$string['messagebody'] = '<p>You have been awarded the badge "%badgename%"!</p>
<p>More information about this badge can be found on the %badgelink% badge information page.</p>
<p>You can manage and download the badge from your {$a} page.</p>';
$string['messagesubject'] = 'Félicitations ! Tu viens de gagner un badge !';
$string['method'] = 'Ce critère est complet quand...';
$string['mingrade'] = 'Niveau minimal requis';
$string['month'] = 'Mois(s)';
$string['moredetails'] = 'Plus de détails';
$string['mybadges'] = 'Mes insignes';
$string['mybackpack'] = 'Paramètres de mon sac à dos';
$string['namewithlink'] = 'Nom avec lien';
$string['never'] = 'Jamais';
$string['newbackpack'] = 'Ajouter un nouveau sac à dos';
$string['newbadge'] = 'Ajouter un nouveau badge';
$string['newbadgedeprecated'] = 'You have been redirected from badges/newbadge.php. Please note that badges/newbadge.php will be removed in the near future.
<br/>Update links and bookmarks to use the current page badges/edit.php.';
$string['newimage'] = 'Nouvelle image';
$string['noalignment'] = 'Ce badge n\'a aucune compétence ou norme externe spécifiée.';
$string['noawards'] = 'Ce badge n\'a pas encore été gagné.';
$string['nomatchingawards'] = 'Il n\'y a pas encore de récipiendaires qui ont obtenu ce badge.';
$string['nobackpack'] = 'Il n\'y a pas de service de sac à dos connecté à ce compte.<br/>';
$string['nobackpackbadgessummary'] = 'Il n\'y a pas de badges dans les collections que vous avez sélectionnées.';
$string['nobackpackcollectionssummary'] = 'Aucune collection de badges n\'a été sélectionnée.';
$string['nobackpacks'] = 'Il n\'y a pas de sacs à dos disponibles';
$string['nobadges'] = 'Il n\'y a actuellement aucun badge disponible pour les utilisateurs à gagner.';
$string['nomatchingbadges'] = 'Il n\'y a pas de badges assortis pour les utilisateurs à gagner.';
$string['nocompetencies'] = 'Aucune compétence sélectionnée.';
$string['nocriteria'] = 'Les critères pour ce badge n\'ont pas encore été établis.';
$string['noendorsement'] = 'Ce badge n\'a pas d\'approbation.';
$string['noexpiry'] = 'Ce badge n\'a pas de date d\'expiration.';
$string['noparamstoadd'] = 'Il n\'y a aucun paramètre supplémentaire disponible pour ajouter à cette exigence de badge.';
$string['norelated'] = 'Ce badge n\'a aucun badge connexe.';
$string['notacceptedrole'] = 'Your current role assignment is not among the roles that can manually issue this badge.<br/>
If you would like to see users who have already earned this badge, you can visit {$a} page. ';
$string['notconnected'] = 'Non connecté';
$string['notealignment'] = 'Des compétences ou des normes externes, avec lesquelles le badge est aligné, peuvent être spécifiées. Toute compétence ou norme externe est affichée sur la page du badge.';
$string['noteendorsement'] = 'Une caution d\'un tiers peut être utilisée pour ajouter de la valeur au badge. Par exemple, un badge délivré par un enseignant peut être avalisé par l\'école ou un badge délivré par un organisme local d\'attribution peut être avalisé par l\'organisme national d\'attribution.';
$string['noterelated'] = 'Les insignes avec une connexion peuvent être marqués comme étant apparentés. Par exemple, les badges avec les mêmes critères qui sont affichés dans différentes langues peuvent être marqués comme étant liés. Tous les badges associés sont affichés sur la page du badge.';
$string['nothingtoadd'] = 'Il n\'y a pas de critères à ajouter.';
$string['notification'] = 'Avertissez le créateur du badge';
$string['notification_help'] = 'This setting manages notifications sent to a badge creator to let them know that the badge has been issued.

The following options are available:

* **NEVER** – Do not send notifications.

* **EVERY TIME** – Send a notification every time this badge is awarded.

* **DAILY** – Send notifications once a day.

* **WEEKLY** – Send notifications once a week.

* **MONTHLY** – Send notifications once a month.';
$string['notifydaily'] = 'Tous les jours';
$string['notifyevery'] = 'Chaque fois';
$string['notifymonthly'] = 'Mensuel';
$string['notifyweekly'] = 'Semaine';
$string['numawards'] = 'Les utilisateurs ont reçu un badge \'{$a->badgename}\': <a href="{$a->lien}">{$a->count}</a>.';
$string['numawardstat'] = 'Les utilisateurs ont reçu un badge \'{$a->badgename}\': {$a->awards}.';
$string['overallcrit'] = 'des critères sélectionnés sont complets.';
$string['oauth2issuer'] = 'Services OAuth 2';
$string['openbadgesv1'] = 'Ouvrez les badges v1.0';
$string['openbadgesv2'] = 'Ouvrir les badges v2.0';
$string['openbadgesv2p1'] = 'Insignes ouverts v2.1';
$string['othernavigation'] = 'Autre navigation ...';
$string['password_required'] = 'Le mot de passe peut\'t be blank';
$string['potentialrecipients'] = 'Bénéficiaires potentiels de badges';
$string['preferences'] = 'Préférences d\'insigne';
$string['privacy:metadata:backpack'] = 'Un enregistrement de l\'utilisateur\'s backpacks';
$string['privacy:metadata:backpack:backpackuid'] = 'L\'identificateur unique du sac à dos';
$string['privacy:metadata:backpack:externalbackpackid'] = 'L\'identité du sac à dos';
$string['privacy:metadata:backpack:email'] = 'L\'email associé au sac à dos';
$string['privacy:metadata:backpack:userid'] = 'L\'ID de l\'utilisateur dont il est sac à dos';
$string['privacy:metadata:badge'] = 'Une collection de badges';
$string['privacy:metadata:badge:timecreated'] = 'Le moment où le badge a été créé';
$string['privacy:metadata:badge:timemodified'] = 'Le moment où le badge a été modifié pour la dernière fois';
$string['privacy:metadata:badge:usercreated'] = 'L\'ID de l\'utilisateur qui a créé le badge';
$string['privacy:metadata:badge:usermodified'] = 'L\'identifiant de l\'utilisateur qui a modifié le badge';
$string['privacy:metadata:criteriamet'] = 'Un ensemble de critères qui ont été satisfaits';
$string['privacy:metadata:criteriamet:datemet'] = 'Date à laquelle les critères ont été remplis';
$string['privacy:metadata:criteriamet:userid'] = 'L\'identité de l\'utilisateur qui a satisfait aux critères';
$string['privacy:metadata:external:backpacks'] = 'Informations partagées lorsque les utilisateurs soumettent leur badge à un sac à dos externe';
$string['privacy:metadata:external:backpacks:badge'] = 'Le nom du badge';
$string['privacy:metadata:external:backpacks:description'] = 'La description du badge';
$string['privacy:metadata:external:backpacks:image'] = 'L\'image du badge';
$string['privacy:metadata:external:backpacks:issuer'] = 'Quelques informations sur l\'émetteur';
$string['privacy:metadata:external:backpacks:url'] = 'L\'URL de Moodle où les informations de badge émises peuvent être vues';
$string['privacy:metadata:backpackoauth2'] = 'Informations OAuth 2 lorsque l\'utilisateur se connecte à un sac à dos externe';
$string['privacy:metadata:backpackoauth2:userid'] = 'L\'ID de l\'utilisateur se connecte au sac à dos';
$string['privacy:metadata:backpackoauth2:usermodified'] = 'L\'ID de l\'utilisateur modifié se connecte';
$string['privacy:metadata:backpackoauth2:token'] = 'Jeton de connexion Backpack';
$string['privacy:metadata:backpackoauth2:issuerid'] = 'ID de service OAuth 2';
$string['privacy:metadata:backpackoauth2:scope'] = 'List scope of backpack connect';
$string['privacy:metadata:issued'] = 'Un dossier de badges décerné';
$string['privacy:metadata:issued:dateexpire'] = 'La date d\'expiration du badge';
$string['privacy:metadata:issued:dateissued'] = 'Date de la sentence';
$string['privacy:metadata:issued:userid'] = 'L\'identité de l\'utilisateur qui a reçu un badge';
$string['privacy:metadata:manualaward'] = 'Un record de prix manuels';
$string['privacy:metadata:manualaward:datemet'] = 'La date à laquelle l\'utilisateur a reçu le badge';
$string['privacy:metadata:manualaward:issuerid'] = 'L\'identité de l\'utilisateur qui délivre le badge';
$string['privacy:metadata:manualaward:issuerrole'] = 'Le rôle de l\'utilisateur qui délivre le badge';
$string['privacy:metadata:manualaward:recipientid'] = 'L\'identifiant de l\'utilisateur qui reçoit manuellement un badge';
$string['recipient'] = 'Bénéficiaire de l\'insigne';
$string['recipients'] = 'Bénéficiaires d\'un insigne';
$string['recipientvalidationproblem'] = 'Cet utilisateur ne peut pas être vérifié en tant que destinataire de ce badge.';
$string['relative'] = 'Date relative';
$string['relatedbages'] = 'Insignes connexes';
$string['revoke'] = 'Insigne de révocation';
$string['requiredcohort'] = 'Au moins une cohorte devrait être ajoutée au critère de cohorte.';
$string['requiredcompetency'] = 'Au moins une compétence devrait être ajoutée au critère de compétence.';
$string['requiredcourse'] = 'Au moins un cours devrait être ajouté au critère de l\'ensemble des cours.';
$string['requiredbadge'] = 'Au moins un badge doit être ajouté au critère du badge.';
$string['reviewconfirm'] = '<p>This will make your badge visible to users and allow them to start earning it.</p>

<p>It is possible that some users already meet this badge\'s criteria and will be issued this badge immediately after you enable it.</p>

<p>Once a badge has been issued it will be <strong>locked</strong> - certain settings including the criteria and expiry settings can no longer be changed.</p>

<p>Are you sure you want to enable access to the badge \'{$a}\'?</p>';
$string['save'] = 'Enregistrer';
$string['searchname'] = 'Recherche par nom';
$string['selectaward'] = 'Veuillez sélectionner le rôle que vous souhaitez utiliser pour décerner ce badge :';
$string['selectgroup_end'] = 'Seules les collections publiques sont présentées. Visitez votre sac à dos</a> pour créer plus de collections publiques.';
$string['selectgroup_start'] = 'Sélectionnez les collections de votre sac à dos à afficher sur ce site:';
$string['selecting'] = 'Avec les badges sélectionnés...';
$string['setup'] = 'Configuration de la connexion';
$string['sitebackpackdeleted'] = 'Le sac à dos du site a été supprimé.';
$string['sitebackpacknotdeleted'] = 'Ce sac à dos pourrait\'t be deleted because it\'s currently the site default.';
$string['sitebackpackwarning'] = 'Impossible de se connecter au sac à dos. <br/><br/>Vérifiez que le paramètre admin "Badge e-mail address" est le courriel valide pour un compte sur le site internet du sac à dos. <br/><br/>Vérifiez que le "Badge emetteur password" sur la page <a href="{$a->url}">sites de paramètres de sac à dos</a>, est le mot de passe correct pour le compte sur le site de sac à dos. <br/><br/> Le sac à dos est revenu : « {$a->avertissement} »';
$string['sitebadges'] = 'Insignes du site';
$string['sitebadges_help'] = 'Site badges can only be awarded to users for site-related activities. These include completing a set of courses or parts of user profiles. Site badges can also be issued manually by one user to another.

Badges for course-related activities must be created at the course level. Course badges can be found under Course Administration > Badges.';
$string['sitebadgetitle'] = '{$a} badge du site';
$string['statusmessage_0'] = 'Ce badge n\'est actuellement pas disponible pour les utilisateurs. Activez l\'accès si vous voulez que les utilisateurs gagnent ce badge.';
$string['statusmessage_1'] = 'Ce badge est actuellement disponible pour les utilisateurs. Désactiver l\'accès pour effectuer des changements.';
$string['statusmessage_2'] = 'Ce badge n\'est actuellement pas disponible pour les utilisateurs, et ses critères sont verrouillés. Activez l\'accès si vous voulez que les utilisateurs gagnent ce badge.';
$string['statusmessage_3'] = 'Ce badge est actuellement disponible pour les utilisateurs, et ses critères sont verrouillés.';
$string['statusmessage_4'] = 'Ce badge est actuellement archivé.';
$string['status'] = 'Statut d\'insigne';
$string['status_help'] = 'Status of a badge determines its behaviour in the system:

* **AVAILABLE** – Means that this badge can be earned by users. While a badge is available to users, its criteria cannot be modified.

* **NOT AVAILABLE** – Means that this badge is not available to users and cannot be earned or manually issued. If such badge has never been issued before, its criteria can be changed.

Once a badge has been issued to at least one user, it automatically becomes **LOCKED**. Locked badges can still be earned by users, but their criteria can no longer be changed. If you need to modify details or criteria of a locked badge, you can duplicate this badge and make all the required changes.

*Why do we lock badges?*

We want to make sure that all users complete the same requirements to earn a badge. Currently, it is not possible to revoke badges. If we allowed badges requirements to be modified all the time, we would most likely end up with users having the same badge for meeting completely different requirements.';
$string['subject'] = 'Sujet du message';
$string['tags'] = 'Étiquettes';
$string['targetname'] = 'Nom';
$string['targetname_help'] = 'La compétence externe ou la norme avec laquelle le badge est aligné.';
$string['targeturl'] = 'URL';
$string['targeturl_help'] = 'Un lien vers une page décrivant la compétence ou la norme externe. L\'URL devrait avoir un préfixe http:// ou https://.';
$string['targetdescription'] = 'Désignation des marchandises';
$string['targetdescription_help'] = 'Brève description de la compétence ou de la norme externe.';
$string['targetframework'] = 'Cadre';
$string['targetframework_help'] = 'Le nom de la compétence externe ou du cadre standard.';
$string['targetcode'] = 'Code';
$string['targetcode_help'] = 'Un identifiant de chaîne unique pour référencer la compétence ou la norme externe dans son cadre.';
$string['testbackpack'] = 'Sac à dos d\'essai \'{$a}\'';
$string['testsettings'] = 'Paramètres d\'essai';
$string['type'] = 'Type';
$string['tagarea_badge'] = 'Insignes';
$string['userbadges'] = 'Insignes utilisateur';
$string['variablesubstitution'] = 'Substitution variable dans les messages.';
$string['variablesubstitution_help'] = 'In a badge message, certain variables can be inserted into the subject and/or body of a message so that they will be replaced with real values when the message is sent. The variables should be inserted into the text exactly as they are shown below. The following variables can be used:

%badgename%
: This will be replaced by the badge\'s full name.

%username%
: This will be replaced by the recipient\'s full name.

%badgelink%
: This will be replaced by the public URL with information about the issued badge.';
$string['verifyemail'] = 'Vérifier l\'email';
$string['viewbadge'] = 'Insigne émis';
$string['visible'] = 'Visible';
$string['version'] = 'Version';
$string['version_help'] = 'Le champ de version peut être utilisé pour suivre le badge\'s development. If specified, the version is displayed on the badge page.';
$string['warnexpired'] = '(Ce badge a expiré!)';
$string['year'] = 'Année';
$string['includeauthdetails'] = "Inclure les détails d'authentification avec le sac à dos";

// Deprecated since Moodle 4.3.
$string['backpackemail'] = 'Adresse électronique';
$string['backpackemail_help'] = 'L\'adresse email associée à votre sac à dos. Pendant que vous êtes connecté, tout badge gagné sur ce site sera associé à cette adresse e-mail.';

// Deprecated since Moodle 4.5.
$string['error:cannotact'] = 'Impossible d\'activer le badge.';
$string['error:duplicatename'] = 'Un insigne portant ce nom existe déjà dans le système.';
$string['reviewbadge'] = 'Changements dans l\'accès aux badges';
