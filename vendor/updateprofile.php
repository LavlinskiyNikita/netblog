<?php
    session_start();
    require_once 'connect.php';



    $id = $_POST['id'];
    $nikname = $_POST['nikname'];
    $description = $_POST['description'];
    $avatar = $_POST['avatar'];
    $personal_site = $_POST['pesonal_sait'];


    if ($nikname) {
        if (!file_exists($_FILES['avatar']['tmp_name']) || !is_uploaded_file($_FILES['avatar']['tmp_name'])){
            mysqli_query($connect, "UPDATE `user` SET `nikname` = '$nikname', `description` = '$description', `pesonal_sait` = '$personal_site' WHERE `user`.`id` = '$id'");

            header('location: ../profile?id='. $id .'');
        } else {

            $path = 'uploads/avatar/'.time() . $_FILES['avatar']['name'];
            unlink($avatar);

            move_uploaded_file($_FILES['avatar']['tmp_name'],'../' . $path);
            $edituser = mysqli_query($connect, "UPDATE `user` SET `nikname` = '$nikname', `description` = '$description', `avatar` = '$path', `pesonal_sait` = '$personal_site' WHERE `user`.`id` = '$id'");

            $_SESSION['user']['avatar'] = $edituser['avatar'];

            header('location: ../profile?id='. $id .'');

        }
    } else {
        header('location: ../profile?id='. $id .'');
    }

print_r($_FILES);

