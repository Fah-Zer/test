<?php
require_once '../../config/config.php';

function sendData($db) {
    $id = $_POST['id'];
    $info = explode('_', $_POST['info']);
    $groupQuantity = count($info);
    $sqlInfo1 = 'INSERT INTO article_content(article_id, type, value, sequence) VALUES ';
    $sqlInfo2 = 'INSERT INTO content(id, sequence, value) VALUES ';
    $sqlData1 = '';
    $sqlData2 = '';
    $sql = '';
    for($i = 0; $i < $groupQuantity; $i++) {
        $elem = $info[$i];
        $elemType = explode('.', $elem)['0'];
        $elemQuantity = explode('.', $elem)['1'];
        $elemValue1 = $_POST[$elemType . '_title_' . $i];
        $sqlData1 = $sqlData1 . '(' . $id . ',' . $elemType . ',\'' . $elemValue1 . '\',' . $i . '),';
        for($j = 0; $j < $elemQuantity; $j++) {
            $elemValue2 = $_POST[$elemType . '_item_' . $i . '_' . $j];
            $newId = '(SELECT id FROM article_content WHERE article_id = ' . $id . ' AND type = ' . $elemType . ' AND sequence = ' . $i . ')';
            $sqlData2 = $sqlData2 . '(' . $newId . ',' . $j . ', \'' . $elemValue2 . '\'),';
        }
    }
    $sql1 = $sqlInfo1 . substr_replace($sqlData1, ';', -1);
    $sql2 = $sqlInfo2 . substr_replace($sqlData2, ';', -1);
    $sql = $sql1 . $sql2;
    $db->query($sql);
    header('Location: http://localhost/test/index.php');
}

sendData($db);