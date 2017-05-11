<?php require('header.php') ?>

<form action="?act=do-login" method="POST" class="well">
   <div align="center"><h2>Авторизация на сайте</h2>
    <label>Введите логин</label>
    <input name="login" type="text" />
    <label>Введите пароль</label>
    <input name="password" type="password" />
    <div style="padding-top: 10px;">
    <button type="submit" class="btn">
        Войти
    </button>
    </div>
</form>

<?php require('footer.php') ?>