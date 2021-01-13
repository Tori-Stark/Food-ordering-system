  <?php

require_once("db_connect.php");

$ROLE=$_POST['role'];
$ACTION=$_POST['action'];
$BID=$_POST['bID'];
$WAITERF=$_POST['waiterF'];
$WAITERL=$_POST['waiterL'];


$sql1="UPDATE clienttable SET waiter = '$WAITERF', waiterLName = '$WAITERL' WHERE bookingID = '$BID'";
$sql2="UPDATE clientroom SET waiter = '$WAITERF', waiterLName = '$WAITERL' WHERE bookingID = '$BID'";

$sql3="DELETE FROM clienttable WHERE bookingID='$BID'";
$sql4="DELETE FROM clientroom WHERE bookingID='$BID'";


if ($ROLE=="Table"){

 if ($ACTION=="Add"){
	if ($conn->query($sql1) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seebookings.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
}

else if ($ACTION=="Update"){
  if ($conn->query($sql1) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seebookings.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
}

else if ($ACTION=="Delete"){
  if ($conn->query($sql3) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seebookings.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}
$conn->close();
}






}
else if($ROLE=="Room"){
	if ($ACTION=="Add"){
  if ($conn->query($sql2) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seebookings.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}
$conn->close();
}

else if ($ACTION=="Update"){
  if ($conn->query($sql2) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seebookings.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}
$conn->close();
}

else if ($ACTION=="Delete"){
  if ($conn->query($sql4) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seebookings.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}
$conn->close();
}
}






	
  
  
 



?>