<?php
    session_start();
    require_once 'vendor/connect.php';
    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = '$user_id' ");
    $user = mysqli_fetch_assoc($user);

    if ($_GET['id'] == $_SESSION['user']['id']) {
        $position = 'access';
    } else {
        $position = 'view';
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
  <title><?=$user['nikname'] ?></title>
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
                <a href="" class="profile__folowls profile__folowls-links"><p class="profile__count-folows"> 543 folowls</p></a>
                <a href="" class="profile__folowling profile__folowls-links"><p class="profile__count-folowing"> 534 folowling</p></a>
              </div>
            </div>
          </div>
          <div class="profile__buttom">
            <p class="profile__description"><?=$user['description']?></p>
            <a href="<?= $user['pesonal_sait'] ?>" target="_blank" ><?= $user['pesonal_sait']?></a>
            <?php if ($position = 'access'): ?>
              <a href="./profileEdit<?='?id='. $user['id'].''?>" class="profile__edit">edit</a>
            <?php else: ?>
            <p>вы не вопделц старницы</p>
              <?php endif; ?>
          </div>
        </div>
        <div class="content-post masonry" id="masonry">

          <div class="post masonryPost">
            <div class="post-profile__content">
              <img src="./image/images.png" alt="" class="post-profile__image">
              <p class="post-profile__title"></p>
              <p class="post-profile__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?fdgfsghrrrrrrrr Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore neque eveniet eius ut delectus. Nam ratione reiciendis voluptas eum corrupti vel similique, ullam fugit sunt. Expedita amet ut minus blanditiis.</p>
            </div>
            <div class="post-profile__bottom">
              <div class="post__profile__none">
                <div class="post-profile__popup-edit">
                  <a href="/editpost.php" class="post-profile__popup-link">
                    <div class="post-profile__popup-link-edit">
                      <img src="/image/icon/Icon/post/edit-2.svg" alt="" class="post-profile__icon-popup">
                      <p class="post-profile__name-popup">edit</p>
                    </div>
                  </a>
                  <a href="/index.php" class="post-profile__popup-link post-profile__popup-link--delete">
                    <div class="post-profile__popup-link-edit">
                      <img src="/image/icon/Icon/post/Trash.png" alt="" class="post-profile__icon-popup">
                      <p class="post-profile__name-popup">delete</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="flex">
                <a href="" class="post-profile__user-link">
                  <img src="" alt="" class="post-profile__photo-link">
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
          </div>

          <div class="post masonryPost">
            <div class="post-profile__content">
              <img src="./image/images.png" alt="" class="post-profile__image">
              <p class="post-profile__title"></p>
              <p class="post-profile__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?fdgfsghrrrrrrrr Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore neque eveniet eius ut delectus. Nam ratione reiciendis voluptas eum corrupti vel similique, ullam fugit sunt. Expedita amet ut minus blanditiis.</p>
            </div>
            <div class="post-profile__bottom">
              <div class="post__profile__none">
                <div class="post-profile__popup-edit">
                  <a href="/editpost.php" class="post-profile__popup-link">
                    <div class="post-profile__popup-link-edit">
                      <img src="/image/icon/Icon/post/edit-2.svg" alt="" class="post-profile__icon-popup">
                      <p class="post-profile__name-popup">edit</p>
                    </div>
                  </a>
                  <a href="/index.php" class="post-profile__popup-link post-profile__popup-link--delete">
                    <div class="post-profile__popup-link-edit">
                      <img src="/image/icon/Icon/post/Trash.png" alt="" class="post-profile__icon-popup">
                      <p class="post-profile__name-popup">delete</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="flex">
                <a href="" class="post-profile__user-link">
                  <img src="" alt="" class="post-profile__photo-link">
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
          </div>
          <div class="post masonryPost">
            <div class="post-profile__content">
              <img src="./image/images.png" alt="" class="post-profile__image">
              <p class="post-profile__title"></p>
              <p class="post-profile__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?fdgfsghrrrrrrrr Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore neque eveniet eius ut delectus. Nam ratione reiciendis voluptas eum corrupti vel similique, ullam fugit sunt. Expedita amet ut minus blanditiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, veniam earum. Impedit ab dolorum obcaecati aliquid cupiditate est, totam ea velit, repellendus distinctio necessitatibus alias quo minus tenetur officiis reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ab ullam labore cum unde, repellat ducimus. Nihil veritatis totam laboriosam distinctio eum quod magni animi, incidunt consectetur, id nostrum culpa.</p>
            </div>
            <div class="post-profile__bottom">
              <div class="post__profile__none">
                <div class="post-profile__popup-edit">
                  <a href="/editpost.php" class="post-profile__popup-link">
                    <div class="post-profile__popup-link-edit">
                      <img src="/image/icon/Icon/post/edit-2.svg" alt="" class="post-profile__icon-popup">
                      <p class="post-profile__name-popup">edit</p>
                    </div>
                  </a>
                  <a href="/index.php" class="post-profile__popup-link post-profile__popup-link--delete">
                    <div class="post-profile__popup-link-edit">
                      <img src="/image/icon/Icon/post/Trash.png" alt="" class="post-profile__icon-popup">
                      <p class="post-profile__name-popup">delete</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="flex">
                <a href="" class="post-profile__user-link">
                  <img src="" alt="" class="post-profile__photo-link">
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
          </div>
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