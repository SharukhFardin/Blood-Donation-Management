<?php
session_start();
$loggedIn = $_SESSION['user_name'];
include_once('connect.php');
$query="SELECT * FROM blood_seeker WHERE user_name='$loggedIn'";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Your Information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center text-white bg-success lg-3">
                
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Your Information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Your Username</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Email</th>
                          <th scope="col">Birth Date</th>
                          <th scope="col">Address</th>                    </tr>
                  </thead>
                  <?php
                  	if($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
	                    <tr>
	                          <th><?php echo $rows['user_name']; ?></th>
	                          <td><?php echo $rows['phone_number']; ?></td>
	                          <td><?php echo $rows['email']; ?></td>
	                          <td><?php echo $rows['birth_date']; ?></td>
	                          <td><?php echo $rows['address']; ?></td>            
	                    </tr>
	                  </tbody>
	                <?php
	            	}
                  	?>
                </table>
            </div>      
        </div>             
        </div>   
    </div>  
</body>