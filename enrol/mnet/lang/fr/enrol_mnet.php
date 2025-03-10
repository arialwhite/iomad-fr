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
 * English strings for MNet enrolment plugin.
 *
 * @package    enrol_mnet
 * @copyright  2010 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['error_multiplehost'] = 'Un exemple de plugin d\'inscription MNet existe déjà pour cet hôte. Une seule instance par hôte et/ou une seule instance pour \'All hosts\' is allowed.';
$string['instancename'] = 'Nom de la méthode d\'inscription';
$string['instancename_help'] = 'Vous pouvez éventuellement renommer cette instance de la méthode d\'inscription MNet. Si vous laissez ce champ vide, le nom de l\'instance par défaut sera utilisé, contenant le nom de l\'hôte distant et le rôle assigné à leurs utilisateurs.';
$string['mnet:config'] = 'Configurer les instances d\'inscription de MNet';
$string['mnet_enrol_description'] = 'Publier ce service pour permettre aux administrateurs de {$a} d\'inscrire leurs étudiants aux cours que vous avez créés sur votre serveur.<br/><ul><li><em>Dependency</em>: Vous devez également vous inscrire au service de l\'OSP (fournisseur d\'identité) sur {$a}.</li><li><em>Dependency</em>: Vous devez également <strong>publier</strong> le service de l\'OSS (fournisseur de services) à {$a}.</li></ul><br/>Souscrivez-vous à ce service pour pouvoir inscrire vos étudiants à des cours sur {$a}.<br/><ul><li><em>Dependency</em>: Vous devez aussi <strong>publier</strong> le service de l\'OSP (fournisseur d\'identité) à {$a}.</li><li><em>Dependency</em>: Vous devez également <strong>s\'abonner</strong> au service de l\'OSS (fournisseur de services) sur {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Service d \' inscription à distance';
$string['pluginname'] = 'Inscriptions à distance dans le réseau MNet';
$string['pluginname_desc'] = 'Permet à l\'hôte MNet distant d\'inscrire ses utilisateurs à nos cours.';
$string['remotesubscriber'] = 'Hôte distant';
$string['remotesubscriber_help'] = 'Sélectionner \'All hosts\' to open this course for all MNet peers we are offering the remote enrolment service to. Or choose a single host to make this course available for their users only.';
$string['remotesubscribersall'] = 'Tous les hôtes';
$string['roleforremoteusers'] = 'Rôle pour leurs utilisateurs';
$string['roleforremoteusers_help'] = 'Quel sera le rôle des utilisateurs distants de l\'hôte sélectionné.';
$string['privacy:metadata'] = 'Le plugin distant d\'inscription MNet ne stocke pas de données personnelles.';
