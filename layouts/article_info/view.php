<?php

function generateElement($groupElementId, $content) {
    echo '<div style="padding-left: 10px">';
    for($j = 0; $j < count($content); $j++) {
        $contentElement = $content[$j];
        $contentElementId = $contentElement['group_id'];
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
        echo '<h3>' . $groupElementValue . '</h3>';
        generateElement($groupElementId, $content);
    }
    echo '</div>';
}

function actionView($db, $id) {
    $sql = 'SELECT id, type, value, sequence FROM group_t where article_id = ' . $id . ';';
    $group = $db->query($sql);
    $sql = 'SELECT * FROM content WHERE group_id IN
    (SELECT group_id FROM group_t where article_id = ' . $id . ')';
    $content = $db->query($sql);
    generateGroup($group, $content);
}