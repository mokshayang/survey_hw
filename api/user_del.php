<?php
include_once "../db/base.php";
$user_del = $user->find(['id'=>$_GET['id']]);
$client = $user_del['acc'];
// $page=$_GET['p'];
$log_del = $log->all(['user_id'=>$_GET['id']]);
dd($user_del);
dd($log_del);

$user->del(['id'=>$_GET['id']]);
$log->del(['user_id'=>$_GET['id']]);
to("../admin_center.php?do=users&p=1&del=已經刪除會員".$client."的所有資料!! ")
?>