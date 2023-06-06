<?php include __DIR__ . '/../header.php'; ?>

<h1>
    <?= $article->getName() ?>
</h1>
<p>
    <?= $article->getText() ?>
</p>
<?php
$pattern = '~article/show/(\d+)~';
preg_match($pattern, $_GET['route'], $matches);
?>
<?php foreach ($comments as $comment): ?>
    <?php if ($comment->getArticleId() == $matches[1]): ?>
        <p>Комментарий:
            <?= $comment->getText() ?>
        </p>
    <?php endif; ?>
<?php endforeach; ?>
<a href="/framework/www/comments/<?= $article->getId() ?>">Редактировать комментарии</a>
<div style="text-align: center;">
    <h2>Добавить комментарий</h2>
    <form action="/framework/www/comments/add/<?= $article->getId() ?>" method="post">
        <label>Текст <input class="text__input" type="text" name="text" required></label>

        <br><br>

        <input type="submit" value="Добавить">
    </form>
</div>

<?php include __DIR__ . '/../footer.html'; ?>