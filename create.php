<?php
  $conn = mysqli_connect('localhost', 'root', '111111','opentutorial');
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $sql = "SELECT * FROM author";
  $result = mysqli_query($conn, $sql);
  $select_form = '<select name="author_id">';
  while($row = mysqli_fetch_array($result)){
    $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
  }
  $select_form .= '</select>';
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">Web</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" placeholder="description"></textarea></p>
      <?=$select_form?>
      <p><input type="submit"></p>
    </form>
    </body>
</html>
