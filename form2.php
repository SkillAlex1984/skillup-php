<?php
session_start();

if(isset($_SESSION['useremail'])) {
    $email = $_SESSION['useremail'];
} else {
        $email = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма два</title>
    <style>
        label {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Форма два</h1>
    <form action="" method="post">
        <label>
            Имя
            <input type="text" name="firstname">
        </label>
        <label>
            Фамилия
            <input type="text" name="lastname">
        </label>
        <label>
            Пароль
            <input type="password" name="pass">
        </label>
        <label>
            Email
            <input type="text" name="useremail" value="<?php echo $email ?>">
        </label>
    </form>
    <a href="index.php">Вернуться на первую форму</a>
</body>
</html>
