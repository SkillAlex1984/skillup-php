<?php

include 'Worker.php';
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root', '');
//$sql = 'SELECT * FROM workers WHERE id = 3';
$salary = 'SELECT * FROM workers WHERE salary = 500';
$result = $pdo->query($salary);

while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}
/*SELECT d.name department, (SELECT MAX(w.salary) FROM workers w WHERE w.department_id = d.id) max_salary
FROM departments AS d



/*
урок 16
SELECT d.name department,COUNT(w.id), GROUP_CONCAT(w.name SEPARATOR ', '), SUM(w.salary), MIN(w.salary)
FROM departments AS d JOIN workers AS w ON w.department_id = d.id
GROUP BY d.name
HAVING COUNT(w.id) > 2
ORDER BY d.name

SELECT d.name department, w.name
FROM departments AS d JOIN workers AS w ON w.department_id = d.id
WHERE w.salary=500;

SELECT d.name department
FROM departments AS d
WHERE d.id IN (SELECT w.department_id FROM workers w WHERE w.salary = 500)




SELECT *
FROM users
WHERE 1
ORDER BY email DESC
LIMIT
INSERT INTO users
  (email, firstName, lastName, password)
VALUES
  ('newemail@gmail.com', 'John', 'Doe', 'Password')

UPDATE users
SET password = 'new password'
WHERE id = 2

DELETE FROM users
WHERE id = 1*/