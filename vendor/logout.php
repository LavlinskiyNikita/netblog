<?php
session_start();

unset($_SESSION['user']);
exit(header('location: ../login.php'));