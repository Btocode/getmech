<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($server, $username, $password, $dbname );

if(isset($_POST['submit'])){
  //Button Clicked
  
  $email = $_POST['email'];
  $pass = $_POST['psw'];
  
  $query = "insert into tester(email,password) values('$email', '$pass')";
  $run = mysqli_query($conn,$query) or die(mysqli_error());
  if($run){
    echo "data pushed successfully ";
  }
  else{
    echo "data not pushed";
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
<body>
  <!-- Header -->


  <!-- Main -->
  <form action="#" method = "POST">
    <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name = "submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
  </form>
 



  <!-- Footer -->

</body>
</html>
