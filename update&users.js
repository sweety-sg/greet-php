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

function namef(){
    var name = document.getElementById('name').value;
    var nameregex = /^[a-zA-Z]+[a-zA-Z \s ,.'-]*[a-zA-Z']+$/g ;
    if(nameregex.test(name)){
        document.getElementById('nameerror').innerHTML = " ";
        return true;
    }
    else{
        document.getElementById('nameerror').innerHTML = "Name is invalid";
        return false;
    }
}
function lastnamef(){
    var name = document.getElementById('lastname').value;
    var nameregex = /^[a-zA-Z]+[a-zA-Z \s ,.'-]*[a-zA-Z']+$/g ;
    if(nameregex.test(name)){
        document.getElementById('lastnameerror').innerHTML = " ";
        return true;
    }
    else{
        document.getElementById('lastnameerror').innerHTML = "Name is invalid";
        return false;
    }
}

function agef(){
    var age = document.getElementById('age').value;
    var ageregex = /^[0-9]{1,3}$/g ;
    if(ageregex.test(age)&&(age>=13)&&(age<150)){
        document.getElementById('ageerror').innerHTML = " ";
        return true;
    }
    else{
        document.getElementById('ageerror').innerHTML = "Age is invalid or less than 13";
        return false;
    }
}

function emailf(){
    var email = document.getElementById('email').value;
    var emailregex = /^\w[\w_.]*@[A-Za-z]+(\.[A-Za-z]+)+$/g ;
    if(email ==""){
        document.getElementById('emailerror').innerHTML = " ";
        return true;
    }
    if(emailregex.test(email)){
        document.getElementById('emailerror').innerHTML = " ";
        return true;
    }
    else{
        document.getElementById('emailerror').innerHTML = "Email is invalid";
        return false;
    }
}

function phnf(){
    var phn = document.getElementById('phn-no').value;
    var phnregex = /^((\+91)|(91)|(0))?[6789][0-9]{9}$/;
    if(phnregex.test(phn)){
        document.getElementById('phnerror').innerHTML = " ";
        return true;
    }
    else{
        document.getElementById('phnerror').innerHTML = "Phone number is invalid.";
        return false;
    }
}

function unamef(){
    var usname=document.getElementById( "username" ).value;
    var str= usname;
    var unameerror = document.getElementById('unameerror');
    if(usname==""){
        document.getElementById('unameerror').innerHTML= "";
    }
    if(usname!=""){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if(this.readyState==4 && this.status==200){
                    console.log("done");
                    console.log(this.responseText);
                    if (this.responseText == "1") {
                        document.getElementById('unameerror').innerHTML= "Unique";
                        document.getElementById('unameerror').style.color= "green";
                        unameerror.classList.remove("error");
                        return true;
                        
                      }
                      if (this.responseText == "0"){
                          document.getElementById('unameerror').innerHTML="Username already exists";
                          document.getElementById('unameerror').style.color= "red";
                          unameerror.classList.add("error");
                          return false;
                      }
                      if (this.responseText == "2"){
                        document.getElementById('unameerror').innerHTML= "";
                        unameerror.classList.remove("error");
                        // document.getElementById('unameerror').style.color= "green";
                      }
            }
        };
        xhr.open("GET", "checkdata.php?q="+str,true);
        xhr.send();

                    xhr.onerror = function(evt)
                    {
                      alert("Error!");
                    }           
                    if(!unameerror.classList.contains("error")){
                        return true;
                    }  
                    else{
                        return false;
                    }  
    }
    
}

const submit = document.getElementById('submit');
function verify(){
    console.log("in it");
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;
    var phn = document.getElementById('phn-no').value;
    var usname=document.getElementById( "username" ).value;
    
    if(name==""||age==""|| gender==""||phn==""||usname==""){
        document.getElementById('incomplete-error').innerHTML = "Kindly fill all the required fields"
        return false;
    }
    else{
        document.getElementById('incomplete-error').innerHTML = ""
    }
    if(emailf()&&namef()&&agef()&&phnf()&unamef()==true){
        console.log('true');
        alert('update successful');
        submit.click();
        // setTimeout(location.reload(), 2000);  
          return true;
        
    }
    else{
        alert('update error');
        console.log('false');
        console.log(emailf());
        console.log(unamef());
        return false;
        
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
function logout(){
    var res = document.cookie;
    var multiple = res.split(";");
    for(var i = 0; i < multiple.length; i++) {
       var key = multiple[i].split("=");
       document.cookie = key[0]+" =; expires = Thu, 01 Jan 1970 00:00:00 UTC";
    }
    window.location.reload();
     location.href = "login.php";
    // var cookies = document.cookie.split(";");

    // for (var i = 0; i < cookies.length; i++) {
    //     var cookie = cookies[i];
    //     var eqPos = cookie.indexOf("=");
    //     var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    //     document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    //     console.log("hi");
    // }
   
    
}
function changedp(){
    location.href="add-picture.php";
}