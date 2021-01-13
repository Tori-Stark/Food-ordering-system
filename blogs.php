<?php
require_once("db_connect.php");
session_start();

if(isset($_SESSION['name'])){

} else{
  echo '<script>alert("You are not Logged in!")</script>';
  $_SESSION["error"]="You are not Logged in";
  header("location:LogIn.php");
}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
</head>
<body>
	<div class="scrollmenu">
	 	    <img src="logo.JPG"  width="50" height="50" class="roundlogo">
        <?php

            
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>
            <a href="contact.php">Contact</a>
            <a href="aboutus.php">About Us</a>
            <a href="logout.php">Log Out</a>
     </div>
     <br>
	 <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
	 	<p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
	 </h1>
   <h2 text align="center" class="h2"><u><strong>31 Vegan Recipes You Can Prep Now & Enjoy All Week</strong></u></h2>
	 
   <fieldset>
      <legend></legend>
      <div class="memories">
      	
        
        <span>  <Strong><u>1. Tofu Breakfast Scramble</u></Strong><br>
        Hearty tofu, vibrant turmeric, cheesy nutritional yeast, and a bevy of diced vegetables come together in this I-can't-believe-it's-not-egg scramble. Eat it with an English muffin today, then keep the leftovers for the ultimate veggie breakfast burrito later in the week. Or, stash it in the chill chest to enjoy down the line: As one community member remarks, "This tofu recipe is delicious, makes great leftovers, and even freezes well!"
        </span>
        <img src="blog2.jpg" width="250" height="180"><br>
      	
      	
      </div>
      
   </fieldset>
   
   <fieldset>
      <legend></legend>
      <div class="memories">
        
        
        <span>  <Strong><u>2. Boosted Jook
         Cozy rice porridge</u></Strong><br>wherein white rice is cooked in flavorful liquid (water, vegetable stock, meat or seafood broth, your choice) until it essentially falls apart—might be the perfect warming winter breakfast. It cooks up in big batches and keeps well in the fridge, readying itself for all sorts of toppings: tofu, mushrooms, and/or hardy greens; frizzled onions and/or garlic; roughly chopped herbs and hot sauces of all stripes.
        </span>
        <img src="blog3.jpg" width="250" height="180"><br>
        
        
      </div>
      
   </fieldset>
   
  <fieldset>
      <legend></legend>
      <div class="memories">
        
        
        <span>  <Strong><u>3. Breakfast Chia Seed Pudding</u></Strong><br>
        Chia seed pudding is a bit like magic: take ordinary-looking, tiny black seeds, pour a bit of liquid (like water or non-dairy milk) over them, and watch them plump up into a luscious pudding right before your eyes. Not only is it batchable (make a few servings in advance and eat throughout the week, loosening with a little liquid if the consistency's too gelled), it's a flavor chameleon, able to take on toppings and mix-ins of all stripes. Go ahead—stir in a little jam, nut butter, or tahini to the plain "base" pudding, and top with toasted coconut, granola, or dried fruit of your choosing
        </span>
        <img src="blog4.jpg" width="250" height="180"><br>
        
        
      </div>
      
   </fieldset>
   
   <fieldset>
      <legend></legend>
      <div class="memories">
        
        
        <span>  <Strong><u>4. Rice-Milk Rice Pudding</u></Strong><br>
         This rice pudding boasts double the rice, as you'll combine cooked rice with rice milk (which you'll make yourself!) until thick and creamy. If that sounds scary, worry not—all this means is blitzing brown rice with hot water and sugar in a blender until ultrasmooth, letting it soak for a couple hours, then using it to make the pudding (again, with cooked rice, which you can also make ahead). Top with dried fruits, nuts, or other fixings as you wish, eat hot or warm, then save any leftovers to reheat and serve later.
        </span>
        <img src="blog5.jpg" width="250" height="180"><br>
        
        
      </div>
      
   </fieldset>
   <br>
  <fieldset>
      <legend></legend>
      <div class="memories">
        
        
        <span>  <Strong><u>5. Tahini-Chocolate Chunk Overnight Oats</u></Strong><br>
        A 2-minute investment of time before you go to bed reaps one of creamiest, dreamiest breakfasts when you wake up—overnight oats. Simply stir together rolled oats, non-dairy milk, and any mix-ins (fruit, nuts, sweet dried doodads, tahini or nut butter, chocolate chips or nibs) in a lidded jar or vessel until it's the right thickness for you, cover and put in the fridge, and...walk away. Yep, seriously! It'll do its thing overnight
        </span>
        <img src="blog6.jpg" width="250" height="180"><br>
        
        
      </div>
      
   </fieldset>
   <br>
  <fieldset>
      <legend></legend>
      <div class="memories">
        
        
        <span>  <Strong><u>6. Fudgy Vegan Banana-Brownie Cake</u></Strong><br>
         You Can Eat For Breakfast. Any cake can be breakfast, but this one especially: It's packed with energizing bananas, cocoa, almond butter, and maple syrup, so it tastes great but it has serious staying power. Wrapped well, the cake gets even moister as it rests, so you'll want to keep some around for your breakfasts all week.
        </span>
        <img src="blog7.jpg" width="250" height="180"><br>
        
        
      </div>
      
   </fieldset>
   <br>
   
   <br>
   <fieldset>
      <legend><u><strong>VISIT OUR SOCIAL MEDIA PAGES FOR THE LATEST POSTS</strong></u></legend>
      <div class="socialMedia">
      	<span>
      		<img src="facebook.png"  width="50" height="50" class="roundlogo">
      		<br>
      		 <a href="https://www.facebook.com/">@LePalaceHotel</a>
      		 
      	</span> 
      	<span>
      		<img src="twitter.png"  width="50" height="50" class="roundlogo">
      		<br>
      		<a href="https://www.twitter.com">@LePalaceHotel</a>
      	</span> 
      	<span>
      		<img src="instagram.png"  width="50" height="50" class="roundlogo">
      		<br>
      		 <a href="https://www.instagram.com">@LePalaceHotel</a>
      	</span> 
      	<span>
      		<img src="youtube.png"  width="50" height="50" class="roundlogo">
      		<br>
      		 <a href="https://www.youtube.com">@LePalaceHotel</a>
      	</span> 
      	<span>
      		<img src="pintrest.png"  width="50" height="50" class="roundlogo">
      		<br>
      		 <a href="https://www.pinterest.com/">@LePalaceHotel</a>
      	</span> 	
      </div>
      <br>
   </fieldset>

   <br><br><br>
   <fieldset class="bottom">
   <div >
   	
   	<span>
   		<strong>
      	Toll Free UAE: 800 ADDRESS (2337377)
      	<br>
        Toll Free KSA: 8008971470
        <br>
        Callback Service 
        <br>
        Phone: (+25) (0)703-0300/200/300 +254) OR (0) 730-7000/00/300 
        <br>Email: info@LePalaceHotel.com
        <br> Address: The Long Road, off Short Road, in Zwela 
        </strong>
  	</span> 
  
   	
   </div>
   </fieldset>




     


</body>
</html>