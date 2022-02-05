<?php
    session_start();
    session_destroy();
    header('Location: index.php');
/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//remover indices do array de sessão
unset($_SESSION['x']);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


//destruir a variavel de sessão
session_destroy();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

?>