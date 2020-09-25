<?php
include_once('connect.php');
$query="SELECT * FROM hospital";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center text-white bg-success lg-3">
                
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Hospital's information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Hospital Code</th>
                          <th scope="col">Hospital's name</th>
                          <th scope="col">Location</th>
                          <th scope="col">Phone Number</th>
                    </tr>
                  </thead>
                  <?php
                  	while($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
	                    <tr>
	                          <th><?php echo $rows['Hospital_code']; ?></th>
	                          <td><?php echo $rows['Hospital_name']; ?></td>
	                          <td><?php echo $rows['location']; ?></td>      
                            <td><?php echo $rows['phone_number']; ?></td>     
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