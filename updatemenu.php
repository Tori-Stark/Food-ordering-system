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
  <title> Update Menu</title>
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
            <a href="blogs.php">Blogs</a>
            <a href="menuGeneral.php">Menu</a>
            <a href="logout.php">Log Out</a>
     </div>
     <br>
    <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
    </h1>
    <p class="image">
   
        <img src="updatemenu.JPG"  width="1000" height="500"><br><br><br>
     </p>
  
    <fieldset>
      <legend><u><strong>Update Menu</strong></u></legend>
      <legend><u><strong>Dish Details😁😀</strong></u></legend>
             <form action="process_updatemenu.php" method="post">
             <ul style="list-style-type:none;">
                  <li>
                       <p><strong>CHOOSE TASK</strong></p>
                       <input type="radio" name="role" id="Add" value="Add">
                       <label for="Add">Add new dish</label>
                       <input type="radio" name="role" id="Update" value="Update">
                       <label for="Update">Update existing dish</label>
                        <input type="radio" name="role" id="Delete" value="Delete">
                       <label for="Delete">Delete existing dish</label>
                 </li>
                 <br>
                 <br>

                 <li>  
                       <p><strong>CHOOSE MENU</strong></p>
                       <input type="radio" name="menu" id="Food" value="Food">
                       <label for="Food">Food Menu</label>
                       <input type="radio" name="menu" id="Drinks" value="Drinks">
                       <label for="Drinks">Drinks</label>
                       <input type="radio" name="menu" id="Dessert" value="Dessert">
                       <label for="Dessert">Dessert</label>
                 </li>
                 <br>
                 <br>


                 <li>
                      <label for="fID"><strong>  Dish ID </strong></label>
                      <br>
                      <input type="number" name="fID" id="fID" size="30px">
                      <p><strong>NB:ONLY input the Dish ID if updating or deleting an existing dish</strong></p>
                  </li>
                  <br>
                  <br>


                  <li>
                      <label for="name"><strong>  Name </strong></label>
                      <br>
                      <input type="text" name="name" id="name" size="30px">
                  </li>
                  <br>
                  <br>

                  <li>
                     <label for="Category"><strong>Category   </strong>  </label>
                     <br>
                     <input type="text" name="Category" id="Category" size="30px">
                 </li>
                 <br>
                 <br>


                 <li>
                     <label for="Image"><strong>Image</strong></label>
                     <br>
                    <input type="text" id="Image" name="Image" size="30px"> 
                 </li>
                 <br>


                 <li>
                     <label for="Price"><strong>Price</strong></label>
                     <br>
                    <input type="number" id="Price" name="Price" size="30px"> 
                 </li>
                 <br>
     

              </ul>
    
              <div style="text-align:center;">
                     
                     <button type="submit" class="button"><strong>Update</strong></button>
                     
    
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
