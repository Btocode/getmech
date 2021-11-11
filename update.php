<?php 
include_once('Assets/config/config.php');
error_reporting(0);

$temp = $_GET[rn];
//  $q = "SELECT fullName FROM appointment_list WHERE regNo = $temp";
//  $name = $conn -> query($q);

if (isset($_POST['submit'])) {

  $date1 = $_POST["doapp"];

$query = "UPDATE `appointment_list` SET dateOfAppointment = '$date1' WHERE regNo = $temp";
$res = $conn -> query($query);
if ($res) {
  # code...
  header("Refresh:0; url=admin.php");
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/Assets/css/update.css">
</head>
<body style = "background-color:#0f4c5c;display:flex;justify-content:center">
  <form action="" method = "POST">
  <div class="contents" style = "display:flex; flex-direction:column;height:400px;width:100%;justify-content:center;align-items:center">
    <h3 style = "text-align:center;color:#EDF0F1;font-size:32px">Change Date of Appointment <?php echo $name ?> </h3>
    <input type="date" name="doapp" id="" style = "width:100%;height:30px;margin-bottom:15px">
    <button type = "submit" name = "submit" style = "height:35px;width:100px;cursor:pointer" >Update</button>
  </div>
  </form>
</body>
</html>

