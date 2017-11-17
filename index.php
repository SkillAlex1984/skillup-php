<?php

require_once "SmartForm.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$form = new SmartForm();
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->textarea(['placeholder'=>'О вас', 'name'=>'about']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();
?>

</body>
</html>
