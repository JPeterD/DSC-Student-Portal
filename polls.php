<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Polls
  </title>
  <link rel='icon' href='images/favicon/poll.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
  <!--- Navigation Bar begin -->

  <nav id="navbar" class="nav">
    <ul class="nav-list">
      <li>
        <a href="index.php"><font size=2><img src="images\home.png" height="27" width="27"></font>Home</img></a>
      </li>
      <li>
        <a href="about.php"><font size=2><img src="images\about.png" height="27" width="27"></font>About</img></a>
      </li>
      <li>
        <a href="polls.php"><font size=2><img src="images\poll.png" height="27" width="27"></font>Polls</img></a>
      </li>
      <li>
        <a href="login.php"><font size=2><img src="images\friend.png" height="27" width="27"></font>Login</img></a>
      </li>
      <li>
        <a href="signup.php"><font size=2><img src="images\signup.png" height="27" width="27"></font>Sign Up</img></a>
      </li>
      <li>
        <a href="canteen.html"><font size=2><img src="images\canteen.png" height= "27" width= "27"></font>Canteen Menu</img></a>
      </li>
      <li>
        <a href="busroute.html"><font size=2><img src="images\busroute.png" height="27" width="27"></font>Bus Route</img></a>
      </li>
      <li>
        <a href="contact.html"><font size=2><img src="images\contact.png" height= "27" width="27"></font>Contact<img></a>
      </li>
      <li>
        <a href="logout.php"><font size=2><img class="homeicon" src="images\contact.png" height= "27" width="27"></font>Logout<img></a>
      </li>
    </ul>
  </nav>

  <!--     Navigation Bar end       -->
  <section class="welcome">
    <h1 class="topheader"><u>Polls</u></h1>
    <div class="poll">
      <h6 class="pollheader">Poll #1 - Uploaded 25th March 2021</h6>
      <h2>Canteen food you like.</h2>
      <div class="container"> 
        <div class="checkbox">
         <input type="checkbox" id="checkbox" name="" value="">
         <label for="checkbox"><span>Pizza</span></label>
       </div>

       <div class="checkbox">
         <input type="checkbox" id="checkbox2" name="" value="">
         <label for="checkbox2"><span>Bakes/With filling</span></label>
       </div>
       <div class="checkbox">
         <input type="checkbox" id="checkbox3" name="" value="">
         <label for="checkbox3"><span>Chicken and Chips</span></label>
       </div>
     </div>
     <input class="btn" type="submit" name="" value="Submit">
   </div>
 </section>
</body>
</html>
