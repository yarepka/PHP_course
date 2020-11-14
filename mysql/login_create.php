<?php 
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to MySQL database, check localhost:80/phpmyadmin
    // Host name
    // User name
    // Password
    // DB
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
      echo "We are connected to DB<br>";
      if($username && $password) {
        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username','$password');"; // .= is concatenate

        $result = mysqli_query($connection, $query);

        if(!$result) {
          die('Query FAILED!' . mysqli_error());
        }
      }
    } else {
      die("Database connection failed");
    }

    
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
  <div class="container">
    <div class="col-xs-6">
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
</body>
</html>