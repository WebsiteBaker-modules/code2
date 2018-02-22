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

function gethinttext(whatis, lang) {
    var t = "";
    switch (lang) {
        case 'DE':
            switch(whatis) {
                case '1':
                    t = "HTML: <b>Ihre Eingabe</b>";
                    break;
                case '2': t = "Javascript: <span class='info_not'>"
                            + "&lt;script type=&quot;text/javascript&quot;&gt;"
                            + "</span><b> Ihre Eingabe </b>"
                            + "<span class='info_not'>&lt;/script&gt;</span>";
                    break;
                case '3': t = "Interner Kommentar: erscheint nicht auf der Website.";
                    break;
                case '4': t = "<font color='#990000'>"
                            + "Admin Kommentar: Wie interner Kommentar, "
                            + "aber k&ouml;nnen nur von Admins bearbeitet werden."
                            + "</font>";
                    break;
                default:
                    t = "PHP: <span class='info_not'>"
                      + "&lt;?php</span><b> Ihre Eingabe </b>"
                      + "<span class='info_not'> ?&gt;</span>";
            }
            break;

        case 'FR':
            switch(whatis) {
                case '1':    t = "HTML: <b> votre entr&eacute;e </b>";
                    break;
                case '2': t = "Javascript: <span class='info_not'>"
                            + "&lt;script type=&quot;text/javascript&quot;&gt;</span>"
                            + "<b> votre entr&eacute;e </b>"
                            + "<span class='info_not'>&lt;/script&gt;</span>";
                    break;
                case '3': t = "Commentaire interne: pour les notes internes uniquement, "
                            + "ne semble pas sur le site";
                    break;
                case '4': t = "<font color='#990000'>"
                            + "Commentaire admin: Comme commentaire interne, "
                            + "mais seulement un administrateur peut modifier cette"
                            + "</font>";
                    break;
                default:
                    t = "PHP: <span class='info_not'>"
                      + "&lt;?php</span><b> votre entr&eacute;e </b>"
                      + "<span class='info_not'> ?&gt;</span>";
            }
            break;

        case 'IT':
            switch(whatis) {
                case '1':    t = "HTML: <b> il Suo contributo </b>";
                    break;
                case '2': t = "Javascript: <span class='info_not'>"
                            + "&lt;script type=&quot;text/javascript&quot;&gt;</span>"
                            + "<b> il Suo contributo </b>"
                            + "<span class='info_not'>&lt;/script&gt;</span>";
                    break;
                case '3': t = "Commento interna: per le note interne solo, "
                            + "non appare sul sito web";
                    break;
                case '4': t = "<font color='#990000'>"
                            + "Commento admin: Mi piace Commento interno, "
                            + "ma solo un amministratore puo modificare questo</font>";
                    break;
                default:
                    t = "PHP: <span class='info_not'>&lt;?php</span>"
                            + "<b> il Suo contributo </b>"
                            + "<span class='info_not'> ?&gt;</span>";
            }
            break;

        default:
            switch(whatis) {
                case '1':    t = "HTML: <b>your input</b>";
                    break;
                case '2': t = "Javascript: <span class='info_not'>"
                            + "&lt;script type=&quot;text/javascript&quot;&gt;</span>"
                            + "<b> your input </b>"
                            + "<span class='info_not'>&lt;/script&gt;</span>";
                    break;
                case '3': t = "Internal Comment: for internal notes only, "
                            + "does not appear on website";
                    break;
                case '4': t = "<font color='#990000'>"
                            + "Admin Comment: Like Internal Comment,"
                            + " but only an admin can edit this.</font>";
                    break;
                default:
                    t = "PHP: <span class='info_not'>&lt;?php</span>"
                            + "<b> your input </b>"
                            + "<span class='info_not'> ?&gt;</span>";
            }
    }
    return t;
}
