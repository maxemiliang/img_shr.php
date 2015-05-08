<?php
require_once("require/start_session.php");
require_once("require/database.php");
if (isset($_SESSION["username"])) {
    echo "<a href='user_panel.php'>";
    echo $_SESSION["username"];
    echo "</a>";
} else {
	echo ""; 
}

?>