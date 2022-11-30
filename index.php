<?php
require_once('class/User.class.php');

$user = new User('jkowalski', 'tajneHasło');
/*
if($user->register()) {
    echo "Zarejestrowano pomyślnie";
} else {
    echo "Błąd rejestracji użytkownika";
}
*/

if($user->login()) {
    echo "Zalogowano prawidłowo";
} else {
    echo "Nieprawidłowy login lub hasło";
}

?>