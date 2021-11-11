<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "getmech";
$conn = mysqli_connect($server, $username, $password, $dbname );
error_reporting(0);

if(isset($_POST['submit'])){
  //Button Clicked
  
  $usrname = $_POST['email'];
  $pass = $_POST['psw'];
  
  $query = "SELECT * FROM admin WHERE username = $usrname AND password = $pass";
  $run = mysqli_query($conn,$query) or die(mysqli_error());
  $data = mysqli_num_rows($run);

  if ($data == 1) {
    # code...
    // $_SESSION['login'] = "<p>Login success</>";
    // // Redirect to admin.php
    // header('location:'.SITEURL.'/admin.php');
    echo "success";
  }

  else {
    echo "login failed";
  }

}
else{
  //Button not clicked
  echo "All fields required";
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
</head>
<body style = "background-color:#0f4c5c;color:white;text-align:center">
  <!-- Header -->


  <!-- Main -->
  <form action="#" method = "POST">
    <div class="container" >
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>
    <button type="submit" name = "submit" class="registerbtn">Login</button>
    </div>

  </form>
 



  <!-- Footer -->

</body>
</html>
