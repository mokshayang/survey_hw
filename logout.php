<?php
session_start();
unset($_SESSION['login']);

to($_SERVER['HTTP_REFERER']);
?>