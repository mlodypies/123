
<?php
require_once('config.php');
 
    if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
    //jezeli juz podano dane do logowania

    $user = new User($_REQUEST['login'], $_REQUEST['password']);
    if($user->login()) {
       //echo "Zalogowano prawidłowo użytkownika: ".$user->getName();
       $v = array(
            'message' => "Zalogowano prawidłowo użytkownika: ".$user->getName(),
       );
       $twig->display('message.html.twig', $v);
    } else {
       //echo ";
       $twig->display('message.html.twig', 
                         ['message' => "Nieprawidłowy login lub hasło"]);
    }
 } else {
     //jesli jeszcze nie podano danych
     //wyswietl formularz danych
     $twig->display('login.html.twig');
 }
 ?>   
