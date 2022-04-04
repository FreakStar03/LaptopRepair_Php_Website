<?php

$servername = "db";
$username = "root";
$password = "root";
$dbname = "laptop_repair";
$port = 3306;

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("IMG_PATH")
    or define("IMG_PATH", "/img/content");
     

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
?>
