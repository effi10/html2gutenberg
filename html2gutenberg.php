
function HTML2Gutenberg($sTexte) {

    // Remplacement "basique" des marqueurs HTML (puisque code généré "propre")
    $sResult = str_replace("<h1>", "<!-- wp:heading {\"level\":1} --><h1>", $sTexte);
    $sResult = str_replace("</h1>", "</h1><!-- /wp:heading -->", $sResult);
    $sResult = str_replace("<h2>", "<!-- wp:heading --><h2>", $sResult);
    $sResult = str_replace("</h2>", "</h2><!-- /wp:heading -->", $sResult);
    $sResult = str_replace("<h3>", "<!-- wp:heading {\"level\":3} --><h3>", $sResult);
    $sResult = str_replace("</h3>", "</h3><!-- /wp:heading -->", $sResult);
    $sResult = str_replace("<h4>", "<!-- wp:heading {\"level\":4} --><h4>", $sResult);
    $sResult = str_replace("</h4>", "</h4><!-- /wp:heading -->", $sResult);
    $sResult = str_replace("<h5>", "<!-- wp:heading {\"level\":5} --><h5>", $sResult);
    $sResult = str_replace("</h5>", "</h5><!-- /wp:heading -->", $sResult);
    $sResult = str_replace("<h6>", "<!-- wp:heading {\"level\":6} --><h6>", $sResult);
    $sResult = str_replace("</h6>", "</h6><!-- /wp:heading -->", $sResult);

    $sResult = str_replace("<p>", "<!-- wp:paragraph --><p>", $sResult);
    $sResult = str_replace("</p>", "</p><!-- /wp:paragraph -->", $sResult);

    $sResult = str_replace("<blockquote>", "<!-- wp:quote --><blockquote>", $sResult);
    $sResult = str_replace("</blockquote>", "</blockquote><!-- /wp:quote -->", $sResult);

    $sResult = str_replace("<ul>", "<!-- wp:list --><ul>", $sResult);
    $sResult = str_replace("</ul>", "</ul><!-- /wp:list -->", $sResult);

    $sResult = str_replace("<ol>", "<!-- wp:list {\"ordered\":true} --><ol>", $sResult);
    $sResult = str_replace("</ol>", "</ol><!-- /wp:list -->", $sResult);

    //Cas des images : attention bidouillage ^_^
    $sResult = str_replace("<img ", "<!-- wp:image --><img ", $sResult);
    $sResult = str_replace("\" />", "\" /><!-- /wp:image -->", $sResult);

    //Cas des tableaux
    $sResult = str_replace("<table>", "<!-- wp:table --><figure class=\"wp-block-table\"><table>", $sResult);
    $sResult = str_replace("</table>", "</table></figure><!-- /wp:table -->", $sResult);

    return $sResult;

}
