<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/front.css">
    <link rel="stylesheet" href="./css/back.css">
    <link rel="stylesheet" href="./css/cords_ajax.css">
    <link rel="stylesheet" href="./css/mobile_silder.css">
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



<div id="go-top">
    <a href="#"><i class="bi bi-arrow-up-short"></i></a>
</div>

<script src="./js/goTop.js"></script>


</body>
</html>