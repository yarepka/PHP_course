<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $numberList = array(23, 64, "Hello", 45, "<h1>Good Day</h1>");
    $otherList = [2,4,6,8,10];
    echo $numberList[1];
    // will output array to console (in a wierd form)
    print_r($numberList);
  ?>
</body>
</html>