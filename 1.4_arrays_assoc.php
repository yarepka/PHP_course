<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $number = array(10, 20, 49);
    echo $number[1] . "<br>";

    print_r($number);
    $names = array("first_name" => "Roman", "last_name" => "Bubnov");
    echo "<br>";
    print_r($names);
    echo "<br>";
    echo $names["first_name"] . " " . $names["last_name"];
  ?>
</body>
</html>