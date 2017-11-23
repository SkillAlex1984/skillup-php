<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма один</title>
</head>
<body>
    <h1>Форма один</h1>
        <form method="post">
            <label>
                <input type="email" name="useremail">
            </label>
            <label>
                <input type="submit" value="Сохранить email">
            </label>
        </form>
    <?php
    if (isset($_POST['useremail'])) {
        session_start();
        $_SESSION['useremail'] = $_POST['useremail'];
    }
    ?>
    <a href="form2.php">Перейти на форму два</a>
</body>
</html>
