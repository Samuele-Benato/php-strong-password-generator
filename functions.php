<?php

function generaPasswordCasuale($lunghezzaPassword)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $lunghezzaPassword; $i++) {
        $carattereCasuale = $caratteri[rand(0, strlen($caratteri) - 1)];
        $password .= $carattereCasuale;
    }

    return $password;
}

$passwordGenerata = '';

if (isset($_GET['characters'])) {

    $lunghezzaPassword = $_GET['characters'];
    if ($lunghezzaPassword >= 8 && $lunghezzaPassword <= 20) {
        $passwordGenerata = generaPasswordCasuale($lunghezzaPassword);
    } else {
        echo
            "<div class='container'>
            <div class='alert alert-success' role='alert'>
                Password non accettata!
            </div>
        </div>";
    }
}

?>