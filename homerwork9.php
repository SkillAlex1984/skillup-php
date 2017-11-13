<?php
//задача 1
$arrZadach1 = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arrZadach1 as $valueZadach1) {
    echo $valueZadach1 . PHP_EOL;
}
//задача 2
$aZadach2 = [1, 2, 3, 4, 5];
$resultZadach2 = 0;
foreach ($aZadach2 as $valueZadach2) {
    $resultZadach2 +=$valueZadach2;
}
echo $resultZadach2 . PHP_EOL;
// задача 3
$aZadach3 = [1, 2, 3, 4, 5];
$resultZadach3 = 0;
foreach ($aZadach3 as $valueZadach3) {
    $resultZadach3 +=$valueZadach3 * $valueZadach3;
}
echo $resultZadach3 . PHP_EOL;
// задача 4
$arrZadach4 = ['green'=>'zelenij', 'red'=>'krasnij','blue'=>'goluboj'];
foreach ($arrZadach4 as $keyZadach4 => $valueZadach4) {
    echo $keyZadach4 . '- ' . $valueZadach4 . PHP_EOL;
}
// задача 5
$arrZadach5 = ['Kolja'=>'200', 'Vasja'=>'300','Petja'=>'400'];
foreach ($arrZadach5 as $keyZadach5 => $valueZadach5) {
    echo $keyZadach5 . ' - ' . 'Zarplata ' .  $valueZadach5 . ' usd ' . PHP_EOL;
}
// задача 6
for ($i=1; $i<=100; $i++){
    echo $i . PHP_EOL;
}
// задача 7
for ($i=11; $i<=33; $i++){
    echo $i . PHP_EOL;
}
// задача 8
for ($i=0; $i<101; $i++) {
    if ($i%2==0) {
        echo $i.PHP_EOL;
    }
}
// задача 9
$rezZadacha9 = 0;
for ($i=1; $i<=100; $i++){
    $rezZadacha9 += $i;
}
echo $rezZadacha9. PHP_EOL;
// задача 10
$arrZadacha10 = [2, 5, 9, 15, 0, 4];
foreach ($arrZadacha10 as $elem) {
    if ($elem > 3 && $elem < 10) {
        echo $elem . PHP_EOL;
    }
}
// задача 11
$sumZadacha11 = 0;
$arrZadacha11 = [-9, 8, 7, -6, 0, 3, 4];
foreach ($arrZadacha11 as $elem) {
    if ($elem > 0) {
        $sumZadacha11 += $elem;
    }
}
echo 'Задача 11 - ' . $sumZadacha11 . PHP_EOL;
// задача 12
$sumZadacha12 = 0;
$arrZadacha12 = [1, 2, 5, 9, 4, 13, 10];
foreach ($arrZadacha12 as $elem) {
    if ($elem === 4) {
        echo 'Есть!' . PHP_EOL;
        break;
    }
}
// задача 13
$arrZadacha13 = ['10', '20', '30', '50', '235', '3000'];
foreach ($arrZadacha13 as $elem) {
    if ($elem[0] == '1' || $elem[0] == '2' || $elem[0] == '5') {
        echo $elem . PHP_EOL;
    }
}
// задача 14
$arrZadacha14 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$rezStr14 = '-';
foreach ($arrZadacha14 as $elem) {
    $rezStr14 .= $elem .= '-';
}
echo $rezStr14 . PHP_EOL;
// задача 15
$arrZadacha15 = ['Mon','Tue', 'Wen', 'Thu', 'Fri', 'Sat', 'San',];
foreach ($arrZadacha15 as $key => $elem) {
    if ($key === 5 || $key ===6) {
        echo '<strong>' . $elem . '</strong>' . PHP_EOL;
    } else {echo $elem . PHP_EOL;}
}
// задача 16
$arrZadacha16 = ['Mon','Tue', 'Wen', 'Thu', 'Fri', 'Sat', 'San',];
$day = 6;
foreach ($arrZadacha16 as $key => $elem) {
    if ($key === $day) {
        echo '<i>' . $elem . '</i>' . PHP_EOL;
    } else {echo $elem . PHP_EOL;}
}
// задача 17
$arrZadacha17 = [];
$i = 1;
while ($i < 101) {
    $arrZadacha17[$i] = $i;
    $i++;
}
var_dump($arrZadacha17);
// задача 18
$arrZadacha18 = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$ru  = [];
$iZadach18 = 1;
foreach ($arrZadacha18 as $key => $value) {
    $en[$iZadach18] = $key;
    $ru[$iZadach18] = $value;
    $iZadach18++;
}
var_dump($en);
var_dump($ru);
// задача 19 while
$numWhile=1000;
$iterac = 0;
while ($numWhile > 50) {
    $numWhile = $numWhile / 2;
    $iterac++;
}
echo 'Кол-во итераций - ' . $iterac . ' ' . 'Число - ' . $numWhile . PHP_EOL;
// задача 19 for
$numFor = 1000;
for ($i = 1; $i < $numFor; $i++){
    $numFor = $numFor / 2;
    if ($numFor < 50) {
        echo 'Кол-во итераций - ' . $i . ' ' . 'Число - ' . $numFor;
        break;
    }
}