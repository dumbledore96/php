<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
header('Content-Type: text/html; charset=utf-8');
ini_set("display_error",1);
if(!empty($_POST['title']) && !empty($_POST['index_text'])){
    require_once("db.php");
    $title = htmlspecialchars($_POST['title']);
    echo $title;
    $index_text = htmlspecialchars($_POST['index_text']);
    date_default_timezone_set('Asia/Taipei');
    $dateti = date('Y-m-d H:i:s');
    echo $dateti;
    mysqli_set_charset($db, "utf8");
    $query= "INSERT INTO `message`(`title`, `index_text`, `date`) VALUES ('$title', '$index_text', '$dateti')";
    $result = mysqli_query($db,$query);

    if (mysqli_affected_rows($db)>0) {
        // 如果有一筆以上代表有更新
        // mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($db);
        echo "新增後的id為 {$new_id} ";
        }
        elseif(mysqli_affected_rows($db)==0) {
            echo "無資料新增";
        }
        else {
            echo "{$query} 語法執行失敗，錯誤訊息: " . mysqli_error($db);
        }
    mysqli_close($db); 
    header('location: mes.php');
};
?>
</body>
</html>