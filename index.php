<?php
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

<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="slide/slide.png" style="width:500px;">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="slide/slide1.jpg" style="width:500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="slide/slide2.jpeg" style="width:500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="slide/slide3.jpg" style="width:500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="slide/slide4.jpg" style="width:500px">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>

</div>
 </section>
 <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>