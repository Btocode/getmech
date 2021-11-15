<?php 

include_once('Assets/config/config.php');

// Selecting Mechanic List from the database.
$names = "SELECT * FROM `mechanic_list`";
$data = mysqli_query($conn,$names);
$mssg = "";

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
    if($run){
        echo '<script>alert("Appointment Placed Successfully, Stay Well, Stay Safe")</script>';
        header("Refresh:1; url=index.php");
    }
    }
    else{
      // echo "All fields are required";
    }
  }
  else{
    $mssg =  "Selected mechanic does not have any empty slot, try later or choose others";
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
  <style>
  * {
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
}

/* Add padding to containers */


ul{
  list-style: none;
  
}
li{
  padding: 2px 10px;
}
input{
  height: 30px;
  width: 100%;
  border-style: none;
  border-bottom:1px solid rgb(138, 5, 5) ;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}


.container{
  width: 100%;
  height: auto;
  margin: auto;
  padding: 20px;
  background-color: #0f4c5c;
}
  ul{
      list-style:none;
  }
  </style>
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
              <li ><a href="index.php">Home</a></li>
              <li><a href="login.php">Log In</a></li>
              <li class="app" class="active"><a href="appointment.php">Get Appointment</a></li>

            </ul>
          </nav>
        </div>
      </div>

    </div>
  </header>
  <form action="#" method="POST">
    <div class="container" style ="width:80%;margin-top:60px;text-align:center;background-color:#0f4c5c">
      <div class="heading">
        <h1 style="padding:10px 20px">Make an Appointment</h1>
      </div>
      <div class="input-fields">
        <div class="personal-info">
          <ul style = "list-style:none">
            <li>
              <h2>Personal Details</h2>
            </li>
            <li><input style="padding:10px 20px; margin-top:10px" name="username" type="text" placeholder="Full Name" required></li>
            <li><input style="padding:10px 20px; margin-top:10px" name="address" type="text" placeholder="Address" required></li>
            <li><input style="padding:10px 20px; margin-top:10px" name="phone" type="text" placeholder="Phone Number" required></li>
          </ul>
        </div>
        <div class="car-info">
          <ul>
            <li>
              <h2>Car Details</h2>
            </li>
            <li><input style="padding:10px 20px; margin-top:10px"  name='licenseNumber' type="text" placeholder="Car License Number" required></li>
            <li><input style="padding:10px 20px" name='engineNumber' type="text" placeholder="Car Engine Number" required></li>
          </ul>
        </div>
        <div class="booking-info">
          <ul>
            <li>
              <h2>Booking Info</h2>
            </li>
            <li><input style="padding:10px 20px" type="date" name="date" id="" required></li>
            <li>
            <h2 style="margin:20px 10px">Pick your Mechanic</h2>
              <select style="padding:10px 20px; font-size:15px; margin-bottom:30px" name="mechanic" id="" required>
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
          <p style="padding:10px 20px;margin-right:30px;font-size:20px;color:red" type='submit' name = "alert"><?php echo $mssg?></p>
        </div>
      </div>
      <div class="submit">
        <form action="">
          <button style="padding:10px 20px;margin-right:30px;font-size:20px" type='submit' name='submit'>Submit</button>
        </form>
        
      </div>
    </div>
  </form>

</body>

</html>