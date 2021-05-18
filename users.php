<!DOCTYPE html>
<html>
    <head>
        <title>Greet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
        <link rel= "stylesheet" href="signup.css">
        <link rel="icon" href="https://www.freeiconspng.com/thumbs/handshake-icon/handshake-icon-16.png">
        <script src="https://kit.fontawesome.com/9499724b17.js" crossorigin="anonymous"></script>
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
            <form action="" method="post">
                <div class="name-details column">
                    <div class="field">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First name" onkeyup="namef()">
                        <span id="nameerror"></span>
                      </div>
                      <div class="field">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                        <span id="lastnameerror"></span>
                      </div>
                </div>
                
                  <div class="field">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" onkeyup="unamef()">
                    <span id="unameerror"></span>
                  </div>
                  <div class="field">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email (Optional)" onkeyup="emailf()">
                    <span id="emailerror"></span>
                  </div>

                  <div class="field">
                    <input type="text" class="form-control" id="phn-no" name="phn" placeholder="Mobile number" onkeyup="phnf()">
                    <span id="phnerror"></span>
                  </div>
    
                  <div class="field">
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" onkeyup="agef()">
                    <span id="ageerror"></span>
                  </div>
      
                  <div class="field drop">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="select">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Others</option>
                  </select>
                  </div>
    
    
                <div class="field">
                  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="New password" autocomplete="on" onkeyup="pwdf()">
                  <span id="pwderror"></span>
                </div>
    
                <div class="field">
                    <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Confirm password" autocomplete="on" onkeyup="pwd2f()">
                    <span id="pwd2error"></span>
                  </div>
    
                
    
                <div class="checkbox" >
                  <label style="display:inline; font-size: 20px;"> Remember me</label>
                  <input type="checkbox" style="width: 20px; height: 20px;">
                </div>
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
</html>
<?php
include_once "config.php";
$result = mysqli_query($conn, "SELECT * FROM crud2 ORDER BY id DESC");
?>