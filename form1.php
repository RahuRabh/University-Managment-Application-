<?php 
include("connection.php");
?>

<html>
<head>
	<title>
	</title>
	
<style>
table
{
	color: white;
	border-radius: 20px;
}		

#button
{
	background-color: green;
	color;white;
	height: 32px;
	width: 85px;
	border-radius: 25px;
}
body
{
	background: linear-gradient(red,blue);
}
</style>
</head>
<body>
<br><br><br><br><br>

<form action="">
	<table  border="0" bgcolor="black" align="center" cellspacing="20">
		<tr>
		<td>Name</td>
		<td><input type="text" placeholder="Student Name" size="26" name="name" required></td>
		</tr>	

		<tr>
		<td>Vtu Id</td>
		<td><input type="text" placeholder="Vtu Id" name="vtuid"size="26"  required> </td>
		</tr>

		<tr>
		<td>Registration No</td>
		<td><input type="text" placeholder="Registration No" size="26" name="registrationo" required></td>
		</tr>

		<tr>
		<td>Email Address</td>
		<td><input type="email" placeholder="Email Address" size="26" name="emailaddress" required></td>
		</tr>

		<tr>
		<td>Password</td>
		<td><input type="password" placeholder="Password" size="26" name="password" required></td>
		</tr>

		<tr>
		<td>Age</td>
		<td><input type="text" placeholder="Age" size="26" name="age" required></td>
		</tr>

		<tr>
		<td>Phone Number</td>
		<td><input type="text" placeholder="Phone Number" size="26" name="phonenumber" required></td>
		</tr>

		<tr>
		<td>Batch</td>
		<td><input type="text"placeholder="Batch" size="26" name="batch" required></td>
		</tr>

		<tr>
		<td>DOB</td>
		<td><input type="text"placeholder="DOB" size="26" name="dob" required></td>
		</tr>

		<tr>
		<td>Address</td>
		<td><input type="text" placeholder="Address" size="26" name="address" required></td>
		</tr>

		<tr>
		<td>UserType</td>
		<td>User<input type="radio" name="ut" value="user" required>
		Admin<input type="radio" name="ut" value="admin" required></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" id="button"></td>
		</tr>
		</form>
		</table>
		</body>
		</html>	

<?php 

$nm=$_GET["name"];
$vtu=$_GET["vtuid"];
$rn=$_GET["registrationo"];
$ea=$_GET["emailaddress"];
$ps=$_GET["password"];
$age=$_GET["age"];
$pn=$_GET["phonenumber"];
$bt=$_GET["batch"];
$db=$_GET["dob"];
$add=$_GET["address"];
$ut=$_GET["ut"];

$query="INSERT INTO FORM VALUES ('$nm','$vtu','$rn','$ea','$ps', '$age','$pn','$bt','$db','$add','$ut')";
$data=mysqli_query($conn,$query);

if($data){
	echo "Data inserted into DataBase";
}
else{
	echo "Data not inserted into DataBase";
}
?>