<?php

if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["senha"]) && !empty($_POST["senha"])){

    require 'conexao.php';
    require 'Usuario.class.php';

    //Instanciando Objeto
    $user = new Usuario();
    
    $email = addslashes($_POST["email"]);
    $senha = addslashes($_POST["senha"]);

    // Executando o Método Login 
    if($user->login($email, $senha) == true){
        //Se Login feito com sucesso e se existir sessão do usuario
        if(isset($_SESSION["id_cliente"])){
            header("Location: index.php");
        }else{
            header("Location: login.html");
        } 
    }else{
        echo 'Erro ao realizar o login';
        //Senão redireciona para pag de login
        header("Location: login.html");    
    }


}else{

    header("Location: login.html");
}


/*
$query_string = "SELECT * FROM clientes WHERE email = '{$email_escape}' AND senha = '{$senha_escape}'";

$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$email);

$resultSet = $dsn->query($query_string);

while($row = $resultSet->fetch()){
    echo $row['id_cliente'] . "\t";
    echo $row['nome'] . "\t";
    echo $row['email'] . "\t";
    echo $row['data_nascimento'] . "\n";
}
die;


if($resultSet){
    echo "Login executado com sucesso";
}else{
    echo "Falha ao realizar login";
}

*/










/*

// Inicialize a sessão
session_start();
 
// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.html");
    exit;
}
 
// Incluir arquivo de configuração
include_once "conexao.php";
 
// Defina variáveis e inicialize com valores vazios
$email = $senha = "";
$email_err = $senha_err = $login_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifique se o nome de usuário está vazio
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor, insira seu email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Verifique se a senha está vazia
    if(empty(trim($_POST["senha"]))){
        $senha_err = "Por favor, insira sua senha.";
    } else{
        $senha = trim($_POST["senha"]);
    }
    
    // Validar credenciais
    if(empty($email) && empty($senha_err)){
        // Prepare uma declaração selecionada
        $sql = "SELECT id_cliente, email, senha FROM clientes WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_email = trim($_POST["email"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id_cliente = $row["id_cliente"];
                        $email = $row["email"];
                        $hashed_senha = $row["senha"];
                        if(password_verify($senha, $hashed_senha)){
                            // A senha está correta, então inicie uma nova sessão
                            session_start();
                            
                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_cliente"] = $id_cliente;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: index.html");
                        } else{
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else{
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
*/








?>
 


