<?php
session_start();
require_once 'component/header.php';
require_once 'vendor/site.php';
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
  <title>Document | <?=$namesite?></title>
</head>
<body>
  <div class="page">
    <?= $header?>

    <div class="content">
      <form action="./vendor/createPost.php" method="post" enctype="multipart/form-data" class="formadd">
        <input type="file" class="custom-file-input formadd__all-class" name="photo"/>
        <input type="text" class="formadd__input formadd__all-class" name="title" placeholder="name">
        <input type="text" class="formadd__input formadd__all-class" name="descr" placeholder="description">
        <button class="formadd__submit formadd__all-class" type="submit">add</button>
      </form>
    </div>
  </div>  
</body>
</html>