window.onload = () =>{
texts();
gotoBottom("chats");
}
setInterval(texts,5000);
function send(){
    var msg1 = document.getElementById("msg").value.trim();
    var msg2 = {message: msg1};
        var msg = JSON.stringify(msg2);
    // console.log(msg);
    if(msg1!=""){
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
        xhr.open("POST", "chat.php",true);
        xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
        xhr.send(msg);
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
            if(xhr.readyState==4 && xhr.status==200){
                var res = JSON.parse(this.responseText);
                var Data = res.data;
                var other = readCookie("sender");
                    chatArea.innerHTML="";
                    for(let i =  0 ; i < Data.length-1; i++){
                        let message = document.createElement("div");
                        message.innerHTML= Data[i].msg;
                        var sendr = Data[i].sender ;
                        if(other== sendr.trim()){
                            message.classList.add("receiver");
                        }
                        else{
                            message.classList.add("sender");
                        }
                        chatArea.appendChild(message);
                        gotoBottom("chats");
                    }
            }
        };
        xhr.open("GET","texts.php",true);
        xhr.send(); 
        xhr.onerror = function(){
            alert("An error occurred.");
        }       
}
function readCookie(name) {
	var cookiename = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
	}
	return null;
}
var input = document.getElementById("msg");
input.addEventListener("keyup", function(event) {
  if (event.key == "Enter") {
    event.preventDefault();
    document.getElementById("send").click();
  }
});
// var scrollingElement = (document.scrollingElement || document.body);
// scrollingElement.scrollTop = scrollingElement.scrollHeight;
function gotoBottom(id){
    var element = document.getElementById(id);
    element.scrollTop = element.scrollHeight - element.clientHeight;
 }