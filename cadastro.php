<?php

include_once('conexao.php');

// SQL PARA INSERÇÃO DE DADOS

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$data_nascimento = $_POST['data_nascimento'];
$data_cadastro = date('Y-m-d');

$stmt = $dsn->prepare("INSERT INTO clientes (nome, email, senha, data_nascimento, data_cadastro) VALUES (?, ?, ?, ?, ?)");

$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$senha);
$stmt->bindParam(4,$data_nascimento);
$stmt->bindParam(5,$data_cadastro);
$stmt->execute();

// TESTE DE VERIFICAÇÃO DE INSERÇÃO DE DADOS
if($stmt){
    echo "<h6>Os dados foram inseridos com sucesso.</h6> \n\n";
    include "./cadastro.html"; 
}else{
    echo "Ocorreu um erro e não foi possivel inserir os dados.";
    exit;
}
die;



?>
