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
                    <button class="btn" id="picture" onclick="validpic()">Continue</button>
                </div>

            
        </section>
    </body>
    <script src="signup.js"></script>
</html>
<?php
//   function redirect($url) {
//     ob_start();
//     header('Location: '.$url);
//     ob_end_flush();
//     die();
// }
// header('location: users.php');
?>