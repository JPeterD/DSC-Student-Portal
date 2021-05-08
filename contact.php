<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <link rel='icon' href='images/favicon/faviconcontact.ico' type='image/x-icon'/ >
  <link rel="stylesheet" type="text/css" href="websitecss.css" />  <!--- My External CSS File -->
</head>
<body>
  <!--- This is my navigation bar -->
    <?php include 'nav.php';
?>
  <!-- End of navigation bar -->
  <section id="welcome" class="welcome">
    <h1 class=topheader><u>Contact</u></h1>
    <form id="emailform" action="mailto:jahrespeter@gmail.com" method="POST" enctype="multipart/form-data">
      <span id="emailme">
        <u>Email us</u>
      </span>
      <br>
      <span>
        Your message:
      </span>
      <br>
      <textarea name="VisitorComment" rows="6" cols="50">
      </textarea>
      <br>
      <input class="btn"type="submit" id="emailsubmit" value="Email This Form">
    </form>
  </section>
</body>
</html>