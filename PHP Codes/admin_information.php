<?php
include_once('connect.php');
$query="SELECT * FROM admin";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center text-white bg-success lg-3">
                
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">All Admin's Information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Admin ID</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Email</th>
                          <th scope="col">Position</th>
                          <th scope="col">Joining date</th>
                          <th scope="col">Salary in BDT</th>
                    </tr>
                  </thead>
                  <?php
                  	while($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
	                    <tr>
	                          <th><?php echo $rows['AID']; ?></th>
	                          <td><?php echo $rows['first_name']; ?></td>
	                          <td><?php echo $rows['last_name']; ?></td>
	                          <td><?php echo $rows['phone_number']; ?></td>
	                          <td><?php echo $rows['email']; ?></td>
	                          <td><?php echo $rows['position']; ?></td>
	                          <td><?php echo $rows['joined_on']; ?></td>
	                          <td><?php echo $rows['salary']; ?></td>
	                          
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