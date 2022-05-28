<?php require_once('./functions/index.php'); ?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE; ?>">

    <?php getPartOnce(PUBLIC_DIR.'/parts/head.php'); ?>

    <body>
        <?php getPartOnce(PUBLIC_DIR.'/parts/header.php'); ?>

        <h1>投稿一覧ページです。</h1>
        <ul>
            <li><a href="./details/post/post1.php">投稿1</a></li>
            <li><a href="">投稿2</a></li>
        </ul>

        <?php getPartOnce(PUBLIC_DIR.'/parts/footer.php'); ?>
    </body>

</html>