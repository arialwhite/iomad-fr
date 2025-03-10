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
 * Strings for component qbank_comment, language 'en'.
 *
 * @package    qbank_comment
 * @copyright  2021 Catalyst IT Australia Pty Ltd
 * @author     Safat Shahin <safatshahin@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Commentaires';
$string['privacy:metadata:core_comment'] = 'Le plugin Question commente la banque de questions permet aux utilisateurs de commenter les questions.';
// Column.
$string['comment'] = 'Commentaire';
$string['commentplural'] = 'Commentaires';
// Modal.
$string['addcomment'] = 'Ajouter un commentaire';
$string['close'] = 'Fermer';
$string['commentheader'] = 'Commentaires';
$string['commentdisabled'] = 'Les commentaires sont actuellement désactivés sur ce site. Veuillez contacter votre administrateur du site.';
// Events.
$string['comment_added'] = 'L\'utilisateur avec ID \'{$a->userid}\' added the comment with ID \'{$a->objectid}\'
 to the \'{$a->component}\' for the question with ID \'{$a->itemid}\'.';
$string['comment_removed'] = 'L\'utilisateur avec ID \'{$a->userid}\' deleted the comment with ID \'{$a->objectid}\'
 from the \'{$a->component}\' for the question with ID \'{$a->itemid}\'.';
