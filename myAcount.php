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
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
</head>
<body>
	<div class="scrollmenu">
	 	   <span> <img src="logo.JPG"  width="50" height="50" class="roundlogo">
            <?php

              
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>

            <a href="contact.php">Contact</a>
            <a href="career.php">Career</a>
            <a href="menuGeneral.php">Menu</a>
            <a href="account.php">Account details</a></span>
             <a href="logout.php">Log Out</a>
     </div>
     <br>
	 <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
	 	<p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸<br></p> 
	 </h1>
	 
     <p class="image">
   
        <img src="welcome.JPG"  width="1000" height="500"><br><br><br>
     </p>
  
     

     <fieldset>
      <legend><u><strong>MAKE A BOOKING</strong></u></legend>
      <div class="festival">
      	<img src="booking.jpeg" width="250" height="250">
      	<span>
      	This month we are celebrating the <strong>French Cuisine</strong>. Its history dates back to the early Middle Ages with the elaboration of culinary treaties and cursory recipes.Sugar was put in water, wine and even on fish and meat! French food truly became a model for other cuisines in the 17th century. Make a date to come and celebrate with us. Specials will be made by the great <strong>Chef Thomas Keller</strong>, who has notoriously been awarded three star Michelin ratings.</span>
      	
      	
      	
      </div>
       <div style="text-align:center;">
      <a href="booking.php" class="button" ><strong>Book Your Space </strong></a>
      </div>
   </fieldset>
   <br><br><br>
   <fieldset>
      <legend><u><strong>VISIT OUR BLOGS</strong></u></legend>
      <div class="memories">
      	<img src="blog.jpg" width="270" height="210">
      	<span>
      	Our able bloggers are always keen on setting the latest food trends that are both practical, classy and lipsmaking. Be the first to see these news</span>
        
      	<
      	
      	
      </div>
      </div>
       <div style="text-align:center;">
      <a href="blogs.php" class="button" ><strong>See blogs </strong></a>
      </div>
      <br>
   </fieldset>
   <br><br><br>
   <br>
   <fieldset>
      <legend><u><strong>VISIT OUR SOCIAL MEDIA PAGES</strong></u></legend>
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