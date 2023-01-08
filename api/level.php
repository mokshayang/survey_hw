<?php  include_once "../db/base.php";
$id = $_GET['id'];
$ac = $subject->find($id);
$ac['level'] = ($ac['level']+1)%2;
$subject->save($ac);

to("../admin_center.php?do=survey");

