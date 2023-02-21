<?php
    session_start();
    require_once 'connect.php';

    $id = $_GET['id'];
    $id_user = $_SESSION['user']['id'];
    $follow = $_POST['followBtn'];

    if ($follow == $id) {
        echo "вы подписались на пользоватиеля $id ";
        mysqli_query($connect,"INSERT INTO `sub`(`id`, `subscribe_author_id`, `subscribe_object_id`, `subscribe_id`) VALUES (NULL,'$id','1','$id_user')");
    } else {
        echo 'sorry, im lazy come up with. Here should ERROR';
    }