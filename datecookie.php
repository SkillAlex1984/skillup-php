<?php

$time = strtotime('tomorrow');
$time = strtotime('+ 1 hour', $time);
//setcookie('age',mt_rand(1,70), time() + 3600); 1 час
//setcookie('age',mt_rand(1,70), time() + 3600*3); 3 час
//setcookie('age',mt_rand(1,70), time() + 3600*24); 1 день
//setcookie('age',mt_rand(1,70), time() + 3600*24*365); 1 год
//setcookie('age',mt_rand(1,70), $time); до конца текущего дня (до 00:00 следующего дня)

$data = strtotime('last day of december');
$data = strtotime('+ 1 hour', $data);
setcookie('age',mt_rand(1,70), $data); // до конца текущего года