<?php
    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check__user = mysqli_query($connect,"SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

    if($check__user) {
        if (mysqli_num_rows($check__user) > 0) {
            $user = mysqli_fetch_assoc($check__user);
            $_SESSION['user'] = array(
                "id" => $user['id'],
                "nikname" => $user['nikname'],
                "description" => $user['description'],
                "avatar" => $user['avatar'],
                "pesonal_sait" => $user['pesonal_sait']
            );
            header('location: ../index');
        } else {
            $_SESSION['message'] = 'неверный почта или пароль!';
            header('location: ../login');
        }
    } else {
        $_SESSION['message'] = 'неверный почта или пароль!';
        header('location: ../login');
    }