<?php
include_once "config.php";
$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$sql = "SELECT password FROM sweety_userdata WHERE username=\"" . $username . "\";" ;
// echo $sql;
echo $username;
$result = mysqli_query($conn,$sql);
if($result -> num_rows>0){
    while ($pass = mysqli_fetch_assoc($result)) { 
        foreach ($pass as $password) {
        }
    }
    echo $pwd . $password;
        if($pwd==$password){
            echo 1;
          } 
          else{
              echo 0;
          } 
}
else{
    echo 00;
}
?>