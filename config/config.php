<?php

if (file_exists( __DIR__ . '/db-local.php')) {
    require_once __DIR__ . '/db-local.php';
} else {
    require_once __DIR__ . '/db.php';
}
require_once __DIR__ . '/config/params.php';

$db = new PDO($dsn, $user, $pass);