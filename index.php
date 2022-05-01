<?php
require_once __DIR__ . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php css('index')?>">
    <title>php_test</title>
</head>
<body>
    <form class="form" action="handler/article_info/insert.php" method="post">
    <input type="text" name="1_title_0" placeholder="chapter title">
    <input type="text" name="3_title_1" placeholder="ordered list title">
    <input type="text" name="2_title_2" placeholder="image title">
    <input type="text" name="4_title_3" placeholder="unordered list title">
    <input type="text" name="4_title_4" placeholder="unordered list title">
    <input class="hidden" type="text" name="info" value="1_3.3_5.2_2.4_4.4_5">
    <input class="hidden" type="text" name="id" value="1">

    <input type="submit" value="Run">
    </form>
</body>
</html>