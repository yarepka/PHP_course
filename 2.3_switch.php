<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Switch Statemenets</h1>
  <?php
    $first_word = "dad";
    switch($first_word) {
      case "mom": echo "The first word is mom"; break;
      case "dad": echo "The first word is dad"; break;
      default: echo "I didn't get it, sorry, kid"; break;
    }
  ?>
</body>
</html>