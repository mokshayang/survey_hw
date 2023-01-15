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
    #go-top {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(blue, #fff);
        box-shadow: 2px 2px 5px var(--fadeBlue);
        position: fixed;
        right: 40px;
        bottom: 60px;
        display: hidden;
        cursor: pointer;
    }

    #go-top .bi {
        font-size: 60px;
        color: #fff;
        position: absolute;
        top: -15px;
    }
</style>

<div id="go-top">
    <i class="bi bi-arrow-up-short"></i>
</div>

<script src="./js/goTop.js"></script>


</body>
</html>