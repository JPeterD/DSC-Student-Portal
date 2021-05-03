<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <link rel='icon' href='images/favicon/faviconhome.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
  <!--- This is my navigation -->
  <?php include 'nav.php';
?>
  <!--End of navigation -->
  <!-- Welcome -->
  <section id="welcome" class="welcome">
   <h1 class="topheader"><u> Home</u></h1>
   <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
 </section>
</body>
</html>
