<?php
session_start();
 
$_SESSION = array();
 
session_destroy();
 
header("location: doner_login.html");
exit;
?>