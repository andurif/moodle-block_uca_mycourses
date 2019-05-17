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
 * Block lang file: English.
 *
 * @package    local_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif, Pierre Raynaud
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'UCA My courses block';
$string['uca_my_courses'] = '"My courses" block';
$string['uca_mycourses:addinstance'] = 'Add a new "My courses" block';
$string['uca_mycourses:myaddinstance'] = 'Add a new "My courses" block to Dashboard';
$string['uca_my_courses:addinstance'] = 'Add a new "My courses" block';
$string['uca_my_courses:myaddinstance'] = 'Add a new "My courses" block to Dashboard';
$string['uca_my_courses:others'] = 'Other courses';

$string['tree_view'] = 'Tree view';
$string['list_view'] = 'List view';
$string['max_courses_option'] = 'Limit of visible courses on list view';
$string['max_courses_option_desc'] = 'This switch will determine from how many courses we display the "My courses" block on tree view if the user has not chosen a preference yet.';
$string['roles_to_exclude'] = 'Roles to exclude from "My courses" block.';
$string['roles_to_exclude_desc'] = 'This setting allows you to control roles to exclude from "My courses" block. If the current user has one of these roles in a course, this course won\'t be visible in the block (and can not be bookmarked).';

$string['privacy:metadata:preference:mycoursesview'] = 'Ce bloc enregistre le type de vue sélectionné par l\'utilisateur pour visualiser ses cours.';
$string['privacy:mycoursesview'] = 'Le type de vue actuellement choisi par l\'utilisateur pour visualiser ses cours est la {$a->view}.';