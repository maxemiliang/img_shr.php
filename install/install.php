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
	if (isset($_SESSION["dberror"])) {
		echo "<h4>There was an error creating the database:"; print_r($_SESSION["dberror"]); echo "<h4>";
	}
	?>
	<br/>
	<p>next go edit the configinst.php file in require/with your database info!</p>
	<br/>
	<a href="setupdata.php"><button class="uploads">Next</button></a>
</body>
</html>
<?php 


?>