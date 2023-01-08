<?php include_once "../db/base.php";
// echo "主題";
// dd($_POST['subject']);//主題
// echo "subject_id 即選項";
// dd($_POST['subject_id']);//選項

$subject->save(['subject'=>$_POST['subject'],'id'=>$_POST['subject_id']]);


// echo "現有的選項";
// dd($_POST['opt']);
// echo "現有的選項 id";
// dd($_POST['opt_id']);
foreach($_POST['opt_id'] as $key => $id){
    $opt = $options->find($id);
    // echo "原本的選項資料 $id = > {$opt['opt']}";
    // echo "<br>";
    // echo "標單傳過來的資料 $id =>{$_POST['opt'][$key]}";
    // echo "<br>";
    
    $options->save(['opt'=>$_POST['opt'][$key],'id'=>$id]);
}



echo "新增加的內容 optn";
dd($_POST['optn']);
foreach($_POST['optn'] as $opt){
    if($opt !=""){
        $tmp = [
            'opt'=>$opt,
            'subject_id'=>$_POST['subject_id'],
            'vote'=>0,
        ];
        $options->save($tmp);
    }
}

// echo "edit.php";
to("../admin_center.php?do=survey");
?>