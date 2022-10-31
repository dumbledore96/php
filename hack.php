<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hack</title>
</head>
<body>
    <?php
    echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
    $browser = get_browser(null, true);
    print_r($browser);
    ?>
</body>
</html>