<?php
include('Assets/config/config.php');
error_reporting(0);

$regNo = $_GET['cl'];
$task = "DELETE FROM `appointment_list` WHERE `appointment_list`.`regNo`= '$regNo'";
$data = mysqli_query($conn, $task);
if ($data) {
  # code...
  header("Refresh:0; url=admin.php");
}
else{
  
}
?>