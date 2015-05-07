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
    <li class="active"><a href="index.php">Gallery</a></li>
    <li><a href="ladda.php">Upload</a></li>
  </ul>
  <ul class="inline-list hide-for-small-only account-action">
    <li><a href="signin.php">Login/Signin</a></li>
  </ul>
  <a class="account hide-for-medium-up" href="#" data-reveal-id="myModal"><i class="fi-unlock"></i></a>
</nav>
    <?php

?>
    <?php
    $date2 = date('Y-m-d', strtotime('-7 days'));
    $i = 0;
    $resultat = mysqli_query($conn,"SELECT images FROM imgs LIMIT 8");
    while($row = mysqli_fetch_array($resultat, MYSQLI_NUM)) {
    echo '<div class="medium-6 columns end">
    <div class="card">
    <div class="images">  
    <a href='; echo "uploads/", $row["0"]; echo'><img height="500" width="500" src='; echo "uploads/", $row["0"];       echo '></a>
    </div>    
      <div class="content">
        <span class="title"></span>
        <p>desc will come here</p>
      </div>
      <div class="action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
    </div>
    </div>';
    $i++;
    }
?>
<!-- modal content -->


<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="jquery.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="jquery.js"></script>
<script src="sfoundation.js"></script>
<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
</body>
</html>
