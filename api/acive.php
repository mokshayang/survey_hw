<?php  include_once "../db/base.php";
$id = $_GET['id'];
$ac = $subject->find($id);
$ac['acive'] = ($ac['acive']+1)%2;
$subject->save($ac);

to("../admin_center.php?do=survey");


?>