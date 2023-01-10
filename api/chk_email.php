<?php include_once "../db/base.php";

echo $user->count(['email'=>trim($_POST['email'])]);

?>