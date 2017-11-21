<?php

$str = 'rgervr <w reg> erg rg  QW QF FWEF sender@s-ynevo.com.ua FSD  kjh ikhiu nin sen222der@synevo.com.ua 88998 b kb 33 kn 82 bkb ;m  23m 3 ';
$res = preg_match_all('/[\w-\.]{1,}@[-a-zA-Z0-9]+(\.\w+)+/', $str, $match);
echo $res ? 'Найдено ' : ' Не найдено';
var_dump($match);

$replaced = preg_replace('/(\.[\w-]+)+/', '.info', $str);
echo $replaced . '<br>';

$replaced = preg_replace('/<(.*?)>/', '($1)', $str);
echo $replaced;