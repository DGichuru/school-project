<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<head>
  <title>Voting Day</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="js/scripts.js"></script>
</head>
<body>

  <div class="topnav">
    <a class="active" href="home.html">Home </a>
    <a href="candidates2.php">Vote</a>
    <a href="">Department</a>
    <a href="results.php">Results</a>
    <div class="topnav-right">
      <a href = "logout.php" >Log out
      </a>
    </div>
  </div>
  
  
  <div class="sidebar">
    
    <div class="sidenav">
      <a href="#">Voting Process</a>
      <a href="#">School Journal</a>
      <a href="#">Constitution</a>
      <a href="#">Contact</a>
    </div>
  </div>
  
  <div class="content">

    <p id ="content1">Voting day is here. Free and fair elections at the comfort of your home, library and hostel.</p>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/voting.jpg" style="width:100%">
        <div class="text">Vote</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/slider6.png" style="width:100%">
        <div class="text">Vote</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/slider2.png" style="width:100%">
        <div class="text">Vote</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
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

