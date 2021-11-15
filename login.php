<?php 

include_once('Assets/config/config.php');
error_reporting(0);

if(isset($_POST['submit'])){
  //Button Clicked
  
  $username = $_POST['uname'];
  $pass = $_POST['psw'];
  
  $query = "SELECT * FROM admin WHERE name = '$username' AND password = '$pass'";
  $res = mysqli_query($conn,$query) ;

  if(mysqli_num_rows($res) == 1){
      session_start();
      $_SESSION['auth'] = 'true'; //look here
      header('location:admin.php');
  }
  else{
      echo '<script>alert("Incorrect Username or Password! ")</script>';
  }


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Here</title>
  <link rel="stylesheet" href="./Assets/css/login.css">

  <style>
  * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
<body style = "background-color:#0f4c5c;color:white;text-align:center">

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
              <li class="active"><a href="login.php">Log In</a></li>
              <li  ><a href="appointment.php">Get Appointment</a></li>

            </ul>
          </nav>
        </div>
      </div>

    </div>
  </header>
  <!-- Header -->


  <!-- Main -->
  <form action="#" method = "post">
    <div class="container" >
    <h1>Login Admin Panel</h1>
    <p>Please fill in this form to get admin privilege.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username: try 'afsan'" name="uname" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password: try '0000'" name="psw" id="psw" required>

    <hr>
    <button type="submit" name = "submit" class="registerbtn">Login</button>
    </div>

  </form>
 



  <!-- Footer -->

</body>
</html>
