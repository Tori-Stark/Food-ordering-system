  <?php

require_once("db_connect.php");

$FNAME=$_POST['fname'];
$LNAME=$_POST['lname'];
$UNAME=$_POST['uname'];
$CEMAIL=$_POST['cemail'];
$CNUMBER=$_POST['cnumber'];
$PASS=$_POST['pass'];
$_SESSION['username'] = $UNAME;



$sql="INSERT INTO client(clientFName,clientLName,clientUserName,clientEmail,clientPhoneNo,clientPassword) VALUES ('$FNAME','$LNAME','$UNAME','$CEMAIL','$CNUMBER','$PASS')";




if ($conn->query($sql) == TRUE) {
	
  echo "Registration Successful";
  session_start();
session_unset();
session_write_close();
$url = "Login.php";
header("Location: $url");
 
} else {
  echo "<script language='javascript'>
    alert('⚠Username already exist. Try Again');
    window.location.href = 'signUp.php'; 
    </script>";;
}

$conn->close();


?>
