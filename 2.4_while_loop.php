<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>While Loop</h1>
  <?php 
    $age = 18;
    $dead_age = 72;
    while($age < $dead_age) {
      $age++;
      echo "Happy birthday you are " . $age . " now!<br>";
    }
    echo "You are dead :(<br>";
  ?>
</body>
</html>