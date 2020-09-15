<?php
	//import connect.php
	require 'connect.php';

	if(isset($_POST['first_name'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		$sex = $_POST['sex'];
		$User_name = $_POST['User_name'];
		$password = $_POST['password'];
		$birth_date = $_POST['birth_date'];
		$blood_group = $_POST['blood_group'];
		$last_donated = $_POST['last_donated'];
		$address = $_POST['address'];
		$corona_recovery = $_POST['corona_recovery'];


	//inserting data
		$is_inserted = mysqli_query($conn,"
			INSERT INTO blood_seeker(User_name,password,first_name,last_name,birth_date,sex,blood_group,phone_number,email,address, corona_recovery, last_donated)
			VALUES('$User_name','$password','$first_name','$last_name','$birth_date','$sex','$blood_group','$phone_number','$email','$address','$corona_recovery','$last_donated')");


		}
		
		if($is_inserted){
  			echo "Inserted successfully";
		}else{
  			echo "Opps error!";
		}
?>