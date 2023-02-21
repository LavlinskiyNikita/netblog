<?php
session_start();
require_once 'vendor/connect.php';
$post_id = $_GET['id'];
$post = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` = '$post_id'");
$post = mysqli_fetch_assoc($post);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title><?=$post['title']?> | netblog.com</title>
</head>
<body>
  <div class="page">
    <header class="header">
      <div class="header__logo">
        <img class="header__logo-img" src="./image/icon/logo.svg" alt="" srcset="">
      </div>
    </header>
    <div class="content">
      <form action="./vendor/postEdit.php" method="post" enctype="multipirat/form-data">
          <input type="hidden" name="id" value="<?= $post['id'] ?>">
        
        <div class="edit-post__infotmation">
          <label class="edit-post__label">
            <p class="edit-post__paragrahp">title</p>
            <input type="text" class="edit-post-text" name="title" value="<?=$post['title']?>">
          </label>
          <label class="edit-post__label">
            <p class="edit-post__paragrahp">descr</p>
            <textarea name="description" id="" rows="5" class="edit-post-text"><?=$post['description']?></textarea>
          </label>
        </div>
        <button class="edit-post__btn edit-post__btn--add" type="submit">save</button>
        <button class="edit-post__btn">back</button>
      </form>
    </div>
  </div>
</body>
</html>