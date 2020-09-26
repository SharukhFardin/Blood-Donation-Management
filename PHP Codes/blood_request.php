<?php
include_once('connect.php');
$query="SELECT * FROM blood_seeker JOIN blood_request ON blood_seeker.SID=blood_request.SID";
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
                <h5 class="card-title">Blood Information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Seeker's Name</th>
                          <th scope="col">Requested Blood Group</th>
                          <th scope="col">Contact Number</th>
                          <th scope="col">Request Date</th>
                    </tr>
                  </thead>
                  <?php
                  	while($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
	                    <tr>
	                          <th><?php echo $rows['first_name']; ?></th>
	                          <td><?php echo $rows['bg']; ?></td>
	                          <td><?php echo $rows['phone_number']; ?></td>   
                            <td><?php echo $rows['request_date']; ?></td>        
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