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

/**
 *        Insert an extra row into the database
 *
 */
$sql = 'INSERT INTO `'.TABLE_PREFIX.'mod_code2` '
     . 'SET `page_id` = '.$page_id.', '
     .     '`section_id` = '.$section_id.', '
     .     '`content` = \'\'';
$database->query($sql);

?>