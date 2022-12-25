<?php include_once "../db/base.php";
$acc = $_POST['acc'];
$pw = $_POST['pw'];
if ($acc == "admin" && $pw == "12345678") {
    $_SESSION['admin'] = $acc;
    to("../admin_center.php");
} else {
    $chk = $user->count(['acc' => $acc, 'pw' => $pw]);
    if ($chk == 1) {
        $client = $user->find(['acc' => $acc, 'pw' => $pw]);
        $_SESSION['login'] = $client;
        to("../index.php");
    } else {
        to("../index.php?do=login&error=login");
    }
}
