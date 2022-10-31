<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>result</h1>
    <?php
    require_once 'db.php';
    $query = "SELECT * FROM `people`";
    mysqli_set_charset($db, "utf8");
    $result = mysqli_query($db, $query);
    if ($result) {
        // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
        print_r(mysqli_num_rows($result));
        echo "<br>";
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }
        //mysqli_free_result($result);
    }
    else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
    }
    // 處理完後印出資料
    if(!empty($result)){
        // 如果結果不為空，就利用print_r方法印出資料
        print_r($datas);
        echo "<ul>";
        foreach($datas as $id => $row){
            echo "<li>" . $id+1 . ". name: " . $row['name'] . ", age: " . $row['age'] . "</li>";
        }
        echo "</ul>";
    }
    else {
        // 為空表示沒資料
        echo "查無資料";
    }
    ?>
</body>
</html>