<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/handler/article_info/view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php css('index')?>">
    <title>php_test</title>
</head>
<body>
    <?php actionView($db); ?>
</body>
</html>