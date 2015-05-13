<?php 
var_dump($_POST);
$conf["dbhost"] = $_POST["db-host"];
$conf["dbuser"] = $_POST["db-user"];
$conf["dbpass"] = $_POST["db-password"];
$file = "../require/conf/config.ini";
var_dump($conf);

file_put_contents($file, str_ireplace("Array","",print_r($conf, TRUE)), FILE_APPEND | LOCK_EX);
header("location: ../index.php");
 
?>