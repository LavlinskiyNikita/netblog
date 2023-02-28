<?php
    session_start();
    require_once 'vendor/connect.php';
    require_once 'vendor/site.php';
    require_once 'component/header.php';

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
  <title>main | <?=$namesite?></title>
</head>
<body>
  
  <div class="page">
    <?= $header?>
    <div class="content">
      <div class="content-post masonry" id="masonry">
        <div class="post masonryPost">
          <div class="post__content">
            <img src="./image/images.png" alt="" class="post__image">
            <p class="post__title">title</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
          </div>
        </div>
  
        <div class="post masonryPost">
          <div class="post__content">
            <img src="./image/images.png" alt="" class="post__image">
            <p class="post__title"></p>
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
        <div class="post masonryPost">
          <div class="post__content">
            <img src="" alt="" class="post__image">
            <p class="post__title">ds</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dolor nobis reiciendis provident cumque architecto, aspernatur est distinctio iste eum, quaerat a quia maxime? Animi natus nobis corporis. Eius, modi! ; Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, pariatur. Quisquam, facilis, et quia illo voluptatibus nisi inventore ipsum numquam commodi cupiditate nam qui quas ad doloribus similique? Veritatis, ab.</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
          </div>
        </div>

        <div class="post masonryPost">
          <div class="post__content">
            <img src="" alt="" class="post__image">
            <p class="post__title">ds</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dolor nobis reiciendis provident cumque architecto, aspernatur est distinctio iste eum, quaerat a quia maxime? Animi natus nobis corporis. Eius, modi! ; Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, pariatur. Quisquam, facilis, et quia illo voluptatibus nisi inventore ipsum numquam commodi cupiditate nam qui quas ad doloribus similique? Veritatis, ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, suscipit ducimus temporibus, similique minus non maiores libero eos dolorum laboriosam dicta animi fugit velit eum. Repudiandae debitis quam dolor labore.</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
          </div>
        </div>
        <div class="post masonryPost">
          <div class="post__content">
            <img src="./image/images.png" alt="" class="post__image">
            <p class="post__title">title</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
          </div>
        </div><div class="post masonryPost">
          <div class="post__content">
            <img src="./image/images.png" alt="" class="post__image">
            <p class="post__title">title</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
          </div>
        </div>
        <div class="post masonryPost">
          <div class="post__content">
            <img src="./image/images.png" alt="" class="post__image">
            <p class="post__title">title</p>
            <p class="post__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum beatae magni corrupti! Voluptas minus harum corrupti, eligendi eos illo praesentium nesciunt. Facilis, dolore architecto. Ex expedita voluptas illum ipsa eos. Distinctio harum magnam voluptas enim officiis rem nisi facilis magni velit similique placeat adipisci, deserunt corrupti quo. Reiciendis maiores illo repudiandae ut?</p>
          </div>
          <div class="post__bottom">
            <a href="" class="post__user-link">
              <img src="" alt="" class="post__photo-link">
              <p class="post__name-link">user__name</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./script/masonry.js" defer ></script>
  <script src="./script/index.js" defer></script>
</body>
</html>