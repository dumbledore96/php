<?php header("refresh:60");?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>
</head>
<body>
    <?php
    require_once("db.php");
    ?>
    <h1>留言區</h1>
    <a href="account/add.html">註冊</a>
    <p>歡迎留言，不管是甚麼幹話都可以</p>
    <form action="mes_res.php" method="post">
    標題: <input type="text" name="title" placeholder="輸入標題"><br><br>
    內容: <textarea name="index_text"cols="50" rows="10"></textarea><br><br>
    <input type="submit">
    </form>

    <?php
    $query = "SELECT `title`,`index_text`,`date` FROM `message`";
    mysqli_set_charset($db, "utf8");
    $result = mysqli_query($db, $query);

    if ($result) {
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }
        //mysqli_free_result($result);
    }
    else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($db);
    }
    // 處理完後印出資料
    if(!empty($result)){

        echo "<ul>";
        foreach(array_reverse($datas) as $id => $row){
            echo "<li>" . 
            "<h2>" . $row['title'] . "</h2>" .
            "<p style=\"color:gray\">" . $row['date'] . "</p>".
            "<p>" . $row['index_text'] . "</p>" . 
            "</li>";
        }
        echo "</ul>";
    }
    else {
        // 為空表示沒資料
        echo "尚無留言";
    }
    mysqli_close($db); 
    ?>
</body>
</html>