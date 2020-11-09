<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Comparison Operators</h2>
  <pre>
    equal ==
    identical ===
    compare > < >= <= <>
    not equal !=
    not identical !==
  </pre>
  <h2>Logical Operators</h2>
  <pre>
    And &&
    Or  ||
    Not !
  </pre>
  <?php 
    // example 1
    $a = 2;
    $b = "2";

    // "equal"
    if($a==$b) echo "equal";
    else echo "not equal";

    echo "<br>";

    // "not equal"
    if($a===$b) echo "equal";
    else echo "not equal";

    echo "<br>";

    // example 2
    $logical1 = false && true;
    echo $logical1 ? "true" : "false" . "<br>";
    $logical2 = false || true;
    echo $logical2 ? "true" : "false" . "<br>";
  ?>
</body>
</html>