<?php
/**
 *
 *      @module       Code2
 *      @version      2.2.12
 *      @authors      Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support and syntax highlighting by Martin Hecht (mrbaseman)
 *      @copyright    (c) 2009 - 2018, Website Baker Org. e.V.
 *      @link         http://forum.websitebaker.org/index.php/topic,28581.0.html
 *      @license      GNU General Public License
 *      @platform     2.8.x
 *      @requirements PHP 5.2.x and higher
 *
 **/


/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(defined('WB_PATH') == false) { die('Illegale file access /'.basename(__DIR__).'/'.basename(__FILE__).''); }
/* -------------------------------------------------------- */


$database->query(
    "DELETE FROM `".TABLE_PREFIX."search`"
        . " WHERE `name` = 'module'"
        . " AND value = 'code2'"
    );
$database->query(
    "DELETE FROM `".TABLE_PREFIX."search`"
        . " WHERE `extra` = 'code2'"
    );
$database->query("DROP TABLE IF EXISTS ".TABLE_PREFIX."mod_code2");

$directory= WB_PATH."/temp/modules/code2" ;
$check =rm_full_dir($directory, $empty = false) ;

if ($check !== true) {echo "Das Datenverzeichniss $directory konnte nicht komplett gel&ouml;scht werden!";}

