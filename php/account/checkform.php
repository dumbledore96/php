<?php
$id=$_POST['id'];
$password=$_POST['password'];
$realname=$_POST['realname'];
if(empty($id) || empty($password) || empty($realname)){
    echo "欄位不可為空白";
    exit;
}

if(strlen($id)>20){
    echo "帳號不可超過20字";
    exit;
}
if(strlen($password)>20){
    echo "密碼不可超過20字";
    exit;
}
$check=mysqli_query($db,"SELECT * FROM `account` WHERE id='$id'");
$num=mysqli_num_rows($check);
if($num>0){
    echo "此帳號名稱已被使用，請重新輸入";
    exit;
}