<?php

$servername = "db";
$username = "root";
$password = "root";
$dbname = "laptop_repair";
$port = 3306;

function getConnection() {
    $dbc = mysqli_connect ("db", "root", "root",  "laptop_repair");
  
    if (!$dbc) {
      trigger_error ('Could not connect to MySQL: ' . mysqli_connect_error() );
    } else {
      return $dbc;
    }
  }
  

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("IMG_PATH")
    or define("IMG_PATH", "/img/content");
     

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
?>
