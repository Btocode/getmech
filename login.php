<?php 

include_once('Assets/config/config.php');
error_reporting(0);

if(isset($_POST['submit'])){
  //Button Clicked
  
  $username = $_POST['uname'];
  $pass = $_POST['psw'];
  
  $query = "SELECT * FROM admin WHERE username = '$username' and password = ";
  $res = mysqli_query($conn,$query) ;

if($res){
echo "getting";
}
else{
    echo "nothing";
}

//   if(mysqli_num_rows($run) == 1){
//       session_start();
//       $_SESSION['auth'] = 'true'; //look here
//       header('location:admin.php');
//   }
//   else{
//       echo "wrong username or password";
//   }


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
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
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
  width: 100%;
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
</head>
<body style = "background-color:#0f4c5c;color:white;text-align:center">
  <!-- Header -->


  <!-- Main -->
  <form action="#" method = "post">
    <div class="container" >
    <h1>Login Admin Panel</h1>
    <p>Please fill in this form to get admin privilege.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>
    <button type="submit" name = "submit" class="registerbtn">Login</button>
    </div>

  </form>
 



  <!-- Footer -->

</body>
</html>
