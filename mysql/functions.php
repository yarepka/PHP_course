<?php 
  include "db.php";
  function getOptionsFromIds() {
    global $connection;
    $query = "SELECT ID FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Query FAILED " . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
      echo "<option value='" . $row["ID"] . "'>" . $row["ID"] ."</option>";
    }
  }

  function updateUser($id, $username, $password) {
    global $connection;
    
    echo $username . " " . $password . " " . $id;

    $query = "UPDATE users SET ";
    $query .= "username='$username', ";
    $query .= "password='$password' ";
    $query .= "WHERE id=$id";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("QUERY FAILED: ". mysqli_error($connection));
    }
  }
?>