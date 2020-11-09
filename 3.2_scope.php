<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Global/Local Scope</h1>
  <?php 

    /* Problem #1 */
    $x = "outside";
    function convert() {
      $x = "inside";
    }

    // "outside"
    echo $x . "<br>";
    convert();
    // "outside"
    echo $x . "<br>";

    /* Solution for Problem #1 */
    function convert_global() {
      global $x;
      $x = "inside";
    }

    // "outside"
    echo $x . "<br>";
    convert_global();
    // "inside"
    echo $x . "<br>";
  ?>
</body>
</html>