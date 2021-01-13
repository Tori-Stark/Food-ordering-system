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
    <link rel="stylesheet" type="text/css" href="process_login.php">
    
</head>
<body>
	<div class="scrollmenu">
	 	    <img src="logo.JPG"  width="50" height="50" class="roundlogo">
        <?php

            
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>
            <a href="contact.php">Contact</a>
            
            <a href="account.php">Blogs</a>
            <a href="menuGeneral.php">Menu</a>
            <a href="logout.php">Log Out</a>
     </div>
     <br>
	 <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
	 	<p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸<br></p> 
	 </h1>
	 
     <p class="image">
   
        <img src="welcome.JPG"  width="1000" height="500"><br><br><br>
     </p>



 <?php

require_once("db_connect.php");
session_start();
$name= $_SESSION["name"];



$sql = "SELECT * FROM client WHERE clientUserName='$name'";



$result = ($conn->query($sql));



if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    echo "<fieldset>
      <legend><u><strong>VIEW YOUR DETAILS</strong></u></legend>
      <div>
        <span><strong>User Name: ".$row["clientUserName"]."<br>
    First Name: ".$row["clientFName"]."<br>
     Last Name: ".$row["clientLName"]."<br>
     Email: ".$row["clientEmail"]."<br>
    Phone Number: +254 ".$row["clientPhoneNo"]."<br></strong> </span>
        
        
      </div>
      
   </fieldset>";
    

}

  } 

else
{
    echo "No record found";
}
  
$conn->close();



?>
     
<div style="text-align:center;">
        <a href="updateaccount.php" class="button" ><strong>Want to update your details? <br>Update Account Details</strong></a> 
          
    
       </div>




     <br><br>
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

