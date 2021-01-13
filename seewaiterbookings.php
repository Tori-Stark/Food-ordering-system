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
<title>See My Bookings</title>
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
            <a href="career.php">Career</a>
            <a href="blogs.php">Blogs</a>
            <a href="logout.php">Log Out</a>
            
     </div>
     <br>
   <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
   </h1>
    <p class="image">
   
        <img src="waiters.PNG"  width="1000" height="500"><br><br><br>
     </p>

<?php

require_once("db_connect.php");

$sql1 = "SELECT * FROM clientroom";
$sql2 = "SELECT * FROM clienttable";


$result1 = ($conn->query($sql1));
$result2 = ($conn->query($sql2));

if ($result1->num_rows > 0) {
// output data of each row

	echo "<h2>Room Bookings</h2>";
	 echo "<table><tr><th>Location</th><th>No of seats</th><th>UserName</th><th> Time</th><th> Date</th><th>Waiter<br> First Name</th><th>Waiter <br>Last Name</th></tr>";
while($row = $result1->fetch_assoc()) {
	   
	
		echo "<tr><td>" . $row["roomLocation"]. "</td><td>" . $row["roomSize"]. "</td><td>" . $row["clientusername"]. "</td><td>" . $row["bookingTime"]. "</td><td>" . $row["bookingDate"]. "</td><td>" . $row["waiter"]. "</td><td>" . $row["waiterLName"]. "</td</tr>";

}

echo "</table>";
}

if ($result2->num_rows > 0) {
// output data of each row

	echo "<h2>Table Bookings</h2>";
	 echo "<table><tr><th>TableID</th><th>Location</th><th>No of seats</th><th>UserName</th><th> Time</th><th> Date</th><th>Waiter<br> First Name</th><th>Waiter<br> Last Name</th></tr>";
while($row = $result2->fetch_assoc()) {
	   
	
		echo "<tr><td>" . $row["tableID"] . "</td><td>" . $row["tableLocation"]. "</td><td>" . $row["tablesize"]. "</td><td>" . $row["clientusername"]. "</td><td>" . $row["bookingTime"]. "</td><td>" . $row["bookingdate"]. "</td><td>" . $row["waiter"]. "</td><td>" . $row["waiterLName"]. "</td</tr>";

}

echo "</table>";
}  

$conn->close();
?>
 <div style="text-align:center;">
                  
                <a href="Homepage.php" class="button" > <strong>Log Out</strong></a>
                
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