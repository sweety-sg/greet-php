<?php
include_once "config.php";
$username_s = $_REQUEST['username'];
$username_u = trim($username_s);
$username = strtolower($username_u);
$pwd = $_REQUEST['pwd'];
setcookie("username" , $username);
setcookie("password" , $pwd);
$fname = $_REQUEST['name'];
$lname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$phn = $_REQUEST['phn'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "signing up";
    $sql = "INSERT INTO sweety_userdata (fname,lname,username,phone,age,gender,password,email)  VALUES ('$fname', 
    '$lname','$username','$phn','$age','$gender','$pwd','$email')" ;
    $res= mysqli_query($conn, $sql);
    // echo $sql;
    if(!$res){
        echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
    } 
}

?>
<script>
    location.href = 'add-picture.php' ;
    </script>
