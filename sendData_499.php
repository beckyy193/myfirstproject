<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cst_499";

try
{
	$connection = new PDO("mysql:host = $servername;$dbname",$username,$password);
	echo "Cobnnection successful";
}
	
catch (PDOException $e)
{
	echo "Connection failed".$e->getMessage();
}
	
	
?>

