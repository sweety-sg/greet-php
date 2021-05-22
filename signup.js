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

// function genderf(){
//     var gender = document.getElementById('gender').value;
//     var genderregex = /^[a-zA-Z\s-]+$/g ;
//     if(genderregex.test(gender)){
//         document.getElementById('gendererror').innerHTML = " ";
//         return true;
//     }
//     else{
//         document.getElementById('gendererror').innerHTML = "Enter a valid gender";
//         return false;
//     }
// }

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

function pwdf(){
    var pwd = document.getElementById('pwd').value;
    var pwdregex= /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z\d.@$!%*#^?&]{8,}$/g;
    if(pwdregex.test(pwd)){
        document.getElementById('pwderror').innerHTML = " ";
        return true;
    
    }
    else{
        document.getElementById('pwderror').innerHTML = "Password must contain atleast 8 characters including atleast 1 alphabet and 1 digit";
        return false;
    }
}
function pwd2f(){
    var pwd = document.getElementById('pwd').value;
    var pwd2 = document.getElementById('pwd2').value;
    if(pwd2==pwd){
        document.getElementById('pwd2error').innerHTML =" ";
        return true;
    }
    else{
        document.getElementById('pwd2error').innerHTML = "Passwords doesn't match"
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






function verify(){
    console.log("in it");
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;
    var pwd = document.getElementById('pwd').value;
    var pwd2 = document.getElementById('pwd2').value;
    var phn = document.getElementById('phn-no').value;
    var usname=document.getElementById( "username" ).value;
    
    if(name==""||age==""|| gender==""||pwd==""||pwd2==""||phn==""||usname==""){
        document.getElementById('incomplete-error').innerHTML = "Kindly fill all the required fields"
        return false;
    }
    else{
        document.getElementById('incomplete-error').innerHTML = ""
    }
    if(emailf()&&pwdf()&&pwd2f()&&namef()&&agef()&&phnf()&unamef()==true){
        console.log('true');
        alert('sign-up successful');
        submit.click();
          return true;
        
    }
    else{
        alert('sign-up error');
        console.log('false');
        console.log(pwdf());
        console.log(emailf());
        console.log(unamef());
        return false;
        
    }

}

function unamef(){
    var usname=document.getElementById( "username" ).value.toLowerCase().trim();
    data = {user: usname};
    var str= usname;
    
    
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
                        
                        return true;
                        
                      }
                      if (this.responseText == "0"){
                          document.getElementById('unameerror').innerHTML="Username already exists";
                          document.getElementById('unameerror').style.color= "red";
                          
                          return false;
                      }
                
            }
        };
        xhr.open("GET", "checkdata.php?q="+str,true);
        // xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
        xhr.send();
        // var data= {};
        // data.username = usname;
                    xhr.onerror = function(evt)
                    {
                      alert("Error!");
                    }           
                    if(document.getElementById('unameerror').innerHTML== "Unique"){
                        return true;
                    }  
                    else{
                        return false;
                    }  
    }
    
}

const form = document.querySelector(" .signup form");
const signup = document.querySelector(".signup .center-div");
const submit = document.getElementById('submit');
const picture = document.getElementById('picture');
const dpsubmit = document.getElementById('dp-submit');
// form.onsubmit=(e) =>{
//     verify();
//     e.preventDefault();
    
// }
function continuepic(){
    var form = document.querySelector('form');
        console.log("continuing");
       
        //    form.submit;
           location.href = 'users.php';
        
}
function validation(){
    var usname = document.getElementById( "username" ).value;
    var pwd = document.getElementById( "pwd" ).value;
    var remember = document.getElementById("remember").checked;
    var loginerr = document.getElementById('login-error');
    var submit = document.getElementById("submit");
    console.log(usname);

    if(usname !=""){
        
        var xhr = new XMLHttpRequest();
        var data= {};
            data.username = usname;
            data.pwd = pwd;
            console.log(data);
            xhr.onreadystatechange = function() {
                if(remember==true){
                    rememberCookie("rem-u",usname,30000);
                    rememberCookie("rem-p",pwd,30000);
                }
                if(this.readyState==4 && this.status==200){
                        console.log("done");
                        console.log(this.responseText);
                        if (this.responseText == 1) {
                            setCookie("username",usname);
                            setCookie("password",pwd);
                            location.href = "users.php";
                            return true;
                            
                          }
                          if (this.responseText == 0){
                              loginerr.innerHTML="Invalid credentials";
                              loginerr.style.color= "red";
                              
                              return false;
                          }
                    
                }
            };
            xhr.open("POST", "validation.php",true);
            xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
            xhr.send(JSON.stringify(data));
            
                        xhr.onerror = function(evt)
                        {
                          alert("Error!");
                        }   
    }
    else{
        loginerr.innerHTML="Please enter credentials";
        loginerr.style.color= "red";
    }
           
}
if ( window.history.replaceState ) { window.history.replaceState( null, null, window.location.href ); }
function setCookie(cname, cvalue) {
    // var d = new Date();
    // d.setTime(d.getTime() + (exdays*24*60*60*1000));
    // var expires = "expires="+ d.toUTCString();
    // document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    document.cookie = cname + "=" + cvalue + ";" ;
  }
  function rememberCookie(cname,cvalue,exdays){
      console.log("true")
      var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    console.log(expires);
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    console.log(document.cookie);
  }






