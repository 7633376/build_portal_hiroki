<?php require_once('./functions/index.php'); ?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE; ?>">

    <?php getPartOnce(PUBLIC_DIR.'/parts/head.php'); ?>

    <body>
        <?php getPartOnce(PUBLIC_DIR.'/parts/header.php'); ?>

        <h1>トップページです。</h1>

        <main>
            <section>
                <h2>投稿一覧</h2>
                <a href="./post.php">投稿一覧へ</a>
            </section>

            <section>
                <h2>お知らせ一覧</h2>
                <a href="./news.php">お知らせ一覧へ</a>
            </section>
        </main>

        <?php getPartOnce(PUBLIC_DIR.'/parts/footer.php'); ?>
    </body>

</html>