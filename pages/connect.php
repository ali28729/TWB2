<?php
/*ignore it's a warning remover*/
error_reporting(E_ALL ^ E_DEPRECATED);

/*Variables for connection*/
$host = "localhost";
$user = "root";
$pass = "";
$database = "btwofficial";

/*Connection Functions*/
$link = mysql_connect($host,$user,$pass) or die ("Connection was unsuccessful");
mysql_select_db("btwofficial");


/*Custom Functions*/

function userTable($recidentifier,$recwantedColumn){

    $identifier = $recidentifier;
    $wantedColumn = $recwantedColumn;

    $sqlQuery = "SELECT * FROM user WHERE ID = $identifier";
    $rawData = mysql_query($sqlQuery);
    $results = mysql_fetch_array($rawData);

    return $results[$wantedColumn];
}

function profileTable($recidentifier,$recwantedColumn){
    
    $identifier = $recidentifier;
    $wantedColumn = $recwantedColumn;
    
    $sqlQuery = "SELECT * FROM userProfile WHERE PID = $identifier";
    $rawData = mysql_query($sqlQuery);
    $results = mysql_fetch_array($rawData);
    
    return $results[$wantedColumn];
}

function postsTable($recidentifier,$recwantedColumn,$recSeperator){
        
    $identifier = $recidentifier;
    $wantedColumn = $recwantedColumn;
        
    if($recSeperator == "post"){
    $sqlQuery = "SELECT * FROM posts WHERE UID=$identifier";
    }else if($recSeperator == "user"){
    $sqlQuery = "SELECT * FROM posts WHERE ID=$identifier";
    }

    $rawData = mysql_query($sqlQuery);
    $results = mysql_fetch_array($rawData);
        
    return $results[$wantedColumn];
}

function myPosts($recidentifier){
    
    $identifier = $recidentifier;
    
    $sqlQuery = "SELECT PID FROM my WHERE UID = $identifier";
    $rawData = mysql_query($sqlQuery);

    $datas = array();
        if(mysql_num_rows($rawData)>0){
            while($row = mysql_fetch_assoc($rawData)){
                $datas[] = $row;
            }
        }

    return $datas;
}

function favPosts($recidentifier){
    $identifier = $recidentifier;
    
    $sqlQuery = "SELECT PID FROM favorites WHERE UID = $identifier";
    $rawData = mysql_query($sqlQuery);

    $datas = array();
        if(mysql_num_rows($rawData)>0){
            while($row = mysql_fetch_assoc($rawData)){
                $datas[] = $row;
            }
        }

    return $datas;
}

/*Dua Custom Functions*/
function supInserter($email,$pass,$dob,$gender){

    $sqlQuery = "INSERT INTO `user` (`Email`,`Pass`,`DOB`,`Gender`) VALUES ('$email','$pass','$dob','$gender')";
    mysql_query($sqlQuery) or die(mysql_error());

}

function profileInserter($id, $fname, $sname,$Location, $about){

    $sqlQuery = "INSERT INTO `userprofile` (`Fname`,`Sname`,`PID`,'ID',`Location`,`About`) VALUES ('$fname','$sname','NULL','$id','$Location','$about')";
    mysql_query($sqlQuery) or die(mysql_error());
    
}



function idAccess($recidentifier){
    
        $identifier = $recidentifier;
    
        $sqlQuery = "SELECT * FROM user WHERE Email = '$identifier'";
        $rawData = mysql_query($sqlQuery);
        $results = mysql_fetch_array($rawData);
    
        return $results["ID"];
    }

function pidAccess($recidentifier){
        
        $identifier = $recidentifier;
        
        $sqlQuery = "SELECT * FROM userprofile WHERE ID = $identifier";
        $rawData = mysql_query($sqlQuery);
        $results = mysql_fetch_array($rawData);
        
        return $results["PID"];
}

function sinValidator($username,$recPassword){

    $sqlQuery = "SELECT * FROM user WHERE Email = '$username'";
    $rawData = mysql_query($sqlQuery);
    $results = mysql_fetch_array($rawData);

    $password = $results["Pass"];
    
    if($password == $recPassword){
        return 1;
    }else {
        return 0;
    }
}

function updatePass($username,$oldPass,$newPass){

    $status = "not set";
    $sqlQuery = "SELECT * FROM user WHERE Email = '$username'";
    $rawData = mysql_query($sqlQuery);
    $results = mysql_fetch_array($rawData);

    $strOldPass = $results["Pass"];

    if ($strOldPass == $oldPass){
        $sqlQuery = "UPDATE user SET Pass = '$newPass' WHERE Email = '$username'";
        mysql_query($sqlQuery) or die (mysql_error());
        $status = "Changed";
        return $status;
    }else{
        $status = "Not Changed, Invalid Old Password or Username";
        return $status;
    }
}

/*Ali specific functions*/

/*for global feed*/
function gPost(){
    $sqlQuery = "SELECT * FROM posts ORDER BY ID ASC";
    $rawData = mysql_query($sqlQuery);

    $datas = array();
    if(mysql_num_rows($rawData)>0){
        while($row = mysql_fetch_assoc($rawData)){
            $datas[] = $row;
        }
    }
    return $datas;

}



?>