<?php 
include_once('Assets/config/config.php');
error_reporting(0);
// Selecting AppointMent List from the database
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
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
</head>

<body style = "background-color:#0f4c5c;color:white;">
<header class="sticky">
    <div class="mylogo">
      <img src="/Assets/getmech (200 x 80 px).png" alt="" srcset="">
    </div>
    <div class="nav-container">
      <div class="menu-container" style="display: flex;">

        <div class="nav-items">
          <nav>
            <ul class="nav-links" style = "list-style:none">
              <li class="active"><a href="./index.html">Home</a></li>
              <li><a href="">Log In</a></li>
              <li class="app"><a href="/appointment.php">Get Appointment</a></li>

            </ul>
          </nav>
        </div>
      </div>

    </div>
  </header>
  <main>
    <div class="container">
      <div class="subcontainer">
      <table align="center" border="1px" style="width:90%; line-height = 20px; text-align:center; font-size:20px" >
          <tr>
            <th colspan="12">
              <h4>Appointment List</h4>
            </th>
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
      while ($rows = mysqli_fetch_assoc($run)):
        # code...
        ?>

          <tr>


            <td><?php echo $rows["regNo"];?></td>
            <td><?php echo $rows["fullName"];?></td>
            <td><?php echo $rows["address"];?></td>
            <td><?php echo $rows["phoneNumber"];?></td>
            <td><?php echo $rows["carLicenseNumber"];?></td>
            <td><?php echo $rows["carEngineNumber"];?></td>
            <td><?php echo $rows["dateOfAppointment"];?>
              <?php echo " <a href='update.php?rn=$rows[regNo]'> <i class='fas fa-exchange-alt'></i></a>";?>
            </td>
            <td><?php
            if ($rows['mechName'] == 1) {
              # code...
                echo "Jack Ma <a href='swap.php?rn=$rows[regNo]'><i class='fas fa-exchange-alt'></i></a>";
            }
            elseif($rows['mechName'] == 2){
              echo "Jeff Bezos <a href='swap.php?rn=$rows[regNo]'><i class='fas fa-exchange-alt'></i></a>";
            }
            elseif($rows['mechName'] == 3){
              echo "Linus Torvals <a href='swap.php?rn=$rows[regNo]'><i class='fas fa-exchange-alt'></i></a>";
            }
            else{
              echo "Mark Zuckerburg <a href='swap.php?rn=$rows[regNo]'><i class='fas fa-exchange-alt'></i></a>";
            }
            
            
            ?></td>
            <?php echo "
            <td><a href='delete.php?cl=$rows[regNo]'><i class='fas fa-trash-alt'></i></a></td>
            ";
            ?>

          </tr>


          <?php
      endwhile;
      ?>
        </table>
      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>

</html>