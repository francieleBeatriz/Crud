<?php
    $dbname = 'cadastros';
    $host = 'localhost';
    $user = 'root';
    $password = '';

    //variavel que faz a conexao com o banco de dados
    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $password);
?>