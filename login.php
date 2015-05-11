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
    session_unset();
}


$query = "SELECT * FROM users WHERE userName = '$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_array($result);
        if ($row["userName"] == $username and password_verify($password, $row["passWord"])) {
        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = (int) $row["userID"];
        header("location: index.php");
    } else {
        $_SESSION["userorpass"] = 1;
        header("location: index.php");
    }
} else {
    $_SESSION["error"] = 1;
}

?>