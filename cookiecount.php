<?php

if (!isset($_COOKIE['count'])) {
    $_COOKIE['count'] = 0;
    }

$_COOKIE['count']++;
setcookie('count', $_COOKIE['count']);
echo "Вы посетили наш сайт - " . $_COOKIE['count'] . ' раз!';
?>