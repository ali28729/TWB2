<?php
include "linkers/common-head.html";
include "linkers/signup-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php

	session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('connect.php');

if(isset($_SESSION['uid'])) {
    header("location: profile-page.php");    
}

else {

    //echo "<script>alert('Inside sign up script')</script>";
    if (isset($_POST['submit'])) { 

    $fullname = inputFilter($_POST['fullname']);
    $username = inputFilter($_POST['username']);
    $gender = inputFilter($_POST['optionsRadios']);
    $dob = inputFilter($_POST['dob']);
    $email = $_POST['email'];
    $password = inputFilter($_POST['password']);


    // echo "<script>alert('$fullname')</script>";
    // echo "<script>alert('$username')</script>";
    // echo "<script>alert('$gender')</script>";
    // echo "<script>alert('$dob')</script>";
    // echo "<script>alert('$email')</script>";
    // echo "<script>alert('$password')</script>";

    supInserter($email,$password,$dob,$gender);       //insert values into database table user 
    $userID = idAccess($username);                       //get userID    
                             //create new entry in userProfile table corresponding to userID
    $profileID = pidAccess($userID);                     //get profile ID of user
    $_SESSION['uid'] = $userID;                          //initialize new session variable 
    header("location: profile-page.php");                // Redirecting To User Profile Page 

    }
}


function inputFilter($fieldValue){
    $strip = strip_tags($fieldValue);
    $filter = htmlspecialchars($strip);
    return $filter;
}




	include "pages/header.php";
	include "pages/signup-page.html";	
	include "pages/footer.html";
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>