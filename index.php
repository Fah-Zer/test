<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/layouts/article_info/index.php';
$id = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php css('index')?>">
    <title>index</title>
</head>
<body>
    <a href="create.php">Create data</a>
    <?php actionView($db); ?>
</body>
</html>