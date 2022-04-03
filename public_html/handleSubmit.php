<?php
  require_once("../resources/config.php");
  require_once(LIBRARY_PATH . "/templateHandleSQL.php");
  $conn = new mysqli($servername, $username, $password, $dbname, $port);

  if ($_POST['logout']=='True') {
    // destroy the session
    // remove all session variables
    session_start();
    session_unset(); 
    session_destroy();
    echo 'SUCCESS';
    $conn -> close();
    exit;
  }


  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo handleGet($conn , $_GET['column'], $_GET['value'], $_GET['form']);
  } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo handlePost($conn ,$_POST['column'], $_POST['value'], $_POST['form']);
  }
  $conn -> close();
  ?>