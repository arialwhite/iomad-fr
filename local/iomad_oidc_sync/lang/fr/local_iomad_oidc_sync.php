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
 * @package   local_iomad_oidc_sync
 * @copyright 2024 Derick Turner
 * @author    Derick Turner
 * Based on code provided by Jacob Kindle @ Cofense https://cofense.com/
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Strings for component 'local_iomad_oidc_sync', language 'en'
 */

$string['pluginname'] = 'Synchronisation OIDC de l\'IOMAD';
$string['privacy:metadata'] = 'Le plugin de synchronisation OIDC IOMAD affiche uniquement les données stockées dans d\'autres emplacements.';
$string['iomad_oidc_sync:view'] = 'Afficher l\'état de synchronisation de l\'OIDC de l\'IOMAD';
$string['iomad_oidc_sync:manage'] = 'Gérer les paramètres de synchronisation OIDC IOMAD';
$string['agreeconsent'] = 'Consentement';
$string['approvalset'] = 'Approbation de la synchronisation OIDC IOMAD accordée avec succès';
$string['configerror'] = 'Configuration non valide détectée.';
$string['configlogs'] = 'Configurer les journaux';
$string['consent_title'] = 'IOMAD OIDC accord de la société de synchronisation';
$string['consentlink'] = 'Soumettre le consentement avec Microsoft';
$string['loglink'] = 'Afficher le journal de configuration';
$string['oidc_sync_task'] = 'Tâche de synchronisation OIDC de l\'IOMAD';
$string['boilerplate'] = 'Pour configurer les tâches de synchronisation OIDC, vous devez d\'abord fournir votre TENANTNAME ou GUID, puis cliquer sur le lien appoval. Une fois que vous avez approuvé, si la connexion ne s\'affiche pas en vert, cliquez sur la croix rouge pour vérifier.'; 
$string['settenantnameorguid'] = 'Définir le nom du locataire ou GUID';
$string['syncgroupid'] = 'ID de l\'objet optionnel du groupe à synchroniser';
$string['tenantnameorguid'] = 'Nom du locataire ou GUID';
$string['tenantnameorguid_changed_success'] = 'Options de l\'entreprise sauvegardées avec succès';
$string['tenantnameorguid_changed_warning'] = 'Options de l\'entreprise sauvegardées avec succès.<br> En raison du changement de nom du locataire ou de la valeur GUID, vous devrez peut-être passer par le processus d\'approbation à nouveau';
$string['unsuspendonsync'] = 'Utilisateurs existants';
$string['useroptions'] = 'Avec les utilisateurs supprimés nous';
