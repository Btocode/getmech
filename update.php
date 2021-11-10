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
<link rel="stylesheet" href="/Assets/css/admin.css">
</head>
<body>
  <form action="" method = "POST">
  <div class="contents">
    <h3>Assign a new Date for <?php echo $name ?> </h3>
    <input type="date" name="doapp" id="">
    <button type = "submit" name = "submit"  >Update</button>
  </div>
  </form>
</body>
</html>

