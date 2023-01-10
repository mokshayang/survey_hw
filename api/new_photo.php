<?php include_once "../db/base.php";
dd($_POST);
//有圖片 exist $_post['id']

if (!empty($_FILES['img']['tmp_name'])) {
    //form 取副檔名
    $row['type'] = $_FILES['img']['type'];
    $img_arr = explode(".", $_FILES['img']['name']);
    $sub = array_pop($img_arr);
    //取出 DB img 的前面名字 + 上 form 的副檔名
    $row = $subject->find(['id' => $_POST['id']]);
    // dd($row);
    
    //重新組裝 一個新名  即 DB img的前檔名稱 + form 的副檔名曾
    $row_arr = explode(".", $row['img']);
    $new_name = array_shift($row_arr) . "." . $sub;
    // dd($new_name);

    if ($row['img'] !== $new_name) { //BD img 不相同時(永不會相同)
        unlink("../upload/" . $row['img']);
        $row['id'] = $_POST['id'];
        $row['img'] = $new_name;
    }


    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/" . $new_name);
    $imgvar = $subject->save($row);

    $id = $row['id'];
    dd($id);
    to("../admin_center.php?do=survey_edit&id=$id");
} else {
    echo "上傳失敗，請聯絡管理員，或請檢查檔案是否支援";
}
