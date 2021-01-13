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
  <title>Booking</title>
  <link rel="stylesheet" type="text/css" href="booking.css">
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
    <p class="image">
   
        <img src="booking.JPEG"  width="1000" height="500"><br><br><br>
     </p>

    <fieldset>
      <legend><u><strong>Choose your booking</strong></u></legend>
     

             
               <div style="text-align:center;">
                  <a href="bookingtable.php" class="button" > <strong>Book Table</strong></a>
    
             </div><br>
              <div style="text-align:center;">
                  <a href="bookingroom.php" class="button" > <strong>Book Room</strong></a>
    
             </div>
    <br><br><br>

    
   
   </fieldset>

   <br><fieldset class="bottom">
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