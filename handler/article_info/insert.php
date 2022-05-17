<?php
require_once '../../config/config.php';

function sendData($db) {
    $id = $_POST['id'];
    unset($_POST['id']);
    $sqlInfo1 = 'INSERT INTO group_t(article_id, type, value, sequence) VALUES ';
    $sqlInfo2 = 'INSERT INTO content(group_id, sequence, value) VALUES ';
    $sqlData1 = '';
    $sqlData2 = '';
    $sql = '';
    for($i = 0; $i < count($_POST); $i++) {
        $groupElement = $_POST['group_' . $i];
        $groupElementContent = $groupElement['content'];
        $groupElementTitle = $groupElement['info']['title'];
        $groupElementType = $groupElement['info']['type'];
        $sqlData1 = $sqlData1 . '(' . $id . ',' . $groupElementType . ',\'' . $groupElementTitle . '\',' . $i . '),';
        for($j = 0; $j < count($groupElementContent); $j++) {
            $contentElement = $groupElementContent[$j];
            $newId = '(SELECT id FROM group_t WHERE article_id = ' . $id . ' AND type = ' . $groupElementType . ' AND sequence = ' . $i . ')';
            $sqlData2 = $sqlData2 . '(' . $newId . ',' . $j . ', \'' . $contentElement . '\'),';
        }
    }
    $sql1 = $sqlInfo1 . substr_replace($sqlData1, ';', -1);
    $sql2 = $sqlInfo2 . substr_replace($sqlData2, ';', -1);
    $sql = $sql1 . $sql2;
    $db->query($sql);
    header('Location: http://localhost/test/index.php');
}

sendData($db);