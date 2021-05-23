window.onload = () =>{
texts();
}
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
    chatArea.innerHTML="";
    console.log("called");
    var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if(xhr.readyState==4 && xhr.status==200){
                var res = JSON.parse(this.responseText);
                var Data = res.data;
                    console.log("done");
                    console.log(Data);
                    for(let i =  0 ; i < Data.length-1; i++){
                        let message = document.createElement("div");
                        message.innerHTML= Data[i].msg;
                        var other = readCookie("sender");
                        var sendr = Data[i].sender ;
                        if(other.toString()== sendr.toString()){
                            message.classList.add("sender");
                        }
                        else{
                            message.classList.add("receiver");
                        }
                        chatArea.appendChild(message);
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