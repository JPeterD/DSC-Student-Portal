<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel='icon' href='images/favicon/login.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
  <?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($connection,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($connection,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($connection,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
  <!--- This is my navigation -->
  <nav id="navbar" class="nav">
    <ul class="nav-list">
      <li>
        <a href="index.php"><font size=2><img class="homeicon" src="images\home.png" height="27" width="27"></font>Home</img></a>
      </li>
      <li>
        <a href="about.php"><font size=2><img class="homeicon" src="images\about.png" height="27" width="27"></font>About</img></a>
      </li>
      <li>
        <a href="polls.php"><font size=2><img class="homeicon" src="images\poll.png" height="27" width="27"></font>Polls</img></a>
      </li>
      <li>
        <a href="login.php"><font size=2><img class="homeicon" src="images\friend.png" height="27" width="27"></font>Login</img></a>
      </li>
      <li>
        <a href="signup.php"><font size=2><img class="homeicon" src="images\signup.png" height="27" width="27"></font>Sign Up</img></a>
      </li>
      <li>
        <a href="canteen.php"><font size=2><img class="homeicon" src="images\canteen.png" height= "27" width= "27"></font>Canteen Menu</img></a>
      </li>
            <li>
        <a href="busroute.php"><font size=2><img src="images\busroute.png" height="27" width="27"></font>Bus Route</img></a>
      </li>
      <li>
        <a href="contact.html"><font size=2><img class="homeicon" src="images\contact.png" height= "27" width="27"></font>Contact<img></a>
      </li>
    </ul>
  </nav>
  <!-- End of navigation -->
  <section class="welcome">
    <form name="formiguess" method="post" action="">
      <div class="loginbox">
        <h1 class="topheader">Login</h1>
        <div class="textbox">
          <img src="images/favicon/usericon.ico" id="usericon">
          <input id="username" type="text" placeholder="User ID" name="username" >
        </div>
        <div class="textbox">
          <img src="images/favicon/lockicon.ico" id="lockicon">
          <input id="password" type="password" placeholder="Password" name="password" >
        </div>
        <input class="btn" type="submit" name="submit" value="Sign in">
        <input class="btn" type="button" name="" id="regbtn" value="Register for an account">
        <input class="btn" type="reset" name="" value="Cancel">
      </div>
      <script src="websitejs.js">
      </script>
    </form>
  </section>
<?php }?>
</body>
</html>