<?php
	ini_set('display_errors','1');
	//Initialize the session
	session_start();

	//import connect.php
	require 'connect.php';

	if(isset($_POST['AID'])){
		$AID = $_POST['AID'];
		$password = $_POST['password'];
	}
		$stmt = $conn->prepare("SELECT * FROM admin WHERE AID=?");
		$stmt->bind_param("s", $AID);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows >0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password){
				header("location: admin_welcome.html");
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