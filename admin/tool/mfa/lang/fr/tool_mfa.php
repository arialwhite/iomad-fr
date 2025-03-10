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
/**
 * Strings for component 'tool_mfa', language 'en'.
 *
 * @package     tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Poids atteint';
$string['added'] = 'Ajouté';
$string['alltime'] = 'Tous les temps';
$string['areyousure'] = 'Voulez-vous vraiment supprimer ce facteur?';
$string['cancellogin'] = 'Annuler la connexion';
$string['combination'] = 'Combinaison';
$string['confirmationreplace'] = 'Vous serez immédiatement tenu de configurer un autre \'{$a}\'. Please make sure you are ready to complete the setup process.';
$string['confirmationrevoke'] = 'Vous ne pourrez plus utiliser \'{$a}\' to log in to this site.';
$string['connector'] = 'AND';
$string['debugmode:heading'] = 'Mode débogage';
$string['devicename'] = 'Appareil';
$string['editfactor'] = 'Modifier les paramètres pour le facteur {$a}';
$string['entercode'] = 'Entrez le code';
$string['email:subject'] = 'Impossible de se connecter à {$a}';
$string['enablefactor'] = 'Activer le facteur';
$string['error:actionnotfound'] = 'Mesure\'{$a}\' not supported';
$string['error:couldnotreplace'] = 'Impossible de remplacer ce facteur.';
$string['error:directaccess'] = 'Cette page devrait\'t be accessed directly';
$string['error:factornotenabled'] = 'Facteur d\'authentification multifacteur \'{$a}\' not enabled';
$string['error:factornotfound'] = 'Facteur d\'authentification multifacteur \'{$a}\' not found';
$string['error:isguestuser'] = 'Les invités ne sont pas autorisés ici.';
$string['error:notenoughfactors'] = 'Impossible d\'authentifier';
$string['error:reauth'] = 'Nous pourrions...'t confirm your identity sufficiently to meet the site authentication security policy.<br>This may be due to: <br> 1) Steps being locked - please wait a few minutes and try again.
     <br> 2) Steps being failed - please double check the details for each step. <br> 3) Steps were skipped - please reload this page or try logging in again.';
$string['error:revoke'] = 'Peut\'t remove factor';
$string['error:setupfactor'] = 'Peut\'t set up factor';
$string['error:support'] = 'Si vous n\'êtes toujours pas en mesure de vous connecter, ou si vous croyez le voir par erreur, veuillez envoyer un courriel à :';
$string['error:wrongfactorid'] = 'ID du facteur \'{$a}\' is incorrect';
$string['event:failfactor'] = 'L\'authentification multi-facteurs a échoué en raison d\'un facteur défaillant.';
$string['event:faillockout'] = 'L\'authentification multi-facteurs a échoué en raison de trop de tentatives.';
$string['event:failnotenoughfactors'] = 'L\'authentification multi-facteurs a échoué en raison de facteurs insuffisamment satisfaits.';
$string['event:userdeletedfactor'] = 'Facteur supprimé';
$string['event:userfailedmfa'] = 'L\'authentification multifacteur de l\'utilisateur a échoué';
$string['event:userpassedmfa'] = 'Vérification passée';
$string['event:userrevokedfactor'] = 'Révocation des facteurs';
$string['event:usersetupfactor'] = 'Configuration des facteurs';
$string['factor'] = 'Facteur';
$string['factorreplace'] = 'Facteur \'{$a}\' successfully replaced.';
$string['factorreport'] = 'Rapport sur tous les facteurs';
$string['factorreset'] = 'Votre authentification multi-facteurs \'{$a->factor}\' has been reset by a site administrator. You may need to set up this factor again. {$a->url}';
$string['factorresetall'] = 'Tous vos facteurs d\'authentification multi-facteurs ont été réinitialisés par un administrateur du site. Vous pourriez avoir besoin de configurer ces facteurs à nouveau. [$a]';
$string['factorrevoked'] = '\'{$a}\' successfully removed.';
$string['factorsetup'] = '\'{$a}\' successfully set up.';
$string['fallback'] = 'Facteur de recul';
$string['fallback_info'] = 'Ce facteur est un recul si aucun autre facteur n\'est configuré. Ce facteur échouera toujours.';
$string['guidance'] = 'Guide utilisateur d\'authentification multi-facteurs';
$string['inputrequired'] = 'Entrée utilisateur';
$string['ipatcreation'] = 'Adresse IP lors de la création du facteur';
$string['lastused'] = 'Dernière utilisation';
$string['locked'] = '{$a} (Non disponible)';
$string['lockedusersforallfactors'] = 'Utilisateurs verrouillés : Tous les facteurs';
$string['lockedusersforfactor'] = 'Utilisateurs verrouillés : {$a}';
$string['lockoutnotification'] = 'Il vous reste des tentatives.';
$string['managefactor'] = 'Facteur de gestion';
$string['mfa'] = 'Authentification multi-facteurs';
$string['mfa:intro'] = 'Rendez votre compte plus sûr en exigeant une méthode de vérification supplémentaire lorsque vous vous connectez.';
$string['mfa:mfaaccess'] = 'Interagir avec MFA';
$string['mfareports'] = 'Rapports du MFA';
$string['mfasettings'] = 'Gérer l\'authentification multi-facteurs';
$string['na'] = 'n/a';
$string['needhelp'] = 'Besoin d\'aide ?';
$string['nologinusers'] = 'Non connecté';
$string['nonauthusers'] = 'En cours d \' examen';
$string['overall'] = 'Généralités';
$string['pending'] = 'En attente';
$string['performbulk'] = 'Action en vrac';
$string['pluginname'] = 'Authentification multi-facteurs';
$string['preferences:activefactors'] = 'Facteurs actifs';
$string['preferences:availablefactors'] = 'Facteurs disponibles';
$string['preferences:header'] = 'Préférences d\'authentification multi-facteurs';
$string['preferenceslink'] = 'Cliquez ici pour accéder aux préférences de l\'utilisateur.';
$string['privacy:metadata:tool_mfa'] = 'Données avec des facteurs MFA configurés';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP dont le facteur a été créé.';
$string['privacy:metadata:tool_mfa:factor'] = 'Type de facteur';
$string['privacy:metadata:tool_mfa:id'] = 'Numéro d\'enregistrement';
$string['privacy:metadata:tool_mfa:label'] = 'Étiquette pour l\'exemple de facteur, p.ex. appareil ou courriel.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'L\'utilisateur de temps a été vérifié pour la dernière fois avec ce facteur';
$string['privacy:metadata:tool_mfa:secret'] = 'Toute donnée secrète pour facteur';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Temps de mise en place de l\'instance factorielle.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Dernière modification du facteur temps';
$string['privacy:metadata:tool_mfa:userid'] = 'L\'ID de l\'utilisateur auquel le facteur appartient';
$string['privacy:metadata:tool_mfa_auth'] = 'La dernière fois qu\'une authentification multi-facteurs réussie a été enregistrée pour un ID utilisateur.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Le dernier utilisateur de temps a été authentifié avec';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'L\'utilisateur de ce horodatage est associé à.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Secrets temporaires pour l\'authentification des utilisateurs.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Le facteur auquel ce secret est associé.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Le code de sécurité secret.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'La session ID ce secret est associé à.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'L\'utilisateur de ce secret est associé à.';
$string['redirecterrordetected'] = 'Redirection non prise en charge détectée, l\'exécution du script terminée. Une erreur de redirection s\'est produite entre MFA et {$a}.';
$string['remove'] = 'Supprimer';
$string['replace'] = 'Remplacer';
$string['replacefactor'] = 'Remplacer le facteur';
$string['resetconfirm'] = 'Réinitialiser le facteur utilisateur';
$string['resetfactor'] = 'Réinitialiser les facteurs d\'authentification de l\'utilisateur';
$string['resetfactorconfirm'] = 'Voulez-vous vraiment réinitialiser ce facteur pour {$a} ?';
$string['resetfactorplaceholder'] = 'Nom d\'utilisateur ou courriel';
$string['resetsuccess'] = 'Facteur \'{$a->factor}\' successfully reset for user \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Facteur \'{$a}\' successfully reset for provided users.';
$string['resetuser'] = 'Utilisateur :';
$string['revokefactor'] = 'Supprimer le facteur';
$string['selectfactor'] = 'Sélectionnez un facteur à réinitialiser :';
$string['selectperiod'] = 'Sélectionnez une période de retour pour le rapport :';
$string['settings:combinations'] = 'Résumé des bonnes conditions de connexion';
$string['settings:debugmode'] = 'Activer le mode de débogage';
$string['settings:debugmode_help'] = 'Debug mode will display a small notification banner on MFA admin pages, as well as the user preferences page
         with information on the currently enabled factors.';
$string['settings:duration'] = 'Durée de validité secrète';
$string['settings:duration_help'] = 'La durée qui a généré des secrets est valide.';
$string['settings:enabled'] = 'Greffon MFA activé';
$string['settings:enablefactor'] = 'Activer le facteur';
$string['settings:enablefactor_help'] = 'Vérifiez ce contrôle pour permettre l\'utilisation du facteur pour l\'authentification MFA.';
$string['settings:general'] = 'Paramètres généraux du MFA';
$string['settings:guidancecheck'] = 'Utiliser la page d\'orientation';
$string['settings:guidancecheck_help'] = 'Ajouter un lien vers la page d\'orientation sur les pages d\'authentification MFA et les préférences MFA.';
$string['settings:guidancefiles'] = 'Fichiers des pages d\'orientation';
$string['settings:guidancefiles_help'] = 'Ajoutez tous les fichiers ici à utiliser dans la page d\'orientation, et intégrez-les dans la page en utilisant {{filename}} (chemin résolu) ou {{{filename}} (lien HTML) dans l\'éditeur';
$string['settings:guidancepage'] = 'Contenu de la page directrice';
$string['settings:guidancepage_help'] = 'HTML sera affiché sur la page d\'orientation. Saisissez les noms de fichiers de la zone de fichiers pour intégrer le fichier avec le chemin résolu {{filename}} ou comme lien html en utilisant {{{filename}}}.';
$string['settings:lockout'] = 'Seuil de verrouillage';
$string['settings:lockout_help'] = 'Nombre de tentatives qu\'un utilisateur peut répondre aux facteurs d\'entrée avant d\'être empêché de se connecter.';
$string['settings:redir_exclusions'] = 'URLS qui ne devrait pas rediriger la vérification MFA.';
$string['settings:redir_exclusions_help'] = 'Chaque nouvelle ligne est une URL relative du siteroot pour laquelle la vérification MFA ne redirigera pas depuis';
$string['settings:weight'] = 'Poids du facteur';
$string['settings:weight_help'] = 'Le poids de ce facteur si passé. Un utilisateur a besoin d\'au moins 100 points pour se connecter.';
$string['setupfactor'] = 'Facteur de configuration';
$string['setuprequired'] = 'Configuration de l\' utilisateur';
$string['state:fail'] = 'Échec';
$string['state:locked'] = 'Verrouillé';
$string['state:neutral'] = 'Neutre';
$string['state:pass'] = 'Passer';
$string['state:unknown'] = 'Inconnu';
$string['subplugintype_factor'] = 'Type de facteur';
$string['subplugintype_factor_plural'] = 'Types de facteurs';
$string['totalusers'] = 'Nombre total d \' utilisateurs';
$string['totalweight'] = 'Poids total';
$string['userempty'] = 'L\'utilisateur ne peut pas être vide.';
$string['userlogs'] = 'Registres des utilisateurs';
$string['usernotfound'] = 'Impossible de localiser l\'utilisateur.';
$string['usersauthedinperiod'] = 'Enclenchée';
$string['verification'] = 'Vérification en deux étapes';
$string['verification_desc'] = 'Pour garder votre compte en sécurité, nous devons vérifier que c\'est vraiment vous.';
$string['verificationcode'] = 'Code de vérification';
$string['verificationcode_help'] = 'Le code de vérification fourni par le facteur d\'authentification actuel.';
$string['verifyalt'] = 'Essayez une autre façon de vérifier :';
$string['weight'] = 'Poids';
$string['yesremove'] = 'Oui, retirer';
$string['yesreplace'] = 'Oui, remplacer';

// Deprecated since Moodle 4.4.
$string['created'] = 'Créé';
$string['createdfromip'] = 'Créé à partir de l\'IP';
$string['lastverified'] = 'Dernière vérification';
$string['revoke'] = 'Révocation';
$string['setup'] = 'Configuration';
