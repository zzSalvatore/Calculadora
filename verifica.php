<?php

require 'conexao.php';

if(isset($_SESSION['id_cliente']) && !empty($_SESSION['id_cliente'])){

    require_once 'Usuario.class.php';
    $user = new Usuario();

    $listLogged = $user->logged($_SESSION['id_cliente']);

    $nomeUser = $listLogged['nome'];
}else{
    header("Location: login.html");
}


?>