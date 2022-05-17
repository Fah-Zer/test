<?php

function actionView($db) {
    $sql = 'SELECT DISTINCT article_id FROM group_t;';
    $articleID = $db->query($sql);
    $sql = 'SELECT * FROM group_t;';
    $group = $db->query($sql);
    for ($i = 0; $i < count($articleID); $i++) {
        $item = $articleID[$i]['article_id'];
        echo '<h2>Article ID = ' . $item . '</h2>';
        echo '<div><h2>Groups</h2>';
        for ($j = 0; $j < count($group); $j++) {
            $elem = $group[$j];
            $elemArticleID = $elem['article_id'];
            if ($item === $elemArticleID) {
                $elemID = $elem['id'];
                $elemType = $elem['type'];
                $elemSequence = $elem['sequence'];
                $elemValue = $elem['value'];
                echo '<p style="margin-left: 20px;">ID = ' . $elemID . '</p>';
                echo '<p style="margin-left: 20px;">Sequence = ' . $elemSequence . '</p>';
                echo '<p style="margin-left: 20px;">Type = ' . $elemType . '</p>';
                echo '<p style="margin-left: 20px;">Value = ' . $elemValue . '</p>';
            }
        }
        echo '<a href="view.php?id=' . $item . '">Read all info</a>';
        echo '</div>';
    }    
}