<?php include_once "../db/base.php";
$acc=trim(strip_tags($_POST['acc']));
$result=$admin->count(['acc'=>$acc]);
	if($result) {
		echo "此帳號已有人使用 !!";
	}else{
		echo "此帳號可使用";
	};
