<?php

  $id = $_GET['id'];
  
  $sql = "SELECT Ppic FROM userprofile WHERE ID=$id";
  $result = mysqli_query($link, "$sql");
  $row = mysql_fetch_assoc($result);

  echo "$id";

  header("Content-type: image/jpg");
  echo $row['Ppic'];
?>
