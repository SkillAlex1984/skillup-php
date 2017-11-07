<?php

//Работа с % задача 1
$a = 17;
$b = 3;
$rez = $a%$b;
echo $rez . '</br>';
// задача 2

$aZ2 = 12;
$bZ2 = 2;
$rezZ2 = $aZ2 % $bZ2 ;

if ($rezZ2 > 0) {
    echo 'не делится';
} else {
    echo 'делится' . $rezZ2;
}

// задача 3 Работа со степенью и корнем
// задача 27
$date = 'html css php';
$arr = explode(' ', 'html css php');
var_dump($arr);
// задача 14
$arrZ14 = [1, 2, 3, 4, 5];
array_splice($arrZ14, 1, 2);
var_dump($arrZ14);
// задача 15
$arrZadach15 = [1, 2, 3, 4, 5];
$rezArr = [];
$rezArr = array_splice($arrZadach15, 1, 3);
var_dump($rezArr);
// задача 1 Практика на комбинации функций
$arrPractic = [1, 2, 3, 4, 5];
$kol = count($arrPractic);
$sum = array_sum($arrPractic);
echo $sum / $kol;
// задача 2 Практика на комбинации функций
$arrZad2 = range(1, 100);
$rezZ2 = array_sum($arrZad2);
var_dump($rezZ2);
// задача 3 Практика на комбинации функций
$arrZad3 = range(1, 100);
$strZad3 = implode('</br>', $arrZad3);
echo $strZad3;
// задача 4 Практика на комбинации функций
$arrZad4 = array_fill(0, 10, 'x');
var_dump($arrZad4);
// задача 5 Практика на комбинации функций
$arrZad5 = array_fill(0, 10, shuffle.mt_rand(1, 10));
var_dump($arrZad5);


/*$arr = ['Kolja'=>'8888888888', 'Vasja'=>'300','Petja'=>'400'];
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

