<?php
/**
 *
 *        @module       Code2
 *        @version      2.1.13
 *        @authors      Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support corrected by Martin Hecht 
 *        @copyright    (c) 2009 - 2015, Website Baker Org. e.V.
 *      @license      GNU General Public License
 *        @platform     2.8.x
 *        @requirements PHP 5.2.x and higher
 *
 **/


// Must include code to stop this file being access directly
if(defined('WB_PATH') == false) { exit("Cannot access this file directly"); }

$database->query("DELETE FROM `".TABLE_PREFIX."search` WHERE `name` = 'module' AND value = 'code2'");
$database->query("DELETE FROM `".TABLE_PREFIX."search` WHERE `extra` = 'code2'");
$database->query("DROP TABLE ".TABLE_PREFIX."mod_code2");


?>