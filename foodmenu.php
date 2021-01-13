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
<title>Food Menu</title>
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
     <a href="updatemenu.php" class="button" ><strong>Update Menu</strong></a> <br><br>


     <fieldset>
      <legend><u><strong>Food Menu</strong></u></legend>
            <div style="text-align:center;">
			<p> <a href="#pizza">1. Pizza</a></p>
			<p> <a href="#burger">2. Burger</a></p>
			<p> <a href="#MeatDishes">3. Meat Dishes</a></p>
			<p> <a href="#RiceDishes">4. Rice Dishes</a></p>
			<p> <a href="#Fries">5. Fries</a></p>
			<p> <a href="#Salads">6. Salads</a></p>
			<p> <a href="#Vegan">7. Vegan</a></p>
			<p> <a href="#Soups">8. Soups</a></p>
    
             </div>
         </fieldset>

<?php
require_once("db_connect.php");
$sql = "SELECT * FROM foodmenu";
$sql1 = "SELECT * FROM foodmenu WHERE foodCategory='pizza'";
$sql2 = "SELECT * FROM foodmenu WHERE foodCategory='burger'";
$sql3 = "SELECT * FROM foodmenu WHERE foodCategory='Meat Dishes'";
$sql4 = "SELECT * FROM foodmenu WHERE foodCategory='Rice Dishes'";
$sql5 = "SELECT * FROM foodmenu WHERE foodCategory='Fries'";
$sql6 = "SELECT * FROM foodmenu WHERE foodCategory='Salads'";
$sql7 = "SELECT * FROM foodmenu WHERE foodCategory='Vegan'";
$sql8 = "SELECT * FROM foodmenu WHERE foodCategory='Soups'";


$result = ($conn->query($sql));
$result1 = ($conn->query($sql1));
$result2 = ($conn->query($sql2));
$result3 = ($conn->query($sql3));
$result4 = ($conn->query($sql4));
$result5 = ($conn->query($sql5));
$result6 = ($conn->query($sql6));
$result7 = ($conn->query($sql7));
$result8 = ($conn->query($sql8));

if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='pizza'>Pizza</h2>";
	echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result1->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='burger'>Burgers</h2>";
	 echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result2->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='MeatDishes'>Meat Dishes</h2>";
	 echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result3->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='RiceDishes'>Rice Dishes</h2>";
	echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result4->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Fries'>Fries</h2>";
	echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result5->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Salads'>Salads</h2>";
	echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result6->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Vegan'>Vegan</h2>";
	echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result7->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Soups'>Soups</h2>";
	echo "<table><tr><th>Image</th><th>Food</th><th>Price</th></tr>";
while($row = $result8->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["foodName"] . "</td><td>"
. $row["foodPrice"]. "</td></tr>";
	


}

echo "</table>";
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