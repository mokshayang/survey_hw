<?php include_once "../db/base.php";
dd($_GET);
$subject_id = $options->find(['id'=>$_GET['id']])['subject_id'];
// echo $subject_id;
// echo "我是子選項刪除";
$options->del($_GET['id']);//刪除單一子選項
to("../admin_center.php?do=survey_edit&id=$subject_id");
?>