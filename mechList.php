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
</head>

<body>
  <form action="" method="POST">

    <div class="contents">

      <table align="center" border="1px" style="width:60%; line-height = 20px; text-align:center">
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