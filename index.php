<?php

session_start();
if (isset($_SESSION["user"])) {
  header("location:beranda.php");
}
include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>LOGIN</title>
   </head>
   <body>
     <?php

if (isset($_GET["error"])) {
  if ($_GET["error"] == "wrong") {
    echo '<h3>username dan password salah!</h3>';
  }
}
if (isset($_GET["notif"])) {
  if ($_GET["notif"] == "logout") {
    echo '<h3>berhasil logout!</h3>';
  }
}
if (isset($_POST["submit"])) {
  echo do_login($_POST['username'], $_POST['password']);
}

      ?>
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        username: <input type="text" name="username" value=""><br>
        password: <input type="password" name="password" value=""><br>
        <input type="submit" name="submit" value="SIGN IN">
      </form>
   </body>
 </html>
