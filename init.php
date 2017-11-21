<?php

session_start();

if ( !isset($_SESSION['user']) && $_SERVER['PHP_SELF'] != '/login.php') {
    header(('Location: login.php'));
}

//echo 'perekl';