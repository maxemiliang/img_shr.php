<?php 
	require("../require/database.php");
	require("../require/start_session.php");

	print_r($_SESSION["dberror"]);
	unset($_SESSION["dberror"]);

?>