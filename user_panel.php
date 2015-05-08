<?php
require_once("require/database.php");
require_once("require/start_session.php");

$user_info = array($_SESSION["username"], $_SESSION["user_id"]);

?>
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
    <li><a href="ladda.php">Upload</a></li>
  </ul>
  <ul class="inline-list hide-for-small-only account-action">
    <li class="active"><?php require("require/logged.php") ?></li>  
    <?php require_once("require/outorin.php") ?>
  </ul>
  <a class="account hide-for-medium-up" href="signin.php" data-reveal-id="myModal"><i class="fi-unlock"></i></a>
</nav>


</body>
</html>