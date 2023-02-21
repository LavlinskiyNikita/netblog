<?php
session_start();
if (!$_SESSION['user']) {
    exit(header('location: ./login.php'));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title>search | netblog.com</title>
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
          <li class="header__item header__item--phone"><a href="./profile<?='?id='. $_SESSION['user']['id'].''?>" class="header__profile-link">
            <img class="header__photo-profile" src="<?=$_SESSION['user']['avatar'] ?>" alt="<?=$_SESSION['user']['avatar'] ?>">
          </a></li>
        </ul>
        <li class="header__item header__item--desktop"><a href="./profile<?='?id='. $_SESSION['user']['id'].''?>" class="header__profile-link">
          <img class="header__photo-profile" src="<?=$_SESSION['user']['avatar'] ?>" alt="<?=$_SESSION['user']['avatar'] ?>">
        </a></li>
      </nav>
    </header>
    <div class="content">
      <div class="search-block">
          <form class="form-search-s" method="post" action="vendor/findUser.php">
              <input type="text" class="seacrh-blick__input" name="search" placeholder="search">
              <button type="submit" class="form-search_btn">search</button>
          </form>

      </div>
      <div class="find-user">
          <?php
          if ($_SESSION['messageSE']) {
              echo '<p class="msg-p"> ' .$_SESSION['messageSE'] . ' </p>';
          }
          else {
              echo ' '. $_SESSION['find-user__person'] .' ';
          }
          unset($_SESSION['messageSE']);
          unset($_SESSION['find-user__person'])
          ?>
      </div>
      <div class="content-post masonry" id="masonry">
        <div class="post masonryPost">
          <div class="post__content">
            <img src="./image/images.png" alt="" class="post__image">
            <p class="post__title">titile</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
            <button class="post__like">
              <p class="post__like-count">234</p>
              <img src="./image/icon/Icon/post/like.svg" alt="" class="post__like-image">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./script/masonry.js" defer ></script>
  <script src="./script/index.js" defer></script>
</body>
</html>