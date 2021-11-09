<?php 
include_once('Assets/config/config.php');

  $query = "select * from appointment_list";

  $run = mysqli_query($conn,$query) ;

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
  <header>

  </header>
<main>
  <div class="container">
    <div class="subcontainer">
      <table align="center" border="1px" style="width: 70%; line-height: 15px;">
      <tr >
        <th colspan="12" ><h4>Appointment List</h4></th>
      </tr>
      <t>
        <th>ID</th>
        <th>Full Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>License Number</th>
        <th>Engine Number</th>
        <th>Date</th>
        <th>Mechanic Name</th>
      </t>
      <?php
      while ($rows = mysqli_fetch_assoc($run)) {
        # code...

        ?>
        <tr>
          <td><?php echo $rows['regNo'];?></td>
          <td><?php echo $rows['fullName'];?></td>
          <td><?php echo $rows['address'];?></td>
          <td><?php echo $rows['phoneNumber'];?></td>
          <td><?php echo $rows['carLicenseNumber'];?></td>
          <td><?php echo $rows['carEngineNumber'];?></td>
          <td><?php echo $rows['dateOfAppointment'];?></td>
          <td><?php echo $rows['mechName']?></td>
        </tr>
        <?php
      }
      ?>
      </table>
      </div>
  </div>
</main>
<footer>

</footer>
</body>
</html>