<?php include_once "../db/base.php";
$acc = trim(strip_tags($_POST['acc']));
$pw = $_POST['pw'];

    $chk = $admin->count(['acc' => $acc, 'pw' => $pw]);
    if ($chk >0) {
        $ruler = $admin->find(['acc' => $acc, 'pw' => $pw]);
        $_SESSION['admin'] = $ruler['acc'];
        to("../admin_center.php");
    } else {
        to("../login/index.php?error=login");
    }

