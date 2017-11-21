<?php
$time = new DateTime('yesterday 14:00');

echo $time->format('d.m.Y H:i:s') . '<br>';

$newTime = $time->add(new DateInterval('P3DT5M'));
echo $newTime->format('d.m.Y H:i:s') . '<br>';

$birthdate = new DateTime('1984-02-14 16:00:00');
$age = $birthdate->diff(new DateTime());

echo $age->format('%Y года');