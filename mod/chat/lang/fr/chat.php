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
 * Strings for component 'chat', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   mod_chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activityoverview'] = 'Vous avez des sessions de chat à venir';
$string['ajax'] = 'Version utilisant AJAX';
$string['autoscroll'] = 'Déroulement automatique';
$string['beep'] = 'Bip';
$string['bubble'] = 'Bubble';
$string['cantlogin'] = 'Impossible de se connecter pour discuter!!';
$string['composemessage'] = 'Composez un message';
$string['configmethod'] = 'La méthode de chat AJAX fournit une interface de chat basée sur AJAX qui contacte régulièrement le serveur pour des mises à jour. La méthode de chat normale implique que les clients contactent régulièrement le serveur pour des mises à jour. Il ne nécessite aucune configuration et fonctionne partout, mais peut créer une grande charge sur le serveur si de nombreux utilisateurs discutent. L\'utilisation d\'un démon serveur nécessite un accès shell à Unix, mais il se traduit par un environnement de chat évolutive rapide.';
$string['confignormalupdatemode'] = 'Les mises à jour de Chatroom sont normalement servies efficacement en utilisant la fonctionnalité <em>Keep-Alive</em> de HTTP 1.1, mais cela reste assez lourd sur le serveur. Une méthode plus avancée consiste à utiliser la stratégie <em>Stream</em> pour alimenter les mises à jour des utilisateurs. Utilisation de <em>Stream</em> échelles beaucoup mieux (similaire à la méthode de discussion) mais peut ne pas être pris en charge par votre serveur.';
$string['configoldping'] = 'Quel est le temps maximum qui peut passer avant de détecter qu\'un utilisateur a déconnecté (en secondes)? Ce n\'est qu\'une limite supérieure, car les déconnexions sont détectées très rapidement. Les valeurs inférieures seront plus exigeantes sur votre serveur. Si vous utilisez la méthode normale, <strong>jamais</strong> définissez cette valeur inférieure à 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Combien de fois faut-il rafraîchir la salle de discussion? (en secondes). Réglage de ce bas fera la salle de chat semble plus rapide, mais il peut placer une charge plus élevée sur votre serveur Web lorsque beaucoup de gens discutent. Si vous utilisez les mises à jour <em>Stream</em>, vous pouvez sélectionner des fréquences de rafraîchissement plus élevées -- essayez avec 2.';
$string['configrefreshuserlist'] = 'À quelle fréquence la liste des utilisateurs devrait-elle être mise à jour? (en secondes)';
$string['configserverhost'] = 'Le nom d\'hôte de l\'ordinateur où le démon serveur est';
$string['configserverip'] = 'L\'adresse IP numérique qui correspond au nom d\'hôte ci-dessus';
$string['configservermax'] = 'Nombre maximal de clients autorisés';
$string['configserverport'] = 'Port à utiliser sur le serveur pour le démon';
$string['compact'] = 'Compact';
$string['coursetheme'] = 'Thème du cours';
$string['crontask'] = 'Traitement de fond pour le module chat';
$string['currentchats'] = 'Sessions de chat actif';
$string['currentusers'] = 'Utilisateurs actuels';
$string['deletesession'] = 'Supprimer cette session';
$string['deletesessionsure'] = 'Voulez-vous vraiment supprimer cette session ?';
$string['donotusechattime'] = 'Don\'t publish any chat times';
$string['enterchat'] = 'Entrez le chat';
$string['errornousers'] = 'Impossible de trouver des utilisateurs !';
$string['explaingeneralconfig'] = 'Ces paramètres sont toujours <strong></strong> utilisés';
$string['explainmethoddaemon'] = 'Ces paramètres n\'ont d\'effet que si \'Chat server daemon\' is selected as chat method.';
$string['explainmethodnormal'] = 'Ces paramètres n\'ont d\'effet que si Normal est sélectionné comme méthode de chat.';
$string['generalconfig'] = 'Configuration générale';
$string['chat:addinstance'] = 'Ajouter un nouveau chat';
$string['chat:deletelog'] = 'Supprimer les journaux de chat';
$string['chat:exportparticipatedsession'] = 'Exportez la session de chat à laquelle vous avez participé';
$string['chat:exportsession'] = 'Exporter toute session de chat';
$string['chat:chat'] = 'Accès à une salle de discussion';
$string['chatintro'] = 'Désignation des marchandises';
$string['chatname'] = 'Nom de cette salle de discussion';
$string['chat:readlog'] = 'Afficher les journaux de chat';
$string['chatreport'] = 'Séances de discussion';
$string['chat:talk'] = 'Parlez dans un chat';
$string['chattime'] = 'Heure de chat suivante';
$string['nextchattime'] = 'Prochaine heure de chat:';
$string['chat:view'] = 'Afficher l\'activité de chat';
$string['entermessage'] = "Saisissez votre message";
$string['eventmessagesent'] = 'Message envoyé';
$string['eventsessionsviewed'] = 'Séances vues';
$string['idle'] = 'Idée';
$string['indicator:cognitivedepth'] = 'Chat cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'élève dans une activité de clavardage.';
$string['indicator:cognitivedepthdef'] = 'Chat cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement cognitif offert par les activités de Chat pendant cet intervalle d\'analyse (Nivaux = Aucune vue, Voir, Soumettre, Voir les commentaires, Commentaire sur les commentaires)';
$string['indicator:cognitivedepthdef_link'] = 'Apprentissage_analytique_indicateurs#Profondeur cognitive';
$string['indicator:socialbreadth'] = 'Chat social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur l\'étendue sociale atteinte par l\'étudiant dans une activité de Chat.';
$string['indicator:socialbreadthdef'] = 'Chat social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par les activités de Chat pendant cet intervalle d\'analyse (Nivaux = aucune participation, Participant seul, Participant avec d\'autres)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicateurs#Social_breadth';
$string['inputarea'] = 'Zone d\'entrée';
$string['invalidid'] = 'Je n\'ai pas trouvé cette salle de chat !';
$string['list_all_sessions'] = 'Énumérez toutes les séances.';
$string['list_complete_sessions'] = 'Listez juste des séances complètes.';
$string['listing_all_sessions'] = 'Liste toutes les sessions.';
$string['messagebeepseveryone'] = 'Ça bipe tout le monde !';
$string['messagebeepsyou'] = 'Je viens de te biper !';
$string['messageenter'] = '{$a} vient d\'entrer ce chat';
$string['messageexit'] = '{$a} a laissé ce chat';
$string['messages'] = 'Messages';
$string['messageyoubeep'] = 'Vous avez bipé {$a}';
$string['method'] = 'Méthode de discussion';
$string['methoddaemon'] = 'Dialoguer le démon du serveur';
$string['methodnormal'] = 'Normal';
$string['methodajax'] = 'AJAX';
$string['modulename'] = 'Chat';
$string['modulename_help'] = 'The chat activity module enables participants to have text-based, real-time synchronous discussions.

