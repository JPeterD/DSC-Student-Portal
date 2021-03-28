//This just redirects the button the registration page.
document.getElementById("regbtn").onclick = function() {
  location.href = "signup.html";
}

//This is for verifying the form details
function Validation()
{
  var username = document.forms["formiguess"]["username"];
  var password = document.forms["formiguess"]["password"]

  if(username.value == "")
  {
    window.alert("You have not entered a username.");
    username.focus();
    return false;
  }

  if(password.value == "")
  {
    window.alert("Invalid Password");
    password.focus();
    return false;
  }
  return true;
}

//This is for storing registration details
var confirm_password = document.getElementById("confirmpassword");
function store() {
  if(username.value !="" && password.value != "" && confirm_password.value != ""){
    localStorage.setItem('username', username.value);
    localStorage.setItem('password', password.value);
  }
  else{
    window.alert("Invalid registration details")
  }
  if(password.value = confirm_password.value && password.value != ""){
    window.alert("You have registered");
    password.focus();
  }
}

//This is to check if the stored details are the same as the entered ones.
function check() {

  var storedName = localStorage.getItem('username');
  var storedPw = localStorage.getItem('password');


  var userName = document.getElementById('username');
  var userPw = document.getElementById('password');


  if(userName.value == storedName && userPw.value == storedPw) {
    alert('You are now logged in.');
  }
  else {
    alert('Incorrect login details');
  }
}
