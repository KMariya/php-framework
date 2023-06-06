<?php include __DIR__ . '/../header.php'; ?>
<h1>
    <?= $article->getName() ?>
</h1>
<p>
    <?= $article->getText() ?>
</p>
<?php
$pattern = '~comments/(\d+)~';
preg_match($pattern, $_GET['route'], $matches);
?>
<?php foreach ($comments as $comment): ?>
    <?php if ($comment->getArticleId() == $matches[1]): ?>
        <p>
            Комментарий:
            <?= $comment->getText() ?>
        <form action="/framework/www/comments/edit/<?= $comment->getId(); ?>" method="post">
            <label><input class="text__input" type="text" name="text" value="<?= $comment->getText() ?>"></label>

            <a class="delete__btn" href="/framework/www/comments/delete/<?= $comment->getId(); ?>">Удалить</a>
            <br><br>

            <input   type="submit" value="Редактировать">
        </form>
        </p>
    <?php endif; ?>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.html'; ?>