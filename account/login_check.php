<!DOCTYPE html>
<?php session_start();?>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id=$_POST['id'];
    $password=$_POST['password'];
    require('db.php');
    $result=mysqli_query($db,"SELECT * FROM `account` WHERE id='$id' AND password='$password'");
    $num=mysqli_num_rows($result);
    if($num==0){
        echo "帳號或密碼錯誤";
        exit;
    }
    else{
        $_SESSION['id']=$id;
        $_SESSION['password']=$password;
    }
    ?>
</body>
</html>