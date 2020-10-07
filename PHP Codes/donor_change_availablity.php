<?php
session_start();
include_once('connect.php');
$loggedIn = $_SESSION['User_name'];


if(isset($_POST['submit'])){
	if(!empty($_POST['select'])){
		$str = $_POST['select'];
		$query="UPDATE blood_donor SET availablity ='$str' WHERE User_name = '$loggedIn' ";
		$result=mysqli_query($conn,$query);

		if(! $result){
			echo "opps, 404";
		}else{
			echo "Availablity updated";
		}
	}
}
?>