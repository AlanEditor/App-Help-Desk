<?php

    session_start();

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $texto = $_SESSION['id'] . ' | ' . $titulo . ' | ' . $categoria . ' | ' . $descricao . PHP_EOL;

    $arquivo = fopen('../private/arquivo.txt', 'a'); //abre o arquivo - 'a' é o parametro para abrir

    fwrite($arquivo, $texto); //escrevendo no arquivo
    fclose($arquivo); //fechando o arquivo

    header('Location: abrir_chamado.php');

?>