<?php
  $conn = mysqli_connect("localhost", "root", "111111", "opentutorial");
  $sql = "INSERT INTO topic
    (title, description, created)
    VALUE('MYSQL','MySQL is ...', NOW())";
  $result = mysqli_query($conn, $sq);
  if($result === false){
    echo mysqli_error($conn);
  }

 ?>
