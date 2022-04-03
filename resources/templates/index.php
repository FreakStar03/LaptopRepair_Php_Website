
<?php
 
 require_once(realpath(dirname(__FILE__) . "/../config.php"));

 require_once(LIBRARY_PATH . "/templateFunctions.php");

 function renderPage($page){
    renderLayoutWithContentFile($page);
 }
?>