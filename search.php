<?php

include './data/articles.php';

$filteredArticles = filterArticlesByKeyword($_GET['query']);


?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>
    <ul style="padding-inline-start: 0px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1em;">

    <?php
        foreach ($filteredArticles as $article) {
            include './templates/article-preview.tpl.php';
        }
    ?>

    </ul>
</main>

<?php include './templates/footer.tpl.php'; ?>
