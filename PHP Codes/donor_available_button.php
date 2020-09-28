<?php
include_once('connect.php');
if(isset($_POST['SID'])){
  $str =$_POST['SID'];
  $query="UPDATE blood_request SET status='Donor found' WHERE SID ='$str' ";
  $result=mysqli_query($conn,$query);
}
?>