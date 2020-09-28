<?php
include_once 'connect.php';
    $select = "SELECT * FROM blood_request JOIN blood_seeker ON blood_seeker.SID=blood_request.SID";
    $result = mysqli_query ($conn, $select);

    if(isset($_POST['submit']))
    {
        $location       =   $_POST['address'];
        $blood_group    =   $_POST['bg'];
    
        mysqli_close($connection);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Search Donors</h1>    
        </div>
        <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <h5 class="text-success text-center" id="message"><h5>
                <form action="test2.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Enter location">
                </div>
                <div class="form-group">
                    <select class="form-control" name="bg">
                        <option>Select blood group</option>
                        <?php foreach($result as $key => $value){ ?>
                          <option value="<?= $value['bg'];?>"><?= $value['bg']; ?></option> 
                        <?php } ?>
                    </select>
                </div>
              <div class="form-group">
                <div class="container">
                  <div class="row">
                    <div class="col"><button type="submit" name="submit" class="col-6 btn btn-primary btn-sm float-left">Submit</button></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </script>
</body>

</html>