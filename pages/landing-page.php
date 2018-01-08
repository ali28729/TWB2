	<?php
include "linkers/common-head.html";
include "linkers/landing-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php

session_start();
//echo "<script>alert('Inside Landing script')</script>";
error_reporting(E_ALL ^ E_DEPRECATED);

	include_once "connect.php";
if (isset($_POST['submit'])) { 

    $fullname = inputFilter($_POST['fullname']);
    $username = inputFilter($_POST['username']);
    $gender = inputFilter($_POST['optionsRadios']);
    $dob = inputFilter($_POST['dob']);
    $password = inputFilter($_POST['password']);


    // echo "<script>alert('$fullname')</script>";
    // echo "<script>alert('$username')</script>";
    // echo "<script>alert('$gender')</script>";
    // echo "<script>alert('$dob')</script>";
    // echo "<script>alert('$email')</script>";
    // echo "<script>alert('$password')</script>";

    supInserter($username,$password,$dob,$gender);       //insert values into database table user 
    $userID = idAccess($username);                       //get userID    
                             //create new entry in userProfile table corresponding to userID
    $profileID = pidAccess($userID);                     //get profile ID of user
    $_SESSION['uid'] = $userID;                          //initialize new session variable 
    header("location: profile-page.php");                // Redirecting To User Profile Page 

    }

    function inputFilter($fieldValue){
    $strip = strip_tags($fieldValue);
    $filter = htmlspecialchars($strip);
    return $filter;
	}

	include "pages/header.php";
	include "pages/landing-page.html";
	include "pages/footer.html";	
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>