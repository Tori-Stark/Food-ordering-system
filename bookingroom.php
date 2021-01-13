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
  <title>Book Room</title>
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

              session_start();
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
      <legend><u><strong>Fill in Room details</strong></u></legend>
      <form action="process_bookingroom.php" method="post">
     <ul style="list-style-type:none;">
       <li>
           <label for="rID"><strong>Room number</strong></label><br>
           <input type="number" name="rID" id="rID" size="30px">
       </li>
       <br>
       <br>

       <li>
           <label for="rLocation"><strong>Room Location</strong></label><br>
           <input type="text" name="rLocation" id="rLocation" size="30px">
       </li>
       <br>
       <br>

       <li>
           <label for="rSize"><strong>Number of Seats</strong></label><br>
           <input type="number" name="rSize" id="rSize" size="30px">
       </li>
       <br>
       <br>

       <li>
            <label for="cID"><strong>Client ID</strong></label><br>
            <input type="number" name="cID" id="cID" size="30px" >
       </li>
       <br>
       <br>


       <li>
            <label for="cUName"><strong>Username</strong></label><br>
            <input type="text" name="cUName" id="cUName" size="30px">
       </li>
       <br>
       <br>

       
      <li>
            <label for="cTime"><strong>Reserved Time</strong></label><br>
            <input type="Time" id="cTime" name="cTime" size="30px"> </input>
       </li>
       <br>
       <br>


       <li>
            <label for="cDate"><strong>Reserved Date</strong></label><br>
            <input type="date" id="cDate" name="cDate" min="2020-10-03"  step="3600" size="30px"> </input>
       </li>
       <br>
       <br>

     
      </ul>

             
               <div style="text-align:center;">
                  
                   <button type="submit" name="register" class="button"><strong>Book Room</strong></button>
    
             </div>

    
   
   </fieldset>

    <br><br><fieldset class="bottom">
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