<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set("display_error",1);
    require('db.php');
    mysqli_set_charset($db, "utf8");
    require('checkform.php');
    $sql="INSERT INTO `account`(`id`, `password`, `name`, `level`, `post`) VALUES ('$id','$password','$realname',0,0)";
    $result=mysqli_query($db,$sql);
    if (mysqli_affected_rows($db)>0) {
        // 如果有一筆以上代表有更新
        $new_id= mysqli_insert_id ($db);
        echo "帳號建立成功";
        }
        elseif(mysqli_affected_rows($db)==0) {
            echo "無資料新增";
        }
        else {
            echo "{$query} 語法執行失敗，錯誤訊息: " . mysqli_error($db);
        }
    mysqli_close($db); 
    ?>
    <a href="add.html">返回</a>
</body>
</html>