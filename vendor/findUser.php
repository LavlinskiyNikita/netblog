<?php
    session_start();
    require_once 'connect.php';

    if (isset($_POST['search'])) {

        $search = $_POST['search'];
        $findUser = mysqli_query($connect,"SELECT * FROM `user` WHERE `nikname` = '$search' ");

            if ($findUser) {
                echo "урааа ";
                while ($findendt = mysqli_fetch_assoc($findUser)) {
                    $niknameSearch = $findendt['nikname'];
                    $idSearch = $findendt['id'];
                    $avatarSearch = $findendt['avatar'];

                    $_SESSION['find-user__person'] = '
                        <a href="./profile?id='. $idSearch .'" class="find-user__person">
                             <div class="find-user__avatr">
                                <img class="find-user__image" src="'. $avatarSearch .'">
                            </div>
                            <p class="find-user__nikname">'. $niknameSearch .'</p>
                        </a>
                    ';
                }
                header('location: ../search');

            } else {
                $_SESSION['messengeSE'] = 'пользавотель с таким именем не найден';
                header('location: ../search');
            }
    }