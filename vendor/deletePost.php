<?php
    session_start();
    require_once 'connect.php';

    $id = $_GET['id'];

//    $result = mysqli_query($connect,"SELECT * FROM `posts` WHERE `id` = '$id'");
//    $result = mysqli_fetch_array($result);
//
//
//    echo $result['photo'];
    mysqli_query($connect, "DELETE FROM `posts` WHERE `posts`.`id` = '$id'");


    header('location: ../profile?id='. $_SESSION['user']['id'] .' ');