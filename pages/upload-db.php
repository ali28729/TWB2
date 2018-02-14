<?php
	include_once "connect.php";

$host = "localhost";
$user = "root";
$pass = "";
$database = "btwofficial";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$a = $_POST["stitle"];
$b = $_POST["sgenre"];
$c = $_POST["slocation"];
$d = $_POST["sstory"];
$e = $_POST["zeblob"];
$f = 0;
$g = file_get_contents($_FILES['spic']['tmp_name']);

print_r($_FILES);
/*Connection Functions*/
$link = mysqli_connect($host,$user,$pass,$database) or die ("Connection was unsuccessful");
mysqli_select_db($link,$database);

$sqlQuery = "INSERT INTO posts (UID,Text,Title, Pic, Genre,Location,FavCount) VALUES ('$e', '$d', '$a', $g , '$b', '$c','$f')";
mysqli_query($link, $sqlQuery) or die(mysqli_connect_error());
mysqli_close($link);
header("Location:feed-page.php");
?>

