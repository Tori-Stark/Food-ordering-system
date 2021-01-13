<?php
$dbserver="localhost";
$dbuser="root";
$password="";
$dbname="le_palace_hotel";

$conn=mysqli_connect($dbserver,$dbuser,$password,$dbname);

if($conn){
	// echo "Connected successfully";
}
else{
	echo "Did not Connect".mysqli_connect_error();
}


?>