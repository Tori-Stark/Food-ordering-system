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
<title>See Orders</title>
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
            
            <a href="blogs.php">Blogs</a>
            <a href="logout.php">Log Out</a>
     </div>
     <br>
   <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
   </h1>
    <p class="image">
   
        <img src="booking.JPEG"  width="1000" height="500"><br><br><br>
     </p>

<?php

require_once("db_connect.php");

$sql1 = "SELECT * FROM ordering";



$result1 = ($conn->query($sql1));


if ($result1->num_rows > 0) {
// output data of each row

	echo "<h2>Customer Orders</h2>";
	 echo "<table><tr><th>numberID</th><<th>foodName</th><th>Client<br>UserName</th><th>Quantity</th><th> totalPrice</th></tr>";
while($row = $result1->fetch_assoc()) {
	   
	
		echo "<tr><td>" . $row["numberID"] . "</td><td>" . $row["foodName"]. "</td><td>" . $row["clientUserName"]. "</td><td>" . $row["Quantity"]. "</td><td>" . $row["totalPrice"]. "</td></tr>";

}

echo "</table>";
}


$conn->close();
?>
 <div style="text-align:center;">
                  
               
                <a href="chefroles.php" class="button" > <strong>Back</strong></a>
             </div>
<br>

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