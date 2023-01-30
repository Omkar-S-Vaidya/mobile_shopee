<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
 background:white
}

.slider{
  border-radius: 10px;
  overflow: hidden;
  
}

.slides{
  width: 500%;
  height: 350px;
  display: flex;

}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 350px;

}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  display: flex;
  justify-content: center;
  width: 700px;
  margin-top: -40px;
}

.manual-btn{
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
  border: 3px solid white;
  padding: 5px;

}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: red;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  justify-content: center;
  margin-top: 460px;
  display: flex;
  width: 800px;
}

.navigation-auto div{
  border-radius: 10px;
  transition: 1s;
  border: 3px solid #c43af3;
  padding: 5px;
  width: 30px;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #c43af3;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
 
  background: #c43af3;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #c43af3;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #c43af3;
}
</style>
</head>
<body>



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
     <img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg" alt="">
   </div>

   <div class="slide">
      <img src="https://wallpaperaccess.com/full/1154341.jpg" alt="">
   </div>
   <div class="slide">
      <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt="">
   </div>
   <div class="slide">
      <img  src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt="">
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

<script>
var counter = 1;
 setInterval(function(){
   document.getElementById('radio' + counter).checked = true;
   counter++;
     if(counter > 4){
       counter = 1;
     }
 }, 4000);

</script>

</body>
</html> 
