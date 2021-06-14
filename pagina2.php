<?php

    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $email = $_REQUEST['email'];
    $dia = $_REQUEST['dia'];
    $mensagem = $_REQUEST['mensagem'];




    echo 'Nome: ' . $nome;
    echo '<br>';
    echo 'Sobrenome: ' . $sobrenome;
    echo '<br>';
    echo 'E-mail: ' . $email;
    echo "<br>";
    echo 'Dia: ' . $dia;
    echo '<br>';
    echo 'Mensagem: ' . $mensagem;
?>