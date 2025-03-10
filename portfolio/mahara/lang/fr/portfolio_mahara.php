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
 * Strings for component 'portfolio_mahara', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['enableleap2a'] = 'Activer le soutien de portefeuille Leap2A (exige Mahara 1.3 ou plus)';
$string['err_invalidhost'] = 'Hôte MNet non valide';
$string['err_invalidhost_help'] = 'Ce plugin est mal configuré pour pointer vers un hôte MNet invalide (ou supprimé). Ce plugin s\'appuie sur Moodle Networking pairs avec SSO IDP publié, SSO_SP souscrit, et portefeuille souscrit <b>et</b> publié.';
$string['err_networkingoff'] = 'MNet est éteint';
$string['err_networkingoff_help'] = 'L\'authentification MNet est actuellement désactivée. Veuillez l\'activer avant d\'essayer de configurer ce plugin. Toutes les instances de ce plugin ont été cachées jusqu\'à ce que MNet soit activé. Ils devront alors être mis manuellement à nouveau visible.';
$string['err_nomnetauth'] = 'Le plugin d\'authentification MNet est désactivé';
$string['err_nomnetauth_help'] = 'Le plugin d\'authentification MNet est désactivé, mais est nécessaire pour ce service';
$string['err_nomnethosts'] = 'S\'applique sur MNet';
$string['err_nomnethosts_help'] = 'Ce plugin s\'appuie sur des pairs MNet avec SSO IDP publié, SSO SP souscrit, des services de portefeuille publiés <b>et</b> souscrits ainsi que le plugin d\'authentification MNet. Toutes les instances de ce plugin ont été cachées jusqu\'à ce que ces conditions soient remplies. Ils auront ensuite besoin manuellement d\'un réglage à nouveau visible.';
$string['failedtojump'] = 'Impossible de démarrer la communication avec le serveur distant';
$string['failedtoping'] = 'Impossible de démarrer la communication avec le serveur distant : {$a}';
$string['mnethost'] = 'Hôte MNet';
$string['mnet_nofile'] = 'Impossible de trouver le fichier dans l\'objet de transfert - erreur bizarre';
$string['mnet_nofilecontents'] = 'Fichier trouvé dans l\'objet de transfert, mais n\'a pas pu obtenir de contenu - erreur bizarre: {$a}';
$string['mnet_noid'] = 'Impossible de trouver l\'enregistrement de transfert correspondant pour ce jeton';
$string['mnet_notoken'] = 'Impossible de trouver un jeton correspondant à ce transfert';
$string['mnet_wronghost'] = 'L\'hôte distant ne correspond pas à l\'enregistrement de transfert pour ce jeton';
$string['pf_description'] = 'Permettre aux utilisateurs de pousser le contenu de Moodle à cet hôte<br />S\'abonner à <b>et</b> publier ce service pour permettre aux utilisateurs authentifiés de votre site de pousser le contenu à {$a}<br /><ul><li><em>Dependency</em>: Vous devez également <strong>publier</strong> le service d\'OSP (Identifier le fournisseur) à {$a}.</li><li><em>Dependency</em>: Vous devez également vous inscrire au service de l\'OSP (fournisseur de services) sur {$a}</li><li><em>Dependency</em>: Vous devez également activer le plugin d\'authentification MNet.</li></ul><br />';
$string['pf_name'] = 'Services de portefeuille';
$string['pluginname'] = 'Mahara ePortfolio';
$string['privacy:metadata'] = 'Ce plugin envoie des données externes à une application Mahara liée. Il ne stocke pas les données localement.';
$string['privacy:metadata:data'] = 'Données personnelles transmises par le sous-système portefeuille.';
$string['senddisallowed'] = 'Vous ne pouvez pas transférer des fichiers à Mahara en ce moment';
$string['url'] = 'URL';
