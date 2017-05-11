<?php require('header.php') ?>

<h1>Изменить запись</h1>

<form action="?act=apply-edit-entry" method="POST" class="well">
    <input type="hidden" name="id" value="<?=$id?>" />
    <label>Автор</label>
    <input name="author" type="text" value="<?=$row['author']?>" />
    <label>Заголовок</label>
    <input name="header" type="text" value="<?=$row['header']?>" />
    <label>Содержание</label>
    <textarea name="content"><?=$row['content']?></textarea>
    <div style="padding-top: 10px;">
        <button type="submit" class="btn">
            Изменить
        </button>
    </div>
</form>

<?php require('footer.php') ?>