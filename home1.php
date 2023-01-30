<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/imglink.css">
<link rel="stylesheet" href="css/footer.css">
<script src="js/slider.js"></script>
<style>

</style>
</head>
<body>

<div class="topnav">
  <a class="logo" href="home1.php">O&O shopee</a>
  <a class="active" href="home1.php">Home</a>
  <a href="shop1.php">Shop</a>
  <a href="contact1.php">Contact</a>
  <a href="about1.php">About</a>
  <a class="lgot" href="logout1.php">Log_out</a>
</div>
<!--image slider start-->

 <div class="slider">
   <div class="slides">
   <!--radio buttons start-->
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">
   <!--radio buttons end-->
   <!--slide images start-->
   <div class="slide first">
   <a href="https://www.w3schools.com">
     <img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg" alt="">
   
   </div>

   <div class="slide">
   <a href="https://www.w3schools.com">
      <img src="https://wallpaperaccess.com/full/1154341.jpg" alt="">
   </div>
   <div class="slide">
   <a href="https://www.w3schools.com">
      <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="">
   </a>
   </div>
   <div class="slide">
   <a href="https://www.w3schools.com">
      <img  src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt="">
   </a>
   </div>

  <!--slide images end-->

 </div>

 <!--manual navigation start-->
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>
 <!--manual navigation end-->
 </div>

<!--image slider end-->

<!-- img link -->
<div style="text-align:center">
  <h2>Best Mobiles</h2>
</div>
<div class="row">
  <div class="column">
    <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt="Nature" style="width:100%">
  </div>
  <div class="column">
    <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt="Lights" style="width:100%">
  </div>
</div>
<!-- end -->
<footer>
<div class="row1">
	<div class="col1">
		<div class="box">a href="https://www.facebook.com"><h4> F </h4></a></div>
	</div>
	<div class="col1">
		<div class="box"><p><a href="https://www.twitter.com"><h4> T </h4></a></div>
	</div>
	<div class="col1">
		<div class="box"><p><a href="https://www.linkedin.com"><h4> L </h4></a></div>
	</div>
	<div class="col1">
		<div class="box"><p><a href="https://www.instagram.com"><h4> I </h4></a></div>
	</div>
 </div>       
 </footer>



</body>
</html>
