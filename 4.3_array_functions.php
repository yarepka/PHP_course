<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Array functions</h1>
  <?php 
    // https://www.php.net/manual/en/ref.array.php

    $numbers = [343, 34, 323, 23, 54, 232, 453];
    $chars = ["A", "a", "B", "Z"];

    // return max value
    echo max($numbers) . "<br>"; // 453
    echo max($chars) . "<br>"; // a

    // return min value
    echo max($numbers) . "<br>"; // 453
    echo max($chars) . "<br>"; // a

    // sort
    sort($numbers);
    sort($chars);

    // Array ( [0] => 23 [1] => 34 [2] => 54 [3] => 232 [4] => 323 [5] => 343 [6] => 453 )
    print_r($numbers);
    echo "<br>";
    // Array ( [0] => A [1] => B [2] => Z [3] => a )
    print_r($chars);
  ?>
</body>
</html>