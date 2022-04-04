<?php
session_start();
?>
<?php

require_once("../resources/config.php");
require_once(TEMPLATES_PATH . "/index.php");

renderPage("repair.php");

?>