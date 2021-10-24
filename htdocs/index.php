<?php 

/*
*Index.php the default page when opening the DateTime Calculator
*
*/


//print ("Welcome to the datetime calculator.") //Currently just a test print statement to ensure my XAMPP config is correct. 


//Includes
include("render.php");


$html = renderPage("index");
print($html);


?>
