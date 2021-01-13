  <?php

require_once("db_connect.php");
session_start();
$name= $_SESSION["name"];
$FNAME=$_POST['fname'];
$LNAME=$_POST['lname'];

$CEMAIL=$_POST['cemail'];
$CNUMBER=$_POST['cnumber'];






$sql="UPDATE client SET clientFName = '$FNAME', clientLName = '$LNAME', clientEmail = '$CEMAIL' , clientPhoneNo = '$CNUMBER'WHERE clientUserName='$name'";



if ($conn->query($sql) == TRUE) {
	
  echo "Update Successful";
  
$url = "account.php";
header("Location: $url");
 
} else {
  echo "<script language='javascript'>
    alert('⚠An error occurred. Try Again');
    window.location.href = 'updateaccount.php'; 
    </script>";;
}

$conn->close();


?>
