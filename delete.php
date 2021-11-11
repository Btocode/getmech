<?php
include('Assets/config/config.php');
error_reporting(0);

// Getting Registration Number of user
$regNo = $_GET['cl'];

// Getting ID of mechanic
$sql0 = "SELECT mechName FROM appointment_list where regNo = $regNo";
$mechId = mysqli_query($conn, $sql0);
$mechId1 = mysqli_fetch_assoc($mechId);
$temp = $mechId1[mechName];

// Decresing Number of orders on delete
$sql1 = "UPDATE mechanic_list SET orders = orders - 1 WHERE id = $temp";
mysqli_query($conn, $sql1);

// Deleting User data from Database
$task = "DELETE FROM `appointment_list` WHERE `appointment_list`.`regNo`= '$regNo'";
$data = mysqli_query($conn, $task);

if ($data) {
  # code...
  header("Refresh:0; url=admin.php");
}
?>