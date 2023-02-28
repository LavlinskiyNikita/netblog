<?php
session_start();

$header = '
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
          <li class="header__item header__item--phone"><a href="./profile?id='. $_SESSION['user']['id'].'" class="header__profile-link">
            <img class="header__photo-profile" src="'.$_SESSION['user']['avatar'].'?>" alt="">
          </a></li>
        </ul>
        <li class="header__item header__item--desktop"><a href="./profile?id='. $_SESSION['user']['id'].'" class="header__profile-link">
          <img class="header__photo-profile" src="'.$_SESSION['user']['avatar'].'?>">
        </a></li>
      </nav>
    </header>
';