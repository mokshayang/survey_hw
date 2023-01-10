<?php include_once "../db/base.php";
$chk = $user->find(['email'=>$_POST['email']]);
if(!empty($chk)){
    echo "您的密碼為&nbsp;&nbsp;&nbsp;&nbsp;".$chk['pw'];
}else{
    echo "查無此資料";
}