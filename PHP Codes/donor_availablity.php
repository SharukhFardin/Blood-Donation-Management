<?php
session_start();
require_once('connect.php');
$loggedIn = $_SESSION['User_name'];
$query="SELECT * FROM blood_donor where User_name='$loggedIn'";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Blood Request Info</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center text-white bg-success lg-3">
                
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Blood Request Information</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th scope="col">Your Username</th>
                          <th scope="col">Your Blood Group</th>
                          <th scope="col">Last Donation Date</th>
                          <th scope="col">Current Status</th>
                          <th scope="col">Change availablity</th>
                          <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <?php
                  	while($rows=mysqli_fetch_assoc($result)){
                  ?>
	                  <tbody>
	                    <tr>
	                          <th><?php echo $rows['User_name']; ?></th>
	                          <td><?php echo $rows['blood_group']; ?></td>
	                          <td><?php echo $rows['last_donated']; ?></td>   
                            <td><?php echo $rows['availablity']; ?></td> 
                            <td> 
                            <form  action="donor_change_availablity.php" method="post">
                                <select name="select" class="mdb-select md-form" searchable="Search here..">
                                    <option value="" disabled selected>Choose a option</option>
                                    <option value="Available" data-secondary-text="Production year: 2012">Available</option>
                                    <option value="Not Available" data-secondary-text="Production year: 2017">Not Availabe</option>
                                  </select></td> 

                            <td>                              
                              <input type="submit" class="btn btn-success" name="submit" value="Submit" >
                            </td> 
                            </form>

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