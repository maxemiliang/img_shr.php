<html>
<head>
	<title>Installation</title>
	<link rel="stylesheet" href="../foundation.css"/>
</head>
<body>
<nav class="menu">
	<h1 class="Name">Installation</h1>
	<li> <a href="../index.php">Back to homepage</a> </li>
</nav>
<h3>add this to your htaccess file for added security:<br/></h3>
	<?php 
	echo '&lt; Files *.inc&gt;  
    Order deny,allow
    Deny from all
	&lt;/Files&gt;';
	?>
<form class="uploads" action="../require/confinst.php" method="post">
		Database name:
		<input type="text" maxlength="100" id="db-host" name="db-host" placeholder="db-host"><br/>
		Database username:
		<input type="text" maxlength="100" id="db-user" name="db-user" placeholder="db-user"><br/>
		Database password:
		<input type="text" maxlength="100" id="db-password" name="db-password" placeholder="db-password"><br/>
		<input type="submit" class="button">
</form>
</body>
</html>
<?php 


?>