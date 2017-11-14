<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>

<?php foreach ($errors as $error) { ?>
        <p class = 'error'><?= $error ?></p>
<?php } ?>

<form action = 'index.php' method="post">
    <label> Имя <input name = 'firstName' value="<?=$user ->firstName ?>"> </label>
    <label> Фамилия <input name = 'lastName' value='<?= $user->lastName?>'> </label>
    <label> Email <input type = 'email' name = 'email' value="<?=$user->email?>"> </label>
    <label> Телефон <input name = 'phone' value="<?= $user->phone?>"> </label>
    <label> <input type = 'checkbox' name = 'confirm' <?= $user->confirm ? 'checked' : '' ?>
        Я согласен с условиями сайта</label>
    <button type = "submit"> Заегистрироваться</button>

</form>
<p><a href="homework11.php">ВЫВЕСТИ БАЗУ НА ЭКРАН</a></p>
</body>
</html>