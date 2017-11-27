<?php

include 'Worker.php';
function reqest ($select) {
    $pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root', '');
    $result = $pdo->query($select);
    while ($row = $result->fetchObject(Worker::class)) {
        var_dump($row);
    }
}

$zadacha1 = 'SELECT * FROM workers WHERE id = 3';
$zadacha2 = 'SELECT * FROM workers WHERE salary = 1000';
$zadacha3 = 'SELECT * FROM workers WHERE age = 23';
$zadacha4 = 'SELECT * FROM workers WHERE salary > 400';
$zadacha5 = 'SELECT * FROM workers WHERE salary >= 500';
$zadacha6 = 'SELECT * FROM workers WHERE salary != 500';
$zadacha7 = 'SELECT * FROM workers WHERE salary <= 900';
$zadacha8 = "SELECT salary, age FROM workers WHERE name = 'Вася'";
$zadacha9 = "SELECT * FROM workers WHERE age > 25 AND age <= 28";
$zadacha10 = "SELECT * FROM workers WHERE name = 'Петя'";
$zadacha11 = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";
$zadacha12 = "SELECT * FROM workers WHERE name != 'Петя'";
$zadacha13 = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
$zadacha14 = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000";
$zadacha15 = "SELECT * FROM workers WHERE (age > 23 AND age < 27) OR
              (salary > 400 AND salary < 1000)";
$zadacha16 = "SELECT * FROM workers WHERE age = 27 OR salary != 400";
$zadacha17 = "INSERT INTO workers SET name = 'Никита', age = 26, salary = 300";
$zadacha18 = "INSERT INTO workers (name, age, salary) VALUES  ('Светлана', 25, 1200)";
$zadacha19 = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), ('Петр', 31, 1000)";
$zadacha20 = "DELETE FROM workers WHERE id = 7";
$zadacha21 = "DELETE FROM workers WHERE name = 'Коля'";
$zadacha22 = "DELETE FROM workers WHERE age = 23";
// по условию возвращаю таблицу в исходный вид
$return = "INSERT INTO workers (id, name, age, salary)
VALUES (1, 'Дима', 23, 400), (3, 'Вася', 23, 500), (7, 'Никита', 26, 300)";

$zadacha23 = "UPDATE workers SET salary = 200 WHERE name = 'Вася'";
$zadacha24 = "UPDATE workers SET age = 35 WHERE id = 5";
$zadacha25 = "UPDATE workers SET salary = 700 WHERE salary = 500";
$zadacha26 = "UPDATE workers SET age = 23 WHERE id > 2 AND id <=5";
$zadacha27 = "UPDATE workers SET name = 'Женя', salary = 900 WHERE name = 'Вася'";
// в функцию подставляем любую задачу и выводит ответ
reqest($zadacha1);
