<?php
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
  <?php include 'nav.php';
?>
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
