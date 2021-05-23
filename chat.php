<?php
include_once "config.php";
$msg = $_REQUEST["q"];
if($msg != ""){
    $sender = $_COOKIE['sender'];
    $receiver = $_COOKIE['username'];
    $sql = "INSERT INTO sweety_chat (sender,receiver, msg)  VALUES ('$sender', 
    '$receiver','$msg')" ;
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "1";
    }
    else{
        echo "0";
    }
}
?>