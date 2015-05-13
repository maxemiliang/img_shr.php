<?php
require_once("parse.php");
$servername = $conf["db_host"];
$username = $conf["db_username"];
$password = $conf["db_password"];
$dbname = "img";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    $_SESSION["db_error"] = 1;
} 
?>