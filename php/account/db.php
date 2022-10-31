 <?php
    ini_set("display_error",1);
    session_start();
    $server = "localhost";
    $dbusername = "yaoul6";
    $dbpassword = "ev3.yao87";
    $db = mysqli_connect($server ,$dbusername, $dbpassword, "yaoul6_test");
    if($db)echo "<script type=\"text/javascript\">console.log(\"連接成功\");</script>";
    else echo "連接資料庫錯誤!";
?>
<br>

