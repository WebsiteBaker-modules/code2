<?php
/**
 *
 *      @module       Code2
 *      @version      2.2.18
 *      @authors      Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support, syntax highlighting and current maintenance  by Martin Hecht (mrbaseman)
 *      @copyright    (c) 2009 - 2020, Website Baker Org. e.V.
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


// Define target path.
$sModCode2Dir=WB_PATH."/temp/modules/code2";
$sModModulesDir=WB_PATH."/temp/modules";

//check if directory exits
if (is_dir($sModCode2Dir) != true) {
        //if not create it and give an error message if impossible to create
        if (mkdir($sModCode2Dir, 0777, true)){
                change_mode($sModModulesDir);
                change_mode($sModCode2Dir);
        }
        else {
                echo("Modul Code2: Cannot access/create directory /temp/modules/code2<br />");
        }
}
?>
