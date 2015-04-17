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
 *        Get content
 *
 */
$get_content = $database->query("SELECT `content`, `whatis` FROM `".TABLE_PREFIX."mod_code2` WHERE `section_id`= '".$section_id."'");
$fetch_content = $get_content->fetchRow();

$whatis = (int)($fetch_content['whatis'] % 10);

$content = $fetch_content['content'];

switch ($whatis) {

        case 0:        // PHP 
                eval($content);
                break;

        case 1:        // HTML
                $wb->preprocess($content);
                echo $content;
                break;

        case 2:        // JS
                echo "\n<script type=\"text/javascript\">\n<!--\n".$content."\n// -->\n</script>\n";
                break;

        case 3:
        case 4:
                echo "";        //Keine Ausgabe: Kommentar
                break;
}

?>
