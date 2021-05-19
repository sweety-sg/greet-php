<?php
$conn= mysqli_connect("127.0.0.1","first_year","first_pass","first_db");
$username = $_REQUEST['username'];
setcookie("username" , $username);
$fname = $_REQUEST['name'];
$lname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$phn = $_REQUEST['phn'];
$pwd = $_REQUEST['pwd'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "doing";
    $sql = "INSERT INTO sweety_userdata  VALUES ('$fname', 
    '$lname','$username','$phn','$age','$gender','$pwd','$email')" ;
    $res= mysqli_query($conn, $sql);
    // echo $sql;
    if($res){
    //    $_SESSION["uname"]= $username;
    //    echo $_SESSION["uname"]; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
        
    }
}

?>
<script>
    location.href = 'add-picture.php' ;
    </script>
