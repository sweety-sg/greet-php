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
        <section class="chat box" style= "height:800px; width:800px; overflow-y: scroll;">
            <button class = "btn" type="button" style= "width:70px;" onclick="back()">Back</button>
            <h2 style="border-bottom: solid 1px #e6e6e6; padding: 0.5rem;">Say hi!</h2>
            <span id="chat-error"></span>
            <div class="chats" id="chats">
                <?php
                // setInterval(function(){
                //     while($row = mysqli_fetch_assoc($result) ){
                //         if($row['sender']==$other){
                //            echo "<div class=\"receiver\">" .$row['msg'] . "</div>";
                //         }
                //         if($row['sender']==$user){
                //            echo "<div class=\"sender\">" . $row['msg'] . "</div>";
                //         }
                //     }
                // },1);
                
                ?>
                <!-- <a href = "javascript: test()">click</a> -->
                <!-- <div class="sender">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </div>
                <div class="receiver">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut .
                no idea
                </div> -->
            </div>
            <div class="message">
    <input type="text" name="msg" id="msg" style="width: 90%; height:40px ; ">
    <button type="button" class="btn" style="width: 10%; height:43px ; " onclick="send()">Send</button>
            </div>
        </section>
    </body>
    <script src= "chat.js"></script>
</html>
