<?php
session_start();

// require_once("../resources/config.php");
// require_once(LIBRARY_PATH . "/templateFunctions.php");

// $conn = new mysqli($servername, $username, $password, $dbname, $port);

// renderTablewithConn("dashboard.php", $conn);
// $conn -> close();
?>


<?php

require_once("../resources/config.php");
require_once(TEMPLATES_PATH . "/index.php");


renderPage("dashboard.php");

?>

