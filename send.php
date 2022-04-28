<?php  

if (isset($_POST['Name']) && isset($_POST['Password'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Name = validate($_POST['Name']);
	$Password = validate($_POST['Password']);
	$Vtu_Id = validate($_POST['Vtu_Id']);
	$Registration_Number = validate($_POST['Registration_Number']);
	$Email_Id = validate($_POST['Email_Id']);
	$DOB = validate($_POST['DOB']);
	$Batch = validate($_POST['Batch']);
	$Phone_Number = validate($_POST['Phone_Number']);
	$Address = validate($_POST['Address']);

	if (empty($name) || empty($password) || empty($Vtu_Id) || empty($Registration_Number) || empty($DOB) || empty($Batch) || empty($Phone_Number) || empty($Address)){
		header("Location: adminhome.html");
	}else{
		$sql = "INSERT INTO login(Name, Password, Vtu_Id, Registration_Number, Email_Id, DOB, Batch, Phone_Number, Address) VALUES('$Name', '$Password', '$Vtu_Id', '$Registration_Number', '$Email_Id', '$DOB', '$Batch', '$Phone_Number', '$Address')";
		$res = mysqli_query($conn, $sql);
		if($res){
			echo "Your data was stored successfully";
		}else{
			echo "Your data could not be stored";
		}
	}

}
else{
	header("Location: adminhome.html");
}