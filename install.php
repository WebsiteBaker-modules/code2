<?php
/**
 *
 *      @module       Code2
 *      @version      2.2.17
 *      @authors      Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support, syntax highlighting and current maintenance  by Martin Hecht (mrbaseman)
 *      @copyright    (c) 2009 - 2018, Website Baker Org. e.V.
 *      @link         https://github.com/WebsiteBaker-modules/code2
 *      @license      GNU General Public License
 *      @platform     2.8.x
 *      @requirements PHP 5.2.x and higher
 *
 **/


/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(!defined('WB_PATH')) {
        // Stop this file being access directly
        if(!headers_sent()) header("Location: ../index.php",TRUE,301);
        die('<head><title>Access denied</title></head><body><h2 style="color:red;margin:3em auto;text-align:center;">Cannot access this file directly</h2></body></html>');
}
/* -------------------------------------------------------- */


$table = TABLE_PREFIX."mod_code2";

/**
 *        Delete the table
 */
$query = "DROP TABLE IF EXISTS `".$table."`";
$database->query($query);


/**
 *        Creating the table new
 */
$query  = "CREATE TABLE `".$table."` (";
$query .= "`section_id` INT NOT NULL DEFAULT '0',";
$query .= "`page_id`    INT NOT NULL DEFAULT '0',";
$query .= "`whatis`     INT NOT NULL DEFAULT '0',";
$query .= "`content`    TEXT NOT NULL,";
$query .= " PRIMARY KEY ( `section_id` ) )";

$database->query($query);

$error=$database->get_error();

if($error) $admin->print_error($error, $js_back);
