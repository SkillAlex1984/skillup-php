<?php

include 'Worker.php';


$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root', '');
//$sql = 'SELECT * FROM workers WHERE id = 3';
$salary = 'SELECT * FROM workers WHERE salary = 500';
//$result = $pdo->query($salary); это простой вариант
$result = $pdo->prepare($salary);  // это подготовленый
$result->execute(['salary' => 500]); // запрос

while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}
