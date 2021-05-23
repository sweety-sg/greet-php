<?php
include_once "config.php";
$other = $_COOKIE['sender'];
$user = $_COOKIE['username'];
$sql = "SELECT * FROM sweety_chat WHERE (sender=\"" .$sender. "\" OR sender=\"" . $receiver . "\") AND (receiver=\"" .$sender. "\" OR receiver=\"" . $receiver . "\");" ;
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result) ){
        if($row["sender"]==$other){
           echo "<div class=\"receiver\">" .$row["msg"] . "</div>";
        }
        if($row["sender"]==$user){
           echo "<div class=\"sender\">" . $row["msg"] . "</div>";
        }
    }
}
?>