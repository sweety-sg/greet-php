<?php
$conn= mysqli_connect("127.0.0.1","first_year","first_pass","first_db");
if(mysqli_connect_errno()){
echo "failed to connect";
}
else{
    // echo "conected";
}
if($conn){
    // echo "database connected";
}


// $php_inipath = php_ini_loaded_file();
  
// if ($php_inipath) {
//     echo 'Loaded php.ini is: ' . $php_inipath;
// } else {
//     echo 'A php.ini file is not loaded';
// }
// phpinfo();

?>