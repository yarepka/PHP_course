<?php 
  // $_POST will contain all the fields
  if(isset($_POST['submit'])) {
    // $_POST is not NULL
    print_r($_POST); echo "<br>";
    $names = ["Roman", "Maxim", "Thomas", "Joshua", "Richard"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $maximum = 10;

    if(strlen($username) < $minimum) {
      echo "Username must be longer than five<br>";
    } else if(strlen($username) > $maximum) {
      echo "Username must be less than ten<br>";
    } else {
      if(!in_array($username, $names)) {
        echo "Sorry, you are not allowed<br>";
      } else {
        echo "Welcome, " . $username;
      }
    }
  }
?>