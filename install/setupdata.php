<?php 
require("../require/database.php");
require("../require/start_session.php");

$create_imgs = "CREATE TABLE IF NOT EXISTS `imgs` (
 `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `images` varchar(8) NOT NULL,
 `date` date NOT NULL,
 `likes` int(11) NOT NULL DEFAULT '0',
 `description` text NOT NULL,
 `userid` int(11) unsigned NOT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `images` (`images`)";

 $create_users = "CREATE TABLE IF NOT EXISTS `users` (
`userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
`userName` varchar(30) NOT NULL,
`passWord` varchar(255) NOT NULL,
`is_admin` int(1) NOT NULL,
PRIMARY KEY (`userID`),
UNIQUE KEY `userName` (`userName`)";

$create_liked = "CREATE TABLE IF NOT EXISTS `liked` (
`likeID` int(11) unsigned NOT NULL AUTO_INCREMENT,
`userID` int(11) unsigned NOT NULL,
`postID` varchar(8) NOT NULL,
PRIMARY KEY (`likeID`),
KEY `userID` (`userID`,`postID`)";

if (mysqli_query($conn, $create_imgs)) {
		if (mysqli_query($conn, $create_users)) {
			if (mysqli_query($conn, $create_liked)) {
				header("location: setupadmin.php");
			} else {
				$_SESSION["dbimg"] = mysqli_error($conn);
				header("location: install_error.php");
			} 
		} else {
			$_SESSION["dbimg"] = mysqli_error($conn);
			header("location: install_error.php");
			}
} else {
	$_SESSION["dbimg"] = mysqli_error($conn);
	header("location: install_error.php");
}

?> 