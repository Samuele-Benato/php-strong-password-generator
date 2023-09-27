<?php
$password_characters = $_GET['characters'];

function generaPasswordCasuale($lunghezza)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $carattereCasuale = $caratteri[rand(0, strlen($caratteri) - 1)];
        $password .= $carattereCasuale;
    }

    return ($password);
}

if (isset($password_characters)) {
    $passwordGenerata = '';
    $lunghezzaPassword = $password_characters;

    $passwordGenerata = generaPasswordCasuale($lunghezzaPassword);
}

?>