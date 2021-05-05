<?php
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
    <form method="" action="">
    <div class="poll">
      <h6 class="pollheader">Poll #1 - Uploaded 25th March 2021</h6>
      <h2>Canteen food you like.</h2>
      <div class="container"> 
        <div class="checkbox">
         <input type="checkbox" id="checkbox" name="pizza" value="pizza">
         <label for="checkbox"><span>Pizza</span></label>
       </div>

       <div class="checkbox">
         <input type="checkbox" id="checkbox2" name="Bakes" value="Bakes">
         <label for="checkbox2"><span>Bakes/With filling</span></label>
       </div>
       <div class="checkbox">
         <input type="checkbox" id="checkbox3" name="C&C" value="C&C">
         <label for="checkbox3"><span>Chicken and Chips</span></label>
       </div>
     </div>
     <input class="btn" type="submit" name="" value="Submit">
   </div>
 </form>
 </section>
</body>
</html>
