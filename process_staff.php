  <?php
   

require_once("db_connect.php");

$ROLE=$_POST['role'];
$UNAME=$_POST['uname'];
$PASS=$_POST['pass'];

if ($ROLE=="Chef"){

	
   $sql1="SELECT * FROM staff WHERE staffUserName='$UNAME'";
   $stmt1 = ($conn->query($sql1));

  
    if ($stmt1->num_rows > 0) {
      $row = $stmt1->fetch_assoc();

    if ($row['staffUserName']==$UNAME && $row['staffPassword']==$PASS) {
      
     session_start();

      $_SESSION["name"] = $_POST['uname'];
  $url = "chefroles.php";
  header("Location: $url");
}

    else {
  echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}}
  else{
  echo "<script language='javascript'>
    alert('⚠Username Does not exist. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}
}



else if($ROLE=="BookingManager"){
	
   $sql1="SELECT * FROM staff WHERE staffUserName='$UNAME'";
   $stmt1 = ($conn->query($sql1));

  
    if ($stmt1->num_rows > 0) {
      $row = $stmt1->fetch_assoc();

    if ($row['staffUserName']==$UNAME && $row['staffPassword']==$PASS) {
      
      session_start();

      $_SESSION["name"] = $_POST['uname'];
  $url = "seebookings.php";
  header("Location: $url");
}

    else {
  echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}}
  else{
  echo "<script language='javascript'>
    alert('⚠Username Does not exist. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}
}



else if($ROLE=="Accountant"){
	
   $sql1="SELECT * FROM staff WHERE staffUserName='$UNAME'";
   $stmt1 = ($conn->query($sql1));

  
    if ($stmt1->num_rows > 0) {
      $row = $stmt1->fetch_assoc();

    if ($row['staffUserName']==$UNAME && $row['staffPassword']==$PASS) {
      
      session_start();

      $_SESSION["name"] = $_POST['uname'];
  $url = "updatepayment.php";
  header("Location: $url");
}

   else {
  echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}}
  else{
  echo "<script language='javascript'>
    alert('⚠Username Does not exist. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}
}



else if($ROLE=="Waiter"){
	
   $sql1="SELECT * FROM staff WHERE staffUserName='$UNAME'";
   $stmt1 = ($conn->query($sql1));

  
    if ($stmt1->num_rows > 0) {
      $row = $stmt1->fetch_assoc();

    if ($row['staffUserName']==$UNAME && $row['staffPassword']==$PASS) {
      
      session_start();

      $_SESSION["name"] = $_POST['uname'];
  $url = "seewaiterbookings.php";
  header("Location: $url");
}

  else {
  echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}}
  else{
  echo "<script language='javascript'>
    alert('⚠Username Does not exist. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}
}



else if($ROLE=="Administrator"){
 
   $sql1="SELECT * FROM staff WHERE staffUserName='$UNAME'";
   $stmt1 = ($conn->query($sql1));

  
    if ($stmt1->num_rows > 0) {
      $row = $stmt1->fetch_assoc();

    if ($row['staffUserName']==$UNAME && $row['staffPassword']==$PASS) {
      
      session_start();

      $_SESSION["name"] = $_POST['uname'];
  $url = "seeusers.php";
  header("Location: $url");
}

   else {
  echo "<script language='javascript'>
    alert('⚠Wrong Password. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}}
  else{
  echo "<script language='javascript'>
    alert('⚠Username Does not exist. Try Again');
    window.location.href = 'staff.php'; 
    </script>";
}
}



	
  
  
 



?>