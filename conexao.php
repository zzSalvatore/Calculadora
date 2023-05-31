<?php

// CONSTANTES PARA ARMAZENAMENTO DAS VARIAVÉIS DE CONEXÃO

session_start();


define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'calculator');
define('USER', 'root');
define('PASSWORD', '');
/*
$host = 'localhost';
$port = '3306';
$dbname = 'calculator';
$user = 'root';
$password = '';
*/
global $dsn;

try {
    // CONEXÃO COM O BANCO DE DADOS 
    //$dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);    
    $dsn = new PDO("mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
    //echo "Conectado a $dbname em $host com sucesso.";
} catch (PDOException $e) {
    echo 'A Conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
}


?>