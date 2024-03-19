<?php
session_start();
include("log.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME PAGE</title>
</head>
<body>
  <div style="text-align: center; padding: 15%;">
    <p style=" font-size:50px; font-weight:bold">you are now in the
    VIRTUAL VOTING SYSTEM homepage <?php
    if(isset($_SESSION['nrc'])){
      $NRC=$SESSION['nrc'];
      $query=mysqli_query($conn, "SELECT users.* FROM 'users' WHERE users.nrc='$NRC'");
      while($row=mysqli_fetch_array($query)){
        echo $row['name'].''.$row['gender'];
      }
    }
    ?>
   </p>
</body>
</html>