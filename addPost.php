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
    <header class="header">
      <div class="header__logo">
        <img class="header__logo-img" src="./image/icon/logo.svg" alt="" srcset="">
      </div>
      <nav class="header__link">
        <ul class="header__list">
          <li class="header__item "><a href="/" class="herader__link">
          <img src="./image/icon/Icon/Line/Home.svg" alt="" class="header__link-image">
          </a></li>
          <li class="header__item "><a href="./search.php" class="herader__link">
            <img src="./image/icon/Icon/Line/Coin.svg" alt="" class="header__link-image">
          </a></li>
          <li class="header__item"><a href="./addPost.php" class="herader__link">
            <img src="./image/icon/Icon/Line/Add.svg" alt="" class="header__link-image">
          </a></li>
          <li class="header__item"><a href="/messeng.php" class="herader__link">
            <img src="./image/icon/Icon/Line/Message.svg" alt="" class="header__link-image">
          </a></li>
          <li class="header__item header__item--phone"><a href="./profile.php" class="header__profile-link">
            <img class="header__photo-profile" src="<?= $_SESSION['user']['avatar'] ?> " alt="">
          </a></li>
        </ul>
        <li class="header__item header__item--desktop"><a href="./profile?=<?= $_SESSION['user']['id'] ?>" class="header__profile-link">
          <img class="header__photo-profile" src="<?= $_SESSION['user']['avatar'] ?>" alt="">
        </a></li>
      </nav>
    </header>

    <div class="content">
      <div class="formadd">
        <input type="file" class="custom-file-input formadd__all-class"/>
        <input type="text" class="formadd__input formadd__all-class" placeholder="name">
        <input type="text" class="formadd__input formadd__all-class" placeholder="description">
        <button class="formadd__submit formadd__all-class" type="submit">add</button>
      </div>
    </div>
  </div>  
</body>
</html>