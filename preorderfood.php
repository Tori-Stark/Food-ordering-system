<?php 

session_start();

require_once("db_connect.php");

if(isset($_SESSION['name'])){

} else{
  echo '<script>alert("You are not Logged in!")</script>';
  $_SESSION["error"]="You are not Logged in";
  header("location:LogIn.php");
}

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'     =>  $_GET["id"],
        'item_name'     =>  $_POST["hidden_name"],
        
        'item_price'    =>  $_POST["hidden_price"],
        'item_quantity'   =>  $_POST["quantity"]
      );

      $_SESSION["shopping_cart"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("Your order has been added!")</script>';
      echo '<script>window.location="preorderfood.php"</script>';
    }
  }
  else
  {
    $item_array = array(
      'item_id'     =>  $_GET["id"],
      'item_name'     =>  $_POST["hidden_name"],
      
      'item_price'    =>  $_POST["hidden_price"],
      'item_quantity'   =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      if($values["item_id"] == $_GET["id"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Selected Has Been Removed")</script>';
        echo '<script>window.location="preorderfood.php"</script>';
      }
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="booking.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
</head>
<body>
  <div class="scrollmenu">
       <span> <img src="logo.JPG"  width="50" height="50" class="roundlogo">
            <?php

            
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>

            <a href="contact.php">Contact</a>
            <a href="aboutus.php">About Us</a>
            
            
            <a href="logout.php">Log Out</a>
          </span>
     </div>
     <br>
   <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸<br></p> 
   </h1>
  
      <br />
      <br />
      <h2 align="center" style="font-size :35px">My Cart</h2><br />

      <br />
      
      <div >
        <table >
          <tr>

            <th width="40%">Item Name</th>
            
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="15%">Action</th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
          ?>

          <tr >
            <td><?php echo $values["item_name"]; ?></td>
            
            <td><?php echo $values["item_quantity"]; ?></td>
            <td>KES <?php echo $values["item_price"]; ?></td>
            <td>KES <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="preorderfood.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Delete</span></a></td>
          </tr>
          <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">KES <?php echo number_format($total, 2); ?></td>
            <td></td>
          </tr>
          <tr>
            <td>
              <?php
          
              echo '<form method="post" action="process_cart.php">
                <input type="submit" onclick="confirm("Are you sure you want to place this order?")" name="add_to_cart" class="button" value="Confirm Order" />
                <input type="text" name="item_name" value='.$values['item_name'].' style="display:none;">
                
                <input type="text" name="quantity" value='.$values['item_quantity'].' style="display:none;">
                <input type="text" name="price" value='.$values['item_price'].' style="display:none;"> 
              </form>';
              ?>
            </td>
          </tr>
          <?php
          }
          ?>
          </table>
      </div>

    </div>
    </div>

          
</div>
<h2 align="center" style="font-size :35px">Food Menu</h2>





      <?php
        $query = "SELECT * FROM foodMenu ORDER BY foodID DESC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
            
        
        ?>
      <fieldset>
      <div class="col-md-4">
        <form method="post" action="preorderfood.php?action=add&id=<?php echo $row["foodID"]; ?>">
          <div   align="center">
            <img src="<?php echo $row['image']; ?>" class="img-responsive" style="width:128px;height:128px" /><br />

            <h4 class="text-info"><?php echo $row["foodCategory"]; ?></h4>

            <h4 class="text-info"><?php echo $row["foodName"]; ?></h4>

            <h4 class="text-danger">KES. <?php echo $row["foodPrice"]; ?></h4>

            <input type="text" name="quantity" value="1" class="form-control" /><br>

            <input type="hidden" name="hidden_name" value="<?php echo $row["foodName"]; ?>" />


            <input type="hidden" name="hidden_price" value="<?php echo $row["foodPrice"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: crimson; border-color: crimson;" class="button" value="Add to Cart" />

          </div>
        </form>
      </div>
      </fieldset>  

      <?php
          }
        }
      ?>
      
     
            
        
  <br />
  </body>
</html>
