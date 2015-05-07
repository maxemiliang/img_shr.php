<?php
session_start();
require_once("require/database.php");

$username = mysqli_real_escape_string($conn, $_POST["signuser"]);
$password = mysqli_real_escape_string($conn, $_POST["signpass"]);
$_SESSION["passerr"] = 0;
$_SESSION["usererr"] = 0;

if (strlen($username) > 30 or strlen($username) < 5 or strpos($username, " ") == TRUE) {
    $_SESSION["usererr"] = 1;
    header("Location: signin.php");
} else if (strlen($password) > 30 or strlen($password) < 5){
    $_SESSION["passerr"] = 1;
    header("location: signin.php");
} else {
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    $sign_query = "INSERT INTO users (username, password) values ('$username', '$hash_pass')";
    session_unset($_SESSION["passerr"]);
    session_unset($_SESSION["usererr"]);
    mysqli_query($conn, $sign_query);
    $_SESSION["username"] = $username;
    header("location: index.php");
}
?>