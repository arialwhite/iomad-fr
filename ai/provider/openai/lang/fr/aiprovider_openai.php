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
 * Strings for component aiprovider_openai, language 'en'.
 *
 * @package    aiprovider_openai
 * @copyright  2024 Matt Porritt <matt.porritt@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:generate_image:endpoint'] = 'Paramètres de l\'API';
$string['action:generate_image:model'] = 'Modèle AI';
$string['action:generate_image:model_desc'] = 'Le modèle utilisé pour générer des images à partir d\'invites de l\'utilisateur.';
$string['action:generate_text:endpoint'] = 'Paramètres de l\'API';
$string['action:generate_text:model'] = 'Modèle AI';
$string['action:generate_text:model_desc'] = 'Le modèle utilisé pour générer la réponse texte.';
$string['action:generate_text:systeminstruction'] = 'Enseignement du système';
$string['action:generate_text:systeminstruction_desc'] = 'Cette instruction est envoyée au modèle AI avec l\'utilisateur\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action:summarise_text:endpoint'] = 'Paramètres de l\'API';
$string['action:summarise_text:model'] = 'Modèle AI';
$string['action:summarise_text:model_desc'] = 'Le modèle utilisé pour résumer le texte fourni.';
$string['action:summarise_text:systeminstruction'] = 'Enseignement du système';
$string['action:summarise_text:systeminstruction_desc'] = 'Cette instruction est envoyée au modèle AI avec l\'utilisateur\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['apikey'] = 'Clé API OpenAI';
$string['apikey_desc'] = 'Obtenez une clé de <a href="https://platform.openai.com/account/api-keys"> OpenAI Platform API keys</a>.';
$string['enableglobalratelimit'] = 'Fixer une limite de taux à l\'échelle du site';
$string['enableglobalratelimit_desc'] = 'Limitez le nombre de demandes que le fournisseur d\'API OpenAI peut recevoir sur tout le site toutes les heures.';
$string['enableuserratelimit'] = 'Définir la limite de taux d\'utilisation';
$string['enableuserratelimit_desc'] = 'Limitez le nombre de demandes que chaque utilisateur peut faire au fournisseur d\'API OpenAI toutes les heures.';
$string['globalratelimit'] = 'Nombre maximal de demandes à l\'échelle du site';
$string['globalratelimit_desc'] = 'Le nombre de demandes à l\'échelle du site a été autorisé par heure.';
$string['orgid'] = 'ID de l\'organisation OpenAI';
$string['orgid_desc'] = 'Obtenez un identifiant d\'organisation OpenAI de votre <a href="https://platform.openai.com/account/org-settings"> OpenAI Compte plate-forme</a>.';
$string['pluginname'] = 'Fournisseur d\'API OpenAI';
$string['privacy:metadata'] = 'Le plugin fournisseur d\'API OpenAI ne stocke aucune donnée personnelle.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Cette information est envoyée à l\'API OpenAI afin de générer une réponse. Les paramètres de votre compte OpenAI peuvent changer la façon dont OpenAI stocke et conserve ces données. Aucune donnée utilisateur n\'est explicitement envoyée à OpenAI ou stockée dans Moodle LMS par ce plugin.';
$string['privacy:metadata:aiprovider_openai:model'] = 'Le modèle utilisé pour générer la réponse.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'Lors de la génération d\'images le nombre d\'images utilisées dans la réponse.';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'L\'utilisateur a entré l\'invite de texte utilisée pour générer la réponse.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'Lors de la génération d\'images le format de la réponse.';
$string['userratelimit'] = 'Nombre maximal de demandes par utilisateur';
$string['userratelimit_desc'] = 'Nombre de demandes autorisées par heure, par utilisateur.';
