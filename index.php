<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/front.css">
    <link rel="stylesheet" href="./css/cords_ajax.css">
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

<style>
    .tt {
        text-align: center;
        font-size: 40px;
        margin: 40px auto 0 auto;
        height: 320px;
        line-height: 320px;
        background-color: var(--fadeBlue);
        color: #eee;
    }
    footer {
        background-color: var(--darkenBlue);
        height: 48px;
        font-size: 20px;
        line-height: 48px;
        text-align: center;
        color: #fff;
    }
</style>
<div class="tt">
    footer information
</div>
<footer>
&copy; 練習作品 & 翻印 必不究 !
</footer>
</body>
</html>