<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>For Each Loop</h1>
  <?php 
    $evens = [2, 4, 6, 8, 10];
    foreach($evens as $even_number) {
      echo "Let me inroduce myself. Me - " . $even_number . " is an even number!<br>";
    }
  ?>
</body>
</html>