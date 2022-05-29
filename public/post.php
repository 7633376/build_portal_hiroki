<?php require_once('./functions/index.php'); ?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE; ?>">

    <?php getPartOnce('head'); ?>

    <body>
        <?php getPartOnce('header'); ?>

        <h1>投稿一覧ページです。</h1>
        <ul>
            <li><a href="./details/post/post1.php">投稿1</a></li>
            <li><a href="">投稿2</a></li>
        </ul>

        <?php getPartOnce('footer'); ?>
    </body>

</html>