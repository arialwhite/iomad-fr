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
 * Strings for component 'payment', language 'en'
 *
 * @package   core_payment
 * @copyright 2019 Shamim Rezaie <shamim@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accountarchived'] = 'Archivé';
$string['accountdeleteconfirm'] = 'Si ce compte a des paiements antérieurs, il sera archivé, sinon ses données de configuration seront définitivement supprimées. Voulez-vous vraiment continuer ?';
$string['accountconfignote'] = 'Les passerelles de paiement pour ce compte seront configurées séparément';
$string['accountidnumber'] = 'Numéro d\'identification';
$string['accountidnumber_help'] = 'Le numéro d\'identification n\'est utilisé que lorsque le compte est associé à des systèmes externes et n\'est affiché nulle part sur le site. Si le compte a un nom de code officiel, il peut être entré, sinon le champ peut être laissé vide.';
$string['accountname'] = 'Nom du compte';
$string['accountname_help'] = 'Comment ce compte sera identifié pour les enseignants ou les gestionnaires qui établissent les paiements (par exemple dans le plugin d\'inscription au cours).';
$string['accountnotavailable'] = 'Non disponible';
$string['paymentaccountsexplained'] = 'Créez un ou plusieurs comptes de paiement pour ce site. Chaque compte comprend la configuration des passerelles de paiement disponibles. La personne qui configure les paiements sur le site (par exemple, le paiement pour l\'inscription au cours) pourra choisir parmi les comptes disponibles.';
$string['createaccount'] = 'Créer un compte de paiement';
$string['deleteorarchive'] = 'Supprimer ou archiver';
$string['editpaymentaccount'] = 'Modifier le compte de paiement';
$string['eventaccountcreated'] = 'Compte de paiement créé';
$string['eventaccountdeleted'] = 'Compte de paiement supprimé';
$string['eventaccountupdated'] = 'Compte de paiement actualisé';
$string['feeincludesurcharge'] = '{$a->fee} (comprend {$a->surcharge}% de supplément pour l\'utilisation de ce type de paiement)';
$string['gatewaycannotbeenabled'] = 'La passerelle de paiement ne peut pas être activée car la configuration est incomplète.';
$string['gatewaydisabled'] = 'Handicapé';
$string['gatewayenabled'] = 'Activé';
$string['gatewaynotfound'] = 'Portail introuvable';
$string['gotomanageplugins'] = 'Activer et désactiver les passerelles de paiement et définir les suppléments via {$a}.';
$string['gotopaymentaccounts'] = 'Vous pouvez créer plusieurs comptes de paiement en utilisant l\'une de ces passerelles sur la page {$a}';
$string['hidearchived'] = 'Masquer archivé';
$string['noaccountsavilable'] = 'Aucun compte de paiement n\'est disponible.';
$string['nocurrencysupported'] = 'Aucun paiement dans une devise n\'est pris en charge. Assurez-vous qu\'au moins une passerelle de paiement est activée.';
$string['nogateway'] = 'Aucune passerelle de paiement ne peut être utilisée.';
$string['nogatewayselected'] = 'Vous devez d\'abord sélectionner une passerelle de paiement.';
$string['payments'] = 'Paiements';
$string['paymentaccount'] = 'Compte de paiement';
$string['paymentaccounts'] = 'Comptes de paiement';
$string['privacy:metadata:database:payments'] = 'Informations sur les paiements.';
$string['privacy:metadata:database:payments:amount'] = 'Le montant du paiement.';
$string['privacy:metadata:database:payments:currency'] = 'La monnaie du paiement.';
$string['privacy:metadata:database:payments:gateway'] = 'La passerelle de paiement utilisée pour le paiement.';
$string['privacy:metadata:database:payments:timecreated'] = 'Le moment où le paiement a été effectué.';
$string['privacy:metadata:database:payments:timemodified'] = 'La dernière mise à jour du relevé de paiement.';
$string['privacy:metadata:database:payments:userid'] = 'L\'utilisateur qui a effectué le paiement.';
$string['restoreaccount'] = 'Restauration';
$string['selectpaymenttype'] = 'Sélectionnez le type de paiement';
$string['showarchived'] = 'Afficher archivé';
$string['supportedcurrencies'] = 'Monnaies soutenues';
$string['surcharge'] = 'Surcharge (pourcentage)';
$string['surcharge_desc'] = 'Le supplément est un pourcentage supplémentaire facturé aux utilisateurs qui choisissent de payer en utilisant cette passerelle de paiement.';
