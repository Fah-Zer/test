<?php
require_once '../../config/config.php';

function article_content_insert () {
    $db = new DB;
    $info = explode('.', $_POST['info']);
    $info_length = count($info);
    $id = $_POST['id'];
    $sqlData0 = '';
    for ($i = 0; $i < $info_length; $i++) {
        $item = $info[$i];
        $type = explode('_', $item)['0'];
        $value = $_POST[$type.'_title_'.$i];
        $sqlData0 = $sqlData0 . '(' . $id . ',' . $type . ',\'' . $value . '\',' . $i . '),';
    }
    $sqlData = substr_replace($sqlData0, '', -1);
    $sql = 'INSERT INTO article_content(article_id, type, value, sequence) VALUES ' . $sqlData . ';';
    $db->query($sql);
}

article_content_insert();
header('Location: http://localhost/test/index.php');
