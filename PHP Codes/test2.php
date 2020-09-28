<?php
include_once('connect.php');
$str =$_POST['address'];
$str2 = $_POST['bg'];

$query="SELECT * FROM blood_request JOIN blood_seeker ON blood_seeker.SID=blood_request.SID WHERE address = '$str' and bg='$str2' ";


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
                <h5 class="card-title">Search Result for Seekers</h5>
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                          <th name="user_name" scope="col">Seeker's Username</th>
                          <th scope="col">Name</th>
                          <th scope="col">Contact Number</th>
                          <th scope="col">Requested Blood</th>
                          <th scope="col">Request Date</th>
                          <th scope="col">Location</th>
          
                    </tr>
                  </thead>
                  <?php
                    while($rows=mysqli_fetch_assoc($result)){
                  ?>
                    <tbody>
                        <tr>
                          
                              <td><?php echo $rows['first_name']; ?></td>
                            
                              <td><?php echo $rows['phone_number']; ?></td>
                              <td><?php echo $rows['email']; ?></td>
                              <td><?php echo $rows['bg']; ?></td>
                              <td><?php echo $rows['request_date']; ?></td>
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