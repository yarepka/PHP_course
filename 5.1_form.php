<?php 
  // $_POST will contain all the fields
  if(isset($_POST['submit'])) {
    // $_POST is not NULL
    print_r($_POST); echo "<br>";
    $names = ["John", "Jack", "Anna", "Jane", "Tom"];
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="5.1_form.php" method="POST">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
  </form>
</body>
</html>