<?php
    session_start();
    if (!$_SESSION['user']) {
        exit(header('location: ./login.php'));
    }

    require_once 'vendor/connect.php';

    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = '$user_id' ");
    $user = mysqli_fetch_assoc($user);


    if ($_GET['id'] == $_SESSION['user']['id']) {
        $access = 'access';
    } else {
        $access= 'view';
    }

    $result = mysqli_query($connect, "SELECT * FROM `posts`");
    $user_post = array();


    while ($posts = mysqli_fetch_assoc($result)) {
        if ($posts['id__user'] == $user_id) {
            $user_post[] = $posts;
        }
    }

    $follow = mysqli_query($connect,"SELECT * FROM `sub` WHERE `subscribe_author_id` = '$user_id'");
    $check_follow = mysqli_fetch_assoc($follow);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title><?=$user['nikname']?> | netblog.com</title>
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
            <img class="header__photo-profile" src="<?=$_SESSION['user']['avatar']?>" alt="">
          </a></li>
        </ul>
        <li class="header__item header__item--desktop"><a href="./profile<?='?id='. $_SESSION['user']['id'].''?>" class="header__profile-link">
          <img class="header__photo-profile" src="<?=$_SESSION['user']['avatar']?>">
        </a></li>
      </nav>
    </header>
    <div class="content">
      <div class="profile">
        <div class="profile__header">
          <div class="profile__top">
            <div class="profaile__avatar">
              <img src="<?=$user['avatar'] ?>" class="profile__image-avatar" alt="">
            </div>
            <div class="profile__top-block">
              <div class="profile__name">
                <p class="profile__name-p"><?=$user['nikname'] ?></p>
              </div>
              <div class="profile__folowl">
                <a href="" class="profile__folowls profile__folowls-links"><p class="profile__count-folows">0 folowls</p></a>
                <a href="" class="profile__folowling profile__folowls-links"><p class="profile__count-folowing">0 folowling</p></a>
              </div>
            </div>
          </div>
          <div class="profile__buttom">
            <p class="profile__description"><?=$user['description']?></p>
            <a href="<?= $user['pesonal_sait'] ?>" target="_blank" ><?= $user['pesonal_sait']?></a>
              <?php

                if ($access == "access") {
                    echo '<a href="./profileEdit?id='.$user['id'].'" class="profile__edit">edit</a>';
                } else {
                    if ($check_follow['subscribe_object_id'] == '1') {
                        echo 'вы подписанны';
                    } else {
                        echo '<form action="./vendor/follow?id='.$user['id'].'" method="post" class="gv">
                            <button type="submit" class="eqher" type="submit" value="'.$user['id'].'"  name="followBtn">follow</button>
                          </form>';
                    }
                }
              ?>
          </div>
        </div>
        <div class="content-post masonry" id="masonry">
            <?php
                foreach (array_reverse($user_post, true) as $post) {
                ?>
                <div class="post masonryPost">
                    <div class="post-profile__content post__content">
                        <img src="<?= $post['photo'] ?>" alt="" class="post-profile__image">
                        <p class="post__title"><?= $post['title'] ?></p>
                        <p class="post__descr"><?= $post['description'] ?></p>
                    </div>
                    <div class="post-profile__bottom">
                        <div class="post__profile__none">
                            <div class="post-profile__popup-edit">
                                <a href="./editpost?id=<?=$post['id']?>" class="post-profile__popup-link">
                                    <div class="post-profile__popup-link-edit">
                                        <img src="/image/icon/Icon/post/edit-2.svg" alt="" class="post-profile__icon-popup">
                                        <p href="./editpost?id=<?=$post['id']?>" class="post-profile__name-popup">edit</p>
                                    </div>
                                </a>
                                <a href="./vendor/deletePost?id=<?=$post['id']?>" class="post-profile__popup-link post-profile__popup-link--delete">
                                        <div class="post-profile__popup-link-edit">
                                            <img src="/image/icon/Icon/post/Trash.png" alt="" class="post-profile__icon-popup">
                                            <p class="post-profile__name-popup">delete</p>
                                        </div>
                                </a>
                            </div>
                        </div>
                        <div class="flex">
                            <a href="" class="post-profile__user-link">
                                <img src="<?= $user['avatar'] ?>" alt="" class="post-profile__photo-link">
                                <p class="post-profile__name-link">user__name</p>
                            </a>
                            <div class="post-profile__down">
                                <button class="post-profile__like">
                                    <p class="post-profile__like-count">234</p>
                                    <img src="./image/icon/Icon/post/like.svg" alt="" class="post-profile__like-image">
                                </button>
                                <button class="post-profile__dots-vertecal">
                                    <img src="/image/icon/Icon/post/dots-vertical.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <p class="post__date"><?=$post['date'] ?></p>
                </div>
                <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./script/masonry.js" defer ></script>
  <script src="./script/index.js" defer></script>
  <script src="/script/editPosttoggle.js" defer></script>
</body>
</html>