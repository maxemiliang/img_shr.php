<?php 
require_once("require/start_session.php");
require_once("require/database.php");

$like = $_GET["like"];
$dislike = $_GET["dislike"];

if (isset($like)) {
	if ($like_sql = "UPDATE imgs SET likes = (likes + 1) WHERE images='$like'") {

	} else {

	}

} else {
	$like_sql = "UPDATE imgs SET likes = (likes - 1) WHERE images='$dislike'";
}
?>