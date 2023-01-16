<?php include_once "../db/base.php";
dd($_GET);
$id = $_GET['id'];
$img=$subject->find(['id'=>$id]);
// dd($img);
// dd($img['img']);

unlink("../upload/" . $img['img']);


$subject->del($id);
$options->del(['subject_id'=>$id]);

to("../admin_center.php?do=survey");