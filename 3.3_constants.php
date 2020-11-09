<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Constants</h1>
  <?php 
    // create constant
    define("NAME", "Roman");
    echo NAME . "<br>";
    // NAME = "Larry"; - YOU CAN'T DO THIS
    // Works as of PHP 5.3.0
 
    const CONSTANT = 'Hello World';
    echo CONSTANT . "<br>";
    
    // Works as of PHP 5.6.0
    const ANOTHER_CONST = CONSTANT.'; Goodbye World';
    echo ANOTHER_CONST . "<br>";
    
    const ANIMALS = array('dog', 'cat', 'bird');
    echo ANIMALS[1] . "<br>"; // outputs "cat"
    
    // Works as of PHP 7
    // Already defined up top
    define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
    ));
    
    echo ANIMALS[1]; // outputs "cat"
  ?>
</body>
</html>