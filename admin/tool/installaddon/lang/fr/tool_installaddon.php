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
 * Strings for the tool_installaddon component.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   2013 David Mudrak <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Remerciements';
$string['acknowledgementtext'] = 'Je comprends qu\'il est de ma responsabilité d\'avoir des sauvegardes complètes de ce site avant d\'installer des plugins supplémentaires. J\'accepte et je comprends que les plugins (surtout mais pas seulement ceux qui proviennent de sources non officielles) peuvent contenir des trous de sécurité, rendre le site indisponible, ou causer des fuites ou des pertes de données privées.';
$string['featuredisabled'] = 'Le plugin est désactivé sur ce site.';
$string['installaddon'] = 'Installez le plugin !';
$string['installaddons'] = 'Installer les plugins';
$string['installfromrepo'] = 'Installer les plugins à partir du répertoire des plugins Moodle';
$string['installfromrepo_help'] = 'Vous serez redirigé vers le répertoire des plugins Moodle pour rechercher et installer un plugin. Notez que votre nom complet de site, URL et Moodle version seront également envoyés, pour rendre le processus d\'installation plus facile pour vous.';
$string['installfromzip'] = 'Installer le plugin à partir du fichier ZIP';
$string['installfromzip_help'] = 'Une alternative à l\'installation d\'un plugin directement à partir du répertoire des plugins Moodle est de télécharger un paquet ZIP du plugin. Le paquet ZIP devrait avoir la même structure qu\'un paquet téléchargé à partir du répertoire des plugins Moodle.';
$string['installfromzipfile'] = 'Paquet ZIP';
$string['installfromzipfile_help'] = 'Le paquet plugin ZIP doit contenir un seul répertoire, nommé pour correspondre au nom du plugin. Le ZIP sera extrait dans un emplacement approprié pour le type de plugin. Si le paquet a été téléchargé à partir du répertoire des plugins Moodle, alors il aura cette structure.';
$string['installfromzipinvalid'] = 'Le paquet plugin ZIP doit contenir un seul répertoire, nommé pour correspondre au nom du plugin. Le fichier fourni n\'est pas un paquet ZIP plugin valide.';
$string['installfromziprootdir'] = 'Renommer le répertoire racine';
$string['installfromziprootdir_help'] = 'Certains paquets ZIP, comme ceux générés par Github, peuvent contenir un nom de répertoire racine incorrect. Si oui, le nom correct peut être entré ici.';
$string['installfromzipsubmit'] = 'Installer le plugin à partir du fichier ZIP';
$string['installfromziptype'] = 'Type de greffon';
$string['installfromziptype_help'] = 'Pour les plugins qui déclarent correctement leur nom de composant, l\'installateur est capable de détecter automatiquement le type de plugin. Si la détection automatique échoue, choisissez manuellement le bon type de plugin. Avertissement : La procédure d\'installation peut mal échouer si un type de plugin incorrect est spécifié.';
$string['installfromziptype_link'] = 'Développement:Plugins';
$string['permcheck'] = 'Assurez-vous que le type de plugin racine emplacement est enregistrable par le processus de serveur Web.';
$string['permcheckerror'] = 'Erreur lors de la vérification de la permission d\'écrire';
$string['permcheckprogress'] = 'Rechercher la permission d\'écrire...';
$string['permcheckresultno'] = 'Emplacement du type de greffon <em>{$a->path}</em> est inscriptible';
$string['permcheckresultyes'] = 'Emplacement du type de greffon <em>{$a->path}</em> est inscriptible';
$string['permcheckrepeat'] = 'Vérifiez encore';
$string['pluginname'] = 'Installation du plugin';
$string['remoterequestalreadyinstalled'] = 'Il y a une requête pour installer le plugin {$a->name} ({$a->component}) version {$a->version} à partir du répertoire des plugins Moodle sur ce site. Cependant, ce plugin est déjà installé <strong></strong> sur le site.';
$string['remoterequestconfirm'] = 'Il y a une requête pour installer le plugin <strong>{$a->name}</strong> ({$a->component}) version {$a->version} à partir du répertoire des plugins Moodle sur ce site. Si vous continuez, le paquet plugin ZIP sera téléchargé pour validation. Rien ne sera encore installé.';
$string['remoterequestinvalid'] = 'Il y a une demande pour installer un plugin à partir du répertoire des plugins Moodle sur ce site. Malheureusement, la requête n\'est pas valide et le plugin ne peut donc pas être installé.';
$string['remoterequestpermcheck'] = 'Il y a une requête pour installer le plugin {$a->name} ({$a->component}) version {$a->version} à partir du répertoire des plugins Moodle sur ce site. Cependant, l\'emplacement <strong>{$a->typepath}</strong> est <strong>non enregistrable</strong>. Vous devez donner un accès en écriture pour l\'utilisateur du serveur Web à l\'emplacement, puis appuyez sur le bouton continuer pour répéter la vérification.';
$string['remoterequestpluginfoexception'] = 'Oups... Une erreur s\'est produite en essayant d\'obtenir des informations sur le plugin {$a->name} ({$a->component}) version {$a->version}. Le plugin ne peut pas être installé. Tournez le mode de débogage pour voir les détails de l\'erreur.';
$string['remoterequestnoninstallable'] = 'Il y a une requête pour installer le plugin {$a->name} ({$a->component}) version {$a->version} à partir du répertoire des plugins Moodle sur ce site. Cependant, l\'installation du plugin a échoué (code de raison : {$a->raison}).';
$string['typedetectionfailed'] = 'Impossible de détecter le type de plugin. Veuillez choisir le type de plugin manuellement.';
$string['typedetectionmismatch'] = 'Le type de plugin sélectionné ne correspond pas à celui déclaré par le plugin : {$a}';
$string['privacy:metadata'] = 'Le plugin d\'installation Plugin ne stocke aucune donnée personnelle.';
