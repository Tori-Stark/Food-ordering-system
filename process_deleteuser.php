  <?php

require_once("db_connect.php");


$BID=$_POST['bID'];
$WAITERF=$_POST['waiterF'];
$WAITERL=$_POST['waiterL'];



$sql="DELETE FROM client WHERE clientID='$BID'";





  if ($conn->query($sql) == TRUE) {
        
      echo "Registration Successful";
      session_start();
      session_unset();
      session_write_close();
      $url = "seeusers.php";
      header("Location: $url");
 


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>