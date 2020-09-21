<?php
	//Initialize the session
	session_start();

	//import connect.php
	require 'connect.php';

	if(isset($_POST['User_name'])){
		$User_name = $_POST['User_name'];
		$password = $_POST['password'];
	}
		$stmt = $conn->prepare("SELECT * FROM blood_donor WHERE User_name=?");
		$stmt->bind_param("s", $User_name);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows >0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password){
				header("location: donor_welcome.html");
			}
			else{
				echo "<h2>Invalid username or password</h2>";
			}
		}
		else{
			echo "<h2>Invalid Username or Password/h2>";
	}

?>