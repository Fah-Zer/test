<?php

function actionView() { ?>
    <form class="form" action="handler/article_info/insert.php" method="post">
        <input class="input title" type="text" name="id" placeholder="article id">
        <input class="input title" type="text" name="group_0[info][title]" placeholder="chapter title">
        <input class="hidden" type="text" name="group_0[info][type]" value="1">
        <input class="input item" type="text" name="group_0[content][]" placeholder="paragraph">
        <input class="input item" type="text" name="group_0[content][]" placeholder="paragraph">
        <input class="input item" type="text" name="group_0[content][]" placeholder="paragraph">
        <input class="input title" type="text" name="group_1[info][title]" placeholder="ordered list title">
        <input class="hidden" type="text" name="group_1[info][type]" value="3">
        <input class="input item" type="text" name="group_1[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_1[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_1[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_1[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_1[content][]" placeholder="list item">
        <input class="input title" type="text" name="group_2[info][title]" placeholder="image group title">
        <input class="hidden" type="text" name="group_2[info][type]" value="2">
        <input class="input item" type="text" name="group_2[content][]" placeholder="image">
        <input class="input item" type="text" name="group_2[content][]" placeholder="image">
        <input class="input title" type="text" name="group_3[info][title]" placeholder="unordered list title">
        <input class="hidden" type="text" name="group_3[info][type]" value="4">
        <input class="input item" type="text" name="group_3[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_3[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_3[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_3[content][]" placeholder="list item">
        <input class="input title" type="text" name="group_4[info][title]" placeholder="unordered list title">
        <input class="hidden" type="text" name="group_4[info][type]" value="4">
        <input class="input item" type="text" name="group_4[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_4[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_4[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_4[content][]" placeholder="list item">
        <input class="input item" type="text" name="group_4[content][]" placeholder="list item">

        <input type="submit" value="Run">
    </form>
<?php }