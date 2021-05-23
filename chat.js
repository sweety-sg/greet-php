setInterval(texts,5000);
function send(){
    var msg = document.getElementById("msg").value.trim();
    // console.log(msg);
    if(msg!=""){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if(this.readyState==4 && this.status==200){
                    console.log("done");
                    console.log(this.responseText);
                    if (this.responseText == "1") {  
                        location.reload("chatbox.php");
                        return true;  
                      }
                    else if(this.responseText == "0") {
                          alert("An error occurred. Please try again.");
                          
                          return false;
                      }
                else{
                    alert("Error in connection!");
                    return false;
                }
            }
        };
        xhr.open("GET", "chat.php?q="+msg,true);
        xhr.send();
                    xhr.onerror = function(evt)
                    {
                      alert("An error occurred, Please try again.");
                    }           
    }
}
function test(){ console.log("worked");}
function back(){
    location.href="users.php";
}
function texts(){
    var chatArea = document.getElementById("chats");
    var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if(this.readyState==4 && this.status==200){
                    console.log("done");
                    console.log(this.responseText);
                    chatArea.innerHTML(this.responseText);
            }
        };
        xhr.open("GET", "texts.php",true);
        xhr.send();        
}