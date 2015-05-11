<?php 
require_once("require/start_session.php");
require_once("require/database.php");

$like = $_GET["like"];
$dislike = $_GET["dislike"];

if (isset($like)) {
		$like_sql = "UPDATE imgs SET likes = (likes + 1) WHERE images='$like'";
		mysqli_query($conn, $like_sql);
		header("location: index.php");
	} else if(isset($dislike)) {
		$like_sql = "UPDATE imgs SET likes = (likes - 1) WHERE images='$dislike'";
		mysqli_query($conn, $like_sql);
		header("location: index.php");
	} else {
}
?>