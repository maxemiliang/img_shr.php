<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "img";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST["signuser"];
$password = $_POST["signpass"];

if (strlen($username) > 30 or strlen($username) < 5 or strpos($username, " ") == TRUE) {
    $_SESSION["usererr"] = 1;
    header("Location: signin.php");
} else if (strlen($password) > 30 or strlen($password) < 5){
    $_SESSION["passerr"] = 1;
    header("location: signin.php");
} else 
?>