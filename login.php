<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="page">
    <div class="content content-register">
      <form action="./vendor/signin.php" method="post" class="register">
           <div class="register__image">
            <img src="./image/icon/logo.svg" alt="" class="register__img">
          </div>
          <div class="register_toggle">
            <a href="" class="register__link register__link--active">logout</a>
            <a href="/register.php" class="register__link">register</a>
          </div>
          <div class="register__inputs">
            <input type="email" placeholder="email" name="email" class="register__input">
            <input type="password" placeholder="password" name="password" class="register__input">
          </div>
          <?php
          if ($_SESSION['message']) {
              echo '<p class="msg-p"> ' .$_SESSION['message'] . ' </p>';
          }
          unset($_SESSION['message'])
          ?>
          <button type="submit" class="register__sub">logout</button>
      </form>
    </div>
  </div>
</body>
</html>