<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $user = $_POST['username'];
    $pass = $_POST['pass'];
    if (($user == "firdausa") && ($pass == "123")) {
      echo "login berhasill";
    } else {
      echo "login gagal";
    }
     ?>
<a href="logout.php">logout</a>
  </body>
</html>
