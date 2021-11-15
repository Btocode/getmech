<?php
include_once('Assets/config/config.php');
error_reporting(0);
// Selecting Mechanic List from the Database
$query = "SELECT * FROM `mechanic_list`";
$res = $conn -> query($query);  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/Assets/css/admin.css">

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

<body style = "background-color:#0f4c5c;">
<header class="sticky">
    <div class="mylogo">
      <img src="getmech (200 x 80 px).png" alt="" srcset="">
    </div>
    <div class="nav-container">
      <div class="menu-container" style="display: flex;">

        <div class="nav-items">
          <nav>
            <ul class="nav-links">
              <li ><a href="admin.php">Appointments</a></li>
              <li class="active"><a href="mechList.php">Mechanics</a></li>
              

            </ul>
          </nav>
        </div>
      </div>

    </div>
  </header>

  <form action="" method="POST">

    <div class="contents" style = "margin-top:50px">

      <table align="center" border="1px" style="width:80%; line-height = 25px; text-align:center;color:white;font-size:25px">
        <tr>
          <th colspan="12">List of Mechanics</th>
        </tr>
        <tr>
          <th>ID</th>
          <th>Name of Mechanic</th>
          <th>No. of orders </th>
        </tr>

        <?php
        while ($data = mysqli_fetch_assoc($res)) {
          # code...
          echo "
              <tr>
              <td>".$data['id']."</td>
              <td>".$data['name']."</td>
              <td>".$data['orders']."</td>
              </tr>
          ";
        }
        ?>
      </table>
    </div>
  </form>
  </ </body>

</html>