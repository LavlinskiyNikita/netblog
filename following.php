<?php
    require_once 'vendor/connect.php';
    require_once 'vendor/site.php';
    require_once 'component/header.php';

    $user_id = $_GET['id'];
    $follows = mysqli_query($connect, "SELECT * FROM `sub`");
    $follows_user = mysqli_query($connect, "SELECT * FROM `user`");
    $arr = array();
    while ($user = mysqli_fetch_assoc($follows)) {
        if ($user['subscribe_id'] == $user_id) {
            $arr[] = $user;
        }
    }
    $arr_fl_user = array();

    while ($users = mysqli_fetch_assoc($follows_user)) {
        foreach ($arr as $value) {
            if ($users['id'] == $value['subscribe_author_id']) {
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
        <p class="follow"></p>
        <?php
            
            if (count($arr_fl_user) == 0) {
                echo '<p class="follow">ты не на кого не подписан, ты одинок :)</p>';
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
</body>
</html>