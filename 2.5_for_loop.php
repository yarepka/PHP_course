<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>For Loop</h1>
  <?php 
    $age = 18;
    $dead_age=72;
    for($i = ++$age; $i <= $dead_age; $i++) {
      echo "You are " . $i . " years old! Life is quite good!<br>";
    }
    echo "You are dead! Is it the end?<br>";
  ?>
</body>
</html>