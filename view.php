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


 
/**
 *        Get content
 *
 */
$query="SELECT `content`, `whatis`"
        . " FROM `".TABLE_PREFIX."mod_code2`"
        . " WHERE `section_id`= '".$section_id."'";
$get_content = $database->query($query);

if (($get_content) && ($get_content->numRows() > 0)) {
    $fetch_content = $get_content->fetchRow( MYSQL_ASSOC );

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
        default:
                echo "Unknown type!";
                break;
    }
}

?>
