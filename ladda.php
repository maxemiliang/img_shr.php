<?php
require_once("require/start_session.php");
require_once("require/database.php");
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
    <?php require_once("require/outorin.php") ?>
  </ul>
  <a class="account hide-for-medium-up" href="#" data-reveal-id="myModal"><i class="fi-unlock"></i></a>
</nav>
<div class="card">
  
<?php
  if (empty($_SESSION["username"]) !== TRUE) {
    echo '<span class="title">Must be logged in to upload a image!</span>';
  } else {
    echo '<form class="uploads" action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" class="button" value="Upload Image" name="submit"></form>';
  } 

?>

</div>
</body>
</html>