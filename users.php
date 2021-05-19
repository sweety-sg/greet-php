<?php
include_once "config.php";
setcookie("username" , "a");
$uname = $_COOKIE["username"];
// $query = "SELECT * FROM sweety_userdata WHERE username=\"" . $uname . "\";";
// echo $query;
$fnameq = mysqli_query($conn, "SELECT fname FROM sweety_userdata WHERE username=\"" . $uname . "\";" );
$lnameq = mysqli_query($conn, "SELECT lname FROM sweety_userdata WHERE username=\"" . $uname . "\";" );
$emailq = mysqli_query($conn, "SELECT email FROM sweety_userdata WHERE username=\"" . $uname . "\";" );
$phnq = mysqli_query($conn, "SELECT phone FROM sweety_userdata WHERE username=\"" . $uname . "\";" );
$ageq = mysqli_query($conn, "SELECT age FROM sweety_userdata WHERE username=\"" . $uname . "\";" );
$genderq = mysqli_query($conn, "SELECT gender FROM sweety_userdata WHERE username=\"" . $uname . "\";" );
// foreach($fname as $f_name){
// print_r($f_name.$fname); 
// }
while ($f_name = mysqli_fetch_assoc($fnameq)) { 
    foreach ($f_name as $fname) {
        // $fname = $value ; 
    }
}
while ($l_name = mysqli_fetch_assoc($lnameq)) { 
    foreach ($l_name as $lname) {
    }
}
while ($emails = mysqli_fetch_assoc($emailq)) { 
    foreach ($emails as $email) {
    }
}
while ($phns = mysqli_fetch_assoc($phnq)) { 
    foreach ($phns as $phn) {
    }
}
while ($ages = mysqli_fetch_assoc($ageq)) { 
    foreach ($ages as $age) {
    }
}
while ($genders = mysqli_fetch_assoc($genderq)) { 
    foreach ($genders as $gender) {
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Greet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
        <link rel= "stylesheet" href="signup.css">
        <link rel="icon" href="https://www.freeiconspng.com/thumbs/handshake-icon/handshake-icon-16.png">
        
    </head>
    <body>
        <div class="three-divs" style="display:flex; flex-direction:column; align-items:center;">
        <div class="navigate">
        <button class="up-btn btn" id="up-btn" onclick="upnav()">Update Profile</button>
        <button class="user-btn btn" id="user-btn" onclick="usernav()">Users</button>
        </div>
        <br>
        <div class="users box">
            <h4 style="border-bottom: solid 1px #e6e6e6; padding: 0.5rem;">Now you can GREET your friends</h2>
            <header>
                <div class="content">
                    <img src="" alt="">
                    <div class="details">
                        <span>Name surname</span>
                        <p> You</p>
                    </div>
                    
                </div>
                <a href="#" class="logout btn">Logout</a>
            </header>
            <div class="search">
                <input type="text" placeholder="Search Greet">
                <button><i class="fas fa-search"></i></button>
            </div>   
            <div class="users-list">
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="content">
                        <img src="" alt="">
                        <div class="details">
                            <span>online user</span>
                        </div>
                    </div>
                </a>
            </div>
</div>

        <div class="update box">
            <h2 style="border-bottom: solid 1px #e6e6e6; padding: 0.5rem;">Update profile</h2>
            <span id="incomplete-error"></span>
            <form action="update.php" method="post">
                <div class="name-details column">
                    <div class="field">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First name" onkeyup="namef()" value=<?php echo $fname ?>>
                       
                        <span id="nameerror"></span>
                      </div>
                      <div class="field">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" value=<?php echo $lname ?>>
                        <span id="lastnameerror"></span>
                      </div>
                </div>
                
                  <div class="field">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" onkeyup="unamef()" value=<?php echo $uname ?>>
                    <span id="unameerror"></span>
                  </div>
                  <div class="field">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email (Optional)" onkeyup="emailf()" value=<?php echo $email ?>>
                    <span id="emailerror"></span>
                  </div>

                  <div class="field">
                    <input type="text" class="form-control" id="phn-no" name="phn" placeholder="Mobile number" onkeyup="phnf()" value=<?php echo $phn ?>>
                    <span id="phnerror"></span>
                  </div>
    
                  <div class="field">
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" onkeyup="agef()" value=<?php echo $age ?>>
                    <span id="ageerror"></span>
                  </div>
      
                  <div class="field">
                  <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender"  value=<?php echo $gender ?>>
                  </div>
    

                <!-- <div class="field">
                  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Old password" autocomplete="on" onkeyup="opwdf()">
                  <span id="pwderror"></span>
                </div>
    
                <div class="field">
                    <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="New password" autocomplete="on" onkeyup="npwdf()">
                    <span id="pwd2error"></span>
                  </div> -->
    
                
    
                <br>
                <input type="submit" style="display:none;" id="submit"/>
              </form>
              <div class="center-div">
                <button class="btn" onclick="verify()">Update</button>
            </div>
              <br>

            
</div>

        </div>
       
    </body>
    <script src="update&users.js"></script>
    <script src="https://kit.fontawesome.com/9499724b17.js" crossorigin="anonymous"></script>
</html>
