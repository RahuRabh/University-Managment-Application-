<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	//echo "Connection Stablished";
}
else{
	echo "Connection not stablished";
}
?>