<html>
<head>
	<title>Installation</title>
	<link rel="stylesheet" href="../foundation.css"/>
	<style>
	p {
		margin-left: 10px;
	}
	h3 {
		margin-left: 5px;
	}
	button {
		margin-left: 10px;
	}
	</style>
</head>
<body>
<nav class="menu">
	<h1 class="Name">Installation</h1>
	<li> <a href="../index.php">Back to homepage</a> </li>
</nav>
<h3><strong>IMPORTANT!</strong> Add this to your htaccess file for:<br/></h3>
	<?php 
	echo '<p>&lt; Files *.inc&gt;  
    Order deny,allow
    Deny from all
	&lt;/Files&gt;</p><br/>';
	if (isset($_SESSION["dberror"])) {
		echo "<h4>There was an error creating the database:"; print_r($_SESSION["dberror"]); echo "<h4>";
	}
	?>
	<br/>
	<p>next go edit the config.ini file in require/conf/ with your database info!</p>
	<br/>
	<a href="setupdata.php"><button class="uploads">Next</button></a>
</body>
</html>
<?php 


?>