<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Felhasználónév szükséges!');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email szükséges!');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Jelszó szükséges!');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'A jelszavak nem egyeznek!');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser) {
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email már foglalt!');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Email már foglalt!');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Felhasználónév szükséges!');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Jelszó szükséges!');
    }

    return $errors;
}