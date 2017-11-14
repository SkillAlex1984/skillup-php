<?php

include 'Worker.php';

$obj1 = new Worker();
$obj1->name = 'Иван';
$obj1->age = 25;
$obj1->salary = 1000;

$obj2 = new Worker();
$obj2->name = 'Вася';
$obj2->age = 26;
$obj2->salary = 2000;

echo $obj1->salary + $obj2->salary;

/*include 'User.php';
include 'PremiumUser.php';
$user = new PremiumUser('Tecn');


$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = $user->processRequest($_POST);
   // $user->processRequest($_POST);

    if (!$errors) {
        saveUser2($user);

        header('Location: /success.html');
        exit();
    }
}

include 'form.php';*/
