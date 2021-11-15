<?php 
include_once('Assets/config/config.php');
error_reporting(0);
session_start();

if(!$_SESSION['auth']){
    header('location:login.php');
    
}
else{
// Selecting AppointMent List from the database
  $query = "select * from appointment_list";

  $run = mysqli_query($conn,$query) ;

}



  

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

  <style>
  .sticky{
  display: flex;
  background-color: #0f4c5c;
}
.nav-container{
  display: flex;
  justify-content: right;
  height: 80px;
  width: 80%;
  opacity: 1;
  margin-bottom:50px;

}
.menu-container{
  display: flex;
  align-items: center;
  justify-content: left;
}

.nav-links {
  list-style: none;
  
}

.nav-links li {
  display: inline-block;
  min-height: 10px;
  min-width: 60px;
  margin: 0 20px;
  padding: 9px 25px;
  border: 1px solid #0f4c5c;
  border-radius: 50px;
  
}

.nav-links li a {
    text-decoration:none;
  padding: 5px 5px;
  font-size: 18px;
  font-weight: 500;
  color: rgb(223, 223, 223);
}

.nav-links li:hover{
  cursor: pointer;
  border: 1px solid rgba(0, 136, 169, 1);
}
.nav-links li a:hover {
  color: #f1f1f1;
}
.active{
  margin: 0 20px;
  padding: 9px 25px;
  background-color: rgb(19, 68, 80);
  border-radius: 50px;
  cursor: pointer;
}
.mylogo{
height: 80px;
width: 15%;
}
.mylogo img{
  height: auto;
  width: auto;
  float: right;
}

.app{
  margin: 0 20px;
  padding: 9px 25px;
  background-color: rgb(194, 53, 81);
  border: none;
  border-radius: 50px;
  cursor: pointer;
}
.app:hover{
  margin: 0 20px;
  padding: 9px 25px;
  background-color: rgb(65, 80, 74);
  border: none;
  border-radius: 50px;
  cursor: pointer;
}


  </style>
</head>

<body style = "background-color:#0f4c5c;color:white;">
<header class="sticky">
    <div class="mylogo">
      <img src="getmech (200 x 80 px).png" alt="" srcset="">
    </div>
    <div class="nav-container">
      <div class="menu-container" style="display: flex;">

        <div class="nav-items">
          <nav>
            <ul class="nav-links">
                  <li><a href="index.php">Home</a></li>            
              <li class="active"><a href="admin.php">Appointments</a></li>
              <li><a href="mechList.php">Mechanics</a></li>
              

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
              <p>Appointment List</p>
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
              <?php echo " <a href='update.php?rn=$rows[regNo]'> Change</a>";?>
            </td>
            <td><?php
            if ($rows['mechName'] == 1) {
              # code...
                echo "Jack Ma <a href='swap.php?rn=$rows[regNo]'>Change</a>";
            }
            elseif($rows['mechName'] == 2){
              echo "Jeff Bezos <a href='swap.php?rn=$rows[regNo]'>Change</a>";
            }
            elseif($rows['mechName'] == 3){
              echo "Linus Torvals <a href='swap.php?rn=$rows[regNo]'>Change</a>";
            }
            else{
              echo "Mark Zuckerburg <a href='swap.php?rn=$rows[regNo]'>Change</a>";
            }
            
            
            ?></td>
            <?php echo "
            <td><a href='delete.php?cl=$rows[regNo]'>Delete</a></td>
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