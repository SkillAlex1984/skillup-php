<?php

include 'User.php';
function reqest ($select) {
    $pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root', '');
    $result = $pdo->query($select);
    while ($row = $result->fetchObject(User::class)) {
        var_dump($row);
    }
}
//Задача 1
$zadacha1 = 'SELECT o.order_id, u.name FROM users u JOIN orders o ON u.id = o.users_id
             WHERE o.status = 0 ORDER BY o.order_id';

//Задача 2
$zadacha2 = 'SELECT o.order_id, u.name FROM users u JOIN orders o ON u.id = o.users_id
             WHERE o.status = 0 ORDER BY o.order_id';
reqest ($zadacha1);
