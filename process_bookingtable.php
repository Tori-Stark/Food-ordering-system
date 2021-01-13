  <?php

require_once("db_connect.php");
 
session_start();
$UNAME=$_SESSION["name"];

              
$TID=$_POST['rID'];
$TLOCATION=$_POST['rLocation'];
$TSIZE=$_POST['rSize'];
$CID=$_POST['cID'];
$CUNAME=$_POST['cUName'];
$CTIME=$_POST['cTime'];
$CDATE=$_POST['cDate'];




$sql="INSERT INTO clienttable(tableID,tableLocation,tableSize,clientID,clientusername,bookingTime,bookingdate) VALUES ('$TID','$TLOCATION','$TSIZE','$CID','$CUNAME','$CTIME','$CDATE')";



          if ($conn->query($sql) == TRUE) {
	
  echo "Registration Successful";
 

$url = "preorderfood.php";
header("Location: $url");

 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>