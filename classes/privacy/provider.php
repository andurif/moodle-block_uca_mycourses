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
 * Privacy Subsystem implementation for block_uca_my_courses.
 *
 * @package    block_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_uca_mycourses\privacy;

use \core_privacy\local\metadata\collection;

defined('MOODLE_INTERNAL') || die();

/**
 * The block_uca_mycourses block stores a user preference data.
 *
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements
    // This plugin has data.
    \core_privacy\local\metadata\provider,
    // This plugin has some sitewide user preferences to export.
    \core_privacy\local\request\user_preference_provider {

    /** The user preference for the view of his courses. */
    const MYCOURSES_VIEW = 'uca_mycourses_view';
    /** The user preference for the display of his finished courses. */
    const FINISHED_COURSES = 'uca_mycourses_display_finished_courses';

    /**
     * Returns meta data about this system.
     *
     * @param  collection $items The initialised item collection to add items to.
     * @return collection A listing of user data stored through this system.
     */
    public static function get_metadata(collection $items) : collection {
        $items->add_user_preference(self::MYCOURSES_VIEW, 'privacy:metadata:preference:mycoursesview');
        return $items;
    }

    /**
     * Store all user preferences for the plugin.
     *
     * @param int $userid The userid of the user whose data is to be exported.
     */
    public static function export_user_preferences(int $userid) {
        $viewpref = get_user_preferences(self::MYCOURSES_VIEW, null, $userid);
        $finishedpref = get_user_preferences(self::FINISHED_COURSES, null, $userid);

        if (isset($viewpref)) {
            $viewprefstring = get_string('privacy:mycoursesview', 'block_uca_mycourses', array('view' => $viewpref));
            \core_privacy\local\request\writer::export_user_preference(
                'block_uca_mycourses',
                self::MYCOURSES_VIEW,
                $viewpref,
                $viewprefstring
            );
        }

        if (isset($finishedpref)) {
            $finishedprefstring = get_uca_mycourses_finished_courses_display()
                ? get_string('privacy:finishedcourses_yes', 'block_uca_mycourses')
                : get_string('privacy:finishedcourses_no', 'block_uca_mycourses');
            \core_privacy\local\request\writer::export_user_preference(
                'block_uca_mycourses',
                self::MYCOURSES_VIEW,
                $finishedpref,
                $finishedprefstring
            );
        }
    }
}
