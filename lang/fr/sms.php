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
 * Strings for component 'sms', language 'en'
 *
 * @package    core
 * @category   string
 * @copyright  2024 Andrew Lyons <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['actions'] = 'Actions';
$string['countrycode'] = 'Code pays par défaut';
$string['countrycode_help'] = 'Code pays à ajouter aux numéros de téléphone si les utilisateurs font\'t enter their own country code. Enter the number without the leading \'+\' symbol.';
$string['createnewgateway'] = 'Créer une nouvelle passerelle SMS';
$string['delete_sms_gateway'] = 'Supprimer la passerelle SMS';
$string['delete_sms_gateway_confirmation'] = 'Cela supprimera la passerelle SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Modifier {$a->gateway} passerelle SMS';
$string['gateway'] = 'Passerelle';
$string['gateway_name'] = 'Nom de la passerelle';
$string['manage_sms_gateways'] = 'Gérer les passerelles SMS';
$string['phonenumbernotvalid'] = 'Format du numéro de téléphone non reconnu : {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Stocke les messages envoyés par SMS';
$string['privacy:metadata:sms_messages:content'] = 'Texte du message';
$string['privacy:metadata:sms_messages:id'] = 'L\'ID du message';
$string['privacy:metadata:sms_messages:recipient'] = 'Le numéro de téléphone que le message a été envoyé à';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'L\'utilisateur à qui le message a été envoyé, s\'il est connu';
$string['privacy:metadata:sms_messages:status'] = 'État du message';
$string['privacy:metadata:sms_messages:timecreated'] = 'Le moment où le message a été créé';
$string['privacy:sms:sensitive_not_shown'] = 'Le contenu de ce message n\'était pas stocké car il était marqué comme contenant du contenu sensible.';
$string['select_sms_gateways'] = 'Fournisseur de passerelle SMS';
$string['sms'] = 'SMS';
$string['status:gateway_failed'] = 'La passerelle n\'a pas envoyé le message';
$string['status:gateway_not_available'] = 'La passerelle n\'est pas disponible pour envoyer le message';
$string['status:gateway_queued'] = 'Le message est en attente pour être envoyé par la passerelle';
$string['status:gateway_rejected'] = 'La passerelle a rejeté le message';
$string['status:gateway_sent'] = 'Le message a été envoyé par la passerelle';
$string['status:message_over_size'] = 'Le message est trop grand pour être envoyé par la passerelle';
$string['status:unknown'] = 'Impossible de déterminer l\'état du message';
$string['sms_gateway_deleted'] = '{$a->gateway} passerelle SMS supprimée';
$string['sms_gateway_delete_failed'] = 'Impossible de supprimer la passerelle SMS {$a->gateway}. La passerelle est en service ou là\'s a database issue. Check if the gateway is active or contact your database administrator for help.';
$string['sms_gateway_disable_failed'] = 'Impossible de désactiver la passerelle SMS. La passerelle est en service ou là\'s a database issue. Check if the gateway is active or contact your database administrator for help.';
$string['sms_gateways'] = 'passerelles SMS';
$string['sms_gateways_info'] = 'Créer et gérer des passerelles SMS pour envoyer des messages SMS depuis votre site.';
