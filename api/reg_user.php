<?php include_once "../db/base.php";
$acc=trim(strip_tags($_POST['acc']));
$pw=trim($_POST['pw']);
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$tmp=['acc'=>$acc,
      'pw'=>$pw,
      'name'=>$name,
      'email'=>$email];
      $user->save($tmp);//哪個表單 -> 四大語法
      to("../index.php?do=login");
?>