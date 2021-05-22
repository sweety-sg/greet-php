<?php
include_once "config.php";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["picUpload"]["name"]);
// $uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["picUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo $imageFileType;
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// if (file_exists($target_file)) {
//   echo "Sorry, file name already exists. Try renaming your file. ";
//   $uploadOk = 0;
// }
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  echo $uploadOk;
}
 else {
   echo $uploadOk . " hi";
  if (move_uploaded_file($_FILES["picUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["picUpload"]["name"])). " has been uploaded.";
    $picture=  $_FILES["picUpload"]["name"];
    $uname = $_COOKIE['username'];
    $sql = "UPDATE sweety_userdata SET picture =\"" . $picture . "\" WHERE username=\"" . $uname . "\";" ;
    $res= mysqli_query($conn, $sql);
    if($res){
      echo "<script type=\"text/javascript\">location.href= \"users.php\";</script>";
    }
    else{
      echo "Error in connection.Try again later. ";
    }
    
  } else {
    echo " Sorry, there was an error uploading your file.";
  }
}
?>