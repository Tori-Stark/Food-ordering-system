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
<title>Desserts Menu</title>
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
      <legend><u><strong>Dessert Menu</strong></u></legend>
            <div style="text-align:center;">
			<p> <a href="#Cakes">1. Cakes</a></p>
			<p> <a href="#Cupcakes">2. Cupcakes</a></p>
			<p> <a href="#IceCream">3. Ice Cream</a></p>
			<p> <a href="#Mousse">4. Mousse</a></p>
			<p> <a href="#Pies">5. Pies</a></p>
			<p> <a href="#Puddings">6. Puddings</a></p>
    
             </div>
         </fieldset>
     
<?php

require_once("db_connect.php");
$sql = "SELECT * FROM dessertmenu";
$sql1 = "SELECT * FROM dessertmenu WHERE dessertCategory='Cakes'";
$sql2 = "SELECT * FROM dessertmenu WHERE dessertCategory='Cupcakes'";
$sql3 = "SELECT * FROM dessertmenu WHERE dessertCategory='Ice Cream'";
$sql4 = "SELECT * FROM dessertmenu WHERE dessertCategory='Mousse'";
$sql5 = "SELECT * FROM dessertmenu WHERE dessertCategory='Pies'";
$sql6 = "SELECT * FROM dessertmenu WHERE dessertCategory='Puddings'";



$result = ($conn->query($sql));
$result1 = ($conn->query($sql1));
$result2 = ($conn->query($sql2));
$result3 = ($conn->query($sql3));
$result4 = ($conn->query($sql4));
$result5 = ($conn->query($sql5));
$result6 = ($conn->query($sql6));



if ($result->num_rows > 0) {
// output data of each row
    
	echo "<h2 id='Cakes'>Cakes</h2>";
	 echo "<table><tr><th>Image</th><th>Desert</th><th>Price</th></tr>";
while($row = $result1->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["dessertName"] . "</td><td>"
. $row["dessertPrice"]. "</td></tr>";
	


}

echo "</table><br><br>";
} 

if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Cupcakes'>Cupcakes</h2>";
	echo "<table><tr><th>Image</th><th>Desert</th><th>Price</th></tr>";
while($row = $result2->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["dessertName"] . "</td><td>"
. $row["dessertPrice"]. "</td></tr>";


}

echo "</table><br><br>";
} 

if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='IceCream'>Ice Cream</h2>";
	echo "<table><tr><th>Image</th><th>Desert</th><th>Price</th></tr>";
while($row = $result3->fetch_assoc()) {
	   
	
	echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["dessertName"] . "</td><td>"
. $row["dessertPrice"]. "</td></tr>";
	


}

echo "</table><br><br>";
} 

if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Mousse'>Mousse Cup</h2>";
	echo "<table><tr><th>Image</th><th>Desert</th><th>Price</th></tr>";
while($row = $result4->fetch_assoc()) {
	   
	
	echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["dessertName"] . "</td><td>"
. $row["dessertPrice"]. "</td></tr>";
	


}

echo "</table><br><br>";
} 

if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Pies'>Pies</h2>";
	echo "<table><tr><th>Image</th><th>Desert</th><th>Price</th></tr>";
while($row = $result5->fetch_assoc()) {
	   
	
	echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["dessertName"] . "</td><td>"
. $row["dessertPrice"]. "</td></tr>";
	


}

echo "</table><br><br>";
} 

if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Puddings'>Pudding</h2>";
	echo "<table><tr><th>Image</th><th>Desert</th><th>Price</th></tr>";
while($row = $result6->fetch_assoc()) {
	   
	
	echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["dessertName"] . "</td><td>"
. $row["dessertPrice"]. "</td></tr>";
	


}

echo "</table><br><br>";

} 
 
$conn->close();
?>

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