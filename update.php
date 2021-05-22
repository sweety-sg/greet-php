<?php
include_once "config.php";
$user_s = $_REQUEST['user'];
$user_u = trim($user_s);
$user = strtolower($user_u);
setcookie("username" , $user);
$fname = $_REQUEST['name'];
$lname = $_REQUEST['lastname'];

$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
// $age = 90;
$gender = $_REQUEST['gender'];
$phn = $_REQUEST['phn'];
$username = $_COOKIE['username'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "UPDATE sweety_userdata
    SET 
        fname =\"" . $fname . "\"," . 
        "lname =\"" . $lname . "\"," .
        "username =\"" . $user . "\"," .
        "email =\"" . $email . "\"," .
        "age =\"" . $age . "\"," .
        "gender =\"" . $gender . "\"," .
        "phone =\"" . $phn . "\"" .
    "WHERE
    username=\"" . $username . "\";" ;
    $res= mysqli_query($conn, $sql);
if($res){
    //  $_SESSION["username"] = $user;
//     setcookie("username" , $username,time() - 60);
//    setcookie("username" , $user);
   
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
        setcookie("username" , $username);
    
}

}

    // echo $sql;


?>

<script>
    location.href= 'users.php';
</script>