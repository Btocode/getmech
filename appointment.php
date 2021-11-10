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

  $mechname = $_POST['mechanic'];
  
  
  $query = "insert into appointment_list(fullName,address,phoneNumber,carLicenseNumber, carEngineNumber, dateOfAppointment,mechName) values('$user', '$address','$phone', '$license','$engine','$date','$mechname')";

  $run = mysqli_query($conn,$query) ;

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
<form action="#" method = "POST">
  <div class="container" >
    <div class="heading">
      <h1>Appointment Details</h1>
    </div>
    <div class="input-fields">
      <div class="personal-info">
        <ul>
          <li><h2>Personal Details</h2></li>
          <li><input name = "username"type="text" placeholder="Full Name"></li>
          <li><input name = "address" type="text" placeholder="Address"></li>
          <li><input name = "phone" type="text" placeholder="Phone Number"></li>
        </ul>
      </div>
      <div class="car-info">
        <ul>
          <li><h2>Car Details</h2></li>
          <li><input name = 'licenseNumber'  type="text" placeholder="Car License Number"></li>
          <li><input name = 'engineNumber' type="text" placeholder="Car Engine Number"></li>
        </ul>
      </div>
      <div class="booking-info">
        <ul>
          <li><h2>Booking Info</h2></li>
          <li><input type="date" name="date" id=""></li>
          <li>
          <select name="mechanic" id="">
            <option value="">Mr X</option>
            <option value="">Mr y</option>
            <option value="">Mr z</option>
            <option value="">Mr p</option>
          </select>
        </li>
        </ul>
      </div>
    </div>
    <div class="submit" >
      <form action="" >
        <button type = 'submit' name = 'submit' >Submit</button>
      </form>
      <form action="">
        <button>Clear Form</button>
      </form>
    </div>
  </div>
</form>

</body>
</html>
