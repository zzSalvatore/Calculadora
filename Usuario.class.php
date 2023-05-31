<?php

Class Usuario{

    public function login($email, $senha){
        global $dsn;

        $sql = "SELECT * FROM clientes WHERE email = :email AND senha = :senha";
        $sql = $dsn->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        // Validando se os dados existem
        if($sql->rowCount() > 0){
            // Acessa o dado e grava na variavel row
            $row = $sql->fetch();

            // Inicia uma sessão utilizando o id do cliente
            $_SESSION['id_cliente'] = $row['id_cliente'];

            return true;
        }else{
            return false;
        }
    
    }

    public function logged($id_cliente){
        global $dsn;    
        
        $array = array();

        $sql = "SELECT nome FROM clientes WHERE id_cliente = :id_cliente";
        $sql = $dsn->prepare($sql);
        $sql->bindValue('id_cliente', $id_cliente);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;


    }






}


?>