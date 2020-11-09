<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $number = 3;
    if(5 > $number) {
      echo "5 > " . $number;
    } else if(5 === $number) {
      echo "5 === " . $number;
    } else {
      echo "5 < " . $number;
    }
  ?>
</body>
</html>