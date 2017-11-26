<?php
$zadach2 = 'aba aca aea abba adca abea';
$rez = preg_replace('/a..a/', '*', $zadach2);
echo $rez . '</br>';
// задача 5
$zadach5 = 'aa aba abba abbba abca abea';
$rez5 = preg_replace('/ab*a/', '*', $zadach5);
echo $rez5. '</br>';
// задача 9
$zadach9 = '2+3 223 2223';
$rez9 = preg_replace('/2\+3/', '*', $zadach9);
echo $rez9. '</br>';
// задача 14
$zadach14 = 'aba accca azzza wwwwa';
$rez14 = preg_replace('/a.+?a/', '*', $zadach14);
echo $rez14. '</br>';
// задача 5 из второй части
$zadach5_2 = 'a1a a22a a333a a4444a a55555a aba aca';
$rez5_2 = preg_replace('/a\d*a/', '*', $zadach5_2);
echo $rez5_2 . '</br>';
// задача 8 из второй части
$zadach8 = 'ave a#b a2b a$b a4b a5b a-b acb';
$rez8 = preg_replace('/a\Wb/', '*', $zadach8);
echo $rez8 . '</br>';
// задача 19 из второй части
$zadach19 = 'aAXa aeffa aGha aza ax23a a3sSa';
$rez19 = preg_replace('/a[a-zA-Z]+a/', '*', $zadach19);
echo $rez19 . '</br>';


