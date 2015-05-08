<?php 
require_once("require/start_session.php");
session_unset();
session_destroy();
echo "you have been logged out";
header("location: index.php");

?>