<?php
require_once '../../config/config.php';

function article_content_insert ($db) {
    $info = explode('.', $_POST['info']);
    $infoLength = count($info);
    $id = $_POST['id'];
    $sqlData0 = '';
    $typeData = array();
    for ($i = 0; $i < $infoLength; $i++) {
        $item = $info[$i];
        $type = explode('_', $item)['0'];
        $quantity = explode('_', $item)['1'];
        $value = $_POST[$type.'_title_'.$i];
        $sqlData0 = $sqlData0 . '(' . $id . ',' . $type . ',\'' . $value . '\',' . $i . '),';
        $typeData[$i] = $type . '.' . $quantity;
    }
    $sqlData = substr_replace($sqlData0, '', -1);
    $sql = 'INSERT INTO article_content(article_id, type, value, sequence) VALUES ' . $sqlData . ';';
    $typeLength = count($typeData);
    for ($i = 0; $i < $typeLength; $i++) {
        $item = $typeData[$i];
        $type = explode('.', $item)['0'];
        $quantity = explode('.', $item)['1'];
        $sqlData0 = '';
        $sql0 = 'INSERT INTO content(id, sequence, value) VALUES ';
        for ($j = 0; $j < $quantity; $j++) {
            $value = $_POST[$type.'_item_'.$i.'_'.$j];
            $sqlData0 = $sqlData0 . '(' . $id . ',' . $j . ', \'' . $value . '\'),';
        }
        $sqlData = $sqlData = substr_replace($sqlData0, '', -1) . ';';
        $sql0 = $sql0 . $sqlData;
        echo $sql0 . '</br>';
    }
    //$db->query($sql);
}

article_content_insert($db);
//header('Location: http://localhost/test/index.php');
