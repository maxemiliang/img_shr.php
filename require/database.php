<?php
require("confinst.php");
require("start_session.php");
$servername = $conf["db-host"];
$username = $conf["db-username"];
$password = $conf["db-password"];
$dbname = $conf["db-name"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    $_SESSION["db_error"] = 1;
} 
?>