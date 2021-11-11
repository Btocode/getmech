<?php 

include_once('Assets/config/config.php');

// Selecting Mechanic List from the database.
$names = "SELECT * FROM `mechanic_list`";
$data = mysqli_query($conn,$names);

// Taking action after submit button press.
if(isset($_POST['submit'])){
  //Button Clicked
  error_reporting(0);
  
  // Retriving user info from the webpage.
  $user = $_POST['username'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $license = $_POST['licenseNumber'];
  $engine = $_POST['engineNumber'];
  $date = $_POST['date'];
  $mechname = $_POST['mechanic'];

  
  // Selecting Mechanic List from the database
  $sql2="SELECT orders FROM `mechanic_list` WHERE id = $mechname";
  $no_of_orders = mysqli_query($conn,$sql2);
  $norders = mysqli_fetch_assoc($no_of_orders);

  // Checking number of pending orders of a mechanic.
  if ($norders[orders] < 4) {
    # code...
    $sq1 = "UPDATE mechanic_list SET orders = orders + 1 WHERE id = $mechname";
    mysqli_query($conn,$sq1);
    
    // Checking for any empty field given by user
    if ($user!="" && $license!="" && $engine != "" && $date != "" && $mechname != "") {
    $query = "insert into appointment_list(fullName,address,phoneNumber,carLicenseNumber, carEngineNumber, dateOfAppointment,mechName) values('$user', '$address','$phone', '$license','$engine','$date','$mechname')";
  
    $run = mysqli_query($conn,$query) ;
    }
    else{
      // echo "All fields are required";
    }
  }
  else{
    echo "this mechanic is booked";
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
                while ($names = mysqli_fetch_array(
                  $data,MYSQLI_ASSOC)){

                  echo "
                <option value = ".$names['id']."> ".$names['name']." </option>
              
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