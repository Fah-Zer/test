<?php

function view() { ?>
    <form class="form" action="handler/article_info/insert.php" method="post">
        <input class="input title" type="text" name="1_title_0" placeholder="chapter title">
        <input class="input item" type="text" name="1_item_0_0" placeholder="chapter item">
        <input class="input item" type="text" name="1_item_0_1" placeholder="chapter item">
        <input class="input item" type="text" name="1_item_0_2" placeholder="chapter item">
        <input class="input title" type="text" name="3_title_1" placeholder="ordered list title">
        <input class="input item" type="text" name="3_item_1_0" placeholder="ordered list item">
        <input class="input item" type="text" name="3_item_1_1" placeholder="ordered list item">
        <input class="input item" type="text" name="3_item_1_2" placeholder="ordered list item">
        <input class="input item" type="text" name="3_item_1_3" placeholder="ordered list item">
        <input class="input item" type="text" name="3_item_1_4" placeholder="ordered list item">
        <input class="input title" type="text" name="2_title_2" placeholder="image title">
        <input class="input item" type="text" name="2_item_2_0" placeholder="image item">
        <input class="input item" type="text" name="2_item_2_1" placeholder="image item">
        <input class="input title" type="text" name="4_title_3" placeholder="unordered list title">
        <input class="input item" type="text" name="4_item_3_0" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_3_1" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_3_2" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_3_3" placeholder="unordered list item">
        <input class="input title" type="text" name="4_title_4" placeholder="unordered list title">
        <input class="input item" type="text" name="4_item_4_0" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_4_1" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_4_2" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_4_3" placeholder="unordered list item">
        <input class="input item" type="text" name="4_item_4_4" placeholder="unordered list item">
        <input class="hidden" type="text" name="info" value="1.3_3.5_2.2_4.4_4.5">
        <input class="hidden" type="text" name="id" value="1">

        <input type="submit" value="Run">
    </form>
<?php }