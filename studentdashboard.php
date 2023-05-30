<?php 

require_once 'phpConnection/connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script language="javascript" type="text/javascript" src="asd.js"></script>
    
    <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 50%;
  position: relative;
  margin: auto;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<div >
    <p style="color:green; font-size:30px; padding:16px;text-align: center;float:left; ">ONLINE LIBRARY MANAGEMENT SYSTEM</p>

    <div style="text-align: right;margin-top:20px;margin-right:30px;font-size:20px;font-style: bold;text-transform: uppercase;"> 

     
    <?php
    
    session_start();
    $idd=$_SESSION['lid'];
   // $_SESSION['id']=$_SESSION['lid'];
    $sql = "SELECT * FROM signup1 where id=$idd";
    $result = $connect->query($sql);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
      echo "<tr>
      <td>".$row['name']." </td>
      </tr>";
    }
    }
    
   ?>
  
   </div>
  

    <button  
    type="submit"style="background:#4CAF50;color:white;float: right;text-align: center;width:150px;padding:10px;margin-top:40px;margin-right:30px;font-style: bold;outline: none;border:none;margin-bottom:5px;">
  
  <a style="text-decoration: none;" href="phpConnection/logout.php">LOGOUT</a></button>
    
 
  
 </br></br>
   <p style="background: green;height:5px;margin-top:50px"></p>
   </br>
<div class="navbar">
  <a class="active" href="studentdashboard.php">DASHBOARD</a>
  <a href="onlinebooks.php">Online Books</a>
  <a href="issuedbooks.php">Issued Books</a>
  <a href="sreturnbooklist.php">Returned Books</a>
  

  </div>
</br></br>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="images/img6.jpg" style="width:100%">
    <div class="text">Caption One</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="images/img7.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="images/img8.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="images/img9.jpg" style="width:100%">
    <div class="text">Caption Four</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 3</div>
    <img src="images/img10.jpg" style="width:100%">
    <div class="text">Caption Five</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
<script>
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
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
