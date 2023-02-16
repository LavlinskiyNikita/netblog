<?php
session_start();
require_once 'connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

if ($title || $description) {
    $result = mysqli_query($connect, "UPDATE `posts` SET `title`='$title',`description`='$description' WHERE `posts`.`id` = '$id'");
    header('location: ../profile?id='. $_SESSION['user']['id'] .' ');
}