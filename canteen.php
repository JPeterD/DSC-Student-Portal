<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Canteen Menu</title>
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
    <h1 class="topheader"><u>Canteen Menu</u> </h1>
        <div class="menu">
          <h5 class="pollheader">Cateen #1</h5>
          <h2>Snacks</h2>
          <div>
            Pizza - 
            <span class="price">$3</span>
          </div>
          <div>
            Chicken - 
            <span class="price">$2</span>
          </div>
          <div>
            Bakes - 
            <span class="price">$3</span>
          </div>
        </div>
        <br>
         <div class="menu">
          <h5 class="pollheader">Canteen #2</h5>
          <h2>Snacks</h2>
          <div>
            Chicken and Chips
            <span class="price">$8</span>
          </div>
          <div>
            Wedges
            <span class="price">$6</span>
          </div>
          <h2>Drinks</h2>
          <div>
            Fruita
            <span class="price">$5</span>
          </div>
        </div>
  </section>
</body>
</html>
