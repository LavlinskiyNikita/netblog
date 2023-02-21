<?php
    session_start();
if (!$_SESSION['user']) {
    exit(header('location: ./login.php'));
}

    require_once 'vendor/connect.php';
    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = '$user_id'");
    $user = mysqli_fetch_assoc($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edit profile <?=$user['nikname']?> | netblog.com</title>
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="page">
    <header class="header">
      <div class="header__logo">
        <img class="header__logo-img" src="./image/icon/logo.svg" alt="" srcset="">
      </div>
    </header>
    <div class="content">
      <form action="vendor/updateprofile.php" method="post"  enctype="multipart/form-data" class="profile-edit" >
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="profile-edit__avatar">
          <label class="profile-edit__avatar-label">
            <img src="<?=$user['avatar'] ?>" alt="" class="profile-edit__avatar-img">
            <input type="file" name="avatar" id="file" class="profile-edit__file" value="<?=$user['avatar'] ?>"/>
            <label for="file">add photo</label>
          </label>
        </div>
        <div class="profile-edit__information">
          <label class="profile-edit__label">
            <p class="profile-edit__text">name</p>
            <input type="text" name="nikname" required value="<?=$user['nikname'] ?>" id="" class="profile-edit__input">
          </label>
          <label  class="profile-edit__label">
            <p class="profile-edit__text">descr</p>
            <textarea name="description" id="" rows="10" class="profile-edit__input"><?=$user['description'] ?></textarea>
          </label>
          <label class="profile-edit__label">
            <p class="profile-edit__text">gender</p>
            <div class="profile-edit__select">
              <div class="profile-edit__select-header">
                <span class="profile-edit__select-current">male</span>
              </div>
              <div class="profile-edit__select-body">
                <div class="profile-edit__select-item">male</div>
                <div class="profile-edit__select-item">famale</div>
              </div>
            </div>
          </label>
          <label class="profile-edit__label">
            <p class="profile-edit__text">personal site</p>
            <input type="text" value="<?=$user['pesonal_sait'] ?>" name="pesonal_sait" class="profile-edit__input">
          </label>
        </div>
        <button class="profile-edit__btn">save</button>
        <button class="edit-post__btn">back</button>
        <a href="./vendor/logout.php">logout</a>
      </form>
    </div>
  </div>

  <script src="/script/select.js"></script>
</body>
</html>