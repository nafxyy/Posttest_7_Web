<?php
  require "useriden.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login Area</title>
    <link rel="stylesheet" href="style.css">
    <style>
      <?php include './dist/css/loginstyle.css' ?>
    </style>
  </head>

  <body>

    <form action = "useriden.php" id="user" method="post">
      <h1><b>User Login Area</b></h1>
        <label class = "kotak" for="username"><b>Username</b></label>
        <input type="text" name="Username" required />

        <label class = "kotak2" for="password"><b>Password</b></label>
        <input type="password" name="Password" required />
        <?php if (isset($failed)) { ?>
      <div id="bad-login">WRONG USERNAME or PASSWORD</div>
    <?php } ?>
        <input type="submit" class = "submit" name="userlogin" value="Login" />
        <label>
            <a href="registrasi.php" id="style2" data-replace="Admin Login?"><span>Belum Punya Akun?</span></a></p>
        </label>
    </form>
    </div>
</html>