<?php

include 'Worker.php';
include 'Worker2.php';
include 'Worker3.php';
include 'User5.php';
include 'Worker5.php';
include 'Student.php';
include 'Driver.php';



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
echo 'Произведение возраста и зарплаты ', $worker4->age * $worker4->getSalary() . '</br>';

// Задача 5
$worker5 = new Worker5();
$worker5->setName('Ivan');
$worker5->setAge(25);
$worker5->setSalary(1000);

$worker52 = new Worker5();
$worker52->setName('Vasja');
$worker52->setAge(26);
$worker52->setSalary(2000);

echo 'Задача 5 - сумма зарплат ', $worker5->getSalary() + $worker52->getSalary() . '</br>';

$student = new Student();
$student->setSch(20);
$student->setCurs(5);
$student->setName('Арнольд');
$student->setAge(60);

echo 'Задача 5 : Имя - ', $student->getName() . ' его Стипендия - ', $student->getSch() .
    ' Курс ', $student->getCurs() . '</br>';

// Задача 6
$driver = new Driver();
$driver->setDriverTime(12);
$driver->setCategory('A,B, C');
echo ' водительский стаж', $driver->getCategory() . ' категория вождения ', $driver->getDriverTime();

// Задача 7

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
