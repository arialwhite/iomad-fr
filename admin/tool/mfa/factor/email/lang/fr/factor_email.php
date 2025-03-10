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
 * Language strings.
 *
 * @package     factor_email
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['email:accident'] = 'Si vous avez fait\'t request the email, click continue to invalidate the login attempt. If you clicked the link by accident, click cancel, and no action will be taken.';
$string['email:browseragent'] = 'Les détails du navigateur pour cette demande sont: \'{$a}\'';
$string['email:geoinfo'] = 'Cette demande semble provenir approximativement :';
$string['email:greeting'] = 'Bonjour {$a} &#128075;';
$string['email:ipinfo'] = 'Détails de la demande de connexion:';
$string['email:link'] = 'lien de vérification';
$string['email:loginlink'] = 'Ou, si vous\'re on the same device, use this {$a}.';
$string['email:message'] = 'Ici.\'s your verification code for {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Cette demande de connexion a été faite à partir de \'{$a}\'';
$string['email:revokelink'] = 'Si c\'était le cas\'t you, you can {$a}.';
$string['email:revokesuccess'] = 'This code has been successfully revoked. All sessions for {$a} have been ended.
    Email will not be usable as a factor until account security has been verified.';
$string['email:subject'] = 'Ici.\'s your verification code';
$string['email:stoploginlink'] = 'arrêter cette tentative de connexion';
$string['email:uadescription'] = 'Identité du navigateur pour cette demande:';
$string['email:validity'] = 'Le code ne peut être utilisé qu\'une seule fois et est valide pour {$a}.';
$string['error:badcode'] = 'Le code n\'a pas été trouvé. Ceci peut être un ancien lien, un nouveau code peut avoir été envoyé par courriel, ou la tentative de connexion avec ce code a été réussie.';
$string['error:parameters'] = 'Paramètres de page incorrects.';
$string['error:wrongverification'] = 'Mauvais code. Essaie encore.';
$string['event:unauthemail'] = 'Courriel non autorisé reçu';
$string['info'] = 'Vous utilisez l\'email {$a} pour authentifier. Ceci a été mis en place par votre administrateur de site.';
$string['logindesc'] = 'We\'ve just sent a 6-digit code to your email: {$a}';
$string['loginoption'] = 'Avoir un code envoyé à vous';
$string['loginskip'] = "Je n'ai pas reçu de code.";
$string['loginsubmit'] = 'Continuer';
$string['logintitle'] = "Vérifiez que c'est vous par email";
$string['managefactor'] = 'Gérer les courriels';
$string['manageinfo'] = '\'{$a}\' is being used to authenticate. This has been set up by your administrator.';
$string['pluginname'] = 'Courriel';
$string['privacy:metadata'] = 'Le plugin facteur Email ne stocke aucune donnée personnelle';
$string['settings:duration'] = 'Durée de validité';
$string['settings:duration_help'] = 'La période de validité du code.';
$string['settings:suspend'] = 'Suspendre des comptes non autorisés';
$string['settings:suspend_help'] = 'Cochez cette case pour suspendre les comptes utilisateur si une vérification non autorisée par courriel est reçue.';
$string['setupfactor'] = 'Configurer le courriel';
$string['summarycondition'] = 'a une configuration d\'email valide';
$string['unauthloginattempt'] = 'The user with ID {$a->userid} made an unauthorised login attempt using email verification from
IP {$a->ip} with browser agent {$a->useragent}.';
$string['unauthemail'] = 'Courriel non autorisé';
$string['verificationcode'] = 'Entrez le code de vérification pour la confirmation';
$string['verificationcode_help'] = 'Un code de vérification a été envoyé à votre courriel.';
