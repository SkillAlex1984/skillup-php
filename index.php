<?php
include 'init.php';

// установили setcookie('user', 'tester', time() + 3 * 3600);
// убрали
setcookie('user', '', time() - 3 * 3600);
//$_COOKIE['remember_me'] = 'some user';
?>

<a href="readcookie.php"> Узнать значение куки</a>
<a href="logout.php">EXIT</a>