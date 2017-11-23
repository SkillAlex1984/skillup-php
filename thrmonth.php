<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма один</title>
</head>
<body>
        <form method="post">
            <label>
                Если Вы нажмете на эту кнопку - не покажем баннер в течении месяца.
                <input type="submit" value="Не показывать больше!" name="press">
            </label>
        </form>
    <?php
        if (empty($_COOKIE['thrm'])) {
            if (!empty($_POST)) {
                setcookie('thrm', '1', time() + 3600 * 24 * 30);
            }
        }
    ?>

</body>
</html>
