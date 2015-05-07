
<?php

require_once("database.php");
require_once("start_session.php");

error_reporting (E_ALL ^ E_NOTICE);

if (empty($_SESSION["username"]) !== TRUE) {
	echo "<li><a href='signin.php'>Login/Signin</a></li>";
} else {
	echo "<li><a href='logout.php'>Logout</a></li>";
	session_unset($_SESSION["username"]);
}

?>