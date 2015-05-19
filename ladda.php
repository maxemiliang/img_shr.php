<?php
require_once("require/database.php");
?>
<html>
<head>
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
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
    <li><?php require("require/logged.php") ?></li>
    <?php require_once("require/outorin.php") ?>
  </ul>
  <a class="account hide-for-medium-up" href="signin.php" data-reveal-id="myModal"><i class="fi-unlock"></i></a>
</nav>
<div class="card">
  <script type="text/javascript">
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(1024)
                    .height(720);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
      $("#fileToUpload").change(function(){
      readURL(this);
    });
    </script>
  
<?php
  if (empty($_SESSION["user_id"]) >= 1) {
    echo '<span class="title">You must be logged in to upload a image!</span>';
  } else {
    echo '<form class="uploads" action="upload.php" method="post" runat="server" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" accept="image/*" id="fileToUpload" onchange="readURL(this);">
    <img class="inline-list hide-for-small-only account-action" id="blah" src="#" alt="Your image" /><br/>
    Insert image description:';
    if ($_SESSION["descerr"] == 1) {
      echo "The description cannot be longer than 1000 characters";
      unset($_SESSION["descerr"]);
    } else {
      echo "";
    };
    echo '<textarea maxlength="1000" name="desc" id="desc" placeholder="image description/blogpost (max 1000 characters)"></textarea>
    <input type="submit" class="button" value="Upload Image" name="submit" id="submits"></form>';
  } 

?>

</div>
</body>
</html>