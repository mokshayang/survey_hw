<?php include_once "../db/base.php";
dd($_POST); 
$original = $admin->find(['acc'=>$_SESSION['admin']]);
if(isset($_POST['id'])){
    $row['id']=$_POST['id'];
    $row['acc']=$_POST['acc'];
    $row['pw']=$_POST['pw'];
    $admin->save($row);
    //當修改到自己的時候 !!
    if($original['id'] == $_POST['id'] ){
        ($_SESSION['admin'] = $_POST['acc']);   
    }
     
    to("../admin_center.php?do=admin");

}else{
$tmp['acc']=$_POST['acc'];
$tmp['pw']=$_POST['pw'];
$admin->save($tmp);
to("../login");
}
?>