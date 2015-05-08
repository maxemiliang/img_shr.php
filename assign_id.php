<?php
require_once("require/start_session.php");
require_once("require/database.php");

$username = $_SESSION["username"];

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$_SESSION["user_id"] = (int) $row["userID"];
header("location: index.php");

?>