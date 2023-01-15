<?php include_once "../db/base.php";
dd($_GET);
$admin->del($_GET['id']);
to("../admin_center.php?do=admin");
?>