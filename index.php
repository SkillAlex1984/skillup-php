<?php
session_start();
 $error ='';
if (isset($_POST['email'])) {
    $_SESSION['user'] = $_POST['user'];
    header('Location: form2.php');
    exit();
}
else {
    $error = 'не верное имя пользователя';
    unset($_SESSION['email']);}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form method="post">
        <label>
            Введите email
            <input type="email" name="email">
        </label>
        <label>
            <input type="submit">
        </label>
    </form>



</body>
</html>