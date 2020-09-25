<?php
include_once('connect.php');
if(isset($_POST['User_name'])){
  $str =$_POST['User_name'];
  $query="DELETE FROM blood_donor WHERE User_name ='$str' ";
  $result=mysqli_query($conn,$query);

  if(! $result){
    echo "Couldn't Delete data";
  }else{
    echo "Donor successfully deleted";
  }
}
?>