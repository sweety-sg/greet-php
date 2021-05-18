<?php
include_once "config.php";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
//     $data = $_REQUEST['val1'];
  
//     if (empty($data)) {
//         echo "data is empty";
//     } else {
//         echo $data;
//     }
// }

$fname = $_REQUEST['name'];
$lname = $_REQUEST['lastname'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$phn = $_REQUEST['phn'];
$pwd = $_REQUEST['pwd'];
// echo($fname);
// print_r($_REQUEST);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO sweety_userdata  VALUES ('$fname', 
    '$lname','$username','$phn','$age','$gender','$pwd','$email')" ;
}
$res= mysqli_query($conn, $sql);
echo $res;
if($res){
   setcookie("username" , $username);
    // echo "<h3>data stored in a database successfully." 
    //     . " Please browse your localhost php my admin" 
    //     . " to view the updated data</h3>"; 
    // header('location: add-picture.php');
   
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
    
}
?>
