<?php
include_once "config.php";
$new = $_REQUEST['new'];
$username = $_COOKIE['username'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "UPDATE sweety_userdata
    SET 
        password =\"" . $new . "\" " . 
    "WHERE
    username=\"" . $username . "\";" ;
    $res= mysqli_query($conn, $sql);
if($res){
   echo "<script type='text/javascript'>location.href = \"users.php\";</script>"
} else{
    echo "<script type='text/javascript'>alert('Sorry, an error occured');</script>";
}
    
}

}
?>