<?php 

include_once('Assets/config/config.php');

if(isset($_POST['submit'])){
  //Button Clicked

  
  $user = $_POST['username'];
  $address = $_POST['address'];

  $phone = $_POST['phone'];
  $license = $_POST['licenseNumber'];
  $engine = $_POST['engineNumber'];
  $date = $_POST['date'];

  $names = "SELECT * FROM `mechanic_list`";
  $data = mysqli_query($conn,$names) ;
  
  $mechname = $_POST['mechanic'];
  if ($user!="" && $license!="" && $engine != "" && $date != "" && $mechname != "") {
    # code...

  $query = "insert into appointment_list(fullName,address,phoneNumber,carLicenseNumber, carEngineNumber, dateOfAppointment,mechName) values('$user', '$address','$phone', '$license','$engine','$date','$mechname')";

  $run = mysqli_query($conn,$query) ;
  }
  else{
    // echo "All fields are required";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make Appointment</title>
  <link rel="stylesheet" href="./Assets/css/appointment.css">
</head>

<body>
  <form action="#" method="POST">
    <div class="container">
      <div class="heading">
        <h1>Appointment Details</h1>
      </div>
      <div class="input-fields">
        <div class="personal-info">
          <ul>
            <li>
              <h2>Personal Details</h2>
            </li>
            <li><input name="username" type="text" placeholder="Full Name" required></li>
            <li><input name="address" type="text" placeholder="Address" required></li>
            <li><input name="phone" type="text" placeholder="Phone Number" required></li>
          </ul>
        </div>
        <div class="car-info">
          <ul>
            <li>
              <h2>Car Details</h2>
            </li>
            <li><input name='licenseNumber' type="text" placeholder="Car License Number" required></li>
            <li><input name='engineNumber' type="text" placeholder="Car Engine Number" required></li>
          </ul>
        </div>
        <div class="booking-info">
          <ul>
            <li>
              <h2>Booking Info</h2>
            </li>
            <li><input type="date" name="date" id="" required></li>
            <li>
              <select name="mechanic" id="" required>
                <?php
                while ($names = mysqli_fetch_assoc($data)) {
                  # code...

                  echo "
                  <option>".$names['name']."</option>
                  <option value = ".$names['name'].">Mr z</option>
                  <option value = ".$names['name'].">Someone</option>
                  <option value = ".$names['name'].">Mr p</option>
                  
                  ";
                }
                
                ?>

              </select>
            </li>
          </ul>
        </div>
      </div>
      <div class="submit">
        <form action="">
          <button type='submit' name='submit'>Submit</button>
        </form>
        <form action="">
          <button>Clear Form</button>
        </form>
      </div>
    </div>
  </form>

</body>

</html>