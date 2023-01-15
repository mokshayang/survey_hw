<?php include_once "./db/base.php"; ?>
<?php
if (!isset($_SESSION['admin'])) {
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
    <script src="js/js.js"></script>
</head>

<body>
    <?php include_once "./layouts/header.php"; ?>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; " ></div>
            <a style="position:absolute;color:#00f; right:18px; top:10px; cursor:pointer;" onclick="cl('#cover')">X</a>
        </div>
    </div>
    <?php
    $do = $_GET['do'] ?? 'main';
    $file = "./back/" . $do . ".php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "./back/main.php";
    }
    ?>
     <?php
    if (isset($_GET['del'])) {
        echo "<div class='del-msg'>";
        echo $_GET['del'];
        echo "</div>";
        unset($_GET['del']);
    }
    if (isset($_GET['edit'])) {
        echo "<div class='del-msg' style='background-color:var(--lightBlue);color:var(--blue);'>";
        echo $_GET['edit'];
        echo "</div>";
        unset($_GET['edit']);
    }
    if (isset($_GET['add'])) {
        echo "<div class='del-msg' style='background-color:#00e;'>";
        echo $_GET['add'];
        echo "</div>";
        unset($_GET['add']);
    }
    ?>
</body>

</html>
