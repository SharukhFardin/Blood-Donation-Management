<?php
include_once('connect.php');
$str =$_POST['text'];
$query="SELECT * FROM blood_donor WHERE blood_group ='$str' ";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/searchbar.css">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center text-white bg-success lg-3">
                
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">All Registered Donors Information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Email</th>
                          <th scope="col">Birth Date</th>
                          <th scope="col">Address</th>
                          <th scope="col">blood_group</th>
                    </tr>
                  </thead>
                  <?php
                  	while($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
  	                    <tr>
  	                          <td><?php echo $rows['last_name']; ?></td>
  	                          <td><?php echo $rows['phone_number']; ?></td>
  	                          <td><?php echo $rows['email']; ?></td>
  	                          <td><?php echo $rows['birth_date']; ?></td>
  	                          <td><?php echo $rows['address']; ?></td>
                              <td><?php echo $rows['blood_group']; ?></td>      
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