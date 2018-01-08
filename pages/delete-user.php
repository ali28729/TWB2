<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "btwofficial";

/*Connection Functions*/
$link = mysqli_connect($host,$user,$pass) or die ("Connection was unsuccessful");
mysqli_select_db($link,"btwofficial");


	$email = $_GET['email'];
	echo "$email";

 $sqlQuery = "DELETE FROM user WHERE Email='$email'";
 mysqli_query($link,$sqlQuery);
 

header("Location:admin-panel.php");

?>