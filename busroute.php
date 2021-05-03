<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Route</title>
  <link rel='icon' href='images/favicon/canteen.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
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
      <li>
        <a href="logout.php"><font size=2><img class="homeicon" src="images\contact.png" height= "27" width="27"></font>Logout<img></a>
      </li>
    </ul>
  </nav>
  <!-- End of navigation -->
  <section class="welcome">
    <h1 class="topheader"><u>Bus Route</u> </h1>
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1hn19MGwk1WsgXpvHj0_Hc0qaTtqo3WFr" width="640" height="480"></iframe>
    <h2>Times buses often leave</h2>
    <table>
      <h4>Monday - Wednesday - Friday </h4>
      <tr>
        9:15 - 10:30 - 11:45 - 13:00 - 14:15 - 15:30 - 16:45 - 18:00
      </tr>
      <h4> Tuesday - Thursday</h4>
      <tr>
        9:45 - 11:30 - 13:15 - 15:00 - 16:45 - 18:30
      </tr>
    </table>
  </section>
</body>
</html>