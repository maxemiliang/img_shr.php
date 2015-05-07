<?php
require_once("require/database.php");

if (isset($_SESSION["username"]) !== FALSE) {
    echo "<a href='#'>logged in</a>";
}

?>