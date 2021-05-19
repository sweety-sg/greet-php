<?php
include_once "config.php";


// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $data = json_decode(file_get_contents("php://input"), TRUE);

    // $uname = $data -> user;
    $uname = $_REQUEST["q"];
    if(isset($_COOKIE['username'])){
        $cur_uname= $_COOKIE['username'];
    }
     $checkdata=" SELECT username FROM sweety_userdata WHERE username=" . "\"" . $uname . "\"" ;
     $result = mysqli_query($conn,$checkdata);
     if($uname==$cur_uname){
         echo "2";
         die();
     }
     if($result -> num_rows>0)
     {

      echo "0";
     }
     else
     {
      
      echo "1";
     }
     die();
     exit();


 



?>