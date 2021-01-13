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
  <title> Accountant</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body >
  <div class="scrollmenu">
        <img src="logo.JPG"  width="50" height="50" class="roundlogo">
        <?php

             
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>
            <a href="contact.php">Contact</a>
            <a href="career.php">Career</a>
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
      <legend><u><strong>Payment Details😁😀</strong></u></legend>
             <form action="process_updatepayment.php" method="post">
             <ul style="list-style-type:none;">
                  
                 <li>
                      <label for="bID" ><strong>  Booking ID </strong></label>
                      <br>
                      <input type="number" name="bID" id="bID" size="30px">
                      
                  </li>
                  <br>
                  <br>


                 <li>  
                       <p><strong>CHOOSE PAYMENT STATUS</strong></p>
                       <input type="radio" name="status" id="paid" value="paid">
                       <label for="paid">PAID</label>
                       <input type="radio" name="status" id="notpaid" value="notpaid">
                       <label for="notpaid">NOT PAID</label>
                       
                 </li>
                 <br>
                 <br>
     

              </ul>
    
              <div style="text-align:center;">
                    <button type="submit" name="register" class="button"><strong>Update</strong></button>
                     
    
              </div>
        
              <br><br>
       </form>
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
