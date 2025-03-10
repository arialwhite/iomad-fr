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
 * Strings for component aiprovider_azureai, language 'en'.
 *
 * @package    aiprovider_azureai
 * @copyright  2024 Matt Porritt <matt.porritt@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action_apiversion'] = 'Version de l\'API';
$string['action_deployment'] = 'ID de déploiement';
$string['action_deployment_desc'] = 'L\'ID de déploiement qui se rapporte au paramètre API utilisé par le fournisseur pour cette action.';
$string['action_systeminstruction'] = 'Enseignement du système';
$string['action_systeminstruction_desc'] = 'Cette instruction est envoyée au modèle AI avec l\'utilisateur\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['apikey'] = 'Clé API Azure AI';
$string['apikey_desc'] = 'Saisissez votre clé API Azure AI.';
$string['deployment'] = 'Nom de déploiement de l\'API d\'Azure AI';
$string['deployment_desc'] = 'Saisissez le nom du déploiement de votre API Azure AI.';
$string['enableglobalratelimit'] = 'Fixer une limite de taux à l\'échelle du site';
$string['enableglobalratelimit_desc'] = 'Limitez le nombre de demandes que le fournisseur d\'API Azure peut recevoir sur tout le site toutes les heures.';
$string['enableuserratelimit'] = 'Définir la limite de taux d\'utilisation';
$string['enableuserratelimit_desc'] = 'Limitez le nombre de requêtes que chaque utilisateur peut faire au fournisseur d\'API Azure AI toutes les heures.';
$string['endpoint'] = 'Paramètres de l\'API Azure AI';
$string['endpoint_desc'] = 'Saisissez l\'URL de votre API Azure AI dans le format suivant : https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['globalratelimit'] = 'Nombre maximal de demandes à l\'échelle du site';
$string['globalratelimit_desc'] = 'Le nombre de demandes à l\'échelle du site a été autorisé par heure.';
$string['pluginname'] = 'Fournisseur d\'API Azure AI';
$string['privacy:metadata'] = 'Le plugin fournisseur d\'API Azure AI ne stocke aucune donnée personnelle.';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = 'Cette information est envoyée à l\'API Azure afin de générer une réponse. Les paramètres de votre compte Azure AI peuvent changer la façon dont Microsoft stocke et conserve ces données. Aucune donnée utilisateur n\'est explicitement envoyée à Microsoft ou stockée dans Moodle LMS par ce plugin.';
$string['privacy:metadata:aiprovider_azureai:model'] = 'Le modèle utilisé pour générer la réponse.';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = 'Lors de la génération d\'images le nombre d\'images utilisées dans la réponse.';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = 'L\'utilisateur a entré l\'invite de texte utilisée pour générer la réponse.';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = 'Lors de la génération d\'images le format de la réponse.';
$string['userratelimit'] = 'Nombre maximal de demandes par utilisateur';
$string['userratelimit_desc'] = 'Nombre de demandes autorisées par heure, par utilisateur.';
