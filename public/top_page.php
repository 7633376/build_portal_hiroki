<?php require_once('./functions/index.php'); ?>

<?php getPartOnce('header'); ?>

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

<?php getPartOnce('footer'); ?>
