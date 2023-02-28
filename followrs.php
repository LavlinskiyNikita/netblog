<?php
    require_once 'vendor/connect.php';
    require_once 'vendor/site.php';
    require_once 'component/header.php';

    $followrs = mysqli_query($connect, "SELECT * FROM `sub`");
    $followrs_user = mysqli_query($connect, "SELECT * FROM `user`");

    $user_id = $_GET['id'];
    $arr = array();

    while ($user = mysqli_fetch_assoc($followrs)) {
        if ($user['subscribe_author_id'] == $user_id) {
            $arr[] = $user;
        }
    }

    $arr_fl_user = array();

    while ($users = mysqli_fetch_assoc($followrs_user)) {
        foreach ($arr as $value) {
            if ($users['id'] == $value['subscribe_id']) {
                $arr_fl_user[] = $users;
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document | <?=$namesite?></title>
</head>
<body>
<div class="page">
    <?= $header?>
    <div class="content">
        <a href="profile?id=<?=$user_id?>">back</a>
        <div class="userFOLLOw">
            <?php
            
                if (count($arr_fl_user) == 0) {
                    echo '<p class="follow">ты не кому не нужен, ты одинок :)</p>';
                }  else {
                    foreach($arr_fl_user as $user) {
                        ?>
                            <a href="./profile?id=<?=$user['id'] ?>" class="find-user__person">
                                <div class="find-user__avatr">
                                    <img class="find-user__image" src="<?=$user['avatar'] ?>">
                                </div>
                                <p class="find-user__nikname"><?=$user['nikname'] ?></p>
                            </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>