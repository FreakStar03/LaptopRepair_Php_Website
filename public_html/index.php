<?php
session_start();
?>

<?php
// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Start the session


$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$page = end($link_array);

require_once("../resources/config.php");
require_once(TEMPLATES_PATH . "/index.php");

if ($page == "index.php"){
    renderPage("home.php");
} else if ($page == "repair"){
    renderPage("repair.php");
} else {
    renderPage("error.php");
}
?>