<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username='".$username."' AND password='".$password."'";

	$result=mysqli_query($data, $sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	
		$_SESSION["username"]=$username;
		header("location:userhome.php");
	}
	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;
		header("location:adminhome.html");
	}
	else
	{
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
	
	
	<form action="#" method="POST">
	<div class="login-box">
    <img src="https://lh3.googleusercontent.com/qag3J9gjMFZQst-cqpqJluGU8DLnOmtv2bHS1SwomyFLxqgCJQbF43e-RO_0WoKwKiKNIA=s85" class="avatar">
        <h1>Login</h1>
            <form>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
	

</body>

</html>