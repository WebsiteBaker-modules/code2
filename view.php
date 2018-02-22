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


include_once(WB_PATH.'/framework/functions.php');
include(WB_PATH.'/modules/code2/dirmaker.php');

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
                $codelocation= WB_PATH."/temp/modules/code2/section_".$section_id.".php.inc";

                if (file_exists($codelocation) AND is_readable($codelocation)) {
                        // Include content
                        include ($codelocation);
                }
                else {
                        $wrapped_content = "<?php \nif (!defined('WB_PATH')) die(header('HTTP/1.0 404 Not Found').'404 Not Found');\n\n"
                                . $content."";

                        if( (false !== @file_put_contents($codelocation,$wrapped_content))) {
                                // Chmod the file
                                change_mode($codelocation);
                                include ($codelocation);
                        }
                        else {
                                echo "Cannot access datafile: $codelocation <br />";
                        }

                }
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

