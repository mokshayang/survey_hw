<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/front.css">
    <title>Opinion</title>
    <?php include "./layouts/link_css.php" ?>
</head>

<body>
    <?php include_once "./layouts/header.php"; ?>
    <?php
    $do = $_GET['do'] ?? 'main';
    $file = "./front/" . $do . ".php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "./front/main.php";
    }
  
    ?>
   
    
    <a href="?do=login">登入系統</a>
    <br>
    <a href="?do=reg">註冊系統</a>
   
</svg>
</body>

</html>