<?php
session_start();

if ( isset($_SESSION['user']) && $_SERVER['PHP_SELF'] != '/form2.php') {
    header(('Location: form2.php'));
}