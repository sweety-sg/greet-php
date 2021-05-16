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
if(mysqli_query($conn, $sql)){
    echo "<!DOCTYPE html>
    <html>
        <head>
            <title>Greet</title>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no\">
            <link rel= \"stylesheet\" href=\"signup.css\">
            <link rel=\"icon\" href=\"images/favicon.ico\">
            <script src=\"https://kit.fontawesome.com/9499724b17.js\" crossorigin=\"anonymous\"></script>
        </head>
        <body>
            <section class=\"picture box\">
                <h2 style=\"border-bottom: solid 1px #e6e6e6; padding: 0.5rem;\">Add a profile picture</h2>
                <form action=\"\">
                    
                    
                      <div class=\"field\">
                        <input type=\"file\" class=\"form-control\" id=\"dp\" placeholder=\"Add an image\">
                        <span id=\"imageerror\"></span>
                      </div>
                    <br>
                    <input type=\"submit\" style=\"display:none;\" id=\"dp-submit\"/>
                  </form>
                  <div class=\"center-div\">
                        <button class=\"btn\" id=\"picture\" onclick=\"\">Continue</button>
                    </div>
                  <!-- <div class=\"link field\">
                    Don't have an account? <a href=\"\">Sign-Up</a>
                  </div> -->
    
                
            </section>
        </body>
    </html>";
    // echo "<h3>data stored in a database successfully." 
    //     . " Please browse your localhost php my admin" 
    //     . " to view the updated data</h3>"; 

   
} else{
    // echo "ERROR: Hush! Sorry $sql. " 
    //     . mysqli_error($conn);
    
}


?>
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Greet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
        <link rel= "stylesheet" href="signup.css">
        <link rel="icon" href="images/favicon.ico">
        <script src="https://kit.fontawesome.com/9499724b17.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="picture box">
            <h2 style="border-bottom: solid 1px #e6e6e6; padding: 0.5rem;">Add a profile picture</h2>
            <form action="">
                
                
                  <div class="field">
                    <input type="file" class="form-control" id="dp" placeholder="Add an image">
                    <span id="imageerror"></span>
                  </div>
                <br>
                <input type="submit" style="display:none;" id="dp-submit"/>
              </form>
              <div class="center-div">
                    <button class="btn" id="picture" onclick="">Continue</button>
                </div>
              <!-- <div class="link field">
                Don't have an account? <a href="">Sign-Up</a>
              </div> -->

            
        </section>
    </body>
</html> -->