window.onload = () =>{
    document.querySelector(".navigate .user-btn").click();
}
var upbox = document.querySelector(".update");
var userbox = document.querySelector(".users");
function upnav(){
upbox.style.display= "block";
userbox.style.display= "none"
}
function usernav(){
    upbox.style.display= "none"
    userbox.style.display= "block"
}