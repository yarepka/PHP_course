<?php 
    include "functions.php";

    if(isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      updateUser($id, $username, $password);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-xs-6">
      <form action="login_update.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <select name="id">
            <?php 
              getOptionsFromIds();
            ?>
          </select>
          
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Update">
      </form>
    </div>
  </div>
</body>
</html>