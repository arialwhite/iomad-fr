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
 * Strings for component 'ai', language 'en'
 *
 * @package    core
 * @category   string
 * @copyright  2024 Matt Porritt <matt.porritt@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['acceptai'] = 'Accepter et poursuivre';
$string['action'] = 'Décision';
$string['action_generate_image'] = 'Générer l\'image';
$string['action_generate_image_desc'] = 'Génére une image basée sur une invite de texte.';
$string['action_generate_text'] = 'Générer du texte';
$string['action_generate_text_desc'] = 'Génére du texte basé sur une invite de texte.';
$string['action_generate_text_instruction'] = 'You will receive a text input from the user. Your task is to generate text based on their request. Follow these important instructions:
    1. Return the summary in plain text only.
    2. Do not include any markdown formatting, greetings, or platitudes.';
$string['action_summarise_text'] = 'Résumé du texte';
$string['action_summarise_text_desc'] = 'Résume le contenu du texte sur une page de cours.';
$string['action_summarise_text_instruction'] = 'You will receive a text input from the user. Your task is to summarize the provided text. Follow these guidelines:
    1. Condense: Shorten long passages into key points.
    2. Simplify: Make complex information easier to understand, especially for learners.

Important Instructions:
    1. Return the summary in plain text only.
    2. Do not include any markdown formatting, greetings, or platitudes.
    3. Focus on clarity, conciseness, and accessibility.

Ensure the summary is easy to read and effectively conveys the main points of the original text.';
$string['action_translate_text'] = 'Traduire le texte';
$string['action_translate_text_desc'] = 'Traduire le texte fourni d\'une langue à l\'autre.';
$string['actionsettingprovider'] = 'Paramètres d\'action {$a}';
$string['actionsettingprovider_desc'] = 'Ces paramètres contrôlent comment le {$a->providername} effectue l\'action {$a->actionname}.';
$string['ai'] = 'AI';
$string['aiplacements'] = 'Placements AI';
$string['aiproviders'] = 'Fournisseurs d\'IA';
$string['aiusagepolicy'] = 'Politique d\'utilisation de l\'IA';
$string['availableplacements'] = 'Choisissez où les actions d\'IA sont disponibles';
$string['availableplacements_desc'] = 'Les Placements définissent comment et où les actions d\'IA peuvent être utilisées dans votre site. Vous pouvez choisir quelles actions sont disponibles dans chaque placement à travers les paramètres.';
$string['availableproviders'] = 'Gérer les fournisseurs d\'IA connectés à votre LMS';
$string['availableproviders_desc'] = 'Les fournisseurs d\'IA ajoutent des fonctionnalités d\'IA à votre site via \'actions\' like text summarisation or image generation.<br/>
You can manage the actions for each provider in their settings.';
$string['contentwatermark'] = 'Produit par l\'IA';
$string['declineaipolicy'] = 'Refuser';
$string['manageaiplacements'] = 'Gérer les placements d\'IA';
$string['manageaiproviders'] = 'Gérer les fournisseurs d\'IA';
$string['noproviders'] = 'Cette action n\'est pas disponible. Les fournisseurs d\'AI</a> ne sont pas configurés pour cette action.';
$string['placement'] = 'Placement';
$string['placementactionsettings'] = 'Actions';
$string['placementactionsettings_desc'] = 'Les actions d\'IA disponibles pour ce placement.';
$string['placementsettings'] = 'Paramètres spécifiques au placement';
$string['placementsettings_desc'] = 'Ces paramètres contrôlent la connexion de ce placement AI au service AI et aux opérations connexes.';
$string['privacy:metadata:ai_action_generate_image'] = 'Une table stockant les requêtes de génération d\'images faites par les utilisateurs.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Le rapport d\'aspect des images générées.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Le nombre d\'images générées.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'L\'invite pour la demande de génération d\'image.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'La qualité des images générées.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'L\'invite révisée des images générées.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'URL source des images générées.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Le style des images générées.';
$string['privacy:metadata:ai_action_generate_text'] = 'Une table stockant les requêtes de génération de texte faites par les utilisateurs.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Les jetons d\'achèvement utilisés pour générer le texte.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Le hachage unique représentant l\'état/version du modèle et du contenu.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Le texte réel généré par le modèle AI basé sur l\'invite d\'entrée.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'L\'invite pour la demande de génération de texte.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Les jetons d\'invite utilisés pour générer le texte.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'L\'identité de la réponse.';
$string['privacy:metadata:ai_action_register'] = 'Une table stockant les requêtes d\'action faites par les utilisateurs.';
$string['privacy:metadata:ai_action_register:actionid'] = 'L\'identification de la demande d\'action.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Le nom de l\'action de la demande.';
$string['privacy:metadata:ai_action_register:provider'] = 'Le nom du fournisseur qui a traité la demande.';
$string['privacy:metadata:ai_action_register:success'] = 'L\'état de la demande.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'L\'heure complète de la demande.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Le temps créé de la demande.';
$string['privacy:metadata:ai_action_register:userid'] = 'L\'ID de l\'utilisateur qui a fait la demande.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Une table stockant la synthèse des requêtes de texte faites par les utilisateurs.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Les jetons d\'achèvement utilisés pour résumer le texte.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Le hachage unique représentant l\'état/version du modèle et du contenu.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Le texte réel généré par le modèle AI basé sur l\'invite d\'entrée.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'L\'invite pour la requête de résumé de texte.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Les jetons d\'invite utilisés pour résumer le texte.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'L\'identité de la réponse.';
$string['privacy:metadata:ai_policy_register'] = 'Un tableau stockant l\'état d\'acceptation de la politique d\'IA pour chaque utilisateur.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'L\'ID du contexte dont les données ont été enregistrées.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Le moment où l\'utilisateur a accepté la politique d\'IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'L\'ID de l\'utilisateur dont les données ont été enregistrées.';
$string['provider'] = 'Fournisseur';
$string['provideractionsettings'] = 'Actions';
$string['provideractionsettings_desc'] = 'Choisissez et configurez les actions que le {$a} peut effectuer sur votre site.';
$string['providers'] = 'Fournisseurs';
$string['providersettings'] = 'Paramètres';
$string['userpolicy'] = '<h4><strong>Welcome to the new AI feature!</strong></h4>
<p>This Artificial Intelligence (AI) feature is based solely on external Large Language Models (LLM) to improve your learning and teaching experience. Before you start using these AI services, please read this usage policy.</p>
<h4><strong>Accuracy of AI-generated content</strong></h4>
<p>AI can give useful suggestions and information, but its accuracy may vary. You should always double-check the information provided to make sure it\'s accurate, complete, and suitable for your specific situation.</p>
<h4><strong>How your data is processed</strong></h4>
<p>This AI feature uses external Large Language Models (LLM). If you use this feature, any information or personal data you share will be handled according to the privacy policy of those LLMs. We recommend that you read their privacy policy to understand how they will handle your data. Additionally, a record of your interactions with the AI features may be saved in this site.</p>
<p>If you have questions about how your data is processed, please check with your teachers or learning organisation.</p>
<p>By continuing, you acknowledge that you understand and agree to this policy.</p>';
