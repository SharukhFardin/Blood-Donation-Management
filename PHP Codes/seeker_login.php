<?php
	ini_set('display_errors','1');
	//Initialize the session
	session_start();

	//import connect.php
	require 'connect.php';

	if(isset($_POST['user_name'])){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
	}
		$stmt = $conn->prepare("SELECT * FROM blood_seeker WHERE user_name=?");
		$stmt->bind_param("s", $user_name);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows >0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password){
				header("location: seeker_welcome.html");
			}
			else{
				echo "<h2>Invalid username or password</h2>";
			}
		}
		else{
			echo "<h2>Invalid Username or Password/h2>";
	}
	mysqli_close($link);

?>