<?php 
  session_start();
  require_once 'connect.php';

  $id = $_GET['id'];
  $id_user = $_SESSION['user']['id'];
  $follow = $_POST['followBtn'];
  $id_follow = $_POST['id'];

  if ($follow == $id) {
    mysqli_query($connect,"DELETE FROM `sub` WHERE `sub`.`id` = '$id_follow'");
    header('location: ../profile?id='.$id.'');
} else {
    echo 'sorry, im lazy come up with. Here should ERROR';
}