<?php
	include_once "connect.php";

$host = "localhost";
$user = "root";
$pass = "";
$database = "btwofficial";



$third = $_POST["stitle"];
$fifth = $_POST["sgenre"];
$sixth = $_POST["slocation"];
$second = $_POST["sstory"];
$first = $_POST["zeblob"];
$seventh = 0;
$fourth = file_get_contents($_FILES['spic']['tmp_name']);

/*Connection Functions*/
$link = mysqli_connect($host,$user,$pass) or die ("Connection was unsuccessful");
mysqli_select_db($link,"btwofficial");

$sqlQuery = "INSERT INTO posts (UID,Text,Title, Genre,Location,FavCount) VALUES ('$first', '$second', '$third', '$fifth', '$sixth','$seventh')";
mysql_query($sqlQuery) or die(mysql_error());
header("Location:feed-page.php");
?>

