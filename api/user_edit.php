<?php include_once "../db/base.php";
// dd($_POST);

$temp['id']=$_POST['id']; 
$temp['name']=$_POST['name']; 
$temp['pw']=$_POST['pw']; 
$temp['email']=$_POST['email']; 
// dd($temp);
$user->save($temp);



to("../index.php");
