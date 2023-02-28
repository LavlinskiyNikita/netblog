<?php
session_start();
require_once 'component/header.php';
require_once 'vendor/site.php';
if (!$_SESSION['user']) {
    exit(header('location: ./login.php'));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/icon/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document | <?=$namesite?></title>
</head>
<body>
  <div class="page">
    <?= $header?>
    <div class="content">
       
    </div>
  </div>
</body>
</html>