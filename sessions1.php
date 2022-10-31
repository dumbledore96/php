<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['account']))echo $_SESSION['account'];
    else echo 'session is not isset';

    $suject="welcome";
    $body="您好\n
    歡迎歡迎";
    $email="yaoul7777@gmail.com";
    $mmail=mail($email,$suject,$body);
    print($mmail);
    ?>
</body>
</html>