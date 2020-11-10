<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Math Functions: </h1>
  <?php 
    // https://www.php.net/manual/en/ref.math.php

    // 4^2
    echo pow(2, 4) . "<br>";

    // random number from 1 to 1000
    echo rand(1, 1000) . "<br>";

    // quadratic root
    echo sqrt(25) . "<br>";

    // round up to next integer
    echo ceil(4.0001) . "<br>"; // 5

    // round down to previous integer
    echo floor(4.0001) . "<br>" ; // 4

    // round(math rules)
    echo round(4.5) . "<br>"; // 5
    echo round(4.4) . "<br>"; // 4
  ?>
</body>
</html>