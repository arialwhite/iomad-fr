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
 * Strings for component 'enrol_paypal', language 'en'.
 *
 * @package    enrol_paypal
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Attribuer un rôle';
$string['businessemail'] = 'Email d\'affaires PayPal';
$string['businessemail_desc'] = 'L\'adresse e-mail de votre compte PayPal';
$string['cost'] = 'Frais d \' inscription';
$string['costerror'] = 'Le coût d\'inscription n\'est pas numérique';
$string['costorkey'] = 'Veuillez choisir l\'une des méthodes d\'inscription suivantes.';
$string['currency'] = 'Monnaie';
$string['defaultrole'] = 'Attribution du rôle par défaut';
$string['defaultrole_desc'] = 'Sélectionnez le rôle qui devrait être assigné aux utilisateurs pendant les inscriptions PayPal';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si activé, les utilisateurs peuvent être inscrits jusqu\'à cette date seulement.';
$string['enrolenddaterror'] = 'La date de fin d\'inscription ne peut être antérieure à la date de début';
$string['enrolperiod'] = 'Durée des inscriptions';
$string['enrolperiod_desc'] = 'Durée par défaut de validité de l\'inscription. Si elle est fixée à zéro, la durée d\'inscription sera illimitée par défaut.';
$string['enrolperiod_help'] = 'Durée de validité de l\'inscription, à partir du moment où l\'utilisateur est inscrit. En cas de handicap, la durée de l\'inscription sera illimitée.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si activé, les utilisateurs peuvent être inscrits à partir de cette date seulement.';
$string['errdisabled'] = 'Le plugin d\'inscription PayPal est désactivé et ne gère pas les notifications de paiement.';
$string['erripninvalid'] = 'La notification de paiement instantané n\'a pas été vérifiée par PayPal.';
$string['errpaypalconnect'] = 'Impossible de se connecter à {$a->url} pour vérifier la notification de paiement instantanée : {$a->résultats}';
$string['expiredaction'] = 'Action d\'expiration des inscriptions';
$string['expiredaction_help'] = 'Sélectionnez l\'action à effectuer lorsque l\'inscription des utilisateurs expire. Veuillez noter que certaines données et paramètres utilisateur sont effacés du cours pendant le non-inscription.';
$string['mailadmins'] = 'Prévenez l\'administrateur';
$string['mailstudents'] = 'Informer les élèves';
$string['mailteachers'] = 'Informer les enseignants';
$string['messageprovider:paypal_enrolment'] = 'Messages d\'inscription PayPal';
$string['nocost'] = 'Il n\'y a aucun coût associé à l\'inscription à ce cours!';
$string['paypal:config'] = 'Configurer les instances d\'inscription PayPal';
$string['paypal:manage'] = 'Gérer les utilisateurs inscrits';
$string['paypal:unenrol'] = 'Unenrol utilisateurs du cours';
$string['paypal:unenrolself'] = 'Se désinscrire du cours';
$string['paypalaccepted'] = 'Paiements PayPal acceptés';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Le module PayPal vous permet de configurer des cours payants. Si le coût d\'un cours est nul, les étudiants ne sont pas invités à payer pour l\'entrée. Il y a un coût à l\'échelle du site que vous définissez ici comme un par défaut pour l\'ensemble du site, puis un réglage de cours que vous pouvez définir pour chaque cours individuellement. Le coût du cours dépasse le coût du site.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informations sur les transactions PayPal pour les inscriptions PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Adresse électronique ou identifiant de compte PayPal du destinataire du paiement (c\'est-à-dire le commerçant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'L\'identité du cours qui est vendu.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'L\'identité de l\'instance d\'inscription dans le cours.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Le nom complet du cours que son inscription a été vendue.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Une note qui a été saisie par l\'acheteur dans le champ de la note de paiement du site PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nom complet de l\'acheteur.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Dans le cas d\'un remboursement, d\'un renversement ou d\'un renversement annulé, il s\'agirait de l\'ID de la transaction initiale.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'L\'état du paiement.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Détermine si le paiement a été financé par un eCheck (echeck), ou a été financé par PayPal solde, carte de crédit, ou transfert instantané (instantané).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'La raison pour laquelle le statut de paiement est en attente (si tel est le cas).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'La raison pour laquelle le statut de paiement est inversé, remboursé, annulé ou refusé (si le statut est l\'un d\'eux).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Adresse électronique principale du destinataire du paiement (c\'est-à-dire le marchand).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Numéro de compte PayPal unique du destinataire du paiement (c.-à-d. le marchand).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Montant de l\'impôt sur le paiement.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Le moment où Moodle est informé par PayPal du paiement.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Le marchand\'s original transaction identification number for the payment from the buyer, against which the case was registered';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'L\'identité de l\'utilisateur qui a acheté l\'inscription au cours.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Le plugin d\'inscription PayPal transmet les données utilisateur de Moodle au site PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adresse de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Ville de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Pays de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Une chaîne séparée par un trait d\'union qui contient ID de l\'utilisateur (l\'acheteur), ID du cours, ID de l\'instance d\'inscription.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Adresse électronique de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Prénom de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Nom de famille de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nom complet de l\'acheteur.';
$string['processexpirationstask'] = 'L\'inscription PayPal envoie les notifications d\'expiration tâche';
$string['sendpaymentbutton'] = 'Envoyer le paiement via PayPal';
$string['status'] = 'Autoriser les inscriptions PayPal';
$string['status_desc'] = 'Permettre aux utilisateurs d\'utiliser PayPal pour s\'inscrire à un cours par défaut.';
$string['transactions'] = 'Opérations PayPal';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} » ?';
