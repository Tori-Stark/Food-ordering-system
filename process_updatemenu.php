  <?php

require_once("db_connect.php");
$ROLE=$_POST['role'];
$MENU=$_POST['menu'];
$DISHID=$_POST['fID'];
$NAME=$_POST['name'];
$CATEGORY=$_POST['Category'];
$PRICE=$_POST['Price'];
$IMAGE=$_POST['Image'];

$sql1="INSERT INTO `dessertmenu` ( `dessertName`, `dessertCategory`, `dessertPrice`,`image`) VALUES ('$NAME', '$CATEGORY', '$PRICE','$IMAGE')";
$sql2="INSERT INTO `drinkmenu` ( `drinkName`, `drinkCategory`, `drinkPrice`,`image`) VALUES ('$NAME', '$CATEGORY', '$PRICE' ,'$IMAGE')";
$sql3="INSERT INTO `foodmenu` (`foodName`, `foodCategory`, `foodPrice`,`image`) VALUES ('$NAME', '$CATEGORY', '$PRICE' ,'$IMAGE')";

$sql4="UPDATE dessertmenu SET dessertName = '$NAME', dessertCategory = '$CATEGORY', dessertPrice = '$PRICE' , image = '$IMAGE' WHERE dessertID='$DISHID'";
$sql5="UPDATE drinkmenu SET drinkName = '$NAME', drinkCategory = '$CATEGORY', drinkPrice = '$PRICE', image = '$IMAGE' WHERE drinkID='$DISHID'";
$sql6="UPDATE foodmenu SET foodName = '$NAME', foodCategory = '$CATEGORY', foodPrice = '$PRICE' , image = '$IMAGE' WHERE foodID='$DISHID'";

$sql7="DELETE FROM dessertmenu WHERE dessertID='$DISHID'";
$sql8="DELETE FROM drinkmenu WHERE drinkID='$DISHID'";
$sql9="DELETE FROM foodmenu WHERE foodID='$DISHID'";

if ($ROLE=="Add"){
  if($MENU=="Food"){
    if ($conn->query($sql3) == TRUE) {
  
        
        session_start();
        
        $url = "foodmenu.php";
        header("Location: $url");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }


  else if($MENU=="Drinks"){
    if ($conn->query($sql2) == TRUE) {
  
  
        session_start();
        
        $url = "drinkmenu.php";
        header("Location: $url");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }


  else if($MENU=="Dessert"){
    if ($conn->query($sql1) == TRUE) {
  
  
        session_start();
        
        $url = "dessertmenu.php";
        header("Location: $url");
       
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }




	
}
else if ($ROLE=="Update"){
  if($MENU=="Food"){
    if ($conn->query($sql6) == TRUE) {
  
        echo "Registration Successful";
        session_start();
        
        $url = "foodmenu.php";
        header("Location: $url");
         
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }


  else if($MENU=="Drinks"){
    if ($conn->query($sql5) == TRUE) {
          
        echo "Registration Successful";
        session_start();
        
        $url = "drinkmenu.php";
        header("Location: $url");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }


  else if($MENU=="Dessert"){
    if ($conn->query($sql4) == TRUE) {
  
          echo "Registration Successful";
          session_start();
         
          $url = "dessertmenu.php";
          header("Location: $url");
           
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }



  else if ($ROLE=="Delete"){
  if($MENU=="Food"){
    if ($conn->query($sql9) == TRUE) {
  
        echo "Registration Successful";
        session_start();
        
        $url = "foodmenu.php";
        header("Location: $url");
         
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }


  else if($MENU=="Drinks"){
    if ($conn->query($sql8) == TRUE) {
          
        echo "Registration Successful";
        session_start();
        
        $url = "drinkmenu.php";
        header("Location: $url");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }


  else if($MENU=="Dessert"){
    if ($conn->query($sql7) == TRUE) {
  
          echo "Registration Successful";
          session_start();
          
          $url = "dessertmenu.php";
          header("Location: $url");
           
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }
	
}}

  
 



?>