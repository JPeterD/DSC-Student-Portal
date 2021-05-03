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
  <?php include 'nav.php';
?>
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
