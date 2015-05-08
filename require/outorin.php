
<?php

require_once("database.php");
require_once("start_session.php");

error_reporting (E_ALL ^ E_NOTICE);

if (!isset($_SESSION["user_id"])) {
	echo "<li><a href='signin.php'>Login/Signin</a></li>";
} else {
	echo "<li><a href='logout.php'>Logout</a></li>";
}

?>