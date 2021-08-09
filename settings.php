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
 * List of administration settings used in the block's display.
 *
 * @package    block_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif, Pierre Raynaud
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Limit of courses shown in the list view by default.
$settings->add(new admin_setting_configtext(
    'block_uca_mycourses/list_view_limit',
    get_string('max_courses_option', 'block_uca_mycourses'),
    get_string('max_courses_option_desc', 'block_uca_mycourses'),
    '20'
));

// List of roles that don't have to take in account to display the block.
$settings->add(new admin_setting_pickroles(
    'block_uca_mycourses/roles_to_exclude',
    get_string('roles_to_exclude', 'block_uca_mycourses'),
    get_string('roles_to_exclude_desc', 'block_uca_mycourses'),
    null
));
