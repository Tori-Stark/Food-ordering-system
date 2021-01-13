  <?php

require_once("db_connect.php");


$ROLE=$_POST['role'];
$UNAME=$_POST['uname'];


$PASS=$_POST['psd'];



if ($ROLE=="Staff"){
  

  
   $sql1="SELECT * FROM staff WHERE staffUserName='$UNAME'";
   $stmt1 = ($conn->query($sql1));

  
    if ($stmt1->num_rows > 0) {
      $row = $stmt1->fetch_assoc();

    if ($row['staffUserName']==$UNAME && $row['staffPassword']==$PASS) {
      
      
      
  $url = "staff.php";
  header("Location: $url");
}

    else {

echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'LogIn.php'; 
    </script>";





}}
  else{
  echo "<script language='javascript'>
    alert('⚠UserName does not exist. Try Again');
    window.location.href = 'LogIn.php'; 
    </script>";

}

$conn->close();
}
	



else if ($ROLE=="Client"){
  

  
   $sql2="SELECT * FROM client WHERE clientUserName='$UNAME'";
   $stmt2 = ($conn->query($sql2));

  
    if ($stmt2->num_rows > 0) {
      $row = $stmt2->fetch_assoc();

    if ($row['clientUserName']==$UNAME && $row['clientPassword']==$PASS) {
      
      session_start();

      $_SESSION["name"] = $_POST['uname'];
  $url = "myAcount.php";
  header("Location: $url");
}

    else {
  echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'LogIn.php'; 
    </script>";

}}
  else{
  echo "<script language='javascript'>
    alert('⚠UserName does not exist. Try Again');
    window.location.href = 'LogIn.php'; 
    </script>";

}

$conn->close();
}
  

	
?>
