<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["name"];
	$password=$_POST["password"];

	$sql="select * from form where vtuid='".$username."' AND password='".$password."' ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);


	if($row["usertype"]=="user")
	{	
		$file_handle = fopen('private.txt', 'w');
		fwrite($file_handle, $row["vtuid"]);
		fclose($file_handle);
		header("location:userdash.php");
	}
	elseif($row["usertype"]=="admin")
	{
		
		header("location:admindash.php");
	}
	else
	{
		header("location:blank.php");
		echo "username or password incorrect";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login </title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	
	<form action="" method="POST">
	<div class="login-box">
    <img src="https://lh3.googleusercontent.com/qag3J9gjMFZQst-cqpqJluGU8DLnOmtv2bHS1SwomyFLxqgCJQbF43e-RO_0WoKwKiKNIA=s85" class="avatar">
        <h1>Login</h1>
            <form>
            <p>User Id</p>
            <input type="text" name="name" placeholder="User Id">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">    
            </form>
        </div>	
</body>
</html>