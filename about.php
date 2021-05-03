<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    About
  </title>
  <link rel='icon' href='images/favicon/faviconabout.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
  <!--- Navigation Bar  -->
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
  <section id="welcome" class="welcome">
    <h1 class="topheader"><u>About</u></h1>
  </section>
</body>
</html>