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
 * Plugin strings are defined here.
 *
 * @package     tool_iomadpolicy
 * @category    string
 * @copyright   2018 David Mudrák <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Je reconnais avoir reçu une demande de consentement au nom du ou des utilisateurs susmentionnés.';
$string['acceptancenote'] = 'Commentaires';
$string['acceptancepolicies'] = 'Politiques';
$string['acceptancessavedsucessfully'] = 'Les accords ont été sauvés avec succès.';
$string['acceptancestatusaccepted'] = 'Acceptée';
$string['acceptancestatusacceptedbehalf'] = 'Accepté sur user\'s behalf';
$string['acceptancestatusdeclined'] = 'Décliné';
$string['acceptancestatusdeclinedbehalf'] = 'Décliné sur l\'utilisateur\'s behalf';
$string['acceptancestatusoverall'] = 'Généralités';
$string['acceptancestatuspartial'] = 'Partiellement accepté';
$string['acceptancestatuspending'] = 'En attente';
$string['acceptanceusers'] = 'Utilisateur';
$string['actions'] = 'Actions';
$string['activate'] = 'Définir le statut à "Active"';
$string['activating'] = 'Activer une politique';
$string['activateconfirm'] = '<p> Vous êtes sur le point d\'activer la politique <em>\'{$a->name}\'</em> and make the version <em>\'{$a->revision}\'</em> the current one.</p><p>All users will be required to agree to this new policy version to be able to use the site.</p>';
$string['activateconfirmyes'] = 'Activer';
$string['agreepolicies'] = 'Veuillez accepter les politiques suivantes';
$string['backtoprevious'] = 'Retour à la page précédente';
$string['backtotop'] = 'Haut de page';
$string['cachedef_iomadpolicy_optional'] = 'Cache du drapeau facultatif/obligatoire pour les versions politiques';
$string['consentbulk'] = 'Consentement';
$string['consentpagetitle'] = 'Consentement';
$string['contactdpo'] = 'Pour toute question concernant les politiques, veuillez communiquer avec l\'agent de protection des renseignements personnels.';
$string['dataproc'] = 'Traitement des données personnelles';
$string['declineacknowledgement'] = 'Je reconnais avoir reçu une demande de refus de consentement au nom des utilisateurs susmentionnés.';
$string['declinetheiomadpolicy'] = 'Refuser le consentement de l\'utilisateur';
$string['deleting'] = 'Suppression d\'une version';
$string['deleteconfirm'] = '<p> Voulez-vous vraiment supprimer la politique <em>\'{$a->name}\'</em>?</p><p>This operation can not be undone.</p>';
$string['editingiomadpolicydocument'] = 'Politique d\'édition';
$string['erroriomadpolicyversioncompulsory'] = 'Les politiques obligatoires ne peuvent être déclinées!';
$string['erroriomadpolicyversionnotfound'] = 'Il y a\'t any policy version with this identifier.';
$string['errorsaveasdraft'] = 'Un changement mineur ne peut pas être sauvegardé en tant que projet';
$string['errorusercantviewiomadpolicyversion'] = 'L\'utilisateur fait\'t have access to this policy version.';
$string['event_acceptance_created'] = 'Création d\'un accord de politique de l\'utilisateur';
$string['event_acceptance_updated'] = 'Mise à jour de l\'accord sur la politique de l\'utilisateur';
$string['filtercapabilityno'] = 'Autorisation : Ne peut pas accepter';
$string['filtercapabilityyes'] = 'Autorisation: peut convenir';
$string['filterrevision'] = 'Version : {$a}';
$string['filterrevisionstatus'] = 'Version : {$a->name} ({$a->status})';
$string['filterrole'] = 'Rôle : {$a}';
$string['filters'] = 'Filtres';
$string['filterstatusdeclined'] = 'Statut : décliné';
$string['filterstatuspending'] = 'État d \' avancement : en attente';
$string['filterstatusyes'] = 'État d \' avancement : Accord';
$string['filterplaceholder'] = 'Mot-clé de recherche ou filtre de sélection';
$string['filteriomadpolicy'] = 'Politique : {$a}';
$string['guestconsent:continue'] = 'Continuer';
$string['guestconsentmessage'] = 'Si vous continuez à naviguer sur ce site, vous acceptez nos politiques :';
$string['iagree'] = 'Je suis d\'accord avec le {$a}';
$string['idontagree'] = 'Non merci, Je décline {$a}';
$string['iagreetotheiomadpolicy'] = 'Donner son consentement';
$string['inactivate'] = 'Définir le statut à « Inactif »';
$string['inactivating'] = 'Inactivation d\'une politique';
$string['inactivatingconfirm'] = '<p>Vous êtes sur le point d\'inactiver la politique <em>\'{$a->name}\'</em> version <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Désactiver';
$string['invalidversionid'] = 'Il n\'y a pas de politique avec cet identifiant !';
$string['irevoketheiomadpolicy'] = 'Retirez le consentement de l\'utilisateur';
$string['listactivepolicies'] = 'Liste des politiques actives';
$string['minorchange'] = 'Changement mineur';
$string['minorchangeinfo'] = 'Un changement mineur ne modifie pas le sens de la politique. Les utilisateurs ne sont pas tenus d\'accepter à nouveau la politique si la modification est marquée comme un changement mineur.';
$string['managepolicies'] = 'Gérer les politiques';
$string['movedown'] = 'Baissez-vous';
$string['moveup'] = 'En haut';
$string['mustagreetocontinue'] = 'Avant de continuer, vous devez reconnaître toutes ces politiques.';
$string['newiomadpolicy'] = 'Nouvelle politique';
$string['newversion'] = 'Nouvelle version';
$string['noactivepolicies'] = 'Il n\'y a pas de politiques avec une version active.';
$string['nofiltersapplied'] = 'Pas de filtres appliqués';
$string['nopermissiontoagreedocs'] = 'Aucune autorisation d\'accepter les politiques';
$string['nopermissiontoagreedocs_desc'] = 'Désolé, vous n\'avez pas les autorisations nécessaires pour accepter les politiques.<br />Vous ne pourrez pas utiliser ce site tant que les politiques suivantes n\'auront pas été convenues:';
$string['nopermissiontoagreedocsbehalf'] = 'Aucune autorisation d\'accepter les politiques au nom de cet utilisateur';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Désolé, vous n\'avez pas la permission requise pour accepter les politiques suivantes au nom de {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Pour de plus amples informations, veuillez contacter:';
$string['nopermissiontoviewiomadpolicyversion'] = 'Vous n\'avez pas la permission d\'afficher cette version de politique.';
$string['nopolicies'] = 'Il n\'y a aucune politique pour les utilisateurs enregistrés avec une version active.';
$string['selectiomadpolicyandversion'] = 'Utilisez le filtre ci-dessus pour sélectionner la politique et/ou la version';
$string['steppolicies'] = 'Politique {$a->numiomadpolicy} sur {$a->totalpolicies}';
$string['pluginname'] = 'Politiques de l\'IOMAD';
$string['policiesagreements'] = 'Politiques et accords';
$string['importiomadpolicy'] = 'Importer les polices de tool_policy';
$string['iomadpolicy:accept'] = 'Accepter les politiques';
$string['iomadpolicy:acceptbehalf'] = 'Donner le consentement pour les politiques sur quelqu\'un d\'autre\'s behalf';
$string['iomadpolicy:managedocs'] = 'Gérer les politiques';
$string['iomadpolicy:viewacceptances'] = 'Consulter les rapports d\'accord utilisateur';
$string['iomadpolicydocaudience'] = 'Consentement de l\'utilisateur';
$string['iomadpolicydocaudience0'] = 'Tous les utilisateurs';
$string['iomadpolicydocaudience1'] = 'Utilisateurs authentifiés';
$string['iomadpolicydocaudience2'] = 'Invités';
$string['iomadpolicydoccontent'] = 'Politique complète';
$string['iomadpolicydochdriomadpolicy'] = 'Politique';
$string['iomadpolicydochdrversion'] = 'Version du document';
$string['iomadpolicydocname'] = 'Nom';
$string['iomadpolicydocoptional'] = 'Accord facultatif';
$string['iomadpolicydocoptionalyes'] = 'Facultatif';
$string['iomadpolicydocoptionalno'] = 'obligatoire';
$string['iomadpolicydocrevision'] = 'Version';
$string['iomadpolicydocsummary'] = 'Résumé';
$string['iomadpolicydocsummary_help'] = 'Ce texte devrait fournir un résumé de la politique, éventuellement sous une forme simplifiée et facilement accessible, en utilisant un langage clair et clair.';
$string['iomadpolicydoctype'] = 'Type';
$string['iomadpolicydoctype0'] = 'Politique du site';
$string['iomadpolicydoctype1'] = 'Politique de confidentialité';
$string['iomadpolicydoctype2'] = 'Politique des tiers';
$string['iomadpolicydoctype99'] = 'Autres politiques';
$string['iomadpolicydocuments'] = 'Documents de politique générale';
$string['iomadpolicynamedversion'] = 'Politique {$a->name} (version {$a->revision} - {$a->id})';
$string['iomadpolicypriorityagreement'] = 'Afficher la politique avant de présenter d\'autres politiques';
$string['iomadpolicyversionacceptedinbehalf'] = 'Le consentement pour cette politique a été donné en votre nom.';
$string['iomadpolicyversionacceptedinotherlang'] = 'Le consentement à cette version a été donné dans une autre langue.';
$string['previousversions'] = '{$a} versions antérieures';
$string['privacy:metadata:acceptances'] = 'Information sur les accords de politique conclus par les utilisateurs.';
$string['privacy:metadata:acceptances:iomadpolicyversionid'] = 'La version de la politique pour laquelle le consentement a été donné.';
$string['privacy:metadata:acceptances:userid'] = 'L\'utilisateur auquel se rapporte la présente entente de politique.';
$string['privacy:metadata:acceptances:status'] = 'Le statut de l\'accord.';
$string['privacy:metadata:acceptances:lang'] = 'La langue utilisée pour afficher la politique lorsque le consentement a été donné.';
$string['privacy:metadata:acceptances:usermodified'] = 'L\'utilisateur qui a donné son consentement pour la politique, s\'il est fait au nom d\'un autre utilisateur.';
$string['privacy:metadata:acceptances:timecreated'] = 'Le moment où l\'utilisateur a accepté la politique.';
$string['privacy:metadata:acceptances:timemodified'] = 'Le moment où l\'utilisateur a mis à jour son accord.';
$string['privacy:metadata:acceptances:note'] = 'Tout commentaire ajouté par un utilisateur lorsqu\'il donne son consentement au nom d\'un autre utilisateur.';
$string['privacy:metadata:subsystem:corefiles'] = 'L\'outil de politique stocke les fichiers inclus dans le résumé et la politique complète.';
$string['privacy:metadata:versions'] = 'Information sur la version de la politique.';
$string['privacy:metadata:versions:name'] = 'Le nom de la police.';
$string['privacy:metadata:versions:type'] = 'Type de politique.';
$string['privacy:metadata:versions:audience'] = 'Le type d\'utilisateurs requis pour donner leur consentement.';
$string['privacy:metadata:versions:archived'] = 'État de la politique (actif ou inactif).';
$string['privacy:metadata:versions:usermodified'] = 'L\'utilisateur qui a modifié la politique.';
$string['privacy:metadata:versions:timecreated'] = 'Le moment où cette version de la politique a été créée.';
$string['privacy:metadata:versions:timemodified'] = 'Le moment où cette version de la politique a été mise à jour.';
$string['privacy:metadata:versions:iomadpolicyid'] = 'La politique à laquelle cette version est associée.';
$string['privacy:metadata:versions:revision'] = 'Le nom de la révision de cette version de la politique.';
$string['privacy:metadata:versions:summary'] = 'Le résumé de cette version de la politique.';
$string['privacy:metadata:versions:summaryformat'] = 'Format du champ récapitulatif.';
$string['privacy:metadata:versions:content'] = 'Le contenu de cette version de la politique.';
$string['privacy:metadata:versions:contentformat'] = 'Le format du champ de contenu.';
$string['privacysettings'] = 'Paramètres de confidentialité';
$string['readiomadpolicy'] = 'Veuillez lire notre {$a}';
$string['refertofulliomadpolicytext'] = 'Veuillez vous référer à la {$a} complète si vous souhaitez lire le texte.';
$string['response'] = 'Réponse';
$string['responseby'] = 'Réponse';
$string['responseon'] = 'Date';
$string['revokeacknowledgement'] = 'Je reconnais avoir reçu une demande de retrait du consentement au nom du ou des utilisateurs susmentionnés.';
$string['save'] = 'Enregistrer';
$string['saveasdraft'] = 'Enregistrer en tant que projet';
$string['selectuser'] = 'Sélectionnez l\'utilisateur {$a}';
$string['selectusersforconsent'] = 'Sélectionnez les utilisateurs pour donner leur consentement au nom de.';
$string['settodraft'] = 'Créer un nouveau projet';
$string['status'] = 'Situation politique';
$string['statusformtitleaccept'] = 'Acceptation de la politique';
$string['statusformtitledecline'] = 'Baisse de la politique';
$string['statusformtitlerevoke'] = 'Politique de retrait';
$string['statusinfo'] = 'Une politique avec \'Active\' status requires users to give their consent, either when they first log in, or in the case of existing users when they next log in.';
$string['status0'] = 'Projet';
$string['status1'] = 'Actif';
$string['status2'] = 'Inactif';
$string['useracceptanceactionaccept'] = 'Accepter';
$string['useracceptanceactionacceptone'] = 'Accepter {$a}';
$string['useracceptanceactionacceptpending'] = 'Accepter les politiques en suspens';
$string['useracceptanceactiondecline'] = 'Refuser';
$string['useracceptanceactiondeclineone'] = 'Refuser {$a}';
$string['useracceptanceactiondeclinepending'] = 'Baisse des politiques en suspens';
$string['useracceptanceactiondetails'] = 'Détails';
$string['useracceptanceactionrevoke'] = 'Retrait';
$string['useracceptanceactionrevokeall'] = 'Retirez les politiques acceptées';
$string['useracceptanceactionrevokeone'] = 'Retrait de l\'acceptation de {$a}';
$string['useracceptancecount'] = '{$a->agréedcount} de {$a->userscount} ({$a->%}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Contrats d\'utilisation';
$string['useriomadpolicysettings'] = 'Politiques';
$string['usersaccepted'] = 'Accords';
$string['viewarchived'] = 'Voir les versions précédentes';
$string['viewconsentpageforuser'] = 'Affichage de cette page au nom de {$a}';
