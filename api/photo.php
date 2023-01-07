<?php   include_once "../db/base.php";
dd($_POST);
//有圖片 exist $_post['id']

if(!empty($_FILES['img']['tmp_name'])){
    $data=[];
    //form 取副檔名
    $data['type'] = $_FILES['img']['type'];
    $img_arr = explode(".",$_FILES['img']['name']);
    $sub = array_pop($img_arr);
    
    if(isset($_POST['id'])){
        //若ID存在 撈出單筆 
        $DBimg =$subject->find(['id'=>$_POST['id']]);
        //取出 DB img 的前面名字 + 上 form 的副檔名
        dd($DBimg);
        $DBimg_arr=explode(".",$DBimg['img']);
        dd($DBimg);
        //重新組裝 一個新名  即 DB img的前檔名稱 + form 的副檔名曾
        $new_name = array_shift($DBimg_arr).".".$sub;
        dd($new_name);
      
        
        if($DBimg['img']!==$new_name){//BD img 不相同時(永不會相同)
            unlink("../upload/".$DBimg['img']);
            $data['id']=$_POST['id'];
            $data['img']=$new_name;
           
      
       }
    }else{
        $new_name=date("Y-m-d h-i-s").".".$sub;
        $data['img']=$new_name;
       
    }

    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$new_name);
    $imgvar = $subject->save($data);

    
    //這邊一定要選擇新名字 $new_name，剛剛用了 $data['img'] 一下有 一下沒有 
    $imgId = $subject->find(['img'=>$new_name]);
    dd($imgId);
    to("../admin_center.php?do=survey_add&imgId={$imgId['id']}");
}else{
    echo "上傳失敗，請聯絡管理員，或請檢查檔案是否支援";
}
?>