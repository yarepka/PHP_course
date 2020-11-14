<?php 
    // Connect to MySQL database, check localhost:80/phpmyadmin
    // Host name
    // User name
    // Password
    // DB
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
      echo "We are connected to DB<br>";
      $query = "SELECT * FROM users";
      $result = mysqli_query($connection, $query);
      if(!$result) {
        die("Query FAILED " . mysqli_error());
      }
    } else {
      die("Database connection failed");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <?php
      // mysqli_fetch_row($result) - return an array
      // mysqli_fetch_assoc($result) - return an associative array
      while($row = mysqli_fetch_assoc($result)) {
        print_r($row); echo "<br>";
      }
    ?>
</body>
</html>