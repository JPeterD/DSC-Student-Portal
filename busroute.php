<?php
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
    <?php include 'nav.php';
?>
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
