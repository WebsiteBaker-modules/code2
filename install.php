<?php
/**
 *
 *        @module       Code2
 *        @version      2.2.1
 *        @authors      Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support and syntax highlighting by Martin Hecht (mrbaseman) 
 *        @copyright    (c) 2009 - 2015, Website Baker Org. e.V.
 *      @license      GNU General Public License
 *        @platform     2.8.x
 *        @requirements PHP 5.2.x and higher
 *
 **/


/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(!defined('WB_PATH')) {
        require_once(dirname(dirname(__FILE__)).'/framework/globalExceptionHandler.php');
        throw new IllegalFileException();
}
/* -------------------------------------------------------- */


if(!defined('WB_PATH')) die(header('Location: ../../index.php'));

$table = TABLE_PREFIX."mod_code2";

$all_jobs = array();

/**
 *        Delete the table
 */
$query = "DROP TABLE IF EXISTS `".$table."`";

$all_jobs[] = $query;

/**
 *        Creating the table new
 */
$query  = "CREATE TABLE `".$table."` (";
$query .= "`section_id`        INT NOT NULL DEFAULT '0',";
$query .= "`page_id`        INT NOT NULL DEFAULT '0',";
$query .= "`whatis`                INT NOT NULL DEFAULT '0',";
$query .= "`content`        TEXT NOT NULL,";
$query .= " PRIMARY KEY ( `section_id` ) )";

$all_jobs[] = $query;

/**
 *        Processing the jobs/querys all in once
 */
$errors= array();
foreach( $all_jobs as &$q ) {
        $database->query($q);

        if ( $database->is_error() )  $errors[] $database->get_error();
}

if (count($errors) > 0)        $admin->print_error( implode("<br />", $errors), $js_back);

