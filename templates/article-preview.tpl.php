<li style="list-style-type: none;">
    <div class="card"><img class="card-img-top"
            src="<?= $article['image'] ?>">
        <h3 class="card-header"><?= $article['title'] ?></h3>
        <div class="card-body">
            <p class="card-text"><?= $article['summary'] ?></p>
            
            <form action="/article.php">
                <input name="id" type="hidden" value="<?= $article['id'] ?>" />
                <button type="submit" class="btn btn-primary">Read more…</button>
            </form>
            
        </div>
        <div class="card-footer">
        <!--
        <form action="category.php">
            <input type="hidden" name="categoryQuery" value="<?= $article['category'] ?>" >
            <button type="submit" class="btn btn-outline-success">test</button>

        </form>





        -->
    <a href="/category.php?category=<?= $article['category'] ?>">
         <span
            class="badge badge-secondary"><?= $article['category'] ?>
        </span>
    </a> 
    
    <small class="text-muted">Published on
                <?= $article['date'] ?></small></div>
    </div>
</li>
<!--
Votre input fonctionnera seulement si il se trouve dans une balise form
Donc soit vous avez une balise a avec un lien qui contient "mapage.php?cle=valeur"
Soit vous avez une balise form avec action="mapage.php" et un input en type hidden qui contient name="cle" et value="valeur"

-->
