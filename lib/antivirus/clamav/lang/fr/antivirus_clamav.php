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
 * Strings for component 'antivirus_clamav', language 'en'.
 *
 * @package    antivirus_clamav
 * @copyright  2015 Ruslan Kabalin, Lancaster University.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['antivirusfailed'] = 'Il y a un problème avec AntiVirus en ce moment. Votre fichier {$a->item} n\'a pas été téléchargé. Veuillez réessayer plus tard.';
$string['configclamactlikevirus'] = 'Traiter des fichiers comme des virus';
$string['configclamdonothing'] = 'Traiter les fichiers comme OK';
$string['configclamfailureonupload'] = 'Si \'Treat files as OK\' is selected, files will be moved to the destination directory. If \'Refuse upload, try again\' is selected, the user will be prompted to try again later. If \'Treat files like viruses\' is selected, files will be moved into the quarantine area, or deleted. Warning: With this option, if for some reason clam fails to run (usually because of an invalid pathtoclam), then ALL uploaded files will be moved to the given quarantine area, or deleted.';
$string['configclamtryagain'] = 'Refuser le téléchargement, réessayer';
$string['clamfailed'] = 'ClamAV a échoué à courir. Le message d\'erreur de retour était « {$a} ». Voici la sortie de ClamAV:';
$string['clamfailureonupload'] = 'Sur la défaillance de ClamAV';
$string['errorcantopensocket'] = 'La connexion à la socket de domaine Unix a entraîné une erreur {$a}';
$string['errorclamavnoresponse'] = 'ClamAV ne répond pas; vérifiez l\'état de fonctionnement du démon.';
$string['errornounixsocketssupported'] = 'Le transport de socket de domaine Unix n\'est pas pris en charge sur ce système. Utilisez plutôt l\'option ligne de commande.';
$string['invalidpathtoclam'] = 'Le chemin vers ClamAV, {$a}, est invalide.';
$string['pathtoclam'] = 'Ligne de commande';
$string['pathtoclamdesc'] = 'Si la méthode d\'exécution est définie à "ligne de commande", saisissez ici le chemin vers ClamAV. Sur Linux, ce sera /usr/bin/clamscan ou /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Prise de domaine Unix';
$string['pathtounixsocketdesc'] = 'Si la méthode d\'exécution est définie dans "Unix domain socket", entrez ici le chemin vers ClamAV Unix socket. Sur Debian Linux, ce sera /var/run/clamav/clamd.ctl. S\'il vous plaît assurez-vous que clamav démon a lu l\'accès aux fichiers téléchargés, la façon la plus facile de s\'assurer que est d\'ajouter \'clamav\' user to your webserver group (\'www-data\' on Debian Linux).';
$string['pluginname'] = 'antivirus ClamAV';
$string['privacy:metadata'] = 'Le plugin antivirus ClamAV ne stocke aucune donnée personnelle.';
$string['quarantinedir'] = 'Répertoire de quarantaine';
$string['runningmethod'] = 'Méthode de fonctionnement';
$string['runningmethoddesc'] = 'Méthode de fonctionnement de ClamAV. La ligne de commande est utilisée par défaut, mais sur les systèmes Unix on peut obtenir de meilleures performances en utilisant des sockets système.';
$string['runningmethodcommandline'] = 'Ligne de commande';
$string['runningmethodunixsocket'] = 'Prise de domaine Unix';
$string['runningmethodtcpsocket'] = 'Socket TCP';
$string['tcpsockethost'] = 'Nom de la socket TCP';
$string['tcpsockethostdesc'] = 'Nom de domaine du serveur ClamAV';
$string['tcpsocketport'] = 'Port de socket TCP';
$string['tcpsocketportdesc'] = 'Le port à utiliser lors de la connexion à ClamAV';
$string['unknownerror'] = 'Il y a eu une erreur inconnue avec ClamAV.';
$string['tries'] = 'Essais de numérisation';
$string['tries_desc'] = 'Nombre de tentatives faites par ClamAV s\'il y a une erreur pendant le processus de numérisation.';
$string['tries_notice'] = 'Clamav scanning has tried {$a->tries} time(s).
{$a->notice}';
