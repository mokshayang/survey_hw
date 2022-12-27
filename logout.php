<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['admin']);

header("location:".$_SERVER['HTTP_REFERER']);

?>