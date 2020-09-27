<?php
	//import connect.php
	require 'connect.php';

	if(isset($_POST['first_name'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$sex = $_POST['sex'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$birth_date = $_POST['birth_date'];
	$address = $_POST['address'];

	$hashed = password_hash($password,PASSWORD_DEFAULT);

	//inserting data
	$is_inserted = mysqli_query($conn,"
		INSERT INTO blood_seeker(user_name,password,first_name,last_name,birth_date,sex,phone_number,email,address)
		VALUES('$user_name','$hashed','$first_name','$last_name','$birth_date','$sex','$phone_number','$email','$address')");


	}
		
	if($is_inserted){
  		echo "Registered successfully";
	}else{
  		echo "Opps error!";
	}
?>