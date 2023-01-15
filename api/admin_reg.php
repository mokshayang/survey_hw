<?php include_once "../db/base.php";
dd($_POST); 
if(isset($_POST['id'])){
    $row['id']=$_POST['id'];
    $row['acc']=$_POST['acc'];
    $row['pw']=$_POST['pw'];
    $admin->save($row);
    to("../admin_center.php?do=admin");

}else{
$tmp['acc']=$_POST['acc'];
$tmp['pw']=$_POST['pw'];
$admin->save($tmp);
to("../login");
}
?>