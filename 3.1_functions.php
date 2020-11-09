<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Functions</h1>
  <?php 
    function add($a, $b) {
      return $a + $b;
    }

    function subtract($a, $b) {
      return $a - $b;
    }

    function multiply($a, $b) {
      return $a * $b;
    }

    function divide($a, $b) {
      return $a / $b;
    }

    echo add(5,5) . "<br>";
    echo subtract(5,5) . "<br>";
    echo multiply(5,5) . "<br>";
    echo divide(5,5) . "<br>";
  ?>
</body>
</html>