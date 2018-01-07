<?php

//session_destroy();         // Is Used To Destroy All Sessions
//Or
session_start();
if (isset($_SESSION['uid'])) {
	unset($_SESSION['uid']);               //Destroy Specified Session
	header("location: landing-page.php");  //redirect to landing page after signout
}

?>

