<?php
require_once("../require/start_session.php");
require_once("../require/database.php");

if(empty($_POST['signuser'])){
     $_SESSION["usererr"] = 1;
     header("location: setupadmin.php");
} else {
    $username = mysqli_real_escape_string($conn, $_POST["signuser"]);
    }
 
if(empty($_POST['signpass'])){
    $_SESSION["passerr"] = 1;
    header("location: setupadmin.php");
} else {
    $password = mysqli_real_escape_string($conn, $_POST["signpass"]);
    session_unset();
}

if (strlen($username) > 30 or strlen($username) < 5 or strpos($username, " ") == TRUE) {
    $_SESSION["usererr"] = 1;
    header("Location: setupadmin.php");
} else if (strlen($password) > 30 or strlen($password) < 5){
    $_SESSION["passerr"] = 1;
    header("location: setupadmin.php");
} else {
    $sign_query = "INSERT INTO users (username, password, is_admin) values ('$username','".password_hash($password, PASSWORD_BCRYPT)."', '1')";
    session_unset($_SESSION["passerr"]);
    session_unset($_SESSION["usererr"]);
    mysqli_query($conn, $sign_query);
    $_SESSION["username"] = $username;
    $_SESSION["installed"] = 1;
    header("location: ../assign_id.php");
}
?>