The chat may be a one-time activity or it may be repeated at the same time each day or each week. Chat sessions are saved and can be made available for everyone to view or restricted to users with the capability to view chat session logs.

Chats are especially useful when the group chatting is not able to meet face-to-face, such as

* Regular meetings of students participating in online courses to enable them to share experiences with others in the same course but in a different location
* A student temporarily unable to attend in person chatting with their teacher to catch up with work
* Students out on work experience getting together to discuss their experiences with each other and their teacher
* Younger children using chat at home in the evenings as a controlled (monitored) introduction to the world of social networking
* A question and answer session with an invited speaker in a different location
* Sessions to help students prepare for tests where the teacher, or other students, would pose sample questions';
$string['modulename_link'] = 'mod/chat/vue';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Ne jamais supprimer les messages';
$string['no_complete_sessions_found'] = 'Aucune séance complète trouvée.';
$string['noguests'] = 'Le chat n\'est pas ouvert aux invités';
$string['nochat'] = 'Pas de chat trouvé';
$string['nomessages'] = 'Pas encore de messages';
$string['normalkeepalive'] = 'GardezAlive';
$string['normalstream'] = 'Flux';
$string['noscheduledsession'] = 'Aucune session prévue';
$string['notallowenter'] = 'Vous n\'êtes pas autorisé à entrer dans la salle de discussion.';
$string['notlogged'] = 'Vous n\'êtes pas connecté!';
$string['nopermissiontoseethechatlog'] = 'Vous faites\'t have permission to see the chat logs.';
$string['oldping'] = 'Déconnecter le temps d\'arrêt';
$string['page-mod-chat-x'] = 'Toute page de module de chat';
$string['pastchats'] = 'Sessions de chat passées';
$string['pastsessions'] = 'Sessions antérieures';
$string['pluginadministration'] = 'Administration du chat';
$string['pluginname'] = 'Chat';
$string['privacy:metadata:chat_messages_current'] = 'Session de chat en cours. Ces données sont temporaires et sont supprimées après la session de chat est supprimée';
$string['privacy:metadata:chat_users'] = 'Garde une trace des utilisateurs dans lesquels les salons de discussion';
$string['privacy:metadata:chat_users:firstping'] = 'Heure du premier accès au salon de chat';
$string['privacy:metadata:chat_users:ip'] = 'IP utilisateur';
$string['privacy:metadata:chat_users:lang'] = 'Langue utilisée';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Heure du dernier message dans cette salle de discussion';
$string['privacy:metadata:chat_users:lastping'] = 'Heure du dernier accès au salon de chat';
$string['privacy:metadata:chat_users:userid'] = 'L\'ID de l\'utilisateur';
$string['privacy:metadata:chat_users:version'] = 'Comment l\'utilisateur a accédé au chat (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Un enregistrement des messages envoyés lors d\'une session de chat';
$string['privacy:metadata:messages:issystem'] = 'Indique si le message est un message généré par le système';
$string['privacy:metadata:messages:message'] = 'Le message';
$string['privacy:metadata:messages:timestamp'] = 'Le moment où le message a été envoyé.';
$string['privacy:metadata:messages:userid'] = 'L\'identifiant utilisateur de l\'auteur du message';
$string['refreshroom'] = 'Rafraîchir la salle';
$string['refreshuserlist'] = 'Actualiser la liste des utilisateurs';
$string['removemessages'] = 'Tous les messages';
$string['repeatdaily'] = 'À la même heure tous les jours';
$string['repeatnone'] = 'Pas de répétition - publier le temps spécifié seulement';
$string['repeattimes'] = 'Heures de répétition/édition de la session';
$string['repeatweekly'] = 'À la même heure chaque semaine';
$string['saidto'] = 'dit à';
$string['savemessages'] = 'Enregistrer les sessions précédentes';
$string['seesession'] = 'Voir cette session';
$string['search:activity'] = 'Chat - informations sur l\'activité';
$string['send'] = 'Envoyer';
$string['sending'] = 'Envoi';
$string['serverhost'] = 'Nom du serveur';
$string['serverip'] = 'ip serveur';
$string['servermax'] = 'Maximum d\'utilisateurs';
$string['serverport'] = 'Port serveur';
$string['sessions'] = 'Séances de discussion';
$string['sessionstartsin'] = 'La prochaine session de chat commencera {$a} à partir de maintenant.';
$string['strftimemessage'] = '%H & #160;: %M';
$string['studentseereports'] = 'Tout le monde peut voir les sessions passées';
$string['studentseereports_help'] = 'Si défini à Non, seuls les utilisateurs ont la capacité mod/chat:readlog peuvent voir les journaux de chat';
$string['talk'] = 'Parle';
$string['updatemethod'] = 'Méthode de mise à jour';
$string['updaterate'] = 'Taux de mise à jour :';
$string['userlist'] = 'Liste des utilisateurs';
$string['usingchat'] = 'Utilisation du chat';
$string['usingchat_help'] = 'The chat module contains some features to make chatting a little nicer.

* Smilies - Any smiley faces (emoticons) that you can type elsewhere in Moodle can also be typed here, for example :-)
* Links - Website addresses will be turned into links automatically
* Emoting - You can start a line with "/me" or ":" to emote, for example if your name is Kim and you type ":laughs!" or "/me laughs!" then everyone will see "Kim laughs!"
* Beeps - You can send a sound to other participants by clicking the "beep" link next to their name. A useful shortcut to beep all the people in the chat at once is to type "beep all".
* HTML - If you know some HTML code, you can use it in your text to do things like insert images, play sounds or create different coloured text';
$string['viewreport'] = 'Sessions antérieures';
