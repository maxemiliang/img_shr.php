<?php 

require_once("require/start_session.php");

session_destroy();

header("location: index.php");

?>