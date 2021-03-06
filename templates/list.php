<?php require('header.php') ?>

<style type="text/css">
    .comments {
        font-size: 0.8em;
        margin-bottom: 20px;
    }

    .date, .author {
        margin-right: 10px;
    }

    .content {
        padding-top: 5px;
        padding-left: 15px;
    }

    .entry {
        padding-left: 20px;
    }

    h1 {
        margin-bottom: 10px;
    }

    .pages {
        margin-bottom: 20px;
    }

    .content-textarea {
        height: 100px;
    }

</style>

<h1>Записи в моём блоге</h1>

<?php foreach ($records as $row): ?>

    <div class="entry">
        <h3>
            <a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['header']?></a>
            <?php if (IS_ADMIN): ?>
            <a href="?act=edit-entry&id=<?=$row['id']?>"><i class="icon-edit"></i></a>
            <a href="?act=delete-entry&id=<?=$row['id']?>"><i class="icon-trash"></i></a>
            <?php endif ?>
        </h3>
        <p class="content"><?=$row['content']?></p>
        <div class="comments">
            <span class="date"><?=$row['date']?></span>
            <span class="author"><?=$row['author']?></span>
            <a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['comments']?> комментариев</a>
        </div>
    </div>


<?php endforeach ?>


<div class="pages">
<strong>Страницы:</strong>
<?php for ($i = 1; $i <= $pages; $i++): ?>
    <?php if ($i == $page): ?><b><?=$i?></b>
    <?php else: ?><a href="?page=<?=$i?>"><?=$i?></a>
    <?php endif ?>

<?php endfor ?>
</div>

<?php if (IS_ADMIN): ?>
<h1>Добавить новую запись</h1>

<form action="?act=do-new-entry" method="POST" class="well">
    <label>Автор</label>
    <input name="author" type="text" />
    <label>Заголовок</label>
    <input name="header" type="text" />
    <label>Содержание</label>
    <textarea name="content" class="content-textarea"></textarea>
    <div style="padding-top: 10px;">
        <button type="submit" class="btn">
            Добавить 
        </button>
    </div>
</form>

<?php endif ?>

<?php require('footer.php') ?>