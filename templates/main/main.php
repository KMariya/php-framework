
<?php 
    include __DIR__.'/../header.php';

    foreach($articles as $article){
        echo '<h2><a href="article/show/'.$article->getId().'">'.$article->getName().'</a></h2>';
        echo '<p>'.$article->getText().'</p>';
        echo '<a href="article/delete/'.$article->getId().'" class="delete__btn">Удалить</a><hr>';

    }
    include __DIR__.'/../footer.html';
?>
    <!-- <a href="http://"></a> -->
            