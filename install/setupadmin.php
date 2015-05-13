<?php 
require_once("../require/start_session.php");
require_once("../require/database.php");
?>
<html>
<head>
	<link rel="stylesheet" href="../foundation.css"/>
	<title>Setup Admin</title>
</head>
<body>	

<nav class="menu">
	<h1 class="Name">Installation</h1>
	<li> <a href="../index.php">Back to homepage</a> </li>
</nav>
<div class="signup-panel">
<form method="post" action="addadmin.php">
	<div class="row collapse">
                  </div>
                  Add an admin account:
                  <?php if (isset($_SESSION["usererr"]) == TRUE){
                        if ($_SESSION["usererr"] > 0){
                        echo '<div><p>Usernames must be between 5 and 30 characters and no                         spaces</p> </div>';
                        session_unset($_SESSION["usererr"]);
                        } else {
                            echo "";
                        }
                    } else {
                        echo "";
                    } ?>
                    <?php if (isset($_SESSION["passerr"]) == TRUE) {
                        if($_SESSION["passerr"] > 0){
                        echo '<div><p>Passwords must be between 5 and 30 characters</p>                           </div>';
                        session_unset($_SESSION["passerr"]);
                        }
                    } else {
                        echo "";
                    } ?>
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
</body>
</html>
