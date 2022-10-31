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
    $_SESSION['account']="yaoul6";
    $_SESSION['password']="asdf";
    echo $_SESSION['account'] . "<br>";
    echo $_SESSION['password'] . "<br>";
    echo $_SERVER["REMOTE_ADDR"] . "<br>";
    echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
    echo $_SERVER["SERVER_SOFTWARE"] . "<br>";
    echo PHP_OS . "<br>";
    echo PHP_VERSION . "<br>";
    ?>
    <a href="sessions1.php">next</a>
</body>
</html>