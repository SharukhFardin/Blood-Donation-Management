<?php
include_once('connect.php');
if(isset($_POST['user_name'])){
  $str =$_POST['user_name'];
  $query="DELETE FROM blood_seeker WHERE user_name ='$str' ";
  $result=mysqli_query($conn,$query);

  if(! $result){
    echo "Couldn't Delete data";
  }else{
    echo "Donor successfully deleted";
  }
}
?>