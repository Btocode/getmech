<?php 
include_once('Assets/config/config.php');
error_reporting(0);


$names = "SELECT * FROM `mechanic_list`";
$data = mysqli_query($conn,$names);
$regNo = $_GET[rn];
//  $q = "SELECT fullName FROM appointment_list WHERE regNo = $temp";
//  $name = $conn -> query($q);

// Getting ID of mechanic
$sql0 = "SELECT mechName FROM appointment_list where regNo = $regNo";
$mechId = mysqli_query($conn, $sql0);
$mechId1 = mysqli_fetch_assoc($mechId);
$temp = $mechId1[mechName];

if (isset($_POST['submit'])) {

  $mechanic = $_POST["mechanic"];

$query = "UPDATE `appointment_list` SET mechName = '$mechanic' WHERE regNo = $regNo";
$res = $conn -> query($query);

$sql2 = "UPDATE mechanic_list SET orders = orders + 1 WHERE id = $mechanic";
mysqli_query($conn, $sql2);

// Decresing Number of orders on change
$sql1 = "UPDATE mechanic_list SET orders = orders - 1 WHERE id = $temp";
mysqli_query($conn, $sql1);


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
    <h3>Assign a new Mechanic for <?php echo $name ?> </h3>
    <select name="mechanic" id="" required>
      <?php
                while ($names = mysqli_fetch_array(
                  $data,MYSQLI_ASSOC)){

                  echo "
                <option value = ".$names['id']."> ".$names['name']." </option>
              
              ";
              }
      ?>
    </select>
    <button type = "submit" name = "submit"  >Update</button>
  </div>
  </form>
</body>
</html>

