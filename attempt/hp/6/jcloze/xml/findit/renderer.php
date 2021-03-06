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
 * mod/taskchain/attempt/hp/6/jcloze/xml/findit/renderer.php
 *
 * @package    mod
 * @subpackage taskchain
 * @copyright  2010 Gordon Bateson (gordon.bateson@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 2.0
 */

/** Prevent direct access to this script */
defined('MOODLE_INTERNAL') || die();

/** Include required files */
require_once($CFG->dirroot.'/mod/taskchain/attempt/hp/6/jcloze/xml/renderer.php');

/**
 * mod_taskchain_attempt_hp_6_jcloze_xml_findit_renderer
 *
 * @copyright  2010 Gordon Bateson (gordon.bateson@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 2.0
 * @package    mod
 * @subpackage taskchain
 */
class mod_taskchain_attempt_hp_6_jcloze_xml_findit_renderer extends mod_taskchain_attempt_hp_6_jcloze_xml_renderer {

    /**
     * List of source types which this renderer can handle
     *
     * @return array of strings
     */
    static public function sourcetypes()  {
        return array();
    }

    /**
     * get_js_functionnames
     *
     * @return xxx
     * @todo Finish documenting this function
     */
    public function get_js_functionnames()  {
        // start list of function names
        $names = parent::get_js_functionnames();
        $names .= ($names ? ',' : '').'Markup_Text,CheckText,Build_GapText,ShowSolution,Get_WrongGapContent,TimesUp';
        return $names;
    }

    /**
     * get_stop_function_search
     *
     * @return xxx
     * @todo Finish documenting this function
     */
    public function get_stop_function_search()  {
        return '/\s*if \((CheckExStatus\(\)) == true\)({.*?)setTimeout.*?}/s';
    }

    /**
     * fix_headcontent
     *
     * @todo Finish documenting this function
     */
    public function fix_headcontent()  {
        $this->fix_headcontent_rottmeier('findit');
    }

    /**
     * fix_bodycontent
     *
     * @todo Finish documenting this function
     */
    public function fix_bodycontent()  {
        $this->fix_bodycontent_rottmeier(true);
    }
}
