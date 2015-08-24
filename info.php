<?php
/**
 *
 *        @module       Code2
 *        @version      2.2.5
 *        @authors      Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support and syntax highlighting by Martin Hecht (mrbaseman) 
 *        @copyright    (c) 2009 - 2015, Website Baker Org. e.V.
 *        @license      GNU General Public License
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


// for changelog see file CHANGELOG

$module_directory        = 'code2';
$module_name            = 'Code2';
$module_function        = 'page';
$module_version                = '2.2.5';
$module_platform        = '2.8.x';
$module_author                = 'Ryan Djurovich, minor changes by Chio Maisriml, websitbaker.at, Search-Enhancement by thorn, Mode-Select by Aldus, FTAN Support and syntax highlighting by Martin Hecht (mrbaseman)';
$module_license                = 'GNU General Public License';
$module_description     = 'This module allows you to execute PHP, HTML, Javascript commands and internal comments (<span style="color:#FF0000;">limit access to users you trust!</span>)';
$module_home                = 'http://forum.websitebaker.org/index.php/topic,28581.0.html';
$module_guid                = '968243F3-EC4A-439D-8936-7D727D9EF8C2';

?>
