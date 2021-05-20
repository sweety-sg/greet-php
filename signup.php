<?php
$conn= mysqli_connect("127.0.0.1","first_year","first_pass","first_db");
$username = $_REQUEST['username'];
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
    $sql = "INSERT INTO sweety_userdata  VALUES ('$fname', 
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
