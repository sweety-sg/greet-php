<?php
include_once "config.php";
$errortext = "";
$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$sql = "SELECT password FROM sweety_userdata WHERE username=\"" . $username . "\";" ;
// echo $sql;
$result = mysqli_query($conn,$sql);
while ($pass = mysqli_fetch_assoc($result)) { 
    foreach ($pass as $password) {
    }
}
// echo $pwd ." no";
// echo $password . " yo";
if($pwd ==$password){
  $errortext = "";
//   setcookie("username",$username);
//   setcookie("password", $pwd);
//   header('location : users.php');
  echo 1;
}
else{
    $errortext = "Invalid credentials";
    echo 0;
}
?>