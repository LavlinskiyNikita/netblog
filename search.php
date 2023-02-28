<?php
session_start();
require_once 'component/header.php';
if (!$_SESSION['user']) {
    exit(header('location: ./login.php'));
}
require_once 'vendor/site.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title>search | <?=$namesite?></title>
</head>
<body>
  <div class="page">
    <?= $header?>
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