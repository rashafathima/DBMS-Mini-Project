function toggleSignup(){
    document.getElementById("login-toggle").style.backgroundColor="#fff";
     document.getElementById("login-toggle").style.color="#222";
     document.getElementById("signup-toggle").style.backgroundColor="#ec4a4a";
     document.getElementById("signup-toggle").style.color="#fff";
     document.getElementById("login-form").style.display="none";
     document.getElementById("signup-form").style.display="block";
 }
 
 function toggleLogin(){
     document.getElementById("login-toggle").style.backgroundColor="#ec4a4a";
     document.getElementById("login-toggle").style.color="#fff";
     document.getElementById("signup-toggle").style.backgroundColor="#fff";
     document.getElementById("signup-toggle").style.color="#ec4a4a;";
     document.getElementById("signup-form").style.display="none";
     document.getElementById("login-form").style.display="block";
 }

 function signup() {
    var Email = document.getElementById("Email");
    var password = document.getElementById("password");

    const promise = auth.createUserWithUsernameAndPassword(Email.value, password.value);
    promise.catch(e => alert(e.message));
    alert("SignUp Successfully");
}

//Login function
function login() {
    var Email = document.getElementById("Email");
    var password = document.getElementById("password");
    const promise = auth.signInWithUsernameAndPassword(Email.value, password.value);
    promise.catch(e => alert(e.message));
    alert("LogIn Successfully");
}


function Logout() {
    auth.Logout();
    alert("Logout Successfully from System");
}
 