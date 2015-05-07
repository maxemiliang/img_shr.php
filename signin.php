<?php
session_start();
require_once("require/database.php");
?>
<html>
<head>
<title>Signin.php</title>    
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
    <li class="active"><a href="#">Login/Signup</a></li>
  </ul>
  <a class="account hide-for-medium-up" href="#" data-reveal-id="myModal"><i class="fi-unlock"></i></a>
</nav>    
    
<div class="center row">
  <div class="section-container tabs" data-section="tabs">
    <section class="active">
      <div class="contents" data-section-content>
        <p>
          <div class="row">
            <div class="large-12 columns">
              <div class="signup-panel">
                <p class="welcome">Hello, new user? Sign up here!</p>
                <form method="post" action="signup.php">
                    <?php if (isset($_SESSION["usererr"]) == TRUE){
                        if($_SESSION["usererr"] = 1){
                        echo '<div><p>Usernames must be between 5 and 30 characters and no                         spaces</p> </div>';
                        session_unset($_SESSION["usererr"]);
                        };
                    } else {
                        echo "";
                    } ?>
                    <?php if (isset($_SESSION["passerr"]) == TRUE) {
                        if($_SESSION["passerr"] = 1){
                        echo '<div><p>Passwords must be between 5 and 30 characters</p>                           </div>';
                        session_unset($_SESSION["passerr"]);
                        };
                    } else {
                        echo "";
                    } ?>
                  <div class="row collapse">
                  </div>
                  <div class="row collapse">
                    <div class="small-2 columns">
                      <span class="prefix"><i class="fi-torso"></i></span>
                    </div>
                    <div class="small-10  columns">
                      <input type="text" name="signuser" id="signuser" placeholder="Username">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-2 columns ">
                      <span class="prefix"><i class="fi-lock"></i></span>
                    </div>
                    <div class="small-10 columns ">
                      <input type="password" name="signpass" id="signpass" placeholder="Password">
                    </div>
                  </div>
                    <input class="button" type="submit"></input>
                  </form>
              </div>
            </div>
           </div></p>
      </div>
    </section>
    <section>
      <div class="contents" data-section-content>
        <p>
          <div class="row">
            <div class="large-12 columns">
              <div class="signup-panel">
                <p class="welcome">Already registered? Signin here!</p>
                <form method="post" action="login.php">
                  <?php if (isset($_SESSION["logusererr"]) == TRUE){
                        if($_SESSION["logusererr"] = 1){
                        echo '<div><p>Usernames must be between 5 and 30 characters and no                         spaces</p> </div>';
                        session_unset($_SESSION["logusererr"]);
                        };
                    } else {
                        echo "";
                    } ?>
                    <?php if (isset($_SESSION["logpasserr"]) == TRUE) {
                        if($_SESSION["logpasserr"] = 1){
                        echo '<div><p>Passwords must be between 5 and 30 characters</p>                           </div>';
                        session_unset($_SESSION["logpasserr"]);
                        };
                    } else {
                        echo "";
                    } ?>
                    <div class="row collapse">
                    <div class="small-2 columns">
                      <span class="prefix"><i class="fi-torso"></i></span>
                    </div>
                    <div class="small-10  columns">
                      <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-2 columns ">
                      <span class="prefix"><i class="fi-lock"></i></span>
                    </div>
                    <div class="small-10 columns ">
                      <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                  </div>
                </form>
                <a href="#" class="button ">Sign In! </a>
              </div>
            </div>
           </div></p>
      </div>
    </section>
  </div>
<div>   

    
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