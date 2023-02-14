<?php
    require_once 'connect.php';
    session_start();

    $title = $_POST['title'];
    $description = $_POST['descr'];
    $photo = $_POST['photo'];
    $user__id = $_SESSION['user']['id'];


    if ($title || $photo) {
        $date = date("j.d.Y");
        echo 'все окей';
        $path = 'uploads/postPhoto/'.time() . $_FILES['photo']['name'];
        echo $path;
        move_uploaded_file($_FILES['photo']['tmp_name'],'../' . $path);

        mysqli_query($connect, "INSERT INTO `posts` (`id`, `photo`, `title`, `description`, `date`, `id__user`) VALUES (NULL, '$path', '$title', '$description', '$date', '$user__id');");
        header('location: ../index.php');


    } else {
        echo 'ведите назание OR ADD PHOTO';
    }
