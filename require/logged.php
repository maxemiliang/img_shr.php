<?php
require_once("require/start_session.php");
require_once("require/database.php");

if (isset($_SESSION["username"]) !== FALSE) {
    echo "<a href='#'>";
    echo $_SESSION["username"];
    echo "</a>";
}

?>