<?php include_once "./db/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion</title>
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
    $do = $_GET['do'] ?? 'main';
    $file = "./front/" . $do . ".php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "./front/main.php";
    }
    ?>
    <a href="index.php?do=123">123</a>
</body>

</html>