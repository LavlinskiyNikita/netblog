<?php
    session_start();
    require_once 'connect.php ';


    $email = $_POST['email'];
    $nikname = $_POST['nikname'];
    $password = $_POST['password'];
    $passwordconfirm = $_POST['password_confirm'];

    $check__email = mysqli_query($connect,"SELECT * FROM `user` WHERE `email` = '$email'");
    $check__nik = mysqli_query($connect,"SELECT * FROM `user` WHERE `nikname` = '$nikname'");

    if ($password === $passwordconfirm) {
        if ( $check__email > 0) {
            if ($check__nik == 0) {
                $path = 'uploads/avatar/'.time() . $_FILES['avatar']['name'];
                echo $path;
                move_uploaded_file($_FILES['avatar']['tmp_name'],'../' . $path);

                $password = md5($password);

                mysqli_query($connect,"INSERT INTO `user` (`id`, `nikname`, `email`, `password`, `avatar`, `description`, `pesonal_sait`) VALUES (NULL, '$nikname', '$email', '$password', '$path', NULL, NULL)");
                header('location: ../login.php');
            } else {
                $_SESSION['message'] = 'пользователь с таким именим уже существуетсуществует';
                header('location: ../register.php');
            }
        } else {
            $_SESSION['message'] = 'поменяйте почту';
            header('location: ../register.php');
        }
    } else {
        $_SESSION['message'] = 'пароли не совпатают';
        header('location: ../register.php');
    }
?>
