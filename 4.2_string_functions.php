<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1></h1>
  <?php 
    // https://www.php.net/manual/en/ref.strings.php

    $string = "Hello World!";

    // get string length
    echo strlen($string) . "<br>";

    echo strtoupper($string) . "<br>";

    echo strtolower($string) . "<br>";

    // print is not actually a real function (it is a language construct) so you are not required to use parangeses with its argument list
    print "Hello People!<br>";
    print("Same as above<br>")

  ?>
</body>
</html>