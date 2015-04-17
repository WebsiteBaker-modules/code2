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

function gethinttext(whatis, lang) {
        var t = "";
        switch (lang) {
                case 'DE':
                        switch(whatis) {
                                case '1':
                                        t = "HTML: <b>Ihre Eingabe</b>";
                                        break;
                                case '2': t = "Javascript: <span class='info_not'>&lt;script type=&quot;text/javascript&quot;&gt;</span><b> Ihre Eingabe </b><span class='info_not'>&lt;/script&gt;</span>";
                                        break;
                                case '3': t = "Interner Kommentar; erscheint nicht auf der Website.";
                                        break;
                                case '4': t = "<font color='#990000'>Wie interner Kommentar, aber k&ouml;nnen nur von Admins bearbeitet werden.</font>";
                                        break;
                                default:
                                        t = "PHP: <span class='info_not'>&lt;?php</span><b> Ihre Eingabe </b><span class='info_not'> ?&gt;</span>";
                        }
                        break;
        
                default:
                        switch(whatis) {
                                case '1':        t = "HTML: <b>your input</b>";
                                        break;
                                case '2': t = "Javascript: <span class='info_not'>&lt;script type=&quot;text/javascript&quot;&gt;</span><b> your input </b><span class='info_not'>&lt;/script&gt;</span>";
                                        break;
                                case '3': t = "Internal Comment: for internal notes only, does not appear on website";
                                        break;
                                case '4': t = "<font color='#990000'>(HTML) Like Internal Comment, but only an admin can edit this.</font>";
                                        break;
                                default:
                                        t = "PHP: <span class='info_not'>&lt;?php</span><b> your input </b><span class='info_not'> ?&gt;</span>";
                        }
        }
        return t;
}
