<?php

include './data/articles.php';

?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php';


var_dump($_GET);
$filteredCategories = filterArticlesByCategory($_GET['category']);

?>



    <main>
    <ul style="padding-inline-start: 0px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1em;">

<?php 

        foreach ($filteredCategories as $article) {
       include './templates/article-preview.tpl.php';
        }
?>



    </ul>
</main>




<?php include './templates/footer.tpl.php'; ?>