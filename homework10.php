<?php
// задача 1 Практика на комбинации функций
$arrPractic = [1, 2, 3, 4, 5];
$kol = count($arrPractic);
$sum = array_sum($arrPractic);
echo $sum / $kol . '</br>';
// задача 2 Практика на комбинации функций
$arrZad2 = range(1, 100);
$rezZ2 = array_sum($arrZad2);
var_dump($rezZ2 );
echo '</br>';
// задача 3 Практика на комбинации функций
$arrZad3 = range(1, 100);
$strZad3 = implode('</br>', $arrZad3);
echo $strZad3  . '</br>';
// задача 4 Практика на комбинации функций
$arrZad4 = array_fill(0, 10, 'x');
print_r($arrZad4);
echo '</br>';
// задача 5 Практика на комбинации функций
$arrZad5 = range(1, 10);
shuffle($arrZad5);
var_dump($arrZad5);
echo '</br>';
// задача 6 Практика на комбинации функций
$zadNum = 7;
$arrZad6 = range(1, $zadNum);
$rezZadach6 = array_product($arrZad6);
print_r($rezZadach6);
echo '</br>';
// задача 7 Практика на комбинации функций
$numZadacha7 = 10000015;
$arrZadacha7 = str_split($numZadacha7, 1);
$rezZadach7 = array_sum($arrZadacha7);
echo $rezZadach7 . '</br>';
// задача 8 Практика на комбинации функций
$strZadach8 = 'taCK NUMBER EIght';
$strZadach8 = strtolower($strZadach8);
$strZadach8 = strrev($strZadach8);
$strZadach8 = ucfirst($strZadach8);
$strZadach8 = strrev($strZadach8);
echo $strZadach8 . "</br>";
// задача 9 Практика на комбинации функций
$arrZadacha9 = [4, 9, 16, 33];
$resArray = array_map('sqrt', $arrZadacha9);
var_dump($resArray);
echo "</br>";
// задача 10 Практика на комбинации функций
$arrNum = range(1, 26);
$arrLetter = range('a', 'z');
$arrZadacha10 = array_combine($arrLetter, $arrNum);
var_dump($arrZadacha10);
echo "</br>";
// задача 11 Практика на комбинации функций
$strZadach11 = '1234567890';
$arrZadacha11 = str_split($strZadach11, 2);
$sumZadacha11 = array_sum($arrZadacha11);
echo $sumZadacha11;