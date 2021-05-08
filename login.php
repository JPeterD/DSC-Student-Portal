<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel='icon' href='images/favicon/login.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />
</head>
<body>
  <?php
require('db.php');
session_start();

if (isset($_POST['username'])){

 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($connection,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($connection,$password);

        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($connection,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;

     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
  <!--- This is my navigation -->
  <?php include 'navout.php';
?>
  <!-- End of navigation -->
  <section class="welcome">
    <form name="formiguess" method="post" action="">
      <div class="loginbox">
        <h1 class="topheader">Login</h1>
        <div class="textbox">
          <img src="images/favicon/usericon.ico" id="usericon">
          <input id="username" type="text" placeholder="User ID" name="username" >
        </div>
        <div class="textbox">
          <img src="images/favicon/lockicon.ico" id="lockicon">
          <input id="password" type="password" placeholder="Password" name="password" >
        </div>
        <input class="btn" type="submit" name="submit" value="Sign in">
        <input class="btn" type="button" name="" id="regbtn" value="Register for an account">
        <input class="btn" type="reset" name="" value="Cancel">
      </div>
      <script src="websitejs.js">
      </script>
    </form>
  </section>
<?php }?>
</body>
</html>