<?php include_once "../db/base.php";

dd($_POST);
if (isset($_POST['id'])) {
      $row['acc'] = $_POST['acc'];
      $row['pw'] = $_POST['pw'];
      $row['name'] = $_POST['name'];
      $row['email'] = $_POST['email'];
      $row['id'] = $_POST['id'];
      $user->save($row);
      to("../admin_center.php?do=users&p={$_POST['page']}&edit=已成功編輯會員id為 {$_POST['id']} 帳號為 {$row['acc']} 的資料");
} else {

      $acc = trim(strip_tags($_POST['acc']));
      $pw = trim($_POST['pw']);
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $tmp = [
            'acc' => $acc,
            'pw' => $pw,
            'name' => $name,
            'email' => $email
      ];
      $user->save($tmp); //哪個表單 -> 四大語法
      if($_POST['page']){
            to("../admin_center.php?do=users&p={$_POST['page']}&add=已新增會員帳號{$_POST['acc']} ");
      }else{
            to("../index.php?do=login");
      }
}
