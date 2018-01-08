<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "btwofficial";

/*Connection Functions*/
$link = mysqli_connect($host,$user,$pass) or die ("Connection was unsuccessful");
mysqli_select_db($link,"btwofficial");


	$id = $_GET['id'];
	echo "$id";

 	$sqlQuery = "DELETE FROM posts WHERE ID='$id'";
 	mysqli_query($link,$sqlQuery);
 	
 	header("Location:admin-panel.php");


?>