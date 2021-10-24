<?php

/*
*render.php is to render/populate a HTML templated file. 
*/


/*Function to do simple page rendering. 
  @Param String
  @Returns String
*/
function renderPage($templatePage)
{
    $page = "templates/".$templatePage.".html";
    $html=strval(file_get_contents($page));
    return $html;
}


?>