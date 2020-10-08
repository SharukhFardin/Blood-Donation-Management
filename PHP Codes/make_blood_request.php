<?php
	//import connect.php
	require 'connect.php';

	if(isset($_POST['username'])){
		$user_name = $_POST['username'];
		$bg = $_POST['bg'];
	}

		date_default_timezone_set('Asia/Dhaka');
		$date = date('Y-m-d') ;

		$testsql = mysqli_query($conn,"Select * From blood_seeker WHERE user_name = '$user_name'");
		
		$stmt = $conn->prepare("SELECT * FROM blood_seeker WHERE user_name=?");
		$stmt->bind_param("i", $user_name);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows >0){
			$data = $stmt_result->fetch_assoc();
		}

			$a = $data['SID'];

		$sql = "Insert Into blood_request(SID,bg,request_date) Values('$a','$bg','date')";

		$is_inserted =  mysqli_query($conn,$sql);

		
		if($sql){
  			echo "Request published successfully";
		}else{
  			echo "Opps error!";
		}
?>