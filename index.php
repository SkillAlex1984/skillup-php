<?php

include 'Worker.php';
include 'Worker2.php';
include 'Worker3.php';

// Задача 1
$obj1 = new Worker();
$obj1->name = 'Иван';
$obj1->age = 25;
$obj1->salary = 1000;

$obj2 = new Worker();
$obj2->name = 'Вася';
$obj2->age = 26;
$obj2->salary = 2000;

echo 'Сумма зарплат Ивана и Васи из первой задачи ', $obj1->salary + $obj2->salary . '</br> ';

// Задача 2
$worker2 = new Worker2();
$worker2->setName('Иван');
$worker2->setAge(25);
$worker2->setSalary(1000);

$worker22 = new Worker2();
$worker22->setName('Вася');
$worker22->setAge(26);
$worker22->setSalary(2000);

echo 'Сумма зарплат Ивана и Васи из второй задачи ', $worker2->getSalary() + $worker22->getSalary() . '</br> ';
echo 'Сумма возрастов Ивана и Васи из второй задачи ', $worker2->getAge() + $worker22->getAge() . '</br> ';

// Задача 3

$worker22->setAge(300);
echo 'возраст не корректный - он не должен меняться ', $worker22->getAge() . '</br>';

// Задача 4

$worker4 = new Worker3('Dima', 1000);
$worker4->age = 25;
echo 'Произведение возраста и зарплаты ', $worker4->age * $worker4->getSalary();


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
