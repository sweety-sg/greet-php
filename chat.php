<?php
include_once "config.php";
$mess = json_decode(file_get_contents("php://input"));
$msg = $mess -> message;
if($msg != ""){
    $sender = $_COOKIE['sender'];
    $receiver = $_COOKIE['username'];
    // $sql = "INSERT INTO sweety_chat (sender,receiver, msg)  VALUES ('$sender', 
    // '$receiver','$msg')" ;
    $stmt1 = $conn->prepare("INSERT INTO sweety_chat (sender,receiver, msg)  VALUES (?,?,?)");
    $stmt1->bind_param("sss",$sender,$receiver,$msg);
    $stmt1->execute();
    $result = $stmt1->get_result();
    if($result){
        echo "1";
    }
    else{
        echo "0";
    }
}
?>