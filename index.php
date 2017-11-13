<?php

include 'lib_home.php';
$user = [
    'email' => ''
    ];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = processRequest ($user);
    $errors = validateUser ($user);

    if (!$errors) {
        saveUser2($user);

        header('Location: /success_home.html');
        exit();
    }
}
include 'form_home.php';