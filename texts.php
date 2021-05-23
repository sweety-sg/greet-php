<?php
include_once "config.php";
$other = $_COOKIE['sender'];
$user = $_COOKIE['username'];
$sql = "SELECT * FROM sweety_chat WHERE (sender=\"" .$other. "\" OR sender=\"" . $user . "\") AND (receiver=\"" .$other. "\" OR receiver=\"" . $user . "\");" ;
$result=mysqli_query($conn, $sql);
echo("{\"data\":[");
if($result->num_rows> 0){
    while($row = mysqli_fetch_assoc($result) ){
        // if($row["sender"]==$other){
        //    echo "<div class=\"receiver\">" .$row["msg"] . "</div>";
        // }
        // if($row["sender"]==$user){
        //    echo "<div class=\"sender\">" . $row["msg"] . "</div>";
        // }
        echo("{\"sender\":\" " . $row["sender"] . " \",\"receiver\":\" " . $row["receiver"] . " \",\"msg\":\" " . $row["msg"] . " \"}");

    }
}

?>