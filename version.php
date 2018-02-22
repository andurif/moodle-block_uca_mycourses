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
 * Block version informations.
 * Warning, the block has a dependency on our local plugin
 *
 * @package    block_uca_mycourses
 * @author     Université Clermont Auvergne - Anthony Durif, Pierre Raynaud
 * @copyright  2018 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2018020800;
$plugin->requires  = 2017051500;
$plugin->cron      = 0;
$plugin->component = 'block_uca_mycourses';
$plugin->release   = 'v3.3-r1';
$plugin->dependencies = array(
    'local_uca_mycourses' => 2018020801,
);