  <?php

require_once("db_connect.php");
$STATUS=$_POST['status'];

$BOOKINGID=$_POST['bID'];



$sql="UPDATE clientroom SET Payment = '$STATUS' WHERE bookingID='$BOOKINGID'";


    if ($conn->query($sql) == TRUE) {
  
        
        
        $url = "updatepayment.php";
        header("Location: $url");
 
} else {
  echo "<script language='javascript'>
    alert('⚠Wrong Details. Try Again');
    window.location.href = 'updatepayment.php'; 
    </script>";
}


$conn->close();
    
  


?>