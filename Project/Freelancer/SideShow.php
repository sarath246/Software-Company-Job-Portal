
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #FFF;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #FFF;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3.5s;
  animation-name: fade;
  animation-duration: 3.5s;
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
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="https://static.javatpoint.com/images/logo/php-logo.png"/>&nbsp;&nbsp;&nbsp;
  <img src="https://static.javatpoint.com/images/logo/javahome.png">java&nbsp;&nbsp;&nbsp;
  <img src="https://static.javatpoint.com/images/logo/androidhome.png"/>Android&nbsp;&nbsp;
  <img src="https://www.specusa.com/images/iOS_img.jpg"/>ios&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="https://static.javatpoint.com/csharp/net/images/net-home.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="https://static.javatpoint.com/images/logo/pythonhome.png"/>Python&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://static.javatpoint.com/images/logo/sqlhome.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://www.specusa.com/images/perldevelop_color.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://static.javatpoint.com/tutorial/swift/images/swift-home.png"/>Swift&nbsp;&nbsp;
<img src="https://static.javatpoint.com/linux/images/linux-logo.png"/>Linux&nbsp;&nbsp;
<img src="https://static.javatpoint.com/tutorial/sas/images/sas-home.png"/>&nbsp;&nbsp;
<img src="https://static.javatpoint.com/ruby/images/ruby-home.png"/>&nbsp;&nbsp;

</div>

<div class="mySlides fade">
  
  <img src="https://static.javatpoint.com/images/logo/javahome.png" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="https://static.javatpoint.com/images/logo/html-tutorial.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/images/logo/jquery.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/tutorial/ethical-hacking/images/ethical-hacking-home.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/tutorial/nginx/images/nginx-home.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/db2/images/db2-home.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/images/logo/javascripthome.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/bootstrappages/images/bootstrap-logo.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/wordpress/images/wordpress.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/java/swing/images/java-swing-tutorial.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/jsf/images/jsf-home.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="https://static.javatpoint.com/images/logo/hr.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  
</div>

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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>