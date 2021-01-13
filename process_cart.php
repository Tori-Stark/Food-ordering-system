<?php
  require_once 'db_connect.php';

  session_start();

  if(isset($_SESSION['shopping_cart'])&&isset($_SESSION['name'])){
    $mail=$_SESSION['name'];

    if(isset($_POST['item_name'])){
      $foodname=$_POST['item_name'];
    }
    if(isset($_POST['quantity'])){
    $quantity=$_POST['quantity'];
  }
  if(isset($_POST['item_price'])){
    $price=$_POST['item_price'];
  }
  
  
    //serialize cart

    // $cart2 = serialize($_SESSION['shopping_cart']);
    // $cart = serialize($_SESSION['shopping_cart']);

    $sql="insert into  ordering(clientUserName,foodName,Quantity,totalPrice) values('".$mail."','".$foodname."','".$quantity."','".$price."')";

    if(mysqli_query($conn,$sql)){
      unset($_SESSION['shopping_cart']);
      $_SESSION['placed']="Placed";
      echo '<script>alert("Order Placed!");location.replace("preorderfood.php");</script>';
  }
}else{
      echo '<script>alert("Failed! '.mysqli_error($conn).'");location.replace("preorderfood.php");</script>';
}

  ?>