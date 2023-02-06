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
      <form action="vendor/singup.php" method="post" enctype="multipart/form-data" class="register" >
           <div class="register__image">
            <img src="./image/icon/logo.svg" alt="" class="register__img">
          </div>
          <div class="register_toggle">
            <a href="./login.php" class="register__link">logout</a>
            <a href="" class="register__link register__link--active">register</a>
          </div>
          <div class="register__inputs">
            <input type="email" name="email" placeholder="email" class="register__input">
            <input type="text" name="nikname" placeholder="nikname" class="register__input">
              <label class="register__label-file">
                  <input type="file" name="avatar" id="file" class=" register__input-file " />
                  <label for="file">add photo</label>
              </label>
            <input type="password" name="password" placeholder="password" class="register__input">
            <input type="password" name="password_confirm" placeholder="password" class="register__input">
          </div>
          <?php
              if ($_SESSION['message']) {
                  echo '<p class="msg-p"> ' .$_SESSION['message'] . ' </p>';
              }
              unset($_SESSION['message'])
          ?>
          <button type="submit" class="register__sub">singup</button>
      </form>
    </div>
  </div>
</body>
</html>