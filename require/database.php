<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "img";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    $_SESSION["db_error"] = 1;
} 
?>