<?php

session_start();
//echo "<script>alert('Inside Landing script')</script>";
error_reporting(E_ALL ^ E_DEPRECATED);

	include_once "connect.php";
if (isset($_SESSION['uid'])) {                         //if session variable is set
	header("location: ../profile-page.php");
}


if (isset($_POST['submit'])) { 

	$username = inputFilter($_POST['username']);             //apply filter to all variables 
	$password = inputFilter($_POST['password']);

	//echo "<script>alert('$username')</script>";
	//echo "<script>alert('$password')</script>";

	$rows = sinValidator($username,$password);              //validate login from database

	if ($rows == 1) {
		$userID = idAccess($username);                       //initialize new session variable
		$_SESSION['uid'] = $userID;
		header("location: ../profile-page.php");               // Redirecting To Profile Page      		
	}     

	else {
		header("location: landing-page.php");               // Redirecting To Landing Page		 
	}
}

/* && (!empty($_POST['username'])) && (!empty($_POST['password']))*/

function inputFilter($fieldValue){                            //XSS Protection 
    $strip = strip_tags($fieldValue);
    $filter = htmlspecialchars($strip);
    return $filter;
}

?>