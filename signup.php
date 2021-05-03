<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <link rel='icon' href='images/favicon/signup.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
<?php
// Include config file
require ('db.php');

if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($connection,$username); 
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($connection,$password);
        $query = "INSERT into `users` (username, password)
VALUES ('$username', '".md5($password)."')";
        $result = mysqli_query($connection,$query);
      if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
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
    <div class="loginbox">
      <h1 class="topheader">Register</h1>
      <form action="" method="post">
        <div class="textbox">
          <img src="images/favicon/usericon.ico" id="reguserico">
          <input id="username" type="text" placeholder="User ID" name="username" value="" required maxlength="10">
        </div>

        <div class="textbox">
          <img src="images/favicon/lockicon.ico" id="reglock1">
          <input id="password" type="password" placeholder="Password" name="password" value="" required>
        </div>

        <div class="textbox">
          <img src="images/favicon/lockicon.ico" id="reglock2">
          <input id="confirmpassword" type="password" placeholder="Confirm Password" name="confirm_password" value="" required>
        </div>
        <input class="btn" type="submit" name="btnsignup" value="Register" onclick="store()">
      </div>
    </form>
    <script src="websitejs.js"></script>
  </section>
<?php } ?>
</body>
</html>
