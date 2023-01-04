<?php include_once "./db/base.php"; ?>
<?php
if(!isset($_SESSION['admin'])){
    to("./index.php");
    echo $_SESSION['admin'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/front.css">
    <title>Opinion</title>
    <?php include_once "./layouts/link_css.php" ?>
    <link rel="stylesheet" href="./css/back.css">
</head>

<body>
    <?php include_once "./layouts/header.php"; ?>

    <?php
    $do = $_GET['do'] ?? 'main';
    $file = "./back/" . $do . ".php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "./back/main.php";
    }
    ?>
</body>

</html>
