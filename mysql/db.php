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