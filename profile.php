<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "user";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if($conn)
  {
    echo "Connection Stablished";
  }
  else{
    echo "Connection not stablished";
  }

  $id = file_get_contents("private.txt") or die("Unable to open file!");

  $sql="select * from form where vtuid = '".$id."'";

  $result=mysqli_query($conn,$sql);

  $row=mysqli_fetch_array($result);

  echo $row["vtuid"];


?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Profile Page Design Example</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
    
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
<header class="ScriptHeader">
    <div class="rt-container">
      <div class="col-rt-12">
          <div class="rt-heading">
              <h1>Student's Profile Page</h1>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3><?php echo $row["name"]; ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Vtu Id:</strong><?php echo $row["vtuid"]; ?></p>
            <p class="mb-0"><strong class="pr-1">Registration No:</strong><?php echo $row["registrationno"]; ?></p>
            <p class="mb-0"><strong class="pr-1">Email Id:</strong><?php echo $row["emailaddress"]; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">D.O.B</th>
                <td width="2%">:</td>
                <td><?php echo $row["dob"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Academic Year </th>
                <td width="2%">:</td>
                <td><?php echo $row["batch"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Phone Number</th>
                <td width="2%">:</td>
                <td><?php echo $row["phonenumber"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Parent's Name</th>
                <td width="2%">:</td>
                <td>Mr. Karnam</td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $row["address"]; ?></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Hardworking, focused, pantual, well behaved girl. Seeks for opurtunites to do something and make use of time.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
        </div>
    </div>
    </div>
</section>
     


    <!-- Analytics -->

  </body>
</html>
