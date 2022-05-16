<?php

/*
USE test_db; SELECT * FROM article_content where article_id = 1; SELECT * FROM content WHERE id IN
(SELECT id FROM article_content where article_id = 1);
*/

function generateElement($groupElementId, $content) {
    echo '<div style="padding-left: 10px"><h3>Elements</h3>';
    for($j = 0; $j < count($content); $j++) {
        $contentElement = $content[$j];
        $contentElementId = $contentElement['id'];
        if ($groupElementId === $contentElementId) {
            $contentElementValue = $contentElement['value'];
            echo '<p>' . $contentElementValue . '</p>';
        }
    }
    echo '</div>';
}

function generateGroup($group, $content) {
    echo '<div style="padding-left: 5px"><h2>Groups</h2>';
    for($i = 0; $i < count($group); $i++) {
        $groupElement = $group[$i];
        $groupElementId = $groupElement['id'];
        $groupElementValue = $groupElement['value'];
        echo '<p>' . $groupElementValue . '</p>';
        generateElement($groupElementId, $content);
    }
    echo '</div>';
}

function actionView($db) {
    $sql = 'SELECT id, type, value, sequence FROM article_content where article_id = 1;';
    $group = $db->query($sql);
    $sql = 'SELECT * FROM content WHERE id IN
    (SELECT id FROM article_content where article_id = 1)';
    $content = $db->query($sql);
    generateGroup($group, $content);
}