<?php 
require_once("require/database.php");

$user = mysqli_real_escape_string($conn, $_SESSION["user_id"]);

if(isset($_GET["like"])) {
	$like = mysqli_real_escape_string($conn, $_GET["like"]);
	$has_liked = "SELECT userID FROM liked WHERE postID = '$like' AND userID = '$user'";
	$liek = $like;
} else {
	$dislike = mysqli_real_escape_string($conn, $_GET["dislike"]);
	$has_liked = "SELECT userID FROM liked WHERE postID = '$dislike' AND userID = '$user'";
	$liek = $like;
}
$check = mysqli_query($conn, $has_liked);

if (mysqli_num_rows($check) < 1) {
if (isset($like)) {
		$like_sql = "UPDATE imgs SET likes = (likes + 1) WHERE images='$like'";
		$insert_to_like = "INSERT INTO liked (userID, postID) VALUES ('$user', '$like')";
		mysqli_query($conn, $like_sql);
		mysqli_query($conn, $insert_to_like);
		header("location: index.php?like=".$like."");
	} else if(isset($dislike)) {
		$dislike_sql = "UPDATE imgs SET likes = (likes - 1) WHERE images='$dislike'";
		$insert_to_like = "INSERT INTO liked (userID, postID) VALUES ('$user', '$dislike')";
		mysqli_query($conn, $insert_to_like);
		mysqli_query($conn, $dislike_sql);
		header("location: index.php?like=".$dislike."");
	} else {
		header("location: index.php?like=".$like."#".$liek."");
}
} else {
	header("location: index.php?like=".$like."#".$liek."");
	$_SESSION["like_err"] = 1;
}
?>