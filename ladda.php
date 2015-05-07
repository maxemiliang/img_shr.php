<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "img";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<html>
<head>
<title>Gallery.php</title>    
<link rel="stylesheet" href="foundation.css"/>
<script src="modernizr.js"></script>
</head>
<body>
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

<nav class="menu">
  <h1 class="name"><i class="fi-widget"></i> Gallery.php</a></h1>
  <ul class="inline-list">
    <li><a href="index.php">Gallery</a></li>
    <li class="active"><a href="ladda.php">Upload</a></li>
  </ul>
  <ul class="inline-list hide-for-small-only account-action">
    <li><a href="signin.php">Login/Signin</a></li>
  </ul>
  <a class="account hide-for-medium-up" href="#" data-reveal-id="myModal"><i class="fi-unlock"></i></a>
</nav>
<div class="card">
<form class="uploads" action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>
</body>
</html>