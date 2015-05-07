<?php
session_start();
require_once("require/database.php");

$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$_SESSION["logusererr"] = 0;
$_SESSION["logpasserr"] = 0;
$hash_pass = password_hash($password, PASSWORD_DEFAULT);
$queryuser = "SELECT username FROM users WHERE username = $username";
$querypass = "SELECT password FROM users WHERE username = $username";

if (strlen($username) > 30 or strlen($username) < 5 or strpos($username, " ") == TRUE) {
    $_SESSION["logusererr"] = 1;
    header("Location: signin.php");
} else if (strlen($password) > 30 or strlen($password) < 5){
    $_SESSION["logpasserr"] = 1;
    header("location: signin.php");
} else if (mysqli_query($conn, $queryuser) == TRUE) {
    if (mysqli_query($conn, $queryuser) == $username and password_verify($password,             $hash_pass) == TRUE) {
        $_SESSION["username"] = $username;
        header(loca)
    } else {
        $_SESSION["userorpass"] = 1;
    }
} else {
    $_SESSION["error"] = 1;
    header("location: index.php");
}

?>