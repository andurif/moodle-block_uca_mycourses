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
 * Class used to define our block .
 *
 * @package    block_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif, Pierre Raynaud
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Class used to define our block.
 *
 * This block will display the list of current user's courses according two types of views and
 * displays a link leading to the bookmarks management page.
 * The two types of views are:
 * - the tree view: displays the complete tree of course categories until courses.
 * - the list view: displays only a list of these courses.
 *
 * @package    block_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif, Pierre Raynaud
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_uca_mycourses extends block_base
{

    public function init() {
        $this->title = get_string('uca_my_courses', 'block_uca_mycourses');
    }

    function instance_allow_multiple() {
        return false;
    }

    function applicable_formats() {
        return array('all' => true);
    }

    function has_config() {
        return true;
    }

    public function get_content() {
        global $CFG;

        require_once($CFG->dirroot.'/local/uca_mycourses/lib.php');

        if (isset($this->content)) {
            return $this->content;
        }

        $this->content->text = local_uca_mycourses_render_block_output($this->page);

        return $this->content;
    }
}