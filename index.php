<?php

$arr = ['Kolja'=>'200', 'Vasja'=>'300','Petja'=>'400'];
foreach ($arr as $key => $value) {
    echo $key . ' - ' . 'Zarplata ' .  $value . ' usd ' . PHP_EOL;
}

/* задача 4 $arr = ['green'=>'zelenij', 'red'=>'krasnij','blue'=>'goluboj'];
    foreach ($arr as $key => $value) {
        echo $key . '- ' . $value . PHP_EOL;
    }

/* задача 3 $a = [1, 2, 3, 4, 5];
$result = 0;
foreach ($a as $value) {
    $result +=$value * $value;
}
echo $result . PHP_EOL;


/* задача 2 $a = [1, 2, 3, 4, 5];
$result = 0;
foreach ($a as $value) {
    $result +=$value;
}
echo $result . PHP_EOL;

/* задача 1 $a = ['html', 'css', 'php', 'js', 'jq'];

foreach ($a as $value) {
    echo $value . PHP_EOL;
}

/*$a = [];
$a[1] = 'mon';
$a[2] = 'tue';
$a[3] = 'wen';
$a[4] = 'thu';

    foreach ($a as $key => $value) {
        //echo $key . ': ' . $value . PHP_EOL;
        echo $value . PHP_EOL;
    }
$a = 6;
$b = -5;

if ($a == 0) {
    echo 'a = 0';
} elseif ($a > 0) {
    echo 'a > 0';
} elseif ($a<0 && $b < 0) {
    echo '$a<0 && $b < 0'
} else {
    echo '$a<0 && $b < 0 '
}

switch (true) {
    case $a ==0:
        echo 'a > 0'; break;
defolt/////////
}

$a = [
    'mon' => 'pn',
    'tue' => 'vt',
];

if (!isset($a['wed'])) {
    echo ' not know' . PHP_EOL;
}
$h = null;

if (empty($h)) {
    echo 'yes!!!';
}

$a = [
    'boys' => ['Коля', 'VASJA', 'Петя'],
    'girls' => ['Даша', 'Маша', 'Лена'],
];

echo $a['boys'][1] . PHP_EOL;

$e = [];
$e[1] = 'pn';
$e[2] = 'vt';
$e[3] = 'sr';

print_r($e);
$d = ['pn' => '1',
      'vt' => '2',
      'sr' => '3',
      '4t' => '4',
      'pt' => '5',
      'sb' => '6',
      'vc' => '7'
    ];

echo $d['pt'] . PHP_EOL;
print_r($d);
//echo 'Hello, world!!!';
//$a = '    string     ';
//$b = sqrt(25);
//echo $a  . PHP_EOL;
//var_dump($a);
//echo $b . PHP_EOL;

/* <p> <?php echo 'Hello'; ?> </p>*/

//$c = ['pn', 'vt', 'sr', '4t', 'pt', 'sb', 'vc'];
//print_r($c);
//echo $c[2];

