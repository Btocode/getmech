<?php 
include_once('Assets/config/config.php');
error_reporting(0);

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
        <th>Operations</th>
      </t>
      <?php
      while ($rows = mysqli_fetch_assoc($run)) {
        # code...

        echo "
        <tr>
          <td>".$rows['regNo']."</td>
          <td>".$rows['fullName']."</td>
          <td>".$rows['address']."</td>
          <td>".$rows['phoneNumber']."</td>
          <td>".$rows['carLicenseNumber']."</td>
          <td>".$rows['carEngineNumber']."</td>
          <td>".$rows['dateOfAppointment']." <a href = '#'> change date</a></td>
          <td>".$rows['mechName']."</td>
          <td><a href = 'delete.php?cl=$rows[regNo]'>Delete</a></td>
        </tr>
        ";
       
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