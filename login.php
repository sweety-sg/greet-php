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
        <section class="login box">
            <h2 style="border-bottom: solid 1px #e6e6e6; padding: 0.5rem;">Log In</h2>
            <span id="login-error"></span>
            <form action="#">
                
                
                  <div class="field">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                    <span id="unameerror"></span>
                  </div>
                  
    
    
                <div class="field">
                  <input type="password" class="form-control" id="pwd" placeholder="Password" autocomplete="on">
                  <span id="pwderror"></span>
                </div>
                <div class="checkbox" >
                  <label style="display:inline; font-size: 20px;"> Remember me</label>
                  <input type="checkbox" style="width: 20px; height: 20px;">
                </div>
                <br>
                <div class="center-div">
                    <button class="btn" onclick="verify()">Log In</button>
                </div>
              </form>
              <div class="link field">
                Don't have an account? <a href="">Sign-Up</a>
              </div>

            
        </section>
    </body>
</html>