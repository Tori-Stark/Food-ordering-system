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
	<title>Update Account Details</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<body>
  <div class="scrollmenu">
        <img src="logo.JPG"  width="50" height="50" class="roundlogo">
         <?php

            
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>
            <a href="aboutus.php">About us</a>  
            <a href="contact.PHP">Contact</a>
            <a href="logout.php">Log Out</a>
            
     </div>
     <br>
   <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
   </h1>
   <p class="image">
   
        <img src="download3.JPG"  width="1000" height="500"><br><br><br>
     </p>

    <fieldset>
      <legend><u><strong>Update Your Details</strong></u></legend>

      <form action="process_updateaccount.php" method="post">
       <ul style="list-style-type:none;">

       <li>
           <label for="fname"><strong>First name</strong></label><br>
           <input type="text" name="fname" id="fname" size="30px">
       </li>
       <br>
       <br>

       <li>
           <label for="lname"><strong>Last name</strong></label><br>
           <input type="text" name="lname" id="lname" size="30px">
       </li>
       <br>
       <br>

       

       <li>
            <label for="cemail"><strong>Email</strong></label><br>
            <input type="Email" name="cemail" id="cemail" size="30px" >
       </li>
       <br>
       <br>


       <li>
            <label for="cnumber"><strong>Phone Number</strong></label><br>
            <input type="telephone" name="cnumber" id="cnumber" size="30px">
       </li>
       <br>
       <br>


       
       
     
      </ul>

             
               <div style="text-align:center;">
                 
                  <button type="submit" name="register" class="button"><strong>Update details</strong></button>
    
             </div>

    </form>
   
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