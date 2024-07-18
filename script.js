// show password javascript

function RegistershowPass() {
  let passwordField = document.getElementById("register-password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}

function LoginshowPass() {
  let passwordField = document.getElementById("login-password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}

// form register-login toggle

let loginForm = document.getElementById("login-form");
let registerForm = document.getElementById("register-form");

function TologinForm() {
  if ((loginForm.style.display = "none")) {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
  }
}

function ToregisterForm() {
  if ((registerForm.style.display = "none")) {
    registerForm.style.display = "block";
    loginForm.style.display = "none";
  }
}

// login section error mgs display section

// error name 
var loginNameError = document.getElementById('login-error-name');

function loginNameMgs() {
    let loginName = document.getElementById('login-name').value.trim();
    let fullname = loginName.split(' ');

    if (loginName.length == 0) {
        loginNameError.innerHTML = "Enter the Name";
        return false;
    } else if (fullname.length < 2) {
        loginNameError.innerHTML = "Enter full name (first and last name)";
        return false;
    } else if (fullname[0].length < 3 || fullname[1].length < 3) {
        loginNameError.innerHTML = "Each first name and last name should have at least 3 characters";
        return false;
    } else {
        loginNameError.innerHTML = "<i class='error-check-icon bx bxs-check-circle'></i>";
        return true;
    }
}

var loginPasswordError = document.getElementById('login-password-error');

function loginPasswordMsg(){
    let loginPassword = document.getElementById('login-password').value;
    if(loginPassword.length == 0){
        loginPasswordError.innerHTML = "Password required";
        return false;
    }else if(loginPassword.length<8){
        loginPasswordError.innerHTML = "Password must me 8 charecters";
        return false;
    }
    else{
        loginPasswordError.innerHTML ="<i class='error-check-icon bx bxs-check-circle'></i>";
        return true;
    }

}
var loginSubmitError = document.getElementById('submit-error');

function loginsubmitError(){

if(!loginNameMgs() || !loginPasswordMsg()){
    loginSubmitError.style.display="block";
    loginSubmitError.innerHTML ="Fix all problem";
    
    setTimeout(function(){loginSubmitError.style.display="none";},3000)
   
    return false;
}else{
    loginSubmitError.innerHTML ="<i class='error-check-icon bx bxs-check-circle'></i>";
    return true;
}
}

// register form validation 

var registerNameError = document.getElementById('register-error-name');

function registerNameValid(){
    let registerName = document.getElementById('register-name').value.trim();
    let fullname = registerName.split(' ');

    if(registerName.length<0){
        registerNameError.innerHTML = "Name required";
        return false;
    }
    else if(fullname<3){
        registerNameError.innerHTML = "Enter full name (first and last name)";
        return false;
    }
    else if(fullname[0].length<3 || fullname[1].length<3){
        loginNameError.innerHTML = "Each first name and last name should have at least 3 characters";
        return false;
    }
    else{
        registerNameError.innerHTML = "<i class='error-check-icon bx bxs-check-circle'></i>";
        return true;
    }


}
var registerEmailError = document.getElementById('register-error-email');

function registerEmailvalidate(){
    let registerEmail = document.getElementById('register-email').value.trim();
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(registerEmail.length<0){
        registerEmailError.innerHTML="Email required ";
        return false;
    }
    else if(!emailRegex.test(registerEmail)){
        registerEmailError.innerHTML="Enter a valid email";
        return false;
    }
    else{
        registerEmailError.innerHTML="<i class='error-check-icon bx bxs-check-circle'></i>";
        return true;
    }

}

var phoneError = document.getElementById('phone-error');

function phoneValidate(){
    let phone = document.getElementById('phone-error-msg').value.trim();
    let phoneRegex = /^\d{10}$/;

    if(phone.length<0){
        phoneError.innerHTML="Number Required";
        return false;
    }else if (!phoneRegex.test(phone)) {
        phoneError.innerHTML = "Enter a valid 10-digit phone number";
        return false;
}else{
    phoneError.innerHTML = "<i class='error-check-icon bx bxs-check-circle'></i>";
    return true;
}
}

var registerPasswordError = document.getElementById('register-password-error');

function registerPasswordValidate(){
    let registerPassword = document.getElementById('register-password').value;

    if(registerPassword.length<0){
        registerPasswordError.innerHTML="Password Required";
        return false;
    }else if(registerPassword.length<8){
        registerPasswordError.innerHTML="Password must contain 8 charecters";
        return false;
    }
    else{
        registerPasswordError.innerHTML="<i class='error-check-icon bx bxs-check-circle'></i>";
        return true;
    }



}

var registerSubmitError = document.getElementById('register-submit-error');

function registersubmitError(){

if(!registerNameValid() || !registerEmailvalidate() || !phoneValidate() || !registerPasswordValidate()){
    registerSubmitError.style.display="block";
    registerSubmitError.innerHTML ="Fix all problem";
    
    setTimeout(function(){registerSubmitError.style.display="none";},3000)
   
    return false;
}else{
    registerSubmitError.innerHTML ="<i class='error-check-icon bx bxs-check-circle'></i>";
    return true;
}
}



