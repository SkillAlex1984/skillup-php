<?php
$data = time();
$time = strtotime('2017-11-20 23:12:07');
$time = strtotime('+2 day - 1', $time );
echo $data . '<br>';

echo date('d.m.Y H:i:s l', $data) . '<br>';
//echo date('d.m.Y H:i:s l', $time) . '<br>';
echo $time;
