  <?php

require_once("db_connect.php");

$RID=$_POST['rID'];
$RLOCATION=$_POST['rLocation'];
$RSIZE=$_POST['rSize'];
$CID=$_POST['cID'];
$CUNAME=$_POST['cUName'];
$CTIME=$_POST['cTime'];
$CDATE=$_POST['cDate'];




$sql="INSERT INTO clientroom(roomID,roomName,roomSize,clientID,clientusername,bookingTime,bookingdate) VALUES ('$RID','$RLOCATION','$RSIZE','$CID','$CUNAME','$CTIME','$CDATE')";

if ($conn->query($sql) == TRUE) {
	
  echo "Registration Successful";
  session_start();
session_unset();
session_write_close();
$url = "myAcount.php";
header("Location: $url");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
