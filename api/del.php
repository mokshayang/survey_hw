<?php include_once "../db/base.php";
dd($_GET);
$id = $_GET['id'];
$subject->del($id);
$options->del(['subject_id'=>$id]);
to("../admin_center.php?do=survey");