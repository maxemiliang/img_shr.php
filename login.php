<?php
session_start();
require_once("require/database.php");

if(empty($_POST['username'])){
     $_SESSION["logusererr"] = 1;
     header("location: signin.php");
}else{
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    }
 
if(empty($_POST['password'])){
    $_SESSION["logpasserr"] = 1;
    header("location: signin.php");
}else{
    $password = mysqli_real_escape_string($conn, trim($_POST["password"]));
}

$_SESSION["logusererr"] = 0;
$_SESSION["logpasserr"] = 0;
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_array($result);
    if ($row["username"] == $username and password_verify($password, $row["password"])) {
        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = $row["userID"];
        header("location: index.php");
    } else {
        $_SESSION["userorpass"] = 1;
    }
} else {
    $_SESSION["error"] = 1;
}

?>