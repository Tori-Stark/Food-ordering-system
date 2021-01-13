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
<title>Drink Menu</title>
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
      <legend><u><strong>Food Menu</strong></u></legend>
            <div style="text-align:center;">
			<p> <a href="#water">1. Water</a></p>
			<p> <a href="#SoftDrinks">2. Soft Drinks</a></p>
			<p> <a href="#Milkshakes">3. Milkshakes</a></p>
			<p> <a href="#MixedJuices">4. Mixed Juices</a></p>
			<p> <a href="#FreshJuices">5. Fresh Juices</a></p>
			<p> <a href="#Tea">6. Tea</a></p>
			<p> <a href="#Coffee">7. Coffee</a></p>
			<p> <a href="#Smoothies ">8. Smoothies </a></p>
			<p> <a href="#CockTails">9. CockTails</a></p>
			<p> <a href="#Beer">10. Beer</a></p>
			<p> <a href="#Ciders">11. Ciders</a></p>
			<p> <a href="#Aperitif">12. Aperitif</a></p>
			<p> <a href="#Vodka">13. Vodka</a></p>
			<p> <a href="#Gin">14. Gin</a></p>
			<p> <a href="#Rum">15. Rum</a></p>
			<p> <a href="#Tequila">16. Tequila</a></p>
			<p> <a href="#Bourbon">17. Bourbon</a></p>
			<p> <a href="#BrandyCognac">18. Brandy & Cognac</a></p>
			<p> <a href="#Liqueur">19. Liqueur</a></p>
			<p> <a href="#Whiskey">20. Whiskey</a></p>
			
    
             </div>
         </fieldset>
<?php

require_once("db_connect.php");
$sql = "SELECT * FROM drinkmenu";
$sql1 = "SELECT * FROM drinkmenu WHERE drinkCategory='water'";
$sql2 = "SELECT * FROM drinkmenu WHERE drinkCategory='Soft Drinks'";
$sql3 = "SELECT * FROM drinkmenu WHERE drinkCategory='Milkshakes'";
$sql4 = "SELECT * FROM drinkmenu WHERE drinkCategory='Mixed Juices'";
$sql5 = "SELECT * FROM drinkmenu WHERE drinkCategory='Fresh Juices'";
$sql6 = "SELECT * FROM drinkmenu WHERE drinkCategory='Tea'";
$sql7 = "SELECT * FROM drinkmenu WHERE drinkCategory='Coffee'";
$sql8 = "SELECT * FROM drinkmenu WHERE drinkCategory='Smoothies'";
$sql9 = "SELECT * FROM drinkmenu WHERE drinkCategory='CockTails'";
$sql10 = "SELECT * FROM drinkmenu WHERE drinkCategory='Beer'";
$sql11 = "SELECT * FROM drinkmenu WHERE drinkCategory='Ciders'";
$sql12 = "SELECT * FROM drinkmenu WHERE drinkCategory='Aperitif'";
$sql13 = "SELECT * FROM drinkmenu WHERE drinkCategory='Vodka'";
$sql14 = "SELECT * FROM drinkmenu WHERE drinkCategory='Gin'";
$sql15 = "SELECT * FROM drinkmenu WHERE drinkCategory='Rum'";
$sql16 = "SELECT * FROM drinkmenu WHERE drinkCategory='Tequila'";
$sql17 = "SELECT * FROM drinkmenu WHERE drinkCategory='Bourbon'";
$sql18 = "SELECT * FROM drinkmenu WHERE drinkCategory='Brandy & Cognac'";
$sql19 = "SELECT * FROM drinkmenu WHERE drinkCategory='Liqueur'";
$sql20 = "SELECT * FROM drinkmenu WHERE drinkCategory='Whiskey'";

$result = ($conn->query($sql));
$result1 = ($conn->query($sql1));
$result2 = ($conn->query($sql2));
$result3 = ($conn->query($sql3));
$result4 = ($conn->query($sql4));
$result5 = ($conn->query($sql5));
$result6 = ($conn->query($sql6));
$result7 = ($conn->query($sql7));
$result8 = ($conn->query($sql8));
$result9 = ($conn->query($sql9));
$result10 = ($conn->query($sql10));
$result11 = ($conn->query($sql11));
$result12 = ($conn->query($sql12));
$result13 = ($conn->query($sql13));
$result14 = ($conn->query($sql14));
$result15 = ($conn->query($sql15));
$result16 = ($conn->query($sql16));
$result17 = ($conn->query($sql17));
$result18 = ($conn->query($sql18));
$result19 = ($conn->query($sql19));
$result20 = ($conn->query($sql20));


if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='water'>Water</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result1->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>"
. $row["drinkPrice"]. "</td></tr>";
	


}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='SoftDrinks'>Soft Drinks</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result2->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>"
. $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Milkshakes'>Milkshakes</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result3->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='MixedJuices'>Mixed Juices</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result4->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='FreshJuices'>Fresh Juices</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result5->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Tea'>Tea</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result6->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Coffee'>Coffee</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result7->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Smoothies'>Smoothies</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result8->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='CockTails'>CockTails</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result9->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Beer'>Beer</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result10->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Ciders'>Cider</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result11->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Aperitif'>Aperitif</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result12->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Vodka'>Vodka</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result13->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
}
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Gin'>Gin</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result14->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
}  
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Rum'>Rum</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result15->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Tequila'>Tequila</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result16->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Bourbon'>Bourbon</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result17->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='BrandyCognac'>Brandy & Cognac</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result18->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Liqueur'>Liquor</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result19->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
}

echo "</table>";
} 
if ($result->num_rows > 0) {
// output data of each row

	echo "<h2 id='Whiskey'>Whiskey</h2>";
	echo "<table><tr><th>Image</th><th>Drink</th><th>Price</th></tr>";
while($row = $result20->fetch_assoc()) {
	   
	
		echo "<tr><td>
 <img src=".$row["image"]." alt='HTML5 Icon' style='width:128px;height:128px'> </td><td>" . $row["drinkName"] . "</td><td>". $row["drinkPrice"]. "</td></tr>";
	
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