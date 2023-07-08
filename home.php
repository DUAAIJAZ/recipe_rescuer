<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 100px;
  padding: 10px 15px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
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
  .text {font-size: 11px}
}

<!----swap up--->
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color:rgba(255,99,71,0.5);
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
  opacity:0.5;
 
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 60%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  opcity:-10%;
}

.h1{

width:60%;
margin:160px auto 0;
text-align:center:
color:#fff;
}
.h3{
  width: 60%;
  margin: 160px auto 0;
  text-align: center;
  font-size: 15px;
}


</style>

</head>
<body style="background: linear-gradient(45deg, yellow, white, pink, purple);">


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="s1.jpg" style="width:100%">
  <div class="text"><h1>WELCOME TO RECIPE RESCUER</h1>
    <h3> Where you can find recipes according to ur kitchen's needs</h3>

  </div>
 
</div>
</div>




<br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
    
}
</script>


<div>
<nav>
<div class="logo">RESCIPE RESCUER</div>
<ul>
<li><a href="home.php" class="active">HOME</a></li>
<li><a href="recipe.php">RECIPE FINDER</a></li>
<li><a href="GALLERY.php">GALLERY</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="logout.php">LOGOUT</a></li>


</ul>
</nav>

<br>
<br>
<br>
<br>
<br>
<br>





<footer class="footer">
  <div class="container">
  <div class="row">
  <div class="footer-col">
  <h4>DETAILS</h4>
  <ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="recipe.php">RECIPE RESCUER</a></li>
<li><a href="GALLERY.php">GALLERY</a></li>
<li><a href="contact.php">CONTACT US</a></li>

  </ul>
  </div>
  <div class="footer-col">
  <h4>TOP CHEFS</h4>
  <ul>
<li><a href="#">Massimo Bottura</a></li>
  <li><a href="#">Daniel Humm</a></li>
  <li><a href="#">Virgilio Martínez</a></li>
  <li><a href="#">Joan Roca</a></li>
<li><a href="#">Heston Blumenthal</a></li>

 
  </div>


  <div class="footer-col">
  <h4>YEARS ACTIVE</h4>
  <ul>
  <li><a href="#">Since 1980</a></li>
  <li><a href="#">Since 2000</a></li>
  <li><a href="#">Since 2000</a></li>
  <li><a href="#">Since 1980</a></li>
<li><a href="#">Since 1990</a></li>
  </ul>
  </div>
  <div class="footer-col">
  <h4>follow us</h4>
  <div class="social-links">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"> <i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-chrome"></i></a>
  </div>
  </div>
  </div>
  </div>
  </footer>





</body>
</html>