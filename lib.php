<?php

define('USER_FILE', __DIR__ . '/user.txt');
function processRequest (array $user) {
    foreach ($user as $field => $value) {
        $user[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }
    return $user;
}

function validateUser (array $user) {
    $errors = [];
    if (!$user['confirm']) {
        $errors[] = 'Вы должны согласиться';
    }
    if (!$user['email']) {
        $errors[] = 'Введите почту ';
    }
    if ($user['phone'] && !is_numeric($user['phone'])) {
        $errors[] = 'Введите номер телефона только цыфры';
    }
    return $errors;
}

function saveUser (array $user){
    if (file_exists(USER_FILE)) {
        $existing_users = file_get_contents(USER_FILE);
    } else {
        $existing_users = '';
    }

    $user_info = implode("\t", $user);
    $existing_users .=$user_info . PHP_EOL;
    file_put_contents(USER_FILE, $existing_users);
}

function saveUser2 (array $user){
    $file = fopen(USER_FILE, 'a');
    $user_info = implode("\t", $user) . PHP_EOL;
    fputs($file,$user_info);
    fclose($file);
}